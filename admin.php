<?php

include "cabecalho.php";

?>


<section id="login">
    <h2>Login Admin</h2>
    
        <form action="validacao1.php" method="post">
           <fieldset>
           <div>
               <label >
                CPF:
                </label>
                <input type="text" name="cpf" id="" style="width: 11em">
            </div>

            <div>
                <label >
                Senha:
                </label>
                <input type="password" name="senha" id="" style="width: 10em" >
            </div>
        
            </fieldset>

            <div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
        </form>  
    
</section>



<?php

include "rodape.php";

?>