<?php
namespace App;

use PDO;
use Exception;

class Kost
{
    private $id;
    private $kost_name;
    private $address;
    private $type;
    private $dweller;
    private $campus_category;
    private $price;
    private $price2;
    private $description;
    private $image;
    private $owner_name;
    private $creator_id;
    private $phone;
    private $phone2;
    private $view;

    private $db;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKostname()
    {
        return $this->kost_name;
    }

    public function setKostname($kost_name)
    {
        $this->kost_name = $kost_name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDweller()
    {
        return $this->dweller;
    }

    public function setDweller($dweller)
    {
        $this->dweller = $dweller;
    }

    public function getCampuscategory()
    {
        return $this->campus_category;
    }

    public function setCampuscategory($campus_category)
    {
        $this->campus_category = $campus_category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice2()
    {
        return $this->price2;
    }

    public function setPrice2($price)
    {
        $this->price2 = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getOwnername()
    {
        return $this->owner_name;
    }

    public function setOwnername($owner_name)
    {
        $this->owner_name = $owner_name;
    }

    public function getCreatorId()
    {
        return $this->creator_id;
    }

    public function setCreatorId($creator_id)
    {
        $this->creator_id = $creator_id;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone2()
    {
        return $this->phone2;
    }

    public function setPhone2($phone)
    {
        $this->phone2 = $phone;
    }

    public function getView()
    {
        return $this->view;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    public function getDb()
    {
        if(is_null($this->db)) {
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

    public function add()
    {
        $sql = "INSERT INTO kosan(nama_kosan, alamat_kosan, type_kosan, jenis_hunian, kategori_kampus, harga_kosan, harga_sewa2, keterangan, gambar_kosan, kode_pembuat, nama_pemilik, nomor_tlp, nomor_tlp2) VALUES (:name, :address, :type, :dweller, :campus_category, :price, :price2, :description, :image, :creator_id, :owner_name, :phone, :phone2)";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(":name", $this->kost_name, PDO::PARAM_STR);
        $statement->bindParam(":address", $this->address, PDO::PARAM_STR);
        $statement->bindParam(":type", $this->type, PDO::PARAM_STR);
        $statement->bindParam(":dweller", $this->dweller, PDO::PARAM_STR);
        $statement->bindParam(":campus_category", $this->campus_category, PDO::PARAM_STR);
        $statement->bindParam(":price", $this->price, PDO::PARAM_STR);
        $statement->bindParam(":price2", $this->price2, PDO::PARAM_STR);
        $statement->bindParam(":description", $this->description, PDO::PARAM_STR);
        $statement->bindParam(":image", $this->image, PDO::PARAM_STR);
        $statement->bindParam(":creator_id", $this->creator_id, PDO::PARAM_STR);
        $statement->bindParam(":owner_name", $this->owner_name, PDO::PARAM_STR);
        $statement->bindParam(":phone", $this->phone, PDO::PARAM_STR);
        $statement->bindParam(":phone2", $this->phone2, PDO::PARAM_STR);

        $statement->execute();

        $this->id = $this->db->lastInsertId();

        return true;
    }

    public function update()
    {
        $sql = "UPDATE kosan SET nama_kosan = :name, alamat_kosan = :address, type_kosan = :type, jenis_hunian = :dweller, kategori_kampus = :campus_category, harga_kosan = :price, harga_sewa2 = :price2, keterangan = :description, gambar_kosan = :image, kode_pembuat = :creator_id, nama_pemilik = :owner_name, nomor_tlp = :phone, nomor_tlp2 = :phone2 WHERE kode_kosan = :id)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
        $statement->bindParam(":name", $this->kost_name, PDO::PARAM_STR);
        $statement->bindParam(":address", $this->address, PDO::PARAM_STR);
        $statement->bindParam(":type", $this->type, PDO::PARAM_STR);
        $statement->bindParam(":dweller", $this->dweller, PDO::PARAM_STR);
        $statement->bindParam(":campus_category", $this->campus_category, PDO::PARAM_STR);
        $statement->bindParam(":price", $this->price, PDO::PARAM_STR);
        $statement->bindParam(":price2", $this->price2, PDO::PARAM_STR);
        $statement->bindParam(":description", $this->description, PDO::PARAM_STR);
        $statement->bindParam(":image", $this->image, PDO::PARAM_STR);
        $statement->bindParam(":creator_id", $this->creator_id, PDO::PARAM_STR);
        $statement->bindParam(":owner_name", $this->owner_name, PDO::PARAM_STR);
        $statement->bindParam(":phone", $this->phone, PDO::PARAM_STR);
        $statement->bindParam(":phone2", $this->phone2, PDO::PARAM_STR);

        $statement->execute();

        $this->id = $this->db->lastInsertId();

        return true;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM kosan WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        return true;
    }

    public function searchAddress($address)
    {
        $sql = "SELECT * FROM kosan WHERE alamat_kosan LIKE :address";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindValue(':address', "%$address%", PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function searchAll($fasilitasKamar, $fasilitasUmum, $kategoriKampus, $hargaKosan, $typeKosan)
    {
        $sql = "SELECT * FROM kosan, fasilitas_kamar, fasilitas_umum WHERE kosan.kode_kosan = fasilitas_kamar.kode_kosan AND kosan.kode_kosan = fasilitas_umum.kode_kosan";

        if ($fasilitasKamar['kamar_mandi_dalam'] == 'yes') {
            $sql .= " AND kamar_mandi_dalam = :kamar_mandi_dalam";
        }
        if ($fasilitasKamar['tempat_tidur'] == 'yes') {
            $sql .= " AND tempat_tidur = :tempat_tidur";
        }
        if ($fasilitasKamar['lemari'] == 'yes') {
            $sql .= " AND lemari = :lemari";
        }
        if ($fasilitasKamar['meja'] == 'yes') {
            $sql .= " AND meja = :meja";
        }

        if ($fasilitasUmum['dapur_bersama'] == 'yes') {
            $sql .= " AND dapur_bersama = :dapur_bersama";
        }
        if ($fasilitasUmum['ruangan_tamu'] == 'yes') {
            $sql .= " AND ruangan_tamu = :ruangan_tamu";
        }
        if ($fasilitasUmum['parkir_motor'] == 'yes') {
            $sql .= " AND parkir_motor = :parkir_motor";
        }
        if ($fasilitasUmum['parkir_mobil'] == 'yes') {
            $sql .= " AND parkir_mobil = :parkir_mobil";
        }

        $sql .= " AND kategori_kampus = :kategori_kampus AND harga_kosan >= :harga1 AND harga_kosan <= :harga2 AND type_kosan = :type";

        $statement = $this->getDb()->prepare($sql);

        if ($fasilitasKamar['kamar_mandi_dalam'] == 'yes') {
            $statement->bindParam(":kamar_mandi_dalam", $fasilitasKamar['kamar_mandi_dalam'], PDO::PARAM_STR);
        }

        if ($fasilitasKamar['tempat_tidur'] == 'yes') {
            $statement->bindParam(":tempat_tidur", $fasilitasKamar['tempat_tidur'], PDO::PARAM_STR);
        }

        if ($fasilitasKamar['lemari'] == 'yes') {
            $statement->bindParam(":lemari", $fasilitasKamar['lemari'], PDO::PARAM_STR);
        }

        if ($fasilitasKamar['meja'] == 'yes') {
            $statement->bindParam(":meja", $fasilitasKamar['meja'], PDO::PARAM_STR);
        }


        if ($fasilitasUmum['dapur_bersama'] == 'yes') {
            $statement->bindParam(":dapur_bersama", $fasilitasUmum['dapur_bersama'], PDO::PARAM_STR);
        }

        if ($fasilitasUmum['ruangan_tamu'] == 'yes') {
            $statement->bindParam(":ruangan_tamu", $fasilitasUmum['ruangan_tamu'], PDO::PARAM_STR);
        }

        if ($fasilitasUmum['parkir_motor'] == 'yes') {
            $statement->bindParam(":parkir_motor", $fasilitasUmum['parkir_motor'], PDO::PARAM_STR);
        }

        if ($fasilitasUmum['parkir_mobil'] == 'yes') {
            $statement->bindParam(":parkir_mobil", $fasilitasUmum['parkir_mobil'], PDO::PARAM_STR);
        }

        $statement->bindParam(":kategori_kampus", $kategoriKampus, PDO::PARAM_STR);
        $statement->bindParam(":harga1", $hargaKosan['min'], PDO::PARAM_INT);
        $statement->bindParam(":harga2", $hargaKosan['max'], PDO::PARAM_INT);
        $statement->bindParam(":type", $typeKosan, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetch($limit = 4)
    {
        $sql = "SELECT * FROM kosan ORDER BY jumlah_view DESC LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchAllKost()
    {

        $sql = "SELECT * FROM kosan ORDER BY kode_kosan";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchKost($page = 1, $limit = 6)
    {
        $star_from = ($page - 1) * $limit;

        $sql = "SELECT * FROM kosan ORDER BY kode_kosan LIMIT :start_from, :limit";

        $statement = $this->getDb()->prepare($sql);
        $num_result = $statement->rowCount();

        $statement->bindParam(':start_from', $star_from, PDO::PARAM_INT);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM kosan WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchDataKost($kode_pembuat)
    {
        $sql = "SELECT * FROM kosan WHERE kode_pembuat = :kode_pembuat";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_pembuat', $kode_pembuat, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchNewDataKost($limit = 3)
    {
        $sql = "SELECT * FROM kosan ORDER BY kode_kosan DESC LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchKostForCampuss()
    {
        $sql = "SELECT * FROM kosan WHERE kategori_kampus = 'UNIKOM, ITHB, UNPAD, ITB'";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchKostForTelkom()
    {
        $sql = "SELECT * FROM kosan WHERE kategori_kampus = 'TELKOM UNIVERSITY'";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function pagination($per_page = 6, $page = 1, $url = '?')
    {
        $sql = "SELECT count(kode_kosan) AS total FROM kosan";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        $total = $result->total;

        $adjacents = 2;

        $lastlabel = "Last <i class='fa fa-angle-double-right'></i>";

        $page = ($page <= 0) ? 1 : $page;
        $start = ($page - 1) * $per_page;

        $prev = $page - 1;
        $next = $page + 1;

        $lastpage = ceil($total/$per_page);

        $lpm1 = $lastpage - 1;

        $pagination = "";
        if($lastpage >= 1){
            $pagination .= "<ul class='pagination'>";
            $pagination .= "<li class='active'>Halaman " . $page . " dari " . $lastpage . "</li>";

            if ($lastpage < 5 + ($adjacents * 2)){
                for ($counter = 1; $counter <= $lastpage; $counter++){
                    if ($counter == $page)
                        $pagination.= "<li class='active'>" . $counter . "</li>";
                    else
                        $pagination.= "<a href='" . $url . "page=" . $counter . "'>" . $counter . "</a>";
                }

            } else if($lastpage > 3 + ($adjacents * 2)){

                if($page < 1 + ($adjacents * 2)) {

                    for ($counter = 1; $counter < 2 + ($adjacents * 2); $counter++){
                        if ($counter == $page)
                            $pagination.= "<li class='active'>" . $counter . "</li>";
                        else
                            $pagination.= "<a href='" . $url . "page=" . $counter . "'>" . $counter . "</a>";
                    }
                    $pagination.= "<nav aria-label='...''></nav>";
                    $pagination.= "<a href=' " . $url . "page=" . $lpm1 . "'>" . $lpm1 . "</a>";
                    $pagination.= "<a href=' " . $url . "page=" . $lastpage . "'>" . $lastpage . "</a>";

                } else if($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {

                    $pagination.= "<a href='" . $url . "page=1'>1</a>";
                    $pagination.= "<nav aria-label='...''></nav>";
                    for ($counter = $page - 1; $counter <= $page + 1; $counter++) {
                        if ($counter == $page)
                            $pagination.= "<li class='active'>" . $counter . "</li>";
                        else
                            $pagination.= "<a href='" . $url . "page=" . $counter . "'>" . $counter . "</a>";
                    }
                    $pagination.= "<nav aria-label='...''></nav>";
                    $pagination.= "<a href='" . $url . "page=" . $lastpage . "'>" . $lastpage . "</a>";

                } else {

                    $pagination.= "<a href='" . $url . "page=1'>1</a>";
                    $pagination.= "<nav aria-label='...''></nav>";
                    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                        if ($counter == $page)
                            $pagination.= "<li class='active'>" . $counter . "</li>";
                        else
                            $pagination.= "<a href='" . $url . "page=" . $counter . "'>" . $counter . "</a>";
                    }
                }
            }

                if ($page < $counter - 1) {
                    $pagination.= "<a href='" . $url . "page=" . $lastpage . "'>" . $lastlabel . "</a>";
                }

            $pagination.= "</div>";
        }

        return $pagination;
    }
}

