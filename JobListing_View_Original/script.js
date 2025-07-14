// Navigation Buttons
document.querySelector('.home').addEventListener('click', () => {
  alert('Home clicked!');
});
document.querySelector('.courses').addEventListener('click', () => {
  alert('Courses clicked!');
});
document.querySelector('.about-us').addEventListener('click', () => {
  alert('About Us clicked!');
});
document.querySelector('.contact').addEventListener('click', () => {
  alert('Contact clicked!');
});
document.querySelector('.job-listings').addEventListener('click', () => {
  alert('Job Listings clicked!');
});
document.querySelector('.community').addEventListener('click', () => {
  alert('Community clicked!');
});
document.querySelector('.log-in').addEventListener('click', () => {
  alert('Log In clicked!');
});
document.querySelector('.sign-in').addEventListener('click', () => {
  alert('Sign In clicked!');
});
document.querySelector('.apply-now').addEventListener('click', () => {
  alert('Apply Now clicked!');
});

// Search Inputs
document.querySelector('.search-for-courses-input').addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    const value = e.target.value;
    console.log(`Searching for courses: ${value}`);
    alert(`Searching for courses: ${value}`);
  }
});

document.querySelector('.jobs-positions-company-input').addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    const value = e.target.value;
    console.log(`Searching for jobs: ${value}`);
    alert(`Searching for jobs: ${value}`);
  }
});
