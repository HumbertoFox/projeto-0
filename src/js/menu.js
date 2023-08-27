const menuBtnItens = document.querySelectorAll('.limenu');

function selectMenu() {
    menuBtnItens.forEach((liitens) => 
        liitens.classList.remove('activa')
    );
    this.classList.add('activa');
};

menuBtnItens.forEach((liitens) =>
    liitens.addEventListener('click', selectMenu)
);
