<?php
//exec attend la fin de l'execution d'une commande
exec("sudo killall -9 cgminer");
exec("sleep 1");
exec('sudo cgminer --avalon7-fan 100 --avalon7-freq 760 --avalon7-voltage 5056 --load-balance -o stratum+tcp://sha256.eu.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x -o stratum+tcp://sha256.us.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x -o stratum+tcp://sha256.hk.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x -o stratum+tcp://sha256.jp.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x -o stratum+tcp://sha256.br.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x -o stratum+tcp://sha256.in.nicehash.com:3334 -u 3K1VSQC323NY4WcxbAaxRdMXRo18Tq8kPR.house.with.patrick.le.weeling -p x');
?>