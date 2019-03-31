<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mob'Share-Home</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/principais_anuncios.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div id="principal">
            <header >
                <!-- <img src="imagem/fundo.jpg" alt="" title="">  -->
                <nav class="cor_site_padrao">
                    <div id="segura_nav">
                        <div id="logo">
                            <img src="imagem/mob.png" alt="logo" title="logo">
                        </div>

                        <div class="segura_menu">
                            <ul>
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="melhores_anuncios.php">Destaques</a></li>
                                <li><a href="tabela_valor.php">Veículos a venda</a></li>
                                <li><a href="sobre.php">Tabela de preços</a></li>
                                <li><a href="como_ganhar_dinheiro.php">Como ganhar dinheiro</a></li>
                                <li class="menu_mais">
                                    <a href="#">Mais <span class="seta-baixo"></span></a>
                                    <ul class="sub_menu"> 
                                        <li style="border-radius:0px 10px 0px 0px;"><a href="parceiros.php">Parceiros</a></li> 
                                        <li><a href="sobre.php">Sobre</a></li> 
                                        <li><a href="faq.php">F.A.Q</a></li> 
                                        <li style="border-radius:0px 0px 10px 10px;"><a href="termos_uso.php">Termos de uso</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </div>
                        
                        <div class="segura_login">
                            <input type="button" name="btmLogin" id="btnLogin" class="cor_detalhe_site_padrao" value="Login">
                            <input type="button" name="btmCadastro" id="btnCadastro" value="Cadastra-se" class="cor_detalhe_site_padrao">
                        </div>
                    </div>    
                </nav>

                <div class="texto_chamativo">
                    <p class="texto_primario">Ganhar dinheiro <span style="color:#306b2c;">compartilhando</span> seu veículo nunca foi tão fácil</p>
                    <p class="texto_secundario">O que acha de anúnciar ele AGORA!</p>
                    <div class="btn_anunciar">
                        <a href="#">Anuncie-já!</a>
                    </div>
                </div>
            </header>
            <div id="conteudo">
           	<div class="legend">Principais Anuncios</div>
                <form id="pesquisa">
                    <div>
                        <div id="caixa-pesquisa" class="center">
                            <input type="search" class="cold10 esquerda" id="txtPesquisa" name="txtPesquisa">
                            <i class="fas fa-search esquerda"></i>
                        </div>
                    </div>
                </form>
                <div id="AnunciosBox">
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor">Gilberto</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> gilberto.tec@sad.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)43658-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor">Claudio</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> claudio.tec@sad.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)8558-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor">Mario</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> maria@mail.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)4895-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor">Frederico</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> frede@mail.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)4885-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor"> Guilherme</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> guilherme@sad.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)4967-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor"> Danilo</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">E-mail:</label>
                                <label class="anuncio_valor"> lilo@mail.com </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Telefone:</label>
                                <label class="anuncio_valor"> (11)4777-5846 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>
                </div>
                <div id="paginate">
                    <div class="paginate-prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="paginate-number">
                        <label>1</label>
                        <label>2</label>
                        <label>3</label>
                        <label>4</label>
                    </div>
                    <div class="paginate-next">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
		
 

	   </div>
    </div>
    <footer class="cor_site_padrao">
        <?php require_once('footer.php')?>
    </footer>
    
    <script src="js/main.js"></script>
</body>
</html>