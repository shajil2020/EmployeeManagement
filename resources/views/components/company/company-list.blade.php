<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Company List') }}
                        <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm" style=" float: right;">{{ __('Create New') }}</a>
                        <a href="{{ route('home') }}" class="btn btn-info btn-sm" style=" float: right;">Back</a>
                    </div>
                     @if (session('success'))
                     <x-alert>{{ session('success') }}</x-alert>
                     @endif
                     @if (session('fail'))
                     <x-alert>{{ session('fail') }}</x-alert>
                     @endif
                     
                    <div class="card-body">
                        <table class="table table-boarded">
                            <!-- Table headers -->
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <!-- Add more headers as needed -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                                @foreach ($companiesList as $companies)
                                    <tr>
                                        <td>{{ $companies->name }} </td>
                                        <td>{{ $companies->email }}</td>
                                        <td>
                                            <a href="{{ route('companies.edit', $companies->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <x-company.delete-company-form :companies="$companies" style="display: inline;" />  
                                            <!-- Add other buttons or actions as needed -->
                                        </td>
                                        
                                        
                                        

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
