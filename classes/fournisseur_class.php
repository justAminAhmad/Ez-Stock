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
    $search = htmlspecialchars(sanitizeString($search));
    $sql = "SELECT * FROM fournisseurs WHERE nom LIKE '%$search%' OR prenom LIKE '%$search%' OR id_fnr LIKE '%$search%'";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    }
  }


  public function getFournisseurByID($id)
  {
    $id = htmlspecialchars(sanitizeString($id));
    $sql = "SELECT * FROM fournisseurs WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $result = $stmt->fetch();
    return $result;
  }

  public function addFournisseur($nom, $prenom, $email, $adresse, $telephone)
  {
    $nom = htmlspecialchars(sanitizeString($nom));
    $prenom = htmlspecialchars(sanitizeString($prenom));
    $email = htmlspecialchars(sanitizeString($email));
    $adresse = htmlspecialchars(sanitizeString($adresse));
    $telephone = htmlspecialchars(sanitizeString($telephone));

    $sql = "INSERT INTO fournisseurs(nom, prenom, email, adresse, telephone) VALUES (?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone]);
  }

  public function updateFournisseur($nom, $prenom, $email, $adresse, $telephone, $id)
  {
    $nom = htmlspecialchars(sanitizeString($nom));
    $prenom = htmlspecialchars(sanitizeString($prenom));
    $email = htmlspecialchars(sanitizeString($email));
    $adresse = htmlspecialchars(sanitizeString($adresse));
    $telephone = htmlspecialchars(sanitizeString($telephone));
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "UPDATE fournisseurs SET nom = ?, prenom = ?, email = ?, adresse = ?, telephone = ? WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $adresse, $telephone, $id]);
  }

  public function delFournisseur($id)
  {
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "DELETE FROM fournisseurs WHERE id_fnr = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}