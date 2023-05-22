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

static function count_sql_rows(){
 $conn = new Sql_Core_Laconis(); 
$sql = "Select  count($field) as nb from $table";
  
  $res1 = $conn->sql_select_one_data($sql);
  
}

