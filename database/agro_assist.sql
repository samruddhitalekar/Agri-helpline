-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 01:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agro_assist_akola`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Photo`, `Date`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '535926.jpg', '2017-12-26 14:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_officer`
--

CREATE TABLE IF NOT EXISTS `agriculture_officer` (
  `Officer_id` int(11) NOT NULL,
  `Officer_name` varchar(255) NOT NULL,
  `Officer_email` varchar(255) NOT NULL,
  `Officer_mobile` varchar(10) NOT NULL,
  `Officer_gender` varchar(10) NOT NULL,
  `Officer_address` text NOT NULL,
  `Officer_password` varchar(50) NOT NULL,
  `Officer_photo` varchar(50) NOT NULL,
  `Officer_status` varchar(20) NOT NULL DEFAULT 'Not_approved',
  `Officer_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agriculture_officer`
--

INSERT INTO `agriculture_officer` (`Officer_id`, `Officer_name`, `Officer_email`, `Officer_mobile`, `Officer_gender`, `Officer_address`, `Officer_password`, `Officer_photo`, `Officer_status`, `Officer_date`) VALUES
(1, 'Karan', 'karan@gmail.com', '8975464562', 'Male', 'Nashik', 'karan', '439770.jpg', 'approved', '2018-08-02 14:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Contact_id` int(11) NOT NULL,
  `Contact_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Contact_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Contact_mobile` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Contact_message` text CHARACTER SET utf8 NOT NULL,
  `Contact_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_id`, `Contact_name`, `Contact_email`, `Contact_mobile`, `Contact_message`, `Contact_date`) VALUES
(1, 'varsha', 'varsha@gmail.com', '8798421321', 'helloo', '2018-08-04 16:24:20'),
(2, 'वर्षा', 'varsha@gmail.com', '8975465456', 'खूप वर्षांपूर्वीची गोष्ट आहे. एक कामगार आपल्या गाढवासोबत जंगलातून चालला होता. इतक्यात रस्त्याच्या बाजूला त्याला काही चमकताना दिसलं. त्यानं जवळ जाऊन पाहिलं तर तिथे एक चमकणारा दगड पडलेला होता. त्यानं तो उचलून आपल्या गाढवाच्या गळ्यात अडकवला आणि पुढे चालू लागला.', '2018-08-04 16:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE IF NOT EXISTS `crop` (
  `Crop_id` int(11) NOT NULL,
  `Crop_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_description` text CHARACTER SET utf8 NOT NULL,
  `Crop_photo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_photo_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_file` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_file_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Crop_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`Crop_id`, `Crop_type`, `Crop_name`, `Crop_description`, `Crop_photo`, `Crop_photo_type`, `Crop_file`, `Crop_file_type`, `Crop_date`) VALUES
(1, 'फळे', 'द्राक्षे', 'द्राक्ष ही एक वेलवर्गातील वनस्पती आहे. याच्या दोन जाती आहेत: पिवळी द्राक्षे व काळी द्राक्षे. ही फळे उन्हाळ्यात मिळतात. नाशिक जिल्ह्यात द्राक्षाचे प्रचंड उप्तादन होते. सध्या तासगाव,मिरज तालुके (सांगली) हे द्राक्षे उत्पादनात अग्रेसर आहे .येथील द्राक्षांना आंतरराष्ट्रीय बाजारपेठेत मोठ्या प्रमाणात मागणी आहे. येथील वातावरण द्राक्षांसाठी व मनुका उत्पादनासाथी अनुकुल आहे.सांगली,मनुका उत्पादनात भारतात पहील्या क्रमांकावर आहे. द्राक्ष खाण्यासाठी तसेच जाम, जेली, ज्यूस, दारु व मनुका तयार करण्यासाठी वापरतात.', '438276.jpg', 'image/jpeg', '353796.pdf', 'application/pdf', '2018-08-04 10:30:57'),
(2, 'भाज्या', 'भेंडी', 'भेंडी हे एक उत्तम फळभाजी आहे .भेंडीच्या फळात कॅलशियम व आयोडीन हि मूलद्रव्ये आणि क जीवन्सत्ये भरपूर प्रमाणात असतात . महाराष्ट्रामध्ये भेन्डीखाली ८१९० हेक्टर क्षेत्र लागवडीखाली आहे.भेंडीचे पिक हे वर्षभर घेतले जाते.\r\nखरीप हंगामात हेक्टरी ८ किलो आणि उन्हाळ्यात १० किलो बियाणे पुरेसे होते.१ किलो बीयाण्यास पेरणीपूर्वी ३ ग्राम थायरम चोळणे. ', '379924.jpg', 'image/jpeg', '642997.pdf', 'application/pdf', '2018-08-04 10:36:50'),
(3, 'फुले', 'गुलाब ', 'गुलाब एक प्रकारचे फूल आहे. भारतात आढळणाऱ्या गुलाबाच्या झाडांचे तीन मुख्य प्रकार आहेत. देशी, रानटी आणि कलमी. गुलकंद किंवा अत्तर करण्यासाठी देशी गुलाबाची सुगंधी फुलेच लागतात. रानटी गुलाबांच्या रोपांवर कलम करून विलायती गुलाब बनतो. तसल्या गुलाबाच्या जवळपास १०० जाती आहेत. उपयोग: बागेमध्ये, गुलकंद, अत्तर करण्यासाठी, प्रेमाचे, मैत्रीचे, शांततेचे प्रतीक, घरादाराची शोभा वाढवण्याकरिता, डोक्यात माळून शृंगार प्रसाधनासाठी, वगैरे.एक गुलाबाची कुटुंब Rosaceae आत, पोटजात रोझा एक वृक्षाच्छादित बारमाही आहे. १०० प्रजाती प्रती आहेत. ते ताठ, अनेकदा तीक्ष्णसह सशस्त्र आहेत डेखासह क्लाइंबिंग किंवा trailing असू शकते वनस्पती एक गट वाढविली. फुलांचे आकार आणि आकार बदलू मध्ये आणि पांढरा पासून माध्यमातून सीमेत रंग मध्ये, सहसा मोठे आणि आकर्षक आहेत. बहुतेक प्रजाती युरोप, उत्तर अमेरिका, आणि वायव्य आफ्रिका नेटिव्ह लहान क्रमांक, आशिया करण्यासाठी नेटिव्ह आहेत. प्रजाती, सर्व सर्रासपणे त्यांचे सौंदर्य पीक घेतले जात आणि अनेकदा सुवासिक असतात. उंची ७ मीटर पोहोचू शकतात climbers करण्यासाठी कॉम्पॅक्ट, सूक्ष्म गुलाब, पासून आकार वनस्पती श्रेणी वधारला. वेगवेगळ्या प्रजाती सहजपणे मिश्रजातीय तयार करणे किंवा करवणे, आणि हे उद्यान गुलाब विविध श्रेणी विकासात वापरला गेला आहे.\r\nगुलाबास समशीतोष्ण हवामान तसेच मोकळी हवा, भरपूर सूर्यप्रकाश आणि मध्यम तापमान चांगले मानवते. जमीन उत्तम निचरा होणारी हवी आणि जमिनीचा सामू (पी.एच.) ६.० ते ७.५ पर्यंत असावा. क्षारयुक्त जमिनीत गुलाब चांगले बहरत नाहीत.', '836803.jpg', 'image/jpeg', '586474.pdf', 'application/pdf', '2018-08-04 10:37:35'),
(4, 'तेलबिया', 'तीळ', 'तीळ (Sesamum indicum) हे एक फुले येणारे लागवडयोग्य झाड आहे. आफ्रिकेत याचे पुष्कळ जंगली भाउबंद आहेत व भारतातही हे मोठ्या प्रमाणात आढळते. त्याच्या तेलबियांसाठी त्याची बहुतेक सगळीकडे लागवड केली जाते. याची फुले साधारणतः पिवळी असतात मात्र काहीवेळा निळ्या आणि जांभळ्या रंगांची फुलेही या झाडाला आल्याचे आढळते.\r\nहे एक बहुवार्षिक झाड असून ते सुमारे ०.५ ते १ मिटर उंच वाढते. याची पाने विरुध्द दिशेला असतात व सुमारे ४ ते १४ सेंटीमिटर लांब असतात. मुळाकडे याची पाने रुंद असून पुष्प-शाखेकडे ती छोटी होत जातात. फुले ही पांढरी ते जांभळी, नलीकाकार,३ ते ५ सेंटीमीटर लांब व तोंडाशी चार पाकळ्या असणारी असतात. यात असणाऱ्या बिया याच मुख्यत्वेकरुन वापरल्या जातात. या बियांचा रंग सामान्यतः पांढरा, मात्र काहीवेळा किंचित गुलाबी,लालसर व काळाही असतो.या तेलबिया आहेत. याच्यापासून उच्च दर्जाचे खाद्यतेल निघते.\r\nतीळ पौष्टिक आहेत, त्यांच्यात स्निग्धपणा आहे म्हणून तिळाचे तेल अंगाला लावतात.भारतात मकर संक्रांतीचे (तिळसंक्रांती) चे दिवशी तिळगुळ वाटण्याचा प्रघात आहे.', '695038.jpg', 'image/jpeg', '524951.pdf', 'application/pdf', '2018-08-04 10:39:43'),
(5, 'डाळी', 'मूग', 'हे एक द्विदल कडधान्य आहे. हा एक स्वयंपाकात वरचेवर वापरल्या जाणारा एक पदार्थ आहे. याचे वरण बहुतेक लोक आवडीने खातात. चीन, थायलंड, फिलिपाईन्स, इंडोनेशिया, ब्रह्मदेश, बांग्लादेश इत्यादी देशांमध्ये ही मुगाची लागवड केली जाते. मूग काळे, हिरवे, पिवळे, पांढरे आणि लाल रंगाचे असतात. हिरव्या रंगाचे मूग अत्यंत स्वादिष्ट आणि गुणकारी असतात. प्राचीन भारतीय पद्धतीमध्ये मुग हे सर्वाधिक पोषणयुक्त अन्नपदार्थांपैकी एक मानले जाते.पोषक घटकांचा एक मोठा स्रोत म्हणून देखील ओळखले जाते. मॅगनीझ, पोटॅशियम, मॅग्नेशियम, फोलेट, तांबे, जस्त आणि विविध ब व्हिटॅमिन इत्यादि शरीराला आवश्यक असणारे घटक यात असतात.मुग आहारात असल्यामुळे अनेक रोगांचा प्रतिकार करणे सहज शक्य होते. ह्रदयविकार, कर्करोग, मधुमेह आणि लठ्ठपणा यासारखे रोग टाळले जातात. ', '557968.jpg', 'image/jpeg', '819090.pdf', 'application/pdf', '2018-08-04 10:42:36'),
(6, 'मसाले', 'हळद', 'हळद या वनस्पतीचा वापर तीच्या औषधीय गुणधर्मामुळे भारतामध्ये फार पुरातन काळापासून भारतीयलोक स्वयंपाकात करतात. ओल्या हळकुंडापासुन भाजी तसेच लोणचे तयार करतात.हळदीचा वापर खाद्यपदार्थाला रंग व चव आणण्या व्यतिरीक्त धामिर्क कार्यामध्येही करतात. हळदीमुळे शरीराची रोगप्रतिकारक क्षमता वाढते, रक्‍त शुद्ध होते, त्‍वचेचा रंग उजळतो, ही जंतुनाशक आहे. ही वनस्पती बारमाही आहे. ', '643515.jpg', 'image/jpeg', '60023.pdf', 'application/pdf', '2018-08-04 10:48:53'),
(7, 'औषधी व सुगंधी वनस्पती', 'तुळस', 'तुळस ही चवीस तिखट, पचल्यानंतरही तिखट, उष्ण, हलकी, कोरडी, तीक्ष्ण, शरीरातील प्रत्येक कणापर्यंत तात्काळ पोहोचणारी असते. तुळशीच्या औषधासाठी विशेषतः रसाच्या रुपात वापर करावयाचा असेल तेव्हा ताजीच पाने वापरावीत व ही पाने तुळशीला मंजिर्याष येण्याअगोदर घ्यावीत. कारण मंजिर्याा येण्याअगोदर पानांमध्ये गुणांची तीव्रता अधिक असते. तुळशीचे बी तिच्या मंजिर्यांजमध्ये असते. मंजिर्याे काळ्या स्निग्ध, चमकदार होऊन आपोआप गळायला लागतात. तेव्हा गोळा कराव्यात. हे बीज बल देणारे व मूत्रप्रवृत्ती वाढविणारे असते.', '567114.jpg', 'image/jpeg', '629704.pdf', 'application/pdf', '2018-08-04 10:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `crop_calender`
--

CREATE TABLE IF NOT EXISTS `crop_calender` (
  `Calender_id` int(11) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT 'महाराष्ट्र',
  `Calender_crop_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Crop_season` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Start_month` varchar(100) CHARACTER SET utf8 NOT NULL,
  `End_month` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Crop_duration` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Crop_step` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Calender_crop_description` text CHARACTER SET utf8 NOT NULL,
  `Calender_crop_photo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Calender_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop_calender`
--

INSERT INTO `crop_calender` (`Calender_id`, `State`, `Calender_crop_name`, `Crop_season`, `Start_month`, `End_month`, `Crop_duration`, `Crop_step`, `Calender_crop_description`, `Calender_crop_photo`, `Calender_date`) VALUES
(2, 'महाराष्ट्र', 'गुलाब', 'खरीप', 'ऑगस्ट', 'ऑक्टोबर', '३', 'पेरणी', '', '829578.jpg', '2018-08-01 16:00:58'),
(3, 'महाराष्ट्र', 'मका', 'खरीप', 'जून', 'ऑगस्ट', '३', 'पेरणी', 'खरिपात जून ते ऑगस्ट या कालावधीत, रब्बी हंगामात ऑक्‍टोबर - नोव्हेंबरमध्ये आणि उन्हाळी हंगामात फेब्रुवारी - मार्चमध्ये मक्‍याची पेरणी करावी. पेरणी ३० सें.मी. अंतरावर करावी. पेरणीसाठी हेक्‍टरी ७५ किलो बियाणे वापरावे. पेरणीपूर्वी ॲझोटोबॅक्‍टर जीवाणू संवर्धक २५० ग्रॅम प्रति १० किलो बियाण्यास चोळावे.', '264012.jpg', '2018-08-04 10:59:47'),
(4, 'महाराष्ट्र', 'डाळिंब', 'खरीप', 'फेब्रुवारी', 'एप्रिल', '३', 'काढणी', 'फळांची साल पिवळसर करडया रंगाची झाली म्‍हणजे फळ तयार झाले असे समजावे व फळाची तोडणी करावी.', '614186.jpg', '2018-08-04 11:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(255) NOT NULL,
  `Customer_email` varchar(255) NOT NULL,
  `Customer_mobile` varchar(10) NOT NULL,
  `Customer_gender` varchar(10) NOT NULL,
  `Customer_address` text NOT NULL,
  `Customer_password` varchar(50) NOT NULL,
  `Customer_photo` varchar(50) NOT NULL,
  `Customer_status` varchar(20) NOT NULL DEFAULT 'Not_approved',
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Customer_name`, `Customer_email`, `Customer_mobile`, `Customer_gender`, `Customer_address`, `Customer_password`, `Customer_photo`, `Customer_status`, `Date`) VALUES
(1, 'Varsha', 'varsha@gmail.com', '9956565412', 'Female', 'Nashik', 'varsha', '802719.jpg', 'approved', '2018-07-30 11:44:29'),
(2, 'Divya', 'divya@gmail.com', '8215487456', 'Female', 'Nashik', 'divya', '', 'Not_approved', '2018-07-30 11:46:38'),
(3, 'Raj', 'raj@gmail.com', '8745415321', 'Male', 'Mumbai', 'raj', '', 'disapproved', '2018-07-30 12:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `News_id` int(11) NOT NULL,
  `News` text CHARACTER SET utf8 NOT NULL,
  `News_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_id`, `News`, `News_date`) VALUES
(2, 'सेंद्रिय शेती म्हणजे जिवंत पर्यावरणीय रचना आणि जीवनचक्रास समजून घेऊन व रसायनांचा वापर टाळून केलेली एकात्मिक शेती पद्धती होय. सिक्कीम सरकारने २०१५ पर्यंत संपूर्ण राज्य सेंद्रिय शेतीखाली आणण्याचे ध्येय ठरविले आहे.', '2018-07-31 17:52:57'),
(3, 'ठिबक सिंचन म्हणजे पिकांच्या झाडाच्या मुळाशी जमिनीचा दर्जा, पिकांची जात, पिकांचे स्वरूप, बाष्पीभवनाचे प्रमाण लक्षात घेवून नंतर त्यांच्या गरजेपुरत्या पॉलिथीनच्या नळ्याचे जाळे पसरून किंवा लहानशा नळीद्वारे थेंबथेंब किंवा बारीक धारेने पाणी देण्याचा आधुनिक पद्धतीला ठिबक सिंचन म्हणतात.', '2018-07-31 17:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `npk`
--

CREATE TABLE IF NOT EXISTS `npk` (
  `NPK_id` int(11) NOT NULL,
  `NPK_crop_name` varchar(50) NOT NULL,
  `NPK_crop_name_marathi` varchar(100) CHARACTER SET utf8 NOT NULL,
  `PH` varchar(50) NOT NULL,
  `N_value` varchar(50) NOT NULL,
  `N_urea` varchar(50) NOT NULL,
  `P_value` varchar(50) NOT NULL,
  `P_urea` varchar(50) NOT NULL,
  `K_value` varchar(50) NOT NULL,
  `K_urea` varchar(50) NOT NULL,
  `NPK_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `npk`
--

INSERT INTO `npk` (`NPK_id`, `NPK_crop_name`, `NPK_crop_name_marathi`, `PH`, `N_value`, `N_urea`, `P_value`, `P_urea`, `K_value`, `K_urea`, `NPK_date`) VALUES
(1, 'Sugar Cane', 'ऊस', '5-8.5', '40', '87', '85', '531', '85', '181', '2018-08-02 17:33:02'),
(2, 'Grapes', 'द्राक्षे', '3.5-4.5', '250', '542', '115', '719', '115', '191', '2018-08-02 17:33:02'),
(3, 'Orange', 'संत्री', '3.69-4.34', '600', '460', '200', '18', '100', '60', '2018-08-02 17:33:02'),
(4, 'Pomegranate', 'डाळिंब', '6-7.5', '250', '550', '125', '780', '125', '210', '2018-08-02 17:33:02'),
(5, 'Banana', 'केळी', '5.5-6.5', '200', '82', '40', '250', '200', '83', '2018-08-02 17:33:02'),
(6, 'Mongo', 'आंबा', '6-7.5', '6270', '2000', '660', '2000', '9880', '1710', '2018-08-02 17:33:02'),
(7, 'Sapota', 'चिकू', '4-7', '100', '300', '500', '1000', '500', '500', '2018-08-02 17:33:02'),
(8, 'Lemon', 'लिंबू', '2-2.80', '600', '108', '300', '', '600', '', '2018-08-02 17:33:02'),
(9, 'Cashew', 'काजू', '7.35-7.45', '250', '500', '63', '400', '63', '100', '2018-08-02 17:33:02'),
(10, 'Papaya', 'पपई', '6.5-7', '200', '250', '200', '300', '200', '82', '2018-08-02 17:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_id` int(11) NOT NULL,
  `Customer_id` varchar(50) NOT NULL,
  `Product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Product_information` text CHARACTER SET utf8 NOT NULL,
  `Product_photo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Product_rent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Product_labour_charges` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Product_status` varchar(20) NOT NULL DEFAULT 'Available',
  `Product_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Customer_id`, `Product_name`, `Product_information`, `Product_photo`, `Product_rent`, `Product_labour_charges`, `Product_status`, `Product_date`) VALUES
(1, '1', 'sda', 'विद्यार्थ्यांच्या , समाजाच्या ,देशाच्या आणि संपूर्ण विश्वाच्या उज्ज्वल भविष्यासाठी एक सुसंस्कृत, सुशिक्षित आणि प्रगत पिढी निर्माण करण्याची जबाबदारी संपूर्ण शिक्षण प्रक्रियेवर असते.', '158435.jpg', '200', '12', 'Unavailable', '0000-00-00 00:00:00'),
(2, '1', 'मराठी', 'प्रत्येक विद्यार्थ्यामध्ये स्वतःची एक निसर्गदत्त बुद्धिमत्ता असते. हीच बुद्धिमत्ता विकसित होण्यासाठी आणि विद्यार्थ्यांचा सर्वांगीण विकास होऊन एक परीपूर्ण व्यक्तीमत्त्व निर्माण करण्यासाठी वेगवेगळ्या संस्काराची गरज असते. शिक्षणपद्धतीतून शाळा आणि शिक्षक विद्यार्थ्यांना ज्ञान प्रदान करण्याचे कार्य करतात. ', '17767.jpg', '500', '30', 'Available', '2018-07-30 15:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_enquiry`
--

CREATE TABLE IF NOT EXISTS `product_enquiry` (
  `Enquiry_id` int(11) NOT NULL,
  `Product_id` varchar(10) NOT NULL,
  `Customer_id` varchar(50) NOT NULL,
  `En_customer_name` varchar(255) NOT NULL,
  `En_customer_email` varchar(255) NOT NULL,
  `En_customer_mobile` varchar(10) NOT NULL,
  `En_customer_address` text NOT NULL,
  `From_date` varchar(20) NOT NULL,
  `To_date` varchar(20) NOT NULL,
  `No_of_days` varchar(20) NOT NULL,
  `Rent` varchar(20) NOT NULL,
  `Labour_rent` varchar(20) NOT NULL,
  `Total_rent` varchar(20) NOT NULL,
  `En_product_status` varchar(20) NOT NULL DEFAULT 'Booked',
  `En_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_enquiry`
--

INSERT INTO `product_enquiry` (`Enquiry_id`, `Product_id`, `Customer_id`, `En_customer_name`, `En_customer_email`, `En_customer_mobile`, `En_customer_address`, `From_date`, `To_date`, `No_of_days`, `Rent`, `Labour_rent`, `Total_rent`, `En_product_status`, `En_date`) VALUES
(1, '1', '1', 'abc', 'abc@gmail.com', '9876543210', 'Nashik', '2018-07-31', '2018-08-02', '2', '400', '24', '424', 'Cancel', '2018-07-30 17:30:40'),
(2, '2', '1', 'gfhf', 'sa@gmail.com', '9865320147', 'Nashik', '2018-07-30', '2018-07-31', '1', '500', '30', '530', 'Cancel', '2018-07-31 10:51:17'),
(4, '1', '1', 'varsha', 'varsha@gmail.com', '7879454212', 'Nashik', '2018-08-07', '2018-08-09', '2', '400', '24', '424', 'Booked', '2018-08-06 17:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Question_id` int(11) NOT NULL,
  `Question` text CHARACTER SET utf8 NOT NULL,
  `Question_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question_id`, `Question`, `Question_date`) VALUES
(2, 'सोयाबीनच्या पिकासाठी योग्य वेळ कोणती?', '2018-08-01 10:46:58'),
(3, 'माती परीक्षणासाठी किती पैसे लागतील ?', '2018-08-01 10:46:58'),
(4, 'जमीन सुपीक कशी बनवावी ?', '2018-08-04 17:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `question_answer`
--

CREATE TABLE IF NOT EXISTS `question_answer` (
  `Question_answer_id` int(11) NOT NULL,
  `Question_id` varchar(10) NOT NULL,
  `Answer_person_name` varchar(30) NOT NULL,
  `Officer_id` varchar(50) NOT NULL DEFAULT '0',
  `Officer_name` varchar(50) NOT NULL DEFAULT 'Admin',
  `Answer` text CHARACTER SET utf8 NOT NULL,
  `Answer_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_answer`
--

INSERT INTO `question_answer` (`Question_answer_id`, `Question_id`, `Answer_person_name`, `Officer_id`, `Officer_name`, `Answer`, `Answer_date`) VALUES
(2, '2', 'Admin', '0', 'Admin', 'सोयाबीन ची लागवड जुन ते जुलै महिन्यात करावी.', '2018-08-01 11:19:22'),
(4, '2', 'Agriculture Officer', '1', 'Karan', 'सोयाबीन पिकाची उगवण होण्यासाठी जमिनीत पुरेशी ओल असणे आवश्यक आहे त्यासाठी वाफशावर पेरणी करावी तसेच पूर्ण उगवण झाल्यावर गरजेनुसार शक्य असल्यास पाणी द्यावे. पेरणी १५ जून ते १५ जुले दरम्यान करावी. पेरणी ४५ x ५ सें.मी. अंतरावर करावी. पेरणी करताना बियाणे ३-५ सें.मी. पेक्षा जास्त खोल जाणार नाही, याची काळजी घ्यावी.', '2018-08-02 14:35:23'),
(5, '3', 'Admin', '0', 'Admin', 'माती परीक्षण ही शेतजमिनीतील अंगभूत रसायने वा जैविकांचे विश्लेषण होय.याद्वारे शेतात घेण्यात येणारे पीक नक्की करता येते व कमी खर्चात उत्पादनवाढ होते.तसेच याने पीकांना द्यावयाच्या खताची मात्रा पण निश्चित करता येते.त्याने गैरवाजवी खते देण्यावर नियंत्रण येते.याद्वारे शेतातील पिकाचे योग्य नियोजनाने सुमारे दोनपटीपेक्षा जास्त आर्थिक लाभ प्राप्त करता येतो.', '2018-08-04 17:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `Scheme_id` int(11) NOT NULL,
  `Scheme_person_name` varchar(50) NOT NULL,
  `Officer_id` varchar(50) NOT NULL,
  `Officer_name` varchar(50) NOT NULL DEFAULT 'Admin',
  `Scheme_name` text CHARACTER SET utf8 NOT NULL,
  `Scheme_file` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Scheme_file_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Scheme_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`Scheme_id`, `Scheme_person_name`, `Officer_id`, `Officer_name`, `Scheme_name`, `Scheme_file`, `Scheme_file_type`, `Scheme_date`) VALUES
(1, 'Agriculture Officer', '1', 'Karan', 'Pradhan Mantri Fasal Bima Yojana', '376143.pdf', 'application/pdf', '2018-08-02 14:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `soil_report`
--

CREATE TABLE IF NOT EXISTS `soil_report` (
  `Soil_report_id` int(11) NOT NULL,
  `Soil_parameters` varchar(50) NOT NULL,
  `Soil_unit` varchar(50) NOT NULL,
  `Soil_limit_from` varchar(50) NOT NULL,
  `Soil_limit_to` varchar(50) NOT NULL,
  `Soil_limit_average` varchar(50) NOT NULL,
  `Soil_remark` varchar(50) NOT NULL,
  `Soil_remark1` varchar(50) NOT NULL,
  `Soil_remark2` varchar(50) NOT NULL,
  `Soil_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_report`
--

INSERT INTO `soil_report` (`Soil_report_id`, `Soil_parameters`, `Soil_unit`, `Soil_limit_from`, `Soil_limit_to`, `Soil_limit_average`, `Soil_remark`, `Soil_remark1`, `Soil_remark2`, `Soil_date`) VALUES
(1, 'pH', '--', '6.51', '7.5', '6.51-7.5', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(2, 'Electrical Conductivity', 'dSm-1', '0', '1.0', '<1.0', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(3, 'Calcium Carbonate', '%', '1.01', '3.0', '1.01-3.0', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(4, 'Organic Carbon', '%', '1.01', '2.0', '1.01-2.0', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(5, 'Sodium', 'PPM', '0', '1000', '0-1000', 'Less', 'Safe', 'More', '2018-08-03 10:31:33'),
(6, 'Nittrogen', 'PPM', '181', '220', '181-220', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(7, 'Phosphorus', 'PPM', '51', '75', '51-75', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(8, 'Potassium', 'PPM', '451', '600', '451-600', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(9, 'Calcium', 'PPM', '1001', '1500', '1001-1500', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(10, 'Magnesium', 'PPM', '501', '750', '501-750', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(11, 'Sulphur', 'PPM', '21', '50', '21-50', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(12, 'Ferrous', 'PPM', '2.51', '5.00', '2.51-5.00', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(13, 'Manganese', 'PPM', '2.01', '5.00', '2.01-5.00', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(14, 'Zinc', 'PPM', '2.01', '4.00', '2.01-4.00', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(15, 'Copper', 'PPM', '0.41', '1.00', '0.41-1.00', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(16, 'Boron', 'PPM', '0', '0.50', '0-0.50', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(17, 'Molybdenum', 'PPM', '0', '0.50', '0-0.50', 'Less', 'Optimum', 'More', '2018-08-03 10:31:33'),
(18, 'Carbonate', 'PPM', '', '', '', '', '', '', '2018-08-03 10:31:33'),
(19, 'Bi-Carbonate', 'PPM', '', '', '', '', '', '', '2018-08-03 10:31:33'),
(20, 'Chloride', 'PPM', '', '', '', '', '', '', '2018-08-03 10:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `water_report`
--

CREATE TABLE IF NOT EXISTS `water_report` (
  `ater_report_id` int(11) NOT NULL,
  `Water_parameters` varchar(50) NOT NULL,
  `Water_unit` varchar(50) NOT NULL,
  `Water_limits` varchar(50) NOT NULL,
  `Water_limits1` varchar(50) NOT NULL,
  `Water_remark` varchar(50) NOT NULL,
  `Water_remark1` varchar(50) NOT NULL,
  `Water_remark2` varchar(50) NOT NULL,
  `Water_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water_report`
--

INSERT INTO `water_report` (`ater_report_id`, `Water_parameters`, `Water_unit`, `Water_limits`, `Water_limits1`, `Water_remark`, `Water_remark1`, `Water_remark2`, `Water_date`) VALUES
(1, 'pH', '--', '6-7', '6-7', 'Less', 'Optimum', 'Alkali', '2018-08-03 10:41:46'),
(2, 'Electrical Conductivity', 'dSm-1', '1.0', '<1.0', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(3, 'Chloride', 'meq/lit', '3', '<3', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(4, 'Nitrate Nitrogen', '%', '10', '<10', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(5, 'Carbonate', 'meq/lit', 'Absent', 'Absent', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(6, 'Bi-Carbonate', 'meq/lit', '10', '<10', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(7, 'Calcium', 'meq/lit', '3.75', '<3.75', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(8, 'Magnesium', 'meq/lit', '2', '<2', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(9, 'Sodium', 'meq/lit', '2', '<2', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(10, 'Potassium', 'meq/lit', '', '', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(11, 'Mg/ca', '--', '1.5', '<1.5', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46'),
(12, 'S.A.R', '--', '10', '<10', 'Less', 'Optimum', 'More', '2018-08-03 10:41:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agriculture_officer`
--
ALTER TABLE `agriculture_officer`
  ADD PRIMARY KEY (`Officer_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`Crop_id`);

--
-- Indexes for table `crop_calender`
--
ALTER TABLE `crop_calender`
  ADD PRIMARY KEY (`Calender_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_id`);

--
-- Indexes for table `npk`
--
ALTER TABLE `npk`
  ADD PRIMARY KEY (`NPK_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  ADD PRIMARY KEY (`Enquiry_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Question_id`);

--
-- Indexes for table `question_answer`
--
ALTER TABLE `question_answer`
  ADD PRIMARY KEY (`Question_answer_id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`Scheme_id`);

--
-- Indexes for table `soil_report`
--
ALTER TABLE `soil_report`
  ADD PRIMARY KEY (`Soil_report_id`);

--
-- Indexes for table `water_report`
--
ALTER TABLE `water_report`
  ADD PRIMARY KEY (`ater_report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agriculture_officer`
--
ALTER TABLE `agriculture_officer`
  MODIFY `Officer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `Crop_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `crop_calender`
--
ALTER TABLE `crop_calender`
  MODIFY `Calender_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `npk`
--
ALTER TABLE `npk`
  MODIFY `NPK_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_enquiry`
--
ALTER TABLE `product_enquiry`
  MODIFY `Enquiry_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question_answer`
--
ALTER TABLE `question_answer`
  MODIFY `Question_answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `Scheme_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soil_report`
--
ALTER TABLE `soil_report`
  MODIFY `Soil_report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `water_report`
--
ALTER TABLE `water_report`
  MODIFY `ater_report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
