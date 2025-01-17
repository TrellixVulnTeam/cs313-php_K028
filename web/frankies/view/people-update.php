<?php include '../common/header.php' ?>
<?php
if (isset($_SESSION['message1'])) {
    echo $_SESSION['message1'];
}
?>
<?php if (!$_SESSION['loggedin']) {
    header('Location: /frankies');
} ?><h1>Account Information</h1>

<div class="account-page">

    <h2 class='updateHeading'>Update Account Info</h2>
    <form method="post" action="/frankies/accounts/index.php" class="accountForms">
        <div class="form-group  explain">

            <label for="people_fname">*First Name</label>
            <input type="text" class="form-control" name="people_fname" placeholder="First Name" id="people_fname" <?php if (isset($people_fname)) {
                                                                                                                        echo "value='$people_fname'";
                                                                                                                    }  ?> required title="Required">
        </div>
        <div class="form-group  explain">
            <label for="people_lname">*Last Name</label>
            <input type="text" class="form-control" name="people_lname" placeholder="Last Name" id="people_lname" <?php if (isset($people_lname)) {
                                                                                                                        echo "value='$people_lname'";
                                                                                                                    }  ?>required title="Required">
        </div>


        <div class="form-group  explain">

            <label for="people_email">*Email</label>
            <input type="email" class="form-control" name="people_email" id="people_email" value='<?php if (isset($people_email)) {
                                                                                                        echo $people_email;
                                                                                                    } elseif (isset($_SESSION['peopleData']['people_email'])) {
                                                                                                        echo $_SESSION['peopleData']['people_email'];
                                                                                                    } ?>' placeholder="Email Address" required title="Required">
        </div>
        <input type="hidden" class="form-control" name="people_id" value=' <?php if (isset($people_id)) {
                                                                                echo $people_id;
                                                                            } elseif (isset($_SESSION['clientData']['people_id'])) {
                                                                                echo $_SESSION['clientData']['people_id'];
                                                                            } ?>'>
        <input type="hidden" name="action" value="updatePerson">
        <input type='submit' name='submit' value='Update Account Information' title="Update Account Information" class="button-update">
        <a href="/frankies/accounts?action=deliverAdminView" class="button-change">Cancel</a>
    </form>

    <?php
    if (isset($_SESSION['message2'])) {
        echo $_SESSION['message2'];
    }
    ?>
    <hr>
    <h2 class='updateHeading'>Update Password</h2>

    <form method="post" action="/frankies/accounts/index.php" class="accountForms">
        <div class="form-group  explain">
            <label for="people_password">*Password</label>
            <input type="password" class="form-control" name='people_password' placeholder="Password" required title="Required" id="people_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
            <small class="form-text text-muted explain">Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</small>
        </div>

        <div class="form-group  explain">
            <input type="hidden" name="people_id" value=' <?php if (isset($people_id)) {
                                                                echo $people_id;
                                                            } elseif (isset($_SESSION['clientData']['people_id'])) {
                                                                echo $_SESSION['clientData']['people_id'];
                                                            } ?>'>
            <input type="hidden" name="action" value="updatePassword">
            <input type="submit" name="submit" value="Update Password" class="button-update">
            <a href="/frankies/accounts?action=deliverAdminView" class="button-change">Cancel</a>

        </div>
    </form>

</div>
<?php
unset($_SESSION['message']);
?>

<?php include '../common/footer.php' ?>