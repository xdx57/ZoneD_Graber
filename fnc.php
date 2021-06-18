<?php
function sev($a,$b){
file_put_contents($a,"$b", FILE_APPEND);
}
function asu(){system('clear');}
function ipsl($a){
$c = str_replace('..','',str_replace('...','',str_replace('....','',str_replace('.....','',$a))));
$b = explode('/',$c);
return "$b[0]";
}
function gas($url,$no,$fil){
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$cm = curl_exec($ch);
$c = str_replace('<a href="https://zone-d.org/mirror/id/','<xdx>',$cm);
$d =  preg_match_all("'<td>(.*?)<xdx>'",$c,$res);
if($d==0){
echo "\e[91m[ END ]\e[0m\n";
sleep(2);
exit();
}else{
echo "\e[92m>>>> Page-$no \e[0m\n";
sleep(1);
foreach ($res[0] as $a){
$b = explode ('<td>',$a);
$ler = ipsl($b[3]);
echo "~> $ler\n";

if($ler != ''){
sev("result/$fil","$ler\n");
}

}
}


}