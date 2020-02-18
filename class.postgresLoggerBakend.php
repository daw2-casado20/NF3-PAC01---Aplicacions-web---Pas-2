<?php

require_once('abstract.databoundobject.php');

class LogData extends DataBoundObject {

        protected $message;
        protected $loglevel;
        protected $logdate;
        protected $module;

        protected function DefineTableName() {
                return("logdata");
        }

        protected function DefineRelationMap() {
                return(array(
                		"id" => "ID",
                        "message" => "message",
                        "loglevel" => "loglevel",
                        "logdate" => "logdate",
                        "module" => "module",
                        ));
        }
}

?>
