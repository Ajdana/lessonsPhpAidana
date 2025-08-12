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
