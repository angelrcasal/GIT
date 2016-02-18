<?php

      //getting the message from address
      //if there is ?name= .. then $_GET["name"]
      $my_message = $_GET["message"];
      $to = $_GET["to"];
      $from = $_GET["from"];

      echo "My message is ".$my_message." and is to".$to;
    
?>
    


    
<form method="get">  
    <label for ="from"> from:* </label><br>
    <input type ="text" name="from"><br><br>
    
    <label for ="to"> to:* </label><br>
    <input type ="text" name="to"><br><br>
        
    <label for ="message"> message:* </label><br>
    <input type ="text" name="message"><br><br>
        
    <this is the save button-->
    <input type="submit" value="save to DB"
        
    </form>    