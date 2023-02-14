document.getElementById("main-action").onclick = function () {
    document.getElementById("cars").scrollIntoView({behavior:"smooth"})
}

var buttons = document.getElementsByClassName("car-button");
for (var i = 0; i < buttons.length; i++) {
    buttons[i].onclick = function () {
        document.getElementById("price").scrollIntoView({behavior:"smooth"})
    }
}

document.getElementById("price-action").onclick = function () {
    if (document.getElementById("name").value === "") {
        document.getElementById("name").innerHTML="*данное поле обязательно для заполнения";
        return false;
    }
    else if (document.getElementById("phone").value === "") {
        alert("Заполните поле телефон!");
    }
    else if (document.getElementById("car").value === "") {
        alert("Заполните поле автомобиль!");
    }
    else if (document.getElementById("email").value === "") {
        alert("Заполните поле email!");
    }
    else {
        alert("Спасибо за заявку, мы свяжемся с вами в ближайшее время!");
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


// $(function() {
//     let header = $('.header');
//
//     $(window).scroll(function() {
//         if($(this).scrollTop() > 1) {
//             header.addClass('header_fixed');
//         } else {
//             header.removeClass('header_fixed');
//         }
//     });
// });


// $(function() {// Для удаления прерывания при скролле (шапка)
//     let header = $('.header');
//     let hederHeight = header.height(); // вычисляем высоту шапки
//
//     $(window).scroll(function() {
//         if($(this).scrollTop() > 1) {
//             header.addClass('header_fixed');
//             $('body').css({
//                 'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
//             });
//         } else {
//             header.removeClass('header_fixed');
//             $('body').css({
//                 'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
//             })
//         }
//     });
// });

