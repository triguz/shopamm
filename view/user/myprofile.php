<?php
include_once './model/database.php'
?>

<?php 
$mysqli = database::getInstance()->databaseConnection();
if (!isset($mysqli)) 
        {
            $mysqli->close();
            return false;
        }

        $stmt = $mysqli->stmt_init();
        
        $username= $_SESSION['username']; 
        
        $arrChartData[] = array();
$sql = "SELECT * FROM user WHERE username= '$username'";;
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
}
$name=$arrChartData[1];
/*$name=$arrChartData[4];
$surname=$arrChartData[5];
$email=$arrChartData[1];
$street=$arrChartData[6];
$number=$arrChartData[7];
$city=$arrChartData[8];
$state=$arrChartData[10];*/
        $mysqli->close();
        
        return true;
?>
<div class="main">
  <div id="featured_slide_">
        <ul id="content">
            <div id="pageContentCenter">
			<div class="clear"></div>
                        <h2>Il tuo profilo</h2> 
<ul id="featured_slide_Content">
<p>Nome: <?php echo $name." ".$surname ?> </p>
<p>Email: <?php echo $email; ?></p>
<p>Indirizzo: <?php echo $street." ".$number.", ".$city.", ".$state; ?></p> 
</ul>                           


                    
            </div>
        </ul>
  </div>
</div>
