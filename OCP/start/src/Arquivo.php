<?php

namespace App;

class Arquivo
{
    private array $dados = [];
    
    public function lerArquivoCSV(string $caminho)
    {
        $handle = fopen($caminho, "r");
        
        while (($linha = fgetcsv($handle, 9999, ';')) !== false) {
            $this->setDados($linha[0],$linha[1],$linha[2]);
        }
        
        fclose($handle);
    }
    
    public function lerArquivoTXT(string $caminho)
    {
        $handle = fopen($caminho, "r");
        
        while (!feof($handle)) {
            $linha = fgets($handle);
//            echo $linha;
            $nome = substr($linha, 11, 30);
            $cpf = substr($linha, 0, 11);
            $email = substr($linha, 41);
            
            $this->setDados($nome,$email,$cpf);
        }
        
        fclose($handle);
    }

    private function setDados(string $nome, string $cpf, string $email): void
    {
        $this->dados[] = [
            'nome' => iconv('ISO-8859-1', 'UTF-8', $nome),
            'cpf' => $cpf,
            'email' => $email
        ];
    }

    public function getDados(): array
    {
        return $this->dados;
    }
}