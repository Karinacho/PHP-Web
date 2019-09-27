<?php


namespace App\Http;


use Core\DataBinderInterface;
use Core\TemplateInterface;

class UserHttpHandlerAbstract
{
    /**
     * @var TemplateInterface
     */
    private $template;
    /**
     * @var DataBinderInterface
     */
    protected $dataBinder;
    public function __construct(TemplateInterface $template, DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }
    public function render(string $templateName, $data = null, $errors = null) {
            $this->template->render($templateName,$data, $errors);
    }
    public function redirect(string $url){
        header("Location: $url");
    }
}