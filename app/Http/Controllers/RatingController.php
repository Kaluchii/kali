<?php namespace App\Http\Controllers;

use App\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RatingController extends Controller
{

    public function saveRating(Request $req)
    {

        $ratingObj = new rating();
        $ip = new rating();
        $data = Input::All();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $tmp = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ipAddress = array_pop($tmp);
        }

        if (!($ip->where('ip', '=', $ipAddress)->where('entity_name', '=', $data['entity_name'])->where('entity_id', '=', $data['entity_id'])->count() > 0)) {
//if(true){
            $ratingObj['ip'] = $ipAddress;
            $ratingObj['entity_name'] = $data['entity_name'];
            $ratingObj['entity_id'] = $data['entity_id'];
            if ($data['rating'] < 1) {
                $data['rating'] = 1;
            } elseif ($data['rating'] > 5) {
                $data['rating'] = 5;
            }
            $ratingObj['value'] = $data['rating'];
            $ratingObj->save();


            $rating = $ratingObj->where('entity_name', '=', $data['entity_name'])->where('entity_id', '=', $data['entity_id'])->get();
            $rating_front['count'] = $rating->count();
            //=Средняя оценка============================
            $sum = 0;
            foreach ($rating as $item) {
                $sum += $item['value'];
            }
            $rating_front['middle'] = round($sum / $rating_front['count'], 1);
            //===========================================


            //=Процент для вывода рейтинга в верстке=====
            $rating_front['percent'] = ($sum * 100) / ($rating_front['count'] * 5);


            return ['status' => 'OK', 'rating' => $rating_front, 'text' => 'Спасибо, ваш голос учтен','ip' => $req->ip()];
        } else {
            return ['status' => 'NO', 'text' => 'Извините, вы уже голосовали.','ip' => $ipAddress];
        }
    }

}
