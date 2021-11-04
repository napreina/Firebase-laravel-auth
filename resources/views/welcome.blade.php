<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Firebase Phone Authentication</title>
  <script src="https://www.gstatic.com/firebasejs/4.3.1/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyABjC0z1Go5gHKblovBmHgc-EB3P_-vrzw",
        authDomain: "etleg-development.firebaseapp.com",
        databaseURL: "https://etleg-development.firebaseio.com",
        projectId: "etleg-development",
        storageBucket: "etleg-development.appspot.com",
        messagingSenderId: "765296740947"
    };
    firebase.initializeApp(config);
  </script>
  <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
  <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="container">
        <h3>Firebase Phone Number Auth. Demo</h3>
        <div id="loading">Loading...</div>
        <button type="button" onclick="javascript:showFirebase();">Mobile Sign Up</button>
        <div id="loaded" class="hidden">
          <div id="main">
            <div id="user-signed-in" class="hidden">
              <div id="user-info">
                <div id="photo-container">
                  <img id="photo">
                </div>
                <div id="name"></div>
                <div id="email"></div>
                <div id="phone"></div>
                <div class="clearfix"></div>
              </div>
              <p>
                <button id="sign-out">Sign Out</button>
                <button id="delete-account">Delete account</button>
              </p>
            </div>
            <div id="user-signed-out" class="hidden">
              
              <div id="firebaseui-spa">
              </div>
            </div>
          </div>
          <div id="firebaseui-container"></div>
        </div>
      </div>
      <script src="app.js"></script>
  </body>
</html>