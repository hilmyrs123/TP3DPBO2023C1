<?php

class Jabatan extends DB
{
    function getJabatan()
    {
        $query = "SELECT * FROM jabatan";
        return $this->execute($query);
    }

    function getJabatanById($id)
    {
        $query = "SELECT * FROM jabatan WHERE jabatan_id=$id";
        return $this->execute($query);
    }

    function addJabatan($data)
    {
        // ...
    }

    function updateJabatan($id, $data)
    {
        // ...
    }

    function deleteJabatan($id)
    {
        // ...
    }
}
