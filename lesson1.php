<?php
$person=[
    'name'=>'Dinmuhammed',
    'age'=>23,
    'hobby'=>'coding',
     5 => true
];
$person['lover']='compucter';
$name='Dinmuhammed';
$old=23;
$hobby='coding';
$isMarried=true;
foreach ($person as $item){
    echo $item;
}
//echo $name, "\n";
//echo $old, "\n";
//echo $hobby, "\n";
//echo $isMarried, "\n";
unset($person['name']);//cntrl+shift automaticaly close with ';'
print_r($person);