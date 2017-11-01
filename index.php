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
        $query = "SELECT * FROM news WHERE id = {$id}";
        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        $n = mysqli_num_rows($result);
        $arr = array();
        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $arr[] = $row;
        }
        return json_encode($arr[0]);
    }
    function get_publications($link, $id){
        $query = "SELECT * FROM publications WHERE id = {$id}";
        $result = mysqli_query($link, $query);
        if(!$result)
            die(mysqli_error($link));
        $n = mysqli_num_rows($result);
        $arr = array();
        for($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $arr[] = $row;
        }
        return json_encode($arr[0]);
    }
?>