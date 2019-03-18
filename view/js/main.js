var gridAnuncioVenda = function() {//Função de atualização do gridAnuncioVenda

    var boxGrid = document.querySelector('div[data-model="AnunciosBox"]');

    var width = boxGrid.offsetWidth;

    var quantidadePorLinha = Math.round(width / 320);

    boxGrid.setAttribute("style", `grid-template-columns: repeat(${quantidadePorLinha},280px);`)

}
window.onresize = function(){// Evento de redimendionar a tela
    gridAnuncioVenda();
} 
gridAnuncioVenda();