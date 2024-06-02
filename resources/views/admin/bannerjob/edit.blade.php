<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/bannerjob/{{ $bannerjob->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="row">
                        <div class="col-md-5">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                    value="{{ old('title', $bannerjob->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input type="file" name="cover"
                                    class="form-control @error('cover') is-invalid @enderror"
                                    placeholder="Masukkan Cover">
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @if (isset($bannerjob) && $bannerjob->cover)
                                    <img src="/{{ $bannerjob->cover }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>

                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea type='text' id="summernote" name="body" class="form-control @error('body') is-invalid @enderror" placeholder="Body">{{ old('body', $bannerjob->body) }}</textarea>
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
