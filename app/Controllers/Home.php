<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $json = file_get_contents(ROOTPATH . 'public/assets/data/data.json');
        $data = json_decode($json, true);

        // Pass the full JSON as variables to the view
        return view('home', [
            'title' => 'IronPDF C++ Design',
            'nav' => $data['nav'],
            'hero' => $data['hero'],
            'cta' => $data['cta'],
            'features' => $data['features'],
            'infoSection' => $data['infoSection'],
            'whyMake' => $data['whyMake'],
            'earlyAccess' => $data['earlyAccess'],
            'statusCards' => $data['statusCards'],
            'betaSignup' => $data['betaSignup']
        ]);
    }
}