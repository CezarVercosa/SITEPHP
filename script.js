window.onload = function(){
    document.getElementById("inscreva-se-btn").addEventListener("click", () => {
        document.querySelector(".bg-modal").style.display = "flex";
    });

    document.querySelector(".close").addEventListener("click", () =>{
        document.querySelector(".bg-modal").style.display = "none";
    });

    const form = document.getElementById("register-form")
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const data = new FormData(form);
        const dados = await fetch("registrar.php", {
            method: "POST",
            body: data
        });
        const resp = await dados.json();

        const register_message = document.getElementById("register-message");
        if(resp['erro']){
            register_message.innerHTML = resp['msg'];
            form.reset()
        }else{
            register_message.innerHTML = resp['msg'];
            form.reset()
        }
    });

}

 