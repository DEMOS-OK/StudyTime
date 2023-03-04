<?php

declare(strict_types=1);

namespace App\Apps\StudyTime\Controllers;

use Inertia\Inertia;
use Inertia\Response;

/**
 * Controller for main pages of the StudyTime application
 */
class IndexController extends Controller
{

    /**
     * This method is loading a index page
     *
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Index');
    }
}
