<?php /* Smarty version 2.6.31, created on 2024-04-24 15:34:54
         compiled from include/SugarFields/Fields/Relate/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Relate/EditView.tpl', 46, false),)), $this); ?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * MintHCM is a Human Capital Management software based on SuiteCRM developed by MintHCM, 
 * Copyright (C) 2018-2019 MintHCM
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by SugarCRM" 
 * logo and "Supercharged by SuiteCRM" logo and "Reinvented by MintHCM" logo. 
 * If the display of the logos is not reasonably feasible for technical reasons, the 
 * Appropriate Legal Notices must display the words "Powered by SugarCRM" and 
 * "Supercharged by SuiteCRM" and "Reinvented by MintHCM".
 */

*}
<?php ob_start(); ?><?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
<?php $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean(); ?>
<?php if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
<?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']); ?>
<?php endif; ?>
{capture name=idname assign=idname}<?php echo $this->_tpl_vars['idname']; ?>
{/capture}
    <input type="text" name="<?php echo $this->_tpl_vars['idname']; ?>
" class="vt_formulaSelector<?php if ($this->_tpl_vars['vardef']['vt_enforced'] != 'false' && $this->_tpl_vars['vardef']['vt_calculated'] != ''): ?> vt_enforced<?php endif; ?> <?php if (empty ( $this->_tpl_vars['displayParams']['class'] )): ?>sqsEnabled<?php else: ?> <?php echo $this->_tpl_vars['displayParams']['class']; ?>
 <?php endif; ?>" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id="<?php echo $this->_tpl_vars['idname']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 {if $idname == $locked_field}readonly{/if} <?php echo $this->_tpl_vars['displayParams']['field']; ?>
	<?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> 
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/SugarFields/include/formulaInclude.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>>
    <input class="vt_formulaSelector<?php if ($this->_tpl_vars['vardef']['vt_enforced'] != 'false' && $this->_tpl_vars['vardef']['vt_calculated'] != ''): ?> vt_enforced<?php endif; ?>" type="hidden" name="<?php if (! empty ( $this->_tpl_vars['displayParams']['idNameHidden'] )): ?><?php echo $this->_tpl_vars['displayParams']['idNameHidden']; ?>
<?php endif; ?><?php echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
" 
           id="<?php if (! empty ( $this->_tpl_vars['displayParams']['idNameHidden'] )): ?><?php echo $this->_tpl_vars['displayParams']['idNameHidden']; ?>
<?php endif; ?><?php echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
" 
           <?php if (! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"<?php endif; ?>>
    <?php if (empty ( $this->_tpl_vars['displayParams']['hideButtons'] )): ?>
    {if $idname != $locked_field}
        <span class="id-ff multiple">
            <button type="button" name="btn_<?php echo $this->_tpl_vars['idname']; ?>
" id="btn_<?php echo $this->_tpl_vars['idname']; ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectTitle']; ?>
"}" class="button firstChild" value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeySelectLabel']; ?>
"}"
                    onclick='open_popup(
                                   "<?php echo smarty_function_sugarvar(array('key' => 'module'), $this);?>
",
                                   600,
                                   400,
                                   "<?php echo $this->_tpl_vars['displayParams']['initial_filter']; ?>
",
                                   true,
                                   false,
                    <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
,
                                   "single",
                                   true
                                   );' <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn'] )): ?><?php echo $this->_tpl_vars['displayParams']['javascript']['btn']; ?>
<?php endif; ?>><span class="suitepicon suitepicon-action-select"></span></button><?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['idname']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['idname']; ?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearTitle']; ?>
"}"  class="button lastChild"
                                                                                                                                                                                                        onclick="SUGAR.clearRelateField( this.form, '<?php echo $this->_tpl_vars['idname']; ?>
', '<?php if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?><?php echo $this->_tpl_vars['displayParams']['idName']; ?>
_<?php endif; ?><?php echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
' ); $( '#<?php echo $this->_tpl_vars['idname']; ?>
,#<?php if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?><?php echo $this->_tpl_vars['displayParams']['idName']; ?>
_<?php endif; ?><?php echo smarty_function_sugarvar(array('key' => 'id_name'), $this);?>
' ).blur();"  value="{sugar_translate label="<?php echo $this->_tpl_vars['displayParams']['accessKeyClearLabel']; ?>
"}" <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn_clear'] )): ?><?php echo $this->_tpl_vars['displayParams']['javascript']['btn_clear']; ?>
<?php endif; ?>><span class="suitepicon suitepicon-action-clear"></span></button>
                <?php endif; ?>
        </span>
    {/if}
    <?php endif; ?>
    <?php if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?>
    <input type="hidden" name="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new_value" id="<?php echo $this->_tpl_vars['idname']; ?>
_allow_new_value" value="true">
    <?php endif; ?>
    <script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_<?php echo $this->_tpl_vars['idname']; ?>
']) != 'undefined'",
                enableQS
                );
    </script>