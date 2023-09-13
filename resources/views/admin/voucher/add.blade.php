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
            <form action="{{ route('store.voucher') }}" method="POST" enctype="multipart/form-data" class="form-validate">
            @csrf
                <div class="row g-gs">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="fv-subject">Code</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="code" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="fv-subject">Nama Voucher</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="nama_voucher" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="fv-subject">Potongan</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="potongan" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="fv-subject">Owner</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="fv-subject" name="owner" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                                <button type="submit" class="btn btn-lg btn-primary"> Insert New Voucher </button>
                    </form>
                </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- .nk-block -->

@include('admin.template.footer')
