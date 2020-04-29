<?php require_once __DIR__ . '/../../vendor/autoload.php'; 

use App\View; 


    
foreach($products as $productItem){ 
        echo View::render(
            'Templates/Users/form.php',
            ['item' => $productItem]
        );
    } 
    


    



