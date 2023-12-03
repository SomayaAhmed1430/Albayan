<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/base.css') }}" /> {{--../styles/base.css--}}
    <link rel="stylesheet" href="{{ asset('frontend/styles/home.css') }}" /> {{--../styles/home.css--}}
    <title>Albayan | Home</title>
  </head>

<body class="antialiased">

        <nav>
          <a href="#" class="logo">
            <img src="{{asset('frontend/images/big logo.svg')}}" alt="" /> {{--../images/big logo.svg--}}
          </a>
          <div class="links">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#programs">Programs</a>
              </li>
              <li>
                <a href="#">About us</a>
              </li>
              <li>
                <a href="#">Contacts</a>
              </li>
              @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->user_type === 'admin')
                            <li>
                                                            <a href="{{ route('admin.dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            </li>
                        @elseif (Auth::user()->user_type === 'teacher')
                            <li>
                                                            <a href="{{ route('teacher.dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            </li>
                        @elseif (Auth::user()->user_type === 'student')
                            <li>
                                                            <a href="{{ route('student.dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            </li>
                        @endif
                    @else
                        <li>                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a></li>
    
                        @if (Route::has('register'))
                            <li>                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
            @endif
            </ul>
          </div>
          <div class="humberger"></div>
        </nav>
        <!-- nav bar  -->
    
        <div class="container">
          <div class="section1">
            <div class="text">
              <h1>
                Albayan Online <br />
                Tutoring Academy
              </h1>
              <p>
                Your Own Personal Teacher Live Online Classes Arabic Language, Quran
                Reading And Memorization, And Islamic Studies From The Comfort And
                Safety Of Your Home.
              </p>
              <a href="#">Want to enroll today</a>
            </div>
            <div class="image">
              <img src="{{asset('frontend/images/Asset 11.svg')}}" alt="" /> {{--../images/Asset 11.svg--}}
            </div>
          </div>
          <!-- section one  -->
    
          <div class="section2">
            <h3>Who we are ?</h3>
            <p>
              Albayan academy is an online platform for learning Arabic and Qura'n
              for non-Arabic speakers, We have a wide variety of well experienced
              native Arabic speakers at high level of expertise in teaching, You can
              customize your learning plan according to your own pace and time, Also
              we have special offers for siblings and groups of friends.
            </p>
          </div>
          <!-- section two  -->
    
          <div class="section3">
            <div class="header">
              <h2>Our study and teaching advantages</h2>
            </div>
            <div class="content">
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/teachers.svg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Professional Teachers</h4>
                  <p>
                    Certified and Professional teachers (Ustadah) Hafiz with Ijaza
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/circle.svg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Study Circle</h4>
                  <p>
                    Establish a weekly Quran study circle (Halaqah) with your family
                    and friends
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/one on one.svg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>One-on-One</h4>
                  <p>Modern fun learning in One-on-One classes designed for kids</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/tutorials.svg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Articles & Videos</h4>
                  <p>
                    Religious educational articles and video tutorials in Tawheed,
                    Fiqh and Aqeedah
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- section3  -->
    
          <div class="section4" id="programs">
            <div class="header">
              <h2>Our programs</h2>
            </div>
            <div class="content">
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/tafseer.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Quran Hafiz Ijaza Program</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/learn.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Quran Hifz Program</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/tajweed.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Qur'an Tajweed</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/khatma.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Quran Khatma</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/Learning-Arabic-1.webp')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Native Arabic Speakers</h4>
                  <p>Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="more">
              <a href="programs.html">See All Programs</a>
            </div>
          </div>
          <!-- section 4  -->
    
          <div class="section5">
            <div class="header">
              <h2>Most readed articals</h2>
            </div>
            <div class="content">
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Title of artical goes here</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    delectus at praesentium minus a itaque sint explicabo qui quae
                    accusantium.
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Title of artical goes here</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    delectus at praesentium minus a itaque sint explicabo qui quae
                    accusantium.
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>Title of artical goes here</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    delectus at praesentium minus a itaque sint explicabo qui quae
                    accusantium.
                  </p>
                </div>
              </div>
            </div>
            <div class="more">
              <a href="articals.html">See All Articals</a>
            </div>
          </div>
          <!-- section5 -->
    
          <div class="section6">
            <div class="header">
              <h2>Our happy clients</h2>
            </div>
            <div class="content">
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>somaya ahmed</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis earum delectus dignissimos quam dolores voluptates
                    voluptas, tempore veritatis reprehenderit tempora? Laborum
                    reprehenderit voluptatem maxime a iste voluptate rem alias
                    perferendis!
                  </p>
                  <p>2/4/2004</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>somaya ahmed</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis earum delectus dignissimos quam dolores voluptates
                    voluptas, tempore veritatis reprehenderit tempora? Laborum
                    reprehenderit voluptatem maxime a iste voluptate rem alias
                    perferendis!
                  </p>
                  <p>2/4/2004</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>somaya ahmed</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis earum delectus dignissimos quam dolores voluptates
                    voluptas, tempore veritatis reprehenderit tempora? Laborum
                    reprehenderit voluptatem maxime a iste voluptate rem alias
                    perferendis!
                  </p>
                  <p>2/4/2004</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>somaya ahmed</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis earum delectus dignissimos quam dolores voluptates
                    voluptas, tempore veritatis reprehenderit tempora? Laborum
                    reprehenderit voluptatem maxime a iste voluptate rem alias
                    perferendis!
                  </p>
                  <p>2/4/2004</p>
                </div>
              </div>
              <div class="card">
                <div class="image">
                  <img src="{{asset('frontend/images/blured.jpg')}}" alt="" />
                </div>
                <div class="text">
                  <h4>somaya ahmed</h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis earum delectus dignissimos quam dolores voluptates
                    voluptas, tempore veritatis reprehenderit tempora? Laborum
                    reprehenderit voluptatem maxime a iste voluptate rem alias
                    perferendis!
                  </p>
                  <p>2/4/2004</p>
                </div>
              </div>
            </div>
          </div>
          <!-- section 6 -->
    
          <div class="section7">
            <div class="content">
              <h1>
                Have any question <br />
                tell us all the things.
              </h1>
              <form action="">
                <input type="text" name="name" placeholder="Enter your name" />
                <input type="email" name="email" placeholder="Enter your email" />
                <textarea
                  name="message"
                  placeholder="Enter your message here"
                ></textarea>
                <button>Send</button>
              </form>
            </div>
          </div>
        </div>
    
        <!-- container  -->
    
        <footer>
          <div class="content">
            <div class="logo">
              <a href="#"> <img src="{{asset('frontend/images/big logo.svg')}}" alt="" /> </a>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi
                corporis quos, illo molestias iure earum atque tempore,
              </p>
              <p>CopyRights &copy; reviced</p>
            </div>
            <ul>
              <li><h4>Site links</h4></li>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Programs</a>
              </li>
              <li>
                <a href="#">About us</a>
              </li>
              <!-- <li>
                <a href="#">Contacts</a>
              </li> -->
              <li>
                <a href="#">Signup</a>
              </li>
              <li>
                <a href="#">login</a>
              </li>
            </ul>
            <ul>
              <li><h4>Socail Network</h4></li>
              <li>
                <a href="#"
                  ><box-icon type="logo" name="facebook"></box-icon>Facebook</a
                >
              </li>
              <li>
                <a href="#"
                  ><box-icon name="instagram" type="logo"></box-icon>Instagram</a
                >
              </li>
              <li>
                <a href="#"
                  ><box-icon name="whatsapp" type="logo"></box-icon>WhatsApp</a
                >
              </li>
              <li>
                <a href="#"><box-icon name="envelope"></box-icon>Mail</a>
              </li>
            </ul>
          </div>
        </footer>
      

</body>

</html>
