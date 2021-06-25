-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.2.30
-- Время создания: Июн 07 2021 г., 21:06
-- Версия сервера: 5.7.31-34
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `f0550120_green_alley`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `brief` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`, `brief`, `title`, `image`) VALUES
(1, 'Мы не просто создаём ландшафтный дизайн на Вашем участке. А стараемся продумать для Вас максимально удобную, красивую, функциональную зону отдыха на долгие годы. Оказываем весь спектр работ от проекта, до озеленения, и несём полную ответственность за выполненные работы! Отличительные черты наших проектов — высокое качество, хороший вкус, стиль. Мы дорожим своей репутацией, любим свое дело, серьезно подходим к любому участку и внимательно относимся к каждому клиенту. Обещают многие, воплощаем идеи — Мы!', '2021-04-03 16:33:10', '2021-04-04 08:40:46', 'Мы не просто создаём ландшафтный дизайн на Вашем участке. А стараемся продумать для Вас максимально удобную, красивую, функциональную зону отдыха на долгие годы. Оказываем весь спектр работ от проекта, до озеленения, и несём полную ответственность за выполненные работы!', 'Добро пожаловать!', 'about_1617535366_1617543646.jpg'),
(2, 'Мы ландшафтные дизайнеры работаем с 2020 года и за это время успели накопить богатый опыт в оформлении садовых участков. Оказываем весь спектр услуг по проектированию, благоустройству и озеленению в Челябинске и Челябинской области. Мы не просто производим рассадку деревьев и кустарников, но и стараемся создать гармоничную и здоровую экосистему на озеленяемой территории.\nВ компании «Зеленая аллея» работают профессионалы своего дела: опытные ландшафтные дизайнеры, дендрологи, инженеры. Мы не привлекаем к работам сторонних, случайных людей. Все наши бригады по озеленению и благоустройству участков сформированы давно и подтвердили свой профессиональный опыт сотнями выполненных качественных проектов.', '2021-04-03 16:33:12', '2021-04-03 16:33:15', 'Стараемся создавать профессиональные проекты с индивидуальным подходом к вашим замыслам, осуществляем качественное обслуживание территории в течение всего года.', 'Наше призвание – делать мир красивее и лучше!', 'about-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `bids`
--

CREATE TABLE `bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `bids`
--

INSERT INTO `bids` (`id`, `name`, `email`, `number`, `id_service`, `created_at`, `updated_at`, `status`, `description`) VALUES
(2, 'Natalie', 'n@mail.ru', '89518007141', 22, '2021-03-31 08:44:15', '2021-05-27 01:19:08', 1, 'asd'),
(6, 'Alice', 'a@mail.ru', '75645642315312', 12, '2021-03-31 09:08:33', '2021-04-16 04:47:29', 1, 'gfdgdf');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_services`
--

CREATE TABLE `categories_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories_services`
--

INSERT INTO `categories_services` (`id`, `title`, `brief`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Проектирование', 'Проектирование комфортного пространства для жизни, работы и отдыха', 'project.jpg', '2021-03-20 05:45:52', '2021-03-22 03:34:53'),
(2, 'Благоустройство', 'Создание комфортного пространства для жизни, работы и отдыха', 'scale_1200 (1)_1617794319_1618044603.webp', '2021-03-20 05:45:52', '2021-04-10 03:50:03'),
(3, 'Озеленение', 'Озеленение комфортного пространства для жизни, работы и отдыха', 'landscaping2.jpg', '2021-03-20 05:45:54', '2021-03-20 05:45:56'),
(4, 'Дополнительные услуги', 'Создание комфортного пространства для жизни, работы и отдыха', 'business-2_1616473584.jpg', '2021-03-20 05:45:54', '2021-03-22 23:26:24'),
(20, 'Услуги садовника', 'Профессиональный уход за садом или любым озеленённым объектом.', 'eminence-certified-organic-farm-8-plants-hard-to-kill_1618566426.jpg', '2021-04-16 04:47:06', '2021-04-16 04:47:06');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_hours` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `address`, `number`, `email`, `opening_hours`) VALUES
(2, '2021-03-29 03:04:47', '2021-03-29 03:04:47', '844262, Челябинская область, город Челябинск, пер. Ломоносова, 99\n', '+7 (951) 372-81-33\n', 'greenalley@gmail.com\n', 'Пн - Пт 9.00 - 18.00\n');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `surname`, `name`, `image`, `post`, `created_at`, `updated_at`) VALUES
(1, 'Миронов', 'Никита', '3_1616995493.jpg', 'Архитектор-дизайнер', '2021-03-20 06:33:43', '2021-03-29 00:24:53'),
(2, 'Савицкая', 'Мария', 'beautiful-young-woman-in-a-red-shirt-and-glasses-near-a-laptop-on-a-pink-wall_219728-3256_1616996181.jpg', 'Дизайнер-визуализатор', '2021-03-20 06:34:03', '2021-03-29 00:36:21'),
(3, 'Зотов', 'Александр', '1_1616995472.jpg', 'Ландшафтный работник', '2021-03-20 06:34:18', '2021-03-29 00:24:32'),
(4, 'Медведева', 'Агата', 'young-gardener-caucasian-woman-isolated-smiling-and-pointing-aside-showing-something-at-blank-space_1187-115433_1616995786.jpg', 'Ведущий агроном', '2021-03-20 06:34:43', '2021-03-29 00:29:46'),
(5, 'Платонов', 'Данил', 'photo-of-handsome-virile-muscles-guy-hold-arms-crossed-self-confident-best-manual-worker-skilled-engineer-wear-green-t-shirt-blue-safety-dungarees-isolated-grey-wall_274222-14836_1616995881.jpg', 'Садовник', '2021-03-20 06:34:32', '2021-03-29 00:31:21');

-- --------------------------------------------------------

--
-- Структура таблицы `images_styles`
--

CREATE TABLE `images_styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images_styles`
--

INSERT INTO `images_styles` (`id`, `name`, `style_id`, `created_at`, `updated_at`) VALUES
(6, 'classic_1617818521.jpg', 1, '2021-04-07 12:59:42', '2021-04-07 13:02:01'),
(7, 'classic-2_1617825249.jpg', 1, '2021-04-07 14:54:09', '2021-04-07 14:54:09'),
(8, 'classic-3_1617825255.jpg', 1, '2021-04-07 14:54:15', '2021-04-07 14:54:15'),
(9, 'classic-4_1617826208.jpg', 1, '2021-04-07 15:10:08', '2021-04-07 15:10:08'),
(10, 'england-3_1617826223.jpg', 2, '2021-04-07 15:10:23', '2021-04-07 15:10:23'),
(11, 'england-4_1617826231.jpg', 2, '2021-04-07 15:10:31', '2021-04-07 15:10:31'),
(12, 'england_1617826247.jpg', 2, '2021-04-07 15:10:47', '2021-04-07 15:10:47'),
(13, 'england-2_1617826252.jpg', 2, '2021-04-07 15:10:52', '2021-04-07 15:10:52'),
(14, 'village_1617826267.jpg', 3, '2021-04-07 15:11:07', '2021-04-07 15:11:07'),
(15, 'village-3_1617826278.jpg', 3, '2021-04-07 15:11:18', '2021-04-07 15:11:18'),
(16, 'village-4_1617826286.jpg', 3, '2021-04-07 15:11:26', '2021-04-07 15:11:26'),
(17, 'high-tech_1617826319.jpg', 4, '2021-04-07 15:11:59', '2021-04-07 15:11:59'),
(18, 'high-tech-2_1617826326.jpg', 4, '2021-04-07 15:12:06', '2021-04-07 15:12:06'),
(19, 'high-tech-3_1617826334.jpg', 4, '2021-04-07 15:12:14', '2021-04-07 15:12:14'),
(20, 'modern_1617826370.jpg', 5, '2021-04-07 15:12:50', '2021-04-07 15:12:50'),
(21, 'modern-2_1617826377.jpg', 5, '2021-04-07 15:12:57', '2021-04-07 15:12:57'),
(22, 'modern-3_1617826384.jpg', 5, '2021-04-07 15:13:04', '2021-04-07 15:13:04'),
(23, 'modern-4_1617826392.jpg', 5, '2021-04-07 15:13:12', '2021-04-07 15:13:12'),
(24, 'minimalizm_1617826407.webp', 6, '2021-04-07 15:13:27', '2021-04-07 15:13:27'),
(25, 'minimalizm_1617826414.jpg', 6, '2021-04-07 15:13:34', '2021-04-07 15:13:34'),
(26, 'minimalizm-2_1617826420.jpg', 6, '2021-04-07 15:13:40', '2021-04-07 15:13:40'),
(27, 'minimalizm-4_1617826427.jpg', 6, '2021-04-07 15:13:47', '2021-04-07 15:13:47'),
(28, 'eco_1617826438.jpg', 7, '2021-04-07 15:13:58', '2021-04-07 15:13:58'),
(29, 'eco-2_1617826444.jpg', 7, '2021-04-07 15:14:04', '2021-04-07 15:14:04'),
(30, 'eco-3_1617826450.jpg', 7, '2021-04-07 15:14:10', '2021-04-07 15:14:10'),
(31, 'eco-4_1617826455.jpg', 7, '2021-04-07 15:14:15', '2021-04-07 15:14:15'),
(32, 'japan-3_1617826466.jpg', 8, '2021-04-07 15:14:26', '2021-04-07 15:14:26'),
(33, 'japan-2_1617826473.jpg', 8, '2021-04-07 15:14:33', '2021-04-07 15:14:33'),
(34, 'japan-3_1617826480.webp', 8, '2021-04-07 15:14:40', '2021-04-07 15:14:40'),
(35, 'japan_1617826487.jpg', 8, '2021-04-07 15:14:47', '2021-04-07 15:14:47'),
(36, 'japan-2_1617826493.webp', 8, '2021-04-07 15:14:53', '2021-04-07 15:14:53');

-- --------------------------------------------------------

--
-- Структура таблицы `images_works`
--

CREATE TABLE `images_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_work` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images_works`
--

INSERT INTO `images_works` (`id`, `name`, `id_work`, `created_at`, `updated_at`) VALUES
(26, 'planirovka-uchastka-001_1617791175.jpg', 2, '2021-04-07 05:26:15', '2021-04-07 05:26:15'),
(27, '4c675e8a80124519cfed096e2554fe3e_1617791183.jpg', 2, '2021-04-07 05:26:23', '2021-04-07 05:26:23'),
(28, 'cover_barvikha_1617791192.jpg', 2, '2021-04-07 05:26:32', '2021-04-07 05:26:32'),
(29, 'f74bb2abdbb08ba402e811d855e22b6f_1617791292.jpg', 4, '2021-04-07 05:28:12', '2021-04-07 05:28:12'),
(30, 'f_1243_1617791298.jpg', 4, '2021-04-07 05:28:18', '2021-04-07 05:28:18'),
(31, 'esquisse_cover-uai-1348x899_1617791308.jpg', 4, '2021-04-07 05:28:28', '2021-04-07 05:28:28'),
(33, 'tui-v-landshaftnom-dizajne_1617791377.jpg', 5, '2021-04-07 05:29:37', '2021-04-07 05:29:37'),
(34, '3-16_1617791384.jpg', 5, '2021-04-07 05:29:44', '2021-04-07 05:29:44'),
(35, 'P_20170604_131006_1617791581.jpg', 6, '2021-04-07 05:33:01', '2021-04-07 05:33:01'),
(36, 'landsh55_1617791586.jpg', 6, '2021-04-07 05:33:06', '2021-04-07 05:33:06'),
(37, '3_1617791591.jpeg', 6, '2021-04-07 05:33:11', '2021-04-07 05:33:11'),
(38, 'trees-and-shrubs-5_1617791757.jpg', 7, '2021-04-07 05:35:57', '2021-04-07 05:35:57'),
(39, 'ce08fb2952528ba08facc4fd8a6b7349_1617791763.jpg', 7, '2021-04-07 05:36:03', '2021-04-07 05:36:03'),
(40, '28-min-1_1617791769.jpg', 7, '2021-04-07 05:36:09', '2021-04-07 05:36:09');

-- --------------------------------------------------------

--
-- Структура таблицы `measure_units`
--

CREATE TABLE `measure_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `measure_units`
--

INSERT INTO `measure_units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'сотка', '2021-03-20 06:00:34', '2021-03-20 06:00:35'),
(2, 'м2', '2021-03-20 06:00:35', '2021-03-20 06:00:36'),
(3, 'м3', '2021-03-20 06:00:37', '2021-03-20 06:00:37'),
(4, 'ед', '2021-03-20 06:00:38', '2021-03-20 06:00:39');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2021_03_05_140642_create_categories_table', 1),
(5, '2021_03_05_140705_create_posts_table', 1),
(6, '2021_03_05_143233_create_permission_tables', 1),
(7, '2021_03_19_014623_create_pages_table', 1),
(8, '2021_03_19_024113_create_categories_services_table', 1),
(9, '2021_03_19_030145_create_measure_units_table', 1),
(10, '2021_03_19_035851_create_services_table', 1),
(11, '2021_03_19_040239_create_employees_table', 1),
(12, '2021_03_19_040305_create_contacts_table', 1),
(13, '2021_03_19_040323_create_about_us_table', 1),
(14, '2021_03_19_040348_create_about_images_table', 1),
(15, '2021_03_19_040404_create_images_service_table', 1),
(16, '2021_03_19_040418_create_works_table', 1),
(17, '2021_03_20_034631_create_specifications_table', 1),
(18, '2021_03_20_053148_create_images_works_table', 2),
(19, '2021_03_23_060621_create_bids_table', 3),
(20, '2021_04_02_062111_create_socials_table', 4),
(21, '2021_04_07_115055_create_styles_table', 5),
(22, '2021_04_07_120106_create_images_styles_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Главная', '2021-03-21 14:38:35', '2021-03-21 14:38:36'),
(2, 'О нас', '2021-03-21 14:38:42', '2021-03-21 14:38:42'),
(3, 'Услуги', '2021-03-21 14:38:47', '2021-03-21 14:38:48'),
(4, 'Наши работы', '2021-03-21 14:38:56', '2021-03-21 14:38:57'),
(5, 'Контакты', '2021-03-21 14:39:01', '2021-03-21 14:39:02');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2021-03-20 00:44:45', '2021-03-20 00:44:45'),
(2, 'admin', 'web', '2021-03-20 00:44:49', '2021-03-20 00:44:49');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_price` int(11) NOT NULL,
  `id_unit` bigint(20) UNSIGNED NOT NULL,
  `id_cat` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `note`, `min_price`, `id_unit`, `id_cat`, `created_at`, `updated_at`) VALUES
(1, 'Эскиз', 'Концептуальное предложение по зонированию участка, расположению прогулочных дорожек, площадок, зон отдыха, групп растений', 2000, 1, 1, '2021-03-20 06:03:08', '2021-03-23 00:02:16'),
(2, 'Генеральный план участка ', 'План благоустройства и озеленения (вид сверху). Является завершающим этапом эскизного проектирования', 2000, 1, 1, '2021-03-20 06:03:10', '2021-03-20 06:03:10'),
(10, 'План ландшафтного освещения', 'Схема расположения осветительных приборов', 800, 1, 1, '2021-03-21 14:36:08', '2021-03-21 14:36:09'),
(11, 'Разбивочный план', 'Формы, размеры и расположение дорожек и площадок', 750, 1, 1, '2021-03-21 14:36:10', '2021-03-21 14:36:10'),
(12, '3D-визуализация видовых точек - ручная графика', 'Наглядная иллюстрация всего участка и/или отдельных зон', 10000, 1, 1, '2021-03-21 14:36:11', '2021-03-21 14:36:12'),
(13, 'Сбор строительного мусора', '-', 50, 2, 2, '2021-03-21 14:36:13', '2021-03-21 14:36:14'),
(14, 'Выкорчевывание пней', ' Вывоз и/или переработка мусора не входит в стоимость', 2500, 4, 2, '2021-03-21 14:36:14', '2021-03-21 14:36:15'),
(15, 'Снятие, выемка и перемещение грунта', 'Земляные работы - выполняются вручную или с использованием специальной техники', 850, 3, 2, '2021-03-21 14:36:16', '2021-03-21 14:36:18'),
(16, 'Устройство дорожек и площадок на бетонном основании', 'Подготовка основания, бетонирование, мощение   природным камнем, брусчаткой, клинкером', 2900, 1, 2, '2021-03-21 14:36:18', '2021-04-07 05:22:55'),
(17, 'Устройство системы автоматического полива', 'Сборка и монтаж системы автоматического полива без стоимости оборудования', 50000, 4, 2, '2021-03-21 14:36:21', '2021-03-21 14:36:21'),
(18, 'Устройство посевного газона без замены/с заменой грунта', 'Культивирование, планировка участка, утрамбовывание, посев семян', 400, 2, 3, '2021-03-21 14:36:22', '2021-03-21 14:36:23'),
(19, 'Устройство рулонного газона без замены/с заменой грунта', 'Культивирование, планировка, утрамбовывание, укладка рулонного газона', 500, 2, 3, '2021-03-21 14:36:24', '2021-03-21 14:36:24'),
(21, 'Пересадка деревьев', 'Работы по пересадке, внесение удобрений, подсыпка грунта', 5000, 4, 3, '2021-03-21 14:36:26', '2021-03-21 14:36:27'),
(22, 'Санитарная обрезка деревьев и кустарников', 'Стоимость зависит от размера и возраста растений ', 1500, 4, 4, '2021-03-21 14:36:28', '2021-03-21 14:36:29'),
(23, 'Уход за газоном', 'Аэрация, прочесывание, подкормка, стрижка, уборка листвы', 1500, 1, 4, '2021-03-21 14:36:29', '2021-03-21 14:36:30'),
(24, 'Обработка растений стимуляторами роста и корнеобразования', '-', 800, 4, 4, '2021-03-21 14:36:31', '2021-03-21 14:36:31'),
(25, 'Формирование деревьев и кустарников', '-', 2500, 4, 4, '2021-03-21 14:36:32', '2021-03-21 14:36:33'),
(28, 'Проект зоны отдыха, патио, барбекю', 'Включает в себя эскиз, дендроплан, разбивочный план водоема, предложения по садовой мебели', 1500, 2, 1, '2021-04-07 05:21:24', '2021-04-07 05:21:24'),
(29, 'Создание цветников на готовое основание', 'Посадка растений, внесение удобрений. Без стоимости растений', 1500, 2, 3, '2021-04-07 05:24:16', '2021-04-07 05:24:16'),
(31, 'Уборка сада', 'Прополка, спил или обрезка плодовых деревьев и других растений', 4000, 1, 20, '2021-06-07 00:48:08', '2021-06-07 00:48:08'),
(32, 'Обработают зеленые насаждения от вредителей', 'Обработают зеленые насаждения от вредителей', 2500, 1, 20, '2021-06-07 00:48:27', '2021-06-07 00:48:27'),
(33, 'Уход за газоном', 'Подсев и ремонт газона', 150, 2, 20, '2021-06-07 00:49:40', '2021-06-07 00:49:40'),
(34, 'Уход за зелеными насаждениями', 'Обрезка живой изгороди', 120, 2, 20, '2021-06-07 00:50:10', '2021-06-07 00:50:10'),
(35, 'Чистка водоема', 'Чистка водоема от загрязнения', 1000, 3, 20, '2021-06-07 00:50:37', '2021-06-07 00:50:37');

-- --------------------------------------------------------

--
-- Структура таблицы `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `socials`
--

INSERT INTO `socials` (`id`, `name`, `link`, `created_at`, `updated_at`) VALUES
(1, 'instagram', 'https://www.instagram.com/', '2021-04-02 01:35:43', '2021-04-02 01:35:43'),
(2, 'vk', 'https://vk.com/', '2021-04-02 01:35:46', '2021-04-02 01:35:46'),
(3, 'facebook-f', 'https://facebook.com/', '2021-04-02 01:35:50', '2021-04-02 01:35:50'),
(5, 'telegram', 'https://web.telegram.org/', '2021-04-02 01:35:57', '2021-04-02 01:35:57');

-- --------------------------------------------------------

--
-- Структура таблицы `styles`
--

CREATE TABLE `styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `styles`
--

INSERT INTO `styles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Классический', 'Данный стиль характеризуется геометрически четкой планировкой, для которой свойственная симметрия прямых аллей, четкие формы клумб и газонов, мощеные дорожки и водоемы.', '2021-04-07 07:38:18', '2021-04-07 07:38:56'),
(2, 'Английский (пейзажный)', 'Стиль предполагает полную естественность и отсутствие строгих форм, отказ от геометрически парвильных фигур и полное слияние с окружающей природой.', '2021-04-07 07:38:50', '2021-04-07 07:38:50'),
(3, 'Деревенский (кантри)', 'Является одним из самых популярных, за счет своей простоты создания, естественности и непринужденности. В данном стиле отсутствуют строгие линии и правила обустройства, присутствует полная свобода творчества.', '2021-04-07 07:39:17', '2021-04-07 07:39:17'),
(4, 'Хай-тек', 'Предполагает воплощение смелых ландшафтных фантазий, используя новые материалы, растения с необычными листьями и оригинальные аксессуары.', '2021-04-07 07:39:34', '2021-04-07 07:39:34'),
(5, 'Модерн', 'Предполагает использование извилистых обтекаемых форм, элегантность и доровизну. Большее значение имеют малые архитектурные формы и аксессуары, а не растения.', '2021-04-07 07:40:12', '2021-04-07 07:40:12'),
(6, 'Минимализм', 'Повторяет идеи аналогичного стиля, используемого в интерьере, т.е. на первый план выходит простота и лаконичность форм и минимум деталей.', '2021-04-07 07:40:24', '2021-04-07 07:40:24'),
(7, 'Эко-стиль', 'Является максимальной естественностью, в которой сад выглядит так, будто создан самой природой, без вмешательства человека.', '2021-04-07 07:40:35', '2021-04-07 07:40:35'),
(8, 'Японский', 'Сочетает в себе простоту с большим вниманием к деталям, так как каждый элемент сада будет иметь свой скрытый смысл.', '2021-04-07 07:40:44', '2021-04-07 07:40:44');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.ru', NULL, '$2y$10$4v4T5.nyjfQwGl0ObEcjNOBjlwDO.ElCXSWSFIZrv2kCf/2s2Qb2a', NULL, NULL, NULL, '2021-03-21 23:19:05', '2021-03-21 23:19:05');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_style` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `date`, `id_service`, `created_at`, `updated_at`, `image`, `id_style`) VALUES
(2, 'Генеральный план участка', 'Генеральный план участка у озера Сырыткуль', '2020-12-09', 1, '2021-03-21 14:36:48', '2021-04-07 05:43:04', 'main8.jpg', 8),
(4, 'Визуализация участка', 'Визуализация участка  у озера Сырыткуль', '2021-01-07', 12, '2021-03-21 14:36:50', '2021-04-07 05:37:41', '3d-foto5.jpg', 3),
(5, 'Озеленение участка', 'Озеленение участка Западные Холмы Челябинск', '2020-11-13', 23, '2021-03-21 14:36:52', '2021-04-07 05:38:29', 'dachniy-gazon3.jpg', 1),
(6, 'СНТ Курчатовец', 'Мощение тротуарной плитки СНТ Курчатовец', '2021-03-07', 16, '2021-03-21 14:36:54', '2021-04-07 05:30:36', 'ld-16.jpg', 7),
(7, 'Участок Карпов Пруд', 'Формирование кустарников и деревьев на участке', '2021-01-14', 25, '2021-03-23 01:01:53', '2021-04-07 05:04:08', 'scal.webp', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bids_services_id_fk` (`id_service`);

--
-- Индексы таблицы `categories_services`
--
ALTER TABLE `categories_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images_styles`
--
ALTER TABLE `images_styles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_styles_style_id_foreign` (`style_id`);

--
-- Индексы таблицы `images_works`
--
ALTER TABLE `images_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_works_works_id_fk` (`id_work`);

--
-- Индексы таблицы `measure_units`
--
ALTER TABLE `measure_units`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id_unit_foreign` (`id_unit`),
  ADD KEY `services_categories_services_id_fk_2` (`id_cat`);

--
-- Индексы таблицы `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_id_service_foreign` (`id_service`),
  ADD KEY `works_styles_id_fk` (`id_style`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `bids`
--
ALTER TABLE `bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `categories_services`
--
ALTER TABLE `categories_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `images_styles`
--
ALTER TABLE `images_styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `images_works`
--
ALTER TABLE `images_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `measure_units`
--
ALTER TABLE `measure_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `styles`
--
ALTER TABLE `styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_services_id_fk` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `images_styles`
--
ALTER TABLE `images_styles`
  ADD CONSTRAINT `images_styles_style_id_foreign` FOREIGN KEY (`style_id`) REFERENCES `styles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `images_works`
--
ALTER TABLE `images_works`
  ADD CONSTRAINT `images_works_works_id_fk` FOREIGN KEY (`id_work`) REFERENCES `works` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `works_styles_id_fk` FOREIGN KEY (`id_style`) REFERENCES `styles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
