<?php
//error_reporting(0);
require "fnc.php";
if(!is_dir('result')){@unlink('result');@mkdir('result');}asu();
echo "Masukan Id; ";
$id = trim(fgets(STDIN));

echo "Save to; ";
$sev = trim(fgets(STDIN));
//echo "Halaman Ke -; ";
//$hal = trim(fgets(STDIN));
$url = "https://zone-d.org/attacker/id/$id/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$cm = curl_exec($ch);
$xdx = preg_match("'<a href=\"https:\/\/zone-d.org\/attacker\/id\/$id\">(.*?)</a>'",$cm,$f);
$ff = str_replace('</a>','',str_replace("<a href=\"https://zone-d.org/attacker/id/$id\">",'</a>',$f[0]));
if($ff == ''){
echo "{ id : not found}\n";
exit();
}
asu();
echo 
"#Zone D Grabber | coded by xKenTangk57.xdx
#Attacker; \e[91m$ff\e[0m\n";
echo 
"1. Dump All
2. Select Page\n~option; ";
$type = trim(fgets(STDIN));
if($type == 1){
for($i=1;$i<10000000000000000000;$i++){
$url = "https://zone-d.org/attacker/id/$id/$i";
gas($url,$i,$sev);
}
}
if($type == 2){
echo 
"~Page to Start; ";
$a = trim(fgets(STDIN));
echo "~Page to End; ";
$b = trim(fgets(STDIN));
if($a<$b){
for($i=$a;$i<$b+1;$i++){
gas($url,$i,$sev);
}
}else{
asu();
echo "\e[91mYour Page is Wrong!!\e[0m\n";
}

}