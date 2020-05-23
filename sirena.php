<?php

/* 
Notes:
ketahuilah,tak selama nya kau dibawah. pasti kau juga ingin diatas bukan?
dengan cara kau merubah karya orang lain tak membuat dirimu hebat,melainkan menunjukan bahwa kau selalu dibawah(kiddies)

Tools name: Syrena(Beta version) // development stage
coded     : Rex4
support   : Banyumas Cyber Team & Sorong666etar
developed : Cantix Crew Family
instagram : instagram.com/cantixcr3w
fanspage  : facebook.com/cantixcr3w
twitter   : twitter.com/cantixcr3w

have any problems?
contact me : cantixcrew@yahoo.com
copyrights © Cantix Crew allright reversed 2019 - 2020
*/

// menu and tags
$auth = "Rex4";
$team = "@cantixcr3w";
$ver = "1.0";
$name = "Syrena";
$is = "[*]Done";
$inf = "[INFO]";
$cri = "[CRITICAL]";
$deb = "[DEBUG]";
$err = "[ERROR]";
$usage = "usage: ";
// end

// run program
system('clear');                                                           
echo "  _____                   \n ";              
echo "/  ___|   $name $ver\n";        
echo "\ `--.  _   _  _ __   ___  _ __    __ _  \n";
echo " `--. \| | | || '__| / _ \| '_ \  / _` | \n";
echo "/\__/ /| |_| || |   |  __/| | | || (_| | \n";
echo "\____/  \__, ||_|    \___||_| |_| \__,_| \n";
echo "        __/ |  by $auth $team     \n";                   
echo "       |___/        ";                 
echo "\n";
echo " [01] Information Gathering\n";
echo " [02] Auto Exloitation     \n";
echo " [03] Auto Detector        \n";
echo " [04] Scanner & Finder     \n";
echo " [05] Bruteforcer          \n";
echo " [06] Networks             \n";
echo " [07] Exit\n";
echo "syrena~# ";
$select = trim(fgets(STDIN));
if ($select == 1){
	sleep(1);
	system('clear');
	echo "  _____          __           ___         _    _      \n";
	echo "  \_   \ _ __   / _|  ___    / _ \  __ _ | |_ | |__   \n";
	echo "   / /\/| '_ \ | |_  / _ \  / /_\/ / _` || __|| '_ \  \n";
	echo "/\/ /_  | | | ||  _|| (_) |/ /_\ \| (_| || |_ | | | | \n";
	echo "\____/  |_| |_||_|   \___/ \____/  \__,_| \__||_| |_| \n";
	echo "   Information Gathering by $auth $team \n\n";
	echo " [01] Sherlock     [06] CarbonToolkit\n";
	echo " [02] Racoon       [07] Red Hawk\n";
	echo " [03] FBi          [08] Discover\n";
	echo " [04] Zeebsploit   [09] Striker\n";
	echo " [05] Osmedeus     [10] VulnX\n";
	echo " [00] back\n";
	echo " syrena\\infogath~# ";
	$infogath = trim(fgets(STDIN));
	if($infogath == 1){
		system('apt-get update && apt-get upgrade');
		system('apt-get install python3');
		system('git clone https://github.com/sherlock-project/sherlock.git');
		echo "$is \n";
		echo "[00] Exit\n";
		echo "syrena~# ";
		$sherlock = trim(fgets(STDIN));
			if($sherlock == 0 && $sherlock == 00){
				echo "You're logout";
				system('exit');
			}else{
				echo "Error: invalid";
			}
	}else{
		echo "Oops..error\n";
		}
		if($infogath == 2){
			system('apt-get update && apt-get upgrade');
			system('apt-get install git');
			system('apt-get install python3 -y');
			system('https://github.com/evyatarmeged/Raccoon');
			echo "$is \n";
			echo "type cd Raccoon to continue\n";
			echo "then type python setup.py install\n";
			echo "[00] Exit\n";
			echo "syrena~# ";
			$racon = trim(fgets(STDIN));
				if($racon == 0 && $racon == 00){
					echo "You're logout";
					system('exit');
				}else{
					echo "Error: invalid";
				}
		}else{
			echo "Development stage";
		}
	if($infogath == 3){
		system('apt-get update && apt-get upgrade');
		system('apt-get install python');
		system('apt-get install git');
		system('apt-get install git python2');
		system('git clone https://github.com/xHak9x/fbi.git');
		echo "$is \n";
		echo "$inf type cd fbi to continue\n";
		echo "$inf then type pip2 install -r requirements.txt into cd fbi\n";
		echo "$inf and last,you must type python2 fbi.py\n";
		echo "[00] Exit\n";
		echo "syrena~# ";
			$efbiay = trim(fgets(STDIN));
				if($efbiay == 0 && $efbiay == 00){
					echo "You're logout";
					system('exit');
				}else{
					echo "Error: invalid";
				}
	}else{
		echo "Development stage";
	}
}else{
	echo "Sorry..development stage";
}

?>
