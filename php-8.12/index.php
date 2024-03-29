<?php
    $error = "";
    $successMessage = "";

    if (!$_POST["email"])
    {
        $error .= "An email address is required. <br>";
    }
    if (!$_POST["content"])
    {
        $error .= "The content field is required. <br>";
    }
    if (!$_POST["subject"])
    {
        $error .= "The subject is required. <br>";
    }
    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)
    {
        $error = "The email address is not valid. <br>";
    }
    #check if the error s not empty
    if ($error != "")
    {
        $error = '<div class="alert alert-danger" role="alert"><p>There is error(s) in your form: </p>' . $error . '</div';
    }
    else
    { #email is good, no error
        $emailTo = "modestychuks@gmail.com";
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $headers = "From:" . $_POST['email'];

        #sending the mail
        if (mail($emailTo, $subject, $content, $headers))
        { #mail was successfully sent
            $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, '. 'we\'ll get back to you ASAP! </div>';
        }
        else
        { #mail was not successfully sent 
            $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent, .try again later!! </div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Get in Touch!</h1>
        <div id="error"><?php echo $error.$successMessage; ?></div>
        <form method="post">
            <fieldset class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                <small class="text-muted">We will never share your email with anyone</small>
            </fieldset>

            <fieldset class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </fieldset>

            <fieldset class="form-group">
                <label for="content">What would you like to ask us</label>
                <textarea class="form-control" name="content" row="3" id="content"></textarea>
            </fieldset>

            <button type="submit" id="submit" class="btn btn-primary">Submit</button><!-- End of button -->
        </form><!-- End of form -->
    </div><!-- End of div container -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $("form").submit(function(e)
        {
            let error = "";

            if ($("email").val() == "")
            {
                error += "The email field is required. <br>"; 
            }
            if ($("subject").val() == "")
            {
                error += "The subject field is required. <br>";
            }
            if ($("content").val() == "")
            {
                error += "The content field is required. <br>";
            }
            //test if there is error or not
            if (error != "")
            {
                $("#error").html('<div class="alert alert-danger"' +
                'role="alert"><p><strong>There were error(s) in your form: </strong></p>' + error + '</div>');
                return false;
            }
            else
            { //no error!
                return true;
            }
        });
    </script>
</body>
</html>