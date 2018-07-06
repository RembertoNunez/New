-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 06, 2018 at 04:22 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sesc`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_identity`
--

CREATE TABLE `case_identity` (
  `id_case` int(11) NOT NULL,
  `correlative` varchar(25) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_requester` int(11) DEFAULT NULL,
  `id_analyst` int(11) DEFAULT NULL,
  `id_programmer` int(11) DEFAULT NULL,
  `id_leader` int(11) DEFAULT NULL,
  `id_vp` int(11) DEFAULT NULL,
  `id_system` int(11) DEFAULT NULL,
  `id_stage` int(11) DEFAULT NULL,
  `id_priority` int(11) DEFAULT NULL,
  `status_case` varchar(25) DEFAULT NULL,
  `percentage_Complete` int(11) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `finish_at` datetime DEFAULT NULL,
  `extended_at` datetime DEFAULT NULL,
  `id_relationed_case` int(11) DEFAULT NULL,
  `history` longtext,
  `analysts_related` longtext,
  `id_cycle` int(11) DEFAULT NULL,
  `id_node_project` int(11) DEFAULT NULL,
  `id_project` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_identity`
--

INSERT INTO `case_identity` (`id_case`, `correlative`, `title`, `description_`, `created_at`, `updated_at`, `id_requester`, `id_analyst`, `id_programmer`, `id_leader`, `id_vp`, `id_system`, `id_stage`, `id_priority`, `status_case`, `percentage_Complete`, `start_at`, `finish_at`, `extended_at`, `id_relationed_case`, `history`, `analysts_related`, `id_cycle`, `id_node_project`, `id_project`, `id_status`, `active`) VALUES
(3, 'REQ-2716', 'Reporte de Taf', 'Descripción breve de requerimiento by jacobo', '2020-01-01 00:00:00', '2017-12-05 09:22:00', 10, 6, 8, 9, 4, 2, 1, 3, 'Iniciado', 76, '2017-07-03 00:00:00', '2017-12-30 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"65\",\"comment\":\"comentario Rina\",\"date\":\"2017/02/15\"},{\"percentage\":\"67\",\"comment\":\"comentario número 4\",\"date\":\"2017/02/15\"},{\"percentage\":\"68\",\"comment\":\"El programado se fue de vacaciones\",\"date\":\"18/9/2017 12:42:14\",\"id_user\":\"10\"},{\"percentage\":\"75\",\"comment\":\"Se realizaron pruebas\",\"date\":\"12/10/2017 13:49:02\",\"id_user\":\"1\"},{\"percentage\":\"76\",\"comment\":\"Avance Ariel\",\"date\":\"10/11/2017 11:42:16\",\"id_user\":\"1\"},{\"percentage\":\"100\",\"comment\":\"ultimo Pago\",\"date\":\"2017/02/15\"}]', '13', 1, NULL, 1, 1, NULL),
(4, 'REQ-2845', 'Automatización Cierre ACH', 'Descripción breve de requerimiento by Alberto y Yessenia', '2017-01-01 00:00:00', '2017-10-13 09:28:00', 10, 6, 8, 9, 1, 11, 1, 3, 'Iniciado', 100, '2017-07-03 00:00:00', '2017-10-04 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":27,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":68,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":79,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":90,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"95\",\"comment\":\"thrth\",\"date\":\"2017/02/15\"},{\"percentage\":\"96\",\"comment\":\"hola mundo \",\"date\":\"18/7/2017 16:53:11\",\"id_user\":\"6\"},{\"percentage\":\"100\",\"comment\":\"hola mundo \",\"date\":\"18/7/2017 16:54:12\",\"id_user\":\"6\"}]', '5', 3, NULL, 1, 1, NULL),
(11, 'REQ-2845', 'Optimización del modulo Transferencias Internacionales', 'Descripción breve de requerimiento modificada... por mi amor Gilma', '2017-01-21 00:00:00', '2017-10-13 09:31:00', 10, 6, 8, 9, 1, 1, 1, 1, 'Iniciado', 75, '2017-07-03 00:00:00', '2017-10-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"75\",\"comment\":\"El developer, avanzo con la segunda parte\",\"date\":\"13/10/2017 9:29:53\",\"id_user\":\"1\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(12, 'REQ-3445', 'Reparar modulo de adelanto plus', 'Descripción breve de requerimiento', '2017-01-16 00:00:00', '2017-11-09 10:49:00', 10, 19, 8, 21, 5, 1, 1, 1, 'Iniciado', 70, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"65\",\"comment\":\"comentario 65\",\"date\":\"2017/02/15\"},{\"percentage\":\"70\",\"comment\":\"cvbcxv\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(15, 'REQ-2829', 'Reporte CRs Telesoft', 'Descripción breve de requerimiento', '2017-01-12 00:00:00', '2017-11-09 10:51:00', 10, 20, 8, 21, 3, 1, 1, 1, 'Iniciado', 65, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"60\",\"comment\":\"avance 60\",\"date\":\"2017/02/15\"},{\"percentage\":\"65\",\"comment\":\"coment 65\",\"date\":\"2017-6-16 11:20:38\",\"id_user\":\"1\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(16, 'REQ-2830', 'Optimizar Modulo MT103', 'Descripción breve de requerimiento', '2017-01-09 00:00:00', '2017-06-04 22:50:00', 10, 13, 8, 9, 3, 1, 1, 1, 'Iniciado', 97, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', '5', 6, NULL, 1, 1, NULL),
(18, 'REQ-2931', 'Servicios para Chequeras', 'Descripción breve de requerimiento por Robert', '2016-09-29 00:00:00', '2016-09-29 00:00:00', 10, 6, 8, 9, 2, 1, 1, 1, 'Iniciado', 85, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(19, 'REQ-2932', 'Actualizar Modulo LOFISA', 'Descripción breve de requerimiento', '2016-10-17 00:00:00', '2016-10-17 00:00:00', 10, 6, 8, 9, 2, 1, 1, 1, 'Iniciado', 90, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(21, 'REQ-2833', 'Reparar Progms Cámara Cop', 'Descripción breve de requerimiento', '2016-11-29 00:00:00', '2017-11-09 10:58:00', 10, 6, 8, 9, 3, 1, 1, 1, 'Iniciado', 86, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 6, NULL, 1, 1, NULL),
(22, 'REQ-2834', 'Tarjetas Corporativas', 'Descripción breve de requerimiento', '2017-01-07 00:00:00', '2017-01-07 00:00:00', 10, 13, 8, 9, 3, 1, 1, 1, 'Iniciado', 72, '2017-07-03 00:00:00', '2017-07-14 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', '5', 6, NULL, 1, 1, NULL),
(23, 'REQ-3344', 'Optimizar modulo de venta de divisas', 'Descripción breve de requerimiento', '2017-01-16 00:00:00', '2017-06-04 17:57:00', 10, 6, 8, 9, 3, 1, 1, 1, 'Creado', 60, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"60\",\"comment\":\"comentario 60%\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 7, NULL, 2, 7, NULL),
(24, 'REQ-3347', 'Reporte para Auditoria', 'Descripción breve de requerimiento', '2017-01-16 00:00:00', '2017-11-09 10:59:00', 10, 13, 8, 9, 3, 1, 1, 1, 'Creado', 58, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"58\",\"comment\":\"comentario de avance 58\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 7, NULL, 2, 7, NULL),
(31, NULL, 'ACH 24 7', 'Hello People', '2020-01-02 00:00:00', '2017-06-13 21:59:00', NULL, 13, NULL, NULL, 1, NULL, NULL, NULL, 'Creado', 90, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"69\",\"comment\":\"Avance GYMA\",\"date\":\"2017/02/15\"},{\"percentage\":\"75\",\"comment\":\"comentario 75\",\"date\":\"2017/02/15\"},{\"percentage\":\"80\",\"comment\":\"comnet 80\",\"date\":\"2017/02/15\"},{\"percentage\":\"90\",\"comment\":\"test 1\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', '5', 7, NULL, 2, 7, NULL),
(32, NULL, 'Modificación Constancia Comercios BASA', NULL, '2020-02-01 00:00:00', '2017-11-09 11:01:00', NULL, 6, NULL, 9, 1, NULL, NULL, NULL, 'Creado', 58, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"Comentario realizado por el analista\",\"date\":\"2017/01/07\"},{\"percentage\":10,\"comment\":\"Comentario 2 realizado por el analista\",\"date\":\"2017/01/16\"},{\"percentage\":57,\"comment\":\"Comentario 3 realizado por el analista\",\"date\":\"2017/01/19\"},{\"percentage\":\"58\",\"comment\":\"comentario 58 %\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\"Sin comentario\",\"date\":\"2017/01/23\"}]', NULL, 7, NULL, 2, 7, NULL),
(33, NULL, 'Planilla Masiva WEB', NULL, '2017-06-02 00:00:00', '2017-11-17 17:00:00', NULL, 5, NULL, 9, NULL, NULL, NULL, NULL, 'Creado', 10, '2017-11-01 00:00:00', '2017-12-22 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":100,\"comment\":\"\",\"date\":\"\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(34, NULL, 'Test 2', NULL, '2017-06-02 09:57:00', '2017-11-09 11:03:00', NULL, 6, NULL, 9, NULL, NULL, NULL, NULL, 'Creado', 0, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":100,\"comment\":\"\",\"date\":\"\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(35, NULL, NULL, NULL, '2017-06-02 17:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Creado', 0, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":100,\"comment\":\"\",\"date\":\"\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(36, 'REQ-4567', 'Test new', NULL, '2017-06-06 18:44:00', '2017-11-09 11:03:00', NULL, 13, NULL, 9, NULL, NULL, NULL, NULL, 'Creado', 0, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":100,\"comment\":\"\",\"date\":\"\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(37, 'REQ-5578', 'test 2', NULL, '2017-06-13 22:01:00', '2017-11-09 11:05:00', NULL, 20, NULL, 21, NULL, NULL, NULL, NULL, 'Creado', 0, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":100,\"comment\":\"\",\"date\":\"\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(38, 'REQ-7855', 'Test 77', 'Este proyecto inicia el siguiente ciclo', '2017-06-15 22:38:00', '2017-11-09 11:04:00', NULL, 19, NULL, 21, NULL, NULL, NULL, NULL, 'Creado', 7, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario developer ingreso este caso\",\"date\":\"2017-6-15 22:37:59\",\"id_user\":1},{\"percentage\":\"7\",\"comment\":\"comentario 7 porciento\",\"date\":\"2017/02/15\"},{\"percentage\":100,\"comment\":\" \",\"date\":\"2017-6-15 22:37:59\",\"id_user\":0}]', NULL, 7, NULL, 2, 7, NULL),
(39, 'REQ-7789', 'Test 78', NULL, '2017-06-17 18:15:00', '2017-11-19 15:46:00', NULL, 19, NULL, 21, NULL, NULL, NULL, NULL, 'Creado', 0, '2017-07-17 00:00:00', '2017-07-28 00:00:00', NULL, NULL, '[{\"percentage\":0, \"comment\": \"El usuario developer ingreso este caso\", \"date\": \"2017-6-17 18:15:06\" , \"id_user\":1},{\"percentage\":100, \"comment\": \" \", \"date\": \"2017-6-17 18:15:06\" , \"id_user\":0}]', '13', 8, NULL, 2, 7, NULL),
(40, 'req3070', 'Prueba', NULL, '2017-07-17 18:17:00', '2017-11-09 11:06:00', NULL, 19, NULL, 21, NULL, NULL, NULL, NULL, 'Ninguno', 30, NULL, NULL, NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario rescalante ingreso este caso\",\"date\":\"17/7/2017 18:17:17\",\"id_user\":14},{\"percentage\":\"25\",\"comment\":\"*Caso ingresado en JIRA.\",\"date\":\"25/8/2017 9:51:38\",\"id_user\":\"14\"},{\"percentage\":\"26\",\"comment\":\"*Caso ingresado en JIRA.\",\"date\":\"25/8/2017 9:52:10\",\"id_user\":\"14\"},{\"percentage\":\"29\",\"comment\":\"*Análisis INFATLAN \",\"date\":\"25/8/2017 9:53:50\",\"id_user\":\"14\"},{\"percentage\":\"30\",\"comment\":\"Prueba\",\"date\":\"25/8/2017 10:14:40\",\"id_user\":\"14\"},{\"percentage\":100,\"comment\":\" \",\"date\":\"17/7/2017 18:17:17\",\"id_user\":0}]', NULL, NULL, NULL, NULL, NULL, NULL),
(41, '3333', 'Otra Prueba', NULL, '2017-07-17 18:23:00', '2017-11-09 11:07:00', NULL, 20, NULL, 21, NULL, NULL, NULL, NULL, 'Ninguno', 0, NULL, NULL, NULL, NULL, '[{\"percentage\":0, \"comment\": \"El usuario rescalante ingreso este caso\", \"date\": \"17/7/2017 18:23:11\" , \"id_user\":14},{\"percentage\":100, \"comment\": \" \", \"date\": \"17/7/2017 18:23:11\" , \"id_user\":0}]', NULL, NULL, NULL, NULL, NULL, NULL),
(42, '31oo', 'Una prueba mas', NULL, '2017-07-17 18:24:00', '2017-11-09 11:08:00', NULL, 19, NULL, 21, NULL, NULL, NULL, NULL, 'Ninguno', 0, NULL, NULL, NULL, NULL, '[{\"percentage\":0, \"comment\": \"El usuario rescalante ingreso este caso\", \"date\": \"17/7/2017 18:23:43\" , \"id_user\":14},{\"percentage\":100, \"comment\": \" \", \"date\": \"17/7/2017 18:23:43\" , \"id_user\":0}]', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'REQ-2344', 'reporte Hondutel ', 'necesita que la agencia pueda aparecer en el reporte ', '2017-07-18 17:00:00', '2017-11-09 11:08:00', 10, 20, 8, 21, 3, 1, 4, 1, 'Iniciado', 20, '2017-07-17 00:00:00', '2017-07-29 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario analista1 ingreso este caso\",\"date\":\"18/7/2017 17:00:13\",\"id_user\":6},{\"percentage\":\"20\",\"comment\":\"hasta hoy se asigno \",\"date\":\"18/7/2017 17:01:54\",\"id_user\":\"6\"},{\"percentage\":100,\"comment\":\" \",\"date\":\"18/7/2017 17:00:13\",\"id_user\":0}]', NULL, 3, NULL, 1, 1, NULL),
(44, 'REQ-3041', 'SysAid: 400215-Pago Caja Empresarial', '\"Se trató de efectuar un pago en ventanilla de caja empresarial, pero la información que nos brinda no es la correcta.\r\nSe busca a la empresa y la información del cliente en la empresa Asoc. Familia y Medio Ambiente y presenta empresa Finca Honduras.\"\r\n', '2017-07-19 08:55:00', '2017-11-09 11:09:00', 10, 19, 8, 21, 6, 1, 2, 1, 'Iniciado', 0, '2017-07-19 00:00:00', '2017-07-20 00:00:00', NULL, NULL, '[{\"percentage\":0, \"comment\": \"El usuario DEVELOPER ingreso este caso\", \"date\": \"19/7/2017 8:55:13\" , \"id_user\":1},{\"percentage\":100, \"comment\": \" \", \"date\": \"19/7/2017 8:55:13\" , \"id_user\":0}]', NULL, 3, NULL, 1, 1, NULL),
(45, 'REQ-8799', 'Flota', NULL, '2017-11-06 17:43:00', '2017-11-09 11:10:00', NULL, 19, NULL, 21, NULL, NULL, NULL, NULL, 'Ninguno', 10, '2017-11-06 00:00:00', '2017-11-17 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario DEVELOPER ingreso este caso\",\"date\":\"6/11/2017 17:42:22\",\"id_user\":1},{\"percentage\":\"10\",\"comment\":\"Se realizo el analisis\",\"date\":\"6/11/2017 17:43:40\",\"id_user\":\"1\"},{\"percentage\":100,\"comment\":\" \",\"date\":\"6/11/2017 17:42:22\",\"id_user\":0}]', NULL, NULL, NULL, NULL, NULL, 0),
(46, 'REQ-3124', ' SysAid: 433837-Error en Unipago', 'Buen día\r\nSu ayuda verificando inconveniente de la aplicacion 23 Créditos (Crédito Preferente / CrediCash / Online Credit Advance / Unipago). \r\nAl revisar la agencia 1301 en Reportes vencidos más de 90 días, aparece el siguiente error adjunto, por lo que no es posible verificar los clientes en mora, solo esa agencia aparece error.', '2017-11-13 09:41:00', '2017-11-13 19:54:00', NULL, 6, 8, NULL, NULL, NULL, 11, 3, 'Iniciado', 6, '2017-11-06 00:00:00', '2017-12-29 00:00:00', NULL, NULL, '[{\"percentage\":0,\"comment\":\"El usuario abetancourt ingreso este caso\",\"date\":\"13/11/2017 9:40:29\",\"id_user\":6},{\"percentage\":\"10\",\"comment\":\"Se creo el caso pero sin ingresarlo a Infatlan\",\"date\":\"13/11/2017 19:44:40\",\"id_user\":\"1\"},{\"percentage\":\"5\",\"comment\":\"Test...\",\"date\":\"13/11/2017 19:45:35\",\"id_user\":\"1\"},{\"percentage\":\"6\",\"comment\":\"Hahahaha\",\"date\":\"13/11/2017 19:53:02\",\"id_user\":\"1\"},{\"percentage\":100,\"comment\":\" \",\"date\":\"13/11/2017 9:40:29\",\"id_user\":0}]', NULL, 6, NULL, NULL, 1, 0),
(47, 'REQ-3195', 'SysAid: 432197-Transferencia ACH', 'Buen día\r\nSu ayuda con la transferencias ACH, ya que están reportando que un proveedor realizo un pago procesado en fecha 16/10/17, mismo que fue pagado bajo recibo # 325418 y que a la fecha no ha sido recibido ni en banco receptor de nuestro Proveedor, ni devuelto en nuestra cuenta de banco.\r\nUsuario Operador: RLUIS\r\nAutorizador: JUANSZ', '2017-11-13 09:46:00', '2017-11-17 17:13:00', NULL, 6, NULL, NULL, NULL, NULL, 11, 3, 'Iniciado', 0, '2017-11-26 00:00:00', '2017-11-29 00:00:00', NULL, NULL, '[{\"percentage\":0, \"comment\": \"El usuario abetancourt ingreso este caso\", \"date\": \"13/11/2017 9:45:23\" , \"id_user\":6},{\"percentage\":100, \"comment\": \" \", \"date\": \"13/11/2017 9:45:23\" , \"id_user\":0}]', NULL, 6, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commentary`
--

CREATE TABLE `commentary` (
  `id_commentary` int(11) NOT NULL,
  `content` longtext,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `id_sender` int(11) DEFAULT NULL,
  `id_case` int(11) DEFAULT NULL,
  `id_receiver` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentary`
--

INSERT INTO `commentary` (`id_commentary`, `content`, `created_at`, `updated_at`, `id_sender`, `id_case`, `id_receiver`, `active`) VALUES
(1, 'Hola Nelson, como va con el requerimiento', '2017-02-16 00:00:00.000000', NULL, 10, 3, 13, NULL),
(2, 'Buen dia Bessy, el requerimiento esta casi terminado, saludos', '2017-02-16 00:00:00.000000', NULL, 13, 3, 10, NULL),
(3, 'Nelson, muchas gracias nelson', '2017-02-16 00:00:00.000000', NULL, 10, 3, 13, NULL),
(4, 'A la orden le aviso cuando lo cerremos', '2017-02-16 00:00:00.000000', NULL, 13, 3, 10, NULL),
(5, 'mensaje de prueba', '2017-02-16 00:00:00.000000', NULL, 13, 3, 10, NULL),
(6, 'mensaje de prueba 2', '2017-02-17 00:00:00.000000', NULL, 13, 3, 10, NULL),
(7, 'mensaje de prueba 2', '2017-02-17 00:00:00.000000', NULL, 13, 3, 10, NULL),
(8, 'mensaje ariel', '2017-02-17 00:00:00.000000', NULL, 13, 3, 10, NULL),
(9, 'Test 1', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(10, 'Test 1', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(11, 'Test 1', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(12, 'Test 1', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(13, 'test test test', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(14, 'test test test', '2017-06-01 00:00:00.000000', NULL, 13, 3, 10, NULL),
(15, 'texto texto', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(16, 'texto texto', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(17, 'texto texto', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(18, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(19, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(20, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(21, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(22, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(23, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(24, '', '2017-06-01 00:00:00.000000', NULL, 13, 4, 10, NULL),
(25, 'Tituto test\r\nComentario test', '2017-06-01 00:00:00.000000', NULL, 1, 11, 10, NULL),
(26, 'title test\r\ncontent test', '2017-06-01 00:00:00.000000', NULL, 1, 11, 10, NULL),
(27, 'Title Test 2\r\nComment Test 2', '2017-06-01 00:00:00.000000', NULL, 1, 11, 10, NULL),
(28, 'Titulo 3\r\ntest 3', '2017-06-01 00:00:00.000000', NULL, 1, 11, 10, NULL),
(29, 'Titulo 4\r\ntest 4', '2017-06-01 23:13:53.237000', NULL, 1, 11, 10, NULL),
(30, 'title 1\r\ncomentario 1', '2017-06-02 12:24:00.340000', NULL, 1, 15, 10, NULL),
(31, 'titutlo 1\r\ncoment 1', '2017-06-02 17:30:46.213000', NULL, 5, 31, 5, NULL),
(32, 'tittulo 2\r\ncometario2', '2017-06-02 17:31:14.890000', NULL, 5, 31, 5, NULL),
(33, 'Título test 1\r\nComentario test 1', '2017-06-04 22:31:19.070000', NULL, 1, 4, 10, NULL),
(34, 'undefined\r\ncomentario test 1', '2017-06-05 20:46:08.850000', NULL, 1, 24, 10, NULL),
(35, 'undefined\r\n', '2017-06-05 20:47:04.600000', NULL, 1, 24, 10, NULL),
(36, 'undefined\r\nComentario test 2', '2017-06-05 21:01:27.267000', NULL, 1, 24, 10, NULL),
(37, 'undefined\r\ntest 3', '2017-06-05 21:05:17.440000', NULL, 1, 24, 10, NULL),
(38, 'undefined\r\ntest 4', '2017-06-05 21:27:14.607000', NULL, 1, 24, 10, NULL),
(39, 'test 1', '2017-06-05 21:29:17.200000', NULL, 1, 23, 10, NULL),
(40, 'test 2', '2017-06-05 21:31:47.640000', NULL, 1, 23, 10, NULL),
(41, 'test 3', '2017-06-05 21:33:36.073000', NULL, 1, 23, 10, NULL),
(42, 'test 4', '2017-06-05 21:36:11.843000', NULL, 1, 23, 10, NULL),
(43, 'test 5', '2017-06-05 22:07:30.197000', NULL, 1, 23, 10, NULL),
(44, 'test 6', '2017-06-05 22:07:57.833000', NULL, 1, 23, 10, NULL),
(45, 'test 7', '2017-06-05 22:10:38.907000', NULL, 1, 23, 10, NULL),
(46, 'test 8', '2017-06-05 22:12:13.780000', NULL, 1, 23, 10, NULL),
(47, 'test 9', '2017-06-05 22:12:35.583000', NULL, 1, 23, 10, NULL),
(48, 'test 10', '2017-06-05 22:13:36.317000', NULL, 1, 23, 10, NULL),
(49, 'test 11', '2017-06-05 22:14:11.667000', NULL, 1, 23, 10, NULL),
(50, 'mensaje test largo mensaje test largo mensaje test largo mensaje test largomensaje test largomensaje test largo mensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largomensaje test largo', '2017-06-05 22:18:41.587000', NULL, 1, 23, 10, NULL),
(51, 'test 6', '2017-06-05 22:47:39.103000', NULL, 1, 24, 10, NULL),
(52, 'test 7', '2017-06-05 22:52:00.807000', NULL, 1, 24, 10, NULL),
(53, 'test 8', '2017-06-05 22:57:33.943000', NULL, 1, 24, 10, NULL),
(54, 'test 9', '2017-06-05 23:05:04.587000', NULL, 1, 24, 10, NULL),
(55, 'test 10', '2017-06-05 23:09:22.907000', NULL, 1, 24, 10, NULL),
(56, 'test 11', '2017-06-05 23:10:01.780000', NULL, 1, 24, 10, NULL),
(57, 'test 12', '2017-06-06 08:44:53.650000', NULL, 1, 24, 10, NULL),
(58, 'test 13', '2017-06-06 08:46:10.497000', NULL, 1, 24, 10, NULL),
(59, 'test 14', '2017-06-06 09:16:14.653000', NULL, 1, 24, 10, NULL),
(60, 'test 15', '2017-06-06 09:21:59.590000', NULL, 1, 24, 10, NULL),
(61, 'test 16', '2017-06-06 09:22:28.640000', NULL, 1, 24, 10, NULL),
(62, 'test 1', '2017-06-06 09:46:33.847000', NULL, 1, 22, 10, NULL),
(63, 'test 2', '2017-06-06 10:00:46.707000', NULL, 1, 22, 10, NULL),
(64, 'test 1', '2017-06-06 18:50:46.527000', NULL, 1, 31, 5, NULL),
(65, 'comentario 1', '2017-06-13 20:10:23.437000', NULL, 1, 3, 10, NULL),
(66, 'comentario ', '2017-06-13 20:46:59.410000', NULL, 1, 24, 10, NULL),
(67, 'comentario', '2017-06-13 21:09:00.733000', NULL, 1, 24, 10, NULL),
(68, 'comentario', '2017-06-13 21:15:12.873000', NULL, 1, 24, 10, NULL),
(69, 'comentario', '2017-06-13 21:17:07.700000', NULL, 1, 24, 10, NULL),
(70, 'mensaje', '2017-06-13 21:17:38.353000', NULL, 1, 24, 10, NULL),
(71, 'mensaje', '2017-06-13 21:19:30.780000', NULL, 1, 15, 10, NULL),
(72, 'mensaje 2', '2017-06-13 21:20:01.473000', NULL, 1, 15, 10, NULL),
(73, 'mensaje', '2017-06-13 21:51:40.537000', NULL, 1, 24, 10, NULL),
(74, 'mensaje', '2017-06-13 21:53:59.800000', NULL, 1, 24, 10, NULL),
(75, 'mensaje 4\r\n', '2017-06-13 21:55:28.933000', NULL, 1, 31, 5, NULL),
(76, 'mensaje 5', '2017-06-13 21:55:52.877000', NULL, 1, 31, 5, NULL),
(77, 'mensaje 6', '2017-06-13 21:56:05.767000', NULL, 1, 31, 5, NULL),
(78, 'mensaje 7', '2017-06-13 21:56:30.270000', NULL, 1, 31, 5, NULL),
(79, 'mensaje 1', '2017-06-14 20:17:21.140000', NULL, 5, 24, 10, NULL),
(80, 'mensaje 2', '2017-06-14 20:17:47.920000', NULL, 5, 24, 10, NULL),
(81, 'mensaje 3', '2017-06-14 20:20:44.550000', NULL, 5, 24, 10, NULL),
(82, 'mensaje 4', '2017-06-14 20:23:05.233000', NULL, 5, 24, 10, NULL),
(83, 'mensaje 4', '2017-06-14 20:23:48.320000', NULL, 5, 24, 10, NULL),
(84, 'mensaje 5', '2017-06-14 20:24:38.267000', NULL, 5, 24, 10, NULL),
(85, 'mensaje 4', '2017-06-16 11:18:59.937000', NULL, 1, 15, 10, NULL),
(86, 'mensaje 7', '2017-06-16 11:19:28.637000', NULL, 1, 15, 10, NULL),
(87, 'mensaje 8', '2017-06-16 11:20:01.583000', NULL, 1, 15, 10, NULL),
(88, 'Prueba de comentario', '2017-07-13 17:07:14.323000', NULL, 5, 15, 10, NULL),
(89, '', '2017-07-18 16:38:59.323000', NULL, 6, 18, 10, NULL),
(90, 'prueba ', '2017-07-18 16:44:22.960000', NULL, 1, 3, 10, NULL),
(91, 'hola mundo prueb a', '2017-07-18 16:54:39.540000', NULL, 6, 4, 10, NULL),
(92, 'prueba 2\r\n', '2017-07-18 16:55:00.540000', NULL, 6, 4, 10, NULL),
(93, 'test1 ', '2017-07-18 17:00:59.197000', NULL, 6, 43, 10, NULL),
(94, '', '2017-07-19 10:20:58.390000', NULL, 1, 44, 10, NULL),
(95, 'prueba 1', '2017-07-19 10:26:52.627000', NULL, 6, 44, 10, NULL),
(96, 'pruwb2 ', '2017-07-19 13:41:20.110000', NULL, 6, 44, 10, NULL),
(97, 'prueba 3', '2017-07-19 13:41:41.243000', NULL, 6, 44, 10, NULL),
(98, 'prueba4 ', '2017-07-19 13:41:58.900000', NULL, 6, 44, 10, NULL),
(99, 'prueba 5', '2017-07-19 13:42:12.553000', NULL, 6, 44, 10, NULL),
(100, 'prueba 6', '2017-07-19 13:42:23.617000', NULL, 6, 44, 10, NULL),
(101, 'prueba7', '2017-07-19 13:42:35.587000', NULL, 6, 44, 10, NULL),
(102, 'prueba8\r\n', '2017-07-19 13:42:46.643000', NULL, 6, 44, 10, NULL),
(103, 'prueba8', '2017-07-19 13:43:08.790000', NULL, 6, 44, 10, NULL),
(104, 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '2017-07-19 13:44:00.523000', NULL, 6, 44, 10, NULL),
(105, 'Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. ', '2017-07-19 13:44:45.743000', NULL, 6, 44, 10, NULL),
(106, 'El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\"', '2017-07-19 13:45:18.820000', NULL, 6, 44, 10, NULL),
(107, 'Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto.', '2017-07-19 13:45:55.460000', NULL, 6, 44, 10, NULL),
(108, 'Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable.', '2017-07-19 13:47:11.697000', NULL, 6, 44, 10, NULL),
(109, 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', '2017-07-19 13:47:42.527000', NULL, 6, 44, 10, NULL),
(110, ' (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", viene de una linea en la sección 1.10.32', '2017-07-19 13:48:14.180000', NULL, 6, 44, 10, NULL),
(111, 'McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, \"consecteur\", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de \"de Finnibus Bonorum et Malorum\"', '2017-07-19 13:48:48.243000', NULL, 6, 44, 10, NULL),
(112, 'rem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeca, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio', '2017-07-19 13:49:34.787000', NULL, 6, 44, 10, NULL),
(113, 'hoal esto es una prueba de jacobo ', '2017-07-19 15:46:24.430000', NULL, 6, 44, 10, NULL),
(114, 'Como va este requerimiento, no veo el avance', '2017-12-01 11:21:41.410000', NULL, 1, 3, 10, 1),
(115, 'Hola amigos', '2017-12-05 14:47:56.427000', NULL, 1, 3, NULL, 1),
(116, 'Que paso ayer?', '2017-12-07 09:51:29.097000', NULL, 1, 3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_list`
--

CREATE TABLE `config_list` (
  `id_profile` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `enableList` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config_list`
--

INSERT INTO `config_list` (`id_profile`, `id_list`, `enableList`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2017-05-10 20:53:00', '2017-05-10 20:53:00'),
(1, 2, 0, '2017-05-10 20:53:00', '2017-05-10 20:53:00'),
(1, 3, 0, '2017-05-10 20:55:00', NULL),
(1, 4, 0, '2017-05-10 20:55:00', NULL),
(1, 5, 0, '2017-05-10 20:55:00', NULL),
(1, 6, 1, '2017-05-10 20:55:00', NULL),
(2, 1, 0, '2017-06-02 14:10:00', NULL),
(2, 2, 0, '2017-06-02 14:10:00', NULL),
(2, 3, 0, '2017-06-02 14:10:00', NULL),
(2, 4, 0, '2017-06-02 14:10:00', NULL),
(2, 5, 0, '2017-06-02 14:10:00', NULL),
(2, 6, 0, '2017-06-02 14:10:00', NULL),
(3, 1, 1, '2017-06-02 14:11:00', NULL),
(3, 2, 1, '2017-06-02 14:11:00', NULL),
(3, 3, 0, '2017-06-02 14:11:00', NULL),
(3, 4, 0, '2017-06-02 14:11:00', NULL),
(3, 5, 0, '2017-06-02 14:11:00', NULL),
(3, 6, 0, '2017-06-02 14:11:00', NULL),
(4, 1, 0, '2017-06-02 14:11:00', NULL),
(4, 2, 0, '2017-06-02 14:11:00', NULL),
(4, 3, 1, '2017-06-02 14:11:00', NULL),
(4, 4, 0, '2017-06-02 14:11:00', NULL),
(4, 5, 0, '2017-06-02 14:11:00', NULL),
(4, 6, 0, '2017-06-02 14:11:00', NULL),
(5, 1, 0, '2017-06-02 14:11:00', NULL),
(5, 2, 0, '2017-06-02 14:11:00', NULL),
(5, 3, 1, '2017-06-02 14:11:00', NULL),
(5, 4, 0, '2017-06-02 14:11:00', NULL),
(5, 5, 0, '2017-06-02 14:11:00', NULL),
(5, 6, 0, '2017-06-02 14:11:00', NULL),
(6, 1, 0, '2017-06-02 14:11:00', NULL),
(6, 2, 0, '2017-06-02 14:11:00', NULL),
(6, 3, 0, '2017-06-02 14:11:00', NULL),
(6, 4, 0, '2017-06-02 14:11:00', NULL),
(6, 5, 1, '2017-06-02 14:11:00', NULL),
(6, 6, 0, '2017-06-02 14:11:00', NULL),
(7, 1, 0, '2017-06-02 14:12:00', NULL),
(7, 2, 0, '2017-06-02 14:12:00', NULL),
(7, 3, 0, '2017-06-02 14:12:00', NULL),
(7, 4, 0, '2017-06-02 14:12:00', NULL),
(7, 5, 0, '2017-06-02 14:12:00', NULL),
(7, 6, 0, '2017-06-02 14:12:00', NULL),
(8, 1, 0, '2017-06-02 14:12:00', NULL),
(8, 2, 0, '2017-06-02 14:12:00', NULL),
(8, 3, 0, '2017-06-02 14:12:00', NULL),
(8, 4, 1, '2017-06-02 14:12:00', NULL),
(8, 5, 0, '2017-06-02 14:12:00', NULL),
(8, 6, 0, '2017-06-02 14:12:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cycle`
--

CREATE TABLE `cycle` (
  `id_cycle` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `start_at` datetime DEFAULT NULL,
  `finalize_at` datetime DEFAULT NULL,
  `id_year` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cycle`
--

INSERT INTO `cycle` (`id_cycle`, `title`, `description_`, `start_at`, `finalize_at`, `id_year`, `created_at`, `updated_at`, `active`) VALUES
(1, '08 (Abril-4 Mayo-5)', 'Ciclo 08 de 2017', '2017-04-24 00:00:00', '2017-05-05 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(2, '09 (Mayo-8 Mayo-19)', 'Ciclo 09 (Mayo-8 Mayo-19)', '2017-05-08 00:00:00', '2017-05-19 00:00:00', 2, '2017-07-14 12:06:00', '2017-12-05 09:28:00', 1),
(3, '10', 'Ciclo 10 de 2017', '2017-05-22 00:00:00', '2017-06-02 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(4, '11', 'Ciclo 11 de 2017', '2017-06-05 00:00:00', '2017-06-16 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(5, '12', 'Ciclo 12 de 2017', '2017-06-19 00:00:00', '2017-06-30 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(6, '13', 'Ciclo 13 de 2017', '2017-07-03 00:00:00', '2017-07-14 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(7, '14', 'Ciclo 14 de 2017', '2017-07-17 00:00:00', '2017-07-28 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(8, '15', 'Ciclo 15 de 2017', '2017-07-31 00:00:00', '2017-08-11 00:00:00', 2, '2017-07-14 12:06:00', NULL, NULL),
(9, '16 (Set22 - Oct 1)', 'Ciclo 16 (Set22 - Oct 1)', NULL, NULL, 2, '2017-12-05 09:29:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs_audit`
--

CREATE TABLE `logs_audit` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_obj` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `active` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `node_project`
--

CREATE TABLE `node_project` (
  `id_node` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `id_project` int(11) DEFAULT NULL,
  `id_pre` int(11) DEFAULT NULL,
  `id_next` int(11) DEFAULT NULL,
  `id_main_case` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE `objects` (
  `id_obj` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `active` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `option_list`
--

CREATE TABLE `option_list` (
  `id_olist` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `query_string` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `option_list`
--

INSERT INTO `option_list` (`id_olist`, `title`, `description_`, `query_string`, `created_at`, `updated_at`) VALUES
(1, 'Casos Propios', '...', 'select * from case_identity where id_analyst = profile ', NULL, NULL),
(2, 'Casos Relacionados', '...', 'select * from case_identity where analysts_related like ?profile? ', NULL, NULL),
(3, 'Casos Ingresados', 'Los casos de los solicitantes', 'select * from case_identity where id_requester = profile ', NULL, NULL),
(4, 'Casos de la unidad', 'Los casos de los equipos seccionados por el lider', 'select * from case_identity AS c inner join users AS u ON c.id_analyst = u.id_user\r\nWHERE u.id_boss = profile', NULL, NULL),
(5, 'Casos por Jefes', 'Los casos de los equipos seccionados por el lider', 'select * from case_identity as caso inner join users on users.id_vp = caso.id_vp where users.id_user = profile ', NULL, NULL),
(6, 'Todos', 'Todos los casos sin filtro', 'select * from case_identity ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `priority_case`
--

CREATE TABLE `priority_case` (
  `id_priority` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `priority_case`
--

INSERT INTO `priority_case` (`id_priority`, `title`, `description_`, `created_at`, `updated_at`, `id_parent`, `active`) VALUES
(1, 'Urgente', NULL, NULL, '2017-08-25 14:18:00', NULL, NULL),
(2, 'Crítica', NULL, NULL, '2017-08-25 14:17:00', NULL, NULL),
(3, 'Mayor', NULL, NULL, '2017-08-25 14:17:00', NULL, NULL),
(4, 'Menor', NULL, NULL, '2017-08-25 14:17:00', NULL, NULL),
(5, 'Trivial', NULL, NULL, '2017-08-25 14:18:00', NULL, NULL),
(6, 'test', 'test super test test test', '2017-06-20 09:02:00', '2017-07-02 22:32:00', NULL, NULL),
(7, 'La de Robert', 'Crítica', '2017-08-25 10:34:00', '2017-10-30 10:47:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id_profile` int(11) NOT NULL,
  `id_screen` int(11) NOT NULL,
  `p_access` tinyint(1) DEFAULT '0',
  `p_create` tinyint(1) DEFAULT '0',
  `p_read` tinyint(1) DEFAULT '0',
  `p_update` tinyint(1) DEFAULT '0',
  `p_delete` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id_profile`, `id_screen`, `p_access`, `p_create`, `p_read`, `p_update`, `p_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '2017-02-09 16:20:00', '2017-06-02 10:53:00'),
(1, 2, 1, 1, 1, 1, 1, '2017-02-09 16:20:00', '2017-02-23 15:13:00'),
(1, 3, 1, 1, 1, 1, 1, '2017-02-09 16:20:00', '2017-10-13 09:34:00'),
(1, 4, 1, 1, 1, 1, 1, '2017-02-09 16:20:00', '2017-10-13 09:36:00'),
(1, 5, 0, 0, 0, 0, 0, '2017-02-17 16:32:00', '2017-10-12 10:53:00'),
(1, 6, 0, 0, 0, 0, 0, '2017-02-17 16:34:00', '2017-10-12 10:54:00'),
(1, 7, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-10-12 10:54:00'),
(1, 8, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:15:00'),
(1, 9, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:15:00'),
(1, 10, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:16:00'),
(1, 11, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:16:00'),
(1, 12, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:16:00'),
(1, 13, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-06-02 11:04:00'),
(1, 14, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-06-02 11:05:00'),
(1, 15, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:17:00'),
(1, 16, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:18:00'),
(1, 17, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:18:00'),
(1, 18, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:18:00'),
(1, 19, 1, 1, 1, 1, 1, '2017-02-17 16:34:00', '2017-02-23 15:19:00'),
(1, 20, 1, 1, 1, 1, 1, '2017-12-05 09:12:00', NULL),
(1, 21, 1, 1, 1, 1, 1, '2017-12-05 09:13:00', NULL),
(1, 22, 1, 1, 1, 1, 1, '2017-12-05 09:13:00', NULL),
(2, 1, 1, 1, 0, 0, 0, '2017-02-14 10:44:00', '2017-02-14 15:49:00'),
(2, 2, 0, 0, 0, 0, 0, '2017-02-14 12:33:00', '2017-02-14 15:31:00'),
(2, 3, 0, 0, 0, 0, 0, '2017-06-02 13:28:00', NULL),
(2, 4, 0, 0, 0, 0, 0, '2017-06-02 13:29:00', NULL),
(2, 5, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 6, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 7, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 8, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 9, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 10, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 11, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 12, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 13, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 14, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 15, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 16, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 17, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 18, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 19, 0, 0, 0, 0, 0, '2017-06-02 13:45:00', NULL),
(2, 20, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(2, 21, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(2, 22, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(3, 1, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 2, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 3, 1, 1, 1, 1, 1, '2017-06-02 14:00:00', '2017-06-02 14:19:00'),
(3, 4, 1, 1, 1, 1, 1, '2017-06-02 14:00:00', '2017-06-02 14:20:00'),
(3, 5, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 6, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 7, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 8, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 9, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 10, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 11, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 12, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 13, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 14, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 15, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 16, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 17, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 18, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 19, 0, 0, 0, 0, 0, '2017-06-02 14:00:00', NULL),
(3, 20, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(3, 21, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(3, 22, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(4, 1, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', '2017-08-25 13:52:00'),
(4, 2, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 3, 1, 1, 1, 1, 1, '2017-06-02 14:01:00', '2017-09-18 12:27:00'),
(4, 4, 1, 1, 0, 0, 0, '2017-06-02 14:01:00', '2017-11-10 11:52:00'),
(4, 5, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', '2017-08-25 13:53:00'),
(4, 6, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', '2017-08-25 13:53:00'),
(4, 7, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 8, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 9, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', '2017-08-25 13:54:00'),
(4, 10, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 11, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 12, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', '2017-08-25 14:01:00'),
(4, 13, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 14, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 15, 1, 1, 1, 1, 1, '2017-06-02 14:01:00', '2017-08-25 13:54:00'),
(4, 16, 1, 1, 1, 1, 1, '2017-06-02 14:01:00', '2017-08-25 13:59:00'),
(4, 17, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 18, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 19, 0, 0, 0, 0, 0, '2017-06-02 14:01:00', NULL),
(4, 20, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(4, 21, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(4, 22, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(5, 1, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 2, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 3, 1, 1, 1, 1, 1, '2017-06-02 14:02:00', '2017-06-02 14:24:00'),
(5, 4, 1, 1, 1, 1, 1, '2017-06-02 14:02:00', '2017-06-02 14:24:00'),
(5, 5, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 6, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 7, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 8, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 9, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 10, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 11, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 12, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 13, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 14, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 15, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 16, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 17, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 18, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 19, 0, 0, 0, 0, 0, '2017-06-02 14:02:00', NULL),
(5, 20, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(5, 21, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(5, 22, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(6, 1, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 2, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 3, 1, 0, 1, 0, 0, '2017-06-02 14:03:00', '2017-10-19 23:07:00'),
(6, 4, 1, 0, 1, 0, 0, '2017-06-02 14:03:00', '2017-10-19 23:08:00'),
(6, 5, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 6, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 7, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 8, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 9, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 10, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 11, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 12, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 13, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 14, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 15, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 16, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 17, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 18, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 19, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(6, 20, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(6, 21, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(6, 22, 0, 0, 0, 0, 0, '2017-12-05 09:15:00', NULL),
(7, 1, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 2, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 3, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 4, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 5, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 6, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 7, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 8, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 9, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 10, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 11, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 12, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 13, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 14, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 15, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 16, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 17, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 18, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 19, 0, 0, 0, 0, 0, '2017-06-02 14:03:00', NULL),
(7, 20, 0, 0, 0, 0, 0, '2017-12-05 09:16:00', NULL),
(7, 21, 0, 0, 0, 0, 0, '2017-12-05 09:16:00', NULL),
(7, 22, 0, 0, 0, 0, 0, '2017-12-05 09:16:00', NULL),
(8, 1, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 2, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 3, 1, 1, 1, 1, 0, '2017-06-02 14:04:00', '2017-11-09 11:58:00'),
(8, 4, 1, 1, 1, 1, 0, '2017-06-02 14:04:00', '2017-11-09 11:58:00'),
(8, 5, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 6, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 7, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 8, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 9, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 10, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 11, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 12, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 13, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 14, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 15, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 16, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 17, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 18, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 19, 0, 0, 0, 0, 0, '2017-06-02 14:04:00', NULL),
(8, 20, 0, 0, 0, 0, 0, '2017-12-05 09:17:00', NULL),
(8, 21, 0, 0, 0, 0, 0, '2017-12-05 09:17:00', NULL),
(8, 22, 0, 0, 0, 0, 0, '2017-12-05 09:17:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `title`, `description_`, `created_at`, `updated_at`, `active`) VALUES
(1, 'admin', '...', NULL, NULL, NULL),
(2, 'boss_departament', '...', NULL, NULL, NULL),
(3, 'analyst', '...', NULL, NULL, NULL),
(4, 'user_requester', '...', NULL, NULL, NULL),
(5, 'programmer', '...', NULL, NULL, NULL),
(6, 'boss_vp', '...', NULL, NULL, NULL),
(7, 'leader_pro', '...', NULL, NULL, NULL),
(8, 'leader_ana', '...', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `observations` longtext,
  `start_at` datetime DEFAULT NULL,
  `finalize_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `title`, `description_`, `observations`, `start_at`, `finalize_at`, `created_at`, `updated_at`, `active`) VALUES
(1, 'MWallet', 'Alcance general del proyecto OCB', 'Billetera electrónica de Banco Atlántida', '2018-07-05 15:38:47', '2018-07-05 15:38:47', '2018-07-04 10:52:10', NULL, NULL),
(2, 'OCB', 'Alcance general del proyecto mWallet', 'Omnicanalidad de Banco Atlántida, OnmiChanel Banking ', '2018-07-05 00:00:00', '2018-07-27 00:00:00', '2018-07-04 10:52:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `screen_system`
--

CREATE TABLE `screen_system` (
  `id_screen` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `screen_system`
--

INSERT INTO `screen_system` (`id_screen`, `id_parent`, `title`, `description_`, `created_at`, `updated_at`) VALUES
(1, NULL, 'autentication', '/', '2017-02-09 14:27:00', NULL),
(2, NULL, 'dashboard', 'dashboard/', '2017-02-09 14:33:00', NULL),
(3, NULL, 'cases', 'dashboard/cases', '2017-02-09 14:34:00', NULL),
(4, 3, 'case', 'dashboard/case', '2017-02-09 14:35:00', NULL),
(5, NULL, 'statistic', 'statistic/', '2017-02-17 15:36:00', NULL),
(6, 5, 'reports', 'statistic/reports', '2017-02-17 15:37:00', NULL),
(7, 5, 'graphics', 'statistic/graphics', '2017-02-17 15:37:00', NULL),
(8, NULL, 'maintenance', 'maintenance/', '2017-02-17 15:41:00', NULL),
(9, 8, 'users', 'maintenance/users', '2017-02-17 15:46:00', NULL),
(10, 8, 'requester', 'maintenance/requester', '2017-02-17 15:46:00', NULL),
(11, 8, 'systems', 'maintenance/systems', '2017-02-17 15:46:00', NULL),
(12, 8, 'priority', 'maintenance/priority', '2017-02-17 15:46:00', NULL),
(13, 8, 'stage', 'maintenance/stage', '2017-02-17 15:46:00', NULL),
(14, 8, 'cycles', 'maintenance/cycles', '2017-02-17 15:55:00', NULL),
(15, NULL, 'security', 'security/', '2017-02-17 15:59:00', NULL),
(16, 14, 'profiles', 'security/profiles', '2017-02-17 15:59:00', NULL),
(17, 14, 'profile', 'security/profile', '2017-02-17 15:59:00', NULL),
(18, 14, 'security_users', 'security/users', '2017-02-17 15:59:00', NULL),
(19, 14, 'security_user', 'security/user', '2017-02-17 15:59:00', NULL),
(20, NULL, 'auditory', 'logs/index', '2017-12-05 08:52:00', NULL),
(21, NULL, 'projects', 'dashboard/projects', '2017-12-05 09:09:00', NULL),
(22, 21, 'project', 'dashboard/project', '2017-12-05 09:10:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id_stage`, `title`, `description_`, `created_at`, `updated_at`, `id_parent`, `active`) VALUES
(1, 'Pre-Analisis (Minuta)', '...', '2017-01-01 00:00:00', '2017-07-01 22:42:00', 2, NULL),
(2, 'Análisis', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(3, 'Diseño', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(4, 'Desarollo', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(5, 'Pruebas', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(6, 'Certificación', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(7, 'Precertificación', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(8, 'Implementación', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(9, 'Soporte', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(10, 'Final', 'jjjjjjjjjjjjjjjj', '2017-06-19 01:06:00', NULL, 8, NULL),
(11, 'En Investigación', NULL, '2017-08-25 14:20:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_case`
--

CREATE TABLE `status_case` (
  `id_status` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_case`
--

INSERT INTO `status_case` (`id_status`, `title`, `description_`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Iniciado', '...', '2017-07-14 12:11:00', NULL, NULL),
(2, 'Proceso', '...', '2017-07-14 12:11:00', NULL, NULL),
(3, 'Terminada', '...', '2017-07-14 12:11:00', NULL, NULL),
(4, 'Pendiente', '...', '2017-07-14 12:11:00', NULL, NULL),
(5, 'Suspendida', '...', '2017-07-14 12:11:00', NULL, NULL),
(6, 'Anulada', '...', '2017-07-14 12:11:00', NULL, NULL),
(7, 'Creado', '...', '2017-07-14 12:26:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_`
--

CREATE TABLE `system_` (
  `id_system` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_`
--

INSERT INTO `system_` (`id_system`, `title`, `description_`, `created_at`, `updated_at`, `id_parent`, `active`) VALUES
(1, 'IBS ', 'Este es el core Financiero', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(2, 'e IBS', '...test super, menos super', '2017-01-01 00:00:00', '2017-07-02 22:32:00', NULL, NULL),
(3, 'Casos', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(4, 'Caso', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(5, 'Reportes', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(6, 'Mantenimiento', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(7, 'Auditoria', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(8, 'Seguridad', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(9, 'Configuración', '...', '2017-01-01 00:00:00', '2017-01-03 00:00:00', NULL, NULL),
(10, 'Open Text', 'Sistema de manejo de archivo de clientes, al parecer lo aloja Telesoft', NULL, NULL, NULL, NULL),
(11, 'Aplicaciones Varias', 'Esta apartado de aplicaciones son se pegan a diferentes servicios del banco incluyendo el core.', '2017-06-20 19:56:00', '2017-07-01 12:45:00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_bank`
--

CREATE TABLE `system_bank` (
  `id_system_bank` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `description_` longtext,
  `id_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id_upload` int(11) NOT NULL,
  `path_file` varchar(100) DEFAULT NULL,
  `description_` longtext,
  `id_screen` int(11) DEFAULT NULL,
  `id_reference` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id_upload`, `path_file`, `description_`, `id_screen`, `id_reference`, `created_at`, `updated_at`, `active`) VALUES
(1, '../uploads/cases/31/gant_ss.png', 'Referencia para caso con id 31  ', 3, 31, '2017-07-17 22:41:00', NULL, NULL),
(2, '../uploads/cases/24/Administración_de_Contratos_en_la_Empresa_Soy_Servidor.pdf', 'Referencia para caso con id 24  ', 3, 24, '2017-07-18 00:05:00', NULL, NULL),
(3, '../uploads/cases/24/gant_ss.png', 'Referencia para caso con id 24  ', 3, 24, '2017-07-18 00:06:00', NULL, NULL),
(4, '../uploads/cases/43/Req..txt', 'Referencia para caso con id 43  ', 3, 43, '2017-07-18 17:04:00', NULL, NULL),
(5, '../uploads/cases/40/Chart.png', 'Referencia para caso con id 40  ', 3, 40, '2017-08-25 10:07:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id_profile` int(11) DEFAULT NULL,
  `id_boss` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `id_vp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `pass`, `email`, `birthday`, `id_profile`, `id_boss`, `created_at`, `updated_at`, `active`, `id_vp`) VALUES
(1, 'Superuser', 'DEVELOPER', 'fy9UMXWZGidzAlr9i1hgXA==', 'javasquez@bancatlan.hn', '1987-04-15', 1, NULL, NULL, NULL, 0, NULL),
(2, 'Mabel Eguigurems', 'meguigurems', 'fy9UMXWZGidzAlr9i1hgXA==', 'meguigurems@bancatlan.hn', NULL, 2, NULL, NULL, NULL, 0, NULL),
(3, 'Ricardo Aguilar', 'raguilar', 'fy9UMXWZGidzAlr9i1hgXA==', 'raguilar@bancatlan.hn', NULL, 2, NULL, NULL, NULL, 0, NULL),
(4, 'Luis Martinez', 'lmartinez', 'fy9UMXWZGidzAlr9i1hgXA==', 'lmartinez@bancatlan.hn', NULL, 2, NULL, NULL, NULL, 0, NULL),
(5, 'Jacobo Vasquez', 'javasquez', 'fy9UMXWZGidzAlr9i1hgXA==', 'javasquez@bancatlan.hn', '1900-01-01', 3, NULL, NULL, NULL, 0, NULL),
(6, 'Ariel Betancourt', 'abetancourt', 'fy9UMXWZGidzAlr9i1hgXA==', 'abetancourt@bancatlan.hn', '1900-01-01', 3, 9, NULL, NULL, 1, NULL),
(8, 'INFATLAN', 'INFATLAN1', 'buY87ijFhCMNORKynMAV9w==', 'no-reply@bancatlan.hn', '1900-01-01', 5, NULL, NULL, NULL, 0, NULL),
(9, 'Luis Migel Rodriguez', 'lmrodriguez', 'fy9UMXWZGidzAlr9i1hgXA==', 'lmrodriguez@bancatlan.hn', NULL, 8, NULL, NULL, NULL, 0, NULL),
(10, 'Bessy Chong', 'requester1', 'fy9UMXWZGidzAlr9i1hgXA==', 'bchong@bancatlan.hn', NULL, 4, NULL, NULL, NULL, 0, NULL),
(11, 'Maria Suyapa Hernandez', 'requester2', 'fy9UMXWZGidzAlr9i1hgXA==', 'mshernandez@bancatlan.hn', NULL, 4, NULL, NULL, NULL, 0, NULL),
(12, 'Armando Jose Casco ', 'requester3', 'fy9UMXWZGidzAlr9i1hgXA==', 'acasco@bancatlan.hn', '1900-01-01', 4, NULL, NULL, NULL, 1, NULL),
(13, 'Nelson Rodriguez', 'analista2', 'fy9UMXWZGidzAlr9i1hgXA==', 'nrodriguez@bancatlan.hn', '1986-12-10', 3, 9, NULL, NULL, 0, NULL),
(14, 'Roberto Escalante', 'rescalante', 'AyASPhDCyLaLbewFxjiXVg==', 'rescalante@banctlan.hn', '1900-01-01', 3, NULL, '2017-07-17 18:13:00', NULL, 1, NULL),
(15, 'Lider 1', 'leader1', 'drRmQC8S6p/80V0qMJg4Sw==', 'no-reply@bancatlan.hn', '1900-01-01', 8, NULL, '2017-07-17 23:49:00', NULL, 0, NULL),
(16, 'Lider 2', 'leader2', 'drRmQC8S6p/80V0qMJg4Sw==', 'no-replay@bancatlan.hn', '1900-01-01', 8, NULL, '2017-07-18 00:11:00', NULL, 0, NULL),
(17, 'Analista 1', 'analista1', '56PKuQegJeP3Rli8GyEnWw==', 'abetancourt@bancatlan.hn', '1900-01-01', 3, NULL, '2017-07-18 16:50:00', NULL, 1, NULL),
(18, 'Luis Vallecillo', 'lvallecillo', 'REl45AGNNBsDoMm/hOYZYw==', 'lvallecillo@bancatlan.hn', '1900-01-01', 3, NULL, '2017-07-19 16:54:00', NULL, 0, NULL),
(19, 'Evelin Avila', 'eavilas', 'Whr7V4tP1YOne7xoM3pzhA==', 'eavilas@bancatlan.hn', '1900-01-01', 3, 21, '2017-10-27 10:00:00', NULL, 1, 6),
(20, 'Roberto Alvarez', 'ralvarez', 'OW40Glg53H1XRAZocmCTEA==', 'raalvarez@bancatlan.hn', '1900-01-01', 3, 21, '2017-11-06 16:00:00', NULL, 1, 6),
(21, 'Diana', 'dleiva', 'pGJCeHeH32LfBtDhNwo7ww==', 'dleiva@bancatlan.hn', '1900-01-01', 8, NULL, '2017-11-06 17:59:00', NULL, 1, 6),
(22, NULL, 'javasquez', 'qwwQA/5agp0J2fq+K18wBw==', 'javasquez@bancatlan.hn', NULL, NULL, NULL, '2017-11-23 09:27:00', NULL, 0, NULL),
(23, NULL, 'javasquez', 'qwwQA/5agp0J2fq+K18wBw==', 'javasquez@bancatlan.hn', NULL, NULL, NULL, '2017-11-23 11:47:00', NULL, 0, NULL),
(24, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@csumb.edu', '1997-11-08', 1, NULL, '2018-06-25 14:56:31', '2018-07-05 21:25:36', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vp`
--

CREATE TABLE `vp` (
  `id_vp` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `id_parent` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vp`
--

INSERT INTO `vp` (`id_vp`, `title`, `description_`, `id_parent`, `created_at`, `updated_at`, `active`) VALUES
(1, 'Operaciones', 'Esta area tiene muchas bifurcaciones hacer a esta endidad otro campo que diga su padre y madre!fach', NULL, NULL, NULL, NULL),
(2, 'RRHH', 'una de sus funciones principales seria la adquisición de nuevo talento', NULL, NULL, NULL, NULL),
(3, 'Contabilidad', 'Es una area muy importante en el Banco', NULL, NULL, NULL, NULL),
(4, 'Marketing', 'Esta area tiene muchas bifurcaciones hacer a esta endidad otro campo que diga su padre y madre!', NULL, NULL, NULL, NULL),
(5, 'Cumplimiento', 'Esta area tiene muchas bifurcaciones hacer a esta endidad otro campo que diga su padre y madre!', 2, NULL, '2017-07-01 23:05:00', NULL),
(6, 'Innovación', 'Esta area tiene muchas bifurcaciones hacer a esta endidad otro campo que diga su padre y madre!', NULL, NULL, NULL, NULL),
(7, 'test', 'test ...', 6, '2017-07-01 23:33:00', '2017-07-01 23:34:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `year_cycle`
--

CREATE TABLE `year_cycle` (
  `id_yc` int(11) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `description_` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year_cycle`
--

INSERT INTO `year_cycle` (`id_yc`, `title`, `description_`, `created_at`, `updated_at`, `active`) VALUES
(1, '2016', '...', '2017-07-13 15:48:00', NULL, NULL),
(2, '2017', '...', '2017-07-13 15:49:00', NULL, NULL),
(3, '2018', '...', '2017-07-13 15:49:00', NULL, NULL),
(4, '2019', '...', '2017-07-13 15:49:00', NULL, NULL),
(5, '2020', '...', '2017-07-13 15:49:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_identity`
--
ALTER TABLE `case_identity`
  ADD PRIMARY KEY (`id_case`),
  ADD KEY `FK__case_iden__id_an__72C60C4A` (`id_analyst`),
  ADD KEY `FK__case_iden__id_cy__73BA3083` (`id_cycle`),
  ADD KEY `FK__case_iden__id_le__74AE54BC` (`id_leader`),
  ADD KEY `FK__case_iden__id_no__75A278F5` (`id_node_project`),
  ADD KEY `FK__case_iden__id_pr__76969D2E` (`id_programmer`),
  ADD KEY `FK__case_iden__id_pr__778AC167` (`id_priority`),
  ADD KEY `FK__case_iden__id_pr__787EE5A0` (`id_project`),
  ADD KEY `FK__case_iden__id_re__797309D9` (`id_requester`),
  ADD KEY `FK__case_iden__id_re__7A672E12` (`id_relationed_case`),
  ADD KEY `FK__case_iden__id_st__7B5B524B` (`id_stage`),
  ADD KEY `FK__case_iden__id_st__7C4F7684` (`id_status`),
  ADD KEY `FK__case_iden__id_sy__7D439ABD` (`id_system`),
  ADD KEY `FK__case_iden__id_vp__7E37BEF6` (`id_vp`);

--
-- Indexes for table `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`id_commentary`),
  ADD KEY `FK__commentar__id_re__00200768` (`id_receiver`),
  ADD KEY `FK__commentar__id_se__01142BA1` (`id_sender`),
  ADD KEY `FK__commentar__id_ca__7F2BE32F` (`id_case`);

--
-- Indexes for table `config_list`
--
ALTER TABLE `config_list`
  ADD PRIMARY KEY (`id_profile`,`id_list`),
  ADD KEY `FK__config_li__id_li__02084FDA` (`id_list`);

--
-- Indexes for table `cycle`
--
ALTER TABLE `cycle`
  ADD PRIMARY KEY (`id_cycle`),
  ADD KEY `FK__cycle__id_year__03F0984C` (`id_year`);

--
-- Indexes for table `logs_audit`
--
ALTER TABLE `logs_audit`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `FK__logs_audi__id_ob__04E4BC85` (`id_obj`),
  ADD KEY `FK__logs_audi__id_us__05D8E0BE` (`id_user`);

--
-- Indexes for table `node_project`
--
ALTER TABLE `node_project`
  ADD PRIMARY KEY (`id_node`),
  ADD KEY `FK__node_proj__id_ma__06CD04F7` (`id_main_case`),
  ADD KEY `FK__node_proj__id_ne__07C12930` (`id_next`),
  ADD KEY `FK__node_proj__id_pr__08B54D69` (`id_pre`),
  ADD KEY `FK__node_proj__id_pr__09A971A2` (`id_project`);

--
-- Indexes for table `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id_obj`);

--
-- Indexes for table `option_list`
--
ALTER TABLE `option_list`
  ADD PRIMARY KEY (`id_olist`);

--
-- Indexes for table `priority_case`
--
ALTER TABLE `priority_case`
  ADD PRIMARY KEY (`id_priority`),
  ADD KEY `FK__priority___id_pa__0A9D95DB` (`id_parent`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id_profile`,`id_screen`),
  ADD KEY `FK__privilege__id_sc__0C85DE4D` (`id_screen`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `screen_system`
--
ALTER TABLE `screen_system`
  ADD PRIMARY KEY (`id_screen`),
  ADD KEY `FK__screen_sy__id_pa__0D7A0286` (`id_parent`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD KEY `FK__stage__id_parent__0E6E26BF` (`id_parent`);

--
-- Indexes for table `status_case`
--
ALTER TABLE `status_case`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `system_`
--
ALTER TABLE `system_`
  ADD PRIMARY KEY (`id_system`),
  ADD KEY `FK__system___id_pare__0F624AF8` (`id_parent`);

--
-- Indexes for table `system_bank`
--
ALTER TABLE `system_bank`
  ADD PRIMARY KEY (`id_system_bank`),
  ADD KEY `FK__system_ba__id_pa__10566F31` (`id_parent`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `FK__uploads__id_scre__114A936A` (`id_screen`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK__users__id_boss__123EB7A3` (`id_boss`),
  ADD KEY `FK__users__id_profil__1332DBDC` (`id_profile`),
  ADD KEY `FK__users__id_vp__14270015` (`id_vp`);

--
-- Indexes for table `vp`
--
ALTER TABLE `vp`
  ADD PRIMARY KEY (`id_vp`),
  ADD KEY `FK__vp__id_parent__151B244E` (`id_parent`);

--
-- Indexes for table `year_cycle`
--
ALTER TABLE `year_cycle`
  ADD PRIMARY KEY (`id_yc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_identity`
--
ALTER TABLE `case_identity`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `commentary`
--
ALTER TABLE `commentary`
  MODIFY `id_commentary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `cycle`
--
ALTER TABLE `cycle`
  MODIFY `id_cycle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs_audit`
--
ALTER TABLE `logs_audit`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `node_project`
--
ALTER TABLE `node_project`
  MODIFY `id_node` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `objects`
--
ALTER TABLE `objects`
  MODIFY `id_obj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option_list`
--
ALTER TABLE `option_list`
  MODIFY `id_olist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `priority_case`
--
ALTER TABLE `priority_case`
  MODIFY `id_priority` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `screen_system`
--
ALTER TABLE `screen_system`
  MODIFY `id_screen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status_case`
--
ALTER TABLE `status_case`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_`
--
ALTER TABLE `system_`
  MODIFY `id_system` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `system_bank`
--
ALTER TABLE `system_bank`
  MODIFY `id_system_bank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vp`
--
ALTER TABLE `vp`
  MODIFY `id_vp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `year_cycle`
--
ALTER TABLE `year_cycle`
  MODIFY `id_yc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_identity`
--
ALTER TABLE `case_identity`
  ADD CONSTRAINT `FK__case_iden__id_an__72C60C4A` FOREIGN KEY (`id_analyst`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_cy__73BA3083` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_le__74AE54BC` FOREIGN KEY (`id_leader`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_no__75A278F5` FOREIGN KEY (`id_node_project`) REFERENCES `node_project` (`id_node`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_pr__76969D2E` FOREIGN KEY (`id_programmer`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_pr__778AC167` FOREIGN KEY (`id_priority`) REFERENCES `priority_case` (`id_priority`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_pr__787EE5A0` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_re__797309D9` FOREIGN KEY (`id_requester`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_re__7A672E12` FOREIGN KEY (`id_relationed_case`) REFERENCES `case_identity` (`id_case`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_st__7B5B524B` FOREIGN KEY (`id_stage`) REFERENCES `stage` (`id_stage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_st__7C4F7684` FOREIGN KEY (`id_status`) REFERENCES `status_case` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_sy__7D439ABD` FOREIGN KEY (`id_system`) REFERENCES `system_` (`id_system`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__case_iden__id_vp__7E37BEF6` FOREIGN KEY (`id_vp`) REFERENCES `vp` (`id_vp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commentary`
--
ALTER TABLE `commentary`
  ADD CONSTRAINT `FK__commentar__id_ca__7F2BE32F` FOREIGN KEY (`id_case`) REFERENCES `case_identity` (`id_case`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__commentar__id_re__00200768` FOREIGN KEY (`id_receiver`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__commentar__id_se__01142BA1` FOREIGN KEY (`id_sender`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `config_list`
--
ALTER TABLE `config_list`
  ADD CONSTRAINT `FK__config_li__id_li__02084FDA` FOREIGN KEY (`id_list`) REFERENCES `option_list` (`id_olist`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__config_li__id_pr__02FC7413` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cycle`
--
ALTER TABLE `cycle`
  ADD CONSTRAINT `FK__cycle__id_year__03F0984C` FOREIGN KEY (`id_year`) REFERENCES `year_cycle` (`id_yc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs_audit`
--
ALTER TABLE `logs_audit`
  ADD CONSTRAINT `FK__logs_audi__id_ob__04E4BC85` FOREIGN KEY (`id_obj`) REFERENCES `objects` (`id_obj`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__logs_audi__id_us__05D8E0BE` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `node_project`
--
ALTER TABLE `node_project`
  ADD CONSTRAINT `FK__node_proj__id_ma__06CD04F7` FOREIGN KEY (`id_main_case`) REFERENCES `case_identity` (`id_case`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__node_proj__id_ne__07C12930` FOREIGN KEY (`id_next`) REFERENCES `node_project` (`id_node`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__node_proj__id_pr__08B54D69` FOREIGN KEY (`id_pre`) REFERENCES `node_project` (`id_node`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__node_proj__id_pr__09A971A2` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `priority_case`
--
ALTER TABLE `priority_case`
  ADD CONSTRAINT `FK__priority___id_pa__0A9D95DB` FOREIGN KEY (`id_parent`) REFERENCES `priority_case` (`id_priority`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `privileges`
--
ALTER TABLE `privileges`
  ADD CONSTRAINT `FK__privilege__id_pr__0B91BA14` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__privilege__id_sc__0C85DE4D` FOREIGN KEY (`id_screen`) REFERENCES `screen_system` (`id_screen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `screen_system`
--
ALTER TABLE `screen_system`
  ADD CONSTRAINT `FK__screen_sy__id_pa__0D7A0286` FOREIGN KEY (`id_parent`) REFERENCES `screen_system` (`id_screen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK__stage__id_parent__0E6E26BF` FOREIGN KEY (`id_parent`) REFERENCES `stage` (`id_stage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `system_`
--
ALTER TABLE `system_`
  ADD CONSTRAINT `FK__system___id_pare__0F624AF8` FOREIGN KEY (`id_parent`) REFERENCES `system_` (`id_system`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `system_bank`
--
ALTER TABLE `system_bank`
  ADD CONSTRAINT `FK__system_ba__id_pa__10566F31` FOREIGN KEY (`id_parent`) REFERENCES `system_bank` (`id_system_bank`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `FK__uploads__id_scre__114A936A` FOREIGN KEY (`id_screen`) REFERENCES `screen_system` (`id_screen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK__users__id_boss__123EB7A3` FOREIGN KEY (`id_boss`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__users__id_profil__1332DBDC` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id_profile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__users__id_vp__14270015` FOREIGN KEY (`id_vp`) REFERENCES `vp` (`id_vp`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vp`
--
ALTER TABLE `vp`
  ADD CONSTRAINT `FK__vp__id_parent__151B244E` FOREIGN KEY (`id_parent`) REFERENCES `vp` (`id_vp`) ON DELETE NO ACTION ON UPDATE NO ACTION;
