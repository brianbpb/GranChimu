@extends('layout.admin.master');

@section('content');

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Lista de Usuarios</h3>

        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <hr>
                        <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Nombre</th>
                            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Apellido</th>
                            <th><i class="fa fa-bookmark"></i> Telefono</th>
                            <th><i class=" fa fa-edit"></i> Estado</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="basic_table.html#">Company Ltd</a></td>
                            <td class="hidden-phone">Lorem Ipsum dolor</td>
                            <td>12000.00$ </td>
                            <td><span class="label label-info label-mini">Due</span></td>
                            <td>
                                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->

    </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->


@endsection('content');