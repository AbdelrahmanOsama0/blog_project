<div class="services_section layout_padding">
</script>
    @include('admin.css')

    <style type="text/css">


    .services_img
    {
      height:500px;
      width: 1000;
    }
</style>
   
         <div class="container">
            <h1 class="services_taital"> Blog Posts </h1>
            <p class="services_text"> "Dive into a world of inspiration with our latest blog post! 📖✨ </p>
            <div class="services_section_2">
               <div class="row">

               @foreach($post as $post)
                  <div class="col-md-4">
                     <div><img  src="/postimage/{{$post->image}}" class="services_img"></div><br>
                     <h4>title:{{$post->title}}</h4><br>
                     <p>post by: <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a href="{{url('post_detalis',$post->id)}}">Read More</a></div>
                  </div>
                  @endforeach
                  
                  
               </div>
            </div>
         </div>
      </div>