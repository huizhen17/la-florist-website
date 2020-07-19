


//function for password toggles
function myFunction() {
		  var eyeIcon = document.getElementById("eyeBtn");
		  var x = document.getElementById("password");
		  if (x.type === "password") {
			eyeIcon.setAttribute("class","fa fa-eye-slash");
			x.type = "text";
		  } else {
			eyeIcon.setAttribute("class","fa fa-eye");
			x.type = "password";
		  }
}

/** navigation scroll 
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});**/