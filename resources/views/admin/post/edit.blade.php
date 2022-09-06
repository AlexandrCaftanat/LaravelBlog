@extends('admin.layouts.main')
@section('Content Wrapper')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование поста</h1>
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
                    <form action="{{route('admin.post.update',$post->id)}}" method="post" class="mt-3" enctype="multipart/form-data">
                        @method('PATCH')

                    @csrf
                    <div class="mb-3 w-50">

                        <input type="text" class="form-control" name="title" placeholder="Название Поста"
                               value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <textarea name="content" id="summernote">{{$post->content}}</textarea>
                    </div>

                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Выбор категории</label>

                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)

                                    <option {{$post->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                        <div class="w-25 mb-2">
                            <img src="{{ asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-50">
                        </div>

                    <div class="form-group w-50">
                        <label for="inputGroupFileAddon01">Добавить превью</label>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Добавить</span>
                            </div>


                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="input-preview-picture" aria-describedby="inputGroupFileAddon01" name="preview_image">
                                <label class="custom-file-label" for="inputGroupFile01">Выбрать превью</label>
                            </div>
                        </div>

                        <div class="w-50 mb-2">
                            <img src="{{asset('storage/'. $post->main_image)}}" alt="main_image" class="w-50">
                        </div>


                        <div class="form-group">

                            <label for="inputGroupFileAddon01">Добавить главную картинку</label>
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Добавить</span>
                                </div>

                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label" for="inputGroupFile01">Выбрать картинку</label>
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Добавления Тэга</label>
                                    <select name="tag_ids[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Выберите тэги" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                        @foreach($tags as $tag)
                                            <option {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id,$post->tags->pluck('id')->toArray()) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="w-50">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-secondary"value="Сохранить пост">
                                </div>
                            </div>
                            @error('title')
                            <div class="text-danger mt-3">
                                Вы не заполнели название Поста!
                            </div>
                            @enderror
                  </form>
                </div>

            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
            </div>

    <!-- /.content -->
</div>

<!-- /.content-wrapper -->
@endsection
