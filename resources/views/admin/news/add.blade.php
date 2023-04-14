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
                            <label class="form-label" for="fv-email">Catatan Tambahan</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-mail"></em>
                                </div>
                                <input type="text" class="form-control" id="fv-email" name="fv-email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-phone">Deskripsi Singkat</label>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-phone">Kategori</label>
                            <div class="form-control-wrap">
                                <ul class="custom-control-group">
                                    <li>
                                        <div class="custom-control custom-radio custom-control-pro no-control">
                                            <input type="radio" class="custom-control-input" name="fv-sex" id="sex-male" required>
                                            <label class="custom-control-label" for="sex-male">Pariwisata</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio custom-control-pro no-control">
                                            <input type="radio" class="custom-control-input" name="fv-sex" id="sex-female" required>
                                            <label class="custom-control-label" for="sex-female">Kuliner</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio custom-control-pro no-control">
                                            <input type="radio" class="custom-control-input" name="fv-sex" id="sex-other" required>
                                            <label class="custom-control-label" for="sex-other">Others</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-subject">Subjek</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="fv-subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="fv-topics">Topik</label>
                            <div class="form-control-wrap ">
                                <select class="form-control form-select" id="fv-topics" name="fv-topics" data-placeholder="Select a option" required>
                                    <option label="Pilih Topik" value=""></option>
                                    <option value="fv-gq">General Question</option>
                                    <option value="fv-tq">Tachnical Question</option>
                                    <option value="fv-ab">Account &amp; Billing</option>
                                </select>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Communication</label>
                                    <ul class="custom-control-group g-3 align-center">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-email" required>
                                                <label class="custom-control-label" for="fv-com-email">Email</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-sms" required>
                                                <label class="custom-control-label" for="fv-com-sms">SMS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="fv-com" id="fv-com-phone" required>
                                                <label class="custom-control-label" for="fv-com-phone">Phone</label>
                                            </div>
                                        </li>
                                    </ul>
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
