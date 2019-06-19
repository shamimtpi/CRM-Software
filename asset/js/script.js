function toggleResetPswd(e){
    e.preventDefault();
    $('#sweetlogin .form-signin').slideToggle() // display:block or none
    $('#sweetlogin .form-reset').slideToggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#sweetlogin .form-signin').slideToggle(); // display:block or none
    $('#sweetlogin .form-signup').slideToggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#sweetlogin #forgot_pswd').click(toggleResetPswd);
    $('#sweetlogin #cancel_reset').click(toggleResetPswd);
    $('#sweetlogin #btn-signup').click(toggleSignUp);
    $('#sweetlogin #cancel_signup').click(toggleSignUp);
})