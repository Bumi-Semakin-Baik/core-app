@include('admin.template.header')
@include('admin.template.sidebar')
@include('admin.template.topbar')

<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Validation - Regular Style</h4>
            <div class="nk-block-des">
                <p>Validating your form, just add the class <code class="code-class">.form-validate</code> to any <code class="code-tag">&lt;form&gt;</code>, then it validate the form show error message.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
            <form action="{{ route('update.news', $news->id) }}" method="POST" enctype="multipart/form-data" class="form-validate">
            @csrf
            @method('PUT')
                <div class="row g-gs">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="fv-subject">Judul</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="title" value="{{ $news->title }}" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="fv-full-name">Penulis</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="fv-full-name" name="author" value="{{ $news->author }}" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="fv-phone">Slug</label>
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <input type="text" class="form-control" name="slug" value="{{ $news->slug }}" required>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <label class="form-label">Unggah Gambar</label>
                                    <div class="form-control-wrap">
                                        <div class="form-file">
                                            <div class="form-group">
                                                <label class="form-file-label" for="customFile">{{ $news->image }}</label>
                                                <input type="file" class="form-file-input" id="customFile" name="image" >
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                            <label class="form-label" for="fv-phone">Berita</label>
                            <div class="card">
                                <div class="card-inner">
                                    <input id="body" type="hidden" name="content" value="{{ $news->content }}">
                                    <trix-editor input="body"></trix-editor>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-primary"> Update Berita </button>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@include('admin.template.footer')
