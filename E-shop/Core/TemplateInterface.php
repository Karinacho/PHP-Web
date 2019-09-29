<?php


namespace Core;


interface TemplateInterface
{
    public function render(string $templateName, $data,$additionalData, $errors);
}