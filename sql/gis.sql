

CREATE TABLE `admin_login` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Adisa', 'a@a.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `geodata`
--

CREATE TABLE `geodata` (
  `id` int(30) NOT NULL,
  `place` varchar(200) NOT NULL,
  `pg` varchar(200) NOT NULL,
  `ff` varchar(200) NOT NULL,
  `ch` varchar(200) NOT NULL,
  `mq` varchar(200) NOT NULL,
  `ms` varchar(200) NOT NULL,
  `mk` varchar(200) NOT NULL,
  `ss` varchar(200) NOT NULL,
  `cl` varchar(200) NOT NULL,
  `sc` varchar(200) NOT NULL,
  `qt` varchar(200) NOT NULL,
  `hs` varchar(200) NOT NULL,
  `sr` varchar(200) NOT NULL,
  `ht` varchar(200) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `geodata` (`id`, `place`, `pg`, `ff`, `ch`, `mq`, `ms`, `mk`, `ss`, `cl`, `sc`, `qt`, `hs`, `sr`, `ht`, `hp`, `date`) VALUES
(1, 'all', '1', '3', '2', '1', '2', '1', '5', '1', '4', '3', '172', '1', '4', '1', '3/9/2019');



CREATE TABLE `map` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `distance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `map` (`id`, `name`, `image`, `latitude`, `longitude`, `distance`) VALUES
(1, 'main_gate', 'mg.png', 'Latitude 7 44'' 1.50"N', 'Longitude 8 31'' 17.00"E', '40 meters from check point'),
(2, 'registry', 'r.png', 'Latitude 7 33'' 1.53"N', 'Longitude 8 35'' 17.20"E', '150 meters from gate'),
(3, 'nasme_hq', 'nh.png', 'Latitude 7 35'' 1.56"N', 'Longitude 8 50'' 17.23"E', '50 meters from gate'),
(4, 'parade_ground', 'pg.png', 'Latitude 7 41'' 1.54"N', 'Longitude 8 36'' 17.21"E', '50 meters from gate'),
(5, 'command_day', 'cd.png', 'Latitude 7 78'' 2.54"N', 'Longitude 7 39'' 19.31"E', '300 meters from gate'),
(6, 'naites', 'n.png', 'Latitude 7 41'' 1.54"N', 'Longitude 8 36'' 17.21"E', '180 meters from gate'),
(7, 'mrs_hospital', 'mh.png', 'Latitude 7 42'' 1.54"N', 'Longitude 7 36'' 17.17"E', '61 meters from gate'),
(8, 'officers_mess', 'om.png', 'Latitude 7 21'' 1.34"N', 'Longitude 6 36'' 15.21"E', '55 meters from gate'),
(9, 'church', 'ch.png', 'Latitude 7 43'' 1.64"N', 'Longitude 8 36'' 17.51"E', '60 meters from gate'),
(10, 'mosque', 'mq.png', 'Latitude 7 44'' 1.62"N', 'Longitude 8 37'' 17.57"E', '62 meters from gate'),
(11, 'all', 'all.png', 'Latitude 7 43'' 1.64"N', 'Longitude 8 36'' 17.51"E', 'ALL POINT');



CREATE TABLE `user_login` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geodata`
--
ALTER TABLE `geodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `geodata`
--
ALTER TABLE `geodata`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
