<body>
    
    <?php
        if(isset($_GET['page'])) {
            
            switch ($_GET['page']) {
                
                case 'enter': 
                    include("/pages/admin/enter.php");
                    break;
                
                case 'main':
                    include("/pages/main.php");
                    break;
                
                default :
                    include("/pages/main.php");
                    break;
                
            }
        
            
        }
    ?>
    
</body>

<?php

?>
