@extends('admin.layouts.main')
@section('Content Wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление Тэгов</h1>
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

                    <form action="{{route('admin.tag.store')}}" method="post" class="w-50 mt-3">
                        @csrf
                        <div class="mb-3">
{{--                            <label for="tag" class="form-label">Название категории</label>--}}
                            <input type="text" class="form-control" name="title" placeholder="Название тэга">
                        </div>
                        <div class="col-3">
                            <input type="submit" class="btn btn-block btn-secondary"value="Добавить">

                        </div>
                        @error('title')
                        <div class="text-danger mt-3">
                            Вы не заполнели название тэга!
                        </div>
                        @enderror

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
