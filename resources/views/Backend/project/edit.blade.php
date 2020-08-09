@extends('layouts.master')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-5">
                    <h3 class="mb-3">Editing Project</h3>
                    <form action="/admin/project/{{$project->id}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$project->pj_name}}" placeholder="Project Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="link" value="{{$project->pj_link}}" placeholder="Project Link">
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="image" required>
                            <img src="{{asset('/uploads/' . $project->pj_image)}}"  class="mt-2" width="50px" height="100px" title={{$project->pj_image}}>
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name="fb-link" value="{{$project->pj_fb_link}}" placeholder="Facebook Link" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="gh-link" value="{{$project->pj_gh_link}}" placeholder="Github Link" required>
                        </div>

                        <div class="float-right">
                            <a href="/admin/project" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">Update</button>
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
        height: 360,
    }); 
</script>
@endpush