-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.165:3306
-- Generation Time: Sep 24, 2025 at 08:54 PM
-- Server version: 8.4.5
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itiud_cocinaetilica`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `idAdmin` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`idAdmin`, `nombre`, `apellido`, `correo`, `clave`) VALUES
(1, 'Hector', 'Florez', 'hf@ce.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `Carrito`
--

CREATE TABLE `Carrito` (
  `cantidad` int NOT NULL,
  `Cliente_idCliente` int NOT NULL,
  `Producto_idProducto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `Cliente`
--

CREATE TABLE `Cliente` (
  `idCliente` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `nombre`, `apellido`, `fechaNacimiento`, `correo`, `clave`) VALUES
(1, 'Thomas', 'Aguirre', '2006-03-16', 'teaguirrec@udistrital.edu.co', '202cb962ac59075b964b07152d234b70'),
(2, 'Mateo ', 'Cardenas', '2025-04-05', 'Mcardenasp@udistrita.edu.co', '202cb962ac59075b964b07152d234b70'),
(3, 'Luisa', 'Parra', '2000-03-12', 'lfparrav@udistrital.edu.co', '3f08311e8579fdd7a72718e0eb8cd8c7'),
(4, 'Jonathan Sebastian', 'Bernal Vargas', '1990-10-21', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Angel', 'Gonzalez', '2025-07-10', 'angelgonzalez@correo.zzz', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Eduard Jeam Pierre ', 'Quintero Garcia', '2002-10-18', 'eq@xd.com', '202cb962ac59075b964b07152d234b70'),
(7, 'Anderson', 'Piratoba', '2003-06-17', 'alhombro13@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Jose', 'Gonzalez', '2003-01-11', 'joligogo7@gmail.com', '402cc2e72d639f869c3ff02156615f71'),
(9, 'Emmanuel', 'Arevalo', '2005-12-27', 'eaf@correo.com', '202cb962ac59075b964b07152d234b70'),
(10, 'marlon', 'pulido', '2002-04-12', 'davidciam.12@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Oscar Daniel', 'Colorado Yara', '2000-04-05', 'oscar@coreo.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Natalia', 'Herrera', '2002-11-11', 'natalia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Juan ', 'Montilla', '2002-08-12', 'juan@correo.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Natalia', 'Guzman', '2005-07-11', 'nata@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'Brayan', 'Rodriguez', '1999-11-01', 'baro@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'Brandon Steven', 'Oviedo Ortiz', '2002-07-25', 'stebra555@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `Factura`
--

CREATE TABLE `Factura` (
  `idFactura` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `valorTotal` int NOT NULL,
  `Cliente_idCliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `FacturaProducto`
--

CREATE TABLE `FacturaProducto` (
  `cantidad` int NOT NULL,
  `precioVenta` decimal(10,2) NOT NULL,
  `Factura_idFactura` int NOT NULL,
  `Producto_idProducto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `Pedido`
--

CREATE TABLE `Pedido` (
  `idPedido` int NOT NULL,
  `fecha` date NOT NULL,
  `precioCompra` decimal(10,2) NOT NULL,
  `cantidadCompra` int NOT NULL,
  `cantidadBodega` int NOT NULL,
  `Producto_idProducto` int NOT NULL,
  `Admin_idAdmin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `Producto`
--

CREATE TABLE `Producto` (
  `idProducto` int NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `tamaño` int NOT NULL,
  `precioVenta` int NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `Proveedor_idProveedor` int NOT NULL,
  `TipoProducto_idTipoProducto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `Proveedor`
--

CREATE TABLE `Proveedor` (
  `idProveedor` int NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `TipoProducto`
--

CREATE TABLE `TipoProducto` (
  `idTipoProducto` int NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `Carrito`
--
ALTER TABLE `Carrito`
  ADD PRIMARY KEY (`Cliente_idCliente`,`Producto_idProducto`),
  ADD KEY `fk_Carrito_Producto1_idx` (`Producto_idProducto`);

--
-- Indexes for table `Cliente`
--
ALTER TABLE `Cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indexes for table `Factura`
--
ALTER TABLE `Factura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `fk_Factura_Cliente1_idx` (`Cliente_idCliente`);

--
-- Indexes for table `FacturaProducto`
--
ALTER TABLE `FacturaProducto`
  ADD PRIMARY KEY (`Factura_idFactura`,`Producto_idProducto`),
  ADD KEY `fk_FacturaProducto_Factura1_idx` (`Factura_idFactura`),
  ADD KEY `fk_FacturaProducto_Producto1_idx` (`Producto_idProducto`);

--
-- Indexes for table `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fk_Pedido_Producto1_idx` (`Producto_idProducto`),
  ADD KEY `fk_Pedido_Admin1_idx` (`Admin_idAdmin`);

--
-- Indexes for table `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_Producto_Proveedor_idx` (`Proveedor_idProveedor`),
  ADD KEY `fk_Producto_TipoProducto1_idx` (`TipoProducto_idTipoProducto`);

--
-- Indexes for table `Proveedor`
--
ALTER TABLE `Proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indexes for table `TipoProducto`
--
ALTER TABLE `TipoProducto`
  ADD PRIMARY KEY (`idTipoProducto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `idAdmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Cliente`
--
ALTER TABLE `Cliente`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Factura`
--
ALTER TABLE `Factura`
  MODIFY `idFactura` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `idPedido` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Producto`
--
ALTER TABLE `Producto`
  MODIFY `idProducto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Proveedor`
--
ALTER TABLE `Proveedor`
  MODIFY `idProveedor` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TipoProducto`
--
ALTER TABLE `TipoProducto`
  MODIFY `idTipoProducto` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Carrito`
--
ALTER TABLE `Carrito`
  ADD CONSTRAINT `fk_Carrito_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`),
  ADD CONSTRAINT `fk_Carrito_Producto1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `Producto` (`idProducto`);

--
-- Constraints for table `Factura`
--
ALTER TABLE `Factura`
  ADD CONSTRAINT `fk_Factura_Cliente1` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `Cliente` (`idCliente`);

--
-- Constraints for table `FacturaProducto`
--
ALTER TABLE `FacturaProducto`
  ADD CONSTRAINT `fk_FacturaProducto_Factura1` FOREIGN KEY (`Factura_idFactura`) REFERENCES `Factura` (`idFactura`),
  ADD CONSTRAINT `fk_FacturaProducto_Producto1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `Producto` (`idProducto`);

--
-- Constraints for table `Pedido`
--
ALTER TABLE `Pedido`
  ADD CONSTRAINT `fk_Pedido_Admin1` FOREIGN KEY (`Admin_idAdmin`) REFERENCES `Admin` (`idAdmin`),
  ADD CONSTRAINT `fk_Pedido_Producto1` FOREIGN KEY (`Producto_idProducto`) REFERENCES `Producto` (`idProducto`);

--
-- Constraints for table `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `fk_Producto_Proveedor` FOREIGN KEY (`Proveedor_idProveedor`) REFERENCES `Proveedor` (`idProveedor`),
  ADD CONSTRAINT `fk_Producto_TipoProducto1` FOREIGN KEY (`TipoProducto_idTipoProducto`) REFERENCES `TipoProducto` (`idTipoProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
