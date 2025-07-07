<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Username Verification</title>
      <!-- link to CSS file for styling the page -->
    <link rel="stylesheet" href="bonus-beautify.css"> 
     <!-- load the JavaScript file that handles AJAX verification -->
    <script src="js/verify_ajax.js" defer></script>
</head>

<body>
    <div class="container">
      <form>
        <!-- the label on the left for the empty input box -->
        <label for="Username">User Name:</label>
        <!-- the empty input box for the username -->
        <input type="text" id="username" />
        <!-- the Submit button -->
        <button type="button" id="submitBtn">Submit</button>
        <!-- message area for displaying response -->
        <p id="message">Key in username and click submit</p>
      </form>  
    </div>
</body>
</html>