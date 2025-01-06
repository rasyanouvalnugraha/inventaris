const loginButton = document.getElementById('loginButton');
const popup = document.getElementById('popup');
const closeButton = document.getElementById('closeButton');
const popupContent = document.querySelector('.popup-content');

loginButton.addEventListener('click', () => {
    popup.classList.remove('hidden');
    setTimeout(() => {
        popupContent.classList.remove('scale-50', 'opacity-0');
    }, 10);
});

closeButton.addEventListener('click', () => {
    popupContent.classList.add('scale-50', 'opacity-0');
    setTimeout(() => {
        popup.classList.add('hidden');
    }, 300);
});

window.addEventListener('click', (event) => {
    if (event.target === popup) {
        popupContent.classList.add('scale-50', 'opacity-0');
        setTimeout(() => {
            popup.classList.add('hidden');
        }, 300);
    }
});

function togglePassword(event) {
    event.preventDefault();
    const passwordField = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    passwordField.type = passwordField.type === "password" ? "text" : "password";
}
