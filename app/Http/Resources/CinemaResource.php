<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CinemaResource extends JsonResource
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

        return [
            'name_cinema' => $this->name,
            'id_cinema' => $this->id,
            'name_movie' => $arrMovie,
        ];
    }
}
