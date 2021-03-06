<x-admin-layout>
    <div class="container-fluid">
        <h1 class=" mt-4">Layanan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Kategori Layanan Cargo Logistik </li>
            </ol>
        </nav>

        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/admin_service/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($services as $item)
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="card">
                            <div class="feature-icon">
                                <img src="{{ asset('theme/images/services/'.$item->image) }}" class="img-thumbnail" width="80" height="80"
                                    alt="{{ $item->service }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->service }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
        
                                <div class="d-flex justify-content-center mt-5">
                                    <a href="{{ url('/admin_service/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                    <a href="{{ url('/admin_service/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        
            </div>
        </div>
    </div>
    


</x-admin-layout>