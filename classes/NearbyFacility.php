<?php
namespace App;

use PDO;
use Exception;

class NearbyFacility
{
    private $internet_cafe;
    private $canteen;
    private $clinic;
    private $mosque;
    private $church;
    private $bank;
    private $indomaret;
    private $alfamart;
    private $circle_k;
    private $mall;
    private $supermarket;
    private $hospital;
    private $transportation_access;

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

    public function fetch($limit = 4)
    {
        $sql = "SELECT * FROM fasilitas_terdekat LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM fasilitas_terdekat WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function insert($kode_kosan, $fasilitas)
    {
        $sql = "INSERT INTO fasilitas_terdekat(kode_kosan, warnet, warteg, balai_kesehatan, masjid, gereja, bank, indomaret, alfamart, circle_k, mall, supermarket, rumah_sakit, akses_transportasi) VALUES (:kode_kosan, :warnet, :warteg, :balai_kesehatan, :masjid, :gereja, :bank, :indomaret, :alfamart, :circle_k, :mall, :supermarket, :rumah_sakit, :akses_transportasi)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $kode_kosan, PDO::PARAM_STR);

        foreach ($fasilitas as $key => $value) {
            $statement->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();

        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM fasilitas_terdekat WHERE kode_kosan = :id";
        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        return true;
    }
}
