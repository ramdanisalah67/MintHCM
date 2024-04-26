<?php /* Smarty version 2.6.31, created on 2024-04-25 12:00:59
         compiled from cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 54, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 114, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 208, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 298, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 1010, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 72, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 93, false),array('function', 'counter', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 120, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 183, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 211, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 978, false),array('function', 'sugar_number_format', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 1285, false),array('block', 'minify', 'cache/themes/SuiteP/modules/WorkSchedules/EditView.tpl', 112, false),)), $this); ?>


<script>
    <?php echo '
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($(\'.edit-view-pagination\').children().length == 0) $(\'.saveAndContinue\').remove();
    });
    '; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" id="module" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" id="record" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" id="record" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']): ?><?php echo $_REQUEST['return_relationship']; ?>
<?php elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['relate_to']; ?>
<?php elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['return_module']; ?>
<?php endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="current_user_is_admin" id="current_user_is_admin" value="<?php echo $this->_tpl_vars['CURRENT_USER_IS_ADMIN']; ?>
">   
<input type="hidden" name="redirected_from_calendar" id="redirected_from_calendar" value="<?php echo $this->_tpl_vars['REDIRECTED_FROM_CALENDAR']; ?>
">   
<input type="hidden" name="previous_diff_minutes" id="previous_diff_minutes" value="<?php echo $this->_tpl_vars['PREVIOUS_DIFF_MINUTES']; ?>
">   
<input type="hidden" name="return_module" id="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">   

<?php if (empty ( $_REQUEST['minthcm_popup'] )): ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=WorkSchedules'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=WorkSchedules", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
<?php endif; ?>

</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

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
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'WorkSchedules'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>assigned_user_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
data-validation="<?php echo 'AEM(isSuperior($assigned_user_id),\'LBL_WRONG_ASSIGNED_USER\')'; ?>
" >
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
",
600,
400,
"",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




<?php ob_start(); ?>type<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="type"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" 
title=''               
data-validation="<?php echo 'AEM(callCustomApi(WorkSchedules,canChangeTypeToWorkOff,{id:$id,type:$type}),\'LBL_ERR_CANT_CHANGE_TYPE_TO_WORK_OFF\')'; ?>
" >
<?php if (isset ( $this->_tpl_vars['fields']['type']['value'] ) && $this->_tpl_vars['fields']['type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['type']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['type']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['type']['value'] ) && $this->_tpl_vars['fields']['type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['type']['options'],'selected' => $this->_tpl_vars['fields']['type']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
                '; ?>


                                <?php echo '
                    (function (){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo '");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:\'\'};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use(\'datasource\', \'datasource-jsonschema\', function (Y) {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == \'\' && selectElem.options[i].innerHTML == \'\'))
                            ret.push({\'key\':selectElem.options[i].value, \'text\':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                '; ?>

                
                <?php echo '
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo '");
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
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
                    }

                    //global variable 
                    sync_'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo '");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo '", syncFromHiddenToWidget);
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
                    if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
                '; ?>

                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
                    <?php echo '
                        }
                    '; ?>

                        if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
                    '; ?>

                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
                        <?php echo '
                            }
                        '; ?>

                        
                            SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
                        <?php echo '
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        '; ?>

                                    minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
                                    queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
                                    zIndex: 99999,
                        
                        <?php echo '
                            source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,
                                    resultTextLocator: \'text\',
                                    resultHighlighter: \'phraseMatch\',
                                    resultFilters: \'phraseMatch\',
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
                            if (hover[0] != null){
                            if (ex) {
                            var h = \'1000px\';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = \'\';
                            }
                            }
                            }

                            if ('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'click\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'click\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'dblclick\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'dblclick\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'focus\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mouseup\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mouseup\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mousedown\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mousedown\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'blur\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = false;
                            var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
<?php echo '");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.ancestor().on(\'click\', function () {
                            if (SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'query\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.set(\'value\', \'\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'visibleChange\', function (e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'select\', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
'; ?>

<?php endif; ?>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>status<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''               
data-validation="<?php echo 'AEM(callCustomApi(WorkSchedules,canChangeWorkScheduleStatus,{id:$id,status:$status}),\'LBL_ERR_CANNOT_CHANGE_WORK_SCHEDULE_STATUS\')'; ?>
" >
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['status']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['status']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
                '; ?>


                                <?php echo '
                    (function (){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo '");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:\'\'};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use(\'datasource\', \'datasource-jsonschema\', function (Y) {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == \'\' && selectElem.options[i].innerHTML == \'\'))
                            ret.push({\'key\':selectElem.options[i].value, \'text\':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                '; ?>

                
                <?php echo '
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo '");
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
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
                    }

                    //global variable 
                    sync_'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo '");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo '", syncFromHiddenToWidget);
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
                    if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
                '; ?>

                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
                    <?php echo '
                        }
                    '; ?>

                        if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
                    '; ?>

                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
                        <?php echo '
                            }
                        '; ?>

                        
                            SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
                        <?php echo '
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        '; ?>

                                    minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
                                    queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
                                    zIndex: 99999,
                        
                        <?php echo '
                            source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,
                                    resultTextLocator: \'text\',
                                    resultHighlighter: \'phraseMatch\',
                                    resultFilters: \'phraseMatch\',
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
                            if (hover[0] != null){
                            if (ex) {
                            var h = \'1000px\';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = \'\';
                            }
                            }
                            }

                            if ('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'click\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'click\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'dblclick\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'dblclick\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'focus\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mouseup\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mouseup\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mousedown\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mousedown\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'blur\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = false;
                            var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
<?php echo '");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.ancestor().on(\'click\', function () {
                            if (SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'query\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.set(\'value\', \'\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'visibleChange\', function (e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'select\', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
'; ?>

<?php endif; ?>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>comments<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMMENTS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMMENTS','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="comments"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['comments']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comments']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comments']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['comments']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['comments']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''          
data-dependency="<?php echo 'inArray($type,\'occasional_leave\',\'excused_absence\')'; ?>
"                                         >
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>occasional_leave_type<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_OCCASIONAL_LEAVE_TYPE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OCCASIONAL_LEAVE_TYPE','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="occasional_leave_type"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
" 
title=''               
data-dependency="<?php echo 'equals($type,\'occasional_leave\')'; ?>
"                                         >
<?php if (isset ( $this->_tpl_vars['fields']['occasional_leave_type']['value'] ) && $this->_tpl_vars['fields']['occasional_leave_type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['occasional_leave_type']['options'],'selected' => $this->_tpl_vars['fields']['occasional_leave_type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['occasional_leave_type']['options'],'selected' => $this->_tpl_vars['fields']['occasional_leave_type']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['occasional_leave_type']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['occasional_leave_type']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['occasional_leave_type']['value'] ) && $this->_tpl_vars['fields']['occasional_leave_type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['occasional_leave_type']['options'],'selected' => $this->_tpl_vars['fields']['occasional_leave_type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['occasional_leave_type']['options'],'selected' => $this->_tpl_vars['fields']['occasional_leave_type']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
                '; ?>


                                <?php echo '
                    (function (){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo '");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:\'\'};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use(\'datasource\', \'datasource-jsonschema\', function (Y) {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == \'\' && selectElem.options[i].innerHTML == \'\'))
                            ret.push({\'key\':selectElem.options[i].value, \'text\':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                '; ?>

                
                <?php echo '
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo '");
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
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
                    }

                    //global variable 
                    sync_'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo '");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo '", syncFromHiddenToWidget);
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
                    if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
                '; ?>

                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
                    <?php echo '
                        }
                    '; ?>

                        if (SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
                    '; ?>

                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
                        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
                        <?php echo '
                            }
                        '; ?>

                        
                            SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
                        <?php echo '
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        '; ?>

                                    minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
                                    queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
                                    zIndex: 99999,
                        
                        <?php echo '
                            source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,
                                    resultTextLocator: \'text\',
                                    resultHighlighter: \'phraseMatch\',
                                    resultFilters: \'phraseMatch\',
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
                            if (hover[0] != null){
                            if (ex) {
                            var h = \'1000px\';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = \'\';
                            }
                            }
                            }

                            if ('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'click\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'click\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'dblclick\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'dblclick\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'focus\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mouseup\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mouseup\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mousedown\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mousedown\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function(e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'blur\');
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = false;
                            var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['occasional_leave_type']['name']; ?>
<?php echo '");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.ancestor().on(\'click\', function () {
                            if (SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'query\', function () {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.set(\'value\', \'\');
                            });
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'visibleChange\', function (e) {
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'select\', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
'; ?>

<?php endif; ?>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>date_start<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE_START">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_start"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update();" onchange="combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update();  viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
" 
>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
    
    var combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
 = new Datetimecombo( "<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_start']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '', false, true, '5' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.html( '' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
");
    addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" );
        addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" );
            addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {

           Calendar.setup({
                     onClose: update_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
,
                     inputField: "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_date",
                     form: "EditView",
                     ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     button: "<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
                     comboObject: combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>

    } );

           //Call update for first time to round hours and minute values
           combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.update( false );

    } );
</script>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>date_end<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE_END">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_end"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_end']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.update();" onchange="combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.update();  viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_end']['name']]['value']; ?>
" 
>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
    
    var combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
 = new Datetimecombo( "<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['date_end']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '', false, true, '5' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.html( '' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
");
    addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date" );
        addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date" );
            addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
", "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {

           Calendar.setup({
                     onClose: update_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
,
                     inputField: "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_date",
                     form: "EditView",
                     ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     button: "<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
                     comboObject: combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>

    } );

           //Call update for first time to round hours and minute values
           combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.update( false );

    } );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>duration_hours<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DURATION_HOURS">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="duration_hours"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/WorkSchedules/tpls/DurationFieldEditView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>delegation_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_DELEGATIONS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="delegation_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['delegation_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
data-dependency="<?php echo 'or(equals($type,\'delegation\'),equals($type,\'home\'))'; ?>
"                                         >
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['delegation_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['delegation_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['delegation_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['delegation_name']['module']; ?>
",
600,
400,
"",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"delegation_id","name":"delegation_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['delegation_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['delegation_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['delegation_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>workplace_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_RELATIONSHIP_WORKPLACE_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATIONSHIP_WORKPLACE_NAME','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="workplace_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['workplace_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
data-dependency="<?php echo 'equals($type,\'office\')'; ?>
"                                          data-validation="<?php echo 'AEM(callCustomApi(WorkSchedules,validateWorkplaceStatus,{id:$workplace_id}),\'LBL_ERR_STATUS_NOT_ACTIVE\');AEM(callCustomApi(WorkSchedules,validateWorkplaceAllocationPeriods,{workplace_id:$workplace_id,date_start:$date_start,date_end:$date_end}),\'LBL_ERR_WORKPLACE_NOT_ACTIVE\')'; ?>
" >
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['workplace_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['workplace_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['workplace_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['workplace_name']['module']; ?>
",
600,
400,
"&for_employee_id="+this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_id']['name']; ?>
.value+"&availability_advanced=active",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"workplace_id","name":"workplace_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['workplace_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['workplace_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['workplace_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?><?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>

</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>delegation_duration<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-2 label bold_required_field" data-label="LBL_DELEGATION_DURATION">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATION_DURATION','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="float" field="delegation_duration" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['delegation_duration']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['delegation_duration']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['delegation_duration']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['delegation_duration']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['delegation_duration']['name']; ?>
'
size='30'
maxlength='18'       value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value'],'precision' => 2), $this);?>
'
title=''
tabindex='0'
data-dependency="<?php echo 'equals($type,\'delegation\')'; ?>
"                                          data-validation="<?php echo 'AEM(ifElse(equals($type,\'delegation\'),callCustomApi(WorkSchedules,validateDelegationDurationValue,$delegation_duration),true),\'LBL_ERR_DELEGATION_DURATION_NOT_VALID\')'; ?>
"  >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




<?php ob_start(); ?>description<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'WorkSchedules'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' class="vt_formulaSelector" name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
           rows="6" 
           cols="80" 
           title='' tabindex="0" 
                                                              ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_TAB','module' => 'WorkSchedules'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_REPEAT_TAB">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>repeat_pane<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="repeat_pane" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/WorkSchedules/tpls/RepeatPanelEditView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->

<?php if (empty ( $_REQUEST['minthcm_popup'] )): ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=WorkSchedules'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=WorkSchedules", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>

<?php endif; ?>

</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script>
<?php echo '
<script type="text/javascript">

    var selectTab = function(tab) {
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
        $(\'#EditView_tabs div.panel-content div.panel\').hide();
        $(\'#EditView_tabs div.panel-content div.panel.tab-panel-\' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
        $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $(\'a[data-toggle="collapse-edit"]\').click(function(e){
            if($(this).hasClass(\'collapsed\')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass(\'collapsed\');
                // Expand .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass(\'collapsed\');
                // Collapse .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
            }
        });
    });

    </script>
'; ?>
<?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'name\', \'name\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_pane\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_PANE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_TYPE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_interval\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_INTERVAL','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_dow\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_DOW','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_until\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_UNTIL','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_count\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_COUNT','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_parent_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_PARENT_ID','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'lp\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LP','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'supervisor_acceptance\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUPERVISOR_ACCEPTANCE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'schedule_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SCHEDULE_DATE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_start_date\', \'date\', true,\'Start Time\' );
addToValidate(\'EditView\', \'date_end_date\', \'date\', true,\'End Time\' );
addToValidate(\'EditView\', \'duration_minutes\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_MINUTES','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'duration_hours\', \'int\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_HOURS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'spent_time\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SPENT_TIME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'spent_time_settlement\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SPENT_TIME_SETTLEMENT','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'delegation_duration\', \'float\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATION_DURATION','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comments\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMMENTS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'time_tracking_pane\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TIME_TRACKING_PANE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'occasional_leave_type\', \'enum\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OCCASIONAL_LEAVE_TYPE','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'delegation_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'delegation_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'workplace_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATIONSHIP_WORKPLACE_NAME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'workplace_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATIONSHIP_WORKPLACE_ID','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'delegation_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\', \'delegation_id\' );
addToValidateBinaryDependency(\'EditView\', \'workplace_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RELATIONSHIP_WORKPLACE_NAME','module' => 'WorkSchedules','for_js' => true), $this);?>
<?php echo '\', \'workplace_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_delegation_name\']={"form":"EditView","method":"query","modules":["Delegations"],"group":"or","field_list":["name","id"],"populate_list":["delegation_name","delegation_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_workplace_name\']={"form":"EditView","method":"query","modules":["Workplaces"],"group":"or","field_list":["name","id"],"populate_list":["workplace_name","workplace_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>'; ?>
