const urlParams = new URLSearchParams(window.location.search)

document.getElementById('displayName').textContent = urlParams.get('name');
document.getElementById('displayEmail').textContent = urlParams.get('email');
document.getElementById('displayMessage').textContent = urlParams.get('message');