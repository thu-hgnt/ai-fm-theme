<?php
get_header();
?>

<div class="container">
    <ul class="nav nav-pills" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="true">My team</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="market-tab" data-bs-toggle="tab" data-bs-target="#market" type="button" role="tab" aria-controls="market" aria-selected="false">Market</button>
        </li>
    </ul>
    <div class="tab-content card mt-4 p-3" id="myTabContent">
        <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
            <table class="table table-sm table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">Position</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Thornton</td>
                        <td>John</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <ul class="pagination pagination-sm justify-content-center mt-3 mb-0">
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">market</div>
    </div>
</div>

<?php
get_footer();
