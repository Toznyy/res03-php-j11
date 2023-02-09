<?php

require("services/Router.php");
require("models/User.php");
require("managers/AbstractManager.php");
require("managers/UserManager.php");


$newUser = new User("test@test.fr", "test", "test");
$newUserManager = new UserManager("anthonycormier_phpj11", "3306", "b.3wa.io", "anthonycormier", "f7af5a3387016b3d12b42619a8ad2703");
$insert = $newUserManager->insertUser($newUser);
$insert->setEmail("modif@test.fr");
$new = $newUserManager->editUser($insert);
var_dump($newUser);
var_dump($insert);
var_dump($new);

?>