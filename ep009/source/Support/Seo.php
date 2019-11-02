<?php


namespace Source\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optimizer;

    public function __construct($schema = "article")
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            SITE,
            "pt-br",
            $schema
        )->publisher(
            "Elberson-Conceicao-156072164971464",
            "elberson.conceicao"
        )->twitterCard(
            "@elbersongames.com",
            "@elbersongames",
            "elbersongames.com"
        )->facebook(
            223332
        );
    }

    public function render(string $titulo, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optimizer->optimize($titulo, $description, $url, $image, $follow)->render();

    }
}