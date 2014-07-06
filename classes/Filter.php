<?php
    
    class Filter {
        
        public static function validate_email($email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
        
    }

?>