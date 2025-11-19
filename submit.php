<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    $data['timestamp'] = date('Y-m-d H:i:s');
    $line = json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL;
    
    file_put_contents('log.txt', $line, FILE_APPEND | LOCK_EX);
    
    // Redirect biar tidak double submit
    header('Location: terimakasih.html');
    exit;
}
?>