## [Общая структура запроса с GROUP BY](https://sql-academy.org/ru/guide/groupping#obshaya-struktura-zaprosa-s-group-by)

Как выглядит запрос :

```sql
SELECT [литералы, агрегатные_функции, поля_группировки]
FROM имя_таблицы
GROUP BY поля_группировки;
```

Как работает Group by ?

```mysql
SELECT home_type FROM Rooms
GROUP BY home_type
```

Результат кода :

![[Pasted image 20250820222939.png]]

Так мы получили не о каждой записи отдельно а о группах которые они образуют .