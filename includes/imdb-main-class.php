<?php


class ImdbMain {


	private $base_url = 'https://www.omdbapi.com/?apikey=' . API_KEY_IMDB . '&type=movie&';
	
	public function movieTitle( $title ) {

	    $title = preg_replace("/\s*([\/-])\s*/", "$1", $title);

		$content = $this->base_url . '&plot=full&t=' .  str_replace(' ', '+', $title);
		
		$json_format_cont = json_decode(file_get_contents($content));
		
		return $json_format_cont;
	}

    public function movieId( $id ) {

        $content = $this->base_url . 'i=' . $id;

        $json_format_single = json_decode(file_get_contents($content));

        return $json_format_single;
    }

	public function searchMovie( $title ) {

        $title = preg_replace("/\s*([\/-])\s*/", "$1", $title);
		
		$content = $this->base_url . 's=' .  str_replace(' ', '+', $title);
		
		$json_search_cont = json_decode(file_get_contents($content));
		
		return $json_search_cont;
	}

}


