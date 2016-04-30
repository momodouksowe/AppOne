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
					window.alert("Error sending Request");
					return;
				}
				 // divStat.innerHTML=xhr.responseText;
				
				var obj=JSON.parse(xhr.responseText);
				

				if(obj.result==0){
					window.alert(obj.message);
				}else{
					
					if(document.getElementById("admin").checked ==true){
						window.location.assign( "equipment/equipmentlist.php");
						
				   }else{
					// redirects to the rport page
					window.alert("REDIRECT ME TO THE REPORT PAGE!");
						
				  }
				
				currentObject=null;
				}
			
			}
		function Admin(){
				var currentName=$('#username').val();
				var password=$('#password').val();

				if((password=="") || (currentName=="")){
					return window.alert("fill the empty field");
				}

				if(password.length < 1){
					return window.alert("Passwords must be at least 1 character");
				}
				// if (!/[a-z]/.test(password) || !/[A-Z]/.test(password) || !/[0-9]/.test(password)){
				// 	return window.alert("Passwords require a mixture of small letters, capital letter and numbers");
				// }

				if(currentName.length < 6){
					return window.alert("Usernames must be at least 6 characters");
				}
				if (!/[a-z.]/.test(currentName)){
					return window.alert("Usernames must be only small letters and a dot!");
				}
				if (document.getElementById("user").checked ==true){
				    var usertype=$('#user').val(); 

			    }
			    if (document.getElementById("admin").checked ==true){
				var usertype=$('#admin').val();
			    }
			    if (usertype==null){
			  	return window.alert("Select your usertype");
			    }

				var theUrl="itlogin.php?cmd=1&id="+password +"&username="+currentName +"&usertype="+usertype;
				// window.alert(theUrl);
				$.ajax(theUrl, {async:true,complete:AdminComplete});
			}
			
		</script>

		<div id = "headerBar">
		<div id = "logo">
		<img src="images/logo.png"></img>
		</div>

		<div id = "menu">
		<ul>
		<li><a href="index.html">About Us</a></li>
		</ul>
		</div>
		</div>
</head>

<body>
  
  <!-- <div id = "body"> -->

  <div id = "welcomeText">

  <h1> Welcome To LabAid</h1>
  <p>
  Get instant help with IT related issues! <br>
  Log in your problems and picture help rolling at you!
  </p>
  </div>

<!-- <div class="status" id="divStat">Loading..</div> 
 -->
<div id="wrapper">

<div name="login-form" class="login-form" action="" method="post">

	
    <div class="header">
    <h1>Login To LabApp</h1>
    <!-- <span>Enter your username & password</span> -->
    </div>
    <div class="content">
	<input id="username" type="text" class="input username"  placeholder="username" />
   <input id="password" type="password" class="input password"  placeholder="password"/> <br><br>
                   <!-- <span><a href="#" style="text-decoration:none;">Forget Password?</a></span> -->
    </div>
    <div class="footer">
    <input type="submit" name="submit" value="Login" class="button" onclick="Admin()">
    <input type="button" name="submit" value="Login As" class="register" />
    					  <input id="user" type="radio" name="radio"value="user">User
						  <input id="admin" type="radio" name="radio"value="Admin">Admin
    </div>
</div>

</div>

<div id = "footer">
<h4> Copyright--LabAid!</h4>
</div>
</body>
  
</html>

	<!-- <h3> Admin Login </h3> -->
<!-- 	Username: <input id= 'username' type= "text" name ="username"> </br></br>
	Password: <input id = 'password' type= "text" name ="password"></br></br>
	Sign in as: <input id = "user" type="radio" name="radio"value="user">User
	<input id = "admin" type="radio" name="radio"value="Admin">Admin
	<button onclick="Admin()">Submit</button> -->