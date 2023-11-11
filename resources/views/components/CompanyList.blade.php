<!-- resources/views/components/CompanyList.blade.php -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Company List') }}
                    <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm" style=" float: right;">{{ __('Create New') }}</a>
                    <a href="{{ route('home') }}" class="btn btn-info btn-sm" style=" float: right;">Back</a>
                </div>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card-body">
                    <table class="table table-boarded">
                        <!-- Table headers -->
                        <thead>
                            <tr>
                              
                                <th>Company Name</th>
                                <!-- Add more headers as needed -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td> {{ $company->name }} </td>
                                    <td>

                                        <button wire:click="edit({{ $company->id }})" class="btn btn-sm btn-info"> Edit</button>
                                        <button wire:click="delete({{ $company->id }})" class="btn btn-sm btn-danger">Delete</button>
                                       
                                        <!-- Add other buttons or actions as needed -->
                                    </td>
                                    
                                    
                                    

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>


