<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Resources\Json\JsonResource;

class DictionaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public function toArray($request)
    {   
        
        $locale = App::getLocale();

        return [
            "key" => $this->key,
            "value" => isset($this->value["*"]) ? $this->value["*"] : (isset($this->value[$locale]) ? $this->value[$locale] : "nokey: " . $this->key),
        ];
    }
}
