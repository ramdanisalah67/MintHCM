<?php
// created: 2024-04-24 15:37:19
$connectors = array (
  'ext_eapm_microsoft' => 
  array (
    'id' => 'ext_eapm_microsoft',
    'name' => 'Microsoft',
    'enabled' => true,
    'directory' => 'modules/Connectors/connectors/sources/ext/eapm/microsoft',
    'eapm' => 
    array (
      'enabled' => true,
      'only' => true,
    ),
    'modules' => 
    array (
    ),
  ),
  'ext_eapm_google' => 
  array (
    'id' => 'ext_eapm_google',
    'name' => 'Google',
    'enabled' => true,
    'directory' => 'modules/Connectors/connectors/sources/ext/eapm/google',
    'eapm' => 
    array (
      'enabled' => true,
      'only' => true,
    ),
    'modules' => 
    array (
    ),
  ),
  'ext_rest_facebook' => 
  array (
    'id' => 'ext_rest_facebook',
    'name' => 'Facebook',
    'enabled' => true,
    'directory' => 'modules/Connectors/connectors/sources/ext/rest/facebook',
    'eapm' => false,
    'modules' => 
    array (
      0 => 'Accounts',
      1 => 'Contacts',
      2 => 'Leads',
    ),
  ),
  'ext_rest_insideview' => 
  array (
    'id' => 'ext_rest_insideview',
    'name' => 'InsideView&#169;',
    'enabled' => true,
    'directory' => 'modules/Connectors/connectors/sources/ext/rest/insideview',
    'eapm' => false,
    'modules' => 
    array (
      0 => 'Accounts',
      1 => 'Contacts',
      2 => 'Leads',
      3 => 'Opportunities',
    ),
  ),
  'ext_rest_twitter' => 
  array (
    'id' => 'ext_rest_twitter',
    'name' => 'Twitter',
    'enabled' => true,
    'directory' => 'modules/Connectors/connectors/sources/ext/rest/twitter',
    'eapm' => false,
    'modules' => 
    array (
      0 => 'Accounts',
      1 => 'Contacts',
      2 => 'Leads',
    ),
  ),
);