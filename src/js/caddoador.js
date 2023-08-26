const clickCasa = document.getElementById('casa')
const clickEdficio = document.getElementById('edificio')

clickCasa.addEventListener('click', clicarCasa)
clickEdficio.addEventListener('click', clicarEdificio)

const ocutarEMostrar = document.getElementsByClassName("mostrar")

function clicarEdificio() {
    for (let classMostrar = 0; classMostrar < ocutarEMostrar.length; classMostrar++) {
        const classAtual = ocutarEMostrar[classMostrar];
        classAtual.classList.remove("ocutar")
    }
    document.getElementById("cnpj").focus();
}

function clicarCasa() {
    for (let classOcutar = 0; classOcutar < ocutarEMostrar.length; classOcutar++) {
        const classAtual = ocutarEMostrar[classOcutar];
        classAtual.classList.add("ocutar")
    }
    document.getElementById("pontoref").focus();
}