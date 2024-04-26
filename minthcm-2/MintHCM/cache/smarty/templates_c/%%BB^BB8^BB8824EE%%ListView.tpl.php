<?php /* Smarty version 2.6.31, created on 2024-04-24 15:34:24
         compiled from include/SugarFields/Fields/Enum/ListView.tpl */ ?>
<?php if (! empty ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] )): ?>
    <?php $this->assign('item', $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']]); ?>
    <?php if (! empty ( $this->_tpl_vars['vardef']['options_list'] )): ?>
        <?php echo $this->_tpl_vars['vardef']['options_list'][$this->_tpl_vars['item']]; ?>

    <?php else: ?>
        <?php echo $this->_tpl_vars['item']; ?>

    <?php endif; ?>
<?php endif; ?>