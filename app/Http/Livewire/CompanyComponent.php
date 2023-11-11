<?php 
// app/Http/Livewire/CompanyComponent.php

use Livewire\Component;
use App\Models\Company;

class CompanyComponent extends Component
{
    public $companies;
    public $name, $email, $logo, $website;
    public $selectedCompanyId;

    public function mount()
    {
        $this->resetFields();
        $this->companies = Company::all();
    }

    public function render()
    {
        return view('livewire.company-component');
    }

    public function create()
    {
        Company::create([
            'name' => $this->name,
            'email' => $this->email,
            'logo' => $this->logo,
            'website' => $this->website,
        ]);

        $this->resetFields();
        $this->companies = Company::all();
    }

    public function edit($id)
    {
        $company = Company::find($id);
        $this->selectedCompanyId = $id;
        $this->name = $company->name;
        $this->email = $company->email;
        $this->logo = $company->logo;
        $this->website = $company->website;
    }

    public function update()
    {
        $company = Company::find($this->selectedCompanyId);
        $company->update([
            'name' => $this->name,
            'email' => $this->email,
            'logo' => $this->logo,
            'website' => $this->website,
        ]);

        $this->resetFields();
        $this->companies = Company::all();
    }

    public function delete($id)
    {
        Company::find($id)->delete();
        $this->companies = Company::all();
    }

    private function resetFields()
    {
        $this->name = $this->email = $this->logo = $this->website = '';
        $this->selectedCompanyId = null;
    }
}

?>