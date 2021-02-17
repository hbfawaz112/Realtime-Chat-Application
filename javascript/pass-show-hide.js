const pswrdField = document.querySelector(".form .feild input[type='password']");

toggleBtn = document.querySelector("form .feild i");

toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password")
    {
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}