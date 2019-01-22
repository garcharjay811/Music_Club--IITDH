# Music_Club--IITDH And Snake Game
Raphsody - IIT Dharwad Music Club Website

I.	Contents
II.	Implementation Method
III.Explaination
IV.	Further Improvements
V.	Credits


I.	Contents
	1. Homepage
	2. Log In
	3. Sign Up Page
	4. Features
	5. Explore (Gallery)

II.	Implementation Method
	This project is made by using HTML, PHP, Javascript, CSS. All the pages are responsive, this is done by using BOOTSTRAP 4.
	This is the most important section, so please go through each and every line carefully as they also contain the instructions required for setting up the website and hosting it on your localhost.

	A. The first and most basic requirement is that apache and mysql is installed in the localhost. One can download it using their websites or by entering the following command on your terminal to install.
		=> sudo apt-get update     // This command is for installing any update if required
		=> sudo apt-get install apache2
		=> sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql
	
	B. After installing all the above requirements one needs to import the sql databasq file named as 'music_club.sql'
		=> To import this database in use the following command in the terminal
			--> mysql -u root -p "" DATABASE_NAME_AS_REQUIRED < music_club.sql		//	Enter the password if any in place of "" after the -p
		=> After importing the database check it using basic sql commands in like: SHOW DATABASES;  or  SHOW TABLES;  and verify the database tables and modify as required

NOTE: Please make sure that database is imported or else the website won't work as expected.

III. Explaination
	This completes our installation part. Now comes how the code works.
	A. Homepage
		Homepage is made using HTML and CSS. This page is responsive. By responsive, it means that the page adjusts itself accroding to the size of the window of the browser. This is implemented using BOOTSTRAP 4. Most of the pages contain the link to the social media handles in footer.
	B. Log In page and Sign Up
		Log in page is one of the most important and hence required explaination, so sit tight :)
			a.	The login page layout is made using HTML, CSS and the using PHP it is made to communicate with the server. This page is also responsive.

			b.	Next comes the backend part. The login page uses the database to check the username and password.This required several php files:
				1. db_connect.php and psl-config.php This files connects the page to mysql database to make any changes in the database.
				2. functions.php This is one of the most important for making this page secure. This file containes all the functions:
					--->login() : This function checks that the username and password entered are correct or not. To make the page secure we have used 'sha512' hash function. 
						Case 1:	The hashing is done since if the website is being tracked by the information going in and out of it, one cannot make out the password since it is hashed.
						
						Case 2: To avoid the collisions due to same passwords we have used 'salts'. Salt is random string which makes the hashing more random and hence decreasing the collsions. Here the salt is not changed, so it does not have any effect rather here it's just increasing the length of password. One can make it random so as to avoid. This is included to have an idea in the mind and hence update it.

					--->check_brute(): There is possibility of Brute Force method to track the username and password. To avoid that we have using this check_brute() function. It checks the failed login attempts of a user. If user enters wrong passwords for more than 5 times in 2 Hrs period. He is blocked and hence can not open it even if the user enters the correct password untill 2 Hrs. This time gap can be increased and make it more difficult for hacker.

					--->login_check(): This function checks if the user is already logged in or not. So if someone tries to open the website directly from the url like a protected_page.php, he/she cannot access that page without logging in. One can test this by typing localhost/protected_page.php in url.

					--->esc_url(): This function avoids any javascript entered in place of username or password or any other field.
				3.logout.php: This file lets user securely log out of the page.
			c. Also while signing up the user is asked to enter the password which contains atleast one uppercase, one lower case, and one special character and one number.
	C.	Some priorities are "FEATURES" and verification preocesses are kept in order to avoid any glitches. 
		There are three parts. : New User, Current User and Admin.
			New User: As soon as someone signs up using the sign up page, request is send to the admin for new user sign up and added to the current member list only if the admin allows.New user cannot log in untill the admin has added him/her to the current member list.
			Current users: can upload the images. Also as soon as a current member uploads an image it is stored in the database and admin decides what images to put on the website.
			Admin: has the most of the part under control. Admin can add/remove a member. Admin can control the images uploaded on the website, can add or remove them from the page.
	D. Explore: This page shows the images allowed by the admin.

IV.	Futher Improvements:
	The folder also contains a file named web_scrapper.py. IT WORKS!, but is not implemented in the website so could be done as an improvement :)
	It collects information about the current music realted information going on in Hubli-Dharwad from the Times Of India website. Checkout the file named webscrapper.txt to see it's output.
	Improvements can be done in making login page more secure. Some further features can be like uploading videos to the site.

V. Credits:
	This site was a course project of Software Systems Lab, Made By Jay Garchar and Ojas Raundale under the guidance of Prof. Ramchandra Phawde, Indian Institute of Technology, Dharwad.

For testing:
	Username of admin: JayG
	Password: Jay@1234
