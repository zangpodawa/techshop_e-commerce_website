<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment Board</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">Comment Board</h1>

    <!-- Comment Form -->
    <form id="commentForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" required>
      </div>
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" id="comment" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Post Comment</button>
    </form>

    <!-- Comment List -->
    <div id="commentList" class="mt-5">
      <!-- Comments will be dynamically added here -->
    </div>
  </div>

  <!-- Bootstrap JS (Optional, only required if you want to add interactivity) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript to handle comment posting and listing (you need to implement the server-side code) -->
  <script>
    // Function to handle comment submission
    document.getElementById('commentForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const name = document.getElementById('name').value;
      const comment = document.getElementById('comment').value;
      if (!name || !comment) {
        alert('Please enter your name and comment before submitting.');
        return;
      }

      // Send the comment data to the server using AJAX or fetch API
      // You need to implement the server-side code to handle comment storage

      // For demonstration purposes, we'll just add the comment to the list on the client-side
      const newComment = `<div class="card mb-2">
                            <div class="card-body">
                              <h5 class="card-title">${name}</h5>
                              <p class="card-text">${comment}</p>
                            </div>
                          </div>`;
      document.getElementById('commentList').insertAdjacentHTML('beforeend', newComment);

      // Clear the form after successful submission
      document.getElementById('name').value = '';
      document.getElementById('comment').value = '';
    });
  </script>
</body>
</html>
