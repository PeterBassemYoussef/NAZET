// Check if the user has already accepted cookies
if (!localStorage.getItem('cookiesAccepted')) {
    // Show the cookie consent message
    document.getElementById('cookie-consent').style.display = 'block';
}

// When the "Got it!" button is clicked, set a flag and hide the message
document.getElementById('accept-cookies').addEventListener('click', function () {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookie-consent').style.display = 'none';
});