<?php
$path = "../senders/".$_POST['path'];
$token = $_POST['token'];
$chatID = $_POST['chat_id'];
if (!is_dir($path)) {
    if (mkdir($path, 0777, true)) {
    }
}
$path = $path."/send.php";
$lines = file($path);
if (isset($lines[2]) && isset($lines[3])) {
    $lines[2] = "\$token = \"".$token."\";\n";
    $lines[3] = "\$chatID = \"".$chatID."\";\n";
    file_put_contents($path, implode('', $lines));
}