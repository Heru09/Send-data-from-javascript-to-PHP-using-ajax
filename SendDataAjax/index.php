<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form>
    <div><input type="text" name="name" id="name" placeholder="Name"></div>
    <div><input type="text" name="email" id="email" placeholder="email"></div>
    <div><textarea name="message" id="message" placeholder="message"></textarea></div>
    <input type="submit" name="send" id="send" value="send">
    </form>  
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#send').on('click',function(){
			var name = $('#name').val();
			var email = $('#email').val();
			var message = $('#message').val();
			$.ajax({
                url: 'process.php',
                type: 'POST',
                data: {value: $("#name").val()},
		        success:function(data){
		       	 $("#name").html(data);
		         console.log(data);
		        }
            });
   			return false;
		});
	});
</script>
