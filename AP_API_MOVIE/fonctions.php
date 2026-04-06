<?php
require_once("get-proxy.php");// /* au lycée pour faire des requêtes https vous avons besoin d'indiquer le proxy

    function getGenders() {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/genre/movie/list?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result["genres"];
    }
    function popularMovies($page = 1) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&page=$page&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function topRatedMovies($page = 1) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&page=$page&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function moviesByGender($id, $page = 1) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&page=$page&language=fr-FR&with_genres=$id";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function moviesGetDetail($movieId) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function getActors($movieId) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result["cast"];
    }


    function moviesGetKey($movieId) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$movieId/videos?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);

        if (!empty($result["results"])) {
            if (gettype($result["results"]) == "array" ) {
                return $result["results"][0]["key"]; }
            return $result["results"]; }
        return  "";
    }
      

    function actorsGetDetail($actorId) { //actorDetail.php
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/person/$actorId?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function getMovies($actorId) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/person/$actorId/credits?api_key=$key&language=fr-FR";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result["cast"];
    }
    
    function queryM($query, $page = 1) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/search/movie?query=$query&api_key=$key&language=fr-FR&page=$page";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

    function queryA($query, $page = 1) {
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/search/person?query=$query&api_key=$key&language=fr-FR&page=$page";
        //$response = getProxy($url);
        //code
		$response = file_get_contents($url);
       
        $result = json_decode($response, true);
        return $result;
    }

   // /*https://api.themoviedb.org/3/find/ */

// 1523145

?>

