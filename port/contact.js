document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent default form submission

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const message = document.getElementById("message").value.trim();
  const messageSent = document.getElementById("message-sent");

  // Fake send simulation for now
  if (name && email && message) {
    messageSent.textContent = "Message sent successfully!";
    messageSent.style.color = "lime";

    // Optionally clear the form
    this.reset();
  } else {
    messageSent.textContent = "Please fill in all fields.";
    messageSent.style.color = "red";
  }
});
