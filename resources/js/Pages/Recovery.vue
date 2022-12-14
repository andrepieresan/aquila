<template>
  <div class="wrapper">
    <div class="container">
      <h2>Esquece a senha?</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua.
      </p>
      <input type="text" class="passInput" placeholder="andradessouza@uol.com" />
      <button>Enviar</button>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: { Link },
  mounted() {
    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = () => {
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    };
    loginBtn.onclick = () => {
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    };
    signupLink.onclick = () => {
      signupBtn.click();
      return false;
    };
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
html,
body {
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #13101d, #2c2858);
}
::selection {
  background: #2c2858;
  color: #fff;
}
.wrapper {
  width: 450px;
  overflow: hidden;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
}
.container {
 
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 35px;
}

.lock-icon {
  font-size: 3rem;
}

h2 {
  font-weight: bold;
  font-size: 2rem;
  margin-bottom: 40px;
}

p {
  text-align: center;
  padding: 10px;
  font-size: 14px;
  margin-bottom: 20px;
}

.passInput {
  margin-top: 15px;
  width: 80%;
  border: 2px solid #2c2858;
  font-size: 15px;
  outline: none;
  margin-bottom:25px
}

button {
  margin-top: 15px;
  width: 80%;
  padding: 10px;
  color:#fff;
  text-transform: uppercase;
  background: -webkit-linear-gradient(right, #33073a, #2c2858, #140d5a, #4c43b1);
  border-radius: 5px;
  transition: all 0.4s ease;
}
</style>
