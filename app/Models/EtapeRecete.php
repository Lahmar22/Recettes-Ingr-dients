<?php 
    class EtapeRecete
    {
        private $id_etapeRecete;
        private $nom_etapeRecete;
        private $description;

        public function getIdEtapeRecete(){
            return $this->id_etapeRecete;
        }

        public function getNomEtapeRecete(){
            return $this->nom_etapeRecete;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setIdEtapeRecete($id_etapeRecete){
            return $this->id_etapeRecete = $id_etapeRecete;
        }

        public function setNomEtapeRecete($nom_etapeRecete){
            return $this->nom_etapeRecete = $nom_etapeRecete;
        }

        public function setDescription($description){
            return $this->description = $description;
        }

    }