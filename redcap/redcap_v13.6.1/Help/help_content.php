<div class="container" style="margin-top: 60px">
    <h3>REDCap Help &amp; FAQ</h3>
    <p class="hub-title">Click the tabs below to navigate to a specific topic. When performing a keyword search, each tab will list the number of keyword matches in that section.</p>
</div>

<div class="container em-faqbuilder-tab-hidden-mobile">
    <ul class="list-inline pull-right" style="    padding-right: 10%;">
        <li><a href="https://redcap.vanderbilt.edu/external_modules/?prefix=faq-menu&amp;page=download_PDF&amp;pid=125508&amp;NOAUTH" class="btn btn-default saveAndContinue" id="save_and_stay" name="save_and_stay"><span class="fa fa-arrow-down"></span> PDF</a></li>
    </ul>
</div>

<div class="container" style="margin-top: 20px">
    <div class="form-group" id="filter-form">
        <label for="filter">
            Search for a Question
        </label>
        <input id="filter" type="text" class="form-control noEnterSubmit" placeholder="Enter a keyword or phrase">
        <small>
        <span id="filter-help-block" class="help-block">
          No filter applied.
        </span>
        </small>
    </div>
</div>

<div class="container" style="margin-top: 20px">
    <ul class="nav nav-tabs">
        <li class="nav-item active"><a data-toggle="tab" href="#1">General</a></li><li class="nav-item "><a data-toggle="tab" href="#2">Project Setup/Design</a></li><li class="nav-item "><a data-toggle="tab" href="#3">Data Collection Instrument Design</a></li><li class="nav-item "><a data-toggle="tab" href="#4">Data Entry/Collection</a></li><li class="nav-item "><a data-toggle="tab" href="#8">Communicating from REDCap</a></li><li class="nav-item "><a data-toggle="tab" href="#5">Applications</a></li><li class="nav-item "><a data-toggle="tab" href="#6">Making Production Changes</a></li><li class="nav-item "><a data-toggle="tab" href="#7">Optional Modules and Services</a></li>        </ul>
</div>

<div class="container">
    <div class="panel-group searchable" id="accordion">
        <div class="tab-content"><div id="1" class="tabpanel tab-pane fade in active" role="tabpanel"><div class="panel-group searchable" id="accordion-1"><div class="faqHeader">General</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_1_tab_1">How much experience with programming, networking and/or database construction is required to use REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_1_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No programming, networking or database experience is needed to use REDCap. Simple design interfaces within REDCap handle all of these details automatically.</p><p>It is recommended that once designed, you have a statistician review your project. It is important to consider the planned statistical analysis before collecting any data. A statistician can help assure that you are collecting the appropriate fields, in the appropriate format necessary to perform the needed analysis.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_2_tab_1">Where can I suggest a new REDCap feature?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_2_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can suggest a new REDCap feature by clicking on the "Suggest a New Feature" link located at the bottom of the left hand pane of a project. The link is under the "Help &amp; Information" header.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_3_tab_1">Can I still maintain a paper trail for my study, even if I use REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_3_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can use paper forms to collect data first and then enter into REDCap.  All REDCap data collection instruments can also be downloaded and printed with data entered as a universal PDF file.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_4_tab_1">Can I transition data collected in other applications (ex: MS Access or Excel) into REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_4_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>It depends on the project design and application you are transitioning from. For example, there are a few options to get metadata out of MS Access to facilitate the creation of a REDCap data dictionary:</p><p>For Access 2003 or earlier, there is a third-party software (CSD Tools) that can export field names, types, and descriptions to MS Excel. You can also extract this information yourself using MS Access. Table names can be queried from the hidden system table "MSysObjects", and a table's metadata can be accessed in VBA using the Fields collection of a DAO Recordset, ADO Recordset, or DAO TableDef.</p><p>The extracted metadata won't give you a complete REDCap data dictionary, but at least it's a start.</p><p>Once you have a REDCap project programmed, data can be imported using the Data Import Tool.</p><p>For additional details, contact your local REDCap Administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_5_tab_1">Is it possible to transfer a project to a different person?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_5_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>There is no project user right in REDCap called "Owner." You could create a role called "Owner" - which would clearly designate which user is the project owner in the User Rights section (with appropriate permissions). Usually the owner is the user with the right to grant project access to other users. </p><p>Add the new owner to the project as a user with appropriate rights and remove old owner in the User Rights section of the project.</p><p>For purposes of project identification - you might also want to change the "Name of PI (if applicable)" in "Modify project title, purpose etc." </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_6_tab_1">What are the password rules for table-based accounts?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_6_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The REDCap password for users in the table-based authentication mode must be at least 9 characters in length and must consist of at least one lower-case letter, one upper-case letter, and one number.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_7_tab_1">Why are date, time and number formats in user preferences not applied on instruments?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_7_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>This is the expected behavior. A field's date or number format is part of the field definition that you set in the Online Designer or Data Dictionary. </p><p>Personal user preference is used essentially anywhere else (outside surveys and data entry forms and reports). This includes displaying numbers for stats, timestamps in the log and so on.. </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_8_tab_1">What are Automated Survey Invitations?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_8_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>For any survey in your REDCap project, you may define your conditions for Automated Survey Invitations that will be sent out for a specified survey. This is done on the Online Designer page. Automated survey invitations may be understood as a way to have invitations sent to your survey participants, but rather than sending or scheduling them manually via the Participant List, the invitations can be scheduled to be sent automatically (i.e. without a person sending the invitation) based upon specific conditions, such as if the participant completes another survey in your project or if certain data values for a record are fulfilled.</p><p>Below are some guidelines to keep in mind when creating automated survey invitations:</p><ol><li>The 'today' variable should be used only in conjunction with datediff. Comparing 'today' to a date is unreliable.</li><li>It's a good practice to set up a field that can be used to explicitly control whether or not any invitations should be scheduled for a record. This allows for logic like the following:<p><strong>datediff([surgery_arm_2][surgery_date], 'today', 'd', true) &gt;= 6 and [enrollment_arm_1][prevent_surveys] != '1'</strong></p></li><li>All fields in all forms on all arms are always available to the conditional logic of an ASI rule. If there is no value saved for that field, an empty string is used.</li></ol></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_9_tab_1">Do automated survey invitations preclude manual survey invitations?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_9_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Automated survey invitations do not preclude manual survey invitations or vice versa. An automated survey invitation will not be scheduled if an automated survey invitation has previously been scheduled, but if an automated survey invitation's logic is checked and found to be true, a survey invitation will be scheduled regardless of whether or not a survey invitation has been previously scheduled manually. Likewise, if an automated survey invitation has been scheduled, one can still schedule a survey invitation manually.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_10_tab_1">When are automated survey invitations sent out?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_10_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Automated Survey Invitations are survey invitations that are automatically scheduled for immediate or future sending when certain conditions are true.</p><p>Creating an automated survey invitation requires:</p><ol><li>Composing an email message.</li><li>Specifying the conditions that will trigger an email to be scheduled.</li><li>Specifying how to schedule the triggered email (such as: immediately, after a delay, on a specific day).</li></ol><p>NOTE: In previous versions, conditions that used the "today" variable would require extra effort to make sure they were checked every day, but REDCap now detects and checks those conditions daily. The conditions are checked every twelve hours. The specific times they are checked during the day varies from one instance of REDCap to the next and changes over time.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_11_tab_1">Is there any tool that can help me figure out how to set up ASI?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_11_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>This link <a href="https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4">Survey Wizard: Automated Survey Invitations (ASIs)</a> will take a user to a survey algorithm that was created by the Training Collaboration Committee using REDCap version 8.8.1. It addresses general ASI how to with components and examples of different setups.</p><p>(URL:<a href="https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4">https://redcap.vanderbilt.edu/surveys/?s=LKM4DPEHL4</a>)</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_12_tab_1">Can you base ASI on Calendar/Event dates?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_12_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="line-height: 1;">No. Dates generated by the calendar application cannot be used in Automated Survey Invitation (ASI) logic.</p><p style="line-height: 1;">ASIs can be scheduled using the same "days offset" parameters defined for your events in four ways using the send-time option.</p><p><br></p><p><br></p><p>Option 1: X days after: the exact time the automated invitation was triggered</p><p style="line-height: 1;">Option 2: X days after: the same day (beginning at midnight) that the automated invitation was trigged</p><p style="line-height: 1;">Option 3: X days after: a date field</p><p style="line-height: 1;">Option 4: X days after: a date/time field</p><p><br></p><p style="line-height: 1;">Example days/times an ASI will be sent for each option</p><p style="line-height: 1;">If a baseline survey is completed for the baseline event on January 1 at 12:00 pm, and a follow-up event (offset by two days) has an ASI configured to send 2 days after the baseline survey is completed:</p><p style="line-height: 1;"><br></p><p style="line-height: 1;"><br></p><p style="line-height: 1;">Option 1: January 3 at 12:00 pm</p><p style="line-height: 1;">Option 2: January 3 at 12:00 am</p><p style="line-height: 1;">Option 3: January 3 at 12:00 am</p><p style="line-height: 1;">Option 4: January 3 at the time captured on the date/time field</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_13_tab_1">How can I schedule a survey invitation to go out at a specific time?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_13_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can use a form of scheduling that allows you to specify next day, next Monday, etc.  However that form of scheduling will not allow you to specify a lapse of a certain number of days.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_14_tab_1">What mathematical operations can be used in the logic for Automated Survey Invitations?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_14_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>+        Add</p><p>-        Subtract</p><p>*        Multiply</p><p>/        Divide</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_15_tab_1">How do I use the datediff function with ASI syntax for conditional logic?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_15_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;">You can calculate the difference between two dates or times by using the function:</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><strong>datediff([date1], [date2], "units", returnSignedValue)</strong></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;">[date1] and [date2] are fields (variables) in your project.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><br></p><p style="margin: 2.25pt 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><strong>units</strong></p><table><tbody><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"y"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">years</p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">1 year = 365.2425 days</p></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"M"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">months</p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">1 month = 30.44 days</p></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"d"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">days</p></td><td><br></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"h"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">hours</p></td><td><br></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"m"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">minutes</p></td><td><br></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>"s"</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">seconds</p></td><td><br></td></tr></tbody></table><p style="margin-left:.25in;text-indent:-.25in; 15.6pt;mso-list:l2 level1 lfo1;tab-stops:list .25in;">· Both dates <strong>MUST</strong> be in the same format (i.e., M-D-Y, Y-M-D, or D-M-Y) in calculated fields in instruments. The exception to this rule is the use of the <strong>datediff</strong> function in Automated Survey Invitations (ASIs) (<em>see examples below</em>).</p><p style="margin-left:.25in;text-indent:-.25in; 15.6pt;mso-list:l2 level1 lfo1;tab-stops:list .25in;">· For comparing two Time HH:MM fields, the date format is irrelevant.</p><p style="margin: 2.25pt 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><strong> </strong></p><p style="margin: 2.25pt 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none; line-height: 15.6pt;"><strong>returnSignedValue</strong></p><table><tbody><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>false</strong></p></td><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;">(default)</p></td></tr><tr><td><p style="margin: 0in 0in 0.0001pt; font-size: 12pt; font-family: Calibri, sans-serif;"><strong>true</strong></p></td><td><br></td></tr></tbody></table><p style="margin-left:.25in;text-indent:-.25in; 15.6pt;mso-list:l1 level1 lfo2;tab-stops:list .25in;">· The parameter <strong>returnSignedValue</strong> sets the result to be signed or unsigned (absolute value), in which the default value is <strong>false</strong>, which returns the absolute value of the difference. For example, if [date1] is later than [date2], then the result will be negative if returnSignedValue is set to <strong>true</strong>. If returnSignedValue is not set or is set to <strong>false</strong>, then the result will ALWAYS be a positive number. If returnSignedValue is set to <strong>false</strong> or not set, then the order of the dates in the equation does not matter because the resulting value will always be positive.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-style: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -moz-text-size-adjust: auto; -webkit-text-stroke-width: 0px; text-decoration: none;"><br></p><p>Examples:</p><table><tbody><tr><td><strong>Calculating the Difference Between 2 Date Fields</strong></td></tr><tr><td><strong>datediff([dob],[date_enrolled],"y")</strong></td><td><p><strong>Calculated Field in an Instrument</strong></p><p>The [dob] and [date_enrolled] fields must be entered in the same format (i.e., M-D-Y, Y-M-D, or D-M-Y). This equation yields the number of years between the date of birth and date enrolled. Since the returnSignedValue has been left blank, it defaults to false, which means the result will be positive only.</p></td></tr><tr><td><strong>datediff([dob],[date_enrolled],"y")&gt;=5</strong></td><td><p><strong>Automated Survey Invitations</strong></p><p>When the same equation (with added conditional logic “&gt;=5”) is used in an Automated Survey Invitation (ASI), the formats of the two date fields can differ. The equation will work regardless of whether or not the two date fields match in format. It is still best practice to use the same date format for all dates in the project if possible.</p><p>If used in an ASI, this equation states the invitation will be sent when the number of years between the date of birth and date of enrollment is greater than or equal to 5.</p></td></tr><tr><td><strong>Calculating the Difference Between a Date Field and a Static Date</strong><br></td></tr><tr><td><strong>datediff([date_enrolled],"08-31-2020","d",true)</strong></td><td><p><strong>Calculated Field in an Instrument</strong></p><p>When this datediff equation is used in a calculated field in an instrument, it yields the number of days between August 31, 2020, and date enrolled. Setting the static date as “08-31-2020” assumes the [date-enrolled] field is also entered in M-D-Y format. If the format of the [date_enrolled] field is Y-M-D or D-M-Y, the format of the static date (August 31, 2020) must match. Because returnSignedValue is set to true, the value will be negative if the [date_enrolled] field value is more recent than August 31, 2020.</p></td></tr><tr><td><p><strong>datediff([date_enrolled],"2020-08-31","d",true)&gt;=0</strong></p><p><br></p><p>OR</p><p><br></p><p><strong>datediff([date_enrolled],"08-31-2020","d","mdy",true)&gt;=0</strong></p></td><td><p><strong>Automated Survey Invitations</strong></p><p>When the same equation (with added conditional logic “&gt;=0”) is used in an Automated Survey Invitation (ASI), you have 2 options:</p><p style="margin-left: 0.25in; text-indent: -0.25in;">(1) Enter the static date (August 31, 2020) in <strong>Y-M-D format</strong>, regardless of the format in which [date_enrolled] is entered. The field [date_enrolled] can be entered in a different format than Y-M-D.</p><p style="margin-left: 0.25in; text-indent: -0.25in;">(2) Enter the static date in any format you wish, but then add the matching date format parameter in quotes between the “unit” and true/false. For example, if you format the static date as M-D-Y, you would add the parameter “mdy” between “d” and true. The field [date_enrolled] can be entered in any format. Again, it is still best practice to use the same date format for all dates in the project if possible.</p><p>If used in an ASI, this equation states the invitation will be sent to participants whose date of enrollment was on or before August 31, 2020, but not to participants who enroll after August 31, 2020.</p></td></tr></tbody></table><p style="margin-top: 2.25pt; font-size: medium; line-height: 15.6pt;"><br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_16_tab_1">If I create a timestamp field, including hours, minutes, and days, can I create an automated survey invitation that will detect how many days it has been since the timestamp?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_16_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>It's possible, but if you do this be aware that the server-side (PHP) datediff function always treats the 'today' keyword as being the first second of the day. If your timestamp value is at six pm (18:00:00), then an ASI checking the datediff on the same day as that timestamp will actually return a result of 0.75 days. On the next day it will return 0.25 days, regardless of what time of day it is checked. On succeeding days it will return 1.25, 2.25, 3.25, etc.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_17_tab_1">How can I use automated survey invitations to send invitations a specific number of days after a date given by a variable?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_17_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Suppose you want to send a followup survey seven days after a surgery. You could define the condition of an automated survey invitation rule to detect that six days have passed since the surgery date and then schedule the survey invitation to be sent on the next day at noon. By checking for the sixth day instead of the seventh day, you gain the ability to set the specific time to send the invitation and you gain the opportunity to stop the sending of the invitation, if it turns out that you don't really want to send it.</p><p>The conditional logic would look like: datediff([surgery_date], 'today','d',true) &gt;= 6</p><p>You could, instead, check that one day has passed and then set the invitation to be sent six days later, but you would lose the ability to set the specific time that the invitation is sent.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_18_tab_1">Is there any way to send a survey prior to a specific date e.g. if a surgery is scheduled 60 days from now and they would want the survey to be sent 14 days prior to that?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_18_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin:0cm;font-size:16px;">There are two ways to get this done:</p><p style="margin:0cm;font-size:16px;"><br></p><p><strong>Method 1:</strong></p><p>One is to use the option, "Send the invitation X days Y hours Z minutes before [date_field]" in the Automated Survey Invitation (ASI) setup. Choose the "date of surgery" field as the reference field. Note that this field needs to be date- or datetime- validated to appear in the field dropdown. Set up the options so it reads "14 days before [surgery_date]" to finish configuring Step 3.</p><p> </p><p>To configure Step 2, you will need to define how the ASI will be triggered / scheduled. The ASI should be set up to trigger *after* your "date of surgery" field is populated:</p><ul><li>To schedule the invite when a particular survey is completed, choose the survey from the dropdown menu.</li><li>To schedule the invite when a non-survey form is marked as complete, use the ASI logic: <em>[your_form_name_complete] = '2'</em></li><li>To schedule the invite once the surgery date is populated and saved, use the ASI logic: <em>[surgery_date] &lt;&gt; </em>''</li></ul><p> </p><p><strong>Method 2:</strong></p><p>The "classic" method is to define a <em>datediff</em> calculation in Step 2, under "When the following logic becomes true." By computing number of days between 'today' (or 'now') and the surgery date, you could have it so the invitation is scheduled when 'today' is 14 days before the date of the surgery, like so:</p><p>datediff('today', [baseline_arm_1][surgery_date], 'd', true) &lt;= 14</p><p>datediff('now', [baseline_arm_1][surgery_date_and_time], 'd', true) &lt;= 14</p><p>Since (1) using <em>datediff</em> with 'now' and a datetime field can return days in a decimal format (e.g., 14.123) and (2) to resolve timing issues when "Ensure logic is still true" option is checked off, it is a best practice to use the "less than or equal to" (<strong>&lt;=</strong>) operator so the ASI triggers as expected.</p><p> </p><p>To configure Step 3 in this method, you can choose "Send Immediately," or select "Send on next <day> at <time>" to customize when you would like the invitation to be sent once the ASI triggers.</time></day></p><p> </p><p>Regardless of the method chosen, if you have conditional logic set up in Step 2's "When the following logic comes true," another consideration is WHETHER to check the <strong>"Ensure logic is still true"</strong> box. In general, it is advisable not to check the "Ensure logic is still true" box if the Step 3 delay is short (e.g., if you chose "Send Immediately"). In other cases, you WANT to re-check.</p><p> </p><p>Additionally, an emergency "kill switch" for ASIs is recommended. This would be a radio or a checkbox field that stops ALL ASIs for a person. This is useful if a participant drops out of the study or otherwise is no longer interested in your emails. For example, with a kill switch, your ASI logic may look like the following:</p><p>datediff('now', [baseline_arm_1][surgery_date_and_time], 'd', true) &lt;= 14 <strong>AND [baseline_arm_1][stop_emails(1)] = '0'</strong></p><p>Another tip is to use a Data Quality rule to "test" your ASI logic. Build a few test records with various surgery dates and run your custom DQ rule to make sure it is triggering when you want. Trying to test with the REAL ASI is problematic as it only fires once per record ID.</p><p> </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_19_tab_1">How do variables included via piping interact with an automated survey invitation?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_19_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Piped variables are included in a survey invitation ONLY at the point that the ASI determines that an invitation should be scheduled. If the invitation is scheduled to be sent  in the future, and a piped variable is later changed before the scheduled invitation is sent, that change will NOT be included in the already scheduled invitation.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_20_tab_1">How often does REDCap check to see if Automated Survey Invitations (ASI) are ready to be scheduled?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_20_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Every time a record is created or modified (through the user interface or via data imports), it checks to see if an ASI invitation is ready to be scheduled. But for specific ASIs that have logic using the "datediff" function with either "today" or "now" (which means that the result of the ASI logic can change on its own from day to day), there is a cron job in REDCap that runs every 4 hours which will check these to see if an ASI invitation should be scheduled. Once the invitation is scheduled, a different cron job checks every minute to see if there are any survey invitations ready to send and sends them.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_21_tab_1">If a survey has already been completed, will the scheduler still send out survey invitations?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_21_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>There are a variety of reasons why survey invitations might be in the schedule to be sent even though a survey is already completed. The survey invite might have been both manually scheduled and automatically scheduled. The survey invite might have been scheduled but then the URL for the survey sent to the participant directly.Regardless, the scheduler will not send out a survey invitation for an already completed survey.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_22_tab_1">Do participants with partially completed surveys receive the automated survey invitation reminders?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_22_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, participants will continue to receive automated survey reminders if they have not completed the survey or they have a partially completed survey response.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_23_tab_1">How do you stop survey reminders?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_23_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>First, change the ASI so that no more reminders get scheduled. Then delete the reminders from the Survey Invitation Log, either individually or by selecting the batch you want to delete and using the "Delete all selected" button.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_24_tab_1">Can you designate a project-level phone number for sending text messages or making voice calls to invite participants to complete surveys?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_24_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix">  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">REDCap has the capability to make voice calls and send SMS text messages for surveys and for Alerts &amp; Notifications by using a third-party web service named Twilio (<a rel="noopener noreferrer" href="http://www.twilio.com" target="_blank">www.twilio.com</a>). In this way, you can invite a participant to take a survey by sending them an SMS message or by calling them on their phone, in which the data will be collected in REDCap directly from their phone without having to use a webpage.</p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">To use this feature, you must <strong>1) set up your own Twilio account</strong> at <a rel="noopener noreferrer" href="https://www.twilio.com/" target="_blank">www.twilio.com</a>. Once your Twilio account has been created, you must <strong>2) fund your account with some money</strong> (using the Billing page in Twilio) and then <strong>3) purchase a phone number</strong> to be used for your REDCap project (see the Numbers page in Twilio).</p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">Once a phone number has been purchased for the account, obtain the <strong>Account SID</strong> and <strong>Auth Token</strong> for your account (see the API Credentials section on the main Account Settings page). Only a REDCap administrator can enable Twilio services for your project. The administrator will need the Account SID, the Auth Token, and the phone number to enable Twilio for your project.</p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p>  <p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">Once your REDCap project is connected to your Twilio account, you can then configure how you want to use Twilio in your project. In general, not much is different between administering a survey normally in REDCap and using Twilio SMS/voice calls, except that you additionally choose how your survey invitations are delivered. The following choices are available: 1) Initiate survey as voice call, 2) Initiate survey as SMS conversation, 3) Send survey invitation with survey link via SMS, 4) Send survey invitation via SMS to take survey as voice call (respondent makes call), and 5) Send survey invitation via SMS to take survey as voice call (respondent receives call when replying via SMS). Any or all of these invitation delivery methods can be utilized within a single project. The choice of delivery method completely depends upon how you want to collect data from your participants.</p> </div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_1_question_25_tab_1">Can you designate a phone number for sending text messages or making voice calls to invite participants to complete a survey that overrides the project-level email invitation or text message/voice call settings?</a>
                            </h4>
                        </div>
                        <div id="category_1_question_25_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">REDCap allows you to set a <strong>survey-specific email invitation field </strong>in <strong>Survey settings</strong> to override a project-level email invitation field. But there is no comparable feature in Survey settings to designate a phone number to override a project-level email invitation or text message/voice call settings.</p><p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"><br></p><p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);"> </p><p style="margin: 0in 0in 0.0001pt;font-size: medium;font-family: Calibri, sans-serif;color: rgb(0, 0, 0);">As an alternative, you can use an Alert to invite a participant to complete a specific survey (or surveys) in your project via SMS text message or voice call. Click on <strong>Alerts &amp; Notifications</strong> on the left margin of the page after opening your REDCap project. Then click on the button labeled <strong>+Add New Alert</strong>. Complete Step 1 (Triggering the Alert) and Step 2 (Set the Alert Schedule). In Step 3 (Message Settings), you can set the Alert Type as an email, SMS text message or voice call.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Licensing</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_4_question_1_tab_1">How can I use REDCap to support a network of investigators?</a>
                            </h4>
                        </div>
                        <div id="category_4_question_1_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>A local installation of REDCap can support a grant-supported network of investigators if your institution holds the network grant even though investigators may be running sub-projects at other institutions. However, you should be very deliberate up front in determining the inclusion/exclusion criteria for projects and investigators who can utilize the local REDCap installation.  In your model, you need to ensure that you don't have one set of support policies/pricing for 'local' researchers and another for 'non-local' researchers (presumably you'll have network grant funding covering infrastructure and training support for the entire network).</p><p>You should think about how you will discontinue services and handle study data closeout should the network be disbanded at some point in the future. Finally, from a practical standpoint, it is recommended that you make sure you are proactive about establishing data sharing policies across the institutions within your network.  In some cases, failure of such policies to meet the needs of all network members has caused the group of network sites to install separately licensed versions of REDCap for data hosting, but still maintain economy of scale by setting up a unified training/support core for network investigators.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_4_question_2_tab_1">Who, other than members of my institution, can use my licensed REDCap software?</a>
                            </h4>
                        </div>
                        <div id="category_4_question_2_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you are coordinating a multi-center study where the PI is at your local institution, you are well within your rights to use REDCap to support the study. On the other hand, if you want to use your local REDCap installation to support researchers at another institution (for single- or multi-center studies) where you don't have a local researcher involved in the study, this can be a violation of the licensing agreement.Offering external research teams the use of a REDCap installation on a fee-for-service basis (or even gratis) is strictly forbidden under the licensing model.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Mobile Devices</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_2_question_1_tab_1">Does REDCap work on mobile devices like tablets and smart phones?</a>
                            </h4>
                        </div>
                        <div id="category_2_question_1_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes! REDCap is entirely web-based; you can access it from any browser, anywhere on the planet, at any time.</p><p>No separate app, download, or software installation is needed. The view will automatically be optimized for whatever device is being used.</p><p>REDCap is compatible with (and can be used on) desktop computers, laptops, tablets (including iPads), smart phones (both Android and Apple), and any other device having an internet connection. There are no specific requirements to run REDCap on any of these devices and no known compatibility issues.</p><p>On most tablets, the default view is the same as a desktop computer. All features are available.</p><p>On most phones, the default view is REDCap Mobile - a view focusing on data entry. Not all features are available in this view. Any time you are on a smart phone, you can switch to desktop view at any time to get the full use of REDCap.</p><p>NOTE: REDCap can also be used on mobile devices in areas having no internet connection. Refer to the section 'Q: What is the REDCap mobile app?' to learn more about this separate feature.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_2_question_2_tab_1">I won't have internet access where I need to use REDCap. Is there an offline version?</a>
                            </h4>
                        </div>
                        <div id="category_2_question_2_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If you don't have internet access, you cannot use online REDCap. In such a situation, there are three potential methods to collect data for use in REDCap later. Those three methods are described below.</p><p>The lack of internet coverage in remote areas could be a significant challenge to using REDCap. There are absolutely success stories in similar situations. We know of several studies operating REDCap in the field in South Africa and in rural areas of South America. But only you can determine which of the following options is feasible for your work.</p><p>1) The REDCap Mobile App can be downloaded to any mobile device (e.g. smart phones, tablets) and used for offline data collection. It's available in both Android and Apple app stores. The App is a true data collection tool; it has REDCap's primary functionality, just offline. (It's therefore slightly more limited functionality to online REDCap.) The App can 'sync' your offline data back to your real REDCap project when you return to internet connectivity. The 'sync' is a mass import of all the data you collected while offline. The App can send that back to your online REDCap project. Refer to the section 'Q: What is the REDCap mobile app?' to learn more about this separate feature.</p><p>2) Data can certainly be stored in another format and then uploaded into REDCap when the internet connection is reliable. This can be another alternative - to temporarily store the data in another file type and then transfer into REDCap incrementally. Though not ideal, you use another program offline (or even have paper copies of the instruments) to collect data in areas of low internet coverage. You could then enter that data in REDCap when the connection is more stable and use REDCap for an electronic record and to prepare the data for analysis.</p><p>3) Depending on your specific project, you might also be able to invest in purchasing a portable wireless router to act as an internet hotspot and enter data online in the field. This would allow you full use of the application from any low-coverage area. REDCap is accessible from any device having internet access, including the browsers of any smart phones or tablets (no Mobile App needed here). By providing your own internet access, the data could be stored securely (and directly in REDCap) from the start and there's no need to transfer it from hard copies later.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Language Modules</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_3_question_1_tab_1">Can I create projects forms in languages other than English?</a>
                            </h4>
                        </div>
                        <div id="category_3_question_1_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The label text displayed for individual fields on a survey or data entry form can be in any language. Setting the text label for non-English languages is the same with English text, in which you will set the text for that field in either the Data Dictionary or Online Designer. If you wish to view all the static instructional text in REDCap in a different language, this can be done in two ways.</p><p>1. That language might be supported in REDCap at your local institution using an ini file that is loaded onto the REDCap instance. If you wish to utilize the Language Modules, contact your local REDCap Administrator about which languages are available. They can switch a REDCap project over so that it will display the new language text instead of the default language of the REDCap instance.</p><p>2. You may use the Multi-Language Management feature within your project. The link to Multi-Language Management is located under applications on the left hand menu of your project. This feature does not translate text for you, but does provide the ability to utilize multiple languages within the same project and allows the user or participant to customize the language they view your project or survey in. You may program any number of languages as long as you provide the translations to your REDCap project. The language can be customized in surveys, data entry forms, alerts, and survey invitations using this method. If a translation is not provided REDCap will fall back on the default language of what the data dictionary has available.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_3_question_2_tab_1">Can I use special Spanish characters in my REDCap forms?</a>
                            </h4>
                        </div>
                        <div id="category_3_question_2_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, you can type in Spanish characters like you normally would. However, it can happen that users or participants can't see these characters properly. In these cases the characters in question are replaced by a little black diamond with question mark in it. However, it is possible to "hard-code" your Spanish characters into REDCap. The table below displays the acceptable HTML codes. You can either use the friendly code variant or the numerical code variant. Just type in either code instead of the normal Spanish character.</p><p>A link to all the special characters supported is here: <a rel="noopener noreferrer" href="http://www.w3schools.com/html/html_symbols.asp" target="_blank">http://www.w3schools.com/html/html_symbols.asp</a></p><table><tbody><tr><td>Display</td><td>Friendly Code</td><td>Numerical Code</td><td>Description</td></tr><tr><td>Á</td><td>Á</td><td>Á</td><td>Capital A-acute</td></tr><tr><td>á</td><td>á</td><td>á</td><td>Lowercase a-acute</td></tr><tr><td>É</td><td>É</td><td>É</td><td>Capital E-acute</td></tr><tr><td>é</td><td>é</td><td>é</td><td>Lowercase e-acute</td></tr><tr><td>Í</td><td>Í</td><td>Í</td><td>Capital I-acute</td></tr><tr><td>í</td><td>í</td><td>í</td><td>Lowercase i-acute</td></tr><tr><td>Ñ</td><td>Ñ</td><td>Ñ</td><td>Capital N-tilde</td></tr><tr><td>ñ</td><td>ñ</td><td>ñ</td><td>Lowercase n-tilde</td></tr><tr><td>Ó</td><td>Ó</td><td>Ó</td><td>Capital O-acute</td></tr><tr><td>ó</td><td>ó</td><td>ó</td><td>Lowercase o-acute</td></tr><tr><td>Ú</td><td>Ú</td><td>Ú</td><td>Capital U-acute</td></tr><tr><td>ú</td><td>ú</td><td>ú</td><td>Lowercase u-acute</td></tr><tr><td>Ü</td><td>Ü</td><td>Ü</td><td>Capital U-umlaut</td></tr><tr><td>ü</td><td>ü</td><td>ü</td><td>Lowercase u-umlaut</td></tr><tr><td>«</td><td>«</td><td>«</td><td>Left angle quotes</td></tr><tr><td>»</td><td>»</td><td>»</td><td>Right angle quotes</td></tr><tr><td>¿</td><td>¿</td><td>¿</td><td>Inverted question mark</td></tr><tr><td>¡</td><td>¡</td><td>¡</td><td>Inverted exclamation point</td></tr><tr><td>€</td><td><br></td><td>€</td><td>Euro</td></tr></tbody></table></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_3_question_3_tab_1">Can I use a language translation file to change the wording in the calendar widget to display a different language (ex: Spanish "Hoy" instead of "Today")?</a>
                            </h4>
                        </div>
                        <div id="category_3_question_3_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Some features in REDCap, such as the calendar widget, are hard-coded javascript and/or 3rd party code and cannot be abstracted.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_3_question_4_tab_1">Can the survey buttons at the bottom of the page: 'Next Page', 'Submit' and the other descriptors: '*these fields are required', 'reset value', etc. appear in a different language (ex: Chinese) in a project with non-English language survey questions?</a>
                            </h4>
                        </div>
                        <div id="category_3_question_4_tab_1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Using the Multi-language Management feature in REDCap will allow you to update elements of REDCap into multiple languages as long as you provide the translations. Within Multi-Language Management you will navigate to the "User Interface" tab and select "survey". This will allow you to provide the translations to all common elements used for surveys including page navigation. </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="2" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-2"><div class="faqHeader">General Project Setup</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_1_tab_2">What types of projects can I create?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_1_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Once a project is created, on the Project Setup page you will be able to "enable" two "Main project settings" (1) the longitudinal feature (repeating forms)and/or (2) surveys for data collection.  In a longitudinal project, for each instrument which is designated a survey, data can be entered directly by a participant for any/all events in the project.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_2_tab_2">Are there specific requirements to set up a project?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_2_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>For projects with surveys, you must complete the "Set up my survey" step in order to activate the Survey URL.  If this step is not complete, the following message will appear to on the "Survey Distribution Tools page:  "Enable my surveys(s) NOTICE".  You cannot utilized the "Survey Distribution Tools" page until you have first enable one or more surveys..."</p><p>The survey-related options, like Survey Settings and Notifications, can be accessed on the Project Setup &gt; Online Designer page.</p><p>For ALL projects, you must define a <strong>unique identifier</strong> as the first field on your first data entry form.  The data values entered into this field must be unique.  The system will not allow for duplicate entries. If you do not have a specific unique identifier, you can enable the option "Auto-numbering for records".</p><p><strong>Examples of Unique Identifiers:</strong>  Study-assigned ID</p><p><strong>Examples of Non-Unique Identifiers: </strong> Names, Dates of Birth, Consent Dates</p><p>The unique identifier must be a 'text' field. In addition, please note that unique identifier values will be visible at the end of the URL -- and likely cached in web browsers -- as individual records are viewed or entered. (Example URL:  <a href="https://www.example.com/redcap/redcap_vx.x.x/data_entry.php?pid=xxx&amp;page=xxx&amp;id=ID_VARIABLE_VALUE.%29It">https://www.example.com/redcap/redcap_vx.x.x/data_entry.php?pid=xxx&amp;page=xxx&amp;id=ID_VARIABLE_VALUE.)</a> </p><p><strong>It is strongly recommended that you do not use Protected Health Information (PHI) Identifiers such as MRN or DOB+initials as the unique identifier.</strong>  This is an additional precaution to preserve research participant confidentiality from displaying in the URL and becoming cached.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_3_tab_2">What steps do I have to complete to set up a project?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_3_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Depending on which project settings are enabled, you will have the following steps/modules to complete on the Project Set-up page:</p><table><tbody><tr><td></td><td>Surveys</td><td>Classic</td><td>Longitudinal</td></tr><tr><td>Main Project Settings<br></td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr><td>Design Data Collection Instruments<br></td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr><td>Survey-related options &gt; Survey settings<br></td><td>Yes</td><td></td><td></td></tr><tr><td>Define Events and Designate Instruments<br></td><td></td><td></td><td>Yes</td></tr><tr><td>Enable optional modules and customizations<br></td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr><td>User Rights and Permissions<br></td><td>Yes</td><td>Yes</td><td>Yes</td></tr><tr><td>Move to Production<br></td><td>Yes</td><td>Yes</td><td>Yes</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_4_tab_2">What are Project Statuses?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_4_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Project status reflect where in your project lifecycle your REDCap project is.</p><p><br></p><p><strong>Development:</strong> All projects when first created start in Development. In Development, you can design, build, and test your REDCap projects. All design decisions can be made in real time and are implemented immediately to your project. All survey and data entry features/functions can and should be tested.</p><p style="line-height: 15pt;"><strong>Production: </strong>When you have completed thorough testing, you should move your project from Development to Production status by clicking the button at the bottom of the Project Setup page. All survey and data entry features/functions will be exactly the same as they are in Development with the exception of certain Project Setup features.</p><p style="line-height: 15pt;">To make any form design changes you will need to enter Draft Mode to be able to edit your instruments. Changes to data collection instruments in Draft Mode are not made to your project in real time. After making updates, you must submit the changes for review. Depending on your institution’s policies, some changes are processed automatically, whilst others will need approval by a REDCap Administrator. These settings, as well as review and approval times will vary as they are institution specific. They are intended to protect from unintentional impacts to existing data and data structures in a live production project.</p><p style="line-height: 15pt;">From Production, you can move the projects to the following statuses on the Project Setup &gt; Other Functionality page:</p><p style="line-height: 15pt;"><strong><em>Development</em></strong>: Only an administrator can move your production project back to development from production.</p><p style="line-height: 15pt;"><strong>Analysis/Cleanup</strong><strong>: </strong>Move the project to Analysis/Cleanup status if data collection is complete. This will disable most project functionality, although all collected data will remain intact. Once in Analysis/Cleanup status, the project can be moved back to production status at any time<strong>.</strong></p><p style="line-height: 15pt;">When a project is in Analysis/Cleanup, it is assumed that formal data collection has ended, except for cleaning and analyzing the data already collected. Many features are disabled, such as surveys, Alerts &amp; Notifications, Automated Survey Invitations, and other features typically used during data collection. Also, no new records can be created while in this status<strong>.</strong></p><p style="line-height: 15pt;"><strong>Modify data locking mode</strong></p><p style="line-height: 15pt;">While the project is in Analysis/Cleanup status, you may set the data in the project to be either;</p><p style="line-height: 15pt;">1) Editable (existing records only), or</p><p style="line-height: 15pt;">2) Read-only/Locked. If set to Read-only/Locked mode, then no data in the project will be able to be modified in any way.</p><p style="line-height: 15pt;">When in Analysis/Cleanup you can move the project back to Production or to Completed status.</p><p><strong>Completed</strong>: If you are finished with a project, sure that no one needs to access it anymore, but you want to ensure that the project and its data remain intact, it can be marked as Completed. A Completed project can only be accessed by a REDCap administrator and only they can change its status back to Analysis/Cleanup<strong> .</strong></p><p style="line-height: 15pt;">Marking a project as Completed takes it offline and hides it from everyone's project list. It can only be seen again by clicking the small <strong>Show Completed Projects</strong> link at the very bottom of the My Projects page. Clicking this link will make your completed projects appear in the same project folders that they were originally allocated to.</p><p><br></p><p style="line-height: 15pt;"><strong>Changes to project status</strong></p><p style="line-height: 15pt;">Project statuses were changed from version 9.8.0 standard release and 10.0.5 LTS, and some changes automatically made to projects which were in the older <strong>Inactive</strong> and <strong>Archive</strong> statuses.</p><p style="line-height: 15pt;">Projects which had been in the older <strong>Inactive</strong> project status, are updated to a project status of "Analysis/Cleanup". This is to help reinforce that cleaning and analysing the data is the next logical step after data collection in Production status.</p><p style="line-height: 15pt;">Projects in the older <strong>Archived</strong> status were originally located in an <strong>Archive </strong>folder at the bottom of the My Projects page.</p><p style="line-height: 15pt;">This Archive folder is renamed to “<strong>My Hidden Projects</strong>" folder. Projects with Archive status which were previously in this folder are updated to have a status of Analysis/Cleanup. A user can move these projects out of the “<strong>My Hidden Projects</strong>" folder in the usual way by going to the Organize button at the top of the My Projects page and reallocating them to a chosen folder.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_5_tab_2">Why do I have to "move" my project to production?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_5_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Moving your project to Production once you start collecting study data ensures you're maintaining data accuracy and integrity.  The post-production change control process provides an additional check to ensure that data which has already been collected is not deleted, re-coded or overwritten unintentionally.  See FAQ topic "Making Production Changes" for additional details.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_6_tab_2">After my project is created, can I change the name and/or purpose of my project?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_6_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. After your project is created, you can navigate to the Project Setup page. Click on the "Modify project title, purpose, etc.". Here you can update Project Title and Purpose during any project status.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_7_tab_2">If the unique identifier is arbitrary to me, can the system auto-assign a unique value to each of my records?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_7_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes.  You can enable auto-numbering for naming new project records on the Project Setup &gt; Enable optional modules and customizations page.  This option will remove the ability for users to name new records manually and will instead provide a link that will auto-generate a new unique record value.  The value is numeric and increments from the highest numeric record value in the project. If no records exist, it will begin with '1'.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_8_tab_2">How do I add new form to an existing (production) project and make it the first form?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_8_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>1.Put the project into Draft mode.</p><p>2.Add the new form to the project.</p><p>3.Reposition the new form to be first in the project</p><p>4.Make sure the first field in the new form is the same record ID form as it was before the forms were moved</p><p>5.If the new form or the form it is replacing are surveys, make sure the correct forms are enabled as surveys and correct any changes to survey settings. Remember that the first form in the project is what the public survey link will link to-if the former first form was using the public survey link, you cannot move it without changing what the public survey link moves to </p><p>6.Put the changes into production.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_9_tab_2">What can REDCap Administrators do that REDCap end users can't?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_9_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap administrators, also known as superusers, oversee the REDCap system and its settings. They often have the ability to do things that REDCap end users (regular users) can't do directly. Each REDCap system is overseen by a different group of administrators because each system is independently maintained and supported.  The following is a list of some common administrator capabilities and responsibilities.  Please contact your system's REDCap administrators if you would like to explore which of the following capabilities are available for your system.</p><ul><li>Project-specific tasks<ul><li>At some institutions, only superusers can create projects.</li><li>At some institutions, only superusers can move a project to production.</li><li>Add custom text to the top of the Home page of a project.</li><li>Add custom text to the top of all Data Entry pages of a project.</li><li>Add custom logo and institution name to the top of every page of a project.</li><li>Add grant to be cited.</li><li>Display a different language for text within a project. The languages available vary by institution.</li><li>Turn Double Data Entry on and off.</li><li>Customize the date shift range for date shifting de-identification.</li><li>Approve API token requests.</li><li>Delete all API tokens.</li><li>Create an SQL field, generally used to create a dynamic dropdown list with data drawn either from the same project or another.</li></ul></li></ul><ul><li>Additional project-specific tasks for projects in production status<ul><li>At some institutions, only superusers can approve some or all production changes, a.k.a. moving drafted changes to production.</li><li>Delete events.</li><li>Uncheck instruments from events.</li><li>Enable/Disable Main Project Settings: Use Longitudinal and Use Surveys</li><li>Erase all data.</li><li>Move the project back to development status.</li><li>Delete the project.</li></ul></li></ul><ul><li>User-specific tasks<ul><li>Suspend and unsuspend users from all of REDCap. (Note, however, that expiring a users' access to a specific project does not require a REDCap administrator.)</li><li>For sites that use REDCap's table-based, local authentication, reset the password for a user.</li><li>Update the email address associated with an account for a user, in case that user is neither able to log in nor has access to the email address associated with their account.</li></ul></li></ul><ul><li>Cross-project tasks<ul><li>Create project templates.</li></ul></li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_10_tab_2">How can I set the default auto-numbering to start at a particular number such as 2000?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_10_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can disable auto-numbering and add the first record using the ID number as the start value.  Once this record is saved, you can enable the auto-numbering customization.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_11_tab_2">If I enter data while I am testing my forms in Development, will it remain when I move to Production?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_11_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>It is strongly recommended that you test your projects prior to moving to Production, either by entering test data or real study data. Entering and saving data is the only way to test that the branching logic and calculated fields are working properly.When you click the "Move project to Production" button on the Project Setup page, a pop-up will prompt you to "Delete ALL data, calendar events, documents uploaded for records/responses, and (if applicable) survey responses?".  Check the option to delete data.  Uncheck the option to keep all data.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_12_tab_2">Can I download a single combined PDF of all instruments in my project without data?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_12_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In Project Setup, under "Design your data collection instruments", click "Download PDF of all data collection instruments".</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_13_tab_2">What's the difference between the unique identifier, secondary unique identifier and the redcap_survey_identifier?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_13_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The first variable listed in your project is the <strong>unique identifier</strong> which links all your data.</p><p>For any type of project, you must define the unique identifier field. This is the first field of the first instrument and if not using a template, the default is <strong>Record ID</strong> [record_id]. For projects where a survey is the first data collection instrument, the value must be numeric and auto-increments starting with the highest value in the project. If no records exist, it will begin with '1'.</p><p>Users can define a unique identifier value that is not numeric (ex: Site-001) and does not auto-increment for projects with surveys: Instead of enabling the FIRST instrument as a survey, have a data collection instrument with data entry fields, then collect data via subsequent surveys. </p><p>The <strong>secondary unique field</strong> may be defined as any field on the data collection instruments. The value for the field you specify will be displayed next to the your unique identifier when choosing an existing record/response. It will also appear at the top of the data entry page when viewing a record/response. Unlike the value of the primary unique identifier field, it will not be visible in the URL.</p><p>The data values entered into the secondary unique field must also be unique. The system will not allow for duplicate entries and checks values entered in real time. If a duplicate value is entered, an error message will appear and the value must be changed to save/submit data entered on the data entry instrument.</p><p>The <strong>redcap_survey_identifier</strong> is the identifier defined for surveys when utilizing the Participant Email Contact List and sending survey invitations from the system. The "Participant Identifier" is an optional field you can use to identify individual survey responses so that the participant doesn't have to enter any identifying information into the actual survey. This field is exported in the data set; the email address of the participant is not. </p><p><strong>NOTE</strong>: redcap_survey_identifier values cannot be used with "piping". If you want to send surveys to participants and pipe in values (ex: first and last name); create a data entry instrument prior to the survey. Add your required fields and an email  address to be used for the invitations (on the Project Setup page &gt; Designate An Email). Then  you can enter or import your participants' information and send  the invitations using piping.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_5_question_14_tab_2">How can I delete a project?</a>
                            </h4>
                        </div>
                        <div id="category_5_question_14_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Project users can delete projects that are in Development status by navigating to the 'Other Functionality' tab and then clicking on the 'Delete the project' button. Project users can request that projects in Production status be deleted by navigating to the 'Other Functionality' tab and clicking on 'Request delete project'. Clicking "Request delete project" sends a request to the REDCap Administrator.</p><p>NOTE: After a REDCap Administrators deletes a project, it is only permanently removed from the database backend 30 days after deletion. Until that time, REDCap Administrators can undelete the project. The files associated with the project do not get deleted permanently at the same time, but will then be put into *another* 30-day wait until they are actually deleted from the server. So it takes a total of 60 days for the files themselves to get deleted from the time that a user "deletes" a project.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Survey Design</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_1_tab_2">How do I enable surveys for my project?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_1_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Surveys can be enabled at any time in development mode by a project user with "Project Design &amp; Setup" User Rights.</p><p>On the Project Setup tab, in the Main Project Settings step at the top, click "Enable" button for "Use surveys in this project?".  This feature must be enabled in order to use surveys. </p><p>After enabling surveys, go to the Online Designer. A link to that page is on the Project Setup tab, in a lower step on the page. On the Designer, designate which instruments should be surveys by clicking the 'Enable' button next to them. You can enable surveys on as many instruments as you wish.</p><p>Each time you designate an instrument as a survey, you will be prompted to define some additional features of the survey. Be sure to scroll down and save those settings. You can return to them at any time to review and modify them as needed, even in production mode. They are found in the 'Survey Settings' buttons that will appear next to each survey instrument in the Online Designer.</p><p>To enable surveys for a project in "production" status, you must contact your REDCap Administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_2_tab_2">Can I create multiple surveys in the same project?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_2_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can have multiple surveys in the same project. The multiple surveys will be linked to a single participant. If your surveys are for different cohorts or populations, you will want to create separate projects for each survey.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_3_tab_2">For Survey + Data Entry Projects, is it possible to start entering data on a data entry form for an individual prior to their completion of the survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_3_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can have multiple surveys and data entry forms in the same project.  You can start with a data entry form and enable the second instrument to be a survey.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_4_tab_2">How do I know which survey delivery option is right for my project?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_4_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>It depends on if you have the need for future scheduling or conditional logic. Use this grid to determine the best option for you:</p><table><tbody><tr><td>Delivery Option</td><td>Allows for Future Scheduling</td><td>Allows for Conditional Logic</td></tr><tr><td>Manual</td><td>Yes</td><td>No</td></tr><tr><td>Auto-continue</td><td>No</td><td>No</td></tr><tr><td>Survey queue</td><td>No</td><td>Yes</td></tr><tr><td>ASI</td><td>Yes</td><td>Yes</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_5_tab_2">Is this there any tool that can help me figure out how to set up my survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_5_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>This link [<a href="https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A">Survey Wizard: The Basics</a>] will take a user to a survey algorithm that was created by the Training Collaboration Committee using REDCap version 7.6.3. It addresses when to enable survey functionality, what to consider when choosing a survey model, and reviews survey setting options.</p> <p>(URL: <a rel="noopener noreferrer" href="https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A" target="_blank">https://redcap.vanderbilt.edu/surveys/?s=43TD4MRF8A</a>)</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_6_tab_2">Can I collect anonymous survey data from participants?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_6_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Responses can only be collected anonymously using the Survey Distribution Tools &gt; Public Survey Link.</p><p>The survey questionnaire must not contain any questions asking the participants for identifying data (ex: What is your email? name? address?).</p><p>Multiple Surveys:  Be mindful that projects with multiple surveys present potential challenges to anonymous data collection. If you are analyzing data in aggregate, you can having multiple REDCap projects, each using the Public Survey Link.  If you need to track individual responses over time, using the Public Survey Link for each survey (pre, post, follow-ups) requires that you collect data points within the survey questionnaire to later export and merge. The data points should not be identifying information, but specific enough question(s) that a participant will enter answers consistently (ex: last 5 digits of their first phone number; color of first car).</p><p>Projects containing data entry forms and surveys cannot be considered anonymous.  Manually entered data needs to be identified by the team to be properly associated and linked with survey responses.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_7_tab_2">How can I send multiple surveys to participants and link their responses?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_7_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If the responses need to be anonymous, please see the section Surveys: Anonymous.</p><p>If responses do not need to be anonymous, you must at some point collect individual email addresses to send participants multiple surveys and have the data linked. You can do this in a few ways:</p><p><strong>1. Project's first instrument is a Survey &amp; Use of Public URL &amp; Designate an email field:</strong> If you want to utilize the Public URL to distribute an initial survey and invite participants, the survey MUST contain a text field with validation = email to collect the participant's email address.</p><p>On the Project Setup page &gt; Enable optional modules and customizations &gt; Enable: Designate an email field to use for invitations to survey participants. Designate the email address you are collecting on the first survey.</p><p>When participants complete the first survey, their email addresses will pre-populate the Participant Lists and will allow you to send additional surveys for the same record.</p><p>Surveys will be automatically linked by record ID. Participant Identifier on Participant List will not be editable.</p><p>Additional Notes: You will still be able to use the Participant List to send emails to the first survey, if needed. Participant will be prompted to enter their email address on the survey itself. You can also create new records using the Data Entry feature to populate the first survey and manually enter email addresses.</p><p><strong>LIMITATION:</strong> Only participants that answer the first survey with an email address will be able to respond to the follow-up surveys.</p><p><strong>2. Project's first instrument is a Survey &amp; Use of Participant List:</strong></p><p>If have individual email addresses, you can create a project with multiple surveys. You would add individual emails to the Participant List with or without a Participant Identifier. Then you can send the survey invites through "Compose Survey Invitations".</p><p><strong>LIMITATION:</strong> Only participants that answer the first survey will be able to respond to the follow-up surveys. If you wish to collect additional surveys for the non-responders, you will need to create additional REDCap projects with the follow-up surveys. Because of this limitation, you may want to try method #3:</p><p><strong>3. Project's first instrument is Data Entry &amp; Use of "Designate an email field":</strong></p><p>If you know your email addresses and want participants who haven't completed the first survey to be able to complete the second survey (within the same project), then you can do the following:</p><p>1. The first form is a data entry form (ex: "Email Form"). On the "Email Form", at minimum, you can have the participant ID number field and an email field: a text field with validation = email</p><p>2. On the Project Setup page &gt; Enable optional modules and customizations &gt; Enable: Designate an email field to use for invitations to survey participants</p><p>3. Select the email field you created on the "Email Form"</p><p>4. You can either import (Data Import Tool) or enter the email addresses directly into the data entry "Email Form". Entering the emails here will automatically populate the Participant Lists for all surveys in the project</p><p>You can send your invites to any surveys regardless of participant's responses and survey completions.</p><p><strong>Advantages:</strong> You can import a list of pre-defined record IDs and email addresses. Record IDs do not have to be assigned incrementing values by REDCap.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_8_tab_2">Where can I setup survey reminders?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_8_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can setup survey reminders in the same modules that REDCap allows you to send out a survey invitations: Automatic Invitations, Participant List, Compose Survey Invitations.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_9_tab_2">Can I send more than 5 survey reminders?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_9_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The current maximum for reminders is 5 in order to prevent spamming people.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_10_tab_2">What is the Survey Queue?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_10_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The survey queue displays a list of the surveys in your project, functioning as a “To-Do” list for your survey participants.</p><p>The survey queue is set up in the Online Designer after surveys have been enabled in the project. You will select which surveys in your project you want to use with the queue, and supply logic saying when they should be available. Surveys can become available when another survey is complete, when specific logic is met, or both. You can also enable the “Auto start” option. This means the survey will launch as soon as the previous one is completed, creating a seamless survey experience for the participant similar to the “Auto-continue” option in the Survey Settings.</p><p>Please note that the survey queue and the “Auto-continue” in the Survey Settings cannot be used for the same survey; the “Auto-continue” option will always take precedence over survey queue logic and may result in surveys being launched even though the survey queue logic says they should not be.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_11_tab_2">Can the respondent see the survey queue even if that survey is not in the queue?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_11_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. If the survey queue has surveys in it, the respondent will see the link for the queue and be able to access it and any surveys that are not locked. This is true even if the survey respondent received the survey trough the "Survey-specific invitation field" option and is not the main respondent for that record, because the survey queue exists on the same level as the record itself, not the individual forms. If there will be multiple respondents for a record and you are concerned about them accessing inappropriate surveys via the survey queue, then you should not use the survey queue for that project.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_12_tab_2">If a participant answers a question in a certain way, can they be taken to the end of the survey if the rest of the questions are not applicable?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_12_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, you can indicate "Stop Actions" for survey fields only. The survey participant will be prompted to end the survey when programmed criteria are selected. Stop Actions will not be enabled on the data entry form when viewing as an authenticated user. Stop Actions can only be enabled for drop-down, radio, checkbox, yes/no, and true/false field types.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_13_tab_2">What are the differences between the Survey Auto-Continue and Survey Queue features?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_13_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	<strong>Survey Auto-Continue is: 	</strong> </p> <p> 	- Easier for many users but does not have branching logic for entire surveys  	<br> - Much easier to configure for multi-event projects with a lot of surveys </p> <p> 	<strong>The Survey Queue provides: 	</strong> </p> <p> 	- A landing page for many surveys 	<br> - Survey based branching logic 	<br> - Ability to define logic across events </p> <p> 	<strong>Limitations with Auto-Continue:</strong> </p> <p> 	<strong></strong>- No option to add branching logic to skip an entire form/survey  	<br> - No landing page / 'table of contents' view </p> <p> 	<strong>Limitations with Survey Queue: 	</strong> </p> <p> - If a lot of events, slow to load <br> - Survey-queue link in the upper-right corner of surveys or the 'summary' on the end-of-survey page cannot be disabled 	<br> - Can be a challenge in multi-arm projects 	<br> - Survey styling doesn't apply to the table-of-contents view </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_14_tab_2">Why doesn't the Survey Queue work when I have Auto-Continue enabled?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_14_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The Auto-continue survey setting overrides the Survey Queue logic. If you want to utilize the Survey Queue, disable the Auto-continue feature first. </p><p>Note: Survey Queue only works on instruments that are 'enabled' in the queue. You could potentially have a mix of Auto-continue and Survey Queue. However, it is true that if a survey is enabled in the Survey Queue, it is probably not good to have that same survey (or the survey before it) set up with auto-continue.<strong></strong></p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_15_tab_2">How can I send survey invitations based on logic?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_15_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The best way to send survey invitations based on logic is to create an Automated Survey Invitation (ASI) that schedules when your logic becomes true.</p><p>To do this, go to the Online Designer and find your survey. In the far right column next to the survey, select “Automated Invitation.” There will be three sections to fill out:</p><ol><li>The email text, subject and from address,</li><li>The logic that should trigger the invitation to be sent (so if you only wanted to invite people if [consent]=1, then this is where you'd do this) and</li><li>The timing, when to send the email, whether it's at an exact time, a certain delay period, or immediately, and any reminders</li></ol><p>Once an ASI is created and enabled, it will schedule when any record is saved with the logic you set as true. If it contains a datediff in that logic, REDCap will check multiple times a day to see if the logic has become true and schedule when it does.</p><p>You can also create an Alert that triggers based on logic using “Alerts and Notifications” on the sidebar under Applications. This works very similarly to an ASI, but you will need to provide your own smart variables for the invitation.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_16_tab_2">Can I schedule Automated Survey invitations (ASI) after data has been collected?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_16_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Best practice is to create your ASIs before any data is collected, but you can create or modify them after data collection has begun.</p><p>If you create or edit an ASI after data collection has started, you will need to resave records to have the ASI logic evaluated—REDCap will not go back and automatically check all records to see if any meet the new/updated logic. If an invitation has already been scheduled for a record, but not sent, the invitation wording and scheduling will not be changed to reflect new wording/logic.</p><p>The exception to this is if your new logic contains a datediff equation. REDCap contains a ‘cron job’ that runs multiple times a day to check if any datediff calculations in ASIs have become true. If you change an ASI to include a datediff, REDCap will check to see if it is true for your records on the same schedule it is checking all other ASIs with datediff calculations, and it will schedule the invitation appropriately when the logic becomes true.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_17_tab_2">What is the Survey Login feature?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_17_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To provide improved security to your surveys, you can require the participant to enter specified login credentials in order to begin a survey and if the "Save &amp; Return Later" feature is enabled to return to a previously entered survey response.</p><p>	To enable the Survey Login feature, there is a button at the top of the instrument list on the Online Designer that will open up the Survey Login settings popup. Users who wish to enable Survey Login may choose one, two, or three fields in their project to be used as the login credential fields for surveys in their project.</p><p>	The Survey Login can be enabled for ALL surveys in a project or just selected surveys. For selected surveys, navigate to the Survey Settings page to enable.</p><p>	If Survey Login has been enabled and a record does not exist yet for the  respondent (e.g., if they are beginning a Public Survey), then the survey page will display directly without the login page. However, once the record exists, the respondent will always be prompted to log in to the survey.</p><p>	Note: If a survey has the "Save &amp; Return Later" feature enabled, Return Codes will not be used to return to the survey, but it will use the Survey Login's login credentials instead.</p><p>Note: Survey Login cannot be used with a public survey, which requires a Return Code if "Save &amp; Return Later" is enabled.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_18_tab_2">Can I receive a notification when a survey has been completed?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_18_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. On the Online Designer page, choose 'Survey Notifications' located in the Survey Options section. You may indicate which users should be notified when a survey is complete.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_19_tab_2">Why am I getting duplicate notifications when a survey has been completed?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_19_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap specifically checks to ensure it doesn't send a double email to someone. However duplicate notifications can be sent if another user on that project has a slightly different version of your email address on their REDCap account e.g. <a href="mailto:jane.J.doe@vanderbilt.edu">jane.J.doe@vanderbilt.edu</a> vs <a href="mailto:jane.doe@vanderbilt.edu">jane.doe@vanderbilt.edu</a>. There is another possibility. After a survey participant finishes a survey he or she may refresh the acknowledgement page. This could result in another batch of emails being sent.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_20_tab_2">When a "stop action" condition is met, can I customize text to display to participants prior to the survey closing?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_20_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Customized text cannot be incorporated into the standard REDCap message that displays to the participant.Another method instead of using the stop action feature, is to hide all other questions with branching logic.  A descriptive text field can be used to display instructions for those who meet the "end of survey" criteria.  These participants can then submit the survey as usual.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_21_tab_2">How do I automatically display the current date/time on a survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_21_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Every survey that is submitted is date/time stamped.  This completion date and time are available in the data export and data entry forms.  However it's not possible to display the current date on the survey while it's being taken by participants.</p><p> 	You can add a question onto your survey to indicate "Today's Date".  The calendar pick list will have a button for "Today" or "Now" that the participant can easily click.</p><p> 	Action tags are a relatively new addition to REDCap and can be applied to any variable (see Action Tags info for additional details). These options are available:</p><p> 	<br> 	@NOW 	<br> Automatically provides the user's current time as the value of a Text when the page is loaded. Once the value is captured, it will not be changed when visiting the page at a later time. If the field has validation, the value will conform to the date/time format of the field. The field will be disabled and will not allow users to edit the value. NOTE: The time will be the user's local time, which is derived from  their device/computer.</p><p> 	<br> 	@TODAY 	<br> Automatically provides the user's current date as the value of a Text when the page is loaded. Once the value is captured, it will not be changed when visiting the page at a later time. If the field has validation, the value will conform to the date/time format of the field. The field will be disabled and will not allow users to edit the value. NOTE: The date will be the user's current date, which is derived from  their device/computer.</p><p> 	<br> 	@READONLY 	<br> Makes the field read-only (i.e., disabled) on the survey page, the data entry form, and in the REDCap mobile app so that its value cannot be changed</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_22_tab_2">How can I track the length of time to complete a survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_22_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Use the action tags @NOW and @HIDDEN-SURVEY to capture the time the participant starts the survey. You can then use the survey timestamp for the end time and calculate the survey length from the two times.</p><p>There are two important notes on using this method. The first is that if the survey has the "Save and Return Later" feature enabled, this could be an extremely long time that doesn't reflect how long the participant actually spent on the survey page. The second is that @NOW action tags record the time based on the user's browser, and the timestamp is based on the REDCap server. So if the participant is taking the survey from a different time zone from the REDCap server, the calculation may not be accurate.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_23_tab_2">What happens when I take the survey "offline"? What does the participant see if they click on the link?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_23_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When a survey is "offline" participants will no longer be able to view your survey.  They will navigate to a page that displays "Thank you for your interest, but this survey is not currently active."  Project users will still have access to the project, all the applications and survey data.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_24_tab_2">What happens when a REDCap Administrator takes the system "offline" for routine upgrades and/or expected downtime?  What does the participant see if they click on the survey link?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_24_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>When the REDCap system is "offline", participants will no longer be able to view your survey.  They will navigate to a page that displays "REDCap is currently offline. Please return at another time. We apologize for any inconvenience.</p><p>If you require assistance or have any questions about REDCap, please contact your REDCap Administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_25_tab_2">If my survey is really long, can I create page breaks?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_25_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Navigate to Project Setup --&gt; Design your data collection instruments &amp; enable your surveys --&gt; Online Designer --&gt; Survey Settings (next to the survey name in the Online Designer). In the "Survey Customizations" section, set "Question Display Format" to "One section per page".  Then on your questionnaires, you can create page breaks by adding in fields (field type = "Begin New Section (with optional text)") where you would like those breaks to occur.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_26_tab_2">If I enable "Display Questions" = "One section per page", do answers get saved after the respondent hits "next" to go on to the next page?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_26_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. Answers are committed to the database as you hit "Next". So if responders quit the survey before finishing, you'll have all the data up to that point (partial responses).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_27_tab_2">When "Display Questions" = "One section per page" is enabled and entire sections/questions are hidden due to branching logic, are blank pages displayed to the participant?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_27_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, sections (as separate survey pages) where ALL questions are hidden due to branching logic will be skipped while in survey view. However, this is not true for the last page of any survey, in which the last page will always be displayed, even if all questions are hidden on the page.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_28_tab_2">For surveys with multiple pages, can the "Previous Page" button be disabled?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_28_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes.  The "Previous Page" button option can be disabled on the Online Designer &gt; Survey Settings page.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_29_tab_2">For surveys with multiple pages, can participants go back to a previous page to change answers?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_29_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes.  Participants can go back to a previous section to change answers by clicking the "Previous Page" button at the bottom of the survey screen. Participants should only click the "Previous Page" button and not the web-browser's back button.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_30_tab_2">For surveys with multiple pages, is there a progress indicator on the survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_30_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. There is a "Page # of #" at the top right of the survey, so respondents know how many pages they have left.  You can hide/display this feature on the Online Designer &gt; Survey Settings page. The progress bar is not a feature of REDCap.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_31_tab_2">My survey has matrix fields and it's creating undesirable page breaks.  What is causing this?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_31_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Matrix fields contain a "Matrix Header Text" which is actually a Section Header.  Using this field will cause a survey page break. To avoid this, instead of entering text into the header field, add a new "descriptive text field" above your matrix question and enter your text there.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_32_tab_2">Will a value entered for a field on one page of a survey be removed if another page of that survey later hides that field?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_32_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Fields on a survey that are hidden by branching logic due to a new value being entered on that same page will have any already-entered values removed, but fields on other pages will not.</p><p>While not ideal, this is currently the expected result due to technical limitations.</p><p>This situation arises if:</p><ul><li>A survey is configured to show one section per page</li><li>A value is entered for a field on one page</li><li>On another page, a value is entered that causes branching logic to hide the field on the first page.</li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_33_tab_2">What is "Designate an email field to use for invitations to survey participants" option?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_33_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Project users may designate a field in their project to be the survey participant email field for capturing the email address to be used.</p><p>The field can be designated in the "Enable optional modules and customizations" section of the Project Setup page.</p><p>Once designated, if an email address is entered into that field for any given record, users will then be able to use that email address for any survey in the project to send survey invitations.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_34_tab_2">Is there a way to get rid of the red "must provide value" message for required fields?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_34_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, but only in survey mode. You can change this setting in the survey settings. The fields will still be required and the survey will display a warning if they are not filled out, but the red text will be gone.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_35_tab_2">How do I turn text to speech on for a specific survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_35_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can turn on text to speech on in the survey settings of each survey under "survey customizations".</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_36_tab_2">Are there different languages available for the text to speech feature?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_36_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Currently, only English is supported.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_37_tab_2">Is there any way to make a survey available for a specific time window for a specific record-for example, 24 hours before and after an appointment? </a>
                            </h4>
                        </div>
                        <div id="category_6_question_37_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>There is no way to set this within the survey settings or that redirects to the "Survey Not Available" page. Within the survey itself, you can use branching logic to hide questions based on your date's conditions. You can set up the questions to only be visible within a range that works with your relative dates using a datediff calculation. You would then have a descriptive field stating that the survey is unavailable display if the datediff calculated value falls outside of your accepted range.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_38_tab_2">How to do I set a survey expiration date for a specific survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_38_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can set the survey expiration date for any survey in the survey settings. REDCap will deactivate the survey at the specified time point.</p><p>Note: The survey will be deactivated for all instances of that survey in all arms and events. It's currently not possible to put expiration dates on specific surveys in specific events.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_39_tab_2">Can I extend the time limit on a survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_39_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can. If you set a time limit (for example, 2 weeks) on a survey and want to change it, you can go back and extend the length of time. If the survey had already closed and you extend the time limit, the old surveys will be re-opened if they are within the new time limit.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_40_tab_2">Can survey respondents save, leave, and then go back to a survey to complete the questions?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_40_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. You must enable the "Save and Return Later" option in the Modify Survey Settings section of the Project Setup tab. This option allows participants to save their progress and return where they left off any time in the future. They will be given a Return Code, which they will be required to enter in order to continue the survey.</p><p>	Note: If a project has the "Survey Login" feature enabled, Return Codes will not be used to return to the survey, but it will use the Survey Login's credentials instead.</p><p>	If participants forget their Return Code and contact you, you have access to participants codes on their Survey Results page. You will only be able to distribute lost codes if the survey responses capture identifiers.  If the survey is "anonymous" you will not be able to recover the Return Code for the participant.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_41_tab_2">Can my participants go back to a previously completed survey and make edits?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_41_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, but this feature is turned off by default for each survey. You will need to turn it on manually in the survey settings for each survey.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_42_tab_2">Can survey respondents return and modify completed surveys?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_42_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. This feature can be enabled on the Online Designer &gt; Survey Settings page under the "Save &amp; Return Later" section. Once enabled, a respondent will be able to return to their response and make any edits to it even if they have fully completed the survey.</p><p>Once enabled as part of the "Save &amp; Return Later" feature, respondents will need to provide a Return Code in order to make edits to a completed survey. If the Survey Login feature is enabled for the survey, then instead of using a Return Code, they will use their login credentials to return to the survey.</p><p>If enabled, participants who have completed the survey will still appear in the Participant List in the Compose Survey Invitations popup to allow their invitations to be resent to edit their completed response. Additionally, their survey link and survey return code will also remain in the Participant List for this same purpose.</p><p>Note: If Survey Notifications have been enabled for a survey that has the "Edit Completed Responses" option enabled, then whenever the respondent returns to the survey again and completes the survey again, it will again trigger the Survey Notifications to send an email to those users selected.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_43_tab_2">What is eConsent?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_43_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The eConsent framework in REDCap is a module that helps you obtain participant consent electronically with a REDCap survey. It is located in the Online Designer → Survey Settings → Survey Termination Options.</p><p>With the Auto-Archiver and eConsent framework, you can choose if you just want to use the Auto-Archiver or if you want to use the Auto-Archiver and eConsent framework together. The Auto-Archiver will save a PDF copy of the REDCap survey as a compact PDF in the File Repository for the project.</p><p>The eConsent framework adds an extra step to the survey consent process.You can identify the fields on the form for the participant’s first and last name and DOB, version the consent, specify the consent type, and force a signature field. When the participant completes the survey, they will be taken to a new page where the information they just completed is displayed in an inline PDF in the browser. They will be required to review and certify the information before they can submit the survey. Participants can download a copy of the consent from the inline PDF, and a copy of the certified PDF will be stored in the file repository for the researcher.</p><p>For specific questions about if you can use eConsent at your institution or what your institution requires in eConsents, contact your REDCap administrator or IRB (or equivalent).</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_44_tab_2">How do I set up the eConsent module in REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_44_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>To set up the eConsent module, go to the Online Designer and click on the Survey Settings for the consent survey. The eConsent framework is at the bottom under “Survey Termination Options” and will walk you through the information it needs you to provide. You will need to determine if you want researcher’s to be able to modify the completed consent form. The module will suggest you provide the version number for the consent and select the fields that indicate the participant’s first and last name. You can also select a field to indicate the participant’s date of birth, specify the consent  type, and force a signature field.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_45_tab_2">Where are the archived PDFs of my consents stored?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_45_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The archived PDFs are stored in the project’s file repository on the “PDF Survey Archive” tab. If you do not see a link for the File Repository under Applications on the left-hand sidebar, check your user rights to see if you have access to this feature.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_46_tab_2">Can anyone alter a consent form after it is submitted with the eConsent framework?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_46_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Whether anyone can alter a consent form after submission is determined by the researcher setting up the consent. The eConsent Framework has the option “Allow e-Consent responses to be edited by users?” If this option is checked, any user with rights to edit the survey responses would be able to edit the consent form. If it is unchecked, no one will be able to alter the submitted consent.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_47_tab_2">How do I setup a survey confirmation email?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_47_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can setup a confirmation email in the survey settings of each email in the survey termination section. Select "Yes" on the dropdown and fill in the "From", "Subject" and "Body" sections. You can also add an optional attachment.</p><p>Note: REDCap must have an email field defined for the project in order to send out the survey confirmation automatically.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_48_tab_2">Can I pipe in information from the survey into my confirmation email?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_48_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can pipe in any information from the survey or any other form associated with the record.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_49_tab_2">What kind of attachment can I send with a survey confirmation email?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_49_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can send one file of any type as long as it isn't bigger than the size limit set by the local administrator. This is usually around 16 MB.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_50_tab_2">Do the remaining reminders get canceled once a participant fills out a survey?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_50_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, Once the specific survey gets filled out by the participant or a REDCap user, all remaining reminders get cancelled automatically.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_51_tab_2">What happened to the "Preview survey" feature?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_51_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This feature is no longer available because branching logic or calculated fields would not always work correctly.  To preview your surveys, it is recommended to view the survey as a test participant when testing the project while in development status.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_6_question_52_tab_2">How does Twilio interact with REDCap to send calls and SMS messages?</a>
                            </h4>
                        </div>
                        <div id="category_6_question_52_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	The REDCap/Twilio interaction looks like this: </p> <p> 	<img src="https://redcap.vanderbilt.edu/misc/faq-twilio.png"> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Longitudinal</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_1_tab_2">What is a Longitudinal project?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_1_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>A longitudinal project is similar to a traditional data collection project in that multiple data entry forms are defined. However unlike the traditional model, forms in a longitudinal project can be completed repeatedly for a single record. The longitudinal model allows any data entry page to be repeated any given number of times across pre-defined time-points, which are specified by the user before data is collected. So rather than repeating a data entry form multiple times in the Data Dictionary, it can exist only once in the Data Dictionary but be repeated N number of times using the longitudinal model.</p><p>The longitudinal project lets you define "events" for your project that allow the utilization of data collection forms multiple times for any given database record. An "event" may be a temporal event in the course of your project such as a participant visit or a task to be performed. After events have been defined, you will need to designate the data entry forms that you wish to utilize for any or all events, thus allowing you to use a form for multiple events for the same database record. You may group your events into "arms" in which you may have one or more arms/groups for your project. Each arm can have as many events as you wish. You may use the table provided to create new events and/or arms, or modify existing ones. One arm and one event will be initially defined as the default for all databases.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_2_tab_2">How can I establish the events and scheduling intervals for my project?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_2_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The Define My Events page allows you to establish the events and scheduling intervals for your project. An "event" may be a temporal visit in the course of your project such as a participant visit or a task to be performed. After events have been defined, you may use them and their Days Offset value to generate schedules. For data collection purposes, you will additionally need to designate the data entry forms that you wish to utilize for any or all events, thus allowing you to use a form for multiple events for the same database record. You may group your events into "arms" in which you may have one or more arms/groups for your project. Each arm can have as many events as you wish. To add new events provide an Event Name and Date Offset for that event and click the Add New Event button.</p><p>If you will be performing data collection on this project then once you have defined events in the Define My Events page, you may navigate to the Designate Instruments For My Events page where you may select the data collection instruments that you with to utilize for each event that you defined.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_3_tab_2">In longitudinal projects, how can I set up linkages between events and data entry forms?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_3_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can use the Designate Forms for my Events page to create linkages between events and data entry forms. In the Designate Forms for my Events page each arm of your study has its own tab. Choose an arm and click the Begin Editing button to link data entry forms to events. Check off boxes to indicate the forms which should be completed for any given event and then click the Save button. You will see a grid that displays the data entry forms that are assigned for completion during each event. Take care to designate forms for your events while the project is in development mode. These associations can only be changed by the REDCap Administrator after the project is in production and should be made with caution to ensure existing data are not corrupted.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_4_tab_2">Can I add more events or instruments to a longitudinal project that is in production?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_4_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, once you are in production you can add more events and instruments, and assign instruments to new events. To delete an event or an instrument from an event, you will need the help of an administrator to help prevent accidental data loss.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_5_tab_2">How is longitudinal data stored?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_5_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In the traditional data collection model and for surveys, each project record is stored independently as a separate row of data, which can be seen when exported. But for longitudinal projects, each row of data actually represents that particular time-point (event) per database record.</p><p>For example, if four events are defined for the project, one record will have four separate rows of data when exported.  The data export will include a column "redcap_event_name" indicating the unique event name for each row.</p><p>Longitudinal projects are most commonly created for clinical and research data. A longitudinal project is created by selecting the "Longitudinal / repeating forms" collection format for data entry forms when creating or requesting a new project.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_6_tab_2">How can I register a subject in a multi-arm study before the determination as to which arm they belong in can be made?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_6_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can set up an arm as a "screening and enrollment" arm. Once a subject becomes enrolled he or she can be added to an "active" arm.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_7_tab_2">Can you transfer a subject from one arm to another?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_7_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>First, export the data that you want to transfer out of REDCap. Save as a new CSV file and update the information in redcap_event_name to match the new event name. If you need to find this in REDCap, go to the "Define My Events" page and look for "Unique event name" in the last column. Make sure the variable names match the variables the data will go in, if you are also moving the data to a different form. Save the CSV and go to the "Data Import Tool" under Applications on the sidebar. Choose to upload you CSV and review the data to make sure it is all included and going into the correct variables, event, and arm before finalizing the import.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_8_tab_2">What is the scheduling module and how does it work with the calendar?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_8_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The scheduling module uses the information in the “Date Offset” column of the “Define My Events” section in a longitudinal project to allow you to schedule the dates actions in different events should occur. You will select a start date for an individual record and REDCap will develop a schedule based on the days offset you specified, flagging any dates that would occur on a weekend in red. You will have the option to edit these dates, then create a schedule.</p><p>These schedule events will appear on the calendar (under Applications on the sidebar). When you click on a scheduled event on the calendar, a popup will open allowing you to specify the event status, time, and notes and providing quick links to the different forms for that record in that specific event.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_7_question_9_tab_2">How can I remove a subject in a multi-arm study from one arm, but not all arms?</a>
                            </h4>
                        </div>
                        <div id="category_7_question_9_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Go to the first form in the arm from which the subject will be removed and delete the record. This will remove the subject from that arm, but not other arms.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Copy a Project</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_8_question_1_tab_2">Can I create a copy of my project?</a>
                            </h4>
                        </div>
                        <div id="category_8_question_1_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes.  If you have the right to create/request new projects, you can navigate to the Project Setup &gt; Other Functionality page and request a "Copy" of the project.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_8_question_2_tab_2">How do I move a project between different REDCap installations?</a>
                            </h4>
                        </div>
                        <div id="category_8_question_2_tab_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Provided that both your origin REDCap installation and your destination REDCap installation are on a REDCap version of 6.12.0 or higher, you can perform a CDISC ODM export of the project's metadata on the Other Functionality tab of the Project Setup page. <br> You have two options for export: </p><p>- A export of just the full project setup (including all the variables, forms and settings) <br>- A export with the full project setup plus all the data captured so far. </p><p>Note: Both export options do not include log files or user rights. </p><p> To load a CDISC ODM export in your destination REDCap installation, Create or Request a new project and select the "Upload a REDCAp project XML file" option. <br>This option will allow you to upload your previously downloaded XML file. </p><p> Note: Do not upload a data dictionary file during project creation, the system only accepts the CDISC ODM format. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="3" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-3"><div class="faqHeader">General Instrument Design</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_1_tab_3">Are there any restrictions to what you can name a variable/field?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Variable names cannot be duplicated and should always start with a letter. They must be lowercase and may contain only letters, numbers, and underscores. Although a maximum length of 26 characters is allowed, by convention, variable names should be as short in length as possible while maintaining meaning. Note: the terms "variable names" and "field names" are used interchangeably in REDCap.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_2_tab_3">Are there any restrictions to what you can name a data collection instrument?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Naming instruments using the Online Designer do not have restrictions.  Naming instruments using the Data Dictionary is restricted to lowercase and may contain only letters, numbers, and underscores.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_3_tab_3">Are there restrictions to the number of data collection instruments you can have in one project?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Currently, there are no restrictions on the number of data collection instruments per project.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_4_tab_3">Are there restrictions to the number of fields you can have in one instrument?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No. There are no restrictions on the length or number of fields per instrument. The best practice is to keep instruments fairly short for easier data entry, and to ensure that you're saving data to the server more frequently.</p><p>For long surveys, you can use section headers and enable the feature "Display Questions" = One Section Per Page.  This will allow participants to save each section when they click "next page".</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_5_tab_3">Can multiple users build/edit a project at the same time/simultaneously?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Multiple users can build or edit a project simulataneously, but it is not a best practice, especially if they are working on the same part of the project. It is very easy to make changes the other person isn't aware of, to make changes the contradict the changes the other person is making, or to make changes that will affect the data in ways you don't expect--especially when paired with the other person's changes. If multiple people are making changes at the same time, they need to communicate very closely, and the changes need to be tested very carefully.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_6_tab_3">What is the difference between a data entry form and a survey?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap defines Data Collection Instruments as "data entry forms" and "surveys".</p><p>With "surveys" you can collect data directly from participants.  Participants will access your questions via a secure webpage.  No authentication is required; however, you can enable the Survey Login feature if needed.</p><p>With "data entry forms", data is entered by authorized REDCap project users.  REDCap log-in access and project rights are required to view and edit the data entry forms.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_7_tab_3">Can I insert a smiley face or emoticon or an image into a field choice label?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_7_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can hardcode emoticons into the label--you can find a list of the codes here: <a href="http://character-code.com/emoticons-html-codes.php">http://character-code.com/emoticons-html-codes.php</a></p><p>If you use this option, make sure to test using the data dictionary and test it in different browses to make sure they all recognize the codes you're using.</p><p>The other option is to create a descriptive field with images in the proper places and put it above the radio buttons of LH alignment.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_8_tab_3">How to set/unset that changes to a record require providing a reason for the change?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_8_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Project Setup tab -&gt; Enable optional modules and customizations section -&gt; click on "Additional customizations" button -&gt; check/uncheck "<u>Require a 'reason' when making changes to existing records?</u>"</p><p><strong><u>Require a 'reason' when making changes to existing records?</u></strong><br>Require users to enter a reason (200 character max) in a text box when making any data changes to an already existing record on a data collection instrument. The prompt is triggered when clicking the Save button on the page. Any 'reasons' entered can then be viewed anytime afterward on the Logging page.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_9_tab_3">Is it possible to change the format (colors, text) of the form, field or text display?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_9_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The general data entry templates are static and cannot be changed. Survey Themes in the Survey Settings page allows you to customize the font and background colors for many sections of a survey. <br> 	REDCap does allow the use of some HTML and CSS in the Field Label and Field Notes.  Please note that HTML tags print as text on the pdf exports/forms and do not print the formats created with the HTML tags. <br> 	Check out this example survey for formatting ideas: <a href="https://redcap.vanderbilt.edu/surveys/?s=JA3AXMHYC7">https://redcap.vanderbilt.edu/surveys/?s=JA3AXMHYC7</a></p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_10_tab_3">How can I improve the layout of my form/survey for data entry? What is field embedding?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_10_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The best way to improve the layout of your form or survey is with field embedding. Field embedding is a way to customize data entry forms and surveys to make them look exactly how you want. Field Embedding allows you to reposition field elements on a survey page or data entry form so that they get embedded in a new location on that same page. For example, you may place fields in a grid/table for a more compact user-friendly page, or you can position some fields close together in a group if they are related. You do this by including the variable name in { } brackets where you want it to display on a form. For example: {var1}</p><p>You can see examples and read a longer explanation of field embedding inside any REDCap project. Look for the yellow “Field embedding” button on the Project Setup page in the “Design your data collection instruments &amp; enable your surveys” box, at the top of the page when you edit a form in the Online Designer, or under the Variable Name box when you are editing a specific field. You can also see a more detailed explanation here: <a href="https://redcap.vanderbilt.edu/redcap_v10.3.2/DataEntry/field_embedding_explanation.php">https://redcap.vanderbilt.edu/redcap_v10.3.2/DataEntry/field_embedding_explanation.php</a></p><p>Note: When you download a .pdf file of an instrument with Field Embedding, you will see the instrument as it appears in Online Designer, not as a survey respondent or data entry person will see the instrument when creating a record. </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_9_question_11_tab_3">How can I put the “other” text box by my answer choice in a multiple choice question?</a>
                            </h4>
                        </div>
                        <div id="category_9_question_11_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>You can do this with field embedding. Create both your multiple choice question with all of your answer choices, and create a separate text field where people can enter the “Other” answer clarification.</p><p>In your multiple choice question, go down to the list of answers. You want to add the variable name for your “other” text box in { } next to the “Other” answer choice. For example:</p><p>99, Other {other_answer}</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Online Designer / Data Dictionary</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_1_tab_3">What is the Field Annotation?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This metadata field was added in v6.5. An annotation can be added to any field via the Online Designer or Data Dictionary (column R). It can be used for several purposes, such as for the bookkeeping of a project's field structure (as metadata about the given field) for reference purposes regarding what the field represents or how it should be used (during data entry, analysis, etc.). Field annotations are not displayed on any page but are merely for reference. Field annotations can also be used to map the field to various standards (e.g., CDISC, SNOMED, LOINC) using whatever notation the user sees fit (e.g., using a simple ID code for the standard or a complex XML structure containing information about how to transform the data to the standard). Since it is an annotation for reference purposes, REDCap will not do anything with the field annotation text on its own, but the annotation can be obtained by users at any time for any purpose (typically accessed via the Data Dictionary download or via the API metadata export).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_2_tab_3">I get an error message when I attempt to upload a really large data dictionary.  Does REDCap set a limit on the file size of an imported data dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>REDCap can be configured to allow large files to be uploaded.  You'll need to contact your local REDCap Administrator about your institution's file upload limits.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_3_tab_3">What is the Data Dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Data Dictionary is a specifically formatted spreadsheet in CSV (comma separated values format) containing the metadata used to construct data collection instruments and fields. The changes you make with the data dictionary are not made in real time to the project (off-line method).  The modified file must first be uploaded successfully before changes are committed to the project.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_4_tab_3">What is the Online Designer?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Online Designer will allow you to make create/modify/delete data collection instruments and fields (questions) very easily using your web browser.  Changes are made in real time and available immediately for review and testing.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_5_tab_3">How do I make edits to a data dictionary for a project in development or already in production?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>1. If the project is still in development, then download the current data dictionary and save as Version 0.  This step is not necessary for a project already in production since REDCap stores all previous versions of the data dictionary (since moving to production) in "Project Revision History".</p><p>Note: If study records already exist in the database, then it is good practice to export the raw data before proceeding.  It is important to have a backup of your project as it currently exists should you need to go back to the original version.</p><p>2. Make a copy of the Version 0 database and save as Version 1 in CSV format.</p><p>3. Make edits/additions/deletions to Version 1 and save.</p><p>4. Upload the entire revised Version 1 data dictionary to your project.</p><p><strong>Warning</strong>: Uploading the new data dictionary will overwrite, not update, the original data dictionary (Version 0), so it is necessary to upload the revised file in its entirety. If you have multiple developers on a project, it is also important to communicate and coordinate revisions. You do not want to be working on an outdated "local" version of your data dictionary if others have been updating the project in REDCap. Always download a new current version prior to making changes.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_10_question_6_tab_3">How do I define a biomedical ontology lookup in the data dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_10_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Setting up a biomedical ontology in the data dictionary is done by first defining a variable with the text field type without any other validations attached. <br>You will also have to define which ontology you want for this variable. You do this by inserting the text "BIOPORTAL:" plus the correct shorthand code into the "choices, Calculations, OR Slider Labels" column in the data dictionary (typically column F). </p><p>E.g. A lookup for the ICD-10 ontology would need to be coded as "BIOPORTAL:ICD10". </p><p>Be careful to make sure that the entire code is in all caps and does not contain the quotation marks. </p><p>The ontology lookup short hand codes can be found in two ways:</p><p>1) In the online designer, look for the biomedical ontology dropdown (only visible in text variables). Each ontology will have the shorthand code displayed before the dash. </p><p>e.g. Entry: "ICD10 - International Classification of Diseases, version 10". The "ICD10" part is the shorthand code.</p><p>2) Go to the <a rel="noopener noreferrer" href="https://bioportal.bioontology.org/" target="_blank">bioportal website</a> and look for your ontology of choice. In the description of any ontology, there will be a field for "acronym". That acronym is what REDCap uses as a shorthand code. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Field Types and Validation</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_1_tab_3">Can I populate radio buttons, dropdowns and checkbox field choices using an "if then" statement?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>There is currently no way of populating field choices dynamically.  You can create multiple fields and response option lists and hide or display them using branching logic.  In certain circumstances, you may be able to populate a dropdown list from another REDCap field, but this is a very specific use case and requires contacting a REDCap Admin.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_2_tab_3">What are the field types?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The Field Type dictates how the field will be shown on the data entry form.</p><p>Options include:</p><table><tbody><tr><td><strong>TEXT</strong></td><td>     - single-line text box (for text and numbers)</td></tr><tr><td><strong>NOTES</strong></td><td>     - large text box for lots of text</td></tr><tr><td><strong>DROPDOWN</strong></td><td>     - dropdown menu with options</td></tr><tr><td><strong>RADIO</strong></td><td>     - radio buttons with options</td></tr><tr><td><strong>CHECKBOX</strong></td><td>     - checkboxes to allow selection of more than one option</td></tr><tr><td><strong>FILE</strong></td><td>     - upload a document</td></tr><tr><td><strong>CALC</strong></td><td>     - perform real-time calculations</td></tr><tr><td><strong>SQL</strong></td><td>     - select query statement to populate dropdown choices</td></tr><tr><td><strong>DESCRIPTIVE</strong></td><td>     - text displayed with no data entry and optional image/file attachment</td></tr><tr><td><strong>SLIDER</strong></td><td>     - visual analogue scale; coded as 0-100</td></tr><tr><td><strong>YESNO</strong></td><td>     - radio buttons with yes and no options; coded as 1, Yes | 0, No</td></tr><tr><td><strong>TRUEFALSE</strong></td><td>     - radio buttons with true and false options; coded as 1, True | 0, False</td></tr><tr><td><strong>CALC</strong><br></td><td>     - write a calculation that will output a numerical value<br></td></tr><tr><td><strong>SIGNATURE</strong><br></td><td>     - draw signature with finger or house; in data dictionary, field type is "FILE" with Text Validation Type "signature" <br></td></tr></tbody></table></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_3_tab_3">What are the possible Text Validation Types?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix">  <p>Certain text validation types must be enabled by a REDCap Admin. If you do not see an option below in your instance, contact your REDCap Administrator.</p>  <table><tbody><tr><td>Validation Annotation</td><td>Example</td><td>Notes</td></tr><tr><td>date_dmy</td><td>31-12-2008</td><td><br></td></tr><tr><td>date_mdy</td><td>12-31-2008</td><td><br></td></tr><tr><td>date_ymd</td><td>2008-12-31</td><td><br></td></tr><tr><td>datetime_dmy</td><td><p>16-02-2011 17:45</p></td><td><br></td></tr><tr><td>datetime_mdy</td><td>02-16-2011 17:45<br></td><td><br></td></tr><tr><td>datetime_ymd</td><td>2011-02-16 17:45<br></td><td><br></td></tr><tr><td>datetime_seconds_dmy</td><td>16-02-2011 17:45:23<br></td><td><br></td></tr><tr><td>datetime_seconds_mdy</td><td>02-16-2011 17:45:23<br></td><td><br></td></tr><tr><td>datetime_seconds_ymd</td><td>2011-02-16 17:45:23<br></td><td><br></td></tr><tr><td>email</td><td><a href="mailto:john.doe@vanderbilt.edu">john.doe@vanderbilt.edu</a></td><td><br></td></tr><tr><td>integer</td><td>1, 4, -10<br></td><td>whole number with no decimal<br></td></tr><tr><td>alpha_only</td><td>name</td><td>letters only, no numbers, spaces or special characters<br></td></tr><tr><td>number</td><td>1.3, 22, -6.28, 3.14e-2<br></td><td>a general number or scientific notation (no spaces)<br></td></tr><tr><td>number_1dp_comma_decimal</td><td><br></td><td>number to 1 decimal place - comma as decimal<br></td></tr><tr><td>number_1dp</td><td><br></td><td>number to 1 decimal place<br></td></tr><tr><td>number_2dp_comma_decimal</td><td><br></td><td>number to 2 decimal place - comma as decimal<br></td></tr><tr><td>number_2dp</td><td><br></td><td><p>number to 2 decimal place</p></td></tr><tr><td>number_3dp_comma_decimal</td><td><br></td><td><p>number to 3 decimal place - comma as decimal</p></td></tr><tr><td>number_3dp</td><td><br></td><td><p>number to 3 decimal place</p></td></tr><tr><td>number_4dp_comma_decimal</td><td><br></td><td><p>number to 4 decimal place - comma as decimal</p></td></tr><tr><td>number_4dp</td><td><br></td><td><p>number to 4 decimal place</p></td></tr><tr><td>number_comma_decimal</td><td><br></td><td>number comma as decimal<br></td></tr><tr><td>phone_australia</td><td><br></td><td><br></td></tr><tr><td>phone</td><td>615-322-2222</td><td>      <ul><li>Area codes start with a number from 2-9, followed by 0-8 and then any third digit.</li><li>The second group of three digits, known as the central office or schange code, starts with a number from 2-9, followed by any two digits.</li><li>The final four digits, known as the station code, have no restrictions.</li></ul></td></tr><tr><td>postalcode_australia</td><td>2150</td><td>4-digit number<br></td></tr><tr><td>postalcode_canada</td><td>K1A 0B1<br></td><td>Format: A0A 0A0 where A is a letter and 0 is a digit<br></td></tr><tr><td>ssn</td><td>123-12-1234</td><td>Format: xxx-xx-xxxx<br></td></tr><tr><td>time_hh_mm_ss</td><td>04:12:22</td><td>time in hours, minutes, and seconds (HH:MM:SS)</td></tr><tr><td>time</td><td>19:30</td><td>military time (HH:MM)<br></td></tr><tr><td>time_mm_ss</td><td>31:22</td><td>Time in minutes and seconds (MM:SS) </td></tr><tr><td>vmrn<br></td><td><p>0123456789</p></td><td><p>10 digits</p></td></tr><tr><td>Zipcode</td><td>01239</td><td>U.S. Zipcode<br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table> </div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_4_tab_3">What to consider when choosing radio button vs drop-down?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Dropdown:</p><ol><li>Ability to use short cut keys </li><li>Less space on forms; use when you have limited space</li></ol><p>	Radio Button:</p><ol><li>Good when you need your choices visible </li><li>Good option for minimal response options </li><li>Available with the matrix options when building forms</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_5_tab_3">Is there a question type that is a radiobutton/checkbox/dropdown with a text box for "Other, specify"?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No, this specific question type is not available. You can add a text field after the question and use branching logic so that if "Other" is selected, a text box appears to capture the data.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_6_tab_3">Can I set minimum and maximum ranges for certain fields?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If validation is employed for text fields, min and max values may be utilized. Min, max, neither or both can be used for each individual field. The following text validation types may utilize min and/or max values:</p><table><tbody><tr><td><strong>DATE_YMD</strong></td></tr><tr><td><strong>DATE_MDY</strong></td></tr><tr><td><strong>DATE_DMY</strong></td></tr><tr><td><strong>TIME</strong></td></tr><tr><td><strong>DATETIME_YMD</strong></td></tr><tr><td><strong>DATETIME_MDY</strong></td></tr><tr><td><strong>DATETIME_DMY</strong></td></tr><tr><td><strong>DATETIME_SECONDS_YMD</strong></td></tr><tr><td><strong>DATETIME_SECONDS_MDY</strong></td></tr><tr><td><strong>DATETIME_SECONDS_DMY</strong></td></tr><tr><td><strong>NUMBER</strong></td></tr><tr><td><strong>INTEGER</strong></td></tr></tbody></table><strong></strong></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_7_tab_3">What is the character limit for a variable name, field label, text typed into a "text box (short text)", and text typed into a "notes box (paragraph text)"?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_7_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The maximum number of characters are:</p><ul><li>Field name: *Recommended: &lt;26, Max: 100 </li><li>Field label: ~65,000 </li><li>Text typed into a "text box" field: ~65,000 </li><li>Text typed into a "notes box" field: ~65,000</li></ul><p>*Most stats packages (SAS, STATA...) will truncate variable/field names to max of 26 characters.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_8_tab_3">Is it possible to restrict text inputs to a defined length or digit/character combination?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_8_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can restrict text inputs by using custom field validation types.  Custom field validation types must be created by the REDCap Development team.  Your REDCap Administrator will be able to submit requests for new custom field validation types.  The request will be evaluated by the concerned team and approved requests will be fulfilled.  However it is not possible to specify a deadline for meeting the request.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_9_tab_3">Can I shorten an instrument by grouping related questions together using a columnar format?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_9_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>It is not possible to build survey or data entry forms in a columnar format in REDCap.  You can use a combination of branching logic, section headers and descriptive text to shorten the instrument and group related questions.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_10_tab_3">What are the Custom Alignment codes for the data dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_10_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>RV - right vertical</p><p>RH - right horizontal</p><p>LV - left vertical</p><p>LH - left horizontal</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_11_tab_3">Can I upload files to attach to individual subject records?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_11_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can upload documents for individual records.</p><p>To create a new document upload field in the Data Dictionary for any given REDCap project, set the Field Type = 'file'. You may add as many 'file' fields as needed to your data collection instruments.</p><p>Documents can be uploaded and downloaded by navigating to the record's data entry page and clicking the file link. A document can be deleted at any time, and there is no limit to how many times the document can be replaced by uploading another file to that record's file upload field.</p><p>Contact your REDCap Administrator to confirm if this field type is available and what the maximum upload file size is at your institution.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_12_tab_3">Are data from checkbox (choose all that apply) field types handled differently from other field types when imported or exported?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_12_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. When your data are exported, each option from a checkbox field becomes a separate variable coded 1 or 0 to reflect whether it is checked or unchecked. By default, each option is pre-coded 0, so even if you have not yet collected any data, you will see 0's for each checkbox option. The variable names will be the name of the field followed by the option number. So, for example, if you have a field coded as follows:</p><p>Race</p><p>1, Caucasian</p><p>2, African American</p><p>3, Asian</p><p>4, Other</p><p>In your exported dataset, you will have four variables representing the field Race that will be set as 0 by default, coded 1 if the option was checked for a record. The variable names will consist of the field name. three underscores, and the choice value:</p><p>race___1 <br>race___2 <br>race___3 <br>race___4 </p><p>Notes:</p><ul><li>when you import data into a checkbox field, you must code it based on the same model</li><li>negative values can be used as the raw coded values for checkbox fields. Due to certain limitations, negative values will not work when importing values using the Data Import Tool, API and cause problems when exporting data into a statistical analysis package. The workaround is that negative signs are replaced by an underscore in the export/import-specific version of the variable name (e.g., for a checkbox named "race", its choices "2" and "-2" would export as the fields</li></ul><p style="margin-left: 60px;">race___2 </p><p style="margin-left: 60px;">race____2</p><p>A checkbox field can be thought of as a series of yes/no questions in one field. Therefore, a yes (check) is coded as 1 and a no (uncheck) is coded a 0. An unchecked response on a checkbox field is still regarded as an answer and is not considered missing.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_13_tab_3">How do I setup standard values for missing data codes?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_13_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The "Missing Data Codes" functionality can be setup in the "Additional Customizations" Menu in the Project setup page. That menu also includes additional documentation on how to best use "Missing Data Codes".</p><p><br>It's recommended that you consult a statistician about the appropriate data codes for your data set. </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_14_tab_3">What is the Question Number (surveys only) column in the data dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_14_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>For surveys, you can use this column to enter number of the survey question for screen display.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_15_tab_3">How do I create a set of variables for an unknown number of possible responses for the same question?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_15_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>For a question with an unknown number of answers, such as how many medications someone is taking, you may want to display the fields only as they are needed. REDCap currently is not able to dynamically create fields; however, there is a way to use branching logic to approximate this.</p><p>If you can estimate the maximum number of fields you will need, you can create that many copies of your field to hide and display as needed using branching logic.</p><p><strong>Example 1</strong>: If you think 15 is a good maximum, you would create 15 copies of the field. Then, in order to only show the fields that are needed, you could create a "count" variable. Your branching logic would look like this:</p><p>field1: [count]&gt;0</p><p>field2: [count]&gt;1</p><p>field3: [count]&gt;2</p><p>and so on.</p><p>If your variable is medications, and the respondent takes 2 medications, you enter 2 in [count] variable, then the med1 and med2 fields appear. If they take 3, you enter that, and meds1 to med3 fields appear.</p><p><strong>Example 2a:</strong> Another method is to first create the maximum number of fields that you estimate will be needed, as above, and then hide and display each field as the previous field receives data. Using this method will cause each field to show up as needed. Your branching logic would look like:</p><p>field2: [field1] &lt;&gt; "" or [field2] &lt;&gt; ""</p><p>field3: [field2] &lt;&gt; "" or [field3] &lt;&gt; ""</p><p>field4: [field3] &lt;&gt; "" or [field4] &lt;&gt; ""</p><p>and so on.</p><p>The fields in this example are text fields. If field1 "does not equal blank" (aka if data is entered for field1), then field2 will display. This example will also retain any given field that happens to have data already.</p><p><strong>Example 2b:</strong> If you want to only show a field if there is not a previous field that is empty, the branching logic will need to check every previous field:</p><p>field2: [field1] &lt;&gt; ""</p><p>field3: [field1] &lt;&gt; "" and [field2] &lt;&gt; ""</p><p>field4: [field1] &lt;&gt; "" and [field2] &lt;&gt; "" and [field3] &lt;&gt; ""</p><p>and so on.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_16_tab_3">How do I indicate "dates" in the data dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_16_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Text Validation Types: Use for text field data validation</p><table><tbody><tr><td>Format</td><td>Example</td></tr><tr><td><strong>DATE_DMY</strong></td><td>16-02-2011</td></tr><tr><td><strong>DATE_MDY</strong></td><td>02-16-2011</td></tr><tr><td><strong>DATE_YMD</strong></td><td>2011-02-16</td></tr><tr><td><strong>DATETIME_DMY</strong></td><td>16-02-2011 17:45</td></tr><tr><td><strong>DATETIME_MDY</strong></td><td>02-16-2011 17:45</td></tr><tr><td><strong>DATETIME_YMD</strong></td><td>2011-02-16 17:45</td></tr><tr><td><strong>DATETIME_SECONDS_DMY</strong></td><td>16-02-2011 17:45:23</td></tr><tr><td><strong>DATETIME_SECONDS_MDY</strong></td><td>02-16-2011 17:45:23</td></tr><tr><td><strong>DATETIME_SECONDS_YMD</strong></td><td>2011-02-16 17:45:23</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_17_tab_3">How are dates formatted?  Can I change the date format?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_17_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Dates can be formatted as mm-dd-yyyy, dd-mm-yyyy, and yyyy-mm-dd by using the text field &gt; validation. These formats cannot be modified. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_18_tab_3">Can I change date formats if I've already entered data?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_18_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Any date fields that already exist in a REDCap project can be easily converted to other formats without affecting the stored data value.  After altering the format of the existing date fields, dates stored in the project will display in the new date format when viewed on the survey/form. Therefore, you change the date format of a field without compromising the stored data.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_19_tab_3">Why can't I see the different date formats in the Online Designer?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_19_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>New validation types are not automatically available will need to be enabled by your REDCap Administrator. Once enabled, they'll appear in the text validation drop-down list in the Online Designer. All formats are available via the Data Dictionary.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_20_tab_3">How are the different date formats exported?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_20_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Data Export Tool will only export dates, datetimes, and datetime_seconds in YYYY-MM-DD format. Previously in 3.X-4.0, datetimes were exported as YYYY-MM-DD HH:MM, while dates were exported as MM/DD/YYYY.  By exporting only in YYYY-MM-DD format it is more consistent across the date validation field types.If exporting data to a stats package, such as SPSS, SAS, etc., it will still import the same since the syntax code has been modified for the stats package syntax files to accommodate the new YMD format for exported dates. The change in exported date format should not be a problem with regard to opening/viewing data in Excel or stats packages.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_21_tab_3">How are the different date formats imported?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_21_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>While the different date formats allow users to enter and view dates in those formats on a survey/form, dates must still only be imported either in YYYY-MM-DD or MM/DD/YYYY format.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_22_tab_3">How do I display unknown dates?  What's the best way to format MM-YYYY?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_22_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When you set a text field validation type = date, the date entered must be a valid completed date. To include options for unknown or other date formats, you may need to break the date field into multiple fields. For Days and Months, you can create dropdown choices to include numbers (1-31, 1-12) and UNK value. For Year, you can define a text field with validation = number and set a min and max value (ex: 1920 - 2015).The advantage of the multi-field format is that you can include unknown value codes. The disadvantages are that you may need to validate date fields after data entry (i.e. ensure no Feb 31st) and there will be additional formatting steps required to analyze your data fields.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_23_tab_3">Can I enter dates without dashes or slashes?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_23_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Date values can be entered using several delimiters (period, dash, slash, or even a lack of delimiter) but will be reformatted to dashes before saving it (e.g. 05.31.09 or 05312009 will automatically be reformatted to 05-31-2009 for MM-DD-YYYY format).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_24_tab_3">Is there an easy way to keep the user from entering future dates on a form?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_24_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If you have another field validated as a date and with the @TODAY (and possibly the @HIDDEN or @READONLY), then you could use a Data Quality rule with the "Execute in real time on data entry forms" checkbox checked.  The DQ rule real time execution won't work on a survey, so on a survey you would need to settle for a descriptive text field that displays an error message if the date is greater than your date field with @TODAY in it.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_25_tab_3">Is there a way to hide the "today" button on date fields when it is not applicable to the question?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_25_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. You can turn it off on the project level by going to "Enable optional modules and customizations" on the Project Setup page. Go to "Additional Customizations" and uncheck "Display the Today/Now button for all date and time fields on forms/surveys?"</p><p>To turn it off on the field level, you can use the actin tag @HIDEBUTTON on that field.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_26_tab_3">How do you calculate e to a power in REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_26_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap doesn't have a specific function for e, so you will need to use the numerical equivalent to e and calculate on that. For example:</p><p>(2.718281828) ^ ([field_1]). Both sides of the exponent need to be encased in parentheses.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_11_question_27_tab_3">What are "identifiers"?</a>
                            </h4>
                        </div>
                        <div id="category_11_question_27_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>There are 18 pieces of information that are considered identifiers (also called protected health information, or PHI) for the purposes of HIPAA compliance. When you indicate a variable as an Identifier, you have the option to <strong>"de-identify" your data on data exports</strong>. In the Data Export Tool, the identifier variables appear in red and there are de-identification options you can select prior to exporting the data.</p><p>The 18 HIPAA identifiers are:</p><table><tbody><tr><td>1.</td><td>Name</td></tr><tr><td>2.</td><td>Fax number</td></tr><tr><td>3.</td><td>Phone number</td></tr><tr><td>4.</td><td>E-mail address</td></tr><tr><td>5.</td><td>Account numbers</td></tr><tr><td>6.</td><td>Social Security number</td></tr><tr><td>7.</td><td>Medical Record number</td></tr><tr><td>8.</td><td>Health Plan number</td></tr><tr><td>9.</td><td>Certificate/license numbers</td></tr><tr><td>10.</td><td>URL</td></tr><tr><td>11.</td><td>IP address</td></tr><tr><td>12.</td><td>Vehicle identifiers</td></tr><tr><td>13.</td><td>Device ID</td></tr><tr><td>14.</td><td>Biometric ID</td></tr><tr><td>15.</td><td>Full face/identifying photo</td></tr><tr><td>16.</td><td>Other unique identifying number, characteristic, or code</td></tr><tr><td>17.</td><td>Postal address (geographic subdivisions smaller than state)</td></tr><tr><td>18.</td><td>Date precision beyond year</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Matrix Fields</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_1_tab_3">How do I create a matrix of fields using the Online Designer?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Navigate to the Online Designer and click the "Add Matrix of Fields" button that will appear either above or below each field. It will open up a pop-up where you can set up each field in the matrix. You can supply the field label and variable name for each field in the matrix, and you may also designate any as a required field. You have the option to display a section header above the matrix. You will also need to set the answer format for the matrix, either Single Answer (Radio Buttons) or Multiple Answers (Checkboxes), and then the matrix choice columns. Setting up the choices is exactly the same as for any normal multiple choice field in the Online Designer by providing one choice per line in the text box. Lastly, you will need to provide a matrix group name for your matrix of fields. The matrix group name is merely a tag that is used to group all the fields together in a single matrix group. The matrix group name can consist only of lowercase letters, numbers, and underscores, and the group name must not duplicate any other matrix group name in the project. Once you have provided all the requisite information for the matrix, click the Save button and the matrix will be created and displayed there with your other fields in the Online Designer.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_2_tab_3">Why isn't the header for my matrix field hidden if all of the fields in the matrix are hidden?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Matrix Field Header is really just a Section Header. Like all Section Headers, it is only hidden if all of the fields in the section are hidden. Fields that come after the matrix but before another Section Header count as being part of the section.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_3_tab_3">How do I create a matrix of fields using the Data Dictionary?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In a data dictionary, creating a matrix of fields is as easy as creating any regular radio button field or checkbox field. Create your first field in the matrix as either a radio or checkbox field type (since matrix fields can only be either of these) by adding it as a new row in the data dictionary. You must provide its variable name and form name (as usual), then set its field type as either "radio" or "checkbox". Then set its field label in column E, its multiple choice options in column F, and then lastly in column P you must provide a Matrix Group Name. </p><p>The matrix group name is how REDCap knows to display these fields together as a matrix. Without a matrix group name, REDCap will display the fields separately as normal radio buttons or checkboxes. </p><p>The matrix group name can consist only of lowercase letters, numbers, and underscores, and the group name must not duplicate any other matrix group name in the project. </p><p>After you have created your first field for the matrix and have given it a matrix group name, you may now create the other fields in the matrix in the rows directly below that field. </p><p>To save time, it is probably easiest to simply copy that row and paste it as the next immediate row in the Data Dictionary. Then you only need to modify the variable name and label for the new row. Once you have created all your fields for the matrix, you can upload your data dictionary on the "Data Dictionary Upload" page in your REDCap project, and those fields will be displayed as a matrix on your data collection instrument. </p><p>NOTE: All fields in a matrix must follow the following rules: </p><ol><li>must be either a "radio" or "checkbox" field type, </li><li>must have the *exact* same choices options in column F, </li><li>must have the same matrix group name in column P. </li></ol><p>If these requirements are not met, the "Upload Data Dictionary" page will not allow you to upload your data dictionary until these errors are fixed.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_4_tab_3">How do I convert existing non-matrix multiple choice fields into a matrix of fields?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Any existing group of radio button fields or checkbox fields in a REDCap project might possibly be converted into a matrix of fields. In order for fields to be grouped together into a matrix, the following things are required: </p><ol><li>fields must all be a Radio Button field or all be a Checkbox field, </li><li>they must have the *exact* same multiple choice options (same option label AND same raw coded value), and </li><li>they must all be adjacent to each other on the same data collection instrument (or if not, they can be moved first so that they are adjacent). </li></ol><p>A matrix can be created only if those three conditions are met. The conversion of regular checkbox/radio fields into a matrix of fields cannot be done in the Online Designer but only using the Data Dictionary. To accomplish this:</p><ol><li> Download the existing data dictionary for the project from the "Upload Data Dictionary" page. </li><li>Add to column P (i.e. Matrix Group Name) the matrix group name for *every* field that will be in the matrix.  </li><li>Save and upload the data dictionary on the "Data Dictionary Upload" page</li><li>Confirm those fields display as a matrix on your data collection instrument instead of separate fields.</li></ol><p>NOTE on Matrix Group name: The matrix group name is a tag that is used to group all the  fields together in a single matrix group. The matrix group name can  consist only of lowercase letters, numbers, and underscores, and the  group name must not duplicate any other matrix group name in the  project. The group name is not ever displayed on the form/survey during  data entry, but is used only for design and organizational purposes. The  matrix group name can be any value (even an arbitrary value), but it  may be helpful to name it something related to the fields in the group  (e.g. "icecream" if all the matrix fields are about ice cream).</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_5_tab_3">What is a matrix of fields in REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap can display a matrix group of fields in either Single Answer format (i.e. radio buttons) or Multiple Answer format (i.e. checkboxes). A matrix allows you to display a group of similar multiple choice fields in a very compact area on a page. This makes data entry forms and surveys much shorter looking. Using matrix fields is especially desirable on surveys because survey respondents are much less likely to leave a survey partially completed if the survey appears shorter, as opposed to looking very long, which can feel daunting to a respondent. So having compact sections of questions can actually improve a survey's response rate. </p><p>A matrix can have as many rows or columns as needed. Although the more choices you have, the narrower each choice column will be. Any field in a matrix can optionally have its own branching logic and can be set individually as a required field. A matrix can also optionally have a section header.</p><p><img src="https://redcap.vanderbilt.edu/misc/matrix_example.png" alt=""></p><p><strong></strong></p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_12_question_6_tab_3">Can You Add Field Notes For Fields Within A Matrix Field?</a>
                            </h4>
                        </div>
                        <div id="category_12_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The data dictionary is the only way to add/edit field notes on matrix fields.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Piping</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_13_question_1_tab_3">What is Piping?</a>
                            </h4>
                        </div>
                        <div id="category_13_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The 'Piping' feature in REDCap allows you to inject previously collected data into text on a data collection form or survey, thus providing greater precision and control over question wording. See more about piping: <a rel="noopener noreferrer" href="https://redcap.link/piping" target="_blank">https://redcap.link/piping</a> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_13_question_2_tab_3">How can you pipe the values of a field instead of the label?</a>
                            </h4>
                        </div>
                        <div id="category_13_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>When you are piping the answer *FROM* a multiple Choice radio or drop-down field, it will by default display the option label (not the coded data value) into the location where the field is piped.</p><p><br></p><p>You can however specify that the <strong>value</strong> is piped instead of the label.</p><p>For example if your field of Favorite Ice Cream Flavor is a radio or drop-down field coded 'Chocolate', 'Vanilla', and 'Strawberry' (coded as 0, 1, 2, respectively), and you use [flavor] in your piping, the default resulting display will be Chocolate, Vanilla or Strawberry.</p><p>If you wish to pipe the value (not the label) of a multiple choice field,<strong> append ':value'</strong> to the variable name inside brackets - e.g., [flavor:value]. In the above example this would return 0,1, or 2).</p><p>You should also use <strong>':value'</strong> if piping inside the @DEFAULT Action Tag if you would like to pipe the value of a multiple choice field as the default value of a field.</p><p><br></p><p>If you wish to pipe the value (not the label) of a <strong>checkbox </strong>field you may also append <strong>':value'</strong> to the variable to return the raw value instead of the label.</p><p>For example, if the Favorite Ice Cream Flavor field is a checkbox field and a respondent checked Chocolate (0) and Strawberry (2) as preferred flavours, then use <strong>[flavor:checked:value]</strong> and <strong>[flavor:unchecked:value]</strong> to return '0, 2' and '1', respectively.</p><p>To pipe a specific option code’s value use <strong>[flavor(2):value]</strong> will return the raw value of 1 when Strawberry is checked or 0 if Strawberry is not checked.</p><p>Code options:</p><p>Icecream Flavor checked: [flavor:checked]<br>Icecream Flavor checked value : [flavor:checked:value]<br>Icecream Flavor unchecked : [flavor:unchecked]<br>Icecream Flavor unchecked value : [flavor:unchecked:value]<br>Icecream Flavor Coded value 2: [flavor(2)]<br>Icecream Flavor Coded value 2 value: [flavor(2):value]</p><p>Returns:</p><p>Icecream Flavor checked: Chocolate, Strawberry<br>Icecream Flavor checked value: 0, 2<br>Icecream Flavor unchecked: Vanilla<br>Icecream Flavor unchecked value: 1<br>Icecream Flavor Coded value 2: Checked<br>Icecream Flavor Coded value 2 value: 1</p><p>In every REDCap project, you can find a link to more information about piping by clicking on the purple “Piping” button in the “Design your data collection instruments” box on the Project Setup page.You can also go to <a rel="noopener noreferrer" href="https://redcap.vanderbilt.edu/redcap_v10.3.2/DataEntry/piping_explanation.php" target="_blank">https://redcap.vanderbilt.edu/redcap_v10.3.2/DataEntry/piping_explanation.php</a> for more detailed documentation on piping.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_13_question_3_tab_3">Is it possible to pipe information from a repeating event or form?</a>
                            </h4>
                        </div>
                        <div id="category_13_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes. You can pipe contextual data from instances using the smart variables [previous-instance], [next-instance], [first-instance], [last-instance] , and [current-instance] and appending them to the variable name. For example:</p><p>[variable][previous-instance] </p><p>would pipe the value in variable on the previous instance of the repeating form.</p><p>You can also pipe data from specific instances by appending the instance number in brackets after the variable name. For example:</p><p>[variable][3]</p><p>would pipe the value in variable on instance 3.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_13_question_4_tab_3">Can I use the Participant List's Identifier Field to pipe information into the email invite?</a>
                            </h4>
                        </div>
                        <div id="category_13_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The Participant List Identifier <strong>cannot</strong> be used as a location to pipe information to or from.  If you are using the participant list with the identifier enabled then your survey is the first form in the project and you have not collected any data about that subject to pipe from/to.  If your survey form is not the first form and you are using the participant list the identifier will default to the study id of the record.  You can use a data entry form as your first form with "Designate an email field to use for invitations to survey participants" enabled to build a robust participant list that could have information piped into the survey invitation and the body of the survey(s) itself.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Copy / Share Data Collection Instruments</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_14_question_1_tab_3">How can I copy an instrument within a project?</a>
                            </h4>
                        </div>
                        <div id="category_14_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can duplicate the form by downloading the data dictionary, copying the relevant rows, changing the name of the form and the variable names on the new rows, and uploading the form.On the Online Designer, you can click the "Choose action" drop-down next to a given instrument to copy the instrument. You will be given the choice to name the new instrument and to also provide the suffix text that gets appended to each variable name to prevent duplication of variable names.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_14_question_2_tab_3">How can I copy instruments from one project to another?</a>
                            </h4>
                        </div>
                        <div id="category_14_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can do this by downloading the data dictionary from both projects.  You can then copy and paste the fields in the forms you want from one data dictionary to the other. You can do the same for data.  Just export those fields from one and then import into the other after you have uploaded the revised data dictionary.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_14_question_3_tab_3">How can I make changes to instruments I have uploaded to the REDCap Shared Library?</a>
                            </h4>
                        </div>
                        <div id="category_14_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You just repeat the process of adding an instrument to the library. Choose Share your instrument and follow the instructions. You will see a note that says you are replacing the existing instrument. There's also an option to delete the existing instrument if you want to completely remove it.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Calculations</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_1_tab_3">What are calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>REDCap has the ability to make real-time calculations on data entry forms. It is recommended that 'calc' field types are not excessively utilized on REDCap data collection instruments and that they instead be used when it is necessary to know the calculated value while on that page or the following pages or when the result of the calculation affects data entry workflow.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_2_tab_3">What is the difference between a calculated field and using @CALCTEXT or @CALCDATE?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Calculated fields can only return numerical values. You should use a calculated field any time you want REDCap to give you back a number, such as calculating a BMI or the number of days between two dates. Calculated fields always return numbers.</p><p>You can find more information about using calculations in the “Calculations” section of the FAQ and by using the “How do I format the equation” link when you create a calculated field in the Online Designer. Calculated fields always return numbers.</p><p>@CALCTEXT is an action tag you can use on a text field that can return a text value. For example, you can use this if you have an “if” statement and you want REDCap to display the word “TRUE” if the result is true and “FALSE” if the result is false. @CALCTEXT always returns text.</p><p>You can find more details on setting up @CALCTEXT by clicking on the red “Action Tags” button on the Project Setup page, editing a form in the Online Designer, or when editing a field.</p><p>@CALCDATE is an action tag you can use on text field that is validate as a date or datetime. It will calculate a date or datetime a specific amount of time away from a date you give it. For example, if you know the discharge date and want to schedule a follow up ten days later, you can use @CALCDATE to tell you what day the follow up should be. @CALCDATE always returns a date.</p><p>You can find more details on setting up @CALCDATE by clicking on the red “Action Tags” button on the Project Setup page, editing a form in the Online Designer, or when editing a field.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_3_tab_3">What mathematical operations are available for calc fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>+        Add</p><p>-        Subtract</p><p>*        Multiply</p><p>/        Divide</p><p><strong>NOTE: All values that are not a number (including Null or blank values) are converted to "", so when testing whether or not a field is empty, you must compare to "", such as: </strong></p><pre>if ([my_field] &lt;&gt; "", [my_field], 0)</pre></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_4_tab_3">Can REDCap perform advanced functions in calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, it can perform many, which are listed on the Help &amp; FAQ page under the section "List of functions that can be used in Branching Logic, Calculations, Report filtering, Data Quality Module, Automated Survey Invitations, etc.".</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_5_tab_3">What are some common examples of calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>To calculate BMI (body mass index) from height and weight, you can create 'BMI' as a calculated field, as seen below. When values for height and weight are entered, REDCap will calculate the ‘BMI’ field. The data for a calculated field are saved to the database when the form is saved and can be exported just like all other fields. To create a calculated field, you will need to do two things:</p><p>1) Set the Field Type of the new field as Calculated Field in the Online Designer, or 'calc' if you are working in the data dictionary spreadsheet.</p><p>2) Provide the equation for the calculation in the Calculation Equation section of the Online Designer or the 'Choices OR Calculations' column in the data dictionary spreadsheet.</p><p>Below is an example equation for the BMI field above in which the fields named 'height' and 'weight' are used as variables.</p><p>[weight]*10000/([height]*[height]) = units in kilograms and centimeters</p><p>([weight]/([height]*[height]))*703 = units in pounds and inches</p><p>A more complex example for another calculated field might be as follows:</p><p>(([this]+525)/34)+(([this]/([that]-1000))*9.4)</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_6_tab_3">Why do some calculations not provide precisely the correct result?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Computers store information as a series of ones and zeros, called binary, and although it's easy to write a number like 0.1, it's impossible for a binary system to represent 0.1 exactly. Because of this, a calculation like 165 * 0.7 might lead to a result like 115.499999 instead of the expected 115.5. When this happens, REDCap is attempting to represent the concept of the 9s repeating indefinitely, which is logically the same as the expected 115.5, but since there's also a limit on how many digits can be displayed, the infinitely repeating 9s are cut off.</p><p>This can lead to a problem when attempting to round a number. In the above case, if we round the number to the nearest integer, e.g. 'round(165 * 0.7),' the expected result is 116, but because of the nature of binary numbers and the inability to handle infinitely repeating decimals, the actual result is 115.</p><p>One way to avoid this rounding problem is to add a very small amount to the number being rounded, e.g. 'round(value + 0.000001)'. Typically one would add a number at least a couple of decimal points smaller than the significant digits of what is being rounded. So, for instance, in the above example one might add 0.0001, such that instead of 115.499999 being rounded down to 115, 115.500099 would be rounded up to 116.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_7_tab_3">How do I format calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_7_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In order for the calculated field to function, it will need to be formatted in a particular way. This is somewhat similar to constructing equations in Excel or with certain scientific calculators.</p><p>The variable names/field names used in the project's Data Dictionary can be used as variables in the equation, but you must place [ ] brackets around each variable. Please be sure that you follow the mathematical order of operations when constructing the equation or else your calculated results might end up being incorrect.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_8_tab_3">How should single and double quotes be used in calculations that involve comparison operators?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_8_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">There has been a change in how calculated fields resolve and branching logic functions between versions 9 and 10 if you use single or double quotes around a number and the comparison operators “&lt;”, “&lt;=”, “&gt;”, or “&gt;=”. Results of calculated fields will vary depending on whether or not the inputting text fields are validated as integers or numbers, and whether or not you use quotes around a number with a comparison operator in a calculation equation. Branching logic will also vary depending on whether or not you use quotes around a number with a comparison operator in a branching logic statement. The range of different results is too varied to recount in detail.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">Suffice it to say, the general principle you should follow when you use numbers and the comparison operators “&lt;”, “&lt;=”, “&gt;”, and “&gt;=” in a calculated field (typically in an <strong>if</strong> statement) or branching logic is: <strong>A numerical value should NEVER be wrapped by single or double quotes when using the comparison operators “&lt;”, “&lt;=”, “&gt;”, and “&gt;=”</strong>. These comparison operators are meant to be used with numerical values only, not with numbers or integers “dressed” as text by putting quotes around them. You should continue to use the symbols “=” or “&lt;&gt;” with numbers or integers wrapped in quotes when you are referring to a numerical choice in a radio or dropdown field.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><strong>If EVERY coded choice in a multiple-choice field (i.e., radio, dropdown) is a number, then REDCap will also treat the field as if it is a numerical field</strong> (similar to calculate fields, sliders, and number/integer-validated text fields). <strong>But if you have at least one choice that is not coded as a number, REDCap treats the field as a text string</strong>, <strong>and thus it should never be used with </strong><strong>“&lt;”, “&lt;=”, “&gt;”, or “&gt;=”</strong>.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">When using these comparison operators in calculated fields or branching logic, it is <strong>highly recommended</strong>you include a statement in your calculation or branching logic indicating the input field cannot be blank before proceeding with resolving the comparison operator statement, to avoid issues with calculated fields becoming populated before input fields have been completed or fields with branching logic appearing when they shouldn’t.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">For example, let’s say you want to square participants’ height if it exceeds 1.5 m and you want the code “999” to appear in the calculated field if height is less than or equal to 1.5 m. Initially, you enter the following statement into the Calculation Equation box of the calculated field: <strong>if([height] &gt; 1.5, ([height])^(2), 999)</strong>. But when you create a record, the code “999” will appear in the calculated field before you enter any data in the [height] field. To avoid this issue, the statement in the Calculation Equation box should read: <strong>if([height] &lt;&gt; "", if([height] &gt; 1.5, ([height])^(2), 999), "")</strong>.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">Likewise, let’s say you want the descriptive text field warning “Heart rate is out of range” to appear if the participant’s heart rate is less than 45 bpm or greater than or equal to 115 bpm. In addition to the branching logic <strong>[heart_rate] &lt; 45 or [heart_rate] &gt;= 115</strong>, you should add <strong>[heart_rate] &lt;&gt; ""</strong> if you don’t want the warning to appear before entering data into the [heart_rate] field. Thus, the complete branching logic statement would read: <strong>[heart_rate] &lt;&gt; "" and ([heart_rate] &lt; 45 or [heart_rate] &gt;= 115)</strong>.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;">In previous versions, calculated fields could only utilize either numeric fields or date/datetime fields in the calculation. In REDCap 10.0 and higher, non-numeric fields may be used inside of calculated fields--most notably inside IF statements (eg, if([field1] = "A", 0, 99)--leading to the changes in the use of quotes.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif; line-height: 24px;"><br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_9_tab_3">How to calculate a score if some of the values the calculation uses may be blank?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_9_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	For a calculated field, if the dependent variables are simply added together, then if any of the variables are empty, the resulting calculation will be empty:</p><pre>[answer1] + [answer2] + ... + [answerN] </pre><p>If, however, you use the 'Sum' function, than the resulting calculation will not be empty:</p><pre>sum([answer1],[answer2], ... [answerN])</pre><p>You can also use an 'if' statement to provide any desired value in place of an empty dependent variable.  In the following case '-1' is supplied:</p><pre>if([answer1] = "", -1, [answer1])</pre><p>"" refers to any value that is not a number. For calculations, anything that is not a number is replaced with "" before the calculation is interpreted.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_10_tab_3">Why does my field have a vertical red line at the end of the text or calculated field box?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_10_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>A vertical red line on the right side of your calculated field, or field using @PREFILL/@SETVALUE, @DEFAULT, or action tag that automatically fills data indicates that the value displaying in the browser does not match what has been saved in the database. If it is your first time opening the form, calculated fields and fields with automatically filled data will display the line until you save them and should disappear if you click "Save and Stay". If you have saved the form previously, it indicates something feeding the value has changed and you will need to resave the form to update the value in the database.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_11_tab_3">Why does a Calculated Field without numeric validation return a “0” even when the field names used in the equation are blank?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_11_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;">As of version 9.9.2, you can no longer use non-numeric fields in calculations and expect these calculations to work properly. <strong>If you use a Text Box in a calculation, you must set validation (i.e., integer or number)</strong>.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;">You can continue to use Radio Button fields in calculations, as long as you preface choices with numbers.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><strong>If you wish to use calculation functions that apply to two or more fields – including sum, min, max, mean, median, and stdev</strong> – <strong>you must separate each field name in your equation by a comma</strong> (e.g., sum([field1],[field2],[field3],…)).</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><strong>You cannot use a hyphen between field names</strong> <strong>in a Calculated Field</strong> to create a range of variables (e.g., sum([field1]-[field3]), even though the word “Valid” will appear at the bottom of the Calculation Equation box. Although you will be able to save an equation using a hyphen between field names, the equation will not work properly once you start entering data into records.</p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;"><br></p><p style="margin: 0in 0in 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;">Furthermore, if you use a hyphen between two or more Text Box fields in a Calculated Field, without setting validation of the fields to an integer or number, the number “0” will appear automatically in a record, before entering any data into the record. This result will be inaccurate and, depending on the use of branching logic involving the Calculated Field, it might also lead to branching logic error, since the Calculated Field will be populated with a “0” before prior fields are completed.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_12_tab_3">Is there a way to have if/then calculations output a null result instead of a "0"?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_12_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The calculation can have the final "else" evaluation be null by using "" or '' to indicate a null value. That would allow the calculated field to be hidden without creating popup warnings about values in hidden fields during data entry.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_13_tab_3">Can calculations use negative numbers stored in other fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_13_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Calculated fields and fields using @CALTTEXT can include the value of other fields in their calculation logic (e.g. if([field1] &gt; [field2], [field1], [field2]) ).</p><p><br></p><p>To be sure, however, that the value of included fields is handled as a number rather than as a string, be sure to set the validation of the other field as numeric. Otherwise, REDCap may treat a comparison involving a negative number as a string comparison rather than a numeric comparison.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_14_tab_3">Can fields from different FORMS be used in calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_14_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, a calculated field's equation may utilize fields either on the current data entry form OR on other forms. The equation format is the same, so no special formatting is required.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_15_tab_3">Can fields from different EVENTS be used in calculated fields (longitudinal only)?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_15_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, for longitudinal projects (i.e. with multiple events defined), a calculated field's equation may utilize fields from other events (i.e. visits, time-points). The equation format is somewhat different from the normal format because the unique event name must be specified in the equation for the target event. The unique event name must be prepended (in square brackets) to the beginning of the variable name (in square brackets), i.e. [unique_event_name][variable_name]. Unique event names can be found listed on the project's Define My Event's page on the right-hand side of the events table, in which the unique name is automatically generated from the event name that you have defined.</p><p>For example, if the first event in the project is named "Enrollment", in which the unique event name for it is "enrollment_arm_1", then we can set up the equation as follows to perform a calculation utilizing the "weight" field from the Enrollment event: [enrollment_arm_1][weight]/[visit_weight]. Thus, presuming that this calculated field exists on a form that is utilized on multiple events, it will always perform the calculation using the value of weight from the Enrollment event while using the value of visit_weight for the current event the user is on.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_16_tab_3">Can I use conditional logic in a calculated field?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_16_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. You may use conditional logic (i.e. an IF/THEN/ELSE statement) by using the function:</p><p><strong>if (CONDITION, value if condition is TRUE, value if condition is FALSE)</strong></p><p>This construction is similar to IF statements in Microsoft Excel. Provide the condition first (e.g. [weight]=4), then give the resulting value if it is true, and lastly give the resulting value if the condition is false. For example:</p><p><strong>if([weight] &gt; 100, 44, 11)</strong></p><p>In this example, if the value of the field 'weight' is greater than 100, then it will give a value of 44, but if 'weight' is less than or equal to 100, it will give 11 as the result.</p><p>IF statements may be used inside other IF statements (“nested”). For example, if you wanted to look for values above ten if the chosen category was 4, but look for values below 20 if any other category was chosen, you could use:</p><p><strong>if([chosen_category] = "4", if([given_value] &gt; 10, 1, 0), if([given_value] &lt; 20, 1, 0))</strong></p><p>Other advanced functions (described above) may also be used inside IF statements.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_17_tab_3">Can I create calculations and use branching logic to hide the values to the data entry personnel and/or the survey participants?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_17_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	If the calculations result in a value (including "0"), the field will display regardless of branching logic.</p><p> 	You can hide calc fields with branching logic if you include conditional logic and enter the "false" statement to result in null:  " " or "".  For example:  if([weight] &gt; 100, 44, "")   Then the field will remain hidden (depending on branching logic) unless the calculation results in a value.</p><p> 	Another relatively new option is to use an Action Tag:</p><p> 	@HIDDEN<br> Hides the field on the survey page, the data entry form, and in the REDCap mobile app. Field will stay hidden even if branching logic attempts to make it visible.</p><p> 	@HIDDEN-FORM<br> Hides the field only on the data entry form (i.e., not on the survey page). Field will stay hidden even if branching logic attempts to make it visible.</p><p> 	@HIDDEN-SURVEY<br> Hides the field only on the survey page (i.e., not on the data entry form). Field will stay hidden even if branching logic attempts to make it visible.</p><p> 	@HIDDEN-APP<br> Hides the field only on the form ONLY on the REDCap Mobile App. Field will stay hidden even if branching logic attempts to make it visible.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_18_tab_3">Can calculated fields be referenced or nested in other calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_18_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. Calculations can reference other calculations. Be sure to thoroughly test to ensure correct expected values. In particular, beware of creating infinite loops, in which a calculated field depends on other calculated fields that ultimately depend on itself.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_19_tab_3">How do I calculate log(x) / ln(x)?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_19_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>To calculate a logarithm, you use the following formula: <strong>log([number], base)</strong>. The field [number] refers to a field you create in one of your instruments, and it can have any variable name and field label. To ensure the calculation works correctly, you should validate the field as an integer or number.</p><p>To calculate a <strong>common logarithm</strong> (i.e., with base 10), you use the following: <strong>log([number], 10)</strong>. To calculate a <strong>natural logarithm</strong> (i.e., with base e), you use the following: <strong>log([number], "e")</strong>. If the base is not provided or is not numeric, the equation defaults to base "e".</p><p><br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_20_tab_3">How can I calculate the difference between two date or time fields (this includes datetime, datetime_seconds, and time HH:MM fields, but not time MM:SS fields)?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_20_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can calculate the difference between two dates or times by using the function:</p><p><strong>datediff([date1], [date2], "units", returnSignedValue)</strong></p><p>date1 and date2 are variables in your project</p><p><strong>units</strong></p><table><tbody><tr><td><strong>"y"</strong></td><td>years</td><td>1 year = 365.2425 days</td></tr><tr><td><strong>"M"</strong></td><td>months</td><td>1 month = 30.44 days</td></tr><tr><td><strong>"d"</strong></td><td>days</td></tr><tr><td><strong>"h"</strong></td><td>hours</td></tr><tr><td><strong>"m"</strong></td><td>minutes</td></tr><tr><td><strong>"s"</strong></td><td>seconds</td></tr></tbody></table><p><br></p><ul><li>Both dates MUST be in the format specified in order to work.</li><li>For comparing two Time HH:MM fields, the date format is irrelevant.</li></ul><p><strong>returnSignedValue</strong></p><table><tbody><tr><td><strong>false</strong></td><td>(default)</td></tr><tr><td><strong>true</strong></td></tr></tbody></table><ul><li>The parameter returnSignedValue denotes the result to be signed or unsigned (absolute value), in which the default value is "false", which returns the absolute value of the difference. For example, if [date1] is larger than [date2], then the result will be negative if returnSignedValue is set to true. If returnSignedValue is not set or is set to false, then the result will ALWAYS be a positive number. If returnSignedValue is set to false or not set, then the order of the dates in the equation does not matter because the resulting value will always be positive (although the + sign is not displayed but implied).</li></ul><p>Examples:</p><table><tbody><tr><td><strong>datediff([dob],[date_enrolled],"d")</strong></td><td>Yields the number of days between the dates for the date_enrolled and dob fields, which must both be in Y-M-D format</td></tr><tr><td><strong>datediff([dob],"05-31-2007","h",true)</strong></td><td>Yields the number of hours between May 31, 2007, and the date for the dob field, which must be in M-D-Y format. Because returnSignedValue is set to true, the value will be negative if the dob field value is more recent than May 31, 2007.</td></tr><tr><td><strong>datediff([time_start],[time_end],"m")</strong></td><td>Yields the number of minutes between the start and end times.</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_21_tab_3">Can I base my datediff function off of today's date?                 </a>
                            </h4>
                        </div>
                        <div id="category_15_question_21_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p><strong>Can I base my datediff calculation on today or now?</strong></p><p>Yes. You may substitute a date or datetime field in your datediff expression with "today" or "now".</p><p>For example, you can calculate elapsed months since screening date using: </p><p><strong>datediff([screen_date],"today","M")</strong></p><p>or the elapsed time since the start of a test in minutes using:</p><p><strong>datediff([start_time],"now","m")</strong></p><p>Note1: If using a date field along with "now", REDCap will assume midnight (00:00) for the time component for the date field.</p><p>Note2: It  is <strong>strongly recommended that you do not use "today" or "now" in calc  fields</strong>. This is because every time you access and save the form, the  calculation will run and update the field value. So if you calculate the age as of today, then a  year later you access the form to review or make updates, the elapsed  time as of "today" will also be updated (+1 yr). Most users calculate  time from another field (e.g. screening date, enrollment date).</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_22_tab_3">Can Daylight Saving Time transitions affect date calculations?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_22_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Date calculations using @CALCDATE can be calculated incorrectly if they are crossing the transition from Daylight Saving Time to Standard Time. It's important to test your calculations for this. If it occurs, adding .1 to the number of days being added will assure that even after the final calculation is off by an hour, it will fall on the same day. </p><p>For example, if you find this error using @CALCDATE([date], 7, 'd'), use @CALCDATE([date], 7.1, 'd') instead.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_23_tab_3">Can I calculate a new date by adding days / months / years to a date entered (Example: [visit1_dt] + 30days)?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_23_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No.  Calculations can only display numbers.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_24_tab_3">Can I create a calculation that returns text as a result (Ex: "True" or "False")?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_24_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No.  Calculations can only result in numbers.  You could indicate "1" = True and "0" = False.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_25_tab_3">Can I create a calculation that uses a variable that is not a number. such as: if([field_name] = 'x', 1, 0)?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_25_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, this is allowable in newer versions of REDCap. Fields that are either numeric (e.g. integer, slider) or non-numeric (e.g., drop-down, free-form text) will work successfully inside an IF statement for calculated fields.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_26_tab_3">If I need to modify a calculated field, how can I update all the records previously entered?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_26_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Data Quality rule (rule H) will find and fix all incorrect values for calculated fields in a project. If any calc fields have ended up with incorrect values (whether due to field changes in the project or due to previous data imports), users can now run rule H not only to find any incorrect calculated values, but it will additionally display a button that, when clicked, will auto-fix ALL of them for the project admin.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_27_tab_3">I created a calculated field after I entered data on a form, and it doesn't look like it's working. Why not?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_27_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If you add a calculated field where data already exist in a form, data must be re-saved for the calculation to be performed.</p><p>Use the Data Quality rule H to find and fix all incorrect values for calculated fields in a project.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_28_tab_3">If I import data will new and modified data re-run and update the calculate fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_28_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. When performing a data import (via Data Import Tool or API), REDCap will perform the calculations for any calculated fields that are triggered by the values being imported. For example, if you have a BMI field whose calculation is based off of a height field and a weight field, then if you perform a data import of height and weight values, it will automatically calculate the BMI for each record that is imported and also save those calculations and log them on the Logging page.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_29_tab_3">How can I concatenate multiple text fields into a single field?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_29_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>If the result of concatenating multiple text fields SHOULD NOT be editable, use the @CALCTEXT Action Tag with the concat special function. For example, to concatenate first and last name, with a space between them:</p><p>@CALCTEXT(concat([first_name], ' ', [last_name]))</p><p><br></p><p>If the result of concatenating multiple text fields SHOULD be editable, then use the @DEFAULT Action Tag. For example, to concatenate first and last name, with a space between them, but allow the result to be edited:</p><p>@DEFAULT="[first_name] [last_name]"</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_30_tab_3">Are status icons for an instrument affected by calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_30_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The status icon for an instrument is there to provide a visual cue of whether data points have been manually entered on that page or imported for that instrument's fields. Calcs/calctexts having a value does not imply that data was entered/imported there because the calc can be triggered from data entry anywhere. Thus calcs/calctexts are ignored when determining if the status icon should be red vs gray.</p><p><br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_31_tab_3">When are calculations for calculated fields and @CALCTEXT fields performed and saved?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_31_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Data entry via forms or surveys will cause calculations to be performed in the same form or survey during data entry. The results of these calculations will only be saved to REDCap if the form is saved or if a survey is continued/submitted.</p><p><br></p><p>Data entry via forms or surveys can cause cross-form and cross-event calculations, in which calculated fields and @CALCTEXT fields in other forms and in other events are potentially updated. The cross-form and cross-event calculations will be performed and saved when the original form or survey is saved/continued/submitted.</p><p><br></p><p>Similarly, data imports via the Data Import Tool or the API can cause auto-calculations, in which calculated fields and @CALCTEXT fields in the same form, in other forms, and in other events are potentially updated. Auto-calculations will be performed and saved when the data being imported are saved.</p><p><br></p><p>Cross-form calculations, cross-event calculations, and auto-calculations are performed for calculated or @CALCTEXT fields in which:</p><ul><li>the calculation logic refers to another field that has changed, OR</li><li>the calculation logic uses the 'if()' statement and both output options in the 'if()' statement are non-blank, implying that the field should always have a value.</li></ul><p><br></p><p>Cross-event calculations and auto-calculations are only performed in events which have any fields that already contain data. This is true of cross-form calculations as well, but by definition cross-form calculations only occur when an event has data.</p><p><br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_15_question_32_tab_3">When viewing a scatter plot that has been created via REDCap Reports, what do the X and Y axis represent?</a>
                            </h4>
                        </div>
                        <div id="category_15_question_32_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The X axis represents the numerical value that is collected in the text field and displayed on the report. The Y axis functions as a place holder to provide spaces that separate the values for better viewing.<br></p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Branching Logic</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_1_tab_3">What is branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Branching Logic may be employed when fields in the database need to be hidden during certain circumstances. For instance, it may be best to hide fields related to pregnancy if the subject in the database is male. If you wish to make a field visible ONLY when the values of other fields meet certain conditions (and keep it invisible otherwise), you may provide these conditions in the Branching Logic section in the Online Designer (shown by the double green arrow icon), or the Branching Logic column in the Data Dictionary.</p><p>For basic branching, you can simply drag and drop field names as needed in the Branching Logic dialog box in the Online Designer. If your branching logic is more complex, or if you are working in the Data Dictionary, you will create equations using the syntax described below.</p><p>In the equation you must use the project variable names surrounded by <strong>[ ]</strong> brackets. You may use mathematical operators (=,&lt;,&gt;,&lt;=,&gt;=,&lt;&gt;), Boolean logic (and/or), and unary Boolean not (!). You may nest within many parenthetical levels for more complex logic.</p><p>You must <strong>ALWAYS</strong> put single or double quotes around the values in the equation UNLESS you are using &gt; or &lt; with numerical values.</p><p>The field for which you are constructing the Branching Logic will ONLY be displayed when its equation has been evaluated as TRUE. Please note that for items that are coded numerically, such as dropdowns and radio buttons, you will need to provide the coded numerical value in the equation (rather than the displayed text label). See the examples below.</p><table><tbody><tr><td>[sex] = "0"</td><td>display question if sex = female; Female is coded as 0, Female</td></tr><tr><td>[sex] = "0" and [given_birth] = "1"</td><td>display question if sex = female and given birth = yes; Yes is coded as 1, Yes</td></tr><tr><td>([height] &gt;= 170 or [weight] &lt; 65) and [sex] = "1"</td><td>display question if (height is greater than or equal to 170 OR weight is less than 65) AND sex = male; Male is coded as 1, Male</td></tr><tr><td>[last_name] &lt;&gt; ""</td><td>display question if last name is not null (aka if last name field has data)</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_2_tab_3">Can fields from different FORMS be used in branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, branching logic may utilize fields either on the current data entry form OR on other forms. The equation format is the same, so no special formatting is required.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_3_tab_3">Can fields from different EVENTS be used in branching logic (longitudinal only)?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, for longitudinal projects (i.e. with multiple events defined), branching logic may utilize fields from other events (i.e. visits, time-points). The branching logic format is somewhat different from the normal format because the unique event name must be specified in the logic for the target event. The unique event name must be prepended (in square brackets) to the beginning of the variable name (in square brackets), i.e. [unique_event_name][variable_name]. Unique event names can be found listed on the project's Define My Event's page on the right-hand side of the events table, in which the unique name is automatically generated from the event name that you have defined.</p><p>For example, if the first event in the project is named "Enrollment", in which the unique event name for it is "enrollment_arm_1", then we can set up the branching logic utilizing the "weight" field from the Enrollment event: [enrollment_arm_1][weight]/[visit_weight] &gt; 1. Thus, presuming that this field exists on a form that is utilized on multiple events, it will always perform the branching logic using the value of weight from the Enrollment event while using the value of visit_weight for the current event the user is on.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_4_tab_3">Is branching logic for checkboxes different?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, special formatting is needed for the branching logic syntax in 'checkbox' field types. For checkboxes, simply add the coded numerical value inside () parentheses after the variable name:</p><p><strong>[variablename(code)]</strong></p><p>To check the value of the checkboxes:</p><p>'1' = checked</p><p>'0' = unchecked</p><p>See the examples below, in which the 'race' field has two options coded as '2' (Asian) and '4' (Caucasian):</p><table><tbody><tr><td>[race(2)] = "1"</td><td>display question if Asian is checked</td></tr><tr><td>[race(4)] = "0"</td><td>display question if Caucasian is unchecked</td></tr><tr><td>[height] &gt;= 170 and ([race(2)] = "1" or [race(4)] = "1")</td><td>display question if height is greater than or equal to 170cm and Asian or Caucasian is checked</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_5_tab_3">Can you utilize calculated field functions in branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, see the list of functions that can be used in logic for Report filtering, Survey Queue, Data Quality Module, and Automated Survey Invitations.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_6_tab_3">How do I hide a calculation with branching logic without causing a notification from the web form?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>If a calculated field is hidden by branching logic but will evaluate to a number, it causes the web form to notify the data enterer about a hidden field with data in it. To avoid receiving the notification, use an "if...else" statement--if(X, ValueIfTrue, ValueIfFalse)-where the value if false is "".</p><p>The statement should be written so if the calculated field is hidden, it will evaluate to false and provide the empty response, meaning there will be no data in the field. This will prevent the notification.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_7_tab_3">Can you program branching logic using dates?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_7_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, see the list of functions that can be used in logic for Report filtering, Survey Queue, Data Quality Module, and Automated Survey Invitations.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_8_tab_3">Is it possible to use branching logic to skip an entire form or forms?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_8_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Branching logic will only hide questions, not entire data collection instruments. If you have a list of data collection instruments (DCIs) in a project (traditional) or event (longitudinal), you will see every form even if you hide all the fields with branching logic on that form. You'll have to click through the forms or "save and go to next form". A work around may be to add a descriptive text (reverse branching logic to show when all fields are hidden) that the form is not applicable to that specific record or just leave the form blank. </p> <p> 	If using the Survey Queue for participants entering data, you can hide/display entire surveys. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_9_tab_3">Is it possible to use branching logic to skip an entire section?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_9_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Branching logic must be applied to each field. It cannot be applied at the form or section level. Section headers will be hidden *only* if all fields in that section are hidden.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_10_tab_3">My branching logic is not working when I preview my form. Why not?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_10_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Simply previewing a form within the Online Designer will display all questions. In order to test the functionality of your branching logic (and calculated fields), you must enter new records and enter test data directly into your forms.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_16_question_11_tab_3">Why does REDCap slow down or freeze and display a message about a javascript problem when I try to use branching logic syntax or Drag-N-Drop Logic builder in a longitudinal project with over 1000 fields?</a>
                            </h4>
                        </div>
                        <div id="category_16_question_11_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You are encountering a limitation that stems from having a lot of fields especially multiple choice fields in your project.   If a good number of your fields involve multiple choices then the number of choices that the Drag-N-Drop Logic Builder has to load into the pop-up is large. So having a lot of fields with several choices each can slow down the system.  The performance is further affected because REDCap uses javascript (powered by the user's browser) to do the drag-n-drop and also to process the conversion of the advanced syntax to the drag-n-drop method (if you decide to switch methods within the pop-up).</p><p>The slower your computer and the slower your browser (Internet Explorer is the worst, especially versions 6 and 7), than the slower the drag-n-drop method will be.  Chrome is much faster at handling Javascript than other browsers and is recommended.  The only other option is to use the data dictionary for building your branching logic.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Action Tags</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_1_tab_3">What are Action Tags?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Action Tags are special terms that begin with the '@' sign that can be  placed inside a field's Field Annotation. 		Each action tag has a corresponding action that is performed for the  field when displayed 		on data entry forms and survey pages. Such actions may 		include hiding or disabling a given field (either on a survey, data  entry form, or both). </p><p>There is a comprehensive list of 		all available action tags that you may use within the Online Designer "Edit Field" pop up box. You can use as many as you  want for a single field, but if you do use more than one 		tag for a field, make sure to put a space or line break between them.  Because the action tags are used as part of the Field 		Annotation, they are not displayed anywhere on the page.  	For example, if you put @HIDDEN-SURVEY in a field's Field Annotation  text box, then 		the field will always stay hidden when viewed on a survey page, but  the field will be visible when viewing the same instrument 		as a data entry form, which might be helpful if you want to hide  specific fields from your survey participants so that they do not 		see them. There are many different use cases for each action tag. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_2_tab_3">What types of action tags are available in REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Auto-fill Action Tags: Pre-fill a variable with a value</p><ul><li>@DEFAULT</li><li>@LATITUDE</li><li>@LONGITUDE</li><li>@NOW</li><li>@TODAY</li><li>@USERNAME</li></ul><p>Cosmetic Tags: Change the look and feel of a variable without impacting the data</p><ul><li>@PASSWORDMASK</li><li>@PLACEHOLDER</li><li>@RANDOMORDER</li><li>@HIDEBUTTON</li></ul><p>Entry Limits Tags: Limit what can be entered in a variable</p><ul><li>@CHARLIMIT</li><li>@WORDLIMIT</li><li>@MAXCHECKED</li><li>@NONEOFTHEABOVE</li><li>@MAXCHOICE</li><li>@HIDECHOICE</li></ul><p>Obscuring Tags: Action tags that hide a variable or make it uneditable</p><ul><li>@HIDDEN</li><li>@HIDDEN-FORM</li><li>@HIDDEN-SURVEY</li><li>@READONLY</li><li>@READONLY-FORM</li><li>@READONLY-SURVEY</li></ul><p>Mobile App Tags: Action tags that are only useful when using the mobile app</p><ul><li>@APPUSERNAME-APP</li><li>@BARCODE-APP</li><li>@HIDDEN-APP</li><li>@READONLY-APP</li><li>@SYNC-APP</li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_3_tab_3">Does the @DEFAULT action tag work with fields hidden by branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, the @DEFAULT tag will not populate if the field is hidden when the form loads.</p><p>Please note: If the action tag '@DEFAULT= ' is used on a branching logic hidden field, the action tag does fire on page load but it throws an<br>error message</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_4_tab_3">Will the @DEFAULT action tag work on fields hidden by branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, the @DEFAULT action tag is incompatible with branching logic.  REDCap will by populate any default value to @DEFAULT'ed fields at the point of render.  If that field with that value should not appear due to upstream branching you will receive an error message. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_5_tab_3">Can I use action tags that automatically collect data (such as @NOW or @TODAY) when importing data using the file import tool to capture that information?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, you can't. You can manually enter data to import into those fields and import that data into them, but the file import process will not trigger the action tags to populate those fields with data. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_17_question_6_tab_3">Where can I find more information about Action Tags?</a>
                            </h4>
                        </div>
                        <div id="category_17_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Navigate to Project Setup &gt; Online Designer &gt; Click on a data collection instrument &gt; Click Add or Edit a field.  Within the pop-up box, there is the <strong>Action Tags / Field Annotation</strong> option and a link to learn more about Action Tags.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Repeating Instruments &amp; Repeating Events</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_1_tab_3">What are repeating forms and events?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Repeating forms is the ability to use the same form multiple times in a project or an event, without having to define how many times you want to use it. You can use it a different number of times for each record in the project and add new instances of the form as you need them for each record. </p><p>For example, if you are collecting a list of medications, you could create a form that asks for one of the medications, and then add a new instance for each additional medication:</p><p> 	<img src="https://redcap.vanderbilt.edu/misc/faq-repeating-forms-events.png" alt=""></p><p>In longitudinal projects, you have the option of repeating individual forms inside an event or repeating the event as a whole. If you choose to repeat just a form in an event, you will have multiple instances of just the form(s) you want to repeat. If you choose to repeat the entire event, all the forms in the event will be offered again, and you will have the same number of instances of each of the forms in the event, in that record. You cannot repeat an instrument inside a repeated event.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_2_tab_3">How do I enable repeating forms and events?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To enable repeating forms in a non-longitudinal project, navigate to the Project Setup page and go down to the "Enable optional modules and customizations" box. Click "Enable" next to "Repeatable instruments." Inside the popup box, select which instruments in the project you want to repeat.</p><p>In a longitudinal project that has multiple events defined, you will still select "Enable" next to "Repeatable instruments and events." For each event, you will need to choose if you want the entire event to repeat, if you just want specific forms in the event to repeat, or if you don't want anything to repeat. If you select "Repeat entire event (repeat all instruments together)" all the instruments in that event will be checked. If you select "Repeat instruments (repeat independently of each other)," then you'll need to select which instruments you want to repeat in that event. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_3_tab_3">Are repeating forms compatible with double data entry?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No. You can only compare the first instance of repeating forms with double data entry. From the Data Comparison Tool:</p><p style="margin-left: 20px;">The Data Comparison Tool does not *fully* support the Repeating Instruments and Events feature, which appears to be enabled in this project. Data can be compared (and even merged if using Double Data Entry), but it will only allow comparison and merging of Instance #1 of a repeating instrument or repeating event. Thus all other repeating data will be ignored on this page. Also, all non-repeating data can still be compared and merged.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_4_tab_3">Are repeating forms compatible with the scheduling module?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Repeating forms are not compatible with the scheduling module.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_5_tab_3">Are repeating forms compatible with the REDCap Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Repeating forms are not compatible with the REDCap Mobile App.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_6_tab_3">Can I use repeating instruments in surveys?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can. First, you need to enable the form as repeating in the project in general on the Project Setup page. Then make sure the form is enabled as a survey and go into the Survey Settings. Under "Survey Termination Options" select "<strong>(Optional) Allow respondents to repeat the survey: </strong>Ask them to take the survey again upon completion, if they wish."</p><p>This will allow your participants to repeat the survey. You will be able to choose if you want them to see the option to repeat the survey before or after they click submit, and you will be able to customize what the text on the repeat button says.</p><p>There are limitations to using repeating forms in surveys. You cannot schedule surveys that are in repeated instruments or repeated events to go out on a regular basis. You need to compose the survey invitation for each instance manually using either the compose invitations in the participant list or the option to send a survey invitation in the survey instance itself. Additional, survey queues in repeating events only work on the first instance of the event.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_7_tab_3">How can I use the data quality module to check all instances of data repeated instruments?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_7_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can check by looking at the instance number next to the record ID when you click "view" after running the rule. However, you cannot filter by individual instances.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_8_tab_3">What does the data export look like for records using repeating forms?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_8_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	When you export data that has repeating instances, there will be two new columns in the export: redcap_repeat_instrument (the instrument's name) and redcap_repeat_instance (the instance number). All data that is not in a repeating form will be on one line, and then each instance of a repeating field will receive its own line, similar to how the data exports in a longitudinal study: </p> <p> 	<img src="https://redcap.vanderbilt.edu/misc/faq-data-export.png"> </p> <p> 	The formatting will be the same if the project is longitudinal; it will just include the event information as well. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_9_tab_3">How can I tell the completion status when an instrument repeats?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_9_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	The completion status of a repeating instrument will have three small circles instead of just one. If the completion status of all the instruments is the same, the circles will be colored red (incomplete), yellow (unverified), or green (complete), just like with regular forms. If the completion status isn't the same for all instances, then the circles will be blue. </p> <p> 	On the record homepage, you'll be able to see all the instances of a repeating form listed out with the completion status of each instance: </p> <p> 	<img src="https://redcap.vanderbilt.edu/misc/faq-record-home.png"> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_10_tab_3">Can I pull information from repeating forms into reports?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_10_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	You can add information from repeating forms in reports. You will just add the field(s) you need the same way as you would any field in the project. When you view the report, the information from the instances will be on their own line, similar to how information displays for different events in a longitudinal project: </p> <p> 	<img src="https://redcap.vanderbilt.edu/misc/faq-report.png"> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_11_tab_3">Can I use piping, branching logic, or calculations with repeating forms?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_11_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can pipe information from other forms into a repeating form, and you can pipe information from one field to another within an instance. You cannot pipe information out of a specific instance to someplace else in the project; there is no syntax to refer to a specific instance when you are piping. The same applies for branching logic and calculations-you can use items from outside the repeating form, and you can use information within an instance, but you cannot use information inside a single instance for piping or calculations outside of the specific instance.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_12_tab_3">How do Automated Survey Invitations work with repeating instruments?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_12_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p style="margin:0cm;font-size:15px;"><strong>Version 12.4.5 and lower: </strong></p><p style="margin:0cm;font-size:15px;">the ASI will only fire once conditions are met for the first instance, and reminders will only be sent for that instance. You cannot automatically invite or remind a participant to repeat a survey. If you need to invite them again, you will need to send the repeat instance invitation manually or instruct them to click the “repeat” button at the correct time.</p><p style="margin:0cm;font-size:15px;"><br></p><p style="margin:0cm;font-size:15px;"><br></p><p style="margin:0cm;font-size:15px;"><strong>Version 12.5.0 and higher: </strong></p><p style="margin:0cm;font-size:15px;">ASI’s for surveys set as repeating forms (or surveys in repeating events) can be optionally set to repeating using the settings in ‘Step 4’ of the ASI set up window. Repeating ASI’s can be set to repeat infinitely or can be limited to a set number of repeats. The duration between each repeat invite can be specified as X minutes, X hours, or X days. Before version 13.0.1 this value was required to be an integer but from 13.0.1 onwards the value can be a decimal.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_13_tab_3">How do I give my repeating forms custom names?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_13_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Click on "Modify" next to "Repeatable instruments" in the "Optional modules and customizations" box on the Project Setup page. There will be a text box next to each instrument's name; you can the custom names there. The most effective way to use this is to pipe in a key piece of information (such as the medication name) here. The custom name will then show up next to the completion status for the individual instances on the record home page.</p><p>If this is a longitudinal project and you are repeating the entire event, you cannot use custom naming for the repeating event.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_14_tab_3">Can repeating instruments be enabled after a project is in production?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_14_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Only REDCap administrators can enable repeating instruments for a project that is in production.</p><p>Be aware that adding repeating instruments can affect branching logic, calculations, piping, and survey set up.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_15_tab_3">Can I import data into repeating forms?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_15_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can import data into repeating forms by using the redcap_repeat_instrument and redcap_repeat_instance fields to direct it to the appropriate form and instance. However, several people have found when they import into repeating forms the import is incomplete. It is highly recommended you manually check that the data imported correctly and completely after importing data into repeating forms.</p><p>The import columns for repeating forms are: record_id,redcap_event_name,redcap_repeat_instrument,redcap_repeat_instance,redcap_data_access_group,[data]</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_16_tab_3">Can you delete a single instance of a repeating form?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_16_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can. As long as you have the "Delete Record" user right, you will see a button at the bottom of the data entry form that says "Delete data for THIS FORM only." Clicking that button will delete the data in that instance only.</p><p>The instances in repeating forms are autonumbered. Therefore, if you have instances 1, 2, 3, and 4 and delete instance 2, the next time you add a new instance of that form it will be numbered as 5. It will not go back and fill in the gap in the numbering, and you cannot renumber instances. However, you delete instance 4 and then add a new instance, the new instance will also be 4. REDCap simply looks at the highest existing instance number and adds one.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_18_question_17_tab_3">In a report, can I combine filters from repeating instruments and non-repeating instruments?</a>
                            </h4>
                        </div>
                        <div id="category_18_question_17_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You cannot combine filters from fields that are on repeating instruments with fields that are not. The information from repeating forms is stored on different rows than information on non-repeating forms, and so you can't filter on both at the same time.</p><p>For example, if you have a project where "State" is captured in a non-repeating instrument and "Medicine" is captured in a repeating instrument, you could filter on "State" or on "Medicine" individually. However, you could not filter on both "State" and "Medicine" at the same time, because it is not possible to have both in the same row of data.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Smart Variables</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_1_tab_3">What are smart variables?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_1_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You can refer to other variables in REDCap by referencing their variable names. (e.g. [dob]) This is commonly used in features like branching logic, calculations and piping. Smart variables are an extension of that functionality. Instead of referencing a single static variable, smart variables allow you to reference other variables in a dynamic way. (e.g. instead of referring to medication variable in a specific event like "[baseline_arm_1][rx1]", you can refer to it like [previous-event-name][rx1]. The meaning of that reference changes depending on the event you are in.) This allows you to build more elegant branching logic or calculations.</p><p>For a full overview of all types of smart variables, go to the project setup page of any project and click on the "Smart variables" button.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_2_tab_3">What is the difference between names and labels with smart variables?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_2_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In smart variables, using the "name" version of the variable will pull the official REDCap name for the Data Access Group, record, event, or instance. This is what you will need to use if you are trying to pull information in a calculation or piping, just like you will need to use the variable name. "Label" refers to the designation you've given DAG/event/etc, such as "Hospital 1" or "First Visit." This is more useful when you are pulling information about the item itself, rather than trying to pull a specific data point from the item.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_3_tab_3">Can smart variables be used with action tags?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_3_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Smart variables can be used with the @DEFAULT action tag.</p><p>When using the Smart Variable [survey-queue-link] in a context where the current record does not yet exist (e.g., on the first page of a public survey), this Smart Variable will return a blank value since the record does not yet exist.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_4_tab_3">How do you use smart variables in piping?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_4_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Smart variables can be used in piping the same way static variables can. You can use them to pipe information into field labels, survey invitations, or use them in conjunction with @DEFAULT. You will just need to include smart variable command in brackets either before the variable you are piping (such as when piping longitudinal items) or after (when piping from repeating forms). If you attempt to pipe information from the "previous" instance/event on the first form or the "next" instance/event on the last form, the result will either be blank or ______.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_5_tab_3">Can Next/Previous instances refer to repeating instruments (forms) in a different event?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_5_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No. [previous-instance] and [next-instance] cannot be used to reference across events. [previous-instance] and [next-instance] only reference an instance of a repeating instrument in the same (non-repeating) event or an event instance if the event is repeating.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_19_question_6_tab_3">Where can I find more information on smart variables?</a>
                            </h4>
                        </div>
                        <div id="category_19_question_6_tab_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>In every REDCap project, you can find a link to more information about smart variables by clicking on the green “Smart Variables” button in the “Design your data collection instruments” box on the Project Setup page.</p><p>You can also go to <a rel="noopener noreferrer" href="https://redcap.vanderbilt.edu/redcap_v10.3.2/Design/smart_variable_explain.php" target="_blank">https://redcap.vanderbilt.edu/redcap_v10.3.2/Design/smart_variable_explain.php</a> to see the most up-to-date list of smart variables and information on using them. It's possible there may be variables on this list that aren't in use at your institution yet--if you have any questions, contact your REDCap administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="4" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-4"><div class="faqHeader">General Data Collection</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_1_tab_4">What is the Record Status Dashboard?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This is a table listing all existing records/responses and their status for every data collection instrument (and for a longitudinal project, for every event).  When viewing this page, form-level privileges are utilized (i.e. cannot see a form's status if user does not have access to that form), and if the user belongs to a Data Access Group, they will only be able to view the records that belong to their group.Note: Since projects may now have many surveys, REDCap no longer displays the Survey Response Summary on the Project Home page.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_2_tab_4">How do I enter / view my data?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_2_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To enter or view individual records, you can navigate to the "<strong>Data Collection</strong>" section on the left menu bar.  Depending on your project type, you will see "Add or View Survey Responses", a listing of your form names, or a "Data Entry" icon.  These options will navigate you to the drop down record lists so you can select or add a new record/response.</p><p>You can also use the "<strong>Data Exports, Reports and Stats</strong>" module under "Applications" to view your data. Create New Reports to search and view your project data in aggregate. </p><ul><li>When you click "View Report", it queries the database in real time and displays the resulting data in table format. Variables are listed in columns and individual records are displayed in rows.</li><li>Clicking the "Stats &amp; Charts" option within Data Exports, Reports and Stats module, displays graphical representations for all numerical and categorical variables and provides links for cleaning notable data (missing, highest, lowest values). </li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_3_tab_4">Do I need to select the record number again each time I change data entry forms?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_3_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No. To navigate between forms within a given record, select the colored dots indicating form status (i.e. incomplete, unverified, and complete) which appear to the left of the form name when a record is open. Note that moving to a new form by selecting the form status indicator will close the current form without saving entries. In order to save entries, select the "Save and Continue" button located at the bottom of the form before using the form status indicators to move to a new form. Alternatively, you can select the "Save and go to Next Form" button if you wish to move to the next form for the current record.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_4_tab_4">Is there a way to delete data in a given record for just single instrument or event (not the entire record)?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_4_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes! First, follow the instructions in the section above about deleting an individual record to ensure you have the correct permissions on your user account. Then, open any record or survey response. You will find the delete options underneath the 'save' buttons at the bottom of the page. There are options to erase all this record's data on the current instrument OR on the current event (longitudinal projects ONLY).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_5_tab_4">How do I delete an individual record?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_5_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Existing records must be deleted by opening each one individually and deleting them. To do so, you must first have permission to delete records. </p> <p> 	Go to the User Rights page. (This link is in the Applications section of the project menu.) Open your account, and scroll to the bottom of the screen. There, you'll find the permission to delete records. Select that option and save your account. </p> <p> 	Then, open any record or survey response. You will find the delete options underneath the 'save' buttons at the bottom of the page. You can use the 'delete record' button to completely erase all data across all instruments for the given record.  </p> <p> 	NOTE for surveys: If the project uses surveys, you'll additionally need the 'Edit survey responses' permission. This separate permission is in the Data Entry Rights section of your account, in the upper right of the screen. On the survey response page, you'll first need to click the 'Edit survey response' button at the top of the record before the 'delete record' button will be enabled. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_6_tab_4">How do I delete all my records at once?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_6_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>In development mode, the Other Functionality tab has a button to erase all data. This is useful when you are iteratively testing your project and want to practice your data entry several times, starting with an empty project each  <a rel="noopener noreferrer" href="http://time.In" target="_blank">time.In</a> production mode, records must be deleted individually. Because of this limitation, if you truly need to erase all data in production mode, you may want to consider copying your project and using the copied version instead. That copied version would be in development mode and have no records/data. (It would also be totally separate to the original project, ensuring you still had the original data and could quickly reference it in the future.)</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_7_tab_4">Can I edit survey responses?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_7_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, survey responses CAN be edited so long as you have been given user privileges to do so (via the User Rights page). Once you have been given user privileges to edit survey responses, you will see an Edit Response button at the top of the data entry form when viewing the response (the response will be initially read-only). After clicking that button, the response will become editable as normal. </p><p>NOTE: Some institutions running REDCap may choose not to enable this feature for their users, so if a checkbox is not seen next to the survey/form rights for that survey on the User Rights page, then this feature has not been enabled and thus cannot be utilized. Contact your REDCap Administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_8_tab_4">In a longitudinal study where the first form is a demographic data collection form is there any way to force the first form to be completed before proceeding to subsequent forms?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_8_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can use branching logic to hide the fields on the later forms and add a section header that explains why no fields are present in each form when the branching logic calls for the form to be 'blank'.  The forms that follow the demographic form will still be accessible but fields will be viewable only if a particular field on the demographic form is completed or marked 'Yes'.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_20_question_9_tab_4">For calculated fields, sometimes the value pops up when you enter data for the questions and sometimes the value may not appear until you save the form. Is there any reason it's doing this?</a>
                            </h4>
                        </div>
                        <div id="category_20_question_9_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Depending on which internet browser you are using, sometimes the calc fields are calculated during data entry. However, these are just preliminary calculations. You must click the save button for the system to correctly calculate the expression and commit the data to the database.Use the Data Quality rule H to find and fix all incorrect values for calculated fields in a project.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Surveys: Anonymous Surveys</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_21_question_1_tab_4">Can I use the Participant List to collect anonymous survey data from participants?</a>
                            </h4>
                        </div>
                        <div id="category_21_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Technically, no. Data is not anonymous when collected using the Participant List; but it can be "coded" and "unidentifiable" to the project admins.</p><p> 	REDCap's user interface has two separate modules for (1) sending emails and tracking responders/non-responders [Participant List] and (2) viewing data/responses. Through the REDCap interface, there is no link between the modules and no connection between the email address entered and the responses collected unless you enter unique values into the "Participant Identifier (optional)" field. The Participant Identifier field links the email address to the survey responses.</p><p> 	To ensure confidentiality of the data, REDCap tracks responses by attributing it to an email address. If the Participant List &gt; Participant Identifier field is not used, the project administrators are not privy to this information. Access to the association between the individual who took the survey and the survey responses is restricted in the database and can only be accessed by authorized privileged users(system engineers, database admins).</p><p> 	<strong>**Important to know: </strong>There is a link "behind the scenes" and REDCap / REDCap support personnel (system engineers, database admins) are really acting as an "Honest Broker": information is provided to investigators in such a manner that it would not be reasonably possible for the investigator or others to identify the corresponding patients-subjects directly or indirectly. REDCap holds the key to the code.</p><p> 	<strong>** If you truly need Anonymous Data, use the Public Survey Link.</strong></p><p> 	For the Participant List, the identifying emails can be forever stripped from the data with no way for anyone to go back and find out the identity of the individual from whom the data the was obtained. No re-identification is possible if you do the following:</p><ol><li>Export a copy of the REDCap dataset (so you have a copy of the data + date/time stamps if needed for future reference)</li><li>EXPORT LIST for the Participant List to excel</li><li>REMOVE ALL PARTICIPANTS from the Participant List. This will delete all links between the email addresses and data collected, INCLUDING survey date/time stamps. Date/time entered is still available in the Logging module.</li></ol><p> 	This ensures that identities cannot be reversed engineered in REDCap.</p><p> 	<strong>**If data collection must be anonymous in "real time", then the Participant List should NOT be used.</strong> Use the Public Survey Link to collect anonymous survey data.</p><p> 	It is recommended that you keep access to the Survey Distribution Tools tool restricted since a small number of respondents would be easily identifiable from the Participant List and the Add / Edit Records pages.</p><p> 	<strong>Additional guidelines to help you collect unidentifiable coded survey data:</strong></p><p> 	Multiple Surveys: Be mindful that projects with multiple surveys present potential challenges to anonymous data collection.</p><p> 	Only participants that answer the first survey will be able to respond to the follow-up surveys. If you wish to collect additional surveys for the non-responders, you will need to create additional REDCap projects with the follow-up surveys or you may have to open the survey using the link provided and save the survey without data (issue will be required fields).</p><p> 	LACK OF DATA MAY INADVERTENTLY IDENTIFY PARTICIPANTS: If you are using the Participant List to send 3 surveys, a scenario may arise in which a high number of subjects respond to the first 2 surveys and only 1 or 2 subjects respond to the last survey.</p><p> 	As you know, each exported record will contain a subject's response to all of the survey questions. In this scenario, you will need to be aware that the lack of data for the third survey can inadvertently identify a subject's identity and his/her responses to all prior surveys.</p><p> 	For this reason,</p><p> 	1. Do not EXPORT any of the project data until the survey in question is completed and closed.</p><p> 	2. Before exporting survey data:</p><ul><li>Review the number of responses (for each survey in the project) and make a judgment as to whether or not enough responses have been received to ensure that subject identities can remain unidentified. This is particularly critical when using the Participant List, as this list will identify the individuals who have responded. A low count of responses could be problematic. Take care to ONLY export and view data from surveys that have a suitable number of responses. For example, if only one response has been received (and the Participant List identifies that <a href="mailto:jsmith@yahoo.com">jsmith@yahoo.com</a>&lt;<a href="mailto:jsmith@yahoo.com">mailto:jsmith@yahoo.com</a>&gt; has responded), you will know that this single response belongs to that subject.</li><li>Only export the data associated with a closed survey (both single and multi-survey projects). Once data has been exported, no further responses should be received or allowed.</li></ul><p> 	Also note: Projects containing data entry forms and surveys cannot be considered anonymous. Manually entered data needs to be identified by the team to be properly associated and linked with survey responses.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_21_question_2_tab_4">Is there any tool to deter spam bot access to public surveys?</a>
                            </h4>
                        </div>
                        <div id="category_21_question_2_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap provides a reCAPTCHA tool that can deter spam bot access to public surveys in REDCap version 8.11.0 and above</p><p>This feature allows users to utilize the Google reCAPTCHA functionality to help protect public surveys from abuse from "bots", which are automated software programs that might enter trash data into surveys. This feature must first be enabled by an administrator for the entire server. If your administrator has enabled it for use on your REDCap, you can choose to enable the Google reCAPTCHA functionality on the Public Survey page in your project. Once this is done, the public survey will display the reCAPTCHA checkbox and "I'm not a robot" text on a survey page prior to allowing the participant to view the public survey. This feature is not employed on any private survey links because those are unique to a record and thus would never be made publicly available like a public survey link would.</p><p>A survey participant will never have to pass the reCAPTCHA test more than once per day on a given device/computer.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Surveys: Invite Participants</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_1_tab_4">What is the Survey Invitation Log?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This log list participants who (1) Have been scheduled to receive invitation Or (2) Have received invitation Or (3) Have responded to survey.You can filter to review your participants response statuses.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_2_tab_4">If I'm using the Participant Contact List to email survey invites and our mail server fails, REDCap may still return success messages even when no emails have been sent.  Can the error reporting be improved when sending emails?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_2_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>In general, the error reporting for sending emails probably cannot be improved.  The email sending process is embedded in a chain of events that involves different systems.  The REDCap application is far removed from some of the other systems and therefore cannot always know if a system at the delivery end sent the email.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_3_tab_4">Is there a limit to the time that a participant has to complete a survey once they have clicked on the survey link?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_3_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>There is a time limit of 24 hours per page.  If a participant selects the "!Save&amp;Return" option, their link is active until the project admin closes/de-activates the survey.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_4_tab_4">What is the "Start Over" feature for survey participants invited via Participant List?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_4_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The survey page allows participants invited via the Participant List to start over and re-take the entire survey if they return to the survey when they did not complete it fully, but the "Start Over" feature is only available if the Save &amp; Return Later feature is disabled or if it is enabled and the participant did not click the Save &amp; Return Later button. .</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_5_tab_4">I only get a public link when the first survey instrument is a survey. Where can I find public links for the other surveys in my project?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_5_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>A public link is only possible when the first instrument is a survey. Only that survey can have a public link.All later instruments are considered a continuation of the earlier one(s). Later surveys capture different data, but are completed by the same people. So the later instruments can only ever be distributed via Participant List.If different respondents will complete the other surveys, then a separate project should probably be used for each group of respondents.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_6_tab_4">Can email distribution lists or group email accounts be added to the Participant List to send survey invitations?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_6_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>You should not use REDCap's Participant Email Contact list with group email addresses or distribution lists.  The emailed invitations send only 1 uniquesurvey link per email address; therefore, only the first person in the distribution group who clicks on the email link will be able to complete the survey.</p><p>For group distribution lists, you can:</p><ol><li>Email the general "public" survey link provided at the top of the "Invite Participants" page directly from your email account, or</li><li>Add each individual email address from the distribution list to the Participant Contact list.  You can copy/paste the emails from a list (word or excel) into REDCap.</li></ol><p>The advantages of using REDCap's Participant Contact list and the individual emails is that REDCap will track responders and non-responders.</p><p>You'll be able to email only non-responders if you want to send a reminder.  With the general distribution email, you won't be able to track responses and participants will have the potential to complete the survey more than once.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_7_tab_4">How can I review or cancel a scheduled survey reminder?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_7_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>On the Survey Invitation Log page, there is a checkbox for displaying the reminders. Check that box and then click the button to apply the filters. Then you can use the red x to delete the reminders.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_8_tab_4">Is there a way to prevent someone from accessing a survey after you've sent them their link?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_8_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>There is no way to withdraw a sent survey link or deactivate a survey on the record level.</p><p>You could create field in the project, "Block" as a yes/no question, and apply branching logic to all questions in the survey to only display is [block]&lt;&gt; "1". If you need to prevent a participant from seeing the questions, you could then select "Yes" on the block question in their record. As long as this was done before they clicked on the link, they would not see the survey questions to answer.</p><p>If the survey is for an already-existing record and the record is deleted before the participant clicks on the survey link, the participant will receive the message "Thank you for your interest, but you are not a participant for this survey."</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_9_tab_4">If you've already sent survey invitations, can you change the Designate Email Field?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_9_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, but it will only affect future invites. If you need to update the email field for already scheduled invites, you must delete the invites and reschedule.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_10_tab_4">How can I remove survey participants or multiple scheduled surveys?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_10_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Once a survey invitation is in the Survey Invitation Log, the only way to get rid of them through the UI is to click on the red X next to each one.</p><p>The easiest way to simply stop future surveys from going out is to add a new field call "Do not send further survey" in a "Control Center" form, and add that to the ASI condition and click "Ensure logic is still true before sending invitation?" in the Survey Invitation pop up box</p><p>This effectively depends on "Ensure logic is still true before sending invitation?" to get the ASI condition to be re-check (and evaluate to false) just before the survey invitation goes out. Whether changes in ASI and the checkbox will affect invitation already in the queue I don't know. Hence, please check before you use it in anger.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_11_tab_4">How do I manage multiple surveys Participant Contact Lists?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_11_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>For for projects with multiple surveys, there will be one participant list per survey.  You'll be able to select the survey specific to survey name and event (longitudinal projects).</p><p>Participant List may be used to: </p><ol><li>Send emails to many participants at once </li><li>Send individual survey invites directly from a data entry form</li></ol><p>The Public Survey Link and Participant List have been separated onto different pages within Survey Distribution Tools because they each represent a different method for inviting survey participants.</p><p>Note: To be able to add participants directly to the Participant Contact List, the first data collection instrument (DCI) must be enabled a survey. All participants of all surveys must be added to the first survey of the project.  If the first DCI is not a survey, you can add an email address to the first DCI and use the feature "Designate an Email" which will auto-populate the Participant Contact List.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_12_tab_4">How do I send out my survey?</a>
                            </h4>
                        </div>
                        <div id="category_22_question_12_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	The most common methods to send out a survey are the Public Link and the Participant List. These methods are on the "Survey Distribution Tools" page, which is accessed through the project menu's Data Collection section.</p><p> 	<strong>Public Link:</strong>  This is a single survey link for your project which all participants will click on.  This link can be copy and pasted into the body of an email message in your own email client. It can also be posted to web pages. This is the most common method for large, anonymous surveys where you do not need to follow-up with survey respondents.</p><p> 	<strong>Participant List:</strong>  This option allows you to send emails through REDCap and thereby track who responds to your survey. It is also possible to identify an individual's survey answers by providing an Identifier for each participant. This is the most common method when you need to know who has responded so far and who hasn't.</p><p> 	<strong>Designate an Email Field: </strong> You can capture email addresses for sending invitations to your survey participants by designating a field in your project. If a field is designated for that purpose, then any records in your  project that have an email address captured for that particular field  will have that email address show up as the participant's email address in the Participant List (unless an email address has already been entered for that participant in the Participant List directly).</p><p> 	Using the designated email address field can be especially valuable when your first data collection instrument is not enabled as a survey while one or more other instruments have been enabled as surveys. Since email addresses can only be entered into the Participant List directly for the first data collection instrument, the designated email field provides another opportunity to capture the email address of survey participants. 	<br> 	<strong></strong></p><p> 	<strong></strong>NOTE:<strong> </strong>If the participant's email address has already been captured directly in the Participant List, then that email address will supersede the value of the email field here when survey invitations are sent to the participant.</p><p> 	<strong>Compose Survey Invite: </strong>This option is available on the Participant List and on survey data entry pages for individual records. This allows you to create and send the actual survey invitations.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_13_tab_4">Can I remove survey invites in batch? </a>
                            </h4>
                        </div>
                        <div id="category_22_question_13_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can do this in the Survey Invitation Log. Navigate to the log to see all the pending survey invitations. You can select a batch individually by checking the boxes in the far right column, or you can select all by clicking the checkbox directly above that column. If you select all, you can individually deselect invitations as well. Once you have selected your batch, use the "Delete all selected" button.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_22_question_14_tab_4">If you make changes to piping, logic... email invite text..., will it update already scheduled invites</a>
                            </h4>
                        </div>
                        <div id="category_22_question_14_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No. You may have to delete scheduled invites and reschedule. And don't forget the reminders! They are not displayed by default.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Surveys: How to Prefill Survey Questions</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_23_question_1_tab_4">Can I pre-fill survey questions so that some questions already have values when the survey initially loads?</a>
                            </h4>
                        </div>
                        <div id="category_23_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, this can be done by multiple different methods, described below.</p><p>1. <strong>Use an Action Tag:</strong> '@DEFAULT' can be used to pre-fill (populate) a field on a survey. To use this Action Tag, go to design mode for the survey and refer to Action Tag help on @DEFAULT for available options.</p><p>Note: The @DEFAULT tag will only pre-fill fields on surveys that <u>do not</u> yet contain any saved data.</p><p>2. <strong> Append values to the survey link:</strong> The format for adding URL parameters is to add an ampersand (&amp;) to the end of the survey link, followed by the REDCap variable name you wish to pre-fill, followed by an equals sign (=), then followed by the value you wish to pre-fill in that question.</p><p>For example, if the survey URL is <em><a href="https://redcap.vanderbilt.edu/surveys/?s=dA78HM">https://redcap.vanderbilt.edu/surveys/?s=dA78HM</a> </em>then the URL below would pre-fill "Jon" for the first name question, "Doe" for last name, set the multiple choice field named "gender" to "Male" (whose raw/coded value is "1"), and it would check off options 2 and 3 for the "race" checkbox.<strong><br></strong></p><pre><p><a href="https://redcap.vanderbilt.edu/surveys/?s=dA78HM&amp;first_name=Jon&amp;last_name=Doe&amp;gender=1∽̱___2=1∽̱___3=1">https://redcap.vanderbilt.edu/surveys/?s=dA78HM&amp;first_name=Jon&amp;last_name=Doe&amp;gender=1&amp;race___2=1&amp;race___3=1</a></p></pre><p>Note1:<strong> This method is more likely to be used for public survey links, as opposed to when participant- or record- specific survey links are used, such as when using the Participants List or an Automated Survey Invitation to send survey invitations. </strong>This is because there may be no opportunity to modify the survey links sent to participants via these methods.</p><p>Note2: This option only works for the <strong>first page,</strong> if it is a multi-page survey.</p><p><strong>WARNING: This method is not considered secure for transmitting confidential or identifying information (e.g. SSN, name), even when using over SSL/HTTPS. </strong>If you wish to pre-fill such information, it is highly recommended to use method 3, below.</p><p>3. <strong>(for programmers and web developers) </strong><strong>Submit an HTML form to a REDCap survey from another webpage:</strong> This method is for pre-filling survey questions by posting the values from another webpage using an HTML form. This webpage can be *any* webpage on *any* server. See the example below. The form's "method" must be "post" and its "action" must be the survey link URL. The form's submit button must have the name "__prefill" (its value does not matter). Each question you wish to pre-fill will be represented as a field in the form, in which the field's "name" attribute is the REDCap variable name and its value is the question value you wish to pre-fill on the survey page. The form field may be an input, text area, or select field. (The example below shows them all as hidden input fields, which could presumably have been loaded dynamically, and thus do not need to display their value.) If submitted, the form below would pre-fill "Jon" for the first name question, "Doe" for last name, set the multiple choice field named "gender" to "Male" (whose raw/coded value is "1"), and it would check off options 2 and 3 for the "race" checkbox. In this example, the only thing that would be seen on the webpage is the "Pre-fill Survey" button.</p><pre>&lt;!-- Other webpage content goes here --&gt;  &lt;form method="post" action="https://redcap.vanderbilt.edu/surveys/?s=dA78HM"&gt;  &lt;input type="hidden" name="first_name" value="Jon"&gt;  &lt;input type="hidden" name="last_name" value="Doe"&gt;  &lt;input type="hidden" name="gender" value="1"&gt;  &lt;input type="hidden" name="race___2" value="1"&gt;  &lt;input type="hidden" name="race___3" value="1"&gt;  &lt;input type="submit" name="__prefill" value="Pre-fill Survey"&gt;  &lt;/form&gt;  &lt;!-- Other webpage content goes here --&gt; </pre></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Double Data Entry</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_1_tab_4">What is the Double Data Entry module?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>As a preventive measure, REDCap prevents users from entering duplicate records. However, some projects may need to enter data twice for each record as a means of ensuring quality data collection by later comparing the records. This can be done using the Double Data Entry Module. When the module is enabled, REDCap collects data differently than normal. It allows you to designate any two project users or roles as "Data Entry Person 1" and "Data Entry Person 2", which is done on the User Rights page. Once designated, either of these two users can begin entering data independently, and they will be allowed to create duplicate records. They will not be able to access each other's data, and only normal users (called Reviewers) will be able to see all three copies of the data. Once each designated data entry person has created an instance of the same record, both instances can then be compared side by side on the Data Comparison Tool page and merged into a third instance.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_2_tab_4">How do you set up Double Data Entry?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_2_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The Double Data Entry (DDE) module that needs to be enabled by a REDCap administrator prior to any data is collected in the project. This module allows two project users or roles to be set as Data Entry Person 1 and Data Entry Person 2 (using User Rights page), and allows them to create records with the same name and enter data for the same record without seeing one another's data. </p><ul><li>Only one person or role at a time can be set as Data Entry Person 1 or 2. </li><li>All other users are considered Reviewers. </li><li>Reviewers have the ability to merge a record created by Data Entry Person 1 and 2 after viewing differences and adjudicating those differences using the Data Comparison Tool, thus creating a third record in the set.</li></ul><p>It is sometimes recommended to use the Data Access Groups over the actual DDE module to implement a form of double data entry. The advantages of using DAGs include allowing an unlimited number of users to be in a group and enter data, to utilize the Data Import Tool, and to access all Applications pages. Discrepancies between double-entered records can be resolved by a "reviewer" (i.e. someone not in a group) using the Data Comparison Tool. However, two records can ONLY be merged together when using the DDE module. So if it is necessary for a third party "reviewer" to merge the two records into a third record, then in that case the DDE module would be advantageous over using DAGs.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_3_tab_4">How do I merge records when using double data entry?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_3_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>When both data entry person 1 and 2 have completed data entry for a record, someone with the reviewer role will access the Data Comparison Tool from under Applications on the sidebar. The review will select the record from the “Record ID” dropdown and compare the two versions and select the “click here to merge them” option.</p><p>In the next step, REDCap will display all fields where the two versions of the record do not match. The reviewer will select to keep version 1, version 2, or to enter a new value. Once all items have been arbitrated, the reviewer will click the “Merge Record” button at the bottom of the screen to merge the records and create a new third record.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_4_tab_4">In a project using the double data entry module, can I make changes in one of the merged records?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_4_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>A record can be merged only once. For example records "AA--1" and "AA--2" merge to create record "AA".After merging, the user in role Data Entry Person One can still make changes and only record "AA--1" will be changed.The person in role Data Entry Person Two can make changes and only record "AA--2" will be changed.A person in role Reviewer can view all three records that can be edited like any record in a database. The reviewer can use the Data Comparison Tool to see discrepancies in the three versions. The reviewer may then access the merged record and add data. What she adds in the "AA" record will not be added to either "AA--1" or "AA--2" unless she opens them and makes the addition. She can see, and make manual changes, but cannot use "merge"  <a rel="noopener noreferrer" href="http://again.An" target="_blank">again.An</a> alternative is to delete the merged version "AA", let the Data Entry people make changes themselves and then merge the records.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_5_tab_4">As a double data entry Reviewer, how can I make sure the Data Entry personnel do not modify their records after I create a final merged record?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_5_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you do not want data entry personnel to update records after a review and merge, you can enable the User Right &gt; "Lock/Unlock Records" for the Reviewers.  The Reviewers can then lock any records prior to a merge.  The data entry personnel without this right will not be able to make updates to the locked record without first contacting the Reviewer.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_24_question_6_tab_4">How do I export only the merged records in a Double Data Entry project?</a>
                            </h4>
                        </div>
                        <div id="category_24_question_6_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>When exporting records (or viewing a report) from a double data entry  (DDE) project, the exported record set will, by default, include three  records for every merged record (the first user's entry, the second  user's entry, and the merged record). </p><p>To limit the exported (viewed) records to only the final merged version  of each record, follow these steps:</p><p>1. Create a filter. </p><p>2. Switch to Advanced Logic:</p><p>3. Add this code: not_contain([record_id], "--")</p><p>Note, change [record_id] to whatever field you are using as the record identifier.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Data Resolution Workflow</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_1_tab_4">What is a Field Comment?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_1_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When the Data Resolution Workflow is not enabled, the field comments, indicated by the balloon icon next to a field, are enabled by default. Any user with data entry rights can create comments. These comments are recorded in the Field Comment Log, which appears in the list of Applications.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_2_tab_4">Can I edit the Field Comments?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_2_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. Field Comments may be edited and deleted. For all existing projects and all new projects created, the ability to edit/delete a field comment will be enabled by default. If users do *not* wish to allow this functionality, they may disable it for the project on the Project Setup &gt; Optional Customizations popup.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_3_tab_4">Are the Field Comments logged?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_3_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. All comments entered for the Field Comment Log and Data Resolution Workflow are now logged on the Logging page. In previous versions, the project Logging page noted the action performed and the record/event/field, but it did not explicitly display the comment entered.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_4_tab_4">What is the Data Resolution Workflow?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_4_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Data Resolution Workflow, sometimes called a data query, is a process for managing and documenting resolution of data entry issues. This tool can be enabled in the "Additional Customizations" section of the Project Setup tab. A data query can be initiated on a data entry form by clicking the balloon icon next to a field, or in the Data Quality module when discrepancies are found. Individual users must be granted appropriate User Rights to open, respond to, or close data queries. Further instructions for using the Data Resolution Workflow can be found on the "Additional Customizations" section of the Project Setup tab and in the "Resolve Issues" section of the Data Quality module.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_5_tab_4">Is it possible to import or export the data quality rules?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_5_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>It is not possible to import or export the data quality rules. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_25_question_6_tab_4">Is it possible copy the Data Resolution Workflow (queries) into a new project when copying a project?</a>
                            </h4>
                        </div>
                        <div id="category_25_question_6_tab_4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>It is not.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="8" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-8"></div></div><div id="5" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-5"><div class="faqHeader">Data Exports</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_1_tab_5">When I increase the font size on my data collection instruments using HTML tags it is not reflected when I print a pdf. Is there any way to increase the font size in the pdf?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No. The pdf prints in standard format and does not print the formats created with the HTML tags.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_2_tab_5">How can I export the graphs and charts to use in presentations?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can "Print page" link at the top of the page and print to Adobe (tested with Adobe Acrobat Pro). Once you have an Adobe file, right click on the graphs and "save image as". You can then paste into MS Word and Power Point.You can also "Print Screen" (Alt-Print Screen in Windows or Ctl+Cmd+Shift+4 in Mac) to copy to the clipboard and paste in MS Word and Power Point. The graphs can be manipulated as images.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_3_tab_5">Is there a way to specify variable lengths for different variable types for example when reading in the csv file into the SAS editor?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When exporting data, the format statements in REDCap's SAS editor specify that text fields have a length of 500 and numeric fields are set to BEST32.  However once you read the data set into SAS you can run a macro that will specify the "best" length for character variables and numeric variables.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_4_tab_5">Can I export all my data as PDFs or do I have to download each subject's PDF individually?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You may export data for all records in a project into a single PDF file.  This option is on the Data Export Tool page.  The file will contain the actual page format as you would see it on the data entry page or survey and includes all data for all records for all data collection instruments.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_5_tab_5">Can I export data in Development to practice this function?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. It is recommended that you export your test data for review prior to moving your project into Production. In development, all the applications function like they would in Production; however changes in Production cannot be made in real time. So it's best to make sure your database is tested thoroughly, including the data export.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_6_tab_5">What are the dark gray sections of my report?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_6_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When viewing reports in longitudinal projects, any fields displayed in the report that are not designated for that particular event (i.e., row in the report) will be grayed out to show that the field is not designated. This makes it easier for users to discern if a field's value is not applicable or if it is missing.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_7_tab_5">Can I copy my report over to another project?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_7_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Not if the project already exists. You can copy all reports into a copy of your project as an optional setting during the copying process.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_8_tab_5">Can I include the survey identifier field and survey time stamp fields in my report?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_8_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. Time stamps and survey id are not included in reports by default. You can enable it in step 2 "Additional fields" of the "Create New Report" tab.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_9_tab_5">Why can I order the results three times (e.g. First order by last name, then first name, finally middle name)?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_9_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This is useful when you are ordering the report with a field that can contain duplicates (last name, date of birth, etcetera). The second and third order layer will allow you to fine-tune your report more.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_10_tab_5">Can I give access for a report to an user that's not part of my project?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_10_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No, people that can access reports need to be part of the project. You can add users in the user rights menu.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_11_tab_5">How can I use the reports to find "blank", "null", or "missing" data?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_11_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you want to find instances in your data where a field's value is blank/null, you can use the report "Filter".  Include the variable and leave the value text box blank. Conversely, to find instances where the field has a value (i.e., is non-blank), set the operator as 'not =' with a blank text box.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_12_tab_5">Can I add entire instruments to my report, instead of individual variables?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_12_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, "Create New Report" tab under Step 2, look to the top right corner for a dropdown menu. Selecting any form from the drop down will add all variables in that form to the report.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_13_tab_5">When exporting data from redcap into SPSS, will the variable codes that you've defined be automatically imported into SPSS (for ex 1, Female  2, Male)?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_13_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. REDCap uses the metadata you have defined in your data dictionary to create syntax files for SPSS, SAS, R, and Stata. The Data Export tool includes instructions for linking the exported syntax and data files. Note that SPSS has several variable naming conventions:</p><ul><li>The name MUST begin with a letter.  The remaining characters may be any later, digit, a period or the symbols #, @, _, or $</li><li>Variable names cannot end with a period</li><li>The length of the name cannot exceed 64 bytes (64 characters)</li><li>Spaces and special characters other than the symbols above cannot be used</li><li>No duplicate names are acceptable; each character must be unique</li><li>Reserved keywords cannot be used as variable names (ALL, AND, BY, EQ, GE, GT, LE, LT, NE, NOT, OR, TO, and WITH)</li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_14_tab_5">How do I create a custom report?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_14_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Go to the "Data Exports, Reports, and Stats" application and hit the "Create New Report" button.Then take the following actions</p><ul><li>Provide a proper name for the report</li><li>Set the User Access</li><li>Select which fields you want to include in your report</li><li>Set up filters to select the appropriate records</li><li>Set up the proper order for your report</li><li>Hit "Save Report"</li></ul><p>You will have successfully create a new report and saved it to the project.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_15_tab_5">How can I pull the data enterer's username into reports?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_15_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To do this, you'll want to create a username field on any data forms you need to know about for the report. Use the action tags @USERNAME and @READONLY to capture the username of the first person saving data on the form, and then include your username field on the report.</p><p>If you need more detailed information about every user who may have entered data on the form, you will have to refer to the log and won't be able to pull it into a REDCap report.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_16_tab_5">What algorithm/method is used to calculate the percentiles of numerical fields on the Stats &amp; Charts page?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_16_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The method used for calculating the percentile values is the same algorithm utilized by both R (its default method - type 7) and Microsoft Excel.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_17_tab_5">How can I ensure that the leading zeros of numbers entered into text fields are retained when the data is exported?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_17_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Excel will discard the leading zeros if you open your export file in Excel.  The leading zeros will be retained if you open the file in Notepad.  Rather than opening the file directly in Excel you should open the data into Excel and specify that the column with the leading zeros is a text column.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_18_tab_5">How do I export non-English/non-Latin characters to .csv files and allow characters to render correctly?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_18_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you're using MS Excel, it does not render all languages and characters unless multi-language updates are purchased. The use of  <a rel="noopener noreferrer" href="http://OpenOffice.org" target="_blank">OpenOffice.org</a> CALC (free download) application enables you to build the data dictionary, save as .csv and upload to REDCap. CALC will ask you for a character set every time you open a .csv file. Choose "unicode (utf-8)" from the options listed. REDCap does not render UTF8 characters to the PDFs.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_19_tab_5">How do I export my entire data set?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_19_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Go to the "Data Exports, Reports, and Stats" application and hit the "Export Data" button in the very first report (A: All data (all records &amp; fields)). Then follow the prompts.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_27_question_20_tab_5">Can I restrict access to a custom report?</a>
                            </h4>
                        </div>
                        <div id="category_27_question_20_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. You can choose who sees the report on their sidebar by selecting "All users" or "Custom user access". You can customize access based on individual users and data access groups. All users with "Add / Edit Reports" user rights will see all reports listed if they go to the "Data Exports, Reports, and Stats" page.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Data Import Tool</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_1_tab_5">How do I import data from another source?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Data from another source can be imported using the Data Import tool or the API (Application Programming Interface).The Data Import Tool requires that data to be imported is in CSV (comma separated variables) format. The order of the fields or the number of fields being imported does not matter, except that the record identifier (e.g. Subject ID) must be the first field.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_2_tab_5">Can REDCap auto-number records when you are importing new records?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap can auto-number records during the data import process. To do this, set "Name the imported records automatically" to "Yes". You will also need to provide a placeholder value as the record ID in the import file. Each individual record will need a unique placeholder value for the import to be successful.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_3_tab_5">How do I import form status (Incomplete, Unverified, Complete)?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Form status can be imported into variables named form_name_complete.  The data import template, available on the Data Import Tool page, will contain the appropriate form status variable name for your project forms.  Form status is imported as dropdown field type coded as</p><p>0 Incomplete</p><p>1  Unverified</p><p>2  Complete</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_4_tab_5">How do I import data for calculated fields?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Data cannot be directly imported into calculated fields. If you are importing data to a field you have set up to calculate a value, follow these steps:</p><ol><li>Temporarily change the field type to text</li><li>Import data</li><li>Change the field type back to a calculated field</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_5_tab_5">How do I import longitudinal data?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Data Import Tool requires you to use the "redcap_event_name" column when importing data. You must specify the event name in the file using the unique "redcap_event_name".  You can upload multiple event data per subject.The unique "redcap_event_name"s are listed on each project's Define My Events page.You can insert this field after the unique identifier as the second column or you can add it to the end of your import spreadsheet (last column).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_6_tab_5">Why am I getting "IMPORT ERROR" when I do a data import?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_6_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Check the encoding of the import CSV file - it should be UTF-8. If you are on Windows, Notepad++ is a useful tool to check or change the encoding of a text file.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_28_question_7_tab_5">Why does REDCap display an out of memory message and ask me to break up my file into smaller pieces when I try to upload a 700 KB file using the Import Tool?  Will it help to increase the server's memory limit?</a>
                            </h4>
                        </div>
                        <div id="category_28_question_7_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Memory will always be a limit for the Data Import Tool.  A lot depends on how much data resides in the uploaded CSV file because the Data Import Tool does the validation checking and data processing in memory.  So a 500KB CSV file may be too big to process even though the server memory limit for REDCap might be 256 MB.  A csv file can be pretty small and yet cause a lot of memory to be used if you keep the columns (or rows) for all of the variables, but are only providing data for a few of the variables.  So you'll still have to follow the solution that REDCap gives you.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">File Repository</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_29_question_1_tab_5">What is the File Repository?</a>
                            </h4>
                        </div>
                        <div id="category_29_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The File Repository can be used for storing and retrieving project files and documents (ex: protocols, instructions, announcements).  In addition, it stores all data and syntax files when data is export using the Data Export Tool.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_29_question_2_tab_5">Is there any way to organize files in the file repository, such as a folder tree or section headers?</a>
                            </h4>
                        </div>
                        <div id="category_29_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No. The files in the File Repository cannot be sorted alphabetically or otherwise. The table headers are not clickable. The File Repository displays files in descending order by time of upload. Oldest files are at the bottom, while more recent uploads are at the top. If you have uploaded files of different formats (e.g. Word, Excel, PDF), then a dropdown box in the upper right of the table will let you additionally sort/filter the list to show only files of a certain format.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_29_question_3_tab_5">Are transfers to and from the file repository secure and done using SSL?</a>
                            </h4>
                        </div>
                        <div id="category_29_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>As long as the REDCap server and the connection to the file storage server (if not the same as the REDCap server) uses SSL/TLS or another type of secure tunneling behind-the-firewall type method, then the transfers will be secure.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">User Rights</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_1_tab_5">How can I give someone access to my project?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you have rights to the User Rights application, add a new user by entering their user name in the "New User name" text box and hit the Tab key. Assign permissions and save changes.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_2_tab_5">What are the User Rights that can be granted/restricted?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><table><tbody><tr><td><strong>User Right</strong></td><td><strong>Access</strong></td><td><strong>Notes</strong></td><td><strong>Potential to Access Protected Health Info (PHI)?</strong></td></tr><tr><td>Data Entry Rights</td><td>Grants user "No Access", "Read Only", "View&amp;Edit", "Edit Survey Responses" rights to the project's data collection instruments.</td><td><strong>WARNING:</strong> The data entry rights only pertain to a user's ability to view or edit data on the web page. It has NO effect on what data is included in data exports or downloaded to a device*.</td><td>YES. If access to a form with PHI is "Read Only" or "View&amp;Edit", user will be able to view PHI.</td></tr><tr><td>Expiration Date</td><td>Automatically terminates project access for the user on date entered.</td></tr><tr><td>Project Design and Setup</td><td>Grants user access to add, update or delete any forms within the project. Also allows user to enable and disable project features and modules.</td><td>This should be allocated only to trained study members and should be limited to a very few number of users per study.</td></tr><tr><td>User Rights</td><td>Grants user access to change the rights and privileges of all users on a particular project, including themselves.</td><td><strong>WARNING:</strong> Granting User Rights privileges gives the user the ability to control other users' project access. This user should be very trusted and knowledgeable about the project and REDCap. Giving user rights to team members should be a carefully thought out decision. The consequences of poor user rights assignments could be damaging to both the security and integrity of your project. For instance, giving record deletion or project design rights to an unqualified person could result in data loss or database integrity issues.</td><td>YES. User can change own User Rights and grant access to any module where PHI can be viewed or downloaded to a device.</td></tr><tr><td>Data Access Groups</td><td>Grants user access to create and add users to data access groups. User should not assign their self to a data access group or they will lose their access to update other users to data access groups. Therefore, user with this privilege should be able to see all project data regardless of group.</td><td>For multisite studies this allows the ability to place barriers between sites' data (i.e. group A cannot see, export, or edit group B's data).</td></tr><tr><td>Data Exports</td><td>Grants user "No Access", "De-identified Only", "Remove all tagged Identifier fields" and "Full Data Set" access to export all or selected data fields to one of the 5 default programs in REDCap (SAS, SPSS, R, Stata, Excel). Default Access: De-Identified; De-identified access shifts all dates even if they are not marked as identifiers. Non-validated text fields and note fields (free text) are also automatically removed from export. "Remove all tagged Identifier fields" ONLY removes fields marked as identifiers and does NOT automatically remove non-validated text fields or field notes and does NOT date shift. In reports and in the API data exports, any fields that have been tagged as "Identifer" fields will be removed from the export file. In the PDF exports, it will include the Identifier field but it will indicated with text [*DATA REMOVED*].</td><td><strong>WARNING:</strong> The "de-identified" and "remove all tagged identifier field" options are contingent upon correctly flagging identifiers in each field. It is advised to mark all PHI fields as identifiers and restrict export access to "de-identified".</td><td>YES. PHI can be exported and downloaded to a device. Exporting data is NOT linked to Data Entry Rights. User with Full Export Rights can export ALL data from all data collection instruments. Please see "Data Exports, Reports, and Stats" FAQ for additional info.</td></tr><tr><td>Add / Edit Reports</td><td>Grants user access to build reports within the project. If user does not have access to a data collection instrument that the report is pulling data from, those fields will not appear in the report</td><td>For complex querying of data, best results are acquired by exporting data to a statistical package.</td><td>YES. Depending on Data Entry Rights, PHI can be viewed.</td></tr><tr><td>Stats &amp; Charts</td><td>Grants user access to view simple statistics on each field in the project in real time. If user does not have access to a data collection instrument, that instrument will not be listed on the page.</td><td>Outliers can be identified and clicked on which will take you immediately to the record, form and field of the individual with the outlier data.</td><td>YES. Depending on Data Entry Rights, PHI can be viewed.</td></tr><tr><td><p>Survey Distribution Tools</p></td><td>Grants user access to manage the public survey URLs, participant contact lists, and survey invitation log.</td><td>YES. Email addresses (PHI) may be listed for the participant contact lists and invitation logs. Emails can be downloaded to a device.</td></tr><tr><td>Calendar</td><td>Grants user access to track study progress and allows user to update calendar events, such as mark milestones, enter ad hoc meetings.</td><td>In combination with the scheduling module the calendar tool can be used to add, view and update project records which are due for manipulation.</td><td>YES. PHI can be entered and viewed in the "notes" field. Data entered can be printed to PDF and downloaded to a device.</td></tr><tr><td>Data Import Tool</td><td>Grants user access to download and modify import templates for uploading data directly into the project bypassing data entry forms.</td><td><strong>WARNING:</strong> This will give the user the capability to overwrite existing data. Blank cells in the data import spreadsheet do not overwrite fields with data.</td></tr><tr><td>Data Comparison Tool</td><td>Grants user access to see two selected records side by side for comparison.</td><td>Extremely helpful when using double data entry.</td><td>YES. PHI can be viewed. Data can be printed and downloaded to a device. ALL data discrepancies for all fields in project are displayed and can be downloaded to user with access to this module - NOT linked to Data Entry Rights or Data Export Tool Rights.</td></tr><tr><td>Logging</td><td>Grants user access to view log of all occurrences of data exports, design changes, record creation, updating &amp; deletion, user creation, record locking, and page views. This is the audit trail for the project.</td><td>Useful for audit capability.</td><td>YES. ALL data entered, modified and changed is listed in module, can be viewed and downloaded to a device.</td></tr><tr><td>File Repository</td><td>Grants user access to upload, view, and retrieve project files and documents (ex: protocols, instructions, announcements). In addition, it stores all data and syntax files when data is exported using the Data Export Tool.</td><td><strong>WARNING:</strong> While users with restricted data export rights will not be able to access saved identified exports, they will be able to view any other sensitive information stored in the file repository such as photos or scanned documents. Limit this privilege to those who should have access to PHI.</td><td>YES. Depending on Data Export Tool rights, PHI can be downloaded to a device.</td></tr><tr><td>Data Quality</td><td>Grants user access to find data discrepancies or errors in project data by allowing user to create &amp; edit rules; and execute data quality rules. If user does not have access to a data collection instrument that the query is referencing, access will be denied for query results.</td><td>YES. Depending on Data Entry Rights, PHI can be viewed.</td></tr><tr><td>Create Records</td><td>Grants user access to add record and data to database.</td><td>Basic tool and need of data entry personnel.</td></tr><tr><td>Rename Records</td><td>Grants user access to change key id of record.</td><td><strong>WARNING:</strong> Should only be given to trained staff - can cause problems in data integrity.</td></tr><tr><td>Delete Records</td><td>Grants user access to remove an entire record.</td><td><strong>WARNING:</strong> Records deleted are records lost. Few, if any, team members should have this right.</td></tr><tr><td>Record Locking Customization</td><td>Grants user access to customize record locking text.</td><td>Will only be applicable to users with Lock/Unlock rights. Sometimes used for regulatory projects to provide "meaning" to the locking action.</td></tr><tr><td>Lock/Unlock Records</td><td>Grants user access to lock/unlock a record from editing. Users without this right will not be able to edit a locked record. User will need "Read Only" or "View&amp;Edit" to lock/unlock a data collection instrument.</td><td>A good tool for a staff member who has verified the integrity of a record to ensure that the data will not be manipulated further. Works best if few team members have this right.</td><td>Yes. Depending on Data Entry Rights, PHI can be viewed.</td></tr></tbody></table><p><strong>*Please Note:</strong> REDCap is a web-based system. Once data is downloaded from REDCap to a device (ex: computer, laptop, mobile device), the user is responsible for that data. If the data being downloaded is protected health information (PHI), the user must be trained and knowledgeable as to which devices are secure and in compliance with your institution's standards (ex: HIPAA) for securing PHI.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_3_tab_5">Can I restrict a user from viewing certain fields?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>To restrict a user from viewing sensitive fields, you must group all of the sensitive fields on one form and set the user's data entry rights to "None" for that form. This will prevent the user from viewing the entire form. You cannot selectively prevent a user from viewing certain fields within a form.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_4_tab_5">If I remove a user from my project, will that user also be purged from the log files?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No. The log files will stay intact when a user is removed from the project or suspended. Even if the user is completed removed from the entire REDCap installation (which requires a REDCap Administrator), the log file will still reflect the actions performed by that user. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_5_tab_5">Can I lock a record's event in a longitudinal project?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, you can not lock an event. You can lock a record's form and you can lock all forms  across all events (the entire record). </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_6_tab_5">Who can unlock a record?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_6_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Any user with Locking/Unlocking privileges can unlock a record, regardless of who originally locked the record.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_30_question_7_tab_5">How can I differentiate between the Data Access Groups  and User Rights applications since both control the user's access to data?</a>
                            </h4>
                        </div>
                        <div id="category_30_question_7_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The User Rights page can be used to determine the roles that a user can play within a REDCap database.  The Data Access group on the other hand determines the data visibility of a user within a REDCap database.The following example will illustrate the distinction that was made above.  Let's say that users 1 and 2 have identical data entry roles.  In this situation the Create and Edit Record rights would be assigned to both users.  However a particular project may require that they should have the ability to perform data entries on the same set of forms without seeing each other's entries.  This can be done by assigning User1 into the access group1 and User2 to the access group2.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Data Access Groups</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_1_tab_5">Is there a way of separating data collected by various users so that a normal user can see only the records that he or she has completed?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>You can use Data Access Groups and assign each user to a specific group.  This will isolate recordsto specific groups.  Anyone not assigned to a group can see all records.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_2_tab_5">What are Data Access Groups?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Data Access Groups restrict viewing of data within a database. A typical use of Data Access Groups is a multi-site study where users at each site should only be able to view data from their site but not any other sites. Users at each site are assigned to a group, and will only be able to see records created by users within their group.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_3_tab_5">How do you assign specific subjects to a Data Access group?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If you have User Rights to the Data Access Group (DAG) tool, then for every record at the top of the forms, you should see a drop down list that says "Assign this record to a Data Access Group". Here you can add the record to a DAG.You can assign/re-assign records to Data Access Groups via the Data Import Tool or API data import. For projects containing Data Access Groups, the Data Import Tool and API data import allow users who are *not* in a DAG to assign or re-assign records to DAGs using a field named "redcap_data_access_group" in their import data. For this field, one must specify the unique group name for a given record in order to assign/re-assign that record.The unique group names for DAGs are listed on each project's Data Access Groups page and API page.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_4_tab_5">Can a person be in more than one Data Access Group (DAG)?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, one person can be assigned to more than one Data Access Group. At the bottom of the “Data Access Groups” page there is a blue grid that will list all users and DAGs. For each user, check the DAGs you want to assign them to.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_5_tab_5">How do you switch between different Data Access Groups?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>If a user is assigned to multiple Data Access Groups, they will see a blue text box at the very top of the page. This box will tell them what DAG they are currently in and provide a button allowing them to switch to a new DAG. </p><p>The DAG switcher is disabled while viewing a record on a data entry form or a Record Home Page because the record in question belongs to a specific DAG and cannot be edited by a different DAG.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_6_tab_5">Why can’t I switch between Data Access Groups when I’m editing a record?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_6_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The DAG switcher is disabled while viewing a record on a data entry form or a Record Home Page because the record in question belongs to a specific DAG and cannot be edited by a different DAG.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_31_question_7_tab_5">Can I export a list of all subjects and their assigned Data Access group?</a>
                            </h4>
                        </div>
                        <div id="category_31_question_7_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can export Data Access Group names. For projects containing Data Access Groups, both the Data Export Tool and API data export now automatically export the unique group name in the CSV Raw data file, and they export the Data Access Group label in the CSV Labels data file. The unique group names for DAGs are listed on each project's Data Access Groups page and API page.NOTE: The DAG name will only be exported if the current user is *not* in a DAG. And as it was previously, if the user is in a DAG, it is still true that it will export *only* the records that belong to that user's DAG.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Data Quality Module</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_1_tab_5">What's the difference between running a Data Quality Rule and the real time execution of a Data Quality rule?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>A Data Quality rule run manually in the Data Quality module will evaluate all the records in the project and show you the number of records that match the criteria of the rule. A Data Quality rule that is run through real time execution will only look at the record that the user is currently working on and is run automatically when the user saves the form.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_2_tab_5">How does the real time execution work?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>When real time execution has been enabled, the rule will be run every time a REDCap user saves a form. If the rule finds a discrepancy, it will generate a popup, notifying the user. The user can then take the appropriate action.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_3_tab_5">Does real time execution work for survey participants?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>No, real time execution is not enabled for surveys. Real time execution is only available in data entry forms.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_4_tab_5">Can I use the same syntax for a custom Data Quality rule as I would use when constructing branching logic?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can use the same syntax as you would use for branching logic.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_5_tab_5">How do I set-up real time execution of a Data Quality rule?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Each custom Data Quality rule has a checkbox in the column labeled "Real Time Execution". Checking this box will enable the real time execution of the rule in this project for all forms.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_6_tab_5">I ran my custom Data Quality rule and it came up with zero results. What did I do wrong?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_6_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>This means that none of your records match the criteria of your custom rule. This usually means that you have no data integrity issues, but may also mean that the criteria you've entered are logically impossible. (e.g. Having multiple options of a radio button variable be true). If the latter is the case, you will have to rework your criteria.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_7_tab_5">What functions can be used in Data Quality custom rules?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_7_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Data Quality module can perform many advanced functions for custom rules that users create. For a complete list with explanations and examples for each, see List of functions for logic in Report filtering, Survey Queue, Data Quality Module, and Automated Survey Invitations.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_8_tab_5">What mathematical operations can be used in the logic for Data Quality rules?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_8_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>+        Add</p><p>-        Subtract</p><p>*        Multiply</p><p>/        Divide</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_32_question_9_tab_5">What is the Data Quality Module?</a>
                            </h4>
                        </div>
                        <div id="category_32_question_9_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The Data Quality module allows you to find discrepancies in your project data. You can create your own custom rules that REDCap will execute to determine if a specific data value is discrepant or not. Your custom rules can include mathematical operations and also advanced functions (listed below) to provide you with a great amount of power for validating your project data. You can also activate the real time execution of your custom rules to continually ensure the data integrity of your project. </p><p>Note: Although setting up a Data Quality custom rule may at times be very similar to constructing an equation for a calculated field, calc fields will ALWAYS have to result in a number, whereas the Data Quality custom rule must ALWAYS result with a TRUE or FALSE condition and NEVER a value.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Functions for Logic in Reports</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_33_question_1_tab_5">List of functions that can be used in Branching Logic, Calculations, Report filtering, Data Quality Module, Automated Survey Invitations, etc.</a>
                            </h4>
                        </div>
                        <div id="category_33_question_1_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>REDCap logic can be used in a variety of places, such as Branching Logic, Calculations, Report filtering, Data Quality Module, Automated Survey Invitations, and more. Special functions can be used in the logic, if desired. A complete list of ALL available functions is listed below.</p><table><tbody><tr><td><strong>Function</strong></td><td><strong>Name/Type of Function</strong></td><td><strong>Notes / Examples</strong></td></tr><tr><td>if (CONDITION, VALUE if condition is TRUE, VALUE if condition is FALSE)</td><td>If/Then/Else conditional logic</td><td>Return a value based upon a condition. If CONDITION evaluates as a true statement, then it returns the first VALUE, and if false, it returns the second VALUE. E.g. if([weight] &gt; 100, 44, 11) will return 44 if "weight" is greater than 100, otherwise it will return 11.</td></tr><tr><td>datediff ([date1], [date2], "units", returnSignedValue)</td><td>Datediff</td><td>Calculate the difference between two dates or datetimes. Options for 'units': 'y' (years, 1 year = 365.2425 days), 'M' (months, 1 month = 30.44 days), 'd' (days), 'h' (hours), 'm' (minutes), 's' (seconds). The parameter 'returnSignedValue' must be either <em>true </em>or <em>false </em>and denotes whether you want the returned result to be either signed (have a minus in front if negative) or unsigned (absolute value), in which the default value is <em>false</em>, which returns the absolute value of the difference. For example, if [date1] is larger than [date2], then the result will be negative if returnSignedValue is set to <em>true</em>. If returnSignedValue is not set or is set to <em>false</em>, then the result will ALWAYS be a positive number. If returnSignedValue is set to <em>false </em>or not set, then the order of the dates in the equation does not matter because the resulting value will always be positive (although the + sign is not displayed but implied).</td></tr><tr><td>isblankormissingcode (value)</td><td>Is a field's value blank/null or is it a Missing Data Code?</td><td>Returns a boolean (true or false) if the field value is blank/null/'' or if the value is a Missing Data Code, in which Missing Data Codes have been explicitly defined in the project on the Project Setup page under Additional Customizations. E.g. isblankormissingcode([age]), in which if 'age' has a value of 'UNK' (which might be a Missing Data Code in a project), then it will return TRUE. And if the field has any non-blank/non-null value that is also not a Missing Data Code, it will return FALSE.</td></tr><tr><td><strong>Functions to use with Numbers</strong></td></tr><tr><td>round (number, decimal places)</td><td>Round</td><td>If the "decimal places" parameter is not provided, it defaults to 0. E.g. To round 14.384 to one decimal place: round(14.384,1) will yield 14.4</td></tr><tr><td>roundup (number,decimal places)</td><td>Round Up</td><td>If the "decimal places" parameter is not provided, it defaults to 0. E.g. To round up 14.384 to one decimal place: roundup(14.384,1) will yield 14.4</td></tr><tr><td>rounddown (number,decimal places)</td><td>Round Down</td><td>If the "decimal places" parameter is not provided, it defaults to 0. E.g. To round down 14.384 to one decimal place: rounddown(14.384,1) will yield 14.3</td></tr><tr><td>sqrt (number)</td><td>Square Root</td><td>E.g. sqrt([height]) or sqrt(([value1]*34)/98.3)</td></tr><tr><td>(number)^(exponent)</td><td>Exponents</td><td>Use caret ^ character and place both the number and its exponent inside parentheses. NOTE: The surrounding parentheses are VERY important, as it wil not function correctly without them. For example, (4)^(3) or ([weight]+43)^(2)</td></tr><tr><td>abs (number)</td><td>Absolute Value</td><td>Returns the absolute value (i.e. the magnitude of a real number without regard to its sign). E.g. abs(-7.1) will return 7.1 and abs(45) will return 45.</td></tr><tr><td>min (number,number,...)</td><td>Minimum</td><td>Returns the minimum value of a set of values in the format min([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the lowest numerical value. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>max (number,number,...)</td><td>Maximum</td><td>Returns the maximum value of a set of values in the format max([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the highest numerical value. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>mean (number,number,...)</td><td>Mean</td><td>Returns the mean (i.e. average) value of a set of values in the format mean([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the mean value computed from all numerical, non-blank values. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>median (number,number,...)</td><td>Median</td><td>Returns the median value of a set of values in the format median([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the median value computed from all numerical, non-blank values. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>sum (number,number,...)</td><td>Sum</td><td>Returns the sum total of a set of values in the format sum([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the sum total computed from all numerical, non-blank values. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>stdev (number,number,...)</td><td>Standard Deviation</td><td>Returns the standard deviation of a set of values in the format stdev([num1],[num2],[num3],...). NOTE: All blank values will be ignored and thus will only return the standard deviation computed from all numerical, non-blank values. There is no limit to the amount of numbers used in this function.</td></tr><tr><td>log (number, base)</td><td>Logarithm</td><td>Returns the logarithm of the number provided for a specified base (e.g. base 10, base "e"). If base is not provided or is not numeric, it defaults to base "e" (natural log).</td></tr><tr><td>isnumber (value)</td><td>Is value a number?</td><td>Returns a boolean (true or false) for if the value is an integer OR floating point decimal number.</td></tr><tr><td>isinteger (value)</td><td>Is value an integer?</td><td>Returns a boolean (true or false) for if the value is an integer (whole number without decimals).</td></tr><tr><td><strong>Functions to use with Text values</strong><br></td><td><br></td><td>Special note: If you wish to use any of the text string functions below in branching logic or calculated fields, keep in mind that these functions should NOT be used on date or datetime fields that have MDY or DMY date formatting. They are okay to use with YMD-formatted dates/datetimes, and they are okay to use with any date formatting outside of branching logic or calc fields (e.g., data quality rules, report filter logic, ASI conditional logic). <u>If you wish to use these functions with date/datetime fields in branching and calcs, make sure the field has YMD date format.<br></u></td></tr><tr><td>contains (haystack, needle)</td><td>Does text CONTAIN another text string?</td><td>Returns a boolean (true or false) for if "needle" exists inside (is a substring of) the text string "haystack". Is case insensitive. E.g. contains("Rob Taylor", "TAYLOR") will return as TRUE and contains("Rob Taylor", "paul") returns FALSE. NOTE: This function will *not* work for calculated fields but *will* work in all other places (Data Quality, report filters, Survey Queue, etc.).</td></tr><tr><td>not_contain (haystack, needle)</td><td>Does text NOT CONTAIN another text string?</td><td>The opposite of contains(). Returns a boolean (true or false) for if "needle" DOES NOT exist inside (is a substring of) the text string "haystack". Is case insensitive. E.g. not_contain("Rob Taylor", "TAYLOR") will return as FALSE and not_contain("Rob Taylor", "paul") returns TRUE. NOTE: This function will *not* work for calculated fields but *will* work in all other places (Data Quality, report filters, Survey Queue, etc.).</td></tr><tr><td>starts_with (haystack, needle)</td><td>Does text START WITH another text string?</td><td>Returns a boolean (true or false) if the text string "haystack" begins with the text string "needle". Is case insensitive. E.g. starts_with("Rob Taylor", "rob") will return as TRUE and starts_with("Rob Taylor", "Tay") returns FALSE. NOTE: This function will *not* work for calculated fields but *will* work in all other places (Data Quality, report filters, Survey Queue, etc.).</td></tr><tr><td>ends_with (haystack, needle)</td><td>Does text END WITH another text string?</td><td>Returns a boolean (true or false) if the text string "haystack" ends with the text string "needle". Is case insensitive. E.g. ends_with("Rob Taylor", "Lor") will return as TRUE and ends_with("Rob Taylor", "Tay") returns FALSE. NOTE: This function will *not* work for calculated fields but *will* work in all other places (Data Quality, report filters, Survey Queue, etc.).</td></tr><tr><td>left (text, number of characters)</td><td>Returns the leftmost characters</td><td>Returns the leftmost characters from a text value. For example, left([last_name], 3) would return 'Tay' if the value of [last_name] is 'Taylor'.</td></tr><tr><td>right (text, number of characters)</td><td>Returns the rightmost characters</td><td>Returns the rightmost characters from a text value. For example, right([last_name], 4) would return 'ylor' if the value of [last_name] is 'Taylor'.</td></tr><tr><td>length (text)</td><td>Returns the number of characters</td><td>Returns the number of characters in a text string. For example, length([last_name]) would return '6' if the value of [last_name] is 'Taylor'.</td></tr><tr><td>find (needle, haystack)</td><td>Finds one text value within another</td><td>Finds one text value within another. Is case insensitive. The "needle" may be one or more characters long. For example, find('y', [last_name']) would return '3' if the value of [last_name] is 'Taylor'. The value '0' will be returned if "needle" is not found within "haystack".</td></tr><tr><td>mid (text, start position, number of characters)</td><td>Returns characters from a text string starting at a position</td><td>Returns a specific number of characters from a text string starting at the position you specify. The second parameter denotes the starting position, in which the beginning of the text value would be '1'. The third parameter represents how many characters to return. For example, mid([last_name], 2, 3) would return 'AYL' if the value of [last_name] is 'TAYLOR'.</td></tr><tr><td>concat (text,text,...)</td><td>Combines the text from multiple text strings</td><td>Combines/concatenates the text from multiple text strings into a single text value. For example, concat([first_name], ' ', [last_name]) would return something like 'Rob Taylor'. Each item inside the function must be separated by commas. Each item might be static text (wrapped in single quotes or double quotes), a field variable, or a Smart Variable.</td></tr><tr><td>upper (text)</td><td>Converts text to uppercase</td><td>Converts text to uppercase. For example, upper('John Doe') will return 'JOHN DOE'.</td></tr><tr><td>lower (text)</td><td>Converts text to lowercase</td><td>Converts text to lowercase. For example, lower('John Doe') will return 'john doe'.</td></tr><tr><td>trim (text)</td><td>Removes spaces from the beginning and end of text</td><td>Removes any spaces from both the beginning and end of a text value. For example, trim(' Sentence with spaces on end. ') will return 'Sentence with spaces on end.'.</td></tr></tbody></table></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_33_question_2_tab_5">Can I use conditional IF statements in the logic?</a>
                            </h4>
                        </div>
                        <div id="category_33_question_2_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. You may use IF statements (i.e. IF/THEN/ELSE statements) by using the function <strong>if (CONDITION, value if condition is TRUE, value if condition is FALSE)</strong></p><p>This construction is similar to IF statements in Microsoft Excel. Provide the condition first (e.g. [weight]=4), then give the resulting value if it is true, and lastly give the resulting value if the condition is false. For example:</p><p><strong>if([weight] &gt; 100, 44, 11) &lt; [other_field]</strong></p><p>In this example, if the value of the field 'weight' is greater than 100, then it will give a value of 44, but if 'weight' is less than or equal to 100, it will give 11 as the result.</p><p>IF statements may be used inside other IF statements ("nested"). For example, if you wanted to look for values above ten if the chosen color was blue, but look for values below 20 if any other color was chosen, you could use:</p><p><strong>if([chosen_color] = "blue", if([given_value] &gt; 10, 1, 0), if([given_value] &lt; 20, 1, 0))</strong></p><p>NOTE: The example above would not work in a calculation, because calculations can only use numbers, not a text string like "blue". </p><p>Other advanced functions (described above) may also be used inside IF statements.</p><strong>Datediff examples:</strong><table><tbody><tr><td><strong>datediff([dob], [date_enrolled], "d")</strong></td><td>Yields the number of days between the dates for the date_enrolled and dob fields</td></tr><tr><td><strong>datediff([dob], "today", "d")</strong></td><td>Yields the number of days between today's date and the dob field</td></tr><tr><td><strong>datediff([dob], [date_enrolled], "h", true)</strong></td><td>Yields the number of hours between the dates for the date_enrolled and dob fields. Because returnSignedValue is set to true, the value will be negative if the dob field value is more recent than date_enrolled.</td></tr></tbody></table></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_33_question_3_tab_5">Do the two date fields used in the datediff function both have to be in the same date format (YMD, MDY, DMY)?</a>
                            </h4>
                        </div>
                        <div id="category_33_question_3_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>No, they do not. Thus, an MDY-formatted date field can be used inside a datediff function with a YMD-formatted date field, and so on. (NOTE: Branching logic and calc fields do specifically require that the two values be in the same date format.)</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_33_question_4_tab_5">Can I base my datediff function off of today's date?</a>
                            </h4>
                        </div>
                        <div id="category_33_question_4_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes, for example, you can indicate "age" as: rounddown(datediff("today",[dob],"y")). </p><p>Note1: The "today" variable CAN be used with date, datetime, and datetime_seconds fields, but NOT with time fields. (This is the same as in Calculated Fields.)</p><p>Note2: For additional information about using datediff in Calculated Fields, please see this same question in the 'Calculations' section.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_33_question_5_tab_5">Can a date field be used in the datediff function with a datetime or datetime_seconds field?</a>
                            </h4>
                        </div>
                        <div id="category_33_question_5_tab_5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes. If a date field is used with a datetime or datetime_seconds field, it will calculate the difference by assuming that the time for the date field is 00:00 or 00:00:00, respectively. Consequently, this also means that, for example, an MDY-formatted DATE field can be used inside a datediff function with a YMD-formatted DATETIME field.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="6" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-6"><div class="faqHeader">Production Changes</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_1_tab_6">How do I make changes after I have moved my project to Production?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_1_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To make changes after you have moved your project to Production, first download the current Data Dictionary so that you can revert to the current version, if necessary, if something goes wrong with making changes. Then, select "Enter Draft Mode" on the Online Designer or Data Dictionary page. After making your changes, you can review them by clicking on "view a detailed summary of all drafted changes" hyperlink at the top of the page.</p><p>REDCap will flag any changes that may negatively impact your data with the following critical warnings in red: </p><p style="margin-left: 20px;">*Possible label mismatch </p><p style="margin-left: 20px;">*Possible data loss </p><p style="margin-left: 20px;">*Data WILL be lost</p><p>After making and reviewing changes, you can click "Submit Changes for Review." The REDCap Administrator will review your changes to make sure there is nothing that could negatively impact data you've already collected. If anything is questionable or flagged as critical, you may receive an email from the Administrator with this information to confirm that you really want to make the change.</p><p>Certain changes to the structure of the database, such as deleting events in a longitudinal project can only be done by the REDCap Administrator.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_2_tab_6">What are the risks of modifying a database that is already in Production?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_2_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Altering a database that is in Production can cause data loss and challenges to your data analysis. </p><p>If a Production database must be modified, follow these rules to protect your data:</p><ul><li>Do not change existing variable names, or data stored for those variables will be lost. To restore data that has been lost in this way, revert to previous variable name(s).</li><li>Do not change existing form names via a data dictionary upload, or form completeness data will be lost. Form names may be changed within the Online Designer without data loss.</li><li>Do not modify the codes and response options for existing dropdown, radio, or checkbox variables; or existing data will be lost or confused. </li></ul><p>It is acceptable to add choices to a dropdown, radio, or checkbox field; however adding an option or even an entire field may present other analytical challenges. For example, if a response option is added, it is added to all instruments for all records. For records and/or study participants who have already completed the instrument, that option was not present at the time and not available for selection. Their results may not accurately reflect their situation given the updated version of the instrument/survey. One must either consider their results in light of the instrument contents at the time of data capture or one must be careful to avoid making conclusions which would be affected by the change to the instrument.</p><p>Versioning your instruments and tracking changes over time is recommended. Use the Project Revision History to confirm changes and revisions.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_3_tab_6">Does the project go offline until the changes are approved? Can new surveys and records still be added to the project?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_3_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The project does not go offline during the change request process.  All the functionality remains the same so you can continue adding and updating records as needed while the changes are pending.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_4_tab_6">For radiobutton, checkbox and dropdown fields, can I add response options without impacting my data?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_4_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes. Adding new choices has no data impact to data entered. New choices will be added and display on all records.</p><p>NOTE: Adding new response choices to a question does make it a slightly different  question and, for that reason alone, could impact the integrity and analysis of your  data. It is a new "version" of the question. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_5_tab_6">For radiobutton, checkbox and dropdown fields, can I delete response options?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_5_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Deleting radiobutton or dropdown choices does not change the data saved to the database, but it deletes the ability to select that option.Deleting a checkbox option deletes the data saved for that option (0=unchecked, 1=checked), and it deletes the ability to select that option.REDCap will flag this as: *Data WILL be lost</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_6_tab_6">For radiobutton, checkbox and dropdown fields, can I modify / re-order my response options?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_6_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Modifying / recoding field choices does not change the data saved to the database, it only updates the labels. This will change the meaning of the data already entered and you will have to re-enter responses for those records to ensure accuracy. REDCap will flag this as:</p><p>*Possible label mismatch </p><p>The best thing to do when making field choice changes for radiobuttons, checkboxes or dropdowns is to leave the current response choices as is and start with the next available code. The coded choices do not have to be in order, so you can insert/list choices as you want them displayed.</p><p>For example, if your current codes are:</p><p>1, red | 2, yellow | 3, blue</p><p>and you want to add "green", "orange" and re-order alphabetically, <strong>DO NOT</strong> update to:</p><p>1, blue | 2, green | 3, orange | 4, red | 5, yellow</p><p>If you re-code like this, after the changes are committed any options selected for "1, red" will change to "1, blue"; "2, yellow" to "2, green"; "3, blue" to "3, orange".</p><p>That will completely change the meaning of the data entered. Instead you will want to update to:</p><p>3, blue | 4, green | 5, orange | 1, red | 2, yellow</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_7_tab_6">Are the numbers of the remaining events reordered if I delete some of the events in an ongoing longitudinal project?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_7_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The original numbering is retained for the remaining events.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_8_tab_6">What happens to the data in an ongoing longitudinal project if I delete some of the events?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_8_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The data which was tied to the deleted events will not be erased.  It remains in the system but in "orphaned" form.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_34_question_9_tab_6">If I delete events from an ongoing longitudinal project is the data that is unconnected with these events affected in any way?</a>
                            </h4>
                        </div>
                        <div id="category_34_question_9_tab_6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>In general you can assume that only the data that is tied to the deleted events is affected and that there will be no adverse impact on the data that has been entered for the remaining events.  However there could be an impact on this data if you are using branching logic or calculations across events.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div><div id="7" class="tabpanel tab-pane fade in " role="tabpanel"><div class="panel-group searchable" id="accordion-7"><div class="faqHeader">General Optional Modules</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_35_question_1_tab_7">How to activate Modules and Services</a>
                            </h4>
                        </div>
                        <div id="category_35_question_1_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>These modules and services must be enabled system-wide for your REDCap instance.  If you do not have access to these modules or services, contact your local REDCap Administrator.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_35_question_2_tab_7">Can I send survey invites via text message?</a>
                            </h4>
                        </div>
                        <div id="category_35_question_2_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> REDCap has the capability to make voice calls and send SMS text messages to survey respondents by using a third-party web service named Twilio (<a rel="noopener noreferrer" href="http://www.twilio.com" target="_blank">www.twilio.com</a>). In this way, you could invite a participant to take a survey by sending them an SMS message or by calling them on their phone. There are many different options available for how you can invite participants and how they can take your surveys, either as a voice call survey or as an SMS conversation. </p>  <p> If you do not see the option to enable "Twilio SMS and Voice Call services for surveys" on the Project Setup page &gt; Enable optional modules and customizations, contact your local REDCap Administrator. </p>  <p> For those not using Twilio, there are many providers that let you convert an email into an SMS. You have to register your email address with them for billing, then you construct your messages using a particular pattern, e.g. </p>  <p> To: <recipient's mobile="" number="">@<a rel="noopener noreferrer" href="http://provider.com" target="_blank">provider.com</a><br> Body: The message text </recipient's></p>  <p> This mechanism would work fine from within REDCap - even for automated invitations - although the built-in text containing the survey link may not be particularly nice in an SMS. Contact your REDCap Administrator who may be willing to adjust the language file. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">API / Data Entry Trigger</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_36_question_1_tab_7">What is the REDCap API (Application Programming Interface)?</a>
                            </h4>
                        </div>
                        <div id="category_36_question_1_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The REDCap API is an interface that allows external applications to connect to REDCap remotely, and is used for programmatically retrieving or modifying data or settings within REDCap, such as performing automated data imports/exports from a specified REDCap project.  More information about the API can be found on the Project Setup &gt; Other Functionality page.  For more information on the API, contact your REDCap Administrator.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_36_question_2_tab_7">What is an easy way to get started with the API?</a>
                            </h4>
                        </div>
                        <div id="category_36_question_2_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The first step in accessing the API for any project is to check if you have the appropriate user rights in the project in order to use the API. </p><p>Secondly, you will need to request an API token. This API token will be linked to your user ID and to that specific project &amp; and your respective user rights for that project.  Please note: you will need to request a different API token for each project.</p><p>You will need that API token in each API call, because REDCap uses that token to authenticate each API call.</p><p>While you wait for your API token to be approved, we recommend that you check out the API documentation page in your REDCap installation. The link to the API documentation page can be found in the API application in each project.</p><p>Once you have your API token, you can utilize another tool called the API playground to learn how to use the REDCap API.</p><p>The playground will allow you to "test drive" each API method and tweak the various options for each API method. You can run the method in your browser to see what type of response you'll get.</p><p>The API playground will also supply you with the code (including your API token &amp; server URL) for that specific API method in the following languages:</p><ul><li>PHP</li><li>Perl</li><li>Python</li><li>Ruby</li><li>Java</li><li>R</li><li>cURL</li></ul><p>You can copy and paste your chosen language code into your preferred scripting tool and run it there. <br>We recommend the R program for demo purposes: it's free, light weight and will run on both Windows and Mac environments.</p><p>Another nice tool to "test" the API from your local computer is POSTMAN - a Chrome add-in which allows you to test and save API queries from your local computer.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_36_question_3_tab_7">What is the Data Entry Trigger?</a>
                            </h4>
                        </div>
                        <div id="category_36_question_3_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The Data Entry Trigger is an advanced feature. It provides a way for REDCap to trigger a call to a remote web address (URL), in which it will send a HTTP Post request to the specified URL whenever *any* record or survey response has been created or modified on *any* data collection instrument or survey in this project (it is *not* triggered by data imports but only by normal data entry on surveys and data entry forms). Its main purpose is for notifying other remote systems outside REDCap at the very moment a record/response is created or modified, whose purpose may be to trigger some kind of action by the remote website, such as making a call to the REDCap API.</p><p>For example, if you wish to log the activity of records being modified over time by a remote system outside REDCap, you can use this to do so. Another use case might be if you're using the API data export to keep another system's data in sync with data in a REDCap project, in which the Data Entry Trigger would allow you to keep them exactly in sync by notifying your triggered script to pull any new data from at the moment it is saved in REDCap (this might be more optimal and accurate than running a cron job to pull the data every so often from REDCap).</p><p>DETAILS: In the HTTP Post request, the following parameters will be sent by REDCap in order to provide a context for the record that has just been created/modified:</p><ul><li>project_id - The unique ID number of the REDCap project (i.e. the 'pid' value found in the URL when accessing the project in REDCap).</li><li>instrument - The unique name of the current data collection instrument (all your project's unique instrument names can be found in column B in the data dictionary).</li><li>record - The name of the record being created or modified, which is the record's value for the project's first field.</li><li>redcap_event_name - The unique event name of the event for which the record was modified (for longitudinal projects only).</li><li>redcap_data_access_group - The unique group name of the Data Access Group to which the record belongs (if the record belongs to a group).</li><li>[instrument]_complete - The status of the record for this particular data collection instrument, in which the value will be 0, 1, or 2. For data entry forms, 0=Incomplete, 1=Unverified, 2=Complete. For surveys, 0=partial survey response and 2=completed survey response. This parameter's name will be the variable name of this particular instrument's status field, which is the name of the instrument + '_complete'.</li><li>redcap_repeat_instance - The repeat instance number of the current instance of a repeating event OR repeating instrument. Note: This parameter is only sent in the request if the project contains repeating events/instruments *and* is currently saving a repeating event/instrument.</li><li>redcap_repeat_instrument - The unique instrument name of the current repeating instrument being saved. Note: This parameter is only sent in the request if the project contains repeating instruments *and* is currently saving a repeating instrument. Also, this parameter will not be sent for repeating events (as opposed to repeating instruments).</li><li>redcap_url - The base web address to REDCap (URL of REDCap's home page). i.e., <a href="https://redcap.vanderbilt.edu">https://redcap.vanderbilt.edu</a> </li><li>project_url - The base web address to the current REDCap project (URL of its Project Home page). i.e., <a href="https://redcap.vanderbilt.ecu/redcap.v11.3.0/index.php?pid=XXXX">https://redcap.vanderbilt.ecu/redcap.vXX.X.X/index.php?pid=XXXX</a> </li></ul><p>NOTE: If the names of your records (i.e. the values of your first field) are considered identifiers (e.g. SSN, MRN, name), for security reasons, it is highly recommended that you use an encrypted connection (i.e. SSL/HTTPS) for the URL you provide for the Data Entry Trigger.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_36_question_4_tab_7">Where do I set up a Data Entry Trigger (DET) in my project?</a>
                            </h4>
                        </div>
                        <div id="category_36_question_4_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>To set up a Data Entry Trigger, go to the Project Setup Pages. In the "Enable optional modules and customizations" box, click the "Additional Customizations" button and scroll down towards the bottom. It is label "Data Entry Trigger."</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_36_question_5_tab_7">What are the situations that trigger DET (Data Entry Trigger), ASI (Automated Survey Invitations) and server side calculations?</a>
                            </h4>
                        </div>
                        <div id="category_36_question_5_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>The situations that trigger DET, ASI and server side calculations are shown below in table format:</p><table><tbody><tr><td><strong>Functionality</strong></td><td><strong>Triggered by conditions listed below</strong></td></tr><tr><td>DET</td><td>Form Save</td></tr><tr><td><br></td><td>Survey Submit (next page, prev page, missing required fields, and complete)</td></tr><tr><td><br></td><td>Essentially any time a save button is clicked on a survey or form</td></tr><tr><td>ASI</td><td>Form Save</td></tr><tr><td><br></td><td>Survey Submit (next page, prev page, Missing required fields, and complete)</td></tr><tr><td><br></td><td>API Import (records import and file import)</td></tr><tr><td><br></td><td>Data Import Tool</td></tr><tr><td><br></td><td>12-hour cron job (But only for ASIs that have datediff() with "today" in their conditional logic)</td></tr><tr><td><br></td><td>Plugin/hook calling REDCap::saveData()</td></tr><tr><td><br></td><td>Re-evaluate Auto Invitations button on Online Designer</td></tr><tr><td>Server side calculation</td><td>Form save--only if calculated field that is triggered exists on another instrument or event</td></tr><tr><td><br></td><td>Survey submit (next page, prev page, missing required fields, and complete--only if calculated field that is triggered exists on another instrument or event</td></tr><tr><td><br></td><td>API Import (records import and file import)</td></tr><tr><td><br></td><td>Data Import Tool</td></tr><tr><td><br></td><td>Plugin/hook calling REDCap::saveData()</td></tr><tr><td><br></td><td>Data Quality Rule H</td></tr></tbody></table></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Mobile App for iOS and Android</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_1_tab_7">What is the REDCap Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_1_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	The REDCap Mobile App is an app that is installed on a tablet or mobile device so that data can be collected offline on that device. Data collected offline is later synced (i.e. uploaded) back to an online REDCap project. </p> <p> 	Once a user is given 'REDCap Mobile App' privileges in a project, they can navigate to the Mobile App page on the left-hand menu and set up the project inside the app on their device. Once the project is set up on the device, the user can collect data (which is stored locally on the device). Users can later sync (i.e. upload) that data back to their project when they have a reliable internet connection. </p> <p> 	The app is therefore most useful when data collection will be performed where there is unreliable or no internet service (e.g., no WiFi or cellular service). </p> <p> 	<strong>Additional Documentation:</strong> </p> <ul><li>Download iOS app: <a href="https://itunes.apple.com/us/app/redcap-mobile-app/id972760478">https://itunes.apple.com/us/app/redcap-mobile-app/id972760478</a></li><li>Download Android app: <a href="https://play.google.com/store/apps/details?id=edu.vanderbilt.redcap">https://play.google.com/store/apps/details?id=edu.vanderbilt.redcap</a></li><li>About the REDCap Mobile App (PDF): <a href="https://projectredcap.org/wp-content/resources/about.pdf">https://projectredcap.org/wp-content/resources/about.pdf</a></li><li>Security in the REDCap Mobile App (PDF): <a href="https://projectredcap.org/wp-content/resources/security.pdf">https://projectredcap.org/wp-content/resources/security.pdf</a></li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_2_tab_7">Is there a good place to start learning about the mobile app?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_2_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	Yes, there are several great places to learn. </p> <ol><li>The about section in the app itself. <a href="https://projectredcap.org/wp-content/resources/about.pdf">https://projectredcap.org/wp-content/resources/about.pdf</a></li><li>The FAQ in the app itself.  	</li><li>The documentation which is stored somewhere in this AnswerHub. (Search for Mobile App documentation.) These are from partners in the consortium to help each other.</li><li>Trial and error. I find software is best learned, at least at the initial stages, by trying it out. Download a project onto the app and see what it does!</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_3_tab_7">How can I access the Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_3_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Before users can use the mobile app for a project, they must first be given "Mobile App" User Right. This module must be enabled system-wide for your REDCap instance.  If you do not have access to the module in the "User Rights" module, contact your local REDCap Administrator. Once you have rights you'll be able to see the "REDCap Mobile App" link on the project's left-hand menu and then be able to access that page, which will provide links to download the Android and iOS app and instructions for initializing that project in the app on their mobile device. Note: When a user creates a new project, they will automatically be given "Mobile App" privileges by default.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_4_tab_7">What is the best design practice for the REDCap Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_4_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>There are several factors to consider when designing a project which  will use the REDCap Mobile App, including but not limited to: </p><ul><li>Who will install and initialize the REDCap App on the mobile devices</li><li>Who will initialize the user account(s) and create and manage user tokens for the accounts</li><li>Will each device be tied to a single user or will multiple users access a given device.</li><li>What data (if any) can be downloaded to the device.</li><li>Who is responsible for ensuring that the project metadata is kept up to date on the device</li><li>Who is responsible for ensuring that project data is uploaded (downloaded) at appropriate intervals</li><li>What PIN management techniques will be specified and used.</li></ul></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_5_tab_7">What security documentation is available for the Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_5_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	<a href="https://projectredcap.org/wp-content/resources/security.pdf">https://projectredcap.org/wp-content/resources/security.pdf</a> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_6_tab_7">How does data sync between the app and the REDCap server?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_6_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	When the user has collected some data in the app and wishes to send the data back to the server, they will go to the "Send data to server" page in the app. </p> <p> 	First, the metadata/data dictionary is checked for any  project changes (e.g., deleted field names, modified labels, multiple choice options, etc.) </p> <ul><li>If there are major changes, the user will be prompted that the upload will not proceed. </li><li>If there are no changes or minor changes, the process will proceed.</li></ul> <p> 	Next, records are sent, one at a time. </p> <ul><li>For new records:</li></ul> <p style="margin-left: 20px;"> 	If new record id's are needed, they are assigned values for auto-numbered projects. </p> <ul><li>For existing records:</li></ul> <p style="margin-left: 20px;"> 	Modifications to existing records are adjudicated, one record at a time. They can be reassigned to a new record id or merged with an existing record. </p> <p style="margin-left: 20px;"> 	There are three categories: overlooked values (values on the device are the same), device-only modifications (in yellow), and device-and-server-modified values (in pink/red). The user is allowed to inspect them at the record- and field-level, and then send to the server after review. </p> <p style="margin-left: 20px;"> 	For instance, if the project uses record auto-numbering, and a record already exists on the server with the same record name, then it will let the user know that it will rename the record accordingly during the sync process in order to prevent any overwriting of the record already on the server. </p> <p style="margin-left: 20px;"> </p> <p> 	If there are any possible issues that might arise when sending the data  to the server, the app will prompt the user to make a decision before sending the data. There are many different scenarios that can occur in which a user might be prompted to make a decision, and the app is fully capable of providing the user with just the right amount of guidance so that they feel confident sending their data to the server with no issues. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_7_tab_7">What devices are supported in the REDCap Mobile App? How do I get it?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_7_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Apple (iOS), Android, and (probably) coming soon, the Kindle Fire.<br><br>It is available via the Apple App Store, the Google Play store, and possibly a custom REDCap store.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_8_tab_7">Where can I find REDCap Mobile App's Release Notes for new versions?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_8_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	You can find the release notes at: <a href="https://projectredcap.org/wp-content/resources/change-log.txt">https://projectredcap.org/wp-content/resources/change-log.txt</a> </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_9_tab_7">What do I do if I'm having trouble with the Mobile App?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_9_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><ol><li>Login as your usual app user, except add a 00 to the end of your PIN. This will make the 6-digit PIN 8 digits long.</li><li>Go to the page that has the error. Reproduce the error.</li><li>Tap "Send Diagnostic Info" at the bottom of the screen. This will send an email to the redcap app folks.</li><li>Send a plain-text, narrative description of your error to <a href="mailto:redcapapp@vumc.org">redcapapp@vumc.org</a>. You can use the Report a Bug feature on the main menu to do this via the app, or you can use normal email if you want as well.</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_10_tab_7"> Can this app be used to collect data directly from participants?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_10_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The Mobile App is for REDCap users to access an offline version of their projects and enter data in areas of low/no internet connection. A REDCap login is required to use the app.  The app therefore cannot be downloaded by participants, to their own personal devices.However, REDCap users can secure instruments on their own devices and let a participant use it temporarily, for direct data collection. In this way, participants only have the option to enter data to that instrument (and not use the rest of the app).</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_11_tab_7">Why can't I create new projects on the app?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_11_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>New project creation is not possible in the REDCap Mobile App itself. The app's purpose is to collect data offline that will later be added to an existing project on the "online" web based REDCap application. The project's data collection instruments must be created and managed within the "online" instance.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_12_tab_7"> Can we share one device and have multiple users access the app?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_12_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Yes, you can add multiple users to the app installed on a single device in the Add &amp; Manage Users section. Each user will have a unique PIN for access.  However, each app user maintains unique project copies on the device (not shared). An app user will collect data separately from anyone else even if on same device, same project. Data is consolidated when it is synced to the online server.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_13_tab_7">What is the remote lockout feature?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_13_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>Remote lockout: If a user sets up a REDCap project on the mobile app, and then another user revokes their "REDCap Mobile App" user privileges on the User Rights page in that project, then it will prevent them from accessing it on their mobile device by locking them out of that particular project. In this way, you may perform "remote lockout" to further protect data stored on mobile devices. Additionally, a user can revoke/delete their API token for the project, which will also cause a remote lockout, although the lockout will be permanent and will cause all data currently stored in the app to be lost.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_14_tab_7">What is the User Right: "Allow user to download data for all records to the app?" ?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_14_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>There is an additional user privilege "Allow user to download data for all records to the app?" that specifically governs whether or not the user is allowed to download records from the server to the app. This may be done to prevent users from unwittingly (or wittingly) downloading lots of sensitive data to their mobile device. If a user is given this privilege, then when they initialize the project in the app and the project contains at least one record, then the app will prompt the user to choose if they wish to download all the records to the app or not.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_15_tab_7">What should I do if I can't find anywhere nearby in my rural setting to sync the mobile app?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_15_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>1. Get online.</p><p>2. Contact <a href="http://opensignal.com/">http://opensignal.com/</a></p><p>3. Download their app.</p><p>4. Next time you struggle, check out the maps in their app.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_16_tab_7">Can I use the randomization module with the mobile app?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_16_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p> 	The Mobile App does not support the Randomization Module and will not display the "randomize" button on a project instrument. The Mobile App is used for "offline" data collection, so it cannot assume access to REDCap's 'online' server where the project's randomization table is stored and accessed in real-time to make assignments. </p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_37_question_17_tab_7">How should a mobile app user report a bug?</a>
                            </h4>
                        </div>
                        <div id="category_37_question_17_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><ol><li>Go to the main menu on the app.</li><li>Tap Report a Bug.</li><li>Fill out the Bug Report.</li><li>Await a response within 1-2 business days.</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Randomization Module</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_1_tab_7">How to Randomize for a Longitudinal, Double Blind Randomized Clinical Trial in REDCap?</a>
                            </h4>
                        </div>
                        <div id="category_38_question_1_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p><strong>Blinded randomised clinical trials (RCT) are tricky to setup. A lot of settings will be influenced by the unique situation of each trial and its protocol.</strong></p><p><strong>In general, there are two common ways of running a blinded RCT:</strong></p><ul><li><strong>Create a randomisation variable with a large amount of options. Include enough options to cover the total number of participants.<br> Have a corresponding list of those options with their respective options outside of REDCap and provide that list to the non-blinded members of your study team (like a pharmacist for instance). <br> Turn on the randomization feature and designate the variable you previously created as the main randomization variable. Make sure to follow the instructions in the randomization page. <br> Please be aware that this option only works if your REDCap installation has turned on the randomization feature.</strong></li><li><strong>Track randomization outside of REDCap. This is the easiest way to do randomization in most cases and is most suited for installations where the randomization feature has been turned off.</strong></li></ul><p><strong>Setting up any randomized trial (blinded or otherwise) properly is hard to do. Please contact your local REDCap administrator for help and consider partnering with a bio-statistician to make sure you cover all your bases.</strong></p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_2_tab_7">Is it possible to allow the randomization field to display on a form utilized in both (multiple) arms of a longitudinal project? It appears as though you can only choose 1 arm for which the randomization field displays.</a>
                            </h4>
                        </div>
                        <div id="category_38_question_2_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>It is designed so that the randomization field is enabled for randomization on *only* one event for a record (that includes all arms).  A work around (depending on your project's use case) could be:</p><p>Create one "arm" that is for pre-randomization.  The arm could include the eligibility, demographics forms, etc. up to the form on which the participant should be randomized.  After randomization, the participant can be added into one of the actual study arms.</p><p>You can add a record to multiple arms, but you can only schedule events in one arm.  This design may be a limitation if you are using the scheduling module.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_3_tab_7">Can calculated fields be used with the randomization module?</a>
                            </h4>
                        </div>
                        <div id="category_38_question_3_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>The short answer: No, calculated fields can not be used to stratify randomization. REDCap requires one or more multiple choice fields (drop downs &amp; radio buttons, yes/no &amp; true/false questions) for stratification.</p><p>However, a work-around would be to have a relevant multiple choice field underneath a calculated field and then manually fill out that field based on the value in the calculated field. You could then use the multiple choice field to stratify your randomization.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_4_tab_7">If a randomized record is deleted, does the randomization module know to "re-use" the cell of the allocation table that had been used for that deleted record, or is that cell gone forever?</a>
                            </h4>
                        </div>
                        <div id="category_38_question_4_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>If a randomized record is deleted (regardless of whether it was the first, last, or some other record to be randomized), then its allocation will be freed up and available for another record in the future.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_5_tab_7">Can I change the randomization strata when a project is in production?</a>
                            </h4>
                        </div>
                        <div id="category_38_question_5_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Once your project is in production status, the allocation tables will become locked and unmodifiable.  They can be appended by a superuser but this will only add additional rows to the allocation table.  It will not change any of the rows already in the table.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_38_question_6_tab_7">Does REDCap support dynamic randomization in the randomization module?</a>
                            </h4>
                        </div>
                        <div id="category_38_question_6_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>REDCap does not support dynamic randomisation (e.g. a minimisation algorithm) only the selection of the next entry from an externally generated randomisation schedule (stratified, permuted blocks).</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="faqHeader">Shared Library</div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_1_tab_7">Before I add my instrument to the library, do you have suggestions for good formatting/good practices?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_1_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix">  <p>First, your instrument will need to be in production before you can add it to the library. If you have the opportunity to adjust formatting, however, you may check it using the criteria used for development of the majority of instruments in the library. It is not required, but is considered good practice by our REDLOC committee - <a rel="noopener noreferrer" href="https://redcap.vanderbilt.edu/consortium/resources/docs/redcap_library_coding_guidelines.pdf" target="_blank">https://redcap.vanderbilt.edu/consortium/resources/docs/redcap_library_coding_guidelines.pdf</a>. Again, these are guidelines and are not a requirement. Minimally, instruments should not have grammatical or spelling errors and definitely NO PHI! Be careful with contact information and other institution specific information that is probably not useful and may cause confusion for the entire consortium of users around the globe. If you only want to share instruments with your institution, make sure you indicate that option when you are submitting your instrument for limited review. Also, think about whether or not another user, or even yourself, will find the instrument useful. Instruments with only a couple of questions are likely not worth sharing through the library. It will be more useful to you or your team as a zip file stored in your own personal or shared team folder.</p> </div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_2_tab_7">I would like to test adding an instrument from the library to my project.  Is there an instrument designed for testing?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_2_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Yes!  The first instrument listed in the library called the ‘Nacho Craving Index Survey’ is perfect for testing and demonstrating functionality.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_3_tab_7"> Once uploaded, is an instrument immediately available for download either for the consortium or the institution depending on the sharing selection or is it reviewed by REDLOC before being available?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_3_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>An initial review is done and a confirmation obtained from the submitter that they do want to share the instrument in the library.  A REDCap Administrator then approves the submission prior to its being added to the library.  The instrument is taken to REDLOC for review only if there are issues that the committee needs to discuss.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_4_tab_7">How are updates to the instruments that have been shared handled?  Is there any versioning?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_4_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>New versions will not replace old versions, but if more than one version is submitted it will be annotated.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_5_tab_7">I would like to add my own instrument to the library.  I don’t see any buttons or tabs to help with that process. How is that done?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_5_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>You can definitely add your own instruments to the library.  It is required, however, that the instruments exist in a production project since that will reduce the number of revisions that potentially would be made in a development project.  If you do not see a ‘Share instrument in the Library’ button on an existing record’s data entry form or on the Online Designer page, you are still in development mode and should move to production mode first. If you do see the ‘Share an instrument in the Library’ button, you must sign the sharing agreement and provide some general reference information.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_6_tab_7">I want to share my own instrument, but I only want people to download it who have contacted me for permission first.  How can you assure that this permission has been obtained before the user adds it to their project?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_6_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>We cannot administratively support this type of requirement.  You may certainly request that users contact you for permission, but if it is truly required, we will have to reject its inclusion in the collection.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_7_tab_7">I would like to have a PDF copy of an instrument in the library.  Is that possible?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_7_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>It is possible to obtain a PDF copy of any static instrument in the library.  However, because we are sharing a copy of the instrument, you must sign the user agreement first.  The steps are similar to adding an instrument to your project.</p><p>1.     Go to the Online Designer.</p><p>2.     Choose ‘Import a new instrument from the official REDCap Shared Library’.</p><p>3.     Do a Keyword search for the subject or instrument title.</p><p>4.     Choose Import into my REDCap project.</p><p>5.     Read and agree to the license agreement.</p><p>6.     Click ‘View as PDF’.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_8_tab_7">I am the author of a validated, published instrument. Can I add it to the library? </a>
                            </h4>
                        </div>
                        <div id="category_39_question_8_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix">  <p>Yes, but you will need to request that it go through the curation process (top down) <a href="https://redcap.vanderbilt.edu/surveys/?s=9MHM3RDYN7">request survey</a> (<a rel="noopener noreferrer" href="https://redcap.vanderbilt.edu/surveys/?s=9MHM3RDYN7" target="_blank">https://redcap.vanderbilt.edu/surveys/?s=9MHM3RDYN7</a>) rather than the locally shared process (bottom up).</p> </div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_9_tab_7">I already have a validated instrument created in REDCap format.  Can’t I just upload that into the library? </a>
                            </h4>
                        </div>
                        <div id="category_39_question_9_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Users can share their own unpublished instruments but cannot add instruments into the library for which they are not the copyright holders.  Users can share their data dictionaries of validated instruments with the REDCap Library Oversight Committee to help with the development process.  However, the committee must investigate first to make sure that the copyright holders approve our sharing the recommended instruments through the library tool.  Some copyright holders will approve usage for individual researchers on a case by case basis or through distribution on their own designated websites but will not give us permission to share through the library.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_10_tab_7">The author of the instrument that I am using for my project gave me permission to do so. Can’t you just go ahead and add it into the library now?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_10_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Authors and other copyright holders who allow individual researchers to use their instruments may not allow us to distribute instruments through the library.  This may be due to licensing or fee requirements or because they simply want to track all usage in detail through their own websites. The only stats that we can provide are: number of downloads, use in production projects, and institution names that have downloaded. We do not have specific details on usage.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_11_tab_7">I have an instrument that I have permission to use because I have paid a licensing fee and/or signed a license agreement.  Can you add this instrument to the library for me?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_11_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Generally speaking, we cannot add instruments that require special license agreements or fees.  You should plan to develop this instrument on your own if permitted by the copyright holder.  Always ask the copyright holder for permission to do so if you are unsure since the change to REDCap format may affect validity.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_12_tab_7">Can I submit my own questions to the REDCap Library?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_12_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>Yes, you can. </p><p>1. Make sure the project is in Production </p><p>2. Click on the instrument you want to share in any record </p><p>3. Look for the "Share Instrument in the Library" button at the top of the screen </p><p>4. Read the ENTIRE yellow text to make sure you understand what sharing your instrument in the library means </p><p>5. Read and accept the Shared Content Agreement </p><p>6. Complete the required fields. Provide a detailed enough description that someone completely unfamiliar with it would understand its purpose </p><p style="margin-left: 20px;">6a. Information added to the 'Acknowledgement' section appears at the bottom of the instrument any time it is added to a project. This may or may not be desirable</p><p style="margin-left: 20px;"> 6b. Terms of use for locally shared submissions are not encouraged. You may add them, but please understand that we have no way of enforcing any required actions </p><p>7. Choose the instrument's language and fill in your contact information </p><p>8. Choose if you want to share your instrument only within your organization or if you want to share it with any institution in the Consortium </p><p>9. An initial review will be done on your instrument and confirmation may or may not be required. A library administrator will either approve the submission or provide a reason for rejection</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_13_tab_7">I submitted a request for an instrument last week.  When will it be ready?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_13_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>With an enormous amount of requests and a small volunteer group and support staff to develop instruments, development time may take several months up to a year to be developed.  If you have a request that you feel is critical for sharing with the consortium, please email <a href="mailto:redcap@vumc.org">redcap@vumc.org</a> concerning the request. Otherwise, you should feel free to work with the copyright holder about permissions for developing the instrument for your project yourself.  You may then actually share the data dictionary and information with the committee for adding to potentially save steps for the library committee if they find that they instrument can be included.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_14_tab_7">If one of our users uploads an instrument and accidentally shares it with the consortium, instead of just their institution, how can the instrument be updated to only be shared within the institution?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_14_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div>The submitter can choose Share the instrument again and will be given an option to delete the instrument or resubmit.  The submitter can then resubmit/share again and choose the correct option.</div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_15_tab_7">I would like to add an instrument to my REDCap project.   How do I do that?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_15_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>1.  Go to the Online Designer.</p><p>2.  Choose ‘Import a new instrument from the official REDCap Shared Library’.</p><p>3.  Do a Keyword search for the subject or instrument title.</p><p>4.  Choose Import into my REDCap project.</p><p>5.  Read and agree to the license agreement.</p><p>6.  Click Add the imported instrument with the name “Instrument”.</p><p>7.  Choose Return to previous page and the instrument will be at the bottom of your instrument list.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_16_tab_7">How do I add an instrument from the Shared Library into my project?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_16_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><ol><li>Go to the Online Designer. </li><li>Choose Import a new instrument from the official REDCap Shared Library. </li><li>Do a Keyword search for the subject or instrument title. </li><li>Choose Import into my REDCap project. </li><li>Read and agree to the license agreement. </li><li> Click Add the imported instrument with the name "Instrument". </li><li>Choose Return to previous page and the instrument will be at the bottom of your instrument list.</li></ol></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_17_tab_7">I am copying a project which contains an instrument imported from the library.  Is it okay to copy the project and consequently the instrument?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_17_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>If you are copying a project that contains library instruments, after creating the new project, please delete any library instruments and then re-import them into the new project to make sure that you are 1) agreeing to the most current requirements and 2) to make sure that the functionality for adaptive/auto-scoring/battery type instruments works properly.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_18_tab_7">I only want a few questions from an instrument that I downloaded and want to remove the citation at the bottom of the instrument.  How do I do that?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_18_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>You cannot remove a citation.  We highly recommend that you investigate the permission agreements offered by copyright holders.  If you have approval to make changes, you can develop the modified version on your own.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_19_tab_7">There are different types of instruments in the library.  I can see some instruments when I am not logged into REDCap and some instruments only when I am logged into REDCap.  Can you please explain the differences?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_19_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>There are 3 types of instruments available through the Shared Library.  Two types are curated (a.k.a. ‘top down’) meaning they are recommended by end users and put through a review and development process by our REDCap Library Oversight Committee.  Criteria for these instruments include evaluation of: </p><ul><li>Terms of use (Are instruments in the public domain? Are they free to researchers? Are there copyright issues, fees or license agreements required?)</li><li>Demand for instrument (Is it cited frequently and highly used? Are their related domains in the library?)</li><li>Size and format of instrument (Higher priority is sometimes given to smaller instruments that are easily adaptable in REDCap format.)</li><li>Evidence of validation (Instruments will be rejected as part of the normal committee review process without evidence of validation. If you want to discuss a particular instrument’s validity with the committee, please email <a href="mailto:redcap@vumc.org">redcap@vumc.org</a>.)</li></ul><p>Instruments are recommended by completing a <a href="https://redcap.vanderbilt.edu/surveys/?s=9MHM3RDYN7">survey</a>. Instruments that are accepted, approved and developed by REDLOC, meeting all criteria, reflect a red star icon. The exception is HealthMeasures instruments which are developed by their team. A limited number of instruments with limited information on validation, but that otherwise demonstrate usability and consistency, may be added by the committee noted with a yellow star icon.  </p><p>Locally created, non-published instruments (a.k.a. ‘Bottom up) do not show in the public collection with curated instruments, but do show when logging into REDCap.  Instruments that are listed but indicate that you do not have access to them have been restricted by the author to only share with their own institutions. Authors share these instruments because they want to easily download for reuse themselves, or they hope the instruments will be useful to others.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_20_tab_7">I went to the library page and located the name of the instrument that I want to use, but it says in the note beside it that I must log in from REDCap to view the instrument or download it as a PDF.  Why is that? </a>
                            </h4>
                        </div>
                        <div id="category_39_question_20_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Before adding an instrument into the library, all permissions are cleared with the copyright holder.  Some copyright holders allow us to share their instruments with REDCap users because they understand that they will be used for research.  They sometimes have additional terms that must be signed by users as well.  This can only be done within REDCap.  If you want a copy of the instrument that is not in REDCap format, please look for it on other websites or contact the copyright holder/author.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_21_tab_7">I see some unusual variable/field names in the library instrument that I imported into my project (e.g. gender_12h%jk).  Why doesn’t it just say gender, for example?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_21_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>Unless you download the instrument multiple times, you will probably not see something like this from the curated instruments because the committee includes the instrument name as part of the naming convention, thus creating unique variable names.  For some curated instruments the normal format isn’t followed because of copyright holder requirements.  Most non-curated instruments shared by end users are formatted in a way that is best for their particular projects unless they purposely followed REDLOC guidelines.  Since REDCap variables must be unique, rather than REDCap removing what it sees as a duplicate variable name when importing the instrument, it adds a tag in a similar manner that it does when copying a field in the Online Designer. After adding a library instrument to your project, it is always good practice to check the codebook or data dictionary for similar fields that you might not want to duplicate.</p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_22_tab_7">When I attempt to download forms from the REDCap shared library I get the following error message. What is the problem?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_22_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><p>ERROR: Could not find XML document. </p><p>This likely occurred from an error communicating with the REDCap Shared Library server at  <a href="https://redcap.vanderbilt.edu/consortium/library/">https://redcap.vanderbilt.edu/consortium/library/</a></p><p>The import of the instrument from the REDCap Shared Library did not complete successfully.</p><p>Some institutions are not allowed to utilize the library, or there may be a connection issue.  Check with your REDCap Administrator and IT staff to verify that the connection between your REDCap server and the Vanderbilt server is working.  It could be purposely or accidently blocked by a firewall or problems with proxy settings in the REDCap Control Panel.</p></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_23_tab_7">When I look at the data dictionary for PROMIS and other adaptive, battery and auto-scored instruments, the coding looks incorrect because some answer choices have the same code value.  Why are the coding rules different here?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_23_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix">  <p>PROMIS, Neuro-QOL, TBI and other instruments developed by the HealthMeasures team are unique in nature in that they work with an API service to generate questions and scores. They are created, tested and verified by their team, not the REDCap Shared Library Committee, for accuracy and proper functionality. If you notice in the data dictionary that the same code is used for multiple similar responses, it is normal. If you find there is an issue in functionality, please do let us know (<a href="mailto:redcap@vumc.org">redcap@vumc.org</a>).</p> </div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div><div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#category_39_question_24_tab_7">I am using a PROMIS, NIH Toolbox, Neuro-QOL, or other HealthMeasures tool that I was able to locate on their website, but I can’t find it in REDCap.  Where is it?</a>
                            </h4>
                        </div>
                        <div id="category_39_question_24_tab_7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div><div class="fr-view clearfix"><p>We receive software updates twice per year from the HealthMeasures team.  This tends to happen in late spring or early summer and in late fall or early winter.  We cannot update the collection more often, however, the HealthMeasures team does take recommendations from our users about what to prioritize for the next scheduled update.  Use the same survey link on the library page called ‘<a href="https://redcap.vanderbilt.edu/surveys/?s=9MHM3RDYN7">Suggest a validated instrument for inclusion in the library</a>’ and we will pass along the request to the HealthMeasures team. </p></div></div><br><div class="help_embedcode"></div></div>
                        </div>
                    </div></div></div></div>    </div>
</div>

<div class="container em-faqbuilder-tab-hidden-desktop" style="padding-bottom:30px;padding-top:20px;">
    <a href="https://redcap.vanderbilt.edu/external_modules/?prefix=faq-menu&amp;page=download_PDF&amp;pid=125508&amp;NOAUTH" class="btn btn-default saveAndContinue" style="width: 100%;"><span class="fa fa-arrow-down"></span> PDF</a>
</div>