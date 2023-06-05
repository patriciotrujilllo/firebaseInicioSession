import { getAuth, signOut } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";
import './firebaseUtils.js'

let botonCerrarSesion = document.querySelector('#logout')


const auth = getAuth();

// Función para cerrar sesión
const cerrarSesion = async () => {
    try {
        await signOut(auth);
        // Cierre de sesión exitoso
        console.log('Usuario ha cerrado sesión');
        // Realiza las acciones correspondientes después de cerrar sesión
        window.location.href = "../login.php";
    } catch (error) {
        // Error al cerrar sesión
        console.log('Error al cerrar sesión:', error);
    }
};

// Ejecutar la función al hacer clic en un botón de "Cerrar sesión" o cualquier otro evento que desencadene el cierre de sesión
botonCerrarSesion.addEventListener("click", cerrarSesion);
