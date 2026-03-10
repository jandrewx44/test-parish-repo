-- Database Export
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

INSERT INTO history VALUES("114","ANDRES P JARIO | All records c","Death Deleted All","2026-02-25 12:03:09","admin");





CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO schedule_list VALUES("9","aa","a","2025-04-13 06:55:00","2025-04-13 06:56:00");
INSERT INTO schedule_list VALUES("10","Test","Test","2026-02-27 00:00:00","2026-02-27 00:00:00");





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

INSERT INTO tbl_appointment VALUES("2","2025-03-28","08:00-09:00","ANDRES","PAUSAL","JARIO","MALE","2025-12-31","-1","202222","MABINAY","OVERSEAS WORKERS WELFARE ADMINISTRATION (OWWA) E-CARD","","","AGREED","REF-0325-0009","Rejected","2025-03-31","aaa","");
INSERT INTO tbl_appointment VALUES("3","2025-03-28","08:00-09:00","CRISCHEL","A","JARIO","FEMALE","2025-12-31","-1","09306247025","MABINAY NEGROS ORIENTAL","GOVERNMENT SERVICE INSURANCE SYSTEM (GSIS) CARD","","","AGREED","REF-0325-0010","Approved","2025-04-12","This is system automation","");
INSERT INTO tbl_appointment VALUES("5","2025-03-28","09:00-10:00","AAA","AAA","AAA","MALE","2025-03-11","0","22212","AAA","GOVERNMENT SERVICE INSURANCE SYSTEM (GSIS) CARD","","","AGREED","REF-0325-0012","Pending","2025-03-31","aaaa","");
INSERT INTO tbl_appointment VALUES("6","2025-04-03","08:00-09:00","ANDRES","PAUSAL","JARIO","MALE","2025-04-01","0","09306247025","MABINAY NEGROS ORIENTAL","DRIVERS LICENSE","","","AGREED","REF-0425-0001","Pending","","","");
INSERT INTO tbl_appointment VALUES("7","2025-04-03","08:00-09:00","TEST","TEST","TEST","MALE","2025-04-16","-1","09183524236","MABINAY","GOVERNMENT SERVICE INSURANCE SYSTEM (GSIS) CARD","","","AGREED","REF-0425-0002","Pending","","","");
INSERT INTO tbl_appointment VALUES("8","2025-04-30","08:00-09:00","CHAZE ANDREI","A","JARIO","MALE","2025-04-08","0","093062441552","MABINAY NEGROS ORIENTAL","DRIVERS LICENSE","","","AGREED","REF-0425-0003","Approved","2025-04-12","reject","");
INSERT INTO tbl_appointment VALUES("9","2025-04-30","09:00-10:00","ANDRES","PAUSAL","JARIO","MALE","2025-12-31","-1","09306247025","MABINAY NEGROS ORIENTAL","DRIVERS LICENSE","","","AGREED","REF-0425-0004","Completed","2025-04-12","aaa","");
INSERT INTO tbl_appointment VALUES("10","2025-04-30","09:00-10:00","JANDREW","CAGBAS","PAJE","MALE","2003-01-21","22","09560864756","EWEWE","VOTER\\\'S ID","","","AGREED","REF-0425-0005","Rejected","2025-04-13","rejected","");
INSERT INTO tbl_appointment VALUES("11","2025-04-30","09:00-10:00","JANDREW","CAGBAS","PAJE","MALE","2003-01-21","22","09560864756","EWEW","DRIVERS LICENSE","","","AGREED","REF-0425-0006","Pending","","","");
INSERT INTO tbl_appointment VALUES("12","2025-04-29","08:00-10:00","AAAAA","AA","AA","MALE","2025-04-22","-1","121","ASD","GOVERNMENT SERVICE INSURANCE SYSTEM (GSIS) CARD","","","AGREED","REF-0425-0007","Pending","","","");





CREATE TABLE `tbl_autonumber` (
  `AUTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AUTO_NUMBER` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AUTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_autonumber VALUES("1","REF-0325-0001");
INSERT INTO tbl_autonumber VALUES("2","REF-0325-0002");
INSERT INTO tbl_autonumber VALUES("3","REF-0325-0003");
INSERT INTO tbl_autonumber VALUES("4","REF-0325-0004");
INSERT INTO tbl_autonumber VALUES("5","REF-0325-0005");
INSERT INTO tbl_autonumber VALUES("6","<br /><b>Notice</b>:  Undefined variable: number in <b>D:xampphtdocsmabinayparishchurchegistration_section.php</b> on line <b>127</b><br />");
INSERT INTO tbl_autonumber VALUES("7","<br /><b>Notice</b>:  Undefined variable: number in <b>D:xampphtdocsmabinayparishchurchcalendar_appointment.php</b> on line <b>111</b><br />");
INSERT INTO tbl_autonumber VALUES("8","REF-0325-0006");
INSERT INTO tbl_autonumber VALUES("9","REF-0325-0007");
INSERT INTO tbl_autonumber VALUES("10","REF-0325-0008");
INSERT INTO tbl_autonumber VALUES("11","REF-0325-0009");
INSERT INTO tbl_autonumber VALUES("12","REF-0325-0010");
INSERT INTO tbl_autonumber VALUES("13","REF-0325-0011");
INSERT INTO tbl_autonumber VALUES("14","REF-0325-0012");
INSERT INTO tbl_autonumber VALUES("15","REF-0425-0001");
INSERT INTO tbl_autonumber VALUES("16","REF-0425-0002");
INSERT INTO tbl_autonumber VALUES("17","REF-0425-0003");
INSERT INTO tbl_autonumber VALUES("18","REF-0425-0004");
INSERT INTO tbl_autonumber VALUES("19","REF-0425-0005");
INSERT INTO tbl_autonumber VALUES("20","REF-0425-0006");
INSERT INTO tbl_autonumber VALUES("21","REF-0425-0007");





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

INSERT INTO tbl_baptismal_letter_request VALUES("6","andres p jario","andres p jario","YES","YES","","","YES","YES","2023-10-04","","2023100489848");
INSERT INTO tbl_baptismal_letter_request VALUES("7","Adivina Dumagpi","Crischel T Amorio","YES","YES","YES","","","","2023-10-04","2023-10-04","2023100489783");
INSERT INTO tbl_baptismal_letter_request VALUES("9","Andres P Jario","Cresencia Alagad","YES","YES","YES","","","","2023-10-09","","2023100917080");





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

INSERT INTO tbl_baptismal_otherperson VALUES("34","1","Paniabonan, Mabinay, Negros Oriental","841","85","1959-1960","Alberta Diguet","Alberta Diguet","Paniabonan, Mabinay, Negros Oriental","Paniabonan, Mabinay, Negros Oriental","1960-06-06","1960-06-06","Enarciso Diguet","Enarciso Diguet","Lucia Coronado","Lucia Coronado","COSTANCIA AMARO","","","","","COSTANCIA AMARO","","4th","October","2023","Alberta deguit","2023100453151","2023-10-04","");





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

INSERT INTO tbl_batism_certification VALUES("2","Andres P Jario","1990-05-10","Pantao Mabinay Negros Oriental","Andres V Jario","Tres B Pausal","Panta Negros Oriental","Mabinay Church","Mabinay Negros Oriental","2022-12-31","n/a","andres 1andres 2andres 3andres 4","the Son Of A Prosperous Landowner, Rizal Was Educated In Manila And At The University Of Madrid. A Brilliant Medical Student, He Soon Committed Himself To The Reform Of Spanish Rule In His Home Country, Though He Never Advocated Philippine Independence. M","9th","October","2023","1002","1003","1004","2023-10-09","2023-10-09","");
INSERT INTO tbl_batism_certification VALUES("3","andres p jario","1990-05-10","mabinay negros oriental","andres v jario","tresa b pausal","pantao mabinay negros oriental","panyabonan chapel","panyabonan negros oriental","2023-12-31","father","sponsors","a series or system of written symbols used to represent numbers, amounts, or elements in something such as music or mathematics","9th","October","2023","852","9569","6969","2023-10-09","","");
INSERT INTO tbl_batism_certification VALUES("4"," Merlinda Estoque","1959-11-03","Dagbasan, Mabinay, Negros Oriental","Primitivo Estoque","Cresenciana Estorco","Lumbangan Mabinay, Negros Oriental","Sto. Niï¿½o Parish","Lumbangan, Mabinay, Negros Oriental","1959-11-22","Rev. Fr. Reve Villanueva","Elsa Estorco","","27th","February","2024","1","16","156","2024-02-27","","");
INSERT INTO tbl_batism_certification VALUES("5","Antonia Diaz","1961-06-13","Bagtic, Mabinay, Negros Oriental","Venancio Diaz","Incarnacion Planas","Bagtic, Mabinay, Negros Oriental","Sto. Niï¿½o Parish","","1961-09-14","Rev. Fr. Antonio Ferreron","Agripina Planas","","17th","March","2024","2","80","892","2024-03-17","","");
INSERT INTO tbl_batism_certification VALUES("6","Carlos Debibar","1962-01-19","Tadlong, Mabinay, Negros Oriental","Isaas Debibar","Arsenia Abanez","Tadlong, Mabinay, Negros Oriental","Sto. Niï¿½o Parish","","1962-04-22","Rev. Fr. Antonio Ferreron","Gertrudes Jambrarufo Abordo","","17th","March","2024","3","60","599","2024-03-17","","");
INSERT INTO tbl_batism_certification VALUES("7","Dexter     S.   Bedro","1991-03-17","Caluy-ahan","Miguel   Bedro","Eva Sarabia","Caluy-ahan, Mabinay Negros Oriental ","Sto. NiÃ‘o Parish","Mabinay Negros Oriental","1991-04-23","Rev. Fr.  Zacharias S. Cortes","Rose Camiro","For Marriage Purpose Only!","21st","March","2024","20","75","92","2024-03-21","","");
INSERT INTO tbl_batism_certification VALUES("8","Argie   A.  Duran","1987-04-23","Bagtic,  Mabinay Negros Oriental","Jesus  Duran","Conchita Acab","Bagtic,  Mabinay Negros Oriental","Sto. NiÃ‘o Parish","Mabinay Negros Oriental","1988-03-19","Rev. Fr. Victor Fontejon","Matoy Abonilio, Dolores Gemina","For Marriage Purpose Only!","22nd","March","2024","19","7","161","2024-03-22","2024-03-22","");
INSERT INTO tbl_batism_certification VALUES("9","Merlinda M. Tubelan","1976-12-12","Pantao, Mabinay Negros Oriental","Dionesio Tubelan","Miguela Marabillo","Pantao, Mabinay Negros Oriental","Sto. NiÑo Parish ","Mabinay Negros Oriental","1977-03-20","Rev. Fr. Alberto C. MuÑoz","Rodrigo Gantalao","","7th","April","2024","13","70","1659","2024-04-07","2024-04-07","");
INSERT INTO tbl_batism_certification VALUES("10","Melodia M. Tobilan","1982-02-10","Pantao, Mabinay Negros Oriental","Dionisio Tobelan","Meguela Maravello","Lanot, Pantao, Mabinay Negros Oriental","Sto. NiÑo Parish ","Mabinay Negros Oriental","1982-09-05","Rev. Fr.  celedonio melicor","Victorio Calidguid","For Marriage Purpose Only!","7th","April","2024","16","42","996","2024-04-07","2024-04-07","");
INSERT INTO tbl_batism_certification VALUES("11","Arnel  John C.  Mora","2001-11-30","Samac,mabinay Negros Oriental","Johnny Mora","Recel  Callao","Samac, Mabinay Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","2007-02-11","Rev. Fr. Ireneo I. Ruiz","Elvira Abello,  Vergelio Ombanimo","For Marriage Purpose Only!","8th","April","2024","27","12","287","2024-04-08","2024-04-08","");
INSERT INTO tbl_batism_certification VALUES("12","Merlinda E. Casulay","1978-08-14","Dawis, Bay City Negros Oriental","Alfredo Casulay","Conchita Estrada","Dawis, Bayawan City Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","1979-04-29","Rev. Fr. Celedonio Melicor","Florencio Bernabe ","For Marriage Purpose Only!","28th","April","2024","15","04","79","2024-04-28","2024-04-28","");
INSERT INTO tbl_batism_certification VALUES("13","Leizl  B.  Guilaran","1971-09-07","Barras, Mabinay Negros Oriental","Carlito Guilaran","Cecelia  Buenaviles","Barras, Mabinay Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","1972-03-09","Rev. Fr. Patricio T. Badoy","Liza Arian","For Marriage Purpose....","22nd","May","2024","10","43","845","2024-05-22","","");
INSERT INTO tbl_batism_certification VALUES("14","Christian Patrick Juls E. Gabihan","2012-12-01","Rhu-ii Lumbangan, Negros Oriental","Julius Gabihan","Antoniette Endona","Tadlong, Mabinay, Negros Oriental","Sto. NiÑo Parish","Mabinay, Negros Oriental","2012-12-16","Rev. Fr. Ireneo A. Ruiz","Milagros Gabihan,daryl Anthony Endona","","22nd","May","2024","28","46","1102","2024-05-22","2024-05-22","");
INSERT INTO tbl_batism_certification VALUES("15","Jevie C. Villaflor  ","1988-10-23","Old Namangka, Mabinay Negros Oriental","Jeodegario  Villaflor","Gertrudes Canoy","Old Namangka, Mabinay Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","1989-08-12","Rev. Fr.  Zacharias Cortes","Caridad Abella ","","22nd","May","2024","19","81","1892","2024-05-22","","");
INSERT INTO tbl_batism_certification VALUES("16","Dennis J. Libaton","1998-08-27","Samac,mabinay Negros Oriental","Danny Libaton","Teresita Jamito","Samac, Mabinay Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","1999-01-25","Rev. Fr. Ranulfo T. Colina","Francisco De JesusRosebina Cadalin","","22nd","May","2024","24","67","1587","2024-05-22","","");
INSERT INTO tbl_batism_certification VALUES("17","Adivina Dumagpi","1961-12-03","Malasbalas, Mabinay, Negros Oriental","Pedro Dumagpi","Regina Maribao","Malasbalas, Mabinay, Negros Oriental","Sto. NiÑo Parish","Mabinay Negros Oriental","1962-01-21","Rev. Fr. Antonio Ferreron","Teotina Caracot","","11th","July","2024","3","22","212","2024-07-11","","");





CREATE TABLE `tbl_blocked_days` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blocked_date` varchar(255) NOT NULL,
  `blocked_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_blocked_days VALUES("1","01-01","New Years Day");
INSERT INTO tbl_blocked_days VALUES("2","01-02","Special non-working day after New Year");
INSERT INTO tbl_blocked_days VALUES("3","01-22","Lunar New Years Day");
INSERT INTO tbl_blocked_days VALUES("4","01-23","First Philippine Republic Day");
INSERT INTO tbl_blocked_days VALUES("5","02-24","Day off for People Power Anniversary");
INSERT INTO tbl_blocked_days VALUES("6","02-25","People Power Anniversary");
INSERT INTO tbl_blocked_days VALUES("7","03-23","Ramadan Start");
INSERT INTO tbl_blocked_days VALUES("9","04-06","Maundy Thursday");
INSERT INTO tbl_blocked_days VALUES("10","04-07","Good Friday");
INSERT INTO tbl_blocked_days VALUES("11","04-08","Black Saturday");
INSERT INTO tbl_blocked_days VALUES("12","04-09","Easter Sunday");
INSERT INTO tbl_blocked_days VALUES("14","04-10","Labor Day");
INSERT INTO tbl_blocked_days VALUES("15","04-21","Eidul-Fitar Holiday");
INSERT INTO tbl_blocked_days VALUES("16","08-21","Ninoy Aquino Day");
INSERT INTO tbl_blocked_days VALUES("18","11-01","All Saints Day");
INSERT INTO tbl_blocked_days VALUES("19","11-02","All Souls Day");
INSERT INTO tbl_blocked_days VALUES("20","11-27","Bonifacio Day");
INSERT INTO tbl_blocked_days VALUES("21","11-30","Bonifacio Day");
INSERT INTO tbl_blocked_days VALUES("22","12-22","December Solstice");
INSERT INTO tbl_blocked_days VALUES("23","12-24","Christmas Eve");
INSERT INTO tbl_blocked_days VALUES("24","12-25","Christmas Day");
INSERT INTO tbl_blocked_days VALUES("25","12-30","Rizal Day");
INSERT INTO tbl_blocked_days VALUES("28","06-12","Independence Day");
INSERT INTO tbl_blocked_days VALUES("31","12-31","New Year\'s Eve");
INSERT INTO tbl_blocked_days VALUES("32","06-29","NONE WORKING DAYS");





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

INSERT INTO tbl_confirmation_certificate VALUES("8","andres pausal jario","2023-01-31","pantao mabinay negros oriental","andres v jario","tresa b pausal","pantao mabinay negros oriental","mabinay church","mabinay negros oriental","2023-01-31","father","sponsors","a series or system of written symbols used to represent numbers, amounts, or elements in something such as music or mathematics Test","9th","October","2023","6969","6988","9784","2023-10-09","2023-10-09");





CREATE TABLE `tbl_contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROVIDER` varchar(255) NOT NULL,
  `MOBILENO` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO tbl_contact VALUES("3","GLOBE","09306247025");
INSERT INTO tbl_contact VALUES("9","SMART","09352251412");
INSERT INTO tbl_contact VALUES("10","DITO","09663254122");
INSERT INTO tbl_contact VALUES("11","TNT","09662254122");





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

INSERT INTO tbl_contact_us VALUES("2","CRISCHEL A. JARIO","crischelamorio@gmail.com","09306247025","Good morning pwede po ba akong magtanong kung ano ang mga inclusion? ","inquiry","2025-01-05 11:42:51");
INSERT INTO tbl_contact_us VALUES("4","a","a@gmail.com","a","a","a","2025-03-09 06:08:24");
INSERT INTO tbl_contact_us VALUES("5","a","a@gmail.com","a","a","a","2025-03-09 12:43:57");
INSERT INTO tbl_contact_us VALUES("6","a","aaaa@gmail.com","a","a","a","2025-03-27 14:28:00");
INSERT INTO tbl_contact_us VALUES("8","aaa","a2g@mail.com","aaa","a","aa","2025-03-27 14:30:53");





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

INSERT INTO tbl_events VALUES("1","Wedding","Wedding ","2023-01-12","15:36:00","2");
INSERT INTO tbl_events VALUES("2","TEST1","TEST1","2023-01-28","15:48:00","1");
INSERT INTO tbl_events VALUES("3","TEST2","TEST2","2023-01-13","15:48:00","0");





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

INSERT INTO tbl_good_moral VALUES("3","Andres P Jario","Andres V Jario Sr","Tresa B Pausal","Pantao Mabinay Negros Oriental","Negros Oriental State University","March","2015","Bachelor Of Science In Information Technology","School Enrollment","10th","October","2023","2023-10-10","2023-10-10");





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

INSERT INTO tbl_marriage_certificate VALUES("1","Adorando Bagyoso","Ibulan, Paniabonan Negros Oriental","Fernando Bagyoso","Sosema Orquida"," Merlinda Estoque","Lumbangan Mabinay, Negros Oriental","Primitivo Estoque","Cresenciana Estorco","Mabinay Negros Oriental","2023-12-31","Witness","Solemnizing Priest","10th","October","2023","2023-10-10","2023-10-10");
INSERT INTO tbl_marriage_certificate VALUES("3","Andres P Jario","Panta Negros Oriental","Andres V Jario","Tres B Pausal","Adivina Dumagpi","Malasbalas, Mabinay, Negros Oriental","Pedro Dumagpi","Regina Maribao","Mabinay Negros Oriental","2023-01-01","","","11th","October","2023","2023-10-11","");





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

INSERT INTO tbl_marriage_outside_certificate VALUES("2","Gomborza","Mabinay Church Parish","YES","YES","11th","October","2023","2023-10-11","");
INSERT INTO tbl_marriage_outside_certificate VALUES("3","Parish Priest","Mae T. Lapasaran","","YES","29th","April","2024","2024-04-29","2024-04-29");





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

INSERT INTO tbl_no_baptism_certificate VALUES("2","Andres P Jario","Request Of Good Moral","10th","October","2024","2023-10-10","2023-10-10");
INSERT INTO tbl_no_baptism_certificate VALUES("3","NELFA CORAZON C. FEROLINO","NELFA CORAZON C. FEROLINO","27th","June","2024","2024-06-27","2024-06-27");





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

INSERT INTO tbl_no_confirmation_certificate VALUES("2","Andres P Jario","Request Of Good Moral","10th","October","2024","2023-10-10","2023-10-10");
INSERT INTO tbl_no_confirmation_certificate VALUES("4","NELFA CORAZON C. FEROLINO","NELFA CORAZON C. FEROLINO","27th","June","2024","2024-06-27","");





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

INSERT INTO tbl_permission_baptism_certificate VALUES("4","Entry1","Entry2","Entry3","E","Gomborza","Mabinay Parish Church","Andres P Jario","11th","October","2023","2023-10-11","2023-10-11");





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

INSERT INTO tbl_pre_cana VALUES("5","Andres P Jario","Pantao Negros Oriental","33","Crischel T Amorio","mabinay negros oriental","28","2023-03-04","mabinay parish Church","2023-03-04","Mabinay Parish Church","2023-10-04","2023-10-04","2023100409305","29th","January","2024");
INSERT INTO tbl_pre_cana VALUES("7","Andres P Jario","Panta Negros Oriental","31","Crischel T Amorio","Mabinay Negros Oriental","28","2023-10-26","Mabinay Parish Church","2023-10-13","Mabinay Parish Church","2023-10-11","","2023101197067","11th","October","2023");





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

INSERT INTO tbl_pre_jordan VALUES("1","Andres Pausal Jario","2023-10-09","Mabinay Parish chuch","9th","October","2023","2023100919008","2023-10-09","2023-10-09");
INSERT INTO tbl_pre_jordan VALUES("3","Crischel T Amorio","2023-10-09","mabinay parish church","9th","October","2023","2023100919007","2023-10-09","");
INSERT INTO tbl_pre_jordan VALUES("5","Crischel T Amorio","2023-10-09","mabinay Parish Church","9th","October","2023","2023100917623","2023-10-09","");





CREATE TABLE `tbl_priest` (
  `PRIEST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRIEST_NAME` varchar(255) NOT NULL,
  `PRIEST_DEFAULT` varchar(255) NOT NULL,
  `PRIEST_SIGNATURE` longblob NOT NULL,
  `SIGNATURE_ENABLED` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`PRIEST_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_priest VALUES("1","ANDRES P. JARIO","NO","","1");
INSERT INTO tbl_priest VALUES("3","FR. test","YES","","1");





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

INSERT INTO tbl_review VALUES("6","Lebron James","4","Efficiency and punctuality are hallmarks of their service.","1621935691","");
INSERT INTO tbl_review VALUES("7","Amorio, Crischel","5","I was completely impressed with their professionalism and customer service.","1621939888","");
INSERT INTO tbl_review VALUES("8","Andres Jario","5","Their customer service is second to none","1621940010","");
INSERT INTO tbl_review VALUES("9","Andres Jario","1","Their staff is not only friendly but also highly skilled.","1724055518","");
INSERT INTO tbl_review VALUES("17","AAAA","0","AA","1736496362","");
INSERT INTO tbl_review VALUES("18","ANDRES","3","NICE PLACE","1736655198","");
INSERT INTO tbl_review VALUES("19","a","0","a","1741495978","");
INSERT INTO tbl_review VALUES("20","test","3","aaa","1743055738","");
INSERT INTO tbl_review VALUES("21","TEST","5","AA","1744497897","");





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

INSERT INTO tbl_slot_date VALUES("1","2024-08-01","30","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("2","2024-08-01","30","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("3","2024-08-01","30","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("4","2024-08-01","30","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("5","2024-08-01","30","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("6","2024-08-01","30","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("7","2024-08-01","30","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("8","2024-08-01","1","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("9","2024-08-01","30","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("10","2024-08-02","30","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("11","2024-08-02","30","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("12","2024-08-02","30","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("13","2024-08-02","30","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("14","2024-08-02","30","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("15","2024-08-02","30","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("16","2024-08-02","30","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("17","2024-08-02","30","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("18","2024-08-02","30","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("19","2024-08-12","30","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("20","2024-08-12","30","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("21","2024-08-12","30","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("22","2024-08-12","30","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("23","2024-08-12","30","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("24","2024-08-12","30","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("25","2024-08-12","30","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("26","2024-08-12","30","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("27","2024-08-12","30","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("28","2024-08-13","30","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("29","2024-08-13","30","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("30","2024-08-13","30","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("31","2024-08-13","30","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("32","2024-08-13","30","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("33","2024-08-13","30","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("34","2024-08-13","30","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("35","2024-08-13","30","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("36","2024-08-13","30","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("37","2024-08-14","30","08:00-09:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("38","2024-08-14","30","09:00-10:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("39","2024-08-14","30","10:00-11:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("40","2024-08-14","30","11:00-12:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("41","2024-07-31","5","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("42","2024-07-31","5","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("43","2024-07-31","5","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("44","2024-07-31","5","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("45","2024-07-31","5","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("46","2024-07-31","5","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("47","2024-07-31","5","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("48","2024-07-31","5","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("49","2024-07-31","5","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("50","2024-08-15","30","08:00-09:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("51","2024-08-15","30","09:00-10:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("52","2024-08-15","30","10:00-11:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("53","2024-08-15","30","11:00-12:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("54","2024-08-16","1","08:00-09:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("55","2024-08-16","1","09:00-10:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("56","2024-08-16","1","10:00-11:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("57","2024-08-16","1","11:00-12:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("58","2024-08-20","10","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("59","2024-08-20","10","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("60","2024-08-20","10","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("61","2024-08-20","10","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("62","2024-08-20","10","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("63","2024-08-20","10","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("64","2024-08-20","10","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("65","2024-08-20","10","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("66","2024-08-20","10","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("67","2024-08-21","10","08:00-09:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("68","2024-08-21","10","09:00-10:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("69","2024-08-21","10","10:00-11:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("70","2024-08-21","10","11:00-12:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("72","2024-08-23","15","09:00-10:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("73","2024-08-23","15","10:00-11:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("74","2024-08-23","15","11:00-12:00","12:00","60");
INSERT INTO tbl_slot_date VALUES("75","2025-03-24","10","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("76","2025-03-24","10","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("77","2025-03-24","10","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("78","2025-03-24","10","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("79","2025-03-24","10","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("80","2025-03-24","10","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("81","2025-03-24","10","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("82","2025-03-24","10","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("83","2025-03-24","10","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("84","2025-03-26","20","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("85","2025-03-26","20","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("86","2025-03-26","20","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("87","2025-03-26","20","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("88","2025-03-26","20","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("89","2025-03-26","20","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("90","2025-03-26","20","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("91","2025-03-26","20","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("92","2025-03-26","20","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("93","2025-03-27","10","08:00-08:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("94","2025-03-27","10","08:10-08:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("95","2025-03-27","10","08:20-08:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("96","2025-03-27","10","08:30-08:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("97","2025-03-27","10","08:40-08:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("98","2025-03-27","10","08:50-09:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("99","2025-03-27","10","09:00-09:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("100","2025-03-27","10","09:10-09:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("101","2025-03-27","10","09:20-09:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("102","2025-03-27","10","09:30-09:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("103","2025-03-27","10","09:40-09:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("104","2025-03-27","10","09:50-10:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("105","2025-03-27","10","10:00-10:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("106","2025-03-27","10","10:10-10:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("107","2025-03-27","10","10:20-10:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("108","2025-03-27","10","10:30-10:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("109","2025-03-27","10","10:40-10:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("110","2025-03-27","10","10:50-11:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("111","2025-03-27","10","11:00-11:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("112","2025-03-27","10","11:10-11:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("113","2025-03-27","10","11:20-11:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("114","2025-03-27","10","11:30-11:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("115","2025-03-27","10","11:40-11:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("116","2025-03-27","10","11:50-12:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("117","2025-03-27","10","12:00-12:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("118","2025-03-27","10","12:10-12:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("119","2025-03-27","10","12:20-12:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("120","2025-03-27","10","12:30-12:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("121","2025-03-27","10","12:40-12:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("122","2025-03-27","10","12:50-13:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("123","2025-03-27","10","13:00-13:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("124","2025-03-27","10","13:10-13:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("125","2025-03-27","10","13:20-13:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("126","2025-03-27","10","13:30-13:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("127","2025-03-27","10","13:40-13:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("128","2025-03-27","10","13:50-14:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("129","2025-03-27","10","14:00-14:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("130","2025-03-27","10","14:10-14:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("131","2025-03-27","10","14:20-14:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("132","2025-03-27","10","14:30-14:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("133","2025-03-27","10","14:40-14:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("134","2025-03-27","10","14:50-15:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("135","2025-03-27","10","15:00-15:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("136","2025-03-27","10","15:10-15:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("137","2025-03-27","10","15:20-15:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("138","2025-03-27","10","15:30-15:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("139","2025-03-27","10","15:40-15:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("140","2025-03-27","10","15:50-16:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("141","2025-03-27","10","16:00-16:10","17:00","10");
INSERT INTO tbl_slot_date VALUES("142","2025-03-27","10","16:10-16:20","17:00","10");
INSERT INTO tbl_slot_date VALUES("143","2025-03-27","10","16:20-16:30","17:00","10");
INSERT INTO tbl_slot_date VALUES("144","2025-03-27","10","16:30-16:40","17:00","10");
INSERT INTO tbl_slot_date VALUES("145","2025-03-27","10","16:40-16:50","17:00","10");
INSERT INTO tbl_slot_date VALUES("146","2025-03-27","10","16:50-17:00","17:00","10");
INSERT INTO tbl_slot_date VALUES("147","2025-03-28","2","08:00-09:00","10:00","60");
INSERT INTO tbl_slot_date VALUES("148","2025-03-28","10","09:00-10:00","10:00","60");
INSERT INTO tbl_slot_date VALUES("149","2025-04-03","10","08:00-09:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("150","2025-04-03","10","09:00-10:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("151","2025-04-03","10","10:00-11:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("152","2025-04-03","10","11:00-12:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("153","2025-04-03","10","12:00-13:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("154","2025-04-03","10","13:00-14:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("155","2025-04-03","10","14:00-15:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("156","2025-04-03","10","15:00-16:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("157","2025-04-03","10","16:00-17:00","17:00","60");
INSERT INTO tbl_slot_date VALUES("158","2025-04-30","1","08:00-09:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("159","2025-04-30","10","09:00-10:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("160","2025-04-30","10","10:00-11:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("161","2025-04-30","10","11:00-12:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("162","2025-04-30","10","12:00-13:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("163","2025-04-30","10","13:00-14:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("164","2025-04-30","10","14:00-15:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("165","2025-04-30","10","15:00-16:00","16:00","60");
INSERT INTO tbl_slot_date VALUES("166","2025-04-29","50","08:00-10:00","12:00","120");
INSERT INTO tbl_slot_date VALUES("167","2025-04-29","50","10:00-12:00","12:00","120");





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

INSERT INTO tbl_sms VALUES("1","53e4c969b30372866c64a9b4eaea8647","CegueraTech","https://semaphore.co/api/v4/messages","","","","YES");





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



