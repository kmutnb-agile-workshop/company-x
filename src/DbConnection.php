<?php
require 'vendor/autoload.php';

final class DbConnection {
  public static function getConnection () {
    $development = array("driver"=>"mysqli", "server"=>"localhost", "user"=>"root", "password"=>"Zaq12wsx", "database"=>"agile-php");
    $production = array("driver"=>"mysqli", "server"=>"54.169.33.80", "user"=>"root", "password"=>"1qaz2wsx", "database"=>"agile-php");
    
    echo "server name is: ".$_SERVER['SERVER_NAME'];
    $config = $production;
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
      $config = $development;
    }

    $db = ADONewConnection($config['driver']);
    $db->debug = false;
    $db->Connect($config['server'], $config['user'], $config['password'], $config['database']);
    return $db;
  }
}
