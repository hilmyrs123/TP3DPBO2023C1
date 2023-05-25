<?php

class Region extends DB
{
    function getRegion()
    {
        $query = "SELECT * FROM region";
        return $this->execute($query);
    }

    function getRegionById($id)
    {
        $query = "SELECT * FROM region WHERE id_region=$id";
        return $this->execute($query);
    }

    function addRegion($data)
    {
        // ...
    }

    function updateRegion($id, $data)
    {
        // ...
    }

    function deleteRegion($id)
    {
        // ...
    }
}
