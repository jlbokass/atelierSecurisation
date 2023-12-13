CREATE TABLE IF NOT EXISTS `as-users` (
                                          `id` int(11) NOT NULL AUTO_INCREMENT,
                                          `firstname` varchar(255) NOT NULL,
                                          `lastname` varchar(255) NOT NULL,
                                          `password` varchar(255) NOT NULL,
                                          `email` varchar(255) NOT NULL,
                                          `phone` varchar(12) NOT NULL,
                                          `description` TEXT NOT NULL,
                                          `created_at` datetime NOT NULL DEFAULT now(),
                                          `updated_at` datetime,
                                          PRIMARY KEY (`id`),
                                          UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;