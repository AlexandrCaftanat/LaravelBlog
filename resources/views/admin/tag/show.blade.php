@extends('admin.layouts.main')
@section('Content Wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{$tag->title}}</h1>
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


                        <tbody>

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Название</th>
                            <th scope="col">Редактировать</th>


                        </tr>
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->title}}</td>
                            <td><a href="{{route('admin.tag.edit',$tag->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
                            <form action="{{route('admin.tag.delete', $tag)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class= "text-danger fas fa-trash" role="button"></i>
                                </button>
                            </form>

                        </tr>


                        </tbody>
                    </table>
{{-- End of tag list --}}


                </div>

            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
