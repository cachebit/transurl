<div class="col-md-6">
  <h5>>>最新海报 <small>LASTEST POSTERS</small></h5>
  @if(count($lastests))
   <div class="row">
    @foreach($lastests as $poster)
     <div class="col-xs-6">
       <div class="thumbnail">
         <a href="{{ route('posters.show', $poster->id) }}">
           <img class="img-responsive" src="{{ $poster->path_s }}">
         </a>
         <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
         <a href="{{ route('users.show' ,$poster->get_user()->id) }}">
           {{ substr($poster->get_user()->name, 0, 8) }}
         </a>
       </div>
     </div>
     @endforeach
   </div>
  @endif
</div>
