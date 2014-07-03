<?php
  include '../api/connection.php';
  header('Content-type: text/html; charset=utf-8');

  class Active {
    private $TableName;

    public function DefaultTableName()
    {
      return strtolower(get_class($this)).'s';
    }

    static function find($id)
    {
      $query = "SELECT * FROM " . strtolower(get_called_class()) . "s WHERE ID = " . intval($id) . " LIMIT 1;";
      $response = $_GET['link']->query($query);
      $row =  mysqli_fetch_array($response);
      $pr_id = $row['id'];
      $pr_title = $row['title'];
      $pr_content = $row['content'];
      $product = new Product($pr_id, $pr_title, $pr_content);
      return $product;
    }

    public function save()
    {
      $query = "INSERT INTO " . strtolower(get_called_class()) . "s VALUES (NULL, \"" . $this->title . "\", \"" . $this->content . "\");";
      if($_GET['link']->query($query)){
        $result = "true";
      } else {
        $result = "false";
      }

      return $query;
    }

    public static function all()
    {
      $array = array();
      $query = "SELECT * FROM " . strtolower(get_called_class()) . "s;";
      if($response = $_GET['link']->query($query)) {
        while ($row = $response->fetch_assoc()) {
          $object = new Product($row['id'], $row['title'], $row['content']);
          array_push($array, $object);
        }
      }
      return $array;
    }

    public function destroy()
    {
      $query = "DELETE FROM " . $this->DefaultTableName() . " WHERE id = " . $this->id . ";";
      $_GET['link']->query($query);
      return $query;
    }

    public static function remove($_id)
    {
      $query = "DELETE FROM " . strtolower(get_called_class()) . "s WHERE id = " . $_id . ";";
      $_GET['link']->query($query);
      return $query;
    }
  }
?>