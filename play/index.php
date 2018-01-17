<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Play: Single-page application com CSS FlexBox e design responsivo</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <div>
                <p>Download Gratuito</p>
                <h1>Guia prático: Como construir um negócio de infoprodutos que fatura no mínimo 10 mil por mês!</h1>
                <p>Um passo a passo de como usar o seu conhecimento ou o conhecimento de um parceiro para criar e vender seu infoproduto e construir o seu negócio digital.</p>
            </div>
            <div>
                <img src="images/book_cover.png" alt="Guia prático: Como construir um negócio de infoprodutos que fatura no mínimo 10 mil por mês!" title="Guia prático: Como construir um negócio de infoprodutos que fatura no mínimo 10 mil por mês!"/>
                <span>QUERO BAIXAR O E-BOOK!</span>
            </div>
        </header>

        <main>
            <section>
                <header>
                    <h1>O que vou aprender nesse e-book?</h1>
                </header>

                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <article>
                        <div class="img">
                            <img src="images/bullet.png" alt="O que vou aprender nesse e-book?" title="O que vou aprender nesse e-book?"/>
                        </div>
                        <div class="bullet">
                            <h2>Os 5 passos para planejar um negócio digital, mesmo sem ter um produto ou audiência!</h2>
                        </div>
                    </article>
                <?php } ?>
            </section>

            <div>
                <span>QUERO BAIXAR O E-BOOK!</span>
            </div>

            <article>
                <div>
                    <img src="images/author.jpeg" alt="Robson V. Leite - CEO/Founder UpInside, criado do programa mentor" title="Robson V. Leite - CEO/Founder UpInside, criado do programa mentor"/>
                </div>
                <header>
                    <h1><b>Robson V. Leite</b> - CEO da UpInside e criado do Mentor.</h1>
                    <p>Criei esse e-book para falar um pouco sobre minha jornada de mais de 10 anos como infoprodutor, e para ajudar você a trilhar a sua.</p>
                    <p><b>Faça download e comece agora... #VamosJuntos!</b></p>
                </header>
            </article>

            <article>
                <header>
                    <h1>Faça download GRATUITO agora e comece a planejar seu negócio de infoprodutos!</h1>
                </header>
                <form action="" method="post">
                    <input class="radius" type="text" name="fullname" placeholder="Nome:"/>
                    <input class="radius" type="email" name="email" placeholder="E-mail:"/>
                    <input class="radius" type="tel" name="phone" placeholder="Telefone: (Whats)"/>
                    <button class="radius transition">RECEBER E-BOOK AGORA!</button>
                    <p>Informe seu melhor e-mail pois vou enviar seu e-book para lá!</p>
                </form>
            </article>
        </main>

        <footer>
            <div>&COPY; Robson V. Leite, todos os direitos reservados!</div>
            <div>
                <a href="#" title="">Saiba mais</a> |
                <a href="#" title="">Termos de uso</a>
            </div>
        </footer>
    </body>
</html>
