var content = document.querySelector(".content");
var popup = document.querySelector(".hotel_names_popup");
var popupBtn = document.querySelectorAll(".selecthotelpopupbtn");
var cancelBtn = document.querySelector("#cancelbtn");
var formPlantrip = document.querySelector("#form_plan");
formPlantrip.addEventListener("submit", function(event){
  event.preventDefault();
});
for (var i = 0; i < popupBtn.length; i++) {
     popupBtn[i].addEventListener("click", function(event){
       openPopup();
   });
}
function openPopup(){
  content.style.display = "none";
  popup.style.display = "block";
}
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
    content.style.display = "block";
  }
}
cancelBtn.addEventListener("click", function(){
   popup.style.display = "none";
   content.style.display = "block";
 });






 var slideIndex = 1;
 showSlides(slideIndex);

 // Next/previous controls
 function plusSlides(n) {
   showSlides(slideIndex += n);
 }

 // Thumbnail image controls
 function currentSlide(n) {
   showSlides(slideIndex = n);
 }

 function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("Slide");
   if (n > slides.length) {slideIndex = 1}
   if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
       slides[slideIndex-1].style.display = "block";
   }

 }
