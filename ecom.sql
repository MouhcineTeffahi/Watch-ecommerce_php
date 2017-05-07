-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 12 Juillet 2016 à 02:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `tel`, `message`) VALUES
(1, 'sssssssssssxxxxxxx', 'a@fghcccccsssxxxxx', 2147483647, 'qqqqqqqqqqqqqq'),
(2, 'qqqqqqqq', 'a@fghccccc', 987655, 'xxxxxxxxxxxxxxx'),
(3, 'ccccccc', 'ccccccccccc@gggg', 3333333, 'ccccccc'),
(4, 'ccccccccccc', 'ddddd@gggg', 0, 'vvvvvvvvvv');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `prix` float NOT NULL,
  `qnt` int(11) NOT NULL,
  `date_exp` date NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `Catalogue` varchar(255) NOT NULL,
  `promo` tinyint(1) NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`ref`, `nom`, `description`, `detail`, `prix`, `qnt`, `date_exp`, `categorie`, `Catalogue`, `promo`) VALUES
(1, 'Montre Tissot Couturier Chrono', 'Tissot V8 T0394171605702', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es', 3000, 20, '2016-03-31', 'Tissot', 'homme', 1),
(2, 'COUSSIN UN AIR DE PRINTEMPS', 'Tissot V8 T0394171605702', ' Envie de (re)décorer votre intérieur ? Ce coussin au design apaisant grâce à ces fleurs de cerisier, rappelle comme un air de printemps. Personnalisez ce coussin des prénoms de vos destinataires, d''un petit mot et rendez le unique ! Super idée cadeau original pour une pendaison de crémaillère, un mariage, un anniversaire ou encore la fête des grands-mères ! Toutes les occasions sont bonnes pour donner un coup de fraîcheur à votre intérieur !\r\n\r\nHousse de coussin 100% polyester - 40x40cm \r\nLavable à 60°C maximum.', 89, 30, '2016-03-26', 'Tissot', 'femme', 2),
(3, 'Montre Worldtimer Manufacture', 'Frederique Constant V8 T0394171605702', 'Mesdames, que pensez vous de cette toute dernière nouveauté Cluse?  Ne trouvez-vous pas qu''elle respire la sobriété et sagesse? Bien entendu, le contraire nous aurait étonné ! C''est grâce à son délicat bracelet en cuir gris et son cadran blanc épuré. Sont juste posés délicatement les 12 index qui vous permetrrons de lire parfaitement l''heure. Quand allez-vous succomber', 250, 30, '2016-03-25', 'Frederique Constant', 'homme', 1),
(4, 'Montre Worldtimer Manufacture', 'Tissot V8 T0394171605702', 'Grace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 79, 30, '2016-03-26', 'Tissot', 'homme', 1),
(5, 'TABLIER PHOTO SQUARE', 'Tradition T0636101603800', 'Profitez de votre plus belle photo même lorsque vous cuisinez ! Ce tablier personnalisé sera aussi le cadeau idéal que vous pourrez offrir pour un anniversaire, Noël, la fête des mères ou encore la fête des pères ! Un cadeau unique à offrir sans hésiter ! Tablier blanc, 100% polyester, lavable en machine. Dimensions : 80 cm de haut sur 70 cm de large. ', 179, 50, '2016-03-11', 'Frederique Constant', 'homme', 1),
(6, 'Montre Horological Smartwatch', 'Tissot\nTradition T0636101603800', 'Pour mettre à l''honneur l''élu de votre coeur ou votre famille, ce t-shirt est le cadeau parfait! \r\nPersonnalisez-le avec une photo en forme de coeur et un message.\r\n\r\nCouleur : Blanc\r\nTissu résistant : 180 g/m²\r\nComposition : 100 % coton ', 99, 20, '2016-03-31', 'Frederique Constant', 'homme', 2),
(7, 'Montre Worldtimer Manufacture', 'rolex', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 99, 20, '2016-03-31', 'Victorinox', 'femme', 1),
(8, 'Montre Slimline Gent', 'Airboss Mechanical 222507', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 197, 20, '2016-03-31', 'Frederique Constant', 'homme', 1),
(9, 'Montre Worldtimer Manufacture\n', 'Chrono Classic 241494', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 200, 20, '2016-03-31', 'Frederique Constant', 'homme', 1),
(10, 'Montre Slimline Gent\n', 'Set Alliance 242211.1', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 88, 20, '2016-03-31', 'Tissot', 'femme', 1),
(11, 'LE PORTRAIT FAÇON FUSAIN\n', 'Set Alliance 241711.1', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 100, 20, '2016-03-31', 'Victorinox', 'homme', 1),
(12, 'Montre Minuit Silver White/Grey\n', 'Airboss Mechanical 241507', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 200, 20, '2016-03-31', 'Frederique Constant', 'homme', 1),
(13, 'Bohème Rose Gold ', 'Maverick 241602', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 99, 12, '2016-04-15', 'Victorinox', 'enfant', 1),
(14, 'Bohème Rose Gold ', 'INOX 241682.1', 'Un cadeau absolument fabuleux pour nos Bébés chéris : un joli livre doudou en tissus à personnaliser avec les photos de toute sa famille...\nCe cadeau de rêve accompagnera Bébé partout et le rassurera en toute situation...\nPapa, Mama, Papy et Mamie ne sont jamais bien loin car Bébé peut les voir en photo quand il le souhaite !\nAvec ce cadeau très original, vous êtes certain de faire plaisir.\nGrace à de nombreuses options (couleurs, textes) et en quelques clics votre cadeau sera unique !', 120, 12, '2016-04-07', 'Frederique Constant', 'homme', 1),
(15, 'Montre Minuit Silver White/Grey', 'CK Minimal Lady K3M23126', 'Mesdames, que pensez vous de cette toute dernière nouveauté Cluse?  Ne trouvez-vous pas qu''elle respire la sobriété et sagesse? Bien entendu, le contraire nous aurait étonné ! C''est grâce à son délicat bracelet en cuir gris et son cadran blanc épuré. Sont juste posés délicatement les 12 index qui vous permetrrons de lire parfaitement l''heure. Quand allez-vous succomber', 3000, 10, '2016-07-01', 'Victorinox', 'femme', 2),
(16, 'Calvin Klein', 'CK Minimal M K3M22126', 'Mesdames, que pensez vous de cette toute dernière nouveauté Cluse?  Ne trouvez-vous pas qu''elle respire la sobriété et sagesse? Bien entendu, le contraire nous aurait étonné ! C''est grâce à son délicat bracelet en cuir gris et son cadran blanc épuré. Sont juste posés délicatement les 12 index qui vous permetrrons de lire parfaitement l''heure. Quand allez-vous succomber', 2000, 20, '2016-06-01', 'Victorinox', 'femme', 2),
(17, 'Bohème Rose Gold ', 'CK Suspension K3323330', 'Surfant sur la tendance preppy chic, la marque Cluse a créé une collection de montres au style intemporel, qui allie élégance et décontraction. Ici décliné dans sa version munie d''un bracelet camel lumineux et gourmand, le modèle affiche un boîtier doré rose ultra féminin. Un basique qui a gagné sa place dans notre dressing!\r\n\r\n', 4000, 10, '2016-07-07', 'Frederique Constant', 'enfant', 2),
(18, 'Tekday', '11335566', 'Mesdames, que pensez vous de cette toute dernière nouveauté Cluse?  Ne trouvez-vous pas qu''elle respire la sobriété et sagesse? Bien entendu, le contraire nous aurait étonné ! C''est grâce à son délicat bracelet en cuir gris et son cadran blanc épuré. Sont juste posés délicatement les 12 index qui vous permetrrons de lire parfaitement l''heure. Quand allez-vous succomber', 300, 34, '2016-07-05', 'Victorinox', 'enfant', 2),
(19, 'Montre 653871', '234344656756', 'Mesdames, que pensez vous de cette toute dernière nouveauté Cluse?  Ne trouvez-vous pas qu''elle respire la sobriété et sagesse? Bien entendu, le contraire nous aurait étonné ! C''est grâce à son délicat bracelet en cuir gris et son cadran blanc épuré. Sont juste posés délicatement les 12 index qui vous permetrrons de lire parfaitement l''heure. Quand allez-vous succomber', 700, 24, '2016-07-04', 'Victorinox', 'enfant', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
