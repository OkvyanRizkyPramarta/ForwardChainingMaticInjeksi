@extends('layouts.guest.master')

<style>
ul{padding:0; margin:0; list-style:none}
a{text-decoration:none; color:#666}
a:hover{color:#272727}
#contentbody{display:inline; padding:65px 0 22px; width:100%}
.leftbar_content{float:left; display:inline; width:100%; min-height:200px}
.leftbar_content > h2{background:none repeat scroll 0 0 white; border-bottom:1px solid #e3e3e3; border-top:1px solid #e3e3e3; font-size:16px; font-weight:bold; margin:0 0 25px; padding:5px 25px; line-height:32px}
.single_stuff{float:left; display:inline; width:100%; padding:0 15px; margin-bottom:30px}
.single_stuff_img{float:left; display:inline; width:100%}
.single_stuff_img a{display:block; -webkit-transition:all 0.5s; -o-transition:all 0.5s; transition:all 0.5s}
.single_stuff_img img{max-width:100%}
.single_stuff_article{float:left; display:inline; width:100%; background-color:#fff; border-bottom:1px solid #bebebd; border-left:1px solid #e3e3e3; border-right:1px solid #bebebd}
.single_sarticle_inner{background-color:#fff; display:inline; float:left; margin:-60px 20px 0; padding:10px 20px; width:auto}
.stuff_category{color:#444; display:inline-block; font-size:10px; outline:medium none; text-decoration:none; text-transform:uppercase}
.stuff_article_inner{float:left; display:inline; width:100%}
.stuff_date{background-color:#ffd62c; border-radius:3px; color:#fff; float:left; font-size:14px; margin:10px 15px 0 0; padding:5px 8px; text-align:center; width:56px}
.stuff_date strong{font-size:20px}
.stuff_article_inner h2{font-size:24px; line-height:1.5em; margin:0; padding:5px 0 0}
.stuff_article_inner h2 > a{color:#444}
.stuff_article_inner p{line-height:1.5em; padding:10px 0}
.middlebar_content{float:left; display:inline; width:126%; background-color:#fff; min-height:200px}
.middlebar_content > h2{float:left; width:100%; border-bottom:1px solid #e3e3e3; border-top:1px solid #e3e3e3; color:#fff; font-size:16px; font-weight:bold; margin:0; padding:5px 25px; line-height:32px}
.rightbar_content{float:right; display:inline; width:87%; min-height:200px}
.rightbar_content > h2{background:none repeat scroll 0 0 white; border-bottom:1px solid #e3e3e3; border-top:1px solid #e3e3e3; font-size:16px; font-weight:bold; margin:0 0 25px; padding:5px 25px; line-height:32px}
.stuffpost_paginatinonarea{display:inline; float:left; padding:0 15px; width:100%}
.newstuff_pagnav{text-align:left}
.newstuff_pagnav li{display:inline-block}
.newstuff_pagnav li a{display:inline-block; background:none repeat scroll 0 0 #333; border-radius:5px; color:white; margin:0 2px 0 0; padding:10px 15px; -webkit-transition:all 0.5s; -o-transition:all 0.5s; transition:all 0.5s}
.newstuff_pagnav li a:hover, .newstuff_pagnav li a:focus, .newstuff_pagnav li a.active_page{background-color:#ffd62c; outline:none}
.middlebar_content_inner{border-left:1px solid #bebebd; border-right:1px solid #bebebd; display:inline; float:left; padding:25px 15px 20px; width:100%}
.middlebar_nav{padding:0; margin:0}
.middlebar_nav li{display:block; float:left; margin-bottom:15px; width:100%}
.mbar_thubnail{display:block; float:left; height:auto; margin-right:10px; width:30%}
.mbar_thubnail > img{max-width:100%}
.mbar_title{color:#666; display:inline-block; float:left; font-size:15px; margin-top:5px; width:65%}
.single_blog_sidebar{float:left; display:inline; width:100%; padding:0 25px}
.single_blog_sidebar > h2{background:none repeat scroll 0 0 white; border-bottom:1px solid #e3e3e3; border-top:1px solid #e3e3e3; font-size:16px; font-weight:bold; line-height:32px; margin:0 0 25px -25px; padding:5px 25px; width:116%}
.featured_nav{}
.featured_nav li{float:left; width:100%; background-color:#fff; padding-bottom:32px; border-left:1px solid #bebebd; border-right:1px solid #bebebd; border-bottom:1px solid #bebebd; margin-bottom:36px}
.featured_img{display:block}
.featured_img img{max-width:100%}
.featured_title{background:none repeat scroll 0 0 white; margin:0 15px; position:relative}
.featured_title > a{display:block; background-color:#fff; margin-top:-30px; padding:20px 15px 10px}
.topadd_place{float:left; display:inline; width:100%; text-align:center}
.topadd_place > a{display:inline-block; width:728px}
.topadd_place > a img{width:100%}
.poplr_tagnav{}
.poplr_tagnav li{}
.poplr_tagnav li a{background-color:#fff; color:#bbb7b7; display:inline-block; float:left; margin-bottom:10px; margin-right:5px; padding:6px 12px; -webkit-transition:all 0.5s; -o-transition:all 0.5s; transition:all 0.5s}
.poplr_tagnav li a:hover{background-color:#ffd62c; color:#fff; text-decoration:none}
</style>

<link rel="stylesheet" href="{{ asset('guest/assets/css/bootstrap.min.css') }}">

@section('content')

<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-8 col-lg-8">
        <div class="row">
          <div class="leftbar_content">
            <h2>Detail Informasi</h2>
            <div class="single_stuff wow fadeInDown">
              <div class="single_stuff_img"> <a href="pages/single.html"><img src="{{asset('storage/'.$article->image)}}" alt=""></a> </div>
                <div class="single_sarticle_inner"> <a class="stuff_category" href="#">{{ $article->writer }} / {{ $article->created_at }}</a>
                  <div class="stuff_article_inner">
                    <h2><a href="pages/single.html">{{ $article->title }}</a></h2>
                    <p>{!! $article->description !!}</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="row">
          <div class="rightbar_content">
            <div class="single_blog_sidebar wow fadeInUp">
              <h2>Informasi Terbaru</h2>
              @foreach($newarticle as $a)
              <ul class="middlebar_nav wow">
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="{{asset('storage/'.$a->image)}}"></a> <a href="{{ route('guest.article.detail', $a->id) }}" class="mbar_title">{{ $a->title }}</a> </li>
              </ul>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
@endsection