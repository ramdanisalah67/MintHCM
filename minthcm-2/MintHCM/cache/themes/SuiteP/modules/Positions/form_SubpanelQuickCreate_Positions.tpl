

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Positions'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Positions'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Positions_subpanel_save_button');return false;" type="submit" name="Positions_subpanel_save_button" id="Positions_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Positions_subpanel_cancel_button" id="Positions_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Positions'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Positions_subpanel_full_form_button" id="Positions_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Positions", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
{/if}

</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
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
{sugar_translate label='DEFAULT' module='Positions'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_NAME">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Positions'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}status{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Positions'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''               
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.status.options }
{capture name="field_val"}{$fields.status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''                      
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
<input
id="{$fields.status.name}-input"
name="{$fields.status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
id="btn-clear-{$fields.status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}'); sync_{$fields.status.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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
                    sync_{/literal}{$fields.status.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.status.name}{literal}", syncFromHiddenToWidget);
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
                            var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
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




{capture name="field_name" assign="field_name"}securitygroup_leader_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_SECURITYGROUPS_LEADER_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SECURITYGROUPS_LEADER_NAME' module='Positions'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="securitygroup_leader_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.securitygroup_leader_name.name}{/capture}
<input type="text" name="{$fields.securitygroup_leader_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.securitygroup_leader_name.name}" size="" value="{$fields.securitygroup_leader_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.securitygroup_leader_name.id_name}" 
id="{$fields.securitygroup_leader_name.id_name}" 
value="{$fields.securitygroup_leader_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.securitygroup_leader_name.name}" id="btn_{$fields.securitygroup_leader_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.securitygroup_leader_name.module}",
600,
400,
"&group_type_advanced[]=business_unit&group_type_advanced[]=department&group_type_advanced[]=team&group_type_advanced[]=other&group_type_advanced[]=standard",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Positions","field_to_name_array":{"id":"securitygroup_leader_id","name":"securitygroup_leader_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.securitygroup_leader_name.name}" id="btn_clr_{$fields.securitygroup_leader_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.securitygroup_leader_name.name}', '{$fields.securitygroup_leader_name.id_name}' ); $( '#{$fields.securitygroup_leader_name.name},#{$fields.securitygroup_leader_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.securitygroup_leader_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}positions_supervision_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_POSITIONS_SUPERVISION_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_POSITIONS_SUPERVISION_NAME' module='Positions'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="positions_supervision_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.positions_supervision_name.name}{/capture}
<input type="text" name="{$fields.positions_supervision_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.positions_supervision_name.name}" size="" value="{$fields.positions_supervision_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
data-validation="{literal}AEM(callCustomApi(Positions, checkSubordinatedPositions, {id:$id, positions_supervision_id:$positions_supervision_id}), 'LBL_PARENT_SUPERVISION_ERROR'){/literal}" >
<input class="vt_formulaSelector" type="hidden" name="{$fields.positions_supervision_name.id_name}" 
id="{$fields.positions_supervision_name.id_name}" 
value="{$fields.positions_supervision_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.positions_supervision_name.name}" id="btn_{$fields.positions_supervision_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.positions_supervision_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Positions","field_to_name_array":{"id":"positions_supervision_id","name":"positions_supervision_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.positions_supervision_name.name}" id="btn_clr_{$fields.positions_supervision_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.positions_supervision_name.name}', '{$fields.positions_supervision_name.id_name}' ); $( '#{$fields.positions_supervision_name.name},#{$fields.positions_supervision_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.positions_supervision_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}offboardingtemplate_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_OFFBOARDINGTEMPLATE_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFBOARDINGTEMPLATE_NAME' module='Positions'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="offboardingtemplate_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.offboardingtemplate_name.name}{/capture}
<input type="text" name="{$fields.offboardingtemplate_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.offboardingtemplate_name.name}" size="" value="{$fields.offboardingtemplate_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.offboardingtemplate_name.id_name}" 
id="{$fields.offboardingtemplate_name.id_name}" 
value="{$fields.offboardingtemplate_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.offboardingtemplate_name.name}" id="btn_{$fields.offboardingtemplate_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.offboardingtemplate_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Positions","field_to_name_array":{"id":"offboardingtemplate_id","name":"offboardingtemplate_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.offboardingtemplate_name.name}" id="btn_clr_{$fields.offboardingtemplate_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.offboardingtemplate_name.name}', '{$fields.offboardingtemplate_name.id_name}' ); $( '#{$fields.offboardingtemplate_name.name},#{$fields.offboardingtemplate_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.offboardingtemplate_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}onboardingtemplate_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ONBOARDINGTEMPLATE_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ONBOARDINGTEMPLATE_NAME' module='Positions'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="onboardingtemplate_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.onboardingtemplate_name.name}{/capture}
<input type="text" name="{$fields.onboardingtemplate_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.onboardingtemplate_name.name}" size="" value="{$fields.onboardingtemplate_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.onboardingtemplate_name.id_name}" 
id="{$fields.onboardingtemplate_name.id_name}" 
value="{$fields.onboardingtemplate_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.onboardingtemplate_name.name}" id="btn_{$fields.onboardingtemplate_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.onboardingtemplate_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Positions","field_to_name_array":{"id":"onboardingtemplate_id","name":"onboardingtemplate_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.onboardingtemplate_name.name}" id="btn_clr_{$fields.onboardingtemplate_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.onboardingtemplate_name.name}', '{$fields.onboardingtemplate_name.id_name}' ); $( '#{$fields.onboardingtemplate_name.name},#{$fields.onboardingtemplate_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.onboardingtemplate_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}assigned_user_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Positions'}{/capture}
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
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Positions","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal},
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Positions'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Positions'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Positions_subpanel_save_button');return false;" type="submit" name="Positions_subpanel_save_button" id="Positions_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Positions_subpanel_cancel_button" id="Positions_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Positions'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Positions_subpanel_full_form_button" id="Positions_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Positions", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>

{/if}

</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Positions",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Positions) {rdelim});
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
addForm('form_SubpanelQuickCreate_Positions');addToValidate('form_SubpanelQuickCreate_Positions', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Positions', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Positions', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'securitygroup_leader_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SECURITYGROUPS_LEADER_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'positions_supervision_name', 'relate', false,'{/literal}{sugar_translate label='LBL_POSITIONS_SUPERVISION_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'positions_supervision_id', 'id', false,'{/literal}{sugar_translate label='LBL_POSITIONS_SUPERVISION_ID' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'onboardingtemplate_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ONBOARDINGTEMPLATE_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'onboardingtemplate_id', 'id', false,'{/literal}{sugar_translate label='LBL_ONBOARDINGTEMPLATE_ID' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'offboardingtemplate_name', 'relate', false,'{/literal}{sugar_translate label='LBL_OFFBOARDINGTEMPLATE_NAME' module='Positions' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Positions', 'offboardingtemplate_id', 'id', false,'{/literal}{sugar_translate label='LBL_OFFBOARDINGTEMPLATE_ID' module='Positions' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Positions', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Positions' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Positions' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Positions', 'securitygroup_leader_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Positions' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_SECURITYGROUPS_LEADER_NAME' module='Positions' for_js=true}{literal}', 'securitygroup_leader_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Positions', 'positions_supervision_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Positions' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_POSITIONS_SUPERVISION_NAME' module='Positions' for_js=true}{literal}', 'positions_supervision_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Positions', 'onboardingtemplate_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Positions' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ONBOARDINGTEMPLATE_NAME' module='Positions' for_js=true}{literal}', 'onboardingtemplate_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Positions', 'offboardingtemplate_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Positions' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OFFBOARDINGTEMPLATE_NAME' module='Positions' for_js=true}{literal}', 'offboardingtemplate_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Positions_securitygroup_leader_name']={"form":"form_SubpanelQuickCreate_Positions","method":"query","modules":["SecurityGroups"],"group":"or","field_list":["name","id"],"populate_list":["securitygroup_leader_name","securitygroup_leader_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Positions_positions_supervision_name']={"form":"form_SubpanelQuickCreate_Positions","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["positions_supervision_name","positions_supervision_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Positions_offboardingtemplate_name']={"form":"form_SubpanelQuickCreate_Positions","method":"query","modules":["OffboardingTemplates"],"group":"or","field_list":["name","id"],"populate_list":["offboardingtemplate_name","offboardingtemplate_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Positions_onboardingtemplate_name']={"form":"form_SubpanelQuickCreate_Positions","method":"query","modules":["OnboardingTemplates"],"group":"or","field_list":["name","id"],"populate_list":["onboardingtemplate_name","onboardingtemplate_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Positions_assigned_user_name']={"form":"form_SubpanelQuickCreate_Positions","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
