<?php
    define("MYSQL_SERVER", 'localhost');
    define("MYSQL_USER", 'root');
    define("MYSQL_PASSWORD", '');
    define("MYSQL_DB", 'informations');

    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Connection failed");
    if($_GET["news"]){
        $result = get_news($link, $_GET["news"]);
        echo $result;
    }
    if($_GET["publications"]){
        $result = get_publications($link, $_GET["publications"]);
        echo $result;
    }
    function get_news($link, $id){
        $query = htmlentities("SELECT * FROM news WHERE id = ?");
        $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($id));
        $arr = $stmt->fetchAll();
        $new = array();
        $n = 0;
        for($i = 0; $i < count($arr[0]) - 5; $i++){
            $key = array_search($arr[0][$i], $arr[0]);
            if(is_numeric($key));
            else {
                $new[$key] = $arr[0][$i];
                $n++;
            }
        }
        //print_r($new);
        return json_encode($new);
        //print_r($arr[0][1]);
            /*$result = mysqli_query($link, $query);
            if(!$result)
                die(mysqli_error($link));
            $n = mysqli_num_rows($result);
            $arr = array();
            for($i = 0; $i < $n; $i++){
                $row = mysqli_fetch_assoc($result);
                $arr[] = $row;
            }
        print_r($arr[0]);
            return json_encode($arr[0]);*/
    }
    function get_publications($link, $id){
        $query = htmlentities("SELECT * FROM publications WHERE id = ?");
        $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($id));
        $arr = $stmt->fetchAll();
        $new = array();
        $n = 0;
        for($i = 0; $i < count($arr[0]) - 6; $i++){
            $key = array_search($arr[0][$i], $arr[0]);
            if(is_numeric($key));
            else {
                $new[$key] = $arr[0][$i];
                $n++;
            }
        }
        //print_r($new);
        return json_encode($new);
        /*$query = "SELECT * FROM publications WHERE id = {$id}";
        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        $n = mysqli_num_rows($result);
        $arr = array();
        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $arr[] = $row;
        }
        return json_encode($arr[0]);*/
    }
?>