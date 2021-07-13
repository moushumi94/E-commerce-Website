 Server: localhost -  Database: mbazer
-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 13, 2021 at 02:01 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `mbazer`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `add-to-cart`
-- 

CREATE TABLE `add-to-cart` (
  `id` int(20) NOT NULL auto_increment,
  `pname` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `qty` int(250) NOT NULL,
  `subtotal` int(250) NOT NULL,
  `user_id` int(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

-- 
-- Dumping data for table `add-to-cart`
-- 

INSERT INTO `add-to-cart` (`id`, `pname`, `price`, `qty`, `subtotal`, `user_id`, `pid`, `image`) VALUES 
(23, 'Renowned Back Cover', '199', 1, 0, 6, 4, 'mobilecover1.jpg'),
(45, 'ShopAIS Egg Carrier', '179', 0, 0, 15, 8, 'eggtra.jpg'),
(46, 'ShopAIS Egg Carrier', '179', 1, 0, 21, 8, 'eggtra.jpg'),
(47, 'ShopAIS Egg Carrier', '179', 0, 0, 39, 8, 'eggtra.jpg'),
(58, 'B M C Digital Watch', '250', 1, 0, 6, 52, 'royalwatches.jpg'),
(59, 'ShopAIS Egg Carrier', '179', 0, 0, 39, 8, 'eggtra.jpg'),
(60, 'ShopAIS Egg Carrier', '179', 0, 0, 39, 8, 'eggtra.jpg'),
(61, 'ShopAIS Egg Carrier', '179', 0, 0, 39, 8, 'eggtra.jpg'),
(110, 'Hardsided Cabin Lugg', '2589', 1, 0, 40, 24, 'suitcase.jpg'),
(111, 'Phillips Coffee Make', '1199', 1, 0, 40, 12, 'phillipcoffeemaker.jpg'),
(112, 'Chanakya Neeti Engli', '100', 1, 0, 40, 32, 'book3a.jpg'),
(116, 'ShopAIS Egg Carrier', '179', 1, 0, 1, 8, 'eggtra.jpg'),
(118, 'White & Maroon Solid', '2795', 1, 0, 1, 41, 'Menkurta1.jpg'),
(119, 'Apple Ciber Vinegar', '348', 0, 0, 1, 56, 'appleCibervinegar1.jpg'),
(121, 'White & Blue Printed', '555', 0, 0, 1, 45, 'casualtop1.jpg'),
(122, 'Kid School Bag', '512', 1, 0, 2, 53, 'kidsbag.jpg'),
(123, 'Girls Blue Solid Shi', '1299', 1, 0, 2, 39, 'kids1.jpg'),
(124, 'The Rudest Book Ever', '254', 0, 0, 2, 31, 'book2.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `brandtab`
-- 

CREATE TABLE `brandtab` (
  `id` int(11) NOT NULL,
  `bname` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `brandtab`
-- 

INSERT INTO `brandtab` (`id`, `bname`, `count`) VALUES 
(1, 'Electronic Brands', 0),
(2, 'Cloth Brands', 0),
(3, 'Luggage Brands', 0),
(4, 'Kitchen Appliances B', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `catagories`
-- 

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL auto_increment,
  `cname` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `catagories`
-- 

INSERT INTO `catagories` (`id`, `cname`, `count`) VALUES 
(1, 'Electronics', 0),
(2, 'Ladies Wear', 0),
(3, 'Mens Wear', 0),
(4, 'Kids Wear', 0),
(5, 'Kitchen Appliances', 0),
(6, 'Travel Gear', 0),
(7, 'Kindle Books', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `ordertab`
-- 

CREATE TABLE `ordertab` (
  `id` int(11) NOT NULL auto_increment,
  `oname` varchar(20) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `ordertab`
-- 

INSERT INTO `ordertab` (`id`, `oname`, `count`) VALUES 
(1, 'Electronics', 0),
(2, 'Mens Wear', 0),
(3, 'Ladies Wear', 0),
(4, 'kids Wear', 0),
(5, 'Kitchen Appliances', 0),
(6, 'Travel Gear', 0),
(7, 'Kindle Books', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `place_order`
-- 

CREATE TABLE `place_order` (
  `id` int(11) NOT NULL auto_increment,
  `pname` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pid` int(20) NOT NULL,
  `Totalp` int(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `place_order`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `ptitle` varchar(50) NOT NULL,
  `pbrand` varchar(30) NOT NULL,
  `pQty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pcategory` varchar(20) NOT NULL,
  `ccategory` varchar(5) NOT NULL,
  `description` varchar(700) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL,
  `Vaddr` varchar(600) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` (`id`, `ptitle`, `pbrand`, `pQty`, `price`, `pcategory`, `ccategory`, `description`, `image`, `image2`, `image3`, `Vaddr`) VALUES 
(4, 'Renowned Back Cover', 'RENOWNED', 10, 199, 'Deal of the day', '', 'Renowned Vivo Y71 Designer Back cover. Made from hard polycarbonate plastic. Premium Design printed on matte fnish surface imaging & printing technlogy results in high resolution design. All our case are waterproof.', 'mobilecover1.jpg', 'mobilecover2.jpg', 'mobilecover3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: DRS FINAN'),
(8, 'ShopAIS Egg Carrier', 'ShopAIS ', 18, 179, 'Deal of the day', '', 'ShopAIS Portable Plastic Egg Carrier Storage box. 100% Brand new and quality. Made of durable plastic. This plastic egg case box is designed with 12 bulgy and rugged dots on each side and it can hold the egg in it when it is folded.', 'eggtra.jpg', 'eggtra1.jpg', 'eggtra2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: ShopAIS  '),
(11, 'Non-stick cookware', 'Pigeon', 8, 867, 'Kitchen Product', '', 'The new pigeon basics non-stick cookware set is developed using the latest italian technology that ensure high durability and smoothness to the products to provide you with a joyful & healthy cooking experience. Material - Aluminium, size- kadai with', 'non-sticky-pan1.jpg', 'non-sticky-pan2.jpg', 'non-sticky-pan3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail'),
(12, 'Phillips Coffee Make', 'Philips', 28, 1199, 'Kitchen Product', '', 'Phillips by Stovekraft Brewster Coffee Maker. A small size coffee maker of home machine. Prepare 5 cups of freshly-brewed coffee with phillips brewster coffee maker with quick brew function. The smart appliances ensures hot coffee by maintaining opti', 'phillipcoffeemaker.jpg', 'phillipcoffeemaker1.jpg', 'phillipscoffeemaker2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail'),
(13, 'Bajaj Mixer Grinder', 'Bajaj', 10, 2417, 'Kitchen Product', '', 'Bajaj 500 Watt mixer grinder is craft to fulfill your taste buds with conventional flavour, be it sambhar masala or gram masala- with stone pounding technology, reproduce the legitimate taste. ', 'mixergrinder.jpg', 'mixergrinder1.jpg', 'mixergrinder2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Bajaj Hom'),
(14, 'Prestige Gas Stove', 'Prestige', 11, 5699, 'Kitchen Product', '', 'Prestige Marvel glass top 3 burner gas stove, Manual Ignition. It brings to you an elegant  glass stove with three burners and a toughened glass top that is ideal for mid-sized families. The knobs on the prestige marvel glass top gas tables are desig', 'gaschula.jpg', 'gaschula1.jpg', 'gaschula2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail'),
(15, ' Spices Rack Set', 'Solimo', 25, 568, 'Kitchen Product', '', 'Solimo revolving spice rack set 16 pieces keeps your kitchen clean and tidy by storing your spices collection in one place. With a beautifully designes carousel offering easy access to your spices, herbs, powdered sugar and sprinkles. This spices rac', 'spiceRackSet.jpg', 'spiceRackSet1.jpg', 'spiceRackSet2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: S B H Tra'),
(16, 'Airtight Jar Set', 'Solimo', 38, 449, 'Kitchen Product', '', 'Solimo Checkered jars made form 1005 food-grade PET plastic which is BPA-free , it is safe anddouble storage option for your food. The airtight containers are designed to be odour free, thus, keeping the aroma and taste of your stored items intact. A', 'solimochecked-jar.jpg', 'solimochecked-jar1.jpg', 'solimochecked-jar2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: ATZRetail'),
(17, 'Air Tight Plastic Fridge Conta', 'TAPASVI WITH DEVICE OF LEAF', 28, 189, 'Kitchen Product', '', 'TAPASVI Air tight container plastic fridge container. Ideal for any busy kitchen, the lidded food-storage  containers make it simple to freeze meals ahead of time, store healthy snaks or leftovers in the fridge, or keep dry goods fresh in the pantry. BPA free and stain resistant, the  high-quality plastic containers offers long-lasting durable strenth. The food-storage containers offer a space-saving stackable design. They fit one on top of the other.', 'plasticcontainerbox1.jpg', 'plasticcontainerbox2.jpg', 'plasticcontainerbox3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. The item weightis 220g. The item dimention LXWXH : 15 x 15 x 12 Centimeters and Net quantity : 1.00 set.  Sold by: TAPASVI- Wordclass Qualities and Delivered by Multibazer. Manufacturer/Packer/Importer Details - TAPASVI WITH DEVICE OF LEAF. Address - 509-510, Saini Market, Behind H Block,Palam Vihar,Gurgaon 122017, Country - India.'),
(18, 'Compact Vegetable Chopper', 'Solimo', 30, 235, 'Kitchen Product', '', 'The solimon chopper is an execellent solution to all of your fruit and vegitable chopping needs. Featuring three sharp and durable stainless steel blades andunique string design, this manual chopper chops and cuts vegetables in hassle-free manner with minimal effort. Made from high quality 100% food grade plastic that is BPA free. Imported spring action mechanism that allows easy pulling and lasts long.. Perfect for cutting onion, garlic, tomatoes, vegitables, salads, herbs, fruits,boneless meat', 'solimoveg-chopper.jpg', 'solimoveg-chopper1.jpg', 'solimoveg-chopper2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloud India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Dinewell. The item dimensions 13.9 x 13.4 x 10 cm. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(19, 'Cleaning Handy Scorer', 'Spotzero', 18, 174, 'Kitchen Product', '', 'Handy scorer is made of high quality stainless steel scorer. The product can be used to clean stubborn stains on metal utensils and sink. Not recommended to be used on glass or plastic or non-stick or coated surfaces. The handy scorer refill is easily replaceable and can be changed. The scorer refills are available separatly for purchase. Material: Polypropylene, color: Aqua green. The dimension of the item is 115mm x 98mm x 293mm. The package contents is 1-pieces Handy Scorer. No warrenty is ap', 'scorer.jpg', 'scorer1.jpg', 'scorer2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Fitness Mantra  and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Imported and marketed by- Hamilton Housewares Private Limited. Address-239 Sant Nagar East Of Kailash New Delhi- 110095 Country - ,India.'),
(20, 'Flexible Faucet Sprayer', 'Egab', 7, 168, 'Kitchen Product', '', 'Turbo flex 360 quickly upgrades your ordinary faucet into a flexible sparyer with extended reach. The dual function stream & spray makes for easier cleaning of odd size object, and rinising out the sink. Perfect for kitchens, baathrooms and laundary rooms. The 6  inches hose is made of durable smart and is flexible. so, it can reach where ordinary faucents can''t attaches easily without tools to fits most standard- sized faucents.', 'sprayer.jpg', 'sprayer1.jpg', 'sprayer2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: DRS FINANCIAL SOLUTION and Delivered by Multibazer.  Manufacturer/Packer/Importer Details - Erab. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, Country - India.'),
(21, 'Packing Cubes', 'Amazon Basics', 15, 599, 'luggegas', '', 'Amazon basics packing cubes or travel pouch or travel organizer - small, medium, large and slim. Duble zipper pulls make opening/ closing simple and fast. Mesh top panel for easy identification of contents, and verification. Wedding handle for convenience when carried by itself. Dimension of large (17.5 x 12.75 x 3.25 inches), medium (13.75 x 9.75 x 3 inches), small (11 x 6.75 x 3 inches), and slim(2.8 x 14 x 5 inches) amazon basics packing cubes.', 'travel1.jpg', 'travel1b.jpg', 'travel1c.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, Country - India.'),
(23, 'Soft Laptop Roller Cases', 'NOVEX', 19, 2599, 'luggegas', '', 'This soft laptop roller cases from Novex is made of strong and lightweight polyster shells. Re-engineered lightweight spinner wheels for effortless mobility. The zipper ensures security while traveling, along with the 360 degree rotating wheels. The dimension of the item is 42cm x 24cm x 42cm. It has 42 Liters capacity, weight - 1.90 kg. It has 4 number of wheels. Lock Type - Zipper, number of compartment - 3, warranty: 1year.', 'travel2a.jpg', 'travel2b.jpg', 'travel2c.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: NOVEX store  and Delivered by Multibazer.Manufacturer/Packer/Importer Details - NOVEX Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, Country - India.'),
(24, 'Hardsided Cabin Luggage', 'Skybag', 10, 2589, 'luggegas', '', 'Skybag Trooper 55cms Polycarbonate blue hardsided Cabin Luggage not water resistant. It''s capacity 28 liters , weight - 2360 grams and dimension - 38cm x 21cm x 55cm, Lock Type - Number Lock, number of wheels - 4. It has 1 year international warrenty. Outer material is textured with a micro-dimond finish for scratch-resistance and reduced abrasion visibility. Dulable blend of polycarbonate and 100% vargin Hard case outer material is designed to absorbe impact under stress and flex-back into its ', 'suitcase.jpg', 'suitcase2.jpg', 'suitcase3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details- Skybag Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, Country - India.'),
(25, 'Laptop Bag with Charging Port', 'BUCKETLIST', 18, 599, 'luggegas', '', 'Anti Theft waterproof business travel laptop bag with USB cable and built in charging port for college and office work. As we all know that phone snatching is common theft now a days, but now you can taik or listen music without worry, just connect your phone with earphone and enjoy. This classy backpack is made with your convenience in mind. It is lighter in weight, including 1 main pockets and 7 inner small pockets for laptop, iphone, ipad,pen, keys, wallet, books, cloths, bottle and more. This quality backpack apply anti-theft design technology. This zipper of the main pocket is fully hidden in the back of this bag, so nobody will easily open your bckpack. This backpack is eqipped with a ', 'travel6a.jpg', 'travel6j.jpg', 'travelk.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: KRISHIYAM and Delivered by Multibazer. Manufacturer/Packer/Importer Details - KRISHYAM store. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, country - India.'),
(26, 'Grey Travel Duffle', 'Gear', 28, 999, 'luggegas', '', 'Gear polyester 38 cm Grey Travel Duffle .  it has Water resistance and no wheels. It has capacity of 22 liters. The dimension of the item is 38cm x 24cm x 24cm. The number of compartment  of items is 1. Laptop campatibility: No, Sttrap Type : Adjustable, It has 1 year warrenty is non- transferable. Valid for 1 year from the original date of purchase.', 'travel4a.jpg', 'travel4b.jpg', 'travel4c.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110095,Country - India.'),
(27, 'Canvas Toiletry Bag', 'Styleys', 28, 349, 'luggegas', '', 'Styleys portable travel toiletry bag has multiple pockets inside to clasify and store in your toiletries and cosmetic with ease. Ideal for all who love organize living. Hang your neatly arranged handing toiletry bag as you like with the hook inside and can close the zipper when done. its material 300D PVC Oxfort Moisture- proof cloth, antibacterial, good permeability.', 'travel10a.jpg', 'travel10b.jpg', 'travel10c.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: R D Retail and Delivered by Multibazer. Manufacturer/Packer/Importer Details - R D Retail. Address-239 Sant Nagar East Of Kailash New Delhi- 110095,country - India.'),
(28, 'Neck Travel Pillow', 'travel360 degree', 28, 269, 'luggegas', '', 'The neck pillow wraps gently around the neck for relaxing the head and neck muscles and provides super soft and best support simultaneously to  the head, neck, and chin while sleeping upright without getting a stiff neck. GREAT for TRAVELING USE in CAR, TRUCK, BUS, TRAIN, or AIRPLANE. Use it while watching Tv on the bed or couch, reading book in a camper or on the beach and so on. The pillow is very soft, so you can also twist it in several positions and control how tight it will be around your neck with the ropes. There might be minor color variation between actual product and image shown on screen due to lighting on the photography.', 'travel7.jpg', 'travel7a.jpg', 'travel7b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Spice Herbal and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Spice Herbal . Address-239 Sant Nagar East Of Kailash New Delhi- 110095, country - India.'),
(30, '101 Panchatantra Stories', 'Dreamland Publications', 18, 119, 'Kindle Book', '', '101 Panchatantra Stories- a collection of all-time favourite stories written for children. These stories teach us lessons about wisdom, courage, bravery, wickedness and so on. Compiled in simple language, supported by beautiful illustrations each story of this book makes the reading on enjoyable experience', '101panchantrastories1.jpg', '101panchantrastories2.jpg', '101panchantrastories2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Dreamland Publication . Address-239 Sant Nagar East Of Kailash New Delhi- 110095,Country - India.'),
(31, 'The Rudest Book Ever', 'Shwetabh Gangwar', 20, 254, 'Kindle Book', '', 'Shwetabh Gangwar is a professional problem-solver—and he’s ace at it. For the past five years, people from all over the world have contacted him with their troubles and he’s worked these out for them.  In the process, he has picked up on a simple pattern: people need a set of principles and perspectives to protect them from all the unnecessary bullshit they go through. Codes to live by, essentially.', 'book2.jpg', 'book2a.jpg', 'book2a.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India. Address-239 Sant Nagar East Of Kailash New Delhi- 110065,Country - India.'),
(32, 'Chanakya Neeti English', 'Sawan and 2 more', 28, 100, 'Kindle Book', '', 'Sawan present book on Chanakya Neeti is a book based on Chanakya, an Indian theorist, teacher, philosopher, economist and a noble mentor to the Mauryan emperors between 350 -275 BC. The book portrays about his ideologies and ideas in diverse situations, which are pertinent even to today’s’ times. Chanakya was also known as Kautilya or Vishnu Gupta. He was prominent lecturer. He gave to much emphasis on state and wealth respectively. People follow his ideas to escape from the web of several evils to lead a happy and peaceful life.', 'book3a.jpg', 'book3b.jpg', 'book3a.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Sawan and 2 more. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,Country - India.'),
(33, 'How to Win Friends & influnce ', 'Dale Carnegie', 13, 250, 'Kindle Book', '', 'A classic adaptation of a timeless self-help book for the new era, How To Win Friends And Influence People In The Digital Age does a wonderful job in inspiring confidence and breeding leaders. The book tries not to preach, but instead uses common sense and a sense of awareness about the world, to help people achieve their highest potential. The book acknowledges that times are changing and fast and management styles from yesteryear, however effective, do not hold up in this corporate and digital world. You need fresh ideas and perspectives, new visions and enigmatic leadership.', 'book4.jpg', 'book4a.jpg', 'book5.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Dale Carnegie.  Address-239 Sant Nagar East Of Kailash New Delhi- 110045,Country - India.'),
(34, 'Harry Potter & Philosopher''s S', 'J . K . Rowling', 20, 430, 'Kindle Book', '', 'Gryffindor, Slytherin, Hufflepuff, Ravenclaw . Twenty years ago these magical words and many more flowed from a young writer''s pen, an orphan called Harry Potter was freed from the cupboard under the stairs - and a global phenomenon started. Harry Potter and the Philosopher''s Stone has been read and loved by every new generation since. To mark the 20th anniversary of first publication, Bloomsbury has published four House Editions of J.K. Rowling''s modern classic. These stunning editions each feature the individual house crest on the jacket and line illustrations exclusive to that house, by Kate Greenaway Medal winner Levi Pinfold.', 'book5.jpg', 'book5a.jpg', 'book6.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,Country - India.'),
(35, 'The Adventures of Suppandi -1', 'Luis Fernandes', 18, 196, 'Kindle Book', '', 'Tinkle is one of the most beloved and popular comic books of India. Many Indian children have a collection of the Tinkle comic books at home and has entered at least one of their famous creative competitions. The books are a hilarious and entertaining bunch of stories of various lovable characters. One such character is Supandi, the lovable goof who blunders around, befuddling and irritating a long string of employers.', 'book6.jpg', 'book6a.jpg', 'book7.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110045, Country - India.'),
(38, 'Women Grey Self Design Top', 'Eavan', 12, 1274, 'Cloth', '', 'Grey self-design woven regular top, has a round neck, and three-quarter sleeves. The model (height 5''8") is wearing a size S. The Material & Care of the items is Nylon and Dry-clean.', 'Femaletop1.jpg', 'Femaletop1a.jpg', 'Femaletop1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Eavan Store . Address-239 Sant Nagar East Of Kailash New Delhi- 110045, Country - India.'),
(39, 'Girls Blue Solid Shirt', 'Naughty ninos', 14, 1299, 'Cloth', '', 'Blue and Red self-design woven shirt dress, has a mandarin collar, long sleeves, button closure, and flared hem. The Material & Care of the item is Material: Cotton and  Machine Wash.', 'kids1.jpg', 'kids1a.jpg', 'kids1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Naughty ninos Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,Country - India.'),
(40, 'Red Solid Hooded Sweatshirt', 'Tokyo Talkies', 25, 519, 'Cloth', '', 'Red solid sweatshirt, has a hood, long sleeves, straight hem . The model (height 5''8") is wearing a size S. The  Material & Care is 52% Cotton 48% Polyester  and Machine-wash . It’s a overall good product in this price,it is thin but it will keep you warm in normal winters because it has inner layer of a warm soft material.', 'winterwear1.jpg', 'winterwear1a.jpg', 'winterwear1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Tokyo Talkies . Address-239 Sant Nagar East Of Kailash New Delhi- 110045, country - India.'),
(41, 'White & Maroon Solid Kurta Wit', 'DEYANN', 10, 2795, 'Cloth', '', 'White and maroon solid kurta with pyjamas and Nehru jacket White solid straight knee length kurta, has a mandarin collar, long sleeves, straight hem, side slits  Comes with a maroon printed Nehru jacket, has a mandarin collar, sleeveless, button closure, three pockets  White solid pyjamas, drawstring closure. The model (height 6'') is wearing a size M, Material & Care Top fabric: Dupion Silk Bottom fabric: Dupion Silk Dry-clean.', 'Menkurta1.jpg', 'Menkurta1a.jpg', 'Menkurta1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Deyann Store. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,Country - India.'),
(42, 'Green Georgette Saree', 'Chhabra 555', 11, 3995, 'Cloth', 'women', 'Green ombre-dyed ready to wear saree, has a waistband with hook-and-bar closure Comes . Material & Care Saree fabric: poly georgette Blouse fabric: poly georgette Dry-clean.The model (height 5''8") is wearing a size S.with a black sequinned stitched blouse, has a V-neck, short sleeves, concealed zip closure on the side, and padded cups. The model is wearing a stitched blouse that comes with the saree.', 'Psaree1.jpg', 'Psaree1a.jpg', 'Psaree1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Chhabra 555 Store .Address-239 Sant Nagar East Of Kailash New Delhi- 110045, Country - India.'),
(43, 'Blue & Off-White Printed Anark', 'Shae by SASSAFRAS', 13, 679, 'Cloth', 'women', 'Blue and Off-white printed anarkali kurta, has a keyhole neck, three-quarter sleeves, attached lining and flared hem.  The model (height 5''8") is wearing a size S. The Material & Care of the item is 93% Cotton and 7% linen  and Machine-wash. The Specifications of the item are  Sleeve Length :Three-Quarter Sleeves, Neck :Keyhole Neck, Design Styling: Pleated, Weave Pattern: Regular, Shape :Anarkali, Print or Pattern Type: Ethnic Motifs, Length :Calf Length, Colour Family: Indigo, Weave Type Machine Weave.', 'Ladieskurti1.jpg', 'Ladieskurti1a.jpg', 'Ladieskurti1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Supercom Net  and Delivered by Multibazer. Manufacturer/Packer/Importer Details Falcon Apparels, 351/1, 1st Floor, Bijwasan, Delhi 110061. Address-239 Sant Nagar East Of Kailash New Delhi- 110095, Country -India.'),
(44, 'Blue Solid Hooded Sweatshirt', 'Campus Sutra', 24, 879, 'Cloth', 'men', 'Blue solid sweatshirt, has a hood, long sleeves, 2 pockets. The Material & Care of the item is Cotton and Machine-wash. The Specifications of the item are Sleeve Length: Long Sleeves, Neck : Hood , Pattern :Solid ,Length :Regular , Type: Pullover,  Print or Pattern Type :Solid , Hood :Hooded, Number of Pockets :2.', 'top1.jpg', 'top1a.jpg', 'top1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: FlashStar Commerce and Delivered by Multibazer. Manufacturer/Packer/Importer Details Campus Sutra, 1st Floor, 1-1/E, 7th Cross, Above Girias Showroom, Opposite Indian Oil Petrol Pump, New Guddadahalli, Mysore Road, Bangalore - 560026, Karnataka , Country-India. '),
(45, 'White Printed Casual Shirt', 'HIGHLANDER', 22, 555, 'Cloth', 'men', 'White and Blue printed casual shirt, has a spread collar, short sleeves, button placket, curved hem, and 1 patch pocket. The model (height 6'') is wearing a size 40 and slim Fit. The Material & Care of the item Material: Cotton and Machine Wash. The Specifications of the item Sleeve Length :Short Sleeves ,Collar :Spread Collar, Fit :Slim Fit, Print or Pattern Type: Floral ,Occasion :Casual, Length: Regular ,Hemline: Curved ,Placket :Button Placket.', 'casualtop1.jpg', 'casualtop1a.jpg', 'casualtop1b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Flashstar Commerce and Delivered by Multibazer. Manufacturer/Packer/Importer Details Pradhan Mercantile Pvt Ltd plot #87-B Kiadb Industrial Area,2nd Phase Nosigere Village,Kasaba Hobli Malur563130, country -India.'),
(46, ' Brown Printed Shirt with Jeans', 'Kidling', 10, 2999, 'Cloth', 'kid', 'This clothing set consists of shirt and jeans Brown printed shirt, has a shirt collar, long sleeves Blue dyed jeans, has a button closure . The Size & Fit  of the item is Regular Fit  . The  Material & Care of the item Top fabric: Cotton Blend, Bottom fabric: Cotton Blend 60% Cotton,40% Denim, Comes with a rexine belt Hand-wash. Occasion Party Sleeve Length Long Sleeves Neck Shirt Collar Top Fabric Cotton Blend Bottom Fabric Cotton Blend ,Bottom Type: Trousers, Top Type: Shirt ,Bottom: Pattern Dyed.', 'kids2.jpg', 'kids2a.jpg', 'kids2b.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(52, 'B M C Digital Watch', 'B M C', 5, 250, 'Deal of the day', '', 'BMC Digital watches for boys, girls, watch band for kids. It can adjusted to any size. The dial flaunts characteristics of both digital watches.', 'royalwatches.jpg', 'royalwatches1.jpg', 'royalwatches2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - B M C Private Limited (509-510, Saini Market, Behind H Block, Palam bihar, Gurgaon 122017 ), Country - India.'),
(53, 'Kid School Bag', 'Tinytot', 7, 512, 'Deal of the day', '', 'Tinytot Kitty School Bag or backpack for girls with pencil pouch. Its made up of polyester and full featured pack makes space for everything essential with multiple zip pockets on the exterior.', 'kidsbag.jpg', 'kidsbag2.jpg', 'kidsbag3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer.Manufacturer/Packer/Importer Details - B M C Private Limited (509-510, Saini Market, Behind H Block, Palam bihar, Gurgaon 122017 ), Country - India. '),
(54, 'Pigeon steel water bottle', 'Pigeon', 10, 254, 'Deal of the day', '', 'pigeon is the india''s leading appliances and kitchenware brand. Pigeon brings you the latest high quality water bottles. Pigeon bling stainless steel water bottles are food grade, rust proof, leak proof, stainless steel and is maintainance free. Three water bottles can be used as sports bottle, office bottle, kid bottle etc. They can be used with straw for easy sipping of water.', 'steelwaterbottle.jpg', 'steelwaterbottle1.jpg', 'steelwaterbottle2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - B M C Private Limited (509-510, Saini Market, Behind H Block, Palam bihar, Gurgaon 122017 ), Country - India.'),
(55, 'Mop with wringer', 'Spotzero', 10, 999, 'Deal of the day', '', 'Spotzero by Milton elite spin mob with plastic auto folded handle for 360 degree cleaning. Durable, superior water absorbency, non- abrasive lint free, larger surface area, environment friendly.  .', 'mop.jpg', 'mop2.jpg', 'mop3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(56, 'Apple Ciber Vinegar', 'Wow', 8, 348, 'Deal of the day', '', 'Organic Apple Ciber vinegar has been used for thousands of years as a general tonic and folk remedy to help with healthy weight loss, lower blood presure, better digestion, more energy and much more.', 'appleCibervinegar1.jpg', 'appleCibervinegar2.jpg', 'appleCibervinegar3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: ATZRetail and Delivered by Multibazer. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(57, 'Printed T-shirt with Shorts', 'Cutiekins', 5, 719, 'Cloth', 'kid', 'This clothing set consists of t-shirt and Shots Yellow printed t-shirt, has a mandarin collar, Short sleeves Navy blue solid shorts, has a button closure . The Size & Fit  of the item is Regular Fit  . The  Material & Care of the item Top fabric: Cotton Blend, Bottom fabric: Cotton Blend 60% Cotton,40% Denim, Comes with a rexine belt Hand-wash. Occasion Party Sleeve Length Long Sleeves Neck Shirt Collar Top Fabric Cotton Blend Bottom Fabric Cotton Blend ,Bottom Type: Trousers, Top Type: Shirt ,Bottom: Pattern Dyed.', 'kids3a.jpg', 'kids3b.jpg', 'kids3c.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: FlashStar Commerce and Delivered by Multibazer. Manufacturer/Packer/Importer Details Campus Sutra, 1st Floor, 1-1/E, 7th Cross, Above Girias Showroom, Opposite Indian Oil Petrol Pump, New Guddadahalli, Mysore Road, Bangalore - 560026, Karnataka , Country-India.'),
(58, ' Tenali Raman', 'Maple Press', 7, 86, 'Kindle Book', '', 'This book consists of interesting stories about Tenali Raman, the Vikatakavi in the court of King Krishnadeva Raya during his reign in South India. Each tale in this book reveals some or all facets of Tenali’s character-wit, wisdom and fair play. He was the favourite courtier of King Krishnadeva Raya, advising him in matters of the state along with being a poet by profession. These stories will teach valuable morals to children through humourous anecdotes', 'book13.jpg', 'book13a.jpg', 'book13a.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India. Address-239 Sant Nagar East Of Kailash New Delhi- 110065,Country - India.'),
(59, 'Moral Stories', 'Maple Press ', 10, 80, 'Kindle Book', '', 'This book encloses in its pages poignant stories with relevant moral messages for the young readers. The friendly people and vivacious animal characters in these stories help us to learn important life lessons through their own examples of success or defeat, selfless help or selfish vile, and through the twists and turns in the situations that present themselves.', 'book22.jpg', 'book22.jpg', 'book22.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - Cloudtail India. Address-239 Sant Nagar East Of Kailash New Delhi- 110065,Country - India'),
(60, 'Vikram And Betaal', 'Maple Press', 6, 75, 'Kindle Book', '', 'This book consists of interesting tales of the mighty king Vikram and the willful ghost Betaal, which have enchanted the young and the old alike. Through these tales children will learn about the myriad of tricky questions that Betaal poses while riding the king’s back, and the quick, witty and thoughtful answers that king Vikram gives with his presence of mind. The book is replete with colourful pictures to give wings to the children’s imagination', 'book26.jpg', 'book26.jpg', 'book26.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(61, 'Full HD Smart LED TV', 'LG', 4, 26, 'Electronic', '', 'Resolution: Full HD (1920x1080) | Refresh Rate: 60 hertz | 178° wide viewing angle Connectivity: 2 HDMI ports to connect set top box, Blu-Ray players, gaming console | 2 USB ports to connect hard drives and other USB devices | IR Port to control connected devices like Soundbars, Receivers and Set top boxes Sound output: Inbuilt 20 Watts Powerful Speakers | Dolby Audio and DTS Tru Surround', 'appliences3.jpg', 'appliences3.jpg', 'appliences3.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: ATZRetail and Delivered by Multibazer. Address-239 Sant Nagar East Of Kailash New Delhi- 110045,India.'),
(62, 'Samsung 468 L Refrigerator', 'Samsung', 5, 27500, 'Electronic', '', 'Side-by-side refrigerator and Auto Defrost technology that prevents excess ice build up automatically 468 L gross capacity: Suitable for the daily requirements of a family with 5 or more members; Please note that Left side of the refrigerator is Freezer & right side is regular Fridge Warranty: 1 year on product, 5 years on compressor; For claiming warranty,', 'appliences1.jpg', 'appliences1.jpg', 'appliences1.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - B M C Private Limited (509-510, Saini Market, Behind H Block, Palam bihar, Gurgaon 122017 ), Country - India.'),
(63, 'Semi-automatic Washing Machine', 'LG', 8, 9980, 'Electronic', '', 'Capacity: 8 kg (wash) & 4.6 kg (dryer). Suitable for a family of 5-6 members; Economical machine with low water and energy consumption WARRANTY: 2 years on product and 5 years on motor. For claiming warranty, A) Go to ''Your orders'' section, B) select the product, C) Click on Get product support and D) schedule an appointment. No need to call anyone and wait in a queue. Hassle free process. Paperless Experience with complete visibility on every step of your warranty claim', 'appliences2.jpg', 'appliences2.jpg', 'appliences2.jpg', 'Please enter PIN code to check delivery time & Cash/Card on Delivery Availability. 100% Original Products. Free Delivery on order above Rs. 1199. Easy 30 days returns and exchanges. Sold by: Cloudtail India and Delivered by Multibazer. Manufacturer/Packer/Importer Details - B M C Private Limited (509-510, Saini Market, Behind H Block, Palam bihar, Gurgaon 122017 ), Country - India.');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `altnum` varchar(10) NOT NULL,
  `reg_date` varchar(31) NOT NULL,
  `image` varchar(150) NOT NULL default 'pcon.jpg',
  `cart_qty` int(250) NOT NULL,
  `wish_qty` int(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `fname`, `gender`, `email`, `pwd`, `addr`, `mob`, `altnum`, `reg_date`, `image`, `cart_qty`, `wish_qty`) VALUES 
(1, 'Moushumi', 'Female', 'moushumi@moushumi.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Vivekananda Nagar, Post East Udairajpur , Madhyamgram, Kolkata- 700129,India.', '123466', '654789', '09-09-2020', 'MOUSUMI GHOSH.jpg', 2, 1),
(2, 'Mou', 'Female', 'mou@mou.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Madhyamgram', '123456', '3435678899', 'Wed, 09 Sep 2020 10:33:45 +0000', 'images(9).jpg', 1, 2),
(3, 'binesh kumr', 'Male', 'binesh@binesh.com', '81b073de9370ea873f548e31b8adc081', 'Delhi', '456789', '', 'Wed, 09 Sep 2020 14:45:33 +0000', 'pcon.jpg', 0, 0),
(5, 'amit ghosh', 'Male', 'amit2001@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Delhi', '9456789', '976543', 'Wed, 30 Sep 2020 07:58:33 +0000', 'image1.jpg', 0, 0),
(6, 'deepa ghoshe', 'Female', 'deepa1234@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Bangalore', '9876543', '342156', 'Sun, 18 Oct 2020 09:11:22 +0000', 'book20.jpg', 1, 6),
(7, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:31:34 +0000', 'man.jpg', 0, 0),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:32:00 +0000', 'man.jpg', 0, 0),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:32:46 +0000', 'man.jpg', 0, 0),
(10, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:35:43 +0000', 'man.jpg', 0, 0),
(11, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:43:38 +0000', 'man.jpg', 0, 0),
(12, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:44:36 +0000', 'man.jpg', 0, 0),
(13, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:45:08 +0000', 'man.jpg', 0, 0),
(14, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:46:44 +0000', 'man.jpg', 0, 0),
(15, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 06:47:20 +0000', 'man.jpg', 1, 0),
(16, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 15:18:24 +0000', 'man.jpg', 0, 0),
(17, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 15:21:06 +0000', 'man.jpg', 0, 0),
(18, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 15:22:39 +0000', 'man.jpg', 0, 0),
(19, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 16:17:52 +0000', 'man.jpg', 0, 0),
(20, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Thu, 24 Dec 2020 16:30:03 +0000', 'man.jpg', 0, 0),
(21, 'Amal Ghosh', 'Male', 'amalghosh66@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'vivaananda nagar, madhyamgram,kolkata', '9812345679', '', 'Fri, 25 Dec 2020 08:22:16 +0000', 'man.jpg', 1, 0),
(22, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(23, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(24, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(25, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(26, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(27, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:24 +0000', 'man.jpg', 0, 0),
(28, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(29, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(30, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(31, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(32, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(33, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:29 +0000', 'man.jpg', 0, 0),
(34, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 0, 0),
(35, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 0, 0),
(36, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 0, 0),
(37, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 0, 0),
(38, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 0, 0),
(39, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Fri, 25 Dec 2020 09:05:42 +0000', 'man.jpg', 1, 0),
(40, 'Riya sen', 'Female', 'riya2345@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'west bengal', '987654321', '', 'Tue, 12 Jan 2021 06:11:19 +0000', 'woman.jpg', 3, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `wishlist`
-- 

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(250) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(250) NOT NULL,
  `user_id` int(20) NOT NULL,
  `pid` int(11) NOT NULL,
  `pbrand` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

-- 
-- Dumping data for table `wishlist`
-- 

INSERT INTO `wishlist` (`id`, `image`, `pname`, `price`, `user_id`, `pid`, `pbrand`) VALUES 
(1, 'royalwatches.jpg', 'B M C Digital Watch', 250, 2, 52, ''),
(2, 'kidsbag.jpg', 'Kid School Bag', 512, 2, 53, ''),
(19, 'royalwatches.jpg', 'B M C Digital Watch', 250, 6, 52, ''),
(22, 'steelwaterbottle.jpg', 'Pigeon steel water b', 254, 6, 54, ''),
(24, 'appleCibervinegar1.jpg', 'Apple Ciber Vinegar', 348, 6, 56, ''),
(26, 'kids1.jpg', 'Girls Blue Solid Shi', 1299, 2, 39, ''),
(27, 'travel2a.jpg', 'Soft Laptop Roller C', 2599, 2, 23, ''),
(33, 'appleCibervinegar1.jpg', 'Apple Ciber Vinegar', 348, 1, 56, ''),
(44, 'kids1.jpg', 'Girls Blue Solid Shi', 1299, 1, 39, ''),
(45, 'top1.jpg', 'Blue Solid Hooded Sw', 879, 1, 44, ''),
(46, 'casualtop1.jpg', 'White Printed Casual', 555, 1, 45, '');

