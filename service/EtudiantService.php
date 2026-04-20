<?php
include_once '../connexion/Connexion.php';
include_once '../classes/Etudiant.php';
include_once '../dao/IDao.php';

class EtudiantService implements IDao {
    private $connexion;

    public function __construct() {
        $db = new Connexion();
        $this->connexion = $db->getConnexion();
    }

    public function create($o) {
        $sql = "INSERT INTO Etudiant (nom, prenom, ville, sexe) VALUES (?, ?, ?, ?)";
        $stmt = $this->connexion->prepare($sql);
        return $stmt->execute([
            $o->getNom(),
            $o->getPrenom(),
            $o->getVille(),
            $o->getSexe()
        ]);
    }

    public function findAll() {
        $sql = "SELECT * FROM Etudiant";
        $stmt = $this->connexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($o) {}
    public function update($o) {}
    public function findById($id) {}
}
?>