<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="nav-link pl-0 {{(request()->is('/')) ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                   <?php echo date('d / m / Y'); ?>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link pr-4 {{(request()->is('project*')) ? 'active' : ''}}" href="/blog">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pr-4 {{(request()->is('blog*')) ? 'active' : ''}}" href="/blog">Contact</a>
                                </li> --}}
                            </ul>
                        </div>
                 
          
        </nav>
    </div>
</div>
    </div>
</section>