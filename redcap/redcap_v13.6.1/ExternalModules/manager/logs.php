<?php namespace ExternalModules;

require_once __DIR__ . '/../redcap_connect.php';

$pid = ExternalModules::getProjectId();
if(empty($pid)){
    $headerAndFooterType = 'ControlCenter';
}
else{
    $headerAndFooterType = 'ProjectGeneral';
    ExternalModules::requireDesignRights();
}

require_once APP_PATH_DOCROOT . $headerAndFooterType . '/header.php';

?>

<div id='external-module-logs-wrapper'>

<style>
    #pagecontainer /* control center only */ {
        max-width: 1500px;
    }

    #external-module-logs-wrapper {
        max-width: 1000px;
    }

    #external-module-logs-wrapper > h4{
        margin-bottom: 10px;
    }

    #external-module-logs-wrapper > input{
        width: 130px;
    }

    #external-module-logs-wrapper > input,
    #external-module-logs-wrapper > select,
    #external-module-logs-wrapper .select2-selection{
        border: 1px solid #aaa !important;
        border-radius: 3px;
    }

    #external-module-logs-wrapper label{
        min-width: 150px;
    }

    #external-module-logs-wrapper .dataTables_wrapper{
        margin-top: 20px;
    }

    #external-module-logs-wrapper .dataTables_wrapper .paginate_input{
        max-width: 60px;
    }
</style>

<h4><?=ExternalModules::tt('em_manage_113')?></h4>
<p><?=ExternalModules::tt('em_manage_115')?></p>
<br>

<?php

$start = $end = date('Y-m-d');

?>

<label><?=ExternalModules::tt('em_manage_122')?></label><input class='start' type='date' value='<?=$start?>'><br>
<label><?=ExternalModules::tt('em_manage_123')?></label><input class='end' type='date' value='<?=$end?>'><br>
<label><?=ExternalModules::tt('em_manage_124')?></label><input class='messageLengthLimit' type='number' value='200'><br>

<label style='margin-right: -3px'><?=ExternalModules::tt('em_manage_125')?></label>
<select class='modules' style='width: 350px;' multiple="multiple">
    <?php
    foreach(array_keys(ExternalModules::getEnabledModules()) as $prefix){
        echo "<option>$prefix</option>\n";
    }
    ?>
</select>

<table style='width: 100%'></table>

<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.11.3/pagination/input.js"></script>
<script>
    $(() => {
        const wrapper = $('#external-module-logs-wrapper')

        const getInput = inputClass => {
            let element
            if(inputClass === 'modules'){
                element = 'select'
            }
            else{
                element = 'input'
            }

            return wrapper.find(element + '.' + inputClass)
        }
        
        const inputs = ['start', 'end', 'messageLengthLimit']
        inputs.forEach(inputClass => getInput(inputClass).change(
            () => table.ajax.reload())
        )

        inputs.push('modules')
        let unselecting = false
        getInput('modules').select2()
            .on('select2:select', e => table.ajax.reload())
            .on('select2:unselect', e => {
                unselecting = true
                table.ajax.reload()
            })
            .on('select2:opening', e => {
                if(unselecting){
                    unselecting = false
                    e.preventDefault()
                }
            })

        const table = wrapper.find('table').DataTable( {
            order: [[ 0, 'dec' ]],
            deferRender: true,
            pagingType: "input",
            ajax: {
                url: 'ajax/get-logs.php',
                data: data => {
                    data.pid = <?=json_encode($pid)?>;
                    inputs.forEach(
                        inputClass => data[inputClass] = getInput(inputClass).val()
                    )
                }
            },
            columns: [
                {
                    data: 'log_id',
                    visible: false // this column is only used for sorting
                },
                {
                    data: 'timestamp',
                    title: '<?=ExternalModules::tt('em_manage_126')?>',
                    width: '125px',
                },
                {
                    data: 'directory_prefix',
                    title: '<?=ExternalModules::tt('em_manage_127')?>',
                    width: '125px',
                },
                {
                    data: 'project_id',
                    title: '<?=ExternalModules::tt('em_manage_128')?>',
                    width: '50px',
                    visible: <?=json_encode(empty($pid))?>,
                    className: 'dt-body-right',
                    render: (data, type, row, meta) => {
                        if(data){
                            var url = <?=json_encode(APP_PATH_WEBROOT_PARENT . 'redcap_v' . REDCAP_VERSION . '/index.php?pid=')?> + data
                            return "<a href='" + url + "' style='text-decoration: underline'>" + data + "</a>"
                        }
                        else{
                            return ''
                        }
                    }
                },
                {
                    data: 'message',
                    title: '<?=ExternalModules::tt('em_manage_129')?>',
                    render: (data, type, row, meta) => {
                        if(data.length == getInput('messageLengthLimit').val()){
                            data += '...'
                        }
                        
                        return data
                    }
                }
            ]
        }).on('processing.dt', (e, settings, processing) => {
            if(processing){
                showProgress(true)
            }
            else{
                showProgress(false)
            }
        })
    })
</script>

</div>

<?php

require_once APP_PATH_DOCROOT . $headerAndFooterType . '/footer.php';