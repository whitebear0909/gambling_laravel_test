<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Classes\Affiliates;

class AffiliateController extends Controller
{
    /**
     * Return the affiliates
     * 
     *
     * @return App\Classes\Affiliates
     */
    public function getAffiliates()
    {
        $fileName = config('gambling.repositoryfilename');
        $contents = Storage::disk('local')->get($fileName);
        $affiliates = new Affiliates();
        $affiliates->create($contents);
        $affiliates->getAffiliatesByDistance(config('gambling.latitude'), config('gambling.longitude'), config('gambling.distancelimit'), config('gambling.worldradius'));
        return $affiliates->getAffiliates();
    }
}
