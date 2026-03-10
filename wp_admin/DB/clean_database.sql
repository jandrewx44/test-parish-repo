-- Clean Database Structure
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(20) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_appointment` (
  `APP_ID` int(150) NOT NULL AUTO_INCREMENT,
  `BOOK_DATE` varchar(255) NOT NULL,
  `BOOK_TIME` varchar(255) NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `MIDDLENAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `DATE_OF_BIRTH` varchar(255) NOT NULL,
  `AGE` varchar(255) NOT NULL,
  `MOBILE` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `VALID_ID_NUMBER` text NOT NULL,
  `UPLOAD_ID` longblob NOT NULL,
  `UPLOAD_WITH_SELFIE` longblob NOT NULL,
  `TERMS_OF_SERVICE` varchar(255) NOT NULL,
  `AUTO_NUMBER` varchar(255) NOT NULL,
  `APP_STATUS` varchar(250) NOT NULL DEFAULT 'Pending',
  `DATE_ACTION` varchar(255) NOT NULL,
  `REMARKS` text NOT NULL,
  `DATE_COMPLETED` varchar(255) NOT NULL,
  PRIMARY KEY (`APP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_autonumber` (
  `AUTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AUTO_NUMBER` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AUTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_baptismal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NUMBER` varchar(255) NOT NULL,
  `CHILD_NAME` longtext NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `DATE_OF_BIRTH` varchar(255) NOT NULL DEFAULT 'NULL',
  `PLACE_OF_BIRTH` longtext NOT NULL,
  `FATHER_NAME` varchar(255) NOT NULL,
  `MOTHER_NAME` varchar(255) NOT NULL,
  `PERMANENT_ADDRESS` longtext NOT NULL,
  `LIST_OF_SPONSORS` longtext NOT NULL,
  `NAME_OF_PRIEST` varchar(255) NOT NULL,
  `NAME_OF_CHURCH` varchar(255) NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT current_timestamp(),
  `DATE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `PLACE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `PROFILE` longblob NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  `NOTATIONS` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2655 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_baptismal_changes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UNDERSIGNED` varchar(255) NOT NULL,
  `RESIDING` varchar(255) NOT NULL,
  `REGNO` varchar(255) NOT NULL,
  `PAGENO` varchar(255) NOT NULL,
  `SERIESNO` varchar(255) NOT NULL,
  `NAME_NOWBE` varchar(255) NOT NULL,
  `NOT_ONE` varchar(255) NOT NULL,
  `POB` varchar(255) NOT NULL,
  `NOT_TWO` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `NOT_THREE` varchar(255) NOT NULL,
  `FATHERNAME` varchar(255) NOT NULL,
  `NOT_FOUR` varchar(255) NOT NULL,
  `MOTHERNAME` varchar(255) NOT NULL,
  `NOT_FIVE` varchar(255) NOT NULL,
  `SPONSOR` varchar(255) NOT NULL,
  `NOT_SIX` varchar(255) NOT NULL,
  `BIRTH_CERT` varchar(50) NOT NULL,
  `JOINT_AFFIDAVIT` varchar(50) NOT NULL,
  `MARRIAGE_CONTRACT_PARENTS` varchar(50) NOT NULL,
  `CERT_OF_BAPTISM` varchar(50) NOT NULL,
  `OTHERS` varchar(255) NOT NULL,
  `THIS` varchar(255) NOT NULL,
  `OF` varchar(255) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `PETITIONER` varchar(255) NOT NULL,
  `AUTONUM` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_baptismal_letter_request` (
  `REQID` int(11) NOT NULL AUTO_INCREMENT,
  `MY_NAME` varchar(250) NOT NULL,
  `NAME_OF` varchar(250) NOT NULL,
  `CNAME` varchar(50) NOT NULL,
  `CFNAME` varchar(50) NOT NULL,
  `CMNAME` varchar(50) NOT NULL,
  `CPOB` varchar(50) NOT NULL,
  `CDOB` varchar(50) NOT NULL,
  `CSPONSORS` varchar(50) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  `AUTONUM` varchar(250) NOT NULL,
  PRIMARY KEY (`REQID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_baptismal_otherperson` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UNDERSIGNED` varchar(255) NOT NULL,
  `RESIDING` varchar(255) NOT NULL,
  `REGNO` varchar(255) NOT NULL,
  `PAGENO` varchar(255) NOT NULL,
  `SERIESNO` varchar(255) NOT NULL,
  `NAME_NOWBE` varchar(255) NOT NULL,
  `NOT_ONE` varchar(255) NOT NULL,
  `POB` varchar(255) NOT NULL,
  `NOT_TWO` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `NOT_THREE` varchar(255) NOT NULL,
  `FATHERNAME` varchar(255) NOT NULL,
  `NOT_FOUR` varchar(255) NOT NULL,
  `MOTHERNAME` varchar(255) NOT NULL,
  `NOT_FIVE` varchar(255) NOT NULL,
  `SPONSOR` varchar(255) NOT NULL,
  `BIRTH_CERT` varchar(50) NOT NULL,
  `JOINT_AFFIDAVIT` varchar(50) NOT NULL,
  `MARRIAGE_CONTRACT_PARENTS` varchar(50) NOT NULL,
  `CERT_OF_BAPTISM` varchar(50) NOT NULL,
  `NOT_SIX` varchar(255) NOT NULL,
  `OTHERS` varchar(255) NOT NULL,
  `THIS` varchar(255) NOT NULL,
  `OF` varchar(255) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `PETITIONER` varchar(255) NOT NULL,
  `AUTONUM` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_batism_certification` (
  `BAPID` int(11) NOT NULL AUTO_INCREMENT,
  `CHILDNAME` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `POB` varchar(255) NOT NULL,
  `FATHER` varchar(255) NOT NULL,
  `MOTHER` varchar(255) NOT NULL,
  `PARENTS_ADDRESS` varchar(255) NOT NULL,
  `CHURCH_NAME` varchar(255) NOT NULL,
  `CHURCH_ADDRESS` varchar(255) NOT NULL,
  `DOB_BAPTISM` varchar(255) NOT NULL,
  `BAPTIZED_BY` varchar(255) NOT NULL,
  `SPONSORS` varchar(255) NOT NULL,
  `NOTATIONS` varchar(255) NOT NULL,
  `GIVEN_DAY` varchar(255) NOT NULL,
  `GIVEN_MONTH` varchar(255) NOT NULL,
  `GIVEN_YEAR` varchar(255) NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  `PLACE_OF_BIRTH` varchar(255) NOT NULL,
  PRIMARY KEY (`BAPID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_blocked_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blocked_date` varchar(255) NOT NULL,
  `blocked_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_communion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NO` varchar(255) NOT NULL,
  `CHILD_NAME` longtext NOT NULL,
  `DATE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `PLACE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `FATHER_NAME` varchar(255) NOT NULL,
  `MOTHER_NAME` varchar(255) NOT NULL,
  `DATE_OF_COMMUNION` varchar(255) NOT NULL,
  `PLACE_OF_COMMUNION` longtext NOT NULL,
  `NAME_OF_MINISTER` varchar(255) NOT NULL,
  `NOTATIONS` varchar(255) NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_confirmation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NUMBER` varchar(255) NOT NULL,
  `CHILD_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `DATE_OF_BAPTISM` date NOT NULL,
  `PLACE_OF_BAPTISM` longtext NOT NULL,
  `FATHER_NAME` varchar(255) NOT NULL,
  `MOTHER_NAME` varchar(255) NOT NULL,
  `NAME_OF_PRIEST` varchar(255) NOT NULL,
  `RESIDENT_OF` varchar(255) NOT NULL,
  `DATE_CONFIRMED` date NOT NULL,
  `LIST_OF_SPONSORS` longtext NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT current_timestamp(),
  `PROFILE` longblob NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  `NOTATIONS` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_confirmation_certificate` (
  `CONFID` int(11) NOT NULL AUTO_INCREMENT,
  `CHILDNAME` varchar(255) NOT NULL,
  `DOB_BAPTISM` varchar(255) NOT NULL,
  `PLACE_OF_BAPTISM` varchar(255) NOT NULL,
  `FATHER` varchar(255) NOT NULL,
  `MOTHER` varchar(255) NOT NULL,
  `PARENTS_ADDRESS` varchar(255) NOT NULL,
  `CHURCH_NAME` varchar(255) NOT NULL,
  `CHURCH_ADDRESS` varchar(255) NOT NULL,
  `CONFIRMED_DATE` varchar(255) NOT NULL,
  `CONFIRMED_BY` varchar(255) NOT NULL,
  `SPONSORS` varchar(255) NOT NULL,
  `NOTATIONS` varchar(255) NOT NULL,
  `GIVEN_DAY` varchar(255) NOT NULL,
  `GIVEN_MONTH` varchar(255) NOT NULL,
  `GIVEN_YEAR` varchar(255) NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  PRIMARY KEY (`CONFID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROVIDER` varchar(255) NOT NULL,
  `MOBILENO` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `tbl_contact_us` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_NAME` varchar(255) NOT NULL,
  `C_EMAIL` varchar(255) NOT NULL,
  `C_PHONE` varchar(255) NOT NULL,
  `C_MESSAGE` varchar(255) NOT NULL,
  `C_SUBJECT` varchar(255) NOT NULL,
  `C_DATE` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_conversion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NO` varchar(255) NOT NULL,
  `CHILD_NAME` varchar(255) NOT NULL,
  `DATE_OF_RITE` date NOT NULL,
  `PLACE_OF_RECEPTION` longtext NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `PLACE_OF_BIRTH` longtext NOT NULL,
  `FATHER_NAME` varchar(255) NOT NULL,
  `MOTHER_NAME` varchar(255) NOT NULL,
  `MINISTER` varchar(255) NOT NULL,
  `LIST_OF_SPONSORS` longtext NOT NULL,
  `DATE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `PLACE_OF_BAPTISM` varchar(255) DEFAULT NULL,
  `DENOMINATION` longtext NOT NULL,
  `NOTATIONS` longtext NOT NULL,
  `DATE_CREATED` datetime NOT NULL DEFAULT current_timestamp(),
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_death` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NO` varchar(255) NOT NULL,
  `NAME_OF_DECEASED` varchar(255) NOT NULL,
  `RESIDENCE` varchar(255) NOT NULL,
  `AGE` varchar(255) NOT NULL,
  `PARENTS_WIFE_HUSBAND` varchar(255) NOT NULL,
  `DATE_OF_DEATH` date NOT NULL,
  `PLACE_OF_BURIAL` varchar(255) NOT NULL,
  `DATE_OF_BURIAL` date NOT NULL,
  `SACRAMENTS` varchar(255) NOT NULL,
  `PRIEST` varchar(255) NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  `NOTATIONS` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_donations` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DONATOR` varchar(250) NOT NULL,
  `DONATED_ON` datetime NOT NULL,
  `AMOUNT` bigint(20) NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;






CREATE TABLE `tbl_events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` longtext NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `STATUS` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `tbl_good_moral` (
  `GOODID` int(11) NOT NULL AUTO_INCREMENT,
  `CHILDNAME` varchar(255) NOT NULL,
  `FATHER` varchar(255) NOT NULL,
  `MOTHER` varchar(255) NOT NULL,
  `PARENTS_ADDRESS` varchar(255) NOT NULL,
  `FINISHED_IN` varchar(255) NOT NULL,
  `MONTH` varchar(255) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `DEGREE_OF` varchar(255) NOT NULL,
  `REQUEST_FOR` varchar(255) NOT NULL,
  `GIVEN_DAY` varchar(255) NOT NULL,
  `GIVEN_MONTH` varchar(255) NOT NULL,
  `GIVEN_YEAR` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  PRIMARY KEY (`GOODID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_marriage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RECORD_NO` varchar(255) NOT NULL,
  `LICENSE_NO` varchar(255) NOT NULL,
  `NAME_MALE` varchar(255) NOT NULL,
  `NAME_FEMALE` varchar(255) NOT NULL,
  `LEGAL_STATUS_MALE` varchar(255) NOT NULL,
  `LEGAL_STATUS_FEMALE` varchar(255) NOT NULL,
  `ACTUAL_ADDRESS_MALE` varchar(255) NOT NULL,
  `ACTUAL_ADDRESS_FEMALE` varchar(255) NOT NULL,
  `DATE_OF_BIRTH_MALE` date NOT NULL,
  `DATE_OF_BIRTH_FEMALE` date NOT NULL,
  `POB_MALE` varchar(255) NOT NULL,
  `POB_FEMALE` varchar(255) NOT NULL,
  `DATE_BAPTISM_MALE` date NOT NULL,
  `DATE_BAPTISM_FEMALE` date NOT NULL,
  `PLACE_BAPTISM_MALE` text NOT NULL,
  `PLACE_BAPTISM_FEMALE` text NOT NULL,
  `PARENTS_MALE` varchar(255) NOT NULL,
  `PARENTS_FEMALE` varchar(255) NOT NULL,
  `SPONSORS_MALE` varchar(255) NOT NULL,
  `SPONSORS_FEMALE` varchar(255) NOT NULL,
  `MARRIAGE_MINISTER` varchar(255) NOT NULL,
  `DATE_OF_MARRIAGE` date NOT NULL,
  `BOOK_NO` varchar(255) NOT NULL,
  `PAGE_NO` varchar(255) NOT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `SERIES_NO` varchar(255) NOT NULL,
  `NOTATIONS` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `tbl_marriage_certificate` (
  `MARRIAGEID` int(11) NOT NULL AUTO_INCREMENT,
  `GROOM_NAME` varchar(250) NOT NULL,
  `GROOM_RESIDENCE` varchar(250) NOT NULL,
  `GROOM_FATHER` varchar(250) NOT NULL,
  `GROOM_MOTHER` varchar(250) NOT NULL,
  `BRIDE_NAME` varchar(250) NOT NULL,
  `BRIDE_RESIDENCE` varchar(250) NOT NULL,
  `BRIDE_FATHER` varchar(250) NOT NULL,
  `BRIDE_MOTHER` varchar(250) NOT NULL,
  `PLACE_OF_MARRIAGE` varchar(250) NOT NULL,
  `DATE_OF_MARRIAGE` varchar(250) NOT NULL,
  `NAME_OF_WITNESS` varchar(250) NOT NULL,
  `SOLEMNIZING_PRIEST` varchar(250) NOT NULL,
  `GIVEN_DAY` varchar(250) NOT NULL,
  `GIVEN_MONTH` varchar(250) NOT NULL,
  `GIVEN_YEAR` varchar(250) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  PRIMARY KEY (`MARRIAGEID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_marriage_outside_certificate` (
  `MARRID` int(11) NOT NULL AUTO_INCREMENT,
  `PRIEST_NAME` varchar(250) NOT NULL,
  `PARISHIONER` varchar(250) NOT NULL,
  `CHECKBOX_ONE` varchar(250) NOT NULL,
  `CHECKBOX_TWO` varchar(250) NOT NULL,
  `GIVEN_DAY` varchar(250) NOT NULL,
  `GIVEN_MONTH` varchar(250) NOT NULL,
  `GIVEN_YEAR` varchar(250) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  PRIMARY KEY (`MARRID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_no_baptism_certificate` (
  `NOBAPID` int(11) NOT NULL AUTO_INCREMENT,
  `NO_BAP_NAME` varchar(250) NOT NULL,
  `NO_BAP_REQUEST_OF` varchar(250) NOT NULL,
  `GIVEN_DAY` varchar(250) NOT NULL,
  `GIVEN_MONTH` varchar(250) NOT NULL,
  `GIVEN_YEAR` varchar(250) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  PRIMARY KEY (`NOBAPID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_no_confirmation_certificate` (
  `NOCONID` int(11) NOT NULL AUTO_INCREMENT,
  `NO_BAP_NAME` varchar(250) NOT NULL,
  `NO_BAP_REQUEST_OF` varchar(250) NOT NULL,
  `GIVEN_DAY` varchar(250) NOT NULL,
  `GIVEN_MONTH` varchar(250) NOT NULL,
  `GIVEN_YEAR` varchar(250) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  PRIMARY KEY (`NOCONID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_permission_baptism_certificate` (
  `PERID` int(11) NOT NULL AUTO_INCREMENT,
  `ENTRY_ONE` varchar(255) NOT NULL,
  `ENTRY_TWO` varchar(255) NOT NULL,
  `ENTRY_THREE` varchar(255) NOT NULL,
  `ENTRY_FOUR` varchar(255) NOT NULL,
  `PRIEST_NAME` varchar(250) NOT NULL,
  `PARISHIONER` varchar(250) NOT NULL,
  `CHILDNAME` varchar(255) NOT NULL,
  `GIVEN_DAY` varchar(250) NOT NULL,
  `GIVEN_MONTH` varchar(250) NOT NULL,
  `GIVEN_YEAR` varchar(250) NOT NULL,
  `DATE_ISSUED` varchar(250) NOT NULL,
  `DATE_UPDATED` varchar(250) NOT NULL,
  PRIMARY KEY (`PERID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_pre_cana` (
  `PRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GROOM` varchar(255) NOT NULL,
  `G_RESIDENCE` varchar(255) NOT NULL,
  `G_AGE` varchar(255) NOT NULL,
  `BRIDE` varchar(255) NOT NULL,
  `B_RESIDENCE` varchar(255) NOT NULL,
  `B_AGE` varchar(255) NOT NULL,
  `ON_MARRIED` varchar(255) NOT NULL,
  `AT_MARRIED` varchar(255) NOT NULL,
  `ON_PARISH` varchar(255) NOT NULL,
  `AT_PARISH` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  `AUTONUM` varchar(255) NOT NULL,
  `THIS` varchar(250) NOT NULL,
  `OF` varchar(250) NOT NULL,
  `YEAR` varchar(250) NOT NULL,
  PRIMARY KEY (`PRE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_pre_jordan` (
  `JORID` int(11) NOT NULL AUTO_INCREMENT,
  `CERTIFICATE_TO` varchar(255) NOT NULL,
  `CERTIFICATE_ON` varchar(255) NOT NULL,
  `CERTIFICATE_AT` varchar(255) NOT NULL,
  `GIVEN_THIS` varchar(255) NOT NULL,
  `DAY_OF` varchar(255) NOT NULL,
  `YEAR` varchar(255) NOT NULL,
  `AUTONUM` varchar(255) NOT NULL,
  `DATE_ISSUED` varchar(255) NOT NULL,
  `DATE_UPDATED` varchar(255) NOT NULL,
  PRIMARY KEY (`JORID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_priest` (
  `PRIEST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRIEST_NAME` varchar(255) NOT NULL,
  `PRIEST_DEFAULT` varchar(255) NOT NULL,
  `PRIEST_SIGNATURE` longblob NOT NULL,
  `SIGNATURE_ENABLED` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`PRIEST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_requirements` (
  `REQ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `REQ_NAME` varchar(255) NOT NULL,
  PRIMARY KEY (`REQ_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_requirements VALUES("21","SOCIAL SECURITY SYSTEM (SSS) CARD");
INSERT INTO tbl_requirements VALUES("22","GOVERNMENT SERVICE INSURANCE SYSTEM (GSIS) CARD");
INSERT INTO tbl_requirements VALUES("23","UNIFIED MULTI-PURPOSE IDENTIFICATION (UMID) CARD");
INSERT INTO tbl_requirements VALUES("25","PROFESSIONAL REGULATORY COMMISSION (PRC) ID");
INSERT INTO tbl_requirements VALUES("26","OVERSEAS WORKERS WELFARE ADMINISTRATION (OWWA) E-CARD");
INSERT INTO tbl_requirements VALUES("28","PHILIPPINE NATIONAL POLICE (PNP) PERMIT TO CARRY FIREARMS OUTSIDE RESIDENCE");
INSERT INTO tbl_requirements VALUES("29","SENIOR CITIZEN ID");
INSERT INTO tbl_requirements VALUES("31","PHILIPPINE POSTAL ID (ISSUED NOVEMBER 2016 ONWARDS)");
INSERT INTO tbl_requirements VALUES("33","VALID OR LATEST PASSPORT (FOR RENEWAL OF PASSPORT)");
INSERT INTO tbl_requirements VALUES("38","DRIVERS LICENSE");
INSERT INTO tbl_requirements VALUES("39","VOTER\'S ID");





CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;






CREATE TABLE `tbl_services` (
  `DID` int(11) NOT NULL AUTO_INCREMENT,
  `SERVICES` varchar(255) NOT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO tbl_services VALUES("2","AFFIDAVIT FOR PARTIAL CHANGES IN THE BAPTISMAL");
INSERT INTO tbl_services VALUES("3","AFFIDAVIT FOR PARTIAL CHANGES IN THE BAPTISMAL IF OTHER PERSON");
INSERT INTO tbl_services VALUES("4","AFFIDAVIT LETTER OF REQUEST FOR PARTIAL CHANGES");
INSERT INTO tbl_services VALUES("5","CERTIFICATE OF ATTENDACE PRE-CANA");
INSERT INTO tbl_services VALUES("6","CERTIFICATE OF ATTENDACE PRE-JORDAN");
INSERT INTO tbl_services VALUES("7","CERTIFICATE OF BAPTISM");
INSERT INTO tbl_services VALUES("8","CERTIFICATE OF CONFIRMATION");
INSERT INTO tbl_services VALUES("9","CERTIFICATE OF GOOD MORAL");
INSERT INTO tbl_services VALUES("10","CERTIFICATE OF MARRIAGE");
INSERT INTO tbl_services VALUES("11","PERMISION FOR BAPTISM");
INSERT INTO tbl_services VALUES("12","Permission for MARRIAGE OUTSIDE THE PARISH");





CREATE TABLE `tbl_slot_date` (
  `slotid` int(11) NOT NULL AUTO_INCREMENT,
  `slots_date` date NOT NULL,
  `slots` int(11) NOT NULL DEFAULT 10,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`slotid`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_sms` (
  `SMSI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `APIKEY` varchar(255) NOT NULL,
  `SENDERNAME` longtext NOT NULL,
  `APILINK` longtext NOT NULL,
  `SMS_PENDING` longtext NOT NULL,
  `SMS_APPROVED` longtext NOT NULL,
  `SMS_REJECTED` longtext NOT NULL,
  `ACTIVE` varchar(255) NOT NULL,
  PRIMARY KEY (`SMSI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






CREATE TABLE `tbl_system_setting` (
  `SYS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SYS_NAME` varchar(255) DEFAULT NULL,
  `SYS_ADDRESS` varchar(255) DEFAULT NULL,
  `SYS_LOGO` longblob DEFAULT NULL,
  `SYS_EMAIL` varchar(255) DEFAULT NULL,
  `SYS_ISDEFAULT` varchar(20) NOT NULL,
  `SYS_ABOUT` longtext NOT NULL,
  `SYS_SECOND_LOGO` longblob NOT NULL,
  `SYS_SHORTNAME` varchar(255) NOT NULL,
  `SYS_NUMBER` varchar(255) NOT NULL,
  `SYS_FACEBOOK` varchar(255) NOT NULL,
  `SYS_TWITTER` varchar(255) NOT NULL,
  `SYS_INSTAGRAM` varchar(255) NOT NULL,
  `SYS_LINKEDIN` varchar(255) NOT NULL,
  `SYS_GCASH_NUMBER` varchar(255) NOT NULL,
  `SYS_DIOCESE` text NOT NULL,
  `SYS_CHURCH_NAME` text NOT NULL,
  PRIMARY KEY (`SYS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_system_setting VALUES("1","Online Appointment","Sergio Osmeña Zamboanga del Norte","","mabinaychurch@gmail.com","YES","A description paragraph is required when you are asked to describe features or characteristics of something. This may include how something looks, sounds, smells, tastes, or feels. You should provide specific details of the most important features and use appropriate adjectives to describe attributes and qualities.","","PRM","09306247025","https://web.facebook.com/","https://web.twitter.com/","https://www.instagram.com/","https://www.linkedin.com/","09306247025","Diocese of Dipolog","St. Philip Benizi Parish");





CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FIRSTNAME` varchar(255) NOT NULL,
  `MI` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `DESIGNATION` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ROLE` varchar(255) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `CREATED_ON` datetime NOT NULL DEFAULT current_timestamp(),
  `PROFILE` longblob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO tbl_users VALUES("1","ANDRES","P","JARIO","Administrator","admin","admin","admin","1","2022-12-29 13:37:02","");
INSERT INTO tbl_users VALUES("4","DARYL","T","TECSON","USER","demo","demo123","USER","1","2024-01-29 14:41:37","");



