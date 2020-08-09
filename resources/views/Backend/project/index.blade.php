@extends('layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center mb-2">
            <div class="col-md-12">
                <div class="card p-5 shadow">
                    <div class="d-flex">
                        <div><h5 class="pb-3 pr-3">Projects</h5></div>
                        <div class="ml-auto">
                            <a href="/admin/project/create" class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                                </svg> Add New</a>
                        </div>
                    </div>

                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Link</th>
                            <th scope="col">Image</th>
                            <th scope="col">Fb Link</th>
                            <th scope="col">Gh Link</th>
                            <th scope="col">Date/ Time</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $get)
                            <tr>
                                <th scope="row">{{$get->id}}</th>
                                <td>{{$get->pj_name}}</td>
                                <td class="text-primary">
                                    @if($get->pj_link == true)
                                        {{$get->pj_link}}
                                    @else
                                        {{'/'}}
                                    @endif
                                </td>
                                <td> 
                                    <img src="{{asset('/uploads/' . $get->pj_image)}}"  width="40px" height="40px" title={{$get->pj_image}}>
                                </td>
                                <td class="text-primary">{{$get->pj_fb_link}}</td>
                                <td class="text-primary">{{$get->pj_gh_link}}</td>
            
                                <td>{{$get->updated_at->diffforHumans()}}</td>
                                <td>
                                    <a href="{{ URL::to('admin/project/' . $get->id . '/edit') }}" title="edit" class="pr-1">
                                        <button class="rounded" style="border:1px solid;">
                                            <svg class="bi bi-pencil-square text-dark" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                        </button>
                                    </a>
                                    <form action="{{ URL::to('admin/project/' . $get->id ) }}" method="post" style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" title="delete" class="rounded" style="border:1px solid;">
                                            <svg class="bi bi-trash text-dark" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                   <div>
                       {{$project->links()}}
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection