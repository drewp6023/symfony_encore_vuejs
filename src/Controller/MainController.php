<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController {
    public function index() {
        return new Response(
            '<html><body>Main Page</body></html>'
        );
    }
}