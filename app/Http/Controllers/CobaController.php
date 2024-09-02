<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\bpjs;
use function App\Helpers\formatDate2;
use function App\Helpers\headers;
use function App\Helpers\timestamp;
use function PHPUnit\Framework\returnSelf;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        

        
    }   

    public function hasil()
    {
        $noSep='0221R0110924V000041';
        $url= env('baseurl').'SEP/'.$noSep;
        
        return bpjs($url);
        
        list($peserta, $hsl) = bpjs($url);
        $data =$peserta;
        $hasil=$hsl;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
