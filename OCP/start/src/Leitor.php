<?php

namespace App;

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
            $arquivo = new Arquivo();
            $ext = explode('.', $this->getArquivo());
            
            if (strtoupper($ext[1]) == 'CSV') {
                $arquivo->lerArquivoCSV($caminho);
            } else if (strtoupper($ext[1]) == 'TXT') {
                $arquivo->lerArquivoTXT($caminho);
            }
            
            return $arquivo->getDados();
        }
        
        return [];
    }
}