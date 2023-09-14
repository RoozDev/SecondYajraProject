<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    //
    public function index(UsersDataTable $dataTable)
    {

        return $dataTable->render('users.index');
    }
    public function userPdf(UsersDataTable $dataTable)
    {
        $filename = 'users.pdf';



        // Generate and return the PDF file for download.
        return Excel::download($dataTable, $filename, \Maatwebsite\Excel\Excel::DOMPDF);
    }


}
