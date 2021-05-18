// singupPageScript.js
var getData = async (userValue) => {
    let resp = await axios.get('../src/register.php?username='+userValue);
    if(resp.data==='true'){
        let emailSpan = document.getElementById('inputEmailSpan');
        emailSpan.style.color = 'red';
        emailSpan.innerText = userValue+' is not available';
    }else{
        let emailSpan = document.getElementById('inputEmailSpan');
        emailSpan.style.color = 'green';
        emailSpan.innerText = userValue+' is available';
    }
}

let userName = document.getElementById('inputEmail');
userName.onblur = ()=>{
    let userValue = userName.value;
    getData(userValue);
}

let password1 = document.getElementById('inputPassword1');
let password2 = document.getElementById('inputPassword2');

password2.addEventListener('blur',()=>{
    if(password1.value===password2.value){
        var passSpan = document.getElementById('passwordSpan');
        passSpan.style.color='green';
        passSpan.innerText = 'Password Matched!';
    }else{
        var passSpan = document.getElementById('passwordSpan');
        passSpan.style.color='red';
        passSpan.innerText = 'Password not matching!';
    }
})