<?php

class Membre{
    var $email;
    var $nom;
    var $prenom;
    var $password;
    var $pseudo;


    public function __construct(){

    }

    public function saveMembre(){
        $bdd=new pdo ('mysql:dbname=etudiant; host=localhost','root','');
        $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email,prenom,nom, date_inscription) VALUES(:pseudo, :pass, :email, :prenom, :nom, CURDATE())');
        try{
            $result = $req->execute(array(
                'pseudo' => $this->pseudo,
                'pass' => $this->password,
                'prenom' => $this->prenom,
                'nom' => $this->nom,
                'email' => $this->email,
            ));
        }catch( PDOException $e) {
            var_dump($e);
            return false;
        }
        return $result;
    }

    /**
     * @param $pPseudo le Pseudo dont on veut verifier la presence dans la bdd
     * @return bool vrai si existant sinon faux
     */
    public static function getMembreByPseudo($pPseudo){
        $bdd=new pdo ('mysql:dbname=etudiant; host=localhost','root','');
        $req = $bdd->prepare('select * from membres where pseudo = :pseudo');
        try{
            $result = $req->execute(array(
                'pseudo' => $pPseudo  // <= permet de remplacer le ":pseudo" de la ligne 39
            ));
        }catch( PDOException $e) {
            var_dump($e);
            return false;
        }

        return $result; // si un resultat a été trouvé retourne la ligne
    }
}

?>