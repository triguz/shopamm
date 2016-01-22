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
        $query = "SELECT * FROM user WHERE username= '$username'";;
        
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
                $result['ID'],  
                $result['email'],
                $result['username'],
                $result['password'],
                $result['name'],
                $result['surname'],
                $result['street'],
                $result['number'],
                $result['city'],
                $result['postalCode'],
                $result['state']);
    
       if (!$bind)
           return false;
       
        if (!$stmt->fetch()) 
        {
            $stmt->close();
            $mysqli->close();
            return false;
        }
        

while($row= $result->fetch_row())
{
$id=$row[0];
$email=$row[1];
$username=$row[2];
$password=$row[3];
$name=$row[4];
$surname=$row[5];
$street=$row[6];
$number=$row[7];
$city=$row[8];
$postalcode=$row[9];
$state=$row[10];
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
