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
    <a class="nav-link" name="evaluar" data-toggle="tab" href="#evaluar" role="tab" aria-controls="contact" aria-selected="false">Evaluar Contenido</a>
  </li>
  @endif
</ul>
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="examen_tab" role="tabpanel" aria-labelledby="home-tab">

  </br>
  </br>
    <div class="form-group" align="center">

      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('imagenes/test.png')}}" alt="Card image cap" width="50px" height="150px">
        <div class="card-body">
          <h5 class="card-title">Física Básica</h5>
          <p class="card-text">Examen parcial de la materia de Física para Informáticos</p>
          <a href="#" class="btn btn-primary">Hacer Prueba</a>
        </div>
      </div>

    </div>




  </div>

  <div class="tab-pane fade" id="estadisticas_tab" role="tabpanel" aria-labelledby="profile-tab">

</br>
<div class="container" align="center">
    <div id="chart_div" style="width:200; height:150">


        <chart></chart>

      </div>

    </div>

  </div>

  <div class="tab-pane fade" id="videos_tab" role="tabpanel" aria-labelledby="contact-tab">
    <!-- Grid row -->
</br>
    <div class="container-fluid" align="center">
<div class="row">
  @foreach($videos as $video)

  <div class="col-lg-4">
      <div class="card" style="width: 18rem;">

        <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" data-toggle="modal" data-target="#modal1"></a>


        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">

            <!--Content-->
            <div class="modal-content">

              <!--Body-->
              <div class="modal-body mb-0 p-0">

                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                  <video class="embed-responsive-item" src="videos/{{$video->video}}"
                    allowfullscreen controls></video>
                </div>

              </div>

              <!--Footer-->
              <div class="modal-footer justify-content-center">


                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

              </div>

            </div>
            <!--/.Content-->

          </div>
        </div>


        <div class="card-body">

          {{$video->titulo_video}}

        </div>
      </div>
    </div>
      @endforeach
    </div>
</div>

  </div>
  <div class="tab-pane fade" id="pdf_tab" role="tabpanel" aria-labelledby="contact-tab">

  </br>
      <div class="container">

<div class="row">
          @foreach($pdfs as $pdf)
          <div class="col-lg-4">

          <div class="card" style="width: 18rem;">

          <a><img src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video" style="width: 18rem;" ></a>

          <div class="card-body">

            {{$pdf->titulo_pdf}}

          </br>
        </br>
            <a href="/download/{{$pdf->pdf}}" class="btn btn-primary"  >Descargar</a>
          </div>

          </div>
        </div>
        @endforeach
      </div>
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
            <input type="text" name = "titulo_video" id ="titulo_video" placeholder="Titulo" class="form-control">
            <br>
            <div class="custom-file">
              <!-- <label class="custom-file-label" for="customFileLang" align="left">Video</label> -->
              <input type="file" name="video" lang="es" >
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
            <button type="submit" class="btn btn-primary" >Agregar Video</button>
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
                <input type="text" name = "titulo_pdf" class="form-control" id="titulo_pdf"placeholder="Titulo">
                <br>
                <div class="custom-file">
                  <!--<label class="custom-file-label" for="customFileLang" align="left">PDF</label>-->
                  <input type="file" name="pdf" lang="es" >
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
                <button type="submit" class="btn btn-primary" onclick="ver();">Agregar PDF</button>
              </div>
            </div>
          </form>
      </div>
  </div>

  @if(Auth::User()->rol_id == 2)
    <div class="tab-pane fade"  id="evaluar" role="tabpanel" aria-labelledby="contact-tab">Evaluar Contenido</div>
  @endif
</div>

<script type="text/javascript">
function ver(){
  alert("Carga Exitosa "+ document.getElementById('titulo_pdf').value);
}


</script>
@endsection
