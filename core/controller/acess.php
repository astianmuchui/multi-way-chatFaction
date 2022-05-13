<?php

   class sql_server {
      protected $username = 'root';
      protected $host = "localhost";
      protected $pwd = "";
      protected  $dbname;
      protected $connection;
      protected $result;
      protected $query;
      protected $table;
      protected $data;
      protected $number;
      protected $id;
      protected $rows_count;
      public function establish_connection($dbname){
         return $this->connection = mysqli_connect($this->host,$this->username,$this->pwd,$this->dbname);
      }
      protected function close_connection(){
         return mysqli_close(sql_server::establish_connection($this->dbname));
      }
      protected function query($dbname,$query){
         return $this->result = mysqli_query(self::establish_connection($this->dbname),$this->query);
      
      }
      protected function fetch_all_assoc($dbname,$table){
         $this->query = "SELECT * FROM `$this->table` ORDER BY id DESC";
         return $this->data = mysqli_fetch_all(self::query($this->dbname,$this->query),MYSQLI_ASSOC);
         return mysqli_free_result(self::query($this->dbname,$this->query));
         self::close_connection();
      }
      protected function fetch_newest($dbname,$table,$number){
         $this->query = "SELECT * FROM `$this->table` ORDER BY id DESC LIMIT $this->number";
         return $this->data =  mysqli_fetch_all(self::query($this->dbname,$this->query));
         mysqli_free_result(self::query($this->dbname,"SELECT * FROM `$this->table` ORDER BY id DESC LIMIT $this->number"));
         self::close_connection();
      }
      protected function fetch_oldest($dbname,$table,$number){
         $this->query = "SELECT * FROM `$this->table` ORDER BY id ASC LIMIT $this->number";
         return $this->data =  mysqli_fetch_all(self::query($this->dbname,$this->query));
         mysqli_free_result(self::query($this->dbname,"SELECT * FROM `$this->table` ORDER BY id ASC LIMIT $this->number"));
         self::close_connection();
      }
      protected function get_count($dbname,$table){
         self::establish_connection($dbname);
         $this->query = "SELECT * FROM $this->table";
         $salt = self::query($dbname,$this->query);
         return $this->rows_count = count(mysqli_fetch_all($salt,MYSQLI_ASSOC));
         mysqli_free_result($salt);
         self::close_connection();
      }
      protected function fetch_single($dbname,$table,$id){
         $this->query = "";
         return $this->data = mysqli_fetch_assoc(self::query($this->dbname,$this->query),MYSQLI_ASSOC);
         mysqli_free_result(self::query($this->dbname,"SELECT * FROM $this->table WHERE id = $this->id"));
         self::close_connection();
      }
   }
   ?>