<?php
namespace App;

use PDO;
use Exception;

class Location
{
    private $name;
    private $address;
    private $lat;
    private $lon;

    private $db;

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

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM lokasi WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function insert($kode_kosan, $lokasi) {
        $sql = "INSERT INTO lokasi(kode_kosan, nama, alamat, lat, lon) VALUES (:kode_kosan, :nama, :alamat, :lat, :lon)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $kode_kosan, PDO::PARAM_STR);

        foreach ($lokasi as $key => $value) {
            $statement->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM lokasi WHERE kode_kosan = :id";
        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        return true;
    }
}
