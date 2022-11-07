// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
import { getDatabase, ref, set } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-database.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB1D7j2cqdDflCWObKNbNYjE4QPNYvJskw",
    authDomain: "base1-936b9.firebaseapp.com",
    databaseURL: "https://base1-936b9-default-rtdb.firebaseio.com",
    projectId: "base1-936b9",
    storageBucket: "base1-936b9.appspot.com",
    messagingSenderId: "859161777358",
    appId: "1:859161777358:web:eaa63d79c51342bcdeac9f",
    measurementId: "G-BQCW8PFKNE"
};

// Initialize Firebase
 firebase.initializeApp(firebaseConfig);

 var firebaseRef1= firebase.database().ref('nombre');
 var firebaseRef2= firebase.database().ref('ApellidoPaterno');
 var firebaseRef3= firebase.database().ref('ApellidoMaterno');
 var firebaseRef4= firebase.database().ref('RFC');
 var firebaseRef5= firebase.database().ref('edad');
 var firebaseRef6= firebase.database().ref('fecha');

 document.querySelector('#btnEnviar').addEventListener('click', ()=>{
  const nombre= document.getElementById('nombre').value;
  firebaseRef1.set(nombre);
  const ApellidoPaterno= document.getElementById('ApellidoPaterno').value;
  firebaseRef2.set(ApellidoPaterno);
  const ApellidoMaterno= document.getElementById('ApellidoMaterno').value;
  firebaseRef3.set(ApellidoMaterno);
  const RFC= document.getElementById('RFC').value;
  firebaseRef4.set(RFC);
  const edad= document.getElementById('edad').value;
  firebaseRef5.set(edad);
  const fecha= document.getElementById('fecha').value;
  firebaseRef6.set(fecha);
  firebase++;
 })

 /* const url ='https://base1-936b9-default-rtdb.firebaseio.com/'

 fetch(url)
     .then(response => response.json())
     .then(data => {
 
         let nombre = document.getElementById('nombre')
         nombre.innerHTML =
 
             $(data.nombre)

         console.log(data)
     }) */