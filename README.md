# test

query for table questions

CREATE TABLE `fquestions` (`id` int(4) NOT NULL AUTO_INCREMENT, `topic` varchar(255) NOT NULL DEFAULT '', `detail` longtext NOT NULL, `name` varchar(65) NOT NULL DEFAULT '', `datetime` varchar(25) NOT NULL DEFAULT '', `view` int(4) NOT NULL DEFAULT '0', `reply` int(4) NOT NULL DEFAULT '0', PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



query for answers

CREATE TABLE `fanswer` ( `question_id` int(4) NOT NULL DEFAULT '0', `a_id` int(4) NOT NULL DEFAULT '0', `a_name` varchar(65) NOT NULL DEFAULT '', `a_answer` longtext NOT NULL,`a_datetime` varchar(25) NOT NULL DEFAULT '', KEY `a_id` (`a_id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;
