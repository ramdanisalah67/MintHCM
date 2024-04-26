

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
{if $bean->aclAccess("save")}<input class="button primary" name="button" id="SAVE" title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" onClick="var _form = document.getElementById('EditView'); _form.action.value='Save'; if(check_form('EditView') && getSupervisedUnitsIfEmployeeIsSupervisor())SUGAR.ajaxUI.submitForm(_form);return false;" type="button" value="{$APP.LBL_SAVE_BUTTON_TITLE}"/>{/if}
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Employees'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='DEFAULT' module='Employees'}
</a>


<!-- Counting Tabs 0-->
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='Employees'}
</a>
</li>
</ul>
<div class="clearfix"></div>
<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}employee_status{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMPLOYEE_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="employee_status"  >
{counter name="panelFieldCount" print=false}
<span id='employee_status_span'>
{$fields.employee_status.value}</span>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}photo{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHOTO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PHOTO' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="image" field="photo"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript">
    {literal}
        $( document ).ready(function() {
        $( "form#EditView" )
        .attr( "enctype", "multipart/form-data" )
        .attr( "encoding", "multipart/form-data" );
    });
{/literal}
</script>
<script type="text/javascript" src='include/SugarFields/Fields/Image/SugarFieldFile.js?v=on6SqL3ujgyELJb3ExF4GQ'></script>
{if !empty($fields.photo.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.photo.name}" id="{$fields.photo.name}" value="{$fields.photo.value}">
<input type="hidden" name="{$fields.photo.name}_record_id" id="{$fields.photo.name}_record_id" value="{$fields.id.value}">
<span id="{$fields.photo.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}_{$fields.photo.name}&type={$module}&time={$fields.date_modified.value}" class="tabDetailViewDFLink">{$fields.photo.value}</a>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.photo.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.photo.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.photo.name}_escaped">
<input id="{$fields.photo.name}_file" name="{$fields.photo.name}_file"
type="file" title='' size="30"
maxlength='255'
>
{else}

{/if}
<script type="text/javascript">
$( "#{$fields.photo.name}_file{literal} " ).change(function() {
        $("#{/literal}{$fields.photo.name}{literal}").val($("#{/literal}{$fields.photo.name}_file{literal}").val());
});{/literal}
        </script>
</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}first_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_FIRST_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="first_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.first_name.value) <= 0}
{assign var="value" value=$fields.first_name.default_value }
{else}
{assign var="value" value=$fields.first_name.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.first_name.name}' 
id='{$fields.first_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}last_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_LAST_NAME">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LAST_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="last_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.last_name.value) <= 0}
{assign var="value" value=$fields.last_name.default_value }
{else}
{assign var="value" value=$fields.last_name.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.last_name.name}' 
id='{$fields.last_name.name}' size='30' 
maxlength='30' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}position_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_POSITION_NAME">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_POSITION_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="position_name"  >
{counter name="panelFieldCount"  print=false}
<input tabindex="0"  type="text" name="{$fields.position_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.position_name.name}" size="" value="{$fields.position_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input tabindex="0"  type="hidden" name="{$fields.position_id.name}" id="{$fields.position_id.name}" value="{$fields.position_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.position_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.position_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"position_id","name":"position_name"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.position_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.position_name.name}.value = ''; this.form.{$fields.position_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button></span>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}phone_work{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_WORK_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_work"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input  class="vt_formulaSelector"  type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone vt_formulaSelector" 
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}securitygroup_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_SECURITYGROUP_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SECURITYGROUP_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="securitygroup_name"  >
{counter name="panelFieldCount"  print=false}
<input tabindex="0"  type="text" name="{$fields.securitygroup_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.securitygroup_name.name}" size="" value="{$fields.securitygroup_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input tabindex="0"  type="hidden" name="{$fields.securitygroup_id.name}" id="{$fields.securitygroup_id.name}" value="{$fields.securitygroup_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.securitygroup_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.securitygroup_name.module}", 600, 400, "&group_type_advanced[]=business_unit&group_type_advanced[]=department&group_type_advanced[]=team&group_type_advanced[]=other&group_type_advanced[]=standard", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"securitygroup_id","name":"securitygroup_name"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.securitygroup_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.securitygroup_name.name}.value = ''; this.form.{$fields.securitygroup_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button></span>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}phone_mobile{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOBILE_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_mobile"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input  class="vt_formulaSelector"  type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone vt_formulaSelector" 
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}reports_to_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_REPORTS_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="reports_to_name"  >
{counter name="panelFieldCount"  print=false}
<input tabindex="0"  type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input tabindex="0"  type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.reports_to_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.reports_to_name.name}.value = ''; this.form.{$fields.reports_to_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button></span>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}phone_other{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_OTHER_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_other"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  
<input  class="vt_formulaSelector"  type='text' name='{$fields.phone_other.name}' id='{$fields.phone_other.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone vt_formulaSelector" 
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}phone_home{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_HOME_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_home"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_home.value) <= 0}
{assign var="value" value=$fields.phone_home.default_value }
{else}
{assign var="value" value=$fields.phone_home.value }
{/if}  
<input  class="vt_formulaSelector"  type='text' name='{$fields.phone_home.name}' id='{$fields.phone_home.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone vt_formulaSelector" 
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}phone_fax{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX_PHONE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FAX' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input  class="vt_formulaSelector"  type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0'	  class="phone vt_formulaSelector" 
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}messenger_type{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_MESSENGER_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="messenger_type"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''               
>
{if isset($fields.messenger_type.value) && $fields.messenger_type.value != ''}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
{else}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.messenger_type.options }
{capture name="field_val"}{$fields.messenger_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.messenger_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.messenger_type.name}" 
id="{$fields.messenger_type.name}" 
title=''                      
>
{if isset($fields.messenger_type.value) && $fields.messenger_type.value != ''}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.value}
{else}
{html_options options=$fields.messenger_type.options selected=$fields.messenger_type.default}
{/if}
</select>
<input
id="{$fields.messenger_type.name}-input"
name="{$fields.messenger_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.messenger_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.messenger_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.messenger_type.name}-input', '{$fields.messenger_type.name}'); sync_{$fields.messenger_type.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
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

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.messenger_type.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.messenger_type.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.messenger_type.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
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
                    sync_{/literal}{$fields.messenger_type.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.messenger_type.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.messenger_type.name}{literal}", syncFromHiddenToWidget);
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
                            var selectElem = document.getElementById("{/literal}{$fields.messenger_type.name}{literal}");
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



{capture name="field_name" assign="field_name"}messenger_id{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_MESSENGER_ID">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="messenger_id"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.messenger_id.name}' 
id='{$fields.messenger_id.name}' size='30' 
maxlength='100' 
value='{$value}' title=''          
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
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTES' module='Employees'}{/capture}
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
           rows="4" 
           cols="60" 
           title='' tabindex="0" 
                                                              >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}address_street{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ADDRESS_STREET">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_street"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.address_street.value)}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if}  
<textarea  id='{$fields.address_street.name}' class="vt_formulaSelector" name='{$fields.address_street.name}'
           rows="2" 
           cols="30" 
           title='' tabindex="0" 
                                                              >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}address_city{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ADDRESS_CITY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_CITY' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_city"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_city.name}' 
id='{$fields.address_city.name}' size='30' 
maxlength='100' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}address_state{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ADDRESS_STATE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_state"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_state.name}' 
id='{$fields.address_state.name}' size='30' 
maxlength='100' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}address_postalcode{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ADDRESS_POSTALCODE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_POSTAL_CODE' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_postalcode"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_postalcode.name}' 
id='{$fields.address_postalcode.name}' size='30' 
maxlength='20' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}address_country{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_ADDRESS_COUNTRY">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_COUNTRY' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="address_country" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_country.name}' 
id='{$fields.address_country.name}' size='30' 
maxlength='100' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}email1{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_EMAIL">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Employees'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1" colspan='3' >
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>            </div>
</div>

<div class="panel-content">
<div>&nbsp;</div>


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
{if $bean->aclAccess("save")}<input class="button primary" name="button" id="SAVE" title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" onClick="var _form = document.getElementById('EditView'); _form.action.value='Save'; if(check_form('EditView') && getSupervisedUnitsIfEmployeeIsSupervisor())SUGAR.ajaxUI.submitForm(_form);return false;" type="button" value="{$APP.LBL_SAVE_BUTTON_TITLE}"/>{/if}
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Employees'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>

{/if}

</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
{sugar_getscript file="cache/include/javascript/sugar_grp_yui_widgets.js"}
<script type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");
EditView_tabs.selectTab(0);
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
addForm('EditView');addToValidate('EditView', 'user_name', 'user_name', true,'{/literal}{sugar_translate label='LBL_USER_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'user_hash', 'varchar', false,'{/literal}{sugar_translate label='LBL_USER_HASH' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'system_generated_password', 'bool', true,'{/literal}{sugar_translate label='LBL_SYSTEM_GENERATED_PASSWORD' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Password Last Changed' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_AUTHENTICATE_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'sugar_login', 'bool', false,'{/literal}{sugar_translate label='LBL_SUITE_LOGIN' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'name', false,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'name', true,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'varchar', false,'{/literal}{sugar_translate label='LBL_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'is_admin', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_ADMIN' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'{/literal}{sugar_translate label='LBL_EXT_AUTHENTICATE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'{/literal}{sugar_translate label='LBL_RECEIVE_NOTIFICATIONS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_CREATED_BY_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'photo', 'image', false,'{/literal}{sugar_translate label='LBL_PHOTO' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_WORK_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STREET' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_CITY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_STATE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_COUNTRY' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ADDRESS_POSTALCODE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'UserType', 'enum', false,'{/literal}{sugar_translate label='LBL_USER_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'portal_only', 'bool', false,'{/literal}{sugar_translate label='LBL_PORTAL_ONLY_USER' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'{/literal}{sugar_translate label='LBL_SHOW_ON_EMPLOYEES' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'employee_status', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_MESSENGER_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'messenger_type', 'enum', false,'{/literal}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'email_link_type', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_LINK_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'editor_type', 'enum', false,'{/literal}{sugar_translate label='LBL_EDITOR_TYPE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'business_role', 'enum', false,'{/literal}{sugar_translate label='LBL_BUSINESS_ROLE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'is_group', 'bool', false,'{/literal}{sugar_translate label='LBL_GROUP_USER' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'securitygroup_noninher_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_USER_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'securitygroup_noninherit_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_securitygroup_noninherit_id' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'securitygroup_noninheritable', 'bool', false,'{/literal}{sugar_translate label='LBL_SECURITYGROUP_NONINHERITABLE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'securitygroup_primary_group', 'bool', false,'{/literal}{sugar_translate label='LBL_PRIMARY_GROUP' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'factor_auth', 'bool', false,'{/literal}{sugar_translate label='LBL_FACTOR_AUTH' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'factor_auth_interface', 'enum', false,'{/literal}{sugar_translate label='LBL_FACTOR_AUTH_INTERFACE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'position_name', 'relate', true,'{/literal}{sugar_translate label='LBL_POSITION_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'position_id', 'id', false,'{/literal}{sugar_translate label='LBL_POSITION_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'candidate_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CANDIDATE_EMPLOYEE_RELATE_FROM_EMPLOYEE' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'securitygroup_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SECURITYGROUP_NAME' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'forced_tabs_dashboard_name', 'relate', false,'{/literal}{sugar_translate label='LBL_USERS_FORCED_TABS_DASHBOARDS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'forced_tabs_dashboard_id', 'id', false,'{/literal}{sugar_translate label='LBL_FORCED_TABS_DASHBOARD_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'locked_dashboard_name', 'relate', false,'{/literal}{sugar_translate label='LBL_USERS_LOCKED_DASHBOARDS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'locked_dashboard_id', 'id', false,'{/literal}{sugar_translate label='LBL_LOCKED_DASHBOARD_ID' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'users_one_time_default_dashboards_name', 'relate', false,'{/literal}{sugar_translate label='LBL_USERS_ONE_TIME_DEFAULT_DASHBOARDS' module='Employees' for_js=true}{literal}' );
addToValidate('EditView', 'one_time_default_dashboard_id', 'id', false,'{/literal}{sugar_translate label='LBL_ONE_TIME_DEFAULT_DASHBOARD_ID' module='Employees' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Employees' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees' for_js=true}{literal}', 'reports_to_id' );
addToValidateBinaryDependency('EditView', 'position_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_POSITION_NAME' module='Employees' for_js=true}{literal}', 'position_id' );
addToValidateBinaryDependency('EditView', 'securitygroup_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Employees' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_SECURITYGROUP_NAME' module='Employees' for_js=true}{literal}', 'securitygroup_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_position_name']={"form":"EditView","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_name","position_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_securitygroup_name']={"form":"EditView","method":"query","modules":["SecurityGroups"],"group":"or","field_list":["name","id"],"populate_list":["securitygroup_name","securitygroup_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
