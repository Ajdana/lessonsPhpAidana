Функция `CONCAT` предназначена для сложения строк при выборке из базы данных. Строками обычно выступают поля таблиц.

```mysql
SELECT CONCAT(поле1, поле2...)  
FROM имя_таблицы WHERE условие
```

Пример 1:
```mysql
SELECT *, CONCAT(age, name, salary)  
as concat FROM employees
```

Результат :

|id  <br>айди|name  <br>имя|age  <br>возраст|salary  <br>зарплата|concat  <br>объединенное поле|
|---|---|---|---|---|
|1|user1|23|300|23user1300|
|2|user2|24|400|24user2400|
|3|user3|25|500|25user3500|

Пример 2:

```mysql
SELECT *, CONCAT(name, '!!!') asname FROM employees
```

Результат:

|id  <br>айди|name  <br>имя|age  <br>возраст|salary  <br>зарплата|
|---|---|---|---|
|1|user1!!!|23|300|
|2|user2!!!|24|400|
|3|user3!!!|25|500|

Пример 3:
```mysql
SELECT *, CONCAT('!!!', name, '???')  
as name FROM employees
```

Результат:

| id  <br>айди | name  <br>имя | age  <br>возраст | salary  <br>зарплата |
| ------------ | ------------- | ---------------- | -------------------- |
| 1            | !!!user1???   | 23               | 300                  |
| 2            | !!!user2???   | 24               | 400                  |
| 3            | !!!user3???   | 25               | 500                  |