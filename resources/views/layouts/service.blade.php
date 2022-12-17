<!--=================================
read more -->
<style>
    .boximage{
        width:1200px;
        position:relative;
        overflow: hidden;
    }
    #list-image{
        width: 1080px;
        height:340px;
        overflow: hidden;
        display:flex;
        position: relative;
    }

    #listimg{
        display:block;
        list-style: none;
        /*height:100%;*/
        wodth:100%;
        padding-right:20px
    }
    li img{
        width: 360px;
        height: 240px;
        object-fit:cover;
        object-position: center;
    }

    @media (max-width:600px){
        li img{
            width: 260px;
            height: 140px;
            object-fit:cover;
            object-position: center;
        }
    }
</style>
<section class="page-section-ptb">
  <div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-8">
      <div class="section-title text-center">
          <!--<h2 class="title-effect">Sevices</h2>-->
          </div>
      </div>
  </div>
{{--  <div class="row">--}}
{{--      <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--          <img class="img-fluid" src="{{ asset('images/services/1- When I grow up I want to be a Doctor.jpg') }}" alt="">--}}
{{--          <h4 class="mt-20 text-center">When I grow up I want to be a Doctor</h4>--}}
{{--           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--      </div>--}}
{{--      <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--          <img class="img-fluid" src="{{ asset('images/services/2-When-I-grow-up-I-want-to-be-Entrepreneur.jpg') }}" alt="">--}}
{{--          <h4 class="mt-20 text-center">When I grow up I want to be an Entrepreneur</h4>--}}
{{--           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--      </div>--}}
{{--      <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--        <img class="img-fluid" src="{{ asset('images/services/3-When-I-grow-up-I-want-to-be-a-Journalist.jpg') }}" alt="">--}}
{{--        <h4 class="mt-20 text-center">When I grow up I want to be a Journalist</h4>--}}
{{--         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--     </div>--}}

{{--  </div>--}}

    <div class="row">
{{--        <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--            <img class="img-fluid" src="" alt="" id="oimg">--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--            <img class="img-fluid" src="" alt="" id="oimg1">--}}
{{--        </div>--}}
{{--        <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-40">--}}
{{--            <img class="img-fluid" src="" alt="" id="oimg2">--}}
{{--        </div>--}}
        <div class="boximage">
            <ul id="list-image">
                <li id="listimg"><img src="images/services/1- When I grow up I want to be a Doctor.jpg" alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be a Doctor</h4></li>
                <li id="listimg"><img src="images/services/2-When-I-grow-up-I-want-to-be-Entrepreneur.jpg" alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be an Entrepreneur</h4></li>
                <li id="listimg"><img src="images/services/3-When-I-grow-up-I-want-to-be-a-Journalist.jpg" alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be a Journalist</h4></li>
                <li id="listimg"><img src="images/services/4- When I grow up I want to be a Builder.png"alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be a Builder</h4></li>
                <li id="listimg"><img src="images/services/5- When I grow up I want to be a Graphic Designer.png" alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be a Graphic Designer</h4></li>
                <li id="listimg"><img src="images/services/6- When I grow up I want to be a Writer.png" alt="">
                    <h4 class="mt-20 text-center">When I grow up I want to be a Writer</h4></li>
            </ul>
        </div>
    </div>
  </div>
</section>
<script>
    // let imgs = [
    //     'images/services/1- When I grow up I want to be a Doctor.jpg',
    //     'images/services/2-When-I-grow-up-I-want-to-be-Entrepreneur.jpg',
    //     'images/services/3-When-I-grow-up-I-want-to-be-a-Journalist.jpg',
    //     'images/services/4- When I grow up I want to be a Builder.png',
    //     'images/services/5- When I grow up I want to be a Graphic Designer.png',
    //     'images/services/6- When I grow up I want to be a Writer.png',
    // ]
    //
    // let oImg = document.getElementById("oimg")
    // let oImg1 = document.getElementById("oimg1")
    // let oImg2 = document.getElementById("oimg2")
    // let index= 0
    //
    // setInterval( function(){
    //     index+=3
    //     if(index>=imgs.length){
    //         index=0
    //     }
    //     oImg.src = imgs[index]
    //     oImg1.src = imgs[index+1]
    //     oImg2.src = imgs[index+2]
    // },4000)

    let ul =document.querySelector('#list-image')
    ul.innerHTML =ul.innerHTML+ul.innerHTML;
    let lis = document.querySelectorAll('#listimg')

    let spa = -1.5;

    ul.style.width=lis[0].offsetWidth*lis.length+'px'

    function move(){
        if(ul.offsetLeft < -ul.offsetWidth/2){
            ul.style.left='0';
        }
        if(ul.offsetLeft > 0 ){
            ul.style.left=-ul.offsetWidth/2+'px'
        }
        ul.style.left=ul.offsetLeft+spa+'px';
    }

    let timer = setInterval(move,50);

    ul.addEventListener('mousemove',function(){
        clearInterval(timer)
    })
    ul.addEventListener('mouseleave',function(){
        timer = setInterval(move,50)
    })
</script>

  <!--=================================
  read more -->
