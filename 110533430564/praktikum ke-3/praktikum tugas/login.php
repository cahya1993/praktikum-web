<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

 <head>

<title>Login Sederhana</title>


<link rel="stylesheet" href="tgsprak.css" type="text/css"/>


</head>

 
<body bgcolor="#69e0f5">
<script language="JavaScript" type="text/javascript">
function cekuser(a) {

re = /^[A-Za-z]{1,}$/;<!--username harus berupa huruf, baik huruf besar ataupun kecil dan banyaknya minimal 1 huruf--!>
return re.test(a);

}

function cekpassword(a) {

re = /^[A-Za-z]{8,}$/; <!--password harus berupa huruf, baik huruf besar ataupun kecil dan banyaknya minimal 8 huruf--!>
return re.test(a);
}
function checkForm(b) {

if (!cekuser(b.username.value)) {

alert("Isilah Username dan Password sesuai ketentuan!! Username dan Password harus berupa huruf!! ");

b.username.focus();
return false;
}
if (!cekpassword(b.password.value)) {
alert("Masukkan Password dengan benar!! Password minimal terdiri dari 8 huruf!!");
b.password.focus();
return false;
}
return true;
}
</script>

<div id="wrapper">
<div id="kotak1">

<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return checkForm(this)">
<div id="user">Username <input type ="text" name ="username" /></div>
<div id="pass">Password <input type ="text" name ="password" /></div>
<div id="ok"><input type ="submit" value="OK" /></div>
<div id="batal"><input type="reset" value="Batal" /></div>
</form>
</div>
<div id="kotak2">
<?php
if (is_string($_POST['username'])){
if (($_POST['password']=='silvercyber')&&($_POST['username']=='silver')){echo 'selamat datang : ' .$_POST['username'];}
else{echo 'Username dan Password anda SALAH!!!';}
}
?>
</div>
</div>
</body>
</html> 