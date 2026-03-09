<?php
session_start();

$error="";

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin" && $password=="1234")
    {
        $_SESSION['admin']=$username;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error="Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#3b82f6,#6366f1);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:Arial;
}

.login-card{
width:380px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.login-header{
background:#1e293b;
color:white;
border-radius:15px 15px 0 0;
}

</style>

</head>

<body>

<div class="card login-card">

<div class="card-header text-center login-header p-3">

<h4>Admin Login</h4>

</div>

<div class="card-body p-4">

<?php if($error!=""){ ?>

<div class="alert alert-danger">
<?php echo $error; ?>
</div>

<?php } ?>

<form method="POST">

<div class="mb-3">

<label class="form-label">Username</label>

<input type="text" name="username" class="form-control" required>

</div>

<div class="mb-3">

<label class="form-label">Password</label>

<input type="password" name="password" class="form-control" required>

</div>

<button class="btn btn-primary w-100" name="login">

Login

</button>

</form>

</div>

</div>

</body>

</html>