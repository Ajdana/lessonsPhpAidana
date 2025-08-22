Функция `GROUP_CONCAT` складывает (как строки) содержимое одного поля из разных строк, вставляя между ними разделитель (по умолчанию это запятая). К примеру, можно получить список всех выбранных имен через запятую или другой разделитель.

У этой функции есть ограничение на объем выводимых данных. По умолчанию `1024` символа для каждого объединения - для каждой выводимой строки. Если размер склеенных данных больше, то он будет урезаться. Чтобы расширить размер нужно выполнить команду SET group_concat_max_len = 4096; Если у вас есть привилегии, то вы расширите объем получаемых данных до `4096`, можно и больше. Но чаще всего на обычных хостингах таких привилегий нет.

Без указания разделителя (по умолчанию будет запятая)запрос будет выглядеть таким образом :

```mysql
SELECT GROUP_CONCAT(поле) FROM имя_таблицы  
WHERE условие
```

Запрос с указанием разделителя :
```mysql
SELECT GROUP_CONCAT(поле SEPARATOR разделитель) FROM имя_таблицы WHERE условие
```

Пример 1 :

```mysql
SELECT GROUP_CONCAT(name) as name FROM employees
```

Результат выполнения кода:

| name  <br>имена                     |
| ----------------------------------- |
| user1,user2,user3,user4,user5,user6 |

Пример 2:

```mysql
SELECT GROUP_CONCAT(name SEPARATOR  
'+') as name FROM employees
```

Результат выполнения кода:

| name  <br>имена                     |
| ----------------------------------- |
| user1+user2+user3+user4+user5+user6 |
Пример 3:

```mysql
SELECT GROUP_CONCAT(name) as name FROM employees WHERE id>=3 AND id<=5
```

Результат выполнения кода:

|name  <br>имена|
|---|
|user3,user4,user5|П

Пример 4:

```mysql
SELECT age, GROUP_CONCAT(name) as name FROM employees GROUP BY age
```

Результат выполнения кода:

|age  <br>возраст|name  <br>имена|
|---|---|
|23|user1,user2,user3|
|24|user4,user5|
|25|user6|
Пример 5:

```mysql
SELECT age, GROUP_CONCAT(name SEPARATOR  
'-') as name FROM employees GROUP BY age
```

Результат выполнения кода:

|age  <br>возраст|name  <br>имена|
|---|---|
|23|user1-user2-user3|
|24|user4-user5|
|25|user6|

