# EventBuzz
# Event Recommender & Notification System

City Based Event Notification System

Before running the project on your system you need to do following things:
Copy whole folder in your "/var/www/html/" folder.
Create a file .ldapsecret which contains password of emailing service (e.g. your gmail account).
In all *.sh files edit the location of .ldapsecret file.
Edit the mailing address in *.sh files.

Things to install:
Run these commands from terminal:
sudo apt-get install apache2 #apche web server
sudo apt-get install mysql-server #sql
mysql_secure_installation
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql #php
sudo apt-get install php-cli
Write url from your browser "localhost/filename/index.php" and enjoy.


