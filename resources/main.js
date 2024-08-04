
if (localStorage.getItem('session') !== 'active') {
    window.location.href = 'index.php';
}

window.onload = () => {

    const btnLogout = document.querySelector("#btnLogout");
    btnLogout.addEventListener('click', function () {
        fetch('http://localhost/GestorImagenes/app/controllers/loginController.php?function=logout')
            .then(response => response.json())
            .then(data => {
                if (data) {
                    localStorage.removeItem('session');
                    window.location.href = 'index.php';
                }
            });
    });

    loadGallery();
}


async function loadGallery() {
    try {
        const response = await fetch('http://localhost/GestorImagenes/app/controllers/imagesController.php?function=getGallery');
        const images = await response.json();

        let gallery = document.querySelector('#gallery');
        if (images.length > 0) {
            gallery.innerHTML = '';

            images.forEach(image => {
                const imgElement = document.createElement('img');
                imgElement.src = `./storage/uploads/${image.imageName}`;
                imgElement.alt = image.imageName;
                gallery.appendChild(imgElement);
            });
        } else {
            gallery.innerHTML = '';
            gallery.innerHTML = 'No se encontraron imagenes.';
        }
    } catch (error) {
        console.error('Error:', error);
    }
}