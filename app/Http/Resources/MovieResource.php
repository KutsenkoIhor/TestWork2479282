<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $dataCinemas = $this->cinemas()->get();
        $arrCinema = [];
        foreach ($dataCinemas as $value) {
            $nameCinema = $value["name"];
            $idCinema = $value["id"];
            $arrCinema[$idCinema] = $nameCinema;
            }

        return [
            'name_movie' => $this->name,
            'id_movie' => $this->id,
            'cinemas' => $arrCinema,
        ];
    }
}
