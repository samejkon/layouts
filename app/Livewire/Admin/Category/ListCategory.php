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
    public $showEditModal = false;
    public $category;
    public $categoryDeleteId;
    public function addCategory()
    {
        $this->showEditModal = false;
        $this->reset();
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
        Categories::create($validatedData);
        $this->dispatch('hide-form', ['message' => ' Thêm thành công !']);
    }
    public function edit(Categories $category)
    {
        $this->showEditModal = true;
        $this->category = $category;
        $this->state = $category->toArray();
        $this->dispatch('show-form');
    }
    public function updateCategory()
    {
        $validatedData = Validator::make(
            $this->state,
            [
                'name' => 'required|unique:categories,name,' . $this->category->id,
                'description' => 'required',
            ],
            [
                'name.required' => "Đừng bỏ trống!",
                'name.unique' => "Danh mục này đã tồn tại",
                'description.required' => "Đừng bỏ trống!"
            ]
        )->validate();

        $this->category->update($validatedData);

        $this->dispatch('hide-form', ['message' => " Sửa thành công !"]);
    }

    public function delete($categoryId)
    {
        $category = Categories::find($categoryId);

        $category->delete();
        $this->dispatch('hide-form', ['message' => " Xoá thành công !"]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.category.list-category', [
            'categories' => Categories::latest()->paginate(10)
        ])->layout('layouts.app');
    }
}
