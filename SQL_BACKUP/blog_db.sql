-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Ara 2022, 14:32:48
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `admin_id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `admin_id` int NOT NULL,
  `post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `admin_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `admin_id`, `name`, `title`, `content`, `category`, `image`, `status`, `date`) VALUES
(12, 1, 'admin', 'Car', '&lt;p&gt;asdfasdfasdf&lt;/p&gt;', 'business', 'Sky-Blue-Colored-Car-Wallpaper-for-Download.webp', 'active', '2022-12-11 14:18:29'),
(13, 1, 'admin', 'Ruby on Rails Installation | Ubuntu 20.04', '&lt;p&gt;&lt;a href=&quot;https://rubyonrails.org/&quot;&gt;Ruby on Rails&amp;reg;&lt;/a&gt;&amp;nbsp;simply known as Rails, is an open-source web application framework written in Ruby that helps you create highly powerful web sites and applications.&lt;/p&gt;\r\n\r\n&lt;p&gt;This post will help you to install&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/rails&quot;&gt;Ruby on Rails&lt;/a&gt;&amp;nbsp;on&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/ubuntu-18.04&quot;&gt;Ubuntu 20.04&lt;/a&gt;&amp;nbsp;using two methods:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.itzgeek.com/post/how-to-install-ruby-on-rails-on-ubuntu-20-04/#using-rbenv-recommended&quot;&gt;rbenv&lt;/a&gt;&amp;nbsp;(Recommended)&lt;/li&gt;\r\n	&lt;li&gt;&lt;a href=&quot;https://www.itzgeek.com/post/how-to-install-ruby-on-rails-on-ubuntu-20-04/#using-rvm&quot;&gt;RVM&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Prerequisites&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install Dependencies&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Install the curl and other required packages for Ruby on Rails installation.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;sudo apt update\r\n\r\nsudo apt install -y curl gnupg2 dirmngr git-core zlib1g-dev build-essential libssl-dev libreadline-dev libyaml-dev libsqlite3-dev sqlite3 libxml2-dev libxslt1-dev libcurl4-openssl-dev software-properties-common libffi-dev\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install Node.js&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Rails need a Javascript runtime for application development in Linux. So, for that, we will install the LTS version of Node.js (v12.x).&lt;/p&gt;\r\n\r\n&lt;p&gt;If you want to use Node.js&amp;rsquo;s latest feature,&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/post/how-to-install-node-js-on-ubuntu-20-04/#install-nodejs&quot;&gt;install Node.js v14.x&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;curl -sL &amp;lt;https://deb.nodesource.com/setup_12.x&amp;gt; | sudo -E bash -\r\n\r\nsudo apt install -y nodejs\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install Yarn&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Add the Yarn repository in case if you want to install the Yarn package manager to manage packages.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;curl -sL &amp;lt;https://dl.yarnpkg.com/debian/pubkey.gpg&amp;gt; | sudo apt-key add -\r\n\r\necho &amp;quot;deb &amp;lt;https://dl.yarnpkg.com/debian/&amp;gt; stable main&amp;quot; | sudo tee /etc/apt/sources.list.d/yarn.list\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Install Yarn with the below command.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;sudo apt update &amp;amp;&amp;amp; sudo apt install -y  yarn\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install Ruby&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Using rbenv (Recommended)&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;The&amp;nbsp;rbenv&amp;nbsp;lets you install and manage the versions of Ruby easily, and it is lighter than RVM.&lt;/p&gt;\r\n\r\n&lt;p&gt;To install&amp;nbsp;rbenv&amp;nbsp;on your system, run the below commands. The below commands will install&amp;nbsp;rbenv&amp;nbsp;into your home directory and set appropriate environment variables.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;cd\r\ngit clone &amp;lt;https://github.com/rbenv/rbenv.git&amp;gt; ~/.rbenv\r\necho &amp;#39;export PATH=&amp;quot;$HOME/.rbenv/bin:$PATH&amp;quot;&amp;#39; &amp;gt;&amp;gt; ~/.bashrc\r\necho &amp;#39;eval &amp;quot;$(rbenv init -)&amp;quot;&amp;#39; &amp;gt;&amp;gt; ~/.bashrc\r\nexec $SHELL\r\n\r\ngit clone &amp;lt;https://github.com/rbenv/ruby-build.git&amp;gt; ~/.rbenv/plugins/ruby-build\r\necho &amp;#39;export PATH=&amp;quot;$HOME/.rbenv/plugins/ruby-build/bin:$PATH&amp;quot;&amp;#39; &amp;gt;&amp;gt; ~/.bashrc\r\nexec $SHELL\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;For this post, we will install the latest version of Ruby (v2.7.1).&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rbenv install 2.7.1\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;You can also install other versions of ruby with&amp;nbsp;rbenv install &amp;lt;version&amp;gt;&amp;nbsp;command.&lt;/p&gt;\r\n\r\n&lt;p&gt;Set Ruby v2.7.1 as the default version for all login shells.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rbenv global 2.7.1\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Check the Ruby version.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;ruby -v\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;ruby 2.7.1p83 (2020-03-31 revision a0c7c23c9c) [x86_64-linux]\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Install the bundler.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;gem install bundler\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Using RVM&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;RVM stands for Ruby Version Manager. It helps install and manage ruby versions efficiently and independently by automatically downloading its dependencies.&lt;/p&gt;\r\n\r\n&lt;p&gt;Import public key in your system.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;gpg --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3 7D2BAF1CF37B13E2069D6956105BD0E739499BDB\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Use the curl command to install RVM in your system.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;curl -sSL &amp;lt;https://get.rvm.io&amp;gt; | bash -s stable\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Load RVM environment variables using the below command.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;source ~/.rvm/scripts/rvm\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Use the following command to install Ruby 2.7.0.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rvm install 2.7.1\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;You can also install other versions of ruby using the&amp;nbsp;rvm install &amp;lt;version&amp;gt;&amp;nbsp;command.&lt;/p&gt;\r\n\r\n&lt;p&gt;Set default Ruby version to 2.7.1 in case your system has multiple versions of ruby.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rvm use 2.7.1 --default\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;Using /home/raj/.rvm/gems/ruby-2.7.1\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Check the Ruby version.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;ruby -v\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;ruby 2.7.1p83 (2020-03-31 revision a0c7c23c9c) [x86_64-linux]\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Install the bundler.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;gem install bundler\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install Rails&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Use gem install rails command to install the latest stable release of Rails.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;gem install rails\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;You can also use&amp;nbsp;gem install rails &amp;ndash;version=&amp;lt;version&amp;gt;&amp;nbsp;to install a specific version of rails.&lt;/p&gt;\r\n\r\n&lt;p&gt;Check the Rails version.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rails -v\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;Rails 6.0.3.1\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Create Rails Application&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;We will now create an application with MariaDB support to check the Ruby on Rails installation.&lt;/p&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Install MariaDB Database&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Rails uses sqlite3 as the default database, and it is not recommended to use it in a production environment. For production installation, you should probably need to go with&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/mysql&quot;&gt;MySQL&lt;/a&gt;&amp;nbsp;or&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/postgresql&quot;&gt;PostgreSQL&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;For this demo, we will install MariaDB (v10.3) from the Ubuntu repository and use it as a database server.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;READ:&lt;/strong&gt;&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/how-tos/linux/ubuntu-how-tos/how-to-install-mariadb-on-ubuntu-20-04.html&quot;&gt;How To Install MariaDB v10.4 on Ubuntu 20.04&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;sudo apt install -y mariadb-server mariadb-client\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Next, install the below development files package.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;sudo apt install -y libmariadb-dev\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Create Database&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Create Database User&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;sudo mysql -u root -p\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Create a database user for your application.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;CREATE USER &amp;#39;itzgeek&amp;#39;@&amp;#39;localhost&amp;#39; IDENTIFIED BY &amp;#39;password&amp;#39;;\r\n\r\nGRANT ALL PRIVILEGES ON *.* TO &amp;#39;itzgeek&amp;#39;@&amp;#39;localhost&amp;#39;;\r\n\r\nexit\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Install the MySQL2 extension.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;gem install mysql2\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Create Rails Application&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Create an application with database support as a standard user.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;NOTE:&lt;/strong&gt;&amp;nbsp;Running the Rails server as the root user is not recommended.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;cd ~\r\n\r\nrails new itzgeekapp -d mysql\r\n\r\ncd itzgeekapp\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Update configuration file with the database information.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;nano  config/database.yml\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Enter the DB user details shown like below.&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;default: &amp;amp;default\r\n  adapter: mysql2\r\n  encoding: utf8mb4\r\n  pool: &amp;lt;%= ENV.fetch(&amp;quot;RAILS_MAX_THREADS&amp;quot;) { 5 } %&amp;gt;\r\n  username: itzgeek  &amp;lt;&amp;lt; DB User\r\n  password: password  &amp;lt;&amp;lt; DB Password\r\n  socket: /var/run/mysqld/mysqld.sock\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;Create the database.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rake db:create\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;Created database &amp;#39;itzgeekapp_development&amp;#39;\r\nCreated database &amp;#39;itzgeekapp_test&amp;#39;\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Validate Rails Application&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;Start the Rails application.&lt;/p&gt;\r\n\r\n&lt;p&gt;COPY&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;rails server -b 0.0.0.0\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Output:&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;pre&gt;\r\n&lt;code&gt;=&amp;gt; Booting Puma\r\n=&amp;gt; Rails 6.0.3.1 application starting in development\r\n=&amp;gt; Run `rails server --help` for more startup options\r\nPuma starting in single mode...\r\n* Version 4.3.5 (ruby 2.7.1-p83), codename: Mysterious Traveller\r\n* Min threads: 5, max threads: 5\r\n* Environment: development\r\n* Listening on tcp://0.0.0.0:3000\r\nUse Ctrl-C to stop\r\n\r\n&lt;/code&gt;&lt;/pre&gt;\r\n\r\n&lt;p&gt;By now, the Rails application should be running on port 3000.&lt;/p&gt;\r\n\r\n&lt;p&gt;Access the Rails application by going to the below URL in a&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/browser&quot;&gt;web browser&lt;/a&gt;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://localhost:3000&quot;&gt;http://localhost:3000&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;OR&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://your.ip.add.ress:3000&quot;&gt;http://your.ip.add.ress:3000&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;You should get the following page.&lt;/p&gt;\r\n\r\n&lt;p&gt;Rails Application Running on Ubuntu 20.04&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;https://www.itzgeek.com/wp-content/uploads/2020/06/Rails-Application-Running-on-Ubuntu-20.04.png?ezimgfmt=rs:579x415/rscb2/ng:webp/ngcb2&quot; src=&quot;https://www.itzgeek.com/wp-content/uploads/2020/06/Rails-Application-Running-on-Ubuntu-20.04.png?ezimgfmt=rs:579x415/rscb2/ng:webp/ngcb2&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;h1&gt;&lt;strong&gt;Conclusion&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;p&gt;That&amp;rsquo;s All. I hope you have learned how to install&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/rails&quot;&gt;Ruby on Rails&lt;/a&gt;&amp;nbsp;on&amp;nbsp;&lt;a href=&quot;https://www.itzgeek.com/tag/ubuntu-20.04&quot;&gt;Ubuntu 20.04&lt;/a&gt;.&lt;/p&gt;', 'technology', 'download.png', 'active', '2022-12-11 14:26:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'gazi', 'gazi@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
