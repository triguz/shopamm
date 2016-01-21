<?php
include_once './model/database.php';
include_once './model/userDB.php';
?>
<div class="main">
  <div id="featured_slide_">
        <ul id="content">
            <div id="pageContentCenter">
			<div class="clear"></div>
                        <h2>Il tuo profilo</h2> 
<?php 
$mysqli = database::getInstance()->databaseConnection();
        
        if (!isset($mysqli)) 
        {
            $mysqli->close();
            return false;
        }
        
        $stmt = $mysqli->stmt_init();
        $username= $_SESSION['username']; 
        $query = "SELECT email, name, surname, street, number, city, state FROM user WHERE username= '$username'";;
        
        $stmt->prepare($query);
        
        if (!$stmt){ 
            return false;
        }
        
        if(!$stmt->execute())
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }
        
        $result = array();
        $bind = $stmt->bind_result(
                  
                $result['email'],
                $result['name'],
                $result['username'],
                $result['street'],
                $result['number'],
                $result['city'],
                $result['state']);
    
       if (!$bind)
           return false;
       while($row = $result->fetch_row())
{
$email=$row[0];
$name=$row[1];
$surname=$row[2];
$street=$row[3];
$number=$row[4];
$city=$row[5];
$state=$row[6];
}
       
        if (!$stmt->fetch()) 
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }

        $stmt->close();
        $mysqli->close();
        
        return true;
?>
<p>Nome: <?php echo $name." ".$surname ?> </p>
<p>Email: <?php echo $email; ?></p>
<p>Indirizzo: <?php echo $street." ".$number.", ".$city.", ".$state; ?></p> 
                            


                    
            </div>
        </ul>
  </div>
</div>
