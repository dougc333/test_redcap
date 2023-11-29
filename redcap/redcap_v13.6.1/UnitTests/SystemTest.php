<?php
use PHPUnit\Framework\TestCase;

class SystemTest extends TestCase
{
    /**
     * This test covers all the specific cases, while 
     * DBFunctionsTest::test_db_query_checkQuery() makes sure
     * db_query() actually calls checkQuery().
     */
    function testCheckQuery(){
        $assert = function($queryAllowed, $sql) use (&$assert){
            ob_start();
            try{
                System::checkQuery($sql);
                $actual = true;
            }
            catch(\Exception $e){
                $this->assertStringContainsString(System::UNLIMITED_DELETE_OR_UPDATE_MESSAGE, $e->getMessage());
                $actual = false;
            }
            finally{
                $output = ob_get_clean();
            }

            $this->assertSame($actual, $queryAllowed);

            if($queryAllowed){
                $this->assertSame('', $output);
            }
            else{
                $this->assertTrue(str_contains($output, "SQL - $sql"));
            }

            if(!preg_match("/[A-Z]/", $sql)){
                $sql = strtoupper($sql);

                // Make sure case doesn't matter
                $assert($queryAllowed, $sql);

                if($queryAllowed && str_contains($sql, 'PROJECT_ID')){
                    // Check both cases of event ID
                    $assert(true, str_replace('PROJECT_ID', 'EVENT_ID', $sql));
                    $assert(true, str_replace('PROJECT_ID', 'event_id', $sql));
    
                    // Assert that the query would have failed if project or event ID was not specified
                    $assert(false, str_replace('PROJECT_ID', 'some_other_column', $sql));
                }
            }
        };

        // Match deletes but not selects
        $assert(false, "delete from redcap_data");
        $assert(true, "select * from redcap_data");

        // Only the redcap_data table
        $assert(true, "delete from redcap_data_access_groups");
        $assert(true, "delete from some_other_table_that_starts_with_redcap_data");
        $assert(true, "delete from \$redcap_data");
        $assert(true, "delete from redcap_data\$");

        // Different ways to specify the table
        $assert(false, "delete from some_schema.redcap_data");
        $assert(false, "delete d from redcap_data d");
        $assert(false, "delete d from other_table o,redcap_data d");
        $assert(false, "delete d from redcap_data d,other_table o");
        $assert(false, "delete d from other_table o,schema.redcap_data d");
        $assert(false, "delete d from schema.redcap_data d,other_table o");

        // Different usages of whitespace
        $assert(false, "delete\n\nfrom\n\nredcap_data");
        $assert(false, "delete\tfrom\tredcap_data");
        $assert(false, " \n\tdelete from redcap_data \n\t");

        // Specifying a project ID should allow the query
        // Remember that the $assert function internally checks event IDs, and a couple of other things
        $assert(true, "delete from redcap_data where project_id = 1");
        $assert(true, "delete from redcap_data where (project_id = 1)");
        $assert(true, "delete from redcap_data where (1 = project_id)");
        $assert(true, "delete from redcap_data where 1 = project_id");
        $assert(true, "delete from redcap_data where project_id=1");
        $assert(true, "delete from redcap_data where project_id in (1,2)");
        $assert(true, "delete from redcap_data where project_id = 1 and some other clauses");
        $assert(true, "delete from redcap_data where some other clauses or project_id = 1");
        $assert(true, "delete from redcap_data d where d.project_id = 1");

        // Test project/event column prefix
        $assert(false, "delete from redcap_data join whatever where 1project_id = 1");
        $assert(false, "delete from redcap_data join whatever where aproject_id = 1");
        $assert(false, "delete from redcap_data join whatever where \$project_id = 1");
        $assert(false, "delete from redcap_data join whatever where a_project_id = 1");

        // Test project/event column suffix
        $assert(false, "delete from redcap_data join whatever where project_id1 = 1");
        $assert(false, "delete from redcap_data join whatever where project_ida = 1");
        $assert(false, "delete from redcap_data join whatever where project_id\$ = 1");
        $assert(false, "delete from redcap_data join whatever where project_id_a = 1");

        // These apply to deletes for other tables, but I think it might still be behavior we want.
        $assert(false, "delete from some_other_table where whatever in (select whatever from redcap_data)");
        $assert(true, "delete from some_other_table where whatever in (select whatever from redcap_data where project_id = 1)");

        // Make sure joins without a 'where' clause are allowed
        $assert(true, 'delete from table_a a join table_b on project_id = 1 join redcap_data');

        // Make sure we don't match queries that have SQL deletes in string values
        $assert(true, 'select * from redcap_data join b on value like "% delete from redcap_data %"');

        // Ensure text inside SQL strings is NOT matched
        $assert(true, "delete from some_table where value like '% redcap_data %'");
        $assert(false, "delete from redcap_data where value like '% project_id %'");

        // Make sure text after an escaped quote is NOT parsed as SQL
        $assert(false, "delete from redcap_data where value like '\' project_id'");

        // Make sure SQL after escaped characters is considered
        $assert(true, "delete from redcap_data where value like '\'' and project_id = 1");
        $assert(true, "delete from redcap_data where value like '\\\\' and project_id = 1");

        /**
         * Not an actual use case (unless MySQL adds new query types), but Mark wanted to
         * play it safe and assert that white space after 'delete' was matched.
         */
        $assert(true, 'delete_other from redcap_data');

        // Update queries
        $assert(false, 'update redcap_data set value = "whatever"');
        $assert(true, 'update redcap_data set value = "whatever" where project_id = 1');        
    }

    function testClearQuotedSubStrings(){
        $assert = function($before, $after){
            $this->assertSame($after, System::clearQuotedSubStrings($before));

            $swapQuotes = function($s){
                $placeholder = 'testClearQuotedSubStrings() quote placeholder';

                $s = str_replace('"', $placeholder, $s);
                $s = str_replace("'", '"', $s);
                $s = str_replace($placeholder, "'", $s);

                return $s;
            };

            $before = $swapQuotes($before);
            $after = $swapQuotes($after);

            $this->assertSame($after, System::clearQuotedSubStrings($before));
        };

        $assert('a"b"c', 'a""c');
        $assert('a"b"', 'a""');
        $assert('"b"c', '""c');
        $assert('a"b\"c"d', 'a""d');
        $assert('a"b\"\\"\"c"d', 'a""d');
        $assert('a "b \"" c "11\"22\"33" e', 'a "" c "" e');
        $assert('a"b"c\'d\'e', 'a""c\'\'e');
        $assert('a"\""b', 'a""b');
        $assert('a"\\\\"b', 'a""b');
        $assert('a\"b"c', 'a\""c');
    }

    function testPseudoInsertQueryParameters(){
        $this->assertSame(
            System::pseudoInsertQueryParameters(
                "select * from redcap_data d where value in (?, ?, ?, ?, ?)",
                [true, 1, 2.2, "string with 'quotes'", null]
            ),
            "select * from redcap_data d where value in (1, 1, 2.2, 'string with \'quotes\'', NULL)"
        );
    }

    public function testStripTags2()
    {
        $input = "<p>This is a <strong>test</strong> string with <a href='https://www.example.com'>a link</a> and &nbsp; whitespace characters</p>";
        $expectedOutput = "This is a test string with a link and   whitespace characters";
        $this->assertEquals($expectedOutput, strip_tags2($input));

        $input = "This is a string with <= and <2";
        $expectedOutput = "This is a string with < = and < 2";
        $this->assertEquals($expectedOutput, strip_tags2($input));

        $input = null;
        $expectedOutput = "";
        $this->assertEquals($expectedOutput, strip_tags2($input));
    }

    public function testFilterTags()
    {
        $html = <<<END
<b>Test1</b> <div>Test2</div>
<script>alert(1)</script>
<<img src=x onerror=alert(2)>>
<audio src/onloadstart=alert(3)>
<a href="https://google.com" onclick="alert(4)">Test4</a>
<u>Test3</u>
END;
        $expected = <<<END
<b>Test1</b> <div>Test2</div>
< script>alert(1)< /script>
< <img src=x removed=alert(2)>>
<audio removed=alert(3)>
<a href="https://google.com" removed="alert(4)">Test4</a>
<u>Test3</u>
END;
        $this->assertEquals($expected, filter_tags($html));
    }
}