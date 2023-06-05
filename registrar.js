import './firebaseUtils.js'
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";

const form = document.querySelector('#formRegister')
const auth = getAuth();

const firebaseregistrarUsuario = async (email, password) => {
    try {
        let credenciales = await createUserWithEmailAndPassword(auth, email, password);
        if (credenciales) {
            console.log("Se inicio Sesion");
        }

    } catch {
        console.log("Error");
    }


}

const submit = (event) => {

    event.preventDefault();
    let formData = new FormData(event.target);
    const data = Object.fromEntries(formData);
    firebaseregistrarUsuario(data.email, data.password);

}

//el DOMContent esta vacio por que no hay nada que necesite ser renderizado en el DOM
const DOMContentLoaded = () => {


}

document.addEventListener("DOMContentLoaded", DOMContentLoaded);
form.addEventListener("submit", submit);