<?php

/*
 * Author: Louie Zhu
 * Date: 3/28/2022
 * Name: movie.class.php
 * Description: the Movie class models a real-world movie.
 */

class Movie {
    //private data members
    private $id, $title, $rating, $release_date, $director, $image, $description;

    //the constructor
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }
	
	//get the movie id
    public function getId() {
        return $this->id;
    }

	//get the movie title
    public function getTitle() {
        return $this->title;
    }

	//get the movie rating
    public function getRating() {
        return $this->rating;
    }
	
	//get the movie release date
    public function getRelease_date() {
        return $this->release_date;
    }

	//get the movie director
    public function getDirector() {
        return $this->director;
    }

	//get the movie image file name
    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    //set movie id
    public function setId($id) {
        $this->id = $id;
    }
}