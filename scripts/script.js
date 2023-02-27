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


// function validate() {
//     var name = document.getElementById("name").value;
//     var email = document.getElementById("email").value;
//     var login = document.getElementById("login").value;
//     var password = document.getElementById("password").value;
//     if (name == "") {
//         alert("Пожалуйста, введите ваше имя.");
//         return false;
//     }
//     if (email == "") {
//         alert("Пожалуйста, введите ваш e-mail.");
//         return false;
//     }
//     if (email.indexOf("@") == -1) {
//         alert("Пожалуйста, введите корректный e-mail.");
//         return false;
//     }
//     if (email.indexOf(".") == -1) {
//         alert("Пожалуйста, допишите точку")
//         return false;
//     }
//     if (login == "") {
//         alert("Пожалуйста, введите ваш логин.");
//         return false;
//     }
//     if (password == "") {
//         alert("Пожалуйста, введите ваш пароль.");
//         return false;
//     }
//     return true;

// }


function validation() {
    // Получение значений полей формы
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const login = document.getElementById("login").value;
    const password1 = document.getElementById("password1").value;
    const password2 = document.getElementById("password2").value;
    const ruleCheck = document.getElementById("rule-check");
  
    // Регулярное выражение для проверки email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    // Регулярное выражение для проверки логина
    const loginPattern = /^[a-zA-Z]{6,}$/;
  
    // Проверка заполнения поля name
    if (name === "") {
      showError("name", "Необходимо заполнить поле 'Ваше имя'");
      return false;
    }
  
    // Проверка email
    if (!emailPattern.test(email)) {
      showError("email", "Некорректный email адрес");
      return false;
    }
  
    // Проверка логина
    if (!loginPattern.test(login)) {
      showError("login", "Логин должен содержать не менее 6 символов английского алфавита");
      return false;
    }
  
    // Проверка соответствия ввода паролей
    if (password1 !== password2) {
      showError("password2", "Пароли не совпадают");
      return false;
    }
  
    // Регулярное выражение для проверки пароля
    const passwordPattern = /\d/;
  
    // Проверка паттерна пароля
    if (!passwordPattern.test(password1)) {
      showError("password1", "Пароль должен содержать хотя бы одну цифру");
      return false;
    }
  
    // Проверка чекбокса
    if (!ruleCheck.checked) {
      showError("rule-check", "Необходимо принять политику конфиденциальности");
      return false;
    }
  
    // Успешная валидация формы
    alert("Проверка формы прошла успешно, форма отправлена!");
    return true;
  }
  
  // Функция для отображения ошибок
  function showError(inputName, errorMessage) {
    const input = document.getElementById(inputName);
    const errorContainer = input.parentElement.querySelector(".error-message");
  
    // Отображение ошибки
    errorContainer.innerHTML = errorMessage;
    errorContainer.style.display = "block";
  
    // Стилизация поля ввода с ошибкой
    input.classList.add("invalid");
  
    // Установка обработчика событий на поле ввода для скрытия ошибки при изменении значения
    input.addEventListener("input", () => {
      errorContainer.style.display = "none";
      input.classList.remove("invalid");
    });
  }




