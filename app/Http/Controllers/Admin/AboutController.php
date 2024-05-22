<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{

    public function index(About $about)
    {
        $about = about();
        return view('backend.about.index', compact('about'));
    }

    public function store(AboutRequest $request)
    {
        if ($about = About::latest()->first()) {
            if ($request->hasFile('about_image') && $aboutImage = $about->getRawOriginal('about_image')) {
                $this->deleteFile($aboutImage);
            }
            if ($request->hasFile('director_image') && $directorImage = $about->getRawOriginal('director_image')) {
                $this->deleteFile($directorImage);
            }
            $about->update($request->validated());
        } else {
            About::create($request->validated());
        }

        Cache::forget('about');

        toast('About Updated Successfully!','success');
        return back();
    }

    public function destroy(About $about)
    {
        $this->deleteFile($about->directorImage);
        $this->deleteFile($about->aboutImage);
        $about->delete();
        return back();
    }
}
