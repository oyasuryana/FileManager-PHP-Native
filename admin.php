<h1>Login Admin</h1>
<p>Silahkan login dengan username dan password</p>
<form method="POST">
<div class="mb-3">
	<label class="fw-bold mb-1">Username</label>	
	<input type="text" name="txtUsername" class="form-control" placeholder="Masukan username andaa" autocomplete="off" required>
</div>
<div class="mb-3">
	<label class="fw-bold mb-1">Password</label>	
	<input type="password" name="txtPassword" class="form-control" placeholder="Masukan password anda" autocomplete="off" />
</div>

<div class="mb-3">
	<button type="submit" name="btnLogin" class="btn btn-danger">Login</button> 
</div>	
</form>

<?php
if(isset($_POST['btnLogin'])){

if($_POST['txtUsername']==$user && md5($_POST['txtPassword'])==$pass){

	$_SESSION['isLogin']=true;
	echo '<p align="center" class="text-success"><img src="assets/login.gif"/><br/>loging ....</p>';
	echo '<meta http-equiv="refresh" content="2; url=index.php?pesan=Login sukses">';

} else {
	echo 'false';	
}


}
?>