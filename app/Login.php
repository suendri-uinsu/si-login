<?php

namespace app;

use inc\Config;

class Login extends Config
{

      public function login()
      {

            $i_username = $_POST['i_username'];
            $i_password = $_POST['i_password'];

            $sql = "SELECT * FROM tb_user WHERE user_name=:user_name AND user_password=PASSWORD(:user_password)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":user_name", $i_username);
            $stmt->bindParam(":user_password", $i_password);
            $stmt->execute();

            $row = $stmt->fetch();

            if ($stmt->rowCount() > 0) {

                  $_SESSION['user_name'] = $row['user_name'];
                  $_SESSION['login'] = true;
            }
      }

      public function logout()
      {
            session_destroy();
      }
}
