<?php

    require_once('./chainingyeso/class.pdofactory.php');

    $strDSN = "pgsql:dbname=postgres;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "aA123456789!2", 
        array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>