document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("book-now");
    const successMessage = document.getElementById("successMessage");
    const errorMessage = document.getElementById("errorMessage");
    form.addEventListener("submit", async function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        try {
            const response = await fetch("index.php", { method: "POST", body: formData });
            const result = await response.json();
            if (result.success) {
                successMessage.style.display = "block";
                errorMessage.style.display = "none";
                form.reset();
            } else {
                errorMessage.textContent = result.message;
                errorMessage.style.display = "block";
                successMessage.style.display = "none";
            }
        } catch (error) {
            errorMessage.textContent = "Something went wrong. Please try again";
            errorMessage.style.display = "block";
            successMessage.style.display = "none";
            console.error(error);
        }
    });
});

//responsiveness
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

if (hamburger && navLinks) {

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        const icon = hamburger.querySelector('h1');
        if (icon) {

            if (navLinks.classList.contains('active')) {
                icon.innerHTML = '&times;';
            } else {
                icon.innerHTML = '&#9776;';
            }
        }
    });

    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            const icon = hamburger.querySelector('h1');
            if (icon) icon.innerHTML = '&#9776;';
        });
    });
}

//modal-content
function openModal() {
    document.getElementById("priceModal").style.display = "flex";
}
function closeModal() {
    document.getElementById("priceModal").style.display = "none";
}
window.addEventListener("click", function (event) {
    const modal = this.document.getElementById("priceModal");
    if (event.target === modal) {
        closeModal()
    }
});

// mail 

function sendMail() {
    let parms = {
        name: document.getElementById("name").value,
        name: document.getElementById("tel").value,
        name: document.getElementById("email").value,
        name: document.getElementById("service").value,
        name: document.getElementById("date").value,
        name: document.getElementById("message").value,
    }

    emailjs.send(" service_lku2m3h", "template_u6lkpke", parms).then(alert("Email sent"))
}