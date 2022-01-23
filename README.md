# Automated-Testing
Here it contains all the required file for the automated testing; database connection, login page, welcome page and logout page.

Go ahead and clone the project in XAMPP folder (xampp>htdocs)

## Database Folder
- Start your XAMPP and open phpMyAdmin in your browser.
- Create a new database called **automated_testing**.
- Go to the databse and import the file **`automated_testing.sql`** you just clone.
- The database is now ready.

## DB Folder
- This is the database connection folder.
- The `connexion.php` file is a pdo connection with our database in phpMyAdmin.
- The file `pdo_test_connect.php` is to test the connection with our databse.
- You can go ahead and run the file to see if we can connect with the database.

## Execute Login Form
-  Open your browser and type in the web address bar: ***localhost/automated_Testing/login***.
-  This will automatically go to the index page of the folder, i.e. login form.
-  Test the fields now.

## Execute Automated Testing
-  The script for automated testing is contained in another repository set up as a submodule for this repository
-  After setting up this login form you can directly launch the **Automated_testing.py** file in the [PySelenium-Automated-Testing repository](https://github.com/jnyavo/PySelenium-Automated-Testing) assuming your settings matches with the default settings
-  Further information about the script usage and parameters is provided in the readme of the repository 
