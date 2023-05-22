<?php

static function carre($x){return x*x;}
static function cube($x){return x*x*x;}

//Function // 
static function equals($sha1,$sha2){
  if($sha1 == $sha2){
    return true;
  }
   return false;
}

static function count_sql_rows($field,$table){
 $conn = new Sql_Core_Laconis(); 
$sql = "Select  count($field) as nb from $table";
  $res1 = $conn->sql_select_one_data($sql);
  return $res1['nb'];
}


static function count_sql_colums($table){
 $conn = new Sql_Core_Laconis(); 
$sql = "Show columns from $table";
  $res1 = $conn->sql_select_one_data($sql);
  return $res1;
}

static function statGroup(){
    $sql = 
  
  
}


