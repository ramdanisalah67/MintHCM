<?php


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

if ( !defined('sugarEntry') || !sugarEntry ) {
   die('Not A Valid Entry Point');
}

$module_name = 'Resources';
$object_name = 'Resources';
$_module_name = 'resources';
$popupMeta = array(
   'moduleMain' => $module_name,
   'varName' => $object_name,
   'orderBy' => $_module_name . '.name',
   'whereClauses' => array(
      'name' => $_module_name . '.name',
      'assigned_user_id' => $_module_name . '.assigned_user_id',
      'unavailable' => $_module_name . '.unavailable',
      'type' => $_module_name . '.type',
   ),
   'searchInputs' => array($_module_name . 'name', 'assigned_user_id', 'unavailable', 'type'),
   'whereStatement' => "type='for_reservation'",
   'searchdefs' => array(
      'name' =>
      array(
         'name' => 'name',
         'width' => '10%',
      ),
      'assigned_user_id' =>
      array(
         'name' => 'assigned_user_id',
         'label' => 'LBL_ASSIGNED_TO',
         'type' => 'enum',
         'function' =>
         array(
            'name' => 'get_user_array',
            'params' =>
            array(
               false,
            ),
         ),
         'width' => '10%',
      ),
      'employee_id' =>
      array(
         'name' => 'employee_id',
         'label' => 'LBL_EMPLOYEE',
         'type' => 'enum',
         'function' =>
         array(
            'name' => 'get_user_array',
            'params' =>
            array(
               false,
            ),
         ),
         'default' => true,
         'width' => '10%',
      ),
      'unavailable' =>
      array(
         'type' => 'bool',
         'label' => 'LBL_UNAVAILABLE',
         'width' => '10%',
         'name' => 'unavailable',
      ),
   ),
   'listviewdefs' => array(
      'NAME' =>
      array(
         'width' => '32%',
         'label' => 'LBL_NAME',
         'default' => true,
         'link' => true,
         'name' => 'name',
      ),
      'ASSIGNED_USER_NAME' =>
      array(
         'width' => '9%',
         'label' => 'LBL_ASSIGNED_TO_NAME',
         'module' => 'Employees',
         'id' => 'ASSIGNED_USER_ID',
         'default' => true,
         'name' => 'assigned_user_name',
      ),
      'EMPLOYEE_NAME' =>
      array(
         'width' => '9%',
         'label' => 'LBL_EMPLOYEE',
         'module' => 'Employees',
         'default' => true,
         'name' => 'employee_name',
      ),
      'UNAVAILABLE' =>
      array(
         'type' => 'bool',
         'default' => true,
         'label' => 'LBL_UNAVAILABLE',
         'width' => '10%',
         'name' => 'unavailable',
      ),
      'TYPE' =>
      array(
         'type' => 'enum',
         'studio' => 'visible',
         'label' => 'LBL_TYPE',
         'width' => '10%',
         'default' => true,
         'name' => 'type',
      ),
   ),
);
