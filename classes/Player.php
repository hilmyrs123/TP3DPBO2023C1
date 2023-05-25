<?php

class Player extends DB
{
    function getPlayerJoin()
    {
        $query = "SELECT * FROM player 
        JOIN team ON player.team_id=team.id_team 
        JOIN region ON player.region_id=region.id_region ORDER BY player.id_player";

        return $this->execute($query);
    }

    function getPlayer()
    {
        $query = "SELECT * FROM player";
        return $this->execute($query);
    }

    function getPlayerById($id)
    {
        $query = "SELECT * FROM player WHERE id_player=$id";
        return $this->execute($query);
    }

    function searchPlayer($keyword)
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
