<?php
include_once('./composant/head.php');
//include_once('./classes/db_class.php');
class User extends Db
{
  public function getUsers()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getUserByID($id)
  {
    $id = htmlspecialchars(sanitizeString($id));
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    
    $result = $stmt->fetch();
    return $result;
  }

  public function searchUser($search)
  {
    $search = htmlspecialchars(sanitizeString($search));
    $sql = "SELECT * FROM users WHERE pseudo LIKE '%$search%' OR email LIKE '%$search%' OR id LIKE '%$search%'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }

  public function addUser($pseudo, $email)
  {
    $nom = htmlspecialchars(sanitizeString($nom));
    $email = htmlspecialchars(sanitizeString($email));

    $sql = "INSERT INTO users(pseudo, email) VALUES (?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$pseudo, $email]);
  }

  public function updateUser($pseudo, $email, $id)
  {
    $pseudo = htmlspecialchars(sanitizeString($pseudo));z
    $email = htmlspecialchars(sanitizeString($email));
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "UPDATE users SET pseudo = ?, email = ?, WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$pseudo, $email, $id]);
  }

  public function delUser($id)
  {
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}