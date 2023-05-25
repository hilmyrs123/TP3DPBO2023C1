<?php

include('config/db.php');
include('classes/DB.php');
include('classes/Player.php');
include('classes/Team.php');
include('classes/Region.php');
include('classes/Template.php');

$player = new Player($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$player->open();

$data = null;

if (isset($_GET['id_player'])) {
    $id = $_GET['id_player'];
    if ($id > 0) {
        $player->getPlayerById($id);
        $row = $player->getResult();

        $data .= '<div class="card-header text-center">
        <h3 class="my-0">Detail ' . $row['name_player'] . '</h3>
        </div>
        <div class="card-body text-end">
            <div class="row mb-5">
                <div class="col-3">
                    <div class="row justify-content-center">
                        <img src="assets/images/' . $row['player_img'] . '" class="img-thumbnail" alt="' . $row['player_img'] . '" width="60">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card px-3">
                            <table border="0" class="text-start">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>' . $row['name_player'] . '</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td>' . $row['representing'] . '</td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="#"><button type="button" class="btn btn-success text-white">Ubah Data</button></a>
                <a href="#"><button type="button" class="btn btn-danger">Hapus Data</button></a>
            </div>';
    }
}

$player->close();
$detail = new Template('templates/skindetail.html');
$detail->replace('DATA_DETAILS', $data);
$detail->write();
