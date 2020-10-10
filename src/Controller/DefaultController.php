<?php


namespace AYakovlev\Controller;

class DefaultController extends AbstractController
{
    public function index()
    {
        header('Location: /vacs/vacancies');
    }
}