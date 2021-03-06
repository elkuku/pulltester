<?php
class JConfig
{
	public $github_project = 'joomla';
	public $github_repo = 'joomla-platform';

	/** Path to a web space to publish the results to */
	public $targetPath = '';

	/** Path to the Joomla! Platform Coding Standards (override) */
	public $codeStandardsPath = '';

	public $dbtype		= 'sqlite';
	public $host		= '';
	public $user		= '';
	public $password	= '';
	public $db			= 'pulltester.sdb';

	/** Custom database path (sqlite etc.) - empty for JPATH_ROOT/db */
	public $dbpath		= '';

	public $dbprefix	= '';
	public $ftp_host	= '127.0.0.1';
	public $ftp_port	= '21';
	public $ftp_user	= '';
	public $ftp_pass	= '';
	public $ftp_root	= '';
	public $ftp_enable	= 0;
	public $tmp_path	= '/tmp';
	public $log_path	= '/logs';
	public $mailer		= 'mail';
	public $mailfrom	= 'admin@localhost.home';
	public $fromname	= '';
	public $sendmail	= '/usr/sbin/sendmail';
	public $smtpauth	= '0';
	public $smtpsecure = 'none';
	public $smtpport	= '25';
	public $smtpuser	= '';
	public $smtppass	= '';
	public $smtphost	= 'localhost';
	public $debug		= 0;
	public $caching		= '0';
	public $cachetime	= '900';
	public $language	= 'en-GB';
	public $secret		= null;
	public $editor		= 'none';
	public $offset		= 0;
	public $lifetime	= 15;
}