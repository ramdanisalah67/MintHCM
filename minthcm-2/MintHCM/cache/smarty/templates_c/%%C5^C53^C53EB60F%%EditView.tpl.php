<?php /* Smarty version 2.6.31, created on 2024-04-24 16:45:36
         compiled from cache/themes/SuiteP/modules/Reservations/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 50, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 107, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 199, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 68, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 76, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 114, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 167, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 430, false),array('function', 'sugar_getscript', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 693, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Reservations/EditView.tpl', 105, false),)), $this); ?>


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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Reservations'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
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
&module_name=Reservations", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Reservations'), $this);?>

</a>


<!-- Counting Tabs 0-->
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Reservations'), $this);?>

</a>
</li>
</ul>
<div class="clearfix"></div>
<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




<?php ob_start(); ?>name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_NAME">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Reservations'), $this);?>
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



<?php ob_start(); ?>starting_date<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_STARTING_DATE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STARTING_DATE','module' => 'Reservations'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="starting_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['starting_date']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
.update();" onchange="combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
.update();  viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['starting_date']['name']]['value']; ?>
" 
>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
    
    var combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
 = new Datetimecombo( "<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['starting_date']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
.html( '' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
");
    addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
", "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date" );
        addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
", "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date" );
            addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
", "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {

           Calendar.setup({
                     onClose: update_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
,
                     inputField: "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_date",
                     form: "EditView",
                     ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     button: "<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
                     comboObject: combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>

    } );

           //Call update for first time to round hours and minute values
           combo_<?php echo $this->_tpl_vars['fields']['starting_date']['name']; ?>
.update( false );

    } );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>resource_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_RESOURCES">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOURCES','module' => 'Reservations'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="resource_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['resource_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
data-validation="<?php echo 'AEM(callCustomApi(Resources,isReservable,{resource_id:$resource_id}),\'LBL_RESOURCE_NOT_FOR_RESERVATION_VALIDATION\')'; ?>
" >
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['resource_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['resource_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['resource_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['resource_name']['module']; ?>
",
600,
400,
"&unavailable_advanced=0",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"resource_id","name":"resource_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['resource_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['resource_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['resource_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>



<?php ob_start(); ?>ending_date<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_ENDING_DATE">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENDING_DATE','module' => 'Reservations'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="ending_date"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['ending_date']['name']]['value']; ?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
.update();" onchange="combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
.update();  viewTools.form.blur( $( '#<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['ending_date']['name']]['value']; ?>
" 
>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
"></script>
<script type="text/javascript">
    
    var combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
 = new Datetimecombo( "<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['fields']['ending_date']['name']]['value']; ?>
", "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
.html( '' );
    document.getElementById( '<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
.jsscript( '' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $this->_tpl_vars['form_name']; ?>
',"<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
");
    addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
", "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date" );
        addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
", "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date" );
            addToValidateBinaryDependency( '<?php echo $this->_tpl_vars['form_name']; ?>
', "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
", "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {

           Calendar.setup({
                     onClose: update_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
,
                     inputField: "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_date",
                     form: "EditView",
                     ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                     button: "<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
                     comboObject: combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>

    } );

           //Call update for first time to round hours and minute values
           combo_<?php echo $this->_tpl_vars['fields']['ending_date']['name']; ?>
.update( false );

    } );
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>delegation_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_DELEGATIONS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'Reservations'), $this);?>
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
>
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



<?php ob_start(); ?>parent_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_PARENT_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_NAME','module' => 'Reservations'), $this);?>
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




<?php ob_start(); ?>assigned_user_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Reservations'), $this);?>
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



<?php ob_start(); ?>employee_name<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-6 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_EMPLOYEE_NAME">


<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_NAME','module' => 'Reservations'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="employee_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<input type="text" name="<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" class="vt_formulaSelector sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['employee_name']['value']; ?>
" title='' autocomplete="off"  <?php if ($this->_tpl_vars['idname'] == $this->_tpl_vars['locked_field']): ?>readonly<?php endif; ?> 	 
>
<input class="vt_formulaSelector" type="hidden" name="<?php echo $this->_tpl_vars['fields']['employee_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['employee_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['employee_id']['value']; ?>
">
<?php if ($this->_tpl_vars['idname'] != $this->_tpl_vars['locked_field']): ?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['employee_name']['module']; ?>
",
600,
400,
"",
true,
false,
<?php echo '{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"employee_id","full_name":"employee_name"}}'; ?>
,
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['employee_name']['id_name']; ?>
' ); $( '#<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
,#<?php echo $this->_tpl_vars['fields']['employee_name']['id_name']; ?>
' ).blur();"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php endif; ?>
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['employee_name']['name']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




<?php ob_start(); ?>description<?php $this->_smarty_vars['capture']['field_name'] = ob_get_contents();  $this->assign('field_name', ob_get_contents());ob_end_clean(); ?>
<div class="col-xs-12 col-sm-12 edit-view-row-item" <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['field_name']]['acl'] == 0): ?>style="display: none;"<?php endif; ?>>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Reservations'), $this);?>
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
</div>            </div>
</div>

<div class="panel-content">
<div>&nbsp;</div>


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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Reservations'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
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
&module_name=Reservations", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>

<?php endif; ?>

</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_yui_widgets.js"), $this);?>

<script type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");
EditView_tabs.selectTab(0);
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'employee_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_ID','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'employee_name\', \'relate\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'starting_date_date\', \'date\', true,\'Starting Date\' );
addToValidateDateBefore(\'EditView\', \'starting_date\', \'datetimecombo\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STARTING_DATE','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\', \'ending_date\' );
addToValidate(\'EditView\', \'ending_date_date\', \'date\', true,\'Ending Date\' );
addToValidate(\'EditView\', \'resource_name\', \'relate\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOURCES','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'resource_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOURCE_ID','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'delegation_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'delegation_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATION_ID','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'parent_type\', \'parent_type\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_TYPE','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'parent_name\', \'parent\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'parent_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PARENT_ID','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Reservations','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'employee_name\', \'alpha\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Reservations','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_NAME','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\', \'employee_id\' );
addToValidateBinaryDependency(\'EditView\', \'resource_name\', \'alpha\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Reservations','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESOURCES','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\', \'resource_id\' );
addToValidateBinaryDependency(\'EditView\', \'delegation_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Reservations','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELEGATIONS','module' => 'Reservations','for_js' => true), $this);?>
<?php echo '\', \'delegation_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_resource_name\']={"form":"EditView","method":"query","modules":["Resources"],"group":"or","field_list":["name","id"],"populate_list":["resource_name","resource_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_delegation_name\']={"form":"EditView","method":"query","modules":["Delegations"],"group":"or","field_list":["name","id"],"populate_list":["delegation_name","delegation_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_parent_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_employee_name\']={"form":"EditView","method":"query","modules":["Employees"],"group":"or","field_list":["full_name","id"],"populate_list":["employee_name","employee_id"],"required_list":["parent_id"],"conditions":[{"name":"full_name","op":"like_custom","end":"%","value":""}],"order":"full_name","limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>'; ?>
