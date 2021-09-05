-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 07:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_basis_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `admin_first_name` varchar(20) NOT NULL,
  `admin_last_name` varchar(20) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_image1` varchar(256) NOT NULL,
  `admin_image2` varchar(256) NOT NULL,
  `admin_designation` varchar(256) NOT NULL,
  `access_level` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_first_name`, `admin_last_name`, `admin_email_address`, `gender`, `admin_password`, `admin_image1`, `admin_image2`, `admin_designation`, `access_level`) VALUES
(1, 'Shuvo', 'Ghose', 'shuvo@gmail.com', 'Male', '81dc9bdb52d04dc20036dbd8313ed055', 'images/admin_images/avatar41.png', 'images/admin_images/full_images/avatar41_thumb.png', 'Web Developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `events_id` int(4) NOT NULL AUTO_INCREMENT,
  `events_title` varchar(50) NOT NULL,
  `events_short_description` varchar(100) NOT NULL,
  `events_long_description` text NOT NULL,
  `events_image` varchar(256) NOT NULL,
  `events_publication_date` varchar(20) NOT NULL,
  `events_publication_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`events_id`, `events_title`, `events_short_description`, `events_long_description`, `events_image`, `events_publication_date`, `events_publication_status`) VALUES
(2, 'xyz', 'fjhjmgfyjgtkjgjmbgm<br>', 'gdcgfxgssgrdsghchfu<br>', 'images/events_images/avatar1.png', '2013-feb-02', 1),
(3, 'First cultural exchange program 2014', 'fhfyjgjhmvnhmvfjy<br>', '<span>Lha''s\r\n first cultural exchange program this year came to a successful \r\nconclusion on May 27. The student group, from Centenary College, \r\nLouisiana, USA, consisted of 10 students lead by Professor David Otto \r\nand Michael Smith.</span>\r\n <p><span>\r\n During the three week program, the students were introduced and paired \r\nwith Lha''s students where they engaged in a mutual learning program. The\r\n Centenary group received lectures from former Tibetan political \r\n prisoners and others.<br></span></p><p><br><span>They\r\n visited the Central Tibetan Administration''s (CTA) complex and the \r\nTibetan library at Gangkyi and learnt about the structure and \r\nfunctioning of the different departments of the CTA. The group went \r\nsightseeing in Dharamshala. </span>\r\n </p><p><span>They\r\n also visited Bir Tibetan settlement, Tsopema and Mandi. On 27th May, we\r\n organized a farewell dinner for the student group, along with their \r\nmutual learning partners in making their last day a memorable one. </span></p>', 'images/events_images/7008164273_70eb04e510_z.jpg', '2013-feb-09', 1),
(4, 'Celebrating World Environment Day', '<span>Today\r\n ( June 5), Lha collaborated.....</span>', '<span>Today\r\n ( June 5), Lha collaborated with the Tibetan Women''s Association (TWA) \r\nand the Clean Upper Dharamsala Programme (CUDP) to observe World \r\nEnvironment Day. </span>\r\n <p><span>The\r\n programme started at 10am, where students from the nearby Dharamshala \r\nCantonment School marched around the market to make the public aware of \r\n the environmental issues.<br></span></p><p><br><span>This\r\n programme was followed by a skit play by Arts Salad. There were around \r\n150 participants, including nearly 100 volunteers, students and staff \r\nmember members of Lha.</span>\r\n </p><p><br><span>We\r\n have distributed brochures on how to manage waste material in three \r\nlanguages: Tibetan, Hindi and English. Today''s project focused on a Mass\r\n Clean-up in three main areas: the Tipa Road while Women''s Association \r\nand Clean Upper Dharamshala have done cleaning at Yongling Campus and \r\nthe Tushita Road and the Yongling School area.</span></p>', 'images/events_images/7008132675_ed82809d0d_z.jpg', '2013-feb-20', 1),
(5, 'Lha Cultural Exchange Groups', 'htdhtdfbgdr<br>', 'Lha hosted two student groups for the Cultural Exchange programme in \r\nSeptember. A group from the School of Social Work at Tulane University \r\nin New Orleans arrived on September 8 for a two week stay, led by Dr \r\nRonald Marks, Professor Carolyn Weaver and Professor Michael Smith.<br>The\r\n second group was from Rustic Pathways, Australia which runs over 90 \r\nprogrammes in 18 countries introducing students to a range of \r\nexperiences "off the beaten track". This group of 12 people arrived in \r\nDharamshala on September 23, led by Divya Parameshwara. <br><br><br>The student groups participated in the mutual learning programme to \r\nexplore the Tibetan community and to learn more about the Tibetan \r\nculture and tradition. They were also introduced to Tibetan Buddhism and\r\n the current political situation in Tibet. The Tulane University group \r\nalso attended a special talk introducing them to Buddhism by Professor \r\nSamdhong Rinpoche, the venerated spiritual leader and former head of the\r\n Tibetan Government-in-Exile, and a well-known advocate of non-violence.<br>', 'images/events_images/6862012538_85a31ec6a7_z.jpg', '2013-feb-02', 1),
(6, 'World AIDS day is observed in Dharamshala', 'On December 1, World AIDS Day....', 'On December 1, World AIDS Day was \r\nobserved in Dharamshala at an event with the theme "Close the gap in HIV\r\n prevention and treatment".\r\nThe event was organised jointly by the \r\nLha Charitable Trust and Kunphen Centre for Substance Dependence, with \r\nDelek Hospital, and started in the main square in Mcleod Ganj with a \r\n"welcome tea". Pamphlets in three languages were distributed along with \r\nribbons, brochures and free condoms for the public. An HIV/AIDS \r\nawareness demonstration took place around the market, manned by \r\nvolunteers with locals eagerly participating. The organizations offered \r\nfree blood tests for HIV/AIDS and hepatitis B which was taken up by 60 \r\npeople and the day finished with an awareness talk at the Tibetan \r\nSettlement Office Hall by Ms Tenzin Dhazay of the Central Tibetan \r\nAdministration''s Department of Health.<br>Overall, more than 800 people took part in the event which was partly sponsored by a Lha volunteer and her family.', 'images/events_images/AIDS.JPG', '2013-feb-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mission`
--

CREATE TABLE IF NOT EXISTS `tbl_mission` (
  `mission_id` int(3) NOT NULL AUTO_INCREMENT,
  `mission_title` varchar(50) NOT NULL,
  `mission_short_description` varchar(200) NOT NULL,
  `mission_long_description` text NOT NULL,
  PRIMARY KEY (`mission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_mission`
--

INSERT INTO `tbl_mission` (`mission_id`, `mission_title`, `mission_short_description`, `mission_long_description`) VALUES
(1, 'Our Mission', 'Our Mission is to bridge gaps in society by uniting youth from diverse \r\nbackgrounds, equipping them with leadership, problem solving and \r\nteamwork skills , and engaging', 'Our Mission is to bridge gaps in society by uniting youth from diverse \r\nbackgrounds, equipping them with leadership, problem solving and \r\nteamwork skills , and engaging..<br>Lha plays a crucial role in facilitating the transition of Tibetan \r\nrefugees from their homeland to the Indian community by providing \r\nlong-term rehabilitation and education resources. Each year programs and\r\n projects are adjusted to meet the conditions and needs of the region, \r\nyet the commitment remains constant: to help the Tibetan people thrive \r\nand prosper in their new home and to preserve their profoundly unique \r\nculture. Additionally, Lha offers volunteers and students the \r\nopportunity to engage in meaningful community service and social work \r\nand also seeks to generate an atmosphere of harmony and cooperation \r\nwithin the community by tending to the needs of the impoverished and \r\nunderprivileged.<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(6) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(50) NOT NULL,
  `news_short_description` varchar(100) NOT NULL,
  `news_long_description` text NOT NULL,
  `news_image` varchar(256) NOT NULL,
  `news_publication_date` varchar(20) NOT NULL,
  `news_publication_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_short_description`, `news_long_description`, `news_image`, `news_publication_date`, `news_publication_status`) VALUES
(12, 'sfsrf', 'efswefe<br>', 'efesfrwf<br>', 'images/news_event_images/avatar18.png', '1211-12-09', 1),
(13, 'efsfsrfsf', 'efewgweherger<br>', 'eegwrtw4er4wr<br>', 'images/news_event_images/avatar19.png', '2015-01-12', 0),
(14, 'tfewrtfegterwgterwgtf', 'ewfergf<br>', 'ergedgdetge<br>', 'images/news_images/avatar21.png', '2014-feb-06', 1),
(15, 'rgwsfewrw', '<span>বিএনপির চেয়ারপারসন খালেদা জিয়ার কার্যালয়ে যাওয়ার ক্ষেত্রে \r\nকড়াকড়ি আরোপ করা হয়েছে। তাঁর', '<p><span>বিএনপির চেয়ারপারসন খালেদা জিয়ার কার্যালয়ে যাওয়ার ক্ষেত্রে \r\nকড়াকড়ি আরোপ করা হয়েছে। তাঁর সঙ্গে দেখা করতে গিয়ে পুলিশের হাতে আটক \r\nহয়ে পরে ছাড়া পান ছাত্রদলের নিহত নেতা নুরুজ্জামান ওরফে জনির পরিবারের \r\nতিন সদস্য। আজ বৃহস্পতিবার রাত সাড়ে আটটার দিকে খালেদা জিয়ার কার্যালয়ের\r\n সামনে থেকে জনির বাবা ইয়াকুব আলী এবং জনির মা ও স্ত্রীকে পুলিশ নিয়ে \r\nযায় বলে প্রত্যক্ষদর্শীরা জানিয়েছেন।</span></p>\r\nগুলশান থানার ডিউটি অফিসার ফেরদৌস প্রথম আলোকে জানান, ওই তিনজনকে \r\nগোয়েন্দা পুলিশ গুলশান থানায় নিয়ে এসেছিল। কিছুক্ষণ পর তাঁদের আবার \r\nছেড়ে দেওয়া হয়।<br>এর আগে খালেদা জিয়ার কার্যালয়ের সামনে থেকে \r\nছাত্রদলের নেত্রী সেলিনা সুলতানাকে পুলিশ আটক করে। এ ছাড়া বিএনপিপন্থী \r\nসাংবাদিক নেতাদের একটি দল খালেদা জিয়ার সঙ্গে দেখা করতে যেতে চাইলে পুলিশ \r\nতাঁদের ঢুকতে দেয়নি।', '', '2015-01-12', 0),
(16, 'abcedhkk', 'drghgrsgs<br>', 'knk.rmgk.je.rgermgl.ejrjglojueljk,sjrf<br>', 'images/news_images/avatar5.png', '2016-01-21', 1),
(17, 'GSMA', 'Welcoming the release of additional spectrum to address the increasing \r\nuse of data services in Ban', 'Welcoming the release of additional spectrum to address the increasing \r\nuse of data services in Bangladesh, the letter requests that the \r\nallocation of new spectrum be “transparent and consistent with \r\ninternational best practices so as to avoid sub-optimal outcome for all \r\nstakeholders concerned.', '', '2016-01-20', 1),
(18, 'Technology', 'One-Third Mobile Users in Bangladesh Have Internet avatar Imdadul Haque on January 29, 2015  Accordi', 'One-Third Mobile Users in Bangladesh Have Internet avatar Imdadul Haque on January 29, 2015  According to the latest BTRC report, the total number of mobile phone subscriptions has reached 120.350 million at the end of December 2014. While the total number of internet subscribers has totaled to 43641.604 thousand, of which which, 42173.982 thousand are mobile internet subscribers.  According to BTRC statistics released yesterday, mobile operators of Bangladesh bagged 42173.982 thousand internet users in the last one month, and the number of mobile internet users has increased to 6 lac 44 thousand 313 from November. The infograph here illustrates the current picture:  infograph 1      Tags     BTRC     Digital Bangladesh     Internet     Telco  Previous Story Up Close And Professional With Shishir Khan Next Story Microsoft Office Specialist Championship Now In Bangladesh! Related Posts img Bangladesh’s Telecom.Professional With Shishir Khan Next Story Microsoft Office Specialist Championship Now In Bangladesh! Related Posts img Bangladesh’s Telecom Revolution: How Much Has BTRC Contributed? img Infograph: One-Third Mobile Users in Bangladesh Hav<br>', '', '2016-feb-20', 1),
(19, 'Survey Report on Lha Soup Kitchen ', 'In June 2013, a survey was given to ......', 'In June 2013, a survey was given to determine how successful the project was, and if any changes should to be made. The findings revealed that Lha was in fact offering beneficial services to people in need of them.\r\n\r\nA second survey with similar, but updated, questions was administered in November 2014. Since providing and educating people about nutritious foods are two of Lha''s major goals for the soup kitchen, a greater focus was placed on nutrition in the 2014 survey. 54 Community Kitchen users completed the survey. It was verified that only 3 of these people also took last year''s survey, so it is not possible to attribute changes in habits to attendance at soup kitchen meals. Changes could result purely from it being a different group of people. Some basic findings were that all users were born in Tibet, a slight majority of 56% were born in Tibet''s Kham province, 76% are between 21 and 40 years old, and more than two thirds are male. Married people (15%), single people (46%), monks (35%), and nuns (4%) all come to Lha''s Community Kitchen. Including nuns and monks, a total of 85% of users are single, and 76% of users live alone, suggesting that most users have little or no financial support beyond their own income, and also that they may have difficulty cooking because they have little or no help.', 'images/news_images/page2_img2.jpg', '2016-feb-20', 1),
(20, 'Lha Dental Care and Clear Vision Project', 'There were 174 people who had .....', 'Lha has been continuously providing Dental and Eye care assistance to the community for the past six years under its Clear Vision Project. The project was started in 2009 with small surplus budget and has benefited over 745 people with 258 free distributions of eye glasses since then.\r\n\r\nThis year Lha has successfully accomplished a Free Dental Care and Eye care program in Bir, District of Mandi, Himachal Pradesh. On 14th November, 2014 around 378 people were benefited in different ways such as Teeth check up, cleaning, take out, Medicine, etc.\r\n\r\nThere were 174 people who had and 23 people who had teeth X-rays, new teeth for 18 people, Teeth cap for 9 people and Braces for 5 people.', 'images/news_images/page2_img3.jpg', '2016-feb-20', 1),
(21, 'Clean Water Project at Geden Choeling Nunnery ', 'Lha is happy to announce that it has....', 'Lha is happy to announce that it has successfully installed the 17th Water Filtration System at Geden Choeling ‪Buddhist‬ Educational Nunnery.\r\n\r\nThe Geden Choeling Buddhist Educational Society is a ‪‎Tibetan ‬Nunnery founded in 1973 in the exiled Tibetan community of Dharamshala, India.\r\nIt is an important centre of Buddhist Studies for nuns and runs under supervision of the Department of Religion and Culture, Central Tibetan Administration. It is considered as the oldest nunnery in exile and at present there are over 170 nuns studying and living the monastic life within its wall.', '', '2016-feb-20', 1),
(22, 'New Exchange student group from USA', 'On 19 Jan, Lha received a group of students from ', 'On 19 Jan, Lha received a group of students from Frostburg State University, Maryland. There were 6 students, 2 professors and a professional film maker. The Group lead by their group leader Mr. Dauglas Bear the Director of Leadership and Experiential Learning at Frostburg State University and Professor Victoria Gearhart.\r\nThe Group met with Ven. Bakdro, an ex-political prisoner on the following day. They were thrilled and deeply touched by his personal stories of inhumane experiences in Chinese prison in Tibet, his escape to India and future plans and commitments to work for the freedom of Tibetan people.', 'images/news_images/7008130805_daa452fffe_z.jpg', '2016-01-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_album`
--

CREATE TABLE IF NOT EXISTS `tbl_photo_album` (
  `album_id` int(4) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(100) NOT NULL,
  `album_image` varchar(256) NOT NULL,
  `album_publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_photo_album`
--

INSERT INTO `tbl_photo_album` (`album_id`, `album_name`, `album_image`, `album_publication_status`) VALUES
(1, 'Youyh Reflection Environment', 'images/album_images/timthumb.php_1.jpg', 1),
(3, 'Clothing Donations', 'images/album_images/timthumb.php_.jpg', 1),
(4, 'Against Hunger', 'images/album_images/th72.jpg', 1),
(5, 'Helping Adults', 'images/album_images/th11.jpg', 1),
(6, 'Youth Reflection Language Class', 'images/album_images/avatar.png', 0),
(7, 'Youth Reflection Volentier', 'images/album_images/hgfhj.jpg', 1),
(8, 'abcd', 'images/album_images/avatar5.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_photo_gallery` (
  `photo_id` int(4) NOT NULL AUTO_INCREMENT,
  `album_id` int(4) NOT NULL,
  `photo_image1` varchar(256) NOT NULL,
  `photo_image2` varchar(256) NOT NULL,
  `photo_publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `tbl_photo_gallery`
--

INSERT INTO `tbl_photo_gallery` (`photo_id`, `album_id`, `photo_image1`, `photo_image2`, `photo_publication_status`) VALUES
(67, 1, 'images/gallery_images/th9.jpg', 'images/gallery_images/gallery_image_thumbnail/th9_thumb.jpg', 1),
(68, 3, 'images/gallery_images/th2.jpg', 'images/gallery_images/gallery_image_thumbnail/th2_thumb.jpg', 1),
(69, 4, 'images/gallery_images/th6.jpg', 'images/gallery_images/gallery_image_thumbnail/th6_thumb.jpg', 1),
(73, 3, 'images/gallery_images/th1.jpg', 'images/gallery_images/gallery_image_thumbnail/th1_thumb.jpg', 1),
(74, 4, 'images/gallery_images/th8.jpg', 'images/gallery_images/gallery_image_thumbnail/th8_thumb.jpg', 1),
(75, 5, 'images/gallery_images/th61.jpg', 'images/gallery_images/gallery_image_thumbnail/th61_thumb.jpg', 1),
(76, 1, 'images/gallery_images/th91.jpg', 'images/gallery_images/gallery_image_thumbnail/th91_thumb.jpg', 1),
(77, 3, 'images/gallery_images/7020309009_00d0b5851d_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7020309009_00d0b5851d_z_thumb.jpg', 1),
(78, 3, 'images/gallery_images/7020306915_a5b40fcb5b_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7020306915_a5b40fcb5b_z_thumb.jpg', 1),
(79, 3, 'images/gallery_images/6880137394_2d09a386a7_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6880137394_2d09a386a7_z_thumb.jpg', 1),
(80, 3, 'images/gallery_images/6880134492_8c8677428b_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6880134492_8c8677428b_z_thumb.jpg', 1),
(81, 3, 'images/gallery_images/6874203726_dc8f605c74_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6874203726_dc8f605c74_z_thumb.jpg', 1),
(82, 3, 'images/gallery_images/6880131932_abbed4abaa_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6880131932_abbed4abaa_z_thumb.jpg', 1),
(83, 1, 'images/gallery_images/6861897230_1282f2e1d8_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6861897230_1282f2e1d8_z_thumb.jpg', 0),
(84, 1, 'images/gallery_images/6861899976_25d228a3ef_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6861899976_25d228a3ef_z_thumb.jpg', 1),
(85, 1, 'images/gallery_images/7008017681_d8c00fe182_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008017681_d8c00fe182_z_thumb.jpg', 1),
(86, 1, 'images/gallery_images/7008018113_2ece917c5f_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008018113_2ece917c5f_z_thumb.jpg', 1),
(87, 1, 'images/gallery_images/7008023795_7559a78d21_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008023795_7559a78d21_z_thumb.jpg', 1),
(88, 1, 'images/gallery_images/7023566869_945abb8e60_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7023566869_945abb8e60_z_thumb.jpg', 1),
(89, 4, 'images/gallery_images/th9.jpg', 'images/gallery_images/gallery_image_thumbnail/th9_thumb.jpg', 1),
(90, 6, 'images/gallery_images/6862012538_85a31ec6a7_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6862012538_85a31ec6a7_z_thumb.jpg', 1),
(91, 6, 'images/gallery_images/7008130805_daa452fffe_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008130805_daa452fffe_z_thumb.jpg', 1),
(92, 6, 'images/gallery_images/7008132675_ed82809d0d_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008132675_ed82809d0d_z_thumb.jpg', 1),
(93, 6, 'images/gallery_images/7008164273_70eb04e510_z.jpg', 'images/gallery_images/gallery_image_thumbnail/7008164273_70eb04e510_z_thumb.jpg', 1),
(94, 7, 'images/gallery_images/6845789706_4e7f334a26_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845789706_4e7f334a26_z_thumb.jpg', 1),
(95, 7, 'images/gallery_images/6845790208_1fba16441b_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845790208_1fba16441b_z_thumb.jpg', 1),
(96, 7, 'images/gallery_images/6845790490_2c9f33c4de_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845790490_2c9f33c4de_z_thumb.jpg', 1),
(97, 7, 'images/gallery_images/6845790490_2c9f33c4de_z1.jpg', 'images/gallery_images/gallery_image_thumbnail/6845790490_2c9f33c4de_z1_thumb.jpg', 1),
(98, 7, 'images/gallery_images/6845792408_c6520a7289_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845792408_c6520a7289_z_thumb.jpg', 1),
(99, 7, 'images/gallery_images/6845821750_a35e460726_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845821750_a35e460726_z_thumb.jpg', 1),
(100, 7, 'images/gallery_images/6845824464_1d888879d6_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6845824464_1d888879d6_z_thumb.jpg', 1),
(101, 7, 'images/gallery_images/6991918401_9f2310af8b_z.jpg', 'images/gallery_images/gallery_image_thumbnail/6991918401_9f2310af8b_z_thumb.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `project_id` int(5) NOT NULL AUTO_INCREMENT,
  `project_category_id` int(4) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `project_short_description` varchar(100) NOT NULL,
  `project_long_description` text NOT NULL,
  `project_date` varchar(20) NOT NULL,
  `project_image1` varchar(256) NOT NULL,
  `project_image2` varchar(256) NOT NULL,
  `project_publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`project_id`, `project_category_id`, `project_title`, `project_short_description`, `project_long_description`, `project_date`, `project_image1`, `project_image2`, `project_publication_status`) VALUES
(20, 1, 'Vivamuagna', 'Viva Magna Wheelers Private Limited is a Private Company \r\nincorporated on&nbsp; <br>', 'Viva Magna Wheelers Private Limited is a Private Company \r\nincorporated on 23 February 2010. It is classified as Indian \r\nNon-Government Company and is registered at Registrar of Companies, \r\nBangalore. Its authorized share capital is Rs. 150,000,000 and its paid \r\nup capital is Rs. 106,889,000.', '2014-Jan-01', 'images/project_images/Feast_of_the_Three_Saints.jpg', 'images/project_images/image_thumbnail/Feast_of_the_Three_Saints_thumb.jpg', 1),
(21, 1, 'Health and Nutration', '<b>Health</b> is the level of functional or <a href="http://en.wikipedia.org/wiki/Metabolic" title="', '<b>Health</b> is the level of functional or <a href="http://en.wikipedia.org/wiki/Metabolic" title="Metabolic" class="mw-redirect">metabolic</a> efficiency of a living organism. In <a href="http://en.wikipedia.org/wiki/Human" title="Human">humans</a> it is the ability of individuals or communities to adapt and self-manage when facing physical, mental or social challenges.<sup id="cite_ref-1" class="reference"><a href="http://en.wikipedia.org/wiki/Health#cite_note-1"><span>[</span>1<span>]</span></a></sup> The <a href="http://en.wikipedia.org/wiki/World_Health_Organization" title="World Health Organization">World Health Organization</a> (WHO) defined health in its broader sense in its 1948 constitution as "a state of complete physical, mental, and social <a href="http://en.wikipedia.org/wiki/Well-being" title="Well-being">well-being</a> and not merely the absence of disease or infirmity."<a href="http://en.wikipedia.org/wiki/Health#cite_note-WHO_definition-2"><span></span></a>', '2014-Mar-01', 'images/project_images/health.jpg', 'images/project_images/image_thumbnail/health_thumb.jpg', 1),
(22, 4, 'Treatment', '<span class="st"><em>Treatment</em> may refer to: Health or well-being: Medical <em>treatment</em> i', '<span class="st"><em>Treatment</em> may refer to: Health or well-being: Medical <em>treatment</em> i.e., medical case management · Therapy for any impairment; Pain management. A particular</span>', '2014-Sep-01', 'images/project_images/health1.jpg', 'images/project_images/image_thumbnail/health1_thumb.jpg', 0),
(23, 3, 'Youth Community Soup Kitchen ', '<strong>Lha is currently seeking funds to\r\n support....</strong>', '<strong>Lha is currently seeking funds to\r\n support the full operation of its Community Soup Kitchen initiative for\r\n the duration of one year and to support the development and \r\nimplementation of a self-sustainability plan for the project.&lt;br&gt;</strong>\r <p >High numbers of refugees living in \r\npoverty result in a large scale inability to buy nutritiously dense \r\nfood. This contributes to increased incidences of chronic lifestyle \r\ndiseases, such as type 2 diabetes, gastritis, liver cirrhosis, heart \r\ndisease, and hypertension.<strong>&lt;br&gt;</strong></p>\r <p >According to a 2009 Census, 44% of \r\nTibetans living in Dharamsala and surrounding settlements suffer from \r\none of these chronic lifestyle diseases.<strong>&lt;br&gt;</strong></p>\r <p >The Lha Community Soup Kitchen will \r\nalleviate cases of malnutrition in Dharamsala by offering nutritious, \r\nlow-cost or free meals to 40-50 Tibetan refugees daily. So far 156 needy\r\n people have benefited from the Soup kitchen project in the last two \r\nyears, since its inception.<strong>&lt;br&gt;</strong></p>\r <p >In addition, Lha will empower refugees \r\nto make healthy choices about the food they eat by offering nutrition \r\neducation classes at the soup kitchen.<strong>&lt;br&gt;</strong></p>\r <p >Furthermore, by starting a job training \r\nprogram to assist refugees in obtaining employment in the service or \r\nrestaurant sector, Lha will simultaneously combat unemployment in this \r\ncommunity.<strong>&lt;br&gt;</strong></p>\r <p >In June 2013 a survey of 47 users of the\r\n community soup kitchen was administered in order to assess the \r\neffectiveness of the services being provided. 46 of the 47 respondents \r\nidentified as being unemployed and only 6 (13%) of those surveyed \r\nreceive any kind of financial support from friends or family.<strong>&lt;br&gt;</strong></p>', '2014-Jan-06', 'images/project_images/Feast_of_the_Three_Saints1.jpg', 'images/project_images/image_thumbnail/Feast_of_the_Three_Saints1_thumb.jpg', 1),
(24, 1, ' Clear Vision Project ', 'Summary of Lha''s Health and Hygiene', 'Summary of Lha''s Health and Hygiene Services– Eye Testing Project\r\n<br>&lt;br&gt;<br>\r\nIn September 2009, Lha took a small budget surplus and decided to \r\nimplement a free eye testing program to all residents in Mcleod Ganj, \r\nboth Tibetan refugees and the local Indian population. This decision was\r\n sparked by feedback from the refugee community, many of whom had \r\ncomplained of eye sight problems.\r\n&lt;br&gt;<br><br>\r\nThrough working in conjunction with a local eye doctor, who performed \r\npreliminary testing at Lha''s office, a doctor at Delek Hospital, who \r\nperformed more detailed testing, and an optometrist, who prepared \r\nprescriptions for those who required glasses, Lha was able to provide \r\nprescription glasses to a total of 145 people in need.\r\n&lt;br&gt;<br><br>\r\nSuch was the demand for this new service, Lha''s budget ran out within a \r\nmonth. Those that had their eyes tested and received glasses were very \r\nhappy with the outcome. Many wonderful comments were received about how \r\nmuch people''s lives had improved by having their poor vision corrected.&lt;br&gt;', '2014-Jan-01', 'images/project_images/1797948_10205973789689818_2882458517602836741_n1.jpg', 'images/project_images/image_thumbnail/1797948_10205973789689818_2882458517602836741_n1_thumb.jpg', 1),
(25, 2, ' Contact Magazine Project ', '<strong>Lha currently seeks funds to </strong>', '<p ><strong>Lha currently seeks funds to ensure continued success of its grassroots ''contact magazine''.</strong></p>\r <p >To further support its organizational objectives Lha Charitable Trust also offers Tibetans in exile a free press – <a href="http://www.contactmagazine.net">Contact Magazine</a>.</p>\r <p >Contact, a grassroots monthly magazine \r\nin publication for over 14 years, is an important source of \r\ninternational and local news, information on Tibetan issues, upcoming \r\nevents in Dharamsala, local resources and volunteer opportunities.</p>\r <p >Contact is a registered and recognized \r\nby the Office of the Registrar of Newspapers for India, Ministry of \r\nInformation and Broadcast, Government of India. The registration number \r\nof Contact is HPENG/2013/51798.</p>\r <p >Most importantly, the magazine invites \r\nsubmissions from Tibetans, Indians, and foreign travelers, providing a \r\nplatform which enables the community to share views and opinions in an \r\nopen and creative way. For the Tibetan people living in exile, the \r\nmagazine allows them to exercise the basic human right of freedom of \r\nspeech.</p>\r <p >The magazine is free and is available in\r\n a paper format, a digital on-line format, and on Facebook. Due to its \r\ndiverse readership, Contact Magazine raises awareness of the \r\nmultidimensional issues faced by the Tibetan people, both those living \r\nwithin their homeland, and in exile. You can visit the website at \r\nhttp://contactmagazine.net/.</p>', '2014-Feb-01', 'images/project_images/avatar044.png', 'images/project_images/image_thumbnail/avatar044_thumb.png', 1),
(26, 16, 'Clean Water Project ', '<strong>To help achieve its \r\norganizational....</strong>', '<strong>To help achieve its \r\norganizational objectives Lha is seeking funds to complete its clean \r\nwater project which focusses on the provision of clean drinking water at\r\n identified areas of need in Dharamsala.<br></strong>\r\n <p>Whilst Dharamsala receivers the second \r\nhighest rainfall in India, the community suffers from the effects of \r\nboth polluted drinking water and water shortages. This is due to \r\ninadequate water storage facilities and outdated drainage and septic \r\nsystems which are simply overwhelmed by heavy monsoon rains.<br></p>\r\n <p>The large numbers of refugees living in \r\npoverty means that they are forced to rely on India''s inadequate public \r\nwater system. According to a 2009 survey, 94% of Tibetan refugees drink \r\ntap water because few can afford to regularly buy filtered water.<br></p>\r\n <p>Illnesses caused by contaminated \r\ndrinking water include chronic gastro intestinal problems (including \r\nextreme diarrhea), with typhoid and cholera also regularly reported in \r\nthe Tibetan refugee community. These illnesses can all prove to be \r\nfatal.<br></p>\r\n <p>Contaminated water is not only being \r\nused for drinking but also for cooking, thus exacerbating pre-existing \r\nnutritional issues and adding to a low level of health within the \r\ncommunity. Furthermore, these health issues mean that many children are \r\nunable to attend school and adults are unable to go to work, which adds \r\nto the challenges faced by the refugee community on a day to day basis.<br></p>', '2014-Jan-01', 'images/project_images/AIDS1.JPG', 'images/project_images/image_thumbnail/AIDS1_thumb.JPG', 1),
(27, 17, ' HIV Initiative Project', '<span>Tibetans in exile are categorised \r\nas a high risk group for HIV infection due to high mobili<', '<span>Tibetans in exile are categorised \r\nas a high risk group for HIV infection due to high mobility, lack of \r\nawareness of the disease. According to the Central Tibetan \r\nAdministration''s (CTA) Demographic survey of Tibetans in Exile 2009, \r\nalmost 15% of the total working population engages in the sweater \r\nselling activities (seasonal street vendors)—most of whom travel to \r\nurban areas alone and are separated from their families for several \r\nmonths out of the year.<br></span>\r\n <p>Although no formal study has been \r\nconducted to determine the risk factors amongst Tibetan male refugees, \r\nit is highly speculated that they are at risk of exposure to HIV due to \r\nengaging in unprotected sex with commercial sex workers. HIV prevalence \r\namongst commercial sex workers in India is significantly high according \r\nto the World Health Organization. Data on the HIV/AIDS situation in \r\nTibetan communities in exile is limited, however according to the CTA \r\nDepartment of Health data of 2010, 130 cases have been reported in \r\n individuals in exile. In Tibet, as of 2009, 103 cases were suspected.<span><br></span></p>\r\n <p>Lha Charitable Trust intends to tackle \r\nthe problem and raise awareness in the community to help reduce the \r\nincidence of HIV/AIDS in Tibetan communities living in exile. This will \r\nbe achieved through a multi-levelled education and awareness programme \r\nwhich we will begin in the local community of Dharamsala and extend \r\nacross other Tibetan settlements throughout India. To maximise the \r\nproject''s impact and efficiency, we are hoping to coordinate with the \r\nstructures and organisations that are already in place such as schools, \r\ndrug services and other community organisations such as monasteries and \r\n women''s associations.<span><br></span></p>', '2014-Feb-01', 'images/project_images/AIDS.JPG', 'images/project_images/image_thumbnail/AIDS_thumb.JPG', 1),
(28, 16, 'abcd', 'cvgnfvhjvj<br>', 'fgncgnfghcnv hmv<br>', '2014-Feb-01', 'images/project_images/timthumb.php_.jpg', 'images/project_images/image_thumbnail/timthumb.php__thumb.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_category`
--

CREATE TABLE IF NOT EXISTS `tbl_project_category` (
  `project_category_id` int(4) NOT NULL AUTO_INCREMENT,
  `project_category_name` varchar(100) NOT NULL,
  `project_category_description` text NOT NULL,
  `project_category_image` varchar(256) NOT NULL,
  `project_category_publication_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`project_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_project_category`
--

INSERT INTO `tbl_project_category` (`project_category_id`, `project_category_name`, `project_category_description`, `project_category_image`, `project_category_publication_status`) VALUES
(1, 'Against Hunger', '<br>', 'images/project_category_images/th9.jpg', 1),
(2, 'Educated World', '<br>', 'images/project_category_images/th8.jpg', 1),
(3, 'Invest in Kids', '<br>', 'images/project_category_images/th6.jpg', 1),
(4, 'Saving Lives', '<br>', 'images/project_category_images/th5.jpg', 1),
(5, 'Homes for veterans', '<br>', 'images/project_category_images/th4.jpg', 0),
(16, 'Helping Children', '<br>', 'images/project_category_images/th2.jpg', 1),
(17, 'Helping Adults', '<br>', 'images/project_category_images/th1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_email_address` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(15) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_image1` varchar(256) NOT NULL,
  `user_image2` varchar(256) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_first_name`, `user_last_name`, `user_email_address`, `user_password`, `date_of_birth`, `gender`, `address`, `country`, `city`, `zip_code`, `activation_status`, `user_image1`, `user_image2`, `about`) VALUES
(10, 'Fahim', 'Ashfak', 'aaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234-02-12', 'male', 'drgesfes', 'AZ', 'ree', 'hj', 1, 'images/member_images/avatar61.png', 'images/member_images/full_imagesavatar61_thumb.png', ''),
(13, 'Shuvo', 'Ashfak', 'abc@gmail.com', '2e99bf4e42962410038bc6fa4ce40d97', '1234-10-09', 'female', 'aefdase', 'select', 'dhaka', '1210', 1, 'images/member_images/avatar32.png', 'images/member_images/full_imagesavatar32_thumb.png', ''),
(14, 'dzczsd', 'Ashfak', 'adc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2110-02-12', 'male', 'aefdase', 'select', 'sdfsd', '1234', 1, 'images/member_images/avatar41.png', 'images/member_images/full_imagesavatar41_thumb.png', ''),
(17, 'dsfsdesf', 'Ashfak', 'shuvo@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'male', 'aefdase', 'select', 'ree', '1234', 1, 'images/member_images/avatar0415.png', 'images/member_images/full_imagesavatar0415_thumb.png', ''),
(24, 'dzczsd', 'Ghose', 'xyz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-01-02', 'male', 'dsgsrgsrgefen,jamdnaes,jdhkacnabs mdcbakdbca,dbcmadbca', 'AL', 'dhaka', '1234', 1, 'images/member_images/avatar212.png', 'images/member_images/full_imagesavatar212_thumb.png', ''),
(25, 'Subho', 'Ghose', 'sky@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '5566-03-12', 'm', 'aefdase', 'GB', 'Dhaka', '1210', 1, '', '', ''),
(26, 'dsfsdesf', 'Ashfak', 'asd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1212-02-12', 'm', 'dsgsrgsrgefen,jamdnaes,jdhkacnabs mdcbakdbca,dbcmadbca', 'GB', 'kj', '1234', 1, '', '', ''),
(27, 'dzczsd', 'Ashfak', 'fff@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', 'm', 'aefdase', 'AG', 'dhaka', 'hj', 1, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
