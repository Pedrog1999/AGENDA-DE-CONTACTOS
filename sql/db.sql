-- - acá use los nombres al revés, la bd debería llamarse agenda y la tabla contactos, pero como ya había creado una bd de prueba tuve que alterar los nombres;



CREATE DATABASE IF NOT EXISTS contacto;
USE contacto;


CREATE TABLE agenda (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  telefono VARCHAR(50),
  email VARCHAR(100),
  direccion VARCHAR(100)
);


INSERT INTO agenda (nombre, telefono, email, direccion) VALUES
('Pedro Gianibelli', '2352404168', 'pedrogianibelli999@gmail.com', 'Av. Alsina 80'),
('Fibonacci', '01123581321', 'fibonacci.bocajuniors@yahoo.com', 'Av. Sucesiones 002'),
('Pi', '3.14159265', 'pi_redondo@gmail.com', 'Barrio nuevo 003'),
('Null Pointer', 'NULL', 'nullpointer.exception@fail.net', 'Barrio error 004'),
('Segmentation Fault', '11-00000000', 'segfault.core@dump.com', '/dev/null 005'),
('Sr Random', 'Perdió el telefono', 'Nunca tuvo email', 'Es nómade 006');
