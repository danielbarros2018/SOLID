<?php

namespace App;

use App\extrator\Arquivo;

class Leitor
{
    private string $diretorio;
    private string $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo() : array
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        if (file_exists($caminho)) {
            $ext = explode('.', $this->getArquivo());
            $class = '\App\extrator\\' . ucfirst($ext[1]);
            
            return call_user_func_array(
                [
                    new $class,
                    'lerArquivo'
                ], [
                    $caminho
                ]
            );
        }
    }
    
}