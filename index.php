<!DOCTYPE html>
<html>
<head>
    <?php
      header('Content-type: text/html; charset=utf-8');
    ?>
    <title>Products service</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/skeleton.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

</head>

<body>

  <div class="container">
    <img src="img/logo.png" class="center">
  </div>
  <div class="sixteen columns">
    <div class="section remove-top">
      <div id="main-menu" class="menu-desktop-navigation-container">
        <ul id="menu" class="menu"><li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271"><a href="#" id="draw-list-btn">Products list</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-282"><a href="#" id="create-product-btn">Add product</a></li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-274"><a href="#" id="for-users-btn">For user</a></li>
        </ul>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container" >
    <div class="main-pane"></div>
    </div>
  <div title="Product title" id="new_product_modal">
    <div>
        <h1>Create new product</h1>
        <input type="text" id="new_product_title" placeholder="Product title">
        <br>
        <textarea id="new_product_content" placeholder="Product description"></textarea>
        <br>
        <button id="new_product_submit" class="btn-side right">Create</button>
        <div class="product_message"></div>
      </div>
  </div>


  </table>
</body>

</html>