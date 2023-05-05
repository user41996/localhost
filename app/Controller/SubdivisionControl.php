<?php

namespace Controller;
use Model\Subdivision;
use Src\Request;
use Src\View;

class SubdivisionControl
{
    public function view(Request $request)
    {
        $subdivisions = Subdivision::all();
        return (new View)->render('site.user_templates.subdivisions_view', ['subdivisions' => $subdivisions]);
    }

}