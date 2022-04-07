<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $dataMovies = $this->movies()->get();
        $arrMovie = [];
        foreach ($dataMovies as $value) {
            $nameCinema = $value["name"];
            $idCinema = $value["id"];
            $arrMovie[$idCinema] = $nameCinema;
        }

        $movie = '';
        foreach ($request->all() as $key => $value) {
            if ($key === 'movie') {
                $movie = $request->all()['movie'];
            }
        }

        if (in_array($movie, $arrMovie)) {
            return [
                'name_cinema' => $this->name,
                'name_movie' => $movie,
            ];
        } else {
            return [];
        }
    }
}
