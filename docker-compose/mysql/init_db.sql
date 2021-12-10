DROP TABLE IF EXISTS users;

-- proyecto_tsic2.users definition

CREATE TABLE users (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



INSERT INTO users
(id, name, email, email_verified_at, password, remember_token, created_at, updated_at)
VALUES(2, 'Víctor Hugo Pólito Seba', 'victor.hugo.polito.s@gmail.com', NULL, '$2y$10$QIZoRzgs2JGwbroECjD.Me.JcObOdyItPyQQswBg3ims4vxhv9fvG', NULL, '2021-12-08 21:41:45', '2021-12-08 21:41:45');
