<?php 
namespace App\Classes;

use App\Helpers\Helper;

class Affiliates {

    private $affiliates;

    public function __construct() {
        $this->affiliates = [];
    }

    /**
     * This function initialize the affiliates from JSON string
     *
     * @param string  $aff_str   affiliates JSON string
     */
    public function create($aff_str) {
      $aff_arr = explode("\n", $aff_str);
      foreach($aff_arr as $item){
        array_push($this->affiliates, json_decode($item, true));
      }
    }

    /**
     * This function returns the affiliates array
     *
     * @return array  $this->affiliates   affiliates array
     */
    public function getAffiliates(){
      return $this->affiliates;
    }

    /**
     * This function returns affiliates array filtered by distance limit
     *
     * @param float $distance_limit  distance limit(default 100)
     * @param float $latitude_b  latitude of gambling
     * @param float $longitude_b  longitude of gambling
     */
    public function getAffiliatesByDistance($latitude_b, $longitude_b, $distance_limit = 100){
      $temp = [];
      foreach($this->affiliates as $item){
        if(Helper::getDistance($item["latitude"], $item["longitude"], $latitude_b, $longitude_b) <= $distance_limit)
          array_push($temp, $item);
      }
      $this->affiliates = $temp;
    }
}