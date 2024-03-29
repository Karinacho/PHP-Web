<?php


namespace app\Http;


use Core\DataBinderInterface;
use Core\TemplateInterface;

class HttpHandlerAbstract
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
    public function render(string $templateName, $data = null,$additionalData = null, $errors = null) {
        $this->template->render($templateName,$data,$additionalData, $errors);
    }
    public function redirect(string $url){
        header("Location: $url");
    }
}