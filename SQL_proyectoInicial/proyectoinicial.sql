-- Creacion de la tabla de sessiones
CREATE TABLE IF NOT EXISTS sessions (
session_id varchar(40) NOT NULL DEFAULT '0',
ip_address varchar(16) NOT NULL DEFAULT '0',
user_agent varchar(120) DEFAULT NULL,
last_activity int NOT NULL DEFAULT '0',
user_data text NOT NULL,
PRIMARY KEY (session_id)
) 

--Creacion de la tabla de usuarios

CREATE TABLE users (

id int NOT NULL,
first_name varchar(125) NOT NULL,
last_name varchar(125) NOT NULL,
email varchar(255) NOT NULL,
created_date varchar(125) NOT NULL,
is_active varchar(3) NOT NULL,
PRIMARY KEY (id)
) 

--Insetar datos en la base de datos de usuarios
INSERT INTO users (id, first_name, last_name, email,created_date, is_active)
VALUES (1,'Alejandro', 'Gutierrez', 'ale@ale.com', CURRENT_DATE, '1');

