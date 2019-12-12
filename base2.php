<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=myresume";
$pdo=new PDO($dsn,'root','1114');

function all($table){
    global $pdo;
    $sql="select * from $table ";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function all2($table){
    global $pdo;
    $sql="select * from $table ";
    return $pdo->query($sql)->fetchAll();
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

function nums($table,...$arg){
    global $pdo;
  
    $sql="select count(*) from $table";
  
      if(!empty($arg[0])){
  
        foreach($arg[0] as $key => $value){
  
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
  
        }
  
        $sql=$sql . " where " . implode(" && ",$tmp);
  
      }    
  
      if(!empty($arg[1])){
  
        $sql=$sql . $arg[1];
  
      }
  
    //echo $sql;
  
    return $pdo->query($sql)->fetchColumn();  
  
  }
?>