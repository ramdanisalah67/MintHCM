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

/* * *******************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 * ****************************************************************************** */
global $sugar_config;
$dictionary['PDFTemplates'] = array(
   'table' => 'PDFTemplates',
   'audited' => false,
   'fields' => array(
      'template' =>
      array(
         'required' => false,
         'name' => 'template',
         'vname' => 'LBL_TEMPLATE',
         'type' => 'text',
         'massupdate' => 0,
         'comments' => '',
         'help' => '',
         'importable' => 'true',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'size' => '20',
         'studio' => 'visible',
         'source' => 'non-db',
         'rows' => '8',
         'cols' => '30',
      ),
      'fields' =>
      array(
         'required' => false,
         'name' => 'fields',
         'vname' => 'LBL_FIELDS',
         'type' => 'varchar',
         'massupdate' => 0,
         'comments' => 'placeholder for tree in editview',
         'help' => '',
         'importable' => 'true',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'len' => '255',
         'size' => '20',
         'source' => 'non-db',
      ),
      'is_default' =>
      array(
         'name' => 'is_default',
         'vname' => 'LBL_IS_DEFAULT',
         'type' => 'bool',
         'default' => 0,
         'comments' => 'preselected template in detailview select for pdf templates',
         'reportable' => false,
      ),
      'relatedmodule' =>
      array(
         'required' => true,
         'name' => 'relatedmodule',
         'vname' => 'LBL_RELATEDMODULE',
         'type' => 'enum',
         'massupdate' => 0,
         'default' => 'selectmodule',
         'comments' => 'indicates module this template is created for',
         'help' => '',
         'importable' => 'false',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'len' => 100,
         'size' => '20',
         'options' => 'pdf_module_list',
         'studio' => 'visible',
         'dependency' => false,
      ),
        'type' =>
      array(
         'required' => true,
         'name' => 'type',
         'vname' => 'LBL_TYPE',
         'type' => 'enum',
         'massupdate' => 0,
         'default' => 'standard',
         'comments' => '',
         'help' => '',
         'importable' => 'false',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'len' => 100,
         'size' => '20',
         'options' => 'pdf_tempate_type_list',
         'studio' => 'visible',
         'dependency' => false,
      ),
      'orientation' =>
      array(
         'required' => true,
         'name' => 'orientation',
         'vname' => 'LBL_ORIENTATION',
         'type' => 'enum',
         'massupdate' => 0,
         'default' => 'P',
         'comments' => 'default orientation of the page',
         'help' => '',
         'importable' => 'false',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'len' => 5,
         'size' => '5',
         'options' => 'orientation_list',
         'dependency' => false,
      ),
      'preview' =>
      array(
         'required' => false,
         'name' => 'preview',
         'vname' => 'LBL_PREVIEW',
         'type' => 'iframe',
         'massupdate' => '0',
         'default' => $sugar_config['site_url'].'/modules/PDFTemplates/templates/template-{id}.html',
         'comments' => NULL,
         'help' => NULL,
         'importable' => 'true',
         'duplicate_merge' => 'disabled',
         'duplicate_merge_dom_value' => '0',
         'audited' => false,
         'reportable' => false,
         'unified_search' => false,
         'len' => '255',
         'size' => '20',
         'dbType' => 'varchar',
         'gen' => '1',
         'link_target' => '200',
         'height' => '600',
      ),
   ),
   'relationships' => array(
   ),
   'optimistic_locking' => true,
);
if ( !class_exists('VardefManager') ) {
   require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('PDFTemplates', 'PDFTemplates', array( 'basic' ));
