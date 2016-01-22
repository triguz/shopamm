<div class="main">
    <ul id="content">
        <div id="pageContentCenter">
            
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
        
        $arrChartData[] = array();
$sql = "SELECT * FROM user WHERE username= '$username'";;
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
}
 while($col= $row->fetch_row())
{
$email=$col[0];
$name=$col[1];
$surname=$col[2];
$street=$col[3];
$number=$col[4];
$city=$col[5];
$state=$col[6];
}
/*$name=$arrChartData[0];
$surname=$arrChartData[1];
$name=$arrChartData[4];
$surname=$arrChartData[5];
$email=$arrChartData[1];
$street=$arrChartData[6];
$number=$arrChartData[7];
$city=$arrChartData[8];
$state=$arrChartData[10];*/
        $mysqli->close();
?>
                <div id="text">
                    <p>Nome: <?php print_r($name, FALSE)?> </p>
                    <p>Nome: <?php print_r($surname, FALSE)?> </p>
<p>Email: <?php echo $email; ?> </p>
<p>Indirizzo: <?php echo $street." ".$number.", ".$city.", ".$state; ?> </p>
            </div>
        </div>
    </ul>
</div>
