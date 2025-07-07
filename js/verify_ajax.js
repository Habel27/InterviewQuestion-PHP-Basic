
// This is for waiting the page to load completely
document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submitBtn");
    const usernameInput = document.getElementById("username");
    const message = document.getElementById("message");

    // This to handle the submit button click event
    submitBtn.addEventListener("click", function () {
      const username = usernameInput.value.trim();

      // This will prompt about the error if input is empty
      if (username == "") {
        message.textContent = "Username cannot be empty.";
        message.style.color = "red";
        return;
      }

      // Send username to PHP via AJAX
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "Info.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      // Handle the response from PHP
      xhr.onload = function () {
        if (xhr.status === 200) {
            const response = xhr.responseText.trim();
            message.textContent = response;
            message.style.color = response === "Verified" ? "#4caf50" : "red"
        }
      };

      // Send the request with username
      xhr.send("username=" + encodeURIComponent(username));
    });
});