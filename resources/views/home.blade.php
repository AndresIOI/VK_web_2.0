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
    <a class="nav-link" name="subircontenido_tab" data-toggle="tab" href="#subircontenido_tab" role="tab" aria-controls="contact" aria-selected="false">Subir Videos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" name="subircontenido_tab_pdf" data-toggle="tab" href="#subircontenido_tab_pdf" role="tab" aria-controls="contact" aria-selected="false">Subir PDF</a>
  </li>
  @if(Auth::User()->rol_id == 2)
  <li class="nav-item">
    <a class="nav-link" name="subircontenido_tab" data-toggle="tab" href="#subircontenido_tab" role="tab" aria-controls="contact" aria-selected="false">Evaluar Contenido</a>
  </li>
  @endif
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="examen_tab" role="tabpanel" aria-labelledby="home-tab">

  </br>
  </br>
    <div class="form-group" align="center">

      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap" width="150px" height="150px">
        <div class="card-body">
          <h5 class="card-title">Física para Informáticos</h5>
          <p class="card-text">Examen parcial de la materia de Física para Informáticos</p>
          <a href="#" class="btn btn-primary">Hacer Prueba</a>
        </div>
      </div>

    </div>




  </div>

  <div class="tab-pane fade" id="estadisticas_tab" role="tabpanel" aria-labelledby="profile-tab">Aquí irá la sección de estadisticas</div>
  <div class="tab-pane fade" id="videos_tab" role="tabpanel" aria-labelledby="contact-tab"> Videos </div>
  <div class="tab-pane fade" id="pdf_tab" role="tabpanel" aria-labelledby="contact-tab">

      <div class="card-deck">
        @foreach($pdfs as $pdf)
        <div class="card">
          <img class="card-img-top" src=".../100px200/" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

        @endforeach
      </div>

  </div>
  <div class="tab-pane fade"  id="subircontenido_tab" role="tabpanel" aria-labelledby="contact-tab">
</br>
    <div class="container" align="center">

        <form method="post" action="{{route('video.store')}}" enctype ="multipart/form-data" class="form-group">
          <div class="card border-dark mb-3" style="max-width: 25rem;" align="center">
          <div class="card-header">Subir video</div>
          <div class="card-body text-dark">
            @csrf
            <input type="text" name = "titulo_video" placeholder="Titulo" class="form-control">
            <br>
            <div class="custom-file">
              <label class="custom-file-label" for="customFileLang" align="left">Video</label>
              <input type="file" name="video" class="custom-file-input" lang="es" >
            </div>
            <br>
            <br>
            <select name="etiqueta" class="form-control">
                <option selected ="selected">Seleccione la etiqueta</option>
                @foreach($etiquetas as $etiqueta )
                <option value="{{$etiqueta['id_etiqueta']}}">{{$etiqueta['materia']}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Agregar Video</button>
          </div>
          </div>
        </form>

    </div>

  </div>
  <div class="tab-pane fade"  id="subircontenido_tab_pdf" role="tabpanel" aria-labelledby="contact-tab">
    </br>
      <div class="container" align="center">
          <form method="post" action="{{route('pdf.store')}}" enctype ="multipart/form-data" class="form-group">
            <div class="card border-dark mb-3" style="max-width: 25rem;" align="center">
              <div class="card-header">Subir PDF</div>
              <div class="card-body text-dark">
                @csrf
                <input type="text" name = "titulo_pdf" class="form-control" placeholder="Titulo">
                <br>
                <div class="custom-file">
                  <label class="custom-file-label" for="customFileLang" align="left">PDF</label>
                  <input type="file" name="pdf" class="custom-file-input" lang="es" >
                </div>
                <br>
                <br>
                <select name="etiqueta" class="form-control">
                    <option selected ="selected">Seleccione la etiqueta</option>
                    @foreach($etiquetas as $etiqueta )
                    <option value="{{$etiqueta['id_etiqueta']}}">{{$etiqueta['materia']}}</option>
                    @endforeach
                </select>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Agregar PDF</button>
              </div>
            </div>
          </form>
      </div>
  </div>
  </div>
  @if(Auth::User()->rol_id == 1)
    <div class="tab-pane fade"  id="evaluar" role="tabpanel" aria-labelledby="contact-tab">Evaluar Contenido</div>
  @endif
</div>
@endsection
