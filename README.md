# Tugas 2 Praktikum Pemrograman Web 2

## Profil

Nama: Azka Syams Maulana
Kelas: TI-2A
NIM: 230202004

## Secara Umum

Sistem Informasi Bimbingan Akademik JKB (SIWALI JKB) adalah sistem manajemen bimbingan akademik yang komprehensif yang dirancang untuk menyederhanakan proses pengelolaan kinerja mahasiswa, konseling, dan data akademik lainnya untuk institusi pendidikan tinggi.

## Task
1. **Membuat view berbasis OOP PHP dengan menerima data dari mySQL database (tabel reports, gpas dan gpa_details)**
2. **Menggunakan __construct untuk menghubungan ke database**
    ```php
    public function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

            if (!$this->conn) {
                die("Connection failed");
              }
        }
    ```
3. **Menerapkan encapsulation berdasarkan studi kasus**
    ```php
    private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname ='pweb2';
        protected $conn;
    
    ```
4. **Menggunakan kelas turunan dengan konsep inheritance**
    ```php
    class Database {
        # code
    }

    class Gpas extends Database {
        # code
    }

    class GpasStudents extends Gpas {
        # code
    }
    ```
5. **Menerapkan polymorphism**
    ```php
    class Gpas extends Database {
        public function tampil() {
            # code
        }
    }

    class GpasStudents extends Gpas{
        public function tampil() {
            # code yang berbeda
        }
    }
    ```
## ERD (Entity Relationship Diagram)
![357750791-40c6870d-13cf-4278-adbc-3089686a7282](https://github.com/user-attachments/assets/9ef0c518-e609-4698-932c-281669e9f931)

## Tampilan Program
+ Menampilkan seluruh isi tabel gpas 
![image](https://github.com/user-attachments/assets/7d475b57-e237-4bd1-a8fe-17ce2c9614d5)

+ Menampilkan seluruh isi tabel gpa_details
![image](https://github.com/user-attachments/assets/bfa0bccc-9b6d-41a2-b16b-4cb284cfc814)

+  Menampilkan seluruh isi tabel reports
![image](https://github.com/user-attachments/assets/e2c7026e-e0af-4838-85ce-1ebfb9068071)

+  Menampilkan isi tabel gpas yang memiliki id_gpa = 1
![image](https://github.com/user-attachments/assets/8372cb85-e67c-4f5c-a6df-8b3227c806de)

+ Menampilkan isi tabel gpa_details yang memiliki id_gpa_detail = 1
![image](https://github.com/user-attachments/assets/247047a4-7db8-4ea0-a323-e66b099b984a)

+ Menampilkan isi tabel reports yang status-nya Approved
![image](https://github.com/user-attachments/assets/3bc145dc-1b77-4f75-ab3c-dac70620935e)
