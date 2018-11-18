@extends('layouts.na_usuario')
@section('content')
  <div class="box box-default">
       <div class="box-header with-border">
         <h3 class="box-title">Oportunidades</h3>
        </div>
               <!-- /.box-header -->
       <div class="box-body">
         	@foreach($posts as $post)
         <div class="search-result-item col-md-12">

              <hr>
   								<div class="col-sm-2"><a href="#">
                    @if($post->ruta_Photo)


                    <img class="search-result-image img-responsive" src=" {!! asset(Storage::url($post->ruta_Photo)) !!} ">

                @endif
   									</a></div>
   								<div class="search-result-item-body col-sm-10">
   									<div class="row">
   										<div class="col-sm-9">
   											<h3 class="search-result-title"><a href="#">{{ $post->name }}</a></h3>

   											<p>{{ $post->description }}</p>
   										</div>
   										<div class="col-sm-3 text-center">
   											<h4>Fecha limite</h4>
   											<a class="btn btn-primary btn-info btn-md" >{{ $post->date }}</a>
   										</div>
   									</div>
   								</div>

   							</div><!--/.search-result-item-->
                @endforeach
                  {{ $posts->render() }}
    </div> <!-- /.box-body -->

</div> <!-- /.box -->

@endsection
