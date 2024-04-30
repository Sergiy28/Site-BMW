<?php  
// Встановлюємо заголовки CORS
header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

require 'src/subscription.php';  
// Додаєму нову підписку з даних з POST
 addSubscription($_POST); 