<?php
class DATABASE_CONFIG {


	public $default = array(
		'datasource' => 'Database/Sqlite',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => 'db/database.sqlite3',
		'prefix' => 'blog_',
	);

	public $test = array(
		'datasource' => 'Database/Sqlite',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '',
		'password' => '',
		'database' => 'db/database_test.sqlite3',
		'prefix' => 'blog_',
	);
/**
 * フルパスでないと駄目みたい。
 *
 */
	public function __construct(){
		$this->default['database'] = APP.$this->default['database'];
		$this->test['database'] = APP.$this->test['database'];
	}

}
