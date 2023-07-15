<?php
include_once "dbh-M.php";

class Player extends Dbh {

    private $id;
    private $name;
    private $icon;

    // Liefert alle Ids zurück.
    // Wenn ein Name angegeben ist, nur die zu diesem Namen passende.
    public function getId($name) {
        switch ($name) {
            case 0:
                $sql = "SELECT id FROM player";
                $stmt = $this->connect()->prepare($sql);
                $namen = $stmt->execute();

                return $namen;

                break;

            default:
                $this->name = $name;

                $sql = "SELECT id FROM player WHERE name=:name";
                $stmt = $this->connect()->prepare($sql);
                $namen = $stmt->execute(['name' => $this->name]);
                
                return $namen;
        }

    }

    // Liefert alle Namen zurück.
    // Wenn eine Id angegeben ist, nur den zu dieser Id passenden.
    public function getName($id=0) {
        switch ($id) {
            case 0:
                $sql = "SELECT name FROM player";
                $stmt = $this->connect()->prepare($sql);
                $namen = $stmt->execute();

                return $namen;

                break;

            default:
                $this->id = $id;

                $sql = "SELECT name FROM player WHERE id=:id";
                $stmt = $this->connect()->prepare($sql);
                $namen = $stmt->execute(['id' => $this->id]);
                
                return $namen;
        }
    }

    public function setPlayer($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
        
        $sql = "INSERT INTO player (name,
                                        icon)
                                VALUES (:name,
                                        :icon)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['name' => $this->name,
                        'icon' => $this->icon]);
        $stmt2 = "SELECT * FROM player ORDER BY id DESC LIMIT 1";
        $id = $this->connect()->query($stmt2);
        return $id;
    }

    // Player bearbeiten
    public function editPlayer($id, $name, $icon) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;

        $sql = "UPDATE player SET   name=:name,
                                    icon=:icon
                WHERE id=:id";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute(['id' => $this->id,
                        'name' => $this->name,
                        'icon' => $this->icon,]);
    }

    public function deletePlayer($id) {
        $this->id = $id;

        $sql = "DELETE FROM player WHERE id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(['id' => $this->id]);
    }
}