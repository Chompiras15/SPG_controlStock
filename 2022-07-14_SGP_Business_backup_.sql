

CREATE TABLE `activitis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `responsable` varchar(40) NOT NULL,
  `f_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO activitis VALUES("7","Limpieza De Mantas","Jhonatan","2022-06-20 18:49:51");
INSERT INTO activitis VALUES("8","Mantenimiento","Jhonatan","2022-06-20 18:50:07");



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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_callao VALUES("13","Corte y vaceado en jumbo","Se puso 40 eslingas a piso","Po temperatura","Kajksjdjdskjd dhdkjssl lsjsjs","14:43:00","18:43:00","2022-05-06","2022-05-07 23:28:22");
INSERT INTO activity_callao VALUES("15","Embarque","Klkl","Lklklklk","Ahusu","13:27:00","17:27:00","2022-05-12","2022-05-19 21:43:24");
INSERT INTO activity_callao VALUES("16","Trasiego de sacos","alklkkooooooo","ooooooo","ooooo","13:32:00","18:32:00","2022-05-19","2022-05-19 00:00:00");



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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO activity_exalmar_mala VALUES("3","Armado de eslingas","nknkk","mjooo","JHON LARA , JAIME CABALLERO RAPERO","13:12:00","13:18:00","2022-06-20","2022-06-20 00:00:00");



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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

INSERT INTO activity_tasachim VALUES("23","Armado de eslingas","JJHJ","ssssss","njknjnj","17:00:00","21:00:00","2022-05-07","2022-05-07 00:00:00");



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
  `placa` varchar(12) NOT NULL,
  `cod_container` varchar(12) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  `type` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

INSERT INTO emb_callao VALUES("25","gggggg","1","25555","jajaj","laklklakl","2022-05-07","qqqq","");
INSERT INTO emb_callao VALUES("26","HPE-452-A12","10","CNO2201234","Kokoko","Hdl-1245","2022-05-24","calambre","");
INSERT INTO emb_callao VALUES("27","hjhjhj","50","prueba1","ooooo","popopop","2022-05-30","CABRAHAM","pc");
INSERT INTO emb_callao VALUES("28","cabraham","50","prueba1","11545","14545","2022-05-30","JORGE ABIGO","pnc");
INSERT INTO emb_callao VALUES("29","HPE-452-A12","20","CNO220125","kokoko","hdl-1245","2022-06-25","JORGE ABIGO","pc");



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO emb_exalmar_mala VALUES("7","HPE-12-A12","500","MAL2101350","2022-05-24","jhon");



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
  `placa` varchar(20) NOT NULL,
  `date_out` date NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

INSERT INTO emb_tasachim VALUES("30","HPE-452-A12","1000","CHI2100013","HY4-452","2022-05-24","JORGE ABIGO");
INSERT INTO emb_tasachim VALUES("31","HPE-452-A12","20","CHI2000005","JKP-125","2022-05-24","JHON LARA");



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



CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(20) NOT NULL,
  `numero` int(15) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `sede` varchar(20) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `cuenta` varchar(40) NOT NULL,
  `asignation` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO employees VALUES("1","DNI","71837455","Jhonatan lara soto","Masculino","1995-12-05","Supervisor Operativo","Tasa-Matarani","BCP","478548145874125","Si");
INSERT INTO employees VALUES("2","DNI","71837454","Janeth lara soto","Femenino","2022-06-17","Supervisor Ssoma","Tasa-Chimbote","Interbank","584758425145","Si");
INSERT INTO employees VALUES("3","DNI","32538503","Olga Soto Valverde","Femenino","2022-06-18","Supervisor Calidad","Tasa-Callao","BCP","524587452152","No");
INSERT INTO employees VALUES("4","DNI","71837460","Orlando correa suarez","Masculino","2022-06-25","Supervisor Operativo","Tasa-Samanco","BCP","4582145874521","No");



CREATE TABLE `history_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` varchar(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

INSERT INTO history_callao VALUES("26","1","0000-00-00","Etoxiquina","CNO2200029","600","2023-05-04","2022-05-04","pnc","2","YPF-255","NADA","","0","se quemo","2022-05-09 09:03:22","");
INSERT INTO history_callao VALUES("27","40","0000-00-00","BHT","CNO2200029","400","2023-05-09","2023-05-09","A","20","YPF-256","NADA","","0","AQUI SI","2022-05-09 11:39:54","");
INSERT INTO history_callao VALUES("28","1","0000-00-00","BHT","CNO2200029","400","2022-05-04","2022-05-04","A","1","YPF-256","NADA","","0","AQUI SI","2022-05-05 18:20:58","");
INSERT INTO history_callao VALUES("29","1","0000-00-00","BHT","CNO2200030","200","2022-05-06","2022-05-06","A","1","YPF-255","AA","","0","XXXX","2022-05-06 09:58:21","");
INSERT INTO history_callao VALUES("30","1","0000-00-00","BHT","655656","10","2022-05-06","2022-05-06","A","2","hhhhh","todos los sacos estan en optimas condiciones","","0","SSS","2022-05-06 13:51:20","");
INSERT INTO history_callao VALUES("31","1","0000-00-00","BHT","5555","20","2022-05-06","2022-05-06","A","2","qqqq","aaaaa","","0","eeee","2022-05-06 13:54:41","");
INSERT INTO history_callao VALUES("32","1","0000-00-00","BHT","454","11","2022-05-07","2022-05-07","A","1","sssss","A","","0","SSS","2022-05-07 16:15:47","");
INSERT INTO history_callao VALUES("33","1","0000-00-00","BHT","25555","1","2022-05-07","2022-05-07","a","1","hhhh","1","","0","5","2022-05-07 18:44:03","");
INSERT INTO history_callao VALUES("34","5","0000-00-00","BHT","88888888","4","2023-05-09","2022-05-09","A","1","44444","POR MOVIMINEOT INTERNO COMO LA EX","","0","aaaaa","2022-05-09 11:33:06","");
INSERT INTO history_callao VALUES("35","1","0000-00-00","BHT","5555","10","2023-05-09","2022-05-09","A","4","kkkkk","AAAAAA","","0","QQQQ","2022-05-09 14:07:56","");
INSERT INTO history_callao VALUES("36","1","0000-00-00","BHT","4444","100","2022-05-09","2022-05-09","A","2","hhhhh","A","","0","QQQ","2022-05-09 14:14:24","");
INSERT INTO history_callao VALUES("37","1","0000-00-00","BHT","CNO2201245","1000","2022-05-11","2022-05-11","A","1","TF4-455","POR MOVIMINEOT INTERNO COMO LA EX","","0","LOOOOOOO","2022-05-11 13:15:46","");
INSERT INTO history_callao VALUES("38","1","0000-00-00","BHT","555555555","44","2022-05-11","2023-05-11","A","2","YYYY","A","","0","777","2022-05-11 17:13:13","");
INSERT INTO history_callao VALUES("39","1","0000-00-00","BHT","1245","800","2022-05-17","2023-05-17","a","1","GG","oo","","0","gg","2022-05-17 12:28:58","");
INSERT INTO history_callao VALUES("40","1","0000-00-00","BHT","1245","200","2022-05-18","2023-05-18","A","1","ppppp","UUUU","","0","VVVV","2022-05-17 12:29:32","");
INSERT INTO history_callao VALUES("41","2","0000-00-00","BHT","poooo","1","2022-05-23","2023-05-23","A","1","kkkkk","aaa","","0","ppppp","2022-05-23 12:30:57","");
INSERT INTO history_callao VALUES("42","1","0000-00-00","BHT","555","1","2022-05-23","2023-05-23","A","1","looool","aaa","","0","4","2022-05-23 12:43:56","");
INSERT INTO history_callao VALUES("43","1","0000-00-00","BHT","aaa","1","2022-05-23","2023-05-23","1","1","aaa","1","","0","1","2022-05-23 12:52:34","");
INSERT INTO history_callao VALUES("44","1","0000-00-00","BHT","katiusca","1","2022-05-23","2023-05-23","A","1","jjjjjj","klklkl","Jhonatan","0","lklklkl","2022-05-23 14:25:11","");
INSERT INTO history_callao VALUES("45","1","0000-00-00","BHT","CNO2201234","1000","2022-05-24","2023-05-24","A","1","PH8-850","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan","0","QQQQ","2022-05-24 09:41:06","");
INSERT INTO history_callao VALUES("46","1","0000-00-00","BHT","peru","100","2022-05-25","2023-05-25","A","1","hhhhh","JUJU","Jhonatan","0","JUJUJO","2022-05-25 14:54:02","");
INSERT INTO history_callao VALUES("47","1","0000-00-00","BHT","prueba1","200","2022-05-30","2023-05-30","A","50","kokoko","ninguna","Jhonatan","0","HEcho","2022-05-30 09:07:58","");
INSERT INTO history_callao VALUES("48","1","0000-00-00","BHT","prueba1","100","2022-05-30","2023-05-30","E","1","hohoho","jkjkk","Jhonatan","0","kokok","2022-05-30 09:10:13","");
INSERT INTO history_callao VALUES("49","1","0000-00-00","BHT","PRUEBA 20","200","2022-06-25","2023-06-25","A","50","8W4-547","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan Lara Soto","0","TODO CORRECTO","2022-06-25 10:53:34","");
INSERT INTO history_callao VALUES("50","1","2022-06-25","BHT","PRUEBA7","200","2022-06-25","2023-06-25","Q","90","88A-255","JHON","Jhonatan Lara Soto","0","LOLO","2022-06-25 11:21:03","");
INSERT INTO history_callao VALUES("51","1","0000-00-00","BHT","1245","200","2022-06-25","2023-06-25","X","1","84A-222","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan Lara Soto","0","AAAAAAAA","2022-06-25 12:57:54","");
INSERT INTO history_callao VALUES("52","1","2022-06-25","BHT","CNO210154","900","2022-06-25","2023-06-25","A","10","54Q-547","TODO EN ORDEN","Jhonatan Lara Soto","0","TODO SALIO BIEN","2022-06-25 14:28:43","");
INSERT INTO history_callao VALUES("53","1","2022-06-25","BHT","CNO210154","100","2022-06-25","2023-06-25","A","10","5A5-154","QQQ","Jhonatan Lara Soto","0","qqqqq","2022-06-25 14:29:39","");
INSERT INTO history_callao VALUES("54","1","0000-00-00","BHT","CNO210154","200","2022-06-25","2023-06-25","A","1","kokoko","JHON","Jhonatan Lara Soto","0","QQQQ","2022-06-25 14:32:25","");
INSERT INTO history_callao VALUES("55","1","2022-06-25","BHT","CNO220125","100","2022-06-25","2023-06-25","S","50","45Q-255","1","Jhonatan Lara Soto","0","QQQ","2022-06-25 15:15:19","");
INSERT INTO history_callao VALUES("56","1","2022-07-14","BHT","prueba50","500","2022-07-14","2023-07-14","A","58","prueba50","todo se mantiene correctamente","Jhonatan Lara Soto","0","TODO CORRECTO","2022-07-14 10:14:18","");



CREATE TABLE `history_exalmal` (
  `id` int(11) NOT NULL,
  `sector` int(4) NOT NULL,
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` varchar(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","KA2201352","1000","2022-02-02","2023-02-02","A","2","","QQQQ","","0","LLL","2022-05-13 10:17:02");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","HS2201350","1000","2022-05-16","2023-05-16","A","10","","Todo en orden","","0","1 saco trasegado","2022-05-16 09:50:39");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","KA2201353","100","2022-05-16","2023-05-16","A","2","","hola","","0","joli","2022-05-16 11:24:10");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","1245","800","2022-05-17","2023-05-17","A","1","","s/o","","0","","2022-05-17 12:26:58");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","MAL2101350","1000","2022-05-20","2023-05-20","A","1","","todo en orden","","0","","2022-05-20 10:00:30");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","Etoxiquina","MAL2101350","1000","2022-05-20","2023-05-20","A","1","","kokokoko","","0","","2022-05-20 10:39:27");
INSERT INTO history_exalmal VALUES("0","5","0000-00-00","BHT","broco","10","2022-05-23","2023-05-23","B","5","","loool","Jhonatan","0","","2022-05-23 14:27:13");
INSERT INTO history_exalmal VALUES("0","1","0000-00-00","BHT","CHC22_0700","1000","2022-06-08","2023-06-08","A","1","","Tempraturas normales","Jhonatan","0","","2022-06-08 11:11:55");
INSERT INTO history_exalmal VALUES("0","1","2022-06-25","BHT","PRUEBA6","200","2022-06-25","2023-06-25","S","5","","2 fechas","Jhonatan Lara Soto","0","","2022-06-25 11:19:40");



CREATE TABLE `history_tasachimb` (
  `id` int(11) NOT NULL,
  `sector` int(4) NOT NULL,
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` varchar(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO history_tasachimb VALUES("0","1","0000-00-00","BHT","olga","100","2022-05-25","2023-05-25","A","1","QQQ","Jhonatan","0","2022-05-25 14:48:34");
INSERT INTO history_tasachimb VALUES("0","1","0000-00-00","BHT","olga","200","2022-05-17","2023-05-17","A","1","AAAAAA","Jhonatan","0","2022-05-25 14:49:08");
INSERT INTO history_tasachimb VALUES("0","1","0000-00-00","BHT","olga","200","2022-05-25","2023-05-25","A","1","ley","Jhonatan","0","2022-05-25 14:50:09");
INSERT INTO history_tasachimb VALUES("0","2","0000-00-00","BHT","PRUEBA 21","100","2022-06-25","2023-06-25","C","50","EN ORDEN","Jhonatan Lara Soto","0","2022-06-25 10:55:17");
INSERT INTO history_tasachimb VALUES("0","1","2022-06-25","BHT","52Q-845","100","2022-06-25","2023-06-25","D","20","JHON","Jhonatan Lara Soto","0","2022-06-25 11:22:06");
INSERT INTO history_tasachimb VALUES("0","5","2022-07-14","BHT","prueba51","500","2022-07-14","2023-07-14","A","60","QQQ","Jhonatan Lara Soto","0","2022-07-14 10:16:42");
INSERT INTO history_tasachimb VALUES("0","1","2022-07-14","BHT","prueba52","500","2022-07-14","2023-07-14","A","6","2 fechas","Jhonatan Lara Soto","0","2022-07-14 10:23:15");



CREATE TABLE `insexchic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO insexchic VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 14:34:50");
INSERT INTO insexchic VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 17:08:14");
INSERT INTO insexchic VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 09:23:13");
INSERT INTO insexchic VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 09:23:45");
INSERT INTO insexchic VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 09:42:43");
INSERT INTO insexchic VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 10:12:23");
INSERT INTO insexchic VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 10:14:04");
INSERT INTO insexchic VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 10:14:51");
INSERT INTO insexchic VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 10:15:21");
INSERT INTO insexchic VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 10:15:51");
INSERT INTO insexchic VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 14:35:31");
INSERT INTO insexchic VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 14:38:26");
INSERT INTO insexchic VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 14:39:05");
INSERT INTO insexchic VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 14:39:38");
INSERT INTO insexchic VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 14:40:01");
INSERT INTO insexchic VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 14:40:22");
INSERT INTO insexchic VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 14:40:52");
INSERT INTO insexchic VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 15:17:59");
INSERT INTO insexchic VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 15:18:46");
INSERT INTO insexchic VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 15:19:23");
INSERT INTO insexchic VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 15:20:29");
INSERT INTO insexchic VALUES("27","P89-457","Port Logistic","FRANCISCO LOPEZ ZAPATA","Y-45872556","No","","2022-06-27 15:21:09");
INSERT INTO insexchic VALUES("28","O5L-457","Rov Sac","OLGA SOTO VALVERDE","L-478541253","No","","2022-06-27 15:21:56");
INSERT INTO insexchic VALUES("29","84A-457","Gemeva","Deivys balvuena","E-254785541","No","","2022-06-27 15:23:51");
INSERT INTO insexchic VALUES("30","prueba 100","Agersa","POLLLO GARDIO","Y-45872556","Si","Jhonatan Lara Soto","2022-06-29 09:24:18");
INSERT INTO insexchic VALUES("31","loopop","Anticona","FRANCISCO LOPEZ ZAPATA","G-45872254","No","Jhonatan Lara Soto","2022-06-29 13:06:43");
INSERT INTO insexchic VALUES("32","poppapa","Figueroa","ABRAHAM VALVERDE","OIE","No","Jhonatan Lara Soto","2022-06-29 13:35:11");



CREATE TABLE `insexchim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO insexchim VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO insexchim VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO insexchim VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO insexchim VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO insexchim VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO insexchim VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO insexchim VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO insexchim VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO insexchim VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO insexchim VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO insexchim VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO insexchim VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO insexchim VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO insexchim VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO insexchim VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO insexchim VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO insexchim VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO insexchim VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO insexchim VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO insexchim VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO insexchim VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instaastic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instaastic VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instaastic VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instaastic VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instaastic VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instaastic VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instaastic VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instaastic VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instaastic VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instaastic VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instaastic VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instaastic VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instaastic VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instaastic VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instaastic VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instaastic VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instaastic VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instaastic VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instaastic VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instaastic VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instaastic VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instaastic VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instacall` (
  `id` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO instacall VALUES("0","hjjshjamal","Naranjo","Loakjshd","Auhskslalk","No","Jhonatan Lara Soto","2022-07-09 11:41:20");
INSERT INTO instacall VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instacall VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instacall VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instacall VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instacall VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instacall VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instacall VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instacall VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instacall VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instacall VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instacall VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instacall VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instacall VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instacall VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instacall VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instacall VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instacall VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instacall VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instacall VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instacall VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instacall VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instachim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(15) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instachim VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instachim VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instachim VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instachim VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instachim VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instachim VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instachim VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instachim VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instachim VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instachim VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instachim VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instachim VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instachim VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instachim VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instachim VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instachim VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instachim VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instachim VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instachim VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instachim VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instachim VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instamata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instamata VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instamata VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instamata VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instamata VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instamata VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instamata VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instamata VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instamata VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instamata VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instamata VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instamata VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instamata VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instamata VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instamata VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instamata VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instamata VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instamata VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instamata VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instamata VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instamata VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instamata VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instapisco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instapisco VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instapisco VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instapisco VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instapisco VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instapisco VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instapisco VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instapisco VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instapisco VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instapisco VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instapisco VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instapisco VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instapisco VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instapisco VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instapisco VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instapisco VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instapisco VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instapisco VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instapisco VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instapisco VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instapisco VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instapisco VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instasama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instasama VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instasama VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instasama VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instasama VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instasama VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instasama VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instasama VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instasama VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instasama VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instasama VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instasama VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instasama VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instasama VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instasama VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instasama VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instasama VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instasama VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instasama VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instasama VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instasama VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instasama VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instasupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instasupe VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instasupe VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instasupe VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instasupe VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instasupe VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instasupe VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instasupe VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instasupe VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instasupe VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instasupe VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instasupe VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instasupe VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instasupe VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instasupe VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instasupe VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instasupe VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instasupe VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instasupe VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instasupe VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instasupe VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instasupe VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



CREATE TABLE `instavegu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `conductor` varchar(50) NOT NULL,
  `brevete` varchar(15) NOT NULL,
  `manta` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO instavegu VALUES("1","84Q-584","Anticona","Lara Soto Jhonatan","B12547856","Si","Jhonatan","2022-06-21 19:34:50");
INSERT INTO instavegu VALUES("6","prueba 1","Pepe el Toro","Melquiadez gacia loto","C552147854","Si","Jhonatan Lara Soto","2022-06-26 22:08:14");
INSERT INTO instavegu VALUES("8","prueba 15","Agersa","ABRAHAM VALVERDE","A847582545","Si","Jhonatan Lara Soto","2022-06-29 14:23:13");
INSERT INTO instavegu VALUES("9","prueba 19","Anticona","ABRAHAM JOSUE CHINITA","A847558478","Si","Jhonatan Lara Soto","2022-06-29 14:23:45");
INSERT INTO instavegu VALUES("10","POP9","Anticona","LOLASW","AKSN5874","Si","Jhonatan Lara Soto","2022-07-11 14:42:43");
INSERT INTO instavegu VALUES("11","A457458523","Agersa","JHONATAN LARA SOTO","A847558478","Si","","2022-06-27 15:12:23");
INSERT INTO instavegu VALUES("12","4587451","Agersa","lolskjsnkj","lkaksksl785","Si","","2022-06-27 15:14:04");
INSERT INTO instavegu VALUES("13","d45-354","Naranjo","LOLASW sksala","jshhs55474","Si","","2022-06-27 15:14:51");
INSERT INTO instavegu VALUES("14","sss454","Naranjo","ABRAHAM VALVERDE","45dfs","Si","","2022-06-27 15:15:21");
INSERT INTO instavegu VALUES("15","ssd4545-55","Figueroa","LOLASW sksala","45dfs","Si","","2022-06-27 15:15:51");
INSERT INTO instavegu VALUES("16","placa geme","Figueroa","ramos lara ","G21458745","Si","Jhonatan Lara Soto","2022-06-27 19:35:31");
INSERT INTO instavegu VALUES("17","placa geme","Gemeva","olga soto","R4587451254","Si","Jhonatan Lara Soto","2022-06-27 19:38:26");
INSERT INTO instavegu VALUES("18","WQQW","Agersa","FFFFD","Q5484121515","Si","Jhonatan Lara Soto","2022-06-27 19:39:05");
INSERT INTO instavegu VALUES("19","POPOP","Port Logistic","JANETH LARA SOTO","F45871216","Si","Jhonatan Lara Soto","2022-06-27 19:39:38");
INSERT INTO instavegu VALUES("20","POPOPOPIU","Rov Sac","POPOSOPA","RERAERS","Si","Jhonatan Lara Soto","2022-06-27 19:40:01");
INSERT INTO instavegu VALUES("21","8987165","Rov Sac","POPQO","LLSP5487","Si","Jhonatan Lara Soto","2022-06-27 19:40:22");
INSERT INTO instavegu VALUES("22","POSYTSG","Uceda","JHON GIMENEZ","K4587458","Si","Jhonatan Lara Soto","2022-06-27 19:40:52");
INSERT INTO instavegu VALUES("23","kjsj","Agersa","lolgta","jhu-45874","No","","2022-06-27 20:17:59");
INSERT INTO instavegu VALUES("24","R45-521","Rov Sac","POLLLO GARDIO","OIE","No","","2022-06-27 20:18:46");
INSERT INTO instavegu VALUES("25","P5K-4587","Gemeva","ABRAHAM VALVERDE","G-45872254","No","","2022-06-27 20:19:23");
INSERT INTO instavegu VALUES("26","T5U-458","Uceda","DEIVY REYES","P-547821","No","","2022-06-27 20:20:29");



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
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `description` varchar(30) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_callao VALUES("71","1","0000-00-00","BHT","1245","1000","2022-05-18","2023-05-18","A","1","Ppppp","VVVV","UUUU","","0","2022-06-25 10:32:12");
INSERT INTO sede_callao VALUES("72","2","0000-00-00","BHT","poooo","1","2022-05-23","2023-05-23","A","1","kkkkk","ppppp","aaa","Jhonatan","0","2022-05-23 12:30:57");
INSERT INTO sede_callao VALUES("73","1","0000-00-00","BHT","555","1","2022-05-23","2023-05-23","A","1","looool","4","aaa","","0","2022-05-23 12:43:56");
INSERT INTO sede_callao VALUES("74","1","0000-00-00","BHT","aaa","1","2022-05-23","2023-05-23","1","1","aaa","1","1","","0","2022-05-23 12:52:34");
INSERT INTO sede_callao VALUES("75","1","0000-00-00","BHT","katiusca","1","2022-05-23","2023-05-23","A","1","jjjjjj","lklklkl","klklkl","Jhonatan","15.4444","2022-05-23 15:26:17");
INSERT INTO sede_callao VALUES("76","1","0000-00-00","BHT","CNO2201234","990","2022-05-24","2023-05-24","A","1","PH8-850","QQQQ","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan","37.4889","2022-05-24 11:00:28");
INSERT INTO sede_callao VALUES("77","1","0000-00-00","BHT","peru","100","2022-05-25","2023-05-25","A","1","hhhhh","JUJUJO","JUJU","Jhonatan","0","2022-05-25 14:54:02");
INSERT INTO sede_callao VALUES("78","1","0000-00-00","BHT","prueba1","150","2022-05-30","2023-05-30","A","50","kokoko","HEcho","ninguna","Jhonatan","0","2022-05-30 09:17:41");
INSERT INTO sede_callao VALUES("79","1","2022-06-25","BHT","PRUEBA 20","400","2022-06-25","2023-06-25","A","50","8W4-547","TODO CORRECTO","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan Lara Soto","0","2022-06-25 10:53:34");
INSERT INTO sede_callao VALUES("80","1","2022-06-24","BHT","PRUEBA7","200","2022-06-25","2023-06-25","Q","90","88A-255","LOLO","JHON","Jhonatan Lara Soto","0","2022-06-25 12:33:12");
INSERT INTO sede_callao VALUES("81","1","2022-06-25","BHT","CNO210154","1000","2022-06-25","2023-06-25","A","10","54Q-547","TODO SALIO BIEN","QQQ","Jhonatan Lara Soto","0","2022-06-25 14:29:39");
INSERT INTO sede_callao VALUES("82","1","2022-06-25","BHT","CNO220125","80","2022-06-25","2023-06-25","S","50","45Q-255","QQQ","1","Jhonatan Lara Soto","0","2022-06-25 15:16:24");



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
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `temperatura` float NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `responsable` varchar(50) NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_exalmar_mala VALUES("14","1","0000-00-00","BHT","CHC22_0700","1000","2022-06-08","2023-06-08","A","1","0","Temperaturas normales","Jhonatan","2022-06-08 11:12:06");
INSERT INTO sede_exalmar_mala VALUES("15","1","2022-06-25","BHT","PRUEBA-3","100","2022-06-25","2023-06-25","200","60","0","JHON","Jhonatan Lara Soto","2022-06-25 10:56:46");
INSERT INTO sede_exalmar_mala VALUES("16","1","2022-06-25","BHT","PRUEBA_4","200","2022-06-25","2023-06-25","X","4","0","QQQ","Jhonatan Lara Soto","2022-06-25 11:01:22");
INSERT INTO sede_exalmar_mala VALUES("17","1","2022-06-25","BHT","PRUEBA6","200","2022-06-25","2023-06-25","S","5","0","2 fechas","Jhonatan Lara Soto","2022-06-25 11:19:40");



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



CREATE TABLE `sede_pnc_callao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector` int(4) NOT NULL,
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `description` varchar(30) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO sede_pnc_callao VALUES("1","1","0000-00-00","BHT","prueba1","50","2022-05-30","2023-05-30","E","1","hohoho","kokok","jkjkk","Jhonatan","0","2022-05-30 09:22:38");
INSERT INTO sede_pnc_callao VALUES("2","1","2022-06-25","BHT","1245","200","2022-06-25","2023-06-25","X","1","84A-222","AAAAAAAA","POR MOVIMINEOT INTERNO COMO LA EX","Jhonatan Lara Soto","0","2022-06-25 12:57:54");



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
  `f_actividad` date NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cod_ruma` varchar(10) NOT NULL,
  `cant_saco` int(4) NOT NULL,
  `date_producc` date NOT NULL,
  `date_vencimiento` date NOT NULL,
  `calidad` varchar(15) NOT NULL,
  `nicho` int(11) NOT NULL,
  `observation` varchar(100) DEFAULT NULL,
  `responsable` varchar(50) NOT NULL,
  `temperatura` float NOT NULL,
  `date_almacenamiento` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

INSERT INTO sede_tasachimbote VALUES("50","1","0000-00-00","BHT","CHI2000001","1000","2022-05-23","2023-05-23","A","4","JHON","Jhonatan","47.2","2022-05-30 08:11:30");
INSERT INTO sede_tasachimbote VALUES("51","1","0000-00-00","BHT","CHI2000005","980","2022-05-23","2023-05-23","A","5","LOOL","Jhonatan","0","2022-05-24 11:03:10");
INSERT INTO sede_tasachimbote VALUES("52","1","0000-00-00","BHT","CHI2000007","1000","2022-05-23","2023-05-23","A","4","JHON","Jhonatan","50.9444","2022-05-29 21:44:16");
INSERT INTO sede_tasachimbote VALUES("53","1","0000-00-00","BHT","CHI2000009","1000","2022-05-23","2023-05-23","A","8","JHON","Jhonatan","0","2022-05-23 15:07:13");
INSERT INTO sede_tasachimbote VALUES("54","1","2022-06-27","BHT","CHI2000010","1000","2022-05-23","2023-05-23","C","2","POPO","Jhonatan","0","2022-06-27 16:45:41");
INSERT INTO sede_tasachimbote VALUES("55","1","0000-00-00","BHT","prueba","200","2022-05-25","2023-05-25","A","1","hecho","Jhonatan","0","2022-05-25 14:37:21");
INSERT INTO sede_tasachimbote VALUES("56","1","0000-00-00","BHT","pruebita","1000","2022-05-18","2023-05-18","A","1","2 FECHAS","Jhonatan","0","2022-05-25 14:44:07");
INSERT INTO sede_tasachimbote VALUES("57","1","0000-00-00","BHT","olga","500","2022-05-25","2023-05-25","A","1","ley","Jhonatan","0","2022-05-25 14:50:09");
INSERT INTO sede_tasachimbote VALUES("58","2","2022-06-25","BHT","PRUEBA 21","200","2022-06-25","2023-06-25","C","50","EN ORDEN","Jhonatan Lara Soto","0","2022-06-25 10:55:17");
INSERT INTO sede_tasachimbote VALUES("59","1","2022-06-25","BHT","52Q-845","100","2022-06-25","2023-06-25","D","20","JHON","Jhonatan Lara Soto","0","2022-06-25 11:22:06");
INSERT INTO sede_tasachimbote VALUES("60","50","2022-07-14","BHT","prueba51","500","2022-07-14","2023-07-14","A","60","QQQ","Jhonatan Lara Soto","0","2022-07-14 10:20:07");
INSERT INTO sede_tasachimbote VALUES("61","1","2022-07-14","BHT","prueba52","500","2022-07-14","2023-07-14","A","6","2 fechas","Jhonatan Lara Soto","0","2022-07-14 10:23:15");



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
  `observacion` varchar(250) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO temp_callao VALUES("15","Katiusca","11","11","1","1","1","1","1","11","1","111","15.4444","11","BHT","2022-05-23 15:26:17");
INSERT INTO temp_callao VALUES("16","CNO2201234","jhon","35.6","40.2","41.6","50.3","49.3","50.1","41.2","50.2","52.3","45.6444","lara soto","BHT","2022-05-24 09:41:55");
INSERT INTO temp_callao VALUES("17","CNO2201234","tu mama calata","35.3","36.2","34.4","38.5","39.6","38.6","37.6","39.6","37.6","37.4889","jhonatan","BHT","2022-05-24 10:07:45");



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
  `observacion` varchar(250) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO temp_exalmar_mala VALUES("9","MAL2101350","soto","63.4","32.4","32.4","36.8","36.7","39.7","38.7","41.5","42.6","43.7","61.5","64.2","62.1","31.5","38.9","39.7","36.5","37.6","37.2","37.6","38.6","37.2","36.7","37.8","36.7","41.668","Jjhon","Etoxiquina","2022-05-20 11:05:34");
INSERT INTO temp_exalmar_mala VALUES("10","MAL2101350","holiii","60.2","36.4","35.2","36.4","37.9","36.7","36.8","36.7","36.9","40.6","46.2","36.7","39.8","36.9","39.8","39.8","37.5","39.7","39.5","37.5","36.5","36.2","36.7","37.2","37.2","38.84","Lkllklk","Etoxiquina","2022-05-20 11:02:23");
INSERT INTO temp_exalmar_mala VALUES("11","MAL2101350","hola","52.2","32.2","36.2","34.5","36.2","35.2","36.5","62.2","61.2","31.5","32.2","36.2","35.2","38.2","34.2","36.5","36.2","36.2","35.2","50.2","33.2","36.2","35.2","36.2","36.2","38.608","jhon","Etoxiquina","2022-05-20 21:54:11");
INSERT INTO temp_exalmar_mala VALUES("12","Broco","11","11","11","1","1","1","1","111","11","1","11","1","111","11","111","1","11","1","11","1","11","11","11","11","11","11","19.4","111","BHT","2022-05-23 15:27:09");



CREATE TABLE `temp_tasachimbote` (
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
  `observacion` varchar(250) NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `typeRuma` varchar(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO temp_tasachimbote VALUES("1","CHI2000001","47.2","36.5","36.8","45.3","50.2","53.2","36.2","51.1","52.3","63.2","Todo en orden sexy","Jhonatan lara soto","BHT","2022-05-30 08:11:30");
INSERT INTO temp_tasachimbote VALUES("2","CHI2000007","50.9444","70.2","36.8","45.3","50.2","53.2","36.2","51.1","52.3","63.2","Todo en orden sexy","Jhonatan lara soto","BHT","2022-05-29 21:44:16");
INSERT INTO temp_tasachimbote VALUES("3","CHI2000007","50.9444","70.2","36.8","45.3","50.2","53.2","36.2","51.1","52.3","63.2","Todo en orden sexy","Jhonatan lara soto","BHT","2022-05-29 21:44:16");
INSERT INTO temp_tasachimbote VALUES("4","CHI2000007","50.9444","70.2","36.8","45.3","50.2","53.2","36.2","51.1","52.3","63.2","Todo en orden sexy","Jhonatan lara soto","BHT","2022-05-29 21:44:16");



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
INSERT INTO user_groups VALUES("4","Cliente","5","1");
INSERT INTO user_groups VALUES("5","Calidad","4","1");



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
  `typeSystems` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `user_level` (`user_level`),
  CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO users VALUES("1","Jhonatan Lara Soto","Admin","cd5ea73cd58f827fa78eef7197b8ee606c99b2e6","1","no_image.jpg","1","2022-07-14 16:59:52","T-Chimb","");
INSERT INTO users VALUES("22","Josue","Calidad","28c668f417e88466c8ee4c9d220d17d7aa69529c","4","no_image.jpg","1","2022-05-16 22:43:02","E-Chicama","");
INSERT INTO users VALUES("23","cliente","cliente","d94019fd760a71edf11844bb5c601a4de95aacaf","5","no_image.jpg","1","2022-05-16 18:09:18","E-Chicama","");
INSERT INTO users VALUES("24","administrador","administrador","9dbf7c1488382487931d10235fc84a74bff5d2f4","2","no_image.jpg","1","2022-05-16 23:37:51","E-Chicama","");
INSERT INTO users VALUES("25","Supervisor","Supervisor","7ff95a4d2848b62916f5a0b3167ee2e67f03c934","3","no_image.jpg","0","2022-05-16 18:23:38","E-Chicama","");
INSERT INTO users VALUES("26","admin","admin","admin","1","no_image.jpg","1","2022-06-18 00:43:39","T-Chicama","sgp_rca");

