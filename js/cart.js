$(document).ready(function () {
  $(".btn-plus,.btn-minus").click(function () {
    let cartId = $(this).attr("data-cart-id");
    let quantity = $(`#cart-quantity-${cartId}`).val();
    let price = $(this).attr("data-price");
    let currency = $(this).attr("data-currency");
    let total = parseInt(quantity) * parseFloat(price);
    $(`#total-${cartId}`).text(currency + total);

    $.ajax({
      url: "./database/queries/update_cart_items.php",
      type: "post",
      data: {
        cart_id: cartId,
        quantity,
        get_total: 1,
      },
      success: function (data) {
        let json = JSON.parse(data);
        console.log(json);
        $("#subtotal").text("$" + json.total);
        $("#total").text("$" + (json.total + 10));
      },
    });
  });

  $(".remove-cart").click(function () {
    let cartId = $(this).attr("data-cart-id");
    $.ajax({
      url: `./database/queries/clear_cart.php?cart_id=${cartId}`,
      type: "get",

      success: function (data) {
        $.notify("Item removed from cart", "success");
        window.setTimeout(() => {
          window.location.reload();
        }, 800);
      },
    });
  });
});
