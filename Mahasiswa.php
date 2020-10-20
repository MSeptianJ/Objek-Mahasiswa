<?php
    require "Manusia.php";

class Mahasiswa extends Manusia
{
    public $jurusan;
    public $universitas;
    public $semester;
    private $uang;

    public function __construct($nama, $alamat, $kelakuan, $universitas, $jurusan, $semester)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->kelakuan = $kelakuan;

        $this->universitas = $universitas;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    public function perkenalan() {
        echo <<<Heredoc
                Perkenalkan nama saya $this->nama, saya seorang Mahasiswa $this->jurusan di $this->universitas <br>
                Saya telah menjadi mahasiswa selama $this->semester semester<br>
            Heredoc;
    }

    public function kegiatan(){
        echo "Kegiatan saya sehari-hari yaitu ";

        switch ($this->kelakuan){
            case "Malas": {
                echo "sering rebahan dan nonton anime<br>";
                break;
            }
            case "Ngoding": {
                echo "sering ngoding untuk menyelesaikan kelas programming online<br>";
                break;
            }
            case "Tugas": {
                echo "sering mengerjakan tugas agar dapat nilai besar dan lulus<br>";
                break;
            }
        }
    }

    public function setUang($uang)
    {
        $this->uang = $uang;
    }

    public function getUang()
    {
        return $this->uang;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}