

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

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
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_atico VALUES("1","5","ATI022030","10","2022-03-17","2022-03-16","B","1","","7.22222","2022-04-12 16:11:17");



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
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_callao VALUES("9","5","CNO2201219","815","2022-04-06","2022-04-06","Prime","8","Nada","0","2022-04-06 21:51:47");
INSERT INTO sede_callao VALUES("11","1","CNO2201222","500","2022-03-26","2023-03-26","B","3","","0","2022-04-06 21:52:24");
INSERT INTO sede_callao VALUES("12","2","CNO2201224","800","2022-03-26","2023-03-26","A","4","","0","2022-04-06 21:47:52");
INSERT INTO sede_callao VALUES("15","1","CNO2201330","600","2022-03-27","2023-03-27","A","7","","0","2022-03-27 13:37:58");
INSERT INTO sede_callao VALUES("16","1","CNO2101362","1000","2022-04-02","2023-04-02","A","15","","0","2022-04-02 10:32:17");
INSERT INTO sede_callao VALUES("17","1","CNO2101363","1000","2022-04-02","2023-04-02","A","13","Todo en orden","0","2022-04-02 10:37:52");
INSERT INTO sede_callao VALUES("18","1","CNO2101364","1000","2022-04-02","2022-04-02","A","16","Todo salio perfecto","0","2022-04-02 11:08:07");
INSERT INTO sede_callao VALUES("19","1","CNO2101365","1000","2022-04-02","2022-04-02","PRIME","17","2 sacos por trasegar","0","2022-04-02 18:09:19");
INSERT INTO sede_callao VALUES("20","1","CNO2101366","1000","2022-04-02","2022-04-02","PRIME","10","2 sacos rotos","0","2022-04-02 11:10:03");
INSERT INTO sede_callao VALUES("21","1","CNO2101367","1000","2022-04-02","2022-04-02","PRIME","18","Todo en orden","0","2022-04-02 11:10:42");
INSERT INTO sede_callao VALUES("22","5","Callo_0000","25","2022-04-06","2022-04-04","Super","5","Ninguna","10","2022-04-13 23:51:04");
INSERT INTO sede_callao VALUES("23","1","ssss","1000","2022-04-06","2022-04-06","55","55","gg","0","2022-04-06 21:50:20");



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
  `temperatura` float NOT NULL,
  `almacen` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_exalmar_chim VALUES("6","5","Ex_005","50","2022-04-02","2022-04-02","s","55","nada","4","Promosa","2022-04-14 00:07:46");
INSERT INTO sede_exalmar_chim VALUES("7","1","VEG2101345","5","2022-04-06","2022-04-06","super","5","ninfuna","0","Blackar","2022-04-06 20:55:56");
INSERT INTO sede_exalmar_chim VALUES("8","1","MAT2101589","150","2022-04-06","2022-04-06","a","2","ninguna","5","Oslo","2022-04-13 23:47:08");
INSERT INTO sede_exalmar_chim VALUES("10","15","Newcode","5","2022-04-13","2022-04-13","A","5","ninguno","1","Oslo","2022-04-14 00:04:36");



CREATE TABLE `sede_exalmar_mala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_exalmar_mala VALUES("1","1","MAL2104658","600","2022-03-11","2022-03-11","PRIME","1","10.5","","2022-04-14 11:36:22");



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



CREATE TABLE `temp_callao` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
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
  `promedio` float NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO temp_callao VALUES("12","ATI022030","100","25","3","40","5","6","7","8","90","31.5556","Ola","2022-04-12 16:09:33");
INSERT INTO temp_callao VALUES("13","ATI022030","50","6","9","8","7","4","1","22","30","15.2222","Jhames","2022-04-12 15:47:12");
INSERT INTO temp_callao VALUES("14","ATI022030","4","4","4","44","4","4","4","44","4","12.8889","v","2022-04-12 15:47:50");
INSERT INTO temp_callao VALUES("15","ATI022030","5","5","5","5","5","5","10","15","10","7.22222","OLAaaaa","2022-04-12 16:11:17");
INSERT INTO temp_callao VALUES("16","Callo_0000","1","1","1","1","1","1","1","1","1","1","Jhames","2022-04-12 18:34:49");
INSERT INTO temp_callao VALUES("17","Callo_0000","9","9","9","9","9","9","9","9","9","9","josue","2022-04-13 23:50:29");
INSERT INTO temp_callao VALUES("18","Callo_0000","10","10","10","10","10","10","10","10","10","10","kakak","2022-04-13 23:51:04");



CREATE TABLE `temp_exalmar_chim` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `codRuma` varchar(50) NOT NULL,
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
  `almacen` varchar(50) NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO temp_exalmar_chim VALUES("1","Newcode","28.8889","10","41","15","14","18","50","80","20","12","Oslo","Javs","2022-04-14 00:01:32");
INSERT INTO temp_exalmar_chim VALUES("2","Newcode","1","1","1","1","1","1","1","1","1","1","Oslo","1lalal","2022-04-14 00:04:36");
INSERT INTO temp_exalmar_chim VALUES("3","Ex_005","4","4","4","4","4","4","4","4","4","4","Bpo","Jaime","2022-04-14 00:07:46");



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
  `promedio` float NOT NULL,
  `supervisor` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO temp_exalmar_mala VALUES("1","MAL2104658","45","4.5","13.5","10","15.5","15.5","15.5","15","15.5","16.6667","lara","2022-04-14 11:22:38");
INSERT INTO temp_exalmar_mala VALUES("2","MAL2104658","10.5","10.5","1005","10.5","10.5","10.5","10.5","10.5","10.5","121","ola","2022-04-14 11:26:30");
INSERT INTO temp_exalmar_mala VALUES("3","MAL2104658","10.5","10.5","10.5","10.5","10.5","10.5","10.5","10.5","10.5","10.5","abraham","2022-04-14 11:36:22");



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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Jhonatan ","Admin","d033e22ae348aeb5660fc2140aec35850c4da997","1","z5yuzxl01.png","1","2022-04-14 18:47:48","E-Chicama");
INSERT INTO users VALUES("3","David","David","7c222fb2927d828af22f592134e8932480637c0d","3","any0e1on3.jpg","1","2022-04-05 06:37:22","T-Callao");
INSERT INTO users VALUES("7","Jamhes","Jamhes","7c4a8d09ca3762af61e59520943dc26494f8941b","2","36xr45oe7.png","1","2022-04-05 09:20:11","T-Callao");
INSERT INTO users VALUES("8","Tasa","Tasa","7c4a8d09ca3762af61e59520943dc26494f8941b","4","qoki4rwi8.jpg","1","2022-03-27 23:49:04","T-Callao");
INSERT INTO users VALUES("9","calida","calidad","28c668f417e88466c8ee4c9d220d17d7aa69529c","5","no_image.jpg","1","2022-04-13 01:33:58","T-Callao");

