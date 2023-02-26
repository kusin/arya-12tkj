<?php
if ($_GET["page"] == "home") {
    include "home.php";
} else if ($_GET["page"] == "data-jurusan") {
    include "data-jurusan.php";
} else if ($_GET["page"] == "data-guru") {
    include "data-guru.php";
} else if ($_GET["page"] == "data-siswa"){
    include "data-siswa.php";
} else if ($_GET["page"] == "galeri-foto") {
    include "galeri-foto.php";
} else if ($_GET["page"] == "galeri-video") {
    include "galeri-foto.php";
} else if ($_GET["page"] == "kontak-kami"){
    include "kontak-kami.php";
} else {
    echo "<p class=\"p-info\">Modul masih dikerjakan</p>";
}
