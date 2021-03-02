-- База данных: `company`
-- Структура таблицы `category`
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_status` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(0, 'Bank', 0),
(7, 'Medcine', 0),
(10, 'Textile', 0),
(11, 'sdvdsv', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `addres`, `phone_number`, `email`, `category_id`) VALUES
(1, 'AO 1', 'Almaty, Abay 1', '87772574585', 'asd@mail.ru', 0),
(3, 'AO 2', 'Almaty, Abay 2', '87274545682', 'asdf@mail.ru', 0),
(4, 'AO 3', 'Almaty, Abay 3', '87275455454', 'asdf@gmail.ru', 0),
(5, 'AO 4', 'Almaty, Abay 4', '87274545454', 'asdfgh@mail.ru', 0),
(12, 'AO 5', 'Abay 17', '444-444-4444', 'asdfghjkl@gmail.com', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `full_name`, `status`) VALUES
(5, 'test@mail.ru', '098f6bcd4621d373cade4e832627b4f6', 'test user', 1),
(6, 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `visits_name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  `visits_date` datetime NOT NULL,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `visits`
--

INSERT INTO `visits` (`visit_id`, `visits_name`, `status`, `type`, `employee_name`, `details`, `visits_date`, `company_id`) VALUES
(1, 'Vocate', 0, 0, 'Askar Armanov', 'Details', '2021-02-26 18:16:36', 1),
(3, 'Vocate 2', 2, 0, 'Arman', 'Detail', '2021-12-31 23:59:00', 1),
(5, 'Vocate 2', 0, 0, 'sdas', 'Detail', '2021-12-01 22:59:00', 4);

