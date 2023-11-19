const menuBtnItens = document.querySelectorAll('.limenu');

menuBtnItens.forEach((liitens) =>
    liitens.addEventListener('click', selectMenu)
);

function selectMenu() {
    menuBtnItens.forEach((liitens) => 
        liitens.classList.remove('activa')
    );
    this.classList.add('activa');
};