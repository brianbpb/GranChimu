@extends('layout.admin.master')

@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Lista de Usuarios</h3>

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                            Nuevo Usuario +
                        </button>

                        <!-- Modal Show User -->
                        <div class="modal fade" id="myModalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Ver Usuario</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Nombre: {{$user}} </p>
                                        <p>Apellido: </p>
                                        <p>Correo: </p>
                                        <p>Telefono: </p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Create User -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Usuario</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST">

                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="col-md-4 control-label">Name</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                <label for="lastname" class="col-md-4 control-label">Lastname</label>

                                                <div class="col-md-6">
                                                    <input id="lastname" type="text" class="form-control" name="lastname" value="" required autofocus>

                                                    @if ($errors->has('lastname'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                                <div class="col-md-6">
                                                    <input id="phone" type="phone" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="add" type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit User -->
                        <div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="modal">
                                            <input id="fid" type="hidden" class="form-control" disabled>
                                            <div class="form-group">
                                                <label for="n" class="col-md-4 control-label">Name</label>
                                                <div class="col-md-6">
                                                    <input id="n" type="text" class="form-control" name="n">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="lt" class="col-md-4 control-label">Lastname</label>

                                                <div class="col-md-6">
                                                    <input id="lt" type="text" class="form-control" name="lt">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="e" class="col-md-4 control-label">E-Mail Address</label>

                                                <div class="col-md-6">
                                                    <input id="e" type="email" class="form-control" name="e">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="p" class="col-md-4 control-label">Phone</label>

                                                <div class="col-md-6">
                                                    <input id="p" type="phone" class="form-control" name="p">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="footer_action_button" type="button" class="btn btn-primary actionBtn"></button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Delete User -->
                        <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
                                    </div>
                                    <input type="hidden" id="hidden-user-id">
                                    <div class="modal-body">
                                        Se eliminar el usuario.
                                    </div>
                                    <div class="modal-footer">
                                        <button id="button_delete_user" type="button" class="btn btn-primary">Eliminar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <table id="table" class="table table-striped table-advance table-hover">
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Nombre</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Apellido</th>
                                <th><i class="fa fa-bookmark"></i> Telefono</th>
                                <th><i class=" fa fa-edit"></i> E-mail</th>
                                <th><i class=" fa fa-edit"></i> Fecha de Creacion</th>
                                <th></th>
                            </tr>
                            </thead>
                            @foreach($user as $key => $value)
                                <tbody>
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td class="hidden-phone">{{$value->lastname}}</td>
                                    <td>{{$value->phone}}</td>
                                    <td class="hidden-phone">{{$value->email}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>
                                        <a class="show-modal btn btn-primary btn-xs " data-id="{{$value->id}}" data-toggle="modal" data-target="#myModalShow"><i class="fa fa-eye"></i></a>
                                        <a class="edit-modal btn btn-primary btn-xs " data-id="{{$value->id}}" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" data-id="{{$value->id}}" data-toggle="modal" data-target="#myModalDelete"><i class="fa fa-trash-o "></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection('content')