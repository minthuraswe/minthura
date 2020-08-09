<div class="sidebar position-fixed" style="width: 227.5px;height:700px;">
    <li class="border-bottom list-unstyled">
        <h5 class="border-0  pt-3 pb-2 pl-3 clcc text-center">Minthura.me</h5>
    </li>
    <ul class="list-unstyled">
        <a href="/dashboard">
            @if(request()->is('dashboard'))
            <li class="p-3 active">
                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  </svg> Home
            </li>
            @else
            <li class="p-3">
                <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="pb-1 bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  </svg> Home
            </li>
            @endif
        </a>
        <a href="/admin/project">
        @if(request()->is('admin/project*'))
        <li class="p-3 active">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-file-code-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM6.646 5.646a.5.5 0 1 1 .708.708L5.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0a.5.5 0 1 0-.708.708L10.293 8 8.646 9.646a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
              </svg> Project
                {{-- <span class="badge badge-light float-right">{{$count_pd}}</span> --}}
        </li>
        @else
        <li class="p-3">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-file-code" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z"/>
              </svg> Project
                {{-- <span class="badge badge-light float-right">{{$count_pd}}</span> --}}
        </li>
        @endif
        </a>

       
        {{-- <li class="p-3 border-top clcc" style="margin-top:9rem;">
            <span style="font-size:14px;">Copyright &copy; 2020 clcc.</span>
        </li> --}}

    </ul>
</div>