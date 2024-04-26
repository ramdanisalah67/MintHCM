<?php 
 $GLOBALS["dictionary"]["EmployeeCertificates"]=array (
  'table' => 'employeecertificates',
  'audited' => true,
  'activity_enabled' => false,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'vt_readonly' => 'true',
      'vt_calculated' => 'concat($certificate_name,\' - \',ifElse(empty($employee_id),$candidate_name,$employee_name))',
      'audited' => false,
      'related_fields' => 
      array (
        0 => 'certificate_name',
        1 => 'employee_name',
      ),
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'employeecertificates_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'employeecertificates_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'employeecertificates_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_employeecertificates',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'employee_id' => 
    array (
      'name' => 'employee_id',
      'relationship' => 'employeecertificates_employees',
      'type' => 'id',
      'vname' => 'LBL_EMPLOYEES_ID',
      'audited' => false,
    ),
    'employee_name' => 
    array (
      'name' => 'employee_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_EMPLOYEES',
      'id_name' => 'employee_id',
      'link' => 'employeecertificates_employees',
      'module' => 'Employees',
      'table' => 'users',
      'rname' => 'name',
      'required' => false,
      'audited' => true,
      'vt_validation' => 'AEM(ifElse(and(empty($candidate_id),empty($employee_id)),false,true), \'LBL_CANDIDATE_OR_EMPLOYEE_HAVE_TO_BE_SET\')',
    ),
    'employee_link' => 
    array (
      'name' => 'employee_link',
      'type' => 'link',
      'relationship' => 'employeecertificates_employee',
      'vname' => 'LBL_EMPLOYEE',
      'link_type' => 'one',
      'module' => 'Employees',
      'bean_name' => 'Employee',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'full_name',
      'id_name' => 'employee_id',
      'table' => 'users',
    ),
    'start_date' => 
    array (
      'name' => 'start_date',
      'label' => 'LBL_START_DATE',
      'vname' => 'LBL_START_DATE',
      'type' => 'date',
      'audited' => true,
      'mass_update' => false,
      'duplicate_merge' => '1',
      'reportable' => true,
      'importable' => true,
      'options' => 'date_range_search_dom',
      'enable_range_search' => '1',
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'end_date',
      ),
    ),
    'end_date' => 
    array (
      'name' => 'end_date',
      'label' => 'LBL_END_DATE',
      'vname' => 'LBL_END_DATE',
      'type' => 'date',
      'audited' => true,
      'mass_update' => false,
      'duplicate_merge' => '1',
      'reportable' => true,
      'importable' => true,
      'options' => 'date_range_search_dom',
      'enable_range_search' => '1',
    ),
    'status' => 
    array (
      'required' => false,
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'audited' => true,
      'default' => 'Active',
      'no_default' => false,
      'massupdate' => true,
      'importable' => false,
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'certificates_status_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'candidate' => 
    array (
      'name' => 'candidate',
      'type' => 'link',
      'relationship' => 'candidates_employeecertificates',
      'source' => 'non-db',
      'module' => 'Candidates',
      'bean_name' => 'Candidates',
      'vname' => 'LBL_RELATIONSHIP_CANDIDATE_NAME',
      'id_name' => 'candidate_id',
    ),
    'candidate_name' => 
    array (
      'name' => 'candidate_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_RELATIONSHIP_CANDIDATE_NAME',
      'id_name' => 'candidate_id',
      'link' => 'candidate',
      'module' => 'Candidates',
      'table' => 'candidates',
      'rname' => 'name',
      'audited' => true,
      'importable' => true,
      'required' => false,
      'reportable' => true,
      'massupdate' => false,
      'duplicate_merge' => 'enabled',
      'vt_validation' => 'AEM(ifElse(and(empty($candidate_id),empty($employee_id)),false,true), \'LBL_CANDIDATE_OR_EMPLOYEE_HAVE_TO_BE_SET\')',
    ),
    'candidate_id' => 
    array (
      'name' => 'candidate_id',
      'relationship' => 'candidates_employeecertificates',
      'type' => 'id',
      'vname' => 'LBL_RELATIONSHIP_CANDIDATE_ID',
      'audited' => false,
      'reportable' => true,
    ),
    'certificates' => 
    array (
      'name' => 'certificates',
      'type' => 'link',
      'relationship' => 'certificates_employeecertificates',
      'source' => 'non-db',
      'vname' => 'LBL_CERTIFICATES',
      'id_name' => 'certificate_id',
    ),
    'certificate_name' => 
    array (
      'name' => 'certificate_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_CERTIFICATE_NAME',
      'id_name' => 'certificate_id',
      'link' => 'certificates',
      'module' => 'Certificates',
      'table' => 'certificates',
      'rname' => 'name',
      'importable' => true,
      'reportable' => true,
      'audited' => true,
      'required' => true,
    ),
    'certificate_id' => 
    array (
      'name' => 'certificate_id',
      'relationship' => 'certificates_employeecertificates',
      'type' => 'id',
      'vname' => 'LBL_CERTIFICATE_ID',
      'label' => 'LBL_CERTIFICATE_ID',
      'audited' => true,
      'importable' => true,
      'reportable' => true,
      'rname' => 'id',
      'isnull' => 'true',
      'dbType' => 'id',
    ),
    'employeecertificates_employees' => 
    array (
      'name' => 'employeecertificates_employees',
      'type' => 'link',
      'relationship' => 'employeecertificates_employees',
      'source' => 'non-db',
      'module' => 'Employees',
      'bean_name' => 'Employee',
      'vname' => 'LBL_EMPLOYEES',
      'id_name' => 'employee_id',
    ),
  ),
  'relationships' => 
  array (
    'employeecertificates_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'employeecertificates_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'employeecertificates_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_employeecertificates' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'EmployeeCertificates',
    ),
    'employeecertificates_employee' => 
    array (
      'lhs_module' => 'EmployeeCertificates',
      'lhs_table' => 'employeecertificates',
      'lhs_key' => 'employee_id',
      'rhs_module' => 'Employees',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
    'candidates_employeecertificates' => 
    array (
      'lhs_module' => 'Candidates',
      'lhs_table' => 'candidates',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'candidate_id',
      'relationship_type' => 'one-to-many',
    ),
    'certificates_employeecertificates' => 
    array (
      'lhs_module' => 'Certificates',
      'lhs_table' => 'certificates',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'certificate_id',
      'relationship_type' => 'one-to-many',
    ),
    'employeecertificates_employees' => 
    array (
      'lhs_module' => 'Employees',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'EmployeeCertificates',
      'rhs_table' => 'employeecertificates',
      'rhs_key' => 'employee_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'employeecertificatespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'employee_related' => 'employee_related',
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);