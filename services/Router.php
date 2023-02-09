<?php

class Router {
    
    private UserController $controller;
    
    public function __construct() {
        $this->controller = $controller;
    }
    
    public function getController() : UserController {
        return $this->category;
    }

    public function setController(UserController $controller) : void {
        $this->controller = $controller;
    }
    
    public function routing(string $route) : UserController {
        
        if ($route === "users") {
            $this->route -> UserController::index;
        }
        
        else if ($route === "user-create") {
            $this->route -> UserController::create;
        }
        
        else if ($route === "user-edit") {
            $this->route -> UserController::edit;
        }
        
        else {
            $this->route -> UserController::index;
        }
    }
}

?>