@extends('web.layouts.template')

@section('title','Home')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
      rel="stylesheet"
    />

    <title>投稿の詳細</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/web/css/bootstrap.min.css')}}"rel="stylesheet" >
    {{-- <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}"> --}}
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/themify-icons/themify-icons.css')}}">
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"
            ><h2>AKARI<em>.</em></h2></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Food</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Entertainment</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="post-details.html">Travel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <!-- <h4>投稿の詳細 </h4> -->
                <!-- <h2>Single blog post</h2> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img
                        src="{{asset('assets/web/images/'.$post['image'])}}"
                        alt=""
                      />
                    </div>
                    <div class="down-content">
                      <span>食物</span>
                      <a href="{{ route('web.postdetail', $post->id) }}"
                        ><h4>{{ $post['name']}}</h4></a
                      >
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">{{$post->created_at}}</a></li>
                            <li><a href="#">{{ $post->comment->count() }} Comments</a></li>
                          </ul>
                        </div>
                        <div class="col-6">
                          <ul class="post-share">
                            @if(Auth::check())
                              @if($post->is_liked_by_auth_user())
                                <li><a href="{{ route('web.postdetail.unlike', ['id' => $post->id]) }}" class="" style="color:rgb(244, 64, 64)"><b>Unlike</b><span class = "badge">{{ $post->like->count() }}</span></a></li>                                
                              @else
                                <li><a href="{{ route('web.postdetail.like', ['id' => $post->id]) }}" class="" style="color:rgb(244, 136, 64)"><b>Like</b><span class = "badge">{{ $post->like->count() }}</span></a></li>
                              @endif
                            @else
                            <li><a class="" style="color:rgb(244, 136, 64)"><b>Like</b><span class = "badge">{{ $post->like->count() }}</span></a></li>
                            @endif
                          </ul>
                        </div>
                      </div>
                      <p>
                        {{ $post['content']}}
                      </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <i class="ti-heart"> 230</i>

                  <i class="ti-eye"> 560</i>

                  <i class="ti-thumb-up"> 2000</i>

                  <i class="ti-save"></i>
                  <i class="ti-more"></i>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>コメント4件</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @if (count($post->comment)>0)
                          @foreach ($post->comment as $cm)
                            <li>
                              <div class="author-thumb">
                                <img
                                    src={{asset('assets/web/images/'.$cm->user->image)}}
                                  alt=""
                                />
                              </div>
                              <div class="right-content">
                                <h4 target="_blank"> <a href="{{ route('web.viewinfo',['id' => $cm->user['id']]) }}"> {{ $cm->user->name }} </a> <span>May 16, 2020</span></h4>
                                <p>
                                  {{$cm->content}}
                                </p>
                              </div>
                            </li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  @if (Auth::check())
                  <div class="sidebar-item submit-comment">
                    @if(session('メッセージ'))
                      {{session('メッセージ')}}
                    @endif
                    <div class="sidebar-heading">
                      <h2>あなたのコメント</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action= "{{ route('web.postdetail.addcomment', ['id' => $post->id]) }}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            @php  
                                $user = \App\Models\User::find(Auth::user()->id);
                            @endphp
                            <fieldset>
                              <div class="sidebar-heading">
                                <h3> {{ $user->name }} </h3>
                              </div>
                            </fieldset>
                          </div>
                          <input type = "hidden" name ="_token" value="{{csrf_token()}}" />
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea
                                name="content"
                                rows="6"
                                placeholder="コメントを入力してください"
                                required=""
                              ></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button
                                type="submit"
                                class="main-button"
                              >
                                Enter
                              </button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input
                        type="text"
                        name="q"
                        class="searchText"
                        placeholder="type to search..."
                        autocomplete="on"
                      />
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>最近の投稿</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @if (count($posts)>0)
                          @foreach ($posts as $item)
                            <li>
                              <a href="{{ route('web.postdetail', $item->id) }}">
                                <img
                                src={{asset('assets/web/images/'.$item->image)}}
                                  alt=""
                                  width="350" 
                                  height="250"
                                />
                                <h5>
                                  {{ $item['name']}}
                                </h5>
                                <span>May 31, 2020</span>
                              </a>
                            </li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>タグ</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2020 Stand Blog Co. |</p>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}


     {{-- Bootstrap core JavaScript  --}}
    <script src={{asset('assets/web/js/jquery.min.js')}}></script>
    <script src={{asset('assets/web/js/js/bootstrap.bundle.min.js')}}></script>


     {{-- Additional Scripts  --}}
    <script src={{asset('assets/web/js/custom.js')}}></script>
    <script src={{asset('assets/web/js/owl.js')}}></script>
    <script src={{asset('assets/web/js/slick.js')}}></script>
    <script src={{asset('assets/web/js/isotope.js')}}></script>
    <script src={{asset('assets/web/js/accordions.js')}}></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
  </body>
</html>
