<?php

namespace Sonic\Models;

use Oshop\Utils\Database;
use PDO;

class Character extends CoreModel {
    
    private $description;
    private $picture;


        public function findAll()
        {
            $pdo = Database::getPDO();
            
            $sql = "SELECT * FROM `character`;

            $pdoStatement = $pdo->query($sql);

            $characters = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Sonic\Models\Character');

            return $characters;
        }
        /**
        * Get the value of description
        */ 
        public function getDescription()
        {
            return $this->description;
        }

        /**
        * Set the value of description
        *
        * @return  self
        */ 
        public function setDescription($description)
        {
            $this->description = $description;

            return $this;
        }

        /**
        * Get the value of picture
        */ 
        public function getPicture()
        {
            return $this->picture;
        }

        /**
        * Set the value of picture
        *
        * @return  self
        */ 
        public function setPicture($picture)
        {
            $this->picture = $picture;

            return $this;
        }
}