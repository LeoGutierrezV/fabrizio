@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')


 
  <div class="video">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="about-wrap text-black">
            <p>Un privilegio eterno, 𝐔𝐍𝐈𝐕𝐄𝐑𝐒𝐎 fabriziosurferwinn una marca</p>
            <p>independiente con gran influencia de la onda ESTÉTICA</p>
            <!--<img class="col-6" src="images/FIRMA FSW.png" width="80px" height="auto">-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="video">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-3 conteiner-youtube">
        <iframe class="conteiner2-youtube2" src="https://www.youtube.com/embed/KqAUnbXGE3I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
      </div>
  </div>
  <!--========================================================-->
  
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
            <img id="featured1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F1.png?alt=media&token=6f11ddc5-1031-42aa-a832-bd97f7754c80" alt="Image Slider1">
            <div class="slider-wrapper1">
                    
              <div id="detail-product1 text-center">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F1.png?alt=media&token=6f11ddc5-1031-42aa-a832-bd97f7754c80" alt="Image Slider1">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F2.png?alt=media&token=06f9c8b4-61dc-493e-8850-7a593c2b9958" alt="Image Slider2">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F3.png?alt=media&token=8e0dda9c-eb0d-4407-a9aa-60b4c98e6ea0" alt="Image Slider3">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F4.png?alt=media&token=6db3d4fc-f3f3-4366-901e-5540e5eeeb82" alt="Image Slider4">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F5.png?alt=media&token=6259fddb-5901-4a19-ab28-616cdd87f526" alt="Image Slider5">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F4.png?alt=media&token=6db3d4fc-f3f3-4366-901e-5540e5eeeb82" alt="Image Slider6">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F6.png?alt=media&token=a2a84ed7-46d5-4f6e-ab06-72b8001b1b89" alt="Image Slider7">
                <img class="thumbnail1" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/about%2F7.png?alt=media&token=45dbd4e9-82af-4139-b9f2-1a33382b8c9d" alt="Image Slider8">
              </div>
            </div>
        </div>
      </div>
    </div>

  
  <!--=======================================================-->
  
              <div class="space"></div>


              <div class="header__menu">
    <a href="https://instagram.com/fsw.universo?r=nametag"><i class="fab fa-instagram"></i></a>
          <ul>
              <p>Sigueme en</p>
              <li><a href="https://instagram.com/fsw.universo?r=nametag">@fsw.universo</a></li>
          </ul>
      </div>

  <div class="gallery-container">
    <div class="gallery-item">
      <img id="gallery-item-index" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/instagram%2Feyelevation-5.jpg?alt=media&token=48003137-9be8-4584-8e44-cbf84a6e0df9">
    </div>
    <div class="gallery-item">
      <img id="gallery-item-index" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/instagram%2Feyelevation-11.jpg?alt=media&token=72da84cc-d7a2-4ddf-a8b2-1d4e6081e16b">
    </div>
    <div class="gallery-item">
      <img id="gallery-item-index" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/instagram%2Feyelevation-8.jpg?alt=media&token=12cff170-59dd-489b-a746-30b00db7774a">
    </div>
    <div class="gallery-item">
      <img id="gallery-item-index" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/instagram%2Feyelevation-6.jpg?alt=media&token=fcc693d8-26b9-462d-907b-40bd100ff947">
    </div>
  </div>



</div>

</div>


<script>
let thumbnail = document.getElementsByClassName('thumbnail1')

let activeImages = document.getElementsByClassName('active1')

for(var i=0; i<thumbnail.length;i++){
  thumbnail[i].addEventListener('mouseover', function(){
    console.log(activeImages)
    if(activeImages.length > 0){
      activeImages[0].classList.remove('active')
    }
    this.classList.add('active1')
    document.getElementById('featured1').src = this.src
  })
}


</script>
  @include('shared.footer')
@endsection