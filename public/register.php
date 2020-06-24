<?php
    require('../src/config.php');
    require('../src/dbconnect.php');

    $pageTitle = "Register";
    $pageId = "register";

    //debug($_GET);
    //debug($_POST);
    //debug($_SESSION);

    $first_name   = "";
    $last_name    = "";
    $email        = "";
    $password     = "";
    $phone        = "";
    $street       = "";
    $postal_code  = "";
    $city         = "";
    $country      = "";
    $error        = "";
    $msg          = "";

    if (isset($_POST['register'])) {
        $first_name    = trim($_POST['first_name']);
        $last_name     = trim($_POST['last_name']);
        $email         = trim($_POST['email']);
        $password      = trim($_POST['password']);
        $phone         = trim($_POST['phone']);
        $street        = trim($_POST['street']);
        $postal_code   = trim($_POST['postal_code']);
        $city          = trim($_POST['city']);
        $country       = trim($_POST['country']);



        //error messages
        if (empty($first_name) || empty($last_name)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your names are missing.</li>";
        }
        if (empty($email)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your e-mail adress is missing.</li>";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your e-mail adress is not correct</li>";
        }
        if (empty($password)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your password is missing</li>";
        }
        if (!empty($password) && strlen($password) < 8) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your password should be at least 8 characters long.</li>";
        }
        if (empty($phone)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your phone number is missing.</li>";
        }
        if (empty($street)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your street adress is missing.</li>";
        }
        if (empty($postal_code)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your postal code is missing.</li>";
        }
        if (empty($city)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your city is missing.</li>";
        }
        if (empty($country)) {
            $error .= "<li class='list-group-item list-group-item-danger'>Your country is missing.</li>";
        }

        

        if ($error) {
            $msg = "<ul class='list-group'>{$error}</ul>";
        }



        if (empty($error)) {
            
            $userData = [
                'first_name'   => $first_name,
                'last_name'    => $last_name,
                'email'        => $email,
                'password'     => $password,
                'phone'        => $phone,
                'street'       => $street,
                'postal_code'  => $postal_code,
                'city'         => $city,
                'country'      => $country,
            ];
            
            //debug($userData);
            $result = $UserDbHandler->add($userData);

            if ($result) {
                $msg = '<div class="alert alert-success" role="alert">You have successfully created your account.</div>';
            } else {
                $msg = '<div class="alert alert-danger" role="alert">Registration failed. Please try again.</div>';
            }
        }
    }
?>



<?php include('admin/layout/header.php');?>

<br>

<form action="#" method="POST" id="register" style="margin-left: 20%; width:60%;">
    <fieldset>
        <legend>Register</legend>

        <br>
        <!--Show error message-->
        <?=$msg?>
        <br>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input_first_name">First name</label>
                <input type="text" class="form-control" name="first_name" id="input_first_name">
            </div>
            <div class="form-group col-md-6">
                <label for="input_last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="input_last_name">
            </div>
        </div>
            
        <div class="form-group">
            <label for="input_email">E-mail</label>
            <input type="email" class="form-control" name="email" id="input_email">
        </div>
            
        <div class="form-group">
            <label for="input_password">Password</label>
            <input type="password" class="form-control" name="password" id="input_password">
        </div>
            
        <div class="form-group">
            <label for="input_phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="input_phone">
        </div>
            
        <div class="form-group">
            <label for="input_street">Street</label>
            <input type="text" class="form-control" name="street" id="input_street">
        </div>
            
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input_postal_code">Postal code</label>
                <input type="text" class="form-control" name="postal_code" id="input_postal_code">
            </div>
            <div class="form-group col-md-4">
                <label for="input_city">City</label>
                <input type="text" class="form-control" name="city" id="input_city">
            </div>
            <div class="form-group col-md-2">
                <label for="input_country">Country</label>
                <select class="form-control" name="country" id="input_country">
                    <option value="SE">Sweden</option>
                    <option value="ETC">Etc</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="register">Register</button>

    </fieldset>
</form>

<br>

<?php include('../public/admin/layout/footer.php');?>