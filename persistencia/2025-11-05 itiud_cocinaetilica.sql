-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 10.123.0.165:3306
-- Generation Time: Nov 05, 2025 at 07:26 PM
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
  `clave` varchar(100) NOT NULL,
  `estado` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Cliente`
--

INSERT INTO `Cliente` (`idCliente`, `nombre`, `apellido`, `fechaNacimiento`, `correo`, `clave`, `estado`) VALUES
(1, 'Thomas', 'Aguirre', '2006-03-16', 'ta@ce.com', '202cb962ac59075b964b07152d234b70', 1),
(2, 'Mateo ', 'Cardenas', '2025-04-05', 'mc@ce.com', '202cb962ac59075b964b07152d234b70', 0),
(3, 'Luisa', 'Parra', '2000-03-12', 'lfparrav@udistrital.edu.co', '3f08311e8579fdd7a72718e0eb8cd8c7', 0),
(4, 'Jonathan Sebastian', 'Bernal Vargas', '1990-10-21', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(5, 'Angel', 'Gonzalez', '2025-07-10', 'angelgonzalez@correo.zzz', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(6, 'Eduard Jeam Pierre ', 'Quintero Garcia', '2002-10-18', 'eq@xd.com', '202cb962ac59075b964b07152d234b70', 0),
(7, 'Anderson', 'Piratoba', '2003-06-17', 'alhombro13@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(8, 'Jose', 'Gonzalez', '2003-01-11', 'joligogo7@gmail.com', '402cc2e72d639f869c3ff02156615f71', 0),
(9, 'Emmanuel', 'Arevalo', '2005-12-27', 'eaf@correo.com', '202cb962ac59075b964b07152d234b70', 0),
(10, 'marlon', 'pulido', '2002-04-12', 'davidciam.12@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(11, 'Oscar Daniel', 'Colorado Yara', '2000-04-05', 'oscar@coreo.com', '202cb962ac59075b964b07152d234b70', 0),
(12, 'Natalia', 'Herrera', '2002-11-11', 'natalia@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(13, 'Juan ', 'Montilla', '2002-08-12', 'juan@correo.com', '202cb962ac59075b964b07152d234b70', 0),
(14, 'Natalia', 'Guzman', '2005-07-11', 'nata@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(15, 'Brayan', 'Rodriguez', '1999-11-01', 'baro@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(16, 'Brandon Steven', 'Oviedo Ortiz', '2002-07-25', 'stebra555@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

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
  `tamano` int NOT NULL,
  `precioVenta` int NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `Proveedor_idProveedor` int NOT NULL,
  `TipoProducto_idTipoProducto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Producto`
--

INSERT INTO `Producto` (`idProducto`, `nombre`, `tamano`, `precioVenta`, `imagen`, `Proveedor_idProveedor`, `TipoProducto_idTipoProducto`) VALUES
(1, 'Aguila', 350, 3000, '', 1, 1),
(2, 'Club Colombia', 350, 3500, 'club.png', 1, 1),
(3, 'Poker', 330, 2500, 'club.png', 1, 1),
(4, 'Aguila Light', 350, 4000, '1761075338.png', 1, 1),
(5, 'Nectar', 1000, 3000, '1762285426.jpeg', 2, 2),
(6, 'Buchanans Special Edition', 750, 250000, '1762285577.jpg', 2, 2),
(7, 'Smirnof', 350, 40000, '1762285596.jpg', 1, 2),
(8, 'Aguardiente Amarillo', 750, 26200, '1762285609.png', 2, 2),
(9, 'Budweiser', 3, 4550, '1762285621.jfif', 1, 1),
(10, 'Costeña', 350, 3500, '1762285629.png', 1, 1),
(11, 'Club Colombia Trigo', 330, 4000, '1762285657.png', 1, 1),
(12, 'Bakon Vodka', 750, 123450, '1762285675.jpg', 2, 3),
(13, 'Coñac', 750, 1500000, '1762285769.jpeg', 1, 5),
(14, 'Johnnie Walker Black Label Whisky', 3, 83500, '1762285792.png', 2, 5),
(15, 'Bakon Vodka', 750, 123450, '1762285797.jpg', 2, 2),
(16, '3 Codilleras Rosada', 330, 3500, '1762285801.webp', 1, 1),
(17, 'Vodka Absolut', 700, 150000, '1762285828.png', 2, 3),
(18, 'Hennessy', 1000, 575990, '1762285878.jpg', 1, 4),
(19, 'Jägermeister', 700, 160000, '1762285935.jfif', 2, 6),
(20, 'Black label', 750, 1200000, '1762286041.avif', 2, 5),
(21, 'Grey Goose', 750, 230000, '1762286078.png', 2, 3),
(22, 'Corona', 500, 6000, '1762287731.jfif', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Proveedor`
--

CREATE TABLE `Proveedor` (
  `idProveedor` int NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Proveedor`
--

INSERT INTO `Proveedor` (`idProveedor`, `nombre`) VALUES
(1, 'Bavaria'),
(2, 'Licorera de cundinamarca');

-- --------------------------------------------------------

--
-- Table structure for table `TipoProducto`
--

CREATE TABLE `TipoProducto` (
  `idTipoProducto` int NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `TipoProducto`
--

INSERT INTO `TipoProducto` (`idTipoProducto`, `nombre`) VALUES
(1, 'Cerveza'),
(2, 'Aguardiente'),
(3, 'Vodka'),
(4, 'Brandi'),
(5, 'Wiskey'),
(6, 'Ron');

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
  MODIFY `idProducto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Proveedor`
--
ALTER TABLE `Proveedor`
  MODIFY `idProveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `TipoProducto`
--
ALTER TABLE `TipoProducto`
  MODIFY `idTipoProducto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
