$(document).ready(function () {
  $(".add-to-wishlist").click(function () {
    let productId = $(this).attr("data-product-id");
    let quantity = $("#quantity").val();
    $.ajax({
      url: `./database/queries/add_to_wishlist.php`,
      type: "POST",
      data: {
        product_id: productId,
        quantity,
      },
      success: function (data) {
        $.notify(data, "success");
      },
    });
  });
  $(".add-to-cart").click(function () {
    let productId = $(this).attr("data-product-id");
    let quantity = $("#quantity").val();
    $.ajax({
      url: "./database/queries/add_to_cart.php",
      type: "POST",
      data: {
        product_id: productId,
        quantity,
      },
      success: function (data) {
        $.notify("New item added to cart", "success");
      },
    });
  });
  $("#add-comment").click(function () {
    let commentBody = $("#comment-body");
    let comment = commentBody.val().trim();
    let productId = $(this).attr("data-product-id");
    if (!comment) return;
    $.ajax({
      url: `./database/queries/post_comment.php`,
      type: "POST",
      data: {
        product_id: productId,
        comment_description: comment,
      },
      success: function (data) {
        $.notify(data, "success");
        commentBody.val("");
        fetchComments();
      },
    });
  });

  function fetchComments() {
    $.ajax({
      url: `./database/queries/fetch_comments.php?product_id=${productId}`,
      type: "GET",
      success: function (data) {
        let json = JSON.parse(data);
        let html = "";
      
        json.map((comment) => {
          html += ` <div class="comments">
          <p><span class="user-name">${comment.name}</span>
            <br><span class="user-comment">${comment.comment_description}</span>
          </p>
        </div>`;
        });
        $("#comment-wrapper").html(html);
      },
    });
  }
  fetchComments();
});
