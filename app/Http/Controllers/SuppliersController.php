<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('search');

        if ($filter) {
            $suppliers = Supplier::where('name_reason', 'like', "%$filter%")
                ->orWhere('cpf_cnpj', 'like', "%$filter%")
                ->get();
        } else {
            $suppliers = Supplier::orderBy('name_reason', 'asc')->get();
        }

        return view('suppliers.index', [
            'suppliers' => $suppliers,
            'filter' => $filter
        ]);
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:F,J',
            'name_reason' => 'required|string|max:100',
            'cpf_cnpj' => 'required|string|max:20|unique:suppliers,cpf_cnpj',
            'phone' => 'nullable|string|max:11',
        ]);

        Supplier::create($request->all());

        return redirect('/suppliers')->with('success', 'Supplier created successfully!');
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', ['supplier' => $supplier]);
    }

    

public function update(Request $request)
{
    $request->validate([
        'id' => 'required|exists:suppliers,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'quantity' => 'required|numeric',
        'type' => 'required|in:F,J',
    ]);

    $supplier = Supplier::findOrFail($request->input('id'));

    $supplier->name_reason = $request->input('name');
    $supplier->cpf_cnpj = $request->input('description');
    $supplier->phone = $request->input('quantity');
    $supplier->type = strtoupper($request->input('type'));

    $supplier->save();

    return redirect()->route('suppliers.index')->with('status', 'Fornecedor atualizado com sucesso!');
}


    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect('/suppliers')->with('success', 'Supplier deleted successfully!');
    }
}
