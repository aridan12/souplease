// Making sure the email is validated //

function checkIfValidEmail()
{
    if(!document.getElementById("input-email").checkValidity())
      {
        // Alert message if the email entered is not valid  
        alert("The inserterd email is not valid, please make sure you enter a valid email\nExample: idanarie@gmail.com");
      } else
      {
        // Email is OK - alert message that the email was submitted
        subscribedEmail();
      }
}

function subscribedEmail() {
    alert("Thanks for subscribing to our newsletter!\nWe will send you special promotions directly to your email!\n\n(This info isn't saved in the DB in this project)");
  }

  // Canvas script //

  window.onload = function() {
    var canvas = document.getElementById("confettiCanvas");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("confetti");
     ctx.drawImage(img, 10, 10);
  };