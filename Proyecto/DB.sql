DROP SCHEMA IF EXISTS registros;

CREATE SCHEMA IF NOT EXISTS  registros DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE registros; 

CREATE TABLE usuarios (
  fullName text COLLATE utf8mb4_spanish2_ci NOT NULL,
  userName text COLLATE utf8mb4_spanish2_ci NOT NULL,
  email text COLLATE utf8mb4_spanish2_ci NOT NULL,
  phoneNumber varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  password varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO usuarios VALUES ('Aaron Velasco Agustin','Huron','aaronvelasco@aragon.unam.mx', '5626198295','123456',1);