<?php
$username=12345;
$password=12345;
if($username == 12345 && $password == 12345){
    echo "Anda Berhasil Login";
}else if($username == 12345 && $password == 22222){
    echo "Maaf Password Anda Salah";
}else if($username == 22222 && $password == 12345){
    echo "Maaf Username Anda Salah";
}else{
    echo "Mohon Maaf Username dan Password Anda Salah";
}
?>