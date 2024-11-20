CREATE DATABASE ipp; -- Crear base de datos

-- Crear tabla
CREATE TABLE users (
    id INT PRIMARY KEY, 
    nombre VARCHAR(250), 
    email VARCHAR(150), 
    foto VARCHAR(500), 
    clave VARCHAR(100), 
    edad INT, 
    fecha_creacion TIMESTAMP, 
    activo BOOLEAN
);


-- FECHAS: DATE, DATETIME, TIMESTAMP '2024-11-13 19:24:20'
-- BOOLEAN: true, false