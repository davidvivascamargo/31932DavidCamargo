DROP SCHEMA IF EXISTS `registros`;

CREATE SCHEMA IF NOT EXISTS  registros DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `registros`; 

CREATE TABLE registros (
  `fullName` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `userName` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `phoneNumber` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password2` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `registros` VALUES (`David`,`Tlacuache`,`tlacuasTlacuaches@aragon.unam.mx`,`5626198295`,`123456`,`123456`,1);
 
