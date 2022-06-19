function validateName(){
    let patt = /[0-9]+/;
    let txt = document.getElementById('nm').innerText;
    let vla1 = document.myForm.full_name.value;
if( vla1 == "" )
{
txt= "Please provide your name!" ;
document.myForm.full_name.focus() ;
return false;
}
if( vla1.length<6 )
{
vla1= " name cannot be less 6!" ;
document.myForm.full_name.focus() ;
return false;
}
if( vla1.match(patt) )
{
vla1=" name cannot contain a number!" ;
document.myForm.full_name.focus() ;
return false;
}
return true;

}
function validatPassword() {
    let pt = /[0-9]/;
    let pt2 = /[A-Z]/;
    let pt3 = /[a-z]/;

    let val = document.myForm.password.value;
    let spn = document.getElementById('ps').innerText;
    spn.style.color = 'red';
    if (val.length < 8) {
        
        spn = "password too short!"
        return false;
    }
    if (!val.match(pt)) {
        spn = "password should contain number"
        return false;
    }
    if (!val.match(pt2)) {
        spn = "password should contain capital letter"
        return false;
    }
    if (!val.match(pt3)) {
        spn = "password should contain small letter"
        return false;
    }
    return true;
}
function validateusername()
{
var uname=document.myForm.username.value;

var pattern=/^[a-zA-Z0-9]+$/;
if(uname.match(pattern))

{
    document.getElementById('un').innerText = "User name should conatin only alphanumeric characters\n";
    return false;
}
    return true;
}
function validate() {
    if (!validatPassword()) {
        return false;
    }
    if (!validateName()) {
        return false;
    }
    if (!validateusername()) {
        return false;
    }
    return true;

}


