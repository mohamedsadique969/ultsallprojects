<html>
   <body>
      
      <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "ali" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "ajay" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for ali in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for ajay in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
      ?>
   
   </body>
</html>
