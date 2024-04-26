<?php /* Smarty version 2.6.31, created on 2024-04-24 15:37:19
         compiled from include/SugarFields/Fields/Base/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Base/DetailView.tpl', 46, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Base/DetailView.tpl', 64, false),)), $this); ?>
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
{if strlen(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <= 0}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
    {assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if} 
    {assign var="type" value=<?php echo smarty_function_sugarvar(array('key' => 'type','string' => true), $this);?>
 }
<span class="sugar_field"><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</span>
{if $type != "emailbody" }
    <input class="vt_formulaSelector<?php if ($this->_tpl_vars['vardef']['vt_enforced'] != 'false' && $this->_tpl_vars['vardef']['vt_calculated'] != ''): ?> vt_enforced<?php endif; ?> vt_Readonly" type="hidden" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
"
           <?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?> <?php echo $this->_tpl_vars['displayParams']['field']; ?>
 
           <?php if ($this->_tpl_vars['vardef']['vt_dependency'] != ''): ?> data-dependency="{literal}<?php echo $this->_tpl_vars['vardef']['vt_dependency']; ?>
{/literal}" <?php endif; ?>
               <?php if ($this->_tpl_vars['vardef']['vt_calculated'] != ''): ?> data-calculated="{literal}<?php echo $this->_tpl_vars['vardef']['vt_calculated']; ?>
{/literal}" <?php endif; ?>
                   <?php if ($this->_tpl_vars['vardef']['vt_validation'] != ''): ?> data-validation="{literal}<?php echo $this->_tpl_vars['vardef']['vt_validation']; ?>
{/literal}" <?php endif; ?>>
                   <?php if ($this->_tpl_vars['vardef']['required']): ?>
                   <script>viewTools.form.setFieldRequirement( $( '#<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
' ), false, true );</script>
                   <?php endif; ?>
                   <?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
                   {if !empty($value)}
                       <?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

                   {/if}
                   <?php endif; ?>
                   {/if}