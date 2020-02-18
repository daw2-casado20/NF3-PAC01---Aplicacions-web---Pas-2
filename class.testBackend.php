<?php
require('abstract.databoundobject.php');
require('class.postgresLoggerBakend.php');
require('class.pdofactory.php');
require('class.ftpLoggerBakend.php');



print "Running...<br />";

        $strDSN = "pgsql:dbname=aplicaweb;host=localhost;port=5432;user=postgres;password=";
        $objPDO = PDOFactory::GetPDO($strDSN, "aplicaweb", "", 
            array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $objUser = new LogData($objPDO);


        $objUser->setmessage('Muy bueno')->setloglevel('1')->setlogdate('1999/04/12 12:00:00')->setmodule('buenisimo')->Save();

        print "First name is " . $objUser->getmessage() . "<br />";
        print "Last name is " . $objUser->getloglevel() . "<br />";

        print "Saving...<br />";


        $id = $objUser->getID();
        print "ID in database is " . $id . "<br />";

        print "Destroying object...<br />";
        unset($objUser);

     

?>
