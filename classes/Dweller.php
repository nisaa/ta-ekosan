<?php
namespace App;

use PDO;
use Exception;

class Dweller
{
    private $pelajar;
    private $mahasiswi;
    private $mahasiswa;
    private $karyawan;
    private $karyawati;

    private $kost;
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
        $sql = "SELECT * FROM mayoritas_penghuni WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function insert($kode_kosan, $penghuni) {
        $sql = "INSERT INTO mayoritas_penghuni(kode_kosan, pelajar, mahasiswa, mahasiswi, karyawati, karyawan) VALUES (:kode_kosan, :pelajar, :mahasiswa, :mahasiswi, :karyawati, :karyawan)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $kode_kosan, PDO::PARAM_STR);

        foreach ($penghuni as $key => $value) {
            $statement->bindParam(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM mayoritas_penghuni WHERE kode_kosan = :id";
        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        return true;
    }
}
