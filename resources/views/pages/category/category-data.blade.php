<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Kategori Project') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Data User</a></div>
        </div>
    </x-slot>

    
    <div>
       <div class="section-body">
        <div class="card">
            <div class="card-header row">
                <a href="/category/category-new" class="btn btn-primary float-md-left">Tambah Kategori</a>
            </div>

            <div class="card-body">
             
                <div class="table-responsive">
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Lokasi</th>
                                <th>Press List</th>
                                <th>Brosur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($category as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->location }}</td>
                                    <td>{{ $category->press_list }}</td>
                                    <td>{{ $category->brosur }}</td>
                                        {{-- <a href="#" class="btn btn-warning mr-1">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a> --}}
                                        <td class="whitespace-no-wrap row-action--icon">
                                         <a role="button" href="/category/category-edit/{{ $category->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
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
</x-app-layout>
