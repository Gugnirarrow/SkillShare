document.addEventListener("DOMContentLoaded", () => {
  const continueBtn = document.getElementById("continueBtn");

  continueBtn.addEventListener("click", (e) => {
    e.preventDefault(); // Prevents form from submitting

    // Get input values
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username === "" || password === "") {
      alert("Please fill in both fields.");
      return;
    }

    // Show confirmation popup
    // alert("✅ Welcome back, " + username + "! You are now logged in.");
    
    // Optional: redirect to another page
    // window.location.href = "dashboard.html";
  });
});
