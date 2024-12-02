const cadastrarButton = document.getElementById('cadastrar');
const entrarButton = document.getElementById('entrar');
const caixa = document.getElementById('caixa');

cadastrarButton.addEventListener('click', () => {
	caixa.classList.add("right-panel-active");
});

entrarButton.addEventListener('click', () => {
	caixa.classList.remove("right-panel-active");
});
// Função para alternar o menu lateral
function toggleMenu() {
    var menu = document.getElementById("myMenu");
    menu.classList.toggle("open"); // Adiciona ou remove a classe 'open' para abrir/fechar o menu
}
	