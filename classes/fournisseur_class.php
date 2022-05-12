<?php
include_once('./composant/head.php');
class Fournisseur extends Db
{
  public function getFournisseurs()
  {
    $sql = "SELECT * FROM fournisseurs";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function searchFournisseur($search)
  {
    $search = htmlspecialchars($search);
    $sql = "SELECT * FROM fournisseurs WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%' OR id_fnr LIKE '%$search%'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }


  public function getFournisseurByID($id)
  {
    $id = htmlspecialchars($id);
    $sql = "SELECT * FROM fournisseurs WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $result = $stmt->fetch();
    return $result;
  }

  public function addFournisseur($nom, $prenom, $email, $adresse, $telephone)
  {
    $nom = htmlspecialchars($nom);
    $prenom = htmlspecialchars($prenom);
    $email = htmlspecialchars($email);
    $adresse = htmlspecialchars($adresse);
    $telephone = htmlspecialchars($telephone);

    $sql = "INSERT INTO fournisseurs(nom, prenom, email, adresse, telephone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone]);
  }

  public function updateFournisseur($nom, $prenom, $email, $adresse, $telephone, $id)
  {
    $nom = htmlspecialchars($nom);
    $prenom = htmlspecialchars($prenom);
    $email = htmlspecialchars($email);
    $adresse = htmlspecialchars($adresse);
    $telephone = htmlspecialchars($telephone);
    $id = htmlspecialchars($id);

    $sql = "UPDATE fournisseurs SET nom = ?, prenom = ?, email = ?, adresse = ?, telephone = ? WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $id]);
  }

  public function delFournisseur($id)
  {
    $id = htmlspecialchars($id);

    $sql = "DELETE FROM fournisseurs WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}