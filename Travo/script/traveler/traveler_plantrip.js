var content = document.getElementById("content")
var popup = document.getElementById("hotel_names_popup");
var popupBtnFirst = document.getElementById("selecthotelbtn_first");
var popupBtnSecond = document.getElementById("selecthotelbtn_second");
var popupBtnThird = document.getElementById("selecthotelbtn_third");
var cancelBtn = document.getElementById("cancelbtn")

popupBtnFirst.onclick = function() {
  content.style.display = "none";
  popup.style.display = "block";

}
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}


popupBtnSecond.onclick = function() {
  content.style.display = "none";
  popup.style.display = "block";

}
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}



popupBtnThird.onclick = function() {
  content.style.display = "none";
  popup.style.display = "block";
}
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}


cancelBtn.onclick = function(){
  popup.style.display = "none";
}
