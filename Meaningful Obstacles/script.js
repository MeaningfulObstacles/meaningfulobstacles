function btnSubmit() {
	
	var fname = document.getElementById("first-name").value;
	var fres = fname.charAt(0);
	
	
	var lname = document.getElementById("last-name").value;
	var lres = lname.charAt(0);
	
	document.getElementById("fn").innerHTML = fres;
	document.getElementById("ln").innerHTML = lres;
}

