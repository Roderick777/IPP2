SELECT * FROM users

SELECT * FROM users WHERE nombre = 'Salas';

SELECT nombre, email FROM users WHERE nombre LIKE '%Salas%';

SELECT * FROM users WHERE eliminado = false AND edad > 18;
