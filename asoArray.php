<?php
$capital =array("bangladesh"=>"dhaka",
                "Usa"=>"washington d.c",
                "hungary"=>"budapest"

);
echo $capital["Usa"];

foreach($capital as $key => $value){
    echo "{$key} :{$value}<br>";
}
?>