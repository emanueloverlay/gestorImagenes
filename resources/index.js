
window.onload = () => {

    const formElement = document.querySelector("#form")

    formElement.onsubmit = async (e) => {
        e.preventDefault()
        const formData = new FormData(formElement);
        const url = "http://localhost/GestorImagenes/app/controllers/loginController.php?function=login"

        const config = {
            method: 'POST',
            body: formData
        }

        const consulta = await fetch(url, config);
        const respuesta = await consulta.json();

        if (respuesta) {
            localStorage.setItem('session', 'active');
            window.location.href = './gestor.php';
        } else {
            alert('Usuario o contraseña incorrectos');
        }

    }
}