<?php

    class DBException extends Exception {
        
        private $log_filename = "DB.log";

        public function __construct($param) {
            $this->message = $param;
        }
        
        public function printError() {
            die($this->message);
        }
        
        public function logError() {
            $file = fopen($this->log_folder+$this->log_filename, 'a+');
            fwrite($file, $this->message);
            fclose($file);
        }
        
    }

?>