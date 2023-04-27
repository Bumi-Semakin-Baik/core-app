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
            <form action="#" class="form-validate">
                <div class="row g-gs">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="fv-subject">Judul</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="fv-subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-full-name">Penulis</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-full-name" name="fv-full-name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-phone">Slug</label>
                            <div class="form-control-wrap">
                                <div class="input-group">
                                        {{-- <div class="input-group-prepend">
                                            <span class="input-group-text" id="fv-phone">+62</span>
                                        </div> --}}
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="fv-message">Message</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control form-control-sm" id="fv-message" name="fv-message" placeholder="Write your message" required></textarea>
                            </div>
                        </div>
                    </div> --}}
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <label class="form-label" for="fv-phone">Berita</label>
                                {{-- <h4 class="title nk-block-title">News</h4> --}}
                                {{-- <div class="nk-block-des">
                                    <p>A basic demostration of quilljs rich text editor.</p>
                                </div> --}}
                            </div>
                            <div class="card">
                                <div class="card-inner">
                                    <!-- Create the editor container -->
                                    <div class="quill-basic">
                                        <label>Masukkan Teks</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Tambahkan Berita</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@include('admin.template.footer')
