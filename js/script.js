document.addEventListener("click", function (is_close) {
	var close_next;
	
    if (is_close.target.className == "showup") {
        close_next = is_close.target.id;
        document.getElementById(close_next).nextElementSibling.style = "display:block";
    }
	
    if (is_close.target.className == "close") {
        document.getElementById(close_next).nextElementSibling.style = "display:none";
    }
});