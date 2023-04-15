<?php

namespace App\Http\Controllers\Dashboard\Admin\Equipments;

use App\Http\Controllers\Controller;
use App\Models\Equipments\Category;
use Illuminate\Http\Request;
use Validator;

class CategoriesController extends Controller
{
    public function indexAPI()
    {
        $categories = Category::all();
        return $categories;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, Category::getRules());
        if ($validator->fails()) {
            return redirect()->route('Dashboard.Admin.Equipments.Panel', ['#createCategory'])->withErrors($validator)->withInput();
        }
        $category = Category::create($data);
        $category->save();
        return redirect()->route('Dashboard.Admin.Equipments.Panel')->with('success', 'Categoria ' . $category->categoria . ' agregado correctamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $validator = Validator::make($data, Category::getRules($id));
        if ($validator->fails()) {
            return redirect()->route('Dashboard.Admin.Equipments.Panel', ['#editModalCategory_' . $id, 'Category' => $id])
                ->withErrors($validator)
                ->withInput();
        }
        $category = Category::findOrFail($id);
        $category->update($data);
        return back()->with('update', 'Categoria ' . $category->categoria . ' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('Dashboard.Admin.Equipments.Panel')->with('danger', 'Categoria ' . $category->categoria . ' eliminado correctamente.');
    }
}