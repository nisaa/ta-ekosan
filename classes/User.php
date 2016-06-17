<?php
namespace App;

use PDO;
use Exception;

class User
{
    private $id;
    private $username;
    private $password;
    private $fullname;
    private $email;
    private $address;
    private $phone;
    private $picture;
    private $status;

    private $db;

    public function __construct($username, $password, $status, $email = "", $fullname = "")
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setFullname($fullname);
        $this->setEmail($email);
        $this->setStatus($status);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $options = [
            'cost' => 12,
            'salt' => 'Ng&]t`ePf#P9J+e,5Z?U3#?AvzH%;4F|WOXhu4nb+M@>-0[N,8onaZ0#Rf^Yh#zE',
        ];
        $this->password = password_hash($password, PASSWORD_DEFAULT, $options);
    }

    public function getFullname()
    {
        return $this->fullname;
    }

    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getDb()
    {
        if (is_null($this->db)) {
            $this->setDb();

            return $this->db;
        } else {
            return $this->db;
        }
    }

    private function setDb()
    {
        try {
            $connection = new Connection;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }

        $this->db = $connection->db;
    }

    public function login()
    {
        if($this->status == "pencari_kos") {
            $sql = "SELECT * FROM members";
        } else if ($this->status == "pemilik_kos") {
            $sql = "SELECT * FROM pemilik_kos";
        }

        $sql .= " WHERE username=:username AND password=:password";
        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(":username", $this->username, PDO::PARAM_STR);
        $statement->bindParam(":password", $this->password, PDO::PARAM_STR);

        $statement->execute();

        return ($statement->rowCount() > 0) ? $statement->fetch(PDO::FETCH_ASSOC) : null;
    }

    public function register()
    {
        $emailExist = $this->checkEmailExist();
        $usernameExist = $this->checkUsernameExist();

        if ($emailExist || $usernameExist) {
            if ($emailExist) {
                $_SESSION['error']['email'] = "E-mail telah digunakan!";
            }

            if ($usernameExist) {
                $_SESSION['error']['username'] = "Username telah digunakan!";
            }

            return false;
        }

        if($this->status == "pencari_kos") {
            $sql = "INSERT INTO members";
        } else if ($this->status == "pemilik_kos") {
            $sql = "INSERT INTO pemilik_kos";
        }
        $sql .= "(username, password, email, full_name) VALUES(:username, :password, :email, :fullname)";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(":username", $this->username, PDO::PARAM_STR);
        $statement->bindParam(":password", $this->password, PDO::PARAM_STR);
        $statement->bindParam(":email", $this->email, PDO::PARAM_STR);
        $statement->bindParam(":fullname", $this->fullname, PDO::PARAM_STR);

        $statement->execute();

        $this->setId($this->db->lastInsertId());

        return true;
    }

    private function checkEmailExist()
    {
        if($this->status == "pencari_kos") {
            $sql = "SELECT COUNT(user_id) AS exist FROM members";
        } else if ($this->status == "pemilik_kos") {
            $sql = "SELECT COUNT(user_id) AS exist FROM pemilik_kos";
        }
        $sql .= " WHERE email=:email";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(":email", $this->email, PDO::PARAM_STR);

        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['exist'];
    }

    private function checkUsernameExist()
    {
        if($this->status == "pencari_kos") {
            $sql = "SELECT COUNT(user_id) AS exist FROM members";
        } else if ($this->status == "pemilik_kos") {
            $sql = "SELECT COUNT(user_id) AS exist FROM pemilik_kos";
        }
        $sql .= " WHERE username=:username";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(":username", $this->username, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['exist'];
    }
}
