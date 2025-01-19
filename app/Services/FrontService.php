<?php

namespace App\Services;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Repositories\Contracts\TicketRepositoryInterface;

class FontService
{
    public function __construct(
        protected TicketRepositoryInterface $ticketRepository,
        protected CategoryRepositoryInterface $categoryRepository,
        protected SellerRepositoryInterface $sellerRepository
    ) {}

    public function getFrontPageData()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $sellers = $this->sellerRepository->getAllSelers();
        $popularTickets = $this->ticketRepository->getPopularTickets(4);
        $newTickets = $this->ticketRepository->getAllNewTickets();

        return compact('categories', 'sellers', 'popularTickets', 'newTickets');
    }
}

