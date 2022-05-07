

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

INSERT INTO activity_tasachim VALUES("22","Etiquetado de sacos","Se etiquetaron 2000  sacos","Todo en orden","Yeni garcia, jose rubias, abraham valverde","11:24:00","15:24:00","2022-04-25","2022-04-24 19:00:00");



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
  `placa` varchar(15) NOT NULL,
  `cod_container` varchar(15) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;




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



CREATE TABLE `history_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` varchar(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `temperatura` float NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

INSERT INTO history_callao VALUES("26","27","BHT","CNO2200029","600","2023-05-04","2022-05-04","A","1","D2Y-705","PRODUCION CALLAO","0","PPTT","2022-05-05 18:02:35");
INSERT INTO history_callao VALUES("28","27","BHT","CNO2200029","400","2023-05-04","2022-05-04","A","1","T1T-889","PRODUCION CALLAO","0","PPTT","2022-05-05 18:21:36");
INSERT INTO history_callao VALUES("29","27","BHT","CNO2200030","200","2023-05-04","2022-05-04","A","2","T1T-889","PRODUCION CALLAO","0","PPTT","2022-05-05 18:23:45");
INSERT INTO history_callao VALUES("30","27","BHT","CNO2200030","600","2022-05-04","2022-05-04","A","2","F1R-772","PRODUCION CALLAO","0","PPTT","2022-05-05 18:27:02");
INSERT INTO history_callao VALUES("31","27","BHT","CNO2200030","200","2023-05-04","2022-05-04","A","2","T6E-913","PRODUCION CALLAO","0","PPTT","2022-05-05 18:28:41");
INSERT INTO history_callao VALUES("32","27","BHT","CNO2200031","400","2023-05-04","2022-05-04","A","3","T6E-913","PRODUCION CALLAO","0","PPTT","2022-05-05 18:30:16");
INSERT INTO history_callao VALUES("33","27","BHT","CNO2200031","600","2023-05-04","2022-05-04","A","3","F26-810","PRODUCION CALLAO","0","PPTT","2022-05-05 18:32:29");
INSERT INTO history_callao VALUES("34","27","BHT","CNO2200032","600","2023-05-04","2022-05-04","A","4","C7W-726","PRODUCION CALLAO","0","PPTT","2022-05-05 18:35:31");
INSERT INTO history_callao VALUES("35","27","BHT","CNO2200032","400","2023-05-04","2022-05-04","A","4","D2Y-705","PRODUCION CALLAO","0","PPTT","2022-05-05 18:36:45");
INSERT INTO history_callao VALUES("36","27","BHT","CNO2200033","200","2023-05-04","2022-05-04","A","5","D2Y-705","PRODUCION CALLAO","0","PPTT","2022-05-05 18:37:40");
INSERT INTO history_callao VALUES("37","27","Etoxiquina","CNO2200033","600","2023-05-04","2022-05-04","B","5","T6E-913","--","0","PRODUCCION CALLAO","2022-05-06 10:04:34");
INSERT INTO history_callao VALUES("39","27","Etoxiquina","CNO2200033","200","2023-05-04","2022-05-04","B","5","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:06:51");
INSERT INTO history_callao VALUES("40","27","Etoxiquina","CNO2200035","400","2023-05-04","2022-05-04","B","6","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:12:01");
INSERT INTO history_callao VALUES("41","27","Etoxiquina","CNO2200035","600","2023-05-05","2022-05-05","--","6","C7W-726","400 SAC FECHA PRO 04/05, 600 SAC FECHA PRO: 05/05","0","PRODUCCION CALLAO","2022-05-06 10:16:54");
INSERT INTO history_callao VALUES("42","27","Etoxiquina","CNO2200036","600","2023-05-05","2022-05-05","--","7","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:19:36");
INSERT INTO history_callao VALUES("43","27","Etoxiquina","CNO2200036","400","2023-05-05","2022-05-05","--","7","C7W-726","--","0","PRODUCCION CALLAO","2022-05-06 10:21:21");
INSERT INTO history_callao VALUES("44","27","Etoxiquina","CNO2200037","200","2023-05-05","2022-05-05","--","8","C7W-726","--","0","PRODUCCION CALLAO","2022-05-06 10:22:59");
INSERT INTO history_callao VALUES("45","27","Etoxiquina","CNO2200037","480","2023-05-05","2022-05-05","--","8","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:32:09");
INSERT INTO history_callao VALUES("46","27","Etoxiquina","CNO2200038","160","2023-05-05","2022-05-05","--","8","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:33:28");
INSERT INTO history_callao VALUES("47","27","Etoxiquina","CNO2200038","640","2023-05-05","2022-05-05","A","9","C7W-726","--","0","PRODUCCION CALLAO","2022-05-06 10:35:26");
INSERT INTO history_callao VALUES("48","27","Etoxiquina","CNO2200038","200","2023-05-05","2022-05-05","A","9","F2G-810","--","0","PRODUCCION CALLAO","2022-05-06 10:40:46");
INSERT INTO history_callao VALUES("49","27","Etoxiquina","CNO2200039","400","2023-05-05","2022-05-05","A","10","F2G-810","--","0","PRODUCCION CALLAO","2022-05-06 10:42:53");
INSERT INTO history_callao VALUES("50","27","BHT","CNO2200039","600","2023-05-05","2022-05-05","A","10","T1T-889","--","0","PRODUCCION CALLAO","2022-05-06 10:47:48");
INSERT INTO history_callao VALUES("51","27","Etoxiquina","CNO2200040","600","2023-05-05","2022-05-05","A","11","D2Y-705","--","0","PRODUCCION CALLAO","2022-05-06 10:49:29");
INSERT INTO history_callao VALUES("52","27","Etoxiquina","CNO2200040","400","2023-05-05","2022-09-05","A","11","C7W-726","--","0","PRODUCCION CALLAO","2022-05-06 10:51:02");
INSERT INTO history_callao VALUES("53","27","Etoxiquina","CNO2200041","200","2023-05-05","2022-05-05","A","12","C7W-726","--","0","PRODUCCION CALLAO","2022-05-06 10:53:42");
INSERT INTO history_callao VALUES("54","27","Etoxiquina","CNO2200041","600","2023-05-05","2022-05-05","A","12","F1R-772","--","0","PRODUCCION CALLAO","2022-05-06 10:57:22");
INSERT INTO history_callao VALUES("56","1","BHT","prueba","1","2022-05-06","2022-05-06","prureb","1","prueba","prueba","0","prueba","2022-05-06 12:19:39");
INSERT INTO history_callao VALUES("57","1","BHT","VEG2101345","999","2022-05-06","2022-05-06","A","4","prueb0","se trasego 10 sacos","0","ol","2022-05-06 14:01:37");



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

INSERT INTO sede_atico VALUES("1","5","ATI022030","10","2022-03-17","2022-03-16","B","1","","22","2022-04-11 19:18:46");
INSERT INTO sede_atico VALUES("5","1","ATI2101313","1000","2022-04-12","2022-04-12","A","7","xd","46","2022-04-12 10:47:53");



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
  `placa` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_callao VALUES("40","27","Etoxiquina","CNO2200029","1000","2022-05-04","2023-05-04","A","1","T1T-889","PPTT","PRODUCCION CALLAO","0","2022-05-05 18:54:41");
INSERT INTO sede_callao VALUES("42","27","Etoxiquina","CNO2200030","1000","2022-05-04","2023-05-04","A","2","T6E-913","PPTT","PRODUCCION CALLAO","0","2022-05-05 18:54:53");
INSERT INTO sede_callao VALUES("43","27","Etoxiquina","CNO2200031","1000","2022-05-04","2023-05-04","B","3","F26-810","PPTT","PRODUCCION CALLAO","0","2022-05-05 18:56:47");
INSERT INTO sede_callao VALUES("44","27","Etoxiquina","CNO2200032","1000","2022-05-04","2023-05-04","B","4","D2Y-705","PPTT","PRODUCCION CALLAO","0","2022-05-05 18:57:07");
INSERT INTO sede_callao VALUES("45","27","Etoxiquina","CNO2200033","1000","2023-05-04","2022-05-04","B","5","F1R-772","PRODUCCION CALLAO","--","0","2022-05-06 10:06:51");
INSERT INTO sede_callao VALUES("47","27","Etoxiquina","CNO2200035","1000","2023-05-05","2022-05-05","--","6","C7W-726","PRODUCCION CALLAO","400 SAC FECHA PRO 04/05, 600 SAC FECHA PRO: 05/05","0","2022-05-06 10:16:54");
INSERT INTO sede_callao VALUES("48","27","Etoxiquina","CNO2200036","1000","2023-05-05","2022-05-05","--","7","C7W-726","PRODUCCION CALLAO","--","0","2022-05-06 10:21:21");
INSERT INTO sede_callao VALUES("49","27","Etoxiquina","CNO2200037","680","2023-05-05","2022-05-05","--","8","F1R-772","PRODUCCION CALLAO","--","0","2022-05-06 10:32:09");
INSERT INTO sede_callao VALUES("50","27","Etoxiquina","CNO2200038","1000","2023-05-05","2022-05-05","A","9","F2G-810","PRODUCCION CALLAO","--","0","2022-05-06 10:40:46");
INSERT INTO sede_callao VALUES("51","27","BHT","CNO2200039","1000","2023-05-05","2022-05-05","A","10","T1T-889","PRODUCCION CALLAO","--","0","2022-05-06 10:47:48");
INSERT INTO sede_callao VALUES("52","27","Etoxiquina","CNO2200040","1000","2023-05-05","2022-09-05","A","11","C7W-726","PRODUCCION CALLAO","--","0","2022-05-06 10:51:02");
INSERT INTO sede_callao VALUES("53","27","Etoxiquina","CNO2200041","800","2023-05-05","2022-05-05","A","12","F1R-772","PRODUCCION CALLAO","--","0","2022-05-06 10:57:22");
INSERT INTO sede_callao VALUES("56","1","BHT","VEG2101345","999","2022-05-06","2022-05-06","A","4","prueb0","ol","se trasego 10 sacos","0","2022-05-06 14:01:37");



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

INSERT INTO sede_exalmar_chim VALUES("6","5","Ex_005","50","2022-04-02","2022-04-02","s","55","nada","0","Promosa","2022-04-02 14:07:03");
INSERT INTO sede_exalmar_chim VALUES("7","1","VEG2101345","5","2022-04-06","2022-04-06","super","5","ninfuna","6","Blackar","2022-04-12 12:17:31");



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

INSERT INTO sede_matarani VALUES("1","1","MAT2101589","1000","2022-03-11","2022-03-11","A","1","","2022-03-11 16:40:33");



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

INSERT INTO sede_pisco VALUES("1","1","PIS2101345","600","2022-03-11","2022-03-11","A","1","","2022-03-11 16:39:55");



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

INSERT INTO sede_samanco VALUES("4","1","SAM210245","600","2022-03-11","2022-03-11","A","1","","2022-03-11 17:47:20");
INSERT INTO sede_samanco VALUES("8","2","	SAM210246","1000","2022-03-30","2023-03-30","A","1","","2022-03-30 22:50:41");



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

INSERT INTO sede_vegueta VALUES("1","1","VEG2101345","600","2022-03-11","2022-03-11","A","1","","2022-03-11 17:49:40");



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

INSERT INTO temp_atico VALUES("2","Atic2020","10","20","30","40","50","60","70","80","90","50","Javs","2022-04-10 20:39:39");
INSERT INTO temp_atico VALUES("3","A202020","42","43","42","46","30","41","40","32","40","40","David","2022-04-12 08:37:56");
INSERT INTO temp_atico VALUES("7","ATI022030","5","5","3","5","5","5","5","5","5","5","Ajajaja","2022-04-12 03:46:01");
INSERT INTO temp_atico VALUES("10","ATI2101342","42","42","41","43","28","38","39","41","25","38","KEVIN GARCIA","2022-04-12 09:37:35");
INSERT INTO temp_atico VALUES("11","ATI022032","40","30","40","30","41","42","43","41","30","37","KEVIN GARCIA","2022-04-12 10:10:48");
INSERT INTO temp_atico VALUES("12","ATI2101313","47","45","48","40","40","45","45","47","48","45","Abraham","2022-04-12 10:40:01");
INSERT INTO temp_atico VALUES("13","ATI2101313","40","47","48","48","48","48","47","45","47","46","LARA","2022-04-12 10:47:53");



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

INSERT INTO temp_exalmar_chim VALUES("2","VEG2101345","5.66667","5","8","7","4","1","3","6","9","8","Blackar","nene","2022-04-12 12:17:31");



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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Jhonatan ","Admin","cd5ea73cd58f827fa78eef7197b8ee606c99b2e6","1","","1","2022-05-06 21:01:01","E-Chicama");
INSERT INTO users VALUES("3","David","David","7c222fb2927d828af22f592134e8932480637c0d","3","any0e1on3.jpg","1","2022-04-05 06:37:22","T-Chimbote");
INSERT INTO users VALUES("7","Jamhes","Jamhes","7c4a8d09ca3762af61e59520943dc26494f8941b","2","36xr45oe7.png","1","2022-04-05 09:20:11","T-Callao");
INSERT INTO users VALUES("9","Olga","Calidad","7c4a8d09ca3762af61e59520943dc26494f8941b","5","","1","2022-04-21 18:05:04","T-Atico");
INSERT INTO users VALUES("10","Barrera Atero Jambler","BarreraA","01dea6f2753a545d127996d64459697a872b0439","3","no_image.jpg","1","2022-05-04 20:25:28","T-Callao");
INSERT INTO users VALUES("11","Bolivar Gaviria Antonio","BolivarG","3418c165bca1b5352f2f48e3897f3762fda6fae5","3","no_image.jpg","1","2022-05-04 19:28:16","T-Callao");
INSERT INTO users VALUES("12","Carranza Chamaya Franklin","carranzaC","874862cc58c07c5ec8825692fbd4e75e4706c738","3","no_image.jpg","1","2022-04-25 17:32:05","T-Callao");
INSERT INTO users VALUES("13","Ferre Banegas Elber","FerreB","5f33a455fe1f2efd2e1a8b1807d4d44817a70eff","3","no_image.jpg","1","2022-05-04 18:41:42","T-Callao");
INSERT INTO users VALUES("14","Guibarra Martel Fran","guibarraM","d222df55237f2a5dc5c4642566ca08bbf9488fa8","3","no_image.jpg","1","0000-00-00 00:00:00","T-Callao");
INSERT INTO users VALUES("15","Rios Rios Jenny","riosR","ee9360f305d66dd956ecf06fcd80c303b539756b","3","no_image.jpg","1","2022-05-04 19:51:40","T-Callao");
INSERT INTO users VALUES("17","Valerio Antonio","ValerioM","43d55973297d1c8963fd49da4acab941b027edad","2","no_image.jpg","1","2022-05-06 05:04:49","T-Callao");
INSERT INTO users VALUES("18","Naysha Tinoco Rivera","NayshaT","b112953ead03e516242c8a6e8bd3a1b5bd06a504","1","no_image.jpg","1","2022-04-25 18:08:36","T-Chimbote");
INSERT INTO users VALUES("19","samuel","samuel","7c4a8d09ca3762af61e59520943dc26494f8941b","5","no_image.jpg","1","2022-05-01 18:32:11","T-Callao");
INSERT INTO users VALUES("20","Héctor Rodriguez Alfaro","Sgp1210","42e8ef1a7c9e3b4a5192cb8875e6b289442ca493","1","no_image.jpg","1","2022-05-04 15:48:17","T-Callao");
INSERT INTO users VALUES("21","Fran Guibarra Martel","Fran","d222df55237f2a5dc5c4642566ca08bbf9488fa8","2","no_image.jpg","1","2022-05-06 14:55:57","T-Callao");
INSERT INTO users VALUES("22","Javier Sosa Nieto","SosaJ","20b3876db4601fba3de67cbbf8fdc4e0f9f1d643","3","no_image.jpg","1","2022-05-04 20:05:45","T-Callao");

