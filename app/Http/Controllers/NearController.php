<?php

namespace App\Http\Controllers;

use App\Map;
use Illuminate\Http\Request;

//public function getDistance($lng1, $lat1, $lng2, $lat2)
//{
//    //將角度轉為狐度
//    $radLat1 = deg2rad($lat1);
//    $radLat2 = deg2rad($lat2);
//    $radLng1 = deg2rad($lng1);
//    $radLng2 = deg2rad($lng2);
//    $a = $radLat1 - $radLat2;
//    $b = $radLng1 - $radLng2;
//    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137 * 1000;
//    return $s;
//}

class NearController extends Controller
{
    public function index(Request $request)
    {
        $nearList = [];
        $mode = $request->input('mode');
        if ($mode == null) $mode = 0;

        if ($mode == 0) {
            $map = Map::find(1);
        } elseif ($mode == 1) {
            //定位
            $x = $request->input('x');
            $y = $request->input('y');

            $maps = Map::all();

            foreach ($maps as $map) {

                $radLat1 = deg2rad($y);
                $radLat2 = deg2rad($map->coordinate_y);
                $radLng1 = deg2rad($x);
                $radLng2 = deg2rad($map->coordinate_x);
                $a = $radLat1 - $radLat2;
                $b = $radLng1 - $radLng2;
                $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137 * 1000;

                if ($s <= 3 * 1000) {
                    $item = [
                        'title' => $map->title,
                        'id' => $map->id
                    ];
                    $nearList =  array_merge($nearList, [$item]);
                }
            }

            if (count($nearList) > 0) {
                $map = Map::find($nearList[0]['id']);
            } else {
                $map->title = '未找到';
                $map->image = 'https://i.imgur.com/Q8lVdSo.png';
                $map->context = '3公里內沒有拉麵店';
                $map->coordinate_x = 0;
                $map->coordinate_y = 0;
            }

        } elseif ($mode == 2) {
            //form圖鑑
            $id = $request->input('id');
            $map = Map::find($id);
        }

        $title = $map->title;
        $context = $map->context;
        $image = $map->image;
        $coordinate_x = $map->coordinate_x;
        $coordinate_y = $map->coordinate_y;

        return view('near')
            ->with('nearList', $nearList)
            ->with('title', $title)
            ->with('context', $context)
            ->with('image', $image)
            ->with('coordinate_x', $coordinate_x)
            ->with('coordinate_y', $coordinate_y);
    }
}

//        foreach ($maps as $map) {
//            $map->context = str_replace('</br>', "\r\n", $map->context);
//            $map->save();
//        }
