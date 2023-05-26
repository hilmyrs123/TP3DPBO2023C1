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
        $query = "SELECT * FROM player 
        JOIN team ON player.team_id=team.id_team 
        JOIN region ON player.region_id=region.id_region WHERE id_player = $id";
        return $this->execute($query);
    }

    function addData($data, $file)
    {
        $name = $data['name'];
        $representing = $data['representing'];

        $query = "INSERT INTO player (name_player, representing) VALUES ('$name', '$representing')";
        return $this->execute($query);
    }

    function searchPlayer($keyword)
    {
        $query = "SELECT * FROM player  JOIN team ON player.team_id=team.id_team 
        JOIN region ON player.region_id=region.id_region WHERE name_player LIKE '%$keyword%'";
        return $this->execute($query);
    }

    function updateData($id, $data, $file)
    {
        $name = $data['name'];
        $representing = $data['representing'];

        $query = "UPDATE player SET name_player='$name', representing='$representing' WHERE id_player=$id";
        return $this->execute($query);
    }

    function deleteData($id)
    {
        $query = "DELETE FROM player WHERE id_player=$id";
        return $this->execute($query);
    }
}
