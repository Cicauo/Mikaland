<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data User') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/contact/index">Contact</a></div>
        </div>
    </x-slot>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Contact List</h4>
            </div>

            <div class="card-body">
              @isset($categories)
                <div class="table-responsive">
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($contact as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->description }}</td>

                                    <td>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                  @endisset
            </div>
        </div>
    </div>

</x-app-layout>
