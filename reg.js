alert("Welcome")
function Validate(){
    if (document.Myform.aad.value == ""){
        alert("please provide your aadhaar number");
        document.Myform.aad.focus();
        return false;
    }
    else if (document.Myform.fn.value == ""){
        alert("please provide your First Name");
        document.Myform.fn.focus();
        return false;
    }
    else if (document.Myform.mn.value == ""){
        alert("please provide your Middle Name");
        document.Myform.mn.focus();
        return false;
    }
    else if (document.Myform.ln.value == ""){
        alert("please provide your Last Name");
        document.Myform.ln.focus();
        return false;
    }
    else if (document.Myform.pwd.value == ""){
        alert("please provide your Password");
        document.Myform.pwd.focus();
        return false;
    }
    else if (document.Myform.cpwd.value == ""){
        alert("Please confirm your Password");
        document.Myform.cpwd.focus();
        return false;
    }
    else if (document.Myform.pwd.value != document.Myform.cpwd.value){
        alert("Password is not matching");
        document.Myform.pwd.focus();
        return false;
    }
    else {}
}
function goToNewPage(){
    var url = document.getElementById('login').value;
    if(url != 'none'){
        window.location = url;
    }
}