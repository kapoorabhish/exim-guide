-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2013 at 12:34 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `chapter_no` int(11) DEFAULT NULL,
  `chapter_name` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`chapter_no`, `chapter_name`) VALUES
(1, 'Live Animals'),
(2, 'Meat Meat and Edible Meat Offal'),
(3, 'Fish and Crustaceans, Molluscs and other Aquatic Invertebrates'),
(4, 'Birds'''' Eggs; Natural Honey; Edible Products of Animal Origin, not elsewhere specified or included'),
(5, 'Products of Animal Origin, not elsewhere specified or included'),
(6, 'Live trees and other Plants; Bulb, Roots and the like; Cut flowers and Ornamental Foliage'),
(7, 'Edible Vegetables and Certain Roots and Tubers'),
(8, 'Edible Fruit and Nuts; Peel of Citrus Fruit or Melons'),
(9, 'Coffee, Tea, Mate and Spices'),
(10, ' Cereals'),
(11, 'Products of the Milling Industry; Malt; Starches; Inulin; Wheat Gluten'),
(12, 'Oil Seeds and Oleaginous Fruits; Miscellaneous Grains, Seeds and Fruit; Industrial or Medicinal Plants; Straw and Fodder'),
(13, 'Lac; Gums, Resins and other Vegetable Saps and Extracts'),
(14, 'Vegetable Plaiting Materials; Vegetable Products not elsewhere specified or included'),
(15, 'Animal or Vegetable Fats and Oils and their Cleavage Products; Prepared Edible Fats; Animal or Vegetable Waxes'),
(16, 'Preparations of Meat, of Fish or of Crustaceans, Molluscs or Other Aquatic Invertebrates'),
(17, 'Sugars and Sugar Confectionery'),
(18, 'Cocoa and Cocoa Preparations'),
(19, 'Preparations of Cereals, Flour, Starch or Milk; Pastry Cooks'''' Products'),
(20, ' Preparations of Vegetables, Fruit, Nuts or Other Parts of Plants'),
(21, 'Miscellaneous Edible Preparations'),
(22, 'Beverages, Spirits and Vinegar'),
(23, 'Residues and Waste from the Food Industries; Prepared Animal Fodder'),
(24, 'Tobacco and Manufactured Tobacco Substitutes'),
(25, 'Salt; Sulphur; Earths & Stone; Plastering Materials; Lime & Cement'),
(26, 'Ores, Slag and Ash'),
(27, 'Mineral Fuels, Mineral Oils and Products of their Distillation; Bituminous Substances; Mineral Waxes'),
(28, 'Inorganic Chemicals; Organic or Inorganic Compounds of Precious Metals, of Rare-Earth Metals, of Radioactive Elements or of Isotopes'),
(29, 'Organic Chemicals'),
(30, 'Pharmaceutical Products'),
(31, ' Fertilisers'),
(32, ' Tanning or Dyeing Extracts; Tannins and their Derivatives; Dyes, Pigments and Other Colouring Matter; Paints and Varnishes; Putty and other Mastics; Inks'),
(33, 'Essential Oils and Resinoids; Perfumery Cosmetics or Toilet Preparations'),
(34, 'Soap,Organic Surface-Active Agents,Washing Preparations,LubricatingPreparations, Artificial Waxes,Prepared WaxesPolishing or Scouring Preparations, Candles and similar Articles, modelling Pastes, Dental Waxes and Dental Preparations with Basis of Plaster'),
(35, 'Albuminoidal substances; Modified Starches; Glues; Enzymes'),
(36, 'Explosives; Pyrotechnic products; Matches; Pyrophoric Alloys; certain combustible preparations'),
(37, ' Photographic or Cinematographic Goods'),
(38, ' Miscellaneous Chemical Products'),
(39, 'Plastics and articles thereof'),
(40, 'Rubber and Articles thereof'),
(41, 'Raw Hides and Skins (other than furskins) and leather'),
(42, 'Articles of leather; saddlery and harness; travel goods, handbags and similar containers; articles of animal gut (other than silk-worm gut)'),
(43, 'Furskins and artificial fur; manufactures thereof'),
(44, 'Wood and Articles of Wood; Wood Charcoal'),
(45, 'Cork and Articles of Cork'),
(46, 'Manufactures of Straw, of esparto or of other plaiting materials; basketware and wickerwork'),
(47, ' Pulp of wood or of other fibrous cellulosic material; recovered (waste and scrap) of paper or paperboard'),
(48, 'Paper and paperboard; articles of Paper pulp, of paper or of paperboard'),
(49, ' Printed books, Newspapers, Pictures and other products of the printing industry; Manuscripts, Typescripts and Plans'),
(50, 'Silk'),
(51, ' Wool, fine or coarse animal hair, horse hair yarn and woven fabric'),
(52, 'Cotton'),
(53, ' Other vegetable textile fibres; paper yarn and woven fabrics of paper yarn'),
(54, 'Man-made Filaments'),
(55, 'Man-made staple fibres'),
(56, 'Wadding, felt and nonwovens; special yarns; twine, cordage, ropes and cables and articles thereof'),
(57, 'Carpets and other textile floor coverings'),
(58, 'Special woven fabrics; tufted textile fabrics; lace; tapestries; trimmings; embroidery'),
(59, ' Impregnated, coated, covered or laminated textile fabrics; Textile articles of a kind suitable for industrial use'),
(60, 'Knitted or crocheted fabrics'),
(61, ' Articles of apparel and clothing accessories, knitted or crocheted'),
(62, 'Articles of apparel and clothing accessories not knitted or crocheted'),
(63, ' Other made up textile articles; sets; worn clothing and worn textile articles; rags'),
(64, 'Footwear, gaiters and the like; parts of such articles'),
(65, ' Headgear and parts thereof'),
(66, ' Umbrellas, sun umbrellas, walking sticks, seat-sticks, whips, riding-crops, and parts thereof'),
(67, 'Prepared feathers and down and articles made of feathers or of down; artificial flowers; articles of human hair'),
(68, 'Articles of stone, plaster, cement, asbestos, mica or similar materials'),
(69, 'Ceramic Products'),
(70, 'Glass and Glassware'),
(71, 'Natural or cultured pearls, precious or semi-precious stones, precious metals, metals clad with precious metal, and articles thereof; imitation jewellery; coin'),
(72, 'Iron and Steel'),
(73, ' Articles of Iron or Steel'),
(74, 'Copper and articles thereof'),
(75, ' Nickle and articles thereof'),
(76, 'Aluminium and Articles thereof'),
(77, ' Reserved for Possible Future Use'),
(78, 'Lead and Articles thereof'),
(79, 'Zinc and Articles thereof'),
(80, ' Tin and Articles thereof'),
(81, 'Other Base metals; Cermets articles thereof'),
(82, 'Tools, implements, cutlery, spoons and forks, of base metal; parts thereof of base metal'),
(83, 'Miscellaneous articles of base metal'),
(84, ' Nuclear reactors, boilers, machinery and mechanical appliance; parts thereof'),
(85, 'Electrical machinery and equipment and parts thereof; sound recorders and reproducers, television image and sound recorders and reproducers and parts and accessories of such articles'),
(86, 'Railway or tramway locomotives, rolling-stock and parts thereof; rail-way or tramway track fixtures and fittingsand parts thereof; mechanical (including electro-mechanical)traffic signalling equipment of all kinds'),
(87, 'Vehicles other than railway or tramway rolling stock, and parts and accessories thereof'),
(88, 'Aircraft, Spacecraft and parts thereof'),
(89, ' Ships, Boats and Floating Structures'),
(90, 'Optical, Photographic, Cinematographic, measuring, checking, precision, medical or surgical instruments and apparatus; parts and accessories thereof'),
(91, 'Clocks and watches and parts thereof'),
(92, ' Musical instruments; parts and accessories or such articles'),
(93, 'Arms and Ammunition; Parts and Accessories thereof'),
(94, ' Furniture; Bedding, Mattresses, Mattress supports, cushions and similar stuffed furnishings; Lamps and Lighting fittings, not elsewhere specified or included; illuminated signs, illuminate name-plates and the like; Prefabricated Building'),
(95, 'Toys, Games and Sports Requisites; Parts and Accessories thereof'),
(96, 'Miscellaneous manufactured articles'),
(97, 'Works of Art, Collectors'''' Pieces & Antiques'),
(98, ' Project Imports; Laboratory Chemicals; Passengers; Baggage; Personal importation''''s by Air or Post; Ship Stores');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
