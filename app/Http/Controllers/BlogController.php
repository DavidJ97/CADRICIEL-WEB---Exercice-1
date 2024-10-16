<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $articles = [
            ['id' => 1, 'title' => 'L\'innovation architecturale au 21ème siècle'],
            ['id' => 2, 'title' => 'Urbanisme durable : Repenser nos villes'],
            ['id' => 3, 'title' => 'L\'impact de la technologie sur l\'architecture moderne'],
        ];
        return view('articles.list', compact('articles'));
    }

    public function show($id)
    {
        $articles = [
            1 => [
                'id' => 1,
                'title' => 'L\'innovation architecturale au 21ème siècle',
                'summary' => 'Un aperçu des tendances révolutionnaires qui façonnent nos villes modernes.',
                'paragraphs' => [
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.',
                    'Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci.',
                    'Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.',
                ],
                'image' => 'architecture1.webp',
                'image_caption' => 'Une vision futuriste de l\'architecture urbaine'
            ],
            2 => [
                'id' => 2,
                'title' => 'Urbanisme durable : Repenser nos villes',
                'summary' => 'Comment l\'urbanisme moderne intègre les principes de durabilité pour créer des villes plus vivables.',
                'paragraphs' => [
                    'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.',
                    'Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                    'Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.',
                ],
                'image' => 'urbanisme.jpg',
                'image_caption' => 'Une ville verte du futur'
            ],
            3 => [
                'id' => 3,
                'title' => 'L\'impact de la technologie sur l\'architecture moderne',
                'summary' => 'Explorer comment les avancées technologiques transforment la conception et la construction des bâtiments.',
                'paragraphs' => [
                    'Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
                    'Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.',
                    'Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
                ],
                'image' => 'architecture2.webp',
                'image_caption' => 'L\'intégration de la technologie dans l\'architecture'
            ],
        ];

        $article = $articles[$id] ?? null;

        if (!$article) {
            abort(404);
        }

        return view('articles.show', compact('article'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Stocker les données dans la session pour les afficher sur la page suivante
        $request->session()->flash('form_data', $validatedData);

        // Rediriger vers une nouvelle page pour afficher les données
        return redirect()->route('contact.result');
    }

    public function contactResult()
    {
        // Récupérer les données de la session
        $formData = session('form_data');

        // Si aucune donnée n'est trouvée, rediriger vers la page de contact
        if (!$formData) {
            return redirect()->route('contact')->with('error', 'Aucune donnée de formulaire trouvée.');
        }

        // Passer les données à la vue
        return view('contact_result', ['data' => $formData]);
    }
}