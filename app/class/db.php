<?php
class DB
{
	private $_DBhost = 'localhost';
	private $_DBport = '3306';
	private $_DBname = 'ourcarrot';
	private $_DBadmin = 'root';
	private $_DBpass = '';
	public $db;
	
	function __construct()
	{
		$this->db = new DB\SQL
		(
			'mysql:host='.$this->_DBhost.';
			port='.$this->_DBport.';
			dbname='.$this->_DBname.'',
			''.$this->_DBadmin.'',
			''.$this->_DBpass.'',
			array(\PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8;')
		);
	}
}
?>