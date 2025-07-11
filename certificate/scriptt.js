document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('certificateForm');
  const slide1 = document.getElementById('slide-1');
  const slide2 = document.getElementById('slide-2');
  const slide3 = document.getElementById('slide-3');
  const userNameSpan = document.getElementById('userName');
  const firstNameInput = document.getElementById('firstName');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const firstName = firstNameInput.value.trim();

    // Hide form
    slide1.classList.add('hidden');

    // Show congratulations first
    slide2.classList.remove('hidden');
    userNameSpan.textContent = firstName || 'Claudia';

    // After 1 second, show certificate
    setTimeout(() => {
      slide3.classList.remove('hidden');
    }, 2000);
  });

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('certificateForm');
  const slide1 = document.getElementById('slide-1');
  const slide2 = document.getElementById('slide-2');
  const slide3 = document.getElementById('slide-3');
  const userNameSpan = document.getElementById('userName');
  const backButton = document.getElementById('backButton');

  // ✅ Submit button logic
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const firstName = document.getElementById('firstName').value.trim();

    slide1.classList.add('hidden');
    slide3.classList.remove('hidden');
    userNameSpan.textContent = firstName || 'Claudia';

    setTimeout(() => {
      slide2.classList.remove('hidden');
    }, 1000); // 1-second delay
  });

  // ✅ Back button logic
  backButton.addEventListener('click', function () {
    slide1.classList.remove('hidden');
    slide2.classList.add('hidden');
    slide3.classList.add('hidden');

    // Optional: reset form values
    form.reset();
  });
});


});

