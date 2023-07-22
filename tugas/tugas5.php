<?php
$target = mt_rand(1, 9);
echo "selamat datang di mini game tebak angka 1-9!\n";
echo "kamu memiliki 3 nyawa untuk menebak angka yang benar.\n";
$kesempatan = 1;
while ($kesempatan <= 3){
    echo "masukan tebakan mu gunakan kesempatan ke $kesempatan :";
    $tebakan1=(int)trim(fgets(STDIN));
    switch($tebakan1){
        case $tebakan1 < $target;
        echo "tebakan mu terlalu rendah \n";
        break;

        case $tebakan1 > $target;
        echo "tebakan mu terlalu tinggi\n";
        break;

        case $tebakan1 == $target;
        echo "selamat kamu memenangkan game ini\n";
        exit;
        break;
    }
    if ($kesempatan == 3){
        echo "nyawa mu telah habis jawabanny adalah : $target\n";
        exit;
    }
    $kesempatan++;
}
