


document.getElementById("main-action").onclick = function () {
    document.getElementById("cars").scrollIntoView({behavior:"smooth"})
}

var buttons = document.getElementsByClassName("car-button");
for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function () {
        document.getElementById("price").scrollIntoView({behavior:"smooth"})
    }
}

document.addEventListener("DOMContentLoaded", function () {
    let layer = document.querySelector('.price-image');
    document.addEventListener('mousemove', (event) => {
        layer.style.transform = 'translate3d(' + ((event.clientX * 0.4) / 9) + 'px,' + ((event.clientY * 0.4) / 9) + 'px,0px)';
    });

    const elem = document.querySelector(".main");
    document.addEventListener('scroll', () => {
        elem.style.backgroundPositionX = '0' + (0.2 * window.pageYOffset) + 'px';
    })
});


function validation() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var login = document.getElementById("login").value;
  var password1 = document.getElementById("password1").value;
  var password2 = document.getElementById("password2").value;
  var checkbox = document.getElementById("rule-check").checked;

  var nameError = document.getElementById("name-error");
  var emailError = document.getElementById("email-error");
  var loginError = document.getElementById("login-error");
  var password1Error = document.getElementById("password1-error");
  var password2Error = document.getElementById("password2-error");
  var checkboxError = document.getElementById("checkbox-error");


  var allInputs = document.querySelectorAll("form input");
    allInputs.forEach(function(input) {
        input.classList.remove("error-input");
        input.addEventListener("input", function() {
            input.classList.remove("error-input");
            nameError.innerHTML = "";
            emailError.innerHTML = "";
            loginError.innerHTML = "";
            password1Error.innerHTML = "";
            password2Error.innerHTML = "";
            phoneError.innerHTML = "";
            checkboxError.innerHTML = "";
        });
    });

  // Проверка заполнения поля "Имя"
  if (name == "") {
      nameError.innerHTML = "Необходимо заполнить поле 'Имя'";
      return false;
  } else {
      nameError.innerHTML = "";
  }

  // Проверка ввода email
  const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (!emailPattern.test(email)) {
      emailError.innerHTML = "Введите корректный email вида example@mail.com";
      document.getElementById("email").classList.add("error-input");
      return false;
  } else {
      emailError.innerHTML = "";
      document.getElementById("email").classList.remove("error-input");
  }


  // Проверка ввода login
  const loginPattern = /^[a-zA-Z]{6,}$/;

  if (!loginPattern.test(login)) {
      loginError.innerHTML = "Логин должен содержать не менее 6 символов английского алфавита";
      return false;
  } else {
      loginError.innerHTML = "";
    }
  
  // Проверка ввода пароля
  const passwordPattern = /^(?=.*\d)[a-zA-Z\d]{8,}$/;

  if (!passwordPattern.test(password1)) {
      password1Error.innerHTML = "Пароль должен содержать не менее 8 символов и хотя бы одну цифру";
      return false;
  } else {
      password1Error.innerHTML = "";
  }

  // Проверка совпадения паролей
  if (password1 != password2) {
      password2Error.innerHTML = "Пароли не совпадают";
      return false;
  } else {
      password2Error.innerHTML = "";
    }

  // Проверка поставленного checkbox
  if (!checkbox) {
      checkboxError.innerHTML = "Необходимо согласие";
      return false;
  } else {
      checkboxError.innerHTML = "";
  }


  alert("Проверка формы прошла успешно, форма отправлена!");
  return true;
}

//Скрипт смены темы





