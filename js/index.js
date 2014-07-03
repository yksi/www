$(document).ready(function() {

  pane = $('.main-pane')
  product_list = $('<ul class="product-list"></ul>')

  dialog = $('#new_product_modal').dialog({
    autoOpen: false,
    height: 500,
    width: 500,
    modal: true
  })

  $( "#create-product-btn" ).click(function() {
    dialog.dialog( "open" );
  });

  $( "#for-users-btn" ).click(function() {
    drawForUsers()
  });

  $( "#draw-list-btn" ).click(function() {
    drawList()
  });

  $('.remove_product').click(function() {
    alert(1)
  })

  $('#new_product_submit').click(function() {
    $title = $('#new_product_title').val()
    $content = $('#new_product_content').val()

    $.ajax({
      url: "../api/create_product.php",
      type: 'POST',
      data: {
        title: $title,
        content: $content
      },
      success: function(data) {
        drawList();
        $('#new_product_title').val('')
        $('#new_product_content').val('')
        dialog.dialog( "close" );
      }
    })
  })
    drawList();
})

$(document).on('click', '.rproduct', function(e) {
  $.ajax({
    url: '../api/delete_product.php',
    data: {
      id: $(this).data('id')
    },
    success: function(data) {
      drawList()
      sdialog.dialog( "close" )
    }
  })
})

$(document).on('click', '.product-details', function() {
  $.ajax({
    url: '../api/get_product.php',
    data: {
      id: $(this).data('id')
    },
    success: function(data) {
      console.log($(this).data('id'))
      sdialog = $(data).dialog()
    }
  })
})

function drawList() {
  pane.html(product_list)
  product_list.html('')
  $.ajax({
    url: '../api/create_list.php',
    success: function(data) {
      product_list.append(data)
    }
  })
}

function drawForUsers() {
  pane.html('<h1>For users</h1>')
}



