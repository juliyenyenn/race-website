-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 06:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `administator`
--

CREATE TABLE `administator` (
  `AdminID` varchar(15) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` text NOT NULL,
  `Role` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `UserLevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administator`
--

INSERT INTO `administator` (`AdminID`, `Username`, `Password`, `Name`, `Role`, `Email`, `PhoneNumber`, `UserLevel`) VALUES
('grabot05', 'graysee', '123456781', 'Gracie Anne R. Abot', 'Back End Developer', 'grabot@up.edu.ph', 2147483647, 'Admin'),
('jcbontilao', 'juliyenyenn', 'jcbon1234', 'Juliene Airen C. Bontilao', 'Front End Developer', 'jcbontilao@up.edu.ph', 2147483647, 'Admin'),
('krmazo', 'kriirmazo', '405512154164', 'Kristianna Isabel Mazo', 'Full Stack Developer', 'krmazo@up.edu.ph', 2147483647, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` varchar(15) NOT NULL,
  `CourseTitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseTitle`) VALUES
('AMAT 110', 'Mathematical Modeling'),
('AMAT 131', 'Statistical Methods and Experimental Design'),
('AMAT 132', 'Introductory Forecasting'),
('AMAT 152', 'Computer Programming I'),
('AMAT 160', 'Linear Programming'),
('AMAT 161', 'Nonlinear Programming'),
('AMAT 167', 'Mathematical Models in Operations Research I'),
('AMAT 168', 'Mathematical Models in Operations Research II'),
('AMAT 190A', 'Special Problems'),
('AMAT 190B', 'Special Problems'),
('AMAT 190C', 'Special Problems'),
('AMAT 193', 'Geospatial Tools and Their Applications II'),
('AMAT 199', 'Undergraduate Seminar'),
('AMAT 200A', 'Undergraduate Thesis'),
('AMAT 200B', 'Undergraduate Thesis'),
('AMAT 200C', 'Undergraduate Thesis'),
('BIO 100', 'Introduction to Cell and Molecular Biology'),
('BIO 102', 'Cytology'),
('BIO 103', 'Advance Cell Biology'),
('BIO 110', 'Principles of Ecology'),
('BIO 115', 'Intro to Philippine Wildlife'),
('BIO 143', 'Animal Physiology'),
('BIO 144', 'Animal Histology'),
('BIO 145', 'Introduction to Parasitology'),
('BIO 164', 'Morphology and Anatomy of Plants'),
('BIO 170', 'Evolutionary Biology'),
('BIO 176', 'Environmental Management'),
('BIO 199b', 'Undergraduate Seminar'),
('BIO 200-III', 'TBA'),
('BIO 200a', 'Undergraduate Thesis'),
('BIO 200b', 'Undergraduate Thesis'),
('BIO 200c', 'Undergraduate Thesis'),
('BIO 21', 'Principles of Microbiology'),
('BIO 40', 'Intermediate Zoology'),
('BIO 60', 'Intermediate Botany'),
('CHEM 141', 'Food Analysis'),
('CHEM 141.1', 'Food Analysis Lab'),
('CHEM 160', 'Introductory Biochemistry Lec'),
('CHEM 160.1', 'Introductory Biochemistry Lab'),
('CHEM 22', 'General Chemistry II Lec'),
('CHEM 22.1', 'General Chemistry II Lab'),
('CMSC 124', 'Design and Implementation of Programming Languages'),
('CMSC 125', 'Operating Systems'),
('CMSC 126', 'Web-Based System Development'),
('CMSC 127', 'File Processing and Database Systems'),
('CMSC 130', 'Logic Design and Digital Computer Circuits'),
('CMSC 134', 'Information Storage Management'),
('CMSC 137', 'Data Communications and Networking'),
('CMSC 141', 'Automata and Languages Theory'),
('CMSC 142', 'Design and Analysis of Algorithms'),
('CMSC 183', 'IT Project Management'),
('CMSC 186', 'Web Services and Service-Oriented Architecture'),
('CMSC 190a', 'Special Problems'),
('CMSC 190c', 'Special Problems'),
('CMSC 191', 'Special Topics'),
('CMSC 200a', 'Undergraduate Thesis I'),
('CMSC 200c', 'Undergraduate Thesis III'),
('CMSC 28', 'Computer Programming II'),
('CMSC 57', 'Discrete Mathematical Structures in Computer Scien'),
('CSMC 200b', 'Undergraduate Thesis II'),
('DS 122', 'TBA'),
('DS 29', 'Methods of Proof'),
('DS 45', 'Modeling and Simulation'),
('DS 57', 'Introduction to Algorithms and Data Structures for'),
('FST 131', 'Food Engineeing I'),
('FST 140', 'Food Processing I'),
('FST 141', 'TBA'),
('FST 145', 'Processing of Fruits and Vegetables'),
('FST 150', 'Food Chemistry I'),
('FST 163', 'Food Laws and Regulatioons'),
('FST 164', 'Food Safety'),
('FST 165', 'Quality Assurance'),
('FST 199', 'Undergraduate Seminar'),
('FST 200B', 'Undergraduate Thesis'),
('FST 200C', 'Undergraduate Thesis'),
('FST 202', 'TBA'),
('FST 221', 'TBA'),
('FST 299', 'TBA'),
('FST 300', 'TBA'),
('MATH 10', 'Mathematics, Culture, and Society'),
('MATH 101', 'Logic and Set Theory'),
('MATH 111', 'Abstract Algebra'),
('MATH 155', 'Advanced Calculus I'),
('MATH 26', 'Analytic Geometry and Calculus I'),
('MATH 28', 'Analytic Geometry and Calculus III'),
('MATH 36', 'Mathematical Analysis I'),
('MATH 37', 'Mathematical Analysis II'),
('MATH 38', 'Mathematical Analysis III'),
('PHYS 13', 'General Physics II (Electricity and Magnetism)'),
('PHYS 3', 'Heat and Mechanics'),
('PHYS 72', 'University Physics II'),
('PHYS 72.1', 'University Physics II Lab'),
('SCIENCE 10', 'Probing the Physical World'),
('SCIENCE 11', 'Living Systems: Concepts and Dynamics'),
('STAT 1', 'Elementary Statistics'),
('STS 1', 'Science, Technology, and Society');

-- --------------------------------------------------------

--
-- Table structure for table `courseoffering`
--

CREATE TABLE `courseoffering` (
  `CourseID` varchar(15) NOT NULL,
  `Section` varchar(15) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `AcadYear` varchar(15) NOT NULL,
  `Semester` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseoffering`
--

INSERT INTO `courseoffering` (`CourseID`, `Section`, `Day`, `Time`, `AcadYear`, `Semester`) VALUES
('AMAT 110', 'J', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('AMAT 131', 'O-1L', 'T', '7:00AM-10:00AM', '2023-2024', '2nd'),
('AMAT 132', 'E', 'TTh', '1:00PM-2:30PM', '2023-2024', '2nd'),
('AMAT 152', 'F-1L', 'M', ' 1:00 PM-4:00 P', '2023-2024', '2nd'),
('AMAT 160', 'M', 'WF', '1:00PM-2:30PM', '2023-2024', '2nd'),
('AMAT 161', 'J', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('AMAT 167', 'C', 'TTh', '10:00AM-11:30AM', '2023-2024', '2nd'),
('AMAT 168', 'P', 'WF', '5:30PM-7:00PM', '2023-2024', '2nd'),
('AMAT 190A', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('AMAT 190B', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('AMAT 190C', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('AMAT 193', 'B', 'TTh', '8:30AM-10:00AM', '2023-2024', '2nd'),
('AMAT 199', 'F', 'T', '3:00PM-4:00PM', '2023-2024', '2nd'),
('AMAT 200A', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('AMAT 200B', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('AMAT 200C', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('BIO 100', 'GH', 'TTh', '4:30PM-6:00PM', '2023-2024', '2nd'),
('BIO 102', 'K', 'WF', '10:00AM-11:00AM', '2023-2024', '2nd'),
('BIO 103', 'J', 'WF', '8:30AM-9:30AM', '2023-2024', '2nd'),
('BIO 110', 'B', 'TTh', '8:30AM-9:30AM', '2023-2024', '2nd'),
('BIO 115', 'RS', 'M', '8:30AM-10:30AM', '2023-2024', '2nd'),
('BIO 143', 'J', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('BIO 144', 'UV', 'M', '1:00PM-4:00PM', '2023-2024', '2nd'),
('BIO 145', 'L', 'WF', '11:30AM-12:30PM', '2023-2024', '2nd'),
('BIO 164', 'G', 'TTh', '4:00PM-5:00PM', '2023-2024', '2nd'),
('BIO 170', 'B', 'TTh', '8:30AM-10:00AM', '2023-2024', '2nd'),
('BIO 176', 'B', 'M', '1:00PM-4:00PM', '2023-2024', '2nd'),
('BIO 199b', 'G', 'Th', '4:00PM-5:00PM', '2023-2024', '2nd'),
('BIO 200-III', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('BIO 200a', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('BIO 200b', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('BIO 200c', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('BIO 21', 'O', 'WF', '4:00PM-5:00PM', '2023-2024', '2nd'),
('BIO 40', 'O', 'WF', '4:00PM-5:00PM', '2023-2024', '2nd'),
('BIO 60', 'G', 'TTh', '4:00PM-5:00PM', '2023-2024', '2nd'),
('CHEM 141', 'C', 'TTh', '10:00AM-11:00AM', '2023-2024', '2nd'),
('CHEM 141.1', 'DEFG-1L', 'T', '11:30AM-5:30PM', '2023-2024', '2nd'),
('CHEM 160', 'J1', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('CHEM 160.1', 'CDEF-1L', 'T', '10:00AM-4:00PM', '2023-2024', '2nd'),
('CHEM 22', 'B1', 'TTh', '8:30AM-9:30AM', '2023-2024', '2nd'),
('CHEM 22.1', 'CD-1L', 'T', '10:00AM-1:99PM', '2023-2024', '2nd'),
('CMSC 124', 'C', 'TTh', '10:00AM-11:00AM', '2023-2024', '2nd'),
('CMSC 125', 'G', 'TTh', '4:00PM-5:00PM', '2023-2024', '2nd'),
('CMSC 126', 'B', 'TTh', '9:00AM-10:00AM', '2023-2024', '2nd'),
('CMSC 127', 'D', 'TTh', '11:30AM-12:30PM', '2023-2024', '2nd'),
('CMSC 130', 'G', 'TTh', '4:00PM-5:00PM', '2023-2024', '2nd'),
('CMSC 134', 'P', 'WF', '5:30PM-7:00PM', '2023-2024', '2nd'),
('CMSC 137', 'O', 'SF', '4:00PM-5:00PM', '2023-2024', '2nd'),
('CMSC 141', 'G', 'TTh', '4:00PM-5:30PM', '2023-2024', '2nd'),
('CMSC 142', 'L', 'WF', '5:30PM-7:00PM', '2023-2024', '2nd'),
('CMSC 183', 'E', 'TTh', '1:00PM-2:00PM', '2023-2024', '2nd'),
('CMSC 186', 'D', 'TTh', '11:30AM-1:00PM', '2023-2024', '2nd'),
('CMSC 190a', '', '', '', '2023-2024', '2nd'),
('CMSC 190c', '', '', '', '2023-2024', '2nd'),
('CMSC 191', 'F1', 'T', '3:00PM-4:00PM', '2023-2024', '2nd'),
('CMSC 200a', '', '', '', '2023-2024', '2nd'),
('CMSC 200c', '', '', '', '2023-2024', '2nd'),
('CMSC 28', 'K', 'WF', '10:00AM-11:00AM', '2023-2024', '2nd'),
('CMSC 57', 'C', 'TTh', '10:00AM-11:30AM', '2023-2024', '2nd'),
('CSMC 200b', '', '', '', '2023-2024', '2nd'),
('DS 122', 'F', 'TTh', '2:30PM-4:00PM', '2023-2024', '2nd'),
('DS 29', 'J', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('DS 45', 'M', 'WF', '1:00PM-2:30PM', '2023-2024', '2nd'),
('DS 57', 'E', 'TTh', '1:00PM-2:00PM', '2023-2024', '2nd'),
('FST 131', 'G', 'TTh', '4:00PM-5:00PM', '2023-2024', '2nd'),
('FST 140', 'K', 'WF', '10:00AM-11:30AM', '2023-2024', '2nd'),
('FST 141', 'N', 'WF', '3:00PM-4:00PM', '2023-2024', '2nd'),
('FST 145', 'L', 'WF', '11:30AM-12:30AM', '2023-2024', '2nd'),
('FST 150', 'F', 'TTh', '3:00PM-4:00PM', '2023-2024', '2nd'),
('FST 163', 'O', 'WF', '4:00PM-5:30PM', '2023-2024', '2nd'),
('FST 164', 'J', 'WF', '8:30AM-10:00AM', '2023-2024', '2nd'),
('FST 165', 'K', 'WF', '10:00AM-11:30AM', '2023-2024', '2nd'),
('FST 199', 'E', 'Th', '1:30PM-2:30PM', '2023-2024', '2nd'),
('FST 200B', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('FST 200C', 'TBA', 'TBA', 'TBA', '2023-2024', '2nd'),
('FST 202', 'J', 'F', '9:00 AM-10:00 A', '2023-2024', '2nd'),
('FST 221', 'J', 'W', '9:00 AM-10:00 A', '2023-2024', '2nd'),
('FST 299', 'IJ', 'W', '8:00AM-9:00AM', '2023-2024', '2nd'),
('FST 300', '', 'TBA', 'TBA', '2023-2024', '2nd'),
('MATH 10', 'F2', 'TTh', '2:30 PM-4:00 PM', '2023-2024', '2nd'),
('MATH 101', 'K', 'WF', ' 10:00 AM-11:30', '2023-2024', '2nd'),
('MATH 111', 'M', 'WF', ' 1:00 PM-2:30 P', '2023-2024', '2nd'),
('MATH 155', 'D', 'TTh', '11:30 AM-1:00 P', '2023-2024', '2nd'),
('MATH 26', 'C', 'TTh', '10:00 AM-11:30 ', '2023-2024', '2nd'),
('MATH 28', 'K', 'WF', ' 10:00 AM-11:30', '2023-2024', '2nd'),
('MATH 36', 'DL', 'TWThF', '11:30 AM-1:00 P', '2023-2024', '2nd'),
('MATH 37', 'EM', 'TWThF', '1:00 PM-2:30 PM', '2023-2024', '2nd'),
('MATH 38', 'N', 'WF', ' 2:30 PM-4:00 P', '2023-2024', '2nd'),
('PHYS 13', 'I', 'WF', '7:30 AM-8:30 AM', '2023-2024', '2nd'),
('PHYS 3', 'G', 'TTh', ' 4:00 PM-5:00 P', '2023-2024', '2nd'),
('PHYS 72', 'BC', 'TTh', '8:30 AM-10:30 A', '2023-2024', '2nd'),
('PHYS 72.1', ' IJ-1L', 'F', ' 7:00 AM-10:00 ', '2023-2024', '2nd'),
('SCIENCE 10', 'A', 'TTh', '7:00 AM-8:30 AM', '2023-2024', '2nd'),
('SCIENCE 11', 'B', 'TTh', ' 8:30 AM-10:00 ', '2023-2024', '2nd'),
('STAT 1', 'A', 'TTh', '7:30 AM-8:30 AM', '2023-2024', '2nd'),
('STS 1', 'B', 'TTh', ' 8:30 AM-10:00 ', '2023-2024', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamID` varchar(15) NOT NULL,
  `CourseID` varchar(15) NOT NULL,
  `ProfID` varchar(15) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `ProfID` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `Department` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`ProfID`, `Name`, `Department`, `Email`, `PhoneNumber`) VALUES
('AEDe Cadiz', 'Aleyla Escueta-De Cadiz, PhD, RMT, SMicro', 'DBSES', 'aedecadiz@up.edu.ph', 0),
('AESAlmocera', 'Alexis Erich S. Almocera', 'DMPCS', 'asalmocera@up.edu.ph', 0),
('AFMRaganas', 'Aaron Froila M. Raganas', 'DBSES', 'amraganas@up.edu.ph', 0),
('AGDDelima', 'Aileen Grace D. Delima, MSc', 'DBSES', 'addelima@up.edu.ph', 0),
('ARMSatina', 'Armacheska R. Mesa-Satina', 'DMPCS', 'amsatina@up.edu.ph', 0),
('AUNovero', 'Annabelle U. Novero, PhD', 'DBSES', 'aunovero@up.edu.ph', 0),
('CGManliguez', 'Cinmayii A. Garillos-Manliguez', 'DMPCS', 'cgmanliguez@up.edu.ph', 0),
('CLNanola', 'Cleto L. Nañola, PhD', 'DBSES', 'clnanola@up.edu.ph', 0),
('CSSMillado', 'Cyrose Suzie Silvosa-Millado, MSc', 'DBSES', 'csmillado@up.edu.ph', 0),
('DBMSatur', 'Dathleen Bituin M. Satur', 'DMPCS', 'dmsatur@up.edu.ph', 0),
('DDMDacera', 'Dominica DM. Dacera, PhD', 'DFSC', 'dddacera@up.edu.ph', 0),
('DMNDel Mundo', 'Dann Marie N. Del Mundo, PhD', 'DFSC', 'dndelmundo@up.edu.ph', 0),
('EMDBaron', 'Elsa May Delima-Baron, PhD, LPT', 'DBSES', 'edbaron@up.edu.ph', 0),
('EOVFundador', 'Erwin Oliver V. Fundador, PhD', 'DFSC', 'evfundador@up.edu.ph', 0),
('ERVBayogan', 'Emma Ruth V. Bayogan, PhD', 'DBSES', 'evbayogan@up.edu.ph', 0),
('ETRasco', 'Eufemio T. Rasco, Jr., PhD', 'DBSES', 'etrasco@up.edu.ph', 0),
('EVGARosero', 'El Veena Grace A. Rosero', 'DMPCS', 'earosero@up.edu.ph', 0),
('FACamino', 'Fritzie Ates-Camino, MSc', 'DBSES', 'facamino@up.edu.ph', 0),
('FMALorilla', 'Franch Maverick A. Lorilla', 'DMPCS', 'falorilla@up.edu.ph', 0),
('GFROguis', 'Giovanna Fae R. Oguis', 'DMPCS', 'groguis@up.edu.ph', 0),
('HMLLimpag', 'Hanna Mae L. Limpag', 'DMPCS', 'hllimpag@up.edu.ph', 0),
('JAMantiquilla', 'Junaldo A. Mantiquilla, PhD', 'DBSES', 'jamantiquilla@up.edu.ph', 0),
('JCIbanez', 'Jayson C. Ibañez, PhD', 'DBSES', 'jcibanez@up.edu.ph', 0),
('JEAcosta', 'Joseph E. Acosta', 'DMPCS', 'jeacosta@up.edu.ph', 0),
('JECMijares', 'Jasper Elvin C. Mijares, DVM', 'DBSES', 'jcmijares@up.edu.ph', 0),
('JHGTolentino', 'Joel Hassan G. Tolentino, PhD', 'DFSC', 'jgtolentino3@up.edu.ph', 0),
('JHOSantillan', 'Jon Henly O. Santillan', 'DMPCS', 'josantillan@up.edu.ph', 0),
('JLJTagubase', 'Jackie Loye J. Tagubase, PhD', 'DFSC', 'jjtagubase@up.edu.ph', 0),
('JNAAlviola', 'Juma Novie A. Alviola, PhD', 'DFSC', 'jaalvioloa@up.edu.ph', 0),
('JPFronteras', 'Jennifer P. Fronteras, MSc', 'DFSC', 'jpfronteras@up.edu.ph', 0),
('JRMCatane', 'Jose Ricardo M. Catane', 'DMPCS', 'jmcatane@up.edu.ph', 0),
('KBLigue', 'Kim Dianne B. Ligue', 'DMPCS', 'kbligue@up.edu.ph', 0),
('KFACalumba', 'Kriza Faye A. Calumba, MSc', 'DFSC', 'kacalumba@up.edu.ph', 0),
('KIMDuerme', 'Khent Ivan M. Duerme', 'DFSC', 'kmduerme@up.edu.ph', 0),
('KPMontajes', 'Kenneth P. Montajes', 'DMPCS', 'kpmontajes@up.edu.ph', 0),
('LAEMurao', 'Lyre Anni Espada-Murao, PhD, RMicro', 'DBSES', 'lemurao@up.edu.ph', 0),
('LEDGamalo', 'Lief Erikson D. Gamalo, MSc', 'DBSES', 'ldgamalo@up.edu.ph', 0),
('LMBEstana', 'Leo Manuel B. Estaña', 'DMPCS', 'lbestana@up.edu.ph', 0),
('MAEMata', 'May Anne E. Mata', 'DMPCS', 'memata@up.edu.ph', 0),
('MAResponte', 'Mae A. Responte, MSc', 'DBSES', 'maresponte@up.edu.ph', 0),
('MCSGuillermo', 'Miguel Carlo S. Guillermo', 'DMPCS', 'msguillermo2@up.edu.ph', 0),
('MJMMAchondo', 'Marion John Michael M. Achondo, PhD', 'DBSES', 'mmachondo@up.edu.ph', 0),
('MRTEstepa', 'Michael Ray T. Estepa', 'DMPCS', 'mtestepa@up.edu.ph', 0),
('MUUsares', 'Maynard U. Usares', 'DMPCS', 'muusares@up.edu.ph', 0),
('NGVFundador', 'Noreen Grace V. Fundador, PhD', 'DFSC', 'nvfundador@up.edu.ph', 0),
('RGEVillame', 'Rovi Gem E. Villame, MSc', 'DFSC', 'revillame@up.edu.ph', 0),
('RJHCejo', 'Robert Jay H. Cejo', 'DMPCS', 'rhcejo@up.edu.ph', 0),
('RLCatiempo', 'Rose L. Catiempo, PhD', 'DBSES', 'rlcatiempo@up.edu.ph', 0),
('RMTGamot', 'Ritchie Mae T. Gamot', 'DMPCS', 'rtgamot@up.edu.ph', 0),
('RPRenegado', 'Rainier P. Renegado', 'DMPCS', 'rprenegado@up.edu.ph', 0),
('RRReal', 'Rommel R. Real', 'DMPCS', 'rrreal@up.edu.ph', 0),
('SAEvangelio', 'Sherelyn A. Evangelio', 'DMPCS', 'saevangelio@up.edu.ph', 0),
('VBCalag', 'Vicente B. Calag', 'DMPCS', 'vbcalag@up.edu.ph', 0),
('VBKobayashi', 'Vladimer B. Kobayashi', 'DMPCS', 'vbkobayashi@up.edu.ph', 0),
('VCPDela Torre', 'Von Carlo P. Dela Torre, MSc', 'DBSES', 'vpdelatorre@up.edu.ph', 0),
('ZPTLachica', 'Zython Paul T. Lachica', 'DMPCS', 'ztlachica@up.edu.ph', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profoffering`
--

CREATE TABLE `profoffering` (
  `CourseID` varchar(15) NOT NULL,
  `ProfID` varchar(15) NOT NULL,
  `AcadYear` varchar(15) NOT NULL,
  `Semester` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profoffering`
--

INSERT INTO `profoffering` (`CourseID`, `ProfID`, `AcadYear`, `Semester`) VALUES
('BIO 145', 'AEDe Cadiz', '2023-2024', '2nd'),
('DS 29', 'AESAlmocera', '2023-2024', '2nd'),
('BIO 60', 'AFMRaganas', '2023-2024', '2nd'),
('CMSC 142', 'CGManliguez', '2023-2024', '2nd'),
('SCIENCE 10', 'CLNanola', '2023-2024', '2nd'),
('STS 1', 'CSSMillado', '2023-2024', '2nd'),
('MATH 37', 'DBMSatur', '2023-2024', '2nd'),
('CHEM 141', 'EOVFundador', '2023-2024', '2nd'),
('DS 45', 'EVGARosero', '2023-2024', '2nd'),
('MATH 37', 'FMALorilla', '2023-2024', '2nd'),
('AMAT 152', 'HMLLimpag', '2023-2024', '2nd'),
('BIO 102', 'JAMantiquilla', '2023-2024', '2nd'),
('BIO 176', 'JCIbanez ', '2023-2024', '2nd'),
('MATH 10', 'JEAcosta', '2023-2024', '2nd'),
('CHEM 22', 'JHGTolentino', '2023-2024', '2nd'),
('CMSC 124', 'JHOSantillan', '2023-2024', '2nd'),
('FST 163', 'JLJTagubase', '2023-2024', '2nd'),
('FST 141', 'JNAAlviola', '2023-2024', '2nd'),
('CHEM 160', 'JPFronteras', '2023-2024', '2nd'),
('CMSC 130', 'JRMCatane', '2023-2024', '2nd'),
('AMAT 193', 'KPMontajes', '2023-2024', '2nd'),
('BIO 115', 'LEDGamalo', '2023-2024', '2nd'),
('AMAT 160', 'LMBEstana', '2023-2024', '2nd'),
('BIO 100', 'MAResponte', '2023-2024', '2nd'),
('CMSC 127', 'MCSGuillermo', '2023-2024', '2nd'),
('BIO 143', 'MJMMAchondo', '2023-2024', '2nd'),
('AMAT 193', 'MUUsares', '2023-2024', '2nd'),
('CHEM 160', 'NGVFundador', '2023-2024', '2nd'),
('CHEM 160.1', 'RGEVillame', '2023-2024', '2nd'),
('MATH 37', 'RJHCejo', '2023-2024', '2nd'),
('BIO 100', 'RLCatiempo', '2023-2024', '2nd'),
('PHYS 72', 'RPRenegado', '2023-2024', '2nd'),
('AMAT 161', 'RRReal', '2023-2024', '2nd'),
('AMAT 168', 'SAEvangelio', '2023-2024', '2nd'),
('CMSC 126', 'VBCalag', '2023-2024', '2nd'),
('AMAT 132', 'VBKobayashi', '2023-2024', '2nd'),
('BIO 110', 'VCPDela Torre', '2023-2024', '2nd'),
('AMAT 110', 'ZPTLachica', '2023-2024', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomNumber` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Capacity` int(15) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomNumber`, `Name`, `Capacity`, `Type`) VALUES
('101', 'Circuit Breaker Room', 50, 'Utility'),
('102', 'Post Harvest Biology Lab', 50, 'Laboratory'),
('103', 'Post Harvest Cold Room', 50, 'Laboratory'),
('104', 'General Chemistry Lab', 50, 'Laboratory'),
('105', 'Lecture Room', 50, 'Lecture'),
('106', 'Instrument Room', 50, 'Instrument'),
('107', 'Food Engineering Lab', 50, 'Laboratory'),
('108', 'Biochemistry Lab', 50, 'Laboratory'),
('109', 'DFSC Dispensing Lab', 50, 'Laboratory'),
('110', 'Food Processing Lab', 50, 'Laboratory'),
('111', 'Microbiology Lab', 50, 'Laboratory'),
('112', 'Lecture Room', 50, 'Lecture'),
('113', 'College Secretary Office', 50, 'Office'),
('114', 'CR', 50, 'Utility'),
('115', 'College Secretary Office', 50, 'Office'),
('116', 'Equipment Room', 50, 'Equipment'),
('117', 'DBSES Dispensing Lab', 50, 'Laboratory'),
('118', 'Animal Biology Lab', 50, 'Laboratory'),
('119', 'General Biology Lab', 50, 'Laboratory'),
('120', 'Preparation Room', 50, 'Laboratory'),
('121', 'Microbiology Lab (DBSES)', 50, 'Laboratory'),
('122', 'Analytical Chemistry Lab', 50, 'Laboratory'),
('123', 'Dispense Room', 50, 'Dispense'),
('124', 'Chemistry Lab Dispensing', 50, 'Laboratory'),
('125a', 'Molecular Biology Lab', 50, 'Laboratory'),
('125b', 'Isolation Room', 50, 'Isolation'),
('126', 'Organic Chemistry Lab', 50, 'Laboratory'),
('127', 'Plant Processing Room', 50, 'Laboratory'),
('128a', 'Plant Science Lab', 50, 'Laboratory'),
('128b', 'Bio Con Lab', 50, 'Laboratory'),
('129', 'CR', 50, 'Utility'),
('130', 'Circuit Breaker Room', 50, 'Utility'),
('131', 'CR', 50, 'Utility'),
('132', 'Biotechnology Lab (DFSC)', 50, 'Laboratory'),
('201', 'CR', 50, 'Utility'),
('202', 'CR', 50, 'Utility'),
('203', 'Office of the Dean', 50, 'Office'),
('204', 'Research Room', 50, 'Research'),
('205', 'Office of the Dean', 50, 'Office'),
('206', 'Lecture Room', 50, 'Lecture'),
('207', 'Department of Biological Sciences and Environmenta', 50, 'Office'),
('208', 'Lecture Room', 50, 'Lecture'),
('209', 'DBSES Office', 50, 'Office'),
('210a', 'Lecture Room', 50, 'Lecture'),
('210b', 'Lecture Room', 50, 'Lecture'),
('211', 'DBSES Office', 50, 'Office'),
('212', 'Department of Math, Physics, and Computer Science ', 50, 'Office'),
('213', 'DMPCS Office', 50, 'Office'),
('214', 'Lecture Room', 50, 'Lecture'),
('215', 'Department of Food Science and Chemistry (DFSC) Of', 50, 'Office'),
('216', 'Conference Room & Lounge', 50, 'Office'),
('217a', 'DFSC Office', 50, 'Office'),
('217b', 'DFSC Office', 50, 'Office'),
('218', 'Faculty & Staff CR', 50, 'Utility'),
('219', 'DMPCS Office', 50, 'Office'),
('220', 'DMPCS Office', 50, 'Office'),
('221', 'Lecture Room', 50, 'Lecture'),
('222', 'Lecture Room', 50, 'Lecture'),
('223', 'Computing Lab', 50, 'Laboratory'),
('224', 'Lecture Room', 50, 'Lecture'),
('225', 'GIS Lab', 50, 'Laboratory'),
('226', 'Lecture Room', 50, 'Lecture'),
('227', 'Audio Visual Room (AVR)', 50, 'Lecture'),
('228', 'Data Science Lab', 50, 'Laboratory'),
('229', 'AI Lab', 50, 'Laboratory'),
('230', 'Laboratory Room', 50, 'Laboratory');

-- --------------------------------------------------------

--
-- Table structure for table `roomsched`
--

CREATE TABLE `roomsched` (
  `SchedID` varchar(20) NOT NULL,
  `RoomNumber` varchar(20) DEFAULT NULL,
  `ExamID` varchar(15) NOT NULL,
  `CourseID` varchar(15) NOT NULL,
  `ProfID` varchar(15) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Section` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomsched`
--

INSERT INTO `roomsched` (`SchedID`, `RoomNumber`, `ExamID`, `CourseID`, `ProfID`, `Time`, `Day`, `Section`) VALUES
('Room105_sched101', '105', '0', 'BIO 176', 'JCIbanez ', '1:00PM-4:00PM', 'Monday', 'UV'),
('Room105_sched102', '105', '0', 'BIO 170', 'MAResponte', '8:30AM-10:00AM', 'Tuesday', 'B'),
('Room105_sched104', '105', '0', 'MATH 36', 'KPMontajes', '11:30AM-1:00PM', 'Tuesday', 'DL'),
('Room105_sched105', '105', '0', 'DS 57', 'HMLLimpag', '1:00PM-2:30PM', 'Tuesday', 'E'),
('Room105_sched106', '105', '0', 'AMAT 152', 'HMLLimpag', '2:30PM-4:00PM', 'Tuesday', 'F'),
('Room105_sched108', '105', '0', 'MATH 36', 'KPMontajes', '11:30AM-1:00PM', 'Wednesday', 'DL'),
('Room105_sched109', '105', '0', 'DS 45', 'EVGARosero', '1:00PM-2:30PM', 'Wednesday', 'M'),
('Room105_sched110', '105', '0', 'SCIENCE 10', 'CLNanola', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room105_sched111', '105', '0', 'BIO 170', 'MAResponte', '8:30AM-10:00AM', 'Thursday', 'B'),
('Room105_sched113', '105', '0', 'MATH 36', 'KPMontajes', '11:30AM-1:00PM', 'Thursday', 'DL'),
('Room105_sched114', '105', '0', 'DS 57', 'HMLLimpag', '1:00PM-2:30PM', 'Thursday', 'E'),
('Room105_sched115', '105', '0', 'AMAT 152', 'HMLLimpag', '2:30PM-4:00PM', 'Thursday', 'F'),
('Room105_sched116', '105', '0', 'BIO 199b', 'JAMantiquilla', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room105_sched118', '105', '0', 'MATH 36', 'KPMontajes', '11:30AM-1:00PM', 'Friday', 'DL'),
('Room105_sched119', '105', '0', 'DS 45', 'EVGARosero', '1:00PM-2:30PM', 'Friday', 'M'),
('Room105_sched120', '105', '0', 'SCIENCE 10', 'CLNanola', '4:00PM-5:30PM', 'Friday', 'O'),
('Room107_sched101', '107', '0', 'CHEM 160.1', 'JPFronteras', ' 10:00 AM-4:00 PM', 'Tuesday', 'CDEF-1L'),
('Room108_sched101', '108', '0', 'CHEM 160.1', 'NGVFundador', ' 10:00 AM-4:00 PM', 'Thursday', 'CDEF-2L'),
('Room108_sched102', '108', '0', 'CHEM 160.1', ' JPFronteras', ' 10:00 AM-4:00 PM', 'Friday', 'KLMN-1L'),
('Room108_sched103', '108', '0', 'CHEM 160.1', ' RGEVillame', '11:30AM-5:30PM', 'Monday', 'TUVWX-1L'),
('Room108_sched104', '108', '0', 'FST 145', ' MAAlpos', '8:30 AM-11:30 AM', 'Monday', 'L-1L'),
('Room108_sched105', '108', '0', 'FST 221', ' RGEVillame', '10:00 AM-4:00 PM', 'Wednesday', 'J-1L'),
('Room110_sched102', '110', '0', 'FST 150', 'JNAAlviola', '1:00PM-4:00PM', 'Monday', 'F-1L'),
('Room110_sched103', '110', '0', 'FST 150', 'JNAAlviola', '2:30PM-4:00PM', 'Tuesday', 'F'),
('Room110_sched104', '110', '0', 'FST 221', 'RGEVillame', '8:30AM-10:00AM', 'Wednesday', 'J'),
('Room110_sched106', '110', '0', 'FST 141', 'JNAAlviola', '2:30PM-4:00PM', 'Wednesday', 'N'),
('Room110_sched107', '110', '0', 'FST 150', 'JNAAlviola', '2:30PM-4:00PM', 'Thursday', 'F'),
('Room110_sched108', '110', '0', 'FST 221', 'RGEVillame', '8:30AM-10:00AM', 'Friday', 'J'),
('Room110_sched110', '110', '0', 'FST 141', 'JNAAlviola', '2:30PM-4:00PM', 'Friday', 'N'),
('Room112_sched101', '112', '0', 'CHEM 22', 'JHGTolentino', '8:30AM-10:00AM', 'Tuesday', 'B2'),
('Room112_sched103', '112', '0', 'CMSC 130', 'JRMCatane', '4:00PM-5:30PM', 'Tuesday', 'O'),
('Room112_sched107', '112', '0', 'MATH 26', 'KPMontajes', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room112_sched108', '112', '0', 'CHEM 22', 'JHGTolentino', '8:30AM-10:00AM', 'Thursday', 'B2'),
('Room112_sched109', '112', '0', 'CMSC 130', 'JRMCatane', '1:00PM-4:00PM', 'Thursday', 'G-2L'),
('Room112_sched110', '112', '0', 'CMSC 130', 'JRMCatane', '4:00PM-5:30PM', 'Thursday', 'O'),
('Room112_sched114', '112', '0', 'MATH 26', 'KPMontajes', '4:00PM-5:30PM', 'Friday', 'O'),
('Room116_sched101', '116', '0', 'BIO 102', 'CSSMillado', '1:00 PM-4:00 PM', 'Tuesday', 'K-1L'),
('Room116_sched102', '116', '0', 'BIO 103', 'VCPDela Torre', '1:00 PM-4:00 PM', 'Thursday', 'J-1L'),
('Room116_sched103', '116', '0', 'BIO 110', 'VCPDela Torre', '10:00 AM-1:00 PM', 'Tuesday', 'B-1L'),
('Room116_sched104', '116', '0', 'BIO 110', 'VCPDela Torre', '1:00 PM-4:00 PM', 'Wednesday', 'B-2L'),
('Room116_sched105', '116', '0', 'BIO 110', 'VCPDela Torre', '10:00 AM-1:00 PM', 'Wednesday', 'B-3L'),
('Room119_sched101', '119', '0', 'BIO 115', 'JCIbanez', '4:00 PM-7:00 PM', 'Monday', 'RS-1L'),
('Room119_sched102', '119', '0', 'BIO 143', ' JECMijares', '10:00 AM-1:00 PM', 'Tuesday', 'J-1L'),
('Room119_sched103', '119', '0', 'BIO 143', ' JECMijares', '10:00 AM-1:00 PM', 'Thursday', 'J-1L'),
('Room119_sched104', '119', '0', 'BIO 143', ' JECMijares', '10:00 AM-1:00 PM', 'Wednesday', 'J-3L'),
('Room119_sched105', '119', '0', 'BIO 143', ' JECMijares', '10:00 AM-1:00 PM', 'Friday', 'J-3L'),
('Room119_sched106', '119', '0', 'BIO 144', ' JECMijares', '1:00 PM-4:00 PM', 'Friday', 'UV-1L'),
('Room119_sched107', '119', '0', 'BIO 60', ' AFMRaganas', '1:00 PM-4:00 PM', 'Tuesday', 'G-1L'),
('Room119_sched108', '119', '0', 'BIO 61', ' AFMRaganas', '1:00 PM-4:00 PM', 'Wednesday', 'G-2L'),
('Room119_sched109', '119', '0', 'BIO 62', ' AFMRaganas', '1:00 PM-4:00 PM', 'Thursday', 'G-3L'),
('Room206_sched101', '206', '0', 'STS 1', 'JEAcosta', '8:30AM-11:30AM', 'Monday', 'RS'),
('Room206_sched102', '206', '0', 'BIO 144', 'VCPDela Torre', '1:00PM-4:00PM', 'Monday', 'UV'),
('Room206_sched103', '206', '0', 'BIO 110', 'VCPDela Torre', '8:30AM-10:00AM', 'Tuesday', 'B'),
('Room206_sched104', '206', '0', 'CHEM 141', 'EOVFundador', '10:00AM-11:30AM', 'Tuesday', 'C'),
('Room206_sched105', '206', '0', 'STAT 1', 'SAEvangelio', '11:30AM-1:00PM', 'Tuesday', 'D'),
('Room206_sched106', '206', '0', 'AMAT 132', 'VBKobayashi', '1:00PM-2:30PM', 'Tuesday', 'E'),
('Room206_sched107', '206', '0', 'MATH 10', 'JEAcosta', '2:30PM-4:00PM', 'Tuesday', 'F'),
('Room206_sched108', '206', '0', 'BIO 164', 'RLCatiempo', '4:00PM-5:30PM', 'Tuesday', 'G'),
('Room206_sched109', '206', '0', 'STS 1', 'JEAcosta', '7:00AM-8:30AM', 'Wednesday', 'I'),
('Room206_sched110', '206', '0', 'CHEM 160', 'JPFronteras', '8:30AM-10:00AM', 'Wednesday', 'J2'),
('Room206_sched111', '206', '0', 'BIO 145', 'AEDe Cadiz', '11:30AM-1:00PM', 'Wednesday', 'O'),
('Room206_sched112', '206', '0', 'PHYS 72', 'RPRenegado', '1:00PM-4:00PM', 'Wednesday', 'MN-1L'),
('Room206_sched113', '206', '0', 'BIO 199b', 'JAMantiquilla', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room206_sched114', '206', '0', 'BIO 110', 'VCPDela Torre', '8:30AM-10:00AM', 'Thursday', 'B'),
('Room206_sched115', '206', '0', 'CHEM 141', 'EOVFundador', '10:00AM-11:30AM', 'Thursday', 'C'),
('Room206_sched116', '206', '0', 'STAT 1', 'SAEvangelio', '11:30AM-1:00PM', 'Thursday', 'D'),
('Room206_sched117', '206', '0', 'AMAT 132', 'VBKobayashi', '1:00PM-2:30PM', 'Thursday', 'E'),
('Room206_sched118', '206', '0', 'MATH 10', 'JEAcosta', '2:30PM-4:00PM', 'Thursday', 'F'),
('Room206_sched119', '206', '0', 'BIO 164', 'RLCatiempo', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room206_sched120', '206', '0', 'STS 1', 'JEAcosta', '7:00AM-8:30AM', 'Friday', 'I'),
('Room206_sched121', '206', '0', 'CHEM 160', 'JPFronteras', '8:30AM-10:00AM', 'Friday', 'J2'),
('Room206_sched122', '206', '0', 'BIO 145', 'AEDe Cadiz', '11:30AM-1:00PM', 'Friday', 'O'),
('Room208_sched101', '208', '0', 'CHEM 22', 'JHGTolentino', '8:30AM-10:00AM', 'Tuesday', 'B1'),
('Room208_sched102', '208', '0', 'CMSC 186', 'VBCalag', '11:30AM-1:00PM', 'Tuesday', 'D'),
('Room208_sched103', '208', '0', 'PHYS 72', 'RPRenegado', '1:00PM-4:00PM', 'Tuesday', 'EF'),
('Room208_sched104', '208', '0', 'MATH 37', 'DBMSatur', '4:00PM-5:30PM', 'Tuesday', 'GO-2'),
('Room208_sched105', '208', '0', 'CHEM 160', 'JPFronteras', '8:30AM-10:00AM', 'Wednesday', 'JI'),
('Room208_sched106', '208', '0', 'BIO 102', 'JAMantiquilla', '10:00AM-11:30AM', 'Wednesday', 'K'),
('Room208_sched107', '208', '0', 'SCIENCE 10', 'CLNanola', '11:30AM-1:00PM', 'Wednesday', 'L'),
('Room208_sched108', '208', '0', 'STAT 1', 'SAEvangelio', '1:00PM-4:00PM', 'Wednesday', 'L-2L'),
('Room208_sched109', '208', '0', 'MATH 37', 'DBMSatur', '4:00PM-5:30PM', 'Wednesday', 'GO-2'),
('Room208_sched110', '208', '0', 'CHEM 22', 'JHGTolentino', '8:30AM-10:00AM', 'Thursday', 'B1'),
('Room208_sched111', '208', '0', 'CMSC 186', 'VBCalag', '11:30AM-1:00PM', 'Thursday', 'D'),
('Room208_sched112', '208', '0', 'PHYS 72', 'RPRenegado', '1:00PM-4:00PM', 'Thursday', 'EF'),
('Room208_sched113', '208', '0', 'MATH 37', 'DBMSatur', '4:00PM-5:30PM', 'Thursday', 'GO-2'),
('Room208_sched114', '208', '0', 'CHEM 160', 'JPFronteras', '8:30AM-10:00AM', 'Friday', 'JI'),
('Room208_sched115', '208', '0', 'BIO 102', 'JAMantiquilla', '10:00AM-11:30AM', 'Friday', 'K'),
('Room208_sched116', '208', '0', 'SCIENCE 10', 'CLNanola', '11:30AM-1:00PM', 'Friday', 'L'),
('Room208_sched117', '208', '0', 'STAT 1', 'SAEvangelio', '1:00PM-4:00PM', 'Friday', 'L-3L'),
('Room208_sched118', '208', '0', 'MATH 37', 'DBMSatur', '4:00PM-5:30PM', 'Friday', 'GO-2'),
('Room221_sched101', '221', '0', 'AMAT 193', 'KPMontajes', '8:30AM-10:00AM', 'Tuesday', 'B'),
('Room221_sched102', '221', '0', 'AMAT 167', 'VBKobayashi', '10:00AM-11:30AM', 'Tuesday', 'C'),
('Room221_sched105', '221', '0', 'CMSC 141', 'JHOSantillan', '4:00PM-5:30PM', 'Tuesday', 'G'),
('Room221_sched106', '221', '0', 'AMAT 161', 'RRReal', '8:30AM-10:00AM', 'Wednesday', 'J'),
('Room221_sched109', '221', '0', 'AMAT 160', 'LMBEstana', '1:00PM-2:30PM', 'Wednesday', 'M'),
('Room221_sched110', '221', '0', 'MATH 38', 'EVGARosero', '2:30PM-4:00PM', 'Wednesday', 'N'),
('Room221_sched111', '221', '0', 'BIO 21', 'VCPDela Torre', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room221_sched112', '221', '0', 'AMAT 168', 'SAEvangelio', '5:30PM-7:00PM', 'Wednesday', 'P'),
('Room221_sched113', '221', '0', 'AMAT 193', 'KPMontajes', '8:30AM-10:00AM', 'Thursday', 'B'),
('Room221_sched114', '221', '0', 'AMAT 167', 'VBKobayashi', '10:00AM-11:30AM', 'Thursday', 'C'),
('Room221_sched115', '221', '0', 'MATH 10', 'VBKobayashi', '2:30PM-4:00PM', 'Thursday', 'F2'),
('Room221_sched116', '221', '0', 'CMSC 141', 'JHOSantillan', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room221_sched117', '221', '0', 'AMAT 161', 'RRReal', '8:30AM-10:00AM', 'Friday', 'J'),
('Room221_sched120', '221', '0', 'AMAT 160', 'LMBEstana', '1:00PM-2:30PM', 'Friday', 'M'),
('Room221_sched121', '221', '0', 'MATH 38', 'EVGARosero', '2:30PM-4:00PM', 'Friday', 'N'),
('Room221_sched122', '221', '0', 'BIO 21', 'VCPDela Torre', '4:00PM-5:30PM', 'Friday', 'O'),
('Room221_sched123', '221', '0', 'AMAT 168', 'SAEvangelio', '5:30PM-7:00PM', 'Friday', 'P'),
('Room222_sched101', '222', '0', 'STAT 1', 'SAEvangelio', '7:00AM-10:00AM', 'Monday', 'D-1L'),
('Room222_sched102', '222', '0', 'STAT 1', 'SAEvangelio', '4:00PM-7:00PM', 'Monday', 'D-2L'),
('Room222_sched103', '222', '0', 'SCIENCE 10', 'CLNanola', '7:00AM-8:30AM', 'Tuesday', 'A'),
('Room222_sched104', '222', '0', 'CMSC 126', 'VBCalag', '8:30AM-10:00AM', 'Tuesday', 'O'),
('Room222_sched105', '222', '0', 'CMSC 127', 'MCSGuillermo', '10:00AM-11:30AM', 'Tuesday', 'O'),
('Room222_sched107', '222', '0', 'BIO 100', 'RLCatiempo', '4:00PM-7:00PM', 'Tuesday', 'G'),
('Room222_sched108', '222', '0', 'PHYS 13', 'MUUsares', '7:00AM-8:30AM', 'Wednesday', 'I'),
('Room222_sched109', '222', '0', 'SCIENCE 10', 'CLNanola', '8:30AM-10:00AM', 'Wednesday', 'J'),
('Room222_sched110', '222', '0', 'CMSC 28', 'VBCalag', '10:00AM-11:30AM', 'Wednesday', 'O'),
('Room222_sched111', '222', '0', 'SCIENCE 10', 'CLNanola', '7:00AM-8:30AM', 'Thursday', 'A'),
('Room222_sched112', '222', '0', 'CMSC 126', 'VBCalag', '8:30AM-10:00AM', 'Thursday', 'O'),
('Room222_sched116', '222', '0', 'BIO 100', 'RLCatiempo', '4:00PM-7:00PM', 'Thursday', 'G'),
('Room222_sched117', '222', '0', 'PHYS 13', 'MUUsares', '7:00AM-8:30AM', 'Friday', 'I'),
('Room222_sched118', '222', '0', 'SCIENCE 10', 'CLNanola', '8:30AM-10:00AM', 'Friday', 'J'),
('Room222_sched119', '222', '0', 'CMSC 28', 'VBCalag', '10:00AM-11:30AM', 'Friday', 'O'),
('Room222_sched120', '222', '0', 'PHYS 13', 'MUUsares', '11:30AM-4:00PM', 'Friday', 'O-3L'),
('Room223_sched101', '223', '0', 'CMSC 124', 'JHOSantillan', ' 7:00 AM-10:00 AM', 'Tuesday', 'C-1L'),
('Room223_sched102', '223', '0', 'CMSC 127', ' MCSGuillermo', ' 7:00 AM-10:00 AM', 'Wednesday', 'D-1L'),
('Room223_sched103', '223', '0', 'CMSC 127', ' MCSGuillermo', ' 7:00 AM-10:00 AM', 'Friday', 'D-2L'),
('Room223_sched104', '223', '0', 'CMSC 183', ' MCSGuillermo', '1:00 PM-4:00 PM', 'Wednesday', 'E-1L'),
('Room223_sched105', '223', '0', 'CMSC 183', ' MCSGuillermo', '1:00 PM-4:00 PM', 'Friday', 'E-2L'),
('Room223_sched106', '223', '0', 'DS 57', ' ARMesa-Satina', ' 10:00 AM-1:00 PM', 'Tuesday', 'E-1L'),
('Room223_sched107', '223', '0', 'DS 57', ' ARMesa-Satina', '8:00 AM-11:00 AM', 'Thursday', 'E-2L'),
('Room224_sched101', '224', '0', 'BIO 115', 'LEDGamalo', '8:30AM-10:00AM', 'Monday', 'RS'),
('Room224_sched103', '224', '0', 'CMSC 124', 'JHOSantillan', '10:00AM-11:30AM', 'Tuesday', 'O'),
('Room224_sched104', '224', '0', 'CMSC 127', 'MCSGuillermo', '11:30AM-1:00PM', 'Tuesday', 'O'),
('Room224_sched105', '224', '0', 'CMSC 183', 'MCSGuillermo', '1:00PM-2:30PM', 'Tuesday', 'O'),
('Room224_sched108', '224', '0', 'MATH 26', 'KPMontajes', '8:30AM-10:00AM', 'Wednesday', 'J2'),
('Room224_sched110', '224', '0', 'CMSC 142', 'CGManliguez', '11:30AM-1:00PM', 'Wednesday', 'O'),
('Room224_sched111', '224', '0', 'MATH 10', 'VBKobayashi', '2:30PM-4:00PM', 'Wednesday', 'N'),
('Room224_sched112', '224', '0', 'CMSC 137', 'JRMCatane', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room224_sched114', '224', '0', 'CMSC 124', 'JHOSantillan', '10:00AM-11:30AM', 'Thursday', 'O'),
('Room224_sched115', '224', '0', 'CMSC 127', 'MCSGuillermo', '11:30AM-1:00PM', 'Thursday', 'O'),
('Room224_sched116', '224', '0', 'CMSC 183', 'MCSGuillermo', '2:30PM-4:00PM', 'Thursday', 'O'),
('Room224_sched118', '224', '0', 'MATH 26', 'KPMontajes', '8:30AM-10:00AM', 'Friday', 'J2'),
('Room224_sched120', '224', '0', 'CMSC 142', 'CGManliguez', '11:30AM-1:00PM', 'Friday', 'L'),
('Room224_sched121', '224', '0', 'MATH 10', 'VBKobayashi', '2:30PM-4:00PM', 'Friday', 'N'),
('Room224_sched122', '224', '0', 'CMSC 137', 'JRMCatane', '4:00PM-5:30PM', 'Friday', 'O'),
('Room225a_sched101', '225a           ', '0', 'STAT 1', ' KBLigue', '1:00 PM-4:00 PM', 'Monday', 'A-1L'),
('Room225a_sched102', '225a                ', '0', 'STAT 1', ' KBLigue', '4:00 PM-7:00 PM', 'Monday', 'D-3L'),
('Room225a_sched103', '225a                ', '0', 'STAT 1', ' KBLigue', '10:00 AM-1:00 PM', 'Tuesday', 'K-1L'),
('Room225a_sched104', '225a                ', '0', 'CMSC 124', ' JHOSantillan', '7:00 AM-10:00 AM', 'Thursday', 'C-2L'),
('Room225a_sched105', ' 225a               ', '0', 'CMSC 125', ' RTGamot', '7:00 AM-10:00 AM', 'Thursday', 'C-2L'),
('Room225a_sched106', '225a                ', '0', 'CMSC 125', ' RTGamot', ' 1:00 PM-4:00 PM', 'Wednesday', 'G-1L'),
('Room225a_sched107', '225a                ', '0', 'CMSC 126', ' VBCalag', '7:00 AM-10:00 AM', 'Wednesday', 'B-1L'),
('Room225a_sched108', '225a                ', '0', 'CMSC 126', ' VBCalag', '7:00 AM-10:00 AM', 'Friday', 'B-2L'),
('Room225a_sched109', '225a                ', '0', 'CMSC 126', ' VBCalag', '1:00 PM-4:00 PM', 'Tuesday', 'B-3L'),
('Room225a_sched110', '225a                ', '0', 'CMSC 137 ', ' JRMCatane', '1:00 PM-4:00 PM', 'Saturday', 'O-1L'),
('Room225a_sched111', '225a                ', '0', 'CMSC 137 ', ' JRMCatane', '10:00 AM-1:00 PM', 'Friday', 'O-2L'),
('Room225a_sched112', '225a                ', '0', 'CMSC 191', ' RTGamot', ' 7:00 AM-10:00 AM', 'Tuesday', 'F1-1L'),
('Room225a_sched113', '225a                ', '0', 'STAT 1', ' KBLigue', '1:00 PM-4:00 PM', 'Monday', 'A-1L'),
('Room225a_sched114', '225a                ', '0', 'STAT 1', ' KBLigue', '4:00 PM-7:00 PM', 'Monday', 'D-3L'),
('Room225a_sched115', '225a                ', '0', 'STAT 1', ' KBLigue', '10:00 AM-1:00 PM', 'Tuesday', 'K-1L'),
('Room226_sched101', '226', '0', 'PHYS 3', 'MUUsares', '11:30AM-1:00PM', 'Monday', 'O'),
('Room226_sched102', '226', '0', 'STAT 1', 'KBLigue', '7:00AM-8:30AM', 'Tuesday', 'A'),
('Room226_sched104', '226', '0', 'MATH 26', 'EVGARosero', '10:00AM-11:30AM', 'Tuesday', 'C'),
('Room226_sched105', '226', '0', 'MATH 155', 'RRReal', '11:30AM-1:00PM', 'Tuesday', 'D'),
('Room226_sched107', '226', '0', 'STAT 1', 'KBLigue', '4:00PM-5:30PM', 'Tuesday', 'G'),
('Room226_sched109', '226', '0', 'FST 165', 'JLJTagubase', '10:00AM-11:30AM', 'Wednesday', 'K'),
('Room226_sched112', '226', '0', 'FST 163', 'JLJTagubase', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room226_sched113', '226', '0', 'STAT 1', 'KBLigue', '7:00AM-8:30AM', 'Thursday', 'A'),
('Room226_sched115', '226', '0', 'MATH 26', 'AESAlmocera', '10:00AM-11:30AM', 'Thursday', 'C'),
('Room226_sched116', '226', '0', 'MATH 155', 'RRReal', '11:30AM-1:00PM', 'Thursday', 'D'),
('Room226_sched118', '226', '0', 'STAT 1', 'KBLigue', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room226_sched120', '226', '0', 'FST 165', 'JLJTagubase', '10:00AM-11:30AM', 'Friday', 'K'),
('Room226_sched123', '226', '0', 'PHYS 3', 'MUUsares', '2:30PM-4:00PM', 'Friday', 'O'),
('Room226_sched124', '226', '0', 'FST 163', 'JLJTagubase', '4:00PM-5:30PM', 'Friday', 'O'),
('Room227_sched102', '227', '0', 'BIO 60', 'AFMRaganas', '4:00PM-5:30PM', 'Tuesday', 'G'),
('Room227_sched105', '227', '0', 'STAT 1', 'SAEvangelio', '11:30AM-1:00PM', 'Wednesday', 'L'),
('Room227_sched107', '227', '0', 'BIO 40', 'MJMMAchondo', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room227_sched109', '227', '0', 'BIO 60', 'AFMRaganas', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room227_sched110', '227', '0', 'BIO 143', 'MJMMAchondo', '8:30AM-10:00AM', 'Friday', 'J'),
('Room227_sched112', '227', '0', 'STAT 1', 'SAEvangelio', '11:30AM-1:00PM', 'Friday', 'L'),
('Room227_sched114', '227', '0', 'BIO 40', 'MJMMAchondo', '4:00PM-5:30PM', 'Friday', 'O'),
('Room228_sched101', '228', '0', 'PHYS 72', 'RPRenegado', '7:00AM-8:30AM', 'Tuesday', 'BC'),
('Room228_sched102', '228', '0', 'PHYS 72', 'RPRenegado', '10:00AM-1:00PM', 'Tuesday', 'CD'),
('Room228_sched104', '228', '0', 'PHYS 3', 'MUUsares', '4:00PM-5:30PM', 'Tuesday', 'G'),
('Room228_sched105', '228', '0', 'DS 29', 'AESAlmocera', '8:30AM-10:00AM', 'Wednesday', 'O'),
('Room228_sched106', '228', '0', 'MATH 26', 'AESAlmocera', '11:30AM-1:00PM', 'Wednesday', 'L'),
('Room228_sched107', '228', '0', 'STAT 1', 'SAEvangelio', '1:00PM-4:00PM', 'Wednesday', 'G-1L'),
('Room228_sched108', '228', '0', 'AMAT 131', 'KBLigue', '4:00PM-5:30PM', 'Wednesday', 'O'),
('Room228_sched109', '228', '0', 'PHYS 72', 'RPRenegado', '7:00AM-8:30AM', 'Thursday', 'BC'),
('Room228_sched110', '228', '0', 'PHYS 72', 'RPRenegado', '10:00AM-1:00PM', 'Thursday', 'CD'),
('Room228_sched112', '228', '0', 'PHYS 3', 'MUUsares', '4:00PM-5:30PM', 'Thursday', 'G'),
('Room228_sched113', '228', '0', 'DS 29', 'AESAlmocera', '8:30AM-10:00AM', 'Friday', 'O'),
('Room228_sched114', '228', '0', 'MATH 26', 'AESAlmocera', '11:30AM-1:00PM', 'Friday', 'L'),
('Room228_sched115', '228', '0', 'STAT 1', 'SAEvangelio', '1:00PM-4:00PM', 'Friday', 'G-2L'),
('Room228_sched116', '228', '0', 'AMAT 131', 'KBLigue', '4:00PM-5:30PM', 'Friday', 'O'),
('Room229_sched102', '229', '0', 'AMAT 131', 'KBLigue', '7:00AM-10:00AM', 'Tuesday', 'O-1L'),
('Room229_sched103', '229', '0', 'CMSC 130', 'JRMCatane', '1:00PM-4:00PM', 'Tuesday', 'C-1L'),
('Room229_sched104', '229', '0', 'CMSC 28', 'HMLLimpag', '7:00AM-10:00AM', 'Wednesday', 'K-1L'),
('Room229_sched105', '229', '0', 'CMSC 28', 'HMLLimpag', '1:00PM-4:00PM', 'Wednesday', 'K-3L'),
('Room229_sched107', '229', '0', 'CMSC 28', 'HMLLimpag', '7:00AM-10:00AM', 'Friday', 'K-2L'),
('Room230_sched101', '230', '0', 'MATH 10', 'AESAlmocera', '8:30AM-10:00AM', 'Tuesday', 'B'),
('Room230_sched102', '230', '0', 'STAT 1', 'SAEvangelio', '1:00PM-4:00PM', 'Tuesday', 'L-1L'),
('Room230_sched104', '230', '0', 'PHYS 13', 'MUUsares', '10:00AM-1:00PM', 'Wednesday', 'O-1L'),
('Room230_sched105', '230', '0', 'PHYS 3', 'MUUsares', '1:00PM-4:00PM', 'Wednesday', 'G-1L'),
('Room230_sched106', '230', '0', 'MATH 10', 'AESAlmocera', '8:30AM-10:00AM', 'Thursday', 'B'),
('Room230_sched107', '230', '0', 'PHYS 13', 'MUUsares', '10:00AM-1:00PM', 'Thursday', 'O-2L'),
('Room230_sched109', '230', '0', 'PHYS 72', 'RPRenegado', '7:00AM-10:00AM', 'Friday', 'IJ-1L'),
('Room230_sched110', '230', '0', 'PHYS 72', 'RPRenegado', '1:00PM-4:00PM', 'Friday', 'MN-2L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administator`
--
ALTER TABLE `administator`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `courseoffering`
--
ALTER TABLE `courseoffering`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ExamID`),
  ADD KEY `ProfID_exam` (`ProfID`) USING BTREE,
  ADD KEY `CourseID_exam_fk` (`CourseID`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`ProfID`);

--
-- Indexes for table `profoffering`
--
ALTER TABLE `profoffering`
  ADD PRIMARY KEY (`ProfID`),
  ADD KEY `CourseID_profoffering_fk` (`CourseID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomNumber`);

--
-- Indexes for table `roomsched`
--
ALTER TABLE `roomsched`
  ADD PRIMARY KEY (`SchedID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseoffering`
--
ALTER TABLE `courseoffering`
  ADD CONSTRAINT `CourseID_courseoffering_fk` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `CourseID_exam_fk` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`),
  ADD CONSTRAINT `ProfID_exam` FOREIGN KEY (`ProfID`) REFERENCES `professor` (`ProfID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
