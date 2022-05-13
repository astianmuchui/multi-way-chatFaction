<?php

   class CIPHER_OBJ{
      
      protected $method = "AES-128-CTR";
      protected $iv_length = openssl_cipher_iv_length($method);
      protected $options = 0;
      protected $enc_iv = '1234567891011121';
      protected $key = 29366464;

      protected function ENCRYPT($password,$username){
         $this->encrypted_raw_name = openssl_encrypt($username,$this->method,$this->key,$this->options,$this->enc_iv);
         return $this->final_entry_data_name = bin2hex($this->encrypted_raw_name);

         // Encrypt password
         return $this->crypted_password = bin2hex(password_hash($password,PASSWORD_BCRYPT));
         


      }
   }