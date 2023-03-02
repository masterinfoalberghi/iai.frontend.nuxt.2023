<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Resources\Json\JsonResource;

class SlugResource extends JsonResource
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
            "id" => $this->id,
            "slug" => $this->slug[$locale],
            "type" => $this->type,
            "structures_id" => $this->structures_id,
            "structure_id" => $this->structure_id,
            "redirect_slug" => $this->redirect_slug,
            "parents_slug_id" => $this->parents_slug_id,
            "menus_slug_id" => $this->menus_slug_id,
            "metatag" => [
                "seo" => [
                    "title" => isset($this->metatag["seo"]["title"]["*"]) ? $this->metatag["seo"]["title"]["*"] : (isset($this->metatag["seo"]["title"][$locale]) ? $this->metatag["seo"]["title"][$locale] : ""),
                    "description" => isset($this->metatag["seo"]["description"]["*"]) ? $this->metatag["seo"]["description"]["*"] : (isset($this->metatag["seo"]["description"][$locale]) ? $this->metatag["seo"]["description"][$locale] : ""),
                ],
                "page" => [
                    "title" => isset($this->metatag["page"]["title"]["*"]) ? $this->metatag["page"]["title"]["*"] : (isset($this->metatag["page"]["title"][$locale]) ? $this->metatag["page"]["title"][$locale] : ""),
                    "description" => isset($this->metatag["page"]["description"]["*"]) ? $this->metatag["page"]["description"]["*"] : (isset($this->metatag["page"]["description"][$locale]) ? $this->metatag["page"]["description"][$locale] : ""),
                ]
            ] 
        ];
        
    }
}
