<?php /* Smarty version 2.6.31, created on 2024-04-24 15:45:35
         compiled from cache/themes/SuiteP/modules/Recruitments/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 50, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 112, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 137, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 247, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 337, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 68, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 89, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 119, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 222, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 250, false),array('function', 'sugar_number_format', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 558, false),array('function', 'multienum_to_array', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 742, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Recruitments/EditView.tpl', 110, false),)), $this); ?>


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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Recruitments'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
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
&module_name=Recruitments", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Recruitments'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>start_date<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_START_DATE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_START_DATE','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="start_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['start_date']['value']); ?>
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
' ) );"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({
           inputField: "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
",
           form: "EditView",
           ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           button: "<?php echo $this->_tpl_vars['fields']['start_date']['name']; ?>
_trigger",
           singleClick: true,
           dateStr: "<?php echo $this->_tpl_vars['date_value']; ?>
",
           startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
           step: 1,
           weekNumbers: false
    }
        );
</script>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>end_date<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_END_DATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_END_DATE','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="end_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['end_date']['value']); ?>
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
' ) );"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({
           inputField: "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
",
           form: "EditView",
           ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           button: "<?php echo $this->_tpl_vars['fields']['end_date']['name']; ?>
_trigger",
           singleClick: true,
           dateStr: "<?php echo $this->_tpl_vars['date_value']; ?>
",
           startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
           step: 1,
           weekNumbers: false
    }
        );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>project_status<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROJECT_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROJECT_STATUS','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="project_status"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
" 
title=''               
>
<?php if (isset ( $this->_tpl_vars['fields']['project_status']['value'] ) && $this->_tpl_vars['fields']['project_status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['project_status']['options'],'selected' => $this->_tpl_vars['fields']['project_status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['project_status']['options'],'selected' => $this->_tpl_vars['fields']['project_status']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['project_status']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['project_status']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['project_status']['value'] ) && $this->_tpl_vars['fields']['project_status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['project_status']['options'],'selected' => $this->_tpl_vars['fields']['project_status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['project_status']['options'],'selected' => $this->_tpl_vars['fields']['project_status']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['project_status']['name']; ?>
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



<?php ob_start(); ?>position_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="position_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['position_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
>
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['position_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['position_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['position_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['position_name']['module']; ?>
",
600,
400,
"",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"position_id","name":"position_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['position_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['position_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['position_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>currency_id<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_CURRENCY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="id" field="currency_id" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='currency_id_span'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




<?php ob_start(); ?>salary_from<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SALARY_FROM">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_FROM','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="salary_from"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['salary_from']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['salary_from']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['salary_from']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['salary_from']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['salary_from']['name']; ?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>salary_to<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SALARY_TO">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_TO','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="salary_to"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['salary_to']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['salary_to']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['salary_to']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['salary_to']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['salary_to']['name']; ?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>description<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Recruitments'), $this);?>
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




<?php ob_start(); ?>vacancy<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_VACANCY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VACANCY','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="vacancy"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['vacancy']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['vacancy']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['vacancy']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['vacancy']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['vacancy']['name']; ?>
' size='30'  value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'          data-dependency="<?php echo 'not(equals($recruitment_type,\'continuous\'))'; ?>
"                                         >
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>start_work_date<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_START_WORK_DATE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_START_WORK_DATE','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="start_work_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['start_work_date']['value']); ?>
<input class="date_input vt_formulaSelector" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'  
size="11" maxlength="10" onchange="viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
' ) );"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
    Calendar.setup({
           inputField: "<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
",
           form: "EditView",
           ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
           button: "<?php echo $this->_tpl_vars['fields']['start_work_date']['name']; ?>
_trigger",
           singleClick: true,
           dateStr: "<?php echo $this->_tpl_vars['date_value']; ?>
",
           startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
           step: 1,
           weekNumbers: false
    }
        );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>recruitment_channels<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_RECRUITMENT_CHANNELS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENT_CHANNELS','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="multienum" field="recruitment_channels"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
_multiselect"
name="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
_multiselect" value="true" >
<?php echo smarty_function_multienum_to_array(array('string' => $this->_tpl_vars['fields']['recruitment_channels']['value'],'default' => $this->_tpl_vars['fields']['recruitment_channels']['default'],'assign' => 'values'), $this);?>

<select  class="vt_formulaSelector" id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
"
name="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
[]"
multiple="true" size='6' style="width:150" title='' tabindex="0"  
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_channels']['options'],'selected' => $this->_tpl_vars['values']), $this);?>

</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['recruitment_channels']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['recruitment_channels']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<input type="hidden" id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
_multiselect"
name="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
_multiselect" value="true">
<?php echo smarty_function_multienum_to_array(array('string' => $this->_tpl_vars['fields']['recruitment_channels']['value'],'default' => $this->_tpl_vars['fields']['recruitment_channels']['default'],'assign' => 'values'), $this);?>

<select style='display:none' id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
"
name="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
[]"
multiple="true" size='6' style="width:150" title='' tabindex="0"  
>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_channels']['options'],'selected' => $this->_tpl_vars['values']), $this);?>

</select>
<input
id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input"
size="60"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button">
<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-image">
</button>
<button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
;'); SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode.updateHidden()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
                '; ?>


                                <?php echo '
                    YUI().use(\'datasource\', \'datasource-jsonschema\', function (Y) {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
<?php echo '");
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == \'\' && selectElem.options[i].innerHTML == \'\'))
                            ret.push({\'key\':selectElem.options[i].value, \'text\':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                '; ?>

                
                <?php echo '
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node-event-simulate", function (Y) {
                '; ?>


                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
');
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

                        
                                                <?php echo '
                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                                    allowTrailingDelimiter: true,
                        '; ?>

                                    minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
                                    queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
                                    queryDelimiter: ',',
                                    zIndex: 99999,
                                                <?php echo '
                            source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,
                                    resultTextLocator: \'text\',
                                    resultHighlighter: \'phraseMatch\',
                                    resultFilters: \'phraseMatch\',
                                    // Chain together a startsWith filter followed by a custom result filter
                                    // that only displays tags that haven\'t already been selected.
                                    resultFilters: [\'phraseMatch\', function (query, results) {
                                    // Split the current input value into an array based on comma delimiters.
                                    var selected = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\').split(/\\s*,\\s*/);
                                    // Convert the array into a hash for faster lookups.
                                    selected = Y.Array.hash(selected);
                                    // Filter out any results that are already selected, then return the
                                    // array of filtered results.
                                    return Y.Array.filter(results, function (result) {
                                    return !selected.hasOwnProperty(result.text);
                                    });
                                    }]
                            });
                        '; ?>
<?php echo '
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
                                });
                                }

                                                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateHidden = function() {
                                var index_array = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\').split(/\\s*,\\s*/);
                                var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
<?php echo '");
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
                                if (n == \'\')
                                        continue;
                                if (!oTable.hasOwnProperty(n))
                                        fireEvent = true; //the options are different, fire the event
                                }

                                for (o in oTable){
                                if (o == \'\')
                                        continue;
                                if (!nTable.hasOwnProperty(o))
                                        fireEvent = true; //the options are different, fire the event
                                }

                                //if the selected options are different from before, fire the \'change\' event
                                if (fireEvent){
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
                                }
                                };
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateText = function() {
                                //get last option typed into the input widget
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.set(SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'));
                                var index_array = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\').split(/\\s*,\\s*/);
                                //create a string ret_string as a comma-delimited list of text from selectElem options.
                                var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
<?php echo '");
                                var ret_array = [];
                                if (selectElem == null || selectElem.options == null)
                                        return;
                                for (i = 0; i < selectElem.options.length; i++){
                                if (selectElem.options[i].selected && selectElem.options[i].innerHTML != \'\'){
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
                                ret_string = ret_array.concat(sorted_array).join(\', \');
                                if (ret_string.match(/^\\s*$/))
                                        ret_string = \'\';
                                else
                                        ret_string += \', \';
                                //update the input widget
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.set(\'value\', ret_string);
                                };
                                function updateTextOnInterval(){
                                if (document.activeElement != document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_channels']['name']; ?>
-input<?php echo '"))
                                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateText();
                                    setTimeout(updateTextOnInterval, 100);
                                    }

                                    updateTextOnInterval();
                                    
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
                                    });
                                    
                                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function () {
                                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateHidden();
                                            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateText();
                                            });
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.on(\'click\', function () {
                                    if ('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.show();
                                    }
                                    else{
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
                                    }
                                    });
                                    if ('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
                                    // After a tag is selected, send an empty query to update the list of tags.
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.after(\'select\', function () {
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.show();
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateHidden();
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateText();
                                    });
                                    } else {
                                    // After a tag is selected, send an empty query to update the list of tags.
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.after(\'select\', function () {
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateHidden();
                                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.updateText();
                                    });
                                    }
                                    });
                                </script>
'; ?>

<?php endif; ?>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>recruitment_type<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RECRUITMENT_TYPE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENT_TYPE','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="recruitment_type"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
" 
title=''               
>
<?php if (isset ( $this->_tpl_vars['fields']['recruitment_type']['value'] ) && $this->_tpl_vars['fields']['recruitment_type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_type']['options'],'selected' => $this->_tpl_vars['fields']['recruitment_type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_type']['options'],'selected' => $this->_tpl_vars['fields']['recruitment_type']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['recruitment_type']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['recruitment_type']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['recruitment_type']['value'] ) && $this->_tpl_vars['fields']['recruitment_type']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_type']['options'],'selected' => $this->_tpl_vars['fields']['recruitment_type']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['recruitment_type']['options'],'selected' => $this->_tpl_vars['fields']['recruitment_type']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['recruitment_type']['name']; ?>
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
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_MORE_INFORMATION','module' => 'Recruitments'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_SHOW_MORE_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>assigned_user_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Recruitments'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
>
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



<?php ob_start(); ?><?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>

</div>
<div class="clear"></div>
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Recruitments'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
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
&module_name=Recruitments", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
addForm(\'EditView\');addToValidate(\'EditView\', \'name\', \'name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'end_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_END_DATE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'announcement\', \'url\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ANNOUNCEMENT','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'project_status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROJECT_STATUS','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'start_date\', \'date\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_START_DATE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'start_work_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_START_WORK_DATE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'vacancy\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VACANCY','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'employees_number\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEES_NUMBER','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'position_name\', \'relate\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'position_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENTS_POSITIONS_FROM_RECRUITMENTS_TITLE_ID','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'version\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VERSION','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'recruitment_channels[]\', \'multienum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENT_CHANNELS','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'recruitment_type\', \'enum\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENT_TYPE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'salary_from\', \'currency\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_FROM','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'salary_from_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_FROM_USDOLLAR','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'salary_to\', \'currency\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_TO','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'salary_to_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALARY_TO_USDOLLAR','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'currency_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_NAME','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'currency_symbol\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_SYMBOL','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'position_name\', \'alpha\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECRUITMENTS_POSITIONS_FROM_POSITIONS_TITLE','module' => 'Recruitments','for_js' => true), $this);?>
<?php echo '\', \'position_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_position_name\']={"form":"EditView","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_name","position_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>'; ?>
