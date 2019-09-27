<?php

namespace App\Http\Controllers;

use App\Club;
use App\Gallery;
use App\GalleryCategory;
use App\HomeItem;
use App\SettingBanner;
use App\SettingFooter;
use App\SettingHelp;
use App\SettingLogo;
use App\SettingMenu;
use App\SettingTitle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $menus;
    private $footers;
    private $banners;
    private $title;
    private $logo;

    public function __construct()
    {
        $this->menus = SettingMenu::get()->take(6);
        $this->footer = SettingFooter::find(1);
        $this->banners =SettingBanner::get();
        $this->title = SettingTitle::find(1);
        $this->logo = SettingLogo::find(1);
    }

    /**
     * load home page
     * @param void
     * @return view
     */
    public function index()
    {
        $homeItems = HomeItem::get();
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("homeItems", "menus", "footer", "banners", "title", "logo");

       
        return view("home")->with($res);
    }

    /**
     * load club list page
     * @param void
     * @return view
     */
    public function getClublListView()
    {
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $clubs = Club::get();
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("menus", "footer", "banners", "clubs", "title", "logo");

        return view("clublist")->with($res);
    }

    /**
     * load single club page
     * @param void
     * @return view
     */
    public function getClubSingleView($id)
    {
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $club = Club::find($id);
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("menus", "footer", "banners", "club", "title", "logo");

        return view("club")->with($res);
    }

    /**
     * load gallery images page
     * @param void
     * @return view
     */
    public function getGalleryView()
    {
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $categories = GalleryCategory::get();
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("menus", "footer", "banners", "categories", "title", "logo");

        return view("gallery")->with($res);
    }

    /**
     * load contact us page
     * @param void
     * @return view
     */
    public function getContactUsView()
    {
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("menus","footer", "banners", "title", "logo");

        return view("contact")->with($res);
    }

    /**
     * load help page
     * @param void
     * @return view
     */
    public function getHelpView()
    {
        $menus = $this->menus;
        $footer = $this->footer;
        $banners = $this->banners;
        $help = SettingHelp::find(1);
        $title = $this->title;
        $logo = $this->logo;

        $res = compact("menus","footer", "banners", "help", "title", "logo");
        
        return view("help")->with($res);
    }
}
