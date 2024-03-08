<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\TemplateProcessor;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function readDocx() {
        $reader = new TemplateProcessor(storage_path('app/test-php.docx'));
        $reader->setValue('nama', 'Peter Parker');
        $reader->saveAs(storage_path('app/result.docx'));
    }
}
