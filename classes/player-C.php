<?php
include_once 'player-M.php';

class PlayerContr {
    function getId($name=0) {
        $p = new Player();
        $ids = $p->getId($name);
        return $ids;
    }

    function getName($id=0) {
        $p = new Player();
        $names = $p->getName($id);
        return $names;
    }

    function setPlayer ($name, $icon) {
        $p = new Player();
        $id = $p->setPlayer($name, $icon);
        return $id;
    }

    function editPlayer($id, $name, $icon) {
        $p = new Player();
        $p->editPlayer($id, $name, $icon);
    }

    function deletePlayer($id) {
        $p = new Player();
        $p->deletePlayer($id);
    }
}