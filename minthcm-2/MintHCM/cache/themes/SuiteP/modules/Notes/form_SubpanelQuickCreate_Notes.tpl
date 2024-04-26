

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Notes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Notes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Notes_subpanel_save_button');return false;" type="submit" name="Notes_subpanel_save_button" id="Notes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Notes_subpanel_cancel_button" id="Notes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Notes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Notes_subpanel_full_form_button" id="Notes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='DEFAULT' module='Notes'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}parent_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_RELATED_TO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_RELATED_TO' module='Notes'}{/capture}
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
onclick='open_popup( document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Notes","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true );' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{sugar_translate label=""}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = ''; $( '#{$fields.parent_name.name}' ).blur();" value="{sugar_translate label=""}" ><span class="suitepicon suitepicon-action-clear"></span></button>
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
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Notes_parent_name']={"form":"form_SubpanelQuickCreate_Notes","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
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



{capture name="field_name" assign="field_name"}{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>

</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_NOTE_SUBJECT">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Notes'}{/capture}
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
id='{$fields.name.name}' size='50' 
maxlength='255' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}assigned_user_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes'}{/capture}
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
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"form_SubpanelQuickCreate_Notes","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal},
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
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}filename{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_FILENAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_FILENAME' module='Notes'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="file" field="filename" colspan='3' >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=on6SqL3ujgyELJb3ExF4GQ'></script>
{if !empty($fields.filename.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input class="vt_formulaSelector vt_File" type="hidden" name="{$fields.filename.name}" id="{$fields.filename.name}" value="{$fields.filename.value}"
>
<span id="{$fields.filename.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink">{$fields.filename.value}</a>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment( "{$fields.filename.name}", "", this );'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.filename.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.filename.name}_escaped">
<input id="{$fields.filename.name}_file" name="{$fields.filename.name}_file" 
type="file" title='' size="30"
maxlength='255'
>
{else}

{/if}
</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}description{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE_STATUS' module='Notes'}{/capture}
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
           cols="75" 
           title='' tabindex="0" 
                                                              >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Notes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Notes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Notes_subpanel_save_button');return false;" type="submit" name="Notes_subpanel_save_button" id="Notes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Notes_subpanel_cancel_button" id="Notes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Notes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Notes_subpanel_full_form_button" id="Notes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>

{/if}

</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
{sugar_getscript file="include/javascript/dashlets.js"}
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Notes",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Notes) {rdelim});
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
addForm('form_SubpanelQuickCreate_Notes');addToValidate('form_SubpanelQuickCreate_Notes', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Notes', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Notes', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_MIME_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'filename', 'file', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'filecontents', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_CONTENTS' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'portal_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'embed_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_EMBED_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_RELATED_TO' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'acase_id', 'id', false,'{/literal}{sugar_translate label='LBL_CASE_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Notes' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Notes', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Notes_parent_name']={"form":"form_SubpanelQuickCreate_Notes","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Notes_assigned_user_name']={"form":"form_SubpanelQuickCreate_Notes","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
