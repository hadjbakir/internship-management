{{-- @extends('fichenotation.layout')
@section('content')

<form action="{{route('fichenotation.store')}} " method="POST">
    @csrf

    <div class="mb-3">
        <label for="university_id" class="form-label">university name:</label>
        <select name="demande_id" class="form-control">
            @foreach($demande as $demande)
                <option value="{{ $demande->id }}">{{ $demande->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="discipline" class="form-label"> nom de la faculty</label>
        <input name="discipline" type="" class="form-control" id="discipline" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="aptitude" class="form-label"> nom de la faculty</label>
        <input name="aptitude" type="" class="form-control" id="aptitude" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="initiative" class="form-label"> nom de la faculty</label>
        <input name="initiative" type="" class="form-control" id="initiative" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="imagination" class="form-label"> nom de la faculty</label>
        <input name="imagination" type="" class="form-control" id="imagination" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="conaissance" class="form-label"> nom de la faculty</label>
        <input name="conaissance" type="" class="form-control" id="conaissance" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="note" class="form-label"> nom de la faculty</label>
        <input name="note" type="" class="form-control" id="note" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="appreciation" class="form-label"> nom de la faculty</label>
        <input name="appreciation" type="" class="form-control" id="appreciation" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="envoi" class="form-label"> nom de la faculty</label>
        <input name="envoi" type="" class="form-control" id="envoi" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection --}}
{{-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - jQuery Event Calendar</title>
  <link rel="stylesheet" href="{{asset('novpart/src/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Calendar</title>

  <meta name="description" content="Calendar">
  <meta name="author" content="Charles Anderson">
  <link rel="stylesheet" href="{{asset('novpart/dist/style.css')}}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <link href="{{asset('newpart/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('newpart/assets/css/nucleo-svg.css')}}" rel="stylesheet" />

  <script src="{{asset('newpart/kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link id="pagestyle" href="{{asset('newpart/assets/css/material-dashboard.minaf3e.css?v=3.0.6')}}" rel="stylesheet" />

  <style>
      .async-hide {
        opacity: 0 !important
      }
    </style>
  <script>
      (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
          s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
          i();
          h.end = null
        }, c);
        h.timeout = c;
      })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-K9BGS8K': true
      });
    </script>

  <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-46172202-22', 'auto', {
        allowLinker: true
      });
      ga('set', 'anonymizeIp', true);
      ga('require', 'GTM-K9BGS8K');
      ga('require', 'displayfeatures');
      ga('require', 'linker');
      ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>


  <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>



  <script defer data-site="demos.creative-tim.com" src="{{asset('newpart/api.nepcha.com/js/nepcha-analytics.js')}}"></script>
</head>

<body>
  <div class="content">
    <div class="calendar-container">
      <div class="calendar">
        <div class="year-header">
          <span class="left-button" id="prev"> &lang; </span>
          <span class="year" id="label"></span>
          <span class="right-button" id="next"> &rang; </span>
        </div>
        <table class="months-table">
          <tbody>
            <tr class="months-row">
              <td class="month">Jan</td>
              <td class="month">Feb</td>
              <td class="month">Mar</td>
              <td class="month">Apr</td>
              <td class="month">May</td>
              <td class="month">Jun</td>
              <td class="month">Jul</td>
              <td class="month">Aug</td>
              <td class="month">Sep</td>
              <td class="month">Oct</td>
              <td class="month">Nov</td>
              <td class="month">Dec</td>
            </tr>
          </tbody>
        </table>

        <table class="days-table">
          <td class="day">Sun</td>
          <td class="day">Mon</td>
          <td class="day">Tue</td>
          <td class="day">Wed</td>
          <td class="day">Thu</td>
          <td class="day">Fri</td>
          <td class="day">Sat</td>
        </table>
        <div class="frame">
          <table class="dates-table">
              <tbody class="tbody">
              </tbody>
          </table>
        </div>
        <button class="button" id="add-button">Add Seance</button>
      </div>
    </div>
    <div class="events-container">
    </div>
    <div class="dialog" id="dialog">
        <h2 class="dialog-header"> Add New Event </h2>

        <form class="form" id="form">
          <div class="form-container" align="center">
            <label class="form-label" id="valueFromMyButton" for="name">Presence</label>
            <input class="input" type="text" id="name" maxlength="36">
            <label>Start Date</label>
            <input class="form-control datetimepicker" type="text" data-input>
            <label>End Date</label>
            <input class="form-control datetimepicker" type="text" data-input>
            <label class="form-label" id="valueFromMyButton" for="name">observation</label>
            <input class="input" type="text" id="name" maxlength="100">
            <input type="button" value="Cancel" class="button" id="cancel-button">
            <input type="button" value="OK" class="button" id="ok-button">
          </div>
        </form>
      </div>
  </div>
  <!-- Dialog Box-->
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
  <script src="{{asset('novpart/dist/app.js')}}"></script>
  <script src="{{asset('newpart/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/choices.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/quill.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/flatpickr.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/dropzone.min.js')}}"></script>
<script>
    if (document.getElementById('editor')) {
      var quill = new Quill('#editor', {
        theme: 'snow' // Specify theme in configuration
      });
    }

    if (document.getElementById('choices-multiple-remove-button')) {
      var element = document.getElementById('choices-multiple-remove-button');
      const example = new Choices(element, {
        removeItemButton: true
      });

      example.setChoices(
        [{
            value: 'One',
            label: 'Label One',
            disabled: true
          },
          {
            value: 'Two',
            label: 'Label Two',
            selected: true
          },
          {
            value: 'Three',
            label: 'Label Three'
          },
        ],
        'value',
        'label',
        false,
      );
    }

    if (document.querySelector('.datetimepicker')) {
      flatpickr('.datetimepicker', {
        allowInput: true
      }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
      url: "/file/post",
      addRemoveLinks: true

    });
  </script>

<script src="{{asset('newpart/assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/jkanban/jkanban.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="{{asset('newpart/buttons.github.io/buttons.js')}}"></script>

<script src="{{asset('newpart/assets/js/material-dashboard.minaf3e.js?v=3.0.6')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7ca32015cc155233","version":"2023.4.0","r":1,"b":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>
</html>
<!-- partial -->
  <script  src="{{asset('novpart/src/script.js')}}"></script>


</body>
</html>
 --}}
{{-- @extends('seance.layout')
@section('content')

<form action="{{route('seance.store')}} " method="POST">
    @csrf

    <div class="mb-3">
        <label for="demande_id" class="form-label">demande_id</label>
        <input name="demande_id" type="" class="form-control" id="demande_id" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="delai" class="form-label"> delai</label>
        <input name="delai" type="" class="form-control" id="delai" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="date" class="form-label"> date</label>
        <input name="date" type="" class="form-control" id="date" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="hentre" class="form-label"> hentre</label>
        <input name="hentre" type="" class="form-control" id="hentre" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="hsorti" class="form-label"> hsorti</label>
        <input name="hsorti" type="" class="form-control" id="hsorti" aria-describedby="emailHelp">
      </div>    <div class="mb-3">
        <label for="observation" class="form-label"> observation</label>
        <input name="observation" type="" class="form-control" id="observation" aria-describedby="emailHelp">
      </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection --}}

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:34 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Taildash - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="{{asset('part/style.css')}}" rel="stylesheet"></head>


  <script src="{{asset('newpart/kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link id="pagestyle" href="{{asset('newpart/assets/css/material-dashboard.minaf3e.css?v=3.0.6')}}" rel="stylesheet" />


  <script>
      (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() {
          s.className = s.className.replace(RegExp(' ?' + y), '')
        };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
          i();
          h.end = null
        }, c);
        h.timeout = c;
      })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
        'GTM-K9BGS8K': true
      });
    </script>

  <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-46172202-22', 'auto', {
        allowLinker: true
      });
      ga('set', 'anonymizeIp', true);
      ga('require', 'GTM-K9BGS8K');
      ga('require', 'displayfeatures');
      ga('require', 'linker');
      ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>


  <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>



  <script defer data-site="demos.creative-tim.com" src="{{asset('newpart/api.nepcha.com/js/nepcha-analytics.js')}}"></script>
  <body
    x-data="{ page: 'settings', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b yn mj': darkMode === true}"
  >
  @if (Session::has('succes_message'))
        <div
        class="lc w-full rh ui dj qj gk fl gl ro cu"
      >
        <div
          class="cb rc yd lf lc mg pg rh qj"
        >
          <svg
            width="16"
            height="12"
            viewBox="0 0 16 12"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
              fill="white"
              stroke="white"
            ></path>
          </svg>
        </div>
        <div class="yd">
          <h5 class="fb kn tn zn">
              {{ Session::get('succes_message') }}
          </h5>
          <p class="ln xn co">

          </p>
        </div>
      </div>
      @endif
<div
            class="lc kg hg zt yg _b"
          >
            <!-- Setting Card One -->
            <div
              class="yd wtt qh ni bj wr nj xr cl"
            >
              <h3
                class="tn jn zn gs ab"
              >
                Account Information
              </h3>

              <form action="{{route('fichenotation.store')}} " method="POST">
                @csrf


                <div class="db" >
                    <label
                      class="jc un zn gs fb"
                      for="firstName"
                      >DEMANDE</label
                    >
                    <input

                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="demande_id"

                      placeholder="demande_id"
                      value="{{$demandeId}}"
                    />
                  </div>
            <div class="db" >
              <label
                class="jc un zn gs fb"
                for="firstName"
                >Discipline</label
              >
              <input
              id="input1" min="0" max="4"
              oninput="validateInput(this); calculateSum()"
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="number"
                name="discipline"

                placeholder="discipline"
                value=""
              />
            </div>
            <div class="db" >
                <label
                  class="jc un zn gs fb"
                  for="firstName"
                  >Aptitude</label
                >
                <input
                id="input2" min="0" max="4"
                oninput="validateInput(this); calculateSum()"
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="number"
                  name="aptitude"

                  placeholder="aptitude"
                  value=""
                />
              </div>


                <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >Imagination</label
                    >
                    <input
                    id="input3" min="0" max="4"
                    oninput="validateInput(this); calculateSum()"
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="number"
                      name="imagination"

                      placeholder="imagination"
                      value=""
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >conaissance</label
                    >
                    <input
                    id="input4" min="0" max="4"
                    oninput="validateInput(this); calculateSum()"
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="number"
                      name="conaissance"

                      placeholder="conaissance"
                      value=""
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >initiative</label
                    >
                    <input
                    id="input5"  min="0" max="4"
                     oninput="validateInput(this); calculateSum()"
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="number"
                      name="initiative"

                      placeholder="initiative"
                      value=""
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >note</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="note"
                      id="note" readonly
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >Appreciation</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="appreciation"
                      id="lastName"
                      placeholder="appreciation"
                      value=""
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >envoi</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="envoi"
                      id="lastName"
                      placeholder="envoi"
                      value=""
                    />
                  </div>
                  {{-- <div class="db" >
                    <label>Date</label>
                        <input
                        class="datetimepicker  kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                         class="form-control datetimepicker" name="date" type="text" data-input>
                  </div> --}}

            <button
              class="kkkk lc pg qh un eo oj br dl"
              type="submit"
            >
              save
            </button>

        </form>










    </div>
        </div>

        <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
  <script src="{{asset('novpart/dist/app.js')}}"></script>
  <script src="{{asset('newpart/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/choices.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/quill.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/flatpickr.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/dropzone.min.js')}}"></script>
<script>
    if (document.getElementById('editor')) {
      var quill = new Quill('#editor', {
        theme: 'snow' // Specify theme in configuration
      });
    }

    if (document.getElementById('choices-multiple-remove-button')) {
      var element = document.getElementById('choices-multiple-remove-button');
      const example = new Choices(element, {
        removeItemButton: true
      });

      example.setChoices(
        [{
            value: 'One',
            label: 'Label One',
            disabled: true
          },
          {
            value: 'Two',
            label: 'Label Two',
            selected: true
          },
          {
            value: 'Three',
            label: 'Label Three'
          },
        ],
        'value',
        'label',
        false,
      );
    }

    if (document.querySelector('.datetimepicker')) {
      flatpickr('.datetimepicker', {
        allowInput: true
      }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
      url: "/file/post",
      addRemoveLinks: true

    });
  </script>

<script src="{{asset('newpart/assets/js/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{asset('newpart/assets/js/plugins/jkanban/jkanban.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script async defer src="{{asset('newpart/buttons.github.io/buttons.js')}}"></script>

<script src="{{asset('newpart/assets/js/material-dashboard.minaf3e.js?v=3.0.6')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7ca32015cc155233","version":"2023.4.0","r":1,"b":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>

        <script defer src="{{asset('parts/bundle.js')}}"></script>
        <script>
   function validateInput(input) {
    const value = parseInt(input.value);
    const isValid = !isNaN(value) && value >= 0 && value <= 4;

    if (isValid) {
      input.style.border = '1px solid black';
      input.removeAttribute('placeholder');
    } else {
      input.style.border = '1px solid red';
      input.placeholder = 'Please enter a number between 0 and 4';
      input.value = ''; // Remove invalid value
      calculateSum();
    }
  }

  function calculateSum() {
    const input1 = parseInt(document.getElementById('input1').value) || 0;
    const input2 = parseInt(document.getElementById('input2').value) || 0;
    const input3 = parseInt(document.getElementById('input3').value) || 0;
    const input4 = parseInt(document.getElementById('input4').value) || 0;
    const input5 = parseInt(document.getElementById('input5').value) || 0;

    const sum = input1 + input2 + input3 + input4 + input5;

    document.getElementById('note').value = sum;
  }
            </script>

            <style>
            input[type="number"] {
              border: 1px solid #ccc;
              transition: border-color 0.3s ease-in-out;
            }
            </style>
    </body>

        <!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:35 GMT -->
        </html>
