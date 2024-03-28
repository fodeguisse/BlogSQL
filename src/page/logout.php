<?php
Granted();
/**supprime les informations de session stockées concernant l'utilisateur. */
unset($_SESSION['user']);
setFlashMessage('success','Vous êtes déconnecté');
header('Location: index.php?page=login');