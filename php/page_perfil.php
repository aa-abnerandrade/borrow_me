<?php
    require "autentica.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Borrow.me</title>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="../medias/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../medias/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../medias/favicon/favicon-16x16.png">


        <!-- CSS -->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/titulos/titulos.css">
        <link rel="stylesheet" href="../css/botoes.css">
        <link rel="stylesheet" href="../css/boxes/cards.css">
        <link rel="stylesheet" href="../css/boxes/fichas.css">
        <link rel="stylesheet" href="../css/boxes/grades.css">
        <link rel="stylesheet" href="../css/cabecalho/cabecalho.css">
        <link rel="stylesheet" href="../css/cabecalho/log.css">
        <link rel="stylesheet" href="../css/rodape/rodape.css">
        <link rel="stylesheet" href="../css/titulos/titulos.css">
        <link rel="stylesheet" href="../css/formularios.css">
        <link rel="stylesheet" href="../css/styles_perfil.css"/>
    </head>

    <body>
        <!-- CABEÇALHO -->
        <header>
            <div class="container-cabecalho">

                <div class="container-cabecalho__logo">
                    <img class="cabecalho__logo__imagem" src="../medias/logo/1.png"/>
                </div>

                <div class="container-cabecalho__menu">
                    <nav class="nav-menu">
                        <ul class="menu__lista">
                            <li class="menu__lista__item"><a href="page_home.php">Home</a></li>
                            <li class="menu__lista__item"><a href="#principal__meusprodutos">Gerenciamento</a></li>
                            <li class="menu__lista__item"><a href="#principal__novarequisicao">Nova Requisição</a></li>
                            <li class="menu__lista__item"><a href="#">Suporte</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="container-cabecalho__log">
                    <p >Olá, <span style="font-weight:bold"> <?php echo $_SESSION['nome']; ?> </span></p>
                    <span > Não é você, <a style="text-decoration:underline" href="logout.php">clique aqui</a>.</span>
                </div>

            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->


        <main class="principal">
            <section class="sections" id="principal__perfil">
                <h2 class="titulosh2">Minha Conta</h2>
                
                <div id="divcontainer-principal__perfil__perfil">
                    <div class="divcontainer-principal__perfil__item" id="principal__perfil__perfil__resumo">
                        <h3 class="titulosh3">Sobre Mim</h3>

                        <div id="principal__perfil__perfil__resumo__form">
                            <form action="funcoes-sql.php" method="POST">
                                <input type="hidden" name="acao" value="editar">
                                
                                <input type="text" placeholder=" <?php echo $_SESSION['descricao']; ?> ">
                                    
                                </p>
                            </form>
                            <div id="div-botoes-center">
                                    <div class="div-bttEditar">
                                        <button type="submit" class="todos-botoes">
                                            Editar Sobre Mim
                                        </button>
                                    </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="divcontainer-principal__perfil__item" id="principal__perfil__perfil__conta">
                        <h3 class="titulosh3">Configurações</h3>

                        <div id="principal__perfil__perfil__conta__form">
                            <form action="funcoes-sql.php" method="POST">
                                <input type="hidden" name="acao" value="editar">
                                <div>
                                    <h2 class="titulosh4">Meu Perfil</h2>
                                </div>
                                
                                <fieldset class="field-cadastro" id="box-form-dadospessoais">
                                    <div id="div-nome">
                                        <label>Nome</label><br>
                                        <input type="text" placeholder="<?php echo $_SESSION['nome']; ?>" name="nome" />
                                    </div>
                                    <div id="div-cpf">
                                            <label>CPF</label><br>
                                            <input type="text" placeholder="<?php echo $_SESSION['cpf']; ?>" name="cpf"/>
                                    </div>
                                    <div id="div-dn">
                                            <label>DN</label><br>
                                            <input type="date" placeholder="<?php echo $_SESSION['dn']; ?>" name="datanasc"/>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="field-cadastro" id="box-form-contato">
                                    <div>
                                        <label>Telefone</label><br>
                                        <input type="tel" placeholder="<?php echo $_SESSION['tel']; ?>" name="tel" pattern= "^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$"/>
                                    </div>
                                    <div>
                                        <label>CEP</label><br>
                                            <input type="text" placeholder="<?php echo $_SESSION['cep']; ?>" name="cep" pattern="[\d]{5}-?[\d]{3}" required/>
                                    </div>    
                                    <div>  
                                        <label>UF</label><br>
                                        <select id="select-categoria" name="uf">
                                            <option value="<?php $_SESSION['uf']; ?>"> <?php echo $_SESSION['uf']; ?> </option>
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="RS">RS</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="field-cadastro" id="box-form-login">
                                    <div id="div-email">
                                        <label>Email</label><br>
                                        <input type="email" placeholder="<?php echo $_SESSION['email']; ?>" name="email"/>
                                    </div>
                                    <div id="div-senha">
                                        <label>Senha</label><br>               
                                        <input type="password" placeholder="<?php echo $_SESSION['senha']; ?>" name="senha">
                                    </div>
                                </fieldset>
                                <div class="div-botoes-center">
                                    <div class="div-bttEditar">
                                        <button type="submit" class="todos-botoes">
                                            Editar dados do Perfil
                                        </button>
                                    </div>
                                    <div class="div-bttsDiversos">
                                        <button class="todos-botoes"><a href="">Logout</a></button>
                                        <button class="todos-botoes"><a href="">Encerrar Conta</a></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                       
                    </div>
                </div>

                <div class="divcontainer-principal__perfil__item" id="divcontainer-principal__perfil__historico">
                    <h3 class="titulosh3">Últimas Transanções</h3>

                </div>
            </section>

            <section class="sections" id="principal__meusprodutos">
                <h2 class="titulosh2">Meus Produtos</h2>

                <h3 class="titulosh3">Produtos Disponíveis</h3>
                <div class="div-container__cards">
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://oakridgebikeshop.com/wp-content/uploads/2020/09/yellow-heckler-Edited.jpg');"></div>
                        <p class="cards__item__titulos">
                            Moutain Bike
                        </p>
                        <p class="cards__item__descricao">
                            Montain Bike da marca Santa Cruz
                        </p>
                        <p class="cards__item__price">a partir de R$52,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://casa.abril.com.br/wp-content/uploads/2019/09/2-apartamento-no-rio-e-moldura-para-praia-de-ipanema.png');"></div>
                        <p class="cards__item__titulos">
                            Apartamento de Luxo
                        </p>
                        <p class="cards__item__descricao">
                            Apartamento na Barra da Tijuca com 180m<sup>2</sup>
                        </p>
                        <p class="cards__item__price">a partir de R$500,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://conteudo.imguol.com.br/c/entretenimento/48/2020/09/25/apple-icar-1601057951463_v2_900x506.jpg');"></div>
                        <p class="cards__item__titulos">
                            Carro Elétrico Apple
                        </p>
                        <p class="cards__item__descricao">
                            Novo lançamento da Apple, carro eletrico!
                        </p>
                        <p class="cards__item__price">a partir de R$1.350,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://durhamcollege.ca/wp-content/uploads/Computer-Programmer.jpg');"></div>
                        <p class="cards__item__titulos">
                            Macbook
                        </p>
                        <p class="cards__item__descricao">
                            Macbook Apple 2021
                        </p>
                        <p class="cards__item__price">a partir de R$150,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://images-americanas.b2w.io/produtos/4806681950/imagens/raquete-beach-tennis-klo22-em-fibra-de-vidro-kallango/4806681950_1_large.jpg');"></div>
                        <p class="cards__item__titulos">
                            Raquete Beach Tênis
                        </p>
                        <p class="cards__item__descricao">
                            Ótima raquete para uma tarde de beach tenis
                        </p>
                        <p class="cards__item__price">a partir de R$35,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://i.ytimg.com/vi/3zIJkCS07AE/maxresdefault.jpg');"></div>
                        <p class="cards__item__titulos">
                            Notbook do Futuro
                        </p>
                        <p class="cards__item__descricao">
                            Melhor notebook do mundo
                        </p>
                        <p class="cards__item__price">a partir de R$3.000,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                </div>

                <h3 class="titulosh3">Meus Itens Emprestados no Momento</h3>
                <div class="div-container__fichas">
                    <div class="div-subcontainer__fichas">
                    
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://http2.mlstatic.com/D_NQ_NP_770313-MLB32394427436_102019-O.jpg" onerror="this.src ='/images/logodefault.png'" src="https://http2.mlstatic.com/D_NQ_NP_770313-MLB32394427436_102019-O.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Janaína, do Paraná</h4>
                                <p>Já peguei livros de edições especiais, sempre com muito carinho, pensando como eu gostaria que cuidassem se fosse meu.</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://img.elo7.com.br/product/original/39F8E5F/tabuleiro-de-xadrez-e-dama-50x50-xadrez-e-dama.jpg" onerror="this.src ='/images/logodefault.png'" src="https://img.elo7.com.br/product/original/39F8E5F/tabuleiro-de-xadrez-e-dama-50x50-xadrez-e-dama.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Amanda, do Rio de Janeiro </h4>
                                <p>Nada meu fica mais parado. Se tá 1 semana sem uso, eu já cadastro na Borrow.</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="http://blog.construtoralaguna.com.br/wp-content/uploads/2019/01/No-golfe-jogadas-espec%C3%ADficas-exigem-modelos-de-tacos-espec%C3%ADficos-Construtora-Laguna.jpg" class=" lazyloaded" onerror="this.src ='/images/logodefault.png'" src="http://blog.construtoralaguna.com.br/wp-content/uploads/2019/01/No-golfe-jogadas-espec%C3%ADficas-exigem-modelos-de-tacos-espec%C3%ADficos-Construtora-Laguna.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Victor, do Ceará</h4>
                                <p>Comecei pegando emprestado um skate e hoje não me vejo fazendo outra coisa.</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </section>



            <section class=" sections" id="principal__naomeusprodutos">
                <h2 class="titulosh2">Produtos da Comunidade</h2>

                <h3 class="titulosh3">Itens que estou usando</h3>
                <div class="principal__naomeusprodutos__emuso">
                    <div class="div-container__fichas">
                    <div class="div-subcontainer__fichas">
                    
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://st2.depositphotos.com/1006009/10305/i/450/depositphotos_103059822-stock-photo-whitewater-kayak-on-rocky-shore.jpg" onerror="this.src ='/images/logodefault.png'" src="https://st2.depositphotos.com/1006009/10305/i/450/depositphotos_103059822-stock-photo-whitewater-kayak-on-rocky-shore.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Janaína, do Paraná</h4>
                                <p>Já peguei livros de edições especiais, sempre com muito carinho, pensando como eu gostaria que cuidassem se fosse meu.</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://i.blogs.es/1c0d50/macbook-air-m2-0/1366_2000.jpeg" onerror="this.src ='/images/logodefault.png'" src="https://i.blogs.es/1c0d50/macbook-air-m2-0/1366_2000.jpeg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Amanda, do Rio de Janeiro </h4>
                                <p>Nada meu fica mais parado. Se tá 1 semana sem uso, eu já cadastro na Borrow.</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://www.reviewbox.com.br/wp-content/uploads/2019/07/pe%CC%81-de-pato-scaled.jpg" class=" lazyloaded" onerror="this.src ='/images/logodefault.png'" src="https://www.reviewbox.com.br/wp-content/uploads/2019/07/pe%CC%81-de-pato-scaled.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Victor, do Ceará</h4>
                                <p>Comecei pegando emprestado um skate e hoje não me vejo fazendo outra coisa.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <h3 class="titulosh3">Lista de Desejo</h3>
                <div class="div-container__cards">
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://oakridgebikeshop.com/wp-content/uploads/2020/09/yellow-heckler-Edited.jpg');"></div>
                        <p class="cards__item__titulos">
                            Moutain Bike
                        </p>
                        <p class="cards__item__descricao">
                            Montain Bike da marca Santa Cruz
                        </p>
                        <p class="cards__item__price">a partir de R$52,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://casa.abril.com.br/wp-content/uploads/2019/09/2-apartamento-no-rio-e-moldura-para-praia-de-ipanema.png');"></div>
                        <p class="cards__item__titulos">
                            Apartamento de Luxo
                        </p>
                        <p class="cards__item__descricao">
                            Apartamento na Barra da Tijuca com 180m<sup>2</sup>
                        </p>
                        <p class="cards__item__price">a partir de R$500,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://conteudo.imguol.com.br/c/entretenimento/48/2020/09/25/apple-icar-1601057951463_v2_900x506.jpg');"></div>
                        <p class="cards__item__titulos">
                            Carro Elétrico Apple
                        </p>
                        <p class="cards__item__descricao">
                            Novo lançamento da Apple, carro eletrico!
                        </p>
                        <p class="cards__item__price">a partir de R$1.350,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://durhamcollege.ca/wp-content/uploads/Computer-Programmer.jpg');"></div>
                        <p class="cards__item__titulos">
                            Macbook
                        </p>
                        <p class="cards__item__descricao">
                            Macbook Apple 2021
                        </p>
                        <p class="cards__item__price">a partir de R$150,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://images-americanas.b2w.io/produtos/4806681950/imagens/raquete-beach-tennis-klo22-em-fibra-de-vidro-kallango/4806681950_1_large.jpg');"></div>
                        <p class="cards__item__titulos">
                            Raquete Beach Tênis
                        </p>
                        <p class="cards__item__descricao">
                            Ótima raquete para uma tarde de beach tenis
                        </p>
                        <p class="cards__item__price">a partir de R$35,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('https://i.ytimg.com/vi/3zIJkCS07AE/maxresdefault.jpg');"></div>
                        <p class="cards__item__titulos">
                            Notbook do Futuro
                        </p>
                        <p class="cards__item__descricao">
                            Melhor notebook do mundo
                        </p>
                        <p class="cards__item__price">a partir de R$3.000,00</p>
                        <button class="todos-botoes">saiba mais</button>
                    </div>
                </div>
                
            </section>

            <section class="sections" id="principal__novarequisicao">
                <h2 class="titulosh2">Não encontrou o que precisa?</h2>

                <div class="div-container__grades">
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="./html/automoveis.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    <button class="todos-botoes"><a href="page_cadastrar-novoitem.php">Cadastrar Novo Item</a></button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/1500610/pexels-photo-1500610.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="./html/jogos.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    <button class="todos-botoes"><a href="page_solicitar-emprestimo.php">Solicitar Empréstimo</a></button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>  
            
            </section>
            
        </main>

<?php

require_once('footer.php');

?>