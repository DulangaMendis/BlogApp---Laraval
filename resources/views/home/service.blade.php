<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Posts </h1>
               <div class="row">
                  @foreach($post as $post)
                  <div class="col-md-4">
                     <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                     <h4>{{$post->title}}</b></h4>
                     <p><b>{{$post->description}}</b></p>
                     <div class="btn_main"><a href="#">Read More</a></div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>