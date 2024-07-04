<div class="row">
    <div class="col-md-8">
        <div class="input-group input-group-md mb-3">
            <div class="input-group-prepend mr-5">
                <button type="button" class="btn btn-default px-4 dropdown-toggle" data-toggle="dropdown">
                    Kategori
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="#">Action</a></li>
                    <li class="dropdown-item"><a href="#">Another action</a></li>
                    <li class="dropdown-item"><a href="#">Something else here</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="#">Separated link</a></li>
                </ul>
            </div>
            <!-- /btn-group -->
            @include('component.search')
        </div>
        <!-- /input-group -->
    </div>
    <div class="col-md-4">
        <a class="btn btn-md btn-success float-right px-4">
            <i class="fas fa-edit"></i> Tambah
        </a>
    </div>
</div>
<div class="row mt-3 pt-3">
    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill card-outline card-dark shadow">
            <div class="card-header text-muted border-bottom-0">
                Digital Strategist
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b>Nicole Pearson</b></h2>
                        <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                        </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="{{ asset('lte/dist/img/user1-128x128.jpg') }}" alt="user-avatar" class=" img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    <a class="btn btn-warning btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>