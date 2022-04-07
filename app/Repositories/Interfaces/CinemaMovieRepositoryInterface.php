<?php

namespace App\Repositories\Interfaces;

interface CinemaMovieRepositoryInterface
{
    public function cinemaAll();
    public function movieAll();
    public function sortMovie();
    public function sortCinema();
    public function searchMovie(string $name_movie);
    public function searchCinema(string $name_cinema);
    public function search(string $cinema);
}
