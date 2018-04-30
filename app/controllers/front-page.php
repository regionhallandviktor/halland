<?php

namespace App;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	
	public function news()
	{
		return get_posts();
	}

}
