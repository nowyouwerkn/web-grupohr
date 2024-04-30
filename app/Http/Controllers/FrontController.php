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
            case 'casa-lomas':
                $slug = $name;

                $project_name = 'Casa Lomas';
                $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
                
                $content_title = 'Lujo en cada detalle.';
                $content_subtitle = 'estilo clásico moderno y atemporal.';

                $main_p = [
                    'Servicio de Lavandería.',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Habitación decorada con un hermoso estilo tradicional mexicano con aire acondicionado. Encontrarás una cómoda cama King Size con sus mesas lámparas de noche, un escritorio con iluminación adicional en el caso de que lo necesites. Sala de televisión con pantalla de 65 pulgadas con sistema SKY, espacioso closet, baño completo con tina y sales de baño, con amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, caja de seguridad, café de cápsula de cortesía y minibar.  Cuenta con una pequeña sala de estar en terraza para disfrutar de la vista del área de la alberca del hotel.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 65" con SKY',
                    'Sala de TV',
                    'Tina de baño',
                    'Terraza con sala',
                    'Caja de seguridad',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Nespresso con aeroccino',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                ];

                $project_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Cama King Size', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Sala Smart TV 65"', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Escritorio con iluminación', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Baño completo', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Tina personal con sales de baño.', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Terraza con sala', 'img' => 'gallery_6.jpg'],
                ];

                break;

                $slug = $name;

                $room_name = 'Villa Catrina';
                $description = 'Habitación decorada con un hermoso estilo tradicional mexicano.';
                $capacity = '4-6';
                $size = '30';

                $content_title = 'El corazón del lujo mexicano';
                $content_subtitle = 'estilo clásico mexicano.';

                $main_p = [
                    'Servicio de Lavandería.',
                    'Servicio de cuna (sujeto a previa reserva y disponibilidad)',
                    'Servicio de Alimentos a la habitación.',
                    'Servicio de Pick Up Aeropuerto - Hotel  - Aeropuerto.',
                ];

                $descriptive_p = 'Hermosa casa de campo decorada con un estilo tradicional mexicano totalmente privada. Encontrarás dos recámaras una con cama King Size y baño completo y otra con dos cómodas camas Queen Size con sus mesas lámparas de noche y baño completo. Cuenta con sala de estar con aire acondicionado, pantalla de 55 pulgadas con sistema SKY, comedor completo para 6 personas, wc para invitados, cocineta completa con Nespresso con café de cápsula de cortesía y servicio de minibar. Las habitaciones cuentan con espacio de closets, baño completo con regadera tipo lluvia y exclusivas amenidades de lujo: pantuflas, bata de baño, toallas de cuerpo completo, de mano y faciales, así como plancha de vapor vertical de mano, secadora de cabello, caja de seguridad electrónica. La villa cuenta también con teléfono con línea directa, Internet inalámbrico, Sistema de llaves electrónicas. Cuenta con una amplia terraza con sala de estar, comedor completo con parrilla, alberca y solario con camastros rodeados de un hermoso jardín totalmente privado.';

                $characteristics = [
                    'Cama King Size',
                    'Smart TV 65" con SKY',
                    'Sala de TV',
                    'Tina de baño',
                    'Terraza con sala',
                    'Caja de seguridad',
                    'Amenidades de lujo',
                    'Escritorio',
                    'Nespresso con aeroccino',
                    'Mini Bar',
                    'Aire Acondicionado',
                    'Room Service 24/7',
                ];

                $room_images = [
                    ['img' => 'main_img_1.jpg'],
                    ['img' => 'main_img_2.jpg'],
                    ['img' => 'main_img_3.jpg'],  
                ];

                $gallery = [
                    ['title' => 'Sala de TV y Comedor', 'img' => 'gallery_1.jpg'],
                    ['title' => 'Habitación King Size', 'img' => 'gallery_2.jpg'],
                    ['title' => 'Habitación Doble Queen Size', 'img' => 'gallery_3.jpg'],
                    ['title' => 'Terraza con asador', 'img' => 'gallery_4.jpg'],
                    ['title' => 'Alberca con camastros privados', 'img' => 'gallery_5.jpg'],
                    ['title' => 'Residencia totalmente privada', 'img' => 'gallery_6.jpg'],
                ];

                break;
                
            default:
                return view('project_detail');

                break;
        }

        return view('project_detail')
        ->with('slug', $slug)
        ->with('project_name', $project_name)
        ->with('description', $description)
        ->with('content_title', $content_title)
        ->with('content_subtitle', $content_subtitle)
        ->with('main_p', $main_p)
        ->with('descriptive_p', $descriptive_p)
        ->with('characteristics', $characteristics)
        ->with('project_images', $project_images)
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
