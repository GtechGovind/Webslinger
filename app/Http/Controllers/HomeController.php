<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'services' => [
                [
                    'id' => 1,
                    'img' => 'assets/img/icon/services/home-2/services-1.png',
                    'url' => '',
                    'heading' => 'Web Development',
                    'description' => 'Build your online presence with our customized web experience.'
                ],
                [
                    'id' => 2,
                    'img' => 'assets/img/icon/services/home-2/services-2.png',
                    'url' => '',
                    'heading' => 'Android Application',
                    'description' => 'Build your online presence with our customized web experience.'
                ],
                [
                    'id' => 3,
                    'img' => 'assets/img/icon/services/home-2/services-3.png',
                    'url' => '',
                    'heading' => 'IOS Applications',
                    'description' => 'Build your online presence with our customized web experience.'
                ]
            ]
        ]);
    }

    public function terms()
    {
        return Inertia::render('Terms');
    }

}
