<body>
    
    <?php
        if(isset($_GET['page'])) {
            
            switch ($_GET['page']) {
                
                case 'enter': 
                    include("./pages/admin/enter.php");
                    break;
                
            }
        
            
        }
    ?>
    
</body>

<?php

?>
