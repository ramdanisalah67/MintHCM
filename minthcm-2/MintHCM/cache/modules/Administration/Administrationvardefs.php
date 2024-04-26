<?php 
 $GLOBALS["dictionary"]["Administration"]=array (
  'table' => 'config',
  'comment' => 'System table containing system-wide definitions',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'category' => 
    array (
      'name' => 'category',
      'vname' => 'LBL_LIST_SYMBOL',
      'type' => 'varchar',
      'len' => '32',
      'comment' => 'Settings are grouped under this category; arbitraily defined based on requirements',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_LIST_NAME',
      'type' => 'varchar',
      'len' => '32',
      'comment' => 'The name given to the setting',
    ),
    'value' => 
    array (
      'name' => 'value',
      'vname' => 'LBL_LIST_RATE',
      'type' => 'text',
      'comment' => 'The value given to the setting',
    ),
    'dlnc_flag' => 
    array (
      'name' => 'dlnc_flag',
      'type' => 'text',
      'source' => 'non-db',
      'vname' => 'LBL_DLNC_CHECKBOX',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_config_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_config_cat',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'category',
      ),
    ),
  ),
  'custom_fields' => false,
);