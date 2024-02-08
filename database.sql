CREATE TABLE usuarios (
    `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `contrasena` varchar(100) NOT NULL
);
create table blog(
                     `id_blog` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                     `email_autor` varchar(100) NOT NULL,
                     `titulo` varchar(100) NOT NULL,
                     `contenido` text(250) NOT NULL,
                     `fecha` datetime NOT NULL,
                     `imagen` text(250) NOT NULL,
                     `usuario_id` int NOT NULL,
                     FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)

select * from usuarios;
