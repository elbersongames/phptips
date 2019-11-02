<?php


namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Support\Seo;

/**
 * Class Web
 * @package Source\App
 */
class Web
{
    /** @var Engine */
    private $view;

    /** @var $seo Seo */
    private $seo;

    /**
     * Web constructor.
     */
    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../../theme", "php");
        $this->seo = new Seo();
    }

    /**
     *
     */
    public function home(): void
    {
        $users = (new User())->find()->fetch(true);
        $head = $this->seo->render(
            "Home | " . SITE,
            "Descricão do site aqui!",
            url(),
            "https://via.placeholder.com/1200x628.png?text=Home+Cover"
        );

        echo $this->view->render("home", [
            "head" => $head,
            "users" => $users,

        ]);
    }

    /**
     *
     */
    public function contact(): void
    {

        $head = $this->seo->render(
            "Contato | " . SITE,
            "Descricão do site Contato!",
            url("contato"),
            "https://via.placeholder.com/1200x628.png?text=Contato+Cover"
        );

        echo $this->view->render("contact", [
            "head" => $head,
        ]);
    }

    /**
     * @param array $data
     */
    public function error(array $data): void
    {

        $head = $this->seo->render(
            "Error {$data["errcode"]} | " . SITE,
            "Descricão do site Contato!",
            url("ops/{$data["errcode"]}"),
            "https://via.placeholder.com/1200x628.png?text=Erro+{$data["errcode"]}"
        );


        echo $this->view->render("error", [
            "head" => $head,
            "error" => $data["errcode"]
        ]);
    }

}