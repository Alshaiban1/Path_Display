# Description
This files contained show a webpage canvas that displays the path taken by clicking the directions buttons. The path is stored in a MySQL database using an apache server, and shown in a table in on a different webpage. Visual studios code was used for the code files, and xampp for the local apache server.
inside the project folder, files with he extention ".class.php" are saved in a folder named "classes", and files with the extention ".inc.php" are saved in a folder named "includes".

dbh.class.php connects to the database.
data.class.php is contains the methods responsible for inserting data into the database or showing the data inside the database.
class-autload.inc.php is an autoloader for classes.
index.php file contains the code for the canvas and buttons.
transfer.php if there is a post, the data will be sent to the database through the method inside data.class.php.
table.php takes the directions and distance saved inside the database and shows them inside a table on a webpage.
directionvalue.sql is the table of values.

# Empty Canvas and Tables
![Empty Table](https://github.com/Alshaiban1/Path_Display/assets/139134530/6c2deb0a-fe79-400d-9fb7-a07a3313f616)

# Path Taken
![Path Taken](https://github.com/Alshaiban1/Path_Display/assets/139134530/1b31f87b-d77a-4826-a703-17bc955db6ec)

# Path Saved
![Path Saved](https://github.com/Alshaiban1/Path_Display/assets/139134530/0098288c-41e0-43ae-a413-27ff0cdb2c15)
