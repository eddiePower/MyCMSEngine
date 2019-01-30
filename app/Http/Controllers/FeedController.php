<?php

namespace EddiesBlog\Http\Controllers;

class FeedController extends Controller
{

  public function start()
  {

    $feed = \Feeds::make('http://url/path/to/rss');

    echo $feed->get_title(); //this will get you the title of the rss
    echo '<hr />';
    echo $feed->get_permalink(); //this will get you the link of the rss
    echo '<hr />';
    $items = $feed->get_items(); //grab all items inside the rss

    foreach($items as $item):
        echo $item->get_title(); //get the title of single news
        echo '<br />';
        echo $item->get_permalink(); //get the link of single news
        echo '<br />';
        $enclosure = $item->get_enclosures(); 
        //retrive the enclosures (extras ex: attached media)

        foreach($enclosure as $enc){
            //print_r($enc);
        }
        echo $item->get_description(); //get the link of single news
        echo '<hr />';
    endforeach;
  }

}