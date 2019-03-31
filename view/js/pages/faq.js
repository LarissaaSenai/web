$(document).ready(function(){
    
});
function mostrar_mais(elemento){
    
    var resposta = $(elemento).parent().find('.segura_perguntas p');
    console.log("Elemento: ",elemento);
    console.log("Resposta: ",resposta);
    resposta.css({'overflow-y':'auto','height':'auto'});

}
