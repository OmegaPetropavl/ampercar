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


function validate() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var login = document.getElementById("login").value;
    var password = document.getElementById("password").value;
    var car = document.getElementById("car").value;

    if (name == "") {
        alert("Пожалуйста, введите ваше имя.");
        return false;
    }
    if (email == "") {
        alert("Пожалуйста, введите ваш e-mail.");
        return false;
    }
    if (email.indexOf("@") == -1) {
        alert("Пожалуйста, введите корректный e-mail.");
        return false;
    }
    if (email.indexOf(".") == -1) {
        alert("Пожалуйста, допишите точку")
        return false;
    }
    if (login == "") {
        alert("Пожалуйста, введите ваш логин.");
        return false;
    }
    if (password == "") {
        alert("Пожалуйста, введите ваш пароль.");
        return false;
    }
    if (car == "") {
        alert("Пожалуйста, введите название автомобиля, который вас интересует.");
        return false;
    }

    return true;

}




