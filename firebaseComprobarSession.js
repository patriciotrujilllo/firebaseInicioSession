import { getAuth } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-auth.js";
import './firebaseUtils.js'


const auth = getAuth();
// Función para comprobar el estado de autenticación
// Función para comprobar el estado de autenticación
const comprobarEstadoAutenticacion = async () => {
    return new Promise((resolve, reject) => {
        auth.onAuthStateChanged((user) => {
            if (user) {
                // El usuario ha iniciado sesión
                console.log('Usuario actual:', user.email);
                resolve();
            } else {
                // El usuario ha cerrado sesión
                console.log('No hay usuario autenticado');

                reject();
            }
        });
    });
};



comprobarEstadoAutenticacion()
    .then(() => {
        document.getElementById("loader").style.display = "none";
        document.getElementById("contenido").style.display = "block";
    })
    .catch(() => {
        window.location.href = "../login.php";
    });

    //window.location.href = "../login.php";




