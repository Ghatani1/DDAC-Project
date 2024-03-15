<?php
session_start();


include("../connection.php");
include("../function.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="../css/request.css">
</head>

<body>
    <div class="heading">
        <h2>Water Service Request</h2>
    </div>
    <div class="container">
        <form class="row g-3" action="../services/services_request.php" method="post">
            <div class="col-md-4">
                <label class="form-label" for="validationServerUsername">Username</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" name="username"
                        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div class="invalid-feedback" id="validationServerUsernameFeedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                    placeholder="name@example.com"
                    aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div class="invalid-feedback" id="validationServerUsernameFeedback">
                    Please choose a email.
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="validationServer04">State</label>
                <select type="text" class="form-select is-invalid" name="state" id="validationServer04"
                    aria-describedby="validationServer04Feedback" required>
                    <option selected disabled>Choose an state</option>
                    <option>Perlis</option>
                    <option>Kedah</option>
                    <option>Penang</option>
                    <option>Perak</option>
                    <option>Selangor</option>
                    <option>Negeri Sembilan</option>
                    <option>Malacca</option>
                    <option>Johore</option>
                    <option>Kelantan</option>
                    <option>Terengganu</option>
                    <option>Pahang</option>
                </select>
                <div class="invalid-feedback" id="validationServer04Feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" name="city" id="validationServer03"
                    aria-describedby="validationServer03Feedback" required>
                <div class="invalid-feedback" id="validationServer03Feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" name="zip" id="validationServer05"
                    aria-describedby="validationServer05Feedback" required>
                <div class="invalid-feedback" id="validationServer05Feedback">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="validationServer04">Services</label>
                <select type="text" class="form-select is-invalid" name="services" id="validationServer04"
                    aria-describedby="validationServer04Feedback" required>
                    <option selected disabled>Choose a service</option>
                    <option>Setup Water Purifier</option>
                    <option>Call Plumber</option>
                    <option>Water Pipe Line Inspection</option>
                    <option>Water Quality Test</option>
                    <option>Others...</option>
                </select>
                <div class="invalid-feedback" id="validationServer04Feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="description" required
                    rows="7"></textarea>
            </div><br>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" id="invalidCheck3" name="agree"
                        aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback" id="invalidCheck3Feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div><br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Request</button>
            </div>
        </form>
    </div>
</body>

</html>