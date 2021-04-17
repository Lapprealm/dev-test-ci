# dev-test-ci
## Description
This is a repository containing miscellaneous web development stuffs I test.  
And since I'm kinda lazy to cope with this I'ma leave it here for backups.

## Setup and Running
### PHP Setup
#### Linux
Arch Linux ([manual install here](https://irvanma.live/howto-php-archlinux.html)) :
```
yay -S xampp
```

Other Linux Distros :
```
wget https://www.apachefriends.org/xampp-files/8.0.3/xampp-linux-x64-8.0.3-0-installer.run
chmod +x xampp-linux-x64-8.0.3-0-installer.run
./xampp-linux-x64-8.0.3-0-installer.run
```

#### Windows :
1. Download the XAMPP Installer [here](https://www.apachefriends.org/download.html).
2. Run the executable.
3. Follow the installation steps.

#### MacOS :
1. Download the XAMPP Installer [here](https://www.apachefriends.org/xampp-files/8.0.3/xampp-osx-8.0.3-0-vm.dmg).
2. Run the executable.
3. Follow the installation steps.

### Repo Setup
```
git clone https://github.com/Lapprealm/dev-test-ci ci
cd ci
php -S 127.0.0.1:8080
```
Or just clone this repo and put it in htdocs and make sure to change its local base url config.

## DB Configuration
``` SQL
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE hmif;
USE hmif;

CREATE TABLE `data_aspirasi` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `srv_1` int(1) UNSIGNED NOT NULL,
  `srv_2` int(1) UNSIGNED NOT NULL,
  `srv_3` int(1) UNSIGNED NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kritik` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `data_aspirasi`
  ADD PRIMARY KEY (`id`);
```
