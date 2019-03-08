-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 08:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `content` longtext,
  `status` tinyint(1) DEFAULT '0',
  `is_blocked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `content`, `status`, `is_blocked`) VALUES
(3, 25, 'Kickstart your React Native app with Firebaseâ€Š', 'In this series we will create an iOS and Android applicationâ€Šâ€”â€Šcalled Fakestagramâ€Šâ€”â€Šwith React Native, using some of Firebase services. This is not an â€œintro to React Nativeâ€ tutorial so we wonâ€™t cover basic things,', '<h1 name=\"2981\" id=\"2981\" class=\"graf graf--h3 graf--leading graf--title\" style=\"font-size: 42px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: medium-content-title-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; color: rgba(0, 0, 0, 0.84); --x-height-multiplier:0.342; --baseline-multiplier:0.22; line-height: 1.25; --margin-top-multiplier:0; padding-top: 16px !important;\">Kickstart your React Native app with Firebaseâ€Šâ€”â€ŠAuthentication (Tutorial #2)</h1><div class=\"uiScale uiScale-ui--regular uiScale-caption--regular u-flexCenter u-marginVertical24 u-fontSize15 js-postMetaLockup\" style=\"font-size: 16px; line-height: 20px; color: rgba(0, 0, 0, 0.84); font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; display: flex !important; -webkit-box-align: center !important; align-items: center !important; margin-top: 24px !important; margin-bottom: 24px !important;\"><div class=\"u-flex0\" style=\"-webkit-box-flex: 0; flex: 0 0 auto;\"><a class=\"link u-baseColor--link avatar\" href=\"https://blog.benestudio.co/@benestudio_co?source=post_header_lockup\" data-action=\"show-user-card\" data-action-source=\"post_header_lockup\" data-action-value=\"514078c22203\" data-action-type=\"hover\" data-user-id=\"514078c22203\" data-collection-slug=\"bene-studio\" dir=\"auto\" style=\"color: inherit; display: block; white-space: nowrap; overflow: visible; text-overflow: ellipsis; line-height: normal; position: relative; cursor: pointer;\"><img src=\"https://cdn-images-1.medium.com/fit/c/50/50/1*da8wZ9gFAmxTya-CvuT52w.png\" class=\"avatar-image u-size50x50\" alt=\"Go to the profile of Bene Studio\" style=\"border: 0px; display: inline-block; border-radius: 100%; width: 50px !important; height: 50px !important;\"></a></div><div class=\"u-flex1 u-paddingLeft15 u-overflowHidden\" style=\"overflow: hidden !important; -webkit-box-flex: 1; flex: 1 1 auto; padding-left: 15px !important;\"><div class=\"u-paddingBottom3\" style=\"padding-bottom: 3px !important;\"><a class=\"ds-link ds-link--styleSubtle ui-captionStrong u-inlineBlock link link--darken link--darker\" href=\"https://blog.benestudio.co/@benestudio_co\" data-action=\"show-user-card\" data-action-value=\"514078c22203\" data-action-type=\"hover\" data-user-id=\"514078c22203\" data-collection-slug=\"bene-studio\" dir=\"auto\" style=\"cursor: pointer; transform: translateY(1.52px); color: rgba(0, 0, 0, 0.84) !important; display: inline-block !important; fill: rgba(0, 0, 0, 0.84) !important; --x-height-multiplier:0.342  !important; --baseline-multiplier:0.22  !important; font-family: medium-content-sans-serif-font, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, &quot;Lucida Sans&quot;, Geneva, Arial, sans-serif !important; letter-spacing: 0px !important; line-height: 20px !important;\">Bene Studio</a><span class=\"followState js-followState\" data-user-id=\"514078c22203\"><button class=\"button button--primary button--smallest button--dark u-noUserSelect button--withChrome u-accentColor--buttonDark button--follow js-followButton u-marginLeft10 u-xs-hide\" data-action=\"sign-up-prompt\" data-sign-in-action=\"toggle-subscribe-user\" data-requires-token=\"true\" data-redirect=\"https://medium.com/_/subscribe/user/514078c22203\" data-action-source=\"post_header_lockup-514078c22203-------------------------follow_byline\" style=\"color: rgba(0, 0, 0, 0.84); font-variant: inherit; font-stretch: inherit; font-size: 15px; line-height: 19px; font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; cursor: pointer; user-select: none; position: relative; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; vertical-align: middle; white-space: nowrap; letter-spacing: 0px; text-rendering: optimizelegibility; transition: background-color 0.1s ease 0s, border-color 0.1s ease 0s, color 0.1s ease 0s, fill 0.1s ease 0s; height: 19px; padding: 0px 10px; border-width: 1px; border-style: solid; border-color: rgba(0, 0, 0, 0.68); border-radius: 4px; margin-left: 10px !important;\"><span class=\"button-label  button-defaultState js-buttonLabel\" style=\"display: inline;\">Follow</span></button></span></div><div class=\"ui-caption u-noWrapWithEllipsis js-testPostMetaInlineSupplemental\" style=\"transform: translateY(1.52px); white-space: nowrap !important; text-overflow: ellipsis !important; overflow: hidden !important; color: rgba(0, 0, 0, 0.54) !important; fill: rgba(0, 0, 0, 0.54) !important; --x-height-multiplier:0.342  !important; --baseline-multiplier:0.22  !important; font-family: medium-content-sans-serif-font, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, &quot;Lucida Sans&quot;, Geneva, Arial, sans-serif !important; letter-spacing: 0px !important; line-height: 20px !important;\"><time datetime=\"2018-04-10T17:39:54.696Z\">Apr 10, 2018</time><span class=\"middotDivider u-fontSize12\" style=\"padding-right: 0.3em; padding-left: 0.3em; font-size: 15px !important;\"></span><span class=\"readingTime\" title=\"4 min read\"></span></div></div></div><p name=\"79a4\" id=\"79a4\" class=\"graf graf--p graf-after--h3\" style=\"margin: 8px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em; color: rgba(0, 0, 0, 0.84);\"><em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">In this series we will create an iOS and Android applicationâ€Šâ€”â€Šcalled Fakestagramâ€Šâ€”â€Šwith React Native, using some of Firebase services. This is not an â€œintro to React Nativeâ€ tutorial so we wonâ€™t cover basic things, but only Firebase specific topics, so you will need some React Native knowledge to keep up with the pace.</em></p><p name=\"e2b3\" id=\"e2b3\" class=\"graf graf--p graf-after--p\" style=\"margin: 29px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em; color: rgba(0, 0, 0, 0.84);\"><em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">Today, in Ep. 2, we will look at some of Firebaseâ€™s basic authentication possibilities. If you want to read the previous article about Cloud Firestore, go to&nbsp;</em><a href=\"https://blog.benestudio.co/kickstart-your-react-native-app-with-firebase-cloud-firestore-tutorial-1-207a8f64e4f\" data-href=\"https://blog.benestudio.co/kickstart-your-react-native-app-with-firebase-cloud-firestore-tutorial-1-207a8f64e4f\" class=\"markup--anchor markup--p-anchor\" target=\"_blank\" style=\"color: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.54); background-repeat: repeat-x; background-image: url(&quot;data:image/svg+xml;utf8,<svg preserveAspectRatio=&quot;none&quot; viewBox=&quot;0 0 1 1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><line x1=&quot;0&quot; y1=&quot;0&quot; x2=&quot;1&quot; y2=&quot;1&quot; stroke=&quot;currentColor&quot; /></svg>&quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"><em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">Episode #1</em></a><em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">, the intro article is here:&nbsp;</em><a href=\"https://blog.benestudio.co/kickstart-your-react-native-app-with-firebase-tutorial-0-e6713bdb2012\" data-href=\"https://blog.benestudio.co/kickstart-your-react-native-app-with-firebase-tutorial-0-e6713bdb2012\" class=\"markup--anchor markup--p-anchor\" rel=\"noopener\" target=\"_blank\" style=\"color: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.54); background-repeat: repeat-x; background-image: url(&quot;data:image/svg+xml;utf8,<svg preserveAspectRatio=&quot;none&quot; viewBox=&quot;0 0 1 1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><line x1=&quot;0&quot; y1=&quot;0&quot; x2=&quot;1&quot; y2=&quot;1&quot; stroke=&quot;currentColor&quot; /></svg>&quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"><em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">Episode #0.</em></a></p><h4 name=\"a788\" id=\"a788\" class=\"graf graf--h4 graf-after--p\" style=\"font-family: medium-content-sans-serif-font, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, &quot;Lucida Sans&quot;, Geneva, Arial, sans-serif; letter-spacing: -0.012em; font-weight: 600; margin: 30px 0px 0px; color: rgba(0, 0, 0, 0.84); --x-height-multiplier:0.342; --baseline-multiplier:0.22; font-size: 26px; line-height: 1.22;\">Standup</h4><p name=\"41a8\" id=\"41a8\" class=\"graf graf--p graf-after--h4\" style=\"margin: 6px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em; color: rgba(0, 0, 0, 0.84);\">On the previous article we created a database to our application to store posts and started using it with a FlatList and a button to add a random new post. Today we will extend the database with another collection to store users, create authentication feature and secure the database by only registered users will be able to write anything in it.</p><h4 name=\"d68d\" id=\"d68d\" class=\"graf graf--h4 graf-after--p\" style=\"font-family: medium-content-sans-serif-font, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, &quot;Lucida Sans&quot;, Geneva, Arial, sans-serif; letter-spacing: -0.012em; font-weight: 600; margin: 30px 0px 0px; color: rgba(0, 0, 0, 0.84); --x-height-multiplier:0.342; --baseline-multiplier:0.22; font-size: 26px; line-height: 1.22;\">Authentication features</h4><p name=\"68c8\" id=\"68c8\" class=\"graf graf--p graf-after--h4\" style=\"margin: 6px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em; color: rgba(0, 0, 0, 0.84);\">According to docs:<em class=\"markup--em markup--p-em\" style=\"font-feature-settings: &quot;liga&quot;, &quot;salt&quot;;\">&nbsp;â€œFirebase Authentication provides backend services, easy-to-use SDKs, and ready-made UI libraries to authenticate users to your app. It supports authentication using passwords, phone numbers, popular federated identity providers like Google, Facebook and Twitter, and more.</em></p>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `type`, `description`, `image`) VALUES
(28, 24, 'Redmi 4', 'service', 'Redmi for sale in bangalore', '1551066797_24_5162017115121AM_635_xiaomi_redmi_4.jpeg'),
(29, 24, 'New Post', 'service', 'This is a test', '1551719542_24_EBB5.jpg'),
(30, 24, 'New Post', 'service', 'Lore,m ipsum dolor semit kloks to repsum do', '1551721481_24_EBB2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote_requests`
--

CREATE TABLE `quote_requests` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `requester_phone` text NOT NULL,
  `requester_email` text NOT NULL,
  `requester_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote_requests`
--

INSERT INTO `quote_requests` (`id`, `post_id`, `requester_phone`, `requester_email`, `requester_message`) VALUES
(1, 28, '9066141943', 'sam@g.com', 'Hey can u send me full details'),
(2, 28, '9066141943', 'sam@g.com', 'Hey can u send me full details');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `phone` mediumtext NOT NULL,
  `gender` mediumtext NOT NULL,
  `country` mediumtext NOT NULL,
  `city` mediumtext NOT NULL,
  `pincode` int(10) NOT NULL,
  `phone_public` tinyint(1) NOT NULL DEFAULT '0',
  `email_public` tinyint(1) NOT NULL DEFAULT '0',
  `password` text NOT NULL,
  `description` longtext,
  `image` mediumtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_admin` int(11) NOT NULL DEFAULT '0',
  `is_blocked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `country`, `city`, `pincode`, `phone_public`, `email_public`, `password`, `description`, `image`, `created_at`, `updated_at`, `is_admin`, `is_blocked`) VALUES
(1, 'sam', 'sam@a.com', '123456789', 'male', 'india', 'bangalore', 560036, 1, 1, '1234567', 'hello world', NULL, '2019-03-08 01:45:04', '0000-00-00 00:00:00', 0, 0),
(24, 'Yathan', 'yathan@gmail.com', '1234567899', 'male', 'india', 'bangalore', 560077, 1, 1, '$2y$10$2T6Xe71.A1anGo5i72ey4enyUS6koW4hd9FkYAaRcUNE4JRIzAKpq', '                                                         hello this about me                                                                                           ', NULL, '2019-03-07 16:13:50', '0000-00-00 00:00:00', 1, 0),
(25, 'test1', 'test1@gmail.com', '1234567899', 'male', 'india', 'bangalore', 123456, 1, 1, '$2y$10$rpBa8ZB6WohphK3U9ZAneuRfKOpdZUtep/G5pXPXYf4iRi.MImkha', NULL, NULL, '2019-03-08 02:30:48', '0000-00-00 00:00:00', 0, 0),
(26, 'test2', 'test2@gmail.com', '12345667', 'male', 'india', 'bangalore', 560036, 1, 1, '$2y$10$yD/dUDp3FE/Gep0Y7MKCEuilKQ4px3.sdJNiiybpY1GtgoOARaq1e', NULL, NULL, '2019-03-07 17:05:19', '0000-00-00 00:00:00', 0, 0),
(27, 'test3', 'test3@gmail.com', '9066141943', 'male', 'india', 'Shillong', 560036, 0, 1, '$2y$10$QQKhFmSE3f6hem9bhfKJQu0NXGoHGQVGVoEDCa9wELSAcbpudk9DW', NULL, NULL, '2019-03-07 17:05:57', '0000-00-00 00:00:00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `quote_requests`
--
ALTER TABLE `quote_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `quote_requests`
--
ALTER TABLE `quote_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quote_requests`
--
ALTER TABLE `quote_requests`
  ADD CONSTRAINT `quote_requests_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
