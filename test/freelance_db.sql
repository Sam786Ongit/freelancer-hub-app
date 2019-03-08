-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 09:49 AM
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
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `content`, `status`) VALUES
(1, 24, 'New Blog Title', 'At Bene Studio we build React Native applications, but all application includes pure JavaScript functions. These, so-called utility functions, could be for field validation, text formatting, or for some mathematical calculation. How should we create stable, well-tested utility functions, how to organize them and what are the main rules about these? ', '<section name=\"b2be\" class=\"section section--body section--first\" style=\"position: relative; clear: both; padding-top: 0px; margin-top: 20px;\"><div class=\"section-content\"><div class=\"section-inner sectionLayout--insetColumn\" style=\"position: relative; max-width: 740px; width: 740px; margin: 0px auto; padding-left: 20px; padding-right: 20px;\"><p name=\"1671\" id=\"1671\" class=\"graf graf--p graf-after--figure graf--trailing\" style=\"margin: 38px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">At&nbsp;<a href=\"http://benestudio.co/\" data-href=\"http://benestudio.co\" class=\"markup--anchor markup--p-anchor\" rel=\"noopener\" target=\"_blank\" style=\"color: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.54); background-repeat: repeat-x; background-image: url(&quot;data:image/svg+xml;utf8,<svg preserveAspectRatio=&quot;none&quot; viewBox=&quot;0 0 1 1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><line x1=&quot;0&quot; y1=&quot;0&quot; x2=&quot;1&quot; y2=&quot;1&quot; stroke=&quot;currentColor&quot; /></svg>&quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\">Bene Studio</a>&nbsp;we build React Native applications, but all application includes pure JavaScript functions. These, so-called utility functions, could be for field validation, text formatting, or for some mathematical calculation. How should we create stable, well-tested utility functions, how to organize them and what are the main rules about these? These are the main questions that this article is built on.</p></div></div></section><section name=\"3008\" class=\"section section--body\" style=\"position: relative; clear: both;\"><div class=\"section-divider\"><hr class=\"section-divider\" style=\"border-top: 0px; text-align: center; margin-top: 52px; margin-bottom: 42px;\"></div><div class=\"section-content\"><div class=\"section-inner sectionLayout--insetColumn\" style=\"position: relative; max-width: 740px; width: 740px; margin: 0px auto; padding-left: 20px; padding-right: 20px;\"><p name=\"36c9\" id=\"36c9\" class=\"graf graf--p graf--leading\" style=\"margin: 38px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">What is the rule of utility function for us? Keep it simple, this is the base. It has to be like a tiny robot. It performs a specific function, but it does perfectly. For example, a simple mathematical function, like a calculation of circle area could be a utility function. It is simple, reusable and easy to test.</p><p name=\"3afb\" id=\"3afb\" class=\"graf graf--p graf-after--p\" style=\"margin: 29px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">Letâ€™s look a process to create well tested, reusable utility function. Iâ€™m going to use test-driven development (TDD), so at first, letâ€™s create the tests. Iâ€™m using&nbsp;<a href=\"https://facebook.github.io/jest/\" data-href=\"https://facebook.github.io/jest/\" class=\"markup--anchor markup--p-anchor\" rel=\"noopener\" target=\"_blank\" style=\"color: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.54); background-repeat: repeat-x; background-image: url(&quot;data:image/svg+xml;utf8,<svg preserveAspectRatio=&quot;none&quot; viewBox=&quot;0 0 1 1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><line x1=&quot;0&quot; y1=&quot;0&quot; x2=&quot;1&quot; y2=&quot;1&quot; stroke=&quot;currentColor&quot; /></svg>&quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\">Jest</a>&nbsp;for that.</p><blockquote name=\"7fd4\" id=\"7fd4\" class=\"graf graf--blockquote graf-after--p\" style=\"margin-top: 29px; margin-bottom: 0px; margin-left: -23px; border-left: 3px solid rgba(0, 0, 0, 0.84); padding-left: 20px; padding-bottom: 2px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-style: italic; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">Jest is a complete and easy to set-up JavaScript testing solution.</blockquote><p name=\"676f\" id=\"676f\" class=\"graf graf--p graf-after--blockquote\" style=\"margin: 29px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">At first, we have to define the goal: we need a function which can calculate a circle area with the given radius. It is a very basic function that uses a simple mathematical formula:</p><figure name=\"748e\" id=\"748e\" class=\"graf graf--figure graf-after--p\" style=\"margin-top: 43px; margin-bottom: 0px; position: relative; clear: both; outline: 0px; user-select: auto; z-index: 100;\"><div class=\"aspectRatioPlaceholder is-locked\" style=\"position: relative; width: 169px; margin: 0px auto; max-width: 169px; max-height: 61px;\"><div class=\"aspectRatioPlaceholder-fill\" style=\"padding-bottom: 61px;\"></div><img class=\"graf-image\" data-image-id=\"1*R3-vzep9RBwHvQc_xQWU6Q.png\" data-width=\"169\" data-height=\"61\" src=\"https://cdn-images-1.medium.com/max/800/1*R3-vzep9RBwHvQc_xQWU6Q.png\" style=\"border: 0px; display: block; position: absolute; margin: auto; max-width: 100%; top: 0px; left: 0px; width: 169px; height: 61px;\"></div><figcaption class=\"imageCaption\" style=\"position: relative; left: 0px; width: 700px; top: 0px; margin-top: 10px; color: rgba(0, 0, 0, 0.68); outline: 0px; text-align: center; z-index: 300; --x-height-multiplier:0.342; --baseline-multiplier:0.22; font-family: medium-content-sans-serif-font, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, &quot;Lucida Sans&quot;, Geneva, Arial, sans-serif; font-feature-settings: &quot;liga&quot;, &quot;lnum&quot;; font-size: 16px; line-height: 1.4; letter-spacing: 0px;\">Formula of circle&nbsp;area</figcaption></figure><p name=\"0c2e\" id=\"0c2e\" class=\"graf graf--p graf-after--figure graf--trailing\" style=\"margin: 38px 0px 0px; --x-height-multiplier:0.375; --baseline-multiplier:0.17; font-family: medium-content-serif-font, Georgia, Cambria, &quot;Times New Roman&quot;, Times, serif; font-size: 21px; line-height: 1.58; letter-spacing: -0.003em;\">Where A is the area, r is the radius of the circle and Ï€ is a constant number.</p></div></div></section><section name=\"c3e5\" class=\"section section--body section--last\" style=\"padding-bottom: 5px; position: relative; clear: both;\"><div class=\"section-divider\" style=\"color: rgba(0, 0, 0, 0.84); font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 20px;\"><hr class=\"section-divider\" style=\"border-top: 0px; text-align: center; margin-top: 52px; margin-bottom: 42px;\"><br></div><div class=\"section-content\" style=\"color: rgba(0, 0, 0, 0.84); font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 20px;\"><div class=\"section-inner sectionLayout--insetColumn\" style=\"position: relative; max-width: 740px; width: 740px; margin: 0px auto; padding-left: 20px; padding-right: 20px;\"><figure name=\"6149\" id=\"6149\" class=\"graf graf--figure graf--leading\" style=\"margin-top: 52px; margin-bottom: 0px; position: relative; clear: both; outline: 0px; user-select: auto; z-index: 100;\"><div class=\"aspectRatioPlaceholder is-locked\" style=\"position: relative; width: 461px; margin: 0px auto; max-width: 461px; max-height: 160px;\"></div></figure></div></div></section>', 1),
(2, 24, '50 Successful Blogs in Every Topic Imaginable', 'One misconception that forever bothers me is the belief that blogging doesnâ€™t work unless itâ€™s meta. People donâ€™t believe blogs can be successful unless they are about blogging, marketing, or social media.', '<h1 class=\"entry-title\" style=\"margin-right: -100px; margin-bottom: 30px; margin-left: -100px; padding: 0px; border: 0px; outline: 0px; font-size: 38px; vertical-align: baseline; background: transparent; font-weight: bold; line-height: 42px; font-family: Arial; text-align: center; color: rgb(0, 0, 0);\">50 Successful Blogs in Every Topic Imaginable</h1><div class=\"entry-content\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; max-width: 100%; font-family: Georgia;\"><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">One misconception that forever bothers me is the&nbsp;belief that blogging doesnâ€™t work unless itâ€™s meta. People donâ€™t believe blogs can be successful unless they are about blogging, marketing, or social media.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">What they donâ€™t understand is that itâ€™s only the marketing blogs that publish things like â€œincome reportsâ€ and the like. Regular blogs in traditional&nbsp;topics donâ€™t do this, yet they are still out there killing it.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">Today Iâ€™m going to bring you 50 successful blogs, often built solely through publishing great content + guest blogging, that span a&nbsp;huge variety&nbsp;of topics, to prove once and for all that blogging can be used to build an audience in nearly every topic imaginable.</p><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\"></p><h2 style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 32px; vertical-align: baseline; background: transparent; font-weight: bold; line-height: 35px; font-family: Arial; text-align: center;\">Successful Blogs: The Guidelines</h2><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">Any blog featured here cannot&nbsp;have any of the following characteristics:</p><ol style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 30px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;\"><li style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">Focus on blogging/marketing/social media</li><li style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">The blog cannot be tied to another popular site</li><li style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">Must have an involved community</li><li style=\"margin: 0px 0px 25px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">No â€œmegaâ€ blogs or magazines</li></ol><p style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 20px; vertical-align: baseline; background: transparent; line-height: 33px;\">Iâ€™ve included data on the approximate (~) subscriber count (when available) and what the major income source seems to be (when applicable).</p></div>', 1);

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
(28, 24, 'Redmi 4', 'service', 'Redmi for sale in bangalore', '1551066797_24_5162017115121AM_635_xiaomi_redmi_4.jpeg');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `country`, `city`, `pincode`, `phone_public`, `email_public`, `password`, `description`, `created_at`, `updated_at`) VALUES
(24, 'Yathan', 'yathan@gmail.com', '1234567899', 'male', 'india', 'bangalore', 560077, 1, 1, '$2y$10$2T6Xe71.A1anGo5i72ey4enyUS6koW4hd9FkYAaRcUNE4JRIzAKpq', '                                                         hello this about me                                                                                           ', '2019-02-23 16:24:05', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `quote_requests`
--
ALTER TABLE `quote_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
