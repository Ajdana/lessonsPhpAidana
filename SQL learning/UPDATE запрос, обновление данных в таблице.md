```mysql
UPDATE `first_bd`.`posts` SET `title` = 'updated title' WHERE (`id` = '1');
```

С помощью данной команды мы можем менять уже заданные нами значения .

Пример где мы меняем сразу несколько значений :

```mysql
UPDATE `first_bd`.`posts` SET 
title = 'updated titles', 
content = 'second contents',
`like` = '120'
 WHERE (`id` = '1');
```