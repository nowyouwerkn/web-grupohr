<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function projects()
    {
        return view('projects');
    }

    public function projectDetail($name)
    {
        switch ($name) {
            case 'casa-herpon':
                $slug = $name;

                $cover = 'casa-herpon-cover.jpg';
                $project_name = 'Casa HERPON';
                $description = 'Proyecto de cancelería integral de Aluminio línea Panorama color Negro para Grupo HERPON. Puertas, ventanas, espejos, barandales, canceles corredizos y canceles de baño.';
                
                $gallery = [
                    ['title' => 'Galeria 1', 'img' => 'casa-herpon-gallery-1.jpg'],
                    ['title' => 'Galeria 2', 'img' => 'casa-herpon-gallery-2.jpg'],
                    ['title' => 'Galeria 3', 'img' => 'casa-herpon-gallery-3.jpg'],
                    ['title' => 'Galeria 4', 'img' => 'casa-herpon-gallery-4.jpg'],
                    ['title' => 'Galeria 5', 'img' => 'casa-herpon-gallery-5.jpg'],
                    ['title' => 'Galeria 6', 'img' => 'casa-herpon-gallery-6.jpg'],
                    ['title' => 'Galeria 7', 'img' => 'casa-herpon-gallery-7.jpg'],
                    ['title' => 'Galeria 8', 'img' => 'casa-herpon-gallery-8.jpg'],
                ];

                break;
            
            case 'casa-jobreka':
                $slug = $name;

                $cover = 'casa-jobreka-gallery-4.jpg';
                $project_name = 'Casa Blanca JOBREKA';
                $description = 'Proyecto de cancelería integral de Aluminio en color Blanco línea Panorama para JOBREKA. Canceles fijos y corredizos, domos, ventanas, espejos, barandales y canceles de baño.';
                
                $gallery = [
                    ['title' => 'Galeria 1', 'img' => 'casa-jobreka-gallery-1.jpg'],
                    ['title' => 'Galeria 2', 'img' => 'casa-jobreka-gallery-2.jpg'],
                    ['title' => 'Galeria 3', 'img' => 'casa-jobreka-gallery-3.jpg'],
                    ['title' => 'Galeria 4', 'img' => 'casa-jobreka-gallery-4.jpg'],
                    ['title' => 'Galeria 5', 'img' => 'casa-jobreka-gallery-5.jpg'],
                    ['title' => 'Galeria 6', 'img' => 'casa-jobreka-gallery-6.jpg'],
                    ['title' => 'Galeria 7', 'img' => 'casa-jobreka-gallery-7.jpg'],
                    ['title' => 'Galeria 8', 'img' => 'casa-jobreka-gallery-8.jpg'],
                ];

                break;

            case 'casa-rayas':
                $slug = $name;

                $cover = 'casa-rayas-cover.png';
                $project_name = 'Casa JG RAYAS';
                $description = 'Proyecto de cancelería integral de Aluminio en color Blanco línea Panorama para rayas. Canceles fijos y corredizos, domos, ventanas, espejos, barandales y canceles de baño.';
                
                $gallery = [
                    ['title' => 'Galeria 1', 'img' => 'casa-rayas-gallery-1.jpg'],
                    ['title' => 'Galeria 2', 'img' => 'casa-rayas-gallery-2.jpg'],
                    ['title' => 'Galeria 3', 'img' => 'casa-rayas-gallery-3.jpg'],
                    ['title' => 'Galeria 4', 'img' => 'casa-rayas-gallery-4.jpg'],
                    ['title' => 'Galeria 5', 'img' => 'casa-rayas-gallery-5.jpg'],
                    ['title' => 'Galeria 6', 'img' => 'casa-rayas-gallery-6.jpg'],
                    ['title' => 'Galeria 7', 'img' => 'casa-rayas-gallery-7.jpg'],
                    ['title' => 'Galeria 8', 'img' => 'casa-rayas-gallery-8.jpg'],
                ];

                break;
            default:
                return view('project_detail');

                break;
        }

        return view('project_detail')
        ->with('slug', $slug)
        ->with('cover', $cover)
        ->with('project_name', $project_name)
        ->with('description', $description)
        ->with('gallery', $gallery);
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        $text = 'Terminos y Condiciones';

        return view('legal')->with('text', $text);
    }

    public function privacy()
    {
        $text = 'Aviso de Privacidad';

        return view('legal')->with('text', $text);
    }

    public function cookies()
    {
        $text = 'Uso de Cookies';

        return view('legal')->with('text', $text);
    }
}
