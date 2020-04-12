MySQL
Задание 1
Перечислите, чтобы вы поправили в таблицах (тип данных, название, длину - что угодно - и почему)

В таблицы 'offices'  у 'id' изменил бы тип вместо типа tinyint 
луше использовать int так как у tinyint ограничения От 0 до 255

для 'name' я бы использовал varchar(50)

в таблице 'users' тип 'office_id' не должен отличаться от 'offices'.'id'
 
Задание 2
Выведите имена пользователей и названия офисов, в которых они сидят

SELECT users.name, offices.name  FROM users 
INNER JOIN offices ON offices.id = users.office_id

Задание 3
Выведите названия офисов, в котором сидят больше, чем один пользователь

SELECT *, count(*) AS count_office  FROM users
INNER JOIN offices ON offices.id = users.office_id
GROUP BY offices.name
HAVING count_office > 1