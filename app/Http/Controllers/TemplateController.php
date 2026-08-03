<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Template;
use App\Models\Category;
use App\Models\CustomerInvitation;
use Illuminate\Support\Str;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Template::with('category');
        
        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }
        
        $templates = $query->get();
        return view('user.shop', compact('templates', 'categories'));
    }

    public function edit($id)
    {
        $template = Template::findOrFail($id);
        return view('user.editor', compact('template'));
    }

    public function save(Request $request)
    {
        $data = $request->except(['_token', 'template_id']);
        
        // Handle file upload if any
        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = '/storage/' . $request->file('cover_image')->store('invitations', 'public');
        }

        $invitation = CustomerInvitation::create([
            'template_id' => $request->template_id,
            'slug' => Str::slug('thiep-'.time().'-'.rand(1000, 9999)),
            'custom_data' => $data
        ]);

        return response()->json(['success' => true, 'url' => url('/thiep/'.$invitation->slug)]);
    }

    public function show($slug)
    {
        $invitation = CustomerInvitation::where('slug', $slug)->with('template')->firstOrFail();
        $data = (object) $invitation->custom_data;
        return view($invitation->template->view_file, compact('data', 'invitation'));
    }

    public function preview($id)
    {
        $template = Template::findOrFail($id);
        $data = (object)[
            'groom_name' => 'Hoàng Phúc',
            'bride_name' => 'Thảo Nguyên',
            'wedding_date' => '2024-12-31',
            'wedding_time' => '10:00 AM',
            'restaurant_name' => 'Trung Tâm Tiệc Cưới',
            'restaurant_address' => '123 Đường Tình Yêu, Quận 1',
            'invitees' => 'Gia đình bạn'
        ];
        return view('user.preview', compact('template', 'data'));
    }

}
