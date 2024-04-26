<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:27
         compiled from modules/Alerts/templates/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Alerts/templates/default.tpl', 5, false),array('modifier', 'nl2br', 'modules/Alerts/templates/default.tpl', 25, false),array('modifier', 'strstr', 'modules/Alerts/templates/default.tpl', 34, false),array('modifier', 'truncate', 'modules/Alerts/templates/default.tpl', 53, false),array('modifier', 'count_characters', 'modules/Alerts/templates/default.tpl', 54, false),array('modifier', 'substr', 'modules/Alerts/templates/default.tpl', 55, false),)), $this); ?>
<?php echo $this->_tpl_vars['Flash']; ?>


<?php if (! $this->_tpl_vars['Flash']): ?>
   <div class="clear-all-alerts-container">
      <a class="clear-all-alerts-btn btn btn-warning btn-xs"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CLEARALL'), $this);?>
</a>
      <?php echo '
         <script>
            $(\'.clear-all-alerts-btn\').unbind(\'click\').click(function (event) {
               $(\'.desktop_notifications:first .alert-dismissible .close\').each(function (i, v) {
                  $(v).click();
               });
            });
         </script>
      '; ?>

   </div>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['Results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
   <div class="alert alert-<?php if ($this->_tpl_vars['result']->type != null): ?><?php echo $this->_tpl_vars['result']->type; ?>
<?php else: ?>info<?php endif; ?> alert-dismissible module-alert" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="Alerts.prototype.markAsRead('<?php echo $this->_tpl_vars['result']->id; ?>
');"><span aria-hidden="true">&times;</span></button>
      <?php if ($this->_tpl_vars['result']->alert_type == 'custom'): ?>
      <?php if ($this->_tpl_vars['result']->url_redirect != null): ?>
      <a href="<?php echo $this->_tpl_vars['result']->url_redirect; ?>
" onclick="Alerts.prototype.markAsRead('<?php echo $this->_tpl_vars['result']->id; ?>
');">
      <?php endif; ?>
         <h4 class="alert-header">
               <strong class="text-<?php if ($this->_tpl_vars['result']->type != null): ?><?php echo $this->_tpl_vars['result']->type; ?>
<?php else: ?>info<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['result']->name)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</strong>
         </h4>
         <p class="alert-body">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['result']->description)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

         </p>
      <?php if ($this->_tpl_vars['result']->url_redirect != null): ?>
      </a>
      <?php endif; ?>
      <?php else: ?>
      <?php if ($this->_tpl_vars['result']->url_redirect != null && ! ( ((is_array($_tmp=$this->_tpl_vars['result']->url_redirect)) ? $this->_run_mod_handler('strstr', true, $_tmp, 'fake_') : strstr($_tmp, 'fake_')) )): ?>
      <a href="index.php?module=Alerts&action=redirect&record=<?php echo $this->_tpl_vars['result']->id; ?>
" onclick="Alerts.prototype.markAsRead('<?php echo $this->_tpl_vars['result']->id; ?>
');">
      <?php endif; ?>
         <h4 class="alert-header">
               <span class="alert-link text-<?php if ($this->_tpl_vars['result']->type != null): ?><?php echo $this->_tpl_vars['result']->type; ?>
<?php else: ?>info<?php endif; ?>" >
               <?php if ($this->_tpl_vars['result']->target_module != null): ?>
                  <img src="index.php?entryPoint=getImage&imageName=<?php echo $this->_tpl_vars['result']->target_module; ?>
s.gif"/>
                  <strong class="text-<?php if ($this->_tpl_vars['result']->type != null): ?><?php echo $this->_tpl_vars['result']->type; ?>
<?php else: ?>info<?php endif; ?>"><?php echo $this->_tpl_vars['result']->target_module; ?>
</strong>
               <?php else: ?>
                  <strong class="text-<?php if ($this->_tpl_vars['result']->type != null): ?><?php echo $this->_tpl_vars['result']->type; ?>
<?php else: ?>info<?php endif; ?>">Alert</strong>
               <?php endif; ?>
               </span>
         </h4>
        <?php if ($this->_tpl_vars['result']->url_redirect != null): ?>
         </a>
         <?php endif; ?>
         <p class="alert-body addReadMore showlesscontent">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['result']->name)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br/>
            <?php $this->assign('fulldesc', ((is_array($_tmp=$this->_tpl_vars['result']->description)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp))); ?>
            <?php $this->assign('firstSet', ((is_array($_tmp=$this->_tpl_vars['fulldesc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 200, "...", true) : smarty_modifier_truncate($_tmp, 200, "...", true))); ?>
            <?php $this->assign('desc_count', ((is_array($_tmp=$this->_tpl_vars['fulldesc'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true))); ?>
            <?php $this->assign('secdHalf', substr($this->_tpl_vars['fulldesc'], 200, $this->_tpl_vars['desc_count'])); ?>
            <?php echo $this->_tpl_vars['firstSet']; ?>

            <?php if ($this->_tpl_vars['desc_count'] > 200): ?>
            <span class='SecSec'><?php echo $this->_tpl_vars['secdHalf']; ?>
</span>
            <span onclick="Alerts.prototype.showHideDescription(event)" class='readMore'  title='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_MORE'), $this);?>
'><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_MORE'), $this);?>
</span>
            <span onclick="Alerts.prototype.showHideDescription(event)" class='readLess' title='<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_LESS'), $this);?>
'> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_LESS'), $this);?>
 </span>
            <?php endif; ?>
         </p>
      <?php endif; ?>
   </div>
<?php endforeach; endif; unset($_from); ?>
