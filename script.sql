CREATE TABLE users
(
iduser int AUTO_INCREMENT not null,
Nombre varchar(50) not null,
Apellido varchar(50) not null,
Email varchar(100) not null,
Pass varchar(256) not null,
create_at timestamp DEFAULT CURRENT_TIMESTAMP,
update_at timestamp DEFAULT CURRENT_TIMESTAMP,

PRIMARY key (iduser)

)ENGINE=INNODB;


CREATE TABLE publicaciones
(
idpublicacion int AUTO_INCREMENT not null,
iduser int NOT null,
publicacion mediumtext not null,
created_at timestamp DEFAULT CURRENT_TIMESTAMP,
update_at timestamp DEFAULT CURRENT_TIMESTAMP,

PRIMARY KEY (idpublicacion),
FOREIGN KEY (iduser) REFERENCES users (iduser)
    
)ENGINE=INNODB;