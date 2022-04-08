<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog excursões</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <main>
    <a href="fotos">ver fotos</a>
        <div class="logoo">
            <img src="imagens/00.png" alt="logo">
        </div>
            <h1 class="montanha">Super montanha</h1>
            <h2 class="melhor" >A melhor paisagem do mundo!</h2>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptatem omnis vel repudiandae explicabo nobis architecto, 
            aliquam qui ipsum modi ratione mollitia, cum natus similique,
            inventore voluptatum error quibusdam quod.</p>
            <hr>
            <h1 class="vantagens">Vantagens</h1>
        <div class="apresentação">
            <ul>
                <li>Chalés confortáveis e luxuosos com suítes e frigobar em todos os quartos.</li>
                <li>Loja de equipamentos para raphel certificada e com total segurança. </li>
                <li>Instrutores e guias qualificados com amplo conhecimento da região.</li>
                <li>Restaurante e recepção 24 horas.</li>
                <li>Vista panorâmica do hotel.</li>
            </ul>
        </div>
            <hr>
        <div class="excursões">
            <h2>Excursões</h2>
            <table>
                <tbody>
                    <tr>
                        <th>Saída</th>
                        <th>Cidade</th>
                    </tr>
                    <tr>
                        <td>12/05/2022</td>
                        <td>São Paulo</td>
                    </tr>
                    <tr>
                        <td>12/06/2022</td>
                        <td>Rio de janeiro</td>
                    </tr>
                    <tr>
                        <td>12/07/2022</td>
                        <td>Brasília</td>
                    </tr>
                    <tr>
                        <td>12/08/2022</td>
                        <td>Belo horizonte</td>
                    </tr>
                    <tr>
                        <td>12/09/2022</td>
                        <td>Salvador</td>
                    </tr>
                    <tr>
                        <td>12/10/2022</td>
                        <td>Goiânia</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <hr>
        <div class="box">
        <form action= "{{ route ('cadastrar_usuario')}}" method="POST">
                @csrf 
            <fieldset>
                <legend><strong>Fórmulário de cadastro</strong></legend>
                    <h1>Entre em contato pelo telefone (61)9xxx-xxx, ou deixe seu nome e telefone que entramos em contato com você:</h1>
                    <div>
                        <label for="nome" class="labelInput">Nome:</label>
                        <input type="text" name="nome" class="inputUser" required, min:3>
                      
                        <label for="telefone" class="labelInput">Telefone:</label>
                        <input type="text" name="telefone" class="inputUser" required>  
                    <input type="submit" name="submit"id="submit" value="Cadastrar">
                    </div>  
            </fieldset>
        </form>
     </div>
    </main>
  </body>
</html>