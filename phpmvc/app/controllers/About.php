<?php

class About {
    public function index($nama = 'Roby', $pekerjaan = 'Mahasiswa') {
        echo "Hallo, Nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}