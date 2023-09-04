<?php
//to load classes automatically using the myAutoLocad function

/*Note to self: Name the classes the same why as we call the document files otherwise we get errors,
which is  due to autoload function not finding the document */
spl_autoload_register('myAutoLoad');

function myAutoLoad($classname){                /*$classname is a placeholder
                                                    which will get assigned when we call for a new instance of a class
                                                    when we want to create an object from a class */
                                                                                                    
    $path= 'classes/';                          //path to where we have all the class files
    $extention= '.class.php';                   //extention of files within 'classes/'
    $fileName= $path . $classname . $extention; //a full path to the class we will istantiate later

if(!file_exists($fileName)){                    //if statement to return flase in case we can't find $fileName which is the full path to the class

    return false;
}

include_once $path . $classname . $extention;  //including the class file we are linking to

}