<?php

class Team extends DB
{
    function getTeam()
    {
        $query = "SELECT * FROM team";
        return $this->execute($query);
    }

    function getTeamById($id)
    {
        $query = "SELECT * FROM team WHERE id_team=$id";
        return $this->execute($query);
    }

    function addTeam($data)
    {
        $nama = $data['name_team'];
        $query = "INSERT INTO team VALUES('', '$nama')";
        return $this->executeAffected($query);
    }

    function updateTeam($id, $data)
    {
        // ...
    }

    function deleteTeam($id)
    {
        // ...
    }
}
