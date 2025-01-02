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
            case 'casa-hipico':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa Hípico';
                $description = 'Proyecto de cancelería integral que incluye: Canceles corredizos elevables, ventanas fijas/oscilobatientes, barandales de templado, domos y canceles de baño. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg'],
                    ['title' => 'Galeria', 'img' => '9.jpg'],
                    ['title' => 'Galeria', 'img' => '10.jpg'],
                    ['title' => 'Galeria', 'img' => '11.jpg'],
                    ['title' => 'Galeria', 'img' => '12.jpg'],
                    ['title' => 'Galeria', 'img' => '13.jpg'],
                    ['title' => 'Galeria', 'img' => '14.jpg'],
                    ['title' => 'Galeria', 'img' => '15.jpg']
                ];

                break;
            
            case 'casa-jg':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa JG';
                $description = 'Proyecto de cancelería integral que incluye: Ventanas, canceles fijos, canceles corredizos, domos, espejos, barandales y canceles de baño. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg'],
                    ['title' => 'Galeria', 'img' => '9.jpg'],
                    ['title' => 'Galeria', 'img' => '10.jpg'],
                    ['title' => 'Galeria', 'img' => '11.jpg'],
                    ['title' => 'Galeria', 'img' => '12.jpg']
                ];

                break;
            
            case 'cortinas-terrazas':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Cortinas Terrazas';
                $description = 'Instalación y fabricación a medida de persianas enrollables blackout, filtro solar y cortinas de tela blackout. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg']
                ];

                break;

            case 'casa-blanca':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa Blanca';
                $description = 'Proyecto de cancelería integral de Aluminio en color Blanco línea Panorama que incluye: Canceles fijos y corredizos, domos, ventanas, espejos, barandales y canceles de baño de templado. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg']
                ];

                break;
            
            case 'casa-mg':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa MG';
                $description = 'Proyecto de cancelería integral de PVC en color que incluye: Puertas francesas, canceles fijos y corredizos, ventanas, espejos con iluminación LED cálida, barandales y canceles de baño de templado. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg'],
                    ['title' => 'Galeria', 'img' => '9.jpg'],
                    ['title' => 'Galeria', 'img' => '10.jpg'],
                    ['title' => 'Galeria', 'img' => '11.jpg']
                ];

                break;

            case 'casa-cc':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa CC';
                $description = 'Proyecto de cancelería integral de PVC Rehau en color Schwarzbraun que incluye: Canceles oscilobatientes, fijo Jumbo insulado de 450 kg. Canceles corredizos, barandales y canceles de baño de templado. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg']
                ];

                break;
                
            case 'clinica-vandent':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Clínica Vandent';
                $description = 'Proyecto de cancelería integral mixta que incluye: Cubículos de cristal templado para consultorios y laboratorio, fachada principal integral de aluminio con cristal templado, domos, puertas de aluminio, mamparas de baño, fijos y oscilobatientes de PVC con cristal doble para aislar ruido de la vía del tren cercana. Irapuato, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg'],
                    ['title' => 'Galeria', 'img' => '9.jpg'],
                    ['title' => 'Galeria', 'img' => '10.jpg']
                ];

                break;

            case 'casa-sorrento':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Casa Sorrento 1';
                $description = 'Proyecto de cancelería integral de PVC en color Nogal que incluye: Canceles fijos y corredizos, celosías de aluminio imitación madera, domos, ventanas, espejos, barandales y canceles de baño de templado. León, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg'],
                    ['title' => 'Galeria', 'img' => '6.jpg'],
                    ['title' => 'Galeria', 'img' => '7.jpg'],
                    ['title' => 'Galeria', 'img' => '8.jpg'],
                    ['title' => 'Galeria', 'img' => '9.jpg'],
                    ['title' => 'Galeria', 'img' => '10.jpg'],
                    ['title' => 'Galeria', 'img' => '11.jpg'],
                    ['title' => 'Galeria', 'img' => '12.jpg'],
                    ['title' => 'Galeria', 'img' => '13.jpg'],
                    ['title' => 'Galeria', 'img' => '14.jpg'],
                    ['title' => 'Galeria', 'img' => '15.jpg']
                ];

                break;

            case 'agencia-automotriz':
                $slug = $name;

                $cover = 'cover.jpg';
                $project_name = 'Agencia Automotriz';
                $description = 'Proyecto de cancelería de Aluminio en color negro que incluye: Fachadas integrales de básicos con cristal templado color negro, puertas corredizas, ventanas fijas y sifones. Irapuato, Gto. MX.';
                
                $gallery = [
                    ['title' => 'Galeria', 'img' => '1.jpg'],
                    ['title' => 'Galeria', 'img' => '2.jpg'],
                    ['title' => 'Galeria', 'img' => '3.jpg'],
                    ['title' => 'Galeria', 'img' => '4.jpg'],
                    ['title' => 'Galeria', 'img' => '5.jpg']
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
