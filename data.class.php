<?php
class Data extends Dbh
 {

    public function showDirections () 
    {
        //creating an sql statement then storing it as a string in the variable $sql
        $sql= "SELECT * FROM directionvalues";

       //creating the varuable $stmt to point to the connection inside the Dbh class
        $result= $this->connect()->query($sql);//The method connect is used to connect to the database
                                             //Then the query method was used
        
        if($result->rowCount() > 0){
            return $result;
        }
        else{
            return false;
        }

    }

    public function setDirections ($direction, $distance) /*when we run this using the index page, we will fill the variables
                                                            $direction and $distance with data (read comments below)
                                                            */
    {
        $sql= "INSERT INTO directionvalues(direction, distance) VALUES (?,?)";  /*sql statment to insert data into table
                                                                                he input from the user is to be stored in
                                                                                The coloumns direction and distance. Both coloumn
                                                                                values will be filled later, so here, we left blanks
                                                                                '?' to be filled by the input later
                                                                                 */

         //creating the variable $stmt to point to the connection inside the Dbh class
        $stmt= $this->connect()->prepare($sql);//Here we are not querying but preparing the sql statment without the user input

        $stmt->execute([$direction, $distance]);  /*Execute is used to submit the data and fill the blanks.
                                                    Execute requires an array, which is why we included '[]' inside the '()'.
                                                    Note that the variables are chronological, so be sure to match the
                                                    order of the variables with the '?' or blanks in the sql statement 
                                                  */
    }
}  




/* 
    public function getDirections ($direction, $distance) 
        {
           
            $sql= "SELECT * FROM directionvalues WHERE direction = ? AND distance = ?";

            //creating the variable $stmt to point to the connection inside the Dbh class
            $stmt= $this->connect()->prepare($sql);//Here we are not querying but preparing the sql statment without the user input

            $stmt->execute([$direction, $distance]);  


            $arrowpath = $stmt->fetchAll();         

            foreach ($arrowpath as $arrowpath)   /* can be used to output whatever inside the website
                                                    in the index page refer to getDirections()  and wire the following to acces it
                                                    $testObj = new Test();
                                                    $testObj->setDirections("back",1);
                                                    *
                {
                    echo $arrowpath['direction']. '<br>';
                }
        }
    */ 