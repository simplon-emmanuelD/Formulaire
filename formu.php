<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Simplon;charset=utf8', 'root', 'ao0o0o0o0o0o0o0o0o0o0o0o0o0');
}
catch (Exception $e)
{
       die ('Erreur : ' .$e ->getMessage());
}

$req = $bdd->prepare('INSERT INTO Trombi(Nom, Prenom, Photo, Date, Cv, Telephone, Mail) VALUES(:Nom, :Prenom, :Photo, :Date, :Cv, :Telephone, :Mail)');

$req->execute(array(


    'Nom' => $_POST['Nom'],

    'Prenom' => $_POST['Prenom'],
    
    'Photo' => $_POST['Photo'],

    'Date' => $_POST['Date'],

    'Cv' => $_POST['Cv'],

    'Telephone' => $_POST['Telephone'],

    'Mail' => $_POST['Mail']

    ));


echo 'Merci !';

?>
