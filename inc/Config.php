<?php

namespace inc;

use PDO;

class Config
{

      private string $db_host = "localhost";
      private int $db_port = 3306;
      private string $db_name = "dblogin";
      private string $db_user = "root";
      private string $db_pass = "";

      protected object $db;

      public function __construct()
      {
            session_start();

            $this->db = new PDO("mysql:host=" . $this->db_host . ";port=" . $this->db_port . ";dbname=" . $this->db_name . "", $this->db_user, $this->db_pass);
      }
}
