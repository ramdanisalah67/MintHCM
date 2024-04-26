<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:22
         compiled from modules/Home/Dashlets/TodaysWorkScheduleDashlet/Toolbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Home/Dashlets/TodaysWorkScheduleDashlet/Toolbar.tpl', 2, false),)), $this); ?>
<div class="TWSToolbar">
    <script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/WorkSchedules/tpls/TimeTrackingPane.js'), $this);?>
"></script>
    <form onsubmit="return false" class="TWSToolbarForm">
        <div class="toolbar_container">
                <div class="dateTime toolbar_container__date_time">
                    <div class="monthHeader toolbar_container__date_time__month_header_left">
                        <a href="#" class="calendar_before">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                    <g id="layer1" transform="translate(0,-1036.3622)">
                                        <g id="g3126" style="fill:#ffffff" transform="matrix(0.82573651,0,0,0.82573651,-1.6833344,189.65762)">
                                            <rect transform="matrix(0.72609461,0.6875948,-0.71445905,0.69967726,0,0)" ry="0" rx="0" y="744.83148" x="751.50134" height="11.990089" width="3.0727561" id="rect3120" style="fill:#ffffff;fill-opacity:1;stroke:none"></rect>
                                            <rect style="fill:#ffffff;fill-opacity:1;stroke:none" id="rect3124" width="3.0727561" height="11.990089" x="752.80646" y="752.44446" rx="0" ry="0" transform="matrix(-0.71538329,0.69873224,0.72518508,0.68855399,0,0)"></rect>
                                        </g>
                                    </g>

                            </svg>
                        </a>
                    </div>
                    <input class="date_input" autocomplete="off" type="text" size="11" maxlength="10">
                    <img class="calendar_img toolbar_container__date_time__calendar_img" src="themes/SuiteP/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['twsdashlet_insert_date']; ?>
">
                    <div class="monthHeader toolbar_container__date_time__month_header_right">
                        <a class="calendar_next" href="#">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                    <g id="layer1" transform="translate(0,-1036.3622)">
                                        <g id="g3126" style="fill:#ffffff" transform="matrix(-0.82573651,0,0,0.82573651,17.683335,189.65762)">
                                            <rect transform="matrix(0.72609461,0.6875948,-0.71445905,0.69967726,0,0)" ry="0" rx="0" y="744.83148" x="751.50134" height="11.990089" width="3.0727561" id="rect3120" style="fill:#ffffff;fill-opacity:1;stroke:none"></rect>
                                            <rect style="fill:#ffffff;fill-opacity:1;stroke:none" id="rect3124" width="3.0727561" height="11.990089" x="752.80646" y="752.44446" rx="0" ry="0" transform="matrix(-0.71538329,0.69873224,0.72518508,0.68855399,0,0)"></rect>
                                        </g>
                                    </g>

                                </svg>
                        </a>
                    </div>
                </div>
                <div class="toolbar_container__select_container"><select></select></div>
                <div class="toolbar_container__action_buttons_container">
                    <img class="showPlanButton" src="themes/SuiteP/images/twsdashlet_show_24.png" alt="<?php echo $this->_tpl_vars['APP']['twsdashlet_show']; ?>
" title="<?php echo $this->_tpl_vars['APP']['twsdashlet_show']; ?>
">
                    <img class="editPlanButton" src="themes/SuiteP/images/twsdashlet_edit_24.png" alt="<?php echo $this->_tpl_vars['APP']['twsdashlet_edit']; ?>
" title="<?php echo $this->_tpl_vars['APP']['twsdashlet_edit']; ?>
">
                    <img class="logTimeButton" src="themes/SuiteP/images/twsdashlet_add_time_24.png" alt="<?php echo $this->_tpl_vars['APP']['twsdashlet_add_time']; ?>
" title="<?php echo $this->_tpl_vars['APP']['twsdashlet_add_time']; ?>
">
                    <?php if ($this->_tpl_vars['fields']['status']['value'] != 'closed'): ?>
                        <img id="CloseButton" src="themes/SuiteP/images/twsdashlet_close_24.png" alt="<?php echo $this->_tpl_vars['MOD']['LBL_CLOSE_PLAN']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_CLOSE_PLAN']; ?>
">
                        <script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/WorkSchedules/tpls/CloseButton.js'), $this);?>
"></script>
                    <?php endif; ?>
                </div>
        </div>
    </form>
    <script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Home/Dashlets/TodaysWorkScheduleDashlet/Toolbar.js'), $this);?>
"></script>
</div>