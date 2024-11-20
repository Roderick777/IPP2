<?php
/* @autor Rodrigo González */

class Database
{
  private $conn; // Conexión PDO
  private $table;
  private $attributes = [];

  public function __construct($table, $host = 'localhost', $dbname = 'ipp', $username = 'root', $password = '')
  {
    $this->table = $table;

    // Configurar la conexión a MySQL con PDO
    try {
      $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Error de conexión: " . $e->getMessage());
    }
  }

  // Métodos mágicos para setters y getters
  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }

  public function __get($name)
  {
    return $this->attributes[$name] ?? null;
  }

  // Insertar nuevo registro
  public function insert()
  {
    $columns = array_keys($this->attributes);
    $placeholders = array_map(fn($col) => ":$col", $columns);

    $sql = "INSERT INTO {$this->table} (" . implode(', ', $columns) . ") 
                VALUES (" . implode(', ', $placeholders) . ")";
    $stmt = $this->conn->prepare($sql);

    return $stmt->execute($this->prepareParams());
  }

  // Obtener registro por ID
  public function select($id)
  {
    $sql = "SELECT * FROM {$this->table} WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Actualizar un registro
  public function update($id)
  {
    $columns = array_keys($this->attributes);
    $setClause = implode(', ', array_map(fn($col) => "$col = :$col", $columns));

    $sql = "UPDATE {$this->table} SET $setClause WHERE id = :id";
    $stmt = $this->conn->prepare($sql);

    $params = $this->prepareParams();
    $params[':id'] = $id;

    return $stmt->execute($params);
  }

  // Eliminar un registro
  public function delete($id)
  {
    $sql = "DELETE FROM {$this->table} WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([':id' => $id]);
  }

  // Obtener todos los registros
  public function getAll()
  {
    $sql = "SELECT * FROM {$this->table}";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function prepare($sql)
  {
    return $this->conn->prepare($sql); // Aquí es donde invocas el prepare de PDO
  }

  // Preparar los parámetros para las consultas
  private function prepareParams()
  {
    $params = [];
    foreach ($this->attributes as $key => $value) {
      $params[":$key"] = $value;
    }
    return $params;
  }
}
