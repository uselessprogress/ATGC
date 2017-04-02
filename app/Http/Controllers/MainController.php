<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Seo;

class MainController extends Controller
{
    
    
    public function index()
    {
        return view('home');
    }
    
    
   public function __construct(){
       
       
    Seo::set('title', 'Advanced Tele-Genetic Counseling');
    Seo::set('description','We are a concierge genetic counseling service that focuses on providing genetic counseling for organizations in need of the services provided by certified genetic counselors.');
    Seo::set('keywords', "counseling, genetic,tele-genetic, advanced, patients, contact, patient, interpretation, testing, care, tele-genetic counseling, advanced tele-genetic, genetic counseling, contact us, interpretation, advanced tele-genetic counseling");   
    
	
       
    Seo::set('global-title', 'Advanced Tele-Genetic Counseling');
    Seo::set('global-description', 'We are a concierge genetic counseling service that focuses on providing genetic counseling for organizations in need of the services provided by certified genetic counselors.');

    Seo::set('logo-url', '/images/atgc_logo.png');
    Seo::set('search-url', 'http://www.at-gc.com');
    Seo::set('latitude', 38.2527);
    Seo::set('longitude',85.7585);

    Seo::set('email', 'website@at-gc.com');
    Seo::set('phone', '(502) 209-9718');
    Seo::set('opening-hours', 'Mo,Tu,We,Th,Fr 09:00-20:00');
    Seo::set('street-address', 'P.O.Box 111');
    Seo::set('address-locality', 'Glenview');
    Seo::set('address-region', 'KY');
    Seo::set('address-country', 'US');
    Seo::set('postal-code', '40025');
    Seo::set('area-served', 'US');

    Seo::setSimilarTo('https://www.facebook.com/pages/Advanced-Tele-Genetic-Counseling-LLC/646990435482675');
    Seo::setSimilarTo('https://twitter.com/GeneticsByPhone');

    Seo::setContactPoint([
        'type' => 'customer-service',
        'phone' => '(502) 209-9718',
        'area-served' => 'US',
        'opening-hours' => 'Mo,Tu,We,Th,Fr 09:00-20:00',
        'available-languages' => ['English']
    ]);

    Seo::set('og-locale', 'US_EN');
    Seo::set('og-image-url', '/images/atgc_logo.png');
    Seo::set('og-image-type', 'image/jpeg');
    Seo::set('og-image-width', 1200);
    Seo::set('og-image-height', 630);

    Seo::set('fb-app-id', '646990435482675');
       
    Seo::set('twitter-sign', '@GeneticsByPhone');
   }
    

}
