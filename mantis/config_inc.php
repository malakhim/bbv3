<?php
	$g_hostname = 'localhost';
	$g_db_type = 'mysql';
	$g_database_name = 'malakhim_mnts1';
	$g_db_username = 'malakhim_mnts1';
	$g_db_password = 'L1h2UJ8x8gRcz';

	$g_allow_signup    = ON;  //allows the users to sign up for a new account
	$g_enable_email_notification = ON; //enables the email messages
	$g_phpMailer_method = PHPMAILER_METHOD_MAIL;
	$g_smtp_host = 'localhost';
	$g_smtp_connection_mode = 'tls';
	$g_smtp_port = 465;
	$g_smtp_username = 'bryan@brystore.com'; //replace it with your gmail address
	$g_smtp_password = '72waLkpE'; //replace it with your gmail password
	$g_administrator_email = 'bryan@bryonics.com'; //this will be your administrator email address
	$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT;
	$g_log_destination = 'file:/tmp/mantisbt.log';
?>
