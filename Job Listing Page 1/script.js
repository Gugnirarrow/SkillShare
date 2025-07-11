// Make navigation items clickable
document.querySelector('.home').addEventListener('click', () => {
  console.log('Home clicked');
  alert('Navigating to Home');
});

document.querySelector('.courses').addEventListener('click', () => {
  console.log('Courses clicked');
  alert('Navigating to Courses');
});

document.querySelector('.about-us').addEventListener('click', () => {
  console.log('About Us clicked');
  alert('Navigating to About Us');
});

document.querySelector('.contact').addEventListener('click', () => {
  console.log('Contact clicked');
  alert('Navigating to Contact');
});

document.querySelector('.job-listings').addEventListener('click', () => {
  console.log('Job Listings clicked');
  alert('Navigating to Job Listings');
});

document.querySelector('.community').addEventListener('click', () => {
  console.log('Community clicked');
  alert('Navigating to Community');
});

// Make "Log In" and "Sign In" clickable
document.querySelector('.log-in').addEventListener('click', () => {
  console.log('Log In clicked');
  alert('Log In button clicked');
});

document.querySelector('.sign-in').addEventListener('click', () => {
  console.log('Sign In clicked');
  alert('Sign In button clicked');
});

// Make job categories clickable
document.querySelector('.finance').addEventListener('click', () => {
  console.log('Finance clicked');
  alert('Showing Finance jobs');
});

document.querySelector('.design').addEventListener('click', () => {
  console.log('Design clicked');
  alert('Showing Design jobs');
});

document.querySelector('.development').addEventListener('click', () => {
  console.log('Development clicked');
  alert('Showing Development jobs');
});

document.querySelector('.agriculture').addEventListener('click', () => {
  console.log('Agriculture clicked');
  alert('Showing Agriculture jobs');
});

// Make search bar interactive
document.querySelector('.search').addEventListener('click', () => {
  console.log('Search button clicked');
  alert('Searching...');
});

// OPTIONAL: Add hover effect
const clickableElements = document.querySelectorAll(
  '.home, .courses, .about-us, .contact, .job-listings, .community, .log-in, .sign-in, .finance, .design, .development, .agriculture, .search'
);

clickableElements.forEach((el) => {
  el.style.cursor = 'pointer'; // show pointer
  el.addEventListener('mouseenter', () => {
    el.style.opacity = 0.7; // simple hover effect
  });
  el.addEventListener('mouseleave', () => {
    el.style.opacity = 1;
  });
});
// Search For Courses input field
document.querySelector('.search-for-courses-input').addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    const value = e.target.value;
    console.log(`Searching for courses: ${value}`);
    alert(`Searching for courses: ${value}`);
  }
});

// Jobs, Positions, Company input field
document.querySelector('.jobs-positions-company-input').addEventListener('keydown', (e) => {
  if (e.key === 'Enter') {
    const value = e.target.value;
    console.log(`Searching for jobs: ${value}`);
    alert(`Searching for jobs: ${value}`);
  }
});
