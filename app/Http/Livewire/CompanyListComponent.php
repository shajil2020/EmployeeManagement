<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyListComponent extends Component
{
    public $companies;

    
    public function mount()
    {
        $this->refreshCompanies();
    }
    public function refreshCompanies()
    {
        $this->companies = Company::all();
    }
    public function edit($companyId)
    {
   
       dd($companyId);
    }
    public function delete($companyId)
    {
        Company::find($companyId)->delete();
        $this->refreshCompanies(); // Refresh the company list after deletion
    }
    public function render()
    {
        return view('livewire.company-list-component');
    }
}
