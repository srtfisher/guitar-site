<?php
// Forward all routes to one view
App::missing(function($exception)
{
  return View::make('angularjs.application');
});
