Чтобы вытянуть заголовки которые мы связали с foreign key .
```mysql
SELECT first_bd.categories.title
FROM first_bd.posts
INNER JOIN first_bd.category_post
ON first_bd.posts.id = first_bd.category_post.post_id
INNER JOIN first_bd.categories
ON first_bd.categories.id = first_bd.category_post.category_id;
```
Мы можем использовать данный запрос . Тем самым он выведет заголовки 
![[Pasted image 20250815214954.png]]