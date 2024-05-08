const clickCasa = document.getElementById('casa');
const clickEdficio = document.getElementById('edificio');
const clickEmpresa = document.getElementById('empresa');
const selectCnpj = document.getElementById('cnpj');
const selectEdificio = document.getElementById('edificio');
const selectBloco = document.getElementById('bloco');
const selectApartamento = document.getElementById('apartamento');

clickCasa.addEventListener('click', clicarCasa);
clickEdficio.addEventListener('click', clicarEdificio);
clickEmpresa.addEventListener('click', clicarEmpresa);

function clicarCasa() {
    for (let classOcutar = 0; classOcutar < selectCnpj.length; classOcutar++) {
        const classAtual = selectCnpj[classOcutar];
        classAtual.classList.add("ocutar")
    };
    for (let classOcutar = 0; classOcutar < selectEdificio.length; classOcutar++) {
        const classAtual = selectEdificio[classOcutar];
        classAtual.classList.add("ocutar")
    };
    for (let classOcutar = 0; classOcutar < selectBloco.length; classOcutar++) {
        const classAtual = selectBloco[classOcutar];
        classAtual.classList.add("ocutar")
    };
    for (let classOcutar = 0; classOcutar < selectApartamento.length; classOcutar++) {
        const classAtual = selectApartamento[classOcutar];
        classAtual.classList.add("ocutar")
    };
    document.getElementById("pontoref").focus();
};

function clicarEdificio() {
    for (let classMostrar = 0; classMostrar < selectEdificio.length; classMostrar++) {
        const classAtual = selectEdificio[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classMostrar = 0; classMostrar < selectBloco.length; classMostrar++) {
        const classAtual = selectBloco[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classMostrar = 0; classMostrar < selectApartamento.length; classMostrar++) {
        const classAtual = selectApartamento[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classOcutar = 0; classOcutar < selectCnpj.length; classOcutar++) {
        const classAtual = selectCnpj[classOcutar];
        classAtual.classList.add("ocutar")
    };
    document.getElementById("predio").focus();
};

function clicarEmpresa() {
    for (let classMostrar = 0; classMostrar < selectCnpj.length; classMostrar++) {
        const classAtual = selectCnpj[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classMostrar = 0; classMostrar < selectEdificio.length; classMostrar++) {
        const classAtual = selectEdificio[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classMostrar = 0; classMostrar < selectBloco.length; classMostrar++) {
        const classAtual = selectBloco[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    for (let classMostrar = 0; classMostrar < selectApartamento.length; classMostrar++) {
        const classAtual = selectApartamento[classMostrar];
        classAtual.classList.remove("ocutar")
    };
    document.getElementById("cnpj").focus();
};