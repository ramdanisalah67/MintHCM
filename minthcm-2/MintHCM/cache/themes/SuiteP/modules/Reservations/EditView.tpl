

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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Reservations'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Reservations", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='DEFAULT' module='Reservations'}
</a>


<!-- Counting Tabs 0-->
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='DEFAULT' module='Reservations'}
</a>
</li>
</ul>
<div class="clearfix"></div>
<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_NAME">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Reservations'}{/capture}
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



{capture name="field_name" assign="field_name"}starting_date{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_STARTING_DATE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STARTING_DATE' module='Reservations'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="starting_date"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.starting_date.name}_date" value="{$fields[$fields.starting_date.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.starting_date.name}.update();" onchange="combo_{$fields.starting_date.name}.update();  viewTools.form.blur( $( '#{$fields.starting_date.name}' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="{$fields.starting_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.starting_date.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="{$fields.starting_date.name}" name="{$fields.starting_date.name}" value="{$fields[$fields.starting_date.name].value}" 
>
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
    
    var combo_{$fields.starting_date.name} = new Datetimecombo( "{$fields[$fields.starting_date.name].value}", "{$fields.starting_date.name}", "{$TIME_FORMAT}", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_{$fields.starting_date.name}.html( '' );
    document.getElementById( '{$fields.starting_date.name}_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_{$fields.starting_date.name}.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.starting_date.name}_date",'date',false,"{$fields.starting_date.name}");
    addToValidateBinaryDependency( '{$form_name}', "{$fields.starting_date.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}", "{$fields.starting_date.name}_date" );
        addToValidateBinaryDependency( '{$form_name}', "{$fields.starting_date.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}", "{$fields.starting_date.name}_date" );
            addToValidateBinaryDependency( '{$form_name}', "{$fields.starting_date.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}", "{$fields.starting_date.name}_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {ldelim}

           Calendar.setup({ldelim}
                     onClose: update_{$fields.starting_date.name},
                     inputField: "{$fields.starting_date.name}_date",
                     form: "EditView",
                     ifFormat: "{$CALENDAR_FORMAT}",
                     daFormat: "{$CALENDAR_FORMAT}",
                     button: "{$fields.starting_date.name}_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: {$CALENDAR_FDOW|default:'0'},
                     comboObject: combo_{$fields.starting_date.name}
    {rdelim} );

           //Call update for first time to round hours and minute values
           combo_{$fields.starting_date.name}.update( false );

    {rdelim} );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}resource_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RESOURCES">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RESOURCES' module='Reservations'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="resource_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.resource_name.name}{/capture}
<input type="text" name="{$fields.resource_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.resource_name.name}" size="" value="{$fields.resource_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
data-validation="{literal}AEM(callCustomApi(Resources,isReservable,{resource_id:$resource_id}),'LBL_RESOURCE_NOT_FOR_RESERVATION_VALIDATION'){/literal}" >
<input class="vt_formulaSelector" type="hidden" name="{$fields.resource_name.id_name}" 
id="{$fields.resource_name.id_name}" 
value="{$fields.resource_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.resource_name.name}" id="btn_{$fields.resource_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.resource_name.module}",
600,
400,
"&unavailable_advanced=0",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"resource_id","name":"resource_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.resource_name.name}" id="btn_clr_{$fields.resource_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.resource_name.name}', '{$fields.resource_name.id_name}' ); $( '#{$fields.resource_name.name},#{$fields.resource_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.resource_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}ending_date{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_ENDING_DATE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ENDING_DATE' module='Reservations'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="ending_date"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.ending_date.name}_date" value="{$fields[$fields.ending_date.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.ending_date.name}.update();" onchange="combo_{$fields.ending_date.name}.update();  viewTools.form.blur( $( '#{$fields.ending_date.name}' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="{$fields.ending_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.ending_date.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="{$fields.ending_date.name}" name="{$fields.ending_date.name}" value="{$fields[$fields.ending_date.name].value}" 
>
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
    
    var combo_{$fields.ending_date.name} = new Datetimecombo( "{$fields[$fields.ending_date.name].value}", "{$fields.ending_date.name}", "{$TIME_FORMAT}", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_{$fields.ending_date.name}.html( '' );
    document.getElementById( '{$fields.ending_date.name}_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_{$fields.ending_date.name}.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.ending_date.name}_date",'date',false,"{$fields.ending_date.name}");
    addToValidateBinaryDependency( '{$form_name}', "{$fields.ending_date.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}", "{$fields.ending_date.name}_date" );
        addToValidateBinaryDependency( '{$form_name}', "{$fields.ending_date.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}", "{$fields.ending_date.name}_date" );
            addToValidateBinaryDependency( '{$form_name}', "{$fields.ending_date.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}", "{$fields.ending_date.name}_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {ldelim}

           Calendar.setup({ldelim}
                     onClose: update_{$fields.ending_date.name},
                     inputField: "{$fields.ending_date.name}_date",
                     form: "EditView",
                     ifFormat: "{$CALENDAR_FORMAT}",
                     daFormat: "{$CALENDAR_FORMAT}",
                     button: "{$fields.ending_date.name}_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: {$CALENDAR_FDOW|default:'0'},
                     comboObject: combo_{$fields.ending_date.name}
    {rdelim} );

           //Call update for first time to round hours and minute values
           combo_{$fields.ending_date.name}.update( false );

    {rdelim} );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}delegation_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_DELEGATIONS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DELEGATIONS' module='Reservations'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="delegation_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.delegation_name.name}{/capture}
<input type="text" name="{$fields.delegation_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.delegation_name.name}" size="" value="{$fields.delegation_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.delegation_name.id_name}" 
id="{$fields.delegation_name.id_name}" 
value="{$fields.delegation_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.delegation_name.name}" id="btn_{$fields.delegation_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.delegation_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"delegation_id","name":"delegation_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.delegation_name.name}" id="btn_clr_{$fields.delegation_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.delegation_name.name}', '{$fields.delegation_name.id_name}' ); $( '#{$fields.delegation_name.name},#{$fields.delegation_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.delegation_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}parent_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_PARENT_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PARENT_NAME' module='Reservations'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="parent" field="parent_name"  >
{counter name="panelFieldCount" print=false}

<select name='parent_type' tabindex="0" id='parent_type' title='' class="vt_formulaSelector" {if $locked_field == "parent_type"}disabled{/if}         onchange='document.{$form_name}.{$fields.parent_name.name}.value = "";document.{$form_name}.parent_id.value = ""; changeParentQS( "{$fields.parent_name.name}" ); checkParentType( document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name} );'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value sortoptions=true}
</select>
{if $locked_field == "parent_type"}
<input type="hidden" name='parent_type' id='parent_type' value='{$fields.parent_type.value}' >
{/if}
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0"
size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off" {if $locked_field == "parent_type"}readonly{/if}
>
<input type="hidden" class="vt_formulaSelector" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  
{if $keepParent}value="{$fields.parent_id.value}"{/if}>
{if $locked_field != "parent_type"}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="0"	
title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup( document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true );' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{sugar_translate label=""}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = ''; $( '#{$fields.parent_name.name}' ).blur();" value="{sugar_translate label=""}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
{literal}
<script type="text/javascript">
            if ( typeof (changeParentQS) == 'undefined' ) {
               function changeParentQS( field ) {
                  if ( typeof sqs_objects == 'undefined' ) {
                     return;
                  }
                  field = YAHOO.util.Dom.get( field );
                  var form = field.form;
                  var sqsId = form.id + "_" + field.id;
                  var typeField = form.elements.parent_type;
                  var new_module = typeField.value;
                  //Update the SQS globals to reflect the new module choice
                  if ( typeof (QSFieldsArray[sqsId]) != 'undefined' )
                  {
                     QSFieldsArray[sqsId].sqs.modules = new Array( new_module );
                  }
                  if ( typeof QSProcessedFieldsArray != 'undefined' )
                  {
                     QSProcessedFieldsArray[sqsId] = false;
                  }
                  if ( sqs_objects[sqsId] == undefined ) {
                     return;
                  }
                  sqs_objects[sqsId]["modules"] = new Array( new_module );
                  if ( (typeof (disabledModules) != 'undefined' && typeof (disabledModules[new_module]) != 'undefined') || {/literal}"" == "readonly" || "{$locked_field}" == "parent_type" )        {literal} {
                     sqs_objects[sqsId]["disable"] = true;
                     field.readOnly = true;
                  } else {
                     sqs_objects[sqsId]["disable"] = false;
                     field.readOnly = false;
                  }
                  enableQS( false );
               }
            }
        </script>
<script>var disabledModules=[];</script>
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
<script>
            //change this in case it wasn't the default on editing existing items.
            $( document ).ready( function () {
               changeParentQS( "parent_name" )
            } );
        </script>
{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}assigned_user_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Reservations'}{/capture}
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



{capture name="field_name" assign="field_name"}employee_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_EMPLOYEE_NAME">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_NAME' module='Reservations'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="employee_name"  >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.employee_name.name}{/capture}
<input type="text" name="{$fields.employee_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.employee_name.name}" size="" value="{$fields.employee_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.employee_name.id_name}" 
id="{$fields.employee_name.id_name}" 
value="{$fields.employee_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.employee_name.name}" id="btn_{$fields.employee_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.employee_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"employee_id","full_name":"employee_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.employee_name.name}" id="btn_clr_{$fields.employee_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.employee_name.name}', '{$fields.employee_name.id_name}' ); $( '#{$fields.employee_name.name},#{$fields.employee_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.employee_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}description{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Reservations'}{/capture}
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Reservations'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Reservations", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'employee_id', 'relate', false,'{/literal}{sugar_translate label='LBL_EMPLOYEE_ID' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'employee_name', 'relate', true,'{/literal}{sugar_translate label='LBL_EMPLOYEE_NAME' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'starting_date_date', 'date', true,'Starting Date' );
addToValidateDateBefore('EditView', 'starting_date', 'datetimecombo', true,'{/literal}{sugar_translate label='LBL_STARTING_DATE' module='Reservations' for_js=true}{literal}', 'ending_date' );
addToValidate('EditView', 'ending_date_date', 'date', true,'Ending Date' );
addToValidate('EditView', 'resource_name', 'relate', true,'{/literal}{sugar_translate label='LBL_RESOURCES' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'resource_id', 'id', false,'{/literal}{sugar_translate label='LBL_RESOURCE_ID' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'delegation_name', 'relate', false,'{/literal}{sugar_translate label='LBL_DELEGATIONS' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'delegation_id', 'id', false,'{/literal}{sugar_translate label='LBL_DELEGATION_ID' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_PARENT_NAME' module='Reservations' for_js=true}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Reservations' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reservations' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Reservations' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'employee_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reservations' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_EMPLOYEE_NAME' module='Reservations' for_js=true}{literal}', 'employee_id' );
addToValidateBinaryDependency('EditView', 'resource_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reservations' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_RESOURCES' module='Reservations' for_js=true}{literal}', 'resource_id' );
addToValidateBinaryDependency('EditView', 'delegation_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reservations' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_DELEGATIONS' module='Reservations' for_js=true}{literal}', 'delegation_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_resource_name']={"form":"EditView","method":"query","modules":["Resources"],"group":"or","field_list":["name","id"],"populate_list":["resource_name","resource_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_delegation_name']={"form":"EditView","method":"query","modules":["Delegations"],"group":"or","field_list":["name","id"],"populate_list":["delegation_name","delegation_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_employee_name']={"form":"EditView","method":"query","modules":["Employees"],"group":"or","field_list":["full_name","id"],"populate_list":["employee_name","employee_id"],"required_list":["parent_id"],"conditions":[{"name":"full_name","op":"like_custom","end":"%","value":""}],"order":"full_name","limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
