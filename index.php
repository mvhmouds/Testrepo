<?php
function validerEtCrypterMotDePasse($motDePasse) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }
    
    // Créer le "salt" statique
    $salt = "ABC1234@";

    // Concaténer le "salt" au mot de passe
    $motDePasseAvecSalt = $motDePasse . $salt;

    // Chiffrer le mot de passe (vous pouvez utiliser une méthode de hachage, par exemple, MD5)
    $motDePasseCrypte = md5($motDePasseAvecSalt);

    // Simuler un mot de passe correct
    $motDePasseCorrect = md5("MotDePasseCorrect" . $salt);

    // Comparer le mot de passe entré avec le mot de passe correct
    if ($motDePasseCrypte === $motDePasseCorrect) {
        return "Mot de passe correct. Accès autorisé !";
    } else {
        return "Mot de passe incorrect. Accès refusé.";
    }
}

// Exemple d'utilisation
$motDePasseSaisi = "MonMotDePasse";
$message = validerEtCrypterMotDePasse($motDePasseSaisi);
echo "Salt : ABC1234@<br>";
echo "Mot de passe chiffré : " . md5($motDePasseSaisi . "ABC1234@") . "<br>";
echo $message;
?>
