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
              class="yd wt qh ni bj wr nj xr cl"
            >
              <h3
                class="tn jn zn gs ab"
              >
                Account Information
              </h3>

              <form action="{{route('seance.create')}} " method="POST">
                @csrf



            <div class="db" >
              <label
                class="jc un zn gs fb"
                for="firstName"
                >demande_id</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="demande_id"
                id="firstName"
                placeholder="demande_id"
                value=""
              />
            </div>
            <div class="db" style="display:none;">
                <label
                  class="jc un zn gs fb"
                  for="firstName"
                  >Presense</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="Presense"
                  id="firstName"
                  placeholder="Presense"
                  value=""
                />
              </div>

             <div class="db" >
                <label>Date</label>
                    <input
                    class="datetimepicker  kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      name="date" type="text" data-input>
              </div>
              <div class="db">
              <div class="form-group row">

                <label for="example-time-input" class="col-md-2 col-form-label form-control-label">Start</label>
                <div class="col-md-10"><input class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr" name="hentre"
                    type="time" value="10:30:00" id="example-time-input">
                </div>


              </div>
              <div class="db">
                <div class="form-group row">

                  <label for="example-time-input" class="col-md-2 col-form-label form-control-label">End</label>
                  <div class="col-md-10"><input class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr" name="hsorti" type="time" value="10:30:00" id="example-time-input">
                  </div>


                </div>

                <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >observation</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="observation"
                      id="lastName"
                      placeholder="observation"
                      value=""
                    />
                  </div>





            <button
              class="kkkk lc pg qh un eo oj br dl"
              type="submit"
            >
              save
            </button>

        </form>










    </div>
        </div>
        <div class="rh ni bj wr nj xr">
            <div class="nf oh">
              <table class="yd yf rh">
                <thead>
                  <tr
                    class="vi bj wr"
                  >

                    <th class="ff sl rm sm">
                      <p
                        class="gn un zn gs"
                      >
                      Date
                      </p>
                    </th>
                    <th class="ff sl rl">
                      <p
                        class="gn un zn gs"
                      >
                      Start
                      </p>
                    </th>
                    <th class="min-w-[160px] sl rl">
                      <p
                        class="gn un zn gs"
                      >
                      End
                      </p>
                    </th>
                    <th class="gf sl rl">
                      <p
                        class="gn un zn gs"
                      >
                      Observation
                      </p>
                    </th>

                      <th class="if sl tm nm">
                        <p
                          class="in un zn gs"
                        >
                          #
                        </p>
                      </th>
                      <th class="if sl tm nm">
                        <p
                          class="in un zn gs"
                        >
                          #
                        </p>
                      </th>
                  </tr>
                </thead>

                <tbody>

                    @foreach ($seances as $item)
                  <tr
                    class="vi bj wr"
                  >







                  <td class="_l rl">
                    <h5 class="un">{{ $item->etudiant_id }}</h5>
                </td>
                <td class="_l rl">
                    <h5 class="un">{{ $item->presence }}</h5>
                </td>

                    <td class="_l rl">
                        <h5 class="un">{{ $item->date }}</h5>
                    </td>
                    <td class="_l rl">
                        <h5 class="un">{{ $item->hentre }}</h5>
                    </td>
                    <td class="_l rl">
                        <h5 class="un">{{ $item->hsorti }}</h5>
                    </td>
                    <td class="_l rl">
                        <h5 class="un">{{ $item->observation }}</h5>
                    </td>


                    <td class="_l rl">
                        <a href=""
                            class="btn btn-success">edit</a>

                    </td>



                    <td class="_l tm nm in">



                <form action="{{route('seance.destroy', $item ->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <button
                        type="submit"
                        class="nc mg pg sh ni ej ol rl un _n qq _q gp dp"
                      >
                        Delete
                      </button>
                    </form>

                    </td>

                </tr>
                @endforeach


                </tbody>
              </table>
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

        <script defer src="{{asset('parts/bundle.js')}}"></script></body>

        <!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:35 GMT -->
        </html>
