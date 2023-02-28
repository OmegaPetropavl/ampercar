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




// function validation() {
//     // Получение значений полей формы
//     const name = document.getElementById("name").value;
//     const email = document.getElementById("email").value;
//     const login = document.getElementById("login").value;
//     const password1 = document.getElementById("password1").value;
//     const password2 = document.getElementById("password2").value;
//     const ruleCheck = document.getElementById("rule-check");
  
//     // Регулярное выражение для проверки email
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
//     // Регулярное выражение для проверки логина
//     const loginPattern = /^[a-zA-Z]{6,}$/;
  
//     // Проверка заполнения поля name
//     if (name === "") {
//       showError("name", "Необходимо заполнить поле 'Ваше имя'");
//       return false;
//     }
  
//     // Проверка email
//     if (!emailPattern.test(email)) {
//       showError("email", "Некорректный email адрес");
//       return false;
//     }
  
//     // Проверка логина
//     if (!loginPattern.test(login)) {
//       showError("login", "Логин должен содержать не менее 6 символов английского алфавита");
//       return false;
//     }
  
//     // Проверка соответствия ввода паролей
//     if (password1 !== password2) {
//       showError("password2", "Пароли не совпадают");
//       return false;
//     }
  
//     // Регулярное выражение для проверки пароля
//     const passwordPattern = /\d/;
  
//     // Проверка паттерна пароля
//     if (!passwordPattern.test(password1)) {
//       showError("password1", "Пароль должен содержать хотя бы одну цифру");
//       return false;
//     }
  
//     // Проверка чекбокса
//     if (!ruleCheck.checked) {
//       showError("rule-check", "Необходимо принять политику конфиденциальности");
//       return false;
//     }
  
//     // Успешная валидация формы
//     alert("Проверка формы прошла успешно, форма отправлена!");
//     return true;
//   }
  
//   // Функция для отображения ошибок
//   function showError(inputName, errorMessage) {
//     const input = document.getElementById(inputName);
//     const errorContainer = input.parentElement.querySelector(".error-message");
  
//     // Отображение ошибки
//     errorContainer.innerHTML = errorMessage;
//     errorContainer.style.display = "block";
  
//     // Стилизация поля ввода с ошибкой
//     input.classList.add("invalid");
  
//     // Установка обработчика событий на поле ввода для скрытия ошибки при изменении значения
//     input.addEventListener("input", () => {
//       errorContainer.style.display = "none";
//       input.classList.remove("invalid");
//     });
//   }


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

  // Проверка заполнения поля "Имя"
  if (name == "") {
      nameError.innerHTML = "Необходимо заполнить поле 'Имя'";
      return false;
  } else {
      nameError.innerHTML = "";
  }

  // Проверка ввода email
  var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (!emailPattern.test(email)) {
      emailError.innerHTML = "Введите корректный email вида example@mail.com";
      return false;
  } else {
      emailError.innerHTML = "";
  }

  // Проверка ввода login
  var loginPattern = /^[a-zA-Z]{6,}$/;

  if (!loginPattern.test(login)) {
      loginError.innerHTML = "Логин должен содержать не менее 6 символов английского алфавита";
      return false;
  } else {
      loginError.innerHTML = "";
    }
  
  // Проверка ввода пароля
  var passwordPattern = /^(?=.*\d)[a-zA-Z\d]{8,}$/;

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

  // Если ошибок нет, очистить сообщения об ошибках
  nameError.innerHTML = "";
  emailError.innerHTML = "";
  loginError.innerHTML = "";
  password1Error.innerHTML = "";
  password2Error.innerHTML = "";
  checkboxError.innerHTML = "";



  alert("Проверка формы прошла успешно, форма отправлена!");
  return true;
}




