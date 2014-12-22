
/*alert("here!");

function validatePassword(){
	var passText = passTextBox.value;
	var returnValue = "";
	if (passText.length < 8) returnValue += "The Password should be at least 8 characters long!</br>";
	var capitalFlag = false, characterFlag = false, numberFlag = false;
	for (var i=0 ; i<passText.length ; i++){
		if ((passText[i] >= 'A' && passText[i] <= 'Z') || (passText[i] >= 'a' && passText[i] <= 'z'))
			characterFlag = true;
		if (passText[i] >= 'A' && passText[i] <= 'Z')
			capitalFlag = true;
		if (passText[i] >= '0' && passText[i] <= '9')
			numberFlag = true;
	}
	if (!capitalFlag){
		returnValue += "The Password should have at least one uppercase letter!</br>";
	}
	if (!characterFlag){
		returnValue += "The Password should have at least one letter!</br>";
	}
	if (!numberFlag){
		returnValue += "The Password should have at least one number!</br>";
	}
	if (returnValue.length == 0) returnValue += "Valid Password!";
	if (passText.length == 0) returnValue = "";
	printArea.innerHTML = returnValue;
	return returnValue;
}

function isPassValid(pass){
	var returnValue = false;
	if (validatePassword(pass).localeCompare("Valid Password!")){
		return true;
	}
	return false;
}

function whenPassChange(){
	var password = document.getElementById(pass_id);
	alert(validatePassword(password));
}*/

function onChange(){
	var fnext = document.getElementById('fnext_id');
	var snext = document.getElementById('snext_id');
	var email = document.getElementById('email_id');
	var pass = document.getElementById('pass_id');
	var repass = document.getElementById('repass_id');
	var emailValue = email.value;
	var passValue = pass.value;
	var repassValue = repass.value;

	if (!emailValue.length || !passValue.length || !repass.length){
		fnext.disabled = true;
	}
	else fnext.disabled = false;

}
















