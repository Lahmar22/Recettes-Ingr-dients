<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    private $id_user;
        private $nom_user;
        private $specialty_user;
        private $prenom_user;
        private $email_user;
        private $password_user;

        
    protected $fillable = ['nom_user', 'prenom_user', 'specialty_user', 'email_user', 'password_user'];

        public function getIdUser() {
            return $this->id_user;
        }

        public function getNomUser() {
            return $this->nom_user;
        }

        public function getPrenomUser() {
            return $this->prenom_user;
        }

        public function getEmailUser() {
            return $this->email_user;
        }

        public function getPasswordUser() {
            return $this->password_user;
        }

        // ===== SETTERS =====
        public function setIdUser($id_user) {
            $this->id_user = $id_user;
        }

        public function setNomUser($nom_user) {
            $this->nom_user = $nom_user;
        }

        public function setPrenomUser($prenom_user) {
            $this->prenom_user = $prenom_user;
        }

        public function setEmailUser($email_user) {
            $this->email_user = $email_user;
        }

        public function setPasswordUser($password_user) {
            $this->password_user = $password_user;
        }

        public function getSpecialtyUser() {
            return $this->specialty_user;
        }

        public function setSpecialtyUser($specialty_user) {
            $this->specialty_user = $specialty_user;
        }
}


