<?php /* Smarty version 2.6.31, created on 2024-04-24 16:30:14
         compiled from cache/themes/SuiteP/modules/Meetings/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 54, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 122, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 196, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 298, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 739, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 78, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 99, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 129, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 171, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 199, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 707, false),array('function', 'sugar_getscript', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 1211, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Meetings/EditView.tpl', 120, false),)), $this); ?>



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
<input type="hidden" name="isSaveAndNew" value="false">   
<input type="hidden" name="candidate_invitees">   
<input type="hidden" name="resource_invitees">   

<?php if (empty ( $_REQUEST['minthcm_popup'] )): ?>

<div class="buttons">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" id="SAVE_HEADER" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="SUGAR.meetings.fill_invitees();document.EditView.action.value='Save'; document.EditView.return_action.value='DetailView'; <?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>document.EditView.return_id.value=''; <?php endif; ?> formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"/>
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Meetings'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_TITLE']; ?>
" id="save_and_send_invites_header" class="button" onclick="document.EditView.send_invites.value='1';SUGAR.meetings.fill_invitees();document.EditView.action.value='Save';document.EditView.return_action.value='EditView';document.EditView.return_module.value='<?php echo $_REQUEST['return_module']; ?>
'; formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_LABEL']; ?>
"/>
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Held'): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
" id="close_and_create_new_header" class="button" onclick="SUGAR.meetings.fill_invitees(); document.EditView.status.value='Held'; document.EditView.action.value='Save'; document.EditView.return_module.value='Meetings'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value='EditView'; document.EditView.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Meetings", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<input type="hidden" name="send_invites">
<input type="hidden" name="user_invitees">
<input type="hidden" name="contact_invitees">
<input type="hidden" name="lead_invitees">
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MEETING_INFORMATION','module' => 'Meetings'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_MEETING_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SUBJECT">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''          
>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>status<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="ColoredActivityStatus" field="status"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
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
');sync_<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
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
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
				SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
				    			ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		'; ?>

	
	<?php echo '
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
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
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
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
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');

				SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input<?php echo '\'))
						SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
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
		if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
			'; ?>

			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
			<?php echo '
		}
		'; ?>

		if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
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
		if(hover[0] != null){
			if (ex) {
				var h = \'1000px\';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = \'\';
			}
		}
	}
		
	if('; ?>
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
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.'; ?>
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

<?php endif; ?>&nbsp;
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>type<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_TYPE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="type" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['type']['name']; ?>
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
<div class="clear"></div>




<?php ob_start(); ?>date_start<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE','module' => 'Meetings'), $this);?>
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
.update(); SugarWidgetScheduler.update_time(); viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
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
", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.html( 'SugarWidgetScheduler.update_time();' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['date_start']['name']; ?>
.jsscript( 'SugarWidgetScheduler.update_time();' ) );

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



<?php ob_start(); ?>parent_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_LIST_RELATED_TO">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="parent" field="parent_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name='parent_type' tabindex="0" id='parent_type' title='' class="vt_formulaSelector" <?php if ($this->_tpl_vars['locked_field'] == 'parent_type'): ?>disabled<?php endif; ?>         onchange='document.<?php echo $this->_tpl_vars['form_name']; ?>
.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value = "";document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_id.value = ""; changeParentQS( "<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" ); checkParentType( document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, document.<?php echo $this->_tpl_vars['form_name']; ?>
.btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
 );'>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['parent_name']['options'],'selected' => $this->_tpl_vars['fields']['parent_type']['value'],'sortoptions' => true), $this);?>

</select>
<?php if ($this->_tpl_vars['locked_field'] == 'parent_type'): ?>
<input type="hidden" name='parent_type' id='parent_type' value='<?php echo $this->_tpl_vars['fields']['parent_type']['value']; ?>
' >
<?php endif; ?>
<?php if (empty ( $this->_tpl_vars['fields']['parent_name']['options'][$this->_tpl_vars['fields']['parent_type']['value']] )): ?>
<?php $this->assign('keepParent', 0); ?>
<?php else: ?>
<?php $this->assign('keepParent', 1); ?>
<?php endif; ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0"
size="" <?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_name']['value']; ?>
"<?php endif; ?> autocomplete="off" <?php if ($this->_tpl_vars['locked_field'] == 'parent_type'): ?>readonly<?php endif; ?>
>
<input type="hidden" class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
"  
<?php if ($this->_tpl_vars['keepParent']): ?>value="<?php echo $this->_tpl_vars['fields']['parent_id']['value']; ?>
"<?php endif; ?>>
<?php if ($this->_tpl_vars['locked_field'] != 'parent_type'): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="0"	
title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup( document.<?php echo $this->_tpl_vars['form_name']; ?>
.parent_type.value, 600, 400, "", true, false, <?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}'; ?>
, "single", true );' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => ""), $this);?>
" class="button lastChild" onclick="this.form.<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['parent_id']['name']; ?>
.value = ''; $( '#<?php echo $this->_tpl_vars['fields']['parent_name']['name']; ?>
' ).blur();" value="<?php echo smarty_function_sugar_translate(array('label' => ""), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<?php echo '
<script type="text/javascript">
            if ( typeof (changeParentQS) == \'undefined\' ) {
               function changeParentQS( field ) {
                  if ( typeof sqs_objects == \'undefined\' ) {
                     return;
                  }
                  field = YAHOO.util.Dom.get( field );
                  var form = field.form;
                  var sqsId = form.id + "_" + field.id;
                  var typeField = form.elements.parent_type;
                  var new_module = typeField.value;
                  //Update the SQS globals to reflect the new module choice
                  if ( typeof (QSFieldsArray[sqsId]) != \'undefined\' )
                  {
                     QSFieldsArray[sqsId].sqs.modules = new Array( new_module );
                  }
                  if ( typeof QSProcessedFieldsArray != \'undefined\' )
                  {
                     QSProcessedFieldsArray[sqsId] = false;
                  }
                  if ( sqs_objects[sqsId] == undefined ) {
                     return;
                  }
                  sqs_objects[sqsId]["modules"] = new Array( new_module );
                  if ( (typeof (disabledModules) != \'undefined\' && typeof (disabledModules[new_module]) != \'undefined\') || '; ?>
"" == "readonly" || "<?php echo $this->_tpl_vars['locked_field']; ?>
" == "parent_type" )        <?php echo ' {
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
<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_parent_name\']={"form":"EditView","method":"query","modules":["'; ?>
<?php if (! empty ( $this->_tpl_vars['fields']['parent_type']['value'] )): ?><?php echo $this->_tpl_vars['fields']['parent_type']['value']; ?>
<?php else: ?>Accounts<?php endif; ?><?php echo '"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
<script>
            //change this in case it wasn\'t the default on editing existing items.
            $( document ).ready( function () {
               changeParentQS( "parent_name" )
            } );
        </script>
'; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>date_end<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE_END">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Meetings'), $this);?>
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
.update(); SugarWidgetScheduler.update_time(); viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
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
", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.html( 'SugarWidgetScheduler.update_time();' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['date_end']['name']; ?>
.jsscript( 'SugarWidgetScheduler.update_time();' ) );

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



<?php ob_start(); ?>location<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_LOCATION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LOCATION','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="location"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['location']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['location']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['location']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['location']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['location']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>duration<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DURATION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="duration" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select class="vt_formulaSelector" name="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
" 
title=''               
>
<?php if (isset ( $this->_tpl_vars['fields']['duration']['value'] ) && $this->_tpl_vars['fields']['duration']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['duration']['options'],'selected' => $this->_tpl_vars['fields']['duration']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['duration']['options'],'selected' => $this->_tpl_vars['fields']['duration']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['duration']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['duration']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
" 
title=''                      
>
<?php if (isset ( $this->_tpl_vars['fields']['duration']['value'] ) && $this->_tpl_vars['fields']['duration']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['duration']['options'],'selected' => $this->_tpl_vars['fields']['duration']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['duration']['options'],'selected' => $this->_tpl_vars['fields']['duration']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
'); sync_<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-image');
                    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
');
                                <?php echo '
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
<?php echo ' = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
-input<?php echo '\'))
                                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['duration']['name']; ?>
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
<input tabindex="0"  id="duration_hours" name="duration_hours" type="hidden" value="<?php echo $this->_tpl_vars['fields']['duration_hours']['value']; ?>
">
<input tabindex="0"  id="duration_minutes" name="duration_minutes" type="hidden" value="<?php echo $this->_tpl_vars['fields']['duration_minutes']['value']; ?>
">
<?php echo smarty_function_sugar_getscript(array('file' => "modules/Meetings/duration_dependency.js"), $this);?>

<script type="text/javascript">
   var date_time_format = "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
";
   <?php echo '
   SUGAR.util.doWhen(function(){return typeof DurationDependency != "undefined" && typeof document.getElementById("duration") != "undefined"}, function(){
      var duration_dependency = new DurationDependency("date_start","date_end","duration",date_time_format);
      initEditView(YAHOO.util.Selector.query(\'select#duration\')[0].form);
   });
   '; ?>

</script>            
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




<?php ob_start(); ?>reminders<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_REMINDERS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDERS','module' => 'Meetings'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="reminders" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Reminders/tpls/reminders.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




<?php ob_start(); ?>description<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Meetings'), $this);?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_TAB','module' => 'Meetings'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_REPEAT_TAB">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>repeat_type<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="repeat_type" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Meetings/tpls/RepeatPanelEditView.tpl", 'smarty_include_vars' => array()));
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




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Meetings'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_PANEL_ASSIGNMENT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>assigned_user_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Meetings'), $this);?>
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
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<div class="h3Row" id="scheduler"></div>
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
<div class="buttons">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" id="SAVE_HEADER" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="SUGAR.meetings.fill_invitees();document.EditView.action.value='Save'; document.EditView.return_action.value='DetailView'; <?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>document.EditView.return_id.value=''; <?php endif; ?> formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"/>
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Meetings'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_TITLE']; ?>
" id="save_and_send_invites_header" class="button" onclick="document.EditView.send_invites.value='1';SUGAR.meetings.fill_invitees();document.EditView.action.value='Save';document.EditView.return_action.value='EditView';document.EditView.return_module.value='<?php echo $_REQUEST['return_module']; ?>
'; formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_SEND_BUTTON_LABEL']; ?>
"/>
<?php if ($this->_tpl_vars['fields']['status']['value'] != 'Held'): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_TITLE']; ?>
" id="close_and_create_new_header" class="button" onclick="SUGAR.meetings.fill_invitees(); document.EditView.status.value='Held'; document.EditView.action.value='Save'; document.EditView.return_module.value='Meetings'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value='EditView'; document.EditView.return_id.value='<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; formSubmitCheck();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CLOSE_AND_CREATE_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Meetings", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript"><?php echo $this->_tpl_vars['JSON_CONFIG_JAVASCRIPT']; ?>
</script>
<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_jsolait.js"), $this);?>

<script>toggle_portal_flag();function toggle_portal_flag()  { <?php echo $this->_tpl_vars['TOGGLE_JS']; ?>
 } 
function formSubmitCheck(){if(check_form('EditView')){document.EditView.submit();}}</script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
            function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/popup_helper.js'), $this);?>
'></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui2.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'cache/include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript">
    <?php echo '
    SUGAR.meetings = {};
    var meetingsLoader = new YAHOO.util.YUILoader({
        require : ["sugar_grp_jsolait"],
        // Bug #48940 Skin always must be blank
        skin: {
            base: \'blank\',
            defaultSkin: \'\'
        },
        onSuccess: function(){
            SUGAR.meetings.fill_invitees = function() {
                if (typeof(GLOBAL_REGISTRY) != \'undefined\')  {
                    SugarWidgetScheduler.fill_invitees(document.EditView);
                }
            }
            var root_div = document.getElementById(\'scheduler\');
            var sugarContainer_instance = new SugarContainer(document.getElementById(\'scheduler\'));
            sugarContainer_instance.start(SugarWidgetScheduler);
            if ( document.getElementById(\'save_and_continue\') ) {
                var oldclick = document.getElementById(\'save_and_continue\').attributes[\'onclick\'].nodeValue;
                document.getElementById(\'save_and_continue\').onclick = function(){
                    SUGAR.meetings.fill_invitees();
                    eval(oldclick);
                }
            }
        }
    });
    meetingsLoader.addModule({
        name :"sugar_grp_jsolait",
        type : "js",
        fullpath: "cache/include/javascript/sugar_grp_jsolait.js",
        varName: "global_rpcClient",
        requires: []
    });
    meetingsLoader.insert();
    YAHOO.util.Event.onContentReady("'; ?>
EditView<?php echo '",function() {
        var durationHours = document.getElementById(\'duration_hours\');
        if (durationHours) {
            document.getElementById(\'duration_minutes\').tabIndex = durationHours.tabIndex;
        }

        var reminderChecked = document.getElementsByName(\'reminder_checked\');
        for(i=0;i<reminderChecked.length;i++) {
            if (reminderChecked[i].type == \'checkbox\' && document.getElementById(\'reminder_list\')) {
                YAHOO.util.Dom.getFirstChild(\'reminder_list\').tabIndex = reminderChecked[i].tabIndex;
            }
        }
    });
    '; ?>

</script>
</form>
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBJECT','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'accept_status\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCEPT_STATUS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'set_accept_links\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCEPT_LINK','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'location\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LOCATION','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'password\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PASSWORD','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'join_url\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_URL','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'host_url\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOST_URL','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'displayed_url\', \'url\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISPLAYED_URL','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'creator\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATOR','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'external_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EXTERNALID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'duration_hours\', \'int\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_HOURS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'duration_minutes\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION_MINUTES','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_start_date\', \'date\', true,\'Start Date\' );
addToValidateDateBefore(\'EditView\', \'date_start\', \'datetimecombo\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\', \'date_end\' );
addToValidate(\'EditView\', \'date_end_date\', \'date\', true,\'End Date\' );
addToValidate(\'EditView\', \'parent_type\', \'parent_type\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_TYPE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status\', \'ColoredActivityStatus\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'direction\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DIRECTION','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'parent_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_ID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'reminder_checked\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'reminder_time\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDER_TIME','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email_reminder_checked\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_REMINDER','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email_reminder_time\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_REMINDER_TIME','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email_reminder_sent\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_REMINDER_SENT','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'reminders\', \'function\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMINDERS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'outlook_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OUTLOOK_ID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'sequence\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SEQUENCE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'parent_name\', \'parent\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_RELATED_TO','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_TYPE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_interval\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_INTERVAL','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_dow\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_DOW','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_until\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_UNTIL','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_count\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_COUNT','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_parent_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_PARENT_ID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'recurring_source\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECURRING_SOURCE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'duration\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DURATION','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'gsync_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_GSYNC_ID','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'gsync_lastsync\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_GSYNC_LASTSYNC','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'type\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'repeat_pane\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPEAT_PANE','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_address_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_ADDRESS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_geocode_status_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lat_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LAT','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lng_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LNG','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Meetings','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Meetings','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_parent_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>'; ?>
