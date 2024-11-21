<?php


class Usuario extends Database
{
    private $table = 'usuarios';

    public function __construct($host = 'localhost', $dbname = 'ipp', $username = 'root', $password = '')
    {
        parent::__construct($this->table, $host, $dbname, $username, $password);
    }

    public function iniciarSesion($email, $password)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password";
        $stmt = parent::prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }






    // // Métodos específicos de Usuario (si es necesario)
    // public function iniciarSesion($email, $password)
    // {
    //     $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password";
    //     $stmt = parent::prepare($sql);
    //     $stmt->execute([
    //         ':email' => $email,
    //         ':password' => $password
    //     ]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }
}
