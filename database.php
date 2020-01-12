<?php
class database {
public function __construct(){
$this->connection=new mysqli("localhost","root","","login");
}
public function query($query){
 return $this->connection->query($query);
}
}

?>