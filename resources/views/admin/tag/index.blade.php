@extends('admin.layouts.main')
@section('Content Wrapper')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тэги</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- List of category --}}
                    <div class="col-12">
                        <table class="table col-md-6">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col" class="text-center" colspan="3">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->title}}</td>
                                    <td>{{$tag->created_at}}</td>
                                    <td>{{$tag->updated_at}}</td>
                                    <td><a href="{{route('admin.tag.show',$tag->id)}}"><i
                                                class="far fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.tag.edit',$tag->id)}}"><i
                                                class=" text-success fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.tag.delete', $tag)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class= "text-danger fas fa-trash" role="button"></i>
                                            </button>
                                        </form>
                                    </td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{-- End of category list --}}


                    </div>

                    <div class="col-1">
                        <a href="{{route('admin.tag.create')}}" type="button" class="btn btn-block btn-secondary">Добавить</a>
                    </div>


                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
