<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<link rel="stylesheet" href="CW.css">
<style>
    img {
        width: 100%;
    }
    </style>
</head>
<body>

<h1>Contact Us</h1>

<div id="contact-form">
  <form action="submit_form.php" method="post"> <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email Address">
    <label for="message">Message:</label>
    <textarea style="resize:none;" rows="10" cols="50" id="message" name="message" placeholder="Write your message here"></textarea>
    <button type="submit">Send Message</button>
  </form>
</div>

<div
class = "map-container"
id="map-container">
  <img src="greenwich.png" width="600" height="400" style="border:0;" tabindex="0"></img>
</div>

</body>
</html>