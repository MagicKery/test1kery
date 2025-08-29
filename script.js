let gift = document.getElementById("donate");
function donate(){
    Swal.fire({
        title: "Thank you very much for stay here!",
        html:  `
        <div>
            <img src="images/qr.jpg" style="border-radius: 15%; height: 30rem; margin: auto; padding: 2rem;">
        </div>
        <div>
            I'm very happy if you are here. I'll never forget you.
        </div>
        `,
        text: "",
        });

    }
