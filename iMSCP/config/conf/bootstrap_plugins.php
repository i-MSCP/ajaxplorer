<?php

defined('AJXP_EXEC') or die('Access not allowed');

$PLUGINS = array(
	'CONF_DRIVER' => array(
		'NAME' => 'serial',
		'OPTIONS' => array(
			'REPOSITORIES_FILEPATH' => 'AJXP_DATA_PATH/plugins/conf.serial/repo.ser',
			'ROLES_FILEPATH' => 'AJXP_DATA_PATH/plugins/auth.serial/roles.ser',
			'USERS_DIRPATH' => 'AJXP_DATA_PATH/plugins/auth.serial',
		)
	),
	'AUTH_DRIVER' => array(
		'LABEL' => 'i-MSCP FTP',
		'NAME' => 'ftp',
		'OPTIONS' => array(
			'LOGIN_REDIRECT' => false,
			'REPOSITORY_ID' => 'imscp_ftp',
			'ADMIN_USER' => 'admin',
			'FTP_LOGIN_SCREEN' => false,
			'AUTOCREATE_AJXPUSER' => true,
			'TRANSMIT_CLEAR_PASS' => true
		)
	),
	'LOG_DRIVER' => array(
		'NAME' => 'text',
		'OPTIONS' => array(
			'LOG_PATH' => (defined('AJXP_FORCE_LOGPATH') ? AJXP_FORCE_LOGPATH : 'AJXP_INSTALL_PATH/data/logs/'),
			'LOG_FILE_NAME' => 'log_' . date('m-d-y') . '.txt',
			'LOG_CHMOD' => 0660
		)
	)
);
