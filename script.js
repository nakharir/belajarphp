document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.querySelector("form");
  const buttons = document.querySelectorAll("button");
  const inputs = document.querySelectorAll("input");

  // Load sound effects
  const clickSound = new Audio(
    "https://freesound.org/data/previews/316/316847_5121236-lq.mp3"
  );
  const errorSound = new Audio(
    "https://freesound.org/data/previews/523/523731_1015240-lq.mp3"
  );
  const successSound = new Audio(
    "https://freesound.org/data/previews/331/331912_5865515-lq.mp3"
  );

  // Button sound effects
  buttons.forEach((button) => {
    button.addEventListener("click", function () {
      clickSound.play();
    });
  });

  // Form validation with sound effect
  loginForm.addEventListener("submit", function (event) {
    const username = document.querySelector("input[name='username']").value;
    const password = document.querySelector("input[name='password']").value;

    if (username === "" || password === "") {
      event.preventDefault();
      errorSound.play();
      alert("Username dan password tidak boleh kosong!");
    } else {
      successSound.play();
    }
  });

  // Pixel hover effect
  buttons.forEach((button) => {
    button.addEventListener("mouseover", function () {
      button.style.transform = "scale(1.1)";
    });
    button.addEventListener("mouseout", function () {
      button.style.transform = "scale(1)";
    });
  });

  // Input glitch effect
  inputs.forEach((input) => {
    input.addEventListener("focus", function () {
      input.style.border = "3px solid #ff0000";
      input.style.boxShadow = "3px 3px 0px #ffcc00";
    });
    input.addEventListener("blur", function () {
      input.style.border = "3px solid #ffcc00";
      input.style.boxShadow = "none";
    });
  });

  // Loading screen effect
  const loadingScreen = document.createElement("div");
  loadingScreen.style.position = "fixed";
  loadingScreen.style.top = "0";
  loadingScreen.style.left = "0";
  loadingScreen.style.width = "100%";
  loadingScreen.style.height = "100%";
  loadingScreen.style.background = "black";
  loadingScreen.style.color = "yellow";
  loadingScreen.style.fontSize = "20px";
  loadingScreen.style.display = "flex";
  loadingScreen.style.alignItems = "center";
  loadingScreen.style.justifyContent = "center";
  loadingScreen.innerText = "LOADING...";
  document.body.appendChild(loadingScreen);

  setTimeout(() => {
    loadingScreen.style.display = "none";
  }, 2000);
});
document.addEventListener("DOMContentLoaded", function () {
  const text = "Modal GPT bisa apa aja? hahaha";
  const speed = 100; // Kecepatan mengetik
  let i = 0;

  function typeWriter() {
    if (i < text.length) {
      document.getElementById("typing-text").innerHTML += text.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }

  typeWriter();
});
