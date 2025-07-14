document.addEventListener("DOMContentLoaded", () => {
  const continueBtn = document.getElementById("continueBtn");

  continueBtn.addEventListener("click", (e) => {
    

    // Get input values
    const username = document.getElementById("username");
    const password = document.getElementById("password").value;
    const cpassword = document.getElementById("cpassword").value;

    if (username === "" || password === "") {
      alert("Please fill in both fields.");
      return;
    }

    if(password != cpassword){
      alert("Password and Confirm Password does not match!");
      // Prevents form from submitting
      e.preventDefault();
      console.log(password);
      console.log(cpassword);
    }
    e.returnValue=true;

    // Show confirmation popup
    // alert("✅ Welcome back, " + username + "! You are now logged in.");
    
    // Optional: redirect to another page
    // window.location.href = "dashboard.html";
  });
});
