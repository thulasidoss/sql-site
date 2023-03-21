#!/bin/bash
cd ..
sudo apt update
sudo apt install php php-xml php-fpm libapache2-mod-php php-mysql php-gd php-imap php-curl php-mbstring mariadb-server -y
sudo service apache2 start
sudo service mysql start

cat << createdatabase
========================================================================================================================================================================================
<>
<>
<>
<>
Please type a commands shown steps:

step 1 :create database new; (to create database . new is database name)

step 2 :exit; (to exit from mysql)
<>
<>
<>
<>
========================================================================================================================================================================================
createdatabase
sudo mysql
cat << run
========================================================================================================================================================================================
<>
<>
<>
<>
step 1 : Setup a Password and Remember

step 2 : Enter "Yes" to All

step 3 : now snmae localhost to 127.0.0.1 in connect.php 

step 4 : now Change the password on connect.php which is you previsely setup password
<>
<>
<>
<>
========================================================================================================================================================================================
run
sudo mysql_secure_installation
cd sql-site/vulnerablesite
sudo mysql -u root -p new < new.sql
cd ..
sudo cp -R vulnerablesite /var/www/html/vulnerablesite
cd /var/www/html
sudo chmod 777 vulnerablesite
cd vulnerablesite
sudo nano connect.php
echo "Successfully Completed"
echo "Copy And Paste the URL: ( http://127.0.0.1/vulnerablesite  )  in browser and open account.html" 
echo "start sql injection (true' or '1=1' #) copy and past this cheat in name field"
echo "to prevent vulnerable please check the pdf file which is attached with repository"
