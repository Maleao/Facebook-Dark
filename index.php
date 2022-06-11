<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximu-scale=1.0">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Login Facebook dark</title>
</head>
<body>  

    <header> 
        <div class="center"> 
            <div class="logo"> 
                <h2>Facebook</h2>      
            </div><!--logo--> 

            <form method="post" class="form-login"> 
             <div class= "form-element"> 
                 <p>E-mail ou Telefone</p> 
                 <input type="email"/> 
             </div><!--form-element--> 

             <div class= "form-element"> 
                 <p>Senha</p> 
                 <input type="password"/> 
             </div><!--form-element--> 

             <div class= "form-element"> 
                 <input type="submit" name="ação" value="enviar"/> 
             </div><!--form-element--> 

            </form><!--form-login--> 

            <div class="clear"></div> 
            </div><!--center--> 
    </header> 
      
    <section class="main"> 
        <div class="center"> 
            <div class="img-caveira"> 
                <img src="img/caveira.png"/>
            </div><!--img-caveira--> 

            <div class="abrir-conta"> 
                <h2>Abra sua conta</h2> 
                <h3> É gratuíto e sempre será HAHAHAHA </h3> 
                <form class="create-account"> 

                    <div class="w50">  
                        <input placeholder="nome" type="text"> 
                    </div><!--w50--> 

                    <div class="w50"> 
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50--> 

                    <div class="w100"> 
                        <input placeholder="E-mail" type="email">
                    </div><!--w100--> 

                    <div class="w100"> 
                        <input placeholder="Senha" type="password">
                    </div><!--w100--> 

                    <div class="w100"> 
                        <h2>Data de Nascimento</h2> 
                        <select name="nascimento-dia" class="nascimento"> 
                            <?php  
                                for($i = 1; $i <= 31; $i++) {  
                            ?> 
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 
                            <?php } ?> 
                        </select> 
                        <select name="nascimento-mes" class="nascimento">  
                            <option value="0">junho</option> 
                        </select> 
                        <select name="nascimento-ano" class="nascimento"> 
                        <?php  
                                for($i = 1960; $i <= 2022; $i++) {  
                            ?> 
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 
                            <?php } ?>  
                        </select> 
                        <div class="clear"></div>  
                    </div><!--w100--> 
                     
                    <div class="w100"> 
                        <div class="input-radio"> 
                            <input name="sexo" type="radio" value="masculino"> 
                            <h2>Masculino</h2> 
                        </div><!--input-radio"--> 
                        <div class="input-radio">  
                            <input name="sexo" type="radio" value="feminino"> 
                            <h2>Feminino</h2> 
                            </div><!--input-radio"--> 
                            <div class="clear"></div>  
                    </div><!--w100-->  

                    <div class="w100">       
                        <input type="submit" name="acao" value="cadastrar">
                    </div><!--w100--> 

                </form>
            </div><!--abrir-conta--> 
            <div class="clear"></div>
        </div><!--center-->
    </section><!--main--> 
    
    <section class="linguas"> 
        <div class="center"> 
            <a href="#">Português (BR)</a> 
            <a href="#">Cracking (🏴)</a> 
            <a href="#">adi shakti (☬)</a> 
            <a href="#">Hacking (💀)</a> 
            <a href="#">Star (✯)</a> 
            <a href="#">Gemini (♊)</a> 
        </div><!--center-->
    </section><!--linguas-->

</body>
</html>