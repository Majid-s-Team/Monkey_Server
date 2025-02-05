<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<style>

body
{
    background: url('/storage/monkeybg.png') #1b8c1b66;
	background-size: 5%;
}
.maincontainer
{
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100vw;
	height: 100vh;
}

.monkeylogin
{
	width: 350px;
	height: 500px;
	box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
	display: flex;
	align-items: center;
	flex-direction: column;
	background-color: white;
	border-radius: 40px;
}
.animcon
{
	background-color: white;

	overflow: hidden;
	/*overflow hidden because to keep the hand image hidden below*/
	margin-top:20px;
	height: 170px;
	width: 170px;
	border-radius: 50%;
    background-image: url('/storage/monkey.gif');
	background-size: 90% 85%;
	background-repeat: no-repeat;
	background-position: center;
	box-shadow: 0 10px 25px rgba(0, 0, 0, .2);

	/*flex center to keep the hand image in the center*/
	display: flex;
	align-items: center;
	flex-direction: column;
}
.animcon img
{
	margin-top:110%;
	height: 170px;
	width: 170px;
	transition: 1s;
}

.formcon
{
	margin-top: 38px;
}
input
{
	height: 40px;
	width: 300px;
	/*background-color: #254E58;*/
	border-radius: 20px;
	border:none;
	color: #5a5449;
	text-indent: 15px;
	font-size: 100%;
	box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
	outline: none;
}
input::placeholder
{
	color:lightgrey;
	font-size: 100%;
	font-weight: lighter;
	text-indent: 15px;
}
.sbutton
{
	text-indent: 0px;
	height: 40px;
	width: 300px;
	margin-top: 10px;
	background-color: #1b8c1b66;
	transition: "2s";
	border: none;
	color: white;
	font-weight: bolder;
	box-shadow: 0 10px 25px rgba(0, 0, 0, .2);
	outline: none;

}
.sbutton:hover
{
	color: #5a5449;
	cursor: pointer;
}

.foot
{
	color: #5a5449;
	font-weight: lighter;
	margin-top: 40px;
}

</style>
<body>
<div class="maincontainer">
<div class="monkeylogin">
	<div class="animcon" id="animcon">
		<img id="hands" src="/storage/hands.png"/>
	</div>
	<div class="formcon">
	<form method="POST" action="{{ route('login') }}">
    @csrf

    <input type="email" id="mail" name="email" onclick="openeye();" class="tb" placeholder="Email" autocomplete="off"/>
		<br/>
		<br/>
		<input type="password" id="pwdbar" onclick="closeye();" name="password" class="tb" placeholder="Password" />
		<br/>
		<br/>
		<input type="submit" name="" class="sbutton" value="L O G I N" />
	</form>
	</div>
		<footer class="foot"><a style="color: #bababa; text-decoration: none;" href="#"></a></footer>
</div>
</div>
<script type="text/javascript" src="script.js"></script>
</body>

<script>

var x=document.getElementById("hands");
var y=document.getElementById("animcon");
function closeye()
{
	y.style.backgroundImage="url('/storage/monkey_pwd.gif');";
	x.style.marginTop="0%";
}
function openeye()
{
    y.style.backgroundImage = "url('/storage/monkey.gif')";
	x.style.marginTop="110%";
}
</script>
</html>