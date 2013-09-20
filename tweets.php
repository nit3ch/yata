<?php
require('twitteroauth-master/twitteroauth/twitteroauth.php'); // path to twitteroauth library
$username = $_GET['username'];
$consumerkey = 'Nt96R0dPz1uX9ePwTkZzyA';
$consumersecret = 'hS03S5jvUxw67Ibi3Zm7XyPgxsVVBBbBFhZveNmZTp8';
$accesstoken = '91848460-rHzZrJ0oZLniozSoMzXWAzueGytEbXUMclPK70FCm';
$accesstokensecret = 'VCAG19gpZdDDz6GhlkEBo5NpMqrRssntPR2eTIKtoQ';

$twitter = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $username . '&count=10');
$statusupdate = "test tweet oauth";
//$tweet = $twitter->post('statuses/update', array('status' => $statusupdate));
echo "Name : " . $tweets[0]->user->name . "</br>";
echo "Screen Name : " . $tweets[0]->user->screen_name . "</br>";
echo "Location  : " . $tweets[0]->user->location . "</br>";
echo "description : " . $tweets[0]->user->description . "</br>";
echo "Tweets : " . $tweets[0]->user->statuses_count . "</br>";
echo "Foloowers : " . $tweets[0]->user->followers_count . "</br>";
echo "Following : " . $tweets[0]->user->friends_count . "</br>";
echo "List : " . $tweets[0]->user->listed_count . "</br>";
echo "Profile created : " . $tweets[0]->user->created_at . "</br>";
echo "favorite : " . $tweets[0]->user->favourites_count . "</br>";
echo "time Zone : " . $tweets[0]->user->time_zone . "</br>";
echo "Verified : " . $tweets[0]->user->verified . "</br>";
echo "Image Url : " . $tweets[0]->user->profile_image_url_https . "</br>";
for ($i=0; $i <10 ; $i++) { 
	echo $tweets[$i]->text . "</br>";
}
//print_r($tweets);
?>