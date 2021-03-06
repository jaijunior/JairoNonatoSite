<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('/css/estilobase.css') }}>
    <link rel="stylesheet" href={{ asset('/css/img.css') }}>
    <link rel="stylesheet" href={{ asset('/css/responsive.css') }}>
    <title>JaiJunior INFO</title>
</head>
<body>
    <header>
            <div class="logo">
                <a href="index.html"><img src={{ asset('/img/Nonato_Logo.webp') }} class="logoimg"></a>
            </div>        
            <nav class="menu">                    
                    <ul>
                        <li><a href="/">Início</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/request">Solicitar Suporte</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
            </nav>
    </header>
    @yield('conteudo')
        <footer>
        <div>
            <h3>
                REDES
            </h3>
            <ul>
                <li><a href="https://github.com/jaijunior" target="blank"> Github </a></li>
                <li><a href="" target="blank"> Facebook </a></li>
                <li><a href="" target="blank"> Instagram </a></li>             
            </ul>
        </div>   
        <div>
            <h3>
                PUBLICAÇÕES
            </h3>
            <ul>
                <li><a href="" target="blank">Sobre Pirataria de Software</a></li>
                <li><a href="" target="blank">Desenvolvimento</a></li>
                <li><a href="" target="blank">Blog</a></li>
                <li><a href="" target="blank"> Softwares Uteis </a></li>           
            </ul>
        </div>
        <div>
            <h3>
                CONTATO
            </h3>
            <ul>
                <li><b>E-mail:</b> junior.jai@protonmail.com</li>
                <li><b>Telefone:</b> (11) 98886-3739</li>               
                <li><a href="/request"> Solicite um Suporte </a></li>
            </ul>
        </div>        
    </footer>
</body>
</html>