<?php
//aplikasi todolist
$array=[];
echo "selamat datang di aplikasi todolist\n";
echo "apakah anda ingin menggunakan aplikasi ini ? (y/n) : ";
$pilih=trim(fgets(STDIN));
if($pilih=="y"){
do{
echo "========= MENU ==========\n";
echo "1.menambahkan list\n";
echo "2.mengedit list\n";
echo "3.menghapus list\n";
echo "4.kelluar aplikasi\n";
echo "pilih menu yang ingin kamu pilih : ";
$menu=(int)trim(fgets(STDIN));
if($menu==1){
    echo "masukan list : ";
    $data=trim(fgets(STDIN));
    $index=count($array)+1;
    $array[$index]=$data;
    foreach ($array as $key =>$value){
    echo "$key.$value\n";
    }
}   elseif($menu==2){
    echo "pilih nomor list yang ingin kamu edit : ";
    $e=(int)trim(fgets(STDIN));
    echo "anda akan mengedit $array[$e]\n";
    echo "masukan list baru : ";
    $update=trim(fgets(STDIN));
    $array2[$e]=$update;
    foreach ($array2 as $key2 =>$value2){
    echo "$key2.$value2\n";
    }
    
}   elseif ($menu==3){
    echo "pilih nomor list yang ingin di haspus : ";
    $h=(int)trim(fgets(STDIN));
    echo "anda telah menghapus list $array[$h]\n";
    for($i = $h; $i <  count($array); $i++){
    $array[$i] = $array[$i+1];  
}
    unset($array[count($array)]);

}elseif($menu==4){
    echo "anda telah keluar\n";
    exit;
}
}while(true);
}else{
    echo "anda keluar dari aplikasi ini \n";
}



