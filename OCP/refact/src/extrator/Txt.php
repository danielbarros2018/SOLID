<?php

namespace App\extrator;

class Txt extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle);
            $nome = substr($linha, 11, 30);
            $cpf = substr($linha, 0, 11);
            $email = substr($linha, 41);

            $this->setDados($nome, $email, $cpf);
        }

        fclose($handle);
        
        return $this->getDados();
    }
}