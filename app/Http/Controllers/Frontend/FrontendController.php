<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMailNotifiable;
use App\Mail\SendContactInfo;
use App\Mail\SendBookingInfo;
use App\Models\Album\Album;
use App\Models\Booking\Booking;
use App\Models\Menu\Menu;
use App\Models\Menu\SubMenu;
use App\Models\Client\Client;
use App\Models\Document\Document;
use App\Models\Event\Event;
use App\Models\Gallery\Gallery;
use App\Models\Team\Team;
use App\Models\Blog\Blog;
use App\Models\Page\Page;
use App\Models\Product\Product;
use App\Models\Category\Category;
use App\Models\Project\Project;
use App\Models\Sector\Sector;
use App\Models\Slider\Slider;
use App\Models\Testimonial\Testimonial;
use App\Models\Timeline\Timeline;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{


    public function homepage()
    {

        $sliders = Slider::where('is_published',0)->get();
        $menus = Menu::where('is_published',0)->get();
        $testimonials = Testimonial::where('is_featured', 1)->get();
        $galleries= Gallery::where('is_featured', 1)->latest()->take(9)->get();
        $categories = Category::get();
        $about = Page::where('slug','About Us')->first();
        $products = Product::where('is_featured', 1)->get();
        return view('frontend.home', compact( 'menus','sliders','testimonials','galleries', 'categories','products','about'));
    }

    public function page($slug = null)
    {

        if ($slug) {

            $page = Page::whereSlug($slug)->whereIsPublished(1)->first();
            $allevents = Event::where('is_featured', 1)->get();


            if ($page == null) {
                return view('frontend.errors.404',compact('allevents'));
            }

            if ($page) {
                $pages = Page::whereIsPublished(1)->whereIsPrimary(0)->whereNotIn('id', [$page->id])->take(10)->inRandomOrder()->get();
                if ($pages) {
                    return view('frontend.page', compact('page', 'pages','allevents'));
                }
            } else {
                return view('frontend.errors.404');
            }
        }
    }
    public function about()
    {
        $about = Page::where('slug','About Us')->first();
        return view('frontend.about.about',compact('about'));
    }

    public function menu(Category $categories, Product $products)
    {
        $categories = Category::get();
        $products = Product::where('is_featured', 1)->latest()->get();
        return view('frontend.menu.menu', compact('products','categories'));
    }

    public function gallery()
    {
        $galleries = Gallery::where('is_featured', 1)->latest()->get();
        return view('frontend.gallery.index', compact('galleries'));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }


    public function book()
    {
        return view('frontend.book');
    }

    public function teams()
    {
        $teams = Team::where('is_featured', 1)->get();
        return view('frontend.teams.detail',compact('teams'));
    }

    public function blog()
    {
        $blogs = Blog::where('is_featured', 1)->get();
        return view('frontend.blog.index',compact('blogs'));
    }

    public function blogDetail(Blog $blogs){

        return view('frontend.blog.detail', compact('blogs'));

    }


    public function sendcontact(Request $request)
    {

        $data = $request->all();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendContactInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function bookingDetails(Request $request)
    {

        $data = $request->all();
        $booking = new Booking();
        $booking->name = request('name');
        $booking->email = request('email');
        $booking->phone = request('phone');
        $booking->partysize = request('partysize');
        $booking->date = request('date');
        $booking->time = request('time');
        $booking->save();
        Mail::to('ritu.gubhaju20@gmail.com')->send(new SendBookingInfo($data));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }


}
