<?php  return array (
  'formit' => 'FormIt',
  'formit.intro_msg' => 'View all your submitted forms.',
  'formit.form' => 'Form',
  'formit.forms' => 'Forms',
  'formit.values' => 'Values',
  'formit.date' => 'Date',
  'formit.hash' => 'Hash Key',
  'formit.ip' => 'IP Address',
  'formit.form_view' => 'View form',
  'formit.form_remove' => 'Remove form',
  'formit.form_remove_confirm' => 'Are you sure you want to remove this submitted form?',
  'formit.select_context' => 'Select context',
  'formit.select_form' => 'Select form',
  'formit.select_start_date' => 'Select start date',
  'formit.select_end_date' => 'Select end date',
  'formit.clear' => 'Clear filter',
  'formit.export' => 'Export',
  'formit.encryption' => 'Encryption',
  'formit.encryption_msg' => 'Manage encryption for all the submitted forms.',
  'formit.encrypted' => 'Encrypted',
  'formit.total' => 'Total',
  'formit.form_encryptall' => 'Encrypt all submitted forms',
  'formit.form_decryptall' => 'Decrypt all submitted forms',
  'formit.form_encrypt' => 'Encrypt',
  'formit.form_encrypt_confirm' => 'Are you sure you want to encrypt all the submitted forms?',
  'formit.form_decrypt' => 'Decrypt',
  'formit.form_decrypt_confirm' => 'Are you sure you want to decrypt all the submitted forms?',
  'formit.migrate' => 'Migrate encrypted form submissions',
  'formit.migrate_desc' => 'Upgrading to FormIt 3.0 will also update the encryption method used for encrypting submitted form data. 
FormIt 2.x used mcrypt for encrypting and decrypting, but 3.0 uses the openssl methods. For this to work correctly the currently encrypted forms need to be migrated from mcrypt to openssl.',
  'formit.migrate_alert' => 'FormIt was updated, but your encrypted form submissions need to be migrated. Click here to start the migration.',
  'formit.migrate_status' => 'Status',
  'formit.migrate_running' => 'Currently running migration process in the background. Please keep this page open in your browser. DO NOT CLOSE THIS PAGE!',
  'formit.migrate_success' => 'Migration completed',
  'formit.migrate_success_msg' => 'All your encrypted forms have been successfully migrated.',
  'formit.encryption_unavailable' => 'OpenSSL functions openssl_encrypt and openssl_decrypt are not available. 
Please install OpenSSL on your server. See http://www.php.net/manual/en/openssl.requirements.php for more information.',
  'formit.encryption_unavailable_warning' => 'Warning: OpenSSL functions openssl_encrypt and openssl_decrypt are not available. This means that you cannot use encryption on your forms. Please install OpenSSL on your server. 
Visit <a href="http://www.php.net/manual/en/openssl.requirements.php" target="_blank">this page</a> for more information.',
  'formit.clean_forms' => 'Clean up forms',
  'formit.window.cleanforms.days_to_delete' => 'Delete forms older than:',
  'formit.window.cleanforms.days' => 'days.',
  'formit.window.cleanforms.execute' => 'Clean up forms',
  'formit.window.cleanforms.executing' => 'Cleaning up forms',
  'formit.window.cleanforms.intro_msg' => 'The European <a href="https://ec.europa.eu/commission/priorities/justice-and-fundamental-rights/data-protection/2018-reform-eu-data-protection-rules_en" target="_BLANK">General Data Protection Regulation (GDPR)</a> 
requires that personal data, which is no longer necessary to possess, is removed. This tool makes it possible to remove saved forms with an age older than the given days. This action can not be undone!',
  'formit.window.cleanforms.success_description' => 'Removed [[+amount]] form(s).',
);