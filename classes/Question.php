<?php
namespace App;

use PDO;
use Exception;

class Question
{
    private $id;
    private $user_id;
    private $subject;
    private $content;

    private $db;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUserId() {
        return $user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
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

    public function add() {
        $sql = "INSERT INTO pertanyaan(user_id, judul, pertanyaan) VALUES(:user_id, :subject, :content)";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
        $statement->bindParam(':subject', $this->subject, PDO::PARAM_STR);
        $statement->bindParam(':content', $this->content, PDO::PARAM_STR);

        if (!$statement->execute()) {
            return false;
        }

        return true;
    }
}
