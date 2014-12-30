
            var flag = new Array(10);
            function False(ind)
            {
                flag[ind] = false;
                document.getElementById('submitBTN').disabled = true;
                return false;
            }
            function True(ind)
            {
                flag[ind] = true;
                checkAll();
                return true;
            }
            function init()
            {
                for(i=0; i<8; i++)flag[i] = false;
                fillbirthyearSLCT();
                document.getElementById('submitBTN').disabled = true;
                resetAllERRLabels();
            }
            function checkNameValidity(txt, labelTXT)
            {
                var x = document.getElementById(txt);
                if(/^[A-Z][a-z]+$/.test(x.value))
                {
                    //document.getElementById(err).innerHTML = 'Valid';
                    //document.getElementById(err).style.color = 'green';
                    x.setCustomValidity('');
                    return True(txt=='firstnameTXT'?0:1);
                }
                x.setCustomValidity(labelTXT + ' has to start with a capital letter and contain alphabet only.');
                //document.getElementById(err).innerHTML = labelTXT + ' should start with a capital letter, and followed by one or more small letters.';
                //document.getElementById(err).style.color = 'red';
                return False(txt=='firstnameTXT'?0:1);
            }
            function checkEmailValidity(txt)
            {
                var x = document.getElementById(txt);
                if(/[A-Z0-9a-z]+@[A-Z0-9a-z]+\.[A-Z0-9a-z]+/.test(x.value))
                {
                    //document.getElementById(err).innerHTML = 'Valid';
                    //document.getElementById(err).style.color = 'green';
                    x.setCustomValidity('');
                    return True(2);
                }
                x.setCustomValidity('Email format is incorrect.');
                //document.getElementById(err).innerHTML = 'Email should be like example@example.example'
                //document.getElementById(err).style.color = 'red';
                return False(2);
            }
            function checkPasswordStrength(txt)
            {
                var x = document.getElementById(txt);
                
                //checkMatch('repasswordTXT');
                var strength = 0;
                var ret = ["Weak", "Moderate", "Strong", "Very Strong"];
                if(/[A-Z]/.test(document.getElementById(txt).value))strength++;
                if(/[a-z]/.test(document.getElementById(txt).value))strength++;
                if(/[0-9]/.test(document.getElementById(txt).value))strength++;
                if(/[+_)(*&^%$#@!~}{'";:?><.,]/.test(document.getElementById(txt).value))strength++;
                
                if(strength == 0)
                {
                    x.style.cssText = "background: #fff; border: 1px solid #7bc1f7; box-shadow: 0px 0px 8px #7bc1f7; -moz-box-shadow: 0px 0px 8px #7bc1f7; -webkit-box-shadow: 0px 0px 8px #7bc1f7; ";
                    //document.getElementById("strengthLBL").innerHTML = "Please enter a password.";
                    //document.getElementById("strengthLBL").style.color = 'red';
                    x.setCustomValidity('It cannot bempty!');
                    return False(3);
                }
                else if(strength <= 2)
                {
                    if(strength == 1) x.style.cssText = "background: #fff url(./css/images/password-veryweak.png) no-repeat 98% center; border: 1px solid #b03535;  box-shadow: 0px 0px 8px #b03535;  -moz-box-shadow: 0px 0px 8px #b03535; -webkit-box-shadow: 0px 0px 8px #b03535; ";
                    if(strength == 2) x.style.cssText = "background: #fff url(./css/images/password-weak.png) no-repeat 98% center; border: 1px solid #b03535;  box-shadow: 0px 0px 8px #b03535;  -moz-box-shadow: 0px 0px 8px #b03535; -webkit-box-shadow: 0px 0px 8px #b03535; ";
                    //document.getElementById("strengthLBL").innerHTML = "Not valid - Password Strength: " + ret[strength-1] + "  ** Make it stronger.";
                    //document.getElementById("strengthLBL").style.color = 'red';
                    x.setCustomValidity('Email format is incorrect.');
                    return False(3);
                }
                else
                {
                    if(strength == 3) x.style.cssText = "background: #fff url(./css/images/password-moderate.png) no-repeat 98% center; border: 1px solid #28921f; box-shadow: 0px 0px 8px #28921f; -moz-box-shadow: 0px 0px 8px #28921f;  -webkit-box-shadow: 0px 0px 8px #28921f;"; 
                    if(strength == 4) x.style.cssText = "background: #fff url(./css/images/password-strong.png) no-repeat 98% center; border: 1px solid #28921f; box-shadow: 0px 0px 8px #28921f; -moz-box-shadow: 0px 0px 8px #28921f;  -webkit-box-shadow: 0px 0px 8px #28921f;"; 
                    //document.getElementById("strengthLBL").innerHTML = "Valid - Password Strength: " + ret[strength-1];
                    //document.getElementById("strengthLBL").style.color = 'green';
                    x.setCustomValidity('');
                    return True(3);
                }
            }
            function checkMatch(txt, txt2)
            {
                var x = document.getElementById(txt);
                var y = document.getElementById(txt2);
                //if(x.value == "")
                {
                  //  document.getElementById("matchLBL").innerHTML = "Please re-enter the password.";
                  //  return False(4);
                }
                if(x.value == y.value)
                {
                    y.setCustomValidity('');
                    //document.getElementById("matchLBL").innerHTML = "Match";
                    //document.getElementById("matchLBL").style.color = 'green';
                    return True(4);
                }
                y.setCustomValidity('Email is not matching the one above.');
                //document.getElementById("matchLBL").innerHTML = "Doesn't match!";
                //document.getElementById("matchLBL").style.color = 'red';
                return False(4);
            }
            function fillbirthdaySLCT()
            {
                document.getElementById("birthdaySLCT").innerHTML = "";
                
                var el = document.createElement("option");
                el.textContent = "Day";
                el.value = "Day";
                document.getElementById("birthdaySLCT").appendChild(el);
                    
                if(document.getElementById("birthmonthSLCT").value == "Month") return False(5);
                var select = document.getElementById("birthdaySLCT"); 
                var monthLength = 31;
                var month = document.getElementById("birthmonthSLCT").value;
                if(month == 'Apr' || month == 'Jun' || month == 'Sep' || month == 'Nov')monthLength = 30;
                else if(month == 'Feb')
                {
                    var year = document.getElementById("birthyearSLCT").value;
                    if((year%4==0 && year%100) || year%400==0)monthLength = 29;
                    else monthLength = 28;
                }
                for(var i = 1; i <= monthLength; i++) {
                    var opt = '' + i;
                    var el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    select.appendChild(el);
                }
                return False(5);
            }
            function fillbirthmonthSLCT()
            {
                document.getElementById("birthmonthSLCT").innerHTML = "";
                
                var el = document.createElement("option");
                el.textContent = "Month";
                el.value = "Month";
                document.getElementById("birthmonthSLCT").appendChild(el);
                
                if(document.getElementById("birthmonthSLCT").value == "Year") return False(5);
                var select = document.getElementById("birthmonthSLCT"); 
                var options = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; 
                
                for(var i = 0; i < 12; i++) {
                    var el = document.createElement("option");
                    el.textContent = options[i];
                    el.value = options[i];
                    select.appendChild(el);
                }
                return False(5);
            }
            function fillbirthyearSLCT()
            {
                var select = document.getElementById("birthyearSLCT");
                
                for(var i=2014; i>=1900; i--)
                {
                    var opt = '' + i;
                    var el = document.createElement("option");
                    el.textContent = opt;
                    el.value = opt;
                    select.appendChild(el);
                }
                return False(5);
            }
            function resetAllERRLabels()
            {
                document.getElementById("firstnameERR").innerHTML = "";
                document.getElementById("lastnameERR").innerHTML = "";
                document.getElementById("emailERR").innerHTML = "";
                document.getElementById("strengthLBL").innerHTML = "";
                document.getElementById("matchLBL").innerHTML = "";
            }
            function checkGender()
            {
                var inputs = document.getElementsByTagName("input");
                
                for (var i=0; i<inputs.length; i++)
                {
                    if (inputs[i].type == 'radio' && inputs[i].checked) 
                        return True(6)
                }
                return False(6);
            }
            function countChecked()
            {
                var inputs = document.getElementsByTagName("input");
                //alert('yalahwy: ' + cb.length);
                var count = 0;
                for (var i=0; i<inputs.length; i++)
                {
                    if (inputs[i].type == 'checkbox' && inputs[i].checked) 
                        count++;
                }
                
                if(count >= 3) return True(7);
                return False(7);
            }
            function checkAll()
            {
                for(i=0; i<8; i++)
                    if(!flag[i])
                    {
                        //alert('omg: ' + i);
                        document.getElementById('submitBTN').disabled = true;
                        return false;
                    }
                document.getElementById('submitBTN').disabled = false;
                return true;
            }
            
            
            