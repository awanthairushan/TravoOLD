var faq = document.getElementsByClassName("question-faq");
var answer = document.getElementsByClassName("answer-faq");

var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        /* Toggle between hiding and showing the active panel */
        var body = this.parentElement.nextElementSibling.firstElementChild;

        if (body.className == "answer-faq") {
            body.className = "toggle-faq";
        } else {
            body.className = "answer-faq";
            // body.style.width="100%";
        }
    });
}