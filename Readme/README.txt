1. The E-commerce Shop Online website has been been hosted on the following url http://shirtsonline.herobo.com/ 

2. Incase the application has to be run from a local machine following are the steps from 3 to . 

3.Select all the contents in the zip file and place them under the root path may be web_project. If your are using MAPP or XAMPP. By default
after the installations a htdocs directory is created. So all the contents of the zipped submission can be placed there.

	Following is the current config.php settings.

	define("BASE_URL","/");
	define("ROOT_PATH", "/home/<a9738336>/public_html/");
	// define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");-->

	define("DB_HOST","mysql16.000webhost.com");
	define("DB_NAME","a9738336_mystore");
	define("DB_USER","a9738336_root");
	define("DB_PASS","root@123");
 	// not required now default port: 3306

4. The Following changes in the config.php needs to be made.
	
	
	define("BASE_URL","/");
	define("ROOT_PATH", "/network_drive/web_folder/“); //or define("ROOT_PATH", “/htdocs/“); accordingly.
	define("DB_HOST","the host used for testing");
	define("DB_NAME","mystore_db");
	define("DB_USER","root");  						//default userid
	define("DB_PASS","root"); 						//default password
	define port number if required. I did not need it.

5. When you copy the contents of the zip file submission to your local machine, make sure the .htaccess file is copied.
this is a hidden file and at times get missed while copying. 

6. Once the above mentioned are configured in config.php, create a database in MySQL called 'mystore_db' in MySQlpHpadmin. Next 
copy the contents in the mysql data dump named as mystore_db.sql available in the zipped submission and execute in your MySQlpHpadmin. 
Here the sql might error out at line line 14 for the word "utf8mb4". It can be deleted and reexecuted.
The database tables and the data is ready.

7. In the database.php the current settings look as shown below.

$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,DB_USER,DB_PASS);

Add the DB_PORT if required and if defined in the config.php

8. This completes the process of the setup. 
9. When you access localhost you should be able to see the home page of the website.




