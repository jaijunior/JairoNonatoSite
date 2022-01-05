<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo/estilobase.css">
    <link rel="stylesheet" href="/estilo/img.css">
    <title>Solicitar Suporte</title>
</head>
<body>
    <header>
            <div class="logo">
                <a href="index.html"><img src="/img/Nonato Logo.png" class="logoimg"></a>
            </div>
        
            <nav class="menu">   
                    
                    <ul>
                        <li><a href="index.html">Início</a></li>
                        <li><a href="about.html">Sobre</a></li>
                        <li><a href="request.html">Solicitar Suporte</a></li>
                        <li><a href="contact.html">Contato</a></li>
                    </ul>
            </nav>
    </header>
    <main class="corposuporte">
        <section class="sobresuporte">
            <h1> Novo Cliente </h1>

            <table border="1">
                
                <tr>
                    <th></th>
                    <th> Atendimento Avulso </th>
                    <th> Contrato Limitado</th>
                    <th> Contrato Ilimitado</th>
                    
                </tr>
                <tr>
                    <th> Acesso Remoto Via Team Viewer ou AnyDesk</th>
                    <td> X </td> 
                    <td> X </td> 
                    <td> X </td> 

                </tr>
                <tr>
                    <th> Atendimento Prioritario</th>
                    <td> </td> 
                    <td> X </td> 
                    <td> X </td> 

                </tr>
                <tr>
                    <th> Instalação de Pacote Office</th>
                    <td> X </td> 
                    <td> X </td> 
                    <td> X </td> 

                </tr>
                <tr>
                    <th> Análise em Bancada </th>
                    <td>  </td> 
                    <td> X </td> 
                    <td> X </td> 

                </tr>
                <tr>
                    <th> Atendimento Presencial (Se necessário) </th>
                    <td> </td> 
                    <td> X </td> 
                    <td> X </td> 

                </tr>
                <tr>
                    <th> Tempo de atendimento</th>
                    <td> Variável </td> 
                    <td> 15 Horas / Mês </td> 
                    <td> Ilimitado </td> 
                </tr>
                <tr>
                    <th> </th>
                    <td> R$50,00/hora </td> 
                    <td> R$500,00/Mês </td> 
                    <td> R$1000,00/Mês </td> 
                </tr>
                
            </table>
            <div>

            </div>
                       

            
        </section>
        
        <form >
            <h1> Já sou Cliente</h1>
            <fieldset><legend><b>Identificação do Usuário</b></legend>
                <Fieldset><legend><b>Já sou Cliente?</b></legend>
                <input type="radio" value="Sim" name="choice1" id="csim"> <label for="csim">SIM</label>
                <input type="radio" value="Não" name="choice1" id="cnao"> <label for="cnao">NÃO</label>                 
                </Fieldset>
                <br/>
                <p>Nome:<br/> <input type="text" name="tnome" id="cnome" size="30" maxlength="64" placeholder="NOME"/></p>
                <p>Assunto:<br/>  <input type="text" name="tassunto" id="cassunto" size="30" maxlength="64" placeholder="Assunto"/></p>
                <p>E-mail:<br/> <input type="email" size="30" maxlength="64" name="tmail" id="cmail" placeholder="email@email.com.br"/></p>
                
                
            </fieldset>
            
            <fieldset><legend><b>Descrição do Problema</b></legend>
                <textarea name="tmsg" id="cmsg" cols="45" rows="5" placeholder="Descreva o seu problema aqui." > </textarea>
                
                <p><input type="button" value="Enviar" id="tbotao"></p>
            </fieldset>

            
            
        </form>     

    </main>
   
    <footer>
        
        <div>
            <h3>
                REDES
            </h3>
            <ul>
                <li><a href="">Politica de Funcionamento</a></li>
                <li><a href=""> Facebook </a></li>
                <li><a href=""> Instagram </a></li>
                

            </ul>
        </div>
       


        <div>
            <h3>
                PUBLICAÇÕES
            </h3>
            <ul>
                <li><a href="">Sobre Pirataria de Software</a></li>
                <li><a href="">Desenvolvimento</a></li>
                <li><a href="">Blog</a></li>
                <li><a href=""> Softwares Uteis </a></li>
                

            </ul>
        </div>

        <div>
            <h3>
                CONTATO
            </h3>
            <ul>
                <li><b>E-mail:</b> junior.jai@hotmail.com</li>
                <li><b>Telefone:</b> (11) 98886-3739</li>               
                <li><a href=""> Solicite um Suporte </a></li>
            </ul>
        </div>
        
    </footer>
    
</body>
</html>