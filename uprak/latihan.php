<?php
class bangun_ruang{
    private static $bangun = [
        "Persegi",
        "Persegi Panjang",
        "Segitiga",
        "Lingkaran",
        "Belah Ketupat",
    ];
}
class Segitiga
{
   public $tinggi;
   public $alas;
    function __construct($tinggi, $alas)
   {
       $this->tinggi = $tinggi;
       $this->alas = $alas;
   }
 
   function luas()
   {
       return $this->alas * $this->tinggi / 2;
   }
 
   function keliling()
   {
       $sisi_miring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
       return $this->alas + $this->tinggi + $sisi_miring;
   }
}
class PersegiPanjang
{
   public $panjang;
   public $lebar;
 
   function __construct($panjang, $lebar)
   {
       $this->panjang = $panjang;
       $this->lebar = $lebar;
   }
 
   function luas()
   {
       return $this->panjang * $this->lebar;
   }
 
   function keliling()
   {
       return 2 * ($this->panjang + $this->lebar);
   }
}
class Persegi
{
  public $sisi;
  function __construct($sisi)
  {
      $this->sisi = $sisi;
  }
 
  function luas()
  {
      return $this->sisi * $this->sisi;
  }
 
  function keliling()
  {
      return 4 * $this->sisi;
  }
}
class Lingkaran
{
   public $jariJari;
   function __construct($jariJari)
   {
       $this->jariJari = $jariJari;
   }
   function luas()
   {
       return pi() * pow($this->jariJari, 2);
   }
 
   function keliling()
   {
       return 2 * pi() * $this->jariJari;
   }
}
class BelahKetupat
{
   public $diagonal1;
   public $diagonal2;
   function __construct($diagonal1, $diagonal2)
   {
       $this->diagonal1 = $diagonal1;
       $this->diagonal2 = $diagonal2;
   }
   function luas()
   {
       return ($this->diagonal1 * $this->diagonal2) / 2;
   }
   function keliling()
   {
       $sisi = sqrt(pow($this->diagonal1 / 2, 2) + pow($this->diagonal2 / 2, 2));
   }
}
 
echo "Username: ";
$username = trim(fgets(STDIN));
echo "Password: ";
$password = trim(fgets(STDIN));
 
echo "Selamat datang anda telah berhasil login di Aplikasi Bangun Ruang CLI. \n";
echo "Silahkan pilih salah satu bangun ruang : \n";
$bangun = trim(fgets(STDIN));
echo "anda memilih bangun ruang $bangun";
echo "Mohon maaf , username dan password yang anda masukan salah ! \n ";
echo "Silahkan kembali Login, \n";
echo "Username: ";
$username = trim(fgets(STDIN));
echo "Password: ";
$password = trim(fgets(STDIN));
 
echo "Masukkan panjang sisi persegi (cm): ";
$sisi = trim(fgets(STDIN));
$persegi = new Persegi($sisi);
echo "Luas Persegi: " . $persegi->luas() . " cm²\n";
echo "Keliling Persegi: " . $persegi->keliling() . " cm\n";
echo "Masukkan panjang (cm): ";
$panjang = trim(fgets(STDIN));
echo "Masukkan lebar (cm): ";
$lebar = trim(fgets(STDIN));
$persegiPanjang = new PersegiPanjang($panjang, $lebar);
echo "Luas Persegi Panjang : " . $persegiPanjang->luas() . " cm²\n";
echo "Keliling Persegi Panjang : " . $persegiPanjang->keliling() . " cm\n";
echo "Masukan alas (cm):\n";
$alas = trim(fgets(STDIN));
echo "Masukan tinggi (cm):  \n";
$tinggi = trim(fgets(STDIN));
echo "Luas Segitiga :  \n";
$luas = trim(fgets(STDIN));
echo "Keliling Segitiga :   \n";
$keliling = trim(fgets(STDIN));
echo "Bangun Ruang : Lingkaran\n";
echo "Masukkan jari-jari (cm): ";
$jariJari = trim(fgets(STDIN));
$lingkaran = new Lingkaran($jariJari);
echo "Luas Lingkaran : " . number_format($lingkaran->luas(), 2) . " cm²\n";
echo "Keliling Lingkaran : " . number_format($lingkaran->keliling(), 2) . " cm\n";
 
echo "Bangun Ruang : Belah Ketupat\n";
echo "Masukkan panjang diagonal 1 (cm): ";
$diagonal1 = trim(fgets(STDIN));
echo "Masukkan panjang diagonal 2 (cm): ";
$diagonal2 = trim(fgets(STDIN));
$belahKetupat = new BelahKetupat($diagonal1, $diagonal2);
echo "Luas Belah Ketupat : " . number_format($belahKetupat->luas(), 2) . " cm²\n";
echo "Keliling Belah Ketupat : " . number_format($belahKetupat->keliling(), 2) . " cm\n";
?>
 
