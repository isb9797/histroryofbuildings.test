<?php
$xpdo_meta_map['uLoginUser']= array (
  'package' => 'ulogin',
  'table' => 'ulogin_user',
  'fields' => 
  array (
    'user_id' => 0,
    'identity' => '',
  ),
  'fieldMeta' => 
  array (
    'user_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'identity' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
);
