<?php
use Auth;
use Illuminate\Http\Request;


public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/home');
}

?>
