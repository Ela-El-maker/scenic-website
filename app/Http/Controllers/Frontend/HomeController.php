<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Feedbacks;
use App\Models\FeedbackTitle;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\ServiceSectionSetting;
use App\Models\ServiceSpecific;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $hero =  Hero::first();
        $services = Service::all();
        $about = About::first();
        $portfolioTitle = PortfolioSectionSetting::first();
        $serviceTitle = ServiceSectionSetting::first();
        $portfolioCategories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $experience = Experience::first();
        // Limit feedbacks to 2
        // $feedbacks = Feedbacks::take(2)->get();
         // Limit feedbacks to 2 random feedbacks
         $feedbacks = Feedbacks::inRandomOrder()->take(2)->get();
        return view(
            'frontend.home',
            compact(
                'hero',
                'services',
                'about',
                'portfolioTitle',
                'portfolioCategories',
                'portfolioItems',
                'serviceTitle',
                'experience',
                'feedbacks'
                
            
            )
        );
    }

    public function showPortfolio($id)
    {
        $portfolio = PortfolioItem::findorfail($id);
        return view('frontend.portfolio-details', compact('portfolio'));
    }

    public function showService($id)
    {
        $oneService = ServiceSpecific::all();
        $service = Service::findorfail($id);
        return view('frontend.service-details', compact('service', 'oneService'));
    }
    // public function showTestimonials()
    // {
    //     $feedbackTitle = FeedbackTitle::first();
    //     $feedbacks = Feedbacks::all()->take(2); // Fetch and limit to 2 testimonials
    //     return view('frontend.sections.testimonials', compact('feedbacks','feedbackTitle'));
    // }
}
