// Novas Coisas nesse script:
// 'element.hasChildNodes()', 'element.firstChild',
// and 'regex' which stands for Regular Expressions.

function validate(userForm) {
    //validating email first...
    var div = document.getElementById("emailmsg");
    div.style.color = "red";
    if (div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    var regex = /(^\w+\@\w+\.\w+)/;
    var match = regex.exec(userForm.emailaddress.value);
    if (!match) {
        div.appendChild(document.createTextNode("Invalid Email"));
        userForm.emailaddress.focus();
        return false;
    }

    //validating password now...
    var div = document.getElementById("passwdmsg");
    div.style.color = "red";
    if (div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    if (userForm.password.value.length <= 5) {
        div.appendChild(document.createTextNode("The password should be of at least size 6"));
        userForm.password.focus();
        return false;
    }

    //validating Re-pass now...
    var div = document.getElementById('repasswdmsg');
    div.style.color = 'red';
    if (div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    if (userForm.password.value !== userForm.repassword.value) {
        div.appendChild(document.createTextNode('The 2 passwords don\'t match'));
        userForm.repassword.focus();
        return false;
    }

    //validating user now...
    var div = document.getElementById('usrmsg');
    div.style.color = 'red';
    if (div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    if (userForm.complete_name.value.length === 0) {
        div.appendChild(document.createTextNode('Name Cannot be blank'));
        userForm.complete_name.focus();
        return false;
    }

    return true;
}