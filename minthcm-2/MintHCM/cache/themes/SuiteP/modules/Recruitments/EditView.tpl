

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" id="module" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="record" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" id="record" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->

{if empty($smarty.request.minthcm_popup)}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Recruitments'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Recruitments", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
{/if}

</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='Recruitments'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}start_date{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_START_DATE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_START_DATE' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="start_date"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.start_date.value }
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="{$fields.start_date.name}" id="{$fields.start_date.name}" value="{$date_value}" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#{$fields.start_date.name}' ) );"
>
<button type="button" id="{$fields.start_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({ldelim}
           inputField: "{$fields.start_date.name}",
           form: "EditView",
           ifFormat: "{$CALENDAR_FORMAT}",
           daFormat: "{$CALENDAR_FORMAT}",
           button: "{$fields.start_date.name}_trigger",
           singleClick: true,
           dateStr: "{$date_value}",
           startWeekday: {$CALENDAR_FDOW|default:'0'},
           step: 1,
           weekNumbers: false
    {rdelim}
        );
</script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}end_date{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_END_DATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_END_DATE' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="end_date"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.end_date.value }
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="{$fields.end_date.name}" id="{$fields.end_date.name}" value="{$date_value}" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#{$fields.end_date.name}' ) );"
>
<button type="button" id="{$fields.end_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({ldelim}
           inputField: "{$fields.end_date.name}",
           form: "EditView",
           ifFormat: "{$CALENDAR_FORMAT}",
           daFormat: "{$CALENDAR_FORMAT}",
           button: "{$fields.end_date.name}_trigger",
           singleClick: true,
           dateStr: "{$date_value}",
           startWeekday: {$CALENDAR_FDOW|default:'0'},
           step: 1,
           weekNumbers: false
    {rdelim}
        );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}project_status{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROJECT_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROJECT_STATUS' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="project_status"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.project_status.name}" 
id="{$fields.project_status.name}" 
title=''               
>
{if isset($fields.project_status.value) && $fields.project_status.value != ''}
{html_options options=$fields.project_status.options selected=$fields.project_status.value}
{else}
{html_options options=$fields.project_status.options selected=$fields.project_status.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.project_status.options }
{capture name="field_val"}{$fields.project_status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.project_status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.project_status.name}" 
id="{$fields.project_status.name}" 
title=''                      
>
{if isset($fields.project_status.value) && $fields.project_status.value != ''}
{html_options options=$fields.project_status.options selected=$fields.project_status.value}
{else}
{html_options options=$fields.project_status.options selected=$fields.project_status.default}
{/if}
</select>
<input
id="{$fields.project_status.name}-input"
name="{$fields.project_status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.project_status.name}-image"></button><button type="button"
id="btn-clear-{$fields.project_status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.project_status.name}-input', '{$fields.project_status.name}'); sync_{$fields.project_status.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.project_status.name}{literal}");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:''};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use('datasource', 'datasource-jsonschema', function (Y) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == '' && selectElem.options[i].innerHTML == ''))
                            ret.push({'key':selectElem.options[i].value, 'text':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                {/literal}
                
                {literal}
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.project_status.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.project_status.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.project_status.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.project_status.name}{literal}");
                    var doSimulateChange = false;
                    if (selectElem.value != selectme)
                            doSimulateChange = true;
                    selectElem.value = selectme;
                    for (i = 0; i < selectElem.options.length; i++){
                    selectElem.options[i].selected = false;
                    if (selectElem.options[i].value == selectme)
                            selectElem.options[i].selected = true;
                    }

                    if (doSimulateChange)
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
                    }

                    //global variable 
                    sync_{/literal}{$fields.project_status.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.project_status.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.project_status.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.project_status.name}{literal}", syncFromHiddenToWidget);
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
                    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
                    if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
                {/literal}
                    SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
                    {literal}
                        }
                    {/literal}
                        if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
                    {/literal}
                        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
                        {literal}
                            }
                        {/literal}
                        
                            SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
                        {literal}
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        {/literal}
                                    minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
                                    queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
                                    zIndex: 99999,
                        
                        {literal}
                            source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
                                    resultTextLocator: 'text',
                                    resultHighlighter: 'phraseMatch',
                                    resultFilters: 'phraseMatch',
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
                            if (hover[0] != null){
                            if (ex) {
                            var h = '1000px';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = '';
                            }
                            }
                            }

                            if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
                            var selectElem = document.getElementById("{/literal}{$fields.project_status.name}{literal}");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                            if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}position_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="position_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.position_name.name}{/capture}
<input type="text" name="{$fields.position_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.position_name.name}" size="" value="{$fields.position_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.position_name.id_name}" 
id="{$fields.position_name.id_name}" 
value="{$fields.position_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.position_name.name}" id="btn_{$fields.position_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.position_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"position_id","name":"position_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.position_name.name}" id="btn_clr_{$fields.position_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.position_name.name}', '{$fields.position_name.id_name}' ); $( '#{$fields.position_name.name},#{$fields.position_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.position_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}currency_id{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_CURRENCY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="id" field="currency_id" colspan='3' >
{counter name="panelFieldCount" print=false}
<span id='currency_id_span'>
{$fields.currency_id.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}salary_from{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SALARY_FROM">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALARY_FROM' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="salary_from"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.salary_from.value) <= 0}
{assign var="value" value=$fields.salary_from.default_value }
{else}
{assign var="value" value=$fields.salary_from.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.salary_from.name}' 
id='{$fields.salary_from.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}salary_to{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SALARY_TO">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SALARY_TO' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="salary_to"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.salary_to.value) <= 0}
{assign var="value" value=$fields.salary_to.default_value }
{else}
{assign var="value" value=$fields.salary_to.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.salary_to.name}' 
id='{$fields.salary_to.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}description{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' class="vt_formulaSelector" name='{$fields.description.name}'
           rows="6" 
           cols="80" 
           title='' tabindex="0" 
                                                              >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}vacancy{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_VACANCY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_VACANCY' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="vacancy"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.vacancy.value) <= 0}
{assign var="value" value=$fields.vacancy.default_value }
{else}
{assign var="value" value=$fields.vacancy.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.vacancy.name}' 
id='{$fields.vacancy.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'          data-dependency="{literal}not(equals($recruitment_type,'continuous')){/literal}"                                         >
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}start_work_date{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_START_WORK_DATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_START_WORK_DATE' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="start_work_date"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.start_work_date.value }
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="{$fields.start_work_date.name}" id="{$fields.start_work_date.name}" value="{$date_value}" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#{$fields.start_work_date.name}' ) );"
>
<button type="button" id="{$fields.start_work_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({ldelim}
           inputField: "{$fields.start_work_date.name}",
           form: "EditView",
           ifFormat: "{$CALENDAR_FORMAT}",
           daFormat: "{$CALENDAR_FORMAT}",
           button: "{$fields.start_work_date.name}_trigger",
           singleClick: true,
           dateStr: "{$date_value}",
           startWeekday: {$CALENDAR_FDOW|default:'0'},
           step: 1,
           weekNumbers: false
    {rdelim}
        );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}recruitment_channels{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_RECRUITMENT_CHANNELS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECRUITMENT_CHANNELS' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="multienum" field="recruitment_channels"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<input type="hidden" id="{$fields.recruitment_channels.name}_multiselect"
name="{$fields.recruitment_channels.name}_multiselect" value="true" >
{multienum_to_array string=$fields.recruitment_channels.value default=$fields.recruitment_channels.default assign="values"}
<select  class="vt_formulaSelector" id="{$fields.recruitment_channels.name}"
name="{$fields.recruitment_channels.name}[]"
multiple="true" size='6' style="width:150" title='' tabindex="0"  
>
{html_options options=$fields.recruitment_channels.options selected=$values}
</select>
{else}
{assign var="field_options" value=$fields.recruitment_channels.options }
{capture name="field_val"}{$fields.recruitment_channels.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.recruitment_channels.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<input type="hidden" id="{$fields.recruitment_channels.name}_multiselect"
name="{$fields.recruitment_channels.name}_multiselect" value="true">
{multienum_to_array string=$fields.recruitment_channels.value default=$fields.recruitment_channels.default assign="values"}
<select style='display:none' id="{$fields.recruitment_channels.name}"
name="{$fields.recruitment_channels.name}[]"
multiple="true" size='6' style="width:150" title='' tabindex="0"  
>
{html_options options=$fields.recruitment_channels.options selected=$values}
</select>
<input
id="{$fields.recruitment_channels.name}-input"
name="{$fields.recruitment_channels.name}-input"
size="60"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button">
<img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.recruitment_channels.name}-image">
</button>
<button type="button"
id="btn-clear-{$fields.recruitment_channels.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.recruitment_channels.name}-input', '{$fields.recruitment_channels.name};'); SUGAR.AutoComplete.{$ac_key}.inputNode.updateHidden()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    YUI().use('datasource', 'datasource-jsonschema', function (Y) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var selectElem = document.getElementById("{/literal}{$fields.recruitment_channels.name}{literal}");
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == '' && selectElem.options[i].innerHTML == ''))
                            ret.push({'key':selectElem.options[i].value, 'text':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                {/literal}
                
                {literal}
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node-event-simulate", function (Y) {
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.recruitment_channels.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.recruitment_channels.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.recruitment_channels.name}');
                                    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
                    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
                    if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
                {/literal}
                    SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
                    {literal}
                        }
                    {/literal}
                        if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
                    {/literal}
                        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
                        {literal}
                            }
                        {/literal}
                        
                                                {literal}
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                                    allowTrailingDelimiter: true,
                        {/literal}
                                    minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
                                    queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
                                    queryDelimiter: ',',
                                    zIndex: 99999,
                                                {literal}
                            source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
                                    resultTextLocator: 'text',
                                    resultHighlighter: 'phraseMatch',
                                    resultFilters: 'phraseMatch',
                                    // Chain together a startsWith filter followed by a custom result filter
                                    // that only displays tags that haven't already been selected.
                                    resultFilters: ['phraseMatch', function (query, results) {
                                    // Split the current input value into an array based on comma delimiters.
                                    var selected = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value').split(/\s*,\s*/);
                                    // Convert the array into a hash for faster lookups.
                                    selected = Y.Array.hash(selected);
                                    // Filter out any results that are already selected, then return the
                                    // array of filtered results.
                                    return Y.Array.filter(results, function (result) {
                                    return !selected.hasOwnProperty(result.text);
                                    });
                                    }]
                            });
                        {/literal}{literal}
                                if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                                // expand the dropdown options upon focus
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                                });
                                }

                                                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateHidden = function() {
                                var index_array = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value').split(/\s*,\s*/);
                                var selectElem = document.getElementById("{/literal}{$fields.recruitment_channels.name}{literal}");
                                var oTable = {};
                                for (i = 0; i < selectElem.options.length; i++){
                                if (selectElem.options[i].selected)
                                        oTable[selectElem.options[i].value] = true;
                                }

                                for (i = 0; i < selectElem.options.length; i++){
                                selectElem.options[i].selected = false;
                                }

                                var nTable = {};
                                for (i = 0; i < index_array.length; i++){
                                var key = index_array[i];
                                for (c = 0; c < selectElem.options.length; c++)
                                        if (selectElem.options[c].innerHTML == key){
                                selectElem.options[c].selected = true;
                                nTable[selectElem.options[c].value] = 1;
                                }
                                }

                                //the following two loops check to see if the selected options are different from before.
                                //oTable holds the original select. nTable holds the new one
                                var fireEvent = false;
                                for (n in nTable){
                                if (n == '')
                                        continue;
                                if (!oTable.hasOwnProperty(n))
                                        fireEvent = true; //the options are different, fire the event
                                }

                                for (o in oTable){
                                if (o == '')
                                        continue;
                                if (!nTable.hasOwnProperty(o))
                                        fireEvent = true; //the options are different, fire the event
                                }

                                //if the selected options are different from before, fire the 'change' event
                                if (fireEvent){
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
                                }
                                };
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateText = function() {
                                //get last option typed into the input widget
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.set(SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'));
                                var index_array = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value').split(/\s*,\s*/);
                                //create a string ret_string as a comma-delimited list of text from selectElem options.
                                var selectElem = document.getElementById("{/literal}{$fields.recruitment_channels.name}{literal}");
                                var ret_array = [];
                                if (selectElem == null || selectElem.options == null)
                                        return;
                                for (i = 0; i < selectElem.options.length; i++){
                                if (selectElem.options[i].selected && selectElem.options[i].innerHTML != ''){
                                ret_array.push(selectElem.options[i].innerHTML);
                                }
                                }

                                //index array - array from input
                                //ret array - array from select

                                var sorted_array = [];
                                var notsorted_array = [];
                                for (i = 0; i < index_array.length; i++){
                                for (c = 0; c < ret_array.length; c++){
                                if (ret_array[c] == index_array[i]){
                                sorted_array.push(ret_array[c]);
                                ret_array.splice(c, 1);
                                }
                                }
                                }
                                ret_string = ret_array.concat(sorted_array).join(', ');
                                if (ret_string.match(/^\s*$/))
                                        ret_string = '';
                                else
                                        ret_string += ', ';
                                //update the input widget
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.set('value', ret_string);
                                };
                                function updateTextOnInterval(){
                                if (document.activeElement != document.getElementById("{/literal}{$fields.recruitment_channels.name}-input{literal}"))
                                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateText();
                                    setTimeout(updateTextOnInterval, 100);
                                    }

                                    updateTextOnInterval();
                                    
                                                                        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
                                    });
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
                                    });
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
                                    });
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
                                    });
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
                                    });
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
                                    });
                                    
                                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function () {
                                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateHidden();
                                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateText();
                                            });
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.on('click', function () {
                                    if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.show();
                                    }
                                    else{
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                                    }
                                    });
                                    if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                                    // After a tag is selected, send an empty query to update the list of tags.
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.after('select', function () {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.show();
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateHidden();
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateText();
                                    });
                                    } else {
                                    // After a tag is selected, send an empty query to update the list of tags.
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.after('select', function () {
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateHidden();
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.updateText();
                                    });
                                    }
                                    });
                                </script>
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}recruitment_type{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RECRUITMENT_TYPE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RECRUITMENT_TYPE' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="recruitment_type"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.recruitment_type.name}" 
id="{$fields.recruitment_type.name}" 
title=''               
>
{if isset($fields.recruitment_type.value) && $fields.recruitment_type.value != ''}
{html_options options=$fields.recruitment_type.options selected=$fields.recruitment_type.value}
{else}
{html_options options=$fields.recruitment_type.options selected=$fields.recruitment_type.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.recruitment_type.options }
{capture name="field_val"}{$fields.recruitment_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.recruitment_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.recruitment_type.name}" 
id="{$fields.recruitment_type.name}" 
title=''                      
>
{if isset($fields.recruitment_type.value) && $fields.recruitment_type.value != ''}
{html_options options=$fields.recruitment_type.options selected=$fields.recruitment_type.value}
{else}
{html_options options=$fields.recruitment_type.options selected=$fields.recruitment_type.default}
{/if}
</select>
<input
id="{$fields.recruitment_type.name}-input"
name="{$fields.recruitment_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.recruitment_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.recruitment_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.recruitment_type.name}-input', '{$fields.recruitment_type.name}'); sync_{$fields.recruitment_type.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.recruitment_type.name}{literal}");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:''};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use('datasource', 'datasource-jsonschema', function (Y) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == '' && selectElem.options[i].innerHTML == ''))
                            ret.push({'key':selectElem.options[i].value, 'text':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                {/literal}
                
                {literal}
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.recruitment_type.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.recruitment_type.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.recruitment_type.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.recruitment_type.name}{literal}");
                    var doSimulateChange = false;
                    if (selectElem.value != selectme)
                            doSimulateChange = true;
                    selectElem.value = selectme;
                    for (i = 0; i < selectElem.options.length; i++){
                    selectElem.options[i].selected = false;
                    if (selectElem.options[i].value == selectme)
                            selectElem.options[i].selected = true;
                    }

                    if (doSimulateChange)
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
                    }

                    //global variable 
                    sync_{/literal}{$fields.recruitment_type.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.recruitment_type.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.recruitment_type.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.recruitment_type.name}{literal}", syncFromHiddenToWidget);
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
                    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
                    if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
                {/literal}
                    SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
                    {literal}
                        }
                    {/literal}
                        if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
                    {/literal}
                        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
                        {literal}
                            }
                        {/literal}
                        
                            SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
                        {literal}
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        {/literal}
                                    minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
                                    queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
                                    zIndex: 99999,
                        
                        {literal}
                            source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
                                    resultTextLocator: 'text',
                                    resultHighlighter: 'phraseMatch',
                                    resultFilters: 'phraseMatch',
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
                            if (hover[0] != null){
                            if (ex) {
                            var h = '1000px';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = '';
                            }
                            }
                            }

                            if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
                            var selectElem = document.getElementById("{/literal}{$fields.recruitment_type.name}{literal}");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                            if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_SHOW_MORE_INFORMATION' module='Recruitments'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_SHOW_MORE_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}assigned_user_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Recruitments'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.assigned_user_name.name}{/capture}
<input type="text" name="{$fields.assigned_user_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}' ); $( '#{$fields.assigned_user_name.name},#{$fields.assigned_user_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>

</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->

{if empty($smarty.request.minthcm_popup)}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Recruitments'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Recruitments", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>

{/if}

</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'end_date', 'date', false,'{/literal}{sugar_translate label='LBL_END_DATE' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'announcement', 'url', false,'{/literal}{sugar_translate label='LBL_ANNOUNCEMENT' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'project_status', 'enum', false,'{/literal}{sugar_translate label='LBL_PROJECT_STATUS' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'start_date', 'date', true,'{/literal}{sugar_translate label='LBL_START_DATE' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'start_work_date', 'date', false,'{/literal}{sugar_translate label='LBL_START_WORK_DATE' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'vacancy', 'int', false,'{/literal}{sugar_translate label='LBL_VACANCY' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'employees_number', 'int', false,'{/literal}{sugar_translate label='LBL_EMPLOYEES_NUMBER' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'position_name', 'relate', true,'{/literal}{sugar_translate label='LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'position_id', 'id', false,'{/literal}{sugar_translate label='LBL_RECRUITMENTS_POSITIONS_FROM_RECRUITMENTS_TITLE_ID' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'version', 'varchar', false,'{/literal}{sugar_translate label='LBL_VERSION' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'recruitment_channels[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_RECRUITMENT_CHANNELS' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'recruitment_type', 'enum', true,'{/literal}{sugar_translate label='LBL_RECRUITMENT_TYPE' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'salary_from', 'currency', true,'{/literal}{sugar_translate label='LBL_SALARY_FROM' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'salary_from_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SALARY_FROM_USDOLLAR' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'salary_to', 'currency', true,'{/literal}{sugar_translate label='LBL_SALARY_TO' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'salary_to_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SALARY_TO_USDOLLAR' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'currency_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_NAME' module='Recruitments' for_js=true}{literal}' );
addToValidate('EditView', 'currency_symbol', 'relate', false,'{/literal}{sugar_translate label='LBL_CURRENCY_SYMBOL' module='Recruitments' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Recruitments' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Recruitments' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'position_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Recruitments' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE' module='Recruitments' for_js=true}{literal}', 'position_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_position_name']={"form":"EditView","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_name","position_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
