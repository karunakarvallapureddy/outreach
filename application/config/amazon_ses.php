<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Config for the Amazon Simple Email Service library
 *
 * @see ../libraries/Amazon_ses.php
 */
// Amazon credentials
$config['amazon_ses_secret_key'] = 'RI0+hTOQe6prK5z4hHHPCldoume7XBOyudNMnWCu';
$config['amazon_ses_access_key'] = 'AKIAIAKYPJ2FHYX4EQZQ';

// Adresses
$config['amazon_ses_from'] = 'info@officeadvisor.in';
$config['amazon_ses_from_name'] = 'Task';
$config['amazon_ses_reply_to'] = 'task.admin@gmail.com';

// Path to certificate to verify SSL connection (i.e. 'certs/cacert.pem') 
$config['amazon_ses_cert_path'] = 'amazon_ses/cacert.pem';

// Charset to be used, for example UTF-8, ISO-8859-1 or Shift_JIS. The SMTP
// protocol uses 7-bit ASCII by default
$config['amazon_ses_charset'] = '';
