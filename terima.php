<?php 

    require ("config.php");

    class penduduk{
        // Properties
        public $nik;
        public $nama_lengkap;
        public $jenis_kelamin;
        public $alamat;
        public $status_kawin;
        public $pekerjaan;
        public $kewarganegaraan;
        public $tempat_lahir;
        public $tanggal_lahir;
        public $golongan_darah;

        //Method setting properties
        function set_all_data (
            $nik, 
            $nama_lengkap, 
            $jenis_kelamin, 
            $alamat, 
            $status_kawin, 
            $pekerjaan, 
            $kewarganegaraan, 
            $tempat_lahir, 
            $tanggal_lahir, 
            $golongan_darah
            ) {
            $this->nik = $nik;
            $this->nama_lengkap = $nama_lengkap;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->alamat = $alamat;
            $this->status_kawin = $status_kawin;
            $this->pekerjaan = $pekerjaan;
            $this->kewarganegaraan = $kewarganegaraan;
            $this->tempat_lahir = $tempat_lahir;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->golongan_darah = $golongan_darah;

        }

        //Method ambil data properties
        function get_nik() {
            return $this->get_nik;
        }

        function get_nama_lengkap() {
            return $this->get_nama_lengkap;
        }

        function get_jenis_kelamin() { 
            return $this->get_jenis_kelamin;
        }

        function get_alamat() {
            return $this->get_alamat;
        }

        function get_status_kawin() {
            return $this->get_status_kawin;
        }

        function get_pekerjaan() {
            return $this->geta_pekerjaan;
        }

        function get_kewarganegaraan() {
            return $this->get_kewarganegaraan;
        }

        function get_tempat_lahir() {
            return $this->get_tempat_lahir;
        }

        function get_tanggal_lahir() {
            return $this->get_tanggal_lahir;
        }

        function get_golongan_darah() {
            return $this->get_golongan_darah;
        }

        // Tambah Penduduk
        function tambahpenduduk ($koneksi,
            $nik,     
            $nama_lengkap, 
            $jenis_kelamin, 
            $alamat, 
            $status_kawin, 
            $pekerjaan, 
            $kewarganegaraan, 
            $tempat_lahir, 
            $tanggal_lahir, 
            $golongan_darah) 
        {
            $tambahdata = "INSERT INTO tbl_penduduk 
            (nik,nama_lengkap,jenis_kelamin,alamat,status_kawin,pekerjaan,kewarganegaraan,tempat_lahir,tanggal_lahir,golongan_darah) 
            VALUES 
            ('$nik','$nama_lengkap','$jenis_kelamin','$alamat','$status_kawin','$pekerjaan','$kewarganegaraan','$tempat_lahir','$tanggal_lahir','$golongan_darah')";
            
            $proses_tambah =mysqli_query($koneksi, $tambahdata);
            if ($proses_tambah) echo "Data Berhasil Ditambah";
            else echo "Data Gagal Ditambah";
        }
  
    }

    // Post Data
    if (isset($_POST['submit']) ){
        
        if ($_POST['nik'] != '' 
            and $_POST['nama_lengkap'] != '' 
            and $_POST['jenis_kelamin'] != '' 
            and $_POST['alamat'] != '' 
            and $_POST['status_kawin'] != '' 
            and $_POST['pekerjaan'] != '' 
            and $_POST['kewarganegaraan'] != '' 
            and $_POST['tempat_lahir'] != '' 
            and $_POST['tanggal_lahir'] != '' 
            and $_POST['golongan_darah'] != '')
        {
            $post_nik = $_POST['nik'];
            $post_nama_lengkap = $_POST['nama_lengkap'];
            $post_jenis_kelamin = $_POST['jenis_kelamin'];
            $post_alamat = $_POST['alamat'];
            $post_status_kawin = $_POST['status_kawin'];
            $post_pekerjaan = $_POST['pekerjaan'];
            $post_kewarganegaraan = $_POST['kewarganegaraan'];
            $post_tempat_lahir = $_POST['tempat_lahir'];
            $post_tanggal_lahir = $_POST['tanggal_lahir'];
            $post_golongan_darah = $_POST['golongan_darah'];

            $penduduk_post = new penduduk();
            $penduduk_post->tambahpenduduk(
                $koneksi, $post_nik, $post_nama_lengkap, $post_jenis_kelamin, $post_alamat, $post_status_kawin,
                $post_pekerjaan, $post_kewarganegaraan, $post_tempat_lahir, $post_tanggal_lahir, $post_golongan_darah
            );
            header("Location: data_penduduk.php");
        } 

    }

?>