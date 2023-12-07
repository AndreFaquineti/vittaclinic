<!--
Usuario:
Email, Senha
Sistema:
Se Email presente na tabéla médicos {
    escreve: "email já está em uso";
} Senão {
    Se Email presente na tabéla pacientes {
        escreve: "email já está em uso";
    }
} Senão {
    Envia Email e Senha para nova Row no banco de dados,
    Acesso Concedido, Email salva em Session , Usuario vai para 'MinhaPagina.php';
}
-->
<?php

?>