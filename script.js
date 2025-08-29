let gift = document.getElementById("donate");
function donate(){
    Swal.fire({
        title: "HappyBirthday!",
        html:  `
        <div>
            <img src="images/qr.jpg" style="border-radius: 15%; height: 30rem; margin: auto; padding: 2rem;">
        </div>
        <div>
            Thank you very much for stay here!!
        </div>
        `,
        text: "",
        });
    }