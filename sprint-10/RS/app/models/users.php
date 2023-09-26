<?php

class users
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register()
    {
        $username = trim(strtolower(stripslashes($_POST['username'])));
        $password = $_POST['password'];
        $password = password_hash($password,PASSWORD_DEFAULT);
        $role_id = 2;

        $query = "INSERT INTO $this->table (username, password, role_id) VALUES ('$username', '$password', $role_id)";

        $this->db->query($query);
        $this->db->execute();
    }
}