<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function index()
    {
        // Lấy danh sách sách từ session
        $items = session()->get('items', []);
        return view('items.index', compact('items'));
    }

    /**
     * Hiển thị form tạo sách.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Lưu sách mới vào session.
     */
    public function store(Request $request)
    {
        
        // Lấy dữ liệu sách từ request
        $data = $request->only(['BookID','title', 'author', 'description', 'published_year']);
        
        // Lấy danh sách sách hiện có từ session
        $items = session()->get('items', []);
        
        // Tạo ID mới cho sách
        $data['id'] = count($items) + 1;
        
        // Thêm sách mới vào danh sách
        $items[] = $data;

        // Lưu lại danh sách vào session
        session()->put('items', $items);

        return redirect()->route('items.index');
    }

    /**
     * Hiển thị thông tin một cuốn sách cụ thể.
     */
    public function show($id)
    {
        $items = session()->get('items', []);
        $item = collect($items)->firstWhere('id', $id);

        return view('items.show', compact('item'));
    }

    /**
     * Hiển thị form chỉnh sửa sách.
     */
    public function edit($id)
    {
        $items = session()->get('items', []);
        $item = collect($items)->firstWhere('id', $id);

        return view('items.edit', compact('item'));
    }

    /**
     * Cập nhật sách trong session.
     */
    public function update(Request $request, $id)
    {
        // Lấy danh sách sách hiện có từ session
        $items = session()->get('items', []);

        // Tìm và cập nhật sách
        foreach ($items as &$item) {
            if ($item['id'] == $id) {
                $item['title'] = $request->input('title');
                $item['author'] = $request->input('author');
                $item['description'] = $request->input('description');
                $item['published_year'] = $request->input('published_year');
                break;
            }
        }

        // Lưu lại danh sách cập nhật vào session
        session()->put('items', $items);

        return redirect()->route('items.index');
    }

    /**
     * Xóa sách khỏi session.
     */
    public function destroy($id)
    {
        // Lấy danh sách sách hiện có từ session
        $items = session()->get('items', []);

        // Lọc để loại bỏ sách có ID tương ứng
        $items = array_filter($items, function ($item) use ($id) {
            return $item['id'] != $id;
        });

        // Lưu lại danh sách cập nhật vào session
        session()->put('items', $items);

        return redirect()->route('items.index');
    }
}
