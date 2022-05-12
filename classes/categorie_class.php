<?php

class Categorie extends Db
{

  //READ
  public function getCategories()
  {
    $sql = "SELECT * FROM categories ORDER BY id_categ DESC";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getCategoriesByID($id)
  {
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "SELECT * FROM categories WHERE id_categ = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);

    $result = $stmt->fetch();
    return $result;
  }

  public function addCategories($label)
  {
    $label = htmlspecialchars(sanitizeString($label));

    $sql = "INSERT INTO `categories` (`id_categ `, `designation`) VALUES (NULL, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$label]);
  }

  public function delCategories($id)
  {
    $id = htmlspecialchars(sanitizeString($id));

    $sql = "DELETE FROM categories WHERE id_categ = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}