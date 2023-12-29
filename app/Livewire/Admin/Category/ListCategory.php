<?php

namespace App\Livewire\Admin\Category;

use App\Models\Categories;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ListCategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $state = [];
    public function addCategory()
    {
        $this->dispatch('show-form');
    }
    public function createCategory()
    {
        $validatedData = Validator::make(
            $this->state,
            [
                'name' => 'required|unique:categories',
                'description' => 'required',
            ],
            [
                'name.required' => "Đừng bỏ trống!",
                'name.unique' => "Danh mục này đã tồn tại",
                'description.required' => "Đừng bỏ trống!"
            ]
        )->validate();
        session()->flash('message', 'Thêm thành công');
        Categories::create($validatedData);
        $this->dispatch('hide-form');
    }
    public function render()
    {
        return view('livewire.admin.category.list-category', [
            'category' => Categories::latest()->paginate(10)
        ])->layout('layouts.app');
    }
}
