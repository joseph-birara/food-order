var  tag = document.getElementBy('error');
var text = tag.innerHTML;
//validate password 

function confirmPasswod() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        if (password != confirmPassword) {
            text="Passwords do not match."
            return false;
        }
    let pt = /[0-9]/;
    let pt2 = /[A-Z]/;
    let pt3 = /[a-z]/;

      if (password.length < 8) {
        
        text = "password too short!"
        return false;
    }
    if (!password.match(pt)) {
        text = "password should contain number"
        return false;
    }
    if (!password.match(pt2)) {
        text = "password should contain capital letter"
        return false;
    }
    if (!password.match(pt3)) {
        text = "password should contain small letter"
    }
    
        return true;
}
    

//validate email

function validateEmail(){
    let email=document.getElementById("email").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.match(mailformat))
            {
                text=" Length of email cannot be less than 6 or email has a wrong format" ;
                document.getElementById("email").focus() ;
                return false;
            }
    return true;   
}
    
//validate name 

 function validateusername()
 {
        var rname = document.getElementById('name');
        var userName =rname.value;

    var pattern=/^[a-zA-Z0-9]+$/;
    if(userName.match(pattern))

    {
        text = "User name should conatin only alphanumeric characters";
        rname.focus();
        return false;
    }
        if (userName.length > 12 || userName.length< 6) {
            text = " name length must be between 6 and 12";
        rname.focus();
        return false;

        }
        return true;
 }

 //validate last name 

function validateLastname()
{
        var uuname = document.getElementById('lastname');
        var uname = uuname.value;

    var pattern=/^[a-zA-Z0-9]+$/;
    if(uname.match(pattern))

    {
        text = "User name should conatin only alphanumeric characters";
        uuname.focus();
        return false;
    }
        if (uname.length > 12 || uname.length < 6) {
            text = "last name length must be between 6 and 12";
            uuname.focus();
        return false;

        }
        return true;
}
function validate() {
    if (!confirmPasswod()) {
        return false;
    }
    if (!validateusername()) {
        return false;
    }
    if (!validateLastname()) {
        return false;
    }
    if (!validateEmail()) {
        return false
    }
    return true;

}
