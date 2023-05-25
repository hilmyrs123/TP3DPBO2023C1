<?php

include('config/db.php');
include('classes/DB.php');
include('classes/Player.php');
include('classes/Team.php');
include('classes/Region.php');
include('classes/Template.php');

$listPlayer = new Player($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// buka koneksi
$listPlayer->open();
// tampilkan data 
$listPlayer->getPlayerJoin();

// cari 
if (isset($_POST['btn-cari'])) {
    // methode mencari data 
    $listPlayer->searchPlayer($_POST['cari']);
} else {
    // method menampilkan data 
    $listPlayer->getPlayerJoin();
}

$data = null;

// ambil data pengurus
// gabungkan dgn tag html
// untuk di passing ke skin/template
while ($row = $listPlayer->getResult()) {
    $data .= '<div class="col gx-2 gy-3 justify-content-center">' .
        '<div class="card pt-4 px-2 player-thumbnail">
        <a href="detail.php?id=' . $row['id_player'] . '">
            <div class="row justify-content-center">
                <img src="assets/images/' . $row['player_img'] . '" class="card-img-top" alt="' . $row['player_img'] . '">
            </div>
            <div class="card-body">
                <p class="card-text player-nama my-0">' . $row['name_player'] . '</p>
                <p class="card-text team-nama">' . $row['name_team'] . '</p>
                <p class="card-text region-nama my-0">' . $row['name_region'] . '</p>
            </div>
        </a>
    </div>    
    </div>';
}

// tutup koneksi
$listPlayer->close();

// buat instance template
$home = new Template('templates/skin.html');

// simpan data ke template
$home->replace('DATA_PLAYER', $data);
$home->write();
