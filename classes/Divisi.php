<?php

class Divisi extends DB
{
    function getDivisi()
    {
        $query = "SELECT * FROM divisi";
        return $this->execute($query);
    }

    function getDivisiById($id)
    {
        $query = "SELECT * FROM divisi WHERE divisi_id=$id";
        return $this->execute($query);
    }

    function addDivisi($data)
    {
        $nama = $data['nama'];
        $query = "INSERT INTO divisi VALUES('', '$nama')";
        return $this->executeAffected($query);
    }

    function updateDivisi($id, $data)
    {
        // ...
    }

    function deleteDivisi($id)
    {
        // ...
    }
}
