

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}

{if empty($smarty.request.minthcm_popup)}

<div class="buttons">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"/>{/if}
{if isset($users_edit_access) && $users_edit_access}<input title="{$APP.LBL_SETTINGS_BUTTON_TITLE}" accessKey="{$APP.LBL_SETTINGS_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView'; _form.module.value='Users';_form.submit();" id="settings_button" name="Settings" type="button" value="{$APP.LBL_SETTINGS_BUTTON_LABEL}"/>{/if}
{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"/>{/if}
{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('{$DELETE_WARNING}') ) {ldelim} _form.return_module.value='{$module}'; _form.return_action.value='index'; _form.return_id.value='{$id}'; _form.action.value='delete'; _form.submit();{rdelim};_form.submit();" name="Delete" id="delete_button" type="button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"/>{/if}
{if isset($appraisals_edit_access) && $appraisals_edit_access}<input class="button" name="generate_button" id="generate_button" title="{$MOD.LBL_CREATE_APPRAISAL}" onClick="generateAppraisalDialogBox.init()" type="button" value="{$MOD.LBL_CREATE_APPRAISAL}"/>{/if}
{if isset($IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES) && $IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES}<input class="button" name="generate_button" id="generate_button" title="{$MOD.LBL_GENERATE_ONBOARDING_OFFBOARDING}" onClick="generateOnboardingOffboarding.init(generateOnboardingOffboarding)" type="button" value="{$MOD.LBL_GENERATE_ONBOARDING_OFFBOARDING}"/>{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>                    
{/if}

{/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='DEFAULT' module='Employees'}
</a>


<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='Employees'}
</a>
</li>
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">{$APP.LBL_LINK_ACTIONS}<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"/>{/if}</li>
<li>{if isset($users_edit_access) && $users_edit_access}<input title="{$APP.LBL_SETTINGS_BUTTON_TITLE}" accessKey="{$APP.LBL_SETTINGS_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView'; _form.module.value='Users';_form.submit();" id="settings_button" name="Settings" type="button" value="{$APP.LBL_SETTINGS_BUTTON_LABEL}"/>{/if}</li>
<li>{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"/>{/if}</li>
<li>{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('{$DELETE_WARNING}') ) {ldelim} _form.return_module.value='{$module}'; _form.return_action.value='index'; _form.return_id.value='{$id}'; _form.action.value='delete'; _form.submit();{rdelim};_form.submit();" name="Delete" id="delete_button" type="button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"/>{/if}</li>
<li>{if isset($appraisals_edit_access) && $appraisals_edit_access}<input class="button" name="generate_button" id="generate_button" title="{$MOD.LBL_CREATE_APPRAISAL}" onClick="generateAppraisalDialogBox.init()" type="button" value="{$MOD.LBL_CREATE_APPRAISAL}"/>{/if}</li>
<li>{if isset($IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES) && $IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES}<input class="button" name="generate_button" id="generate_button" title="{$MOD.LBL_GENERATE_ONBOARDING_OFFBOARDING}" onClick="generateOnboardingOffboarding.init(generateOnboardingOffboarding)" type="button" value="{$MOD.LBL_GENERATE_ONBOARDING_OFFBOARDING}"/>{/if}</li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.employee_status.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="employee_status" colspan='3' >

{if !$fields.employee_status.hidden}
{counter name="panelFieldCount" print=false}
<span id='employee_status_span'>
{$fields.employee_status.value}
</span>
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.photo.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PHOTO' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="image" field="photo" colspan='3' >

{if !$fields.photo.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.photo.name}">
{if strlen($fields.photo.value) <= 0}
<img src="" style="max-width: {if !$vardef.width}160{else}200{/if}px;" height="{if !$vardef.height}160{else}50{/if}">
{else}
<img src="index.php?entryPoint=download&type={$module}&id={$fields.id.value}_{$fields.photo.name}{$fields.width.value}&time={$fields.date_modified.value}" style="max-width: {if !$vardef.width}160{else}200{/if}px;" height="{if !$vardef.height}160{else}50{/if}"> 
{/if}
</span>
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.name.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="name" colspan='3' >

{if !$fields.name.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
{assign var="type" value=$fields.name.type }
<span class="sugar_field">{$fields.name.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.name.name}" id="{$fields.name.name}" value="{$fields.name.value}"
>
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.position_name.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_POSITION_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="position_name"  >

{if !$fields.position_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.position_id.value)}
{capture assign="detail_url"}index.php?module=Positions&action=DetailView&record={$fields.position_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="position_id" class="sugar_field" data-id-value="{$fields.position_id.value}">{$fields.position_name.value}</span>
{if !empty($fields.position_id.value)}</a>{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.phone_work.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_WORK_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_work"  class="phone">

{if !$fields.phone_work.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.securitygroup_name.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SECURITYGROUP_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="securitygroup_name"  >

{if !$fields.securitygroup_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.securitygroup_id.value)}
{capture assign="detail_url"}index.php?module=SecurityGroups&action=DetailView&record={$fields.securitygroup_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="securitygroup_id" class="sugar_field" data-id-value="{$fields.securitygroup_id.value}">{$fields.securitygroup_name.value}</span>
{if !empty($fields.securitygroup_id.value)}</a>{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.phone_mobile.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_mobile"  class="phone">

{if !$fields.phone_mobile.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.reports_to_name.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="reports_to_name"  >

{if !$fields.reports_to_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="reports_to_id" class="sugar_field" data-id-value="{$fields.reports_to_id.value}">{$fields.reports_to_name.value}</span>
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.phone_other.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_OTHER_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_other"  class="phone">

{if !$fields.phone_other.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.phone_home.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_home"  class="phone">

{if !$fields.phone_home.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.phone_fax.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FAX_PHONE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_fax"  class="phone">

{if !$fields.phone_fax.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }
{sugar_phone value=$phone_value usa_format="0"}
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.messenger_type.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="messenger_type"  >

{if !$fields.messenger_type.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.messenger_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{ $fields.messenger_type.options }">
{ $fields.messenger_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{ $fields.messenger_type.value }">
{ $fields.messenger_type.options[$fields.messenger_type.value]}
{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.messenger_id.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="messenger_id"  >

{if !$fields.messenger_id.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if} 
{assign var="type" value=$fields.messenger_id.type }
<span class="sugar_field">{$fields.messenger_id.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.messenger_id.name}" id="{$fields.messenger_id.name}" value="{$fields.messenger_id.value}"
>
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.email1.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="email1" colspan='3' >

{if !$fields.email1.hidden}
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}
</span>
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.address_street.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS_STREET' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_street"  >

{if !$fields.address_street.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_street.value) <= 0}
{assign var="value" value=$fields.address_street.default_value }
{else}
{assign var="value" value=$fields.address_street.value }
{/if} 
{assign var="type" value=$fields.address_street.type }
<span class="sugar_field">{$fields.address_street.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.address_street.name}" id="{$fields.address_street.name}" value="{$fields.address_street.value}"
>
{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.address_city.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CITY' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_city"  >

{if !$fields.address_city.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_city.value) <= 0}
{assign var="value" value=$fields.address_city.default_value }
{else}
{assign var="value" value=$fields.address_city.value }
{/if} 
{assign var="type" value=$fields.address_city.type }
<span class="sugar_field">{$fields.address_city.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.address_city.name}" id="{$fields.address_city.name}" value="{$fields.address_city.value}"
>
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.address_state.acl > 0}


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_state"  >

{if !$fields.address_state.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_state.value) <= 0}
{assign var="value" value=$fields.address_state.default_value }
{else}
{assign var="value" value=$fields.address_state.value }
{/if} 
{assign var="type" value=$fields.address_state.type }
<span class="sugar_field">{$fields.address_state.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.address_state.name}" id="{$fields.address_state.name}" value="{$fields.address_state.value}"
>
{/if}
{/if}

</div>


{/if}


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


{if $fields.address_postalcode.acl > 0}


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_POSTAL_CODE' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_postalcode"  >

{if !$fields.address_postalcode.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_postalcode.value) <= 0}
{assign var="value" value=$fields.address_postalcode.default_value }
{else}
{assign var="value" value=$fields.address_postalcode.value }
{/if} 
{assign var="type" value=$fields.address_postalcode.type }
<span class="sugar_field">{$fields.address_postalcode.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.address_postalcode.name}" id="{$fields.address_postalcode.name}" value="{$fields.address_postalcode.value}"
>
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.address_country.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COUNTRY' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="address_country" colspan='3' >

{if !$fields.address_country.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.address_country.value) <= 0}
{assign var="value" value=$fields.address_country.default_value }
{else}
{assign var="value" value=$fields.address_country.value }
{/if} 
{assign var="type" value=$fields.address_country.type }
<span class="sugar_field">{$fields.address_country.value}</span>
{if $type != "emailbody" }
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="{$fields.address_country.name}" id="{$fields.address_country.name}" value="{$fields.address_country.value}"
>
{/if}
{/if}

</div>


{/if}


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


{if $fields.description.acl > 0}


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Employees'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="text" field="description" colspan='3' >

{if !$fields.description.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

</div>


{/if}


</div>

</div>
                    </div>
</div>

<div class="panel-content">
<div>&nbsp;</div>


</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script src="include/RemoveWhitespaces/removeWhitespaces.js"></script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.panel-content div.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}