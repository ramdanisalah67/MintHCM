<?php /* Smarty version 2.6.31, created on 2024-04-24 16:30:15
         compiled from modules/Meetings/tpls/RepeatPanelEditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modules/Meetings/tpls/RepeatPanelEditView.tpl', 13, false),array('function', 'html_options', 'modules/Meetings/tpls/RepeatPanelEditView.tpl', 34, false),)), $this); ?>

<?php if ($this->_tpl_vars['show_edit_all_recurrences']): ?>
    <div id="edit_all_recurrences_block">
        <button type="button" id="btn-edit-all-recurrences" onclick="editAllRecurrences()"> <?php echo $this->_tpl_vars['MOD']['LBL_EDIT_ALL_RECURRENCES']; ?>
 </button>
        <button type="button" id="btn-remove-all-recurrences" onclick="deleteAllRecurences()"> <?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_ALL_RECURRENCES']; ?>
 </button>
    </div>
    <script type="text/javascript">
        <?php echo '
            function deleteAllRecurences() {

               if ( confirm( \''; ?>
<?php echo $this->_tpl_vars['MOD']['LBL_CONFIRM_REMOVE_ALL_RECURRING']; ?>
<?php echo '\' ) ) {
        '; ?>

                  var record = '<?php echo ((is_array($_tmp=@$this->_tpl_vars['fields']['repeat_parent_id']['value'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['fields']['id']['value']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['fields']['id']['value'])); ?>
';
                  location.href = 'index.php?module=Meetings&action=resetPeriodicity&record=' + record;
        <?php echo '
               }
            }

            function editAllRecurrences() {
        '; ?>

               location.href = 'index.php?module=Meetings&action=EditView&record=&show_edit_all_recurrences=1';
        <?php echo '
            }
        '; ?>

    </script>
<?php else: ?>
    <div id="cal-repeat-block">

        <input type="hidden" name="repeat_parent_id" value="<?php echo $this->_tpl_vars['fields']['repeat_parent_id']['value']; ?>
">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_TYPE']; ?>
:</td>
                <td width="37.5%" valign="top">
                    <select name="repeat_type" onchange="toggle_repeat_type();"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['APPLIST']['repeat_type_dom'],'selected' => $this->_tpl_vars['fields']['repeat_type']['value']), $this);?>
</select>
                </td>
            </tr>
            <tr id="repeat_interval_row" style="display: none;">
                <td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_INTERVAL']; ?>
:</td>
                <td width="37.5%" valign="top">
                    <select name="repeat_interval"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['repeat_intervals'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['fields']['repeat_interval']['value'])) ? $this->_run_mod_handler('default', true, $_tmp, '1') : smarty_modifier_default($_tmp, '1'))), $this);?>
</select> <span id="repeat-interval-text"></span>
                </td>
            </tr>
            <tr id="repeat_end_row" style="display: none;">
                <td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END']; ?>
:</td>
                <td width="37.5%" valign="top">
                    <div>
                        <input type="radio" name="repeat_end_type" value="number" id="repeat_count_radio" checked onclick="toggle_repeat_end();" style="position: relative; top: -5px;"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END_AFTER']; ?>

                        <input type="input" size="3" name="repeat_count" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['fields']['repeat_count']['value'])) ? $this->_run_mod_handler('default', true, $_tmp, '10') : smarty_modifier_default($_tmp, '10')); ?>
"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_OCCURRENCES']; ?>

                    </div>
                    <div>
                        <input type="radio" name="repeat_end_type" id="repeat_until_radio" value="date" onclick="toggle_repeat_end();" style="position: relative; top: -5px;"> <?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_END_BY']; ?>

                        <input type="input" size="11" maxlength="10" id="repeat_until_input" name="repeat_until" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['fields']['repeat_until']['value'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" disabled>
                        <img border="0" src="index.php?entryPoint=getImage&imageName=jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="repeat_until_trigger" align="absmiddle" style="display: none;">

                        <script type="text/javascript">
                            Calendar.setup(<?php echo ' {'; ?>

                               inputField: "repeat_until_input",
                               ifFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                               daFormat: "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
                               button: "repeat_until_trigger",
                               singleClick: true,
                               dateStr: "",
                               step: 1,
                               startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
                               weekNumbers: false
                            <?php echo '}'; ?>
 );
                        </script>
                    </div>
                </td>
            </tr>

            <tr id="repeat_dow_row" style="display: none;">
                <td width="12.5%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_REPEAT_DOW']; ?>
:</td>
                <td width="37.5%" valign="top">
                    <?php $_from = $this->_tpl_vars['dow']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['dow'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dow']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['d']):
        $this->_foreach['dow']['iteration']++;
?>
                        <?php echo $this->_tpl_vars['d']['label']; ?>
 <input type="checkbox" id="repeat_dow_<?php echo $this->_tpl_vars['d']['index']; ?>
" <?php echo $this->_tpl_vars['repeat_dow_checked']; ?>
 onchange="assignRepeatDow()" style="margin-right: 10px;">
                    <?php endforeach; endif; unset($_from); ?>
                    <input type="hidden" id="repeat_dow" name="repeat_dow" value="<?php echo $this->_tpl_vars['fields']['repeat_dow']['value']; ?>
" />
                    <input type="hidden" id="edit_all_recurrences" name="edit_all_recurrences" value="true" />
                </td>
            </tr>

        </table>

    </div>

    <script type="text/javascript">
        <?php echo $this->_tpl_vars['ALSRI']; ?>

    </script>
    <script type="text/javascript" src="modules/Meetings/tpls/RepeatPanelEditView.js"></script>
<?php endif; ?>