//email sender
function sendEmail() {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "rdkalyuta@gmail.com",
        Password: "21252007800008",
        To: 'rdkalyuta@gmail.com',
        From: "rdkalyuta@gmail.com",
        Subject: "Stats",
        Body: ".message",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }