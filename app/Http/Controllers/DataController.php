<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $arr = [
            0=>[
                "internal_history_id"=>2230893,
                "external_id"=>8615,
                "external_commission"=>0.0005
            ],
            1=>[
                "internal_history_id"=>2230891,
                "external_id"=>2159,
                "external_commission"=>0.0200
            ],
            2=>[
                "internal_history_id"=>2230892,
                "external_id"=>5349,
                "external_commission"=>0.0060
            ],
            3=>[
                "internal_history_id"=>563089,
                "external_id"=>8659,
                "external_commission"=>0.0054
            ],
            4=>[
                "internal_history_id"=>217403,
                "external_id"=>1462,
                "external_commission"=>0.0040
            ],
            5=>[
                "internal_history_id"=>2230883,
                "external_id"=>8859,
                "external_commission"=>0.0008
            ],
            6=>[
                "internal_history_id"=>2230581,
                "external_id"=>5988,
                "external_commission"=>0.0040
            ],

            7=>[
                "internal_history_id"=>2230592,
                "external_id"=>8659,
                "external_commission"=>0.9000
            ],
            8=>[
                "internal_history_id"=>208998,
                "external_id"=>8599,
                "external_commission"=>0.0600
            ],
            9=>[
                "internal_history_id"=>217467,
                "external_id"=>7612,
                "external_commission"=>0.0090
            ],
            10=>[
                "internal_history_id"=>2308935,
                "external_id"=>6923,
                "external_commission"=>0.0080
            ]
        ];
        return view('test', ['data'=>$arr]);
    }
}
