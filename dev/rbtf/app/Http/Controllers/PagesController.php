<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\TwitterAPIExchange;

class PagesController extends Controller
{
    public function home()
    {
        // include(app_path().'/includes/TwitterAPIExchange.php');

        $settings = array(
            'oauth_access_token' => "1185955144799834112-Rt1bNIr05rTPPWzb4H3KdBBlfYLfxi",
            'oauth_access_token_secret' => "iubc5zU0qBbUJQCtYRMQPGIG9inXXSdUDx3mVKIXbhe7E",
            'consumer_key' => "vUCTzn7yjyTsDECyf9qUYECpN",
            'consumer_secret' => "Ci2vs462nwRpTurIWdpCiPTswut9pniXHcazDcn0A2zjIuBWNy"
        );

        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $requestMethod = "GET";
        $getfield = '?screen_name=DavisCup&count=5';
        $twitter = new TwitterAPIExchange($settings);

        return view('welcome', [
                
            'twitter' => json_decode($twitter
            ->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest(), TRUE),

            // 'twitter_string' => $twitter
            // ->setGetfield($getfield)
            // ->buildOauth($url, $requestMethod)
            // ->performRequest()

            // 'twitter' => $twitter->setGetfield($getfield)
            // ->buildOauth($url, $requestMethod)
            // ->performRequest()

        ]);




    }

    public function contact()
    {

        return view('contact');
    }

    public function about()
    {

        return view('about');
    }

    public function team()
    {
        return view('team');
    }
}
