<?php

class User extends Db
{
  private $secret_key = "UserKey2828";
  //READ
  public function getUsers()
  {
    $sql = "SELECT * FROM user";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getUserByID($id)
  {
    $id = htmlspecialchars($id);
    $sql = "SELECT * FROM user WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }
  // get User by token
  public function getUserByToken($token)
  {
    $token = htmlspecialchars($token);

    $sql = "SELECT * FROM user WHERE token = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$token]);

    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }

  public function updateUser($pseudo, $email, $id)
  {
    $nom = htmlspecialchars($pseudo);
    $email = htmlspecialchars($email);
    $id = htmlspecialchars($id);

    $sql = "UPDATE user SET pseudo = ?, email = ?, WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$pseudo, $email, $id]);
  }

  public function addUser($pseudo, $email, $password)
  {
    $nom = htmlspecialchars($pseudo);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    //echo '<script>alert("' . $password . '");</script>';
    // encrypt password using sha256
    $password = hash('sha256', $password . $this->secret_key);
    $sql = "INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, token) VALUES (NULL, ?, ?, ?, NULL);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$pseudo, $email, $password]);
  }
  // update token after login
  public function updateToken($pseudo, $token)
  {
    $sql = "UPDATE `user` SET token = ? WHERE pseudo = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$token, $pseudo]);
  }

  // authenticate user
  public function authenticateUser($pseudo, $password)
  {
    $pseudo = htmlspecialchars($pseudo);
    $password = htmlspecialchars($password);

    $sql = "SELECT * FROM `user` WHERE pseudo = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$pseudo]);

    $result = $stmt->fetch();
    if ($result) {
      // check if password is correct
      $hash = hash('sha256', $password . $this->secret_key);
      if ($hash == $result['password']) {
        // create a token
        $token = hash('sha256', $result['id'] . $this->secret_key);
        // update token
        $this->updateToken($result['pseudo'], $token);
        // return token
        return $token;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function delUser($id)
  {
    $id = htmlspecialchars($id);

    $sql = "DELETE FROM user WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }

  //END DELETE
}