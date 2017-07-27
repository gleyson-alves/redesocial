<html>
    <head>
        <meta charset="UTF-8" />
        <title>Rede social</title>

        <script type="text/javascript" src="./js/jquery.min.js"></script>

        <link rel="stylesheet" href="./css/layout.css" />
        <link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./js/bootstrap/css/bootstrap-theme.min.css" />
    </head>

    <body>
        <div id="layout">
            <div id="menu">
                <?php
                    include("menu.html");
                ?>
            </div>

            <div id="conteudo">
                <h2 id="o_que_e">O que é?</h2>

                <p>
                    Este projeto tem como finalidade construir uma rede social que
                    possa ser utilizado em várias situações escolares ou não escolares.

                    Podendo servir como meio de interação entre docentes
                    e discentes ou até mesmo como instrumento de comunicação com egressos.
                </p>

                <h2 id="como_colaborar">Como colaborar?</h2>

                <p>
                    Para colaborar é necessário:

                    <ol>
                        <li>Cadastrar-se no <a href="https://github.com" target="_blank">GitHub</a></li>
                        <li>Baixar o <a href="https://desktop.github.com">aplicativo desktop do GitHub</a></li>
                        <li>Copiar o repositório para a sua máquina conforme os passos e imagens abaixo<br />
                            <ol>
                                <li>Clique em <i>File</i> depois em <i>Clone repository...</i></li>
                                <li>
                                    Na janela coloque a URL <i>https://github.com/Ronneesley/redesocial.git</i> e
                                    escolha o local onde será copiado o projeto, substitua o texto
                                    <i>DIRETORIO_DE_DESTINO</i> para isto.
                                </li>
                            </ol>

                            <div>
                                <img src="imagens/clonar_repositorio_1.png" />

                                <img src="imagens/clonar_repositorio_2.png" />
                            </div>
                        </li>
                    </ol>
                </p>

                <h2 id="quais_ferramentas_utilizar">Quais ferramentas utilizar?</h2>

                <p>
                    As ferramentas utilizadas para edição dos projetos são:
                    <a href="https://notepad-plus-plus.org/download/v7.4.2.html">Notepad++ 7.4.2</a>,
                    <a href="https://netbeans.org" target="_blank">NetBeans 8.2</a> (<i>utilizar versão completa</i>)
                    <a href="https://pencil.evolus.vn" target="_blank">Pencil 3.0.4</a>
                </p>

                <h2 id="como_enviar_o_que_fiz">Como enviar o que fiz?</h2>

                <p>
                    Após abrir e editar os arquivos do projeto no NetBeans,
                    você deve:

                    <ol>
                        <li>
                            Acessar o menu <i>Equipe</i> e em seguida <i>Fazer Commit...</i> conforme
                            apresentado na imagem abaixo:<br />

                            <div style="text-align: center;"><img src="imagens/enviar_1.png" /></div>
                        </li>

                        <li>
                            Na janela que aparecer você deve digitar uma mensagem informando o que você alterou.
                            Apenas os arquivos que foram alterados são enviados. Veja a figura abaixo:<br />

                            <div style="text-align: center;"><img src="imagens/enviar_2.png" /></div>
                        </li>
                    </ol>
                </p>
            </div>

            <div id="rodape">
                Projeto Rede Social<br />

                &copy; Turma SI & Colaboradores
            </div>
        </div>
    </body>
</html>
