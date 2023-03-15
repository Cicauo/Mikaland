<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data User') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">User</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Data User</a></div>
        </div>
    </x-slot>

    <div>
        {{-- Form-Start --}}
        <form action="{{ route('category.update', [ 'id'=> $category->id ]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Simple Summernote</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Project</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                                </div>

                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="location" name="location" value="{{$category->location}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tentang Project</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="about" name="about" value="{{$category->about}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slogan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" id="slogan" name="slogan" value="{{$category->slogan}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Uploud Gambar</label>
                                <div class="col-sm-12 col-md-7">
                                    <label for="file">Pilih file:</label>
                                    <input type="file" class="form-control-file" id="image" name="image" value="{{$category->image}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Press List</label>
                                <div class="col-sm-12 col-md-7">
                                    <label for="file">Pilih file:</label>
                                    <input type="file" class="form-control-file" id="press_list" name="press_list" value="{{$category->press_list}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Brosur</label>
                                <div class="col-sm-12 col-md-7">
                                    <label for="file">Pilih file:</label>
                                    <input type="file" class="form-control-file" id="brosur" name="brosur" value="{{$category->brosur}}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" id="submit">Publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
