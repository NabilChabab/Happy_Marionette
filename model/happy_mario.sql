
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL
) 


INSERT INTO `booking` (`id`, `book_name`, `category`, `start_date`, `end_date`, `student_id`, `teacher_id`) VALUES
(1, 'Harry Potter', 'Action', '2023-10-26 14:30:42', '2023-12-26 14:30:42', 32, 5),
(2, 'Fantastic Beats', 'Action', '2023-11-24 14:32:44', '2023-11-24 14:32:44', 30, 7),
(4, 'Power', 'test', '2023-11-20 16:21:59', '2023-12-22 16:21:59', 35, 12),
(5, 'Control Your Mind', 'Self Development', '2023-11-26 16:22:29', '2024-01-30 16:22:29', 25, 7),
(6, 'Male impersonators', 'self development', '2023-11-26 16:24:23', '2023-12-20 16:24:23', 24, 8),
(7, 'War and Peace', 'War', '2023-11-27 11:02:11', '2023-12-27 11:02:11', 25, 5),
(8, 'harry potter', 'action', '2023-11-30 20:47:30', '2023-12-30 20:47:30', 49, 7),
(9, 'Harry Potter', 'Action', '2023-12-01 11:22:24', '2023-12-30 11:22:24', 28, 8),
(10, 'Power', 'Self Development', '2023-12-01 11:23:29', '2024-01-01 11:23:29', 50, 3),
(12, 'Power', 'Self Development', '2023-12-03 22:21:36', '2023-12-03 22:21:36', 65, 6),
(13, 'Test', 'Test', '2023-12-03 22:23:44', '2023-12-03 22:23:44', 67, 11),
(14, 'Harry Potter', 'Action', '2023-12-03 22:24:15', '2023-12-03 22:24:15', 66, 18),
(15, 'TestTest', 'Test', '2023-12-03 22:24:42', '2023-12-03 22:24:42', 24, 13),
(16, 'Power', 'Self Dev', '2023-12-03 22:25:25', '2023-12-03 22:25:25', 61, 3),
(17, 'Harry Potter', 'Action', '2023-12-03 22:26:14', '2023-12-03 22:26:14', 28, 18),
(18, 'Test', 'Test', '2023-12-03 22:28:13', '2023-12-03 22:28:13', 65, 12),
(19, 'test', 'test', '2023-12-03 22:56:42', '2023-12-03 22:56:42', 68, 8);



CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
)

INSERT INTO `students` (`id`, `nom`, `prenom`, `cin`, `email`, `gender`, `image`) VALUES
(24, 'Adnane', 'Roujane', 'FA158678', 'adnane@gmail.com', 'male', '875-1697011849.jpg'),
(25, 'ghizlane', 'maqdar', 'AA158545', 'ghizlane@gmail.com', 'female', '925-1697012057.jpg'),
(28, 'Rachid', 'RACH', 'AA158545', 'rachid@gmail.com', 'male', '873-1697012932.jpg'),
(30, 'Anass', 'Elmakhloufi', 'QA154887', 'anas.elmakhloufi@meta.com', 'male', '843-1697011936.jpg'),
(32, 'Aymen', 'Bisdaoune', 'QA154878', 'aymen11@gmail.com', 'male', '853-1697011944.jpg'),
(35, 'said', 'aabilla', 'QA15484', 'said@gmail.com', 'male', '716-1693323428.jpg'),
(49, 'zakaria', 'elkoh', 'QA154878', 'zakaria@gmail.com', 'male', '906-1697012829.jpg'),
(50, 'salma', 'gmiri', 'AA158545', 'salma@gmail.com', 'female', '870-1697012819.jpg'),
(61, 'ali', 'fihar', 'I484596', 'ali@gmail.com', 'male', '872-1697011598.jpg'),
(63, 'FatimaEzahra', 'adardor', 'FA158678', 'titima@gmail.com', 'female', '953-1697011962.jpg'),
(64, 'omar', 'ennedi', 'FA158678', 'omar@gmail.com', 'male', '859-1697012922.jpg'),
(65, 'Aicha', 'Louafi', 'AA158545', 'aicha@gmail.com', 'female', 'l-alaoui.jpg'),
(66, 'ibtihal', 'ibtihal', 'QA154878', 'ibtihal@gmail.com', 'female', 'j-qabbaj.jpg'),
(67, 'Abdelhamid', 'Cosk', 'AA158545', 'cosk@gmail.com', 'male', 'a-elbari.jpg'),
(68, 'Abdelqudouss', 'fadli', 'QA15484', 'abdo@gmail.com', 'female', 'r-jazouli.jpg');



CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cin` varchar(255) DEFAULT NULL
) 



INSERT INTO `teachers` (`id`, `nom`, `prenom`, `departement`, `classe`, `image`, `cin`) VALUES
(3, 'Anass', 'Choubri', 'BIOF', '1BAC-BIOF-3', '33-1669135287.jpg', 'QA152848'),
(5, 'Aziz', 'Ben Mallouk', 'SVT', '2BAC-SVT-4', '38-1684487575.jfif', 'QA847458'),
(6, 'Reda', 'Elmedkouri', 'BIOF', '2BAC-BIOF-1', '37-1684509574.jfif', 'QA124578'),
(7, 'tayeb', 'souini', 'PC', '2-BAC-PC-1', '711-1691576438.jpg', 'QA125785'),
(8, 'Aymane', 'Benhima', 'SVT', '2-BAC-SVT-4', '12-1665938441.jpg', 'QA125785'),
(11, 'Reda', 'Elmedkouri', 'SVT', '2-BAC-SVT-2', '37-1684509574.jfif', 'QA125777'),
(12, 'Anass', 'Elmakhloufi', 'BIOF', 'BIOF-1', '33-1669135287.jpg', 'QA125785'),
(13, 'Aziz', 'Ben Mallouk', 'SVT', '2BAC-SVT-1', '38-1684487575.jfif', 'QA125787'),
(18, 'said', 'aabilla', 'SVT', '2BAC-SVT-4', '716-1693323428.jpg', 'AA158545');


CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) 

INSERT INTO `user_role` (`id`, `name`, `email`, `password`, `role`) VALUES
(33, 'Nabil CHABAB', 'nabil.chababnabil@gmail.com', '$2y$10$y8VAF1ZHeNo1FKyeEpOWSe.TVQ7j58PbmWA6P5r1H.D9WWqDmnt3G', 'admin'),
(34, 'said aabilla', 'said@gmail.com', '$2y$10$Vij0c2RAUQmgt9rY.ejd0e.Yy8DfbmXdGJhBMgeRWQn3YnJ5uMG8K', 'teacher'),
(35, 'zakaria elkoh', 'zakaria@gmail.com', '$2y$10$4mShpPUYiICm40yR3jMDn.aylHT4Br1VfCVbweHo.1VhIK0sihAaK', 'student'),
(36, 'abdelilah sadiqi', 'abdelilah@gmail.com', '$2y$10$KtyYq/FAc9V.uuScdRtz2eaCkbDo2M./KSk7.W57ctsF4PxaOqoKy', 'student'),
(37, 'Aicha Elouafi', 'aicha@gmail.com', '$2y$10$ZWlLiBo.awp5JOQCGotIOOlI4e7wp7bOBpvyk/THapct/WEmCyEDy', 'student'),
(38, 'Anass Elmakhloufi', 'anass@gmail.com', '$2y$10$f3r.Uh4BY1YpGZy06n0Ey.LC9nuzSK5.Jqs8t5YnFWBlWd1uLsRWG', 'student'),
(39, 'anass aliky', 'anassAliky@gmail.com', '$2y$10$za2Vm/aTMCh391zaOowwZei42ZPPv8kEjiyBjROB9eTW.bY2OoNIe', 'student'),
(40, 'Anass Choubri', 'anaschoubri@gmail.com', '$2y$10$TYdxYwbEyYnVmh/Fis/gzOVCYr.k8RtZCKCD8BvxHosuHxvVSVLXO', 'teacher'),
(41, 'omar ennedi', 'omar@gmail.com', '$2y$10$cmR.s6fnezba76DgQkQ4OO4Y9LIty9.YWopq2mULA3AAPZR86dlPK', 'student'),
(42, 'ghizlane maqdar', 'ghizlane@gmail.com', '$2y$10$GL7y1JIhfJ1FoPXSGZKZHOYQ7ZNaX57NevJ93p6dB1sihjEZ0csCe', 'student'),
(43, 'FatimaEzahra adardor', 'titima@gmail.com', '$2y$10$vhW7uVFg4E2jMM2uhTLU2em/NG/s2s9tF.s436mkL6flRbytnnVM2', 'student'),
(44, 'ibtihal ibtihal', 'ibtihal@gmail.com', '$2y$10$Xg5uUlY3b8XRLZZ3MfTjEutl95RWY5FxIOHVghBtd4usNqOng4dvy', 'student'),
(45, 'mohammed Acherwaw', 'mohammed@gmail.com', '$2y$10$FA3va5p3pKpwkx0yt1tDxOKPme9E.XCYcPALpLgohZf8dqNzS5hZi', 'student'),
(46, 'test testetst', 'test@gmail.com', '$2y$10$WzpIeOBNMe0LjayOwHQAZ.SM1f4Zz6R1bwkVjJqslMe0ge/vI4PA6', 'student'),
(47, 'salma gmiri', 'salma@gmail.com', '$2y$10$ITX4GfQUCnmEaIzsW1KTMelyt8JvD.cZa5NeoMzmOeBqdnQVmz.D.', 'student'),
(48, 'ali fihar', 'aliali@gmail.com', '$2y$10$KnzLmOA1Cd.D0GzdSguY..ZvLJssMYcqtTc0NabPIz5/E1xGiHEDm', 'student');

ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;


ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;


ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);
COMMIT;

