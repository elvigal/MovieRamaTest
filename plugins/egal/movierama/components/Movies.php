<?php

namespace Egal\Movierama\Components;

use Auth;
use Flash;
use Redirect;
use DateTime;
use Cms\Classes\ComponentBase;
use Egal\Movierama\Models\Movie as Movie;
use Egal\Movierama\Models\Vote as Vote;


/**
* Defines the component functionality
*/
class Movies extends ComponentBase
{
    protected $movies;
    
    /**
    * Defines the name and description of the component
    */
    public function componentDetails()
    {
        return [
            'name' => 'Movies',
            'description' => 'Sharing Movies.'
        ];
    }
        
    /**
    * Prepares variables and injects them to the page
    */
    public function prepareVars()
    {
        if (Auth::getUser()) {
            $this->user_id = $this->page['user_id'] = Auth::getUser()->id;
            $this->user_name = $this->page['user_name'] = Auth::getUser()->name;
        }
        
        $this->movies = $this->page['movies'] = $this->loadMovies();
        
    }
    
    /**
    * Executed when the page is loaded
    */
    public function onRun() 
    {
        $this->prepareVars();
                
        // inject assets to pages
        $this->addJs('/plugins/egal/movierama/assets/js/movies.js'); 
        $this->addCss('/plugins/egal/movierama/assets/css/movies.css');
    }
    
    /**
    * Load movies submitted to the platform
    */
    protected function loadMovies()
    {
        // connected user
        $conn_user = Auth::getUser();
        
        // load movies for selected user
        $mv_user = $this->param('user_id');            
        if ($mv_user>0) { 
            $movies = Movie::where('user_id',$mv_user)->get();
            $this->page['user_movies'] = $movies;
        } else {    
            $movies = Movie::all();     // load all movies
        }
        
        foreach ($movies as $movie) {
            // calc votes for each movie
            $likes = $movie->votes()->where('vote_type', 'like')->get();
            $hates = $movie->votes()->where('vote_type', 'hate')->get();            
            $movie->likes = count($likes);
            $movie->hates = count($hates);
            
            // set user data
            if ($movie->user_obj) {
                $movie->user_id = $movie->user_obj->id;
                $movie->user_name = ($conn_user && $conn_user->id==$movie->user_obj->id) ? 'You': $movie->user_obj->name;
            } 
            
            $current = new DateTime();
            $interval = $current->diff( new DateTime($movie->published_at));    // calc time elapsed for publication date
            $movie->published_for = $this->formatInterval($interval);

            // get current user's vote
            if ($conn_user) { 
                $user_voted = $movie->votes()->where('user_id', $conn_user->id)->first();
                if ($user_voted) { $movie->user_voted = $user_voted->vote_type; }
            }
        }
        
        return $movies;
    }
    
    /**
    * AJAX method for adding movies
    */
    protected function onAddMovie() {
        
        if (strlen(post('movie_title'))==0) { echo "Movie title is required for movie to be submitted!"; return; }

        try {
            // create a model instance of the movie
            $movie = new Movie;
               
            $movie->title = post('movie_title');
            $movie->summary = post('movie_summary');
            $movie->user_id = Auth::getUser()->id;
            
            // insert the movie in the db
            $movie->save();
            
            
            } 
        catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
        
        // redirect to home page
        return Redirect::to(post('origin_url'));
    }
     
    /**
    * AJAX method for handling movies' voting
    */
    protected function onVote() {
        
        try {
            // get post data
            $movie_id = post('movie_id');
            $user_id = Auth::getUser()->id;
            $vote_type = post('vote_type');
            $retract = post('retract');
            
            if (!$movie_id || !$user_id) {
                return;
            }
            
            // users cannot vote for their movies
            if (Movie::where('id',$movie_id)->first()->user_id==$user_id) {
                return;
            }
            
            $user_vote = Vote::where('movie_id',$movie_id)->where('user_id',$user_id)->first();
            
            // new vote
            if (!$user_vote) {
                $vote = new Vote;

                $vote->movie_id = $movie_id;
                $vote->user_id = $user_id;
                $vote->vote_type = $vote_type;

                $vote->save();                
            } else {
                // retract vote 
                if ($retract) { 
                    $user_vote->delete(); 
                }
                // switch vote to the opposite 
                else { 
                    if ($vote_type != $user_vote->vote_type) { 
                        $user_vote->vote_type = $vote_type;
                        $user_vote->save();
                    }
                } 
            }
            
        } catch (Exception $ex) {
            if (Request::ajax()) throw $ex;
            else Flash::error($ex->getMessage());
        }
                
        return Redirect::to('/');
    }
     
    /**
    * Redirect when cancel requested
    */
    protected function onCancel() {
        return Redirect::to('/');
    }
    
    /**
    * Formats time elapsed
    */
    protected function formatInterval($interval)
    {
        if ((int)$interval->y > 0) { return (int)$interval->y . ' years'; }
        else if ((int)$interval->m > 0) { return (int)$interval->m . ' months'; }
        else if ((int)$interval->d > 0) { return (int)$interval->d . ' days'; }
        else if ((int)$interval->h > 0) { return (int)$interval->h . ' hours'; }
        else if ((int)$interval->i > 0) { return (int)$interval->i . ' minutes'; }
        else if ((int)$interval->s > 0) { return (int)$interval->s . ' seconds'; }
        
        return;
    }
}
