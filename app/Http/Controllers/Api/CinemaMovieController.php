<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CinemaMovieRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CinemaMovieController extends Controller
{
    private CinemaMovieRepository $repository;

    public function __construct(CinemaMovieRepository $cinemaMovieRepository)
    {
        $this->repository = $cinemaMovieRepository;
    }

    public function cinema(): AnonymousResourceCollection
    {
        return $this->repository->cinemaAll();
    }

    public function movie(): AnonymousResourceCollection
    {
        return $this->repository->movieAll();
    }

    public function movieSort(): AnonymousResourceCollection
    {
        return $this->repository->sortMovie();
    }

    public function cinemaSort(): AnonymousResourceCollection
    {
        return $this->repository->sortCinema();
    }

    public function movieSearch($name_movie): AnonymousResourceCollection
    {
        return $this->repository->searchMovie($name_movie);
    }

    public function cinemaSearch($name_cinema): AnonymousResourceCollection
    {
        return $this->repository->searchCinema($name_cinema);
    }

    public function search(Request $request): AnonymousResourceCollection
    {
        $cinema = '';
        $allParameters = $request->all();
        foreach ($allParameters as $key => $value) {
            if ($key === 'cinema') {
                $cinema = $request->all()['cinema'];
            }
        }
        return $this->repository->search($cinema);
    }
}


