<?php include 'header.inc'; ?>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="hidden" name="token" value="d105200876">
    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>