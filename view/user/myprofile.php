<div class="main">
    <ul id="content">
        <div id="pageContentCenter">

            <h2>Il mio Profilo:</h2>
            <?php
            $mysqli = database::getInstance()->databaseConnection();
            if (!isset($mysqli)) {
                $mysqli->close();
                return false;
            }

            $stmt = $mysqli->stmt_init();

            $username = $_SESSION['username'];

            $arrChartData[] = array();
            $sql = "SELECT email, name, surname, street, number, city, state FROM user WHERE username= '$username'";
            ;
            $res = $mysqli->query($sql) or trigger_error($mysqli->error . "[$sql]");
            while ($row = $res->fetch_row()) {
                $email = $row[0];
                $name = $row[1];
                $surname = $row[2];
                $street = $row[3];
                $number = $row[4];
                $city = $row[5];
                $state = $row[6];
            }
            
            $mysqli->close();
            ?>
            <div id="text">
                <p>Nome: <?php echo $name . " " . $surname ?> </p> 
                <p>Email: <?php echo $email; ?> </p>
                <p>Indirizzo: <?php echo $street . " " . $number . ", " . $city . ", " . $state; ?> </p>
            </div>
        </div>
    </ul>
</div>
