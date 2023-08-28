$(document).ready(function () {
  $(".remove-wishlist-item").click(function () {
    let id = $(this).attr("data-id");
    $.ajax({
      url: `./database/queries/remove_wishlist_item.php?id=${id}`,
      type: "get",
      success: function (data) {
        $.notify("Item removed from wishlist", "success");
        window.setTimeout(() => {
          window.location.reload();
        }, 800);
      },
    });
  });

  $(".increment-quantity,.decrement-quantity").click(function () {
    let quantityId = `quantity-${$(this).attr("data-id")}`;
    let quantity = parseInt($(`#${quantityId}`).val());
    let price = parseFloat($(this).attr("data-price"));
    let wishlistId = $(this).attr("data-id");
    const currency = $(this).attr("data-currency");
    let total = quantity * price;
    $(`#total-amount-${wishlistId}`).text(currency + total);

    $.ajax({
      url: `./database/queries/update_wish_list.php`,
      type: "POST",
      data: {
        wishlist_id: wishlistId,
        quantity,
      },
      success: function (data) {},
    });
  });

  $(".add-wishlist-to-cart").click(function () {
    let wishlistId = $(this).attr("data-id");
    let productId = $(this).attr("data-product-id");
    let quantityId = `quantity-${wishlistId}`;
    let quantity = parseInt($(`#${quantityId}`).val());
    $.ajax({
      url: `./database/queries/add_to_cart.php`,
      type: "POST",
      data: {
        product_id: productId,
        wishlist_id: wishlistId,
        quantity,
      },
      success: function (data) {
        $.notify("Item added to cart", "success");
        window.setTimeout(() => {
          window.location.reload();
        }, 800);
      },
    });
  });
});
