<?php

namespace App\Model\Repository;

use App\Model\Repository\CategoryRepository;
use App\Model\Repository\CarRepository;

use App\Model\Repository\UserRepository;
use Symplefony\Database;
use Symplefony\Model\RepositoryManagerTrait;

class RepoManager
{
    use RepositoryManagerTrait; // Prends tout le code dans RepositoryManageTrait et le 'colle';

    private UserRepository $user_repository;
    public function getUserRepo(): UserRepository
    {
        return $this->user_repository;
    }

    private CategoryRepository $category_repository;
    public function getCategoryRepository(): CategoryRepository
    {
        return $this->category_repository;
    }

    private CarRepository $car_repository;
    public function getCarRepository(): CarRepository
    {
        return $this->car_repository;
    }


    private function __construct()
    {
        $pdo = Database::getPDO();

        $this->user_repository = new UserRepository($pdo);
        $this->category_repository = new CategoryRepository($pdo);
        $this->car_repository = new CarRepository($pdo);
    }
}
