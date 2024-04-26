<?php /* Smarty version 2.6.31, created on 2024-04-24 15:34:24
         compiled from cache/themes/SuiteP/modules/Employees/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/themes/SuiteP/modules/Employees/SearchForm_basic.tpl', 32, false),array('function', 'math', 'cache/themes/SuiteP/modules/Employees/SearchForm_basic.tpl', 33, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Employees/SearchForm_basic.tpl', 39, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/Employees/SearchForm_basic.tpl', 92, false),)), $this); ?>

<input type='hidden' id='displayColumns' name='displayColumns' value='<?php echo $this->_tpl_vars['DISPLAY_COLUMNS']; ?>
' />
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (! isset ( $this->_tpl_vars['templateMeta']['maxColumnsBasic'] )): ?>
	<?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumns']); ?>
<?php else: ?>
    <?php $this->assign('basicMaxColumns', $this->_tpl_vars['templateMeta']['maxColumnsBasic']); ?>
<?php endif; ?>
<script>
<?php echo '
	$(function() {
	var $dialog = $(\'<div></div>\')
		.html(SUGAR.language.get(\'app_strings\', \'LBL_SEARCH_HELP_TEXT\'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get(\'app_strings\', \'LBL_HELP\'),
			width: 700
		});
		
		$(\'#filterHelp\').click(function() {
		$dialog.dialog(\'open\');
		// prevent the default action, e.g., following a link
	});
	
	});
'; ?>

</script>
<div class="row">
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='search_name_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Employees'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strlen ( $this->_tpl_vars['fields']['search_name_basic']['value'] ) <= 0): ?>
    <?php $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['default_value']); ?>
<?php else: ?>
    <?php $this->assign('value', $this->_tpl_vars['fields']['search_name_basic']['value']); ?>
<?php endif; ?>  
<input class="vt_formulaSelector" type='text' name='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' 
       id='<?php echo $this->_tpl_vars['fields']['search_name_basic']['name']; ?>
' size='30' 
        
       value='<?php echo $this->_tpl_vars['value']; ?>
' title=''         accesskey='9'   
                                               >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['basicMaxColumns'],'assign' => 'modVal'), $this);?>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='open_only_active_users_basic' ><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ONLY_ACTIVE','module' => 'Employees'), $this);?>
</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<?php if (strval ( $this->_tpl_vars['fields']['open_only_active_users_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['open_only_active_users_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['open_only_active_users_basic']['value'] ) == 'on'): ?> 
    <?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
    <?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['open_only_active_users_basic']['name']; ?>
" value="0"> 
<input class="vt_formulaSelector" type="checkbox" id="<?php echo $this->_tpl_vars['fields']['open_only_active_users_basic']['name']; ?>
" 
       name="<?php echo $this->_tpl_vars['fields']['open_only_active_users_basic']['name']; ?>
" 
       value="1" title='' tabindex=""        <?php echo $this->_tpl_vars['checked']; ?>
 
                                               >
		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
'/>
			<?php if ($this->_tpl_vars['HAS_ADVANCED_SEARCH'] && ! $this->_tpl_vars['searchFormInPopup']): ?>
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_ADV_SEARCH_LNK_KEY']; ?>
"><?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_FILTER']; ?>
</a>
			<?php endif; ?>
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "help-dashlet.gif"), $this);?>
'></div>
	</div>
</div>
<script>
	<?php echo '
	$(document).ready(function () {
		$( \'#advanced_search_link\' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect(\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|advanced_search\',\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|basic_search\');
		});
	});
	'; ?>

</script><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'search_form_reports_to_name_basic\']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_basic","reports_to_id_basic"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_position_name_basic\']={"form":"search_form","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_name_basic","position_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_candidate_name_basic\']={"form":"search_form","method":"query","modules":["Candidates"],"group":"or","field_list":["name","id"],"populate_list":["candidate_name_basic","candidate_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_securitygroup_name_basic\']={"form":"search_form","method":"query","modules":["SecurityGroups"],"group":"or","field_list":["name","id"],"populate_list":["securitygroup_name_basic","securitygroup_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_forced_tabs_dashboard_name_basic\']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["forced_tabs_dashboard_name_basic","forced_tabs_dashboard_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_locked_dashboard_name_basic\']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["locked_dashboard_name_basic","locked_dashboard_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'search_form_users_one_time_default_dashboards_name_basic\']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["users_one_time_default_dashboards_name_basic","one_time_default_dashboard_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>'; ?>