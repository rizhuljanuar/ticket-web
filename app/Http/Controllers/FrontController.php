<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct(
        protected FrontService $frontService
    ){}

    public function index()
    {
        $data = $this->frontService->getFrontPageData();
        dd($data);
        // return view('front.index', $data);
    }

    public function details(Ticket $ticket)
    {
        dd($ticket);
        // return view('front.details', compact('ticket'));
    }

    public function category(Category $category)
    {
        dd($category);
        // return view('front.category', compact('category'));
    }
}
