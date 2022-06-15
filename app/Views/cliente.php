<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Informe de consumo
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="card col h-100 m-2">
    <div class="card-header">
        <h3>Informe de consumo</h3>
    </div>
    <div class="card-body">
        <form class=" my-2 ">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Apellidos </label>
                <div class="col-sm-8">
                    <input type="text" name="apellidos" require class="form-control">
                </div>
            </div>
            <div class="row mb-3"> 
                <label class="col-sm-4 col-form-label form-check-label">Mostrar todos los clientes (con o sin ventas) </label>
                <div class="col-sm-8">
                    <input class="form-check-input" type="checkbox" name="todos">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Que no haya comprado en los ultimos </label>
                <div class="col-sm-4">
                    <select require class="form-select" name="meses">
                        <?php for ($i=1; $i <= 24; $i++) { 
                            echo "<option value=$i>$i</option>";
                        } ?>
                    </select>
                </div>
                <label class="col-sm-4 col-form-label">mes/es </label>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Edad</label>
                <div class="col-sm-4">
                    <select require class="form-select " name="opcion">
                        <option value="<">menor</option>
                        <option value="<=">menor o igual</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="edad" require class="form-control">
                </div>
            </div>
            <button class="btn btn-primary w-100 mt-3" type="button"> Buscar </button>
        </form> <!-- form end.// -->
        <table class="table table-striped table-responsive my-3">
            <thead class="">
                <tr>
                    <th>Columna</th>
                    <th>Columna</th>
                    <th>Columna</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Campo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">CAmpo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">Campo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">CAmpo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">Campo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">CAmpo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">Campo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
                <tr>
                    <td scope="row">CAmpo</td>
                    <td>Campo</td>
                    <td>Campo</td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation" class="card-footer">
            <ul class="pagination mx-auto">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- </div> -->
    </div>

    <?= $this->endSection() ?>