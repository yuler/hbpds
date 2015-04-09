<?php namespace App\Http\Middleware;

use Closure;

class Language {

	/**
	 * The availables languages.
	 * @array $languages
	 */
	protected $languages = ['en','zh-TW'];
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Set the language
	    if(!session()->has('locale'))
        {
            session()->put('locale', $request->getPreferredLanguage($this->languages));
        }
        app()->setLocale(session('locale'));

        /*if(!session()->has('statut')) 
        {
            session('statut', Auth::check() ?  Auth::user()->role->slug : 'visitor');
        }*/

        return $next($request);
	}

}
