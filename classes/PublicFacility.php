<?php
namespace App;

use PDO;
use Exception;

class PublicFacility
{

    private $kitchen;
    private $living_room;
    private $bike_parking;
    private $car_parking;
    private $shared_bathroom;
    private $shared_refrigerator;
    private $canteen;
    private $washing_machine;
    private $wifi;
    private $maid;
    private $shared_tv;
    private $cctv;
    private $dining_room;
    private $dispenser;

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

    public function fetch($limit = 4)
    {
        $sql = "SELECT * FROM fasilitas_umum LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM fasilitas_umum WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function insert($kode_kosan, $fasilitas) {
        $sql = "INSERT INTO fasilitas_umum(kode_kosan, dapur_bersama, ruangan_tamu, parkir_motor, parkir_mobil, kamar_mandi_bersama, kulkas_bersama, kantin, mesin_cuci, wifi, pembantu, tv_bersama, cctv, ruangan_makan, dispenser) VALUES (:kode_kosan, :dapur_bersama, :ruangan_tamu, :parkir_motor, :parkir_mobil, :kamar_mandi_bersama, :kulkas_bersama, :kantin, :mesin_cuci, :wifi, :pembantu, :tv_bersama, :cctv, :ruangan_makan, :dispenser)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $kode_kosan, PDO::PARAM_STR);

        foreach ($fasilitas as $key => $value) {
            $statement->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM fasilitas_umum WHERE kode_kosan = :id";
        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        return true;
    }
}

