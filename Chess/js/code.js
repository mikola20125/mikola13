var mass2 = ["a","b","c","d","e","f","g","h"];
var mass = ["ɐ","q","ɔ","p","ǝ","ɟ","ƃ","ɥ"];




//Доска генерируется ввиде таблицы. Количество строк - 10, кол-во ячеек - 10

//Создание таблицы для доски
function generateTable(){

    var table = "<table style='border-spacing: 0;' >";
    table += "<tr><th></th>";//Открываем первую строку и отрисовываем ячейки в коде ниже
    for(i in mass2){
        table += "<th>"+mass[i]+"</th>";
    }
    table += "<th></th></tr>";

    table += "<tr>";//Открываем 2 стороку
    var i = 0;//Создаем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+8+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 3 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+7+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 4 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+6+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 5 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+5+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 6 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+4+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 7 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+3+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 8 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+2+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr>";//Открываем 9 стороку
    i = 0;//Обнуляем счетчик для ячеек
    for(i = 0; i < 9; i++){
        if(i == 0){
            table += "<th>"+1+"</th>"
        }
        table += "<th></th>";
    }
    table += "</tr>";

    table += "<tr><th></th>";//Открываем пследнюю строку и отрисовываем ячейки в коде ниже
    for(i in mass2){
        table += "<th>"+mass2[i]+"</th>";
    }
    table += "<th></th></tr>";

    table += "</table>";

    return table;
}



//////////////////////////////////////////////////////
//Раскраска шахматной доски
function colorTh(){
    var tr = document.getElementsByTagName("tr")[1];
    var th = tr.children;
    var i = 0;
    for(i = 0; i < th.length; i++){
        th[1].style.backgroundColor = 'rgb(240, 217, 181)';
        th[3].style.backgroundColor = 'rgb(240, 217, 181)';
        th[5].style.backgroundColor = 'rgb(240, 217, 181)';
        th[7].style.backgroundColor = 'rgb(240, 217, 181)';
        th[2].style.backgroundColor = 'rgb(181, 136, 99)';
        th[4].style.backgroundColor = 'rgb(181, 136, 99)';
        th[6].style.backgroundColor = 'rgb(181, 136, 99)';
        th[8].style.backgroundColor = 'rgb(181, 136, 99)';
    }
    var tr = document.getElementsByTagName("tr")[2];
     th = tr.children;
     i = 0;
    for(i = 0; i < th.length; i++){
        th[2].style.backgroundColor = 'rgb(240, 217, 181)';
        th[4].style.backgroundColor = 'rgb(240, 217, 181)';
        th[6].style.backgroundColor = 'rgb(240, 217, 181)';
        th[8].style.backgroundColor = 'rgb(240, 217, 181)';
        th[1].style.backgroundColor = 'rgb(181, 136, 99)';
        th[3].style.backgroundColor = 'rgb(181, 136, 99)';
        th[5].style.backgroundColor = 'rgb(181, 136, 99)';
        th[7].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[3];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[1].style.backgroundColor = 'rgb(240, 217, 181)';
        th[3].style.backgroundColor = 'rgb(240, 217, 181)';
        th[5].style.backgroundColor = 'rgb(240, 217, 181)';
        th[7].style.backgroundColor = 'rgb(240, 217, 181)';
        th[2].style.backgroundColor = 'rgb(181, 136, 99)';
        th[4].style.backgroundColor = 'rgb(181, 136, 99)';
        th[6].style.backgroundColor = 'rgb(181, 136, 99)';
        th[8].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[4];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[2].style.backgroundColor = 'rgb(240, 217, 181)';
        th[4].style.backgroundColor = 'rgb(240, 217, 181)';
        th[6].style.backgroundColor = 'rgb(240, 217, 181)';
        th[8].style.backgroundColor = 'rgb(240, 217, 181)';
        th[1].style.backgroundColor = 'rgb(181, 136, 99)';
        th[3].style.backgroundColor = 'rgb(181, 136, 99)';
        th[5].style.backgroundColor = 'rgb(181, 136, 99)';
        th[7].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[5];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[1].style.backgroundColor = 'rgb(240, 217, 181)';
        th[3].style.backgroundColor = 'rgb(240, 217, 181)';
        th[5].style.backgroundColor = 'rgb(240, 217, 181)';
        th[7].style.backgroundColor = 'rgb(240, 217, 181)';
        th[2].style.backgroundColor = 'rgb(181, 136, 99)';
        th[4].style.backgroundColor = 'rgb(181, 136, 99)';
        th[6].style.backgroundColor = 'rgb(181, 136, 99)';
        th[8].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[6];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[2].style.backgroundColor = 'rgb(240, 217, 181)';
        th[4].style.backgroundColor = 'rgb(240, 217, 181)';
        th[6].style.backgroundColor = 'rgb(240, 217, 181)';
        th[8].style.backgroundColor = 'rgb(240, 217, 181)';
        th[1].style.backgroundColor = 'rgb(181, 136, 99)';
        th[3].style.backgroundColor = 'rgb(181, 136, 99)';
        th[5].style.backgroundColor = 'rgb(181, 136, 99)';
        th[7].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[7];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[1].style.backgroundColor = 'rgb(240, 217, 181)';
        th[3].style.backgroundColor = 'rgb(240, 217, 181)';
        th[5].style.backgroundColor = 'rgb(240, 217, 181)';
        th[7].style.backgroundColor = 'rgb(240, 217, 181)';
        th[2].style.backgroundColor = 'rgb(181, 136, 99)';
        th[4].style.backgroundColor = 'rgb(181, 136, 99)';
        th[6].style.backgroundColor = 'rgb(181, 136, 99)';
        th[8].style.backgroundColor = 'rgb(181, 136, 99)';
    }

    var tr = document.getElementsByTagName("tr")[8];
    th = tr.children;
    i = 0;
    for(i = 0; i < th.length; i++){
        th[2].style.backgroundColor = 'rgb(240, 217, 181)';
        th[4].style.backgroundColor = 'rgb(240, 217, 181)';
        th[6].style.backgroundColor = 'rgb(240, 217, 181)';
        th[8].style.backgroundColor = 'rgb(240, 217, 181)';
        th[1].style.backgroundColor = 'rgb(181, 136, 99)';
        th[3].style.backgroundColor = 'rgb(181, 136, 99)';
        th[5].style.backgroundColor = 'rgb(181, 136, 99)';
        th[7].style.backgroundColor = 'rgb(181, 136, 99)';
    }
}
document.write(generateTable());
colorTh();


/////////////////////////////////////////////////////
//Создание черных фигур
var turBlack =document.createElement("img");
turBlack.src = "img/black/tur.png";
var turBlack2 =document.createElement("img");
turBlack2.src = "img/black/tur2.png";

var horseBlack =document.createElement("img");
horseBlack.src = "img/black/horseB.png";
var horseBlack2 =document.createElement("img");
horseBlack2.src = "img/black/horseB2.png";

var slonBlack =document.createElement("img");
slonBlack.src = "img/black/slonB.png";
var slonBlack2 =document.createElement("img");
slonBlack2.src = "img/black/slonB2.png";

var ferzBlack =document.createElement("img");
ferzBlack.src = "img/black/ferzBlack.png";
var kingBlack =document.createElement("img");
kingBlack.src = "img/black/kingBlack.png";

var peshBlack =document.createElement("img");
peshBlack.src = "img/black/peshBlack.png";

var peshBlack1 =document.createElement("img");
peshBlack1.src = "img/black/peshBlack1.png";

var peshBlack2 =document.createElement("img");
peshBlack2.src = "img/black/peshBlack2.png";

var peshBlack3 =document.createElement("img");
peshBlack3.src = "img/black/peshBlack3.png";

var peshBlack4 =document.createElement("img");
peshBlack4.src = "img/black/peshBlack4.png";

var peshBlack5 =document.createElement("img");
peshBlack5.src = "img/black/peshBlack5.png";

var peshBlack6 =document.createElement("img");
peshBlack6.src = "img/black/peshBlack6.png";

var peshBlack7 =document.createElement("img");
peshBlack7.src = "img/black/peshBlack7.png";

//Расположение черных фигур
function generateFigureBlack(){
    //Создание черных фигур
    var tr = document.getElementsByTagName("tr")[1];
    var th = tr.children;
    var i = 0;
    for(i = 0; i < th.length; i++){
       th[1].appendChild(turBlack);
       th[2].appendChild(horseBlack);
       th[3].appendChild(slonBlack);
        th[4].appendChild(ferzBlack);
        th[5].appendChild(kingBlack);
        th[6].appendChild(slonBlack2);
        th[7].appendChild(horseBlack2);
        th[8].appendChild(turBlack2);

    }

    //Создание черных пешек
    var tr = document.getElementsByTagName("tr")[2];
    var th = tr.children;
    var i = 0;
    for(i = 0; i < th.length; i++){
        th[1].appendChild(peshBlack);
        th[2].appendChild(peshBlack1);
        th[3].appendChild(peshBlack2);
        th[4].appendChild(peshBlack3);
        th[5].appendChild(peshBlack4);
        th[6].appendChild(peshBlack5);
        th[7].appendChild(peshBlack6);
        th[8].appendChild(peshBlack7);

    }
}
generateFigureBlack();

////////////////////////////////////////////////////
//Создание Белых фигур
var turWhite =document.createElement("img");
turWhite.src = "img/white/turaWhite.png";
var turWhite2 =document.createElement("img");
turWhite2.src = "img/white/turaWhite2.png";

var horseWhite =document.createElement("img");
horseWhite.src = "img/white/horseWhite.png";
var horseWhite2 =document.createElement("img");
horseWhite2.src = "img/white/horseWhite2.png";

var slonWhite =document.createElement("img");
slonWhite.src = "img/white/slonWhite.png";
var slonWhite2 =document.createElement("img");
slonWhite2.src = "img/white/slonWhite2.png";

var ferzWhite =document.createElement("img");
ferzWhite.src = "img/white/ferzWhite.png";
var kingWhite =document.createElement("img");
kingWhite.src = "img/white/kingWhite.png";

var peshWhite =document.createElement("img");
peshWhite.src = "img/white/peshWhite.png";

var peshWhite1 =document.createElement("img");
peshWhite1.src = "img/white/peshWhite1.png";

var peshWhite2 =document.createElement("img");
peshWhite2.src = "img/white/peshWhite2.png";

var peshWhite3 =document.createElement("img");
peshWhite3.src = "img/white/peshWhite3.png";

var peshWhite4 =document.createElement("img");
peshWhite4.src = "img/white/peshWhite4.png";

var peshWhite5 =document.createElement("img");
peshWhite5.src = "img/white/peshWhite5.png";

var peshWhite6 =document.createElement("img");
peshWhite6.src = "img/white/peshWhite6.png";

var peshWhite7 =document.createElement("img");
peshWhite7.src = "img/white/peshWhite7.png";

//Расположение белых фигур
function generateFigureWhite(){
    //Создание белых фигур
    var tr = document.getElementsByTagName("tr")[8];
    var th = tr.children;
    var i = 0;
    for(i = 0; i < th.length; i++){
        th[1].appendChild(turWhite);
        th[2].appendChild(horseWhite);
        th[3].appendChild(slonWhite);
        th[4].appendChild(ferzWhite);
        th[5].appendChild(kingWhite);
        th[6].appendChild(slonWhite2);
        th[7].appendChild(horseWhite2);
        th[8].appendChild(turWhite2);

    }

    //Создание белых пешек
    var tr = document.getElementsByTagName("tr")[7];
    var th = tr.children;
    var i = 0;
    for(i = 0; i < th.length; i++){
        th[1].appendChild(peshWhite);
        th[2].appendChild(peshWhite1);
        th[3].appendChild(peshWhite2);
        th[4].appendChild(peshWhite3);
        th[5].appendChild(peshWhite4);
        th[6].appendChild(peshWhite5);
        th[7].appendChild(peshWhite6);
        th[8].appendChild(peshWhite7);

    }
}
generateFigureWhite();