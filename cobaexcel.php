<?php

error_reporting(0);

include "./SpreadsheetReader.php";

$reader = new SpreadsheetReader('contoh-excel.xlsx');
$sheets = $reader->Sheets();

$ambil_sheet = 0;
$reader->ChangeSheet($ambil_sheet); ?>

<style>
    table, th, td {border:1px solid black}
    th, td {padding:5px}
</style>

<table>
    <tr>
        <td colspan="1" width="65">Sheet #<?=$ambil_sheet?></b> :</td>
        <th colspan="2"><b><?=$sheets[$ambil_sheet]?></b></th>
    </tr>
    <tr>
        <th width="60">
            <b>No.</b>
        </th>
        <th width="300">
            <b>Nama Artikel</b>
        </th>
        <th width="60">
            <b>URL</b>
        </th>
    </tr>
    <?php foreach($reader as $i => $kolom):
        if ($i == 0 || (empty($kolom[0]) && empty($kolom[1]) && empty($kolom[2])))
            continue ?>
            <tr>
                <th><?=$kolom[0]?></th>
                <td><?=$kolom[1]?></td>
                <td><?=$kolom[2]?></td>
            </tr>
    <?php endforeach ?>
</table>