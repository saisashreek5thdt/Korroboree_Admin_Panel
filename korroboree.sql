-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 05:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `korroboree`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(252) NOT NULL,
  `activity` varchar(999) DEFAULT NULL,
  `topic_id` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(252) NOT NULL,
  `username` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `user_type` varchar(999) DEFAULT NULL,
  `project` int(252) DEFAULT NULL,
  `episodes` int(252) DEFAULT NULL,
  `topics` int(252) DEFAULT NULL,
  `user_data` int(252) DEFAULT NULL,
  `file` int(252) DEFAULT NULL,
  `tracker` int(252) DEFAULT NULL,
  `error` int(252) DEFAULT NULL,
  `access` int(252) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `user_type`, `project`, `episodes`, `topics`, `user_data`, `file`, `tracker`, `error`, `access`, `dates`) VALUES
(1, 'admin@korroboree.com', 'journal1234', 'kr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'info@5thdt.com', 'rajiv1234', '5d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('041jfhh2o5vipcrqr0r2oe27l2l3obe8', '::1', 1615960079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936303037393b),
('0e50j4hgs8vbeg3qkapho4hbnc4pvt3i', '::1', 1616046254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034363235343b737563636573737c733a32313a22204164646564205375636365737366756c6c79212e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226f6c64223b7d),
('0fg48iie06ta9i2b032mdoqvl7kdb6lm', '::1', 1615876382, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837363233373b),
('0ts4n189r96epjtbh0blmi9pq5nv8bff', '::1', 1615963884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936333838343b),
('0u1hmosd0k7o2o6jg2qelguuhvrtf96c', '::1', 1616127136, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132373133363b),
('11lk8rtk6c0mc5lfkm9mjbqop8p9uvf8', '::1', 1616120217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132303231373b6d73677c733a32353a22566964656f204164646564205375636365737366756c6c7921223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('13bomj92q81fbpa0rsk737ne6oehq9cn', '::1', 1616047273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034373237333b),
('16n0o802l3cmgnba0omr8qj5nuk2im79', '::1', 1616041561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034313536313b),
('1cg421gl2esomt9j6h7crspr7qj4ek8a', '::1', 1616122669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132323636393b),
('2q70q5o5g1f4sh1fji4n79phkm68bfk8', '::1', 1616044804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034343830343b),
('496p767fcvlrce0r5rr072bebag4gr8g', '::1', 1615874415, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343431353b),
('6q463fbp47rq4lkj0lkokui8t70ikaib', '::1', 1615953772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935333737323b),
('6v7befoeljsm8obralnt5s5muo6k2ajn', '::1', 1615872694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837323639343b),
('7jfni53h7heqf8rlg9l2olcp71hismq7', '::1', 1615961172, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936313137323b),
('8sikm62q959am99suejb8m15imso9v1a', '::1', 1615872176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837323137363b),
('96hog832napsfol758436oo7up6mhpek', '::1', 1615875029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837353032393b),
('9relnjicds1pndddatk4kjmrq56qg6eq', '::1', 1616041981, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034313938313b),
('a2oleqlrhatd4chmagm570ko138u5nea', '::1', 1616043408, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034333430383b),
('arr0ssujaobft0munhsk0nsk5t2cl7dg', '::1', 1615877539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837373533393b),
('b7nbsqo0sf7l0a027fa2d4vb43e7gbib', '::1', 1615874887, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343838373b),
('bb56p3s1mdni3u94k8745gmmaro3a0jq', '::1', 1615953010, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935333031303b),
('bccotuka9f6of95ojc6g0rl6pjmor86j', '::1', 1616041085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034313038353b),
('bogeocvqs4mv9mpm86g3sb1ct3pvs9um', '::1', 1616122362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132323336323b),
('cirn66th6dg23jcrislondtek09pav07', '::1', 1616048561, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034383536313b),
('csai8hs3f1objt3s75p12c4pjl4gg8ra', '::1', 1616121631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132313633313b),
('d0tffjsm7q8vv1g5vm40pqi53p0pl89i', '::1', 1616127739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132373733393b),
('divhr0k8atu3obj8fpq784tn7440ch9f', '::1', 1615876237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837363233373b),
('dsuhe29s9kgj90c4vnv6edmo06k6t4ka', '::1', 1616050883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363035303838333b),
('e90is3sdksq0mdcdqgjoli2o28qv5g27', '::1', 1616049476, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034393437363b),
('ea55qbaqnemte7o13gr264dsbfq9ptk7', '::1', 1616042306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034323330363b),
('eg5nmr0sqqdfq15ni9kdbch9v60l4hp3', '::1', 1616127437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132373433373b),
('ekuioc5o664rg3hsge0mk51ftndlbark', '::1', 1616048862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034383836323b),
('enb1ohh679ioqafbcdldueeognsltbab', '::1', 1615873781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333738313b),
('ep7r8j1sqf8sgfk49as6gmu05c2hat0u', '::1', 1615954151, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935343135313b),
('epdut3tfko078g50p5pgfo8s7umc35q4', '::1', 1616119145, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131393134353b),
('eudequ7i88f3uslbfme33gsieoqti0p0', '::1', 1616120916, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132303931363b),
('f6e2a0g3tc5nrt1hfi6j2pdcoa1o6b2f', '::1', 1616126206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132363230363b),
('flj35tc3o268gbnshtksqbabcvqub5d6', '::1', 1616050489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363035303438393b747275657c733a31393a2244656c657465205375636365737366756c6c79223b5f5f63695f766172737c613a313a7b733a343a2274727565223b733a333a226f6c64223b7d),
('fmr6m3tt2pbg4el549ha5f1m67pt2hgf', '::1', 1615875920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837353932303b),
('fqtbrkc6s79kbf0milhodntvkq2koipm', '::1', 1616048142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034383134323b),
('fr6qmfa4e8jgqkdjc2fed3rmvk1hrsrt', '::1', 1616128271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132383034393b),
('fvgm65lkqnm224bnu8ac0dumgqfk9297', '::1', 1616122993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132323939333b),
('gjcqmhcq8ah3lmd3e7k33jhfkhkdvp5o', '::1', 1616049164, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034393136343b),
('h508abv9un34fohbjfgrspubm3vl00n8', '::1', 1616125891, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132353839313b),
('hcguvbv89d79lid25lpjh4p0c7fe37a8', '::1', 1615873227, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333232373b),
('hq3tsklmsk2ale39r7rojhd3nkrdf5d9', '::1', 1616122060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132323036303b),
('j5fjoodnjm8b7mmh7ggjrudov7gp6ors', '::1', 1616126822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132363832323b),
('j7amtlp73o4e852t41kfjlab9q5g8oq3', '::1', 1616046620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034363632303b),
('j9vnpsc0l60fnc5ubk98s8s2ku0f45f9', '::1', 1615963401, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936333430313b),
('jb2inlkcdblcjel4uvsopcandeslr168', '::1', 1616051455, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363035313435353b),
('ji05igg14eseqpilft34gsolme9naoc7', '::1', 1616042994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034323939343b),
('k5me7ejiqflh8bf93r71p3audh8slu4q', '::1', 1616050020, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363035303032303b),
('krpkjso38bektnl02pulqaov5m6h6sf2', '::1', 1616128049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132383034393b),
('l7jsascj5hna5c1lbvj2mpvviekf40m5', '::1', 1615874088, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837343038383b),
('ldqam496817pg1bka1q90h7kpdiaalhe', '::1', 1616040767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034303736373b),
('m7maad869l4teigcov9221ujjrdbb5s0', '::1', 1616118319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131383331393b),
('mgnvevcfrshrqqkuilv4ehmq00gbtek9', '::1', 1616045796, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034353739363b),
('mk2bc2gcdk9kapjla9kv1gstsrogfnrm', '::1', 1616126521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132363532313b),
('nv2o38b6gmh3eu3ttg5u2uodnlaiq33t', '::1', 1616117834, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131373833313b),
('o1e47a2ttfqa9lbgd710l2evhmeldfn0', '::1', 1615963078, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936333037383b),
('oatgqojaubrtj0u41kf1im4kj704ujcr', '::1', 1616043872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034333837323b),
('od4p10gaeti6fvsgqkm02vub8o6dcqif', '::1', 1615873767, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333736373b),
('oe5cijhdvobuu1adtrof5qs86cdgi8bg', '::1', 1616047634, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034373633343b),
('oei6ecnqnr6bcgq4g2007t1uk8nfhg3n', '::1', 1615871539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313533393b),
('ogj19i754bmiujhj6rf05llm602hhapn', '::1', 1616042662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034323636323b),
('p2ucq07gj2j2eoada6m4e7rsr0r649pp', '::1', 1615964190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936343139303b),
('p3i891gvg7s5mrog7tklnlc7ibt304qb', '::1', 1616125572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132353537323b),
('ph1cpkk2ebh10b1l3vk7u1e4v9b3svo9', '::1', 1615873004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837333030343b),
('qf3j1afoj6qlu9vsk6n3ulor3kbtihtf', '::1', 1616120613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132303631333b747275657c733a32323a2220757064617465205375636365737366756c6c79212e223b5f5f63695f766172737c613a313a7b733a343a2274727565223b733a333a226f6c64223b7d),
('qo6svbrll41phge38eqiqq5eu226un56', '::1', 1616045489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034353438393b),
('qrkv2t2s2g3m24ri3pq4mglo9ci64oal', '::1', 1615964912, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936343636393b),
('qv6ab9hb8qpce16ah90v7unl8gv0arju', '::1', 1616119448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131393434383b6d73677c733a32353a22566964656f204164646564205375636365737366756c6c7921223b5f5f63695f766172737c613a313a7b733a333a226d7367223b733a333a226f6c64223b7d),
('r1hokhgn2dpejn9g7t7p1idpf7vrnvrj', '::1', 1616123667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132333636373b),
('r6tbnjkbi030el2rg9vj8105bv4coiei', '::1', 1615871872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313837323b),
('rgcq4fu22kbejkhbhnk4kv16hkfpq1km', '::1', 1615871235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837313233353b),
('rrhgjfqnbjigbtlb7bjf0vordp9i8ps9', '::1', 1616123330, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132333333303b),
('s55l045t9devpo5pgesp5l7n5ls3sv7m', '::1', 1616121329, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363132313332393b),
('sb3brv9li87f5gv34ocppjorvs5b3jnb', '::1', 1615962733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936323733333b),
('sio405tf2atidmg40a8uiin912ttttn2', '::1', 1616119797, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131393739373b747275657c733a32313a22204164646564205375636365737366756c6c79212e223b5f5f63695f766172737c613a313a7b733a343a2274727565223b733a333a226f6c64223b7d),
('slte78vq9gb8m4qg42gniqnmnmjudcj6', '::1', 1615954492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935343439323b),
('stpcmkdist4dttlbc3vqn60a810dunc7', '::1', 1615964669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936343636393b),
('tqvnhsma98mf4n09gkh67m66t0ol8ttk', '::1', 1616118843, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363131383834333b),
('ucf7ni8b4ippqhkse9cbuuvp9cajmvsk', '::1', 1615957467, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353935373436373b),
('v7svlaobbrl36rhsrtchtg83olsnqhc8', '::1', 1616044190, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363034343139303b),
('v8u6rlokrb9nursi1lfh4vck6b3bn31u', '::1', 1615961745, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353936313734353b),
('vc7aev232earassvfpit965k9bq1dqt1', '::1', 1615877580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631353837373533393b),
('vlc27q6cc7g2cqcuj3chqafmooms5dcu', '::1', 1616051475, 0x5f5f63695f6c6173745f726567656e65726174657c693a313631363035313435353b);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(252) NOT NULL,
  `episode_number` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `story_board` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moonshot_conversations`
--

CREATE TABLE `moonshot_conversations` (
  `id` int(11) NOT NULL,
  `title_1` text NOT NULL,
  `title_2` text NOT NULL,
  `title_3` text NOT NULL,
  `title_4` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moonshot_conversations`
--

INSERT INTO `moonshot_conversations` (`id`, `title_1`, `title_2`, `title_3`, `title_4`, `created_date`) VALUES
(1, 'To multiply the productivity (10x) of every child, by supporting parents with scientific information, and tools and resources they can use. Parents will also be able to use these to enhance their own productivity.', 'To share the process and mindset of what successful people do.', 'To share the tools and resources so we can create some of the magic sauce for ourselves, and we use them to parent purposefully.', 'Through this process you will be able to implement success habits and mindsets so you may leave your own best life, and parent your children so they can live theirs.', '2021-03-18 05:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(252) NOT NULL,
  `episode` varchar(999) DEFAULT NULL,
  `title` varchar(999) DEFAULT NULL,
  `topic_number` varchar(999) DEFAULT NULL,
  `month` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topics_6`
--

CREATE TABLE `topics_6` (
  `id` int(11) NOT NULL,
  `topics_1` text NOT NULL,
  `topics_2` text NOT NULL,
  `topics_3` text NOT NULL,
  `topics_4` text NOT NULL,
  `topics_5` text NOT NULL,
  `topics_6` text NOT NULL,
  `cretae_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_6`
--

INSERT INTO `topics_6` (`id`, `topics_1`, `topics_2`, `topics_3`, `topics_4`, `topics_5`, `topics_6`, `cretae_date`) VALUES
(1, 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', '2021-03-19 04:27:29'),
(2, 'redirect', 'redirect', 'redirect', 'redirect', 'redirect', 'redirect', '2021-03-19 04:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list`
--

CREATE TABLE `topics_data_list` (
  `id` int(11) NOT NULL,
  `topic_name` text NOT NULL,
  `topic_info` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list`
--

INSERT INTO `topics_data_list` (`id`, `topic_name`, `topic_info`, `create_date`) VALUES
(1, ' To know more about my child', '', '2021-03-19 03:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_1`
--

CREATE TABLE `topics_data_list_1` (
  `id` int(11) NOT NULL,
  `topics_name` text NOT NULL,
  `topic_type` varchar(255) NOT NULL,
  `topics_name_1` text NOT NULL,
  `topics_name_2` text NOT NULL,
  `topics_name_3` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_1`
--

INSERT INTO `topics_data_list_1` (`id`, `topics_name`, `topic_type`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `create_date`) VALUES
(1, 'topic_5_insert', '', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', 'List some of the ways you can assist your children towards finding their purpose or finding their ‘Why’.', '2021-03-19 03:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `topics_data_list_2`
--

CREATE TABLE `topics_data_list_2` (
  `id` int(11) NOT NULL,
  `topics_name_1` text NOT NULL,
  `topics_name_2` text NOT NULL,
  `topics_name_3` text NOT NULL,
  `topics_name_4` text NOT NULL,
  `topics_name_5` text NOT NULL,
  `topics_name_6` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_data_list_2`
--

INSERT INTO `topics_data_list_2` (`id`, `topics_name_1`, `topics_name_2`, `topics_name_3`, `topics_name_4`, `topics_name_5`, `topics_name_6`, `created_date`) VALUES
(1, 'required', 'required', 'required', 'required', 'requiredqwr3wt43', '', '2021-03-19 04:20:09'),
(2, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:20:30'),
(3, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:22:46'),
(4, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:23:24'),
(5, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:23:56'),
(6, 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', 'What is your area of interest and passion that brings scale to your powerful ‘Why’?\r\n', '', '2021-03-19 04:25:43'),
(7, 'topic_5_1', 'topic_5_1', 'topic_5_1', 'topic_5_1', 'topic_5_1', '', '2021-03-19 04:26:02'),
(8, 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', 'NOTE : Click on the same space to edit your answers.\r\n', '', '2021-03-19 04:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `topic_info`
--

CREATE TABLE `topic_info` (
  `id` int(252) NOT NULL,
  `title` varchar(999) DEFAULT NULL,
  `about` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL,
  `dates` int(252) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `video`, `created_date`) VALUES
(1, 'https://www.youtube.com/embed/6HI-N1rYGz4', 'Simon_Sinek.mp4', '2021-03-19 02:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moonshot_conversations`
--
ALTER TABLE `moonshot_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_6`
--
ALTER TABLE `topics_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic_info`
--
ALTER TABLE `topic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moonshot_conversations`
--
ALTER TABLE `moonshot_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics_6`
--
ALTER TABLE `topics_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topics_data_list`
--
ALTER TABLE `topics_data_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics_data_list_1`
--
ALTER TABLE `topics_data_list_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics_data_list_2`
--
ALTER TABLE `topics_data_list_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topic_info`
--
ALTER TABLE `topic_info`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
