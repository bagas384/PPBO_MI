<?php
/* objek_baru.php */
class pemrogaman {
var $nama;
function getName(){
return $this -> nama;
}
function setName ($nama){
$this -> nama = $nama;
}
function Pemrogaman($nama) {
$this -> setName($nama);
}
}
function chanceName ($pemrogaman, $nama) {
$pemrogaman -> setName($nama);
}
$prog = new pemrogaman ("joko");
printf $prog -> getName();
println "Objek setelah diganti <br>";
changeName($prog, "Andi");
print $prog -> getName();
?>