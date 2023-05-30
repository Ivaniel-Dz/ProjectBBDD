const form = document.querySelectorAll("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backtBtn"),
        allInput = form.querySelectorAll(".first input");

nextBtn.addEventListener("click", ()=>{
    allInput.forEach(input =>{
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
            alert("Campo está vacío");
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));