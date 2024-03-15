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
    <title>Report</title>
    <link rel="stylesheet" href="../css/report.css">
</head>

<body>
    <div class="heading">
        <h2>Report Water Problem</h2>
    </div>2
    <div class="container">
        <form class="row g-3" action="../services/services_report.php" method="post">
            <div class="col-md-4">
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
                    <label class="form-label" for="validationServer04">Issue Category</label>
                    <select type="text" class="form-select is-invalid" name="issue" id="validationServer04"
                        aria-describedby="validationServer04Feedback" required>
                        <option selected disabled>Select an issue</option>
                        <option>Water Contamination</option>
                        <option>Broken Facilities</option>
                        <option>Illegal Dumping</option>
                        <option>Others...</option>
                    </select>
                    <div class="invalid-feedback" id="validationServer04Feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea1">Description</label>
                    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="description"
                        required rows="7"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Issue Image</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="image" required multiple>
                </div>
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
                    <button class="btn btn-primary" type="submit">Report</button>
                </div>
        </form>
    </div>
</body>

</html>