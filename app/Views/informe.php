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
                <label class="col-sm-2 col-form-label">Rango de fechas: </label> <!-- TODO: Rango de fecha -->
                <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-calendar    "></i></span>
                        <input type="date" require class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Filtrar por: </label>
                <div class="col-sm-10">
                    <select require class="form-select" name="filtro">
                        <option selected value="categorias">Categorias/Familias</option>
                        <option value="lista">Lista de articulos</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Con mas de </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="unidades">
                </div>
                <label class="col-sm-2 col-form-label">unidades vendidas </label>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Categorias/Familias</label>
                <div class="col-sm-10">
                    <select require class="form-select" name="item">
                        <option value="categorias">Categorias/Familias</option>
                        <option value="lista">Lista de articulos</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary w-100 mt-3" type="button"> Buscar </button>
        </form> <!-- form end.// -->
        <table class="table table-striped table-responsive my-3">
            <thead class="">
                <tr>
                    <th>Código de producto</th>
                    <th>Nombre</th>
                    <th>Importe total de ventas</th>
                    <th>Número de unidades</th>
                    <th>Número de operaciones</th>
                    <th>Importe total de compras</th>
                    <th>Unidades compradas</th>
                    <th>Stock</th>
                    <th>PVP medio</th>
                    <th>PUC medio</th>
                </tr>
            </thead>

            código del producto, nombre, importe total de ventas, el número de unidades, el numero de
            tickets/operaciones, las importe total de compras realizadas, la unidades compradas, el stock actual, el pvp
            medio y el puc medio.
            <tbody>
                <tr>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                </tr>
                <tr>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                </tr>
                <tr>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                </tr>
                <tr>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
                    <td>Prueba</td>
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