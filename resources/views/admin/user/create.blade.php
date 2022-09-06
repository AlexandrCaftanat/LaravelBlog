@extends('admin.layouts.main')
@section('Content Wrapper')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
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
    <form action="{{route('users.store')}}" method="post" class="w-50 mt-3">
        @csrf
        <div class="form-group ">
            <label for="name">Введите имя</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="password">
        </div>

        <div class="form-group">
            <label for="Назначьте роль пользователю"></label>
            <select class="form-control" id="exampleFormControlSelect1" name="role_id">
                @foreach($roles as $id => $role)
                    <option value="{{$id}}" {{$id == old('role_id') ? 'selected' : ''}}>
                        {{$role}}
                    </option>
                @endforeach
            </select>
            @error('role_id')
            <div class="text-danger">{{'Выбкрите роль пользователя'}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

