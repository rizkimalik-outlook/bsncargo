<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/slider') }}">Slider</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    

    <div class="card">
        <div class="card-header">
            Tambah Slider
        </div>
        <div class="card-body">
            <form action="{{ url('/slider/store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Input Gambar</label>
                    <input class="form-control" type="file" id="image" name="image" aria-describedby="imageHelp">
                    <div id="imageHelp" class="form-text">Ukuran gambar max 2Mb.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Slider</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Judul">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="keterangan"></textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="{{ url('/slider') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>