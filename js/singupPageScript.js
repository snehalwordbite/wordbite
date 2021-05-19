// singupPageScript.js

window.onload = ()=>{
    document.getElementById('signupBtn').disabled=true;
}

var getData = async (userValue) => {
    let resp = await axios.get('../src/registerPageFunctions.php?username='+userValue);
    if(resp.data==='true'){
        let emailSpan = document.getElementById('inputUniqueNameSpan');
        emailSpan.style.color = 'red';
        emailSpan.innerText = userValue+' is not available';
    }else{
        let emailSpan = document.getElementById('inputUniqueNameSpan');
        emailSpan.style.color = 'green';
        emailSpan.innerText = userValue+' is available';
    }
}

let userName = document.getElementById('inputUniqueName');
userName.onblur = ()=>{
    let userValue = userName.value;
    if(userValue!==""){
        getData(userValue);
    }
}

let password1 = document.getElementById('inputPassword1');
let password2 = document.getElementById('inputPassword2');

password2.addEventListener('blur',()=>{
    if(password1.value!=="" && password2.value!==""){
        if(password1.value===password2.value){
            var passSpan = document.getElementById('passwordSpan');
            passSpan.style.color='green';
            passSpan.innerText = 'Password Matched!';
            document.getElementById('signupBtn').disabled=false;
        }else{
            var passSpan = document.getElementById('passwordSpan');
            passSpan.style.color='red';
            passSpan.innerText = 'Password not matching!';
            document.getElementById('signupBtn').disabled=true;
        }
    }
})