### Что такое Right Join ?

Right join -это противоположность `LEFT JOIN`. Берутся **все строки из правой таблицы** (той, что стоит после `RIGHT JOIN`).

![[Pasted image 20250817213438.png]]

А вот так выглядит запрос с Right Join :

```mysql
SELECT posts.title, categories.title
FROM posts
RIGHT JOIN category_post ON posts.id = category_post.post_id
RIGHT JOIN categories ON categories.id = category_post.category_id;
```