<?php
  include 'active.php';
  class Product extends Active
  {
    public $id;
    public $title;
    public $content;

    function __construct($_id, $_title, $_content)
    {
      $this->content = $_content;
      $this->title = $_title;
      $this->id = $_id;
    }
  }
?>