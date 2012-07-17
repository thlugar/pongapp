<?php
// created: 2012-07-16 23:31:25
$dictionary["thhl_parties_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'thhl_parties_contacts' => 
    array (
      'lhs_module' => 'THHL_Parties',
      'lhs_table' => 'thhl_parties',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'thhl_parties_contacts_c',
      'join_key_lhs' => 'thhl_parties_contactsthhl_parties_ida',
      'join_key_rhs' => 'thhl_parties_contactscontacts_idb',
    ),
  ),
  'table' => 'thhl_parties_contacts_c',
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
      'name' => 'thhl_parties_contactsthhl_parties_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'thhl_parties_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'thhl_parties_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'thhl_parties_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'thhl_parties_contactsthhl_parties_ida',
        1 => 'thhl_parties_contactscontacts_idb',
      ),
    ),
  ),
);