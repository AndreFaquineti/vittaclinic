<!--
Usuario:
Email, Senha
Sistema:
Se Email presente em tabela médicos {
    Se Senha presente em tabela médicos {
        Acesso Concedido, Email salva em Session , Usuario vai para 'MinhaPagina.php';
    } Senão {
        Escreve: "verifique sua senha."
    }
} Senão {
    Se email presente em tabela pacientes {
        Se Senha presente em tabela pacientes {
            Acesso Concedido, Email salva em Session, Usuario vai para 'MinhaPagina.php';
        } Senão {
        Escreve: "verifique sua senha."
    }
    } Senão {
        Escreve: "verifique seu email."
    }
}
-->
<?php

?>