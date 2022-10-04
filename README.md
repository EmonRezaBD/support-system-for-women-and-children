# Developing a Machine Learning Based Support System for Mitigating the Suppression Against Women and Children

[Reza et al.](https://scholar.google.com/citations?user=9Tcxq-0AAAAJ&hl=en) *2021 5th International Conference on Electrical Engineering and Information Communication Technology (ICEEICT)*

This codebase is created for our undergrad database sessional project purpose. However, codes are modified and new concepts are introduced for our submission to ICEEICT 2021.

The repository is organized as follow:
* <code>Tables</code>contains all the schemas needed for web application
* <code>HTML</code>contains all the HTML files required
* <code>CSS</code>contains all the CSS files used
* <code>JS</code>contains all the JS files
* <code>PHP</code>contains all the PHP files used for connection and CRUD operations
* <code>SQL</code>contains all queries for data manipulation etc.
* <code>img</code>contains all images used in web app
* <code>crimePediction</code>contains python code used for building <b>machine learning models</b> and data analysis
* <code>readme.md</code>:contains the description of this project

# Environment Setup:
For develop the web app, these 
1. Oracle Express Edition: 
oracle 11g XE is recommended.

2. Instant Client:
instantclient_12_1 is recommended.

3. Xampp:
32 bit xampp is recommened. 

4. Text Editor or IDE:
Sublime text or VS code etc.

# Connection:
1. Create a .php file
2. write this code: $conn = oci_connect('user name', 'password', 'localhost/XE');
- ![#f03c15](https://via.placeholder.com/15/f03c15/000000?text=+)  Note: the username and pass is the database credentials, it means the user name and pass you have provide for 2nd phase login in Oracle
3. Start apache server in xampp
4. run the file: localhost:8080/folder name/file name


# Work:
1. Create a frontend
2. Connect the frontend with the database, all tables should be created beforehand
# Look my codes for more information. 
    I use bootstrap for frontend.
    Raw php for backend.
    No framework is used(ex. React, Laravel) here. This is a simple and small scale project which can be implemented within short time. 
