<?php

class PagesController extends \BaseController {

    public function home()
    {
        return view::make('pages.home');
    }

}
