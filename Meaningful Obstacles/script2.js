function btnSubmit() {
	 var name = document.getElementById("first-name").value;
     var initial = name.charAt(0).toUpperCase();
     var icon = "svg-alphabet/" + initial + ".svg";
      
     document.getElementById("lettering").src = icon;
     
     alert("Thanks for signing up!");
}

