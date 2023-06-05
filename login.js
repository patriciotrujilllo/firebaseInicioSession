import './firebaseUtils.js'
import { getAuth, signInWithEmailAndPassword, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";

const form = document.querySelector('#formInicioSesion')
const auth = getAuth();


const firebaseInicioSesion = async (email, password) => {
    try {
        const credencialesInicioSesion = await signInWithEmailAndPassword(auth, email, password)

        console.log("se inicio sesion", credencialesInicioSesion);
        firebaseCambioPagina();

    } catch (error) {
        console.log("Error:", error.message);
    }
}

const firebaseCambioPagina = () => {
    window.location.href = "./vistas/Index.php";
}

const submit = (event) => {

    event.preventDefault();
    let formData = new FormData(event.target);
    const data = Object.fromEntries(formData);
    firebaseInicioSesion(data.email, data.password);

}

//el DOMContent esta vacio por que no hay nada que necesite ser renderizado en el DOM
const DOMContentLoaded = () => {


}

document.addEventListener("DOMContentLoaded", DOMContentLoaded);
form.addEventListener("submit", submit);