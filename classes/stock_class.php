<?php

class Stock extends Db
{

  //READ
  public function getStocks()
  {
    $sql = "SELECT * FROM stocks";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while ($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getStockByID($id)
  {
    $id = htmlspecialchars($id);

    $sql = "SELECT * FROM stocks WHERE id_stock = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    // send result to a variable and return it
    $result = $stmt->fetch();
    return $result;
  }


  //CREATE

  public function addStock($designation, $quantite, $prix, $id_categ, $type)
  {
    $designation = htmlspecialchars($designation);
    $quantite = htmlspecialchars($quantite);
    $prix = htmlspecialchars($prix);
    $id_categ = htmlspecialchars($id_categ);
    $type = htmlspecialchars($type);

    $sql = "INSERT INTO `stocks` (`id_stock`, `designation`, `quantite`, `prix`, `id_categ`, `type`) VALUES (NULL, ?, ?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $id_categ, $type]);
  }

  //END CREATE

  // UPDATE
  public function updateStock($id_stock, $designation, $quantite, $prix, $id_categ, $type, $id_fnr)
  {
    $id = htmlspecialchars($id);
    $designation = htmlspecialchars($designation);
    $quantite = htmlspecialchars($quantite);
    $prix = htmlspecialchars($prix);
    $id_categ = htmlspecialchars($id_categ);
    $type = htmlspecialchars($type);
    $id_fnr = htmlspecialchars($id_fnr);

    $sql = "UPDATE `stocks` SET `designation` = ?, `quantite` = ?, `prix` = ?, `id_categ` = ?, `type` = ?, `id_fnr` = ? WHERE `stocks`.`id_stock` = ?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$designation, $quantite, $prix, $id_categ, $type, $id_fnr, $id_stock]);
  }
  // update quantity of stock
  public function updateStockQuantite($quantite, $id)
  {
    $quantite = htmlspecialchars($quantite);
    $id = htmlspecialchars($id);

    $sql = "UPDATE `stocks` SET `quantite` = ? WHERE `stocks`.`id_stock` = ?;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$quantite, $id]);
  }
  //END UPDATE

  //DELETE
  public function delStock($id)
  {
    $id = htmlspecialchars($id);

    $sql = "DELETE FROM stocks WHERE id_stock = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
  //END DELETE
}