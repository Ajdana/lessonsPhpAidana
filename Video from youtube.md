

# 📘 PHP с нуля — Заметки по видеоурокам

---

## 📽 0 Video – Необходимые программы

### 🔧 Серверы:
- **Wamp Server** (для Windows)
- **Xampp Server** (для Linux и Unix)
- **Open Server**

### 💻 Что использовать для написания кода на PHP:
- PhpStorm  
- WebStorm  
- Atom

> ⚠️ При установке и запуске **Wamp Server** может возникнуть ошибка.  
Чтобы узнать причину — нужно посмотреть её **код**.

![[Pasted image 20250808160802.png]]

---

## 📽 1 Video – Подключаем PHP

Чтобы компьютер находил PHP, нужно указать путь в переменных среды.

### 📍 Как открыть переменные среды:
1. Нажми `Win + S` → введи **"Переменные среды"**
2. Найди **Path** → нажми **Изменить**
3. Вставь скопированный путь к PHP

✅ Проверка:
Открой CMD и напиши:

```bash
php --version
````

---

## 📽 2 Video – Типы данных

Официально в PHP существует **8 типов данных**:

![[Pasted image 20250808162305.png]]

---

## 📽 3 Video – Переменные

- `$` — все переменные начинаются со знака доллара
    
- Примеры:
    

```php
$name = 'Victor';
$age = 20;
$hobby = 'swimming';
$isMarried = true; // Верблюжья нотация
```

```php
echo $name . "\n";
echo $age . "\n";
echo $hobby . "\n";
```

### Boolean в PHP:

- `false` = пусто
    
- `true` = 1
    

---

## 📽 4 Video – Массивы

```php
$person = ['Victor', 20, 'swimming', true];
```

- `echo` — конвертирует всё в строку
    
- `print_r($person);` — выводит содержимое массива
    
- `print_r($person[1]);` — выводит элемент с индексом 1
    

```php
$person = [
	'name' => 'Victor',
	'age' => 20,
	'hobby' => 'swimming',
	5 => true
];

$person[] = 'cat'; // добавить элемент
$person['animal'] = 'cat'; // добавить по ключу
unset($person['name']); // удалить по ключу
print_r($person['name']);
```

---

## 📽 5 Video – Цикличный оператор

```php
foreach ($person as $item) {
	echo $item;
}
```

```php
foreach ($person as $key => $item) {
	echo $key . ': ';
	echo $item . "\n";
}
```

---

## 📽 6 Video – Многомерные массивы

```php
$persons = [  
    [  
        'name' => 'Dinmuhammed',  
        'age' => 23,  
        'hobby' => 'coding',  
        5 => true,  
        'cars' => ['jigul', 'moskich', 'volga']  
    ],  
    [  
        'name' => 'Karl',  
        'age' => 23,  
        'hobby' => 'coding',  
        5 => true  
    ],  
    [  
        'name' => 'Margo',  
        'age' => 18,  
        'hobby' => 'coding',  
        5 => true  
    ],  
];
```

```php
foreach ($persons as $person) {  
    print_r($person);  
}
```

---

## 📽 7 Video – Условный оператор

```php
$age = 0;
if ($age) {
	echo 'Yes';
}
```

```php
if ($age) {
	echo 'Yes';
} else {
	echo 'No';
}
```

### Задание:

```php
foreach ($persons as $person) {  
    if ($person['isMarried']) {  
        echo $person['name'] . ' is Married' . "\n";  
    } else {  
        echo $person['name'] . ' is not Married' . "\n";  
    }  
}
```

---

## 📽 8 Video – Операторы сравнения

| Оператор | Назначение         | Пример     |
| -------- | ------------------ | ---------- |
| `=`      | Присваивание       | `$x = 10;` |
| `==`     | Сравнение значений | `$x == 10` |

```php
$age = 0;  
if ($age == 20) {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

| Оператор | Назначение      | Пример                |
| -------- | --------------- | --------------------- |
| `&&`     | И (оба условия) | `$x == 5 && $y == 10` |

```php
$age = 0;  
$name = 'Dinmuhammed';  
if ($age == 20 && $name == 'Dinmuhammed') {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

| Оператор | Назначение            | Пример                 |
| -------- | --------------------- | ---------------------- |
| \| \|    | Или (одно из условий) | $x == 5 \| \| $y == 10 |

```php
$age = 0;  
$name = 'Dinmuhammed';  
if ($age == 20 || $name == 'Dinmuhammed') {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

| Оператор | Назначение                         | Пример      |
| -------- | ---------------------------------- | ----------- |
| `===`    | Строгое сравнение (тип + значение) | $x === '10' |

```php
$age = '20';  
$name = 'Dinmuhammed';  
if ($age === 20) {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

| Оператор | Назначение | Пример  |
| -------- | ---------- | ------- |
| !=       | Не равно   | $x != 5 |

```php
$age = 10;  
if ($age != 20) {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

| Оператор | Назначение               | Пример  |
| -------- | ------------------------ | ------- |
| <=, >=   | Меньше/Больше или равно) | $x >= 5 |

```php
$flat = '20';  
if ($flat >= 20 && $flat === 20) {  
    echo 'Yes';  
} else {  
    echo 'No';  
}
```

---
Конечно! Вот красиво оформленные **заметки по темам 9–18 видео по PHP**, готовые для вставки в **Obsidian** (поддержка форматирования Markdown):

---

## 📹 **9 Video — Функции в PHP**

**Функция** — это блок кода с именем, который можно вызывать сколько угодно раз.

```php
function sayHello() {  
    echo "Hello World!";  
}  

sayHello(); // вызов функции
```

- **`function sayHello()`** — сигнатура функции
    
- **`{}`** — тело функции
    

---

## 📹 **10 Video — Аргументы функций**

Функции могут принимать данные через **аргументы**:

```php
function sum($a, $b) {  
    $sum = $a + $b;  
    echo $sum;  
}

sum(5, 10); // передаём аргументы
```

---

## 📹 **11 Video — Возвращаемое значение функций**

С помощью `return` функция может **вернуть результат**, который можно сохранить в переменную:

```php
function getSum($a, $b) {  
    $sum = $a + $b;  
    return $sum; // после return код не выполняется
}

$result = getSum(5, 10);  
echo $result; // выведет 15
```

---

## 📹 **12 Video — Классы в PHP**

Класс — это **шаблон**, в котором удобно хранить свойства и методы.

```php
class Person {  
    public $name = 'Victor';  
    public $age = 20;  
    public $isMarried = true;

    public function sayHello() {  
        echo 'Hello my friend';  
    }  
}

$person = new Person(); // создаём объект
$person->sayHello(); // вызов метода
```

---

## 📹 **13 Video — Сеттеры и Геттеры**

- **`set`** — установить значение
    
- **`get`** — получить значение
    

```php
class Person {
    public $name = 'Bob';
    public $age = 20;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$person = new Person();
$person->setName('Vasya');
$person->setAge(100);

echo $person->getName(); // Vasya
echo $person->getAge();  // 100
```

---

## 📹 **14 Video — Конструктор в классах**

**Конструктор** — это специальный метод `__construct`, который вызывается **при создании объекта**.

```php
class Person {
    public $name;
    public $age;
    public $hobby;

    public function __construct($name, $age, $hobby) {
        echo 'CONSTRUCTOR!!!!!';
        $this->name = $name;
        $this->age = $age;
        $this->hobby = $hobby;
    }
}

$person = new Person('Bob', 20, 'swimming');

echo $person->name; // Bob
```

---

## 📹 **15 Video — Наследование**

Класс может **наследовать** свойства и методы другого класса с помощью `extends`.

```php
class Person {
    public $name = 'Bob';
    public $age = 20;
    public $job = 'Web Developer';
}

class Developer extends Person {
    public function work() {
        echo 'developer working';
    }
}

class Programmer extends Person {
    public function work() {
        echo 'programmer working';
    }
}

class Director extends Person {
    public function work() {
        echo 'director working';
    }
}

$director = new Director();
echo $director->name; // Bob
```

---

## 📹 **16 Video — Наследование и конструктор**

- Классы-наследники могут **использовать конструктор родителя**.
    
- Внутри конструктора можно использовать `parent::__construct(...)` для вызова конструктора родителя.
    

```php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

class Developer extends Person {
    public $language;

    public function __construct($name, $language) {
        parent::__construct($name); // вызов конструктора Person
        $this->language = $language;
    }
}
```

---

## 📹 **17 Video — Конструктор в наследниках**

Конструкторы в дочерних классах позволяют расширять и настраивать начальные значения при создании объектов.

---

## 📹 **18 Video — Абстрактные классы**

**Абстрактный класс** — это класс, который нельзя создать напрямую. Он используется как **шаблон** для других классов.

- Используется ключевое слово `abstract`
    
- Может содержать **абстрактные методы** — без реализации
    
- Наследники обязаны реализовать абстрактные методы
    

```php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

$dog = new Dog();
$dog->makeSound(); // Woof!
```

```php
class Developer extends Person  
{  
    public $timePerWeek;  
    public function __construct($name, $age, $job, $timePerWeek)  
    {  
        $this->timePerWeek = $timePerWeek;  
        parent::__construct($name, $age, $job);  
    }  
}  
  
$developer = new Developer('Jack', 20, 'developer', 20);  
echo $developer->timePerWeek;
```

---
Вот красиво оформленное и простое объяснение для твоих **видео 19 и 20** — по **статике** и **интерфейсам** в PHP.

---

## 🔹 **19. Статические методы и свойства в PHP**

```php
class Person {
    public static $name;

    public static function sum($a, $b) {
        echo $a + $b;
    }

    public static function setName($name) {
        self::$name = $name;
    }
}

Person::setName('Vasya');
echo Person::$name; // Выведет: Vasya

$person = new Person();
$person::setName('Gleb'); // Можно и так, но лучше через имя класса
echo Person::$name; // Выведет: Gleb
```

### 🧠 Что это значит:

|📌 Термин|💬 Объяснение|
|---|---|
|`static`|Свойство или метод **принадлежит классу**, а не объекту.|
|`self::`|Обращение **внутри** класса к статическому свойству или методу.|
|`::` (двойное двоеточие)|Это **оператор разрешения области видимости**. Используется для вызова **статических** свойств/методов у класса.|

### ✅ Когда использовать:

- Когда метод/данные **общие для всех объектов** класса.
    
- Для **вспомогательных функций** (например, `sum`, `validate`, `config` и т.д.).
    

---

## 🔹 **20. Интерфейсы в PHP**

```php
interface Sportsmen {
    public function run();
    public function gym();
    public function eat();
}

class Gymnast implements Sportsmen {
    public function run() {
        echo 'I am running';
    }

    public function gym() {
        echo 'I am gym';
    }

    public function eat() {
        echo 'I am eat';
    }
}
```

### 🧠 Что такое интерфейс?

|📌 Термин|💬 Объяснение|
|---|---|
|`interface`|Это **набор методов без реализации**, который должен реализовать класс.|
|`implements`|Ключевое слово, чтобы **реализовать интерфейс** в классе.|
|Реализация|Каждый метод из интерфейса **обязательно должен быть реализован** в классе.|

### ✅ Когда использовать:

- Чтобы **заставить классы реализовать одинаковое поведение**.
    
- Удобно для **работы с разными типами объектов**, которые должны вести себя одинаково (например, все спортсмены должны уметь бегать, есть и заниматься спортом).
    

---

### 💡 Пример на простом языке:

> Представь, что **интерфейс — это договор**:  
> "Если ты спортсмен, ты обязан уметь бегать, есть и ходить в зал."  
> Класс `Gymnast` **подписывает договор** (implements), и реализует всё, что обещал.

---
**21 Video**-Уровни доступа в php:private, protected, public