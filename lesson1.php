<?php
//$person1=[
//    'name'=>'Dinmuhammed',
//    'age'=>23,
//    'hobby'=>'coding',
//     5 => true
//];
//$person['lover']='compucter';
//$name='Dinmuhammed';
//$old=23;
//$hobby='coding';
//$isMarried=true;
//foreach ($person as $item){
//    echo $item;
//}

//foreach ($person as $key => $item) {
//    echo $key . ': ';
//    echo $item . "\n";
//}
//echo $name, "\n";
//echo $old, "\n";
//echo $hobby, "\n";
//echo $isMarried, "\n";
//unset($person['name']);//cntrl+shift automaticaly close with ';'
//print_r($person);
//$person2=[
//    'name'=>'Karl',
//    'age'=>23,
//    'hobby'=>'coding',
//    5 => true
//];
//
//$person3=[
//    'name'=>'Margo',
//    'age'=>18,
//    'hobby'=>'coding',
//    5 => true
//];

//$persons = [
//    [
//        'name'=>'Dinmuhammed',
//        'age'=>23,
//        'hobby'=>'coding',
//        'isMarried' => true,
//        'cars' => ['jigul', 'moskich', 'volga']
//    ],
//    [
//        'name'=>'Karl',
//        'age'=>23,
//        'hobby'=>'coding',
//        'isMarried' => false
//    ],
//    [
//        'name'=>'Margo',
//        'age'=>18,
//        'hobby'=>'coding',
//        'isMarried' => false
//    ],
//];

//foreach ($persons as $person) {
//    if ($person['isMarried']) {
//        echo $person['name'] . ' is Married' . "\n";
//    } else {
//        echo $person['name'] . ' is not Married' . "\n";
//    }
//};

//$age = '20';
//$name = 'Dinmuhammed';
//if ($age === 20) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}
//$age = 10;
//if ($age != 20) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

//$flat = '20';
//if ($flat >= 20 && $flat === 20) {
//    echo 'Yes';
//} else {
//    echo 'No';
//}

//function sayHello(){
//    echo "Hello World!";
//}
//sayHello();

//function getSum($a, $b){
//    $sum = $a + $b;
//    return $sum;
//}
//$result = getSum(5,10);
//echo $result;

//class Person{
//    public static $name;
//    public static function sum($a, $b)
//    {
//        echo $a + $b;
//    }
//
//    public static function setName($name)
//    {
//        self::$name = $name;
//    }
//}
//Person::setName('Vasya');
////Person::sum(1, 2);
//echo Person::$name;
//
//$person = new Person();
//$person::setName('Gleb');
//echo Person::$name;

//class Developer extends Person
//{
//    public $timePerWeek
//    public function __construct($name, $age, $job, $timePerWeek){
//        $this->name = $name;
//        $this->age = $age;
//        $this->job = $job;
//    }
//}
//
//class Programmer extends Person{
//    public function work(){
//        echo 'programmer working';
//    }
//}
//
//class Director extends Person
//{
//    public $timerWeek;
//    public function work(){
//        echo 'director working';
//    }
//
//}

//class Developer extends Person
//{
//    public $timePerWeek;
//    public function __construct($name, $age, $job, $timePerWeek)
//    {
//        $this->timePerWeek = $timePerWeek;
//        parent::__construct($name, $age, $job);
//    }
//}
//
//$developer = new Developer('Jack', 20, 'developer', 20);
//echo $developer->timePerWeek;

//interface Sportsmen
//{
//    public function run();
//    public function gym();
//    public function eat();
//}
//
//class Gymnast implements Sportsmen
//{
//
//    public function run()
//    {
//        echo 'I am running';
//    }
//    public function gym()
//    {
//        echo 'I am gym';
//    }
//    public function eat(){
//        echo 'I am eat';
//    }
//}

class Plant
{
    public $title;
    public $color;
    public $season;

    public function __construct($title, $color, $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }
}

class Rosa extends Plant
{

}

$rosa = new Rosa('Rosa', 'Red', 'Sprint');
echo $rosa->title;