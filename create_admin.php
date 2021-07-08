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
<form action="includes/form_handler/create.php" method="post" role="form" class="form" autocomplete="off">
<h3>Create a new Admin</h3>
<br />
    <label>Username</label>
    <div class="form-group">
        <input type="text" name="username" placeholder="Username" class="form-control">
    </div>
    <label>Email</label>
    <div class="form-group">
        <input type="email" name="email" placeholder="E-mail" class="form-control">
    </div>
    <label>Password</label>
    <div class="form-group">
        <input type="password" name="pwd" placeholder="Password" class="form-control">
        Suggested Passwords:
        <br />
        <i><?php echo uniqid(); ?></i>
        <br />
        <i><?php echo uniqid(); ?></i>
    </div>
    <div class="form-group">
        <input type="submit" name="create_submit" value="Continue" class="btn btn-primary">
    </div>
</form>