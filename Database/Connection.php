<?php

namespace DB;

use PDO;
use PDOException;

class Connection 
{

    /**
     * @param $config
     * @return PDO
     */
    public static function make($config)
	{
		try {

			 return new PDO(
			 	$config['connection'].'; dbname='.$config['name'],
			 	$config['username'],
			 	$config['password'],
			 	$config['options']
			 );

		} catch (PDOException $e) {

			die(var_dump("could not connect ". $e->getMessage()));
				
		}
	}

	
}