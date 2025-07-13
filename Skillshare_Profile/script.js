const form = document.getElementById("profileForm");
const formContainer = document.getElementById("profileFormContainer");
const summaryCard = document.getElementById("profileSummaryCard");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const programme = document.getElementById("programme").value;
  const idCode = document.getElementById("idCode").value;
  const about = document.getElementById("about").value;

  // Fill in profile summary
  document.getElementById("displayName").textContent = name;
  document.getElementById("displayEmail").textContent = email;
  document.getElementById("displayProgramme").textContent = programme;
  document.getElementById("displayId").textContent = idCode;
  document.getElementById("displayAbout").textContent = about;

  // Show summary, hide form
  summaryCard.style.display = "block";
  formContainer.style.display = "none";
});

function editProfile() {
  // Refill form fields with current values
  document.getElementById("name").value = document.getElementById("displayName").textContent;
  document.getElementById("email").value = document.getElementById("displayEmail").textContent;
  document.getElementById("programme").value = document.getElementById("displayProgramme").textContent;
  document.getElementById("idCode").value = document.getElementById("displayId").textContent;
  document.getElementById("about").value = document.getElementById("displayAbout").textContent;

  // Show form, hide summary
  summaryCard.style.display = "none";
  formContainer.style.display = "block";
}
// JavaScript Document