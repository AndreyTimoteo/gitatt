<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grid</title>
    <!-- Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Filled -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- Rounded -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <!-- Sharp -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Two tone -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="conteudo.css">
</head>

<body>
    <!-- parte superior do site -->
    <header>
        <div class="menu">
            <div class="menu__item">
                <div><span class="material-icons-outlined">
                        home
                    </span></div>
                <div class="underline">Inicio</div>
            </div>
            <div class="menu__item">
                <span class="material-icons-outlined">
                    smartphone
                </span>
                Aplicativos
            </div>
            <div class="menu__item">
                <span class="material-icons-outlined">
                    sports_esports
                </span>
                Jogos
            </div>
        </div>
    </header>
    <!-- conteudo -->
    <main>
        <section class="conteudo">
            <div class="conteudo__principal caixa">
                <h3 class="conteudo__titulo">Fornite</h3>
            </div>
            <div class="conteudo__secundario caixa">
                <h3 class="conteudo__titulo">PUBG</h3>
            </div>
            <div class="conteudo__secundario caixa">
                <h3 class="conteudo__titulo">Slack</h3>
            </div>
            <!-- parte do segundo grid -->
            <div class="conteudo__categorias">
                <div class="um segundo_grid">
                    <a href="#">
                        <input type="button" value="Aplicativos populares" class="button">
                    </a>
                </div>
                <div class="dois segundo_grid">
                    <a href="#">
                        <input type="button" value="Jogos populares" class="button">
                    </a>
                </div>
                <div class="tres segundo_grid">
                    <a href="#">
                        <input type="button" value="Em Destaque" class="button">
                    </a>
                </div>
                <div class="quatro segundo_grid">
                    <a href="#">
                        <input type="button" value="Lançamentos" class="button">
                    </a>
                </div>
            </div>
            <!-- parte do cs e do wts -->
            <div class="conteudo__secundario caixa ">
                <h3 class="conteudo__titulo">CS: GO</h3>
            </div>
            <div class="conteudo__secundario caixa">
                <h3 class="conteudo__titulo">Whatsapp</h3>
            </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>






@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family: 'Open Sans', sans-serif;
    background-color: #fff;
}

header {
    background-color: #f3f3f3;
    padding: 1rem;
}

.menu {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    gap: 50px;
}