### Что такое left join ?
<font color="#ffff00">**<font color="#ffff00">left join</font></font>** - возвращает все строки из левой таблицы, даже если в правой таблице для них нет пары.
![[Pasted image 20250817211745.png]]

Например inner join не включит данные если для них не нашлось пары 

![[Pasted image 20250817212040.png]]

А это результат left join :

![[Pasted image 20250817212242.png]]

Вот так будет выглядеть наш запрос :

```mysql
SELECT posts.title, categories.title
FROM posts
LEFT JOIN category_post ON posts.id = category_post.post_id
LEFT JOIN categories ON categories.id = category_post.category_id;
```
