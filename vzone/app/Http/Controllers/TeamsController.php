<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TeamsController extends Controller
{
    public function index()
    {
        /*$teams = [
            ['id' => '1'],
            ['team_name' => 'Alpargatas'],
            ['score' => 852000],
            ['city' => 'Global'],
        ];*/

        $json = file_get_contents(public_path('teams.json'));
        $data = json_decode($json, true);

        return view('rankings')
            ->with('id', '1')
            ->with('team_name', 'Alpargatas')
            ->with('score', 852000)
        ;
    }
}


