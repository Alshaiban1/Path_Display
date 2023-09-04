<?php
//Connection to database class

class Dbh { //Dbh has a capital first letter just as a naming convention for all classes.

    //Adding private properties which makes Dbh they only class with access to the information in the properties
    private $host = "localhost";        //Database server host name
    private $user = "root";             //Database username
    private $pswd = "";                 //Database password
    private $dbName= "directionsdb";    //Database name

    protected function connect() { //Protected method which will contain our connection to the database

//Creating the $dsn variable to store the data source name
$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;//data source name, written as such since we are using a mysql database type 
                                                                //'$this->' points to the host property

$pdo = new PDO($dsn, $this->user,$this->pswd);   //$pdo variable stores the php data object


$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
/*Setiing a default attribute for how we want pull out data from the database
we need to create a certain "parameter" inside our connection to the database
everytime we need to interact with it and pull out data,
this way we dont have to define it everytime we interact with the database
*/
//Note that this is defined to fetch associative arrays and not objects, since we will mostly deal with arrays in the database

        return $pdo;

                    /*Now anytime we need to use this class, we create a new class, then extend it to the Dbh class
                      Then we refer to the connect method, and that way will the connection returned  */
 

        

   
    }                                                   

}
