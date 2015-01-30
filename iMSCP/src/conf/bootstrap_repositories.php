<?php

defined('AJXP_EXEC') or die('Access not allowed');

# i-MSCP FTP repository
$REPOSITORIES['imscp_ftp'] = array(
	'DISPLAY' => 'i-MSCP FTP Server',
	'DESCRIPTION_ID' => 'Access your Web files through i-MSCP FTP server',
	'DRIVER' => 'ftp',
	'DRIVER_OPTIONS' => array(
		'FTP_HOST' => 'localhost',
		'FTP_PORT' => '21',
		'DEFAULT_RIGHTS' => 'rw',
		'FIX_PERMISSIONS' => 'user',
		'USE_SESSION_CREDENTIALS' => true,
		'TMP_UPLOAD' => AJXP_TMP_DIR
	)
);

// DO NOT REMOVE THIS!
// USER DASHBOARD
$REPOSITORIES['ajxp_user'] = array(
	'DISPLAY' => 'My Dashboard',
	'AJXP_SLUG' => 'dashboard',
	'DISPLAY_ID' => 'user_dash.title',
	'DESCRIPTION_ID' => 'user_dash.desc',
	'DRIVER' => 'ajxp_user',
	'DRIVER_OPTIONS' => array(
		'DEFAULT_RIGHTS' => 'rw'
	)
);

$REPOSITORIES['ajxp_home'] = array(
	'DISPLAY' => 'Welcome',
	'AJXP_SLUG' => 'welcome',
	'DISPLAY_ID' => 'user_home.title',
	'DESCRIPTION_ID' => 'user_home.desc',
	'DRIVER' => 'ajxp_home',
	'DRIVER_OPTIONS' => array(
		'DEFAULT_RIGHTS' => 'rw'
	)
);
