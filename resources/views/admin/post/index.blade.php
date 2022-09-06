@extends('admin.layouts.main')
@section('Content Wrapper')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
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
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->updated_at}}</td>
                                    <td><a href="{{route('admin.post.show',$post->id)}}"><i
                                                class="far fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.post.edit',$post->id)}}"><i
                                                class=" text-success fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.post.delete', $post)}}" method="post">
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
                        {{-- End of post list --}}


                    </div>

                    <div class="col-1">
                        <a href="{{route('admin.post.create')}}" type="button" class="btn btn-block btn-secondary">Добавить</a>
                    </div>


                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
