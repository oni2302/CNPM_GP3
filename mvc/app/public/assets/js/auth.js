
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyAx9n_tdvrSa3XnPkk_XPtUmDdFNXLWYII",
      authDomain: "garageoni-2302.firebaseapp.com",
      projectId: "garageoni-2302",
      storageBucket: "garageoni-2302.appspot.com",
      messagingSenderId: "115690205574",
      appId: "1:115690205574:web:bdbc187894d0b93489bc07",
      measurementId: "G-6CY2PW3WT1"
    };
  
    // Initialize Firebase
    const app =  initializeApp(firebaseConfig);
    // Initalize Variable
    const auth = getAuth(firebase);

function SignUp(){
var email = document.getElementById('email').value;
var password = document.getElementById('password').value;
createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    
    console.log(errorCode+" : "+errorMessage);
    // ..
  });
}

var btn_sign_up = document.getElementById('btn-sign-up');
btn_sign_up.onclick = SignUp();
