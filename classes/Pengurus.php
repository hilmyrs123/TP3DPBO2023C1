<?php

class Pengurus extends DB
{
    function getPengurusJoin()
    {
        $query = "SELECT * FROM pengurus JOIN divisi ON pengurus.divisi_id=divisi.divisi_id JOIN jabatan ON pengurus.jabatan_id=jabatan.jabatan_id ORDER BY pengurus.pengurus_id";

        return $this->execute($query);
    }

    function getPengurus()
    {
        $query = "SELECT * FROM pengurus";
        return $this->execute($query);
    }

    function getPengurusById($id)
    {
        $query = "SELECT * FROM pengurus JOIN divisi ON pengurus.divisi_id=divisi.divisi_id JOIN jabatan ON pengurus.jabatan_id=jabatan.jabatan_id WHERE pengurus_id=$id";
        return $this->execute($query);
    }

    function searchPengurus($keyword)
    {
        // ...
    }

    function addData($data, $file)
    {
        // ...
    }

    function updateData($id, $data, $file)
    {
        // ...
    }

    function deleteData($id)
    {
        // ...
    }
}
