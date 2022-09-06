@extends('admin.layouts.main')
@section('Content Wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Пользователя</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">

                    <form action="{{route('users.update', $user->id)}}" method="post" class="w-50 mt-3">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">

                            <input type="text" class="form-control" name="name" placeholder="Имя Пользователя" value="{{$user->name}}">
                        </div>

                        @error('name')
                        <div class="text-danger mt-3">
                            Вы не заполнели имя пользователя!
                        </div>
                        @enderror

                        <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}">

                </div>
                        <div class="form-group">
                            <label for="Назначьте роль пользователю"></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="role_id">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>
                                        {{$role}}
                                    </option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <div class="text-danger">{{'Выберите роль пользователя'}}</div>
                            @enderror
                        </div>

                        <div class="col-3">
                            <input type="submit" class="btn btn-block btn-secondary"value="Обновить">

                        </div>

                    </form>
                </div>

            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
