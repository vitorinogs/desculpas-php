<?php

class User {
    
    function __construct(mysqli $mysqli){
        $this->db = $mysqli;
    }
    
    public function listar(){
        
    }
    
    public function insert(){
        
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}