<?php


function Upload($objeto){
    $upload_dir="arquivos/";//CAMIMHO DA PASTA ONDE AS IMAGENS SERÃO ARMAZENADAS.
        //ARMAZENANDO O NOME DO ARQUIVO E A EXTENSÃO QUE FOI SELECIONADA.
        $nome_arq=basename($objeto['name']);//BASENAME:RETIRA O NOME DO ARQUIVO, NAME:VEM COM O NOME DO ARQUIVO.


        //VERIFICA TIPO DE EXTENSÃO PERMITIDA PARA O PLOAD DO ARQUIVO, USAMOS O COMANDO strstr PARA LOCALIZAR SEQUÊNCIA DE CARACTERES.
		if(strstr($nome_arq, '.jpg') || strstr($nome_arq, '.png'))
        {
            //CRIPTOGRAFIA DO ARQUIVO
            $extensao = substr($nome_arq, strpos($nome_arq,"."),5);
            $prefixo = substr($nome_arq,0, strpos($nome_arq,"."));
            $nome_arq = md5($prefixo).$extensao;


            //GUARDAMOS O CAMINHO E O NOME DA IMAGEM QUE SERÁ INSERIDA NO BD.
            $upload_file =  $upload_dir . $nome_arq;


            if(move_uploaded_file($objeto['tmp_name'], $upload_file))
            {
             return $upload_file;
            }else{
                echo("O arquivo não pode ser movido para o servidor");
            }

        }else{
            echo('Extensão Inválida');
        }


}

?>
