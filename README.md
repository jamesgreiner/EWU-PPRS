# EWU-PPRS
Management tool for the Eastern Washington University Palouse Prairie Restoration Site

*View the raw file on here for better formatting.

*********************************************************************************************************************************************************************************
First, please fork this repository and create your own repository and create a backup copy of it on your own device or somewhere else. There is no guarantee this repository will continue to be here and the former contributors are not responsible for continued work and/or questions about the project.
*********************************************************************************************************************************************************************************

Languages/frameworks/libraries required:
*Note you are responsible for following all directions on the documentation pages for proper installation, we ran our version of the project on Windows 10.
	PHP 5.0+: https://www.php.net/manual/en/install.php
	Composer 2.0.10+: https://getcomposer.org/download/
	Laravel 8.0+: https://laravel.com/docs/8.x/installation
	https://jetstream.laravel.com/2.x/installation.html
	XAMPP: https://www.apachefriends.org/index.html
	npm 6.14.11+: https://www.npmjs.com/get-npm
	node.js 14.16.0+: https://nodejs.org/en/download/
	tailwindcss: https://tailwindcss.com/docs/guides/laravel
	

To get the project running on localhost:
1.) Add the entrire project folder into the htdocs folder inside the xampp folder
	possible path: C:\\xampp\htdocs\EWU-PPRS
	
2.) Inside the XAMPP GUI, start Apache and MySQL. You can launch the MySQL admin tool as well to use a web interface to interact with the database.
*Note you won't see any table in the database if you launch MySQL admin right away, migrations must be run first.

3.) Inside the CLI of your choice change directory to your project folder and execute 'php artisan serve' to start the localhost server
*Note you must leave that command line window open and running so we'd suggest minimizing it and opening a new window

4.) In the new command line window, change directory to the project folder again and execute 'php artisan migrate --seed'. This will run all of the migrations to set up the tables in your database and the seed flag will add all the pre-seeded data into the table. You are free to change the data you want to have seeded or add more, just make sure you make all changes before executing the command.
*Note we strongly suggest learning about the commands that can be run in the artisan migrate list. There are commands that will make your life much easier when you have to rollback or change the tables in any way.


We suggest this YouTube series as a quick introduction/refresher for PHP and Laravel:
	The Net Ninja - Laravel 6.0 Tutorial For Beginners: https://www.youtube.com/playlist?list=PL4cUxeGkcC9hL6aCFKyagrT1RCfVN4w2Q
It does use Laravel 6.0, but the differences between the videos and are project are minimal.

Other composer composer commands that may be useful to know when creating and editing route for pages: 
	php artisan cache:clear
	php artisan route:cache
	php artisan config:cache
	
Please do solid research on the pieces mentioned in this document and study the code well before diving it. You will save yourself a lot of frustration early on.
Good luck!
