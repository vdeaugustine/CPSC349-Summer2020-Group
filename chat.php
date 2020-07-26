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
    <body>
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <?php echo $_POST["nickname"]; ?><br></p>
        <h1>Room #<?php echo $_POST["roomID"]; ?><b></b></h1>
        <div style="clear:both"></div>
    </div>    
    <div id="chatbox">
    <?php
if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?>
    </div>
    <form id="chat-form" action="" name="message">
        <div class="input-group mb-3">
          <input
            name="usermsg"
            type="text"
            id="usermsg"
            class="form-control"
            placeholder="Type your message here"
          />
          <?php 
          $username = $_POST["nickname"];
          ?>
          <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        
        </div>
      </form>

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});
$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
</script>
</body>
</html>