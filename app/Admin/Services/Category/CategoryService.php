<?php

namespace App\Admin\Services\Category;

use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryService implements CategoryServiceInterface
{
    protected $data;

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $this->data = $request->validated();
        if ($this->data['image'] == null) {
            $this->data['image'] = '/admin/images/not-found.jpg';
        }

        if (!empty($this->data['show_home'])) {
            $this->data['show_home'] = true;
        } else {
            $this->data['show_home'] = false;
        }

        if (!empty($this->data['show_menu'])) {
            $this->data['show_menu'] = true;
        } else {
            $this->data['show_menu'] = false;
        }

        return $this->repository->create($this->data);
    }

    public function update(Request $request)
    {
        $this->data = $request->validated();
        if ($this->data['image'] == null) {
            $this->data['image'] = '/admin/images/not-found.jpg';
        }

        if (!empty($this->data['show_home'])) {
            $this->data['show_home'] = true;
        } else {
            $this->data['show_home'] = false;
        }

        if (!empty($this->data['show_menu'])) {
            $this->data['show_menu'] = true;
        } else {
            $this->data['show_menu'] = false;
        }

        return $this->repository->update($this->data['id'], $this->data);
    }
}
