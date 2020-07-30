<?php 
class Cms5f21da2a7dc4d850903624_6bb7f6466f4b7272b98ade37bb8f6bfaClass extends Cms\Classes\LayoutCode
{
// Executed in the beginning of the page processing
public function onStart(){
    $user = Auth::getUser();
    $this['user'] = ($user) ? $user : '';
    $this['title'] = 'MovieRama';
}
}
