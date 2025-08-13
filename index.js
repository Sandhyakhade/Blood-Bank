const btn = document.getElementById('submit');
const form = document.querySelector('form');

function validation() {
    const username = document.getElementById('email').value;
    const passw = document.getElementById('passw').value;
    const cpassw = document.getElementById('cpassw').value;
    if (passw == cpassw)
        return true;
}

btn.addEventListener('click', e => {
   /* e.preventDefault();*/
    if (validation()) {
        form.submit();
        
    } else {
        alert("password and confirmed password does not match");
        e.preventDefault();
        return false;
    }
});
