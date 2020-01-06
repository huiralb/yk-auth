-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2020 at 05:42 PM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blud`
--

-- --------------------------------------------------------

--
-- Table structure for table `yk_aksi`
--

CREATE TABLE `yk_aksi` (
  `AksiId` int(3) NOT NULL,
  `AksiName` char(100) DEFAULT NULL,
  `AksiFungsi` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_aksi`
--

INSERT INTO `yk_aksi` (`AksiId`, `AksiName`, `AksiFungsi`) VALUES
(1, 'Lihat', 'index'),
(2, 'Cari', 'search'),
(3, 'Tambah', 'add'),
(4, 'Ubah', 'update'),
(5, 'Hapus', 'delete'),
(6, 'Detail', 'detail'),
(7, 'Cetak', 'cetak'),
(8, 'Export', 'export');

-- --------------------------------------------------------

--
-- Table structure for table `yk_group`
--

CREATE TABLE `yk_group` (
  `GroupId` int(3) NOT NULL,
  `GroupName` char(150) DEFAULT NULL,
  `GroupDescription` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_group`
--

INSERT INTO `yk_group` (`GroupId`, `GroupName`, `GroupDescription`) VALUES
(1, 'Super Administrator', 'Responsible for technical systems'),
(2, 'Admin Aplikasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `yk_group_menu_aksi`
--

CREATE TABLE `yk_group_menu_aksi` (
  `GroupMenuMenuAksiId` int(3) DEFAULT NULL,
  `GroupMenuGroupId` int(3) DEFAULT NULL,
  `GroupMenuSegmen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_group_menu_aksi`
--

INSERT INTO `yk_group_menu_aksi` (`GroupMenuMenuAksiId`, `GroupMenuGroupId`, `GroupMenuSegmen`) VALUES
(1, 1, 'sistem/index'),
(2, 1, 'sistem/group/index'),
(3, 1, 'sistem/group/search'),
(4, 1, 'sistem/group/add'),
(5, 1, 'sistem/group/update'),
(6, 1, 'sistem/group/delete'),
(7, 1, 'sistem/user/index'),
(8, 1, 'sistem/user/search'),
(9, 1, 'sistem/user/add'),
(10, 1, 'sistem/user/update'),
(11, 1, 'sistem/user/delete'),
(12, 1, 'sistem/menu/index'),
(13, 1, 'sistem/menu/search'),
(14, 1, 'sistem/menu/add'),
(15, 1, 'sistem/menu/update'),
(16, 1, 'sistem/menu/delete'),
(17, 1, 'sistem/auth/index'),
(18, 1, 'sistem/auth/search'),
(19, 1, 'sistem/auth/update');

-- --------------------------------------------------------

--
-- Table structure for table `yk_menu`
--

CREATE TABLE `yk_menu` (
  `MenuId` int(3) NOT NULL,
  `MenuParentId` int(3) DEFAULT NULL,
  `MenuName` char(150) DEFAULT NULL,
  `MenuModule` char(150) DEFAULT NULL,
  `MenuHasSubmenu` tinyint(1) NOT NULL DEFAULT '0',
  `MenuIcon` char(50) DEFAULT NULL,
  `MenuOrder` int(2) DEFAULT NULL,
  `MenuIsShow` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_menu`
--

INSERT INTO `yk_menu` (`MenuId`, `MenuParentId`, `MenuName`, `MenuModule`, `MenuHasSubmenu`, `MenuIcon`, `MenuOrder`, `MenuIsShow`) VALUES
(1, 0, 'Sistem', 'sistem', 1, 'cogs', 1, '1'),
(2, 1, 'Group', 'sistem/group', 0, NULL, 1, '1'),
(3, 1, 'User', 'sistem/user', 0, NULL, 2, '1'),
(4, 1, 'Menu', 'sistem/menu', 0, NULL, 3, '1'),
(5, 1, 'Hak Akses', 'sistem/auth', 0, NULL, 4, '1');

-- --------------------------------------------------------

--
-- Table structure for table `yk_menu_aksi`
--

CREATE TABLE `yk_menu_aksi` (
  `MenuAksiId` int(6) NOT NULL,
  `MenuAksiMenuId` int(6) DEFAULT NULL,
  `MenuAksiAksiId` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_menu_aksi`
--

INSERT INTO `yk_menu_aksi` (`MenuAksiId`, `MenuAksiMenuId`, `MenuAksiAksiId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 2, 5),
(7, 3, 1),
(8, 3, 2),
(9, 3, 3),
(10, 3, 4),
(11, 3, 5),
(12, 4, 1),
(13, 4, 2),
(14, 4, 3),
(15, 4, 4),
(16, 4, 5),
(17, 5, 1),
(18, 5, 2),
(19, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `yk_user`
--

CREATE TABLE `yk_user` (
  `UserId` int(6) NOT NULL,
  `UserPptkId` int(11) DEFAULT NULL,
  `UserUnitKerjaId` int(11) DEFAULT NULL,
  `UserNip` varchar(20) DEFAULT NULL,
  `UserRealName` char(250) DEFAULT NULL,
  `UserName` char(150) DEFAULT NULL,
  `UserPassword` char(40) DEFAULT NULL,
  `UserActive` tinyint(1) DEFAULT '0',
  `UserHp` varchar(20) DEFAULT NULL,
  `UserEmail` varchar(250) DEFAULT '',
  `UserFoto` varchar(250) DEFAULT NULL,
  `UserExpired` date NOT NULL,
  `UserLastLogin` datetime DEFAULT NULL,
  `UserNote` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_user`
--

INSERT INTO `yk_user` (`UserId`, `UserPptkId`, `UserUnitKerjaId`, `UserNip`, `UserRealName`, `UserName`, `UserPassword`, `UserActive`, `UserHp`, `UserEmail`, `UserFoto`, `UserExpired`, `UserLastLogin`, `UserNote`) VALUES
(1, NULL, NULL, NULL, 'Super Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, NULL, '', NULL, '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `yk_user_group`
--

CREATE TABLE `yk_user_group` (
  `UserGroupUserId` int(10) NOT NULL,
  `UserGroupGroupId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yk_user_group`
--

INSERT INTO `yk_user_group` (`UserGroupUserId`, `UserGroupGroupId`) VALUES
(1, 1),
(2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yk_aksi`
--
ALTER TABLE `yk_aksi`
  ADD PRIMARY KEY (`AksiId`);

--
-- Indexes for table `yk_group`
--
ALTER TABLE `yk_group`
  ADD PRIMARY KEY (`GroupId`);

--
-- Indexes for table `yk_group_menu_aksi`
--
ALTER TABLE `yk_group_menu_aksi`
  ADD KEY `FK_ci_group_menu_dummy_menu` (`GroupMenuMenuAksiId`),
  ADD KEY `FK_ci_group_menu_aksi` (`GroupMenuGroupId`),
  ADD KEY `segen` (`GroupMenuSegmen`);

--
-- Indexes for table `yk_menu`
--
ALTER TABLE `yk_menu`
  ADD PRIMARY KEY (`MenuId`);

--
-- Indexes for table `yk_menu_aksi`
--
ALTER TABLE `yk_menu_aksi`
  ADD PRIMARY KEY (`MenuAksiId`),
  ADD KEY `FK_ci_dummy_menu_aksi` (`MenuAksiMenuId`),
  ADD KEY `FK_ci_dummy_menu_aksi_aksi` (`MenuAksiAksiId`);

--
-- Indexes for table `yk_user`
--
ALTER TABLE `yk_user`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `NewIndex1` (`UserName`);

--
-- Indexes for table `yk_user_group`
--
ALTER TABLE `yk_user_group`
  ADD PRIMARY KEY (`UserGroupUserId`,`UserGroupGroupId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yk_aksi`
--
ALTER TABLE `yk_aksi`
  MODIFY `AksiId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `yk_group`
--
ALTER TABLE `yk_group`
  MODIFY `GroupId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `yk_menu`
--
ALTER TABLE `yk_menu`
  MODIFY `MenuId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `yk_menu_aksi`
--
ALTER TABLE `yk_menu_aksi`
  MODIFY `MenuAksiId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `yk_user`
--
ALTER TABLE `yk_user`
  MODIFY `UserId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `yk_group_menu_aksi`
--
ALTER TABLE `yk_group_menu_aksi`
  ADD CONSTRAINT `FK_ci_group_menu_aksi` FOREIGN KEY (`GroupMenuGroupId`) REFERENCES `yk_group` (`GroupId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ci_group_menu_aksi_aksi` FOREIGN KEY (`GroupMenuMenuAksiId`) REFERENCES `yk_menu_aksi` (`MenuAksiId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `yk_menu_aksi`
--
ALTER TABLE `yk_menu_aksi`
  ADD CONSTRAINT `FK_yk_menu_aksi` FOREIGN KEY (`MenuAksiAksiId`) REFERENCES `yk_aksi` (`AksiId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_yk_menu_menu` FOREIGN KEY (`MenuAksiMenuId`) REFERENCES `yk_menu` (`MenuId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
