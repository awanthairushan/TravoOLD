var hiddenfilter = document.querySelector(".filter_form");
var addfilterbtn = document.querySelector(".filterbtn");
var submitfilterbtn = document.querySelector(".filtersubmitbtn");

addfilterbtn.addEventListener("click", function(e){
  hiddenfilter.style.display = "block";
});

// window.onclick = function(e) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
submitfilterbtn.addEventListener("click", function(){
   hiddenfilter.style.display = "none";
 });