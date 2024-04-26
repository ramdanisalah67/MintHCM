<?php 
 $relationships = array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'user_id',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_project_task_rel' => 
  array (
    'name' => 'emails_project_task_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_projects_rel' => 
  array (
    'name' => 'emails_projects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'campaign_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_candidates' => 
  array (
    'name' => 'prospect_list_candidates',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_employees' => 
  array (
    'name' => 'prospect_list_employees',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'allocations_employees' => 
  array (
    'name' => 'allocations_employees',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'allocations_employees' => 
      array (
        'lhs_module' => 'Allocations',
        'lhs_table' => 'allocations',
        'lhs_key' => 'id',
        'rhs_module' => 'Employees',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'allocations_employees',
        'join_key_lhs' => 'allocation_id',
        'join_key_rhs' => 'employee_id',
      ),
    ),
    'table' => 'allocations_employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'allocation_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'employee_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'allocations_users_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'allocation_lhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'allocation_id',
        ),
      ),
      2 => 
      array (
        'name' => 'user_rhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'employee_id',
        ),
      ),
    ),
    'lhs_module' => 'Allocations',
    'lhs_table' => 'allocations',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'allocations_employees',
    'join_key_lhs' => 'allocation_id',
    'join_key_rhs' => 'employee_id',
  ),
  'rooms_resources' => 
  array (
    'name' => 'rooms_resources',
    'true_relationship_type' => 'one-to-one',
    'from_studio' => true,
    'relationships' => 
    array (
      'rooms_resources' => 
      array (
        'lhs_module' => 'Rooms',
        'lhs_table' => 'rooms',
        'lhs_key' => 'id',
        'rhs_module' => 'Resources',
        'rhs_table' => 'resources',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-one',
        'join_table' => 'rooms_resources',
        'join_key_lhs' => 'room_id',
        'join_key_rhs' => 'resource_id',
      ),
    ),
    'table' => 'rooms_resources',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'room_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'resource_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'rooms_resources_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'rooms_lhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'room_id',
        ),
      ),
      2 => 
      array (
        'name' => 'resources_rhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'resource_id',
        ),
      ),
    ),
    'lhs_module' => 'Rooms',
    'lhs_table' => 'rooms',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-one',
    'join_table' => 'rooms_resources',
    'join_key_lhs' => 'room_id',
    'join_key_rhs' => 'resource_id',
  ),
  'calls_resources' => 
  array (
    'name' => 'calls_resources',
    'table' => 'calls_resources',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'resource_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_resourcesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_resource',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'resource_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_resource',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'resource_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_resources' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Resources',
        'rhs_table' => 'resources',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_resources',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'resource_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_resources',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'resource_id',
  ),
  'meetings_resources' => 
  array (
    'name' => 'meetings_resources',
    'table' => 'meetings_resources',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'resource_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_resourcesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_resource',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'resource_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_resource',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'resource_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_resources' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Resources',
        'rhs_table' => 'resources',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_resources',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'resource_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_resources',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'resource_id',
  ),
  'workschedules_spenttime' => 
  array (
    'name' => 'workschedules_spenttime',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'workschedules_spenttime' => 
      array (
        'lhs_module' => 'WorkSchedules',
        'lhs_table' => 'workschedules',
        'lhs_key' => 'id',
        'rhs_module' => 'SpentTime',
        'rhs_table' => 'spenttime',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'workschedules_spenttime',
        'join_key_lhs' => 'workschedule_id',
        'join_key_rhs' => 'spenttime_id',
      ),
    ),
    'table' => 'workschedules_spenttime',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'workschedule_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'spenttime_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'workschedules_spenttime_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'workschedules_spenttime_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'workschedule_id',
        ),
      ),
      2 => 
      array (
        'name' => 'workschedules_spenttime_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'spenttime_id',
        ),
      ),
    ),
    'lhs_module' => 'WorkSchedules',
    'lhs_table' => 'workschedules',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'workschedules_spenttime',
    'join_key_lhs' => 'workschedule_id',
    'join_key_rhs' => 'spenttime_id',
  ),
  'projects_bugs' => 
  array (
    'name' => 'projects_bugs',
    'table' => 'projects_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_bugs_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_bug_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_bugs_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_bugs' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_bugs',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_bugs',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'bug_id',
  ),
  'projects_cases' => 
  array (
    'name' => 'projects_cases',
    'table' => 'projects_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_case_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_cases' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_cases',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_cases',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'case_id',
  ),
  'projects_products' => 
  array (
    'name' => 'projects_products',
    'table' => 'projects_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_products_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_prod_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_prod_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_products_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_products' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
  ),
  'projects_contacts' => 
  array (
    'name' => 'projects_contacts',
    'table' => 'projects_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_con_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_con_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_contacts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_contacts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_contacts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'contact_id',
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'leads_documents' => 
  array (
    'name' => 'leads_documents',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'aok_knowledgebase_categories' => 
  array (
    'name' => 'aok_knowledgebase_categories',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aok_knowledgebase_categories' => 
      array (
        'lhs_module' => 'AOK_KnowledgeBase',
        'lhs_table' => 'aok_knowledgebase',
        'lhs_key' => 'id',
        'rhs_module' => 'AOK_Knowledge_Base_Categories',
        'rhs_table' => 'aok_knowledge_base_categories',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aok_knowledgebase_categories',
        'join_key_lhs' => 'aok_knowledgebase_id',
        'join_key_rhs' => 'aok_knowledge_base_categories_id',
      ),
    ),
    'table' => 'aok_knowledgebase_categories',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aok_knowledgebase_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aok_knowledge_base_categories_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aok_knowledgebase_categoriesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aok_knowledgebase_categories_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aok_knowledgebase_id',
          1 => 'aok_knowledge_base_categories_id',
        ),
      ),
    ),
    'lhs_module' => 'AOK_KnowledgeBase',
    'lhs_table' => 'aok_knowledgebase',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aok_knowledgebase_categories',
    'join_key_lhs' => 'aok_knowledgebase_id',
    'join_key_rhs' => 'aok_knowledge_base_categories_id',
  ),
  'am_projecttemplates_project_1' => 
  array (
    'name' => 'am_projecttemplates_project_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_project_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Project',
        'rhs_table' => 'project',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_project_1_c',
        'join_key_lhs' => 'am_projecttemplates_project_1am_projecttemplates_ida',
        'join_key_rhs' => 'am_projecttemplates_project_1project_idb',
      ),
    ),
    'table' => 'am_projecttemplates_project_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'am_projecttemplates_project_1project_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_project_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_project_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'am_projecttemplates_project_1am_projecttemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'am_projecttemplates_project_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_project_1project_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_project_1_c',
    'join_key_lhs' => 'am_projecttemplates_project_1am_projecttemplates_ida',
    'join_key_rhs' => 'am_projecttemplates_project_1project_idb',
  ),
  'am_projecttemplates_contacts_1' => 
  array (
    'name' => 'am_projecttemplates_contacts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_contacts_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_contacts_1_c',
        'join_key_lhs' => 'am_projecttemplates_ida',
        'join_key_rhs' => 'contacts_idb',
      ),
    ),
    'table' => 'am_projecttemplates_contacts_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_contacts_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_contacts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_ida',
          1 => 'contacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_contacts_1_c',
    'join_key_lhs' => 'am_projecttemplates_ida',
    'join_key_rhs' => 'contacts_idb',
  ),
  'am_projecttemplates_users_1' => 
  array (
    'name' => 'am_projecttemplates_users_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'am_projecttemplates_users_1' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_projecttemplates_users_1_c',
        'join_key_lhs' => 'am_projecttemplates_ida',
        'join_key_rhs' => 'users_idb',
      ),
    ),
    'table' => 'am_projecttemplates_users_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'users_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_projecttemplates_users_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_projecttemplates_users_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_projecttemplates_ida',
          1 => 'users_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_projecttemplates_users_1_c',
    'join_key_lhs' => 'am_projecttemplates_ida',
    'join_key_rhs' => 'users_idb',
  ),
  'am_tasktemplates_am_projecttemplates' => 
  array (
    'name' => 'am_tasktemplates_am_projecttemplates',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'am_tasktemplates_am_projecttemplates' => 
      array (
        'lhs_module' => 'AM_ProjectTemplates',
        'lhs_table' => 'am_projecttemplates',
        'lhs_key' => 'id',
        'rhs_module' => 'AM_TaskTemplates',
        'rhs_table' => 'am_tasktemplates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'am_tasktemplates_am_projecttemplates_c',
        'join_key_lhs' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        'join_key_rhs' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
      ),
    ),
    'table' => 'am_tasktemplates_am_projecttemplates_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplates_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'am_tasktemplates_am_projecttemplates_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
        ),
      ),
    ),
    'lhs_module' => 'AM_ProjectTemplates',
    'lhs_table' => 'am_projecttemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'am_tasktemplates_am_projecttemplates_c',
    'join_key_lhs' => 'am_tasktemplates_am_projecttemplatesam_projecttemplates_ida',
    'join_key_rhs' => 'am_tasktemplates_am_projecttemplatesam_tasktemplates_idb',
  ),
  'aos_contracts_documents' => 
  array (
    'name' => 'aos_contracts_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_contracts_documents' => 
      array (
        'lhs_module' => 'AOS_Contracts',
        'lhs_table' => 'aos_contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_contracts_documents',
        'join_key_lhs' => 'aos_contracts_id',
        'join_key_rhs' => 'documents_id',
      ),
    ),
    'table' => 'aos_contracts_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_contracts_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'documents_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_contracts_documentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_contracts_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_contracts_id',
          1 => 'documents_id',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_contracts_documents',
    'join_key_lhs' => 'aos_contracts_id',
    'join_key_rhs' => 'documents_id',
  ),
  'aos_quotes_aos_contracts' => 
  array (
    'name' => 'aos_quotes_aos_contracts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_aos_contracts' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'AOS_Contracts',
        'rhs_table' => 'aos_contracts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_os_contracts_c',
        'join_key_lhs' => 'aos_quotese81e_quotes_ida',
        'join_key_rhs' => 'aos_quotes4dc0ntracts_idb',
      ),
    ),
    'table' => 'aos_quotes_os_contracts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotese81e_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes4dc0ntracts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_aos_contractsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_aos_contracts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotese81e_quotes_ida',
          1 => 'aos_quotes4dc0ntracts_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_os_contracts_c',
    'join_key_lhs' => 'aos_quotese81e_quotes_ida',
    'join_key_rhs' => 'aos_quotes4dc0ntracts_idb',
  ),
  'aos_quotes_aos_invoices' => 
  array (
    'name' => 'aos_quotes_aos_invoices',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_aos_invoices' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'AOS_Invoices',
        'rhs_table' => 'aos_invoices',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_aos_invoices_c',
        'join_key_lhs' => 'aos_quotes77d9_quotes_ida',
        'join_key_rhs' => 'aos_quotes6b83nvoices_idb',
      ),
    ),
    'table' => 'aos_quotes_aos_invoices_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotes77d9_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes6b83nvoices_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_aos_invoicesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_aos_invoices_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotes77d9_quotes_ida',
          1 => 'aos_quotes6b83nvoices_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_aos_invoices_c',
    'join_key_lhs' => 'aos_quotes77d9_quotes_ida',
    'join_key_rhs' => 'aos_quotes6b83nvoices_idb',
  ),
  'aos_quotes_project' => 
  array (
    'name' => 'aos_quotes_project',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'aos_quotes_project' => 
      array (
        'lhs_module' => 'AOS_Quotes',
        'lhs_table' => 'aos_quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'Project',
        'rhs_table' => 'project',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aos_quotes_project_c',
        'join_key_lhs' => 'aos_quotes1112_quotes_ida',
        'join_key_rhs' => 'aos_quotes7207project_idb',
      ),
    ),
    'table' => 'aos_quotes_project_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'aos_quotes1112_quotes_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'aos_quotes7207project_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aos_quotes_projectspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'aos_quotes_project_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aos_quotes1112_quotes_ida',
          1 => 'aos_quotes7207project_idb',
        ),
      ),
    ),
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aos_quotes_project_c',
    'join_key_lhs' => 'aos_quotes1112_quotes_ida',
    'join_key_rhs' => 'aos_quotes7207project_idb',
  ),
  'aow_processed_aow_actions' => 
  array (
    'name' => 'aow_processed_aow_actions',
    'table' => 'aow_processed_aow_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'aow_processed_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'aow_action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'status',
        'type' => 'varchar',
        'len' => '36',
        'default' => 'Pending',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'aow_processed_aow_actionsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aow_processed_aow_actions',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'aow_processed_id',
          1 => 'aow_action_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_actid_del_freid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'aow_action_id',
          1 => 'deleted',
          2 => 'aow_processed_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'aow_processed_aow_actions' => 
      array (
        'lhs_module' => 'AOW_Processed',
        'lhs_table' => 'aow_processed',
        'lhs_key' => 'id',
        'rhs_module' => 'AOW_Actions',
        'rhs_table' => 'aow_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'aow_processed_aow_actions',
        'join_key_lhs' => 'aow_processed_id',
        'join_key_rhs' => 'aow_action_id',
      ),
    ),
    'lhs_module' => 'AOW_Processed',
    'lhs_table' => 'aow_processed',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'aow_processed_aow_actions',
    'join_key_lhs' => 'aow_processed_id',
    'join_key_rhs' => 'aow_action_id',
  ),
  'fp_event_locations_fp_events_1' => 
  array (
    'name' => 'fp_event_locations_fp_events_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_event_locations_fp_events_1' => 
      array (
        'lhs_module' => 'FP_Event_Locations',
        'lhs_table' => 'fp_event_locations',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_events',
        'rhs_table' => 'fp_events',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_event_locations_fp_events_1_c',
        'join_key_lhs' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        'join_key_rhs' => 'fp_event_locations_fp_events_1fp_events_idb',
      ),
    ),
    'table' => 'fp_event_locations_fp_events_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_event_locations_fp_events_1fp_events_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_event_locations_fp_events_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_event_locations_fp_events_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'fp_event_locations_fp_events_1fp_event_locations_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'fp_event_locations_fp_events_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_event_locations_fp_events_1fp_events_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_Event_Locations',
    'lhs_table' => 'fp_event_locations',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_event_locations_fp_events_1_c',
    'join_key_lhs' => 'fp_event_locations_fp_events_1fp_event_locations_ida',
    'join_key_rhs' => 'fp_event_locations_fp_events_1fp_events_idb',
  ),
  'fp_events_contacts' => 
  array (
    'name' => 'fp_events_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'fp_events_contacts' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_contacts_c',
        'join_key_lhs' => 'fp_events_contactsfp_events_ida',
        'join_key_rhs' => 'fp_events_contactscontacts_idb',
      ),
    ),
    'table' => 'fp_events_contacts_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_contactsfp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_contactscontacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_contactsfp_events_ida',
          1 => 'fp_events_contactscontacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_contacts_c',
    'join_key_lhs' => 'fp_events_contactsfp_events_ida',
    'join_key_rhs' => 'fp_events_contactscontacts_idb',
  ),
  'fp_events_fp_event_delegates_1' => 
  array (
    'name' => 'fp_events_fp_event_delegates_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_fp_event_delegates_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_Event_delegates',
        'rhs_table' => 'fp_event_delegates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_fp_event_delegates_1_c',
        'join_key_lhs' => 'fp_events_fp_event_delegates_1fp_events_ida',
        'join_key_rhs' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
      ),
    ),
    'table' => 'fp_events_fp_event_delegates_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_delegates_1fp_events_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'fp_events_fp_event_delegates_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_delegates',
    'rhs_table' => 'fp_event_delegates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_fp_event_delegates_1_c',
    'join_key_lhs' => 'fp_events_fp_event_delegates_1fp_events_ida',
    'join_key_rhs' => 'fp_events_fp_event_delegates_1fp_event_delegates_idb',
  ),
  'fp_events_fp_event_locations_1' => 
  array (
    'name' => 'fp_events_fp_event_locations_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_fp_event_locations_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'FP_Event_Locations',
        'rhs_table' => 'fp_event_locations',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_fp_event_locations_1_c',
        'join_key_lhs' => 'fp_events_fp_event_locations_1fp_events_ida',
        'join_key_rhs' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
      ),
    ),
    'table' => 'fp_events_fp_event_locations_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_fp_event_locations_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_fp_event_locations_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_fp_event_locations_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_fp_event_locations_1fp_events_ida',
          1 => 'fp_events_fp_event_locations_1fp_event_locations_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_fp_event_locations_1_c',
    'join_key_lhs' => 'fp_events_fp_event_locations_1fp_events_ida',
    'join_key_rhs' => 'fp_events_fp_event_locations_1fp_event_locations_idb',
  ),
  'fp_events_leads_1' => 
  array (
    'name' => 'fp_events_leads_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_leads_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_leads_1_c',
        'join_key_lhs' => 'fp_events_leads_1fp_events_ida',
        'join_key_rhs' => 'fp_events_leads_1leads_idb',
      ),
    ),
    'table' => 'fp_events_leads_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_leads_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_leads_1leads_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_leads_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_leads_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_leads_1fp_events_ida',
          1 => 'fp_events_leads_1leads_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_leads_1_c',
    'join_key_lhs' => 'fp_events_leads_1fp_events_ida',
    'join_key_rhs' => 'fp_events_leads_1leads_idb',
  ),
  'fp_events_prospects_1' => 
  array (
    'name' => 'fp_events_prospects_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'fp_events_prospects_1' => 
      array (
        'lhs_module' => 'FP_events',
        'lhs_table' => 'fp_events',
        'lhs_key' => 'id',
        'rhs_module' => 'Prospects',
        'rhs_table' => 'prospects',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'fp_events_prospects_1_c',
        'join_key_lhs' => 'fp_events_prospects_1fp_events_ida',
        'join_key_rhs' => 'fp_events_prospects_1prospects_idb',
      ),
    ),
    'table' => 'fp_events_prospects_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'fp_events_prospects_1fp_events_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'fp_events_prospects_1prospects_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'invite_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'Not Invited',
      ),
      6 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'No Response',
      ),
      7 => 
      array (
        'name' => 'email_responded',
        'type' => 'int',
        'len' => '2',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'fp_events_prospects_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'fp_events_prospects_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'fp_events_prospects_1fp_events_ida',
          1 => 'fp_events_prospects_1prospects_idb',
        ),
      ),
    ),
    'lhs_module' => 'FP_events',
    'lhs_table' => 'fp_events',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'fp_events_prospects_1_c',
    'join_key_lhs' => 'fp_events_prospects_1fp_events_ida',
    'join_key_rhs' => 'fp_events_prospects_1prospects_idb',
  ),
  'jjwg_maps_jjwg_areas' => 
  array (
    'name' => 'jjwg_maps_jjwg_areas',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'jjwg_maps_jjwg_areas' => 
      array (
        'lhs_module' => 'jjwg_Maps',
        'lhs_table' => 'jjwg_maps',
        'lhs_key' => 'id',
        'rhs_module' => 'jjwg_Areas',
        'rhs_table' => 'jjwg_areas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jjwg_maps_jjwg_areas_c',
        'join_key_lhs' => 'jjwg_maps_5304wg_maps_ida',
        'join_key_rhs' => 'jjwg_maps_41f2g_areas_idb',
      ),
    ),
    'table' => 'jjwg_maps_jjwg_areas_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'jjwg_maps_5304wg_maps_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'jjwg_maps_41f2g_areas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jjwg_maps_jjwg_areasspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jjwg_maps_jjwg_areas_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jjwg_maps_5304wg_maps_ida',
          1 => 'jjwg_maps_41f2g_areas_idb',
        ),
      ),
    ),
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_maps',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jjwg_maps_jjwg_areas_c',
    'join_key_lhs' => 'jjwg_maps_5304wg_maps_ida',
    'join_key_rhs' => 'jjwg_maps_41f2g_areas_idb',
  ),
  'jjwg_maps_jjwg_markers' => 
  array (
    'name' => 'jjwg_maps_jjwg_markers',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'jjwg_maps_jjwg_markers' => 
      array (
        'lhs_module' => 'jjwg_Maps',
        'lhs_table' => 'jjwg_maps',
        'lhs_key' => 'id',
        'rhs_module' => 'jjwg_Markers',
        'rhs_table' => 'jjwg_markers',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'jjwg_maps_jjwg_markers_c',
        'join_key_lhs' => 'jjwg_maps_b229wg_maps_ida',
        'join_key_rhs' => 'jjwg_maps_2e31markers_idb',
      ),
    ),
    'table' => 'jjwg_maps_jjwg_markers_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'jjwg_maps_b229wg_maps_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'jjwg_maps_2e31markers_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'jjwg_maps_jjwg_markersspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'jjwg_maps_jjwg_markers_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'jjwg_maps_b229wg_maps_ida',
          1 => 'jjwg_maps_2e31markers_idb',
        ),
      ),
    ),
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_maps',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'jjwg_maps_jjwg_markers_c',
    'join_key_lhs' => 'jjwg_maps_b229wg_maps_ida',
    'join_key_rhs' => 'jjwg_maps_2e31markers_idb',
  ),
  'project_contacts_1' => 
  array (
    'name' => 'project_contacts_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'project_contacts_1' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'project_contacts_1_c',
        'join_key_lhs' => 'project_contacts_1project_ida',
        'join_key_rhs' => 'project_contacts_1contacts_idb',
      ),
    ),
    'table' => 'project_contacts_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'project_contacts_1project_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'project_contacts_1contacts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'project_contacts_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'project_contacts_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_contacts_1project_ida',
          1 => 'project_contacts_1contacts_idb',
        ),
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_contacts_1_c',
    'join_key_lhs' => 'project_contacts_1project_ida',
    'join_key_rhs' => 'project_contacts_1contacts_idb',
  ),
  'project_users_1' => 
  array (
    'name' => 'project_users_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'project_users_1' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'project_users_1_c',
        'join_key_lhs' => 'project_users_1project_ida',
        'join_key_rhs' => 'project_users_1users_idb',
      ),
    ),
    'table' => 'project_users_1_c',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'project_users_1project_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'project_users_1users_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'project_users_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'project_users_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_users_1project_ida',
          1 => 'project_users_1users_idb',
        ),
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_users_1_c',
    'join_key_lhs' => 'project_users_1project_ida',
    'join_key_rhs' => 'project_users_1users_idb',
  ),
  'securitygroups_acl_roles' => 
  array (
    'name' => 'securitygroups_acl_roles',
    'table' => 'securitygroups_acl_roles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'role_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'securitygroups_acl_rolespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'securitygroups_acl_roles' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLRoles',
        'rhs_table' => 'acl_roles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_acl_roles',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'role_id',
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLRoles',
    'rhs_table' => 'acl_roles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_acl_roles',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'role_id',
  ),
  'securitygroups_accounts' => 
  array (
    'name' => 'securitygroups_accounts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_bugs' => 
  array (
    'name' => 'securitygroups_bugs',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_calls' => 
  array (
    'name' => 'securitygroups_calls',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Calls',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_campaigns' => 
  array (
    'name' => 'securitygroups_campaigns',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_cases' => 
  array (
    'name' => 'securitygroups_cases',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_contacts' => 
  array (
    'name' => 'securitygroups_contacts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_documents' => 
  array (
    'name' => 'securitygroups_documents',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_emails' => 
  array (
    'name' => 'securitygroups_emails',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Emails',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_emailtemplates' => 
  array (
    'name' => 'securitygroups_emailtemplates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EmailTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_leads' => 
  array (
    'name' => 'securitygroups_leads',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_meetings' => 
  array (
    'name' => 'securitygroups_meetings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Meetings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_notes' => 
  array (
    'name' => 'securitygroups_notes',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Notes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_opportunities' => 
  array (
    'name' => 'securitygroups_opportunities',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_project' => 
  array (
    'name' => 'securitygroups_project',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_project_task' => 
  array (
    'name' => 'securitygroups_project_task',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_prospect_lists' => 
  array (
    'name' => 'securitygroups_prospect_lists',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProspectLists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_prospects' => 
  array (
    'name' => 'securitygroups_prospects',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_tasks' => 
  array (
    'name' => 'securitygroups_tasks',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'securitygroups_users' => 
  array (
    'name' => 'securitygroups_users',
    'table' => 'securitygroups_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      5 => 
      array (
        'name' => 'primary_group',
        'vname' => 'LBL_PRIMARY_GROUP',
        'type' => 'bool',
        'reportable' => false,
        'comment' => 'Drives which custom layout to show if a user is a member of more than 1 group',
      ),
      6 => 
      array (
        'name' => 'noninheritable',
        'vname' => 'LBL_NONINHERITABLE',
        'type' => 'bool',
        'reportable' => false,
        'default' => '0',
        'comment' => 'Indicator for whether a group can be inherited by a record',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'securitygroups_usersspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'securitygroups_users_idxa',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'securitygroup_id',
        ),
      ),
      2 => 
      array (
        'name' => 'securitygroups_users_idxb',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'securitygroups_users_idxc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'deleted',
          2 => 'securitygroup_id',
          3 => 'id',
        ),
      ),
      4 => 
      array (
        'name' => 'securitygroups_users_idxd',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'deleted',
          2 => 'securitygroup_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'securitygroups_users' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_users',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_users',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'user_id',
  ),
  'surveyquestionoptions_surveyquestionresponses' => 
  array (
    'name' => 'surveyquestionoptions_surveyquestionresponses',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'surveyquestionoptions_surveyquestionresponses' => 
      array (
        'lhs_module' => 'SurveyQuestionOptions',
        'lhs_table' => 'surveyquestionoptions',
        'lhs_key' => 'id',
        'rhs_module' => 'SurveyQuestionResponses',
        'rhs_table' => 'surveyquestionresponses',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'surveyquestionoptions_surveyquestionresponses',
        'join_key_lhs' => 'surveyq72c7options_ida',
        'join_key_rhs' => 'surveyq10d4sponses_idb',
      ),
    ),
    'table' => 'surveyquestionoptions_surveyquestionresponses',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'surveyq72c7options_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'surveyq10d4sponses_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'surveyquestionoptions_surveyquestionresponsesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'surveyquestionoptions_surveyquestionresponses_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'surveyq72c7options_ida',
          1 => 'surveyq10d4sponses_idb',
        ),
      ),
    ),
    'lhs_module' => 'SurveyQuestionOptions',
    'lhs_table' => 'surveyquestionoptions',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'surveyquestionoptions_surveyquestionresponses',
    'join_key_lhs' => 'surveyq72c7options_ida',
    'join_key_rhs' => 'surveyq10d4sponses_idb',
  ),
  'appraisals_documents' => 
  array (
    'name' => 'appraisals_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'appraisals_documents' => 
      array (
        'lhs_module' => 'Appraisals',
        'lhs_table' => 'appraisals',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'appraisals_documents',
        'join_key_lhs' => 'appraisal_id',
        'join_key_rhs' => 'document_id',
      ),
    ),
    'table' => 'appraisals_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'appraisal_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'appraisals_documentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'appraisals_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'appraisal_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Appraisals',
    'lhs_table' => 'appraisals',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'appraisals_documents',
    'join_key_lhs' => 'appraisal_id',
    'join_key_rhs' => 'document_id',
  ),
  'appraisals_meetings' => 
  array (
    'name' => 'appraisals_meetings',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'appraisals_meetings' => 
      array (
        'lhs_module' => 'Appraisals',
        'lhs_table' => 'appraisals',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'appraisals_meetings',
        'join_key_lhs' => 'appraisal_id',
        'join_key_rhs' => 'meeting_id',
      ),
    ),
    'table' => 'appraisals_meetings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'appraisal_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'appraisals_meetingsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'appraisals_meetings_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'appraisal_id',
          1 => 'meeting_id',
        ),
      ),
    ),
    'lhs_module' => 'Appraisals',
    'lhs_table' => 'appraisals',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'appraisals_meetings',
    'join_key_lhs' => 'appraisal_id',
    'join_key_rhs' => 'meeting_id',
  ),
  'appraisals_roles' => 
  array (
    'name' => 'appraisals_roles',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'appraisals_roles' => 
      array (
        'lhs_module' => 'Appraisals',
        'lhs_table' => 'appraisals',
        'lhs_key' => 'id',
        'rhs_module' => 'EmployeeRoles',
        'rhs_table' => 'employeeroles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'appraisals_roles',
        'join_key_lhs' => 'appraisal_id',
        'join_key_rhs' => 'role_id',
      ),
    ),
    'table' => 'appraisals_roles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'appraisal_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'appraisals_rolesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'appraisals_roles_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'appraisal_id',
          1 => 'role_id',
        ),
      ),
    ),
    'lhs_module' => 'Appraisals',
    'lhs_table' => 'appraisals',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'appraisals_roles',
    'join_key_lhs' => 'appraisal_id',
    'join_key_rhs' => 'role_id',
  ),
  'benefits_employees' => 
  array (
    'name' => 'benefits_employees',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'benefits_employees' => 
      array (
        'lhs_module' => 'Benefits',
        'lhs_table' => 'benefits',
        'lhs_key' => 'id',
        'rhs_module' => 'Employees',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'benefits_employees',
        'join_key_lhs' => 'benefit_id',
        'join_key_rhs' => 'employee_id',
      ),
    ),
    'table' => 'benefits_employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'benefit_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'employee_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'benefits_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'benefit_id',
          1 => 'employee_id',
        ),
      ),
    ),
    'lhs_module' => 'Benefits',
    'lhs_table' => 'benefits',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'benefits_employees',
    'join_key_lhs' => 'benefit_id',
    'join_key_rhs' => 'employee_id',
  ),
  'benefits_positions' => 
  array (
    'name' => 'benefits_positions',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'benefits_positions' => 
      array (
        'lhs_module' => 'Benefits',
        'lhs_table' => 'benefits',
        'lhs_key' => 'id',
        'rhs_module' => 'Positions',
        'rhs_table' => 'positions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'benefits_positions',
        'join_key_lhs' => 'benefit_id',
        'join_key_rhs' => 'position_id',
      ),
    ),
    'table' => 'benefits_positions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'benefit_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'position_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'roles_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'benefit_id',
          1 => 'position_id',
        ),
      ),
    ),
    'lhs_module' => 'Benefits',
    'lhs_table' => 'benefits',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'benefits_positions',
    'join_key_lhs' => 'benefit_id',
    'join_key_rhs' => 'position_id',
  ),
  'benefits_roles' => 
  array (
    'name' => 'benefits_roles',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'benefits_roles' => 
      array (
        'lhs_module' => 'Benefits',
        'lhs_table' => 'benefits',
        'lhs_key' => 'id',
        'rhs_module' => 'EmployeeRoles',
        'rhs_table' => 'employeeroles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'benefits_roles',
        'join_key_lhs' => 'benefit_id',
        'join_key_rhs' => 'role_id',
      ),
    ),
    'table' => 'benefits_roles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'benefit_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'roles_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'benefit_id',
          1 => 'role_id',
        ),
      ),
    ),
    'lhs_module' => 'Benefits',
    'lhs_table' => 'benefits',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'benefits_roles',
    'join_key_lhs' => 'benefit_id',
    'join_key_rhs' => 'role_id',
  ),
  'calls_candidates' => 
  array (
    'name' => 'calls_candidates',
    'table' => 'calls_candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'candidate_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_candidatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_candidates_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_candidates_call_candidates',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'candidate_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_candidates',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'candidate_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_candidates' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Candidates',
        'rhs_table' => 'candidates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_candidates',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'candidate_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_candidates',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'candidate_id',
  ),
  'candidates_employees' => 
  array (
    'name' => 'candidates_employees',
    'true_relationship_type' => 'one-to-one',
    'relationships' => 
    array (
      'candidates_employees' => 
      array (
        'lhs_module' => 'Candidates',
        'lhs_table' => 'candidates',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'candidates_employees',
        'join_key_lhs' => 'candidate_id',
        'join_key_rhs' => 'employee_id',
      ),
    ),
    'table' => 'candidates_employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'candidate_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'employee_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'candidates_employees_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'candidates_lhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'candidate_id',
        ),
      ),
      2 => 
      array (
        'name' => 'employees_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'employee_id',
        ),
      ),
    ),
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'candidates_employees',
    'join_key_lhs' => 'candidate_id',
    'join_key_rhs' => 'employee_id',
  ),
  'conclusions_improvements' => 
  array (
    'name' => 'conclusions_improvements',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'conclusions_improvements' => 
      array (
        'lhs_module' => 'Conclusions',
        'lhs_table' => 'conclusions',
        'lhs_key' => 'id',
        'rhs_module' => 'Improvements',
        'rhs_table' => 'improvements',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'conclusions_improvements',
        'join_key_lhs' => 'conclusion_id',
        'join_key_rhs' => 'improvement_id',
      ),
    ),
    'table' => 'conclusions_improvements',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'conclusion_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'improvement_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'conclusion_id_improvement_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'conclusion_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'conclusion_id',
        ),
      ),
      2 => 
      array (
        'name' => 'improvement_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'improvement_id',
        ),
      ),
    ),
    'lhs_module' => 'Conclusions',
    'lhs_table' => 'conclusions',
    'lhs_key' => 'id',
    'rhs_module' => 'Improvements',
    'rhs_table' => 'improvements',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'conclusions_improvements',
    'join_key_lhs' => 'conclusion_id',
    'join_key_rhs' => 'improvement_id',
  ),
  'conclusions_problems' => 
  array (
    'name' => 'conclusions_problems',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'conclusions_problems' => 
      array (
        'lhs_module' => 'Conclusions',
        'lhs_table' => 'conclusions',
        'lhs_key' => 'id',
        'rhs_module' => 'Problems',
        'rhs_table' => 'problems',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'conclusions_problems',
        'join_key_lhs' => 'conclusion_id',
        'join_key_rhs' => 'problem_id',
      ),
    ),
    'table' => 'conclusions_problems',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'conclusion_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'problem_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'conclusion_id_problem_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'conclusion_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'conclusion_id',
        ),
      ),
      2 => 
      array (
        'name' => 'problem_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'problem_id',
        ),
      ),
    ),
    'lhs_module' => 'Conclusions',
    'lhs_table' => 'conclusions',
    'lhs_key' => 'id',
    'rhs_module' => 'Problems',
    'rhs_table' => 'problems',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'conclusions_problems',
    'join_key_lhs' => 'conclusion_id',
    'join_key_rhs' => 'problem_id',
  ),
  'candidatures_emails' => 
  array (
    'name' => 'candidatures_emails',
    'relationships' => 
    array (
      'candidatures_emails' => 
      array (
        'lhs_module' => 'Candidatures',
        'lhs_table' => 'candidatures',
        'lhs_key' => 'id',
        'rhs_module' => 'Emails',
        'rhs_table' => 'emails',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Candidatures',
      ),
    ),
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Candidatures',
  ),
  'recruitments_emails' => 
  array (
    'name' => 'recruitments_emails',
    'relationships' => 
    array (
      'recruitments_emails' => 
      array (
        'lhs_module' => 'Recruitments',
        'lhs_table' => 'recruitments',
        'lhs_key' => 'id',
        'rhs_module' => 'Emails',
        'rhs_table' => 'emails',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'Recruitments',
      ),
    ),
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Recruitments',
  ),
  'exitinterviews_documents' => 
  array (
    'name' => 'exitinterviews_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'exitinterviews_documents' => 
      array (
        'lhs_module' => 'ExitInterviews',
        'lhs_table' => 'exitinterviews',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'exitinterviews_documents',
        'join_key_lhs' => 'exitinterview_id',
        'join_key_rhs' => 'document_id',
      ),
    ),
    'table' => 'exitinterviews_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'exitinterview_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'exitinterviews_documentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'exitinterviews_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'exitinterview_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'ExitInterviews',
    'lhs_table' => 'exitinterviews',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'exitinterviews_documents',
    'join_key_lhs' => 'exitinterview_id',
    'join_key_rhs' => 'document_id',
  ),
  'exitinterviews_meetings' => 
  array (
    'name' => 'exitinterviews_meetings',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'exitinterviews_meetings' => 
      array (
        'lhs_module' => 'ExitInterviews',
        'lhs_table' => 'exitinterviews',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'exitinterviews_meetings',
        'join_key_lhs' => 'exitinterview_id',
        'join_key_rhs' => 'meeting_id',
      ),
    ),
    'table' => 'exitinterviews_meetings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'exitinterview_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'exitinterviews_meetingsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'exitinterviews_meetings_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'exitinterview_id',
          1 => 'meeting_id',
        ),
      ),
    ),
    'lhs_module' => 'ExitInterviews',
    'lhs_table' => 'exitinterviews',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'exitinterviews_meetings',
    'join_key_lhs' => 'exitinterview_id',
    'join_key_rhs' => 'meeting_id',
  ),
  'meetings_candidates' => 
  array (
    'name' => 'meetings_candidates',
    'table' => 'meetings_candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'candidate_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_candidatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_candidates_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_candidates_meeting_candidates',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'candidate_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_candidates',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'candidate_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_candidates' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Candidates',
        'rhs_table' => 'candidates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_candidates',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'candidate_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_candidates',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'candidate_id',
  ),
  'onboardingoffboardingelements_offboardingtemplates' => 
  array (
    'name' => 'onboardingoffboardingelements_offboardingtemplates',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'onboardingoffboardingelements_offboardingtemplates' => 
      array (
        'lhs_module' => 'OnboardingOffboardingElements',
        'lhs_table' => 'onboardingoffboardingelements',
        'lhs_key' => 'id',
        'rhs_module' => 'OffboardingTemplates',
        'rhs_table' => 'offboardingtemplates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'onboardingoffboardingelements_offboardingtemplates',
        'join_key_lhs' => 'onboardingoffboardingelements_id',
        'join_key_rhs' => 'offboardingtemplates_id',
      ),
    ),
    'table' => 'onboardingoffboardingelements_offboardingtemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'onboardingoffboardingelements_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'offboardingtemplates_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'onboardingoffboardingelements_id_offboardingtemplates_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'onboardingoffboardingelements_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'onboardingoffboardingelements_id',
        ),
      ),
      2 => 
      array (
        'name' => 'offboardingtemplates_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'offboardingtemplates_id',
        ),
      ),
    ),
    'lhs_module' => 'OnboardingOffboardingElements',
    'lhs_table' => 'onboardingoffboardingelements',
    'lhs_key' => 'id',
    'rhs_module' => 'OffboardingTemplates',
    'rhs_table' => 'offboardingtemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'onboardingoffboardingelements_offboardingtemplates',
    'join_key_lhs' => 'onboardingoffboardingelements_id',
    'join_key_rhs' => 'offboardingtemplates_id',
  ),
  'onboardingoffboardingelements_onboardingtemplates' => 
  array (
    'name' => 'onboardingoffboardingelements_onboardingtemplates',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'onboardingoffboardingelements_onboardingtemplates' => 
      array (
        'lhs_module' => 'OnboardingOffboardingElements',
        'lhs_table' => 'onboardingoffboardingelements',
        'lhs_key' => 'id',
        'rhs_module' => 'OnboardingTemplates',
        'rhs_table' => 'onboardingtemplates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'onboardingoffboardingelements_onboardingtemplates',
        'join_key_lhs' => 'onboardingoffboardingelements_id',
        'join_key_rhs' => 'onboardingtemplates_id',
      ),
    ),
    'table' => 'onboardingoffboardingelements_onboardingtemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'onboardingoffboardingelements_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'onboardingtemplates_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'onboardingoffboardingelements_id_onboardingtemplates_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'onboardingoffboardingelements_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'onboardingoffboardingelements_id',
        ),
      ),
      2 => 
      array (
        'name' => 'onboardingtemplates_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'onboardingtemplates_id',
        ),
      ),
    ),
    'lhs_module' => 'OnboardingOffboardingElements',
    'lhs_table' => 'onboardingoffboardingelements',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingTemplates',
    'rhs_table' => 'onboardingtemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'onboardingoffboardingelements_onboardingtemplates',
    'join_key_lhs' => 'onboardingoffboardingelements_id',
    'join_key_rhs' => 'onboardingtemplates_id',
  ),
  'securitygroups_positions_leader' => 
  array (
    'name' => 'securitygroups_positions_leader',
    'true_relationship_type' => 'one-to-one',
    'relationships' => 
    array (
      'securitygroups_positions_leader' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'Positions',
        'rhs_table' => 'positions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_positions_leader',
        'join_key_lhs' => 'securitygroup_leader_id',
        'join_key_rhs' => 'position_leader_id',
      ),
    ),
    'table' => 'securitygroups_positions_leader',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'securitygroup_leader_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'position_leader_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'securitygroups_positions_leader_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'securitygroups_lhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'securitygroup_leader_id',
        ),
      ),
      2 => 
      array (
        'name' => 'positions_rhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'position_leader_id',
        ),
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_positions_leader',
    'join_key_lhs' => 'securitygroup_leader_id',
    'join_key_rhs' => 'position_leader_id',
  ),
  'securitygroups_positions_membership' => 
  array (
    'name' => 'securitygroups_positions_membership',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'securitygroups_positions_membership' => 
      array (
        'lhs_module' => 'SecurityGroups',
        'lhs_table' => 'securitygroups',
        'lhs_key' => 'id',
        'rhs_module' => 'Positions',
        'rhs_table' => 'positions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'securitygroups_positions_membership',
        'join_key_lhs' => 'securitygroup_id',
        'join_key_rhs' => 'position_id',
      ),
    ),
    'table' => 'securitygroups_positions_membership',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'position_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'securitygroups_positions_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'securitygroup_id',
          1 => 'position_id',
        ),
      ),
    ),
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_positions_membership',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'position_id',
  ),
  'positions_documents' => 
  array (
    'name' => 'positions_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'positions_documents' => 
      array (
        'lhs_module' => 'Positions',
        'lhs_table' => 'positions',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'positions_documents',
        'join_key_lhs' => 'positions_lhs_id',
        'join_key_rhs' => 'documents_rhs_id',
      ),
    ),
    'table' => 'positions_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'positions_lhs_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'documents_rhs_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'positions_documents_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'positions_lhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'positions_lhs_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_rhs_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'documents_rhs_id',
        ),
      ),
    ),
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'positions_documents',
    'join_key_lhs' => 'positions_lhs_id',
    'join_key_rhs' => 'documents_rhs_id',
  ),
  'positions_employees' => 
  array (
    'name' => 'positions_employees',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'positions_employees' => 
      array (
        'lhs_module' => 'Positions',
        'lhs_table' => 'positions',
        'lhs_key' => 'id',
        'rhs_module' => 'Employees',
        'rhs_table' => 'users',
        'rhs_key' => 'position_id',
        'relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'position_id',
    'relationship_type' => 'one-to-many',
  ),
  'responsibilities_activities' => 
  array (
    'name' => 'responsibilities_activities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'responsibilities_activities' => 
      array (
        'lhs_module' => 'Responsibilities',
        'lhs_table' => 'responsibilities',
        'lhs_key' => 'id',
        'rhs_module' => 'ResponsibilityActivities',
        'rhs_table' => 'responsibilityactivities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'responsibilities_activities',
        'join_key_lhs' => 'responsibility_id',
        'join_key_rhs' => 'activity_id',
      ),
    ),
    'table' => 'responsibilities_activities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'responsibility_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'activity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'responsibilities_activities_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'responsibility_id',
          1 => 'activity_id',
        ),
      ),
    ),
    'lhs_module' => 'Responsibilities',
    'lhs_table' => 'responsibilities',
    'lhs_key' => 'id',
    'rhs_module' => 'ResponsibilityActivities',
    'rhs_table' => 'responsibilityactivities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'responsibilities_activities',
    'join_key_lhs' => 'responsibility_id',
    'join_key_rhs' => 'activity_id',
  ),
  'responsibilities_positions' => 
  array (
    'name' => 'responsibilities_positions',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'responsibilities_positions' => 
      array (
        'lhs_module' => 'Responsibilities',
        'lhs_table' => 'responsibilities',
        'lhs_key' => 'id',
        'rhs_module' => 'Positions',
        'rhs_table' => 'positions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'responsibilities_positions',
        'join_key_lhs' => 'responsibility_id',
        'join_key_rhs' => 'position_id',
      ),
    ),
    'table' => 'responsibilities_positions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'responsibility_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'position_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'roles_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'responsibility_id',
          1 => 'position_id',
        ),
      ),
    ),
    'lhs_module' => 'Responsibilities',
    'lhs_table' => 'responsibilities',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'responsibilities_positions',
    'join_key_lhs' => 'responsibility_id',
    'join_key_rhs' => 'position_id',
  ),
  'responsibilities_roles' => 
  array (
    'name' => 'responsibilities_roles',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'responsibilities_roles' => 
      array (
        'lhs_module' => 'Responsibilities',
        'lhs_table' => 'responsibilities',
        'lhs_key' => 'id',
        'rhs_module' => 'EmployeeRoles',
        'rhs_table' => 'employeeroles',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'responsibilities_roles',
        'join_key_lhs' => 'responsibility_id',
        'join_key_rhs' => 'role_id',
      ),
    ),
    'table' => 'responsibilities_roles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'responsibility_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'roles_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'responsibility_id',
          1 => 'role_id',
        ),
      ),
    ),
    'lhs_module' => 'Responsibilities',
    'lhs_table' => 'responsibilities',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'responsibilities_roles',
    'join_key_lhs' => 'responsibility_id',
    'join_key_rhs' => 'role_id',
  ),
  'roles_employees' => 
  array (
    'name' => 'roles_employees',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'roles_employees' => 
      array (
        'lhs_module' => 'EmployeeRoles',
        'lhs_table' => 'employeeroles',
        'lhs_key' => 'id',
        'rhs_module' => 'Employees',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_employees',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'employee_id',
      ),
    ),
    'table' => 'roles_employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'employee_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'id_index',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'roles_users_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'employee_id',
        ),
      ),
    ),
    'lhs_module' => 'EmployeeRoles',
    'lhs_table' => 'employeeroles',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_employees',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'employee_id',
  ),
  'certificates_trainings' => 
  array (
    'name' => 'certificates_trainings',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'certificates_trainings' => 
      array (
        'lhs_module' => 'Trainings',
        'lhs_table' => 'trainings',
        'lhs_key' => 'id',
        'rhs_module' => 'Certificates',
        'rhs_table' => 'certificates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'certificates_trainings',
        'join_key_lhs' => 'trainings_id',
        'join_key_rhs' => 'certificates_id',
      ),
    ),
    'table' => 'certificates_trainings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'trainings_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'certificates_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'trainings_id_certificates_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'trainings_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'trainings_id',
        ),
      ),
      2 => 
      array (
        'name' => 'certificates_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'certificates_id',
        ),
      ),
    ),
    'lhs_module' => 'Trainings',
    'lhs_table' => 'trainings',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'certificates_trainings',
    'join_key_lhs' => 'trainings_id',
    'join_key_rhs' => 'certificates_id',
  ),
  'trainings_documents' => 
  array (
    'name' => 'trainings_documents',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'trainings_documents' => 
      array (
        'lhs_module' => 'Trainings',
        'lhs_table' => 'trainings',
        'lhs_key' => 'id',
        'rhs_module' => 'Documents',
        'rhs_table' => 'documents',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'trainings_documents',
        'join_key_lhs' => 'training_id',
        'join_key_rhs' => 'document_id',
      ),
    ),
    'table' => 'trainings_documents',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'training_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'trainings_documentsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'trainings_documents_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'training_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Trainings',
    'lhs_table' => 'trainings',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'trainings_documents',
    'join_key_lhs' => 'training_id',
    'join_key_rhs' => 'document_id',
  ),
  'trainings_meetings' => 
  array (
    'name' => 'trainings_meetings',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'trainings_meetings' => 
      array (
        'lhs_module' => 'Trainings',
        'lhs_table' => 'trainings',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'trainings_meetings',
        'join_key_lhs' => 'training_id',
        'join_key_rhs' => 'meeting_id',
      ),
    ),
    'table' => 'trainings_meetings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'training_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'trainings_meetingsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'trainings_meetings_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'training_id',
          1 => 'meeting_id',
        ),
      ),
    ),
    'lhs_module' => 'Trainings',
    'lhs_table' => 'trainings',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'trainings_meetings',
    'join_key_lhs' => 'training_id',
    'join_key_rhs' => 'meeting_id',
  ),
  'users_schedulereports' => 
  array (
    'name' => 'users_schedulereports',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'users_schedulereports' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'ScheduleReports',
        'rhs_table' => 'schedulereports',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'users_schedulereports',
        'join_key_lhs' => 'user_id',
        'join_key_rhs' => 'schedulereport_id',
      ),
    ),
    'table' => 'users_schedulereports',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'schedulereport_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'users_schedulereports_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'user_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      2 => 
      array (
        'name' => 'schedulereport_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'schedulereport_id',
        ),
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReports',
    'rhs_table' => 'schedulereports',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'users_schedulereports',
    'join_key_lhs' => 'user_id',
    'join_key_rhs' => 'schedulereport_id',
  ),
  'documents_candidates' => 
  array (
    'name' => 'documents_candidates',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_candidates' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Candidates',
        'rhs_table' => 'candidates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_candidates',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'candidate_id',
      ),
    ),
    'table' => 'documents_candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'candidate_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_candidatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_candidates_candidate_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'candidate_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_candidates',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'candidate_id',
  ),
  'documents_candidatures' => 
  array (
    'name' => 'documents_candidatures',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_candidatures' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Candidatures',
        'rhs_table' => 'candidatures',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_candidatures',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'candidature_id',
      ),
    ),
    'table' => 'documents_candidatures',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'candidature_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_candidaturesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_candidatures_candidature_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'candidature_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_candidatures',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'candidature_id',
  ),
  'documents_certificates' => 
  array (
    'name' => 'documents_certificates',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_certificates' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Certificates',
        'rhs_table' => 'certificates',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_certificates',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'certificate_id',
      ),
    ),
    'table' => 'documents_certificates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'certificate_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_certificatesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_certificates_certificate_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'certificate_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_certificates',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'certificate_id',
  ),
  'documents_contracts' => 
  array (
    'name' => 'documents_contracts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contracts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contracts',
        'rhs_table' => 'contracts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contracts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contract_id',
      ),
    ),
    'table' => 'documents_contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contractsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contracts_contract_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contracts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contract_id',
  ),
  'documents_delegations' => 
  array (
    'name' => 'documents_delegations',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_delegations' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Delegations',
        'rhs_table' => 'delegations',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_delegations',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'delegation_id',
      ),
    ),
    'table' => 'documents_delegations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'delegation_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_delegationsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_delegations_delegation_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'delegation_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_delegations',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'delegation_id',
  ),
  'documents_termsofemployment' => 
  array (
    'name' => 'documents_termsofemployment',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_termsofemployment' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'TermsOfEmployment',
        'rhs_table' => 'termsofemployment',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_termsofemployment',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'termsofemployment_id',
      ),
    ),
    'table' => 'documents_termsofemployment',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'termsofemployment_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_termsofemploymentspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_termsofemployment_termsofemployment_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'termsofemployment_id',
          1 => 'document_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_termsofemployment',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'termsofemployment_id',
  ),
  'knowledge_competencies' => 
  array (
    'name' => 'knowledge_competencies',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'knowledge_competencies' => 
      array (
        'lhs_module' => 'Knowledge',
        'lhs_table' => 'knowledge',
        'lhs_key' => 'id',
        'rhs_module' => 'Competencies',
        'rhs_table' => 'competencies',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'knowledge_competencies',
        'join_key_lhs' => 'knowledge_id',
        'join_key_rhs' => 'competencies_id',
      ),
    ),
    'table' => 'knowledge_competencies',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'knowledge_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'competencies_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'competencies_id_knowledge_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'competencies_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'competencies_id',
        ),
      ),
      2 => 
      array (
        'name' => 'knowledge_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'knowledge_id',
        ),
      ),
    ),
    'lhs_module' => 'Knowledge',
    'lhs_table' => 'knowledge',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'knowledge_competencies',
    'join_key_lhs' => 'knowledge_id',
    'join_key_rhs' => 'competencies_id',
  ),
  'skills_competencies' => 
  array (
    'name' => 'skills_competencies',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'skills_competencies' => 
      array (
        'lhs_module' => 'Skills',
        'lhs_table' => 'skills',
        'lhs_key' => 'id',
        'rhs_module' => 'Competencies',
        'rhs_table' => 'competencies',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'skills_competencies',
        'join_key_lhs' => 'skills_id',
        'join_key_rhs' => 'competencies_id',
      ),
    ),
    'table' => 'skills_competencies',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'skills_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'competencies_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'competencies_id_skills_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'competencies_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'competencies_id',
        ),
      ),
      2 => 
      array (
        'name' => 'skills_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'skills_id',
        ),
      ),
    ),
    'lhs_module' => 'Skills',
    'lhs_table' => 'skills',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'skills_competencies',
    'join_key_lhs' => 'skills_id',
    'join_key_rhs' => 'competencies_id',
  ),
  'attitudes_competencies' => 
  array (
    'name' => 'attitudes_competencies',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'attitudes_competencies' => 
      array (
        'lhs_module' => 'Attitudes',
        'lhs_table' => 'attitudes',
        'lhs_key' => 'id',
        'rhs_module' => 'Competencies',
        'rhs_table' => 'competencies',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'attitudes_competencies',
        'join_key_lhs' => 'attitudes_id',
        'join_key_rhs' => 'competencies_id',
      ),
    ),
    'table' => 'attitudes_competencies',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => 36,
      ),
      1 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      2 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'attitudes_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'competencies_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'competencies_id_attitudes_id_spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'competencies_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'competencies_id',
        ),
      ),
      2 => 
      array (
        'name' => 'attitudes_id_alt',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'attitudes_id',
        ),
      ),
    ),
    'lhs_module' => 'Attitudes',
    'lhs_table' => 'attitudes',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'attitudes_competencies',
    'join_key_lhs' => 'attitudes_id',
    'join_key_rhs' => 'competencies_id',
  ),
  'securitygroups_modified_user' => 
  array (
    'name' => 'securitygroups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_created_by' => 
  array (
    'name' => 'securitygroups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_assigned_user' => 
  array (
    'name' => 'securitygroups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'employees_securitygroups' => 
  array (
    'name' => 'employees_securitygroups',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'current_manager_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_employees' => 
  array (
    'name' => 'securitygroups_employees',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'securitygroup_id',
    'relationship_type' => 'one-to-many',
  ),
  'member_securitygroups' => 
  array (
    'name' => 'member_securitygroups',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SecurityGroups',
    'rhs_table' => 'securitygroups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_modified_user' => 
  array (
    'name' => 'aow_workflow_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_created_by' => 
  array (
    'name' => 'aow_workflow_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_assigned_user' => 
  array (
    'name' => 'aow_workflow_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aow_workflow' => 
  array (
    'name' => 'securitygroups_aow_workflow',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_WorkFlow',
    'rhs_table' => 'aow_workflow',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOW_WorkFlow',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aow_workflow_aow_conditions' => 
  array (
    'name' => 'aow_workflow_aow_conditions',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_aow_actions' => 
  array (
    'name' => 'aow_workflow_aow_actions',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_workflow_aow_processed' => 
  array (
    'name' => 'aow_workflow_aow_processed',
    'lhs_module' => 'AOW_WorkFlow',
    'lhs_table' => 'aow_workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'aow_workflow_id',
    'relationship_type' => 'one-to-many',
  ),
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignature',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'cases_created_contact' => 
  array (
    'name' => 'cases_created_contact',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'contact_created_by_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'prospectlists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_prospectlists' => 
  array (
    'name' => 'securitygroups_prospectlists',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProspectLists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'projects_notes' => 
  array (
    'name' => 'projects_notes',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_tasks' => 
  array (
    'name' => 'projects_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_meetings' => 
  array (
    'name' => 'projects_meetings',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_calls' => 
  array (
    'name' => 'projects_calls',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_emails' => 
  array (
    'name' => 'projects_emails',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_project_tasks' => 
  array (
    'name' => 'projects_project_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'project_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_assigned_user' => 
  array (
    'name' => 'projects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_modified_user' => 
  array (
    'name' => 'projects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_created_by' => 
  array (
    'name' => 'projects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_projecttask' => 
  array (
    'name' => 'securitygroups_projecttask',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'project_tasks_notes' => 
  array (
    'name' => 'project_tasks_notes',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_tasks' => 
  array (
    'name' => 'project_tasks_tasks',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_meetings' => 
  array (
    'name' => 'project_tasks_meetings',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_calls' => 
  array (
    'name' => 'project_tasks_calls',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_emails' => 
  array (
    'name' => 'project_tasks_emails',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_assigned_user' => 
  array (
    'name' => 'project_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_modified_user' => 
  array (
    'name' => 'project_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_created_by' => 
  array (
    'name' => 'project_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyresponses_campaigns' => 
  array (
    'name' => 'surveyresponses_campaigns',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'campaign_id',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_created_opportunities' => 
  array (
    'name' => 'campaignlog_created_opportunities',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_targeted_users' => 
  array (
    'name' => 'campaignlog_targeted_users',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'target_id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_sent_emails' => 
  array (
    'name' => 'campaignlog_sent_emails',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'schedulers_modified_user_id_rel' => 
  array (
    'name' => 'schedulers_modified_user_id_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_jobs_rel' => 
  array (
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulersjobs_assigned_user' => 
  array (
    'name' => 'schedulersjobs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'job_queue',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_notes_parent' => 
  array (
    'name' => 'contact_notes_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_aos_quotes' => 
  array (
    'name' => 'contact_aos_quotes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'billing_contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_aos_invoices' => 
  array (
    'name' => 'contact_aos_invoices',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'billing_contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_aos_contracts' => 
  array (
    'name' => 'contact_aos_contracts',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_aop_case_updates' => 
  array (
    'name' => 'contacts_aop_case_updates',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'target_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_aos_quotes' => 
  array (
    'name' => 'account_aos_quotes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'billing_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_aos_invoices' => 
  array (
    'name' => 'account_aos_invoices',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'billing_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_aos_contracts' => 
  array (
    'name' => 'account_aos_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'contract_account_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_emails' => 
  array (
    'name' => 'opportunity_emails',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_currencies' => 
  array (
    'name' => 'opportunity_currencies',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'currency_id',
    'rhs_module' => 'Currencies',
    'rhs_table' => 'currencies',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_campaign' => 
  array (
    'name' => 'opportunities_campaign',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_aos_quotes' => 
  array (
    'name' => 'opportunity_aos_quotes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_aos_contracts' => 
  array (
    'name' => 'opportunity_aos_contracts',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'calls_reschedule' => 
  array (
    'name' => 'calls_reschedule',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'call_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_employees_rel' => 
  array (
    'name' => 'emails_employees_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Employees',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_candidates_rel' => 
  array (
    'name' => 'emails_candidates_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_aos_contracts_rel' => 
  array (
    'name' => 'emails_aos_contracts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'AOS_Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_meetings_rel' => 
  array (
    'name' => 'emails_meetings_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'alerts_modified_user' => 
  array (
    'name' => 'alerts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'alerts_created_by' => 
  array (
    'name' => 'alerts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'alerts_assigned_user' => 
  array (
    'name' => 'alerts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Alerts',
    'rhs_table' => 'alerts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'spots_modified_user' => 
  array (
    'name' => 'spots_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'spots_created_by' => 
  array (
    'name' => 'spots_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'spots_assigned_user' => 
  array (
    'name' => 'spots_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_spots' => 
  array (
    'name' => 'securitygroups_spots',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Spots',
    'rhs_table' => 'spots',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Spots',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aobh_businesshours_modified_user' => 
  array (
    'name' => 'aobh_businesshours_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOBH_BusinessHours',
    'rhs_table' => 'aobh_businesshours',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aobh_businesshours_created_by' => 
  array (
    'name' => 'aobh_businesshours_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOBH_BusinessHours',
    'rhs_table' => 'aobh_businesshours',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_modified_user' => 
  array (
    'name' => 'sugarfeed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_created_by' => 
  array (
    'name' => 'sugarfeed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_assigned_user' => 
  array (
    'name' => 'sugarfeed_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauth_consumer',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_modified_user' => 
  array (
    'name' => 'am_projecttemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_created_by' => 
  array (
    'name' => 'am_projecttemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'am_projecttemplates_assigned_user' => 
  array (
    'name' => 'am_projecttemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_ProjectTemplates',
    'rhs_table' => 'am_projecttemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_modified_user' => 
  array (
    'name' => 'am_tasktemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_created_by' => 
  array (
    'name' => 'am_tasktemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'am_tasktemplates_assigned_user' => 
  array (
    'name' => 'am_tasktemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AM_TaskTemplates',
    'rhs_table' => 'am_tasktemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_modified_user' => 
  array (
    'name' => 'favorites_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_created_by' => 
  array (
    'name' => 'favorites_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'favorites_assigned_user' => 
  array (
    'name' => 'favorites_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Favorites',
    'rhs_table' => 'favorites',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_modified_user' => 
  array (
    'name' => 'aok_knowledge_base_categories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_created_by' => 
  array (
    'name' => 'aok_knowledge_base_categories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledge_base_categories_assigned_user' => 
  array (
    'name' => 'aok_knowledge_base_categories_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_Knowledge_Base_Categories',
    'rhs_table' => 'aok_knowledge_base_categories',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_modified_user' => 
  array (
    'name' => 'aok_knowledgebase_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_created_by' => 
  array (
    'name' => 'aok_knowledgebase_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aok_knowledgebase_assigned_user' => 
  array (
    'name' => 'aok_knowledgebase_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aok_knowledgebase' => 
  array (
    'name' => 'securitygroups_aok_knowledgebase',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOK_KnowledgeBase',
    'rhs_table' => 'aok_knowledgebase',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOK_KnowledgeBase',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'reminders_modified_user' => 
  array (
    'name' => 'reminders_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_created_by' => 
  array (
    'name' => 'reminders_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_assigned_user' => 
  array (
    'name' => 'reminders_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders',
    'rhs_table' => 'reminders',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_modified_user' => 
  array (
    'name' => 'reminders_invitees_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_created_by' => 
  array (
    'name' => 'reminders_invitees_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reminders_invitees_assigned_user' => 
  array (
    'name' => 'reminders_invitees_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reminders_Invitees',
    'rhs_table' => 'reminders_invitees',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_modified_user' => 
  array (
    'name' => 'fp_events_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_created_by' => 
  array (
    'name' => 'fp_events_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'fp_events_assigned_user' => 
  array (
    'name' => 'fp_events_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_fp_events' => 
  array (
    'name' => 'securitygroups_fp_events',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_events',
    'rhs_table' => 'fp_events',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'FP_events',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'fp_event_locations_modified_user' => 
  array (
    'name' => 'fp_event_locations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'fp_event_locations_created_by' => 
  array (
    'name' => 'fp_event_locations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'fp_event_locations_assigned_user' => 
  array (
    'name' => 'fp_event_locations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_fp_event_locations' => 
  array (
    'name' => 'securitygroups_fp_event_locations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'FP_Event_Locations',
    'rhs_table' => 'fp_event_locations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'FP_Event_Locations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'optimistic_locking' => 
  array (
    'name' => 'optimistic_locking',
    0 => true,
  ),
  'unified_search' => 
  array (
    'name' => 'unified_search',
    0 => true,
  ),
  'aod_indexevent_modified_user' => 
  array (
    'name' => 'aod_indexevent_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_indexevent_created_by' => 
  array (
    'name' => 'aod_indexevent_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aod_indexevent_assigned_user' => 
  array (
    'name' => 'aod_indexevent_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_IndexEvent',
    'rhs_table' => 'aod_indexevent',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_modified_user' => 
  array (
    'name' => 'aod_index_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_created_by' => 
  array (
    'name' => 'aod_index_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aod_index_assigned_user' => 
  array (
    'name' => 'aod_index_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOD_Index',
    'rhs_table' => 'aod_index',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_modified_user' => 
  array (
    'name' => 'aop_case_events_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_created_by' => 
  array (
    'name' => 'aop_case_events_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_events_assigned_user' => 
  array (
    'name' => 'aop_case_events_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_aop_case_events' => 
  array (
    'name' => 'cases_aop_case_events',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Events',
    'rhs_table' => 'aop_case_events',
    'rhs_key' => 'case_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_modified_user' => 
  array (
    'name' => 'aop_case_updates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_created_by' => 
  array (
    'name' => 'aop_case_updates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_assigned_user' => 
  array (
    'name' => 'aop_case_updates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_aop_case_updates' => 
  array (
    'name' => 'cases_aop_case_updates',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'AOP_Case_Updates',
    'rhs_table' => 'aop_case_updates',
    'rhs_key' => 'case_id',
    'relationship_type' => 'one-to-many',
  ),
  'aop_case_updates_notes' => 
  array (
    'name' => 'aop_case_updates_notes',
    'lhs_module' => 'AOP_Case_Updates',
    'lhs_table' => 'aop_case_updates',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOP_Case_Updates',
  ),
  'aor_reports_modified_user' => 
  array (
    'name' => 'aor_reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_created_by' => 
  array (
    'name' => 'aor_reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_assigned_user' => 
  array (
    'name' => 'aor_reports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aor_reports' => 
  array (
    'name' => 'securitygroups_aor_reports',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Reports',
    'rhs_table' => 'aor_reports',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOR_Reports',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aor_reports_aor_fields' => 
  array (
    'name' => 'aor_reports_aor_fields',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_reports_aor_conditions' => 
  array (
    'name' => 'aor_reports_aor_conditions',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_aor_reports' => 
  array (
    'name' => 'aor_scheduled_reports_aor_reports',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_fields_modified_user' => 
  array (
    'name' => 'aor_fields_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_fields_created_by' => 
  array (
    'name' => 'aor_fields_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Fields',
    'rhs_table' => 'aor_fields',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_modified_user' => 
  array (
    'name' => 'aor_charts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_created_by' => 
  array (
    'name' => 'aor_charts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_charts_aor_reports' => 
  array (
    'name' => 'aor_charts_aor_reports',
    'lhs_module' => 'AOR_Reports',
    'lhs_table' => 'aor_reports',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Charts',
    'rhs_table' => 'aor_charts',
    'rhs_key' => 'aor_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_conditions_modified_user' => 
  array (
    'name' => 'aor_conditions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_conditions_created_by' => 
  array (
    'name' => 'aor_conditions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Conditions',
    'rhs_table' => 'aor_conditions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_modified_user' => 
  array (
    'name' => 'aor_scheduled_reports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aor_scheduled_reports_created_by' => 
  array (
    'name' => 'aor_scheduled_reports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOR_Scheduled_Reports',
    'rhs_table' => 'aor_scheduled_reports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_modified_user' => 
  array (
    'name' => 'aos_contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_created_by' => 
  array (
    'name' => 'aos_contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_assigned_user' => 
  array (
    'name' => 'aos_contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_contracts' => 
  array (
    'name' => 'securitygroups_aos_contracts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_contracts_tasks' => 
  array (
    'name' => 'aos_contracts_tasks',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_notes' => 
  array (
    'name' => 'aos_contracts_notes',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_meetings' => 
  array (
    'name' => 'aos_contracts_meetings',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_calls' => 
  array (
    'name' => 'aos_contracts_calls',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'AOS_Contracts',
  ),
  'aos_contracts_aos_products_quotes' => 
  array (
    'name' => 'aos_contracts_aos_products_quotes',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_contracts_aos_line_item_groups' => 
  array (
    'name' => 'aos_contracts_aos_line_item_groups',
    'lhs_module' => 'AOS_Contracts',
    'lhs_table' => 'aos_contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_modified_user' => 
  array (
    'name' => 'aos_invoices_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_created_by' => 
  array (
    'name' => 'aos_invoices_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_assigned_user' => 
  array (
    'name' => 'aos_invoices_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_invoices' => 
  array (
    'name' => 'securitygroups_aos_invoices',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Invoices',
    'rhs_table' => 'aos_invoices',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Invoices',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_invoices_aos_product_quotes' => 
  array (
    'name' => 'aos_invoices_aos_product_quotes',
    'lhs_module' => 'AOS_Invoices',
    'lhs_table' => 'aos_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_invoices_aos_line_item_groups' => 
  array (
    'name' => 'aos_invoices_aos_line_item_groups',
    'lhs_module' => 'AOS_Invoices',
    'lhs_table' => 'aos_invoices',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_modified_user' => 
  array (
    'name' => 'aos_pdf_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_created_by' => 
  array (
    'name' => 'aos_pdf_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_pdf_templates_assigned_user' => 
  array (
    'name' => 'aos_pdf_templates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_pdf_templates' => 
  array (
    'name' => 'securitygroups_aos_pdf_templates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_PDF_Templates',
    'rhs_table' => 'aos_pdf_templates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_PDF_Templates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_product_categories_modified_user' => 
  array (
    'name' => 'aos_product_categories_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_categories_created_by' => 
  array (
    'name' => 'aos_product_categories_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_categories_assigned_user' => 
  array (
    'name' => 'aos_product_categories_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_product_categories' => 
  array (
    'name' => 'securitygroups_aos_product_categories',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Product_Categories',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'sub_product_categories' => 
  array (
    'name' => 'sub_product_categories',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product_Categories',
    'rhs_table' => 'aos_product_categories',
    'rhs_key' => 'parent_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'products' => 
  array (
    'name' => 'products',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Product',
    'rhs_table' => 'aos_product',
    'rhs_key' => 'aos_product_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_modified_user' => 
  array (
    'name' => 'aos_products_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_created_by' => 
  array (
    'name' => 'aos_products_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_assigned_user' => 
  array (
    'name' => 'aos_products_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_products' => 
  array (
    'name' => 'securitygroups_aos_products',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'product_categories' => 
  array (
    'name' => 'product_categories',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'aos_product_category_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_modified_user' => 
  array (
    'name' => 'aos_products_quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_created_by' => 
  array (
    'name' => 'aos_products_quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_products_quotes_assigned_user' => 
  array (
    'name' => 'aos_products_quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_product_quotes_aos_products' => 
  array (
    'name' => 'aos_product_quotes_aos_products',
    'lhs_module' => 'AOS_Products',
    'lhs_table' => 'aos_products',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'product_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_modified_user' => 
  array (
    'name' => 'aos_line_item_groups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_created_by' => 
  array (
    'name' => 'aos_line_item_groups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_line_item_groups_assigned_user' => 
  array (
    'name' => 'aos_line_item_groups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'groups_aos_product_quotes' => 
  array (
    'name' => 'groups_aos_product_quotes',
    'lhs_module' => 'AOS_Line_Item_Groups',
    'lhs_table' => 'aos_line_item_groups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'group_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_modified_user' => 
  array (
    'name' => 'aos_quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_created_by' => 
  array (
    'name' => 'aos_quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_assigned_user' => 
  array (
    'name' => 'aos_quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_aos_quotes' => 
  array (
    'name' => 'securitygroups_aos_quotes',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AOS_Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'aos_quotes_aos_product_quotes' => 
  array (
    'name' => 'aos_quotes_aos_product_quotes',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aos_quotes_aos_line_item_groups' => 
  array (
    'name' => 'aos_quotes_aos_line_item_groups',
    'lhs_module' => 'AOS_Quotes',
    'lhs_table' => 'aos_quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_actions_modified_user' => 
  array (
    'name' => 'aow_actions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_actions_created_by' => 
  array (
    'name' => 'aow_actions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Actions',
    'rhs_table' => 'aow_actions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_processed_modified_user' => 
  array (
    'name' => 'aow_processed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_processed_created_by' => 
  array (
    'name' => 'aow_processed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Processed',
    'rhs_table' => 'aow_processed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'aow_conditions_modified_user' => 
  array (
    'name' => 'aow_conditions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'aow_conditions_created_by' => 
  array (
    'name' => 'aow_conditions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AOW_Conditions',
    'rhs_table' => 'aow_conditions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_modified_user' => 
  array (
    'name' => 'jjwg_maps_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_created_by' => 
  array (
    'name' => 'jjwg_maps_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_maps_assigned_user' => 
  array (
    'name' => 'jjwg_maps_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_maps' => 
  array (
    'name' => 'securitygroups_jjwg_maps',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Maps',
    'rhs_table' => 'jjwg_maps',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Maps',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_Maps_accounts' => 
  array (
    'name' => 'jjwg_Maps_accounts',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'jjwg_Maps_contacts' => 
  array (
    'name' => 'jjwg_Maps_contacts',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'jjwg_Maps_leads' => 
  array (
    'name' => 'jjwg_Maps_leads',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'jjwg_Maps_opportunities' => 
  array (
    'name' => 'jjwg_Maps_opportunities',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'jjwg_Maps_cases' => 
  array (
    'name' => 'jjwg_Maps_cases',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'jjwg_Maps_projects' => 
  array (
    'name' => 'jjwg_Maps_projects',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'jjwg_Maps_meetings' => 
  array (
    'name' => 'jjwg_Maps_meetings',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'jjwg_Maps_prospects' => 
  array (
    'name' => 'jjwg_Maps_prospects',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'jjwg_Maps_jjwp_partners' => 
  array (
    'name' => 'jjwg_Maps_jjwp_partners',
    'lhs_module' => 'jjwg_Maps',
    'lhs_table' => 'jjwg_Maps',
    'lhs_key' => 'parent_id',
    'rhs_module' => 'jjwp_Partners',
    'rhs_table' => 'jjwp_partners',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'jjwp_Partners',
  ),
  'jjwg_markers_modified_user' => 
  array (
    'name' => 'jjwg_markers_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_markers_created_by' => 
  array (
    'name' => 'jjwg_markers_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_markers_assigned_user' => 
  array (
    'name' => 'jjwg_markers_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_markers' => 
  array (
    'name' => 'securitygroups_jjwg_markers',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Markers',
    'rhs_table' => 'jjwg_markers',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Markers',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_areas_modified_user' => 
  array (
    'name' => 'jjwg_areas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_areas_created_by' => 
  array (
    'name' => 'jjwg_areas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_areas_assigned_user' => 
  array (
    'name' => 'jjwg_areas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_jjwg_areas' => 
  array (
    'name' => 'securitygroups_jjwg_areas',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Areas',
    'rhs_table' => 'jjwg_areas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jjwg_Areas',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'jjwg_address_cache_modified_user' => 
  array (
    'name' => 'jjwg_address_cache_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_address_cache_created_by' => 
  array (
    'name' => 'jjwg_address_cache_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'jjwg_address_cache_assigned_user' => 
  array (
    'name' => 'jjwg_address_cache_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jjwg_Address_Cache',
    'rhs_table' => 'jjwg_address_cache',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_modified_user' => 
  array (
    'name' => 'calls_reschedule_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_created_by' => 
  array (
    'name' => 'calls_reschedule_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_reschedule_assigned_user' => 
  array (
    'name' => 'calls_reschedule_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls_Reschedule',
    'rhs_table' => 'calls_reschedule',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_modified_user' => 
  array (
    'name' => 'outbound_email_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_created_by' => 
  array (
    'name' => 'outbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'outbound_email_assigned_user' => 
  array (
    'name' => 'outbound_email_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OutboundEmailAccounts',
    'rhs_table' => 'outbound_email',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'templatesectionline_modified_user' => 
  array (
    'name' => 'templatesectionline_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TemplateSectionLine',
    'rhs_table' => 'templatesectionline',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'templatesectionline_created_by' => 
  array (
    'name' => 'templatesectionline_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TemplateSectionLine',
    'rhs_table' => 'templatesectionline',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2tokens_modified_user' => 
  array (
    'name' => 'oauth2tokens_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Tokens',
    'rhs_table' => 'oauth2tokens',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2tokens_created_by' => 
  array (
    'name' => 'oauth2tokens_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Tokens',
    'rhs_table' => 'oauth2tokens',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2tokens_assigned_user' => 
  array (
    'name' => 'oauth2tokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Tokens',
    'rhs_table' => 'oauth2tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2clients_modified_user' => 
  array (
    'name' => 'oauth2clients_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Clients',
    'rhs_table' => 'oauth2clients',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2clients_created_by' => 
  array (
    'name' => 'oauth2clients_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Clients',
    'rhs_table' => 'oauth2clients',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2clients_oauth2tokens' => 
  array (
    'name' => 'oauth2clients_oauth2tokens',
    'rhs_module' => 'OAuth2Tokens',
    'rhs_table' => 'oauth2tokens',
    'rhs_key' => 'client',
    'lhs_module' => 'OAuth2Clients',
    'lhs_table' => 'oauth2clients',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'oauth2clients_assigned_user' => 
  array (
    'name' => 'oauth2clients_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuth2Clients',
    'rhs_table' => 'oauth2clients',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyresponses_modified_user' => 
  array (
    'name' => 'surveyresponses_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyresponses_created_by' => 
  array (
    'name' => 'surveyresponses_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'surveyresponses_assigned_user' => 
  array (
    'name' => 'surveyresponses_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_surveyresponses' => 
  array (
    'name' => 'securitygroups_surveyresponses',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SurveyResponses',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'surveyresponses_employee' => 
  array (
    'name' => 'surveyresponses_employee',
    'lhs_module' => 'SurveyResponses',
    'lhs_table' => 'surveyresponses',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyresponses_surveyquestionresponses' => 
  array (
    'name' => 'surveyresponses_surveyquestionresponses',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'surveyresponse_id',
    'lhs_module' => 'SurveyResponses',
    'lhs_table' => 'surveyresponses',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveys_modified_user' => 
  array (
    'name' => 'surveys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Surveys',
    'rhs_table' => 'surveys',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveys_created_by' => 
  array (
    'name' => 'surveys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Surveys',
    'rhs_table' => 'surveys',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'surveys_assigned_user' => 
  array (
    'name' => 'surveys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Surveys',
    'rhs_table' => 'surveys',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_surveys' => 
  array (
    'name' => 'securitygroups_surveys',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Surveys',
    'rhs_table' => 'surveys',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Surveys',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'surveys_surveyquestions' => 
  array (
    'name' => 'surveys_surveyquestions',
    'rhs_module' => 'SurveyQuestions',
    'rhs_table' => 'surveyquestions',
    'rhs_key' => 'survey_id',
    'lhs_module' => 'Surveys',
    'lhs_table' => 'surveys',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveys_surveyresponses' => 
  array (
    'name' => 'surveys_surveyresponses',
    'rhs_module' => 'SurveyResponses',
    'rhs_table' => 'surveyresponses',
    'rhs_key' => 'survey_id',
    'lhs_module' => 'Surveys',
    'lhs_table' => 'surveys',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveys_campaigns' => 
  array (
    'name' => 'surveys_campaigns',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'survey_id',
    'lhs_module' => 'Surveys',
    'lhs_table' => 'surveys',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionresponses_modified_user' => 
  array (
    'name' => 'surveyquestionresponses_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionresponses_created_by' => 
  array (
    'name' => 'surveyquestionresponses_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionresponses_assigned_user' => 
  array (
    'name' => 'surveyquestionresponses_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_surveyquestionresponses' => 
  array (
    'name' => 'securitygroups_surveyquestionresponses',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionResponses',
    'rhs_table' => 'surveyquestionresponses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SurveyQuestionResponses',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'surveyquestions_modified_user' => 
  array (
    'name' => 'surveyquestions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestions',
    'rhs_table' => 'surveyquestions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestions_created_by' => 
  array (
    'name' => 'surveyquestions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestions',
    'rhs_table' => 'surveyquestions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestions_assigned_user' => 
  array (
    'name' => 'surveyquestions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestions',
    'rhs_table' => 'surveyquestions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_surveyquestions' => 
  array (
    'name' => 'securitygroups_surveyquestions',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestions',
    'rhs_table' => 'surveyquestions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SurveyQuestions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'surveyquestions_surveyquestionoptions' => 
  array (
    'name' => 'surveyquestions_surveyquestionoptions',
    'rhs_module' => 'SurveyQuestionOptions',
    'rhs_table' => 'surveyquestionoptions',
    'rhs_key' => 'survey_question_id',
    'lhs_module' => 'SurveyQuestions',
    'lhs_table' => 'surveyquestions',
    'lhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionoptions_modified_user' => 
  array (
    'name' => 'surveyquestionoptions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionOptions',
    'rhs_table' => 'surveyquestionoptions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionoptions_created_by' => 
  array (
    'name' => 'surveyquestionoptions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionOptions',
    'rhs_table' => 'surveyquestionoptions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'surveyquestionoptions_assigned_user' => 
  array (
    'name' => 'surveyquestionoptions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionOptions',
    'rhs_table' => 'surveyquestionoptions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_surveyquestionoptions' => 
  array (
    'name' => 'securitygroups_surveyquestionoptions',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SurveyQuestionOptions',
    'rhs_table' => 'surveyquestionoptions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SurveyQuestionOptions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'skills_modified_user' => 
  array (
    'name' => 'skills_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Skills',
    'rhs_table' => 'skills',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'skills_created_by' => 
  array (
    'name' => 'skills_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Skills',
    'rhs_table' => 'skills',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'skills_assigned_user' => 
  array (
    'name' => 'skills_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Skills',
    'rhs_table' => 'skills',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_skills' => 
  array (
    'name' => 'securitygroups_skills',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Skills',
    'rhs_table' => 'skills',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Skills',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'skills_employee' => 
  array (
    'name' => 'skills_employee',
    'lhs_module' => 'Skills',
    'lhs_table' => 'skills',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_skills' => 
  array (
    'name' => 'appraisalitems_skills',
    'lhs_module' => 'Skills',
    'lhs_table' => 'skills',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Skills',
  ),
  'attitudes_modified_user' => 
  array (
    'name' => 'attitudes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Attitudes',
    'rhs_table' => 'attitudes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'attitudes_created_by' => 
  array (
    'name' => 'attitudes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Attitudes',
    'rhs_table' => 'attitudes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'attitudes_assigned_user' => 
  array (
    'name' => 'attitudes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Attitudes',
    'rhs_table' => 'attitudes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_attitudes' => 
  array (
    'name' => 'securitygroups_attitudes',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Attitudes',
    'rhs_table' => 'attitudes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Attitudes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'attitudes_employee' => 
  array (
    'name' => 'attitudes_employee',
    'lhs_module' => 'Attitudes',
    'lhs_table' => 'attitudes',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_attitudes' => 
  array (
    'name' => 'appraisalitems_attitudes',
    'lhs_module' => 'Attitudes',
    'lhs_table' => 'attitudes',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Attitudes',
  ),
  'knowledge_modified_user' => 
  array (
    'name' => 'knowledge_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Knowledge',
    'rhs_table' => 'knowledge',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'knowledge_created_by' => 
  array (
    'name' => 'knowledge_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Knowledge',
    'rhs_table' => 'knowledge',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'knowledge_assigned_user' => 
  array (
    'name' => 'knowledge_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Knowledge',
    'rhs_table' => 'knowledge',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_knowledge' => 
  array (
    'name' => 'securitygroups_knowledge',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Knowledge',
    'rhs_table' => 'knowledge',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Knowledge',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'knowledge_employee' => 
  array (
    'name' => 'knowledge_employee',
    'lhs_module' => 'Knowledge',
    'lhs_table' => 'knowledge',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_knowledge' => 
  array (
    'name' => 'appraisalitems_knowledge',
    'lhs_module' => 'Knowledge',
    'lhs_table' => 'knowledge',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Knowledge',
  ),
  'responsibilityactivities_modified_user' => 
  array (
    'name' => 'responsibilityactivities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ResponsibilityActivities',
    'rhs_table' => 'responsibilityactivities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'responsibilityactivities_created_by' => 
  array (
    'name' => 'responsibilityactivities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ResponsibilityActivities',
    'rhs_table' => 'responsibilityactivities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'responsibilityactivities_assigned_user' => 
  array (
    'name' => 'responsibilityactivities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ResponsibilityActivities',
    'rhs_table' => 'responsibilityactivities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_responsibilityactivities' => 
  array (
    'name' => 'securitygroups_responsibilityactivities',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ResponsibilityActivities',
    'rhs_table' => 'responsibilityactivities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ResponsibilityActivities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'appraisalitems_responsibilityactivities' => 
  array (
    'name' => 'appraisalitems_responsibilityactivities',
    'lhs_module' => 'ResponsibilityActivities',
    'lhs_table' => 'responsibilityactivities',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ResponsibilityActivities',
  ),
  'improvements_modified_user' => 
  array (
    'name' => 'improvements_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Improvements',
    'rhs_table' => 'improvements',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'improvements_created_by' => 
  array (
    'name' => 'improvements_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Improvements',
    'rhs_table' => 'improvements',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'improvements_assigned_user' => 
  array (
    'name' => 'improvements_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Improvements',
    'rhs_table' => 'improvements',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_improvements' => 
  array (
    'name' => 'securitygroups_improvements',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Improvements',
    'rhs_table' => 'improvements',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Improvements',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'improvements_employee' => 
  array (
    'name' => 'improvements_employee',
    'lhs_module' => 'Improvements',
    'lhs_table' => 'improvements',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'conclusions_modified_user' => 
  array (
    'name' => 'conclusions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Conclusions',
    'rhs_table' => 'conclusions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'conclusions_created_by' => 
  array (
    'name' => 'conclusions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Conclusions',
    'rhs_table' => 'conclusions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'conclusions_assigned_user' => 
  array (
    'name' => 'conclusions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Conclusions',
    'rhs_table' => 'conclusions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_conclusions' => 
  array (
    'name' => 'securitygroups_conclusions',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Conclusions',
    'rhs_table' => 'conclusions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Conclusions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'conclusions_employee' => 
  array (
    'name' => 'conclusions_employee',
    'lhs_module' => 'Conclusions',
    'lhs_table' => 'conclusions',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'conclusions_meetings' => 
  array (
    'name' => 'conclusions_meetings',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Conclusions',
    'rhs_table' => 'conclusions',
    'rhs_key' => 'meeting_id',
    'relationship_type' => 'one-to-many',
  ),
  'problems_modified_user' => 
  array (
    'name' => 'problems_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Problems',
    'rhs_table' => 'problems',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'problems_created_by' => 
  array (
    'name' => 'problems_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Problems',
    'rhs_table' => 'problems',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'problems_assigned_user' => 
  array (
    'name' => 'problems_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Problems',
    'rhs_table' => 'problems',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_problems' => 
  array (
    'name' => 'securitygroups_problems',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Problems',
    'rhs_table' => 'problems',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Problems',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'problems_employee' => 
  array (
    'name' => 'problems_employee',
    'lhs_module' => 'Problems',
    'lhs_table' => 'problems',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'candidates_modified_user' => 
  array (
    'name' => 'candidates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'candidates_created_by' => 
  array (
    'name' => 'candidates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'candidates_assigned_user' => 
  array (
    'name' => 'candidates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'candidates_email_addresses' => 
  array (
    'name' => 'candidates_email_addresses',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'candidates_email_addresses_primary' => 
  array (
    'name' => 'candidates_email_addresses_primary',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'securitygroups_candidates' => 
  array (
    'name' => 'securitygroups_candidates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidates',
    'rhs_table' => 'candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Candidates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'candidates_candidatures' => 
  array (
    'name' => 'candidates_candidatures',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'relationship_role_column_value' => 'Candidates',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidates_calls' => 
  array (
    'name' => 'candidates_calls',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'relationship_role_column_value' => 'Candidates',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidates_meetings' => 
  array (
    'name' => 'candidates_meetings',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'relationship_role_column_value' => 'Candidates',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidates_emails' => 
  array (
    'name' => 'candidates_emails',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'relationship_role_column_value' => 'Candidates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_rhs' => 'email_id',
    'join_key_lhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'candidates_notes' => 
  array (
    'name' => 'candidates_notes',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'relationship_role_column_value' => 'candidates',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidates_tasks' => 
  array (
    'name' => 'candidates_tasks',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'relationship_role_column_value' => 'Candidates',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidatures_modified_user' => 
  array (
    'name' => 'candidatures_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'candidatures_created_by' => 
  array (
    'name' => 'candidatures_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'candidatures_assigned_user' => 
  array (
    'name' => 'candidatures_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_candidatures' => 
  array (
    'name' => 'securitygroups_candidatures',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Candidatures',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'candidatures_employee' => 
  array (
    'name' => 'candidatures_employee',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'candidate_candidatures' => 
  array (
    'name' => 'candidate_candidatures',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Candidates',
  ),
  'employee_candidatures' => 
  array (
    'name' => 'employee_candidatures',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Employees',
  ),
  'candidatures_calls' => 
  array (
    'name' => 'candidatures_calls',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'relationship_role_column_value' => 'Candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidatures_meetings' => 
  array (
    'name' => 'candidatures_meetings',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'relationship_role_column_value' => 'Candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidatures_notes' => 
  array (
    'name' => 'candidatures_notes',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'relationship_role_column_value' => 'candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'candidatures_tasks' => 
  array (
    'name' => 'candidatures_tasks',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'relationship_role_column_value' => 'Candidatures',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'costs_modified_user' => 
  array (
    'name' => 'costs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'costs_created_by' => 
  array (
    'name' => 'costs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'costs_assigned_user' => 
  array (
    'name' => 'costs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_costs' => 
  array (
    'name' => 'securitygroups_costs',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Costs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'costs_transportations' => 
  array (
    'name' => 'costs_transportations',
    'lhs_module' => 'Transportations',
    'lhs_table' => 'transportations',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'transportation_id',
    'relationship_type' => 'one-to-many',
  ),
  'costs_delegations' => 
  array (
    'name' => 'costs_delegations',
    'lhs_module' => 'Delegations',
    'lhs_table' => 'delegations',
    'lhs_key' => 'id',
    'rhs_module' => 'Costs',
    'rhs_table' => 'costs',
    'rhs_key' => 'delegation_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegations_modified_user' => 
  array (
    'name' => 'delegations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegations_created_by' => 
  array (
    'name' => 'delegations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'delegations_assigned_user' => 
  array (
    'name' => 'delegations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_delegations' => 
  array (
    'name' => 'securitygroups_delegations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Delegations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'delegationslocale_delegations' => 
  array (
    'name' => 'delegationslocale_delegations',
    'lhs_module' => 'DelegationsLocale',
    'lhs_table' => 'delegationslocale',
    'lhs_key' => 'id',
    'rhs_module' => 'Delegations',
    'rhs_table' => 'delegations',
    'rhs_key' => 'delegation_locale_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegations_workschedules' => 
  array (
    'name' => 'delegations_workschedules',
    'lhs_module' => 'Delegations',
    'lhs_table' => 'delegations',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'delegation_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegationslocale_modified_user' => 
  array (
    'name' => 'delegationslocale_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DelegationsLocale',
    'rhs_table' => 'delegationslocale',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegationslocale_created_by' => 
  array (
    'name' => 'delegationslocale_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DelegationsLocale',
    'rhs_table' => 'delegationslocale',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'delegationslocale_assigned_user' => 
  array (
    'name' => 'delegationslocale_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DelegationsLocale',
    'rhs_table' => 'delegationslocale',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_delegationslocale' => 
  array (
    'name' => 'securitygroups_delegationslocale',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'DelegationsLocale',
    'rhs_table' => 'delegationslocale',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'DelegationsLocale',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'ideas_modified_user' => 
  array (
    'name' => 'ideas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Ideas',
    'rhs_table' => 'ideas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ideas_created_by' => 
  array (
    'name' => 'ideas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Ideas',
    'rhs_table' => 'ideas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ideas_assigned_user' => 
  array (
    'name' => 'ideas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Ideas',
    'rhs_table' => 'ideas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_ideas' => 
  array (
    'name' => 'securitygroups_ideas',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Ideas',
    'rhs_table' => 'ideas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Ideas',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'users_ideas' => 
  array (
    'name' => 'users_ideas',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Ideas',
    'rhs_table' => 'ideas',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ideas_notes' => 
  array (
    'name' => 'ideas_notes',
    'lhs_module' => 'Ideas',
    'lhs_table' => 'ideas',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'relationship_role_column_value' => 'ideas',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'rooms_modified_user' => 
  array (
    'name' => 'rooms_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Rooms',
    'rhs_table' => 'rooms',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'rooms_created_by' => 
  array (
    'name' => 'rooms_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Rooms',
    'rhs_table' => 'rooms',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'rooms_assigned_user' => 
  array (
    'name' => 'rooms_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Rooms',
    'rhs_table' => 'rooms',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_rooms' => 
  array (
    'name' => 'securitygroups_rooms',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Rooms',
    'rhs_table' => 'rooms',
    'rhs_key' => 'security_group_id',
    'relationship_type' => 'one-to-many',
  ),
  'allocations_modified_user' => 
  array (
    'name' => 'allocations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Allocations',
    'rhs_table' => 'allocations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'allocations_created_by' => 
  array (
    'name' => 'allocations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Allocations',
    'rhs_table' => 'allocations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'allocations_assigned_user' => 
  array (
    'name' => 'allocations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Allocations',
    'rhs_table' => 'allocations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_allocations' => 
  array (
    'name' => 'securitygroups_allocations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Allocations',
    'rhs_table' => 'allocations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Allocations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'workplaces_allocations' => 
  array (
    'name' => 'workplaces_allocations',
    'lhs_module' => 'Workplaces',
    'lhs_table' => 'workplaces',
    'lhs_key' => 'id',
    'rhs_module' => 'Allocations',
    'rhs_table' => 'allocations',
    'rhs_key' => 'workplace_id',
    'relationship_type' => 'one-to-many',
  ),
  'workplaces_modified_user' => 
  array (
    'name' => 'workplaces_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Workplaces',
    'rhs_table' => 'workplaces',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'workplaces_created_by' => 
  array (
    'name' => 'workplaces_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Workplaces',
    'rhs_table' => 'workplaces',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'workplaces_assigned_user' => 
  array (
    'name' => 'workplaces_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Workplaces',
    'rhs_table' => 'workplaces',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_workplaces' => 
  array (
    'name' => 'securitygroups_workplaces',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Workplaces',
    'rhs_table' => 'workplaces',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Workplaces',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'rooms_workplaces' => 
  array (
    'name' => 'rooms_workplaces',
    'lhs_module' => 'Rooms',
    'lhs_table' => 'rooms',
    'lhs_key' => 'id',
    'rhs_module' => 'Workplaces',
    'rhs_table' => 'workplaces',
    'rhs_key' => 'room_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeeinteractiontracking_modified_user' => 
  array (
    'name' => 'employeeinteractiontracking_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeInteractionTracking',
    'rhs_table' => 'employeeinteractiontracking',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeeinteractiontracking_created_by' => 
  array (
    'name' => 'employeeinteractiontracking_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeInteractionTracking',
    'rhs_table' => 'employeeinteractiontracking',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'employeeinteractiontracking_assigned_user' => 
  array (
    'name' => 'employeeinteractiontracking_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeInteractionTracking',
    'rhs_table' => 'employeeinteractiontracking',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeeinteractiontracking_employee' => 
  array (
    'name' => 'employeeinteractiontracking_employee',
    'lhs_module' => 'EmployeeInteractionTracking',
    'lhs_table' => 'employeeinteractiontracking',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_employeeinteractiontracking' => 
  array (
    'name' => 'securitygroups_employeeinteractiontracking',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeInteractionTracking',
    'rhs_table' => 'employeeinteractiontracking',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EmployeeInteractionTracking',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'positions_modified_user' => 
  array (
    'name' => 'positions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'positions_created_by' => 
  array (
    'name' => 'positions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'positions_assigned_user' => 
  array (
    'name' => 'positions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_positions' => 
  array (
    'name' => 'securitygroups_positions',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Positions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'onboardingtemplates_positions' => 
  array (
    'name' => 'onboardingtemplates_positions',
    'lhs_module' => 'OnboardingTemplates',
    'lhs_table' => 'onboardingtemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'onboardingtemplate_id',
    'relationship_type' => 'one-to-many',
  ),
  'offboardingtemplates_positions' => 
  array (
    'name' => 'offboardingtemplates_positions',
    'lhs_module' => 'OffboardingTemplates',
    'lhs_table' => 'offboardingtemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'offboardingtemplate_id',
    'relationship_type' => 'one-to-many',
  ),
  'recruitments_positions' => 
  array (
    'name' => 'recruitments_positions',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Recruitments',
    'rhs_table' => 'recruitments',
    'rhs_key' => 'position_id',
    'relationship_type' => 'one-to-many',
  ),
  'positions_supervision' => 
  array (
    'name' => 'positions_supervision',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Positions',
    'rhs_table' => 'positions',
    'rhs_key' => 'positions_supervision_id',
    'relationship_type' => 'one-to-many',
  ),
  'recruitments_modified_user' => 
  array (
    'name' => 'recruitments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Recruitments',
    'rhs_table' => 'recruitments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'recruitments_created_by' => 
  array (
    'name' => 'recruitments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Recruitments',
    'rhs_table' => 'recruitments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'recruitments_assigned_user' => 
  array (
    'name' => 'recruitments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Recruitments',
    'rhs_table' => 'recruitments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_recruitments' => 
  array (
    'name' => 'securitygroups_recruitments',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Recruitments',
    'rhs_table' => 'recruitments',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Recruitments',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'candidatures_recruitments' => 
  array (
    'name' => 'candidatures_recruitments',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'recruitment_id',
    'relationship_type' => 'one-to-many',
  ),
  'candidatures_recruitments_end' => 
  array (
    'name' => 'candidatures_recruitments_end',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Candidatures',
    'rhs_table' => 'candidatures',
    'rhs_key' => 'recruitment_end_id',
    'relationship_type' => 'one-to-many',
  ),
  'recruitments_calls' => 
  array (
    'name' => 'recruitments_calls',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'relationship_role_column_value' => 'Recruitments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'recruitments_meetings' => 
  array (
    'name' => 'recruitments_meetings',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'relationship_role_column_value' => 'Recruitments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'recruitments_notes' => 
  array (
    'name' => 'recruitments_notes',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'relationship_role_column_value' => 'Recruitments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'recruitments_tasks' => 
  array (
    'name' => 'recruitments_tasks',
    'lhs_module' => 'Recruitments',
    'lhs_table' => 'recruitments',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'relationship_role_column_value' => 'Recruitments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
  ),
  'transportations_modified_user' => 
  array (
    'name' => 'transportations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Transportations',
    'rhs_table' => 'transportations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'transportations_created_by' => 
  array (
    'name' => 'transportations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Transportations',
    'rhs_table' => 'transportations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'transportations_assigned_user' => 
  array (
    'name' => 'transportations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Transportations',
    'rhs_table' => 'transportations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_transportations' => 
  array (
    'name' => 'securitygroups_transportations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Transportations',
    'rhs_table' => 'transportations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Transportations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'transportations_delegations' => 
  array (
    'name' => 'transportations_delegations',
    'lhs_module' => 'Delegations',
    'lhs_table' => 'delegations',
    'lhs_key' => 'id',
    'rhs_module' => 'Transportations',
    'rhs_table' => 'transportations',
    'rhs_key' => 'delegation_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeeroles_modified_user' => 
  array (
    'name' => 'employeeroles_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeeroles_created_by' => 
  array (
    'name' => 'employeeroles_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'employeeroles_assigned_user' => 
  array (
    'name' => 'employeeroles_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_employeeroles' => 
  array (
    'name' => 'securitygroups_employeeroles',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeRoles',
    'rhs_table' => 'employeeroles',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'EmployeeRoles',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'benefits_modified_user' => 
  array (
    'name' => 'benefits_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Benefits',
    'rhs_table' => 'benefits',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'benefits_created_by' => 
  array (
    'name' => 'benefits_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Benefits',
    'rhs_table' => 'benefits',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'benefits_assigned_user' => 
  array (
    'name' => 'benefits_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Benefits',
    'rhs_table' => 'benefits',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_benefits' => 
  array (
    'name' => 'securitygroups_benefits',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Benefits',
    'rhs_table' => 'benefits',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Benefits',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'responsibilities_modified_user' => 
  array (
    'name' => 'responsibilities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Responsibilities',
    'rhs_table' => 'responsibilities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'responsibilities_created_by' => 
  array (
    'name' => 'responsibilities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Responsibilities',
    'rhs_table' => 'responsibilities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'responsibilities_assigned_user' => 
  array (
    'name' => 'responsibilities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Responsibilities',
    'rhs_table' => 'responsibilities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_responsibilities' => 
  array (
    'name' => 'securitygroups_responsibilities',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Responsibilities',
    'rhs_table' => 'responsibilities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Responsibilities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'appraisalitems_responsibilities' => 
  array (
    'name' => 'appraisalitems_responsibilities',
    'lhs_module' => 'Responsibilities',
    'lhs_table' => 'responsibilities',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Responsibilities',
  ),
  'spenttime_modified_user' => 
  array (
    'name' => 'spenttime_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'spenttime_created_by' => 
  array (
    'name' => 'spenttime_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'spenttime_assigned_user' => 
  array (
    'name' => 'spenttime_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_spenttime' => 
  array (
    'name' => 'securitygroups_spenttime',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SpentTime',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'spenttime_employees' => 
  array (
    'name' => 'spenttime_employees',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SpentTime',
    'rhs_table' => 'spenttime',
    'rhs_key' => 'employee_id',
    'relationship_type' => 'one-to-many',
  ),
  'workschedules_modified_user' => 
  array (
    'name' => 'workschedules_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'workschedules_created_by' => 
  array (
    'name' => 'workschedules_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'workschedules_assigned_user' => 
  array (
    'name' => 'workschedules_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_workschedules' => 
  array (
    'name' => 'securitygroups_workschedules',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'WorkSchedules',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'workplaces_workschedules' => 
  array (
    'name' => 'workplaces_workschedules',
    'lhs_module' => 'Workplaces',
    'lhs_table' => 'workplaces',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkSchedules',
    'rhs_table' => 'workschedules',
    'rhs_key' => 'workplace_id',
    'relationship_type' => 'one-to-many',
  ),
  'workingmonths_modified_user' => 
  array (
    'name' => 'workingmonths_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkingMonths',
    'rhs_table' => 'workingmonths',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'workingmonths_created_by' => 
  array (
    'name' => 'workingmonths_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkingMonths',
    'rhs_table' => 'workingmonths',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'workingmonths_assigned_user' => 
  array (
    'name' => 'workingmonths_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkingMonths',
    'rhs_table' => 'workingmonths',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_workingmonths' => 
  array (
    'name' => 'securitygroups_workingmonths',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkingMonths',
    'rhs_table' => 'workingmonths',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'WorkingMonths',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'nonworkingdays_modified_user' => 
  array (
    'name' => 'nonworkingdays_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'NonWorkingDays',
    'rhs_table' => 'nonworkingdays',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'nonworkingdays_created_by' => 
  array (
    'name' => 'nonworkingdays_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'NonWorkingDays',
    'rhs_table' => 'nonworkingdays',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'resources_modified_user' => 
  array (
    'name' => 'resources_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'resources_created_by' => 
  array (
    'name' => 'resources_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'resources_assigned_user' => 
  array (
    'name' => 'resources_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_resources' => 
  array (
    'name' => 'securitygroups_resources',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Resources',
    'rhs_table' => 'resources',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Resources',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'resources_employee' => 
  array (
    'name' => 'resources_employee',
    'lhs_module' => 'Resources',
    'lhs_table' => 'resources',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'periodsofemployment_modified_user' => 
  array (
    'name' => 'periodsofemployment_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PeriodsOfEmployment',
    'rhs_table' => 'periodsofemployment',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'periodsofemployment_created_by' => 
  array (
    'name' => 'periodsofemployment_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PeriodsOfEmployment',
    'rhs_table' => 'periodsofemployment',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'periodsofemployment_assigned_user' => 
  array (
    'name' => 'periodsofemployment_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PeriodsOfEmployment',
    'rhs_table' => 'periodsofemployment',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_periodsofemployment' => 
  array (
    'name' => 'securitygroups_periodsofemployment',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'PeriodsOfEmployment',
    'rhs_table' => 'periodsofemployment',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'PeriodsOfEmployment',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'periodsofemployment_employee' => 
  array (
    'name' => 'periodsofemployment_employee',
    'lhs_module' => 'PeriodsOfEmployment',
    'lhs_table' => 'periodsofemployment',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'reservations_modified_user' => 
  array (
    'name' => 'reservations_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reservations_created_by' => 
  array (
    'name' => 'reservations_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reservations_assigned_user' => 
  array (
    'name' => 'reservations_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_reservations' => 
  array (
    'name' => 'securitygroups_reservations',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Reservations',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'reservations_employee' => 
  array (
    'name' => 'reservations_employee',
    'lhs_module' => 'Reservations',
    'lhs_table' => 'reservations',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'reservations_meetings' => 
  array (
    'name' => 'reservations_meetings',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'reservations_calls' => 
  array (
    'name' => 'reservations_calls',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'resources_reservations' => 
  array (
    'name' => 'resources_reservations',
    'lhs_module' => 'Resources',
    'lhs_table' => 'resources',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'resource_id',
    'relationship_type' => 'one-to-many',
  ),
  'delegations_reservations' => 
  array (
    'name' => 'delegations_reservations',
    'lhs_module' => 'Delegations',
    'lhs_table' => 'delegations',
    'lhs_key' => 'id',
    'rhs_module' => 'Reservations',
    'rhs_table' => 'reservations',
    'rhs_key' => 'delegation_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_modified_user' => 
  array (
    'name' => 'contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_created_by' => 
  array (
    'name' => 'contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_assigned_user' => 
  array (
    'name' => 'contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_contracts' => 
  array (
    'name' => 'securitygroups_contracts',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'contracts_employee' => 
  array (
    'name' => 'contracts_employee',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'periodsofemployment_contracts' => 
  array (
    'name' => 'periodsofemployment_contracts',
    'lhs_module' => 'PeriodsOfEmployment',
    'lhs_table' => 'periodsofemployment',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'periodofemployment_id',
    'relationship_type' => 'one-to-many',
  ),
  'termsofemployment_modified_user' => 
  array (
    'name' => 'termsofemployment_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'termsofemployment_created_by' => 
  array (
    'name' => 'termsofemployment_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'termsofemployment_assigned_user' => 
  array (
    'name' => 'termsofemployment_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_termsofemployment' => 
  array (
    'name' => 'securitygroups_termsofemployment',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'TermsOfEmployment',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'termsofemployment_employee' => 
  array (
    'name' => 'termsofemployment_employee',
    'lhs_module' => 'TermsOfEmployment',
    'lhs_table' => 'termsofemployment',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_termsofemployment' => 
  array (
    'name' => 'contracts_termsofemployment',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'contract_id',
    'relationship_type' => 'one-to-many',
  ),
  'positions_termsofemployment' => 
  array (
    'name' => 'positions_termsofemployment',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'TermsOfEmployment',
    'rhs_table' => 'termsofemployment',
    'rhs_key' => 'position_id',
    'relationship_type' => 'one-to-many',
  ),
  'trainings_modified_user' => 
  array (
    'name' => 'trainings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'trainings_created_by' => 
  array (
    'name' => 'trainings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'trainings_assigned_user' => 
  array (
    'name' => 'trainings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_trainings' => 
  array (
    'name' => 'securitygroups_trainings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Trainings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'onboardingoffboardingelements_trainings' => 
  array (
    'name' => 'onboardingoffboardingelements_trainings',
    'lhs_module' => 'OnboardingOffboardingElements',
    'lhs_table' => 'onboardingoffboardingelements',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'element_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingoffboardingelements_modified_user' => 
  array (
    'name' => 'onboardingoffboardingelements_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingoffboardingelements_created_by' => 
  array (
    'name' => 'onboardingoffboardingelements_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingoffboardingelements_assigned_user' => 
  array (
    'name' => 'onboardingoffboardingelements_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_onboardingoffboardingelements' => 
  array (
    'name' => 'securitygroups_onboardingoffboardingelements',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'OnboardingOffboardingElements',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'users_onboardingoffboardingelements' => 
  array (
    'name' => 'users_onboardingoffboardingelements',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_unit_onboardingoffboardingelements' => 
  array (
    'name' => 'securitygroups_unit_onboardingoffboardingelements',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingOffboardingElements',
    'rhs_table' => 'onboardingoffboardingelements',
    'rhs_key' => 'securitygroup_unit_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingtemplates_modified_user' => 
  array (
    'name' => 'onboardingtemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingTemplates',
    'rhs_table' => 'onboardingtemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingtemplates_created_by' => 
  array (
    'name' => 'onboardingtemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingTemplates',
    'rhs_table' => 'onboardingtemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'onboardingtemplates_assigned_user' => 
  array (
    'name' => 'onboardingtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingTemplates',
    'rhs_table' => 'onboardingtemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_onboardingtemplates' => 
  array (
    'name' => 'securitygroups_onboardingtemplates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'OnboardingTemplates',
    'rhs_table' => 'onboardingtemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'OnboardingTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'offboardingtemplates_modified_user' => 
  array (
    'name' => 'offboardingtemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OffboardingTemplates',
    'rhs_table' => 'offboardingtemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'offboardingtemplates_created_by' => 
  array (
    'name' => 'offboardingtemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OffboardingTemplates',
    'rhs_table' => 'offboardingtemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'offboardingtemplates_assigned_user' => 
  array (
    'name' => 'offboardingtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OffboardingTemplates',
    'rhs_table' => 'offboardingtemplates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_offboardingtemplates' => 
  array (
    'name' => 'securitygroups_offboardingtemplates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'OffboardingTemplates',
    'rhs_table' => 'offboardingtemplates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'OffboardingTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'exitinterviews_modified_user' => 
  array (
    'name' => 'exitinterviews_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ExitInterviews',
    'rhs_table' => 'exitinterviews',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'exitinterviews_created_by' => 
  array (
    'name' => 'exitinterviews_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ExitInterviews',
    'rhs_table' => 'exitinterviews',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'exitinterviews_assigned_user' => 
  array (
    'name' => 'exitinterviews_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ExitInterviews',
    'rhs_table' => 'exitinterviews',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'exitinterviews_employee' => 
  array (
    'name' => 'exitinterviews_employee',
    'lhs_module' => 'ExitInterviews',
    'lhs_table' => 'exitinterviews',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_exitinterviews' => 
  array (
    'name' => 'securitygroups_exitinterviews',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ExitInterviews',
    'rhs_table' => 'exitinterviews',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ExitInterviews',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'exitinterviews_offboardings' => 
  array (
    'name' => 'exitinterviews_offboardings',
    'lhs_module' => 'Offboardings',
    'lhs_table' => 'offboardings',
    'lhs_key' => 'id',
    'rhs_module' => 'ExitInterviews',
    'rhs_table' => 'exitinterviews',
    'rhs_key' => 'offboarding_id',
    'relationship_type' => 'one-to-many',
  ),
  'goals_modified_user' => 
  array (
    'name' => 'goals_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Goals',
    'rhs_table' => 'goals',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'goals_created_by' => 
  array (
    'name' => 'goals_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Goals',
    'rhs_table' => 'goals',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'goals_assigned_user' => 
  array (
    'name' => 'goals_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Goals',
    'rhs_table' => 'goals',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'goals_employee' => 
  array (
    'name' => 'goals_employee',
    'lhs_module' => 'Goals',
    'lhs_table' => 'goals',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_goals' => 
  array (
    'name' => 'securitygroups_goals',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Goals',
    'rhs_table' => 'goals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Goals',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'appraisalitems_goals' => 
  array (
    'name' => 'appraisalitems_goals',
    'lhs_module' => 'Goals',
    'lhs_table' => 'goals',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Goals',
  ),
  'appraisals_modified_user' => 
  array (
    'name' => 'appraisals_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisals_created_by' => 
  array (
    'name' => 'appraisals_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'appraisals_assigned_user' => 
  array (
    'name' => 'appraisals_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisals_employee' => 
  array (
    'name' => 'appraisals_employee',
    'lhs_module' => 'Appraisals',
    'lhs_table' => 'appraisals',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_appraisals' => 
  array (
    'name' => 'securitygroups_appraisals',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Appraisals',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'candidatures_appraisals' => 
  array (
    'name' => 'candidatures_appraisals',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'candidature_id',
    'relationship_type' => 'one-to-many',
  ),
  'positions_appraisals' => 
  array (
    'name' => 'positions_appraisals',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'position_id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisals_employees_evaluations' => 
  array (
    'name' => 'appraisals_employees_evaluations',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Appraisals',
    'rhs_table' => 'appraisals',
    'rhs_key' => 'evaluator_id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_modified_user' => 
  array (
    'name' => 'appraisalitems_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_created_by' => 
  array (
    'name' => 'appraisalitems_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_assigned_user' => 
  array (
    'name' => 'appraisalitems_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_appraisalitems' => 
  array (
    'name' => 'securitygroups_appraisalitems',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'AppraisalItems',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'appraisals_appraisalitems' => 
  array (
    'name' => 'appraisals_appraisalitems',
    'lhs_module' => 'Appraisals',
    'lhs_table' => 'appraisals',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'appraisal_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardings_modified_user' => 
  array (
    'name' => 'onboardings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Onboardings',
    'rhs_table' => 'onboardings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardings_created_by' => 
  array (
    'name' => 'onboardings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Onboardings',
    'rhs_table' => 'onboardings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'onboardings_assigned_user' => 
  array (
    'name' => 'onboardings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Onboardings',
    'rhs_table' => 'onboardings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardings_employee' => 
  array (
    'name' => 'onboardings_employee',
    'lhs_module' => 'Onboardings',
    'lhs_table' => 'onboardings',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_onboardings' => 
  array (
    'name' => 'securitygroups_onboardings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Onboardings',
    'rhs_table' => 'onboardings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Onboardings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'onboardings_onboardingtemplates' => 
  array (
    'name' => 'onboardings_onboardingtemplates',
    'lhs_module' => 'OnboardingTemplates',
    'lhs_table' => 'onboardingtemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Onboardings',
    'rhs_table' => 'onboardings',
    'rhs_key' => 'onboardingtemplate_id',
    'relationship_type' => 'one-to-many',
  ),
  'onboardings_trainings' => 
  array (
    'name' => 'onboardings_trainings',
    'lhs_module' => 'Onboardings',
    'lhs_table' => 'onboardings',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Onboardings',
  ),
  'onboardings_tasks' => 
  array (
    'name' => 'onboardings_tasks',
    'lhs_module' => 'Onboardings',
    'lhs_table' => 'onboardings',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Onboardings',
  ),
  'offboardings_modified_user' => 
  array (
    'name' => 'offboardings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Offboardings',
    'rhs_table' => 'offboardings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'offboardings_created_by' => 
  array (
    'name' => 'offboardings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Offboardings',
    'rhs_table' => 'offboardings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'offboardings_assigned_user' => 
  array (
    'name' => 'offboardings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Offboardings',
    'rhs_table' => 'offboardings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'offboardings_employee' => 
  array (
    'name' => 'offboardings_employee',
    'lhs_module' => 'Offboardings',
    'lhs_table' => 'offboardings',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_offboardings' => 
  array (
    'name' => 'securitygroups_offboardings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Offboardings',
    'rhs_table' => 'offboardings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Offboardings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'offboardings_offboardingtemplates' => 
  array (
    'name' => 'offboardings_offboardingtemplates',
    'lhs_module' => 'OffboardingTemplates',
    'lhs_table' => 'offboardingtemplates',
    'lhs_key' => 'id',
    'rhs_module' => 'Offboardings',
    'rhs_table' => 'offboardings',
    'rhs_key' => 'offboardingtemplate_id',
    'relationship_type' => 'one-to-many',
  ),
  'offboardings_trainings' => 
  array (
    'name' => 'offboardings_trainings',
    'lhs_module' => 'Offboardings',
    'lhs_table' => 'offboardings',
    'lhs_key' => 'id',
    'rhs_module' => 'Trainings',
    'rhs_table' => 'trainings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Offboardings',
  ),
  'offboardings_tasks' => 
  array (
    'name' => 'offboardings_tasks',
    'lhs_module' => 'Offboardings',
    'lhs_table' => 'offboardings',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Offboardings',
  ),
  'competencyratings_modified_user' => 
  array (
    'name' => 'competencyratings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'competencyratings_created_by' => 
  array (
    'name' => 'competencyratings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'competencyratings_assigned_user' => 
  array (
    'name' => 'competencyratings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_competencyratings' => 
  array (
    'name' => 'securitygroups_competencyratings',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'CompetencyRatings',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'competencyratings_employee' => 
  array (
    'name' => 'competencyratings_employee',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Employees',
  ),
  'competencyratings_competencies' => 
  array (
    'name' => 'competencyratings_competencies',
    'lhs_module' => 'Competencies',
    'lhs_table' => 'competencies',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'competency_id',
    'relationship_type' => 'one-to-many',
  ),
  'competencyratings_positions' => 
  array (
    'name' => 'competencyratings_positions',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Positions',
  ),
  'competencyratings_roles' => 
  array (
    'name' => 'competencyratings_roles',
    'lhs_module' => 'EmployeeRoles',
    'lhs_table' => 'employeeroles',
    'lhs_key' => 'id',
    'rhs_module' => 'CompetencyRatings',
    'rhs_table' => 'competencyratings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'EmployeeRoles',
  ),
  'competencies_modified_user' => 
  array (
    'name' => 'competencies_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'competencies_created_by' => 
  array (
    'name' => 'competencies_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'competencies_assigned_user' => 
  array (
    'name' => 'competencies_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_competencies' => 
  array (
    'name' => 'securitygroups_competencies',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Competencies',
    'rhs_table' => 'competencies',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Competencies',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'competencies_employee' => 
  array (
    'name' => 'competencies_employee',
    'lhs_module' => 'Competencies',
    'lhs_table' => 'competencies',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'appraisalitems_competencies' => 
  array (
    'name' => 'appraisalitems_competencies',
    'lhs_module' => 'Competencies',
    'lhs_table' => 'competencies',
    'lhs_key' => 'id',
    'rhs_module' => 'AppraisalItems',
    'rhs_table' => 'appraisalitems',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Competencies',
  ),
  'careerpaths_modified_user' => 
  array (
    'name' => 'careerpaths_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'careerpaths_created_by' => 
  array (
    'name' => 'careerpaths_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'careerpaths_assigned_user' => 
  array (
    'name' => 'careerpaths_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_careerpaths' => 
  array (
    'name' => 'securitygroups_careerpaths',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'CareerPaths',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'careerpaths_positions_from' => 
  array (
    'name' => 'careerpaths_positions_from',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'position_from_id',
    'relationship_type' => 'one-to-many',
  ),
  'careerpaths_positions_to' => 
  array (
    'name' => 'careerpaths_positions_to',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'CareerPaths',
    'rhs_table' => 'careerpaths',
    'rhs_key' => 'position_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'news_modified_user' => 
  array (
    'name' => 'news_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'News',
    'rhs_table' => 'news',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'news_created_by' => 
  array (
    'name' => 'news_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'News',
    'rhs_table' => 'news',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'news_assigned_user' => 
  array (
    'name' => 'news_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'News',
    'rhs_table' => 'news',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_news' => 
  array (
    'name' => 'securitygroups_news',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'News',
    'rhs_table' => 'news',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'News',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'news_comments' => 
  array (
    'name' => 'news_comments',
    'lhs_module' => 'News',
    'lhs_table' => 'news',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'News',
  ),
  'news_reactions' => 
  array (
    'name' => 'news_reactions',
    'lhs_module' => 'News',
    'lhs_table' => 'news',
    'lhs_key' => 'id',
    'rhs_module' => 'Reactions',
    'rhs_table' => 'reactions',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'News',
  ),
  'usersnews_modified_user' => 
  array (
    'name' => 'usersnews_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UsersNews',
    'rhs_table' => 'usersnews',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'usersnews_created_by' => 
  array (
    'name' => 'usersnews_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UsersNews',
    'rhs_table' => 'usersnews',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'usersnews_assigned_user' => 
  array (
    'name' => 'usersnews_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UsersNews',
    'rhs_table' => 'usersnews',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_usersnews' => 
  array (
    'name' => 'securitygroups_usersnews',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'UsersNews',
    'rhs_table' => 'usersnews',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'UsersNews',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'usersnews_news' => 
  array (
    'name' => 'usersnews_news',
    'lhs_module' => 'News',
    'lhs_table' => 'news',
    'lhs_key' => 'id',
    'rhs_module' => 'UsersNews',
    'rhs_table' => 'usersnews',
    'rhs_key' => 'news_id',
    'relationship_type' => 'one-to-many',
  ),
  'certificates_modified_user' => 
  array (
    'name' => 'certificates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'certificates_created_by' => 
  array (
    'name' => 'certificates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'certificates_assigned_user' => 
  array (
    'name' => 'certificates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_certificates' => 
  array (
    'name' => 'securitygroups_certificates',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Certificates',
    'rhs_table' => 'certificates',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Certificates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'applications_modified_user' => 
  array (
    'name' => 'applications_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Applications',
    'rhs_table' => 'applications',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'applications_created_by' => 
  array (
    'name' => 'applications_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Applications',
    'rhs_table' => 'applications',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'applications_assigned_user' => 
  array (
    'name' => 'applications_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Applications',
    'rhs_table' => 'applications',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_applications' => 
  array (
    'name' => 'securitygroups_applications',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Applications',
    'rhs_table' => 'applications',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Applications',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'applications_employee' => 
  array (
    'name' => 'applications_employee',
    'lhs_module' => 'Applications',
    'lhs_table' => 'applications',
    'lhs_key' => 'employee_id',
    'rhs_module' => 'Employees',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardbackups_modified_user' => 
  array (
    'name' => 'dashboardbackups_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardBackups',
    'rhs_table' => 'dashboardbackups',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardbackups_created_by' => 
  array (
    'name' => 'dashboardbackups_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardBackups',
    'rhs_table' => 'dashboardbackups',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardbackups_assigned_user' => 
  array (
    'name' => 'dashboardbackups_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardBackups',
    'rhs_table' => 'dashboardbackups',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardmanager_modified_user' => 
  array (
    'name' => 'dashboardmanager_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardManager',
    'rhs_table' => 'dashboardmanager',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardmanager_created_by' => 
  array (
    'name' => 'dashboardmanager_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardManager',
    'rhs_table' => 'dashboardmanager',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardmanager_assigned_user' => 
  array (
    'name' => 'dashboardmanager_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardManager',
    'rhs_table' => 'dashboardmanager',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_forced_tabs_dashboards' => 
  array (
    'name' => 'users_forced_tabs_dashboards',
    'lhs_module' => 'DashboardManager',
    'lhs_table' => 'dashboardmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'forced_tabs_dashboard_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_locked_dashboards' => 
  array (
    'name' => 'users_locked_dashboards',
    'lhs_module' => 'DashboardManager',
    'lhs_table' => 'dashboardmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'locked_dashboard_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_one_time_default_dashboards' => 
  array (
    'name' => 'users_one_time_default_dashboards',
    'lhs_module' => 'DashboardManager',
    'lhs_table' => 'dashboardmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'one_time_default_dashboard_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardbackups_dashboardmanager' => 
  array (
    'name' => 'dashboardbackups_dashboardmanager',
    'lhs_module' => 'DashboardManager',
    'lhs_table' => 'dashboardmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardBackups',
    'rhs_table' => 'dashboardbackups',
    'rhs_key' => 'dashboardmanager_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardhistory_dashboardmanager' => 
  array (
    'name' => 'dashboardhistory_dashboardmanager',
    'lhs_module' => 'DashboardManager',
    'lhs_table' => 'dashboardmanager',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardHistory',
    'rhs_table' => 'dashboardhistory',
    'rhs_key' => 'dashboardmanager_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardhistory_modified_user' => 
  array (
    'name' => 'dashboardhistory_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardHistory',
    'rhs_table' => 'dashboardhistory',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardhistory_created_by' => 
  array (
    'name' => 'dashboardhistory_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardHistory',
    'rhs_table' => 'dashboardhistory',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardhistory_assigned_user' => 
  array (
    'name' => 'dashboardhistory_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardHistory',
    'rhs_table' => 'dashboardhistory',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dashboardbackups_dashboardhistory' => 
  array (
    'name' => 'dashboardbackups_dashboardhistory',
    'lhs_module' => 'DashboardHistory',
    'lhs_table' => 'dashboardhistory',
    'lhs_key' => 'id',
    'rhs_module' => 'DashboardBackups',
    'rhs_table' => 'dashboardbackups',
    'rhs_key' => 'dashboardhistory_id',
    'relationship_type' => 'one-to-many',
  ),
  'kreports_modified_user' => 
  array (
    'name' => 'kreports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KReports',
    'rhs_table' => 'kreports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kreports_created_by' => 
  array (
    'name' => 'kreports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KReports',
    'rhs_table' => 'kreports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kreports_assigned_user' => 
  array (
    'name' => 'kreports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KReports',
    'rhs_table' => 'kreports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_kreports' => 
  array (
    'name' => 'securitygroups_kreports',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'KReports',
    'rhs_table' => 'kreports',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'KReports',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'schedulereports_modified_user' => 
  array (
    'name' => 'schedulereports_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReports',
    'rhs_table' => 'schedulereports',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereports_created_by' => 
  array (
    'name' => 'schedulereports_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReports',
    'rhs_table' => 'schedulereports',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereports_assigned_user' => 
  array (
    'name' => 'schedulereports_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReports',
    'rhs_table' => 'schedulereports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereports_kreports' => 
  array (
    'name' => 'schedulereports_kreports',
    'lhs_module' => 'KReports',
    'lhs_table' => 'kreports',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReports',
    'rhs_table' => 'schedulereports',
    'rhs_key' => 'kreport_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereportslogs_modified_user' => 
  array (
    'name' => 'schedulereportslogs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReportsLogs',
    'rhs_table' => 'schedulereportslogs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereportslogs_created_by' => 
  array (
    'name' => 'schedulereportslogs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReportsLogs',
    'rhs_table' => 'schedulereportslogs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'schedulereports_schedulereportslogs' => 
  array (
    'name' => 'schedulereports_schedulereportslogs',
    'lhs_module' => 'ScheduleReports',
    'lhs_table' => 'schedulereports',
    'lhs_key' => 'id',
    'rhs_module' => 'ScheduleReportsLogs',
    'rhs_table' => 'schedulereportslogs',
    'rhs_key' => 'schedule_report_id',
    'relationship_type' => 'one-to-many',
  ),
  'ktemplates_modified_user' => 
  array (
    'name' => 'ktemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KTemplates',
    'rhs_table' => 'ktemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ktemplates_created_by' => 
  array (
    'name' => 'ktemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KTemplates',
    'rhs_table' => 'ktemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pdftemplates_modified_user' => 
  array (
    'name' => 'pdftemplates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PDFTemplates',
    'rhs_table' => 'PDFTemplates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pdftemplates_created_by' => 
  array (
    'name' => 'pdftemplates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'PDFTemplates',
    'rhs_table' => 'PDFTemplates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'salaryranges_modified_user' => 
  array (
    'name' => 'salaryranges_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SalaryRanges',
    'rhs_table' => 'salaryranges',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'salaryranges_created_by' => 
  array (
    'name' => 'salaryranges_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SalaryRanges',
    'rhs_table' => 'salaryranges',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'salaryranges_assigned_user' => 
  array (
    'name' => 'salaryranges_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SalaryRanges',
    'rhs_table' => 'salaryranges',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_salaryranges' => 
  array (
    'name' => 'securitygroups_salaryranges',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'SalaryRanges',
    'rhs_table' => 'salaryranges',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'SalaryRanges',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'position_salaryranges' => 
  array (
    'name' => 'position_salaryranges',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'SalaryRanges',
    'rhs_table' => 'salaryranges',
    'rhs_key' => 'position_id',
    'relationship_type' => 'one-to-many',
  ),
  'employeecertificates_modified_user' => 
  array (
    'name' => 'employeecertificates_modified_user',
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
    'name' => 'employeecertificates_created_by',
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
    'name' => 'employeecertificates_assigned_user',
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
    'name' => 'securitygroups_employeecertificates',
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
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'employeecertificates_employee' => 
  array (
    'name' => 'employeecertificates_employee',
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
    'name' => 'candidates_employeecertificates',
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
    'name' => 'certificates_employeecertificates',
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
    'name' => 'employeecertificates_employees',
    'lhs_module' => 'Employees',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmployeeCertificates',
    'rhs_table' => 'employeecertificates',
    'rhs_key' => 'employee_id',
    'relationship_type' => 'one-to-many',
  ),
  'dictionaries_modified_user' => 
  array (
    'name' => 'dictionaries_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dictionaries',
    'rhs_table' => 'dictionaries',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'dictionaries_created_by' => 
  array (
    'name' => 'dictionaries_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Dictionaries',
    'rhs_table' => 'dictionaries',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'comments_modified_user' => 
  array (
    'name' => 'comments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'comments_created_by' => 
  array (
    'name' => 'comments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'comments_assigned_user' => 
  array (
    'name' => 'comments_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'comments_replies' => 
  array (
    'name' => 'comments_replies',
    'lhs_module' => 'Comments',
    'lhs_table' => 'comments',
    'lhs_key' => 'id',
    'rhs_module' => 'Comments',
    'rhs_table' => 'comments',
    'rhs_key' => 'reply_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'reactions_modified_user' => 
  array (
    'name' => 'reactions_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reactions',
    'rhs_table' => 'reactions',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reactions_created_by' => 
  array (
    'name' => 'reactions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reactions',
    'rhs_table' => 'reactions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'reactions_assigned_user' => 
  array (
    'name' => 'reactions_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reactions',
    'rhs_table' => 'reactions',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'files_modified_user' => 
  array (
    'name' => 'files_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'files_created_by' => 
  array (
    'name' => 'files_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'securitygroups_files' => 
  array (
    'name' => 'securitygroups_files',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Files',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'char',
        'len' => '36',
        'required' => true,
        'default' => '',
      ),
      1 => 
      array (
        'name' => 'securitygroup_id',
        'type' => 'char',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'record_id',
        'type' => 'char',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'module',
        'type' => 'char',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'modified_user_id',
        'type' => 'char',
        'len' => '36',
      ),
      6 => 
      array (
        'name' => 'created_by',
        'type' => 'char',
        'len' => '36',
      ),
      7 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => true,
        'default' => '0',
      ),
    ),
  ),
  'files_assigned_user' => 
  array (
    'name' => 'files_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'candidatures_files' => 
  array (
    'name' => 'candidatures_files',
    'lhs_module' => 'Candidatures',
    'lhs_table' => 'candidatures',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Candidatures',
  ),
  'candidates_files' => 
  array (
    'name' => 'candidates_files',
    'lhs_module' => 'Candidates',
    'lhs_table' => 'candidates',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Candidates',
  ),
  'resources_files' => 
  array (
    'name' => 'resources_files',
    'lhs_module' => 'Resources',
    'lhs_table' => 'resources',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Resources',
  ),
  'positions_files' => 
  array (
    'name' => 'positions_files',
    'lhs_module' => 'Positions',
    'lhs_table' => 'positions',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Positions',
  ),
  'workplaces_files' => 
  array (
    'name' => 'workplaces_files',
    'lhs_module' => 'Workplaces',
    'lhs_table' => 'workplaces',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Workplaces',
  ),
  'trainings_files' => 
  array (
    'name' => 'trainings_files',
    'lhs_module' => 'Trainings',
    'lhs_table' => 'trainings',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Trainings',
  ),
  'ideas_files' => 
  array (
    'name' => 'ideas_files',
    'lhs_module' => 'Ideas',
    'lhs_table' => 'ideas',
    'lhs_key' => 'id',
    'rhs_module' => 'Files',
    'rhs_table' => 'files',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Ideas',
  ),
);