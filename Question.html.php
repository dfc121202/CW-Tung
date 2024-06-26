<html>

<head>
  <meta charset="UTF-8">
  <title>Question Box</title>
  <link rel="stylesheet" href="CW.css">

<body class="question-box">

  <div id="textboxContainer"></div>

  <button onclick="addTextbox()">Ask a question</button>
  <button onclick="submitQuestions()">Submit Questions</button>
  <a href="http://localhost/CW/Home.php">Visit our website</a>

</body>
<script>

  function addTextbox() {

    var container = document.getElementById("textboxContainer");


    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("placeholder", "Enter your question here");

    container.appendChild(input);
  }

  function submitQuestions() {

    var questions = document.querySelectorAll("#textboxContainer input");


    if (questions.length === 0) {
      alert("Please enter question before submitting.");
      return;
    }

    var submittedQuestions = [];
    for (var i = 0; i < questions.length; i++) {
      submittedQuestions.push(questions[i].value);
    }
    console.log("Submitted questions:", submittedQuestions);
    alert("Successful");

  }
</script>
</head>

</html>