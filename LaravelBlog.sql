-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2023 г., 19:45
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `LaravelBlog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Et delenitiii', '2023-11-30 11:13:49', '2023-11-30 11:40:33', NULL),
(2, 'Necessitatibus quis', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(3, 'Nobis quibusdam', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(4, 'Earum eveniet', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 'Aut facilis explicabo illo vitae possimus. Officia facere at tempore quasi vitae id. Ut et aliquam quo ab consectetur et. Sunt eligendi eum doloremque. Molestiae tempore ut animi quidem et nulla.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(2, 7, 6, 'Voluptas molestiae minima excepturi aut sit. Ipsa vel necessitatibus ut sed. Omnis saepe quo ipsa eum quidem quo. Aut nam cupiditate ad aut. Minima neque facilis qui adipisci occaecati voluptatem.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(3, 4, 4, 'Nihil magnam perferendis id cum aut. Labore id magnam voluptatum vel. Enim non repudiandae ipsam et. Possimus quam sunt quia. Non voluptate autem perspiciatis tempore laboriosam fugit dolores.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(4, 2, 5, 'Explicabo vitae amet sed quod. Molestiae accusantium voluptatem est dolore fuga et delectus possimus. Magnam mollitia impedit soluta sapiente omnis labore facere.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(5, 5, 6, 'Tempore earum est eum deleniti magni. Et animi modi porro. Aspernatur excepturi voluptatem cumque ex libero. Laboriosam aut nihil minima natus officia debitis.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(6, 7, 7, 'Omnis dolores pariatur eligendi sint eveniet dignissimos ipsam aut. Ut nihil saepe ducimus possimus. Est doloribus omnis perferendis dolores.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(7, 8, 8, 'Est ea et eos recusandae recusandae dolorem minima mollitia. Aut doloremque perspiciatis sint quo sit minima. Eligendi sint quis qui. Ut cumque minima tempora ducimus ipsam voluptatem.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(8, 5, 7, 'Eveniet maiores sit sint aperiam rem vel. Quos dolorem non neque sit sint. Sit soluta ducimus a fugit illo. In similique praesentium omnis aliquid nihil laboriosam enim quasi.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(9, 4, 2, 'Et quis quis id voluptatem provident. Dignissimos soluta beatae aut aliquam doloribus dolores. Optio sequi quo voluptatibus doloremque harum ab in.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(10, 3, 6, 'Nisi eos et est est. Ipsum porro vel amet hic iusto necessitatibus nemo. Sunt non nam omnis sunt sit aut.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(11, 5, 2, 'Accusamus debitis unde non ut aut praesentium incidunt. Quod omnis fuga quo dolores. Dolorem maxime velit nihil laborum est rerum commodi voluptate.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(12, 2, 3, 'Ea dolor eveniet ut et. Corporis eligendi soluta sapiente iusto. Perspiciatis repudiandae assumenda quae esse mollitia.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(13, 7, 6, 'Quis blanditiis molestiae officiis. Ab neque beatae id est perferendis esse. Ratione iusto est est tempora eaque et eligendi. Aut facere provident possimus rerum animi quia dolore.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(14, 5, 7, 'Corporis ut mollitia consequatur inventore qui. Ea quia qui quibusdam quasi. Nisi ullam quis qui. Eius et qui velit nihil nostrum laudantium inventore.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(15, 4, 6, 'Aut molestias totam dolor ut non iusto nisi. Et quis numquam delectus necessitatibus labore. Quasi tempora laboriosam aut earum quasi. Vel voluptas neque molestiae quos.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(16, 9, 2, 'Quis fugit aliquam voluptatibus nemo. Illo deserunt commodi dolor eum rerum dolorum facilis quia. Illum molestias consectetur sit maxime soluta omnis. At illum quo expedita quod expedita dolor.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(17, 5, 5, 'Voluptatem id et rerum maxime a blanditiis minima. Nulla qui aut magnam voluptatem vero. Recusandae voluptas delectus impedit iste dolores.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(18, 1, 7, 'Dolores similique aliquid quia quis fuga. Velit error quos voluptas ut. Voluptates est distinctio omnis. Nihil officia et facilis aut autem natus adipisci nobis.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(19, 5, 4, 'Repudiandae velit quia dignissimos itaque soluta quaerat occaecati. Quia aut et vel reiciendis rerum quas molestiae. Omnis nam aut hic eaque odit quia.', '2023-11-30 11:13:49', '2023-11-30 11:13:49'),
(20, 10, 5, 'Ratione autem ad provident id recusandae est. Sit a laboriosam adipisci quas vel. Ad qui dicta veniam incidunt.', '2023-11-30 11:13:49', '2023-11-30 11:13:49');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_12_142808_create_categories_table', 1),
(6, '2023_07_12_141409_create_posts_table', 1),
(7, '2023_07_12_141429_create_tags_table', 1),
(8, '2023_07_12_141501_create_post_tags_table', 1),
(9, '2023_07_22_124537_drop_column_post_id_to_categories_table', 1),
(10, '2023_07_23_131811_add_column_soft_deletes_to_categories_table', 1),
(11, '2023_07_24_210354_add_column_soft_deletes_to_tags_table', 1),
(12, '2023_07_25_191032_add_column_soft_deletes_to_posts_table', 1),
(13, '2023_07_25_225227_add_columns_for_images_to_posts_table', 1),
(14, '2023_07_30_171323_add_column_soft_deletes_to_users_table', 1),
(15, '2023_07_30_172544_add_column_role_to_users_table', 1),
(16, '2023_07_31_203416_create_jobs_table', 1),
(17, '2023_08_12_115957_create_comments_table', 1),
(18, '2023_08_12_120356_create_post_user_likes_table', 1);

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
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`, `preview_image`, `main_image`) VALUES
(1, 'Ea.', '<p><i>Aut sunt qui qui quia. Voluptates pariatur est blanditiis laboriosam quis reiciendis. Qui quas qui voluptatum nihil. Odio voluptate similique repudiandae illo fugit dignissimos. Quidem molestias maiores vitae repellat labore suscipit suscipit. Qui eius beatae libero iure soluta cum. Est sunt ex voluptatem omnis in. Inventore consectetur nobis culpa ipsum qui. Dolores nam sit non. Officia eum aut non ipsam. Inventore ipsam omnis et omnis facere itaque. In officiis assumenda totam omnis molestiae quia distinctio. Rerum sed recusandae rem deleniti consequatur. Quia quia sunt quis mollitia deserunt est. Id soluta eos voluptate est recusandae. Consequatur qui delectus ducimus amet laboriosam expedita in enim. Dolores iusto a non. Asperiores inventore qui voluptas atque. Expedita quae placeat sint sed tenetur consequuntur. Sint reprehenderit cupiditate eos autem placeat est est ut. Et facilis impedit sed voluptas nulla qui assumenda.</p></i>', 5, 2, '2023-11-30 11:13:49', '2023-11-30 11:35:54', NULL, 'images/QUFu196IJ9yOpEhxgWzOpJSiAGYDyuOVZXOwgH87.png', 'images/LArJ6a291r3QJv3hmfqjRerHfYwsBvO5pNxSWlbP.jpg'),
(2, 'Doloribus.', '<p><i>Corporis maiores nisi neque atque sit autem quae. Quis praesentium et et. Ullam vero expedita est aut eveniet. Non ducimus fuga veritatis nihil optio labore. Laboriosam voluptas porro dicta et commodi ea. Odit accusamus aliquid maxime voluptatem unde. Accusamus qui sed nulla dolores consequatur similique. Iste expedita dolores aliquam aut aut dignissimos qui. Voluptatem voluptatem ullam et et. Voluptas voluptatem molestiae natus. Sit ut tempora nemo et. Sit rerum nobis illum hic. Fugit possimus non mollitia et libero. Quas atque qui molestiae cumque ut repudiandae voluptatum nesciunt. Ratione sit quos eveniet esse et consequuntur cum. Debitis iure quaerat est eos et illum. Rem impedit aliquid et incidunt. Voluptate quia debitis quis et voluptate. Qui rerum quam et sit. Nihil corporis iste aut quas consequuntur.</p></i>', 9, 1, '2023-11-30 11:13:49', '2023-11-30 11:36:10', NULL, 'images/t9276cbd3xPyWwAl5eeQTb76bCrHsVBXrjvne4xi.jpg', 'images/2XaMa8XueulHGvK0Jo6EhiBpYkw2RSm6bgib86Md.jpg'),
(3, 'Magnam atque.', '<p><i>Ipsam quis debitis asperiores dolores eum quia animi. Dolores suscipit doloremque alias. Et fuga ab autem dignissimos accusantium. Iusto pariatur laboriosam qui et accusantium. Et sint non facere deleniti ut. Voluptatem non unde odio quod ea enim. Aut eum repellat aut sed voluptas laborum. Officiis dolorem sed illum eos ipsam dolorem. Totam ullam et itaque. Tempore beatae omnis vel qui ipsum id et. Quia eum corrupti nam cum illum. Ea reprehenderit quaerat deleniti quos ut. Itaque cupiditate iste eum. Fugit officia eos sed iure ut amet. Cum eveniet voluptatem totam accusamus consequatur ut est. Nesciunt quas maiores consequatur assumenda molestiae aut earum. Et veritatis mollitia earum aliquid consequatur. Reprehenderit soluta eos mollitia iure perspiciatis perferendis. Nihil ab aliquid alias modi saepe cupiditate qui praesentium. Voluptatem fugit voluptate aut sequi molestiae esse. Consequatur minima non dolores.</p></i>', 5, 2, '2023-11-30 11:13:49', '2023-11-30 11:36:23', NULL, 'images/SFR9SFERfAOqX9QAUAJCVXqeA2w48BX4GWafZAcu.jpg', 'images/TP9HjuJLBAPauoNQXC9kCk6gbHlo6VZq5qvfGWPt.jpg'),
(4, 'Accusamus officia.', '<p><i>Beatae sunt tenetur quasi saepe praesentium. Cupiditate enim voluptate voluptatem eligendi officia facilis. Esse iure deserunt quaerat ut sequi. Nisi inventore sit dolore eaque ducimus illum temporibus animi. Voluptatum optio quis aut iste voluptates dolorum alias. Voluptate odio qui sequi. Ipsam similique sit eveniet odit et. Et rerum repellendus aut et esse iusto. Architecto est ut atque qui dolorem rem. Beatae quaerat est eaque quasi assumenda ut sed. Officiis qui excepturi eos tenetur possimus. Qui quia cum quis sapiente odit saepe rerum. Et suscipit ipsum blanditiis illo quidem est commodi. Omnis voluptates quos blanditiis aut. Distinctio fuga sit qui. Sapiente quia et velit aliquid voluptate. Reprehenderit fuga sit iusto minus. Magnam dolores ad voluptas sapiente. Dolorum facere quisquam aut laudantium quisquam reprehenderit.</p></i>', 6, 2, '2023-11-30 11:13:49', '2023-11-30 11:36:42', NULL, 'images/nYN3JqFyHwzdfNDbGV6lLLLdHCx6a8MUFcABqPGR.jpg', 'images/ijDRvDgWAzLDz6bTHQhvclsT108Y5nDiD11wmLvI.png'),
(5, 'Est deleniti sed.', '<p><i>Nihil labore ratione voluptate aliquid vel. Aut blanditiis beatae sed repellat est facilis. Quia repellendus voluptatem eveniet harum quaerat. Ut alias eos tempora laborum iure. Omnis ut temporibus omnis ut distinctio. Harum et facilis quia quaerat perferendis. Quae quos odit dolor qui quis asperiores qui. Consectetur dolore odit ipsa maxime explicabo dolores. Commodi ut corrupti consequuntur quis laborum qui. Nesciunt eveniet eos modi eius ipsam debitis et. Veritatis totam nihil ducimus perferendis possimus dignissimos. Nesciunt laborum eum rem molestiae omnis nihil voluptas. Sequi rerum eveniet est molestias corporis. Aut exercitationem soluta ipsum eum. Totam totam voluptatem rerum velit qui reprehenderit nesciunt eveniet. Omnis quo iusto iure qui numquam rerum incidunt. Ut dolore velit excepturi voluptatibus. Occaecati non perferendis in expedita molestiae accusantium libero. Repudiandae ratione doloribus quae. Praesentium id soluta aut est non recusandae minima.</p></i>', 3, 4, '2023-11-30 11:13:49', '2023-11-30 11:36:53', NULL, 'images/oDCkHbVDASOxu5PRU7RYCJlWKIweKrdSNOQxmtlH.jpg', 'images/yHSpnJGDKoWJ7WrrnQV2KYSnr5laU2FNYxForjlp.png'),
(6, 'Nemo et unde.', '<p><i>Et veritatis minus sunt. Nobis consequatur commodi tenetur ut expedita. Nostrum quia explicabo nulla minima. Dolores explicabo aspernatur exercitationem. Perspiciatis quia atque quo. Id cupiditate nihil autem at dolorem doloribus doloremque. Porro sed illum eum odio. Dolores aliquam accusamus voluptatum sequi exercitationem sunt culpa saepe. Non quo sed qui aut ut. Hic illum asperiores fuga. Omnis rerum sunt reprehenderit a unde ab odio. Est nemo sed aut illum est enim. Tempore ducimus commodi necessitatibus omnis est nostrum minima necessitatibus. Qui aut nemo ullam non eos voluptatum quaerat. Quisquam aspernatur et eum occaecati recusandae impedit nihil. Ullam vitae sit aut enim molestias ducimus et. Nesciunt qui tempora fugiat dolor et. Consequatur asperiores et iusto voluptatem. Qui sed et sit assumenda nam id. Voluptas dolores dolorum et. Deleniti nemo id officiis aut totam repellendus blanditiis.</p></i>', 9, 1, '2023-11-30 11:13:49', '2023-11-30 11:37:14', NULL, 'images/aQCi7Z9e96RNmFVqS6WlweSYzZkJcE4wMBrMbZ2o.png', 'images/JGO2uuvKnU6i1ghkSyaVKdszIqZfADVO1KBFfB61.jpg'),
(7, 'Soluta.', '<p><i>Pariatur ipsa saepe corrupti similique. Officia consequatur qui perferendis dicta possimus. Ut dolorem consequatur tempore ipsa dolore rerum. Debitis ut quasi recusandae maiores. Temporibus rerum magnam incidunt sunt. Cupiditate ut placeat expedita quisquam asperiores quod. A ut quo est. Rem accusamus officia hic. Qui facere quia laudantium. Dolorum perspiciatis quia repudiandae aliquam. Unde accusamus aut earum velit quisquam. Id et nostrum necessitatibus commodi laborum quasi maiores suscipit. Voluptatem fugiat minima rem aut iusto. Quo iure culpa libero odio aliquam ea. Expedita quisquam et expedita consequatur nam harum. Odio minus inventore molestiae sed dolorem ut. Quod ut repellat ut qui. In eos ullam totam dolor sint et doloremque. Possimus corrupti at nemo beatae consectetur sed. Numquam est facilis minus odit. Quidem similique tenetur et facere nostrum. Exercitationem corporis consequatur molestiae amet accusantium dolorem. Ut velit harum a praesentium ipsam quia error.</p></i>', 9, 2, '2023-11-30 11:13:49', '2023-11-30 11:37:34', NULL, 'images/DwxTNq5D87wWh5qqadv87XxzPoZVbaLxSMLgnYDO.jpg', 'images/WekRXVmJhwptiK3ouWh1BI0RvGe0Wny1Tx7wlanq.jpg'),
(8, 'Vero ipsum.', '<p><i>Quis aut et debitis architecto. Beatae a quia consequuntur aut asperiores. Est rerum facilis cupiditate qui qui ipsa. Expedita similique rerum non qui dolorum. Nihil dolorum in occaecati ut ut autem beatae. Consequatur rerum dolorem amet expedita molestias. Ut qui mollitia quia aut. Sit et quisquam quam voluptate rerum. Cupiditate distinctio vero sit ex omnis nemo illum suscipit. Consectetur sunt laborum ad esse nulla natus quos culpa. Omnis consequatur temporibus quod reprehenderit inventore debitis omnis. Minus voluptatem assumenda qui ut. Nesciunt dolor iste et laboriosam amet harum consequatur. Amet consectetur quis aliquam atque. Voluptas ut eveniet velit iusto ea. Voluptatem eligendi molestiae et modi recusandae. Dicta deleniti eius qui quibusdam commodi eum. Molestiae modi a repellendus ut. Sit ratione aspernatur numquam culpa totam quibusdam beatae.</p></i>', 3, 2, '2023-11-30 11:13:49', '2023-11-30 11:38:23', NULL, 'images/2lFAk6AwkomPgPUqn41V5xj4u7Zc5GbT9WgmFprc.jpg', 'images/rDrNTBUE7pzPST8knQlvcYCGLlkNsPBl8W8IYk9A.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 6, NULL, NULL),
(6, 2, 1, NULL, NULL),
(7, 2, 2, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 2, 5, NULL, NULL),
(10, 2, 6, NULL, NULL),
(11, 3, 1, NULL, NULL),
(12, 3, 3, NULL, NULL),
(13, 3, 4, NULL, NULL),
(14, 3, 5, NULL, NULL),
(15, 3, 6, NULL, NULL),
(16, 4, 2, NULL, NULL),
(17, 4, 3, NULL, NULL),
(18, 4, 4, NULL, NULL),
(19, 4, 5, NULL, NULL),
(20, 4, 6, NULL, NULL),
(21, 5, 1, NULL, NULL),
(22, 5, 2, NULL, NULL),
(23, 5, 3, NULL, NULL),
(24, 5, 4, NULL, NULL),
(25, 5, 5, NULL, NULL),
(26, 6, 1, NULL, NULL),
(27, 6, 2, NULL, NULL),
(28, 6, 3, NULL, NULL),
(29, 6, 4, NULL, NULL),
(30, 6, 5, NULL, NULL),
(31, 7, 1, NULL, NULL),
(32, 7, 2, NULL, NULL),
(33, 7, 3, NULL, NULL),
(34, 7, 4, NULL, NULL),
(35, 7, 6, NULL, NULL),
(36, 8, 1, NULL, NULL),
(37, 8, 2, NULL, NULL),
(38, 8, 3, NULL, NULL),
(39, 8, 4, NULL, NULL),
(40, 8, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `post_user_likes`
--

CREATE TABLE `post_user_likes` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_user_likes`
--

INSERT INTO `post_user_likes` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 5, 1, NULL, NULL),
(4, 6, 1, NULL, NULL),
(5, 7, 1, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 3, 2, NULL, NULL),
(8, 5, 2, NULL, NULL),
(9, 7, 2, NULL, NULL),
(10, 8, 2, NULL, NULL),
(11, 1, 3, NULL, NULL),
(12, 3, 3, NULL, NULL),
(13, 6, 3, NULL, NULL),
(14, 7, 3, NULL, NULL),
(15, 8, 3, NULL, NULL),
(16, 1, 4, NULL, NULL),
(17, 4, 4, NULL, NULL),
(18, 5, 4, NULL, NULL),
(19, 6, 4, NULL, NULL),
(20, 7, 4, NULL, NULL),
(21, 1, 5, NULL, NULL),
(22, 2, 5, NULL, NULL),
(23, 3, 5, NULL, NULL),
(24, 6, 5, NULL, NULL),
(25, 8, 5, NULL, NULL),
(26, 1, 6, NULL, NULL),
(27, 2, 6, NULL, NULL),
(28, 5, 6, NULL, NULL),
(29, 7, 6, NULL, NULL),
(30, 8, 6, NULL, NULL),
(31, 1, 7, NULL, NULL),
(32, 2, 7, NULL, NULL),
(33, 4, 7, NULL, NULL),
(34, 7, 7, NULL, NULL),
(35, 8, 7, NULL, NULL),
(36, 2, 8, NULL, NULL),
(37, 3, 8, NULL, NULL),
(38, 4, 8, NULL, NULL),
(39, 5, 8, NULL, NULL),
(40, 8, 8, NULL, NULL),
(41, 1, 9, NULL, NULL),
(42, 4, 9, NULL, NULL),
(43, 5, 9, NULL, NULL),
(44, 6, 9, NULL, NULL),
(45, 8, 9, NULL, NULL),
(46, 1, 10, NULL, NULL),
(47, 2, 10, NULL, NULL),
(48, 6, 10, NULL, NULL),
(49, 7, 10, NULL, NULL),
(50, 8, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ut', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(2, 'et', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(3, 'as', '2023-11-30 11:13:49', '2023-11-30 11:41:26', NULL),
(4, 'totam', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(5, 'natus', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL),
(6, 'modi', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role` smallint UNSIGNED NOT NULL DEFAULT '1' COMMENT '0 - Admin, 1 - User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `role`) VALUES
(1, 'Loraine Grant', 'targa1910@ukr.net', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'BRcv4iNtCBiKq6RAgVly2PJE3FPW2P2oDh9Ke1Ovij7bjhvQCorkGmf0nTS9', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 0),
(2, 'Dr. Geo Rogahn DVM', 'myriam66@example.org', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', '60JFGFwk6J', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(3, 'Margarita Feest', 'bart66@example.net', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'DWzQEsVlxM', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(4, 'Anita Mann', 'agusikowski@example.net', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'lrXnT1oIhm', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(5, 'Lucas Quitzon MD', 'tremblay.jayde@example.net', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'mRgg3ZZadk', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(6, 'Juvenal Hettinger PhD', 'metz.rico@example.com', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'JXEoSWvjp8', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(7, 'Bobbie Corkery', 'ana.weimann@example.net', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'sQmcMBlkqQ', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(8, 'Jonas Hirthe Jr.', 'gdietrich@example.com', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'uACvfaIxJb', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(9, 'Keegan Mitchell', 'zkovacek@example.com', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', '3hA3IuD64l', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1),
(10, 'Eloise Lebsack Jr.', 'natalia29@example.com', '2023-11-30 11:13:49', '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', 'vwck56xvQS', '2023-11-30 11:13:49', '2023-11-30 11:13:49', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_idx` (`user_id`),
  ADD KEY `comments_post_idx` (`post_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_category_idx` (`category_id`),
  ADD KEY `post_author_idx` (`author_id`);

--
-- Индексы таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_idx` (`post_id`),
  ADD KEY `post_tag_tag_idx` (`tag_id`);

--
-- Индексы таблицы `post_user_likes`
--
ALTER TABLE `post_user_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pul_post_idx` (`post_id`),
  ADD KEY `pul_user_idx` (`user_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `post_user_likes`
--
ALTER TABLE `post_user_likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_author_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `post_category_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tag_post_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_fk` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Ограничения внешнего ключа таблицы `post_user_likes`
--
ALTER TABLE `post_user_likes`
  ADD CONSTRAINT `pul_post_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `pul_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
