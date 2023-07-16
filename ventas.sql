-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2023 at 10:54 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20279891_ventas`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `Description`, `Picture`) VALUES
(1, 'Prueba A 1}', 'Prueba B', 'Prueba C');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `ContactName` varchar(255) DEFAULT NULL,
  `ContactTitle` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `CompanyName`, `ContactName`, `ContactTitle`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `Fax`) VALUES
(1, 'Prueba 1', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `TitleOfCourtesy` varchar(255) DEFAULT NULL,
  `BirthDate` date DEFAULT NULL,
  `HireDate` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `HomePhone` varchar(255) DEFAULT NULL,
  `Extension` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `ReportsTo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`) VALUES
(1, 'Sanchez', 'Juan', 'Operador', 'EdM', '2023-06-07', '2023-06-08', 'Guatemala', 'Guatemala', 'fff', '52541', 'Guatemala', '47586233', '222', 'DDD', 'ffff', 'PRUEBA'),
(10015, 'ORTIZ', 'OSCAR', 'Gerente de Operaciones', 'EdM 1', '2006-05-06', '2020-08-11', '26 Oriente 510', 'CHIAPAS', 'Oeste', '3336', 'CHIAPAS', '50519436', '502', 'img1.jpg', 'Regular', 'ROJAS'),
(10018, 'TORRES', 'ELOISA ZAIDA', 'Gerente de Operaciones', 'none', '2006-05-22', '2021-10-08', '25 Oriente  56', 'HIDALGO', 'Sur', '3353', 'HIDALGO', '47756923', '502', 'img16.jpg', 'Regular', 'ARROYO'),
(10021, 'SILVA', 'ROSARIO DEL CARMEN', 'Gerente de Operaciones', 'none', '2004-03-05', '2019-05-04', '44 Poniente  2048', 'HIDALGO', 'Norte', '3391', 'HIDALGO', '53858638', '502', 'img17.jpg', 'Bad', 'PEREZ'),
(10024, 'TORRES', 'HUGO ALEJANDRO', 'Gerente de Operaciones', 'none', '2004-10-04', '2022-03-15', '30 Oriente  71', 'HIDALGO', 'Oeste', '3400', 'HIDALGO', '53441440', '502', 'img18.jpg', 'Bad', 'MENDEZ'),
(10027, 'JACOBO', 'JAVIER', 'Gerente de Operaciones', 'none', '2006-06-17', '2019-06-23', '45 Poniente  4096', 'HIDALGO', 'Oeste', '3333', 'HIDALGO', '46702927', '502', 'img19.jpg', 'Good', 'NAVARRO'),
(10030, 'TORRES', 'ALEJANDRO', 'Gerente de Operaciones', 'none', '2005-01-17', '2019-07-11', '31 Oriente  74', 'HIDALGO', 'Sur', '3378', 'HIDALGO', '52083117', '502', 'img20.jpg', 'Good', 'GATICA'),
(10033, 'SILVA', 'IRMA CONCEPCION', 'Gerente de Operaciones', 'none', '2006-10-04', '2020-05-14', '46 Poniente  17', 'HIDALGO', 'Este', '3386', 'HIDALGO', '59293390', '502', 'img21.jpg', 'Good', 'MARQUEZ'),
(10036, 'ABURTO', 'PORFIRIO', 'Gerente de Operaciones', 'none', '2005-07-14', '2021-07-24', '39 Poniente  182', 'JALISCO', 'Oeste', '3361', 'JALISCO', '51528838', '502', 'img67.jpg', 'Good', 'PATTATUCHI'),
(10039, 'AGUIRRE', 'CARMEN ALICIA', 'Gerente de Log�stica', 'none', '2005-05-21', '2020-07-11', '58 Poniente  220', 'MERIDA', 'Este', '3374', 'MERIDA', '50269837', '502', 'img77.jpg', 'Regular', 'ALVAREZ'),
(10042, 'GAMBOA', 'MIGUEL GUSTAVO', 'Gerente de Log�stica', 'none', '2006-01-15', '2021-10-15', '52 Poniente  208', 'MERIDA', 'Oeste', '3361', 'MERIDA', '56746365', '502', 'img78.jpg', 'Good', 'SANCHEZ'),
(10045, 'ALEJOS', 'ARTURO', 'Gerente de Log�stica', 'none', '2006-01-08', '2021-02-08', '17 Sur  230', 'MERIDA', 'Este', '3380', 'MERIDA', '50578274', '502', 'img79.jpg', 'Good', 'MENDEZ'),
(10048, 'MONTES DE OCA', 'MARIANO', 'Gerente de Log�stica', 'none', '2005-07-30', '2021-08-22', '59 Poniente  222', 'MERIDA', 'Este', '3381', 'MERIDA', '52899018', '502', 'img80.jpg', 'Good', 'MONTANO'),
(10051, 'AGUIRRE', 'JOSE ENRIQUE', 'Gerente de Log�stica', 'none', '2006-01-23', '2021-07-17', '55 Poniente  214', 'MERIDA', 'Sur', '3361', 'MERIDA', '60507629', '502', 'img81.jpg', 'Bad', 'SILVA'),
(10054, 'MARTINEZ', 'CONSTANTINO', 'Gerente de Log�stica', 'none', '2004-10-21', '2020-10-16', '17 Oriente  197', 'MONTERREY', 'Este', '3344', 'MONTERREY', '51297632', '502', 'img113.jpg', 'Regular', 'OROZCO'),
(10057, 'RODRIGUEZ', 'MARIA DEL PILAR', 'Gerente de Log�stica', 'none', '2005-07-15', '2021-08-11', '24 Norte  415', 'PUEBLA', 'Oeste', '3370', 'PUEBLA', '48608604', '502', 'img150.jpg', 'Regular', 'TOVAR'),
(10060, 'ROSAS', 'NOHEMI', 'Gerente de Log�stica', 'none', '2005-05-13', '2019-01-22', '15 Oriente  470', 'PUEBLA', 'Oeste', '3400', 'PUEBLA', '46562854', '502', 'img151.jpg', 'Good', 'ARIAS'),
(10063, 'ESTUDILLO', 'PATRICIA', 'Gerente de Log�stica', 'none', '2006-01-21', '2022-01-12', '25 Norte  420', 'PUEBLA', 'Norte', '3345', 'PUEBLA', '47959189', '502', 'img152.jpg', 'Regular', 'RODRIGUEZ'),
(10066, 'CASTILLO', 'SERGIO', 'Gerente de Log�stica', 'none', '2004-03-03', '2020-03-25', '50 Sur  315', 'PUEBLA', 'Norte', '3385', 'PUEBLA', '48764265', '502', 'img153.jpg', 'Bad', 'GONZALEZ'),
(10069, 'ESPARZA', 'MARTIN', 'Gerente de Log�stica', 'none', '2006-10-10', '2022-02-01', '53 Sur  330', 'PUEBLA', 'Sur', '3378', 'PUEBLA', '45218864', '502', 'img154.jpg', 'Good', 'DIAZ'),
(10072, 'ESPINOZA', 'GREGORIO', 'Gerente de Log�stica', 'none', '2006-09-15', '2021-11-14', '19 Norte  390', 'PUEBLA', 'Oeste', '3358', 'PUEBLA', '45664338', '502', 'img155.jpg', 'Bad', 'ROMO'),
(10075, 'BERRONES', 'ROSA GUADALUPE', 'Supervisor de Pedidos', 'none', '2004-06-28', '2019-01-12', '56 Sur  15', 'TAMPICO', 'Este', '3383', 'TAMPICO', '50026482', '502', 'img230.jpg', 'Bad', 'CABALLERO'),
(10078, 'AZUELA', 'NICANDRO', 'Supervisor de Pedidos', 'none', '2005-07-10', '2021-05-28', '16 Oriente  520', 'TAMPICO', 'Sur', '3364', 'TAMPICO', '52955188', '502', 'img231.jpg', 'Good', 'MORELOS'),
(10081, 'PICHARDO', 'JULIAN', 'Supervisor de Pedidos', 'none', '2004-11-24', '2022-01-21', '49 Sur  294', 'TAMPICO', 'Norte', '3353', 'TAMPICO', '55936998', '502', 'img232.jpg', 'Regular', 'GUARNEROS'),
(10084, 'PEREZ', 'MARIA EUGENIA', 'Supervisor de Pedidos', 'none', '2006-03-04', '2021-02-28', '18 Oriente  518', 'TAMPICO', 'Oeste', '3392', 'TAMPICO', '56199987', '502', 'img233.jpg', 'Regular', 'CORTES'),
(10087, 'BALLESTEROS', 'IMELDA', 'Supervisor de Pedidos', 'none', '2004-12-24', '2022-08-03', '38 Sur  272', 'TAMPICO', 'Este', '3356', 'TAMPICO', '55518512', '502', 'img234.jpg', 'Good', 'LAZO'),
(10090, 'BRIONES', 'GONZALO', 'Supervisor de Pedidos', 'none', '2005-07-17', '2019-05-07', '16 Norte  45', 'TAMPICO', 'Sur', '3392', 'TAMPICO', '51241603', '502', 'img235.jpg', 'Regular', 'ALVARADO'),
(10093, 'CRUZ', 'JAVIER', 'Supervisor de Pedidos', 'none', '2004-06-29', '2019-08-14', '59 Sur  30', 'TAMPICO', 'Este', '3355', 'TAMPICO', '59632217', '502', 'img236.jpg', 'Regular', 'LOZANO'),
(10096, 'CARDENAS', 'JORGE LUIS', 'Supervisor de Pedidos', 'none', '2005-05-25', '2022-11-06', '46 Norte  195', 'TAMPICO', 'Este', '3342', 'TAMPICO', '54693371', '502', 'img237.jpg', 'Bad', 'NIETO'),
(10099, 'PINEDO', 'JOSE ALBERTO', 'Supervisor de Pedidos', 'none', '2006-10-11', '2021-09-14', '52 Sur  300', 'TAMPICO', 'Oeste', '3379', 'TAMPICO', '51155538', '502', 'img238.jpg', 'Good', 'CERVANTES'),
(10102, 'BARRIOS', 'AIDA', 'Supervisor de Pedidos', 'none', '2005-08-21', '2022-12-16', '44 Sur  284', 'TAMPICO', 'Oeste', '3387', 'TAMPICO', '47920276', '502', 'img239.jpg', 'Good', 'SALAZAR'),
(10105, 'PEREZ', 'BLANCA AZUCENA', 'Supervisor de Pedidos', 'none', '2005-04-10', '2020-03-08', '27 Poniente  158', 'TAMPICO', 'Este', '3346', 'TAMPICO', '49663177', '502', 'img240.jpg', 'Bad', 'DE LA GARZA'),
(10108, 'GONGORA', 'MARIA TERESA', 'Supervisor de Pedidos', 'none', '2004-01-27', '2019-01-19', '23 Poniente  150', 'TAMPICO', 'Oeste', '3382', 'TAMPICO', '46619233', '502', 'img241.jpg', 'Regular', 'ROJAS'),
(10111, 'PARRA', 'RAMON', 'Asistente de Control de Inventarios', 'none', '2005-05-16', '2021-06-14', '19 Poniente  142', 'VERACRUZ', 'Oeste', '3373', 'VERACRUZ', '49002486', '502', 'img312.jpg', 'Good', 'SANTANA'),
(10114, 'AVALOS', 'MERCEDES', 'Asistente de Control de Inventarios', 'none', '2005-08-27', '2020-06-25', '35 Oriente  501', 'VERACRUZ', 'Oeste', '3376', 'VERACRUZ', '53297128', '502', 'img313.jpg', 'Good', 'ALEXANDER'),
(10117, 'GARZA', 'MAGDA ALICIA', 'Asistente de Control de Inventarios', 'none', '2005-01-04', '2022-10-28', '56 Oriente  124', 'VERACRUZ', 'Este', '3394', 'VERACRUZ', '59953936', '502', 'img314.jpg', 'Good', 'MORALES'),
(10120, 'PAREDES', 'JORGE', 'Asistente de Control de Inventarios', 'none', '2005-10-09', '2019-08-24', '34 Oriente  502', 'VERACRUZ', 'Sur', '3376', 'VERACRUZ', '58869042', '502', 'img315.jpg', 'Regular', 'LIMON'),
(10123, 'COLMENARES', 'PABLO ARTURO', 'Asistente de Control de Inventarios', 'none', '2005-02-27', '2019-08-02', '21 Poniente  146', 'VERACRUZ', 'Sur', '3341', 'VERACRUZ', '57877169', '502', 'img316.jpg', 'Regular', 'ORDU�A'),
(10126, 'AVENDA�O', 'GLORIA', 'Asistente de Control de Inventarios', 'none', '2005-05-12', '2021-08-27', '38 Oriente  498', 'VERACRUZ', 'Este', '3388', 'VERACRUZ', '58080733', '502', 'img317.jpg', 'Bad', 'Y MEJIA'),
(10129, 'ORTA', 'MARIA DE CARMEN', 'Gerente de Operaciones', 'none', '2005-02-08', '2020-02-23', '24 Oriente  512', 'CHIAPAS', 'Oeste', '3365', 'CHIAPAS', '46179791', '502', 'img2.jpg', 'Bad', 'JUAREZ'),
(10132, 'MORALES', 'GRETA', 'Gerente de Operaciones', 'none', '2004-02-10', '2021-05-28', '54 Oriente  120', 'CHIAPAS', 'Sur', '3360', 'CHIAPAS', '54519844', '502', 'img3.jpg', 'Good', 'AVILA'),
(10135, 'OSORIO', 'ANGEL', 'Gerente de Operaciones', 'none', '2004-09-27', '2022-05-17', '28 Oriente  508', 'CHIAPAS', 'Este', '3368', 'CHIAPAS', '60345778', '502', 'img4.jpg', 'Regular', 'EUAN'),
(10138, 'CLEMENTE', 'PABLO', 'Gerente de Operaciones', 'none', '2006-06-22', '2019-05-16', '53 Oriente  483', 'CHIAPAS', 'Oeste', '3348', 'CHIAPAS', '53761879', '502', 'img5.jpg', 'Regular', 'VEGA'),
(10141, 'MORALES', 'JAVIER', 'Gerente de Operaciones', 'none', '2005-02-07', '2022-01-08', '50 Oriente  486', 'CHIAPAS', 'Norte', '3348', 'CHIAPAS', '46013799', '502', 'img6.jpg', 'Regular', 'LOPEZ'),
(10144, 'ANTUNA', 'GUADALUPE DE LA PAZ', 'Gerente de Operaciones', 'none', '2006-11-19', '2022-05-26', '23 Oriente  513', 'CHIAPAS', 'Sur', '3381', 'CHIAPAS', '59049744', '502', 'img7.jpg', 'Regular', 'MURILLO'),
(10147, 'MORALES', 'DOLORES', 'Gerente de Operaciones', 'none', '2006-03-13', '2019-07-09', '21 Oriente  515', 'CHIAPAS', 'Este', '3341', 'CHIAPAS', '58077678', '502', 'img8.jpg', 'Regular', 'MARTINEZ'),
(10150, 'GARZA', 'MARCO ANTONIO', 'Gerente de Operaciones', 'none', '2006-08-24', '2020-08-29', '52 Oriente  484', 'CHIAPAS', 'Norte', '3345', 'CHIAPAS', '45397232', '502', 'img9.jpg', 'Regular', 'GARZA'),
(10153, 'GARCIA', 'HUGO MANUEL', 'Gerente de Operaciones', 'none', '2004-09-13', '2022-04-30', '48 Oriente  488', 'CHIAPAS', 'Norte', '3339', 'CHIAPAS', '59554262', '502', 'img10.jpg', 'Bad', 'SALINAS'),
(10156, 'CHIPULI', 'ANDRES', 'Gerente de Operaciones', 'none', '2006-08-11', '2019-07-10', '49 Oriente  487', 'CHIAPAS', 'Oeste', '3385', 'CHIAPAS', '45775310', '502', 'img11.jpg', 'Bad', 'PEREZ'),
(10159, 'ARELLANO', 'BARBARA ESTELA', 'Gerente de Operaciones', 'none', '2006-05-29', '2022-02-14', '27 Oriente  509', 'CHIAPAS', 'Este', '3340', 'CHIAPAS', '58067603', '502', 'img12.jpg', 'Regular', 'TORRES'),
(10162, 'APPEDOLE', 'ROSA INES', 'Gerente de Operaciones', 'none', '2005-06-09', '2019-03-23', '51 Oriente  485', 'CHIAPAS', 'Norte', '3372', 'CHIAPAS', '49958590', '502', 'img13.jpg', 'Bad', 'FLORES'),
(10165, 'OROPEZA', 'JESUS RICARDO', 'Gerente de Operaciones', 'none', '2005-07-17', '2022-05-16', '22 Oriente  514', 'CHIAPAS', 'Sur', '3356', 'CHIAPAS', '56170225', '502', 'img14.jpg', 'Bad', 'RODRIGUEZ'),
(10168, 'MORALES', 'QUIRINO', 'Gerente de Operaciones', 'none', '2004-01-30', '2021-12-12', '25 Oriente  511', 'CHIAPAS', 'Oeste', '3400', 'CHIAPAS', '49873435', '502', 'img15.jpg', 'Bad', 'ALONSO'),
(10171, 'SOSA', 'MARIA DEL CARMEN', 'Gerente de Operaciones', 'none', '2006-09-24', '2020-12-18', '18 Oriente  35', 'HIDALGO', 'Oeste', '3379', 'HIDALGO', '45871208', '502', 'img22.jpg', 'Bad', 'BASILAKIS'),
(10174, 'SERNA', 'JUAN JOSE', 'Gerente de Operaciones', 'none', '2005-07-28', '2020-05-25', '41 Poniente  256', 'HIDALGO', 'Oeste', '3356', 'HIDALGO', '55953930', '502', 'img23.jpg', 'Regular', 'ROMERO'),
(10177, 'JIMENEZ', 'MARIA DE LOURDES', 'Gerente de Operaciones', 'none', '2004-02-19', '2022-05-29', '48 Poniente  23', 'HIDALGO', 'Oeste', '3344', 'HIDALGO', '48956914', '502', 'img24.jpg', 'Regular', 'LARA'),
(10180, 'LLITERAS', 'JOSE FELIPE', 'Gerente de Operaciones', 'none', '2006-08-13', '2019-12-04', '17 Poniente  95', 'HIDALGO', 'Sur', '3400', 'HIDALGO', '48338340', '502', 'img25.jpg', 'Good', 'ABRAMSON'),
(10183, 'SAUCEDO', 'JULIO CESAR', 'Gerente de Operaciones', 'none', '2004-11-23', '2019-07-10', '37 Poniente  16', 'HIDALGO', 'Norte', '3380', 'HIDALGO', '48894426', '502', 'img26.jpg', 'Good', 'SILVA'),
(10186, 'TOLEDANO', 'FERNANDO', 'Gerente de Operaciones', 'none', '2006-08-29', '2021-12-01', '24 Oriente  53', 'HIDALGO', 'Sur', '3364', 'HIDALGO', '59075169', '502', 'img27.jpg', 'Regular', 'DIAZ'),
(10189, 'VAZQUEZ', 'LAURA ROCIO', 'Gerente de Operaciones', 'none', '2006-10-25', '2021-08-28', '19 Poniente  101', 'HIDALGO', 'Norte', '3348', 'HIDALGO', '47644291', '502', 'img28.jpg', 'Good', 'GONZALEZ'),
(10192, 'LOPEZ', 'EUGENIO', 'Gerente de Operaciones', 'none', '2004-12-02', '2021-06-24', '20 Poniente  104', 'HIDALGO', 'Oeste', '3398', 'HIDALGO', '49398198', '502', 'img29.jpg', 'Good', 'CHALCHE'),
(10195, 'VELAZQUEZ', 'ARTURO', 'Gerente de Operaciones', 'none', '2004-12-14', '2021-01-21', '25 Poniente  119', 'HIDALGO', 'Oeste', '3394', 'HIDALGO', '58874635', '502', 'img30.jpg', 'Regular', 'AMAYA'),
(10198, 'TOSCANO', 'PORFIRIO', 'Gerente de Operaciones', 'none', '2005-08-09', '2020-03-22', '33 Oriente  80', 'HIDALGO', 'Este', '3337', 'HIDALGO', '51895351', '502', 'img31.jpg', 'Regular', 'ANAYA'),
(10201, 'TIBURCIO', 'JESUS ANTONIO', 'Gerente de Operaciones', 'none', '2005-04-08', '2021-04-05', '22 Oriente  47', 'HIDALGO', 'Este', '3386', 'HIDALGO', '56465353', '502', 'img32.jpg', 'Regular', 'SARABIA'),
(10204, 'HERNANDEZ', 'JOSE TIBURCIO', 'Gerente de Operaciones', 'none', '2004-11-02', '2022-09-04', '36 Poniente  8', 'HIDALGO', 'Sur', '3397', 'HIDALGO', '48915345', '502', 'img33.jpg', 'Regular', 'CASTRO'),
(10207, 'SANCHEZ', 'PEDRO', 'Gerente de Operaciones', 'none', '2004-03-08', '2021-09-04', '31 Poniente  655', 'HIDALGO', 'Oeste', '3355', 'HIDALGO', '55825746', '502', 'img34.jpg', 'Regular', 'PE�A'),
(10210, 'SIQUEFF', 'PORFIRIO', 'Gerente de Operaciones', 'none', '2006-12-20', '2021-09-25', '15 Oriente  26', 'HIDALGO', 'Oeste', '3371', 'HIDALGO', '58960817', '502', 'img35.jpg', 'Good', 'DE LA GARZA'),
(10213, 'SANCHEZ', 'HECTOR MANUEL', 'Gerente de Operaciones', 'none', '2006-01-21', '2021-04-11', '34 Poniente  2', 'HIDALGO', 'Este', '3386', 'HIDALGO', '58281959', '502', 'img36.jpg', 'Bad', 'ESTUDILLO'),
(10216, 'LARA', 'PATRICIA EUGENIA', 'Gerente de Operaciones', 'none', '2006-01-17', '2022-02-14', '23 Oriente  50', 'HIDALGO', 'Norte', '3352', 'HIDALGO', '60709984', '502', 'img37.jpg', 'Regular', 'JIMENEZ'),
(10219, 'SANCHEZ', 'ERNESTO', 'Gerente de Operaciones', 'none', '2006-04-10', '2022-06-08', '32 Poniente  660', 'HIDALGO', 'Sur', '3344', 'HIDALGO', '53887866', '502', 'img38.jpg', 'Good', 'MORALES'),
(10222, 'SIFUENTES', 'MA DE LOURDES BALBINA', 'Gerente de Operaciones', 'none', '2005-04-15', '2021-10-22', '43 Poniente  1024', 'HIDALGO', 'Oeste', '3343', 'HIDALGO', '53456658', '502', 'img39.jpg', 'Regular', 'PUENTE'),
(10225, 'TRINIDAD', 'MARIA ESTHER', 'Gerente de Operaciones', 'none', '2005-08-26', '2021-03-21', '34 Oriente  83', 'HIDALGO', 'Oeste', '3386', 'HIDALGO', '46513599', '502', 'img40.jpg', 'Regular', 'GATTAS'),
(10228, 'LLANAS', 'ELVIRA', 'Gerente de Operaciones', 'none', '2004-03-24', '2020-10-16', '35 Oriente  86', 'HIDALGO', 'Oeste', '3353', 'HIDALGO', '60206978', '502', 'img41.jpg', 'Bad', 'GATTAS'),
(10231, 'VAZQUEZ', 'FRANCISCO JAVIER', 'Gerente de Operaciones', 'none', '2006-01-04', '2021-10-03', '21 Poniente  107', 'HIDALGO', 'Oeste', '3357', 'HIDALGO', '60744682', '502', 'img42.jpg', 'Regular', 'ARROYO'),
(10234, 'VELAZQUEZ', 'MORELOS IVAN', 'Gerente de Operaciones', 'none', '2005-01-08', '2022-06-15', '22 Poniente  110', 'HIDALGO', 'Oeste', '3333', 'HIDALGO', '53080657', '502', 'img43.jpg', 'Regular', 'VASQUEZ'),
(10237, 'LOPEZ', 'MARIA JOSE', 'Gerente de Operaciones', 'none', '2005-10-20', '2021-01-29', '23 Poniente  113', 'HIDALGO', 'Este', '3391', 'HIDALGO', '56451722', '502', 'img44.jpg', 'Bad', 'MENDIETA'),
(10240, 'VELAZQUEZ', 'MARIA DEL CARMEN', 'Gerente de Operaciones', 'none', '2006-11-26', '2020-08-25', '24 Poniente  116', 'HIDALGO', 'Norte', '3400', 'HIDALGO', '52532299', '502', 'img45.jpg', 'Regular', 'CRUZ'),
(10243, 'TRUEBA', 'IGNACIO ANTONIO', 'Gerente de Operaciones', 'none', '2005-03-22', '2021-08-21', '15 Poniente  89', 'HIDALGO', 'Oeste', '3351', 'HIDALGO', '49902241', '502', 'img46.jpg', 'Bad', 'GATTAS'),
(10246, 'SOLIS', 'ERNESTO ALAN', 'Gerente de Operaciones', 'none', '2006-08-07', '2020-07-29', '16 Oriente  29', 'HIDALGO', 'Sur', '3377', 'HIDALGO', '49584107', '502', 'img47.jpg', 'Regular', 'CERVANTES'),
(10249, 'SILVA', 'ALMA ARECELY', 'Gerente de Operaciones', 'none', '2005-09-04', '2022-12-20', '47 Poniente  20', 'HIDALGO', 'Oeste', '3387', 'HIDALGO', '45865734', '502', 'img48.jpg', 'Regular', 'LONGORIA'),
(10252, 'VALDERRAMA', 'ROSAURA', 'Gerente de Operaciones', 'none', '2004-04-16', '2020-01-29', '18 Poniente  98', 'HIDALGO', 'Este', '3385', 'HIDALGO', '57468278', '502', 'img49.jpg', 'Regular', 'GUILLEN'),
(10255, 'LAVIN', 'RAFAEL', 'Gerente de Operaciones', 'none', '2005-11-20', '2021-03-19', '29 Oriente  68', 'HIDALGO', 'Sur', '3395', 'HIDALGO', '58075452', '502', 'img50.jpg', 'Good', 'SANCHEZ'),
(10258, 'SANTORUM', 'CONSUELO', 'Gerente de Operaciones', 'none', '2005-05-06', '2021-05-04', '35 Poniente  4', 'HIDALGO', 'Oeste', '3353', 'HIDALGO', '45992344', '502', 'img51.jpg', 'Good', 'JUAREZ'),
(10261, 'HERNANDEZ', 'LEONARDO', 'Gerente de Operaciones', 'none', '2006-07-10', '2022-08-15', '33 Poniente  1', 'HIDALGO', 'Este', '3395', 'HIDALGO', '47770746', '502', 'img52.jpg', 'Good', 'MARTINEZ'),
(10264, 'HINDMAN', 'JOSE DANIEL', 'Gerente de Operaciones', 'none', '2005-12-26', '2022-10-29', '42 Poniente  512', 'HIDALGO', 'Norte', '3382', 'HIDALGO', '51282066', '502', 'img53.jpg', 'Regular', 'SOLDEVILLA'),
(10267, 'SOTO', 'ALBERTO', 'Gerente de Operaciones', 'none', '2005-04-08', '2021-05-30', '19 Oriente  38', 'HIDALGO', 'Oeste', '3353', 'HIDALGO', '49355337', '502', 'img54.jpg', 'Regular', 'MORENO'),
(10270, 'LANDA', 'MARIA MACARIA', 'Gerente de Operaciones', 'none', '2005-07-06', '2019-07-04', '20 Oriente  41', 'HIDALGO', 'Norte', '3368', 'HIDALGO', '49442519', '502', 'img55.jpg', 'Good', 'AHUMADA'),
(10273, 'SUSTAITA', 'FRANCISCO JAVIER', 'Gerente de Operaciones', 'none', '2005-04-16', '2020-11-02', '21 Oriente  44', 'HIDALGO', 'Oeste', '3390', 'HIDALGO', '54707031', '502', 'img56.jpg', 'Bad', 'MU�OZ'),
(10276, 'TORRES', 'ANABELLA', 'Gerente de Operaciones', 'none', '2006-07-21', '2021-11-10', '28 Oriente  65', 'HIDALGO', 'Oeste', '3364', 'HIDALGO', '57900949', '502', 'img57.jpg', 'Good', 'RODRIGUEZ'),
(10279, 'TRUJILLO', 'GONZALO', 'Gerente de Operaciones', 'none', '2006-05-18', '2022-05-22', '16 Poniente  92', 'HIDALGO', 'Sur', '3367', 'HIDALGO', '60089633', '502', 'img58.jpg', 'Regular', 'ACOSTA'),
(10282, 'LASCURAIN', 'LUIS ALBERTO', 'Gerente de Operaciones', 'none', '2004-03-05', '2020-09-01', '26 Oriente  59', 'HIDALGO', 'Oeste', '3348', 'HIDALGO', '56339007', '502', 'img59.jpg', 'Regular', 'ALANIS'),
(10285, 'LIA�O', 'ALFONSO', 'Gerente de Operaciones', 'none', '2004-02-21', '2022-04-22', '32 Oriente  77', 'HIDALGO', 'Sur', '3368', 'HIDALGO', '49898761', '502', 'img60.jpg', 'Bad', 'BAZAN'),
(10288, 'JUAREZ', 'MARIA DEL ROSARIO', 'Gerente de Operaciones', 'none', '2006-08-21', '2019-12-21', '17 Oriente  32', 'HIDALGO', 'Sur', '3365', 'HIDALGO', '60894130', '502', 'img61.jpg', 'Bad', 'CERVANTES'),
(10291, 'HERNANDEZ', 'VICTOR M', 'Gerente de Operaciones', 'none', '2006-08-06', '2020-11-25', '30 Poniente  650', 'HIDALGO', 'Este', '3353', 'HIDALGO', '58734643', '502', 'img62.jpg', 'Good', 'TAPIA'),
(10294, 'SEPULVEDA', 'LUIS', 'Gerente de Operaciones', 'none', '2005-12-09', '2022-09-03', '40 Poniente  128', 'HIDALGO', 'Oeste', '3393', 'HIDALGO', '57074164', '502', 'img63.jpg', 'Bad', 'HERRERA'),
(10297, 'SAURI', 'FERNANDO BALTAZAR', 'Gerente de Operaciones', 'none', '2006-07-23', '2022-06-09', '38 Poniente  32', 'HIDALGO', 'Oeste', '3334', 'HIDALGO', '46674230', '502', 'img64.jpg', 'Good', 'ZARATE'),
(10300, 'HERRERA', 'ANA IRMA', 'Gerente de Operaciones', 'none', '2006-02-07', '2021-07-22', '39 Poniente  64', 'HIDALGO', 'Sur', '3364', 'HIDALGO', '59740790', '502', 'img65.jpg', 'Bad', 'VALERO'),
(10303, 'TORRES', 'MA DEL CARMEN', 'Gerente de Operaciones', 'none', '2005-12-17', '2022-06-24', '27 Oriente  62', 'HIDALGO', 'Este', '3349', 'HIDALGO', '60659386', '502', 'img66.jpg', 'Bad', 'ALANIS'),
(10306, 'MU�OZ', 'FRANCISCO', 'Gerente de Operaciones', 'none', '2005-01-12', '2021-04-03', '37 Poniente  178', 'JALISCO', 'Este', '3334', 'JALISCO', '60692509', '502', 'img68.jpg', 'Good', 'BRAVO'),
(10309, 'NARANJO', 'MARCO TEODORO', 'Gerente de Operaciones', 'none', '2004-08-11', '2020-01-13', '45 Poniente  194', 'JALISCO', 'Sur', '3372', 'JALISCO', '52389797', '502', 'img69.jpg', 'Regular', 'VARGAS'),
(20111, 'GALVEZ', 'SANTIAGO FERNANDO', 'Gerente de Operaciones', 'none', '2006-02-07', '2022-05-22', '44 Poniente  192', 'JALISCO', 'Norte', '3355', 'JALISCO', '59197101', '502', 'img70.jpg', 'Bad', 'TOM'),
(20114, 'MIJARES', 'ANA ELVIA', 'Gerente de Log�stica', 'none', '2005-12-06', '2020-10-24', '43 Poniente  190', 'JALISCO', 'Este', '3342', 'JALISCO', '48463080', '502', 'img71.jpg', 'Bad', 'RODRIGUEZ'),
(20117, 'CEJA', 'FRANCISCO JAVIER', 'Gerente de Log�stica', 'none', '2006-11-20', '2021-04-22', '38 Poniente  180', 'JALISCO', 'Norte', '3400', 'JALISCO', '45884181', '502', 'img72.jpg', 'Good', 'BELTRAN'),
(20120, 'MURILLO', 'JOSE SANTIAGO FERNANDO', 'Gerente de Log�stica', 'none', '2006-06-25', '2019-11-26', '41 Poniente  186', 'JALISCO', 'Este', '3392', 'JALISCO', '57932897', '502', 'img73.jpg', 'Good', 'VILLAREAL'),
(20123, 'CEPERO', 'BENIGNO', 'Gerente de Log�stica', 'none', '2005-06-04', '2021-04-12', '46 Poniente  196', 'JALISCO', 'Este', '3372', 'JALISCO', '58697797', '502', 'img74.jpg', 'Bad', 'VILLAR'),
(20126, 'AGUILAR', 'CARLOS MANUEL', 'Gerente de Log�stica', 'none', '2006-02-23', '2020-08-19', '42 Poniente  188', 'JALISCO', 'Sur', '3388', 'JALISCO', '52679733', '502', 'img75.jpg', 'Good', 'MOCARZEL DE PE�A'),
(20129, 'MENDOZA', 'SERGIO', 'Gerente de Log�stica', 'none', '2006-07-16', '2020-07-15', '40 Poniente  184', 'JALISCO', 'Sur', '3397', 'JALISCO', '46922981', '502', 'img76.jpg', 'Regular', 'GUZMAN'),
(20132, 'MORALES', 'CARLOS ENRIQUE', 'Gerente de Log�stica', 'none', '2004-02-13', '2022-01-28', '45 Oriente  491', 'MERIDA', 'Oeste', '3369', 'MERIDA', '52169352', '502', 'img82.jpg', 'Regular', 'ROSAS'),
(20135, 'ALEMAN', 'NAZARIO', 'Gerente de Log�stica', 'none', '2005-10-09', '2020-10-08', '20 Sur  236', 'MERIDA', 'Oeste', '3381', 'MERIDA', '50982438', '502', 'img83.jpg', 'Bad', 'MENDEZ'),
(20138, 'ALVAREZ', 'CATALINA', 'Gerente de Log�stica', 'none', '2004-11-30', '2019-12-23', '28 Sur  252', 'MERIDA', 'Sur', '3369', 'MERIDA', '48833090', '502', 'img84.jpg', 'Bad', 'BALAM'),
(20141, 'AGUILERA', 'JESUS DANIEL', 'Gerente de Log�stica', 'none', '2006-12-02', '2019-08-19', '50 Poniente  204', 'MERIDA', 'Sur', '3390', 'MERIDA', '47965736', '502', 'img85.jpg', 'Regular', 'RODRIGUEZ'),
(20144, 'NAVARRO', 'BULMARO', 'Gerente de Log�stica', 'none', '2005-02-04', '2020-12-12', '53 Poniente  210', 'MERIDA', 'Sur', '3393', 'MERIDA', '48733917', '502', 'img86.jpg', 'Bad', 'ROSARIO'),
(20147, 'ALVAREZ', 'FRANCISCO', 'Gerente de Log�stica', 'none', '2006-09-14', '2021-07-06', '25 Sur  246', 'MERIDA', 'Sur', '3390', 'MERIDA', '58279422', '502', 'img87.jpg', 'Good', 'GONZALEZ'),
(20150, 'NAVARRO', 'ANITA', 'Gerente de Log�stica', 'none', '2004-04-04', '2019-02-11', '49 Poniente  202', 'MERIDA', 'Oeste', '3379', 'MERIDA', '45179035', '502', 'img88.jpg', 'Good', 'SANTOS'),
(20153, 'OBIL', 'BERNABE ANTONIO', 'Gerente de Log�stica', 'none', '2004-02-19', '2022-02-06', '23 Sur  242', 'MERIDA', 'Norte', '3349', 'MERIDA', '60632803', '502', 'img89.jpg', 'Good', 'PINZON'),
(20156, 'NILL', 'SERGIO', 'Gerente de Log�stica', 'none', '2004-10-26', '2022-02-18', '15 Sur  226', 'MERIDA', 'Norte', '3341', 'MERIDA', '55500123', '502', 'img90.jpg', 'Regular', 'GARCIA'),
(20159, 'CHAPARRO', 'MANUEL TOMAS', 'Gerente de Log�stica', 'none', '2006-03-25', '2022-12-11', '43 Oriente  493', 'MERIDA', 'Este', '3365', 'MERIDA', '58178451', '502', 'img91.jpg', 'Bad', 'PE�A'),
(20162, 'NEGRETE', 'FERNANDO', 'Gerente de Log�stica', 'none', '2004-06-12', '2021-02-20', '57 Poniente  218', 'MERIDA', 'Oeste', '3371', 'MERIDA', '47794694', '502', 'img92.jpg', 'Bad', 'AGUILAR'),
(20165, 'MONTERO', 'ENRIQUETA', 'Gerente de Log�stica', 'none', '2006-11-04', '2020-10-18', '56 Poniente  216', 'MERIDA', 'Oeste', '3366', 'MERIDA', '53050161', '502', 'img93.jpg', 'Good', 'JORGE'),
(20168, 'GARCIA', 'JOSE MARIA', 'Gerente de Log�stica', 'none', '2005-08-22', '2021-01-10', '22 Sur  240', 'MERIDA', 'Norte', '3350', 'MERIDA', '49682785', '502', 'img94.jpg', 'Regular', 'PEREDA'),
(20171, 'MORALES', 'ADOLFO', 'Gerente de Log�stica', 'none', '2006-11-08', '2022-07-19', '29 Sur  254', 'MERIDA', 'Este', '3356', 'MERIDA', '50916986', '502', 'img95.jpg', 'Bad', 'CASTILLO'),
(20174, 'ONTIVEROS', 'JULIO CESAR', 'Gerente de Log�stica', 'none', '2004-08-17', '2020-02-19', '15 Oriente  521', 'MERIDA', 'Este', '3400', 'MERIDA', '45471242', '502', 'img96.jpg', 'Bad', 'OLIVEROS'),
(20177, 'AMADOR', 'GUILLERMO ANTONIO', 'Gerente de Log�stica', 'none', '2006-01-02', '2020-08-21', '17 Oriente  519', 'MERIDA', 'Norte', '3397', 'MERIDA', '49664871', '502', 'img97.jpg', 'Bad', 'PEREA'),
(20180, 'AGUILERA', 'BENITO', 'Gerente de Log�stica', 'none', '2004-08-26', '2021-11-12', '47 Poniente  198', 'MERIDA', 'Sur', '3389', 'MERIDA', '53250591', '502', 'img98.jpg', 'Bad', 'ORNELAS'),
(20183, 'CERVERA', 'MARIA ISABEL', 'Gerente de Log�stica', 'none', '2005-10-04', '2019-01-06', '54 Poniente  212', 'MERIDA', 'Sur', '3343', 'MERIDA', '51961449', '502', 'img99.jpg', 'Good', 'TORIZ'),
(20186, 'ONTIVEROS', 'JESUS ALBERTO', 'Gerente de Log�stica', 'none', '2005-10-09', '2020-10-31', '19 Oriente  517', 'MERIDA', 'Norte', '3353', 'MERIDA', '54807836', '502', 'img100.jpg', 'Good', 'URAZANDI'),
(20189, 'MONTELONGO', 'JULIAN JAVIER', 'Gerente de Log�stica', 'none', '2006-07-22', '2020-09-22', '51 Poniente  206', 'MERIDA', 'Sur', '3341', 'MERIDA', '51020462', '502', 'img101.jpg', 'Bad', 'MORENO'),
(20192, 'CHALE', 'CARLOS', 'Gerente de Log�stica', 'none', '2004-07-30', '2022-01-11', '24 Sur  244', 'MERIDA', 'Este', '3358', 'MERIDA', '53236355', '502', 'img102.jpg', 'Bad', 'NAVARRO'),
(20195, 'MONTIEL', 'JORGE LUIS', 'Gerente de Log�stica', 'none', '2005-02-14', '2022-06-01', '18 Sur  232', 'MERIDA', 'Oeste', '3349', 'MERIDA', '45637461', '502', 'img103.jpg', 'Good', 'HERNANDEZ'),
(20198, 'MONTOYA', 'RAUL ALBERTO', 'Gerente de Log�stica', 'none', '2006-12-06', '2021-05-04', '21 Sur  238', 'MERIDA', 'Oeste', '3357', 'MERIDA', '58066636', '502', 'img104.jpg', 'Regular', 'PADILLA'),
(20201, 'OCHOA', 'PEDRO PABLO', 'Gerente de Log�stica', 'none', '2006-01-21', '2022-11-11', '27 Sur  250', 'MERIDA', 'Oeste', '3375', 'MERIDA', '48600366', '502', 'img105.jpg', 'Bad', 'SEGOVIA'),
(20204, 'ANTONIO', 'CARMEN', 'Gerente de Log�stica', 'none', '2006-01-26', '2020-05-05', '47 Oriente  489', 'MERIDA', 'Este', '3372', 'MERIDA', '54321712', '502', 'img106.jpg', 'Good', 'CASTELLANOS'),
(20207, 'GARCIA', 'GUMARO', 'Gerente de Log�stica', 'none', '2006-09-15', '2022-07-30', '60 Poniente  224', 'MERIDA', 'Este', '3384', 'MERIDA', '53613123', '502', 'img107.jpg', 'Good', 'ROMERO'),
(20210, 'CETINA', 'JUAN CARLOS', 'Gerente de Log�stica', 'none', '2006-05-27', '2022-12-13', '16 Sur  228', 'MERIDA', 'Este', '3379', 'MERIDA', '59783446', '502', 'img108.jpg', 'Regular', 'BRINGAS'),
(20213, 'NU�EZ', 'JOSE LUIS', 'Gerente de Log�stica', 'none', '2005-03-21', '2021-11-08', '19 Sur  234', 'MERIDA', 'Oeste', '3377', 'MERIDA', '48110616', '502', 'img109.jpg', 'Regular', 'GIL'),
(20216, 'MOLINA', 'MIGUEL ANGEL', 'Gerente de Log�stica', 'none', '2004-08-29', '2019-02-18', '48 Poniente  200', 'MERIDA', 'Este', '3396', 'MERIDA', '45261191', '502', 'img110.jpg', 'Bad', 'CANTU'),
(20219, 'MORA', 'ROBERTO A', 'Gerente de Log�stica', 'none', '2005-07-25', '2020-10-31', '26 Sur  248', 'MERIDA', 'Este', '3370', 'MERIDA', '55725121', '502', 'img111.jpg', 'Good', 'OCAMPO'),
(20222, 'GARCIA', 'ELSY NOEMI', 'Gerente de Log�stica', 'none', '2004-12-23', '2019-02-03', '30 Sur  256', 'MERIDA', 'Sur', '3381', 'MERIDA', '47665694', '502', 'img112.jpg', 'Good', 'VILLA'),
(20225, 'LUGO', 'LEOBARDO', 'Gerente de Log�stica', 'none', '2005-07-16', '2021-10-04', '38 Poniente  158', 'MONTERREY', 'Este', '3396', 'MONTERREY', '51394672', '502', 'img114.jpg', 'Bad', 'HERNANDEZ'),
(20228, 'MARQUEZ', 'HECTOR JOEL', 'Gerente de Log�stica', 'none', '2004-04-13', '2020-04-24', '47 Poniente  185', 'MONTERREY', 'Sur', '3386', 'MONTERREY', '47469129', '502', 'img115.jpg', 'Bad', 'GARCES'),
(20231, 'MEDINA', 'MARIO', 'Gerente de Log�stica', 'none', '2006-12-19', '2021-02-17', '25 Oriente  221', 'MONTERREY', 'Oeste', '3359', 'MONTERREY', '53586249', '502', 'img116.jpg', 'Regular', 'HERNANDEZ'),
(20234, 'WONG', 'ALMA DELIA', 'Gerente de Log�stica', 'none', '2006-12-05', '2020-01-18', '37 Poniente  155', 'MONTERREY', 'Sur', '3355', 'MONTERREY', '51684005', '502', 'img117.jpg', 'Bad', 'CASAZZA'),
(20237, 'ZARRABAL', 'FELIPE', 'Gerente de Log�stica', 'none', '2006-11-09', '2021-04-02', '40 Poniente  164', 'MONTERREY', 'Este', '3395', 'MONTERREY', '57384604', '502', 'img118.jpg', 'Regular', 'BARRIOS'),
(20240, 'MAGA�A', 'JOEL', 'Gerente de Log�stica', 'none', '2006-02-09', '2022-06-06', '44 Poniente  176', 'MONTERREY', 'Norte', '3341', 'MONTERREY', '45831414', '502', 'img119.jpg', 'Good', 'CARRANCO'),
(20243, 'VERA', 'MARIA YOLANDA', 'Gerente de Log�stica', 'none', '2006-09-23', '2021-03-19', '27 Poniente  125', 'MONTERREY', 'Este', '3335', 'MONTERREY', '52958249', '502', 'img120.jpg', 'Bad', 'MARTINEZ'),
(20246, 'MELO', 'GUILLERMO', 'Gerente de Log�stica', 'none', '2006-08-01', '2022-02-26', '27 Oriente  227', 'MONTERREY', 'Oeste', '3397', 'MONTERREY', '46915777', '502', 'img121.jpg', 'Regular', 'CELIS'),
(20249, 'VORRATH', 'CARLOS', 'Gerente de Log�stica', 'none', '2004-01-05', '2020-06-27', '36 Poniente  152', 'MONTERREY', 'Norte', '3335', 'MONTERREY', '55991264', '502', 'img122.jpg', 'Good', 'CHAVEZ'),
(20252, 'MANRIQUEZ', 'OMAR', 'Gerente de Log�stica', 'none', '2006-11-07', '2019-01-16', '45 Poniente  179', 'MONTERREY', 'Este', '3373', 'MONTERREY', '46446509', '502', 'img123.jpg', 'Good', 'ZAVALA'),
(20255, 'MARTINEZ', 'SIMON', 'Gerente de Log�stica', 'none', '2004-03-19', '2021-08-08', '20 Oriente  206', 'MONTERREY', 'Oeste', '3384', 'MONTERREY', '45534306', '502', 'img124.jpg', 'Bad', 'REYES'),
(20258, 'ZAPATA', 'CARLOS', 'Gerente de Log�stica', 'none', '2005-05-14', '2022-08-11', '39 Poniente  161', 'MONTERREY', 'Oeste', '3334', 'MONTERREY', '52534482', '502', 'img125.jpg', 'Good', 'CASTRO'),
(20261, 'VILLASE�OR', 'GUSTAVO', 'Gerente de Log�stica', 'none', '2004-10-13', '2021-08-08', '31 Poniente  137', 'MONTERREY', 'Norte', '3359', 'MONTERREY', '51452995', '502', 'img126.jpg', 'Good', 'ALONZO'),
(20264, 'MARTINEZ', 'JOSE DE JESUS', 'Gerente de Log�stica', 'none', '2004-08-21', '2019-07-01', '19 Oriente  203', 'MONTERREY', 'Sur', '3345', 'MONTERREY', '50482769', '502', 'img127.jpg', 'Good', 'MU�OZ'),
(20267, 'MADERA', 'CARLOS', 'Gerente de Log�stica', 'none', '2005-12-16', '2021-02-17', '43 Poniente  173', 'MONTERREY', 'Este', '3365', 'MONTERREY', '52982519', '502', 'img128.jpg', 'Regular', 'DIAZ'),
(20270, 'MARTINEZ', 'MARISELA', 'Gerente de Log�stica', 'none', '2005-10-20', '2019-09-05', '18 Oriente  200', 'MONTERREY', 'Este', '3379', 'MONTERREY', '51403625', '502', 'img129.jpg', 'Regular', 'ASTORGA'),
(20273, 'LUNA', 'ANDREA', 'Gerente de Log�stica', 'none', '2006-01-04', '2019-03-27', '41 Poniente  167', 'MONTERREY', 'Sur', '3390', 'MONTERREY', '49901079', '502', 'img130.jpg', 'Regular', 'BADILLO'),
(20276, 'VIRGEN', 'FERNANDO', 'Gerente de Log�stica', 'none', '2005-10-08', '2021-01-03', '33 Poniente  143', 'MONTERREY', 'Sur', '3385', 'MONTERREY', '47390415', '502', 'img131.jpg', 'Good', 'RODRIGUEZ'),
(20279, 'LOPEZ', 'JESUS ANTONIO', 'Gerente de Log�stica', 'none', '2005-08-01', '2020-05-28', '26 Poniente  122', 'MONTERREY', 'Este', '3334', 'MONTERREY', '53784132', '502', 'img132.jpg', 'Regular', 'HERNANDEZ'),
(20282, 'LUNA', 'JUAN ANTONIO', 'Gerente de Log�stica', 'none', '2005-09-20', '2020-12-07', '42 Poniente  170', 'MONTERREY', 'Sur', '3360', 'MONTERREY', '48180495', '502', 'img133.jpg', 'Bad', 'AZUARA'),
(20285, 'VITAL', 'JERRIE ANN', 'Gerente de Log�stica', 'none', '2006-01-22', '2022-11-24', '34 Poniente  146', 'MONTERREY', 'Norte', '3337', 'MONTERREY', '59372926', '502', 'img134.jpg', 'Regular', 'CHAVARRIA'),
(20288, 'MARTINEZ', 'TITO ARIEL', 'Gerente de Log�stica', 'none', '2004-04-10', '2021-03-30', '22 Oriente  212', 'MONTERREY', 'Sur', '3362', 'MONTERREY', '47907324', '502', 'img135.jpg', 'Good', 'ROJAS'),
(20291, 'MEDINA', 'JOSE LUIS', 'Gerente de Log�stica', 'none', '2005-07-31', '2019-02-26', '24 Oriente  218', 'MONTERREY', 'Oeste', '3338', 'MONTERREY', '46116807', '502', 'img136.jpg', 'Good', 'CORONADO'),
(20294, 'MARRUFO', 'HECTOR DAVID', 'Gerente de Log�stica', 'none', '2004-06-12', '2021-09-27', '48 Poniente  188', 'MONTERREY', 'Sur', '3362', 'MONTERREY', '58069248', '502', 'img137.jpg', 'Bad', 'DOMINGUEZ'),
(20297, 'MARTINEZ', 'JORGE S', 'Gerente de Log�stica', 'none', '2005-07-01', '2020-02-17', '15 Oriente  191', 'MONTERREY', 'Norte', '3335', 'MONTERREY', '51323364', '502', 'img138.jpg', 'Regular', 'BARRANCO'),
(20300, 'MARTINEZ', 'MARIANO RAMON', 'Gerente de Log�stica', 'none', '2004-10-25', '2020-08-31', '16 Oriente  194', 'MONTERREY', 'Oeste', '3338', 'MONTERREY', '55312904', '502', 'img139.jpg', 'Good', 'SOTO'),
(20303, 'MARTINEZ', 'DANTE', 'Gerente de Log�stica', 'none', '2005-02-07', '2022-04-06', '21 Oriente  209', 'MONTERREY', 'Sur', '3387', 'MONTERREY', '59528337', '502', 'img140.jpg', 'Regular', 'HUERTA'),
(20306, 'MELO', 'DORA ALICIA', 'Gerente de Log�stica', 'none', '2005-01-04', '2022-02-18', '28 Oriente  230', 'MONTERREY', 'Este', '3393', 'MONTERREY', '57476837', '502', 'img141.jpg', 'Good', 'SOLIS'),
(20309, 'MARCOS', 'RAUL ESTEBAN', 'Gerente de Log�stica', 'none', '2004-12-28', '2019-07-03', '46 Poniente  182', 'MONTERREY', 'Norte', '3337', 'MONTERREY', '59033353', '502', 'img142.jpg', 'Bad', 'GARCIA'),
(20312, 'MELLADO', 'JUAN MANUEL', 'Gerente de Log�stica', 'none', '2006-05-18', '2022-01-26', '26 Oriente  224', 'MONTERREY', 'Oeste', '3339', 'MONTERREY', '51203787', '502', 'img143.jpg', 'Bad', 'VENTURA'),
(20315, 'VIDALES', 'ROBERTO', 'Gerente de Log�stica', 'none', '2005-09-22', '2020-12-15', '28 Poniente  128', 'MONTERREY', 'Sur', '3366', 'MONTERREY', '48559094', '502', 'img144.jpg', 'Good', 'RENDON'),
(20318, 'LOYO', 'DORA ELVA', 'Gerente de Log�stica', 'none', '2005-01-31', '2019-01-26', '32 Poniente  140', 'MONTERREY', 'Sur', '3394', 'MONTERREY', '57247716', '502', 'img145.jpg', 'Good', 'GAMBOA'),
(20321, 'LOZADA', 'MARIA ETHEL', 'Gerente de Log�stica', 'none', '2005-07-01', '2021-11-28', '35 Poniente  149', 'MONTERREY', 'Oeste', '3350', 'MONTERREY', '54313834', '502', 'img146.jpg', 'Good', 'HERRERA'),
(20324, 'LOPEZ', 'JORGE ARMANDO', 'Gerente de Log�stica', 'none', '2006-04-10', '2020-09-06', '29 Poniente  131', 'MONTERREY', 'Norte', '3353', 'MONTERREY', '59228763', '502', 'img147.jpg', 'Regular', 'LOPEZ'),
(20327, 'VILLAR', 'MAXIMO', 'Gerente de Log�stica', 'none', '2005-03-17', '2021-09-24', '30 Poniente  134', 'MONTERREY', 'Norte', '3355', 'MONTERREY', '54214362', '502', 'img148.jpg', 'Regular', 'DURAN'),
(20330, 'MARTINEZ', 'FELIX', 'Gerente de Log�stica', 'none', '2004-08-27', '2020-07-28', '23 Oriente  215', 'MONTERREY', 'Norte', '3397', 'MONTERREY', '53334160', '502', 'img149.jpg', 'Good', 'GARCIA'),
(20333, 'GUERRERO', 'ANDRES ALBERTO', 'Gerente de Log�stica', 'none', '2004-11-17', '2020-10-04', '59 Norte  260', 'PUEBLA', 'Norte', '3349', 'PUEBLA', '56201750', '502', 'img156.jpg', 'Good', 'ORNELAS'),
(20336, 'GUTIERREZ', 'LUDIVINA', 'Gerente de Log�stica', 'none', '2006-05-30', '2020-10-31', '51 Sur  320', 'PUEBLA', 'Norte', '3336', 'PUEBLA', '55582847', '502', 'img157.jpg', 'Bad', 'RODRIGUEZ'),
(20339, 'RODRIGUEZ', 'EVENCIO', 'Gerente de Log�stica', 'none', '2004-03-23', '2022-05-15', '15 Norte  370', 'PUEBLA', 'Norte', '3386', 'PUEBLA', '48402521', '502', 'img158.jpg', 'Good', 'CORREA'),
(20342, 'HERNANDEZ', 'GERMAN', 'Gerente de Log�stica', 'none', '2005-03-24', '2020-05-29', '23 Poniente  615', 'PUEBLA', 'Norte', '3372', 'PUEBLA', '55708112', '502', 'img159.jpg', 'Bad', 'MORALES'),
(20345, 'CASTA�EDA', 'ANA LILIA', 'Gerente de Log�stica', 'none', '2005-11-08', '2021-11-05', '48 Sur  305', 'PUEBLA', 'Norte', '3379', 'PUEBLA', '45705592', '502', 'img160.jpg', 'Good', 'GOMEZ'),
(20348, 'GUEVARA', 'FERNANDO', 'Gerente de Log�stica', 'none', '2004-01-07', '2020-06-25', '45 Sur  290', 'PUEBLA', 'Sur', '3339', 'PUEBLA', '54278173', '502', 'img161.jpg', 'Bad', 'AGUILAR'),
(20351, 'GUTIERREZ', 'ANTONIO', 'Gerente de Log�stica', 'none', '2006-01-05', '2020-10-12', '57 Sur  350', 'PUEBLA', 'Este', '3349', 'PUEBLA', '56870677', '502', 'img162.jpg', 'Good', 'TERAN'),
(20354, 'CASTILLO', 'APOLINARIA', 'Gerente de Log�stica', 'none', '2005-04-18', '2020-11-19', '20 Norte  395', 'PUEBLA', 'Este', '3380', 'PUEBLA', '48343029', '502', 'img163.jpg', 'Bad', 'GONZALEZ'),
(20357, 'CASARES', 'MARIA DEL CARMEN', 'Gerente de Log�stica', 'none', '2006-02-28', '2022-02-17', '42 Sur  275', 'PUEBLA', 'Sur', '3383', 'PUEBLA', '49355230', '502', 'img164.jpg', 'Good', 'CERNA'),
(20360, 'HERNANDEZ', 'IRMA', 'Gerente de Log�stica', 'none', '2004-05-03', '2022-12-29', '20 Oriente  495', 'PUEBLA', 'Oeste', '3388', 'PUEBLA', '53482711', '502', 'img165.jpg', 'Good', 'ALCOCER'),
(20363, 'SALDA�A', 'IRMA GUADALUPE', 'Gerente de Log�stica', 'none', '2005-06-22', '2021-09-27', '35 Oriente  570', 'PUEBLA', 'Este', '3389', 'PUEBLA', '60384197', '502', 'img166.jpg', 'Good', 'SEQUERA'),
(20366, 'RUZ', 'ABEL EDUARDO', 'Gerente de Log�stica', 'none', '2006-12-24', '2021-09-17', '29 Oriente  540', 'PUEBLA', 'Norte', '3379', 'PUEBLA', '56721976', '502', 'img167.jpg', 'Bad', 'PRIETO'),
(20369, 'FERNANDEZ', 'SONIA ESTELA', 'Gerente de Log�stica', 'none', '2005-08-10', '2021-12-12', '18 Oriente  485', 'PUEBLA', 'Norte', '3359', 'PUEBLA', '58532518', '502', 'img168.jpg', 'Good', 'DE ANDA'),
(20372, 'RODRIGUEZ', 'MIGUEL', 'Gerente de Log�stica', 'none', '2004-05-05', '2020-11-28', '18 Norte  385', 'PUEBLA', 'Oeste', '3341', 'PUEBLA', '58018023', '502', 'img169.jpg', 'Good', 'TERRONES'),
(20375, 'SALOMON', 'CESAR JAVIER', 'Gerente de Log�stica', 'none', '2004-03-27', '2022-07-27', '26 Poniente  630', 'PUEBLA', 'Norte', '3372', 'PUEBLA', '51810784', '502', 'img170.jpg', 'Bad', 'ACEVEDO'),
(20378, 'ROSALES', 'ALFONSO', 'Gerente de Log�stica', 'none', '2004-09-13', '2022-03-18', '33 Norte  460', 'PUEBLA', 'Norte', '3370', 'PUEBLA', '47293271', '502', 'img171.jpg', 'Regular', 'DOMINGUEZ'),
(20381, 'RODRIGUEZ', 'EDUARDO', 'Gerente de Log�stica', 'none', '2004-04-08', '2022-08-25', '27 Norte  430', 'PUEBLA', 'Oeste', '3372', 'PUEBLA', '45525117', '502', 'img172.jpg', 'Regular', 'CASTILLEJA'),
(20384, 'FERNANDEZ', 'LORIS', 'Gerente de Log�stica', 'none', '2004-09-09', '2020-03-31', '26 Oriente  525', 'PUEBLA', 'Oeste', '3367', 'PUEBLA', '51258359', '502', 'img173.jpg', 'Good', 'MENDEZ'),
(20387, 'SALEH', 'VICTOR MANUEL', 'Gerente de Log�stica', 'none', '2005-05-29', '2021-01-04', '24 Poniente  620', 'PUEBLA', 'Oeste', '3349', 'PUEBLA', '56396531', '502', 'img174.jpg', 'Good', 'NAVARRETE'),
(20390, 'HERNANDEZ', 'IRENE MARGARITA', 'Gerente de Log�stica', 'none', '2006-01-13', '2022-01-07', '15 Poniente  575', 'PUEBLA', 'Sur', '3400', 'PUEBLA', '57424050', '502', 'img175.jpg', 'Bad', 'HERRERA'),
(20393, 'CASTILLO', 'ALFONSO', 'Gerente de Log�stica', 'none', '2004-05-15', '2019-06-18', '26 Norte  425', 'PUEBLA', 'Oeste', '3394', 'PUEBLA', '48663062', '502', 'img176.jpg', 'Bad', 'MARIN'),
(20396, 'GUTIERREZ', 'LEOPOLDO', 'Gerente de Log�stica', 'none', '2004-01-22', '2019-11-04', '17 Norte  380', 'PUEBLA', 'Oeste', '3397', 'PUEBLA', '56618292', '502', 'img177.jpg', 'Bad', 'VARGAS'),
(20399, 'CARRILLO', 'GERMAN', 'Gerente de Log�stica', 'none', '2006-05-02', '2019-10-20', '58 Norte  255', 'PUEBLA', 'Norte', '3391', 'PUEBLA', '50444384', '502', 'img178.jpg', 'Regular', 'VALDIVIESO'),
(20402, 'RODRIGUEZ', 'ROSALIA', 'Gerente de Log�stica', 'none', '2006-07-13', '2019-01-14', '21 Norte  400', 'PUEBLA', 'Sur', '3347', 'PUEBLA', '54817674', '502', 'img179.jpg', 'Bad', 'CANO'),
(20405, 'SALDIVAR', 'SERGIO', 'Gerente de Log�stica', 'none', '2004-02-17', '2022-06-22', '18 Poniente  590', 'PUEBLA', 'Oeste', '3339', 'PUEBLA', '52598712', '502', 'img180.jpg', 'Good', 'GAONA'),
(20408, 'RODRIGUEZ', 'ENRIQUE', 'Gerente de Log�stica', 'none', '2005-03-15', '2020-12-13', '58 Sur  355', 'PUEBLA', 'Norte', '3390', 'PUEBLA', '48199552', '502', 'img181.jpg', 'Regular', 'LOPEZ'),
(20411, 'HERNANDEZ', 'MARTHA ELVA', 'Gerente de Log�stica', 'none', '2005-06-15', '2019-07-01', '32 Norte  455', 'PUEBLA', 'Norte', '3364', 'PUEBLA', '60004192', '502', 'img182.jpg', 'Regular', 'LOPEZ'),
(20414, 'GUZMAN', 'VICENTE', 'Gerente de Log�stica', 'none', '2005-06-11', '2022-01-22', '23 Norte  410', 'PUEBLA', 'Sur', '3373', 'PUEBLA', '51275553', '502', 'img183.jpg', 'Good', 'CAMARERO'),
(20417, 'GUZMAN', 'RUBEN ISIDRO', 'Gerente de Log�stica', 'none', '2006-11-08', '2022-03-10', '28 Norte  435', 'PUEBLA', 'Sur', '3361', 'PUEBLA', '50984320', '502', 'img184.jpg', 'Good', 'CARMONA'),
(20420, 'HERNANDEZ', 'ALEJANDRA', 'Gerente de Log�stica', 'none', '2006-04-04', '2020-06-23', '16 Oriente  475', 'PUEBLA', 'Norte', '3390', 'PUEBLA', '52750866', '502', 'img185.jpg', 'Regular', 'ZAVALA'),
(20423, 'CASTILLO', 'ALICIA', 'Gerente de Log�stica', 'none', '2006-12-06', '2022-10-07', '54 Sur  335', 'PUEBLA', 'Sur', '3333', 'PUEBLA', '50490577', '502', 'img186.jpg', 'Regular', 'CASTILLO'),
(20426, 'SANCHEZ', 'HILARIO', 'Gerente de Log�stica', 'none', '2006-06-29', '2019-05-09', '29 Poniente  645', 'PUEBLA', 'Oeste', '3386', 'PUEBLA', '54676268', '502', 'img187.jpg', 'Good', 'VAZQUEZ'),
(20429, 'CASTILLO', 'JAIME HIPOLITO', 'Gerente de Log�stica', 'none', '2004-12-16', '2022-09-29', '60 Sur  365', 'PUEBLA', 'Sur', '3390', 'PUEBLA', '47758108', '502', 'img188.jpg', 'Bad', 'RAMIREZ'),
(20432, 'GALICIA', 'EVERARDO JACINTO', 'Gerente de Log�stica', 'none', '2006-12-27', '2019-01-28', '25 Poniente  625', 'PUEBLA', 'Sur', '3333', 'PUEBLA', '54566703', '502', 'img189.jpg', 'Good', 'AVILES'),
(20435, 'DOMINGUEZ', 'LOURDES GUADALUPE', 'Gerente de Log�stica', 'none', '2004-06-07', '2019-11-26', '41 Sur  270', 'PUEBLA', 'Norte', '3348', 'PUEBLA', '49434024', '502', 'img190.jpg', 'Regular', 'DEL CAMPO'),
(20438, 'ESPINOSA', 'RAMON', 'Gerente de Log�stica', 'none', '2006-05-15', '2020-01-01', '59 Sur  360', 'PUEBLA', 'Este', '3390', 'PUEBLA', '59407672', '502', 'img191.jpg', 'Good', 'ZENTELLA'),
(20441, 'ROA', 'LUIS F', 'Gerente de Log�stica', 'none', '2006-02-28', '2021-10-08', '43 Sur  280', 'PUEBLA', 'Este', '3357', 'PUEBLA', '50091842', '502', 'img192.jpg', 'Bad', 'CASTILLO'),
(20444, 'RODRIGUEZ', 'LUZ DEL CARMEN', 'Gerente de Log�stica', 'none', '2004-12-21', '2019-01-24', '46 Sur  295', 'PUEBLA', 'Sur', '3342', 'PUEBLA', '57366247', '502', 'img193.jpg', 'Regular', 'MEZQUITA'),
(20447, 'RODRIGUEZ', 'GABRIEL ANTONIO GERARDO', 'Gerente de Log�stica', 'none', '2004-11-02', '2019-06-25', '52 Sur  325', 'PUEBLA', 'Este', '3370', 'PUEBLA', '60566231', '502', 'img194.jpg', 'Regular', 'SANTOS'),
(20450, 'RUIZ', 'IRMA', 'Gerente de Log�stica', 'none', '2005-07-26', '2019-09-04', '21 Oriente  500', 'PUEBLA', 'Sur', '3364', 'PUEBLA', '52792811', '502', 'img195.jpg', 'Good', 'TALAVERA'),
(20453, 'FERNANDEZ', 'IRMA', 'Gerente de Log�stica', 'none', '2005-01-19', '2019-12-18', '22 Oriente  505', 'PUEBLA', 'Sur', '3365', 'PUEBLA', '52931610', '502', 'img196.jpg', 'Regular', 'ACU�A DE JUAREZ'),
(20456, 'SALAS', 'CUAUHTEMOC', 'Gerente de Log�stica', 'none', '2006-05-22', '2020-08-15', '31 Oriente  550', 'PUEBLA', 'Norte', '3380', 'PUEBLA', '48966123', '502', 'img197.jpg', 'Bad', 'LARA'),
(20459, 'RODRIGUEZ', 'OSCAR', 'Gerente de Log�stica', 'none', '2005-07-29', '2020-12-15', '55 Sur  340', 'PUEBLA', 'Norte', '3355', 'PUEBLA', '51340449', '502', 'img198.jpg', 'Bad', 'ALONSO'),
(20462, 'CASTILLO', 'RAUL', 'Gerente de Log�stica', 'none', '2006-02-28', '2022-01-31', '56 Sur  345', 'PUEBLA', 'Norte', '3398', 'PUEBLA', '52876902', '502', 'img199.jpg', 'Good', 'ACEVEDO'),
(20465, 'ETIENNE', 'FRANCISCO', 'Gerente de Log�stica', 'none', '2005-03-08', '2022-03-18', '30 Norte  445', 'PUEBLA', 'Oeste', '3369', 'PUEBLA', '48049785', '502', 'img200.jpg', 'Bad', 'GONZALEZ'),
(20468, 'RUIZ', 'GLORIA ISELA', 'Gerente de Log�stica', 'none', '2004-08-03', '2019-06-30', '17 Oriente  480', 'PUEBLA', 'Oeste', '3380', 'PUEBLA', '49847891', '502', 'img201.jpg', 'Regular', 'HERNANDEZ'),
(20471, 'FLORES', 'VICTOR', 'Gerente de Log�stica', 'none', '2006-10-10', '2021-11-13', '17 Poniente  585', 'PUEBLA', 'Este', '3374', 'PUEBLA', '60870642', '502', 'img202.jpg', 'Bad', 'GOMEZ'),
(20474, 'RODRIGUEZ', 'DULCE MARIA', 'Gerente de Log�stica', 'none', '2005-11-05', '2020-10-20', '49 Sur  310', 'PUEBLA', 'Oeste', '3398', 'PUEBLA', '51536829', '502', 'img203.jpg', 'Regular', 'SANTIESTEBAN'),
(20477, 'SALAS', 'RODRIGO', 'Gerente de Log�stica', 'none', '2005-09-21', '2021-12-08', '33 Oriente  560', 'PUEBLA', 'Oeste', '3337', 'PUEBLA', '53972722', '502', 'img204.jpg', 'Bad', 'GONZALEZ'),
(20480, 'RESENDIZ', 'ARTURO MANUEL', 'Gerente de Log�stica', 'none', '2004-09-05', '2022-07-24', '57 Norte  250', 'PUEBLA', 'Oeste', '3345', 'PUEBLA', '49339826', '502', 'img205.jpg', 'Good', 'VILLASE�OR'),
(20483, 'CASARES', 'JOSE EMILIO', 'Gerente de Log�stica', 'none', '2005-12-30', '2019-10-17', '44 Sur  285', 'PUEBLA', 'Oeste', '3358', 'PUEBLA', '54048095', '502', 'img206.jpg', 'Good', 'CARRE�O'),
(20486, 'CASTILLO', 'RAFAEL', 'Gerente de Log�stica', 'none', '2004-03-18', '2020-08-24', '22 Norte  405', 'PUEBLA', 'Oeste', '3351', 'PUEBLA', '56745423', '502', 'img207.jpg', 'Good', 'CAMPILLO'),
(20489, 'ROMERO', 'ESTELA C', 'Gerente de Log�stica', 'none', '2004-07-18', '2019-08-14', '29 Norte  440', 'PUEBLA', 'Este', '3374', 'PUEBLA', '46214629', '502', 'img208.jpg', 'Good', 'TORRES'),
(20492, 'RUIZ', 'ALEJANDRO TRINIDAD', 'Gerente de Log�stica', 'none', '2006-11-16', '2022-05-01', '23 Oriente  510', 'PUEBLA', 'Sur', '3346', 'PUEBLA', '60445190', '502', 'img209.jpg', 'Good', 'DELGADO'),
(20495, 'HERNANDEZ', 'ROSA ELENA', 'Gerente de Log�stica', 'none', '2006-10-21', '2020-03-16', '24 Oriente  515', 'PUEBLA', 'Oeste', '3364', 'PUEBLA', '47777266', '502', 'img210.jpg', 'Good', 'PEREZ'),
(20498, 'RUIZ', 'JUAN', 'Gerente de Log�stica', 'none', '2005-02-13', '2020-10-20', '25 Oriente  520', 'PUEBLA', 'Sur', '3368', 'PUEBLA', '57970382', '502', 'img211.jpg', 'Good', 'SALDIVAR'),
(20501, 'RUIZ', 'ROMMEL RAMON', 'Gerente de Log�stica', 'none', '2006-12-12', '2020-10-14', '27 Oriente  530', 'PUEBLA', 'Oeste', '3393', 'PUEBLA', '59791605', '502', 'img212.jpg', 'Bad', 'HERRERA'),
(20504, 'HERNANDEZ', 'JULIO', 'Gerente de Log�stica', 'none', '2004-03-13', '2022-04-14', '32 Oriente  555', 'PUEBLA', 'Este', '3400', 'PUEBLA', '57217538', '502', 'img213.jpg', 'Regular', 'PLATAS'),
(20507, 'FLORES', 'JUAN MANUEL', 'Gerente de Almac�n', 'none', '2005-03-03', '2019-07-06', '34 Oriente  565', 'PUEBLA', 'Oeste', '3371', 'PUEBLA', '57410328', '502', 'img214.jpg', 'Regular', 'VERA'),
(20510, 'SALDA�A', 'SONIA', 'Gerente de Almac�n', 'none', '2004-08-13', '2019-03-30', '16 Poniente  580', 'PUEBLA', 'Este', '3361', 'PUEBLA', '52248971', '502', 'img215.jpg', 'Good', 'GUZMAN'),
(20513, 'HERNANDEZ', 'PEDRO INES', 'Gerente de Almac�n', 'none', '2005-12-15', '2019-11-09', '19 Poniente  595', 'PUEBLA', 'Sur', '3352', 'PUEBLA', '51106693', '502', 'img216.jpg', 'Bad', 'OBREGON'),
(20516, 'SALEH', 'JORGE', 'Gerente de Almac�n', 'none', '2006-05-17', '2019-05-23', '20 Poniente  600', 'PUEBLA', 'Sur', '3391', 'PUEBLA', '56292795', '502', 'img217.jpg', 'Regular', 'MEJIA'),
(20519, 'HERNANDEZ', 'JUAN RAMON', 'Gerente de Almac�n', 'none', '2004-11-21', '2021-06-11', '27 Poniente  635', 'PUEBLA', 'Este', '3377', 'PUEBLA', '53587618', '502', 'img218.jpg', 'Bad', 'MIGUEL'),
(20522, 'SAN MIGUEL', 'MARIA CONCEPCION', 'Gerente de Almac�n', 'none', '2005-10-26', '2022-05-29', '28 Poniente  640', 'PUEBLA', 'Este', '3360', 'PUEBLA', '52107019', '502', 'img219.jpg', 'Bad', 'SALOMON'),
(20525, 'HERNANDEZ', 'JUANA', 'Gerente de Almac�n', 'none', '2005-04-11', '2021-08-30', '28 Oriente  535', 'PUEBLA', 'Sur', '3350', 'PUEBLA', '57934813', '502', 'img220.jpg', 'Good', 'FRAGOSO'),
(20528, 'CASTILLO', 'ISABEL CRISTINA', 'Gerente de Almac�n', 'none', '2005-02-13', '2022-03-04', '16 Norte  375', 'PUEBLA', 'Norte', '3353', 'PUEBLA', '57234010', '502', 'img221.jpg', 'Regular', 'DIAZ'),
(20531, 'REYES', 'MAURILIO', 'Gerente de Almac�n', 'none', '2005-10-20', '2021-11-10', '60 Norte  265', 'PUEBLA', 'Oeste', '3339', 'PUEBLA', '55740427', '502', 'img222.jpg', 'Regular', 'LAGUNES'),
(20534, 'RUIZ', 'MARTIN', 'Gerente de Almac�n', 'none', '2005-06-30', '2022-11-13', '19 Oriente  490', 'PUEBLA', 'Sur', '3362', 'PUEBLA', '52421424', '502', 'img223.jpg', 'Regular', 'GONZALEZ'),
(20537, 'FRAUSTRO', 'JOSE LUIS', 'Gerente de Almac�n', 'none', '2005-05-04', '2022-04-07', '21 Poniente  605', 'PUEBLA', 'Oeste', '3346', 'PUEBLA', '59570943', '502', 'img224.jpg', 'Good', 'SANTILLAN'),
(20540, 'FERRO', 'MIGUEL', 'Supervisor de Pedidos', 'none', '2006-08-10', '2022-09-29', '30 Oriente  545', 'PUEBLA', 'Sur', '3386', 'PUEBLA', '52993627', '502', 'img225.jpg', 'Regular', 'GONZALEZ'),
(20543, 'ROQUE', 'FERNANDO', 'Supervisor de Pedidos', 'none', '2006-07-05', '2020-05-07', '31 Norte  450', 'PUEBLA', 'Sur', '3348', 'PUEBLA', '55955063', '502', 'img226.jpg', 'Good', 'JEREZ'),
(20546, 'FERNANDEZ', 'MARIO LUIS', 'Supervisor de Pedidos', 'none', '2004-12-27', '2022-07-10', '34 Norte  465', 'PUEBLA', 'Norte', '3343', 'PUEBLA', '58263930', '502', 'img227.jpg', 'Regular', 'SANTIAGO'),
(20549, 'ESPARZA', 'OLGA LUCIA', 'Supervisor de Pedidos', 'none', '2005-02-21', '2020-09-11', '47 Sur  300', 'PUEBLA', 'Norte', '3349', 'PUEBLA', '52309089', '502', 'img228.jpg', 'Bad', 'GONZALEZ'),
(20552, 'SALEH', 'JORGE EUSEBIO', 'Supervisor de Pedidos', 'none', '2005-06-04', '2019-10-24', '22 Poniente  610', 'PUEBLA', 'Oeste', '3345', 'PUEBLA', '60502221', '502', 'img229.jpg', 'Good', 'BERROS');
INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`) VALUES
(20555, 'BERNAL', 'MARCO ANTONIO', 'Supervisor de Pedidos', 'none', '2005-02-17', '2019-11-26', '54 Sur  304', 'TAMPICO', 'Norte', '3394', 'TAMPICO', '58239939', '502', 'img242.jpg', 'Regular', 'CORTES'),
(20558, 'BAEZ', 'ALEJANDRO', 'Supervisor de Pedidos', 'none', '2006-12-24', '2022-09-20', '32 Sur  260', 'TAMPICO', 'Este', '3357', 'TAMPICO', '54965300', '502', 'img243.jpg', 'Bad', 'AGUAYO'),
(20561, 'PINEYRO', 'MARIA ISELA', 'Supervisor de Pedidos', 'none', '2005-02-25', '2020-01-01', '55 Sur  306', 'TAMPICO', 'Sur', '3374', 'TAMPICO', '60044773', '502', 'img244.jpg', 'Bad', 'REYES'),
(20564, 'CUEVAS', 'YUDITH', 'Supervisor de Pedidos', 'none', '2005-09-26', '2020-11-16', '25 Norte  90', 'TAMPICO', 'Este', '3363', 'TAMPICO', '50839425', '502', 'img245.jpg', 'Good', 'FIGUEROA'),
(20567, 'PESCADOR', 'EDUARDO LUIS', 'Supervisor de Pedidos', 'none', '2004-04-07', '2019-02-09', '43 Sur  282', 'TAMPICO', 'Norte', '3385', 'TAMPICO', '55728129', '502', 'img246.jpg', 'Bad', 'TREVI�O'),
(20570, 'DAVALOS', 'LUZ MARIA', 'Supervisor de Pedidos', 'none', '2006-11-04', '2021-12-23', '31 Norte  120', 'TAMPICO', 'Oeste', '3368', 'TAMPICO', '60360676', '502', 'img247.jpg', 'Regular', 'POZOS'),
(20573, 'BADILLO', 'ANGEL', 'Supervisor de Pedidos', 'none', '2004-05-03', '2019-01-24', '20 Oriente  516', 'TAMPICO', 'Norte', '3391', 'TAMPICO', '59258304', '502', 'img248.jpg', 'Regular', 'VAZQUEZ'),
(20576, 'COSIO', 'ELIA ELIZABETH', 'Supervisor de Pedidos', 'none', '2005-03-11', '2022-11-20', '47 Sur  290', 'TAMPICO', 'Oeste', '3337', 'TAMPICO', '45833520', '502', 'img249.jpg', 'Good', 'LAZCARI'),
(20579, 'BURGUE�O', 'JORGE HORACIO', 'Supervisor de Pedidos', 'none', '2005-03-17', '2019-08-18', '20 Norte  65', 'TAMPICO', 'Norte', '3364', 'TAMPICO', '59498446', '502', 'img250.jpg', 'Good', 'RODRIGUEZ'),
(20582, 'CAGNANT', 'ANTONIO', 'Supervisor de Pedidos', 'none', '2006-12-20', '2020-08-31', '32 Norte  125', 'TAMPICO', 'Norte', '3344', 'TAMPICO', '56447060', '502', 'img251.jpg', 'Good', 'SANDOVAL'),
(20585, 'GONZALEZ', 'MIDELA', 'Supervisor de Pedidos', 'none', '2006-05-16', '2019-03-27', '23 Norte  80', 'TAMPICO', 'Sur', '3337', 'TAMPICO', '51987919', '502', 'img252.jpg', 'Bad', 'HERNANDEZ'),
(20588, 'CORREA', 'GUADALUPE', 'Coordinador de Pedidos', 'none', '2005-09-28', '2019-08-15', '46 Oriente  490', 'TAMPICO', 'Este', '3336', 'TAMPICO', '53174407', '502', 'img253.jpg', 'Good', 'VALDEZ'),
(20591, 'RAMIREZ', 'PORFIRIO', 'Coordinador de Pedidos', 'none', '2005-04-05', '2021-02-27', '27 Norte  100', 'TAMPICO', 'Este', '3354', 'TAMPICO', '59120921', '502', 'img254.jpg', 'Good', 'BELTRAN'),
(55055, 'CADENA', 'CARLOS MANUEL', 'Coordinador de Pedidos', 'none', '2004-03-08', '2019-12-16', '28 Norte  105', 'TAMPICO', 'Norte', '3395', 'TAMPICO', '45944492', '502', 'img255.jpg', 'Regular', 'BARRIENTOS'),
(55062, 'CRUZ', 'RAUL', 'Coordinador de Pedidos', 'none', '2005-02-04', '2020-03-01', '53 Sur  302', 'TAMPICO', 'Oeste', '3395', 'TAMPICO', '50158179', '502', 'img256.jpg', 'Bad', 'ARGUELLO'),
(55069, 'BENITEZ', 'RAUL', 'Coordinador de Pedidos', 'none', '2005-06-22', '2020-06-17', '50 Sur  296', 'TAMPICO', 'Sur', '3369', 'TAMPICO', '50555592', '502', 'img257.jpg', 'Good', 'FLOTA'),
(55076, 'CAMARENA', 'ELISA', 'Coordinador de Transporte', 'none', '2004-08-15', '2022-09-26', '34 Norte  135', 'TAMPICO', 'Oeste', '3363', 'TAMPICO', '50012927', '502', 'img258.jpg', 'Bad', 'JUAREZ'),
(55083, 'GRAJALES', 'MIGUEL', 'Coordinador de Transporte', 'none', '2005-03-31', '2021-04-22', '47 Norte  200', 'TAMPICO', 'Sur', '3396', 'TAMPICO', '49279654', '502', 'img259.jpg', 'Bad', 'MENDEZ'),
(55090, 'RAMOS', 'JERONIMO', 'Coordinador de Transporte', 'none', '2005-05-10', '2022-09-04', '45 Norte  190', 'TAMPICO', 'Este', '3336', 'TAMPICO', '56571440', '502', 'img260.jpg', 'Bad', 'CABRERA'),
(55097, 'DE LEON', 'MARCOS', 'Coordinador de Transporte', 'none', '2005-01-03', '2020-12-19', '37 Norte  150', 'TAMPICO', 'Este', '3372', 'TAMPICO', '58399988', '502', 'img261.jpg', 'Regular', 'CHONG'),
(55104, 'GONZALEZ', 'FELIX', 'Coordinador de Transporte', 'none', '2004-06-13', '2022-12-07', '57 Sur  20', 'TAMPICO', 'Este', '3350', 'TAMPICO', '60059105', '502', 'img262.jpg', 'Bad', 'BARCENAS'),
(55111, 'AZAMAR', 'JOSE ANTONIO', 'Coordinador de Transporte', 'none', '2004-08-21', '2019-08-28', '26 Poniente  156', 'TAMPICO', 'Sur', '3336', 'TAMPICO', '58023983', '502', 'img263.jpg', 'Good', 'GONZALEZ'),
(55118, 'PEREZ', 'CELIA MALICE', 'Coordinador de Transporte', 'none', '2005-07-29', '2021-07-15', '37 Sur  270', 'TAMPICO', 'Norte', '3399', 'TAMPICO', '50781532', '502', 'img264.jpg', 'Regular', 'VELEZ'),
(55125, 'CARDENAS', 'GUADALUPE JUAN J', 'Coordinador de Transporte', 'none', '2005-06-07', '2020-08-30', '50 Norte  215', 'TAMPICO', 'Norte', '3396', 'TAMPICO', '50481284', '502', 'img265.jpg', 'Regular', 'FRANCO'),
(55132, 'RAMIREZ', 'RAMON MARCO ANTONIO', 'Coordinador de Transporte', 'none', '2005-09-30', '2020-07-21', '30 Norte  115', 'TAMPICO', 'Norte', '3386', 'TAMPICO', '54029809', '502', 'img266.jpg', 'Bad', 'VARGAS'),
(55139, 'RESENDEZ', 'IRVING ABELARDO', 'Coordinador de Transporte', 'none', '2005-02-26', '2020-09-08', '51 Norte  220', 'TAMPICO', 'Sur', '3386', 'TAMPICO', '49942754', '502', 'img267.jpg', 'Bad', 'MARTINEZ'),
(55146, 'PINO', 'MARIA DE LAS MERCEDES', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-09-06', '2019-01-30', '58 Sur  25', 'TAMPICO', 'Oeste', '3391', 'TAMPICO', '47557151', '502', 'img268.jpg', 'Good', 'WESCHE'),
(55153, 'GONZALEZ', 'ALBERTO GUSTAVO', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-03-16', '2020-10-26', '33 Sur  262', 'TAMPICO', 'Norte', '3352', 'TAMPICO', '57816279', '502', 'img269.jpg', 'Regular', 'TAPIA'),
(55160, 'GONZALEZ', 'MARIA ESTHER', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-03-14', '2021-07-04', '45 Sur  286', 'TAMPICO', 'Norte', '3371', 'TAMPICO', '49720597', '502', 'img270.jpg', 'Bad', 'PEREZ'),
(55167, 'PICASO', 'CONCEPCION', 'T�cnico en Embalaje y Etiquetado', 'none', '2004-09-02', '2019-04-02', '46 Sur  288', 'TAMPICO', 'Sur', '3346', 'TAMPICO', '49904555', '502', 'img271.jpg', 'Good', 'MONCADA'),
(55174, 'CUELLAR', 'ROGELIO', 'T�cnico en Embalaje y Etiquetado', 'none', '2004-05-21', '2019-07-14', '19 Norte  60', 'TAMPICO', 'Oeste', '3351', 'TAMPICO', '52143921', '502', 'img272.jpg', 'Bad', 'SANCHEZ'),
(55181, 'RAMIREZ', 'PEDRO ALEJANDRO', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-07-18', '2019-02-03', '39 Norte  160', 'TAMPICO', 'Oeste', '3396', 'TAMPICO', '48912800', '502', 'img273.jpg', 'Regular', 'SANCHEZ'),
(55188, 'CANCHE', 'GUADALUPE', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-04-25', '2020-12-12', '40 Norte  165', 'TAMPICO', 'Norte', '3387', 'TAMPICO', '60192192', '502', 'img274.jpg', 'Good', 'RODRIGUEZ'),
(55195, 'GONZALEZ', 'RAUL', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-05-18', '2022-02-02', '41 Norte  170', 'TAMPICO', 'Sur', '3373', 'TAMPICO', '59946501', '502', 'img275.jpg', 'Good', 'DIAZ'),
(55202, 'RAMIREZ', 'ANGEL', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-02-24', '2020-12-17', '42 Norte  175', 'TAMPICO', 'Norte', '3339', 'TAMPICO', '49767699', '502', 'img276.jpg', 'Good', 'JIMENEZ'),
(55209, 'CARMONA', 'MARIA ELENA', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-09-21', '2022-07-22', '52 Norte  225', 'TAMPICO', 'Norte', '3352', 'TAMPICO', '57302981', '502', 'img277.jpg', 'Regular', 'CARDOS'),
(55216, 'GONZALEZ', 'LUZ MARIA', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-01-28', '2020-09-25', '39 Sur  274', 'TAMPICO', 'Este', '3365', 'TAMPICO', '51223933', '502', 'img278.jpg', 'Regular', 'VERANO'),
(55223, 'PEREZ', 'OSCAR WILBERTH', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-05-16', '2021-05-21', '40 Sur  276', 'TAMPICO', 'Este', '3370', 'TAMPICO', '53710292', '502', 'img279.jpg', 'Good', 'BORDE'),
(55230, 'CORTES', 'LUISA IDALIA', 'T�cnico en Embalaje y Etiquetado', 'none', '2004-11-15', '2020-09-17', '41 Sur  278', 'TAMPICO', 'Sur', '3353', 'TAMPICO', '46322693', '502', 'img280.jpg', 'Regular', 'BALDEMAR'),
(55237, 'CANTO', 'JUAN MANUEL', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-09-23', '2020-08-11', '44 Norte  185', 'TAMPICO', 'Oeste', '3337', 'TAMPICO', '59189310', '502', 'img281.jpg', 'Bad', 'CASTILLO'),
(55244, 'PEREZ', 'ALBERTO ARMANDO', 'T�cnico en Embalaje y Etiquetado', 'none', '2005-12-25', '2022-08-16', '31 Sur  258', 'TAMPICO', 'Norte', '3361', 'TAMPICO', '58664915', '502', 'img282.jpg', 'Regular', 'BECERRA'),
(55251, 'BUTRON', 'PATRICIA VICTORIA', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-09-08', '2020-01-17', '22 Norte  75', 'TAMPICO', 'Oeste', '3342', 'TAMPICO', '52012466', '502', 'img283.jpg', 'Good', 'LIRA'),
(55258, 'RAFFUL', 'JOSE ANTONIO', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-03-16', '2020-05-15', '21 Norte  70', 'TAMPICO', 'Este', '3363', 'TAMPICO', '53801239', '502', 'img284.jpg', 'Bad', 'LOREDO'),
(55265, 'BA�UELOS', 'JESUS R', 'T�cnico en Embalaje y Etiquetado', 'none', '2006-05-07', '2022-06-21', '42 Sur  280', 'TAMPICO', 'Norte', '3394', 'TAMPICO', '45335744', '502', 'img285.jpg', 'Bad', 'GONGORA'),
(55272, 'BRAVO', 'MARIA DOLORES', 'T�cnico en Embalaje y Etiquetado', 'none', '2004-05-07', '2019-02-16', '60 Sur  35', 'TAMPICO', 'Norte', '3338', 'TAMPICO', '53930439', '502', 'img286.jpg', 'Bad', 'LOREDO'),
(55279, 'BAEZ', 'BENITO', 'Operador de Almac�n', 'none', '2005-04-02', '2022-12-11', '36 Sur  268', 'TAMPICO', 'Norte', '3338', 'TAMPICO', '50714956', '502', 'img287.jpg', 'Good', 'GONZALEZ'),
(55286, 'GONZALEZ', 'DEBBI', 'Operador de Almac�n', 'none', '2005-02-28', '2021-08-03', '44 Oriente  492', 'TAMPICO', 'Oeste', '3391', 'TAMPICO', '53405333', '502', 'img288.jpg', 'Good', 'BUENO'),
(55293, 'PEREDA', 'MARIA MERCEDES', 'Operador de Almac�n', 'none', '2005-07-13', '2020-01-03', '24 Poniente  152', 'TAMPICO', 'Oeste', '3363', 'TAMPICO', '51981418', '502', 'img289.jpg', 'Bad', 'RAMOS'),
(55300, 'PI�EIRO', 'JOSE ANGEL', 'Operador de Almac�n', 'none', '2004-03-24', '2022-06-28', '15 Norte  40', 'TAMPICO', 'Este', '3384', 'TAMPICO', '47396571', '502', 'img290.jpg', 'Good', 'YOPIHUA'),
(55307, 'GONZALEZ', 'MARTHA', 'Operador de Almac�n', 'none', '2006-06-02', '2022-07-31', '17 Norte  50', 'TAMPICO', 'Norte', '3399', 'TAMPICO', '51562436', '502', 'img291.jpg', 'Bad', 'SUAREZ'),
(55314, 'RAHME', 'MAYRA', 'Operador de Almac�n', 'none', '2006-05-25', '2020-05-14', '24 Norte  85', 'TAMPICO', 'Este', '3347', 'TAMPICO', '57074406', '502', 'img292.jpg', 'Bad', 'GUTIERREZ'),
(55321, 'CABRERA', 'ANTONIO', 'Operador de Almac�n', 'none', '2005-05-28', '2019-08-14', '26 Norte  95', 'TAMPICO', 'Oeste', '3394', 'TAMPICO', '51194343', '502', 'img293.jpg', 'Good', 'CANALES'),
(55328, 'GONZALEZ', 'FRANCISCO JAVIER', 'Operador de Almac�n', 'none', '2004-09-13', '2022-02-15', '29 Norte  110', 'TAMPICO', 'Sur', '3375', 'TAMPICO', '46266602', '502', 'img294.jpg', 'Bad', 'ALMAZAN'),
(55335, 'DE LEON', 'GUADALUPE', 'Operador de Almac�n', 'none', '2005-11-14', '2021-12-14', '43 Norte  180', 'TAMPICO', 'Sur', '3345', 'TAMPICO', '54033877', '502', 'img295.jpg', 'Bad', 'GUERRERO'),
(55342, 'GUERRERO', 'GERARDO', 'Operador de Almac�n', 'none', '2006-05-05', '2019-01-28', '53 Norte  230', 'TAMPICO', 'Este', '3355', 'TAMPICO', '45598610', '502', 'img296.jpg', 'Bad', 'CRUZ'),
(55349, 'RESENDIZ', 'LUIS HUMBERTO', 'Operador de Almac�n', 'none', '2004-04-24', '2022-10-18', '54 Norte  235', 'TAMPICO', 'Este', '3358', 'TAMPICO', '46878934', '502', 'img297.jpg', 'Good', 'ORTIZ'),
(55356, 'CARRERA', 'JORGE ALBERTO', 'Operador de Almac�n', 'none', '2004-10-05', '2019-09-22', '56 Norte  245', 'TAMPICO', 'Sur', '3347', 'TAMPICO', '57994371', '502', 'img298.jpg', 'Regular', 'CETINA'),
(55363, 'RAMIREZ', 'ANTONIO', 'Operador de Empaque', 'none', '2004-03-17', '2022-02-13', '36 Norte  145', 'TAMPICO', 'Este', '3390', 'TAMPICO', '52965577', '502', 'img299.jpg', 'Regular', 'ASTILLERO'),
(55370, 'REBOLLEDO', 'NORMA', 'Operador de Empaque', 'none', '2006-09-28', '2019-11-16', '48 Norte  205', 'TAMPICO', 'Este', '3393', 'TAMPICO', '56572192', '502', 'img300.jpg', 'Good', 'FLORES'),
(55377, 'PURON', 'MARTA ELENA', 'Operador de Empaque', 'none', '2004-07-15', '2020-12-20', '18 Norte  55', 'TAMPICO', 'Sur', '3375', 'TAMPICO', '51007578', '502', 'img301.jpg', 'Good', 'SANTOS'),
(55384, 'GONZALEZ', 'JOSE FERNANDO', 'Operador de Empaque', 'none', '2006-09-17', '2019-03-07', '35 Norte  140', 'TAMPICO', 'Sur', '3365', 'TAMPICO', '60223857', '502', 'img302.jpg', 'Bad', 'PEREZ'),
(55391, 'CONTRERAS', 'JOSE DANIEL', 'Operador de Empaque', 'none', '2005-05-24', '2022-02-02', '25 Poniente  154', 'TAMPICO', 'Sur', '3341', 'TAMPICO', '54579234', '502', 'img303.jpg', 'Bad', 'MONFORTE BRITO'),
(55398, 'RAMIREZ', 'JORGE', 'Operador de Empaque', 'none', '2004-04-15', '2021-07-20', '33 Norte  130', 'TAMPICO', 'Oeste', '3348', 'TAMPICO', '55957942', '502', 'img304.jpg', 'Regular', 'CASTILLO'),
(55405, 'CORTAZAR', 'PEDRO', 'Operador de Empaque', 'none', '2006-08-09', '2019-02-10', '35 Sur  266', 'TAMPICO', 'Oeste', '3393', 'TAMPICO', '57101700', '502', 'img305.jpg', 'Bad', 'LOPEZ'),
(55412, 'PEREZ', 'FLORA', 'Operador de Empaque', 'none', '2005-08-26', '2021-08-21', '34 Sur  264', 'TAMPICO', 'Oeste', '3333', 'TAMPICO', '51752709', '502', 'img306.jpg', 'Bad', 'MARIN'),
(55419, 'DOMINGUEZ', 'RAUL IVAN', 'Operador de Empaque', 'none', '2005-02-07', '2019-06-26', '55 Norte  240', 'TAMPICO', 'Norte', '3356', 'TAMPICO', '55517599', '502', 'img307.jpg', 'Regular', 'CORONEL'),
(55426, 'DOMINGUEZ', 'SAUL', 'Operador de Empaque', 'none', '2004-06-28', '2019-05-04', '49 Norte  210', 'TAMPICO', 'Norte', '3364', 'TAMPICO', '47875486', '502', 'img308.jpg', 'Regular', 'GONZALEZ'),
(55433, 'CAMARGO', 'MARIA DEL SOCORRO', 'Operador de Empaque', 'none', '2006-03-12', '2022-01-29', '38 Norte  155', 'TAMPICO', 'Este', '3385', 'TAMPICO', '49452751', '502', 'img309.jpg', 'Good', 'TORRES'),
(55440, 'GONZALEZ', 'JESUS ABIMAEL', 'Operador de Empaque', 'none', '2005-12-04', '2020-03-15', '51 Sur  298', 'TAMPICO', 'Sur', '3400', 'TAMPICO', '51898097', '502', 'img310.jpg', 'Good', 'CONTRERAS'),
(55447, 'BENITEZ', 'JOSEFA', 'Asistente de Control de Inventarios', 'none', '2005-03-07', '2021-03-31', '48 Sur  292', 'TAMPICO', 'Este', '3355', 'TAMPICO', '58180392', '502', 'img311.jpg', 'Good', 'GUEVARA'),
(55454, 'MOTA', 'CONCEPCION', 'Asistente de Control de Inventarios', 'none', '2004-09-12', '2020-06-09', '33 Poniente  170', 'VERACRUZ', 'Sur', '3335', 'VERACRUZ', '46576520', '502', 'img318.jpg', 'Regular', 'CASTILLO'),
(55461, 'GALLO', 'JOSE ANTONIO', 'Asistente de Control de Inventarios', 'none', '2005-04-01', '2021-09-02', '36 Poniente  176', 'VERACRUZ', 'Norte', '3381', 'VERACRUZ', '56120752', '502', 'img319.jpg', 'Bad', 'REYNA'),
(55468, 'MENA', 'JOSE CARLOS', 'Asistente de Control de Inventarios', 'none', '2004-03-21', '2019-12-13', '29 Poniente  162', 'VERACRUZ', 'Este', '3348', 'VERACRUZ', '48073137', '502', 'img320.jpg', 'Regular', 'SANCHEZ'),
(55475, 'ABREU', 'FERNANDO', 'Asistente de Control de Inventarios', 'none', '2004-01-11', '2021-11-10', '34 Poniente  172', 'VERACRUZ', 'Este', '3336', 'VERACRUZ', '54338822', '502', 'img321.jpg', 'Bad', 'AGUILAR'),
(55482, 'PALMA', 'RENE', 'Asistente de Control de Inventarios', 'none', '2004-09-15', '2019-04-21', '32 Oriente  504', 'VERACRUZ', 'Norte', '3334', 'VERACRUZ', '45255056', '502', 'img322.jpg', 'Good', 'JACOME'),
(55489, 'MORENO', 'MARIA LOURDES', 'Asistente de Control de Inventarios', 'none', '2004-01-23', '2019-05-13', '33 Oriente  503', 'VERACRUZ', 'Sur', '3354', 'VERACRUZ', '49431672', '502', 'img323.jpg', 'Good', 'GOLDARACENA'),
(55496, 'GOMEZ', 'YADIRA DEL CARMEN', 'Asistente de Control de Inventarios', 'none', '2006-03-07', '2019-11-10', '20 Poniente  144', 'VERACRUZ', 'Oeste', '3377', 'VERACRUZ', '52546067', '502', 'img324.jpg', 'Regular', 'MENDEZ'),
(55503, 'GOMEZ', 'ENRIQUE', 'Asistente de Control de Inventarios', 'none', '2006-05-07', '2019-07-26', '17 Poniente  138', 'VERACRUZ', 'Este', '3344', 'VERACRUZ', '55817614', '502', 'img325.jpg', 'Regular', 'HERRERA'),
(55510, 'MORENO', 'CUAUHTEMOC', 'Asistente de Control de Inventarios', 'none', '2005-02-17', '2019-12-18', '30 Poniente  164', 'VERACRUZ', 'Norte', '3398', 'VERACRUZ', '50028978', '502', 'img326.jpg', 'Regular', 'FLORES'),
(55517, 'MENDEZ', 'JORGE ALFREDO', 'Supervisor de Control de Calidad', 'none', '2004-06-11', '2019-04-30', '32 Poniente  168', 'VERACRUZ', 'Norte', '3391', 'VERACRUZ', '58182405', '502', 'img327.jpg', 'Good', 'BALDERAS'),
(55524, 'MENDEZ', 'GABRIEL SALVADOR', 'Supervisor de Control de Calidad', 'none', '2006-03-21', '2021-11-29', '35 Poniente  174', 'VERACRUZ', 'Norte', '3400', 'VERACRUZ', '49050245', '502', 'img328.jpg', 'Good', 'LUGO'),
(55531, 'MORALES', 'EDUARDO', 'Supervisor de Control de Calidad', 'none', '2004-08-15', '2022-10-24', '29 Oriente  507', 'VERACRUZ', 'Sur', '3349', 'VERACRUZ', '52175204', '502', 'img329.jpg', 'Good', 'PALMA'),
(55538, 'CASTRO', 'PEDRO', 'Supervisor de Control de Calidad', 'none', '2005-01-27', '2019-09-11', '31 Poniente  166', 'VERACRUZ', 'Este', '3355', 'VERACRUZ', '48266393', '502', 'img330.jpg', 'Bad', 'SANCHEZ'),
(55545, 'AVILA', 'JACINTO', 'Supervisor de Control de Calidad', 'none', '2005-09-07', '2022-04-26', '39 Oriente  497', 'VERACRUZ', 'Oeste', '3364', 'VERACRUZ', '48949299', '502', 'img331.jpg', 'Bad', 'MEJIA'),
(55552, 'PAVAGEAU', 'JOSE LUIS', 'Supervisor de Control de Calidad', 'none', '2006-07-09', '2019-06-20', '40 Oriente  496', 'VERACRUZ', 'Norte', '3342', 'VERACRUZ', '51686261', '502', 'img332.jpg', 'Bad', 'MENDEZ'),
(55559, 'MORENO', 'GERARDO JESUS', 'Supervisor de Control de Calidad', 'none', '2006-12-06', '2022-08-02', '58 Oriente  128', 'VERACRUZ', 'Sur', '3343', 'VERACRUZ', '45216306', '502', 'img333.jpg', 'Bad', 'LEAL'),
(55566, 'GIL', 'AURORA', 'Analista de Datos de Pedidos', 'none', '2004-04-17', '2022-10-14', '60 Oriente  132', 'VERACRUZ', 'Oeste', '3389', 'VERACRUZ', '54536290', '502', 'img334.jpg', 'Regular', 'GONZALEZ'),
(55573, 'AVILA', 'CARLOS ALBERTO', 'Analista de Datos de Pedidos', 'none', '2006-04-17', '2020-04-01', '41 Oriente  495', 'VERACRUZ', 'Sur', '3394', 'VERACRUZ', '45424077', '502', 'img335.jpg', 'Good', 'PE�A'),
(55580, 'COBLE', 'JUAN JOSE', 'Analista de Datos de Pedidos', 'none', '2005-01-11', '2022-12-19', '57 Oriente  126', 'VERACRUZ', 'Sur', '3397', 'VERACRUZ', '46782970', '502', 'img336.jpg', 'Bad', 'HERRERA'),
(55587, 'ARREDONDO', 'DOLORES EUGENIA', 'Analista de Datos de Pedidos', 'none', '2006-12-20', '2022-01-18', '31 Oriente  505', 'VERACRUZ', 'Norte', '3335', 'VERACRUZ', '46869520', '502', 'img337.jpg', 'Good', 'CALVO'),
(55594, 'AVALOS', 'JOSE LUIS', 'Analista de Datos de Pedidos', 'none', '2004-12-25', '2020-02-19', '36 Oriente  500', 'VERACRUZ', 'Este', '3397', 'VERACRUZ', '46904308', '502', 'img338.jpg', 'Bad', 'LIRA'),
(55601, 'PARRA', 'REBECA', 'Analista de Datos de Pedidos', 'none', '2004-06-05', '2022-07-25', '37 Oriente  499', 'VERACRUZ', 'Norte', '3373', 'VERACRUZ', '47942210', '502', 'img339.jpg', 'Good', 'WONG DE PACHECO'),
(55608, 'PELAYO', 'OBDULIO', 'Coordinador de Devoluciones', 'none', '2006-09-02', '2019-02-14', '22 Poniente  148', 'VERACRUZ', 'Oeste', '3337', 'VERACRUZ', '51760749', '502', 'img340.jpg', 'Regular', 'PEREZ'),
(55615, 'COLLINS', 'GILBERTO', 'Coordinador de Devoluciones', 'none', '2006-07-09', '2021-09-16', '18 Poniente  140', 'VERACRUZ', 'Sur', '3349', 'VERACRUZ', '52842208', '502', 'img341.jpg', 'Bad', 'LEDEZMA'),
(55622, 'COBOS', 'DANIEL', 'Coordinador de Devoluciones', 'none', '2005-07-17', '2020-02-29', '15 Poniente  134', 'VERACRUZ', 'Oeste', '3347', 'VERACRUZ', '53669866', '502', 'img342.jpg', 'Good', 'ESCUDERO'),
(55629, 'MORENO', 'MARTHA', 'Coordinador de Devoluciones', 'none', '2004-08-05', '2021-01-22', '28 Poniente  160', 'VERACRUZ', 'Norte', '3388', 'VERACRUZ', '49623677', '502', 'img343.jpg', 'Regular', 'DURAN'),
(55636, 'ARNAU', 'MARIA EUGENIA', 'Coordinador de Devoluciones', 'none', '2006-10-16', '2019-04-21', '55 Oriente  122', 'VERACRUZ', 'Norte', '3369', 'VERACRUZ', '46364613', '502', 'img344.jpg', 'Regular', 'VADILLO'),
(55643, 'ARREOLA', 'VICTOR MANUEL', 'Coordinador de Devoluciones', 'none', '2004-02-15', '2021-10-14', '59 Oriente  130', 'VERACRUZ', 'Sur', '3351', 'VERACRUZ', '57071644', '502', 'img345.jpg', 'Regular', 'MIGUEL'),
(55650, 'PARIENTE', 'JUANA BAUTISTA', 'Coordinador de Devoluciones', 'none', '2005-01-30', '2020-11-26', '16 Poniente  136', 'VERACRUZ', 'Oeste', '3359', 'VERACRUZ', '59911027', '502', 'img346.jpg', 'Good', 'GARCIA'),
(55657, 'PACHECO', 'FRANCISCO', 'Coordinador de Devoluciones', 'none', '2006-11-29', '2021-11-24', '30 Oriente  506', 'VERACRUZ', 'Norte', '3363', 'VERACRUZ', '56326326', '502', 'img347.jpg', 'Regular', 'HERRERA'),
(55664, 'AWAD', 'MARIA DEL CARMEN', 'Coordinador de Devoluciones', 'none', '2005-06-17', '2019-06-23', '42 Oriente  494', 'VERACRUZ', 'Sur', '3383', 'VERACRUZ', '58828256', '502', 'img348.jpg', 'Good', 'VAZQUEZ');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderDetails` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderDetails`, `OrderID`, `ProductID`, `UnitPrice`, `Quantity`, `Discount`) VALUES
(19, 1, 1, 200, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `RequiredDate` date DEFAULT NULL,
  `ShippedDate` date DEFAULT NULL,
  `ShipperID` int(11) DEFAULT NULL,
  `ShipVia` varchar(255) DEFAULT NULL,
  `Freight` varchar(255) DEFAULT NULL,
  `ShipName` varchar(255) DEFAULT NULL,
  `ShipAddress` varchar(255) DEFAULT NULL,
  `ShipCity` varchar(255) DEFAULT NULL,
  `ShipRegion` varchar(255) DEFAULT NULL,
  `ShipPostalCode` varchar(255) DEFAULT NULL,
  `ShipCountry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `EmployeeID`, `OrderDate`, `RequiredDate`, `ShippedDate`, `ShipperID`, `ShipVia`, `Freight`, `ShipName`, `ShipAddress`, `ShipCity`, `ShipRegion`, `ShipPostalCode`, `ShipCountry`) VALUES
(1, 1, 1, '2023-07-07', '2023-07-18', '2023-07-03', 1, 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `QuantityPerUnit` int(11) DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `UnitsInStock` int(11) DEFAULT NULL,
  `UnitsOnOrder` int(11) DEFAULT NULL,
  `ReorderLevel` varchar(255) DEFAULT NULL,
  `Discontinued` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `SupplierID`, `CategoryID`, `QuantityPerUnit`, `UnitPrice`, `UnitsInStock`, `UnitsOnOrder`, `ReorderLevel`, `Discontinued`) VALUES
(1, 'Prueba', 1, 1, 1, 1, 11, 111, '111', 'Prueba');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `ShipperID` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shippers`
--

INSERT INTO `shippers` (`ShipperID`, `CompanyName`, `Phone`) VALUES
(1, 'Prueba', 'Prueba');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `SupplierID` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `ContactName` varchar(255) DEFAULT NULL,
  `ContactTitle` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Region` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL,
  `HomePage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SupplierID`, `CompanyName`, `ContactName`, `ContactTitle`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `Fax`, `HomePage`) VALUES
(1, 'Prueba A 1', 'Prueba B', 'Prueba C', 'Prueba D', 'Prueba E', 'Prueba F', 'Prueba G', 'Prueba H', 'Prueba I', 'Prueba J', 'Prueba K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderDetails`),
  ADD KEY `orderid_fk` (`OrderID`),
  ADD KEY `prodctid_fk` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `employeeid_fk` (`EmployeeID`),
  ADD KEY `customerid_fk` (`CustomerID`),
  ADD KEY `shipperid_fk` (`ShipperID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `supplierid_fk` (`SupplierID`),
  ADD KEY `categoryid_fk` (`CategoryID`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`ShipperID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`SupplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderid_fk` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prodctid_fk` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customerid_fk` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employeeid_fk` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipperid_fk` FOREIGN KEY (`ShipperID`) REFERENCES `shippers` (`ShipperID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `categoryid_fk` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplierid_fk` FOREIGN KEY (`SupplierID`) REFERENCES `suppliers` (`SupplierID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
