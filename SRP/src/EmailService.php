<?php

namespace App;

class EmailService
{
    private string $de;
    private string $para;
    private string $assunto;
    private string $conteudo;

    /**
     * @param string $de
     * @param string $para
     * @param string $assunto
     * @param string $conteudo
     */
    public function __construct(
        string $de = 'noreply@site.com.br',
        string $para,
        string $assunto,
        string $conteudo)
    {
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function enviarEmail()
    {
        return '<br/> -----  Enviar e-mail  -----<br/>';
    }

}