<?php

    require_once "./core/functions.php";
    require_once "./globals.php";
    require_once "./core/connect.php";

    $tables = all("show tables");
    //print_r($tables);
    foreach ($tables as $table){
        // $tableName = $table['Tables_in_sann_kyi_tar'];
        // run("DROP TABLE IF EXISTS ".$tableName)
        run("DROP TABLE IF EXISTS ".$table['Tables_in_sann_kyi_tar']);

        
    }

    // $q = run("SELECT (CONCAT('DROP TABLE IF EXISTS ',table_name,';'))FROM information_schema.tables WHERE TABLE_SCHEMA = '$database';");
    // dd($q);

    logger("All tables deleted successfully",93);
    // die();

    // createTable("a","name varchar(50) NOT NULL","phone varchar(20) NOT NULL","email varchar(50) NOT NULL");
    // createTable("b","name varchar(50) NOT NULL","debt int(11) NOT NULL");
    createTable("my","name varchar(50) NOT NULL","debt int(11) NOT NULL");
    // -- `name` varchar(50) NOT NULL,
    // -- `debt` int(11) NOT NULL,
    createTable("inventories","item varchar(20) NOT NULL","price int(11) NOT NULL","stock int(11) NOT NULL");

    //SELECT * FROM information_schema.'TABLES' WHERE TABLE_SCHEMA = "sann_kyi_tar";
    //SELECT CONCAT(" DROP TABLE IF EXISTS ",TABLE_NAME,";") FROM information_schema.'TABLES' WHERE TABLE_SCHEMA = "sann_kyi_tar"

    createTable("users","name varchar(50) NOT NULL","email varchar(50) NOT NULL","gender enum('male','female') NOT NULL","address TEXT NOT NULL");
?>