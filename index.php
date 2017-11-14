<?php
    define("MYSQL_SERVER", 'localhost');
    define("MYSQL_USER", 'root');
    define("MYSQL_PASSWORD", '');
    define("MYSQL_DB", 'informations');

    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Connection failed");
    if($_GET["news"]){
        $result = get_news($link, $_GET["news"]/*"last three"*/);//тут меняешь параметр, в зависимости от того, что тебе нужно: id, "last three", "all"
        echo $result;
    }
    if($_GET["publications"]){
        $result = get_publications($link, /*$_GET["publications"]*/"all");//тут то же самое
        echo $result;
    }
    function get_news($link, $kind){
        if(is_numeric($kind)){
            $query = htmlentities("SELECT * FROM news WHERE id = ?");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute(array($kind));
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
            return json_encode($new);
        }
        else if($kind == "last three"){
            $query = htmlentities("SELECT * FROM news LIMIT 3");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $arr = $stmt->fetchAll();
            $new = array();
            $row = 0;
            for($i = 0; $i < count($arr); $i++){
                for($j = 0; $j < count($arr[$i]) - 6; $j++){
                    $key = array_search($arr[$i][$j], $arr[$i]);
                    if(is_numeric($key));
                        else {
                        $new[$row][$key] = $arr[$i][$j];
                        }  
                }
                $row++;
            }
            return json_encode($new);
        }
        else if($kind == "all"){
            $query = htmlentities("SELECT * FROM news");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $arr = $stmt->fetchAll();
            $new = array();
            $row = 0;
            for($i = 0; $i < count($arr); $i++){
                for($j = 0; $j < count($arr[$i]) - 6; $j++){
                    $key = array_search($arr[$i][$j], $arr[$i]);
                    if(is_numeric($key));
                        else {
                        $new[$row][$key] = $arr[$i][$j];
                        }  
                }
                $row++;
            }
            return json_encode($new);
        }
    }
    function get_publications($link, $kind){
        if(is_numeric($kind)){
            $query = htmlentities("SELECT * FROM publications WHERE id = ?");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute(array($kind));
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
            return json_encode($new);
        }
        else if($kind == "last three"){
            $query = htmlentities("SELECT * FROM publications LIMIT 3");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $arr = $stmt->fetchAll();
            $new = array();
            $row = 0;
            for($i = 0; $i < count($arr); $i++){
                for($j = 0; $j < count($arr[$i]) - 6; $j++){
                    $key = array_search($arr[$i][$j], $arr[$i]);
                    if(is_numeric($key));
                        else {
                        $new[$row][$key] = $arr[$i][$j];
                        }  
                }
                $row++;
            }
            return json_encode($new);
        }
        else if($kind == "all"){
            $query = htmlentities("SELECT * FROM publications");
            $pdo = new PDO('mysql:host=localhost;dbname=informations','root','');
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $arr = $stmt->fetchAll();
            $new = array();
            $row = 0;
            for($i = 0; $i < count($arr); $i++){
                for($j = 0; $j < count($arr[$i]) - 6; $j++){
                    $key = array_search($arr[$i][$j], $arr[$i]);
                    if(is_numeric($key));
                        else {
                        $new[$row][$key] = $arr[$i][$j];
                        }  
                }
                $row++;
            }
            return json_encode($new);
        }
    }
?>