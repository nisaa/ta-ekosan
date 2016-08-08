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

    private $title;
    private $question;

    private $db;

    public function __construct($username = "", $password = "", $status = "", $fullname = "", $email = "", $address = "", $phone = "", $picture = "")
    {
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setFullname($fullname);
        $this->setEmail($email);
        $this->setAddress($address);
        $this->setPhone($phone);
        $this->setPicture($picture);
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

        $loggedInUser = $this->login();

        $this->setId($this->db->lastInsertId());

        return $loggedInUser;
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

    public function update($id, $data)
    {
        if ($data['status'] == "pencari_kos") {
            $sql = "UPDATE members SET gambar = :picture, full_name = :fullname, alamat = :address, email = :email, telp = :phone" ;
        } else if ($data['status'] == "pemilik_kos") {
            $sql = "UPDATE pemilik_kos SET gambar = :picture, full_name = :fullname, alamat = :address, email = :email, telp = :phone";
        }

        if ($data['password'] != '') {
            $sql .= ", password = :password";
        }

        $sql .= " WHERE user_id = :id";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->bindParam(":picture", $data['picture'], PDO::PARAM_STR);
        $statement->bindParam(":fullname", $data['fullname'], PDO::PARAM_STR);
        if ($data['password'] != '') {
            $statement->bindParam(":password", $data['password'], PDO::PARAM_STR);
        }

        $statement->bindParam(":address", $data['address'], PDO::PARAM_STR);
        $statement->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statement->bindParam(":phone", $data['phone'], PDO::PARAM_STR);

        $statement->execute();

        return true;
    }

    public function fetchDataEmail($email)
    {
        if($this->status == "pencari_kos") {
            $sql = "SELECT * FROM members";
        } else if ($this->status == "pemilik_kos") {
            $sql = "SELECT * FROM pemilik_kos";
        }
        $sql .= " WHERE email=:email";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function forgotPassword($data)
    {
        $this->status = $data['status'];
        $user = $this->fetchDataEmail($data['email']);

        // generate password
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
        $password = substr(str_shuffle($chars), 0, 8);

        // enkripsi password
        $newPassword = $this->setPassword($password);

        //kirim email
        $subjek = "Permintaan Password Baru";

        $pesan = "From: informasikosan@gmail.com <br/>
                  Kami telah mereset password milik " . $user->full_name . "dan Anda dapat masuk kembali
                  ke website kami. <br/>
                  DETAIL AKUN ANDA <br/>
                  Username: " . $user->username . "<br/>
                  Password baru: " . $password;

        $to = $user->email;

        // Untuk mengirim email HTML, header tipe konten harus diatur
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $kirimEmail = mail($to, $pesan, $subjek, $headers);
        if ($kirimEmail) {
            if ($this->status == "pencari_kos") {
                $sql = "UPDATE members SET password = :password";
            } else if ($this->status == "pemilik_kos") {
                $sql = "UPDATE pemilik_kos SET password = :password";
            }
            $sql .= " WHERE email = :email";

            $statement = $this->getDb()->prepare($sql);

            $statement->bindParam(":password", $this->password, PDO::PARAM_STR);
            $statement->bindParam(":email", $data['email'], PDO::PARAM_STR);

            $_SESSION['success_message'] = 'Permintaan Password Baru Anda telah dikirim. Silakan cek email Anda';
        } else {
            $_SESSION['success_message'] = 'Server tidak dapat mengirim email';
        }

        return true;
    }
}
