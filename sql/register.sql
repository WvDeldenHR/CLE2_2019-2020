CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name_parent` varchar(50) NOT NULL,
  `last_name_parent` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `first_name_child` varchar(50) NOT NULL,
  `age_day` int(2) NOT NULL,
  `age_month` varchar(12) NOT NULL,
  `age_year` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bijzonderheden` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;