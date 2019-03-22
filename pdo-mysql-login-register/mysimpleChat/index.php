<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat System</title>


	<link rel="stylesheet" href="style.css" type="text/css" />


	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</head>
<body style="
	background: url(https://images.unsplash.com/photo-1551376347-075b0121a65b?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80);-moz-background-size: 100%; /* Firefox 3.6+ */
   -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
   -o-background-size: 100%; /* Opera 9.6+ */
   background-size: 100%; /* Современные браузеры */
   background-attachment: fixed;
   background-size: cover;">
	


	
	<div class="chathistory" id="autoscroll"></div>


	

		<button id="sendButton" onclick="onclickMessage()" >send</button>
		<form action="" method="POST">
			<input class="txtarea" class="message" id="messageArea" onkeydown="onKeyDownMessage()" name="message"/>
		</form>
		<div id="roomsContainer" >
			<button id="login" onclick="location.href = '../login.php';">Log In</button>
		</div>





	

	<script>

window.setInterval(function() {
  var elem = document.getElementById('autoscroll');
  elem.scrollTop = elem.scrollHeight;
}, 100);

		$(document).ready(function(){
			loadChat();
		});


		

		function onKeyDownMessage(){
			var message = $("#messageArea").val();
				
			if (event.keyCode == 13 && message != ""){
					$.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){		
					loadChat();
					$('#messageArea').val('');

				});

			}

		}


		function onclickMessage(){
			var message = $("#messageArea").val();
				if(message != ""){
					$.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){		
					loadChat();
					$('#messageArea').val('');

				});
			}		
		}

		function loadChat()
		{
			$.post('handlers/ajax.php?action=getChat', function(response){
				
				$('.chathistory').html(response);

			});
		}


		setInterval(function(){
			loadChat();
		}, 500);

	</script>


</body>
</html>