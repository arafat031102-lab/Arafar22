<?php echo 'Admin Panel'; ?><?php
session_start();

$admin_user = "admin";
$admin_pass = "12345"; // তুমি চাইলে পরে চেঞ্জ করতে পারো

if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    if($u == $admin_user && $p == $admin_pass){
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "❌ Wrong Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body{
            font-family: Arial;
            background:#111;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        .box{
            background:#222;
            padding:30px;
            border-radius:10px;
            width:300px;
            color:white;
            box-shadow:0 0 10px #00ffcc;
        }
        input{
            width:100%;
            padding:10px;
            margin:10px 0;
            border:none;
            border-radius:5px;
        }
        button{
            width:100%;
            padding:10px;
            background:#00ffcc;
            border:none;
            border-radius:5px;
            font-weight:bold;
        }
        .error{
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>🔐 Admin Login</h2>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Admin Username" required>
        <input type="password" name="password" placeholder="Admin Password" required>
        <button name="login">Login</button>
    </form>
</div>

</body>
</html>