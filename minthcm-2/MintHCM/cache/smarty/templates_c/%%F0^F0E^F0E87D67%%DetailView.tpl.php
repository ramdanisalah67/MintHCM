<?php /* Smarty version 2.6.31, created on 2024-04-24 15:38:37
         compiled from cache/themes/SuiteP/modules/Employees/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 49, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 58, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 114, false),array('function', 'sugar_ajax_url', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 246, false),array('function', 'sugar_phone', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 283, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 107, false),array('modifier', 'escape', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 899, false),array('modifier', 'url2html', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 899, false),array('modifier', 'nl2br', 'cache/themes/SuiteP/modules/Employees/DetailView.tpl', 899, false),)), $this); ?>


<script language="javascript">
    <?php echo '
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (! $this->_tpl_vars['config']['enable_action_menu']): ?>

<?php if (empty ( $_REQUEST['minthcm_popup'] )): ?>

<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['users_edit_access'] ) && $this->_tpl_vars['users_edit_access']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView'; _form.module.value='Users';_form.submit();" id="settings_button" name="Settings" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['DISPLAY_DUPLICATE']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['DISPLAY_DELETE']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('<?php echo $this->_tpl_vars['DELETE_WARNING']; ?>
') ) { _form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='index'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='delete'; _form.submit();};_form.submit();" name="Delete" id="delete_button" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"/><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['appraisals_edit_access'] ) && $this->_tpl_vars['appraisals_edit_access']): ?><input class="button" name="generate_button" id="generate_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_APPRAISAL']; ?>
" onClick="generateAppraisalDialogBox.init()" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_APPRAISAL']; ?>
"/><?php endif; ?>
<?php if (isset ( $this->_tpl_vars['IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES'] ) && $this->_tpl_vars['IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES']): ?><input class="button" name="generate_button" id="generate_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_GENERATE_ONBOARDING_OFFBOARDING']; ?>
" onClick="generateOnboardingOffboarding.init(generateOnboardingOffboarding)" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_GENERATE_ONBOARDING_OFFBOARDING']; ?>
"/><?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>                    
<?php endif; ?>

<?php endif; ?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $this->_tpl_vars['PAGINATION']; ?>
</div>

<ul class="nav nav-tabs">


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Employees'), $this);?>

</a>


<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'Employees'), $this);?>

</a>
</li>
<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"/><?php endif; ?></li>
<li><?php if (isset ( $this->_tpl_vars['users_edit_access'] ) && $this->_tpl_vars['users_edit_access']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Users'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView'; _form.module.value='Users';_form.submit();" id="settings_button" name="Settings" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SETTINGS_BUTTON_LABEL']; ?>
"/><?php endif; ?></li>
<li><?php if ($this->_tpl_vars['DISPLAY_DUPLICATE']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
"/><?php endif; ?></li>
<li><?php if ($this->_tpl_vars['DISPLAY_DELETE']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('<?php echo $this->_tpl_vars['DELETE_WARNING']; ?>
') ) { _form.return_module.value='<?php echo $this->_tpl_vars['module']; ?>
'; _form.return_action.value='index'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='delete'; _form.submit();};_form.submit();" name="Delete" id="delete_button" type="button" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"/><?php endif; ?></li>
<li><?php if (isset ( $this->_tpl_vars['appraisals_edit_access'] ) && $this->_tpl_vars['appraisals_edit_access']): ?><input class="button" name="generate_button" id="generate_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_APPRAISAL']; ?>
" onClick="generateAppraisalDialogBox.init()" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_APPRAISAL']; ?>
"/><?php endif; ?></li>
<li><?php if (isset ( $this->_tpl_vars['IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES'] ) && $this->_tpl_vars['IF_USER_HAS_ACCESS_TO_ONBOARD_TEMPLATES_OR_OFFBOARD_TEMPLATES']): ?><input class="button" name="generate_button" id="generate_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_GENERATE_ONBOARDING_OFFBOARDING']; ?>
" onClick="generateOnboardingOffboarding.init(generateOnboardingOffboarding)" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_GENERATE_ONBOARDING_OFFBOARDING']; ?>
"/><?php endif; ?></li>
<li><?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?></li>
</ul>        </li>
<li class="tab-inline-pagination">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</li>
<?php endif; ?>
</ul>
<div class="clearfix"></div>

<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['employee_status']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMPLOYEE_STATUS','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="employee_status" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['employee_status']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='employee_status_span'>
<?php echo $this->_tpl_vars['fields']['employee_status']['value']; ?>

</span>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['photo']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PHOTO','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="image" field="photo" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['photo']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['photo']['name']; ?>
">
<?php if (strlen ( $this->_tpl_vars['fields']['photo']['value'] ) <= 0): ?>
<img src="" style="max-width: <?php if (! $this->_tpl_vars['vardef']['width']): ?>160<?php else: ?>200<?php endif; ?>px;" height="<?php if (! $this->_tpl_vars['vardef']['height']): ?>160<?php else: ?>50<?php endif; ?>">
<?php else: ?>
<img src="index.php?entryPoint=download&type=<?php echo $this->_tpl_vars['module']; ?>
&id=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
_<?php echo $this->_tpl_vars['fields']['photo']['name']; ?>
<?php echo $this->_tpl_vars['fields']['width']['value']; ?>
&time=<?php echo $this->_tpl_vars['fields']['date_modified']['value']; ?>
" style="max-width: <?php if (! $this->_tpl_vars['vardef']['width']): ?>160<?php else: ?>200<?php endif; ?>px;" height="<?php if (! $this->_tpl_vars['vardef']['height']): ?>160<?php else: ?>50<?php endif; ?>"> 
<?php endif; ?>
</span>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['name']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="name" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['name']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['position_name']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSITION_NAME','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="position_name"  >

<?php if (! $this->_tpl_vars['fields']['position_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['position_id']['value'] )): ?>
<?php ob_start(); ?>index.php?module=Positions&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['position_id']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="position_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['position_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['position_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['position_id']['value'] )): ?></a><?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['phone_work']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_WORK_PHONE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_work"  class="phone">

<?php if (! $this->_tpl_vars['fields']['phone_work']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_work']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['securitygroup_name']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SECURITYGROUP_NAME','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="securitygroup_name"  >

<?php if (! $this->_tpl_vars['fields']['securitygroup_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['securitygroup_id']['value'] )): ?>
<?php ob_start(); ?>index.php?module=SecurityGroups&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['securitygroup_id']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="securitygroup_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['securitygroup_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['securitygroup_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['securitygroup_id']['value'] )): ?></a><?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['phone_mobile']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_mobile"  class="phone">

<?php if (! $this->_tpl_vars['fields']['phone_mobile']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_mobile']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['reports_to_name']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_NAME','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="relate" field="reports_to_name"  >

<?php if (! $this->_tpl_vars['fields']['reports_to_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['reports_to_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['reports_to_name']['value']; ?>
</span>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['phone_other']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_other"  class="phone">

<?php if (! $this->_tpl_vars['fields']['phone_other']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_other']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_other']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['phone_home']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_home"  class="phone">

<?php if (! $this->_tpl_vars['fields']['phone_home']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_home']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_home']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['phone_fax']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="phone" field="phone_fax"  class="phone">

<?php if (! $this->_tpl_vars['fields']['phone_fax']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['phone_fax']['value'] )): ?>
<?php $this->assign('phone_value', $this->_tpl_vars['fields']['phone_fax']['value']); ?>
<?php echo smarty_function_sugar_phone(array('value' => $this->_tpl_vars['phone_value'],'usa_format' => '0'), $this);?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['messenger_type']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_TYPE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="enum" field="messenger_type"  >

<?php if (! $this->_tpl_vars['fields']['messenger_type']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['messenger_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['messenger_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['messenger_type']['options'][$this->_tpl_vars['fields']['messenger_type']['value']]; ?>

<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['messenger_id']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MESSENGER_ID','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="messenger_id"  >

<?php if (! $this->_tpl_vars['fields']['messenger_id']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['messenger_id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['messenger_id']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['messenger_id']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['messenger_id']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['messenger_id']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['messenger_id']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['email1']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="email1" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['email1']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>

</span>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['address_street']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_STREET','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_street"  >

<?php if (! $this->_tpl_vars['fields']['address_street']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_street']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_street']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_street']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['address_street']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['address_street']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['address_street']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['address_street']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['address_city']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_city"  >

<?php if (! $this->_tpl_vars['fields']['address_city']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_city']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_city']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_city']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['address_city']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['address_city']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['address_city']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['address_city']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['address_state']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_state"  >

<?php if (! $this->_tpl_vars['fields']['address_state']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_state']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_state']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_state']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['address_state']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['address_state']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['address_state']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['address_state']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['address_postalcode']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field " type="varchar" field="address_postalcode"  >

<?php if (! $this->_tpl_vars['fields']['address_postalcode']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_postalcode']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_postalcode']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['address_postalcode']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['address_postalcode']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['address_postalcode']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['address_postalcode']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['address_country']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="varchar" field="address_country" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['address_country']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['address_country']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_country']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['address_country']['value']); ?>
<?php endif; ?> 
<?php $this->assign('type', $this->_tpl_vars['fields']['address_country']['type']); ?>
<span class="sugar_field"><?php echo $this->_tpl_vars['fields']['address_country']['value']; ?>
</span>
<?php if ($this->_tpl_vars['type'] != 'emailbody'): ?>
<input class="vt_formulaSelector vt_Readonly" type="hidden" name="<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['address_country']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['address_country']['value']; ?>
"
>
<?php endif; ?>
<?php endif; ?>

</div>


<?php endif; ?>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<?php if ($this->_tpl_vars['fields']['description']['acl'] > 0): ?>


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Employees'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="text" field="description" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html_entity_decode') : smarty_modifier_escape($_tmp, 'html_entity_decode')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>

</div>


<?php endif; ?>


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
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script src="include/RemoveWhitespaces/removeWhitespaces.js"></script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<?php echo '
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $(\'#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
                        $(\'#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
                        $(\'#content div.panel-content div.panel\').hide();
                        $(\'#content div.panel-content div.panel.tab-panel-\' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $(\'#content ul.nav.nav-tabs > li\').removeClass(\'active\');
                        $(\'#content ul.nav.nav-tabs > li a\').css(\'color\', \'\');

                        $(\'#content ul.nav.nav-tabs > li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
                        $(\'#content ul.nav.nav-tabs > li\').eq(tab).addClass(\'active\');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $(\'#content ul.nav.nav-tabs > li > a[data-toggle="tab"]\').click(function(e){
                            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
'; ?>