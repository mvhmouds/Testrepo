<?php
function validerEtCrypterMotDePasse($motDePasseSaisi) {
    // Vérifier la longueur du mot de passe
    if (strlen($motDePasseSaisi) < 6 || strlen($motDePasseSaisi) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Créer le "salt" statique
    $salt = "ABC1234@";

    // Concaténer le "salt" au mot de passe
    $motDePasseAvecSalt = $motDePasseSaisi . $salt;

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

if (isset($_POST['motDePasse'])) {
    $motDePasseSaisi = $_POST['motDePasse'];
    $message = validerEtCrypterMotDePasse($motDePasseSaisi);
    echo "Salt : ABC1234@<br>";
    echo "Mot de passe chiffré : " . md5($motDePasseSaisi . "ABC1234@") . "<br>";
    echo $message;
} else {
    // Afficher le formulaire pour saisir le mot de passe
    echo '<form method="POST" action="">
    Entrez le mot de passe : <input type="password" name="motDePasse">
    <input type="submit" value="Valider">
    </form>';
}
?>
