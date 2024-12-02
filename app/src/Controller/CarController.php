<?php

namespace App\Controller;

use App\Model\Repository\RepoManager;
use Symplefony\Controller;
use Symplefony\View;

class CarController extends Controller
{
    //Admin : liste
    public function index(): void
    {
        $view = new View('car:admin:list');

        $data = [
            'title' => 'Liste de voitures',
            'cars' => RepoManager::getRM()->getCarRepository()->getAll()
        ];
        $view->render($data);
    }
}
