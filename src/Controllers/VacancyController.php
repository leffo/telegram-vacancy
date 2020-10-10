<?php


namespace AYakovlev\Controllers;


use AYakovlev\Core\Request;
use AYakovlev\Core\View;
use AYakovlev\Exception\InvalidArgumentException;
use AYakovlev\Exception\UnauthorizedException;
use AYakovlev\Models\User;

use AYakovlev\Models\Vacancy;

class VacancyController extends AbstractController
{
    private ?int $idVacancy;
    protected Vacancy $vacancy;

    public function __construct()
    {
        parent::__construct();
        $this->vacancy = new Vacancy();
        if (isset(Request::$params[3])) {
            $this->idVacancy = Request::$params[3];
        }
    }

    /**
     * @return int
     */
    public function getIdVacancy(): int
    {
        return $this->idVacancy;
    }

    /**
     * @param int $idVacancy
     */
    public function setIdVacancy(int $idVacancy): void
    {
        $this->idVacancy = $idVacancy;
    }

    public function view(): void
    {
        $data = Vacancy::findOrFail($this->idVacancy);
        //var_dump($data);

        if ($data === null) {
            View::render("404", null, 404);
            return;
        }

        View::render("vacancy", $data);
    }

    public function add(): void
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }

        if (!empty($_POST)) {
            try {
                $vacancy = Vacancy::createFromArray($_POST, $this->user);
            } catch (InvalidArgumentException $e) {
                View::render('vacancy/add.php', ['error' => $e->getMessage()]);
                return;
            }

            header('Location: /vacancy/view/' . $vacancy->getId(), true, 302);
            exit();
        }


        View::render("addVacancy", []);
        //return;
    }
}