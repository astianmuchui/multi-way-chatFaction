<?php
session_start();
class SERVER{
   private $host = 'localhost';
   protected $db_name = 'chatfaction';
   private $username = 'root';
   private $password = '';
   protected $conn;
   public function establish(){
       $this->conn = null;
       try{
           $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,$this->username,$this->password);
           $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
       }catch(PDOException $e){
           echo $e->getMessage();
       }
       return $this->conn;
   }
}
   class ENGINE extends SERVER{
      protected $method = "AES-128-CTR";
      protected $options = 0;
      protected $enc_iv = '1234567891011121';
      protected $key = 29366464;
      protected $password;
      protected $username;
      public function connect(){
         return SERVER::establish();
      } 

      public function signup(){


         if(isset($_POST['signup'])){
            //Encrypt
           $this->password = $_POST['pwd'];
           $this->username = $_POST['unm'];
           $this->iv_length = openssl_cipher_iv_length($this->method);
           $this->encrypted_raw_name = openssl_encrypt($this->username,$this->method,$this->key,$this->options,$this->enc_iv);
           $this->final_entry_data_name = bin2hex($this->encrypted_raw_name);
           // Encrypt password
           $this->encrypted_password = bin2hex(password_hash($this->password,PASSWORD_BCRYPT));
            SERVER::establish();
            $stmt = $this->conn->prepare("INSERT INTO users (`unm`,`pwd`)  VALUES(:unm , :pwd)");
            $stmt->execute(['unm'=>$this->final_entry_data_name, 'pwd'=> $this->encrypted_password]);     

         }
      }
      public function login(){
         global $feedback;
           if(isset($_POST['login'])){
               $this->unm  = $_POST['unm'];
               $this->pwd = $_POST['pwd'];

               //Encrypt username then run a database search
               $this->sr_str = bin2hex(openssl_encrypt($this->unm,$this->method,$this->key,$this->options,$this->enc_iv));
               self::establish();
               try{
               $stmt = $this->conn->prepare("SELECT * FROM users WHERE  `unm`= :unm");
               if($stmt->execute(['unm'=>$this->sr_str])){
                 $row = $stmt->fetch();
                 //Remove a layer of encryption and run a reverse hash
                 $corr_pwd = hex2bin($row->pwd);
                 if(password_verify($corr_pwd,$this->pwd) === true){
                     $_SESSION['logged_in'] = "Acess granted";
                     $_SESSION['user_id'] = $row->id;
                     header("Location: ./profile.php");
                 }else{
                    $feedback = "Wrong password";
                 }
               }else{
                  $feedback = "User does not exist";
               }
            }catch(PDOException $th){
               throw $th->getMessage();
            }
           }
      }

      
   }
