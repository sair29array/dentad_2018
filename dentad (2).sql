-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2018 a las 22:13:28
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dentad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_citas`
--

CREATE TABLE `agenda_citas` (
  `id_cita` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(500) NOT NULL,
  `valor_cita` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descripcion` varchar(1050) NOT NULL,
  `color` varchar(255) NOT NULL,
  `textcolor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `estado_de_la_cita` varchar(30) NOT NULL,
  `papelera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agenda_citas`
--

INSERT INTO `agenda_citas` (`id_cita`, `id_clinica`, `id_paciente`, `nombre_paciente`, `valor_cita`, `title`, `descripcion`, `color`, `textcolor`, `start`, `end`, `estado_de_la_cita`, `papelera`) VALUES
(1, 1, 4, 'Andres Enrrique Ortega Martinez', 40000, 'Limpieza', 'fghfghfghf', '#fd7e14;', '#FFFFFF', '2018-07-28 08:30:00', '2018-07-28 08:55:00', '', 0),
(2, 1, 2, 'Jorge Tadeo Gonzalez Martinez', 50000, 'Control de ortodoncia', '', '#fd7e14;', '#FFFFFF', '2018-07-27 08:05:00', '2018-07-27 08:20:00', '', 0),
(3, 1, 4, 'Andres Enrrique Ortega Martinez', 60000, 'Control de ortodoncia', 'fgh', '#fd7e14;', '#FFFFFF', '2018-07-19 07:30:00', '2018-07-19 08:00:00', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicas`
--

CREATE TABLE `clinicas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(18) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clinicas`
--

INSERT INTO `clinicas` (`id`, `id_user`, `nombre`, `direccion`) VALUES
(1, 1, 'AngeliDEnt', 'MonterÃ­a - Colombia'),
(3, 2, 'MariDent', 'Tierralta - CÃ³rdoba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `id_clinica`, `nombre`, `email`, `pass`) VALUES
(1, 1, 'dsdfsdfsdfsd', 'correoejemplo@gmail.com', 'sadfsdfsdfs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `diagnostico` varchar(300) NOT NULL,
  `papelera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diagnosticos`
--

INSERT INTO `diagnosticos` (`id`, `id_clinica`, `diagnostico`, `papelera`) VALUES
(1, 1, 'Hay que hacer endodoncia', 1),
(2, 1, 'DIente con nose que cosa y hay que hacerle nose que cosa', 0),
(3, 1, 'bla bvla vsfskdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico_piezas`
--

CREATE TABLE `diagnostico_piezas` (
  `id` int(11) NOT NULL,
  `id_diagnostico` int(11) NOT NULL,
  `id_pieza_o_diente` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha_asignacion` varchar(50) NOT NULL,
  `papelera` int(11) NOT NULL,
  `fecha_eliminacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `diagnostico_piezas`
--

INSERT INTO `diagnostico_piezas` (`id`, `id_diagnostico`, `id_pieza_o_diente`, `id_paciente`, `fecha_asignacion`, `papelera`, `fecha_eliminacion`) VALUES
(1, 2, 18, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(2, 2, 21, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(3, 2, 22, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(4, 2, 23, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(5, 2, 24, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(6, 2, 25, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(7, 2, 26, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(8, 2, 27, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(9, 2, 28, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(10, 2, 61, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(11, 2, 62, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(12, 2, 63, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(13, 2, 64, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(14, 2, 65, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(15, 3, 21, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(16, 3, 22, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(17, 3, 23, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(18, 3, 24, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(19, 3, 25, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(20, 3, 26, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(21, 3, 27, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(22, 3, 28, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(23, 3, 61, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(24, 3, 62, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(25, 3, 63, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(26, 3, 64, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(27, 3, 65, 5465456, 'Lunes, 09 de Julio de 2018', 0, ''),
(28, 2, 16, 1086957425, 'Lunes, 09 de Julio de 2018', 0, ''),
(29, 2, 42, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(30, 2, 44, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(31, 2, 46, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(32, 2, 47, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(33, 2, 23, 10599875, 'Lunes, 09 de Julio de 2018', 0, ''),
(34, 2, 32, 1086957425, 'Lunes, 09 de Julio de 2018', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos_consulta`
--

CREATE TABLE `motivos_consulta` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `motivoc` varchar(100) NOT NULL,
  `papelera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `motivos_consulta`
--

INSERT INTO `motivos_consulta` (`id`, `id_clinica`, `motivoc`, `papelera`) VALUES
(1, 1, 'Rutina de ortodoncia ', 0),
(2, 1, 'Control de ortodoncia', 1),
(3, 1, 'Control de ortodoncia', 0),
(4, 1, 'Limpieza', 0),
(5, 1, 'Control de ortodoncia', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipo_identidad` varchar(20) NOT NULL,
  `num_identidad` int(11) NOT NULL,
  `sexo` varchar(21) NOT NULL,
  `dia_nacimiento` int(11) NOT NULL,
  `mes_nacimiento` int(11) NOT NULL,
  `anio_nacimiento` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fecha_registro` varchar(200) NOT NULL,
  `quien_lo_registro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `id_clinica`, `nombres`, `apellidos`, `tipo_identidad`, `num_identidad`, `sexo`, `dia_nacimiento`, `mes_nacimiento`, `anio_nacimiento`, `telefono`, `email`, `fecha_registro`, `quien_lo_registro`) VALUES
(1, 1, 'hfghfghg', 'fghfghf', 'CC', 546756756, 'Masculino', 11, 2, 1996, 65756756, 'fghfghfgfg@sdfsd.com', 'Jueves, 21 de Junio de 2018', 1),
(2, 1, 'Jorge Tadeo', 'Gonzalez Martinez', 'CC', 1086957425, 'Masculino', 4, 4, 1989, 2147483647, 'jorgetadeogm@hotmail.com', 'Martes, 26 de Junio de 2018', 1),
(3, 1, 'ffghfghfg', 'fghfghfgh', 'CC', 5465456, 'Masculino', 12, 12, 1985, 45645645, 'fghfghfghfghh@dfsdfsd.com', 'Jueves, 05 de Julio de 2018', 1),
(4, 1, 'Andres Enrrique', 'Ortega Martinez', 'CC', 10599875, 'Masculino', 12, 12, 1967, 2147483647, 'anfreslooko@ddfg.com', 'Lunes, 09 de Julio de 2018', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_agenda_y_control_citas`
--

CREATE TABLE `permiso_agenda_y_control_citas` (
  `email_colaborador_asistente` varchar(200) NOT NULL,
  `ver` int(11) NOT NULL,
  `registrar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_agenda_y_control_citas`
--

INSERT INTO `permiso_agenda_y_control_citas` (`email_colaborador_asistente`, `ver`, `registrar`, `actualizar`, `eliminar`) VALUES
('correoejemplo@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_configuracion_cuenta`
--

CREATE TABLE `permiso_configuracion_cuenta` (
  `email_colaborador_asistente` varchar(200) NOT NULL,
  `ver` int(11) NOT NULL,
  `registrar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_configuracion_cuenta`
--

INSERT INTO `permiso_configuracion_cuenta` (`email_colaborador_asistente`, `ver`, `registrar`, `actualizar`, `eliminar`) VALUES
('correoejemplo@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_control_pacientes`
--

CREATE TABLE `permiso_control_pacientes` (
  `email_colaborador_asistente` varchar(200) NOT NULL,
  `ver` int(11) NOT NULL,
  `registrar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_control_pacientes`
--

INSERT INTO `permiso_control_pacientes` (`email_colaborador_asistente`, `ver`, `registrar`, `actualizar`, `eliminar`) VALUES
('correoejemplo@gmail.com', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_control_reportes`
--

CREATE TABLE `permiso_control_reportes` (
  `email_colaborador_asistente` varchar(200) NOT NULL,
  `ver` int(11) NOT NULL,
  `registrar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_control_reportes`
--

INSERT INTO `permiso_control_reportes` (`email_colaborador_asistente`, `ver`, `registrar`, `actualizar`, `eliminar`) VALUES
('correoejemplo@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_pacientes`
--

CREATE TABLE `seguimiento_pacientes` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `proceso` varchar(300) NOT NULL,
  `descripcion_proceso` varchar(500) NOT NULL,
  `fecha` varchar(60) NOT NULL,
  `fecha_en_que_se_ejecutara_el_proceso` datetime NOT NULL,
  `id_user_admin_o_asistente` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimiento_pacientes`
--

INSERT INTO `seguimiento_pacientes` (`id`, `id_clinica`, `id_paciente`, `proceso`, `descripcion_proceso`, `fecha`, `fecha_en_que_se_ejecutara_el_proceso`, `id_user_admin_o_asistente`) VALUES
(1, 1, 10599875, 'Agendamiento_de_cita', 'Cita para Limpieza. Inicia: 2018-07-28 - 08:30 Termina: 2018-07-28 - 08:55', 'SÃ¡bado, 14 de Julio de 2018', '2018-07-28 08:30:00', 'angelicaramox@gmail.com'),
(2, 1, 1086957425, 'Agendamiento_de_cita', 'Cita para Control de ortodoncia. Inicia: 2018-07-27 - 08:05 Termina: 2018-07-27 - 08:20', 'SÃ¡bado, 14 de Julio de 2018', '2018-07-27 08:05:00', 'angelicaramox@gmail.com'),
(3, 1, 10599875, 'Agendamiento_de_cita', 'Cita para Control de ortodoncia. Inicia: 2018-07-19 - 07:30 Termina: 2018-07-19 - 08:00', 'Domingo, 15 de Julio de 2018', '2018-07-19 07:30:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `tratamiento` varchar(200) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `cuota_inicial` int(11) NOT NULL,
  `duracion_dias` int(11) NOT NULL,
  `duracion_meses` int(11) NOT NULL,
  `duracion_anios` int(11) NOT NULL,
  `papelera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `id_clinica`, `tratamiento`, `valor_total`, `cuota_inicial`, `duracion_dias`, `duracion_meses`, `duracion_anios`, `papelera`) VALUES
(1, 1, 'Ortodoncia', 1500000, 500000, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos_pacientes`
--

CREATE TABLE `tratamientos_pacientes` (
  `id` int(11) NOT NULL,
  `id_tratamiento` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento_piezas`
--

CREATE TABLE `tratamiento_piezas` (
  `id` int(11) NOT NULL,
  `id_tratamiento` int(11) NOT NULL,
  `id_pieza_o_diente` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `tratamiento_en_proceso` int(11) NOT NULL,
  `tratamiento_finalizado` int(11) NOT NULL,
  `fecha_asignacion` varchar(50) NOT NULL,
  `fecha_finalizacion` varchar(50) NOT NULL,
  `papelera` int(11) NOT NULL,
  `fecha_eliminacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tratamiento_piezas`
--

INSERT INTO `tratamiento_piezas` (`id`, `id_tratamiento`, `id_pieza_o_diente`, `id_paciente`, `tratamiento_en_proceso`, `tratamiento_finalizado`, `fecha_asignacion`, `fecha_finalizacion`, `papelera`, `fecha_eliminacion`) VALUES
(1, 1, 18, 10599875, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(2, 1, 21, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(3, 1, 22, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(4, 1, 23, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(5, 1, 24, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(6, 1, 25, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(7, 1, 26, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(8, 1, 27, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(9, 1, 28, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(10, 1, 61, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(11, 1, 62, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(12, 1, 63, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(13, 1, 64, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(14, 1, 65, 5465456, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(15, 1, 42, 10599875, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(16, 1, 44, 10599875, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(17, 1, 46, 10599875, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(18, 1, 47, 10599875, 1, 0, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(19, 1, 32, 1086957425, 0, 1, 'Lunes, 09 de Julio de 2018', '', 0, ''),
(20, 1, 33, 1086957425, 0, 1, 'Jueves, 12 de Julio de 2018', 'Jueves, 12 de Julio de 2018', 0, ''),
(21, 1, 34, 1086957425, 0, 1, 'Jueves, 12 de Julio de 2018', 'Jueves, 12 de Julio de 2018', 1, 'Jueves, 12 de Julio de 2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `de_alta` int(11) NOT NULL,
  `cuenta_activa` int(11) NOT NULL,
  `nombre` varchar(160) NOT NULL,
  `email` varchar(20000) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `fecha_de_registro` varchar(100) NOT NULL,
  `fechaExpire` varchar(20) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `de_alta`, `cuenta_activa`, `nombre`, `email`, `pass`, `fecha_de_registro`, `fechaExpire`, `expire`) VALUES
(1, 1, 1, 'Nick Fury', 'angelicaramox@gmail.com', 'angelica', '18-06-2018', '2019-06-25', 0),
(2, 0, 0, 'Maria valderrama', 'mariaval@gmail.com', '123456', '19-06-2018', '2018-08-25', 0),
(3, 0, 0, 'Pepito Perez', 'pepitoperez@hotmail.com', '123456789', '26-06-2018', '2018-07-03', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda_citas`
--
ALTER TABLE `agenda_citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnostico_piezas`
--
ALTER TABLE `diagnostico_piezas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivos_consulta`
--
ALTER TABLE `motivos_consulta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimiento_pacientes`
--
ALTER TABLE `seguimiento_pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamientos_pacientes`
--
ALTER TABLE `tratamientos_pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamiento_piezas`
--
ALTER TABLE `tratamiento_piezas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda_citas`
--
ALTER TABLE `agenda_citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clinicas`
--
ALTER TABLE `clinicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `diagnostico_piezas`
--
ALTER TABLE `diagnostico_piezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `motivos_consulta`
--
ALTER TABLE `motivos_consulta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `seguimiento_pacientes`
--
ALTER TABLE `seguimiento_pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tratamientos_pacientes`
--
ALTER TABLE `tratamientos_pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tratamiento_piezas`
--
ALTER TABLE `tratamiento_piezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
