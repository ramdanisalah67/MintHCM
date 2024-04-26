<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:22
         compiled from themes/SuiteP/include/Dashlets/DashletHeader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_module_icon_class', 'themes/SuiteP/include/Dashlets/DashletHeader.tpl', 8, false),)), $this); ?>
<div onmouseover="this.style.cursor = 'move';" id="dashlet_header_<?php echo $this->_tpl_vars['DASHLET_ID']; ?>
" class="hd dashlet">
    <div class="tl"></div>
    <div class="hd-center">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="formHeader h3Row">
            <tr>
                <td class="dashlet-title" colspan="2">
                    <h3>
                        <span class="<?php echo smarty_function_get_module_icon_class(array('module_name' => $this->_tpl_vars['DASHLET_MODULE']), $this);?>
"></span>
                        <span><?php echo $this->_tpl_vars['DASHLET_TITLE']; ?>
</span>
                    </h3>
                </td>
                <td style="padding-right: 0px;" nowrap="" width="1%">
                    <div class="dashletToolSet">
                                                <?php if (! $this->_tpl_vars['is_locked']): ?>
                        <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_EDIT']; ?>
" aria-label="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_EDIT']; ?>
" onclick="SUGAR.mySugar.configureDashlet( '<?php echo $this->_tpl_vars['DASHLET_ID']; ?>
' );
                               return false;">
                            <span class="suitepicon suitepicon-action-edit"></span>
                        </a>
                        <?php endif; ?>
                                                                                                <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_REFRESH']; ?>
" aria-label="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_REFRESH']; ?>
" onclick="SUGAR.mySugar.retrieveDashlet( '<?php echo $this->_tpl_vars['DASHLET_ID']; ?>
', '' );
                               return false;">
                            <span class="suitepicon suitepicon-action-reload"></span>
                        </a>
                                                                        <?php if (! $this->_tpl_vars['is_locked']): ?>
                        <a href="javascript:void(0)" title="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_DELETE']; ?>
" aria-label="<?php echo $this->_tpl_vars['DASHLET_BUTTON_ARIA_DELETE']; ?>
" onclick="SUGAR.mySugar.deleteDashlet( '<?php echo $this->_tpl_vars['DASHLET_ID']; ?>
' );
                               return false;">
                            <span class="suitepicon suitepicon-action-clear"></span>
                        </a>
                        <?php endif; ?>
                                            </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="tr"></div>
</div>
<div class="bd">
    <div class="ml"></div>
    <div class="bd-center">