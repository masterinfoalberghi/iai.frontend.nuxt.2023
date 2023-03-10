<?php

namespace App\Http\Controllers;

use Throwable;
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
            $object->dictionary = $dictionary;

            return response()->json($object);

        }
        
       

    }

    /**
     * Chiama l'iscrizione alla newsletter 
     * 
     * @access public
     * @param Request $request
     * @return JSON
     */
    
     public function subscribe (Request $request)
     {
        
        
         $email = $request->get('email');
         $IDList = "1";
         $IDGroup = "31,50";
         $RequiredConfirmation = false;
         $ReturnCode = 0;
         $server_response = '';
 
         try
         {
 
             $console_url = 'http://a4g6g.s21.it/frontend/xmlsubscribe.aspx?email='
                 .urldecode($email)
                 .'&list='   .$IDList
                 .'&group='  .$IDGroup
                 .'&confirm='.$RequiredConfirmation.
                  '&retCode='.$ReturnCode;
 
             $server_request = curl_init($console_url);
             curl_setopt($server_request, CURLOPT_RETURNTRANSFER, 1);
             $server_response = curl_exec($server_request);
             curl_close($server_request);
            
             return response()->json(["data" => $server_response]);
 
         } catch (Throwable $ex) {
 
            return response()->json($server_response,500);
             
         }
 
     }

}
