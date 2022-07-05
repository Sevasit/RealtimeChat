const form = document.querySelector(".sigup form"),
continueBtn = form.querySelector(".botton input");
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form form submitting
}

continueBtn.onclick = ()=> {
    // start ajax
    let xhr = new XMLHttpRequest(); //create XML Object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=> {
        if(xhr.readyState == XMLHttpRequest.DONE) {
            if(xhr.status == 200) {
                let data = xhr.response;
                if(data == "success"){
                    location.href = "users.php";
              }else{
                errorText.textContent = data;
                errorText.style.display = "block";
              }
            }
        }
    }
    //we have to send the form data through ajax to php
    let formData = new FormData(form); // create a new formData object
    xhr.send(formData); // sending the form data to php
}