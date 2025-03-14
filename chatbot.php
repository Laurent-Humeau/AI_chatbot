<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chatbot</title>
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  
   <h1 class="text-center">Enhance Your Business with AI-Powered Automation</h1><br>
<p class="text-center"><i>Streamline your workflow and automate customer relationships.</i></p>

<div class="mb-5">
  <p>Make sure your business is up to date with the latest technology available and implement smart solutions to stay ahead. AI chatbots ARE designed to help streamline your workflow, automate customer interactions, and improve response times—allowing you to focus on what truly matters.</p>
<br><br>
  <h2>What a Chatbot can do for your business: </h2>
  <p><strong>Answer Customer Inquiries:</strong> Provide instant responses to common questions, reducing wait times.</p>
  <p><strong>Assist with Bookings & Orders:</strong> Help users schedule appointments or place orders effortlessly.</p>
  <p><strong>Generate Leads:</strong> Engage visitors and collect customer information for future outreach.</p>
  <p><strong>Support 24/7 Availability:</strong> Keep your business accessible even outside working hours.</p><br><br>

  <h2>A Free AI-Powered Assistant</h2>
  <p>This chatbot uses a <strong>free API</strong>, which means response quality may vary. While it can handle general inquiries effectively, some responses might not always be perfect. However, it's an excellent starting point for automating customer interactions and boosting efficiency without the need for a large investment.</p>

 <!--  <p>Want to see it in action?</p>
  <p>Enter an prompt in the text box below that matches the tone you want to adopt and click on Try the chat bot!</p> -->
</div>





<div class="display-button"><button class="button-styling" id="button-to-hide" onclick="show()"><strong>Try the chat bot!</strong></button></div>
 

  <div class="container hidden" id="container">
    <div class="header">
      <img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="Chatbot Logo">
      <h1> <span style="color: skyblue;padding-right: 1rem;"> Welcome!</span> </h1>
      <p>I am a web developer here to help you integrate tools for your businness</p>
    </div>
    <div class="chat-box">
      <div class="messages">
            
            <div class="message received">
              <div class="text"><?= $row["message_received"] ?></div>
              <div class="time"><?= $row["received_date"] ?></div>
            </div>
            <div class="message sent">
              <div class="text"><?= $row["message_send"] ?></div>
              <div class="time"><?= $row["send_date"] ?></div>
            </div>
     
        <div class="ajax-response">
        </div>
      </div>
      <form action="" method="post" id="form1">
        <div class="input-box">
          <input type="text" class="message-input" name="question" placeholder="Type your message..." required>
          <button type="submit" class="send-button" name="search" id="search"><i class="fa fa-paper-plane"></i><img src="./img/dots-loading.gif" class="dot-img hide"> </button>
        </div>
      </form>
    </div>
  </div>
  

  

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function show() {
            // Get the container element by ID
            var container = document.getElementById('container');
            // Toggle the 'hidden' class on the container
            container.classList.remove('hidden');

            // Get the button element by ID
            var buttonToHide = document.getElementById('button-to-hide');
            // Add the 'hidden' class to the button
            buttonToHide.classList.add('hidden');

        }
  </script>
  <script src="./js/app.js"></script>
</body>

</html>