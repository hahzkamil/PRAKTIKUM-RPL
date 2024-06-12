<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    
    public function store(StoreCompanyRequest $request)
    
    {
    abort_unless(\Gate::allows('company_create'), 403);
    $company = Company::create($request->all());
    return redirect()->route('admin.companies.index');
    }
}
