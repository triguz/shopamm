<?php

include_once './model/user.php';
include_once './model/database.php';

class userDB {

    private static $singleton;

    private function __constructor() {
        
    }

    public static function instance() {
        if (!isset(self::$singleton))
            self::$singleton = new userDB();

        return self::$singleton;
    }

    public function existUser($username, $password) {
        $mysqli = database::getInstance()->databaseConnection();

        if (!isset($mysqli)) {
            $mysqli->close();
            return false;
        }

        $stmt = $mysqli->stmt_init();

        $query = "SELECT * FROM user WHERE username=\"$username\" AND password=\"$password\" ;";

        $stmt->prepare($query);

        if (!$stmt) {
            return false;
        }

        if (!$stmt->execute()) {
            $stmt->close();
            $mysqli->close();
            return false;
        }

        $result = array();
        $bind = $stmt->bind_result(
                $result['ID'], $result['email'], $result['username'], $result['password'], $result['name'], $result['surname'], $result['street'], $result['number'], $result['city'], $result['postalCode'], $result['state']);

        if (!$bind)
            return false;

        if (!$stmt->fetch()) {
            $stmt->close();
            $mysqli->close();
            return false;
        }

        $stmt->close();
        $mysqli->close();

        return true;
    }

    public function insert($user) {
        $mysqli = database::getInstance()->databaseConnection();
        if (!isset($mysqli)) {
            $mysqli->close();
            return false;
        }

        $stmt = $mysqli->stmt_init();

        $query = " INSERT INTO user
        (email, username, password, name, surname, street, number, city, postalCode, state)
        VALUES
        ('" . $user->getEmail() . "' , '" . $user->getUsername() . "', '" . $user->getPassword() . "',
                    '" . $user->getName() . "', '" . $user->getSurname() . "', '" . $user->getStreet() . "', 
                    '" . $user->getNumber() . "', '" . $user->getCity() . "', '" . $user->getPostalCode() . "',   
                    '" . $user->getState() . "')";

        echo($user->getStreet());
        $stmt->prepare($query);

        if (!$stmt)
            return false;

        if (!$stmt->execute()) {
            $stmt->close();
            $mysqli->close();
            return false;
        }

        $stmt->close();
        $mysqli->close();

        return true;
    }

}

?>
