var title = document.getElementsByTagName("title")[0];
var navigation = document.querySelectorAll(".navigations_name");
if(title.textContent == "FAQ"){
    navigation[3].classList.add("navigations_bold_style");
}else if(title.textContent == "FEEDBACK"){
    navigation[6].classList.add("navigations_bold_style");
}else if(title.textContent == "LOGIN"){
    navigation[7].classList.add("navigations_bold_style");
}else if(title.textContent == "SIGNUP"){
    navigation[8].classList.add("navigations_bold_style");
}
