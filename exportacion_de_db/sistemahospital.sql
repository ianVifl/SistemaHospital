-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2025 a las 06:04:23
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemahospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_defuncion`
--

CREATE TABLE `caracteristicas_defuncion` (
  `id_caracteristicas_defuncion` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `fecha_defuncion` date DEFAULT NULL,
  `hora_defuncion` time DEFAULT NULL,
  `atencionMedica_antes_fallecer` varchar(20) DEFAULT NULL,
  `cirugia_reciente` varchar(20) DEFAULT NULL,
  `fecha_cirugia` date DEFAULT NULL,
  `motivo_cirugia` varchar(255) DEFAULT NULL,
  `defuncion_violenta` varchar(20) DEFAULT NULL,
  `tipo_defuncion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas_defuncion`
--

INSERT INTO `caracteristicas_defuncion` (`id_caracteristicas_defuncion`, `id_fallecido`, `fecha_defuncion`, `hora_defuncion`, `atencionMedica_antes_fallecer`, `cirugia_reciente`, `fecha_cirugia`, `motivo_cirugia`, `defuncion_violenta`, `tipo_defuncion`, `created_at`, `updated_at`) VALUES
(3, 21, '2025-04-06', '17:39:30', 'NO', 'NO', NULL, NULL, 'NO', 'ignora', NULL, NULL),
(4, 22, '2025-05-12', '23:01:47', 'NO', 'NO', NULL, NULL, 'NO', 'accidente', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causas_defuncion`
--

CREATE TABLE `causas_defuncion` (
  `id_causas_defuncion` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `causa_a` varchar(255) NOT NULL COMMENT 'Enfermedad o condición que causó directamente la defunción',
  `intervalo_a` varchar(50) NOT NULL COMMENT 'Intervalo aproximado',
  `cadena_afectaciones` text DEFAULT NULL COMMENT 'Cadena de afectaciones o eventos',
  `otras_condiciones` text DEFAULT NULL,
  `codigo_cie` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `causas_defuncion`
--

INSERT INTO `causas_defuncion` (`id_causas_defuncion`, `id_fallecido`, `causa_a`, `intervalo_a`, `cadena_afectaciones`, `otras_condiciones`, `codigo_cie`, `created_at`, `updated_at`) VALUES
(2, 21, 'Se Ignoran las causas de defuncion', 'DOS DIAS', NULL, NULL, '57572', NULL, NULL),
(3, 22, 'Accidente Vial', 'MInutos', 'Hipertensión arterial', 'Hipertensión arterial', 'I61.9', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_del_certificante`
--

CREATE TABLE `datos_del_certificante` (
  `id_certificacion` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `certificada_por` varchar(50) DEFAULT NULL,
  `otro_certificada_por` varchar(255) DEFAULT NULL,
  `nombre_certificante` varchar(255) DEFAULT NULL,
  `apellidoPaterno_certificante` varchar(255) DEFAULT NULL,
  `apellidoMaterno_certificante` varchar(255) DEFAULT NULL,
  `certificante_sies_medico` varchar(255) DEFAULT NULL,
  `firma_certificante` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_del_certificante`
--

INSERT INTO `datos_del_certificante` (`id_certificacion`, `id_fallecido`, `certificada_por`, `otro_certificada_por`, `nombre_certificante`, `apellidoPaterno_certificante`, `apellidoMaterno_certificante`, `certificante_sies_medico`, `firma_certificante`, `created_at`, `updated_at`) VALUES
(2, 21, 'Medica_Legista', NULL, 'Alejandra', 'Noriega', 'Diaz', 'Si', 'Alejandra Noriega Diaz', NULL, NULL),
(3, 22, 'Medico_Tratante', NULL, 'Francisco', 'Vargas', 'Ayala', 'NO', 'FranciscoVargas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_edad_cumplida`
--

CREATE TABLE `datos_edad_cumplida` (
  `id_hora` bigint(20) UNSIGNED NOT NULL,
  `minutos` int(11) DEFAULT NULL,
  `horas` int(11) DEFAULT NULL,
  `dias` int(11) DEFAULT NULL,
  `meses` int(11) DEFAULT NULL,
  `años_cumplidos` int(11) DEFAULT NULL,
  `id_edad_cumplida` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_edad_cumplida`
--

INSERT INTO `datos_edad_cumplida` (`id_hora`, `minutos`, `horas`, `dias`, `meses`, `años_cumplidos`, `id_edad_cumplida`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, 20, NULL, '2025-03-31 12:44:35', '2025-03-31 12:44:35'),
(2, NULL, NULL, NULL, NULL, 20, NULL, '2025-03-31 12:46:16', '2025-03-31 12:46:16'),
(3, NULL, NULL, NULL, NULL, 20, NULL, '2025-03-31 12:47:00', '2025-03-31 12:47:00'),
(4, NULL, NULL, NULL, NULL, 20, NULL, '2025-03-31 22:45:42', '2025-03-31 22:45:42'),
(5, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 09:28:03', '2025-04-02 09:28:03'),
(6, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 09:32:32', '2025-04-02 09:32:32'),
(7, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 09:35:10', '2025-04-02 09:35:10'),
(8, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 09:38:01', '2025-04-02 09:38:01'),
(9, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 10:10:58', '2025-04-02 10:10:58'),
(10, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-02 10:14:22', '2025-04-02 10:14:22'),
(11, NULL, NULL, NULL, NULL, 20, NULL, '2025-04-03 10:48:52', '2025-04-03 10:48:52'),
(12, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_informantes`
--

CREATE TABLE `datos_informantes` (
  `id_informante` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `nombre_informante` varchar(255) NOT NULL,
  `primer_apellido_informante` varchar(255) NOT NULL,
  `segundo_apellido_informante` varchar(255) DEFAULT NULL,
  `parentesco_con_fallecido` varchar(255) DEFAULT NULL,
  `firma_informante` varchar(255) DEFAULT NULL,
  `sitio_defuncion` varchar(50) DEFAULT NULL,
  `nombre_unidad_medica` varchar(255) DEFAULT NULL,
  `clave_establecimientos_salud` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_informantes`
--

INSERT INTO `datos_informantes` (`id_informante`, `id_fallecido`, `nombre_informante`, `primer_apellido_informante`, `segundo_apellido_informante`, `parentesco_con_fallecido`, `firma_informante`, `sitio_defuncion`, `nombre_unidad_medica`, `clave_establecimientos_salud`, `created_at`, `updated_at`) VALUES
(7, 21, 'Naomi', 'Villamil', 'Flores', 'Hermana', 'Naomi Itzel Villamil Flores', 'SECRETARIA_DE_SALUD', 'Hospital General', '12345', NULL, NULL),
(8, 22, 'Alejandra', 'Noriega', 'Diaz', 'Pareja', 'AlejandraDiaz', 'VIA_PUBLICA', 'Hospital', '314LJ4', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `defuncion_corresponde_mujer`
--

CREATE TABLE `defuncion_corresponde_mujer` (
  `id_defuncion_corresponde_mujer` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `muerte_embarazo` varchar(50) DEFAULT NULL,
  `causas_embarazo` varchar(20) DEFAULT NULL,
  `complicaciones_embarazo` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `defuncion_corresponde_mujer`
--

INSERT INTO `defuncion_corresponde_mujer` (`id_defuncion_corresponde_mujer`, `id_fallecido`, `muerte_embarazo`, `causas_embarazo`, `complicaciones_embarazo`, `created_at`, `updated_at`) VALUES
(2, 21, 'NO_EMBARAZADA', 'SI', 'SI', NULL, NULL),
(3, 22, 'EMBARAZO', 'SI', 'SI', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_medicos_defuncion`
--

CREATE TABLE `detalles_medicos_defuncion` (
  `id_detalles_medicos` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `muerte_encefalica` varchar(20) DEFAULT NULL,
  `donacion_organos` varchar(20) DEFAULT NULL,
  `causa_basica` varchar(255) DEFAULT NULL,
  `codigo_adicional` varchar(50) DEFAULT NULL,
  `desempeno_trabajo` varchar(20) DEFAULT NULL,
  `lugar_lesion` varchar(50) DEFAULT NULL,
  `acta_ministerio` varchar(50) DEFAULT NULL,
  `relacion_agresor` varchar(255) DEFAULT NULL,
  `descripcion_lesion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalles_medicos_defuncion`
--

INSERT INTO `detalles_medicos_defuncion` (`id_detalles_medicos`, `id_fallecido`, `muerte_encefalica`, `donacion_organos`, `causa_basica`, `codigo_adicional`, `desempeno_trabajo`, `lugar_lesion`, `acta_ministerio`, `relacion_agresor`, `descripcion_lesion`, `created_at`, `updated_at`) VALUES
(2, 21, 'SI', 'NO', 'Desconocida', '32', 'NO', 'CALLE', '7832823', NULL, 'Se ignoran las causas', NULL, NULL),
(3, 22, 'SI', 'NO', NULL, '62520', 'SI', 'VIVIENDA_PARTICULAR', '56447', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_defuncion`
--

CREATE TABLE `domicilio_defuncion` (
  `id_domicilio_defuncion` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `tipo_vialidad_lugar_defuncion` varchar(100) DEFAULT NULL,
  `nombre_vialidad_lugar_defuncion` varchar(255) DEFAULT NULL,
  `num_exterior_lugar_defuncion` varchar(20) DEFAULT NULL,
  `num_interior_lugar_defuncion` varchar(20) DEFAULT NULL,
  `asentamiento_humano_lugar_defuncion` varchar(100) DEFAULT NULL,
  `nombre_asentamiento_lugar_defuncion` varchar(255) DEFAULT NULL,
  `codigoPostal_lugar_defuncion` varchar(10) DEFAULT NULL,
  `lugar_defuncion_localidad` varchar(100) DEFAULT NULL,
  `lugar_defuncion_municipio` varchar(100) DEFAULT NULL,
  `entidadFederativa_lugar_defuncion` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domicilio_defuncion`
--

INSERT INTO `domicilio_defuncion` (`id_domicilio_defuncion`, `id_fallecido`, `tipo_vialidad_lugar_defuncion`, `nombre_vialidad_lugar_defuncion`, `num_exterior_lugar_defuncion`, `num_interior_lugar_defuncion`, `asentamiento_humano_lugar_defuncion`, `nombre_asentamiento_lugar_defuncion`, `codigoPostal_lugar_defuncion`, `lugar_defuncion_localidad`, `lugar_defuncion_municipio`, `entidadFederativa_lugar_defuncion`, `created_at`, `updated_at`) VALUES
(4, 21, 'Avenida', 'Av. 5 de Mayo', '76', '76', 'Urbano', 'Palmas', '73289', 'Cuernavaca', 'Cuernavaca', 'Morelos', NULL, NULL),
(5, 22, 'Avenida', 'Tulipanes', '15', '3', 'Colonia', 'Jardines', '73501', 'Cuernavaca', 'Cuernavaca', 'Morelos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_lesion`
--

CREATE TABLE `domicilio_lesion` (
  `id_domicilio_lesion` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `tipo_vialidad_donde_ocurrio` varchar(100) DEFAULT NULL,
  `nombre_vialidad` varchar(255) DEFAULT NULL,
  `num_ext` varchar(20) DEFAULT NULL,
  `num_int` varchar(20) DEFAULT NULL,
  `tipo_asentamiento` varchar(100) DEFAULT NULL,
  `nombre_asentamiento` varchar(255) DEFAULT NULL,
  `ocurrio_lesion_codigo_postal` varchar(10) DEFAULT NULL,
  `ocurrio_lesion_localidad` varchar(100) DEFAULT NULL,
  `ocurrio_lesion_municipio` varchar(100) DEFAULT NULL,
  `entidad_federativa` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `domicilio_lesion`
--

INSERT INTO `domicilio_lesion` (`id_domicilio_lesion`, `id_fallecido`, `tipo_vialidad_donde_ocurrio`, `nombre_vialidad`, `num_ext`, `num_int`, `tipo_asentamiento`, `nombre_asentamiento`, `ocurrio_lesion_codigo_postal`, `ocurrio_lesion_localidad`, `ocurrio_lesion_municipio`, `entidad_federativa`, `created_at`, `updated_at`) VALUES
(2, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 22, 'Avenida', 'Tulipanes', '19', '18', 'Colonia', 'Jardines', '62520', 'Cuernavaca', 'Cuernavaca', 'Morelos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallecido`
--

CREATE TABLE `fallecido` (
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `nombre_fallecido` varchar(255) NOT NULL,
  `apellido_paterno` varchar(255) NOT NULL,
  `apellido_materno` varchar(255) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fallecido`
--

INSERT INTO `fallecido` (`id_fallecido`, `nombre_fallecido`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `sexo`, `CURP`, `created_at`, `updated_at`) VALUES
(13, 'Ian Taillu', 'Villamil', 'Flores', '2004-06-01 00:00:00', 'hombre', 'VIFI040601HMLLSNA9', '2025-04-02 09:28:03', '2025-04-04 13:27:36'),
(21, 'Ian', 'Villamil', 'Flores', '2004-06-01 00:00:00', 'hombre', 'VIFI040601HMLLSNA9', NULL, NULL),
(22, 'Ian taillu', 'Villamil', 'Flores', '2004-06-01 00:00:00', 'hombre', 'VIFI040601HMLLSNA9', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallecido_edad`
--

CREATE TABLE `fallecido_edad` (
  `id_edad_cumplida` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `folio_certificado_naci` varchar(255) DEFAULT NULL,
  `peso_nacimiento` double DEFAULT NULL,
  `semanas_gestacion` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fallecido_edad`
--

INSERT INTO `fallecido_edad` (`id_edad_cumplida`, `id_fallecido`, `folio_certificado_naci`, `peso_nacimiento`, `semanas_gestacion`, `created_at`, `updated_at`) VALUES
(5, 13, '23132145465', 4000, 8, '2025-04-02 09:28:03', '2025-04-04 10:04:37'),
(13, 21, NULL, NULL, NULL, NULL, NULL),
(14, 22, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_fallecido`
--

CREATE TABLE `info_fallecido` (
  `id_info_falleciodo` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `situacion_conyugal` varchar(255) NOT NULL,
  `escolaridad` varchar(255) NOT NULL,
  `escolaridad_completa` tinyint(1) NOT NULL,
  `trabajador` tinyint(1) NOT NULL,
  `afiliacion_servicios_salud` varchar(50) NOT NULL,
  `numero_afiliacion_social` varchar(50) NOT NULL,
  `lengua_indigena` tinyint(1) NOT NULL,
  `nacionalidad` char(50) NOT NULL,
  `ocupacion_habitual` char(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info_fallecido`
--

INSERT INTO `info_fallecido` (`id_info_falleciodo`, `id_fallecido`, `situacion_conyugal`, `escolaridad`, `escolaridad_completa`, `trabajador`, `afiliacion_servicios_salud`, `numero_afiliacion_social`, `lengua_indigena`, `nacionalidad`, `ocupacion_habitual`, `created_at`, `updated_at`) VALUES
(13, 13, 'soltera/o', 'ninguna', 1, 1, 'ninguna', '123456789654', 1, 'mexicana', 'no trabaja', '2025-04-02 09:28:03', '2025-04-04 10:04:37'),
(21, 21, 'soltera/o', 'profesional', 0, 0, 'imss', '123456789654', 2, 'mexicana', 'no trabaja', NULL, NULL),
(22, 22, 'soltera/o', 'profesional', 1, 0, 'imss', '1005644821', 2, 'mexicana', 'Estudiante', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_16_055644_create_fallecido_table', 1),
(5, '2025_03_16_060747_create_info_fallecido_table', 1),
(6, '2025_03_16_061444_create_residencia_table', 1),
(7, '2025_03_16_061941_create__entidades_table', 1),
(8, '2025_03_16_062212_create_fallecido_edad_table', 1),
(9, '2025_03_16_062444_create_datos_edad_cumplida_table', 1),
(10, '2025_04_02_021547_create_datos_informantes_table', 2),
(11, '2025_04_02_034020_create_domicilio_defuncion_table', 3),
(12, '2025_04_02_042455_create_caracteristicas_defuncion_table', 4),
(13, '2025_04_02_043800_create_causas_defuncion_table', 5),
(14, '2025_04_02_044529_create_necropsia_defuncion_table', 6),
(15, '2025_04_02_050005_create_defuncion_corresponde_mujer_table', 7),
(16, '2025_04_02_053815_create_detalles_medicos_defuncion_table', 8),
(17, '2025_04_03_030759_create_domicilio_lesion_table', 9),
(18, '2025_04_03_031903_create_datos_del_certificante_table', 10),
(19, '2025_04_03_034319_create__domicilio__telefono_certificante_table', 11),
(20, '2025_04_03_035458_create__datos_del__registro_civil_table', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `necropsia_defuncion`
--

CREATE TABLE `necropsia_defuncion` (
  `id_necropsia` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `necropsia` varchar(20) DEFAULT NULL,
  `hallazgos_necropsia` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `necropsia_defuncion`
--

INSERT INTO `necropsia_defuncion` (`id_necropsia`, `id_fallecido`, `necropsia`, `hallazgos_necropsia`, `created_at`, `updated_at`) VALUES
(2, 21, 'SI', 'SI', NULL, NULL),
(3, 22, 'NO', 'NO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residencia`
--

CREATE TABLE `residencia` (
  `id_residencia` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numero_ext` int(11) NOT NULL,
  `numero_int` int(11) NOT NULL,
  `tipo_asentamiento_humano` varchar(50) NOT NULL,
  `nombre_asentamiento_humano` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `residencia`
--

INSERT INTO `residencia` (`id_residencia`, `id_fallecido`, `localidad`, `municipio`, `codigo_postal`, `calle`, `numero_ext`, `numero_int`, `tipo_asentamiento_humano`, `nombre_asentamiento_humano`, `pais`, `created_at`, `updated_at`) VALUES
(5, 13, 'asasdasdasdasd', 'Tepoztlan', '62520', 'jidsn', 20, 19, 'nose', 'jiqdwwd', 'dsfdf', '2025-04-02 09:28:03', '2025-04-02 09:28:03'),
(13, 21, 'Tepoztlan', 'Tepoztlan', '62520', 'Aguila', 19, 19, 'Suburbano', 'Santa Cruz', 'Morelos', NULL, NULL),
(14, 22, 'Tepoztlán', 'Tepoztlán', '62520', 'Águila', 19, 19, 'Barrio', 'Santa Cruz', 'México', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fDPIXfCjzfeIN8ICRBIGXOhfzLBPaSDARM3llY1C', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT1J2UnNTcWVBeldKcWlaVFgwd2dlSkdUTTV6Q1VjMlhHM0E1cmRsSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1747619559),
('HWA82MbSLU0L465qiQZDnzSVO3TKqxfjPc9wRorT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibW1xaUhIb3hHWUk5RlpyU1gxNkZmYUNUSFFzVjZaMkE0WUMzZXhpSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1747619596),
('SEZhwxgGtDUdnMyHqN87m3ZJjI0QG89PppFrvVBj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVB2N1oyYnZPOEdJNFRhTlAxaEk3YVBjNzRTdzF6Q1M4cjYxRGhONCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1747604635);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `rol` enum('doctor','paciente') NOT NULL DEFAULT 'paciente',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `activo`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ian Villamil', 'admin@admin.com', NULL, '$2y$12$4VqKGtZgkjh9Rywh0aOUJe2IrBQtBnqbpRBRDUPJ7glTGOzbge5xq', 1, 'doctor', NULL, '2025-03-31 12:43:30', '2025-03-31 12:43:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_datos_del__registro_civil`
--

CREATE TABLE `_datos_del__registro_civil` (
  `id_registro_civil` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `numero_registro` varchar(50) DEFAULT NULL,
  `numero_libro` varchar(50) DEFAULT NULL,
  `numero_acta` varchar(50) DEFAULT NULL,
  `registro_localidad` varchar(100) DEFAULT NULL,
  `registro_municipio` varchar(100) DEFAULT NULL,
  `entidad_registro` varchar(100) DEFAULT NULL,
  `fecha_de_registro` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `_datos_del__registro_civil`
--

INSERT INTO `_datos_del__registro_civil` (`id_registro_civil`, `id_fallecido`, `numero_registro`, `numero_libro`, `numero_acta`, `registro_localidad`, `registro_municipio`, `entidad_registro`, `fecha_de_registro`, `created_at`, `updated_at`) VALUES
(2, 21, '2343', '234', '234234', 'Cuernavaca', 'Cuernavaca', 'Morelos', '2025-04-06', NULL, NULL),
(3, 22, '54', '21', '546789', 'Cuernavaca', 'Cuernavaca', 'Morelos', '2025-05-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_domicilio__telefono_certificante`
--

CREATE TABLE `_domicilio__telefono_certificante` (
  `id_domicilio_certificante` bigint(20) UNSIGNED NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `tipo_vialidad_41` varchar(100) DEFAULT NULL,
  `nombre_vialidad_41` varchar(255) DEFAULT NULL,
  `num_ext_41` varchar(20) DEFAULT NULL,
  `num_int_41` varchar(20) DEFAULT NULL,
  `tipo_asentamiento_41` varchar(100) DEFAULT NULL,
  `nombre_asentamiento_41` varchar(255) DEFAULT NULL,
  `certificante_codigo_postal` varchar(10) DEFAULT NULL,
  `certificante_localidad` varchar(100) DEFAULT NULL,
  `certificante_municipio` varchar(100) DEFAULT NULL,
  `entidad_federativa_41` varchar(100) DEFAULT NULL,
  `telefono_41` varchar(20) DEFAULT NULL,
  `fecha_certificacion` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `_domicilio__telefono_certificante`
--

INSERT INTO `_domicilio__telefono_certificante` (`id_domicilio_certificante`, `id_fallecido`, `tipo_vialidad_41`, `nombre_vialidad_41`, `num_ext_41`, `num_int_41`, `tipo_asentamiento_41`, `nombre_asentamiento_41`, `certificante_codigo_postal`, `certificante_localidad`, `certificante_municipio`, `entidad_federativa_41`, `telefono_41`, `fecha_certificacion`, `created_at`, `updated_at`) VALUES
(2, 21, 'Calle', 'Martirez', '44', '44', 'Urbano', 'Cuernavaca', '13221', 'Cuernavaca', 'Cuernavaca', 'Morelos', '7774497924', '2025-04-06', NULL, NULL),
(3, 22, 'Colonia', 'Rayon', '66', '3', 'Colonia', 'Brizas', '87132', 'Cuernavaca', 'Cuernavaca', 'Morelos', '7774465607', '2025-05-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_entidades`
--

CREATE TABLE `_entidades` (
  `id_entidades` bigint(20) UNSIGNED NOT NULL,
  `entidad_nacimiento_` varchar(255) NOT NULL,
  `afromexicano` tinyint(1) NOT NULL,
  `indigena` tinyint(1) NOT NULL,
  `id_fallecido` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `_entidades`
--

INSERT INTO `_entidades` (`id_entidades`, `entidad_nacimiento_`, `afromexicano`, `indigena`, `id_fallecido`, `created_at`, `updated_at`) VALUES
(13, 'Morelos', 1, 1, 13, '2025-04-02 09:28:03', '2025-04-04 10:04:37'),
(21, 'Morelos', 0, 0, 21, NULL, NULL),
(22, 'Morelos', 0, 0, 22, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `caracteristicas_defuncion`
--
ALTER TABLE `caracteristicas_defuncion`
  ADD PRIMARY KEY (`id_caracteristicas_defuncion`),
  ADD KEY `caracteristicas_defuncion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `causas_defuncion`
--
ALTER TABLE `causas_defuncion`
  ADD PRIMARY KEY (`id_causas_defuncion`),
  ADD KEY `causas_defuncion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `datos_del_certificante`
--
ALTER TABLE `datos_del_certificante`
  ADD PRIMARY KEY (`id_certificacion`),
  ADD KEY `datos_del_certificante_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `datos_edad_cumplida`
--
ALTER TABLE `datos_edad_cumplida`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `datos_edad_cumplida_id_edad_cumplida_foreign` (`id_edad_cumplida`);

--
-- Indices de la tabla `datos_informantes`
--
ALTER TABLE `datos_informantes`
  ADD PRIMARY KEY (`id_informante`),
  ADD KEY `datos_informantes_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `defuncion_corresponde_mujer`
--
ALTER TABLE `defuncion_corresponde_mujer`
  ADD PRIMARY KEY (`id_defuncion_corresponde_mujer`),
  ADD KEY `defuncion_corresponde_mujer_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `detalles_medicos_defuncion`
--
ALTER TABLE `detalles_medicos_defuncion`
  ADD PRIMARY KEY (`id_detalles_medicos`),
  ADD KEY `detalles_medicos_defuncion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `domicilio_defuncion`
--
ALTER TABLE `domicilio_defuncion`
  ADD PRIMARY KEY (`id_domicilio_defuncion`),
  ADD KEY `domicilio_defuncion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `domicilio_lesion`
--
ALTER TABLE `domicilio_lesion`
  ADD PRIMARY KEY (`id_domicilio_lesion`),
  ADD KEY `domicilio_lesion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fallecido`
--
ALTER TABLE `fallecido`
  ADD PRIMARY KEY (`id_fallecido`);

--
-- Indices de la tabla `fallecido_edad`
--
ALTER TABLE `fallecido_edad`
  ADD PRIMARY KEY (`id_edad_cumplida`),
  ADD KEY `fallecido_edad_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `info_fallecido`
--
ALTER TABLE `info_fallecido`
  ADD PRIMARY KEY (`id_info_falleciodo`),
  ADD KEY `info_fallecido_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `necropsia_defuncion`
--
ALTER TABLE `necropsia_defuncion`
  ADD PRIMARY KEY (`id_necropsia`),
  ADD KEY `necropsia_defuncion_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `residencia`
--
ALTER TABLE `residencia`
  ADD PRIMARY KEY (`id_residencia`),
  ADD KEY `residencia_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `_datos_del__registro_civil`
--
ALTER TABLE `_datos_del__registro_civil`
  ADD PRIMARY KEY (`id_registro_civil`),
  ADD KEY `_datos_del__registro_civil_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `_domicilio__telefono_certificante`
--
ALTER TABLE `_domicilio__telefono_certificante`
  ADD PRIMARY KEY (`id_domicilio_certificante`),
  ADD KEY `_domicilio__telefono_certificante_id_fallecido_foreign` (`id_fallecido`);

--
-- Indices de la tabla `_entidades`
--
ALTER TABLE `_entidades`
  ADD PRIMARY KEY (`id_entidades`),
  ADD KEY `_entidades_id_fallecido_foreign` (`id_fallecido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas_defuncion`
--
ALTER TABLE `caracteristicas_defuncion`
  MODIFY `id_caracteristicas_defuncion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `causas_defuncion`
--
ALTER TABLE `causas_defuncion`
  MODIFY `id_causas_defuncion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_del_certificante`
--
ALTER TABLE `datos_del_certificante`
  MODIFY `id_certificacion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_edad_cumplida`
--
ALTER TABLE `datos_edad_cumplida`
  MODIFY `id_hora` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `datos_informantes`
--
ALTER TABLE `datos_informantes`
  MODIFY `id_informante` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `defuncion_corresponde_mujer`
--
ALTER TABLE `defuncion_corresponde_mujer`
  MODIFY `id_defuncion_corresponde_mujer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalles_medicos_defuncion`
--
ALTER TABLE `detalles_medicos_defuncion`
  MODIFY `id_detalles_medicos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `domicilio_defuncion`
--
ALTER TABLE `domicilio_defuncion`
  MODIFY `id_domicilio_defuncion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `domicilio_lesion`
--
ALTER TABLE `domicilio_lesion`
  MODIFY `id_domicilio_lesion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fallecido`
--
ALTER TABLE `fallecido`
  MODIFY `id_fallecido` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `fallecido_edad`
--
ALTER TABLE `fallecido_edad`
  MODIFY `id_edad_cumplida` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `info_fallecido`
--
ALTER TABLE `info_fallecido`
  MODIFY `id_info_falleciodo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `necropsia_defuncion`
--
ALTER TABLE `necropsia_defuncion`
  MODIFY `id_necropsia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `residencia`
--
ALTER TABLE `residencia`
  MODIFY `id_residencia` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `_datos_del__registro_civil`
--
ALTER TABLE `_datos_del__registro_civil`
  MODIFY `id_registro_civil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `_domicilio__telefono_certificante`
--
ALTER TABLE `_domicilio__telefono_certificante`
  MODIFY `id_domicilio_certificante` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `_entidades`
--
ALTER TABLE `_entidades`
  MODIFY `id_entidades` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas_defuncion`
--
ALTER TABLE `caracteristicas_defuncion`
  ADD CONSTRAINT `caracteristicas_defuncion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `causas_defuncion`
--
ALTER TABLE `causas_defuncion`
  ADD CONSTRAINT `causas_defuncion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datos_del_certificante`
--
ALTER TABLE `datos_del_certificante`
  ADD CONSTRAINT `datos_del_certificante_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datos_edad_cumplida`
--
ALTER TABLE `datos_edad_cumplida`
  ADD CONSTRAINT `datos_edad_cumplida_id_edad_cumplida_foreign` FOREIGN KEY (`id_edad_cumplida`) REFERENCES `fallecido_edad` (`id_edad_cumplida`) ON DELETE CASCADE;

--
-- Filtros para la tabla `datos_informantes`
--
ALTER TABLE `datos_informantes`
  ADD CONSTRAINT `datos_informantes_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `defuncion_corresponde_mujer`
--
ALTER TABLE `defuncion_corresponde_mujer`
  ADD CONSTRAINT `defuncion_corresponde_mujer_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalles_medicos_defuncion`
--
ALTER TABLE `detalles_medicos_defuncion`
  ADD CONSTRAINT `detalles_medicos_defuncion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `domicilio_defuncion`
--
ALTER TABLE `domicilio_defuncion`
  ADD CONSTRAINT `domicilio_defuncion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `domicilio_lesion`
--
ALTER TABLE `domicilio_lesion`
  ADD CONSTRAINT `domicilio_lesion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fallecido_edad`
--
ALTER TABLE `fallecido_edad`
  ADD CONSTRAINT `fallecido_edad_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `info_fallecido`
--
ALTER TABLE `info_fallecido`
  ADD CONSTRAINT `info_fallecido_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `necropsia_defuncion`
--
ALTER TABLE `necropsia_defuncion`
  ADD CONSTRAINT `necropsia_defuncion_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `residencia`
--
ALTER TABLE `residencia`
  ADD CONSTRAINT `residencia_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `_datos_del__registro_civil`
--
ALTER TABLE `_datos_del__registro_civil`
  ADD CONSTRAINT `_datos_del__registro_civil_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `_domicilio__telefono_certificante`
--
ALTER TABLE `_domicilio__telefono_certificante`
  ADD CONSTRAINT `_domicilio__telefono_certificante_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;

--
-- Filtros para la tabla `_entidades`
--
ALTER TABLE `_entidades`
  ADD CONSTRAINT `_entidades_id_fallecido_foreign` FOREIGN KEY (`id_fallecido`) REFERENCES `fallecido` (`id_fallecido`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
