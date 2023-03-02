<?php

namespace App\Http\Controllers;

use App\Models\Slug;
use App\Models\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Resources\SlugResource;
use App\Http\Resources\DictionaryResource;

class ApiController extends Controller
{
    
    public function routingIA (Request $request) {
        
        $locale = $request->get("locale");
        $path = $request->get("path");

        App::setLocale($locale);
        
        $slug       = Slug::where("slug->" . $locale, $path)->first();
        $dictionary = [];
        
        /** 404 La pagina non esiste */
        if (!$slug) {

            $error = new \stdClass;
            $error->locale = $locale;
            $error->url = $path;
            
            $error->statusCode = "404";
            $error->statusMessage = "Page Not Found";
            $error->message = "Questa pagina non è stata trovata";
            $error->stack = "";

            $error->slug = [
                "metatag" => [
                    "seo" => [
                        "title" => "404 Page not found",
                        "description" => "404 Page not found",
                    ]
                ]
            ];

            return response()->json($error);
            
        } else {

            $slug = new SlugResource($slug);

            /** Carico il dizionario per questa pagina */
            $dictionary = DictionaryResource::collection(
                            Dictionary::whereJsonContains("tag", $slug->type)
                                ->orWhereJsonContains("tag", "header")
                                ->orWhereJsonContains("tag", "footer")
                                ->orWhereJsonContains("tag", "*")
                                    ->get()
                            );
            
            $object = new \stdClass;
            $object->slug = $slug;
            // $object->dictionary = $dictionary;

            return response()->json($object);

        }
        
       

    }

}
