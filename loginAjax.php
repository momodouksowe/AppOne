<html>
<head>
<title>
Admin
</title>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
		<script type="text/javascript">


		function AdminComplete(xhr,status){
				if(status!="success"){
					divStat.innerHTML="error sending request";
					return;
				}
				// debugger
				var obj=$.parseJSON(xhr.responseText);

				if(obj.result==0){

					divStat.innerHTML=obj.message;	
				}else{
					
					divStat.innerHTML="username changed";
					window.location="..equipment/equipmentlist.php";
						
				}
				
				currentObject=null;	
			
			}

		function Admin(){

				var currentName=$('#username').val();
				var password=$('#password').val();
				if (document.getElementById("user").checked ==true){
				var usertype=$('#user').val(); 

			}if (document.getElementById("admin").checked ==true){
				var usertype=$('#admin').val();
			}
				// var usertype =$('#admin').val();

				var theUrl="itlogin.php?cmd=1&id="+password +"&username="+currentName +"&usertype="+usertype;
			 // debugger
			 window.alert(theUrl);
				var variable = $.ajax(theUrl,
					{async:true,complete:AdminComplete}
					);

				
			}
		</script>
</head>
<body>

<center>
	<h3> Admin Login </h3>
	Username: <input id= 'username' type= "text" name ="username"> </br></br>
	Password: <input id = 'password' type= "text" name ="password"></br></br>
	Sign in as: <input id = "user" type="radio" name="radio"value="user">User
	<input id = "admin" type="radio" name="radio"value="Admin">Admin
	<button onclick="Admin()">Submit</button>
    

	<div class="status" id="divStat">Loading..</div> 
</center>

</body>
</html>