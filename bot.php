<?php

function curl($url, $post){
  $ch = curl_init($ch);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST,1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  return curl_exec($ch);
  
  }
 
$banner ="'\e[1;31m'____  _ _                          _
|  _ \(_) |_ __ _    __ _ _ __   __| |_ __ ___
| |_) | | __/ _` |  / _` | '_ \ / _` | '__/ _ \
|  _ <| | || (_| | | (_| | | | | (_| | | |  __/
|_| \_\_|\__\__,_|  \__,_|_| |_|\__,_|_|  \___|";

//ambil data login

function login($user, $pass){
  $url="https://umairspin.spinforcash.app/api.php";
  $post="username=duwita123&access_key=6808&password=rita123&user_login=1&";
  return json_decode(curl($url, $post));
  
}

//ambil data spin nya

function spin($user, $point){
  $url="https://umairspin.spinforcash.app/api.php";
  $post="add_spin=1&username=duwita123&access_key=6808&type=Spin+wheel&points=5&";
  return json_decode(curl($url, $post)); 
  
}

echo "username: "; 
$user= trim(fgets(STDIN));
echo "password: ";
$pass= trim(fgets(STDIN));
echo "isi point: ";
$points= trim(fgets(STDIN));

echo $banner, "\n";
echo "\n";
echo "'\e[1;32m'<===========>";
echo "☆ Subscribe ☆ chanel ☆ andre007\n";
echo "\n";

 $login = login("$user", "$pass");

if($login->error == "false"){
  echo "[login] {$login->message}  => {$login
 ->data->username}\n";
 
  while(true){
    $log =  login("$user", "$pass");
    $spin= spin("log->data->username", $point
);
    
    echo "[+] {$log->data->username} | 
{$spin->message} | point: {$log->data
->points}\n";

  }   
               
   }else{
  echo "error  boss!!!!!....."; 
  
  }
  
  
  ?>