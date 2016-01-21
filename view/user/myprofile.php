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
$username= $_SESSION['username'];
$password= $_SESSION['password'];
$exist = userDB::instance()->existUser($_POST['username'], $_POST['password']);
if($exist)
            {
    while($row= $result->fetch_row())
{
$email=$row[0];
$name=$row[1];
$surname=$row[2];
$street=$row[3];
$number=$row[4];
$city=$row[5];
$state=$row[6];
}
}
            
            return false;
?>
<p>Nome: <?php echo $name." ".$surname ?> </p>
<p>Email: <?php echo $email; ?></p>
<p>Indirizzo: <?php echo $street." ".$number.", ".$city.", ".$state; ?></p> 
                            


                    
            </div>
        </ul>
  </div>
</div>
