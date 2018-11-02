<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;

class ClientController extends Controller
{
    public function __construct(Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    public function index()
    {

    }

    public function newClient()
    {
        
    }

    public function create()
    {
        
    }

    public function show($client_id)
    {
        return __METHOD__ . ':' . $client_id;
    }
}
