// Function to hide the loader and display the main content
function hideLoader() {
    document.querySelector('.wrapper').style.display = 'none';
    document.getElementById('main-content').style.display = 'block';
  }
  
  // Set a timeout to hide the loader after 5 seconds (5000 milliseconds)
  setTimeout(hideLoader, 3000);
  
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (e) {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var message = document.getElementById("message").value;

      // Check if any of the fields is empty
      if (name === "" || email === "" || message === "") {
        e.preventDefault(); // Prevent form submission
        alert("Please fill out all fields.");
      }
    });
  });