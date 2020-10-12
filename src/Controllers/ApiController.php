<?php


namespace AYakovlev\Controllers;


use AYakovlev\Controllers\AbstractController;
use AYakovlev\Core\Request;
use AYakovlev\Core\View;
use AYakovlev\Exception\NotFoundJSONException;
use AYakovlev\Models\Vacancy;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiController extends AbstractController
{
    private const ID = 3;
    public function index()
    {
        $entity = [
            'тестирование API' => 'work',
            'numberTwo' => [
                'numberTwoOne' => 'dataOneOne',
                'numberTwoTwo' => 'dataOneTwo',
            ],
            'numberThree' => 'dataThree',
        ];

        header('Content-type: application/json; charset=utf-8');
        echo json_encode($entity);
    }


    public function vacancy()
    {

        try {
            $vacancy = Vacancy::findOrFail(Request::$params[self::ID]);
        } catch (ModelNotFoundException $e) {
            throw new NotFoundJSONException("Ошибка 404 - вакансия не существует");
        }


        if ($vacancy === null) {
            throw new NotFoundJSONException("Ошибка 404 - вакансия не существует");
        }

        $this->view->displayJson($vacancy, 200);
    }
}