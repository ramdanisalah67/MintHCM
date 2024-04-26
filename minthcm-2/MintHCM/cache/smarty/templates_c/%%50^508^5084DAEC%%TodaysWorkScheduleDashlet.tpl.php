<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:22
         compiled from modules/Home/Dashlets/TodaysWorkScheduleDashlet/TodaysWorkScheduleDashlet.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Home/Dashlets/TodaysWorkScheduleDashlet/TodaysWorkScheduleDashlet.tpl', 2, false),)), $this); ?>
<link rel="stylesheet" type="text/css" href="modules/Home/Dashlets/TodaysWorkScheduleDashlet/TodaysWorkScheduleDashlet.css" />
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Home/Dashlets/TodaysWorkScheduleDashlet/TWSDashlet.js'), $this);?>
"></script>
<input type="hidden" name='first_day_of_week' id="first_day_of_week" value='<?php echo $this->_tpl_vars['firstDayOfWeek']; ?>
'>
<input type="hidden" name='current_user_is_admin' id="current_user_is_admin" value='<?php echo $this->_tpl_vars['current_user_is_admin']; ?>
'>
<input type="hidden" name='current_user_id' id="current_user_id" value='<?php echo $this->_tpl_vars['current_user_id']; ?>
'>
<input type="hidden" name='dashlet_id' id="dashlet_id" value='<?php echo $this->_tpl_vars['id']; ?>
'>
<div align="center">
    <div class="TWSDashlet">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Home/Dashlets/TodaysWorkScheduleDashlet/Toolbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <table class="TWSList" style="width:100%;" border="0" cellspacing="0" cellpadding="0">
            <tfoot>
            <td colspan="6" class="TWSListFooter">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/WorkSchedules/tpls/TimeTrackingPane.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
            </tfoot>
        </table>
    </div>
</div>
<script type="text/javascript">
    <?php echo '
        (function () {
           var all = document.querySelectorAll( \'div.TWSDashlet\' );
           new TWSDashlet( all[all.length - 1] );
        })();
    '; ?>

</script>