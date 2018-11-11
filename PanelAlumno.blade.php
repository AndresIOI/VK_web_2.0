@extends('layouts.app')
@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" name="examen_tab" data-toggle="tab" href="#examen_tab" role="tab" aria-controls="home" aria-selected="true">Examen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" name="estadisticas_tab" data-toggle="tab" href="#estadisticas_tab" role="tab" aria-controls="profile" aria-selected="false">Estadísticas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" name="videos_tab" data-toggle="tab" href="#videos_tab" role="tab" aria-controls="contact" aria-selected="false">Videos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" name="pdf_tab" data-toggle="tab" href="#pdf_tab" role="tab" aria-controls="contact" aria-selected="false">PDF's</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" name="subircontenido_tab" data-toggle="tab" href="#subircontenido_tab" role="tab" aria-controls="contact" aria-selected="false">Subir Contenido</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="examen_tab" role="tabpanel" aria-labelledby="home-tab">Aquí irá la sección de examenes</div>
  <div class="tab-pane fade" id="estadisticas_tab" role="tabpanel" aria-labelledby="profile-tab">Aquí irá la sección de estadisticas</div>
  <div class="tab-pane fade" id="videos_tab" role="tabpanel" aria-labelledby="contact-tab"> @yield('content2') </div>
  <div class="tab-pane fade" id="pdf_tab" role="tabpanel" aria-labelledby="contact-tab">Aquí irá la sección de ver pdf's</div>
  <div class="tab-pane fade"  id="subircontenido_tab" role="tabpanel" aria-labelledby="contact-tab">Aquí irá la sección de subir contenido</div>
</div>

@endsection
