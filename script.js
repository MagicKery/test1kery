function downloadImage(url, filename) {
            const link = document.createElement('a');
            link.href = url;
            link.download = filename || url.split('/').pop();
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        let donateBtn = document.querySelector('.btn-donate');
        donateBtn.addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
            title: "Do you want to save this image?",
            imageUrl: "imgs/abaQR.webp",
            imageWidth: 200,
            showDenyButton: true,
            confirmButtonText: "Download",
            denyButtonText: `Cancel`
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                downloadImage('imgs/abaQR.png', 'imgs/abaQR.png');
                Swal.fire(
                    "Downloaded!",
                    "The image download should begin automatically.",
                    "success"
                );
            }
            else if (result.isDenied) Swal.fire("There might be an issue", "", "info");
            });
        });
