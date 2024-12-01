#
# TABLE STRUCTURE FOR: authors
#

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT '1:Research, 2:Extension',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0: Active, 1: Inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `authors` (`id`, `institution_id`, `department_id`, `first_name`, `last_name`, `status`, `created_at`, `updated_at`) VALUES (1, 0, 2, 'Joshua', 'Castaneda', 0, '2024-08-21 14:00:16', NULL);
INSERT INTO `authors` (`id`, `institution_id`, `department_id`, `first_name`, `last_name`, `status`, `created_at`, `updated_at`) VALUES (2, 0, 2, 'Sawyer', 'Farley', 0, '2024-08-21 14:00:44', NULL);
INSERT INTO `authors` (`id`, `institution_id`, `department_id`, `first_name`, `last_name`, `status`, `created_at`, `updated_at`) VALUES (3, 0, 1, 'Lucius', 'Chan', 0, '2024-11-12 15:43:27', NULL);
INSERT INTO `authors` (`id`, `institution_id`, `department_id`, `first_name`, `last_name`, `status`, `created_at`, `updated_at`) VALUES (4, 0, 2, 'Patricia', 'Carpenter', 0, '2024-11-12 15:43:33', NULL);


#
# TABLE STRUCTURE FOR: collaborators
#

DROP TABLE IF EXISTS `collaborators`;

CREATE TABLE `collaborators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `research_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (1, 1, 2, '2024-08-30 14:42:50', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (2, 1, 1, '2024-08-30 16:18:07', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (3, 1, 2, '2024-08-30 16:18:07', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (4, 1, 1, '2024-08-30 16:18:45', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (5, 1, 2, '2024-08-30 16:18:45', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (6, 1, 1, '2024-09-10 13:36:28', NULL);
INSERT INTO `collaborators` (`id`, `research_id`, `author_id`, `created_at`, `updated_at`) VALUES (7, 1, 2, '2024-09-10 13:36:28', NULL);


#
# TABLE STRUCTURE FOR: documents
#

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `research_id` int(11) NOT NULL,
  `document` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0: Active, 1: Inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# TABLE STRUCTURE FOR: references
#

DROP TABLE IF EXISTS `references`;

CREATE TABLE `references` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publication_date` date DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT '1: Book, 2: Journal, 3: Report',
  `url` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (30, 21, 'Id quasi iure et est', 'Dolores eu ipsam vel', '1978-08-05', 2, 'Laudantium accusant', 'Totam expedita est ', '2024-11-15 15:08:50', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (31, 21, 'Quis sed officia eli', 'Minus cupiditate off', '1974-07-08', 1, 'Quaerat sit accusan', 'Ipsa tenetur nulla ', '2024-11-15 15:08:58', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (32, 21, 'Est quia corrupti o', 'Aut eligendi enim el', '2017-01-14', 3, 'Nisi ut incididunt p', 'Enim velit dolor quo', '2024-11-15 15:09:03', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (33, 21, 'Adipisicing officia ', 'Impedit delectus s', '1999-12-19', 3, 'Officiis omnis simil', 'Iure sed fugit volu', '2024-11-15 15:11:08', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (34, 21, 'Ut aliquip veniam m', 'Explicabo Et dolor ', '2004-09-04', 2, 'Inventore ipsum sunt', 'Molestiae omnis faci', '2024-11-15 15:11:19', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (35, 21, 'Officia ex voluptatu', 'Minim non ut eum con', '1995-04-02', 2, 'Culpa labore id lab', 'Dolorem vel tempor e', '2024-11-15 15:11:25', NULL);
INSERT INTO `references` (`id`, `user_id`, `title`, `author`, `publication_date`, `type`, `url`, `description`, `created_at`, `updated_at`) VALUES (36, 21, 'Nostrum dolorem dolo', 'Sit deserunt molliti', '2002-08-20', 1, 'Aliquam beatae velit', 'Aut in neque facere ', '2024-11-15 15:11:29', NULL);


#
# TABLE STRUCTURE FOR: research
#

DROP TABLE IF EXISTS `research`;

CREATE TABLE `research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `research_title` varchar(50) NOT NULL,
  `proposal_file` varchar(50) DEFAULT NULL,
  `evaluation_file` varchar(50) DEFAULT NULL,
  `completed_file` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:Pend,1:Eval,2:OnG, 3:Comp ',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

INSERT INTO `research` (`id`, `user_id`, `author_id`, `research_title`, `proposal_file`, `evaluation_file`, `completed_file`, `status`, `created_at`, `updated_at`) VALUES (25, NULL, 2, 'Accusantium excepteu', 'Brochure_First_Revise4.pdf', NULL, NULL, 0, '2024-08-30 14:42:50', NULL);
INSERT INTO `research` (`id`, `user_id`, `author_id`, `research_title`, `proposal_file`, `evaluation_file`, `completed_file`, `status`, `created_at`, `updated_at`) VALUES (26, NULL, 1, 'Minim quis id perspi', 'LUDILYN-NEW.docx', NULL, NULL, 0, '2024-08-30 16:18:07', NULL);
INSERT INTO `research` (`id`, `user_id`, `author_id`, `research_title`, `proposal_file`, `evaluation_file`, `completed_file`, `status`, `created_at`, `updated_at`) VALUES (27, NULL, 2, 'Qui adipisicing saep', 'Brochure_First_Revise5.pdf', NULL, NULL, 0, '2024-08-30 16:18:45', NULL);
INSERT INTO `research` (`id`, `user_id`, `author_id`, `research_title`, `proposal_file`, `evaluation_file`, `completed_file`, `status`, `created_at`, `updated_at`) VALUES (28, NULL, 1, 'Test 3', 'Brochure_First_Revise6.pdf', NULL, NULL, 0, '2024-09-10 13:36:28', NULL);


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `employee_no` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0 COMMENT '0:staff, 1:admin',
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (11, 0, 0, 'quxy@mailinator.com', 82, '$2y$10$K3yXsPaR.GHH1tEaMQ0tO.tlHjRdiVESSDM0LX.skA0W2Y.ocwWEm', 'Rina', 'August', 0, 0, '2024-08-06 16:02:06', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (12, 1, 1, 'venujuwer@mailinator.com', 64, '$2y$10$lTDNYA7vpabDN2QNjNMQDeSLPOC9ae.i2wHun54Da5dsl/Co.qhBO', 'Quamar', 'Darryl', 0, 0, '2024-08-06 16:05:08', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (13, 1, 2, 'admin@gmail.com', 10, '$2y$10$dIoZIXILNmDtWPuED4ZK7.PLUoteV6s9VHv/QgXDFJ6BXi74JWh0K', 'Murphy', 'Ramirez', 0, 0, '2024-08-06 16:30:53', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (14, 1, 0, 'kipyf@mailinator.com', 39, '$2y$10$tJRpxflBmqaAzVJA/9LISeEcL8CAwoArlQFUySLGi6RuX/fFQqmn2', 'Regina', 'Gregory', 0, 0, '2024-08-06 16:31:12', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (15, 2, 0, 'joshuacledda@gmail.com', 80, '$2y$10$d2odijguJR2SLln9LaiKLO3CNzjMJP94UVerH4ZZPSmDq4W0YlZlK', 'Joshua', 'Ledda', 1, 0, '2024-08-06 16:35:39', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (16, 0, 1, 'gufiwyqi@mailinator.com', 16, '$2y$10$vFn2DfhzZ28qVKQBguRah.SrUH223KdiahfE6tC1t3i7SWfv6zMAK', 'Flynn', 'Roberts', 0, 0, '2024-08-06 16:36:45', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (17, 2, 0, 'rijuqywima@mailinator.com', 32, '$2y$10$3noWXo8YRoPjJPrtk7fcdOWt/U.YDPMxJUDhvaIrP6bMRNRJPx4xy', 'Emi', 'Cooke', 0, 0, '2024-08-06 16:37:28', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (20, 2, 2, 'rilocibyr@mailinator.com', 78, '$2y$10$6trlcY1n6Jk4G3u8..JfgOkZWFEXpvLk5XPnoTKEkedeUcoycUMv6', 'Azalia', 'Bryan', 0, 0, '2024-08-22 09:25:49', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (21, 1, 2, 'qojunu@mailinator.com', 35, '$2y$10$pxnirZFe1u.hhhXzfMmKyODoc3kBtlIQC28Zl3fQ2V2eXkcoANvX2', 'Quemby', 'Buckner', 0, 0, '2024-08-22 09:25:52', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (22, 2, 2, 'heby@mailinator.com', 9, '$2y$10$rmlZFP0tURk.QVHozVk0C.7eubC2DglXgRgOviHQ41xUoTuApsejW', 'Dora', 'Gray', 0, 0, '2024-08-22 09:25:54', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (23, 2, 1, 'dacedivapa@mailinator.com', 79, '$2y$10$4ZIaHLtce49TyTwRYKbMle4kE7FwVxqcsuzew9C42uC1pQKk2SuM.', 'Shana', 'Hill', 0, 0, '2024-08-22 09:25:57', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (24, 2, 2, 'mehuzubo@mailinator.com', 50, '$2y$10$1RB0cJ8sxKBeJ4OoKGg67OwtXMCFlK8kDXdkZI0h.nYBgwR56VR3K', 'Ingrid', 'Vinson', 0, 0, '2024-08-22 09:25:59', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (25, 1, 2, 'jecylixaf@mailinator.com', 27, '$2y$10$0WWsuk4q63NB5ETzrj7fa.be81No5Xl6UMW.3a/FW1uRlOAqjNVI2', 'Ebony', 'Fisher', 0, 0, '2024-08-22 09:26:03', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (26, 2, 1, 'kyroxak@mailinator.com', 13, '$2y$10$viXEUsFyOZ2lvWE8uFkLAekIRrZ4bU56u7AaE9.wVmu.U/RcGYPY.', 'Chase', 'Blanchard', 0, 0, '2024-08-22 09:26:14', NULL);
INSERT INTO `users` (`id`, `institution_id`, `department_id`, `email`, `employee_no`, `password`, `first_name`, `last_name`, `role`, `status`, `created_at`, `updated_at`) VALUES (27, 1, 1, 'xyjynyr@mailinator.com', 9, '$2y$10$L1oTZNw35JyXtWd.ZUQz5eTsGbOzABWFJ9iznpuzqswAs3n0qY/yG', 'Emi', 'Walter', 0, 0, '2024-08-28 09:30:47', NULL);


