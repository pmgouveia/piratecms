<?php


namespace App\Models;
class Configs extends Model {
	/*
	drop table configs;
create table configs(
  `id` int NOT NULL AUTO_INCREMENT,
   tipo text,
   value text,
     created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  modified DATETIME,
   primary key(id)
)
)
	*/
	public $tableName = 'configs';
	public $force_translation = false;
	// public $filters = array('nome','morada','telefone','localidade','codigo','visivel','referencia');
	// public $primaryKey = 'cd_loja';
	
	public function __construct() {
		parent::__construct();
		
	}
	
	
}

