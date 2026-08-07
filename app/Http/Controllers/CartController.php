<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    private function getCartQuery(Request $request)
    {
        if (Auth::check()) {
            return CartItem::where('user_id', Auth::id());
        }
        $sessionId = $request->session()->getId();
        return CartItem::where('session_id', $sessionId);
    }

    public function index(Request $request)
    {
        $items = $this->getCartQuery($request)->with('template')->get();

        $cartData = $items->map(function ($item) {
            return [
                'id' => $item->template_id,
                'name' => $item->template ? $item->template->name : 'Mẫu Thiệp Cưới',
                'price' => $item->template ? (float)$item->template->price : 0,
                'image' => $item->template ? asset($item->template->thumbnail) : '/assets/images/products/product-img-1.jpg',
                'quantity' => $item->quantity,
            ];
        });

        return response()->json([
            'success' => true,
            'cart' => $cartData
        ]);
    }

    public function add(Request $request)
    {
        $templateId = $request->input('id') ?? $request->input('template_id');
        $qty = (int)($request->input('qty', 1));
        if ($qty < 1) $qty = 1;

        $template = Template::find($templateId);
        if (!$template) {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy mẫu thiệp!'], 404);
        }

        $userId = Auth::check() ? Auth::id() : null;
        $sessionId = Auth::check() ? null : $request->session()->getId();

        $query = $userId ? CartItem::where('user_id', $userId) : CartItem::where('session_id', $sessionId);
        $cartItem = $query->where('template_id', $templateId)->first();

        if ($cartItem) {
            $cartItem->quantity += $qty;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => $userId,
                'session_id' => $sessionId,
                'template_id' => $templateId,
                'quantity' => $qty,
            ]);
        }

        return $this->index($request);
    }

    public function updateQty(Request $request)
    {
        $templateId = $request->input('id') ?? $request->input('template_id');
        $delta = (int)($request->input('delta', 0));

        $query = $this->getCartQuery($request)->where('template_id', $templateId);
        $cartItem = $query->first();

        if ($cartItem) {
            $cartItem->quantity += $delta;
            if ($cartItem->quantity <= 0) {
                $cartItem->delete();
            } else {
                $cartItem->save();
            }
        }

        return $this->index($request);
    }

    public function remove(Request $request)
    {
        $templateId = $request->input('id') ?? $request->input('template_id');
        $this->getCartQuery($request)->where('template_id', $templateId)->delete();

        return $this->index($request);
    }
}
