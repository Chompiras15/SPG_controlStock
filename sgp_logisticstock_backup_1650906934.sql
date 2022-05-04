

CREATE TABLE `activity_atico` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `activity_callao` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_callao VALUES("4","Limpieza de mantas","Se limpiaron 20 mantas inferiores","se encontró 8 mantas rotas","jaime caballero, vigo sevillano, piminchumo juan, brayan castillo","09:31:00","15:32:00","2022-03-27","2022-03-27 16:32:10");
INSERT INTO activity_callao VALUES("5","Limpieza de mantas","Se limpiaron 200 mantas","se encontraron 5 mantas rotas","jaime caballero, vigo sevillano, piminchumo juan, brayan castillo","07:30:00","19:30:00","2022-03-27","2022-03-27 23:43:58");
INSERT INTO activity_callao VALUES("6","Embarque","Se descargo 100 sacos ","Ninguna","Jhon, abraham, janeth","17:09:00","20:09:00","2022-04-01","2022-04-02 16:59:14");
INSERT INTO activity_callao VALUES("7","Manteniminto","Limpieza de rumas","Faltaron escobas","jhon, abraham, janeth","08:55:00","08:55:00","2022-04-02","2022-04-02 15:55:09");
INSERT INTO activity_callao VALUES("8","Embarque","Se Embarco 1880 sacos ","Faltaron etiquetas","Jhonatan lara, abraham Valverde, Janeth Lara","11:13:00","16:13:00","2022-04-01","2022-04-02 18:14:39");
INSERT INTO activity_callao VALUES("9","Limpieza de mantas","Se limpio 100 mantas","Se encontro 6 mantas rotas","Josue Abraham Valverde","08:31:00","10:00:00","2022-04-05","2022-04-05 07:36:37");
INSERT INTO activity_callao VALUES("10","Limpieza de mantas","Se limpio 50 mantas","Se encontraron 10 mantas rotas","Valverde Solis Josue","08:15:00","10:00:00","2022-04-05","2022-04-05 09:15:00");



CREATE TABLE `activity_exalmar_chim` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time NOT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  `almacen` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_exalmar_chim VALUES("1","Descarga/Carga eslinga","50 Rumas","Ninguna","Ddd","19:30:00","19:36:00","2022-04-02","2022-04-03 02:34:28","Oslo");
INSERT INTO activity_exalmar_chim VALUES("2","Descarga/Carga eslinga","ss","ss","ss","19:40:00","19:44:00","2022-04-02","2022-04-02 00:00:00","Oslo");
INSERT INTO activity_exalmar_chim VALUES("3","Descarga/Carga eslinga","Yyy","Yyy","Yy","19:47:00","14:06:00","2022-04-02","2022-04-03 02:42:46","Blackar");
INSERT INTO activity_exalmar_chim VALUES("4","Descarga/Carga eslinga","qqq","qq","qqq","19:47:00","19:46:00","2022-04-02","2022-04-02 00:00:00","Bpo");
INSERT INTO activity_exalmar_chim VALUES("5","Seleccion y armado eslinga","yyyy","yyy","yyy","19:49:00","19:54:00","2022-04-02","2022-04-02 00:00:00","Bpo");



CREATE TABLE `activity_exalmar_mala` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `activity_matarani` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_matarani VALUES("1","Descarga de eslingas","descargo 2000 sacos","","","00:00:00","00:00:00","0000-00-00","2022-03-11 23:11:57");



CREATE TABLE `activity_pisco` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `activity_samanco` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_samanco VALUES("2","Embarque","Se Embarco 8000 sacos ","Todo en orden","jhon, abraham, janeth","07:30:00","21:30:00","2022-03-21","2022-03-22 02:30:26");



CREATE TABLE `activity_supe` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `activity_tasachim` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO activity_tasachim VALUES("22","Etiquetado de sacos","Se etiquetaron 2000  sacos","Todo en orden","Yeni garcia, jose rubias, abraham valverde","11:24:00","15:24:00","2022-04-25","2022-04-25 00:00:00");



CREATE TABLE `activity_vegueta` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nameActivity` varchar(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `auxiliares` varchar(200) DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_vegueta VALUES("1","Embarque","descargo 3000 sacos","","","00:00:00","00:00:00","0000-00-00","2022-03-11 23:16:57");



CREATE TABLE `emb_atico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_exalmar_chim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  `almacen` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_exalmar_mala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_matarani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_pisco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `emb_samanco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO emb_samanco VALUES("1","HPE-021-124-A","400","	SAM210245","2022-03-11","JHONATAN LARA");
INSERT INTO emb_samanco VALUES("2","HPE-021-124-C","400","SAM210245","2022-03-11","JHONATAN LARA");
INSERT INTO emb_samanco VALUES("3","HPE-021-124-D","400","SAM210245","2022-03-11","JHONATAN LARA");



CREATE TABLE `emb_supe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO emb_supe VALUES("1","HPE-021-124-A","400","SUP2101352","2022-03-11","JHONATAN LARA");



CREATE TABLE `emb_tasachim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO emb_tasachim VALUES("27","HPE-2102-1A","600","CHI2201352","2022-04-25","LARA");
INSERT INTO emb_tasachim VALUES("28","HPE-2102-1B","400","CHI2201352","2022-04-25","KEITY");
INSERT INTO emb_tasachim VALUES("29","HPE-2102-1C","200","CHI2201353","2022-04-25","GARCIA");



CREATE TABLE `emb_vegueta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_contrato` varchar(50) NOT NULL,
  `cant_out` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO emb_vegueta VALUES("1","HPE-021-124-A","400","VEG2101345","2022-03-11","JHONATAN LARA");



CREATE TABLE `sede_atico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) CHARACTER SET utf8 NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date DEFAULT NULL,
  `date_vencimiento` date DEFAULT NULL,
  `calidad` varchar(15) CHARACTER SET utf8 NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `temperatura` int(3) NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_atico VALUES("1","5","ATI022030","10","2022-03-17","2022-03-16","B","1","","22","2022-04-12 00:18:46");
INSERT INTO sede_atico VALUES("5","1","ATI2101313","1000","2022-04-12","2022-04-12","A","7","xd","46","2022-04-12 15:47:53");



CREATE TABLE `sede_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_callao VALUES("31","1","BHT","CNO2101345","1000","2022-04-25","2022-04-25","B","1","Todo esta mal","0","2022-04-25 11:43:25");



CREATE TABLE `sede_exalmar_chim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `temperatura` int(3) NOT NULL,
  `almacen` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_exalmar_chim VALUES("6","5","Ex_005","50","2022-04-02","2022-04-02","s","55","nada","0","Promosa","2022-04-02 19:07:03");
INSERT INTO sede_exalmar_chim VALUES("7","1","VEG2101345","5","2022-04-06","2022-04-06","super","5","ninfuna","6","Blackar","2022-04-12 17:17:31");



CREATE TABLE `sede_exalmar_mala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `temperatura` float NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sede_matarani` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_matarani VALUES("1","1","MAT2101589","1000","2022-03-11","2022-03-11","A","1","","2022-03-11 21:40:33");



CREATE TABLE `sede_pisco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_pisco VALUES("1","1","PIS2101345","600","2022-03-11","2022-03-11","A","1","","2022-03-11 21:39:55");



CREATE TABLE `sede_samanco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_samanco VALUES("4","1","SAM210245","600","2022-03-11","2022-03-11","A","1","","2022-03-11 22:47:20");
INSERT INTO sede_samanco VALUES("8","2","	SAM210246","1000","2022-03-30","2023-03-30","A","1","","2022-03-31 03:50:41");



CREATE TABLE `sede_supe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` int(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;




CREATE TABLE `sede_tasachimbote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date DEFAULT NULL,
  `date_vencimiento` date DEFAULT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO sede_tasachimbote VALUES("36","1","Etoxiquina","CHI2201353","800","2023-04-25","2022-04-25","A","2","Todo en orden","46.3333","2022-04-25 11:36:09");



CREATE TABLE `sede_vegueta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_vegueta VALUES("1","1","VEG2101345","600","2022-03-11","2022-03-11","A","1","","2022-03-11 22:49:40");



CREATE TABLE `temp_atico` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `codRuma` varchar(50) NOT NULL,
  `filter1` int(3) NOT NULL,
  `filter2` int(3) NOT NULL,
  `filter3` int(3) NOT NULL,
  `filter4` int(3) NOT NULL,
  `filter5` int(3) NOT NULL,
  `filter6` int(3) NOT NULL,
  `filter7` int(3) NOT NULL,
  `filter8` int(3) NOT NULL,
  `filter9` int(3) NOT NULL,
  `promedio` int(3) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO temp_atico VALUES("2","Atic2020","10","20","30","40","50","60","70","80","90","50","Javs","2022-04-11 01:39:39");
INSERT INTO temp_atico VALUES("3","A202020","42","43","42","46","30","41","40","32","40","40","David","2022-04-12 13:37:56");
INSERT INTO temp_atico VALUES("7","ATI022030","5","5","3","5","5","5","5","5","5","5","Ajajaja","2022-04-12 08:46:01");
INSERT INTO temp_atico VALUES("10","ATI2101342","42","42","41","43","28","38","39","41","25","38","KEVIN GARCIA","2022-04-12 14:37:35");
INSERT INTO temp_atico VALUES("11","ATI022032","40","30","40","30","41","42","43","41","30","37","KEVIN GARCIA","2022-04-12 15:10:48");
INSERT INTO temp_atico VALUES("12","ATI2101313","47","45","48","40","40","45","45","47","48","45","Abraham","2022-04-12 15:40:01");
INSERT INTO temp_atico VALUES("13","ATI2101313","40","47","48","48","48","48","47","45","47","46","LARA","2022-04-12 15:47:53");



CREATE TABLE `temp_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRuma` varchar(20) NOT NULL,
  `filter1` float NOT NULL,
  `filter2` float NOT NULL,
  `filter3` float NOT NULL,
  `filter4` float NOT NULL,
  `filter5` float NOT NULL,
  `filter6` float NOT NULL,
  `filter7` float NOT NULL,
  `filter8` float NOT NULL,
  `filter9` float NOT NULL,
  `promedio` float NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `typeRuma` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;




CREATE TABLE `temp_exalmar_chim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRuma` varchar(20) NOT NULL,
  `promedio` float NOT NULL,
  `filter1` float NOT NULL,
  `filter2` float NOT NULL,
  `filter3` float NOT NULL,
  `filter4` float NOT NULL,
  `filter5` float NOT NULL,
  `filter6` float NOT NULL,
  `filter7` float NOT NULL,
  `filter8` float NOT NULL,
  `filter9` float NOT NULL,
  `almacen` varchar(30) NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO temp_exalmar_chim VALUES("2","VEG2101345","5.66667","5","8","7","4","1","3","6","9","8","Blackar","nene","2022-04-12 17:17:31");



CREATE TABLE `temp_exalmar_mala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codRuma` varchar(50) NOT NULL,
  `filter1` float NOT NULL,
  `filter2` float NOT NULL,
  `filter3` float NOT NULL,
  `filter4` float NOT NULL,
  `filter5` float NOT NULL,
  `filter6` float NOT NULL,
  `filter7` float NOT NULL,
  `filter8` float NOT NULL,
  `filter9` float NOT NULL,
  `filter10` float NOT NULL,
  `filter11` float NOT NULL,
  `filter12` float NOT NULL,
  `filter13` float NOT NULL,
  `filter14` float NOT NULL,
  `filter15` float NOT NULL,
  `filter16` float NOT NULL,
  `filter17` float NOT NULL,
  `filter18` float NOT NULL,
  `filter19` float NOT NULL,
  `filter20` float NOT NULL,
  `filter21` float NOT NULL,
  `filter22` float NOT NULL,
  `filter23` float NOT NULL,
  `filter24` float NOT NULL,
  `filter25` float NOT NULL,
  `promedio` float NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `typeRuma` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;




CREATE TABLE `temp_tasachimbote` (
  `id` int(11) NOT NULL,
  `codRuma` varchar(20) NOT NULL,
  `promedio` float NOT NULL,
  `filter1` float NOT NULL,
  `filter2` float NOT NULL,
  `filter3` float NOT NULL,
  `filter4` float NOT NULL,
  `filter5` float NOT NULL,
  `filter6` float NOT NULL,
  `filter7` float NOT NULL,
  `filter8` float NOT NULL,
  `filter9` float NOT NULL,
  `almacen` varchar(30) NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `typeRuma` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO temp_tasachimbote VALUES("0","CHI2201353","40","36","53.4","41.3","37.6","38.9","36.2","39.4","39.6","37.6","","KEITY","BHT","2022-04-25 11:34:26");
INSERT INTO temp_tasachimbote VALUES("0","CHI2201353","46.3333","36","45","43","46","47","48","49","50","53","","LARA","Etoxiquina","2022-04-25 11:36:09");



CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_level` (`group_level`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

INSERT INTO user_groups VALUES("1","SuperUser","1","1");
INSERT INTO user_groups VALUES("2","Supervisor","3","1");
INSERT INTO user_groups VALUES("3","Admin","2","1");
INSERT INTO user_groups VALUES("4","Cliente","4","1");
INSERT INTO user_groups VALUES("5","Calidad","5","1");



CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 DEFAULT 'no_image.jpg',
  `status` int(1) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `sede` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `user_level` (`user_level`),
  CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Jhonatan ","Admin","d033e22ae348aeb5660fc2140aec35850c4da997","1","a451xyt1.png","1","2022-04-25 02:35:49","T-Callao");
INSERT INTO users VALUES("3","David","David","7c222fb2927d828af22f592134e8932480637c0d","3","any0e1on3.jpg","1","2022-04-05 06:37:22","T-Callao");
INSERT INTO users VALUES("7","Jamhes","Jamhes","7c4a8d09ca3762af61e59520943dc26494f8941b","2","36xr45oe7.png","1","2022-04-05 09:20:11","T-Callao");
INSERT INTO users VALUES("9","Olga","Calidad","7c4a8d09ca3762af61e59520943dc26494f8941b","5","","1","2022-04-21 18:05:04","T-Atico");
INSERT INTO users VALUES("10","Barrera Atero Jambler","BarreraA","01dea6f2753a545d127996d64459697a872b0439","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("11","Bolivar Gaviria Antonio","BolivarG","3418c165bca1b5352f2f48e3897f3762fda6fae5","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("12","Carranza Chamaya Franklin","carranzaC","874862cc58c07c5ec8825692fbd4e75e4706c738","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("13","Ferre Banegas Elber","FerreB","5f33a455fe1f2efd2e1a8b1807d4d44817a70eff","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("14","Guibarra Martel Fran","guibarraM","d222df55237f2a5dc5c4642566ca08bbf9488fa8","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("15","Rios Rios Jenny","riosR","ee9360f305d66dd956ecf06fcd80c303b539756b","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("16","Sosa Nieto Javier","sosaN","b5ec7d32beb658b937bb77a43dba911a635ca02c","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("17","Valerio Mendoza Antonio","valerioM","43d55973297d1c8963fd49da4acab941b027edad","2","no_image.jpg","1","0000-00-00 00:00:00","T-Chimbote");

