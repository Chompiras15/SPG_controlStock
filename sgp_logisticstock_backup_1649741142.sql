

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO activity_tasachim VALUES("14","Etiquetado de sacos","Se etiquetaron 5000 sacos","Faltaron etiquetas","Jaime caballero, vigo sevillano, piminchumo juan, brayan castillo","07:30:00","19:30:00","2022-03-19","2022-04-02 23:34:36");
INSERT INTO activity_tasachim VALUES("18","Embarque","Se etiquetaron 1800 sacos ","Faltaron etiquetas","Jhon, abraham, janeth","18:12:00","18:13:00","2022-03-25","2022-03-26 19:53:00");
INSERT INTO activity_tasachim VALUES("20","Embarque","Se Embarco 1800 sacos ","Falló el montacarga","Jhon, abraham, janeth","18:18:00","18:18:00","2022-03-17","2022-03-31 06:17:43");



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

INSERT INTO emb_callao VALUES("6","HPE-021-124-A","300","CNO2201224","2022-03-26","Javs");
INSERT INTO emb_callao VALUES("7","HPE-021-124-C","200","CNO2201222","2022-03-26","KEVIN GARCIA");
INSERT INTO emb_callao VALUES("8","HPE-021-124-A","400","CNO2201225","2022-03-27","JHONATAN LARA");
INSERT INTO emb_callao VALUES("9","HPE-021-124-A","400","CNO2201330","2022-03-27","ABRAHAM");
INSERT INTO emb_callao VALUES("10","HPE-021-124-D","200","CNO2201225","2022-03-27","KEVIN GARCIA");
INSERT INTO emb_callao VALUES("12","MAT2101589","100","CNO2201219","2022-04-06","SAM210245");
INSERT INTO emb_callao VALUES("13","MAT2101589","300","CNO2201222","2022-04-06","MAT2101589");



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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO emb_tasachim VALUES("25","HPE-021-124-A","400","CHI2101220","2022-03-25","JHONATAN LARA");
INSERT INTO emb_tasachim VALUES("26","HPE-021-124-C","400","CHI2101320","2022-03-30","Lara Soto");



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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_atico VALUES("1","5","ATI022030","10","2022-03-17","2022-03-16","B","1","","22","2022-04-12 00:18:46");



CREATE TABLE `sede_callao` (
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_callao VALUES("9","5","CNO2201219","815","2022-04-06","2022-04-06","Prime","8","Nada","2022-04-06 21:51:47");
INSERT INTO sede_callao VALUES("11","1","CNO2201222","500","2022-03-26","2023-03-26","B","3","","2022-04-06 21:52:24");
INSERT INTO sede_callao VALUES("12","2","CNO2201224","800","2022-03-26","2023-03-26","A","4","","2022-04-06 21:47:52");
INSERT INTO sede_callao VALUES("15","1","CNO2201330","600","2022-03-27","2023-03-27","A","7","","2022-03-27 13:37:58");
INSERT INTO sede_callao VALUES("16","1","CNO2101362","1000","2022-04-02","2023-04-02","A","15","","2022-04-02 10:32:17");
INSERT INTO sede_callao VALUES("17","1","CNO2101363","1000","2022-04-02","2023-04-02","A","13","Todo en orden","2022-04-02 10:37:52");
INSERT INTO sede_callao VALUES("18","1","CNO2101364","1000","2022-04-02","2022-04-02","A","16","Todo salio perfecto","2022-04-02 11:08:07");
INSERT INTO sede_callao VALUES("19","1","CNO2101365","1000","2022-04-02","2022-04-02","PRIME","17","2 sacos por trasegar","2022-04-02 18:09:19");
INSERT INTO sede_callao VALUES("20","1","CNO2101366","1000","2022-04-02","2022-04-02","PRIME","10","2 sacos rotos","2022-04-02 11:10:03");
INSERT INTO sede_callao VALUES("21","1","CNO2101367","1000","2022-04-02","2022-04-02","PRIME","18","Todo en orden","2022-04-02 11:10:42");
INSERT INTO sede_callao VALUES("22","5","Callo_0000","25","2022-04-06","2022-04-04","Super","5","Ninguna","2022-04-06 19:48:35");
INSERT INTO sede_callao VALUES("23","1","ssss","1000","2022-04-06","2022-04-06","55","55","gg","2022-04-06 21:50:20");



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
  `almacen` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_exalmar_chim VALUES("6","5","Ex_005","50","2022-04-02","2022-04-02","s","55","nada","Promosa","2022-04-02 19:07:03");
INSERT INTO sede_exalmar_chim VALUES("7","1","VEG2101345","5","2022-04-06","2022-04-06","super","5","ninfuna","Blackar","2022-04-06 20:55:56");
INSERT INTO sede_exalmar_chim VALUES("8","1","MAT2101589","150","2022-04-06","2022-04-06","a","2","ninguna","Oslo","2022-04-06 20:57:52");



CREATE TABLE `sede_exalmar_mala` (
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

INSERT INTO sede_exalmar_mala VALUES("1","1","MAL2104658","600","2022-03-11","2022-03-11","PRIME","1","","2022-03-11 21:42:47");



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
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date DEFAULT NULL,
  `date_vencimiento` date DEFAULT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

INSERT INTO sede_tasachimbote VALUES("32","1","CHI2101220","600","2022-03-25","2022-03-25","A","1","","2022-03-26 02:02:28");
INSERT INTO sede_tasachimbote VALUES("33","2","CHI2101320","600","2022-03-26","2023-03-26","A","2","","2022-03-30 23:01:41");
INSERT INTO sede_tasachimbote VALUES("34","1","CHI2101321","1000","2022-03-26","2023-03-26","PRIME","3","","2022-03-26 13:51:34");



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO temp_atico VALUES("2","Atic2020","10","20","30","40","50","60","70","80","90","50","Javs","2022-04-11 01:39:39");
INSERT INTO temp_atico VALUES("3","a202020","5","6","8","7","9","41","25","2","20","14","David","2022-04-11 01:40:04");
INSERT INTO temp_atico VALUES("7","ATI022030","5","5","3","5","5","5","5","5","5","5","ajajaja","2022-04-12 00:17:12");
INSERT INTO temp_atico VALUES("8","ATI022030","10","10","10","25","25","25","30","30","30","22","supervidor","2022-04-12 00:18:46");



CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `group_level` (`group_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO user_groups VALUES("1","SuperUser","1","1");
INSERT INTO user_groups VALUES("2","Supervisor","3","1");
INSERT INTO user_groups VALUES("3","Admin","2","1");
INSERT INTO user_groups VALUES("4","Cliente","4","1");



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Jhonatan ","Admin","d033e22ae348aeb5660fc2140aec35850c4da997","1","z5yuzxl01.png","1","2022-04-11 07:24:28","T-Atico");
INSERT INTO users VALUES("3","David","David","7c222fb2927d828af22f592134e8932480637c0d","3","any0e1on3.jpg","1","2022-04-05 06:37:22","T-Callao");
INSERT INTO users VALUES("7","Jamhes","Jamhes","7c4a8d09ca3762af61e59520943dc26494f8941b","2","36xr45oe7.png","1","2022-04-05 09:20:11","T-Callao");
INSERT INTO users VALUES("8","Tasa","Tasa","7c4a8d09ca3762af61e59520943dc26494f8941b","4","qoki4rwi8.jpg","1","2022-03-27 23:49:04","T-Callao");
