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

# Environment Setup
For develop the web app, these installations are needed-
1. Oracle Express Edition: oracle 11g XE is recommended
2. Instant Client: instantclient_12_1 is recommended
3. Xampp: 32 bit xampp is recommened
4. Text Editor or IDE: Sublime text or VS code etc.

# Connection To Oracle DB
1. Create a .php file (i.e. connect.php)
2. write this code snippet for connect: <code>$conn = oci_connect('user name', 'password', 'localhost/XE');</code>
    N.B: the username and pass is the database credentials, it means the user name and pass you have provided for 2nd phase login in Oracle express
3. Start apache server in xampp
4. run the file in browser:<code>localhost:8080/folder name/file name</code>

No framework is used here. This is a simple and small scalable project which can be implemented within short time. 
# Cite us
<code>
@inproceedings{reza2021developing,
  title={Developing a Machine Learning Based Support System for Mitigating the Suppression Against Women and Children},
  author={Reza, Md Rokonuzzaman and Mannan, Fabiha Mukarrama Binte and Barua, Dhrubo and Islam, Shafayetul and Khan, Nafiz Imtiaz and Mahmud, Sharifa Rania},
  booktitle={2021 5th International Conference on Electrical Engineering and Information \& Communication Technology (ICEEICT)},
  pages={1--6},
  year={2021},
  organization={IEEE}
}
</code>

