<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/bannerjob" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-5">

                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Cover</label>
                                <input type="file" name="cover"
                                    class="form-control @error('cover') is-invalid @enderror"
                                    placeholder="Masukkan Gambar">
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Body</label>
                                <textarea type="text" id="summernote" name="body" class="form-control @error('body') is-invalid @enderror"
                                    placeholder="Body">{{ isset($bannerjob) ? $bannerjob->body : old('body') }}</textarea>
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
