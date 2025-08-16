Если мы хотим вытянуть category_id 
Мы можем написать данный запрос 
```mysql
SELECT category_id FROM first_bd.posts;
```
и нажать Ctrl + Enter 

И он автоматически нам его вытянет 
![[Pasted image 20250815211126.png]]

Чтобы вытянуть заголовки которые мы связали с foreign key .
```mysql
SELECT first_bd.categories.title
FROM first_bd.posts
INNER JOIN first_bd.categories ON first_bd.posts.category_id = first_bd.categories.id;
```

Мы можем использовать данный запрос . Тем самым он выведет заголовки 
![[Pasted image 20250815211815.png]]