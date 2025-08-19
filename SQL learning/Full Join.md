### Что такое Full Join ?

Full Join - объединяет **LEFT JOIN** и **RIGHT JOIN** . Берёт **все строки из обеих таблиц**.

![[Pasted image 20250817214010.png]]

Пример запроса с Full Join :

```mysql 
SELECT students.name, courses.course_name
FROM students
FULL JOIN courses ON students.id = courses.id;
```