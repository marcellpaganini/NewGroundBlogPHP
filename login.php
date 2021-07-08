<style>
.form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.form input {
    width: 400px;
}
</style>
<br />
<form action="includes/form_handler/login.php" method="post" role="form" class="form">
<h3>Login</h3>
<br />
    <label>Email</label>
    <div class="form-group">
        <input type="email" name="email" placeholder="E-mail" class="form-control">
    </div>
    <label>Password</label>
    <div class="form-group">
        <input type="password" name="pwd" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="login_submit" value="Login" class="btn btn-primary">
    </div>
</form>