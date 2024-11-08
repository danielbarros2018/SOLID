<?php

namespace App\extrator;

class Csv extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, 'r');

        while (($linha = fgetcsv($handle, 9999, ';')) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
        
        return $this->getDados();
    }

}