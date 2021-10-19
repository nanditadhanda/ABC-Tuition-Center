XAMPP
Make sure you have XAMPP installed on your system:
https://www.apachefriends.org/index.html


Database Configuration:

	1. Open your phpMyAdmin
	2. Click on "New" to create a new database
	3. In the "Database Name" input box type : abctuition
	4. Make sure the collation selected is : latin1_swidish_ci
	5. Click "Create" button

	6. The database will be created
	7. Click on the database name to open it
	8. Select the "Import" tab
	9. Click on "choose file" button
	10. select "abctuition.sql" from the "database" folder
	11. Click on the open button
	12. Click on the "go" button

	13. The tables of the database will be successfully imported

------------------------------------------------------------

Running the system:

	1.Please ensure you have a working internet connection to run the 	ABC_Tution_centre web application

	2. Save the ABC_Tution_Centre folder in your htdocs folder
	3. Import the abctuition database into your phpMyAdmin with the above 	instructions
	4. Open the http://localhost/ABC_Tution_Centre/ URL in your web 	browser
	5. Interact with the UI using the demo video as reference

---------------------------------------------------------------

Please note: All passwords in the database are encrypted using md5 encryption for user's data protection. Admin account cannot be created. It is pre-programmed in the database.

----------------------------------------------------------------
To sign into staff account:

	URL: http://localhost/ABC_Tution_Centre/staff-signin.php

	Admin:

	Username - ADM0001
	Password - admin


	Lecturer:

	Username - LEC0001
	Password - 123

	* New lecturer accounts can be created from admin account