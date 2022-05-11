<?php
include_once('./composant/head.php');
class Client extends Db
{
  public function getClients()
  {
    $sql = "SELECT * FROM clients";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function searchClient($search)
  {
    $search = htmlspecialchars(sanitizeString($search));
    $sql = "SELECT * FROM clients WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%' OR id_client LIKE '%$search%'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }


  public function getClientByID($id)
  {
    $id = htmlspecialchars(sanitizeString($id));
    $sql = "SELECT * FROM clients WHERE id_client = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $result = $stmt->fetch();
    return $result;
  }

  public function addClient($nom, $prenom, $email, $adresse, $telephone)
  {
    $nom = htmlspecialchars(sanitizeString($nom));
    $prenom = htmlspecialchars(sanitizeString($prenom));
    $email = htmlspecialchars(sanitizeString($email));
    $adresse = htmlspecialchars(sanitizeString($adresse));
    $telephone = htmlspecialchars(sanitizeString($telephone));

    $sql = "INSERT INTO clients(nom, prenom, email, adresse, telephone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone]);
  }

  public function updateClient($nom, $prenom, $email, $adresse, $telephone, $id)
  {
    $nom = htmlspecialchars(sanitizeString($nom));
    $prenom = htmlspecialchars(sanitizeString($prenom));
    $email = htmlspecialchars(sanitizeString($email));
    $adresse = htmlspecialchars(sanitizeString($adresse));
    $telephone = htmlspecialchars(sanitizeString($telephone));
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "UPDATE clients SET nom = ?, prenom = ?, email = ?, adresse = ?, telephone = ? WHERE id_client = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $id]);
  }

  public function delClient($id)
  {
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "DELETE FROM Clients WHERE id_client = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}