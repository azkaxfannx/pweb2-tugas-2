<?php 
    // Pembuatan class Database untuk menghubungkan ke database
    class Database {
        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname ='pweb2';
        protected $conn;

        // Construct untuk menghubungkan ke database
        public function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

            if (!$this->conn) {
                die("Connection failed");
              }
        }
    }

    // Pembuatan class Gpas yang extends Database
    class Gpas extends Database {
        // Method untuk menampilkan isi dari tabel gpas
        public function tampil() {
            $sql = "SELECT * FROM `gpas`";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    // Pembuatan class GpasStudents yang extends Gpas
    class GpasStudents extends Gpas {
        // Method untuk menampilkan isi dari tabel gpas yang memiliki id_gpa 1
        public function tampil() {
            $sql = "SELECT * FROM `gpas` WHERE id_gpa='1'";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    // Pembuatan class GpaDetails yang extends Database
    class GpaDetails extends Database {
        // Method untuk menampilkan isi dari tabel gpa_details
        public function tampil() {
            $sql = "SELECT * FROM `gpa_details`";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    // Pembuatan class GpaDetailsStudents yang extends GpaDetails
    class GpaDetailsStudents extends GpaDetails {
        // Method untuk menampilkan isi dari tabel gpa_details yang memiliki id_gpa_detail 1
        public function tampil() {
            $sql = "SELECT * FROM `gpa_details` WHERE id_gpa_detail='1'";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    // Pembuatan class Reports yang extends Database
    class Reports extends Database {
        // Method untuk menampilkan isi dari tabel reports
        public function tampil() {
            $sql = "SELECT * FROM `reports`";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    // Pembuatan class ReportsStudents yang extends Reports
    class ReportsStudents extends Reports {
        // Method untuk menampilkan isi dari tabel reports yang memiliki status 'Approved'
        public function tampil() {
            $sql = "SELECT * FROM `reports` WHERE status='Approved'";
            
            $data = $this->conn->query($sql);

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
?>