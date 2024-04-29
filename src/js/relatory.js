const diaDaSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"]
const dataFull = new Date();
let diaNaSemana = diaDaSemana[dataFull.getDay()];
let diaNoMesDownTwo = dataFull.getDate() - 2;
let diaNoMesDownOne = dataFull.getDate() - 1;
let diaNaSemanaDown = diaDaSemana[dataFull.getDay() - 1];

document.getElementById('dia_na_semana').innerHTML = diaNaSemana;
document.getElementById('data_hoje').innerHTML = dataFull.getDate();
document.getElementById('dia_da_semana').innerHTML = fichaDoSabado();
document.getElementById('data_dia_down').innerHTML = diaDoMesDown();

function fichaDoSabado() {
    if (diaNaSemana === "Segunda") {
        return "Sábado";
    } else {
        return diaNaSemanaDown;
    };
};

function diaDoMesDown() {
    if (diaNaSemana === "Segunda") {
        return diaNoMesDownTwo;
    } else {
        return diaNoMesDownOne;
    };
};

diaDoMesDown();