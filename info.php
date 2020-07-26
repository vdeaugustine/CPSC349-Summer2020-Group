<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />

    <title>Publichat</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.7.0/modern-normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/styles.css" />
  </head>

<?
session_start();
$nickname = $_SESSION['nickname'];
function loginForm(){
    echo'<div class="overall-layout">
      <form name="main-form" action="chat.php" method="post">
        <h1 class="mt-5">Public Display Name</h1>
        <div class="form-group">
          <label>Nickname</label>
          <input
            class="form-control"
            id="nickname"
            name="nickname"
            placeholder="Enter nickname"
          />
          <small class="form-text text-muted"
            >This will be displayed to other users in the chat.</small
          >
        </div>
        <hr class="mt-5 mb-5" />

        <h1>Join a Room</h1>
        <div class="form-group">
          <label
            >Join a known room or join a random room by leaving the field
            empty</label
          >
          <input
            type="text"
            id="roomID"
            name="roomID"
            class="form-control"
            placeholder="Room ID"
          />
        </div>
        <button type="submit" class="btn btn-primary">Join</button>
        <hr class="mt-5 mb-5" />
        <h1>Create a Room</h1>
        <p>Create a room with a generated ID to share</p>
        <button type="submit" id="create" class="btn btn-primary">
          Create a Room
        </button>
      </form>
    </div>';
   
}
?>
</html>