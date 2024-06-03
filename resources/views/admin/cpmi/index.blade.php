<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="100px">No</td>
                        <td width="250px">Nama</td>
                        <td width="250x">Pabrik Tujuan</td>
                        <td width="200px">Nomor HP/WA</td>
                        <td width="450px">Alamat</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($cpmi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="/admin/cpmi/{{ $item->id }}"><b>{{ $item->name }}</b></a>
                            </td>
                            <td>{{ $item->job_target }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{!! Illuminate\Support\Str::limit($item->address, 100) !!}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="/admin/cpmi/{{ $item->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
