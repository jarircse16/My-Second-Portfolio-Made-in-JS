document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contactForm");
    const resultMessage = document.getElementById("resultMessage");

    contactForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(contactForm);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save_form.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    resultMessage.textContent = xhr.responseText;
                } else {
                    resultMessage.textContent = "An error occurred while sending the message.";
                }
            }
        };
        xhr.send(formData);
    });
});
