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
use App\Models\NewsNotice\NewsNotice;
use App\Models\Project\Project;
use App\Models\Sector\Sector;
use App\Models\Slider\Slider;
use App\Models\Testimonial\Testimonial;
use App\Models\Timeline\Timeline;
use App\Models\Volunteer\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{


    public function homepage()
    {

        $sliders = Slider::get();
        $testimonials = Testimonial::get();
        $events = Event::all();

        $pastEvents = $events->filter(function ($event) {
            return $event->type === 'past';
        })->sortByDesc('created_at')->take(3); // Take latest 3 past events

        $currentEvents = $events->filter(function ($event) {
            return $event->type === 'present';
        })->sortByDesc('created_at')->take(3); // Take latest 3 current events

        $upcomingEvents = $events->filter(function ($event) {
            return $event->type === 'upcoming';
        })->sortByDesc('created_at')->take(3); // Take latest 3 upcoming events

        $volunteers = Volunteer::latest()->take(4)->get();
        $recentStories = Blog::where('type','recent-stories')->latest()->take(3)->get();
        $recentCauses = Blog::where('type','recent-cause')->latest()->take(3)->get();
        $clients = Client::latest()->get();
        // $galleries= Gallery::latest()->take(9)->get();
        // $about = Page::where('slug','About Us')->first();
        // $products = Product::get();
        return view('frontend.home', compact( 'sliders','testimonials','pastEvents','currentEvents','upcomingEvents','volunteers','recentStories','recentCauses','clients'));
    }

    public function page($slug = null)
    {
        if ($slug) {

            $page = Page::whereSlug($slug)->first();
            $events = Event::inRandomOrder()->limit(7)->get();
            $news = NewsNotice::inRandomOrder()->limit(7)->get();


            if ($page == null) {
                return view('frontend.errors.404',compact('events'));
            }

            if ($page) {
                $pages = Page::whereIsPublished(1)->whereIsPrimary(0)->whereNotIn('id', [$page->id])->take(10)->inRandomOrder()->get();
                if ($pages) {
                    return view('frontend.page', compact('page', 'pages','events','news'));
                }
            } else {
                return view('frontend.errors.404');
            }
        }
    }
    public function about()
    {
        $about = Page::where('slug','About Us')->first();
        $events = Event::inRandomOrder()->limit(7)->get();
        return view('frontend.about.about',compact('about','events'));
    }

    public function menu(Category $categories, Product $products)
    {
        $categories = Category::get();
        $products = Product::latest()->get();
        return view('frontend.menu.menu', compact('products','categories'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->get();
        $albums = Album::latest()->get();
        // dd($galleries);
        return view('frontend.gallery.index', compact('galleries','albums'));
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
        $teams = Team::get();
        return view('frontend.teams.detail',compact('teams'));
    }

    public function blog($type)
    {
        if($type){
            $blogs = Blog::where('type',$type)->get();
            return view('frontend.blog.index',compact('blogs', 'type'));
        }
    }

    public function blogDetail($id){
        $blogs = Blog::inRandomOrder()->limit(7)->whereNotIn('id', [$id])->get();
        $blog = Blog::where('id', $id)->first();
        return view('frontend.blog.detail', compact('blog','blogs'));

    }

    public function events()
    {
        $events = Event::all();

        $pastEvents = $events->filter(function ($event) {
            return $event->type === 'past';
        });

        $currentEvents = $events->filter(function ($event) {
            return $event->type === 'present';
        });

        $upcomingEvents = $events->filter(function ($event) {
            return $event->type === 'upcoming';
        });
        return view('frontend.event.index',compact('pastEvents', 'currentEvents','upcomingEvents'));
    }

    public function eventDetail($id)
    {
        $events = Event::inRandomOrder()->limit(7)->whereNotIn('id', [$id])->get();
        $event = Event::where('id', $id)->first();
        return view('frontend.event.detail', compact('event','events'));

    }


    public function news()
    {
        $news = NewsNotice::all();

        $allNews = $news->filter(function ($data) {
            return $data->type === 'news';
        });

        $allNoticies = $news->filter(function ($data) {
            return $data->type === 'notice';
        });

        return view('frontend.news.index',compact('allNews', 'allNoticies'));
    }

    public function newsDetail($id)
    {
        $news = NewsNotice::inRandomOrder()->limit(7)->whereNotIn('id', [$id])->get();
        $newsDetail = NewsNotice::where('id', $id)->first();
        return view('frontend.news.detail', compact('newsDetail','news'));

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
