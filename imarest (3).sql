-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2016 at 12:23 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imarest`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id_careers` int(11) NOT NULL,
  `judul_careers` varchar(100) NOT NULL,
  `isi_careers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id_careers`, `judul_careers`, `isi_careers`) VALUES
(2, 'dsfd', '<p>fsfsfdsdfds</p>\r\n'),
(3, 'test', '<p>he&nbsp;<strong>ZGMF-X20A Strike Freedom Gundam</strong>&nbsp;(aka&nbsp;<strong>Strike Freedom</strong>,&nbsp;<strong>Freedom</strong>) is the successor&nbsp;<a href="http://gundam.wikia.com/wiki/Mobile_suit">mobile suit</a>&nbsp;of the<a href="http://gundam.wikia.com/wiki/ZGMF-X10A_Freedom">ZGMF-X10A Freedom</a>. Appearing in&nbsp;<em><a href="http://gundam.wikia.com/wiki/Mobile_Suit_Gundam_SEED_Destiny">Mobile Suit Gundam SEED Destiny</a></em>, it is piloted by&nbsp;<a href="http://gundam.wikia.com/wiki/Kira_Yamato">Kira Yamato</a>.</p>\r\n\r\n<h2 style="font-style:inherit">Contents</h2>\r\n\r\n<p>[<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#">show</a>]</p>\r\n\r\n<h2>Technology &amp; Combat Characteristics</h2>\r\n\r\n<p>A mobile suit tuned to meet&nbsp;<a href="http://gundam.wikia.com/wiki/Kira_Yamato">Kira Yamato</a>&#39;s needs, Strike Freedom has&nbsp;<a href="http://gundam.wikia.com/wiki/Phase_Shift_Armor#Variable_Phase_Shift_Armor">Variable Phase Shift Armor</a>&nbsp;and like its predecessor,&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X10A_Freedom">Freedom</a>, is primarily armed with powerful ranged weapons&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-MG_manual-0">[1]</a>. It armaments includes head-mounted CIWS, an abdomen-mounted multi-phase beam cannon, hip-mounted rail cannons, combine-able beam sabers and beam rifles, DRAGOON pods controlled by the new Super<a href="http://gundam.wikia.com/wiki/DRAGOON">DRAGOON system</a>&nbsp;and beam shields. It is also equipped with &quot;<a href="http://gundam.wikia.com/wiki/Voiture_Lumiere">Voiture Lumiere</a>&quot; propulsion system,&nbsp;<a href="http://gundam.wikia.com/wiki/Neutron_Jammer_Canceller">Neutron Jammer Canceller</a>&nbsp;and powered by the new&nbsp;<a href="http://gundam.wikia.com/wiki/Hyper-Deuterion_Engine">Hyper-Deuterion Engine</a>.</p>\r\n\r\n<p>Strike Freedom&#39;s design focuses on mobility rather than armor strength as Kira is rarely hit, and as the beam shields can overcome the defensive fragility. As a result, the armor is split into smaller pieces to improve the movement range of the joints (a similar armor-splitting system was also implemented in&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X42S_Destiny_Gundam">ZGMF-X42S Destiny Gundam</a>). To compensate for exposing more of its internal parts, the suit&#39;s internal skeleton also has PS armor. When the internal skeleton phase-shift, the unit possess near human flexibility and through its glowing effect, is able to discharge excess residual energy within the body through the joints. This internal PS armor also helps to withstand the high output and Gs caused by Hyper Deuterion and the new propulsion system, playing a role in increasing Strike Freedom&#39;s mobility. However, the main contributor to the MS&#39;s superior mobility is the mobile weapon wings, which can be deployed in the &quot;High Mobility Aerial Tactics (HiMAT) Mode&quot; to enhance the suit&#39;s mobility in the atmosphere or in space.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-1">[2]</a>&nbsp;The wings also features a variant of the &quot;Voiture Lumiere&quot; propulsion system, which can generate a visual effect called the &quot;Wings of the Skies&quot; similar to&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X42S_Destiny">ZGMF-X42S Destiny</a>&#39;s Wings of Light and is used as a means of high speed movement.</p>\r\n\r\n<p>Like the latest&nbsp;<a href="http://gundam.wikia.com/wiki/DRAGOON">DRAGOON system</a>&nbsp;deployed by ZAFT, Strike Freedom&#39;s Super DRAGOON system can be used by pilots lacking enhanced spatial awareness. The system has also been further enhanced by Terminal and thanks to the DRAGOONs, Kira Yamato is now able to more freely position Strike Freedom&#39;s weapons in various angles and engage multiple targets from multiple directions if needed to. This is a considerable improvement over the Freedom&#39;s single forward-direction attacking, now giving the Strike Freedom a full 360 degree attack range.</p>\r\n\r\n<p>Like the Freedom, Strike Freedom is design to operate alongside another mobile suit, in this case, the &infin; Justice and is stationed on board the warship Eternal. The suit also has full flight capabilities in the atmosphere, and is equipped with Freedom&#39;s Multi Lock-On System, Full Burst Mode, as well as the ability to dock with the&nbsp;<a href="http://gundam.wikia.com/wiki/Mobile_suit_Embedded_Tactical_EnfORcer">METEOR</a>&nbsp;weapon system to augment its already impressive firepower.</p>\r\n\r\n<h2>Armaments</h2>\r\n\r\n<ul>\r\n	<li>MMI-GAU27D 31mm CIWS</li>\r\n</ul>\r\n\r\n<p>Mounted in the head, the pair of CIWS guns are mainly used to shoot down incoming missiles and enemy units at close range. Originally, the weapon is supposed to be omitted due to a lack of space in the head unit. However, they are installed in the end due to their effectiveness and reliability.</p>\r\n\r\n<ul>\r\n	<li>EQFU-3X Super DRAGOON Mobile Weapon Wing &amp; MA-80V Beam Assault Cannon</li>\r\n</ul>\r\n\r\n<p>The DRAGOON system is the Strike Freedom&#39;s newest feature and two DRAGOON pods, each with one MA-80V beam assault cannon, are stored on each of the 8 wings. Besides functioning as a ranged weapon, the beam cannon can also generate a beam blade at its tip. The Strike Freedom&#39;s DRAGOONs do not require pilots with a high degree of spatial awareness to effectively control them due to the use of an improved quantum communication system among other modifications. The DRAGOONs can be used in group formations for multiple barrages, or used with other of the suit&#39;s weaponry to shoot down enemy ships or mobile suits.</p>\r\n\r\n<ul>\r\n	<li>MA-M02G &quot;Super Lacerta&quot; Beam Saber</li>\r\n</ul>\r\n\r\n<p>The suit&#39;s main close combat weapon, a pair of them are stored on the &quot;Xiphias 3&quot; Rail Cannons. They are also used by &infin; Justice, and are enhanced version of the ones used by Justice and Freedom. The two beam sabers can be combined into a twin-edged beam saber, and this form is known as &#39;Ambidextrous Halberd&#39;. Kira however prefers to dual wield the sabers rather than combine them.</p>\r\n\r\n<ul>\r\n	<li>MA-M21KF High Energy Beam Rifles</li>\r\n</ul>\r\n\r\n<p>Developed based on the Freedom Gundam&#39;s MA-M20 &quot;Lupus&quot; high-energy beam rifle, the two MA-M21KF high-energy beam rifles used by Strike Freedom can combine to form one long-range beam rifle, in a manner similar to that of the&nbsp;<a href="http://gundam.wikia.com/wiki/GAT-X103_Buster">GAT-X103 Buster</a>&#39;s main weapons. As such, the rifles can be used to hit enemy units in various range and Kira&#39;s habit of taking out multiple targets at once is also enhanced with the use of two beam rifles instead of one. The rifles are stored on the sides of the waist and can be swivelled to the back when the &quot;Xiphias 3&quot; rail cannons are used.</p>\r\n\r\n<ul>\r\n	<li>MGX-2235 &quot;Calidus&quot; Multi-Phase Beam Cannon</li>\r\n</ul>\r\n\r\n<p>Mounted on the lower part of the torso, this multi-phase beam cannon is the same type as the one used by<a href="http://gundam.wikia.com/wiki/ZGMF-X31S_Abyss_Gundam">ZGMF-X31S Abyss Gundam</a>. However, its firepower is higher due to the Strike Freedom&#39;s Hyper-Deuterion Engine. The beam it fires is the strongest among the suit&#39;s beam weaponry and is capable of cancelling out Destiny&#39;s long-range beam cannon attack.</p>\r\n\r\n<ul>\r\n	<li>MMI-M15E &quot;Xiphias 3&quot; Rail Cannon</li>\r\n</ul>\r\n\r\n<p>The two &quot;Xiphias 3&quot; rail cannons mounted on the suit&#39;s waist are upgraded version of the &quot;Xiphias&quot; rail cannons of the original Freedom, they are more powerful and have a simplified structure. Like their predecessor, the &quot;Xiphias 3&quot; can also be used to attack enemy units in the water, which gives the Strike Freedom a quite efficient way to fight underwater MS and vessels. The only problem with the rail cannons is that they cannot be used when they are swapped to the back of the waist to make room for storing the MA-M21KF high energy beam rifles.</p>\r\n\r\n<ul>\r\n	<li>MX2200 Beam Shield</li>\r\n</ul>\r\n\r\n<p>Strike Freedom has a beam shield generator on each of its forearms. The beam shield can effectively block most beam and physical attacks, but can fluctuate if the attacks are too powerful. Kira Yamato was seen using the Strike Freedom&#39;s beam shields both defensive, such as when blocking Destiny&#39;s beam sword, and offensive, by ramming them at Legend&#39;s torso.</p>\r\n\r\n<ul>\r\n	<li><a href="http://gundam.wikia.com/wiki/Mobile_suit_Embedded_Tactical_EnfORcer">METEOR unit</a></li>\r\n</ul>\r\n\r\n<p>Like its predecessor, Freedom, Strike Freedom can dock with the METEOR unit, a large mobile weapons platform with powerful thrusters and an even more powerful armament of battleship-caliber beam cannons, large beam swords, and dozens of heavy missile launchers.</p>\r\n\r\n<h2>Special Equipment and Features</h2>\r\n\r\n<ul>\r\n	<li>High-Mobility Aerial Tactics (HiMAT) Mode</li>\r\n</ul>\r\n\r\n<p>A configuration in which Strike Freedom&#39;s 8 wings are unfolded for higher maneuverability during aerial combat. When in space, the deployment of the wings can enhance Strike Freedom&#39;s AMBAC capabilities.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-RG_manual-2">[3]</a></p>\r\n\r\n<ul>\r\n	<li>Multi Lock-On System</li>\r\n</ul>\r\n\r\n<p>As implied by its name, this unique system allows Strike Freedom to target multiple enemies and attack them at once. To use this system effectively, the pilot must have high spatial awareness capability, which is rare even among Coordinators.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-RG_manual-2">[3]</a>&nbsp;This system can also be used when Strike Freedom docked with the METEOR unit.</p>\r\n\r\n<ul>\r\n	<li>Full Burst Mode</li>\r\n</ul>\r\n\r\n<p>The name of the attack mode in which Strike Freedom uses its beam rifles, DRAGOONs, rail cannons and multi-phase beam cannon all at once.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-RG_manual-2">[3]</a>&nbsp;This mode is also present in Freedom Gundam and is often used together with the Multi Lock-On System to destroy a large amount of enemy units at once. Thanks to the DRAGOONs, the Strike Freedom&#39;s Full Burst Mode has a larger firing range than the Freedom&#39;s, granting it a full 360 degree range of attack capability. However, on Earth, the DRAGOONs are not usable, making Strike Freedom&#39;s Full Burst Mode similar to the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X10A_Freedom_Gundam">Freedom</a>&#39;s.</p>\r\n\r\n<ul>\r\n	<li>Voiture Lumiere</li>\r\n</ul>\r\n\r\n<p>A variant of the &quot;Voiture Lumiere&quot; propulsion system is mounted in Strike Freedom&#39;s wings. It can be used even when the DRAGOON Pods are still attached to the wings, by slightly seperating the DRAGOONs from main wings, without fully deploying them. The propulsion system operates at full power when all the DRAGOONs are fully deployed.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-MG_manual-0">[1]</a>&nbsp;When activated, the system forms beam wings known as &quot;Wing of the Skies&quot;, similar to those of the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X42S_Destiny">Destiny</a>&nbsp;&quot;Wings of Light&quot;, allowing it to accelerate at incredible rate and to quickly dodge the most intense enemy beam barrages.</p>\r\n\r\n<ul>\r\n	<li><a href="http://gundam.wikia.com/wiki/Hyper-Deuterion_Engine">Hyper-Deuterion Engine</a></li>\r\n</ul>\r\n\r\n<p>Like the other new Gundams, the Strike Freedom is powered by a hyper-deuterion engine, a fusion of a nuclear reactor with deuterion conversion technology, granting it nearly infinite operation time and enough power to use both the METEOR unit, and the Variable Phase Shift armor.</p>\r\n\r\n<ul>\r\n	<li><a href="http://gundam.wikia.com/wiki/Neutron_Jammer_Canceller">Neutron Jammer Canceller</a></li>\r\n</ul>\r\n\r\n<p>A device built into the mobile suit to counter the effects of ZAFT&#39;s&nbsp;<a href="http://gundam.wikia.com/wiki/Neutron_Jammer">Neutron Jammers</a>. This gives the Strike Freedom the ability to use its Hyper-Deuterion Engine without the risk of being shut down.</p>\r\n\r\n<ul>\r\n	<li>Operating System</li>\r\n</ul>\r\n\r\n<p>The Strike Freedom uses the&nbsp;<a href="http://gundam.wikia.com/wiki/Mobile_Suit_Operation_System"><strong>G</strong>eneration&nbsp;<strong>U</strong>nsubdued&nbsp;<strong>N</strong>uclear&nbsp;<strong>D</strong>rive&nbsp;<strong>A</strong>ssault&nbsp;<strong>M</strong>odule complex</a>&nbsp;operating system.</p>\r\n\r\n<ul>\r\n	<li><a href="http://gundam.wikia.com/wiki/Phase_Shift_Armor#Variable_Phase_Shift_Armor">Variable Phase Shift Armor</a></li>\r\n</ul>\r\n\r\n<p>An improved version of&nbsp;<a href="http://gundam.wikia.com/wiki/Phase_Shift_Armor">Phase Shift Armor</a>, VPS armor is capable of automatically changing its strength, as well as color and power consumption in the field, although this must be programmed beforehand.</p>\r\n\r\n<h2>History</h2>\r\n\r\n<p>The direct successor of the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X10A_Freedom_Gundam">ZGMF-X10A Freedom Gundam</a>, the Strike Freedom was originally built by ZAFT as a prototype machine for eventual mass-production.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-MG_manual-0">[1]</a>&nbsp;Development itself, which had started in the same time period as its predecessor, was behind schedule and could not be completed in time due to technical limitations in developing the DRAGOON System. Further more, development was influenced by the&nbsp;<a href="http://gundam.wikia.com/wiki/Bloody_Valentine_War#Treaty_of_Junius_Seven">Junius Treaty</a>&nbsp;and data regarding existing development on the unit, was to be sealed. It remained an incomplete unit with the outbreak of the&nbsp;<a href="http://gundam.wikia.com/wiki/Second_Bloody_Valentine_War">Second Bloody Valentine War</a>. However, the design data(or perhaps the incomplete unit) was stolen by&nbsp;<a href="http://gundam.wikia.com/wiki/Terminal">Terminal</a>, who also deleted the data from the ZAFT Integrated Design Bureau&#39;s servers.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-3">[4]</a>Redevelopment of the Strike Freedom&#39;s was carried out by Terminal, based on the operational data of the Freedom. In fact, Strike Freedom is redesigned and modified on the basis that it will become Kira&#39;s personal MS. It also incorporated the latest MS technology from both ZAFT and Terminal.<a href="http://gundam.wikia.com/wiki/ZGMF-X20A_Strike_Freedom_Gundam#cite_note-4">[5]</a></p>\r\n\r\n<p>The Strike Freedom made its on-screen debut in&nbsp;<a href="http://gundam.wikia.com/wiki/Cosmic_Era">CE</a>&nbsp;74, when Kira boarded the&nbsp;<a href="http://gundam.wikia.com/wiki/Support_ship_Eternal"><em>Eternal</em></a>&nbsp;in a damaged&nbsp;<a href="http://gundam.wikia.com/wiki/MBF-02_Strike_Rouge">MBF-P02+AQM/E-X01 Aile Strike Rouge</a>&nbsp;after coming to the aid of&nbsp;<a href="http://gundam.wikia.com/wiki/Andrew_Waltfeld">Andrew Waltfeld</a>&nbsp;and then launched in the Strike Freedom to defend the ship from a ZAFT attack force. Kira, with the Strike Freedom, successfully disabled 25<a href="http://gundam.wikia.com/wiki/ZGMF-1000_ZAKU_Warrior">ZAKUs</a>&nbsp;and&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X2000_GOUF_Ignited">GOUFs</a>&nbsp;within two minutes and then proceeded to disable three&nbsp;<em><a href="http://gundam.wikia.com/wiki/Nazca_class_destroyer">Nazca class destroyers</a></em>.</p>\r\n\r\n<p>When it arrived on Earth along with the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X19A_%E2%88%9E_Justice">ZGMF-X19A &infin; Justice</a>&nbsp;(piloted by&nbsp;<a href="http://gundam.wikia.com/wiki/Lacus_Clyne">Lacus Clyne</a>, delivered for&nbsp;<a href="http://gundam.wikia.com/wiki/Athrun_Zala">Athrun Zala</a>&#39;s use), it immediately confronted the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X42S_Destiny">ZGMF-X42S Destiny</a>, piloted by&nbsp;<a href="http://gundam.wikia.com/wiki/Shinn_Asuka">Shinn Asuka</a>, breaking up its battle with the&nbsp;<a href="http://gundam.wikia.com/wiki/ORB-01_Akatsuki">ORB-01 Akatsuki</a>&nbsp;(piloted by Kira&#39;s twin sister,&nbsp;<a href="http://gundam.wikia.com/wiki/Cagalli_Yula_Athha">Cagalli Yula Athha</a>). The initial clash between the two suits resulted in Strike Freedom gaining the upper hand, as Shinn&#39;s Boomerangs and Beam sword were destroyed and its energy supply was nearly depleted. The Destiny was forced to retreat when&nbsp;<a href="http://gundam.wikia.com/wiki/Rey_Za_Burrel">Rey Za Burrel</a>ordered Shinn Asuka to return to the&nbsp;<a href="http://gundam.wikia.com/wiki/Minerva">Minerva</a>&nbsp;to resupply.</p>\r\n\r\n<p>When the Destiny returned to the battlefield, it was now accompanied by&nbsp;<a href="http://gundam.wikia.com/wiki/Rey_Za_Burrel">Rey Za Burrel</a>&nbsp;in the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X666S_Legend">ZGMF-X666S Legend</a>. At one point, Kira had the chance to destroy Destiny after Strike Freedom kicked the ZAFT suit. But together, both units finally managed to put Strike Freedom into the defensive and gave the Destiny an opportunity to destroy the Strike Freedom.&nbsp;<a href="http://gundam.wikia.com/wiki/Athrun_Zala">Athrun Zala</a>&nbsp;in the&nbsp;<a href="http://gundam.wikia.com/wiki/ZGMF-X19A_%E2%88%9E_Justice">ZGMF-X19A &infin; Justice</a>&nbsp;arrived on the scene at that moment however, stopping the attack as well as the numerical disadvantage. For the remainder of this battle, which was not long, the Strike Freedom engaged the Legend in a skirmish, in which neither suit gained an advantage nor damaged the other because Kira was in a daze of finding out Rey Za Barrel&#39;s &quot;true&quot; identity.</p>\r\n\r\n<p>In the final battle of the&nbsp;<a href="http://gundam.wikia.com/wiki/Second_Bloody_Valentine_War">Second Bloody Valentine War</a>, the Strike Freedom and the &infin; Justice, both equipped with the&nbsp;<a href="http://gundam.wikia.com/wiki/Mobile_suit_Embedded_Tactical_EnfORcer">METEOR</a>&nbsp;mobile weapons platform, destroyed an important relay station, which was to be used by the Earth Alliance&#39;s&nbsp;<a href="http://gundam.wikia.com/wiki/Cosmic_Era_Superweapons#Requiem">Requiem</a>&nbsp;tactical cannon, now under ZAFT control. After accomplishing this goal, they realized the station could be replaced and proceeded towards the Requiem itself. The Strike Freedom then engaged the Legend and, after a short exchange of fire, crippled it with its Full Burst Mode Attack. Kira docked the Strike Freedom once more with the METEOR and then headed to the mobile fortress&nbsp;<em><a href="http://gundam.wikia.com/wiki/Mobile_Space_Fortress_Messiah">Messiah</a></em>, heavily damaging it single-handedly, before allowing the remainder of the&nbsp;<a href="http://gundam.wikia.com/wiki/Three_Ships_Alliance">Three Ships Alliance</a>&nbsp;vessels and MS to destroy the Messiah fortress completely. The destruction of Messiah led to the subsequent end of the&nbsp;<a href="http://gundam.wikia.com/wiki/Second_Bloody_Valentine_War">Second Bloody Valentine War</a>, with Kira using the Strike Freedom to escape the fortress.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(100) NOT NULL,
  `telp_contact` varchar(100) NOT NULL,
  `email_contact` varchar(100) NOT NULL,
  `type_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `telp_contact`, `email_contact`, `type_contact`) VALUES
(1, 'asdaasdasdasd', 'asd', 'ass', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `lat_event` varchar(100) NOT NULL,
  `lang_event` varchar(100) NOT NULL,
  `id_kota_event` int(11) NOT NULL,
  `id_negara_event` int(11) NOT NULL,
  `tanggal_mulai_event` date NOT NULL,
  `tanggal_akhir_event` date NOT NULL,
  `jam_mulai_event` varchar(20) NOT NULL,
  `jam_akhir_event` varchar(20) DEFAULT NULL,
  `tipe_event` varchar(30) NOT NULL,
  `pic_event` varchar(100) NOT NULL,
  `register_event` varchar(100) NOT NULL,
  `detail_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `lat_event`, `lang_event`, `id_kota_event`, `id_negara_event`, `tanggal_mulai_event`, `tanggal_akhir_event`, `jam_mulai_event`, `jam_akhir_event`, `tipe_event`, `pic_event`, `register_event`, `detail_event`) VALUES
(1, 'asdsad', '0.48339', '115.56931', 1, 1, '2016-03-20', '2016-03-20', '00:00', '23:59', 'Event', './assets/gambar/event/1458471653AlbumArtSmall.jpg', 'asdasda', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `answer`) VALUES
(1, 'asda', 'adsad');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `tanggal_buat_galeri` date NOT NULL,
  `letak_folder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `tanggal_buat_galeri`, `letak_folder`) VALUES
(12, 'qwe', '2016-03-19', '14584095692016-03-19qwe'),
(13, 'aku', '2016-03-19', '1458411783aku'),
(14, '', '2016-03-19', '1458413188');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul_halaman`, `isi_halaman`) VALUES
(1, 'Privacy Policy', ''),
(2, 'All About Us', '');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Singapure'),
(2, 'Mojokerto'),
(3, 'Kuala Lumpur'),
(4, 'Bandar Sri Begawan');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(11) NOT NULL,
  `nama_negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_negara`, `nama_negara`) VALUES
(1, 'Singapur'),
(2, 'Indonesia'),
(3, 'Brunei'),
(4, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` varchar(100) NOT NULL,
  `isi_news` text NOT NULL,
  `pic_news` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `pic_news`) VALUES
(2, '', '', './assets/gambar/resource/'),
(3, '', '', './assets/gambar/resource/'),
(4, 'mencoba', '<p>sfsfdsf<strong>&nbsp;efrwrwerw&nbsp;<em>ewrwerwerwer&nbsp;<s>rewrewrwrewrwerweradsadsadadsfsfsdfsdfsdfdsf</s></em></strong></p>\r\n', './assets/gambar/news/photo.jpg'),
(5, 'mencoba', '', './assets/gambar/resource/s.gif'),
(6, '', '', './assets/gambar/resource/'),
(7, 'asd', '<p>asdasd</p>', './assets/gambar/news/_2578677.png'),
(8, 'adsadds', '<p>adasdasdsa</p>\r\n', './assets/gambar/news/[Commie] Accel World - 17 [F1078D77].mkv_20120804_110234.703.png'),
(9, 'asd', '<p>adsads</p>', './assets/gambar/news/[Commie] Accel World - 17 [F1078D77].mkv_20120804_110234.703.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `id_kontak` varchar(100) NOT NULL,
  `nomer_rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`) VALUES
(2, 'Ada Band, Surga Cinta', 'https://www.youtube.com/watch?v=hKscd5JXLNs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id_careers`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id_careers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
