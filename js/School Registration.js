
fillCountryList();
fillGradeList();
function fillCountryList(){
    var country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    var x = document.getElementById("day");
    for (var i=0; i<205; i++){
        var option = document.createElement("option");
        option.text = country_list[i];
        x.add(option);
    }
}

function fillGradeList(){
    var country_list = ["Elementary School", "intermediate School", "High School"]
    var x = document.getElementById("month");
    for (var i=0; i<3; i++){
        var option = document.createElement("option");
        option.text = country_list[i];
        x.add(option);
    }
}

/*function validatePassword(){
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
/*document.getElementById('fnext_id').disabled = true;
function onChange(){
	var fnext = document.getElementById('fnext_id');
	var snext = document.getElementById('snext_id');
	var email = document.getElementById('email_id');
	var pass = document.getElementById('pass_id');
	var repass = document.getElementById('repass_id');
	var emailValue = email.value;
	var passValue = pass.value;
	var repassValue = repass.value;

	if (emailValue.length == 0 || passValue.length == 0 || repassValue.length == 0){
		fnext.disabled = true;
	}
	else fnext.disabled = false;

}
*/












