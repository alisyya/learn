<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

#[Middleware(['auth:sanctum', 'verified'])]

class IndexController extends Controller
{
    #[Get('index', name:'index')]
    public function index() {
        return Inertia::render('Index');
    }
}
