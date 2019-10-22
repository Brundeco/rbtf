<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\TwitterAPIExchange;

class PagesController extends Controller
{
    
    public function home()
    {

        return view('welcome');
    }

    public function davis()
    {
        $settings = array(
            'oauth_access_token' => "1185955144799834112-Rt1bNIr05rTPPWzb4H3KdBBlfYLfxi",
            'oauth_access_token_secret' => "iubc5zU0qBbUJQCtYRMQPGIG9inXXSdUDx3mVKIXbhe7E",
            'consumer_key' => "vUCTzn7yjyTsDECyf9qUYECpN",
            'consumer_secret' => "Ci2vs462nwRpTurIWdpCiPTswut9pniXHcazDcn0A2zjIuBWNy"
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfieldDavis = '?screen_name=DavisCup&count=10';

        $twitter = new TwitterAPIExchange($settings);

        $data_davis_cup = json_decode($twitter
        ->setGetfield($getfieldDavis)
        ->buildOauth($url, $requestMethod)
        ->performRequest(), TRUE);

        $string = $twitter
        ->setGetfield($getfieldDavis)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

        return view('davis')->with(compact('data_davis_cup','string'));
    }

    public function fed()
    {
        $settings = array(
            'oauth_access_token' => "1185955144799834112-Rt1bNIr05rTPPWzb4H3KdBBlfYLfxi",
            'oauth_access_token_secret' => "iubc5zU0qBbUJQCtYRMQPGIG9inXXSdUDx3mVKIXbhe7E",
            'consumer_key' => "vUCTzn7yjyTsDECyf9qUYECpN",
            'consumer_secret' => "Ci2vs462nwRpTurIWdpCiPTswut9pniXHcazDcn0A2zjIuBWNy"
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfieldFed = '?screen_name=FedCup&count=40';

        $twitter = new TwitterAPIExchange($settings);

        $data_fed_cup = json_decode($twitter
        ->setGetfield($getfieldFed)
        ->buildOauth($url, $requestMethod)
        ->performRequest(), TRUE);

        $string = $twitter
        ->setGetfield($getfieldFed)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

        return view('fed')->with(compact('data_fed_cup','string'));
    }
}
