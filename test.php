<?php
echo password_hash("nada", PASSWORD_DEFAULT);
echo "<br/>";
$hash = password_hash("nada", PASSWORD_DEFAULT);
echo $hash;
echo "<br/>";
if (password_verify('mot_de_passe', $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>