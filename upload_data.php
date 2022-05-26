<?php
include('koneksi.php');
require('phpspreadsheet/autoload.php');
error_reporting(0);
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

date_default_timezone_set('Asia/Jakarta');

$file = $_FILES['datapenduduk']['tmp_name'];
if (isset($_FILES['datapenduduk']['name'])) {

    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file);
    // $reader->setReadDataOnly(TRUE);
    // lokasi file excel
    $spreadsheet = $reader->load($file);
    $worksheet = $spreadsheet->getActiveSheet();
    $rows = $worksheet->toArray();

    unset($rows[0]);
    foreach ($rows as $key => $value) {
        $value[1] = str_replace("`","",$value[1]);
        $value[2] = str_replace("`","",$value[2]);
        mysqli_query($koneksi,"INSERT INTO datapenduduk VALUES('','$value[0]','$value[1]','$value[2]','0$value[3]','$value[4]')");
    }

}
header('location:index.php');
?>