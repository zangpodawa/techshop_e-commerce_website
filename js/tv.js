$(document).ready(function () {
  $(".add-to-cart").click(function () {
    if (!currentUserId) {
      window.location = `${baseURL}/login.php`;
    }
    let productId = $(this).attr("data-product-id");
    $.ajax({
      url: "./database/queries/add_to_cart.php",
      type: "POST",
      data: {
        product_id: productId,
        quantity: 1,
      },
      success: function (data) {
        $.notify("New item added to cart", "success");
      },
    });
  });
});
