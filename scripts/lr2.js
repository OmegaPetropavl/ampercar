/*
//Задание 1. Задача 2. Найти арифметическое среднее элементов числового массива
function average(arr) {
 let arrN = arr.split(",").map(v => parseInt(v))
    if(arrN.length === 0)
        return 0;
    let sum = 0;
    for(let i = 0; i < arrN.length; i++) {
        sum += arrN[i];
    }
    return ("Среднее арифметическое чисел = " +sum / arrN.length);
    }

var k = prompt("Введите числа через запятую:");
alert(average(k));
alert(average(k));
*/

//Задание 2.  Создайте функцию rgb(), которая будет принимать три числовых аргумента и возвращать строку вида «rgb(23,100,134)».
// Если аргументы не заданы, считать их равными нулю.
// function color(r = 0, g = 0, b = 0) {
//     return "rgb(" + r + ", " + g + ", " + b  + ")";
// }
// let r = prompt("r :");
// let g = prompt("g :");
// let b = prompt("b:");
// alert(rgb (r,g,b))

//Задание 3. Разработайте форму, заполняемую пользователем, на выбранную тематику.
// При этом должны быть использованы все виды элементов, которые могут присутствовать на форме.
// Разработайте скрипт, проверяющий правильность заполнения полей формы (не пустые ли они, соответствуют ли типы и диапазоны данных и др.)
// При неправильном заполнении сообщить, какие поля надо исправить. Если всё заполнено верно, сообщить, что данные отправлены.
function validate(){
    //Считаем значения из полей name и email в переменные x и y
    var x=document.forms["price-form"]["name"].value;
    var y=document.forms["price-form"]["email"].value;
    //Если поле name пустое выведем сообщение и предотвратим отправку формы
    if (x.length==0){
        document.getElementById("name").innerHTML="*данное поле обязательно для заполнения";
        return false;
    }
    //Если поле email пустое выведем сообщение и предотвратим отправку формы
    if (y.length==0){
        document.getElementById("email").innerHTML="*данное поле обязательно для заполнения";
        return false;
    }
    //Проверим содержит ли значение введенное в поле email символы @ и .
    at=y.indexOf("@");
    dot=y.indexOf(".");
    //Если поле не содержит эти символы знач email введен не верно
    if (at<1 || dot <1){
        document.getElementById("emailf").innerHTML="*email введен не верно";
        return false;
    }
}




