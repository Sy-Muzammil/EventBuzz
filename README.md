# EventRecommendation

## Location Based Event Recommendation System

### Before running the project on your system you need to do following things:
1. Copy whole folder in your "/var/www/html/" folder.
2. Create a file .ldapsecret which contains password of emailing service (e.g. your gmail account).
3. In all *.sh files edit the location of .ldapsecret file.
4. Edit the mailing address in *.sh files.
   

## Things to install:

### Run these commands from terminal:
1. sudo apt-get install apache2       #apche web server
2. sudo apt-get install mysql-server  #sql
3. mysql_secure_installation
4. sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql #php
5. sudo apt-get install php-cli

Write url from your browser "localhost/filename/index.php" and enjoy.


## Updates done from previous version (Prev Version: See in repository EventRecommendation)
Version 1.0 to Version 2.0( Changes done in Version 2.0 as told by sir):

>>  In version 2.0 User will get only one notification via mail containing information of all events added on that day as per the user interests and user location at the end of the day (the interval period can be edited).

>> In version 2.0 Update Password is added to the edit profile section.

>> In version 2.0 Forget Password is also added at the login page, where user will get password via email.

>> In PPT Class diagram has been updated to reflect notification class

>> Database schema has been updated to accomodate Notifications, and other unforeseen minute erros in the diagram

>> In version 2.0 we have populated more users in DB and tested our system for errors
