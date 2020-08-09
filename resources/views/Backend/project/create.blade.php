@extends('layouts.master')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-5">
                    <h3 class="mb-3">Inserting Project</h3>
                    <form action="/admin/project" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Project Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="link" value="{{old('link')}}" placeholder="Project Link">
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="image" required>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="fb-link" value="{{old('fb-link')}}" placeholder="Facebook Link" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="gh-link" value="{{old('gh-link')}}" placeholder="Github Link" required>
                        </div>

                        <div class="float-right">
                            <a href="/admin/project" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    tinymce.init({
        selector: 'textarea',
        height: 400,
    }); 
</script>
@endpush