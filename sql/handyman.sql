-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2021 г., 17:35
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `handyman`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sv_admin_login`
--

CREATE TABLE `sv_admin_login` (
  `admin_id` int(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `site_desc` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `paypal_id` varchar(200) NOT NULL,
  `currency_mode` varchar(200) NOT NULL,
  `paypal_site_mode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_admin_login`
--

INSERT INTO `sv_admin_login` (`admin_id`, `user_name`, `password`, `email_id`, `site_name`, `logo`, `favicon`, `site_desc`, `keyword`, `site_url`, `paypal_id`, `currency_mode`, `paypal_site_mode`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'kazakow_danil@mail.ru', 'k-systems', '460x8100a21980bd259d11e9a8783f18d622.jpg', '8765iconfinder-technologymachineelectronicdevice23-4026437_113360.ico', 'Technique repair tutorials', 'HTML,CSS,XML,JavaScript', 'http://k-systems', 'info@codexworld.com', 'RUB', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_city`
--

CREATE TABLE `sv_city` (
  `city_id` int(25) NOT NULL,
  `city_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_city`
--

INSERT INTO `sv_city` (`city_id`, `city_name`) VALUES
(8, 'Бугульма'),
(9, 'Казань'),
(10, 'Елабуга'),
(11, 'Набережные Челны'),
(12, 'Альметьевск');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_contact`
--

CREATE TABLE `sv_contact` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_contact`
--

INSERT INTO `sv_contact` (`id`, `name`, `email`, `contact_no`, `msg`) VALUES
(1, 'demo', 'demo@gmail.com', '5673466', 'msg');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_pages`
--

CREATE TABLE `sv_pages` (
  `id` int(25) NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_pages`
--

INSERT INTO `sv_pages` (`id`, `page_name`, `page_content`) VALUES
(1, 'home page', '<section id=\"trustandsecurity-teaser\" class=\"teaser home-img\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"container\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 home_icon\">\r\n<h3 style=\"color: black;\">CLEVER STAFF</h3>\r\n<p class=\"abt-staff\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>\r\n</div>\r\n</div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</section>\r\n<section id=\"trustandsecurity-teaser\" class=\"teaser\">\r\n<div class=\"container\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4 \"><img class=\"icon_round\" src=\"img/icon1.png\" />\r\n<p>Our Team</p>\r\n<h4><strong>2271</strong></h4>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4\"><img class=\"icon_round\" src=\"img/icon3.png\" />\r\n<p>Satisfied Clients</p>\r\n<h4><strong>5682</strong></h4>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4 col-sm-4\"><img class=\"icon_round\" src=\"img/icon2.png\" />\r\n<p>Jobs Done</p>\r\n<h4><strong>2685</strong></h4>\r\n</div>\r\n</div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</section>\r\n<section id=\"customer-testimonials-teaser\" class=\"slideshow-teaser teaser bg-secondary\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<h3>HAPPY CLIENTS</h3>\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div id=\"quote-carousel\" class=\"carousel slide\" data-ride=\"carousel\"><!-- Bottom Carousel Indicators --> <!-- Carousel Slides / Quotes -->\r\n<div class=\"carousel-inner\"><!-- Quote 1 -->\r\n<div class=\"item active\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-12\">\r\n<p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</p>\r\n<img class=\"test-client\" src=\"img/img1.jpg\" /> <small><strong class=\"test-name clearfix\">Vulputate M., Dolor</strong></small></div>\r\n</div>\r\n</div>\r\n<!-- Quote 3 -->\r\n<div class=\"item\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-12\">\r\n<p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</p>\r\n<img class=\"test-client\" src=\"img/img3.jpg\" /> <small><strong class=\"test-name clearfix\">Aenean A., Justo Cras</strong></small></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</section>'),
(2, 'how it works', '<section class=\"teaser bg-primary three-columns\">\r\n<div class=\"container\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<h3>Забронируйте помощь на 800 рублей &ndash; всего 3 простых шага</h3>\r\n<ul>\r\n<li class=\"home_icon col-md-4 col-sm-4\"><span class=\"fa fa-map font-icon\">&nbsp;</span>\r\n<p><strong>Введите ваше местоположение</strong></p>\r\n<p>Введите адрес, по которому может выехать мастер для устранения неполадки</p>\r\n</li>\r\n<li class=\"home_icon col-md-4 col-sm-4\"><span class=\"fa fa-calendar-o font-icon\">&nbsp;</span>\r\n<p><strong>Запись</strong></p>\r\n<p>Выберите дату и время, которые вам больше всего подходят.</p>\r\n</li>\r\n<li class=\"home_icon col-md-4 col-sm-4\"><span class=\"fa fa-smile-o font-icon\">&nbsp;</span>\r\n<p><strong>Насладждайтесь исправной техникой</strong></p>\r\n<p>Устройтесь поудобнее и наслаждайтесь. Об остальном позаботимся мы.</p>\r\n</li>\r\n</ul>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</div>\r\n</section>\r\n<section class=\"teaser work-bg\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"container\">\r\n<h2>Самые частые вопросы</h2>\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"panel-group\" data-fillspace=\"0\" data-event=\"click\" data-collapsible=\"0\" data-clearstyle=\"0\" data-animated=\"slide\" data-active=\"0\" data-disabled=\"0\" data-autoheight=\"0\">\r\n<div class=\"col-lg-3 col-md-3 col-sm-3\">\r\n<div class=\"panel qstn-bg\">\r\n<div class=\"panel-heading head\">\r\n<div class=\"question\">Вопросы</div>\r\n</div>\r\n<div class=\"text\">\"У меня сломалась видеокарта, куллера крутятся, черный экран, что может быть?\"\r\n- Неисправность станет известна после проведения диагностики.\r\n\"Как? И всё?! А подробности?! А поговорить?! Нет, давайте порассуждаем! Вот в интернете пишут...\"</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-3 col-sm-3\">\r\n<div class=\"panel qstn-bg\">\r\n<div class=\"panel-heading head\">\r\n<div class=\"question\">Вопросы</div>\r\n</div>\r\n<div class=\"text\">\"У меня сломалась видеокарта, куллера крутятся, черный экран, что может быть?\"\r\n- Неисправность станет известна после проведения диагностики.\r\n\"Как? И всё?! А подробности?! А поговорить?! Нет, давайте порассуждаем! Вот в интернете пишут...\"</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-3 col-sm-3\">\r\n<div class=\"panel qstn-bg\">\r\n<div class=\"panel-heading head\">\r\n<div class=\"question\">Вопросы</div>\r\n</div>\r\n<div class=\"text\">\"У меня сломалась видеокарта, куллера крутятся, черный экран, что может быть?\"\r\n- Неисправность станет известна после проведения диагностики.\r\n\"Как? И всё?! А подробности?! А поговорить?! Нет, давайте порассуждаем! Вот в интернете пишут...\"</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-3 col-md-3 col-sm-3\">\r\n<div class=\"panel qstn-bg\">\r\n<div class=\"panel-heading head\">\r\n<div class=\"question\">Вопросы</div>\r\n</div>\r\n<div class=\"text\">\"У меня сломалась видеокарта, куллера крутятся, черный экран, что может быть?\"\r\n- Неисправность станет известна после проведения диагностики.\r\n\"Как? И всё?! А подробности?! А поговорить?! Нет, давайте порассуждаем! Вот в интернете пишут...\"</div>\r\n</div>\r\n</div>\r\n<p class=\"actions\">&nbsp;</p>\r\n</div>\r\n</div>\r\n</section>\r\n<section style=\"text-align: center; background-color: #f3f3f3;\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"container\">\r\n<div class=\"col-lg-6 col-md-6 col-sm-6\"><img class=\"img-responsive\" src=\"../img/bucket.png\" /></div>\r\n<div class=\"col-lg-6 col-md-6 col-sm-6\">\r\n<div class=\"email\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<p><strong>Не смогли найти то, что искали?</strong> <br />Отправьте нам письмо по электронной почте</p>\r\n<p class=\"actions\"><a class=\"btn btn-primary btn-sm\" href=\"mailto:kazakow_danil@mail.ru\">Email</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</section>'),
(3, 'pricing', '<section class=\"teaser bg-primary\">\r\n<div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n<h3>60 секунд до вашего бронирования</h3>\r\n<p class=\"actions\"><a class=\"btn btn-secondary btn-lg\" href=\"../index.php\" data-checkout=\"true\">Забронируйте помощь</a></p>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</div>\r\n</section>\r\n<section id=\"price\" class=\"teaser padding-top\">\r\n<div class=\"container\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<div class=\"col-lg-6 col-md-6 col-sm-6\">\r\n<div class=\"single-booking\">\r\n<h3>Разовое бронирование</h3>\r\n<h4 style=\"text-align: center;\">800 рублей</h4>\r\n<h5 class=\"sub-head\">Включая налог на товары и услуги (GST), если применимо *</h5>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Один ремонт</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Нет обязывающего контракта</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Гибкое онлайн-бронирование</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 col-sm-6\">\r\n<div class=\"single-booking recurring\">\r\n<h3>Повторяющееся бронирование</h3>\r\n<h4 style=\"text-align: center; color: #66bb6a;\">700 рублей</h4>\r\n<h5 class=\"sub-head1\">Включая налог на товары и услуги (GST), если применимо *</h5>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Постоянный ремонт по поломке одной и той же детали</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Цена со скидкой</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Забронируйте мастера</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Нет обязывающего контракта</div>\r\n<div class=\"price-icon\">&nbsp;&nbsp;&nbsp;Гибкое онлайн-бронирование</div>\r\n</div>\r\n</div>\r\n<div class=\"min-space\">&nbsp;</div>\r\n</div>\r\n</section>'),
(4, 'help', '<section class=\"teaser most_freq_ques\">\r\n<div class=\"container\">\r\n<div class=\"min-space\">&nbsp;</div>\r\n<h4>Самые частые вопросы</h4>\r\n<div id=\"accordion-1\" class=\"accordion-font\">\r\n<h3 class=\"help-title\">Как работает помощь?</h3>\r\n<div>\r\n<p class=\"help\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum volutpat justo quis cursus. Sed sit amet eros nec nibh vestibulum interdum. Praesent id sapien sem. Aenean varius laoreet urna, quis iaculis ex egestas volutpat. Praesent porta dignissim libero ac viverra. Ut non dignissim ante, gravida porta lacus. Maecenas felis neque, imperdiet a vestibulum ut, tempus sed tellus. Integer volutpat, mi et sagittis rhoncus, nulla nibh pharetra ante, ut laoreet nibh ipsum non dolor. Fusce vel velit porttitor, viverra metus eu, rhoncus tortor. Sed vulputate varius molestie.</p>\r\n</div>\r\n<h3 class=\"help-title\">Чем помощь отличается от сервисной компании</h3>\r\n<div>\r\n<p class=\"help\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum volutpat justo quis cursus. Sed sit amet eros nec nibh vestibulum interdum. Praesent id sapien sem. Aenean varius laoreet urna, quis iaculis ex egestas volutpat. Praesent porta dignissim libero ac viverra. Ut non dignissim ante, gravida porta lacus. Maecenas felis neque, imperdiet a vestibulum ut, tempus sed tellus. Integer volutpat, mi et sagittis rhoncus, nulla nibh pharetra ante, ut laoreet nibh ipsum non dolor. Fusce vel velit porttitor, viverra metus eu, rhoncus tortor. Sed vulputate varius molestie.</p>\r\n</div>\r\n<h3 class=\"help-title\">Как зарегистрироваться?</h3>\r\n<div>\r\n<p class=\"help\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum volutpat justo quis cursus. Sed sit amet eros nec nibh vestibulum interdum. Praesent id sapien sem. Aenean varius laoreet urna, quis iaculis ex egestas volutpat. Praesent porta dignissim libero ac viverra. Ut non dignissim ante, gravida porta lacus. Maecenas felis neque, imperdiet a vestibulum ut, tempus sed tellus. Integer volutpat, mi et sagittis rhoncus, nulla nibh pharetra ante, ut laoreet nibh ipsum non dolor. Fusce vel velit porttitor, viverra metus eu, rhoncus tortor. Sed vulputate varius molestie.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>'),
(5, 'contact', '<p><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2314.275651423248!2d52.787659815844385!3d54.546266080247946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4161a8d7e9095c35%3A0x11b61632906afcb5!2z0YPQuy4g0JvQtdC90LjQvdCwLCAy0LEsINCR0YPQs9GD0LvRjNC80LAsINCg0LXRgdC_LiDQotCw0YLQsNGA0YHRgtCw0L0sIDQyMzIzMA!5e0!3m2!1sru!2sru!4v1613419907424!5m2!1sru!2sru\" width=\"100%\" height=\"360\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<h3 class=\"sv_contact_address\">Сведения об адресе</h3>\r\n<p>Наш адрес: 423230, Республика Татарстан</p>\r\n<p>г.Бугульма, ул. Владимира Ленина, 2Б</p>\r\n<p>тел.: (85594) 4-20-20, 6-15-51, моб.: +79375200000</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_services`
--

CREATE TABLE `sv_services` (
  `services_id` int(25) NOT NULL,
  `services_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `service_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_services`
--

INSERT INTO `sv_services` (`services_id`, `services_name`, `service_img`) VALUES
(2, 'Карманные компьютеры, коммуникаторы и GPS-навигаторы', '1736OFJBqBEwn8I.jpg'),
(3, 'Сотовые телефоны, планшеты, электронные книги', '37421.jpg'),
(4, 'Ремонт телевизоров, аудиоаппаратуры, видеоаппаратуры и бытовой техники (без стоимости сменных частей)', '9842693_original.png'),
(5, 'Оборудование и периферия', '296196976ed4d4e8e74d7ef1a46cfe890efc.png'),
(6, 'Установка и настройка программного обеспечения', '8584PAoyvhsfTL8.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_services_sub`
--

CREATE TABLE `sv_services_sub` (
  `sid` int(20) NOT NULL,
  `services_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `services_sub_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_services_sub`
--

INSERT INTO `sv_services_sub` (`sid`, `services_name`, `services_sub_name`, `price`) VALUES
(2, '2', 'Устранение неполадок материнской платы', 500),
(4, '3', 'Замена корпуса устройства', 1000),
(5, '4', 'ЖК-телевизоры до 24 дюймов (60 см)', 1200),
(6, '5', 'Диагностика (в случае отказа в ремонте платная)', 400),
(7, '6', 'СТАНДАРТНЫЙ ПАКЕТ (Windows 7 Office Antivirus Archiver mp3-плеер DVD-плеер, фоторедактор и т. Д.)', 1200),
(8, '3', 'Замена корпуса устройства', 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `sv_service_provider`
--

CREATE TABLE `sv_service_provider` (
  `id` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirm_email` varchar(255) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mob_no` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `paid_work` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `suburb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `abt_us` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `creat_time` date NOT NULL,
  `update_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_service_provider`
--

INSERT INTO `sv_service_provider` (`id`, `email`, `confirm_email`, `first_name`, `last_name`, `mob_no`, `post_code`, `exp`, `paid_work`, `gender`, `dob`, `nationality`, `address`, `suburb`, `abt_us`, `phone_no`, `creat_time`, `update_time`) VALUES
(1, 'athi@gmail.com', 'athi@gmail.com', 'athi', 'lakshmi', '6987541236', '96265', '1', '1', '1', '2017-04-20', 'nationality', '              ', 'location', '', '111', '2017-04-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_user_order`
--

CREATE TABLE `sv_user_order` (
  `order_id` int(25) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `services` varchar(255) NOT NULL,
  `sub_services` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `order_time` varchar(200) NOT NULL,
  `requirement` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `order_phone_no` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `price` int(200) NOT NULL,
  `payment_mode` varchar(200) NOT NULL,
  `payment_status` varchar(200) NOT NULL,
  `currency_code` varchar(200) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_user_order`
--

INSERT INTO `sv_user_order` (`order_id`, `name`, `address`, `services`, `sub_services`, `date`, `order_time`, `requirement`, `order_phone_no`, `phone_no`, `city_name`, `price`, `payment_mode`, `payment_status`, `currency_code`) VALUES
(8, 'Данил', 'демо', '5', '6', '2021-02-25', '3:00 PM', '        ', '111', '111', '8', 400, 'cash', 'completed', '-');

-- --------------------------------------------------------

--
-- Структура таблицы `sv_user_profile`
--

CREATE TABLE `sv_user_profile` (
  `signup_id` int(25) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `gender` int(25) DEFAULT NULL,
  `date` date NOT NULL,
  `updat_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `sv_user_profile`
--

INSERT INTO `sv_user_profile` (`signup_id`, `name`, `email_id`, `password`, `phone_no`, `city`, `address`, `pin_code`, `gender`, `date`, `updat_time`) VALUES
(7, 'Данил', 'kazakow_danil@mail.ru', '698d51a19d8a121ce581499d7b701668', '111', 'Бугульма', 'demo', '111', 1, '2021-02-16', '2021-02-16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sv_admin_login`
--
ALTER TABLE `sv_admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `sv_city`
--
ALTER TABLE `sv_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Индексы таблицы `sv_contact`
--
ALTER TABLE `sv_contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sv_pages`
--
ALTER TABLE `sv_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sv_services`
--
ALTER TABLE `sv_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Индексы таблицы `sv_services_sub`
--
ALTER TABLE `sv_services_sub`
  ADD PRIMARY KEY (`sid`);

--
-- Индексы таблицы `sv_service_provider`
--
ALTER TABLE `sv_service_provider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sv_user_order`
--
ALTER TABLE `sv_user_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `sv_user_profile`
--
ALTER TABLE `sv_user_profile`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `sv_admin_login`
--
ALTER TABLE `sv_admin_login`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sv_city`
--
ALTER TABLE `sv_city`
  MODIFY `city_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `sv_contact`
--
ALTER TABLE `sv_contact`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sv_pages`
--
ALTER TABLE `sv_pages`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `sv_services`
--
ALTER TABLE `sv_services`
  MODIFY `services_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sv_services_sub`
--
ALTER TABLE `sv_services_sub`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `sv_service_provider`
--
ALTER TABLE `sv_service_provider`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sv_user_order`
--
ALTER TABLE `sv_user_order`
  MODIFY `order_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `sv_user_profile`
--
ALTER TABLE `sv_user_profile`
  MODIFY `signup_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
