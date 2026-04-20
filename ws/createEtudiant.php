<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once '../service/EtudiantService.php';
include_once '../classes/Etudiant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];

    $es = new EtudiantService();

    $etudiant = new Etudiant(0, $nom, $prenom, $ville, $sexe);
    $es->create($etudiant);

    header('Content-Type: application/json');
    echo json_encode($es->findAll());

} else {
    echo "Utilise POST (pas navigateur)";
}
?>