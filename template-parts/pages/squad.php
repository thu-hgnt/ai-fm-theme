<?php
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="https://picsum.photos/200" class="card-img-top" alt="player's face">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Main squad
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-end align-items-center">
                        <span class="me-auto">An item</span>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-plus-circle"></i></button>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-person-x"></i></button>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-emoji-frown"></i></button>
                        <div class="dropdown ms-1">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">Upgrade</button></li>
                                <li><button class="dropdown-item" type="button">Remove from team</button></li>
                                <li><button class="dropdown-item" type="button">Place in martket</button></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-end align-items-center">
                        <span class="me-auto">An item</span>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-plus-circle"></i></button>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-person-x"></i></button>
                        <button class="btn btn-sm btn-light px-1 ms-1"><i class="bi bi-emoji-frown"></i></button>
                        <div class="dropdown ms-1">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">Upgrade</button></li>
                                <li><button class="dropdown-item" type="button">Remove from team</button></li>
                                <li><button class="dropdown-item" type="button">Place in martket</button></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="card-footer">
                    <ul class="pagination pagination-sm justify-content-center mb-0">
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Player rating
                </div>
                <div class="card-body">
                    <div class="row align-items-center justify-content-between g-3 mb-2">
                        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">General</label>
                        <div class="col-sm-7">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                        <div class="col-sm-auto px-0">
                            <button type="button" class="btn btn-light btn-sm"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    Player stats
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
