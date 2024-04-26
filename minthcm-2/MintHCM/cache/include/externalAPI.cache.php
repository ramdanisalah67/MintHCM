<?php
//This file is auto generated by ExternalAPIFactory.php
$fullAPIList = array (
  'GoogleEmail' => 
  array (
    'className' => 'ExtAPIGoogleEmail',
    'file' => 'include/externalAPI/GoogleEmail/ExtAPIGoogleEmail.php',
    'supportedModules' => 
    array (
      0 => 'OutboundEmail',
      1 => 'InboundEmail',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'authMethod' => 'oauth2',
    'needsUrl' => false,
    'connector' => 'ext_eapm_google',
  ),
  'MicrosoftEmail' => 
  array (
    'className' => 'ExtAPIMicrosoftEmail',
    'file' => 'include/externalAPI/MicrosoftEmail/ExtAPIMicrosoftEmail.php',
    'supportedModules' => 
    array (
      0 => 'OutboundEmail',
      1 => 'InboundEmail',
    ),
    'useAuth' => true,
    'requireAuth' => true,
    'docSearch' => false,
    'authMethod' => 'oauth2',
    'needsUrl' => false,
    'connector' => 'ext_eapm_microsoft',
  ),
);

