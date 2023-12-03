<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('frontend/pages/dashboard/styles/base.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/pages/dashboard/styles/admin.css')}}">
        <title>Document</title>
      </head>
    <body class="font-sans antialiased">
        
        
                <nav>
                  <div class="logo">
                    <div class="humberger">
                      <div class="line one"></div>
                      <div class="line two"></div>
                      <div class="line three"></div>
                    </div>
                    <h4>ALBAYAN</h4>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <a href="#">
                          <box-icon name="home-alt"></box-icon>
                          <div class="text">Dashboard</div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <box-icon name="bell"></box-icon>
                          <div class="text">Admin</div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                            <box-icon name="bar-chart-alt-2"></box-icon>
                            <div class="text">Teachers</div>
                          </a>
                      </li>
                      <li>
                        <a href="#">
                            <box-icon name="home-alt"></box-icon>
                            <div class="text">students</div>
                          </a>
                      </li>
                    </ul>
                  </div>
                </nav>

                <main class="m-2 p-8">
                    {{ $slot }}
                </main>
            
            </body>
            </html>
            <script src="{{asset('frontend/js/nav.js')}}"></script>
            <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
