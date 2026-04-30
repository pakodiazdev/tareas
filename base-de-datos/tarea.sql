CREATE TABLE tarea (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(150),
    estado TINYINT(1)
);


INSERT INTO tarea 
(descripcion, estado) 
VALUES 
('Hacer la compra', 0);


INSERT INTO tarea (descripcion, estado) VALUES ('Lavar el coche', 0);