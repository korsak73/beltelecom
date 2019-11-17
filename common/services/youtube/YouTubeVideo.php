<?php

namespace app\common\services\youtube;

use Yii;
//use \Google\Client;
//// include your composer dependencies
//require_once 'vendor/autoload.php';

class YouTubeVideo
{

    public $id; //id видео

    private $apiKey = 'AIzaSyC-LUlAzbtA4CuIy2xQ8bR-j7U9BGwQn0U';

    private $youtube;



    public function __construct()
    {
        $client = new Google_Client();
        $client->setDeveloperKey($this->apiKey);

        $this->youtube = new Google_Service_YouTube($client);

    }


    /*
    * Получение данных видео по их id
    */
    public function videosByIds(string $ids)
    {
        return $this->youtube->videos->listVideos('snippet, statistics, contentDetails', [
            'id' => $ids,
        ]);
    }

    /**
     * Получение списка популярных видео (данные - snippet и statistics)
     */
    public function videos(int $maxResults = 10, string $region = 'RU')
    {
        return $this->youtube->videos->listVideos('snippet, statistics, contentDetails', [
            'chart' => 'mostPopular',
            'maxResults' => $maxResults,
            'regionCode' => $region,
        ]);
    }


    /**
     * Поиск видео по фразе
     */
    public function search(string $q, int $maxResults = 12, string $lang = 'ru')
    {

        $response = $this->youtube->search->listSearch('snippet',
            array(
                'q' => $q,
                'maxResults' => $maxResults,
                'relevanceLanguage' => $lang,
                'type' => 'video'
            ));

        return $response;

    }


    /** Получить список категорий видео с YouTube
     * https://developers.google.com/youtube/v3/docs/videoCategories
     * Возвращает массив с id категорий
     */
    public function getCategory($regionCode = 'RU')
    {
        $result = $this->youtube->videoCategories->listVideoCategories('snippet',
            array('hl' => 'ru', 'regionCode' => $regionCode));

        $category = [];
        $array = $result->getItems(); //масиив объектов Google_Service_YouTube_VideoCategory

        array_walk($array, function ($value) use (&$category) {
            $category[$value['id']] = $value['snippet']['title'];
        });

        return $category;
    }


    /**
     * Поиск самых популярных видео по указанной категории
     */
    public function getPopularVideosByCategory(string $videoCategoryId, int $maxResults = 10, string $region = 'RU', $pageToken = null)
    {

        try {
            $response = $this->youtube->videos->listVideos('snippet, statistics, contentDetails',
                array('videoCategoryId' => $videoCategoryId,
                    'maxResults' => $maxResults,
                    'regionCode' => $region,
                    'chart' => 'mostPopular',
                    'pageToken' => $pageToken,
                ));

        } catch (\Google_Service_Exception $e) {
            return false;
        }

        return $response; //массив объектов Google_Service_YouTube_Video

    }
}