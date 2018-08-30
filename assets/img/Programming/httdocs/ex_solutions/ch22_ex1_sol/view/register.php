<?php include 'header.php'; ?>
<main>
    <form action="." method="post" >
    <fieldset>
        <legend>User Information</legend>
        
        <?php if (isset($error)) : ?>
        <p class='error'><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <label>First Name:</label>
        <input type="text" name="first_name" 
               value="<?php echo htmlspecialchars($first_name);?>"><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" 
               value="<?php echo htmlspecialchars($last_name);?>"><br>

        <label>Phone:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone);?>"><br>

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email);?>"><br>
    </fieldset>
    <fieldset>
        <legend>Submit Registration</legend>
        
        <label>&nbsp;</label>
        <input type="submit" name="action" value="Register"/>
        <input type="submit" name="action" value="Reset" /><br>
    </fieldset>
    </form>
</main>
<?php include 'footer.php'; ?>