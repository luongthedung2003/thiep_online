<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishlistItem;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    private function getWishlistQuery(Request $request)
    {
        if (Auth::check()) {
            return WishlistItem::where('user_id', Auth::id());
        }
        $sessionId = $request->session()->getId();
        return WishlistItem::where('session_id', $sessionId);
    }

    public function index(Request $request)
    {
        $items = $this->getWishlistQuery($request)->with('template')->get();

        $listData = $items->map(function ($item) {
            return [
                'id' => $item->template_id,
                'name' => $item->template ? $item->template->name : 'Mẫu Thiệp Cưới',
                'price' => $item->template ? (float)$item->template->price : 0,
                'image' => $item->template ? asset($item->template->thumbnail) : '/assets/images/products/product-img-1.jpg',
            ];
        });

        return response()->json([
            'success' => true,
            'wishlist' => $listData
        ]);
    }

    public function add(Request $request)
    {
        $templateId = $request->input('id') ?? $request->input('template_id');

        $template = Template::find($templateId);
        if (!$template) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy mẫu thiệp!'], 404);
        }

        $userId = Auth::check() ? Auth::id() : null;
        $sessionId = Auth::check() ? null : $request->session()->getId();

        $query = $userId ? WishlistItem::where('user_id', $userId) : WishlistItem::where('session_id', $sessionId);
        $exists = $query->where('template_id', $templateId)->first();

        if (!$exists) {
            WishlistItem::create([
                'user_id' => $userId,
                'session_id' => $sessionId,
                'template_id' => $templateId,
            ]);
        }

        return $this->index($request);
    }

    public function remove(Request $request)
    {
        $templateId = $request->input('id') ?? $request->input('template_id');
        $this->getWishlistQuery($request)->where('template_id', $templateId)->delete();

        return $this->index($request);
    }
}
