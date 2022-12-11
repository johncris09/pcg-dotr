-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 03:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcgdotr`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_code`
--

CREATE TABLE `action_code` (
  `id` int(11) NOT NULL,
  `action_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `action_code`
--

INSERT INTO `action_code` (`id`, `action_code`) VALUES
(1, 'VS83 RECTIFY AT NEXT PORT'),
(2, 'VS85 RECTIFY WITHIN 14 DAYS'),
(3, 'VS87 RECTIFY BEFORE DEPARTURE'),
(4, 'VS88 RECTIFY WITHIN 3 MONTHS'),
(5, 'VS90 DETAINABLE DEFICIENCIES'),
(6, 'VS95 OTHERS (SPECIFY)');

-- --------------------------------------------------------

--
-- Table structure for table `activity_conduct`
--

CREATE TABLE `activity_conduct` (
  `id` int(11) NOT NULL,
  `activity_conduct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_conduct`
--

INSERT INTO `activity_conduct` (`id`, `activity_conduct`) VALUES
(1, 'PCG INITIATED'),
(2, 'JOINT'),
(3, 'PARTICIPATED FROM OTHER AGENCY');

-- --------------------------------------------------------

--
-- Table structure for table `affected_area`
--

CREATE TABLE `affected_area` (
  `id` int(11) NOT NULL,
  `affected_area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `affected_area`
--

INSERT INTO `affected_area` (`id`, `affected_area`) VALUES
(1, 'MANGROVES'),
(2, 'SEA GRASS'),
(3, 'MPA'),
(4, 'PSSA'),
(5, 'TOURISM AREA'),
(6, 'RESIDENTIAL'),
(7, 'DIVE SITES');

-- --------------------------------------------------------

--
-- Table structure for table `affected_biodiversity`
--

CREATE TABLE `affected_biodiversity` (
  `id` int(11) NOT NULL,
  `affected_biodiversity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `affected_biodiversity`
--

INSERT INTO `affected_biodiversity` (`id`, `affected_biodiversity`) VALUES
(1, 'BIRDS'),
(2, 'CRUSTACEANS'),
(3, 'RESIDENTIAL AREAS'),
(4, 'MARINE MAMMALS');

-- --------------------------------------------------------

--
-- Table structure for table `application_type`
--

CREATE TABLE `application_type` (
  `id` int(11) NOT NULL,
  `application_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_type`
--

INSERT INTO `application_type` (`id`, `application_type`) VALUES
(1, 'APPLICATION FOR SALVOR CERTIFICATE OF REGISTRATION'),
(2, 'SALVOR CERTIFICATE OF REGISTRATION'),
(3, 'RENEWAL OF SALVOR CERTIFICATE OF REGISTRATION'),
(4, 'INSPECTION PERMIT AND SALVAGE PERMIT'),
(5, 'SALVAGE CERTIFICATE OF INSPECTION');

-- --------------------------------------------------------

--
-- Table structure for table `beach_coast_line_length`
--

CREATE TABLE `beach_coast_line_length` (
  `id` int(11) NOT NULL,
  `beach_coast_line_length` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beach_coast_line_length`
--

INSERT INTO `beach_coast_line_length` (`id`, `beach_coast_line_length`) VALUES
(1, '20 METER'),
(2, '40 METER'),
(3, '60 METER');

-- --------------------------------------------------------

--
-- Table structure for table `bouy_type`
--

CREATE TABLE `bouy_type` (
  `id` int(11) NOT NULL,
  `bouy_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bouy_type`
--

INSERT INTO `bouy_type` (`id`, `bouy_type`) VALUES
(1, 'LATERAL PORT HAND MARK'),
(2, 'LATERAL STARBOARD HAND MARK'),
(3, 'NORTH CARDINAL MARK'),
(4, 'SOUTH CARDINAL MARK'),
(5, 'WEST CARDINAL MARK');

-- --------------------------------------------------------

--
-- Table structure for table `coastal_and_beach_violation`
--

CREATE TABLE `coastal_and_beach_violation` (
  `id` int(11) NOT NULL,
  `coastal_and_beach_violation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coastal_and_beach_violation`
--

INSERT INTO `coastal_and_beach_violation` (`id`, `coastal_and_beach_violation`) VALUES
(1, 'INSUFFICIENT NUMBER OF LIFEGUARD CERTIFIED BY THE PCG'),
(2, 'NO PHYSICIAN'),
(3, 'NON- ACCESSIBILITY TO HOSPITAL OR MEDICAL CENTERS'),
(4, 'FIRST-AIDERS NOT CERTIFIED BY PRC'),
(5, 'NO FIRST-AIDE MEDICINE'),
(6, 'NO LIFE SAVING EQUIPMENTS'),
(7, 'INSUFFICIENTS NUMBER OF BUOYS'),
(8, 'NO VISIBLE WARNING SIGN OF DANGER AREAS'),
(9, 'NO RADIO/COMMUNICATION ROOM'),
(10, 'NO VHF RADIO WITH BASE'),
(11, 'NO HOUSE RULES AND REGULATORY BEATED');

-- --------------------------------------------------------

--
-- Table structure for table `conduct_of_activity`
--

CREATE TABLE `conduct_of_activity` (
  `conduct_of_activity_id` int(11) NOT NULL,
  `conduct_of_activity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `conduct_of_activity`
--

INSERT INTO `conduct_of_activity` (`conduct_of_activity_id`, `conduct_of_activity`) VALUES
(2, 'JOINT'),
(3, 'PARTICIPATED FROM OTHER AGENCY'),
(1, 'PCG INITIATED');

-- --------------------------------------------------------

--
-- Table structure for table `drill_conducted`
--

CREATE TABLE `drill_conducted` (
  `id` int(11) NOT NULL,
  `drill_conducted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drill_conducted`
--

INSERT INTO `drill_conducted` (`id`, `drill_conducted`) VALUES
(1, 'ABANDONSHIP'),
(2, 'FIRE IN PORT AND/OR AT SEA'),
(3, 'COLLISION AT PORT AND/OR AT SEA'),
(4, 'EMERGENCY STEERING CASUALTY'),
(5, 'MAN- OVERBOARD');

-- --------------------------------------------------------

--
-- Table structure for table `ere_result`
--

CREATE TABLE `ere_result` (
  `id` int(11) NOT NULL,
  `ere_result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ere_result`
--

INSERT INTO `ere_result` (`id`, `ere_result`) VALUES
(1, 'PASSED');

-- --------------------------------------------------------

--
-- Table structure for table `facility_type`
--

CREATE TABLE `facility_type` (
  `id` int(11) NOT NULL,
  `facility_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility_type`
--

INSERT INTO `facility_type` (`id`, `facility_type`) VALUES
(1, 'DEPOT/TERMINAL'),
(2, 'POWER PLANT'),
(3, 'SHIPYARD'),
(4, 'OIL MILL'),
(5, 'MANUFACTURING PLANT');

-- --------------------------------------------------------

--
-- Table structure for table `garbage_type_collected`
--

CREATE TABLE `garbage_type_collected` (
  `id` int(11) NOT NULL,
  `garbage_type_collected` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `garbage_type_collected`
--

INSERT INTO `garbage_type_collected` (`id`, `garbage_type_collected`) VALUES
(1, 'HOUSEHOLD PLASTIC ITEMS'),
(2, 'DISCARDED FISHING GEARS (NETS, LINES, FLOATERS, ROPES)'),
(3, 'DISCARDED SANITARY PRODUCTS'),
(4, 'METALS'),
(5, 'BIODEGARDABLE (WOODS, PAPERS, FOOD WASTE)');

-- --------------------------------------------------------

--
-- Table structure for table `incident_cause`
--

CREATE TABLE `incident_cause` (
  `id` int(11) NOT NULL,
  `incident_cause` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_cause`
--

INSERT INTO `incident_cause` (`id`, `incident_cause`) VALUES
(1, 'MACHINERY FAILURE'),
(2, 'NAVIGATIONAL EQUIPMENT FAILURE'),
(3, 'HUMAN ERROR'),
(4, 'SEA AND WEATHER CONDITION');

-- --------------------------------------------------------

--
-- Table structure for table `incident_consequences`
--

CREATE TABLE `incident_consequences` (
  `id` int(11) NOT NULL,
  `incident_consequences` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident_consequences`
--

INSERT INTO `incident_consequences` (`id`, `incident_consequences`) VALUES
(1, 'INJURY'),
(2, 'DEATH'),
(3, 'MISSING PERSON'),
(4, 'POLLUTION'),
(5, 'DAMAGE TO MARINE ENVIRONMENT'),
(6, 'LOSS OF SHIPS'),
(7, 'DAMAGE OF CARGOES'),
(8, 'MATERIAL DAMAGE');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_type`
--

CREATE TABLE `inspection_type` (
  `id` int(11) NOT NULL,
  `inspection_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspection_type`
--

INSERT INTO `inspection_type` (`id`, `inspection_type`) VALUES
(1, 'MONITORING INSPECTION'),
(2, 'COMPLIANCE INSPECTION');

-- --------------------------------------------------------

--
-- Table structure for table `lighthouse_cause_if_not_operating`
--

CREATE TABLE `lighthouse_cause_if_not_operating` (
  `id` int(11) NOT NULL,
  `lighthouse_cause_if_not_operating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lighthouse_cause_if_not_operating`
--

INSERT INTO `lighthouse_cause_if_not_operating` (`id`, `lighthouse_cause_if_not_operating`) VALUES
(1, 'DEFECTIVE LATERN'),
(2, 'DEFECTIVE BATTERY'),
(3, 'SOLAR PANEL DAMAGE'),
(4, 'DEFECTIVE CHARGING CONTROLLER'),
(5, 'DEFECTIVE LAMP CHANGER'),
(6, 'VANDALIZED');

-- --------------------------------------------------------

--
-- Table structure for table `lighthouse_inspection_purpose`
--

CREATE TABLE `lighthouse_inspection_purpose` (
  `id` int(11) NOT NULL,
  `lighthouse_inspection_purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lighthouse_inspection_purpose`
--

INSERT INTO `lighthouse_inspection_purpose` (`id`, `lighthouse_inspection_purpose`) VALUES
(1, 'MAINTENANCE'),
(2, 'REPAIR');

-- --------------------------------------------------------

--
-- Table structure for table `lighthouse_status`
--

CREATE TABLE `lighthouse_status` (
  `id` int(11) NOT NULL,
  `lighthouse_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lighthouse_status`
--

INSERT INTO `lighthouse_status` (`id`, `lighthouse_status`) VALUES
(1, 'OPERATING'),
(2, 'NOT OPERATING');

-- --------------------------------------------------------

--
-- Table structure for table `lighthouse_type`
--

CREATE TABLE `lighthouse_type` (
  `id` int(11) NOT NULL,
  `lighthouse_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lighthouse_type`
--

INSERT INTO `lighthouse_type` (`id`, `lighthouse_type`) VALUES
(1, 'PRIMARY'),
(2, 'SECONDARY');

-- --------------------------------------------------------

--
-- Table structure for table `light_bouy_inspection_purpose`
--

CREATE TABLE `light_bouy_inspection_purpose` (
  `id` int(11) NOT NULL,
  `light_bouy_inspection_purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `light_bouy_inspection_purpose`
--

INSERT INTO `light_bouy_inspection_purpose` (`id`, `light_bouy_inspection_purpose`) VALUES
(1, 'MAINTENANCE'),
(2, 'REPAIR');

-- --------------------------------------------------------

--
-- Table structure for table `light_buoy_status`
--

CREATE TABLE `light_buoy_status` (
  `id` int(11) NOT NULL,
  `light_buoy_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `light_buoy_status`
--

INSERT INTO `light_buoy_status` (`id`, `light_buoy_status`) VALUES
(1, 'OPERATING'),
(2, 'NOT OPERATING');

-- --------------------------------------------------------

--
-- Table structure for table `light_buoy__cause_if_not_operating`
--

CREATE TABLE `light_buoy__cause_if_not_operating` (
  `id` int(11) NOT NULL,
  `light_buoy__cause_if_not_operating` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `light_buoy__cause_if_not_operating`
--

INSERT INTO `light_buoy__cause_if_not_operating` (`id`, `light_buoy__cause_if_not_operating`) VALUES
(1, 'DRIFTED'),
(2, 'DETACHED SINKER'),
(3, 'DEFECTIVE 3 AD 1 LANTERN'),
(4, 'DAMAGE BUOY ASSEMBLY'),
(5, 'DEFECTIVE BATTERY'),
(6, 'VANDALIZED'),
(7, 'STOLEN PARTS');

-- --------------------------------------------------------

--
-- Table structure for table `maritime_acitivity`
--

CREATE TABLE `maritime_acitivity` (
  `id` int(11) NOT NULL,
  `maritime_acitivity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maritime_acitivity`
--

INSERT INTO `maritime_acitivity` (`id`, `maritime_acitivity`) VALUES
(1, 'FLUVIAL PARADE'),
(2, 'MARINE PARADE'),
(3, 'TRIATHLON'),
(4, 'REGATTA');

-- --------------------------------------------------------

--
-- Table structure for table `maritime_casualty_nature`
--

CREATE TABLE `maritime_casualty_nature` (
  `id` int(11) NOT NULL,
  `maritime_casualty_nature` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maritime_casualty_nature`
--

INSERT INTO `maritime_casualty_nature` (`id`, `maritime_casualty_nature`) VALUES
(1, 'AGROUNDING'),
(2, 'ALLISION'),
(3, 'CAPSIZING'),
(4, 'COLLISION'),
(5, 'EXPLOSION'),
(6, 'MECHANICAL FAILURE'),
(7, 'FIRE'),
(8, 'HALF-SUBMERGED'),
(9, 'SINKING'),
(10, 'OCCUPATIONAL ACCIDENT'),
(11, 'HULL FAILURE');

-- --------------------------------------------------------

--
-- Table structure for table `maritime_incident_severity`
--

CREATE TABLE `maritime_incident_severity` (
  `id` int(11) NOT NULL,
  `maritime_incident_severity` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maritime_incident_severity`
--

INSERT INTO `maritime_incident_severity` (`id`, `maritime_incident_severity`) VALUES
(1, 'VERY SERIOUS MC - INVOLVING TOTAL LOSS OF VESSEL, DEATH OR SEVERE DAMAGE TO THE ENVIRONMENT'),
(2, 'SERIOUS MC - A) FIRE, EXPLOSION, GROUNDING, CONTACT, HEAVY WEATHER, HULL CRACKING OR SUSPECTED HULL DEFECT. B) STRUCTURAL DAMAGE RENDERING THE VESSEL UNSEAWORTHY, SUCH AS PENETRATION OF THE HULL UNDERWATER, IMMOBILIZATION OF MAIN ENGINES, EXTENSIVE ACCOMMODATION DAMAGE. C) POLLUTION. AND D) BREAKDOWN NECESSITATING TOWAGE OR SHORE ASSISTANCE.'),
(3, 'MI - EVENTS OTHER THAN MARINE CASUALTY, WHICH HAS OCCURED DIRECTLY IN CONNECTION WITH THE OPERATION OF A SHIP THAT ENDANGERED, OR IF NOT CORRECTED WOULD ENDANGER THE SAFETY OF SHIP, ITS OCCUPANTS OR ANY OTHER PERSON OR ENVIRONMENT');

-- --------------------------------------------------------

--
-- Table structure for table `maritime_related_violation`
--

CREATE TABLE `maritime_related_violation` (
  `id` int(11) NOT NULL,
  `maritime_related_violation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maritime_related_violation`
--

INSERT INTO `maritime_related_violation` (`id`, `maritime_related_violation`) VALUES
(1, 'FAILURE TO SECURE PERMIT'),
(2, 'OWNER/OPERATOR/BOAT CAPTAIN OF WATERCRAFT JOINING MARINE EVENT WITHOUT PERMISSION OF THE PCG'),
(3, 'PASSENGER AND CREWS FAILED TO WEAR LIFE JACKETS IN OPEN DECK BOATS'),
(4, 'PASSENGER/CREWS UNDER THE INFLUENCE OF LIQUOR AND ILLEGAL DRUGS');

-- --------------------------------------------------------

--
-- Table structure for table `marsaf_incident_cause`
--

CREATE TABLE `marsaf_incident_cause` (
  `id` int(11) NOT NULL,
  `incident_cause` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marsaf_incident_cause`
--

INSERT INTO `marsaf_incident_cause` (`id`, `incident_cause`) VALUES
(1, 'HUMAN FACTOR'),
(2, 'OPERATIONAL FACTOR');

-- --------------------------------------------------------

--
-- Table structure for table `marsaf_inspection_type`
--

CREATE TABLE `marsaf_inspection_type` (
  `id` int(11) NOT NULL,
  `inspection_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marsaf_inspection_type`
--

INSERT INTO `marsaf_inspection_type` (`id`, `inspection_type`) VALUES
(1, 'OVERRIDING INSPECTION'),
(2, 'REQUEST OF OWNER/COMPANY'),
(3, 'REGULAR INSPECTIONS ONCE EVERY 6 MONTHS'),
(4, 'INITIAL INSPECTION');

-- --------------------------------------------------------

--
-- Table structure for table `marsaf_vessel_type`
--

CREATE TABLE `marsaf_vessel_type` (
  `id` int(11) NOT NULL,
  `vessel_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marsaf_vessel_type`
--

INSERT INTO `marsaf_vessel_type` (`id`, `vessel_type`) VALUES
(1, 'BULK CARRIER'),
(2, 'CARGO'),
(3, 'CHEMICAL TANKER'),
(4, 'CONTAINER'),
(5, 'FISHING VESSEL'),
(6, 'PASSENGER'),
(7, 'PASSENGER'),
(8, 'TANKER'),
(9, 'TUGBOAT');

-- --------------------------------------------------------

--
-- Table structure for table `noted_deficiency`
--

CREATE TABLE `noted_deficiency` (
  `id` int(11) NOT NULL,
  `noted_deficiency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noted_deficiency`
--

INSERT INTO `noted_deficiency` (`id`, `noted_deficiency`) VALUES
(1, 'MARINA MC 161/ MC 2006-06 CERTIFIED OF PUBLIC CONVENIENCE (CPC)'),
(2, 'MARINA MC 203 (SHIP SAFETY CERTIFICATES)'),
(3, 'MARINA MC 177 (CERTIFICATE OF VESSEL SAFETY) AND (CERTIFICATE OF OWNERSHIP)'),
(4, 'MARINA MC 110 (COSTWISE/BAY AND RIVER LICENSE) '),
(5, 'MARINA MC 89,148,179 (MINIMUM SAFE MANNING CERTIFICATE) '),
(6, 'MARINA MC 2007-03 (LOADLINE CERTIFICATE)'),
(7, 'MARINA MC 2007-04 (TONNAGE MEASUREMENT CERTIFICATE)'),
(8, 'MARINA MC 124 (CLASSIFICATION SOCIETY CERTIFICATE)'),
(9, 'MARINA MC 143, 159 (DOCUMENT OF COMPLIANCE) '),
(10, 'MARINA MC 148, 179 (SAFETY MANAGEMENT CERTIFICATE) '),
(11, 'MARINA MC 105, 105-A (SPECIAL PERMIT) '),
(12, 'MARINA MC 2007-05 (CERTIFICATE OF STABILITY) '),
(13, 'MARINA MC 123 (ADEQUACY OF LIFEJACKETS/LIFECRAFTS AND OTHER LIFE SAVING APPLIANCES) '),
(14, 'MARINA MC 151,170 (SHIPS OFFICES PASSSES LICENSES) '),
(15, 'MARINA MC 180, 2009-13, 2009-18 (CARGO MANIFEST)'),
(16, 'MARINA MC 191 (INFLUENCE OF ALCOHOL OR PROHIBITED DRUGS) '),
(17, 'MARINA MC 114 (WEARING OF PROPER UNIFORM)'),
(18, 'PMMRR 1997 CHAPTER X (SHIP STATION LICENSE) '),
(19, 'PMMRR 1997 CHAPTER X AND XI (NAVIGATIONAL EQUIPMENT REQUIREMENT FOR SHIP STATION LICENSE)'),
(20, 'PMMRR 1997 CHAPTER XI (RUNNING LIGHTS)'),
(21, 'PMMRR 1997 CHAPTER V, HPCG MC 04-98 (MASTER AND CHIEF ENGINEER ATTESTED ALL MAIN AND AUXILLIARY AGEN'),
(22, 'HPCG MC 08-12 (MASTER DECLARANT SAFE DEPARTURE) '),
(23, 'HPCG MC 00-2011 (VESSEL SAFETY INSPECTION BOOKLET)'),
(24, 'HPCG MC 04-98 (VESSEL STABILITY)'),
(25, 'HPCG MC 01-09 MC 03-01 (GUIDELINES OF MOVEMENT IN HEAVY WEATHER)');

-- --------------------------------------------------------

--
-- Table structure for table `oil_type`
--

CREATE TABLE `oil_type` (
  `id` int(11) NOT NULL,
  `oil_types` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oil_type`
--

INSERT INTO `oil_type` (`id`, `oil_types`) VALUES
(1, 'HEAVY OIL'),
(2, 'CRUDE OIL'),
(3, 'BUNKER FUEL'),
(4, 'DIESEL'),
(5, 'GASOLINE');

-- --------------------------------------------------------

--
-- Table structure for table `participating_agency`
--

CREATE TABLE `participating_agency` (
  `id` int(11) NOT NULL,
  `participating_agency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participating_agency`
--

INSERT INTO `participating_agency` (`id`, `participating_agency`) VALUES
(1, 'LGU'),
(2, 'NATIONAL LINE AGENCIES'),
(3, 'ACADEME'),
(4, 'PRIVATE CORPORATIONS'),
(5, 'SHIPPING COMPANIES'),
(6, 'PCG UNITS'),
(7, 'PCG AUXILIARY'),
(8, 'RESIDENTS OF COASTAL COMMUNITY');

-- --------------------------------------------------------

--
-- Table structure for table `pdi_result`
--

CREATE TABLE `pdi_result` (
  `id` int(11) NOT NULL,
  `pdi_result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdi_result`
--

INSERT INTO `pdi_result` (`id`, `pdi_result`) VALUES
(1, 'CLEARED TO DEPART'),
(2, 'NOT CLEARED TO DEPART');

-- --------------------------------------------------------

--
-- Table structure for table `psc_action_code`
--

CREATE TABLE `psc_action_code` (
  `id` int(11) NOT NULL,
  `psc_action_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psc_action_code`
--

INSERT INTO `psc_action_code` (`id`, `psc_action_code`) VALUES
(1, '15-RECTIFY AT NEXT PORT'),
(2, '16-RECTIFY WITHIN 14 DAYS'),
(3, '17-RECTIFY BEFORE DEPARTURE'),
(4, '18-RECTIFY WITHIN 3 MONTHS'),
(5, '30-DETAINABLE DEFICIENCIES'),
(6, '46-RECTIFY DETAINABLE DEF AT AGREED REPAIR PORT'),
(7, '48-AS IN THE AGREED  FLAG STATION CONDITION'),
(8, '49-AS IN THE AGREED RECTIFICATION ACTION PLAN'),
(9, '99-OTHER (SPECIFY)');

-- --------------------------------------------------------

--
-- Table structure for table `psc_center`
--

CREATE TABLE `psc_center` (
  `id` int(11) NOT NULL,
  `psc_center` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psc_center`
--

INSERT INTO `psc_center` (`id`, `psc_center`) VALUES
(1, 'CAGAYAN DE ORO'),
(2, 'ILIGAN'),
(3, 'OZAMIS');

-- --------------------------------------------------------

--
-- Table structure for table `recration_watercraft`
--

CREATE TABLE `recration_watercraft` (
  `id` int(11) NOT NULL,
  `recration_watercraft` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recration_watercraft`
--

INSERT INTO `recration_watercraft` (`id`, `recration_watercraft`) VALUES
(1, 'PERSONAL WATERCRAFT(PWC)'),
(2, 'BANANA BOAT'),
(3, 'DRAGON BOAT'),
(4, 'KAYAK BOAT'),
(5, 'MOTOR BOAT'),
(6, 'HELMS-POWERED'),
(7, 'PARASAIL');

-- --------------------------------------------------------

--
-- Table structure for table `recreational_violation`
--

CREATE TABLE `recreational_violation` (
  `id` int(11) NOT NULL,
  `recreational_violation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recreational_violation`
--

INSERT INTO `recreational_violation` (`id`, `recreational_violation`) VALUES
(1, 'BOATING OUTSIDE THE DESIGNATED SAILING AREAS'),
(2, 'BOATING WITHOUT WEARING OF PERSONAL FLOATATION DEVICES OR LIFEJACKETS'),
(3, 'OPERATING WITH LACK OF SAFETY EQUIPMENT');

-- --------------------------------------------------------

--
-- Table structure for table `related_international_conventions_noted_deficiency`
--

CREATE TABLE `related_international_conventions_noted_deficiency` (
  `id` int(11) NOT NULL,
  `related_international_conventions_noted_deficiency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `related_international_conventions_noted_deficiency`
--

INSERT INTO `related_international_conventions_noted_deficiency` (`id`, `related_international_conventions_noted_deficiency`) VALUES
(1, 'SOLAS'),
(2, 'MARPOL'),
(3, 'STCW'),
(4, 'LOADLINE'),
(5, 'TONNAGE'),
(6, 'MLC'),
(7, 'BALLAST WATER MANAGEMENT CONVENTION'),
(8, 'ANTI FOULING SYSTEM'),
(9, 'COLREG'),
(10, 'ISM CODE'),
(11, 'ISPS CODE');

-- --------------------------------------------------------

--
-- Table structure for table `report_selection`
--

CREATE TABLE `report_selection` (
  `report_selection_id` int(11) NOT NULL,
  `report_selection` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `report_selection`
--

INSERT INTO `report_selection` (`report_selection_id`, `report_selection`) VALUES
(1, 'COASTAL CLEAN-UP'),
(5, 'LAND BASE INSPECTION'),
(2, 'MANGROVE PLANTING'),
(7, 'MARITIME INCIDENT'),
(6, 'TRAININGS CONDUCTED'),
(3, 'TREE PLANTING'),
(4, 'VESSEL INSPECTION');

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE `report_type` (
  `id` int(11) NOT NULL,
  `report_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`id`, `report_type`) VALUES
(1, 'PRE-DEPARTURE INSPECTION (PDI)'),
(2, 'VESSEL SAFETY ENFORCEMENT INSPECTION (VSEI)'),
(3, 'EMERGENCY READINESS EVALUATION (ERE)'),
(4, 'PORT STATE CONTROL (PSC)'),
(5, 'COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION'),
(6, 'RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)'),
(7, 'AIDS TO NAVIGATION (ATON) INSPECTION'),
(8, 'MARITIME CASUALTY INVESTIGATION (MCI)'),
(9, 'SALVAGE OPERATION'),
(10, 'MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY');

-- --------------------------------------------------------

--
-- Table structure for table `responding_unit`
--

CREATE TABLE `responding_unit` (
  `id` int(11) NOT NULL,
  `responding_units` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responding_unit`
--

INSERT INTO `responding_unit` (`id`, `responding_units`) VALUES
(1, 'SPILLER'),
(2, 'MEP FORCE'),
(3, 'PCG UNITS');

-- --------------------------------------------------------

--
-- Table structure for table `salvage_operation_purpose`
--

CREATE TABLE `salvage_operation_purpose` (
  `id` int(11) NOT NULL,
  `salvage_operation_purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salvage_operation_purpose`
--

INSERT INTO `salvage_operation_purpose` (`id`, `salvage_operation_purpose`) VALUES
(1, 'HAZARDS TO MARITIME NAVIGATION, ESPECIALY THOSE WHICH OBSTRUCT THE SEALANES'),
(2, 'HAMPER THE DEVELOPMENT OF PORTS AND HARBOR'),
(3, 'EMERGENCY CONDITIONS FOR THE SAFETY AND PROPERTY AT SEA'),
(4, 'FOR THE VALUE OF CARGO');

-- --------------------------------------------------------

--
-- Table structure for table `spiller`
--

CREATE TABLE `spiller` (
  `id` int(11) NOT NULL,
  `spiller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spiller`
--

INSERT INTO `spiller` (`id`, `spiller`) VALUES
(1, 'VESSEL'),
(2, 'LANDBASED FACILITY');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(11) NOT NULL,
  `station` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `station`) VALUES
(1, 'CGS CAMIGUIN'),
(2, 'CGS LANAO DEL NORTE'),
(3, 'CGS MISAMIS OCCIDENTAL'),
(5, 'CGS WMISOR');

-- --------------------------------------------------------

--
-- Table structure for table `sub_station`
--

CREATE TABLE `sub_station` (
  `sub_station_id` int(11) NOT NULL,
  `sub_station` varchar(100) NOT NULL,
  `station_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_station`
--

INSERT INTO `sub_station` (`sub_station_id`, `sub_station`, `station_id`) VALUES
(1, 'CGSS MAHINOG', 1),
(2, 'CGSS MAMBAJAO', 1),
(3, 'CGSS KAUSWAGAN', 2),
(4, 'CGSS KOLAMBUGAN', 2),
(5, 'CGSS TUBOD', 2),
(6, 'CGSS JIMENEZ', 3),
(7, 'CGSS OROQUITA', 3),
(8, 'CGSS OZAMIS', 3),
(9, 'CGSS PLARIDEL', 3),
(10, 'CGSS BALINGASAG', 4),
(11, 'CGSS BALINGOAN', 4),
(12, 'CGSS GINGOOG', 4),
(13, 'CGSS MEDINA', 4),
(14, 'CGSS TALISAYAN', 4),
(15, 'CGSS CAGAYAN DE ORO', 5),
(16, 'CGSS EL SALVADOR', 5),
(17, 'CGSS JASAAN', 5),
(18, 'CGSS LAGUINDINGAN', 5),
(19, 'CGSS LUGAIT', 5),
(20, 'CGSS NAAWAN', 5),
(21, 'CGSS OPOL', 5),
(22, 'CGSS TAGOLOAN', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tier_level`
--

CREATE TABLE `tier_level` (
  `id` int(11) NOT NULL,
  `tier_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tier_level`
--

INSERT INTO `tier_level` (`id`, `tier_level`) VALUES
(1, 'TIER 1'),
(2, 'TIER 2'),
(3, 'TIER 3');

-- --------------------------------------------------------

--
-- Table structure for table `training_type`
--

CREATE TABLE `training_type` (
  `id` int(11) NOT NULL,
  `training_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training_type`
--

INSERT INTO `training_type` (`id`, `training_type`) VALUES
(1, 'OIL SPILL RESPONSE AWARENESS AND EMERGENCY TRAINING'),
(2, 'BASIC MAREP'),
(3, 'GUEST INSTRUCTOR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_registered` datetime NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `date_registered`, `first_name`, `last_name`, `profile_picture`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'asdfasdf@gma.com', '2022-10-26 07:50:40', 'John', 'Doe', 'asdfasdf', 33),
(2, 'aasdf', 'asdfasd', 'asd@asdfasd.com', '2022-11-28 07:49:47', 'asd', 'fasdf', 'asdf', 27),
(5, 'asdhasdh', '', 'asdha@asdfa.com', '0000-00-00 00:00:00', 'asdgas', 'dgasdhasd', '', 4),
(7, 'sadgasdg', '', 'asdgashasdh@asdfasd.ocm', '0000-00-00 00:00:00', 'asdf', 'asdfasdg', '', 0),
(8, 'as dgasdfasd', '', 'asdgas@asdfasd.com', '0000-00-00 00:00:00', 'ashasd', 'asdg asg', '', 0),
(9, 'gasdhfasha', '', 'hasdh@asdasdg.com', '0000-00-00 00:00:00', 'asdgas', 'dgasd', '', 0),
(10, 'asdgasdg', '', 'asdg@asdfa.com', '0000-00-00 00:00:00', 'asdf', 'agsd', '', 0),
(11, 'asd', '', 'asdg@asdf.com', '0000-00-00 00:00:00', 'asdg', 'asdasdhasd', '', 0),
(12, 'asd123', '', 'asdf@asdf.com', '0000-00-00 00:00:00', 'asdgasdg', 'asdg', '', 0),
(13, 'asdf@asdfasd', '', 'asdf@asdfasd.com', '0000-00-00 00:00:00', 'asdf', 'asd@asdf', '', 0),
(14, 'asda', '', 'asdh@asdgasd.com', '0000-00-00 00:00:00', 'asdg', 'asdhasdh', '', 2),
(15, 'asdxxxx', '', 'gasdagfas@d2asdfa.com', '0000-00-00 00:00:00', 'asdf', 'asdf', '', 3),
(16, 'adhasdh123123', '94ba7ed952eeb013f90100bbde7d9e57', 'adhasdh123123@asdf.com', '0000-00-00 00:00:00', 'asd', 'asdgasdg', '', 2),
(17, 'ahsj', '912ec803b2ce49e4a541068d495ab570', 'ahsj@asdf.com', '2022-12-04 13:34:36', 'ahsj', 'ahsj', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `value` varchar(100) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `value`, `text`) VALUES
(1, 'cg-admin', 'CG ADMIN'),
(2, 'cgss-mambajao', 'CGSS MAMBAJAO'),
(3, 'cgss-mahinog', 'CGSS MAHINOG'),
(4, 'cgs-camiguin', 'CGS CAMIGUIN'),
(5, 'cgss-jimenez', 'CGSS JIMENEZ'),
(6, 'cgss-oroquieta', 'CGSS OROQUIETA'),
(7, 'cgss-plaridel', 'CGSS PLARIDEL'),
(8, 'cgss-ozamiz', 'CGSS OZAMIZ'),
(9, 'cgs-misamis-occidental', 'CGS MISAMIS OCCIDENTAL'),
(10, 'cgss-tubod', 'CGSS TUBOD'),
(11, 'cgss-kauswagan', 'CGSS KAUSWAGAN'),
(12, 'cgss-kolambungan', 'CGSS KOLAMBUNGAN'),
(13, 'cgs-lanao-del-norte', 'CGS LANAO DEL NORTE'),
(14, 'cgss-naawan', 'CGSS NAAWAN'),
(15, 'cgss-lugait', 'CGSS LUGAIT'),
(16, 'cgss-jasaan', 'CGSS JASAAN'),
(17, 'cgss-tagoloan', 'CGSS TAGOLOAN'),
(18, 'cgss-cagayan-de-oro', 'CGSS CAGAYAN DE ORO'),
(19, 'cgss-opol', 'CGSS OPOL'),
(20, 'cgss-el-salvador', 'CGSS EL SALVADOR'),
(21, 'cgss-laguindingan', 'CGSS LAGUINDINGAN'),
(22, 'cgs-western-misamis-oriental', 'CGS WESTERN MISAMIS ORIENTAL'),
(23, 'cgss-medina', 'CGSS MEDINA'),
(24, 'cgss-talisayan', 'CGSS TALISAYAN'),
(25, 'cgss-balingasag', 'CGSS BALINGASAG'),
(26, 'cgss-gingoog', 'CGSS GINGOOG'),
(27, 'cgss-balingoan', 'CGSS BALINGOAN'),
(28, 'cgs-northeastern-misamis-oriental', 'CGS NORTHEASTERN MISAMIS ORIENTAL'),
(29, 'subscriber', 'Subscriber'),
(30, 'contributor', 'Contributor'),
(31, 'author', 'Author'),
(32, 'editor', 'Editor'),
(33, 'administrator', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `very_serious_mc_category`
--

CREATE TABLE `very_serious_mc_category` (
  `id` int(11) NOT NULL,
  `very_serious_mc_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `very_serious_mc_category`
--

INSERT INTO `very_serious_mc_category` (`id`, `very_serious_mc_category`) VALUES
(1, 'CATEGORY 1 - INVOLVING CONVENTIONAL VESSEL OF 300 GT ABOVE WITH MULTIPLE DEATHS'),
(2, 'CATEGORY 2 - INVOLVING NON-CONVENTIONAL VESSEL OF LESS THAN 300 GT WITH 1 OR MORE DEATHS'),
(3, 'CATEGORY 3 - INVOLVING CONVENTIONAL VESSEL OF 300 GT WITH 1 DEATH');

-- --------------------------------------------------------

--
-- Table structure for table `vessel_type`
--

CREATE TABLE `vessel_type` (
  `id` int(11) NOT NULL,
  `vessel_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vessel_type`
--

INSERT INTO `vessel_type` (`id`, `vessel_type`) VALUES
(1, 'PASSENGER VESSEL'),
(2, 'PASSENGER-CARGO VESSEL'),
(3, 'CARGO VESSEL'),
(4, 'TANKER'),
(5, 'LANDING CRAFT TANK (LCT) VESSEL'),
(6, 'TUGBOAT/BARGE'),
(7, 'TANKER (LPG)');

-- --------------------------------------------------------

--
-- Table structure for table `vsei_deficiency_code`
--

CREATE TABLE `vsei_deficiency_code` (
  `id` int(11) NOT NULL,
  `vsei_deficiency_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vsei_deficiency_code`
--

INSERT INTO `vsei_deficiency_code` (`id`, `vsei_deficiency_code`) VALUES
(1, 'VS8100 ABSENCE OF SHIPS CERTIFICATE AND DOCUMENT'),
(2, 'VS8200 ABSENCE OF CERTIFICATE AND WATCH KEEPING FOR SEAFARER'),
(3, 'VS8300 WHEELHOUSE/ DOCUMENTATION INSTRUMENTAL EQUIPMENT'),
(4, 'VS8400 CREW AND ACCOMODATION'),
(5, 'VS8500 FIRE FIGHTING APPLIANCES/FIRE SAFETY MEASURES'),
(6, 'VS8600 BOAT DECK/OPEN DECK/ACCOMODATION LIFE-SAVING APPLIANCES'),
(7, 'VS8700 NAVIGATIONAL SAFETY'),
(8, 'VS8800 WORKING SPACES'),
(9, 'VS81000 ALARM SIGNAL'),
(10, 'VS81100 CARRIAGE OF CARGO AND DANGEROUS GOODS'),
(11, 'VS81300 RADIO COMMUNICATION'),
(12, 'VS81400 CONSTRUCTIONS SAFETY'),
(13, 'VS81500 EGIE ROOM/FIREFIGHTIG APPLIANCES'),
(14, 'VS81600 OIL CHEMICAL TANNKERS AND GA CARRIER'),
(15, 'VS81700 MARPOL'),
(16, 'VS81800 SOLAS RELATE OPERATIONAL DEFICIENCY'),
(17, 'VS81900 EGINE ROOM SHYLIGTH AD ADJACENT STRUCTURE'),
(18, 'VS82000 H.O REQUIREMENTS'),
(19, 'VS82100 FOODS AND CATERS'),
(20, 'VS82200 MOORING ARRANGEMENTS'),
(21, 'VS82300 PROPOLSION AN AUXILIARY MACHINERY'),
(22, 'VS82400 ISM RELATED DEFICENCIES'),
(23, 'VS82500 BULK CARRIER- ADDITIONAL SAFETY MEASURES'),
(24, 'VS82600 ADDITIONAL MEASURES TO ENHANCE MARITIME SECURITY');

-- --------------------------------------------------------

--
-- Table structure for table `vsei_result`
--

CREATE TABLE `vsei_result` (
  `id` int(11) NOT NULL,
  `vsei_result` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vsei_result`
--

INSERT INTO `vsei_result` (`id`, `vsei_result`) VALUES
(1, 'UNDETAINED'),
(2, 'DETAINED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_code`
--
ALTER TABLE `action_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_conduct`
--
ALTER TABLE `activity_conduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affected_area`
--
ALTER TABLE `affected_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `affected_biodiversity`
--
ALTER TABLE `affected_biodiversity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_type`
--
ALTER TABLE `application_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beach_coast_line_length`
--
ALTER TABLE `beach_coast_line_length`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bouy_type`
--
ALTER TABLE `bouy_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coastal_and_beach_violation`
--
ALTER TABLE `coastal_and_beach_violation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conduct_of_activity`
--
ALTER TABLE `conduct_of_activity`
  ADD PRIMARY KEY (`conduct_of_activity_id`),
  ADD UNIQUE KEY `conduct_of_activity` (`conduct_of_activity`);

--
-- Indexes for table `drill_conducted`
--
ALTER TABLE `drill_conducted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ere_result`
--
ALTER TABLE `ere_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_type`
--
ALTER TABLE `facility_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garbage_type_collected`
--
ALTER TABLE `garbage_type_collected`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident_cause`
--
ALTER TABLE `incident_cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident_consequences`
--
ALTER TABLE `incident_consequences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_type`
--
ALTER TABLE `inspection_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lighthouse_cause_if_not_operating`
--
ALTER TABLE `lighthouse_cause_if_not_operating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lighthouse_inspection_purpose`
--
ALTER TABLE `lighthouse_inspection_purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lighthouse_status`
--
ALTER TABLE `lighthouse_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lighthouse_type`
--
ALTER TABLE `lighthouse_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `light_bouy_inspection_purpose`
--
ALTER TABLE `light_bouy_inspection_purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `light_buoy_status`
--
ALTER TABLE `light_buoy_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `light_buoy__cause_if_not_operating`
--
ALTER TABLE `light_buoy__cause_if_not_operating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritime_acitivity`
--
ALTER TABLE `maritime_acitivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritime_casualty_nature`
--
ALTER TABLE `maritime_casualty_nature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritime_incident_severity`
--
ALTER TABLE `maritime_incident_severity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritime_related_violation`
--
ALTER TABLE `maritime_related_violation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marsaf_incident_cause`
--
ALTER TABLE `marsaf_incident_cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marsaf_inspection_type`
--
ALTER TABLE `marsaf_inspection_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marsaf_vessel_type`
--
ALTER TABLE `marsaf_vessel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noted_deficiency`
--
ALTER TABLE `noted_deficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oil_type`
--
ALTER TABLE `oil_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participating_agency`
--
ALTER TABLE `participating_agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdi_result`
--
ALTER TABLE `pdi_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psc_action_code`
--
ALTER TABLE `psc_action_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psc_center`
--
ALTER TABLE `psc_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recration_watercraft`
--
ALTER TABLE `recration_watercraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recreational_violation`
--
ALTER TABLE `recreational_violation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_international_conventions_noted_deficiency`
--
ALTER TABLE `related_international_conventions_noted_deficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_selection`
--
ALTER TABLE `report_selection`
  ADD PRIMARY KEY (`report_selection_id`),
  ADD UNIQUE KEY `report_selection` (`report_selection`);

--
-- Indexes for table `report_type`
--
ALTER TABLE `report_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responding_unit`
--
ALTER TABLE `responding_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salvage_operation_purpose`
--
ALTER TABLE `salvage_operation_purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spiller`
--
ALTER TABLE `spiller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`station_id`),
  ADD UNIQUE KEY `station` (`station`);

--
-- Indexes for table `sub_station`
--
ALTER TABLE `sub_station`
  ADD PRIMARY KEY (`sub_station_id`),
  ADD UNIQUE KEY `sub_station` (`sub_station`),
  ADD KEY `station_id` (`station_id`);

--
-- Indexes for table `tier_level`
--
ALTER TABLE `tier_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_type`
--
ALTER TABLE `training_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `very_serious_mc_category`
--
ALTER TABLE `very_serious_mc_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel_type`
--
ALTER TABLE `vessel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vsei_deficiency_code`
--
ALTER TABLE `vsei_deficiency_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vsei_result`
--
ALTER TABLE `vsei_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_code`
--
ALTER TABLE `action_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `activity_conduct`
--
ALTER TABLE `activity_conduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affected_area`
--
ALTER TABLE `affected_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `affected_biodiversity`
--
ALTER TABLE `affected_biodiversity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `application_type`
--
ALTER TABLE `application_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `beach_coast_line_length`
--
ALTER TABLE `beach_coast_line_length`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bouy_type`
--
ALTER TABLE `bouy_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coastal_and_beach_violation`
--
ALTER TABLE `coastal_and_beach_violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `conduct_of_activity`
--
ALTER TABLE `conduct_of_activity`
  MODIFY `conduct_of_activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drill_conducted`
--
ALTER TABLE `drill_conducted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ere_result`
--
ALTER TABLE `ere_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_type`
--
ALTER TABLE `facility_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `garbage_type_collected`
--
ALTER TABLE `garbage_type_collected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `incident_cause`
--
ALTER TABLE `incident_cause`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incident_consequences`
--
ALTER TABLE `incident_consequences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inspection_type`
--
ALTER TABLE `inspection_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lighthouse_cause_if_not_operating`
--
ALTER TABLE `lighthouse_cause_if_not_operating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lighthouse_inspection_purpose`
--
ALTER TABLE `lighthouse_inspection_purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lighthouse_status`
--
ALTER TABLE `lighthouse_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lighthouse_type`
--
ALTER TABLE `lighthouse_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `light_bouy_inspection_purpose`
--
ALTER TABLE `light_bouy_inspection_purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `light_buoy_status`
--
ALTER TABLE `light_buoy_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `light_buoy__cause_if_not_operating`
--
ALTER TABLE `light_buoy__cause_if_not_operating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maritime_acitivity`
--
ALTER TABLE `maritime_acitivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maritime_casualty_nature`
--
ALTER TABLE `maritime_casualty_nature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `maritime_incident_severity`
--
ALTER TABLE `maritime_incident_severity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maritime_related_violation`
--
ALTER TABLE `maritime_related_violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marsaf_incident_cause`
--
ALTER TABLE `marsaf_incident_cause`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marsaf_inspection_type`
--
ALTER TABLE `marsaf_inspection_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `marsaf_vessel_type`
--
ALTER TABLE `marsaf_vessel_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `noted_deficiency`
--
ALTER TABLE `noted_deficiency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oil_type`
--
ALTER TABLE `oil_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `participating_agency`
--
ALTER TABLE `participating_agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pdi_result`
--
ALTER TABLE `pdi_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psc_action_code`
--
ALTER TABLE `psc_action_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `psc_center`
--
ALTER TABLE `psc_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recration_watercraft`
--
ALTER TABLE `recration_watercraft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recreational_violation`
--
ALTER TABLE `recreational_violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `related_international_conventions_noted_deficiency`
--
ALTER TABLE `related_international_conventions_noted_deficiency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `report_selection`
--
ALTER TABLE `report_selection`
  MODIFY `report_selection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_type`
--
ALTER TABLE `report_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responding_unit`
--
ALTER TABLE `responding_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salvage_operation_purpose`
--
ALTER TABLE `salvage_operation_purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spiller`
--
ALTER TABLE `spiller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_station`
--
ALTER TABLE `sub_station`
  MODIFY `sub_station_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tier_level`
--
ALTER TABLE `tier_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_type`
--
ALTER TABLE `training_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `very_serious_mc_category`
--
ALTER TABLE `very_serious_mc_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vessel_type`
--
ALTER TABLE `vessel_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vsei_deficiency_code`
--
ALTER TABLE `vsei_deficiency_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vsei_result`
--
ALTER TABLE `vsei_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
