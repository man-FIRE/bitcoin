<?php
//version 1.0 only essential 
//start and auto restart php scripts with cgminr
//remove dns relay laggin 
$stratum1 = "stratum+tcp://159.8.13.248:3334";              //sha256.eu.nicehash.com [159.8.13.248]
$stratum2 = "stratum+tcp://161.202.120.197:3334";           //sha256.jp.nicehash.com [161.202.120.197]
$stratum3 = "stratum+tcp://169.57.174.166:3334";            //sha256.br.nicehash.com [169.57.174.166]

$userAndPass    = "-u 3NbUv9pKMyAGgyqvEcFzkiXN1mn8vFZBxx.avalon7-house -p x";                         

exec("sudo killall -9 cgminer;sleep 5;");

//I love this infini job 
while(1==1) {
    
  shell_exec("sudo cgminer --avalon7-freq 724 --avalon7-fan 100 -o {$stratum1} {$userAndPass} -o {$stratum2} {$userAndPass} -o {$stratum3} {$userAndPass} "); 
  exec("sudo killall -9 cgminer;sleep 5;");                                                          
      
}


?>