<?php

namespace App\models;

use PDO;
use PDOException;

class Database
{
    public string $host = "localhost";
    public string $name = "hiking";
    public string $data;
    public string $login = "root";
    public string $password = '';

    public PDO $PDO;

    public function __construct()
    {
        $this->data = "mysql:host=$this->host;dbname=$this->name";

        try {
            $this->PDO = new PDO($this->data, $this->login, $this->password);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $error) {
            die("<h1>Erreur ! Impossible de se connecter à la base de donnée</h1>" . $error->getMessage());
        }
    }


    public function get_all_hikes()
    {

        $SQL = "SELECT * FROM hikes";

        try {
            $query = $this->PDO->query($SQL);

            if ($query->rowCount() > 0) {
                while ($row = $query->fetch()) {
                    echo "<p>Id : " . $row["id"] . "</p>";
                    echo "<p>Nom : " . $row["name"] . "</p>";
                    echo "<p>Distance : " . $row["distance"] . " km</p>";
                    echo "<p>Durée : " . $row["duration"] . "</p>";
                    echo "<p>Élévation : " . $row["elevation"] . " m</p>";
                    echo "<br>";
                }
            } else {
                echo "0 résultats";
            }
        } catch (PDOException $error) {
            die("<h1>Erreur ! Impossible d'exécuter la requête</h1>" . $error->getMessage());
        }

        unset($this->PDO);
    }
}
