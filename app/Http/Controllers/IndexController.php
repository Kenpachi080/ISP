<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\AboutAbout;
use App\Models\AboutAdvantage;
use App\Models\AboutLicense;
use App\Models\AboutMail;
use App\Models\AboutTitle;
use App\Models\Application;
use App\Models\ConsaltCard;
use App\Models\ConstructionCard;
use App\Models\DesignCard;
use App\Models\Engineering;
use App\Models\MainAbout;
use App\Models\MainConsalting;
use App\Models\MainConstruction;
use App\Models\MainDesign;
use App\Models\MainEngineering;
use App\Models\MainTitle;
use App\Models\Partner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $main = MainTitle::first();
        $about = MainAbout::first();
        $partner = Partner::all();
        $design = MainDesign::first();
        $construction = MainConstruction::first();
        $consalting = MainConsalting::first();
        $engineering = MainEngineering::first();
        $buildingcard = DesignCard::where('main', '=', 1)->orderBy('mainsort', 'asc')->get()->take(4);
        $constructioncard = ConstructionCard::where('main', '=', 1)->get()->take(3);
        $data = [
            'main' => $main,
            'about' => $about,
            'partner' => $partner,
            'design' => $design,
            'construction' => $construction,
            'consalting' => $consalting,
            'engineering' => $engineering,
            'buildingcard' => $buildingcard,
            'constructioncard' => $constructioncard,
        ];
//        dd($data);
        return view('index', $data);
    }

    public function about()
    {
        $title = AboutTitle::first();
        $about = AboutAbout::first();
        $advantage = AboutAdvantage::first();
        $mail = AboutMail::first();
        $license = AboutLicense::all()->take(8);
        $partner = Partner::all()->take(8);
        $data = [
            'title' => $title,
            'about' => $about,
            'advantage' => $advantage,
            'mail' => $mail,
            'partner' => $partner,
            'license' => $license,
        ];
//        dd($data);
        return view('about', $data);
    }

    public function building()
    {
        $build = ConstructionCard::orderBy('sort', 'asc')->get();
        $data = [
            'data' => $build
        ];
        return view('building', $data);
    }

    public function singlebuild($id)
    {
        $build = ConstructionCard::where('id', '=', $id)->first();
        $data = [
            'data' => $build,
            'title' => 'Строительство'
        ];
        return view('design-inner', $data);
    }

    public function construction()
    {
        return view('construction');
    }


    public function design()
    {
        $design = DesignCard::orderBy('sort', 'asc')->get()->take(18);
        $data = [
            'data' => $design,
            'title' => 'Проектированиe',
        ];
        return view('design', $data);
    }

    public function singledesign($id)
    {
        $design = DesignCard::where('id', '=', $id)->first();
        if (!$design) {
            return redirect(route('design'));
        }
        $data = [
            'data' => $design,
            'title' => 'Проектированиe',
        ];
        return view('design-inner', $data);
    }

    public function engineering()
    {
        $engineering = Engineering::first();
        $data = [
            'data' => $engineering,
        ];
        return view('engineering', $data);
    }

    public function consulting()
    {
        $consalt = ConsaltCard::first();
        $data = [
            'data' => $consalt,
        ];
//        dd($consalt);
        return view('consulting', $data);
    }

    public function application(Request $request)
    {
        $application = Application::create([
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return back();
    }
}


