<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{
    public function index()
    {
        $product = new Product();
        $data['product'] = $product->findAll();
        return view('product/index', $data);
    }
    public function productAdd()
    {
        return view('product/store');
    }
    public function productStore()
    {
        $product = new Product();

        $file = $this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];

        $product->save($data);
        return redirect()->to(base_url('product'))->with('status','Product has been added sccessfully!');
    }
    public function edit($id)
    {
        $product = new Product();
        $data['product'] = $product->find($id);
        return view('product/edit', $data);
    }
    public function update($id)
    {
        $product = new Product();
        $data = $product->find($id);

        $old_img_name = $data['image'];
        $file = $this->request->getFile('image');
        if($file->isValid() && ! $file->hasMoved()) {
            
            if(file_exists("uploads/".$old_img_name)) {
                unlink("uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        } else {
            $imageName = $old_img_name;
        }
        $updated_data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];
        
        $product->update($id, $updated_data);
        return redirect()->to(base_url('product'))->with('status','Product has been updated sccessfully!');
    }
    public function delete($id)
    {
        $product = new Product();
        $data = $product->find($id);
        $imageFile =  $data['image'];
        if(file_exists("uploads/".$imageFile)) {
            unlink("uploads/".$imageFile);
        }
        $product->delete($id);
        return redirect()->back()->with('status','Product has been deleted sccessfully!');
    }
}
