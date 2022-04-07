<?php

namespace App\Repositories;

use App\Http\Resources\MovieResource;
use App\Http\Resources\CinemaResource;
use App\Http\Resources\SearchResource;
use App\Models\Cinema;
use App\Models\Movie;
use App\Repositories\Interfaces\CinemaMovieRepositoryInterface;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CinemaMovieRepository implements CinemaMovieRepositoryInterface
{
    public function cinemaAll(): AnonymousResourceCollection
    {
        return CinemaResource::collection(Cinema::all());
    }

    public function movieAll(): AnonymousResourceCollection
    {
        return MovieResource::collection(Movie::all());
    }

    public function sortMovie(): AnonymousResourceCollection
    {
        return MovieResource::collection(Movie::orderBy('name')->get());
    }

    public function sortCinema(): AnonymousResourceCollection
    {
        return CinemaResource::collection(Cinema::orderBy('name')->get());
    }

    public function searchMovie(string $name_movie): AnonymousResourceCollection
    {
        return MovieResource::collection(Movie::where('name', $name_movie)->get());
    }

    public function searchCinema(string $name_cinema): AnonymousResourceCollection
    {
        return CinemaResource::collection(Cinema::where('name', $name_cinema)->get());
    }

    public function search(string $cinema): AnonymousResourceCollection
    {
        return SearchResource::collection(Cinema::where('name', $cinema)->get());
    }

}

