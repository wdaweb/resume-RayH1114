<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo=new PDO($dsn,'root','1114');
session_start();


function all($table){
    global $pdo;
    $sql="select * from $table ";
    return $pdo->query($sql)->fetchAll();
}
function all3($table){
    global $pdo;
    $sql="select * from $table ";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM $table WHERE id='$id'";
    return $pdo->query($sql)->fetch();
}


function insert($table,$data){
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";
    $value="'" . implode("','",$data) . "'";
    $sql="insert into $table($row) values($value)";
    echo $sql;
    return $pdo->exec($sql);
}



?>