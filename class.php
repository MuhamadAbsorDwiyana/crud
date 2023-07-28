<?php

class Mahasiswa
{
    private $nama;
    private $nim;
    private $kelas;
    public function __construct($nama,$nim,$kelas)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kelas = $kelas;
        echo '<tr>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$nim.'</td>';
        echo '<td>'.$kelas.'</td>';
        echo '</tr>';
    }
}

?>