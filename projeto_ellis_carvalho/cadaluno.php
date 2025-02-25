<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="iconif.png" href="imagens/icone_ew.png">  
    <title>Cadastro</title>  
</head>       
<body> 
<nav class="menu">
        <div class="logo-img">
                <img src="imagens/logo_eww.png" alt="logoew">
        </div>
  <div class="header">
    <div class="header-links">
        <a href="http://localhost:8081/psw1-definitivo-6/atv03-ellis-carvalho/index.php#section-home">Home</a>
        <a href="http://localhost:8081/psw1-definitivo-6/atv03-ellis-carvalho/index.php#section-historia">História</a>
        <a href="http://localhost:8081/psw1-definitivo-6/atv03-ellis-carvalho/index.php#section-cursos">Cursos</a>
        <a href="http://localhost:8081/psw1-definitivo-6/atv03-ellis-carvalho/index.php#section-social">Social</a>
        <a href="#formulario">Cadastro</a>
        <a href="listaaluno.php">Matrícula</a>
        
    </div>
    <button class="login"> Login </button>
    </div>
    <div class="header-btn">
        <i class="fa-solid fa-bars"></i>
    </div>  
    
</nav>

<br>

<section class="section-home" id="section-home">
    <div class="cad-img">
        <div class="home-texto">
                    <h3>É HORA DE SE CADASTRAR. VAMOS COMEÇAR?</h3>
                    <a href="https://vfs.edu/" class="botao_home">Saiba mais</a>
        </div>
        </div>
    
</div>
</section>

<br>
<br>

<section class="formulario" id="formulario">
    <main>
    <div class="box-cadastro">
                <div class="titulo">
                    <h2>CADASTRO</h2>
                </div>

                <form action="listaaluno.php" class="formulario-registro" method="post">

               <div class="grupo-nome-sexo-data">
                <div class="input-nome-sexo-data">
                        <label for="">Nome</label>
                        <input type="text" placeholder="Digite seu nome completo..." name="nome" minlength="4" maxlength="60" required>
                    </div>

                    <div class="input-nome-sexo-data">
                    <label for="sexo">Sexo</label><br>
            <input type="radio" id="masculino" name="sexo" value="Masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" id="feminino" name="sexo" value="Feminino">
            <label for="feminino">Feminino</label>
                    </div>

                     <div class="input-nome-sexo-data" >
                        <label for="data">Data de nascimento</label><br>
                        <input type="date" id="data" name="data" required>
                        </div>
               </div> 


                     <div class="grupo-cpf-email-telefone">
                        <div class="input-cpf-email-telefone">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF..." maxlength="14">
                        </div>

                        <div class="input-cpf-email-telefone">
                        <label for="email">E-mail</label> <br>
                        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required> <br>
                        </div>

                        <div class="input-cpf-email-telefone">
                        <label for="telefone">Telefone/WhatsApp</label> <br>
                        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone..." pattern="[0-9]{10,11}"> 
                        </div>
                </div>

                        <div class="grupo-cidade-uf-pais">
                            <div class="input-cidade-uf-pais">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" required placeholder="Digite sua cidade...">
                            </div>

                            <div class="input-cidade-uf-pais">
                            <label for="estado">UF</label>
                                    <select id="estado" name="uf" required>
                                    <option value="acre">Acre (AC)</option>
                                    <option value="alagoas">Alagoas (AL)</option>    
                                    <option value="amapa">Amapá (AP)</option>
                                    <option value="amazonas">Amazonas (AM)</option>
                                    <option value="bahia">Bahia (BA)</option>
                                    <option value="ceara">Ceará (CE)</option>
                                    <option value="espirito santo">Espírito Santo (ES)</option>
                                    <option value="goias">Goiás (GO)</option>
                                    <option value="maranhao">Maranhão (MA)</option>
                                    <option value="mato grosso">Mato Grosso (MT)</option>
                                    <option value="mato grosso do sul">Mato Grosso do Sul (MS)</option>
                                    <option value="minas gerais">Minas Gerais (MG)</option>
                                    <option value="para">Pará (PA)</option>
                                    <option value="paraiba">Paraíba (PB)</option>
                                    <option value="parana">Paraná (PR)</option>
                                    <option value="pernambuco">Pernambuco (PE)</option>
                                    <option value="piaui">Piauí (PI)</option>
                                    <option value="rio de janeiro">Rio de Janeiro (RJ)</option>    
                                    <option value="rio grande do norte">Rio Grande do Norte (RN)</option>
                                    <option value="rio grande do sul">Rio Grande do Sul (RS)</option>
                                    <option value="rondonia">Rondônia (RO)</option>
                                    <option value="roraima">Roraima (RR) </option>
                                    <option value="santa catarina">Santa Catarina (SC)</option>
                                    <option value="sao paulo">São Paulo (SP)</option>
                                    <option value="sergipe">Sergipe (SE)</option>
                                    <option value="tocantins">Tocantins (TO)</option>
                                    </select>
                            </div>

                            <div class="input-cidade-uf-pais">
                            <label for="nacionalidade">Nacionalidade</label>
                            <input type="text" id="nacionalidade" name="nacionalidade" required placeholder="Digite sua nacionalidade...">
                            </div>

                            
                        </div>

                        <div class="grupo-endereco-bairro-hobbies">
                            <div class="input-endereco-bairro-hobbies">
                            <label for="endereco">Endereço</label>
                              <input type="text" id="endereco" name="endereco" required
                            placeholder="Digite seu endereço...">
                            </div>

                            <div class="input-endereco-bairro-hobbies">
                            <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" required
                            placeholder="Digite seu bairro...">
                            </div>

                            <div class="input-endereco-bairro-hobbies">
                            <label for="hobbies">Hobbies</label>
                        <input type="text" id="hobbies" name="hobbies" required
                            placeholder="Digite o que mais gosta de fazer...">
                            </div>
                        </div>

                   

                    <div class="grupo-disciplinas">
                        <div class="input-disciplinas">

                            <label>Disciplinas Cursadas</label>

                            <div class="checkbox-disciplinas1">
                            <input type="checkbox" id="fundamentos de atuacao" name="disciplinasfavoritas[]" value="Fundamentos de Atuação">
                                <label for="fundamentos de ataucao">Fundamentos de Atuação</label><br>

                                <input type="checkbox" id="ingles para artes criativas" name="disciplinasfavoritas[]" value="INglês para Artes Criativas">
                                <label for="inlges para artes criativas">Inglês para Artes Criativas</label><br>


                                <input type="checkbox" id="fundacao em arte visual e design" name="disciplinasfavoritas[]" value="Fundação em Arte Visual e Design">
                                <label for="fundacao em arte visual e design">Fundação em Arte Visual e Design</label><br>
                                </div>

                                <div class="checkbox-disciplinas2">
                                      <input type="checkbox" id="atuacao para cinema e televisao" name="disciplinasfavoritas[]" value="Atuação para Cinema e Televisão">
                                <label for="Atuação para Cinema e Televisão">Atuação para Cinema e Televisão</label><br>


                                <input type="checkbox" id="producao cinematografica" name="disciplinasfavoritas[]" value="Produção Cinematográfica">
                                <label for="producao cinematografica">Produção Cinematográfica</label><br>


                                <input type="checkbox" id="design de maquiagem para cinema e televisao" name="disciplinasfavoritas[]" value="Design de Maquiagem para Cinema e Televisão">
                                <label for="design de maquiagem para cinema e televisao">Design de Maquiagem para Cinema e Televisão</label><br>
                                </div>

                                <div class="checkbox-disciplinas3">
                                <input type="checkbox" id="design de som" name="disciplinasfavoritas[]" value="Design de Som">
                                <label for="design de som">Design de Som</label><br>


                                <input type="checkbox" id="escrevendo para cinema, televisão e jogos" name="escrevendo para cinema, televisão e jogos[]" value="Escrevendo para Cinema, Televisão e Jogos">
                                <label for="Escrevendo para Cinema, Televisão e Jogos">Fundamentos de Atuação</label><br>

                                <input type="checkbox" id="animacao 3d e efeitos visuais" name="disciplinasfavoritas[]" value="Animação 3D e Efeitos Visuais">
                                <label for="animacao 3d e efeitos visuais">Animação 3D e Efeitos Visuais</label><br>
                                </div>


                                <div class="checkbox-disciplinas4">
                                <input type="checkbox" id="arte conceitual e animacao" name="disciplinasfavoritas[]" value="Arte Conceitual e Animação">
                                <label for="arte conceitual e animacao">Arte Conceitual e Animação</label><br>


                                <input type="checkbox" id="animacao classica" name="disciplinasfavoritas[]" value="Animação Clássica">
                                <label for="animacao classica">Animação Clássica</label><br>


                                <input type="checkbox" id="digital design" name="disciplinasfavoritas[]" value="Digital Design">
                                <label for="digital design">Digital Design</label><br>
                                </div>

                                <div class="checkbox-disciplinas5">
                                    <input type="checkbox" id="design de jogos" name="disciplinasfavoritas[]" value="Design de Jogos">
                                <label for="design de jogos">Design de Jogos</label><br>


                                <input type="checkbox" id="programacao para jogos, web e dispositivos moveis" name="disciplinasfavoritas[]" value="Programação para Jogos, Web e Dispositivos Móveis">
                                <label for="programacao para jogos, web e dispositivos moveis">Programação para Jogos, Web e Dispositivos Móveis</label><br>


                                <input type="checkbox" id="design e desenvolvimento de vr/ar" name="disciplinasfavoritas[]" value="Design e Desenvolvimento de VR/AR">
                                <label for="design e desenvolvimento de vr/ar">Design e Desenvolvimento de VR/AR</label>
                                </div>

                            </div>
                        </div>

                        <div class="input-disciplinas">

                            <label>Disciplinas Favoritas</label>

                            <div class="checkbox-disciplinas1">
                            <input type="checkbox" id="fundamentos de atuacao" name="disciplinasfavoritas[]" value="Fundamentos de Atuação">
                                <label for="fundamentos de ataucao">Fundamentos de Atuação</label><br>

                                <input type="checkbox" id="ingles para artes criativas" name="disciplinasfavoritas[]" value="INglês para Artes Criativas">
                                <label for="inlges para artes criativas">Inglês para Artes Criativas</label><br>


                                <input type="checkbox" id="fundacao em arte visual e design" name="disciplinasfavoritas[]" value="Fundação em Arte Visual e Design">
                                <label for="fundacao em arte visual e design">Fundação em Arte Visual e Design</label><br>
                                </div>

                                <div class="checkbox-disciplinas2">
                                      <input type="checkbox" id="atuacao para cinema e televisao" name="disciplinasfavoritas[]" value="Atuação para Cinema e Televisão">
                                <label for="Atuação para Cinema e Televisão">Atuação para Cinema e Televisão</label><br>


                                <input type="checkbox" id="producao cinematografica" name="disciplinasfavoritas[]" value="Produção Cinematográfica">
                                <label for="producao cinematografica">Produção Cinematográfica</label><br>


                                <input type="checkbox" id="design de maquiagem para cinema e televisao" name="disciplinasfavoritas[]" value="Design de Maquiagem para Cinema e Televisão">
                                <label for="design de maquiagem para cinema e televisao">Design de Maquiagem para Cinema e Televisão</label><br>
                                </div>

                                <div class="checkbox-disciplinas3">
                                <input type="checkbox" id="design de som" name="disciplinasfavoritas[]" value="Design de Som">
                                <label for="design de som">Design de Som</label><br>


                                <input type="checkbox" id="escrevendo para cinema, televisão e jogos" name="escrevendo para cinema, televisão e jogos[]" value="Escrevendo para Cinema, Televisão e Jogos">
                                <label for="Escrevendo para Cinema, Televisão e Jogos">Fundamentos de Atuação</label><br>

                                <input type="checkbox" id="animacao 3d e efeitos visuais" name="disciplinasfavoritas[]" value="Animação 3D e Efeitos Visuais">
                                <label for="animacao 3d e efeitos visuais">Animação 3D e Efeitos Visuais</label><br>
                                </div>


                                <div class="checkbox-disciplinas4">
                                <input type="checkbox" id="arte conceitual e animacao" name="disciplinasfavoritas[]" value="Arte Conceitual e Animação">
                                <label for="arte conceitual e animacao">Arte Conceitual e Animação</label><br>


                                <input type="checkbox" id="animacao classica" name="disciplinasfavoritas[]" value="Animação Clássica">
                                <label for="animacao classica">Animação Clássica</label><br>


                                <input type="checkbox" id="digital design" name="disciplinasfavoritas[]" value="Digital Design">
                                <label for="digital design">Digital Design</label><br>
                                </div>

                                <div class="checkbox-disciplinas5">
                                    <input type="checkbox" id="design de jogos" name="disciplinasfavoritas[]" value="Design de Jogos">
                                <label for="design de jogos">Design de Jogos</label><br>


                                <input type="checkbox" id="programacao para jogos, web e dispositivos moveis" name="disciplinasfavoritas[]" value="Programação para Jogos, Web e Dispositivos Móveis">
                                <label for="programacao para jogos, web e dispositivos moveis">Programação para Jogos, Web e Dispositivos Móveis</label><br>


                                <input type="checkbox" id="design e desenvolvimento de vr/ar" name="disciplinasfavoritas[]" value="Design e Desenvolvimento de VR/AR">
                                <label for="design e desenvolvimento de vr/ar">Design e Desenvolvimento de VR/AR</label>
                                </div>

                            </div>

                            <input type="submit" value="Salvar"> <br><br>
                             <input type="reset" value="Limpar"> <br>
                   
                </form>
            </div>
        </main>
</section>


<footer>
    <span class="footer-title">Education Web</span>
    <ul class="socials">
    <li><a href="https://wa.me/qr/KNIVFKKZMUUXH1"><i class="bi bi-whatsapp"></i></a></li>
        <li><a href="https://pt-br.facebook.com/"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://x.com/"><i class="bi bi-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/elliscarv/"><i class="bi bi-instagram"></i></a></li>
    </ul>
    <div class="info">
        <ul>
            <li class="footer-list_header">Oferece</li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Documentos</li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Políticas de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Cookies</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Para você</li>
            <li><a href="#">Manuais</a></li>
            <li><a href="#">Tutoriais</a></li>
            <li><a href="#">Dicas e Truques</a></li>
            <li><a href="#">F&Q</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Trabalhe conosco</li>
            <li><a href="#">Afiliar</a></li>
            <li><a href="#">Colaborações</a></li>
            <li><a href="#">Patrocinadores</a></li>
            <li><a href="#">Parcerias</a></li>
    </div>
    <p>Copyright &copy 2024 Education Web. Todos os diereitos reservados. </p>
</footer>

</body>
</html>