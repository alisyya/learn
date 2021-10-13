<?php

namespace App\Http\Controllers;

use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

#[Middleware(['auth:sanctum', 'verified'])]
class BlogController extends Controller
{
    #[Get('blog', name:'blog')]
    public function index(){
        return Inertia::render('Blog');
    }

}
