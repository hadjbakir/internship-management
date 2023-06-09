<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:34 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Taildash - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="{{asset('part/style.css')}}" rel="stylesheet"></head>
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

              <form action="{{route('demande.store')}} " method="POST">
                @csrf



            <div class="db" style="display:none;">
              <label
                class="jc un zn gs fb"
                for="firstName"
                >stage acp</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="stageacp"
                id="firstName"
                placeholder="stageacp"
                value=""
              />
            </div>
            <div class="db" style="display:none;>
                <label
                  class="jc un zn gs fb"
                  for="family"
                  >dep acp</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="depacp"
                  id="family"
                  placeholder="family"
                  value=""
                />
              </div>

             <div class="db">
                <label
                  class="jc un zn gs fb"
                  for="email"
                  >etidiants_id</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="etidiants_id"
                  id="email"
                  placeholder="{{$etidiantid}}"
                  value="{{$etidiantid}}"
                />
              </div>
               <div class="db" >
                <label
                  class="jc un zn gs fb"
                  for="email"
                  >maitrestage_id</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="maitrestage_id"
                  id="email"
                  placeholder="maitrestage_id"
                  value="{{$maitrestage_id}}"
                />
              </div>
              <div class="db">
                  <label
                    class="jc un zn gs fb"
                    for="lastName"
                    >dateinsc</label
                  >
                  <input

                    class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                    type="text"
                    name="dateinsc"
                    id="lastName"
                    placeholder="dateinsc"
                    value="{{$offreElements->first()->datedebut}}"
                    readonly
                  />
                </div>
                <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >datefin</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="datefin"
                      id="lastName"
                      placeholder="datefin"
                      value="{{$offreElements->first()->datefinish}}"
                      readonly
                    />
                  </div>
                <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >diplome</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="diplome"
                      id="lastName"
                      placeholder="diplome"
                      value="{{$offreElements->first()->diplome}}"
                      readonly
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >period</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="period"
                      id="lastName"
                      placeholder="period"
                      value="{{$offreElements->first()->period}}"
                      readonly
                    />
                  </div>

                  <div class="db" style="display: none">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >motif</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="motif"
                      id="lastName"
                      placeholder=""
                      value="motif"
                      readonly
                    />
                  </div>
                  <div class="db">
                    <label
                      class="jc un zn gs fb"
                      for="lastName"
                      >theme</label
                    >
                    <input
                      class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                      type="text"
                      name="theme"
                      id="lastName"
                      placeholder=" theme"
                      value="{{$offreElements->first()->theme}}"
                      readonly
                    />
                  </div>




            <button
              class="kkkk lc pg qh un eo oj br dl"
              type="submit"
            >
              Save
            </button>

        </form>
    </div>
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
    <script defer src="{{asset('parts/bundle.js')}}"></script></body>

    <!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:35 GMT -->
    </html>


{{-- @extends('demande.layout')
@section('content')

<form action="{{route('demande.store')}} " method="POST">
    @csrf
    <div class="mb-3">
      <label for="stageacp" class="form-label"> stage acp</label>
      <input name="stageacp" type="" class="form-control" id="stageacp" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="depacp" class="form-label">  dep acp'</label>
        <input name="depacp" type="" class="form-control" id="depacp" aria-describedby="emailHelp">
      </div>
      <label for="etidiants_id" class="form-label">etidiant_id</label>
      <input name="etidiants_id" type="" class="form-control" id="etidiants_id" aria-describedby="emailHelp">

        <div class="mb-3" style="display: none">
            <label for="maitrestage_id" class="form-label">maitrestage_id</label>
            <input name="maitrestage_id" value="{{ $maitrestage_id }}" type="text" class="form-control" id="maitrestage_id" aria-describedby="emailHelp">
        </div>
      <div class="mb-3">
        <label for="dateinsc" class="form-label"> dateinsc</label>
        <input name="dateinsc" type="text" class="form-control" id="dateinsc" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="diplome" class="form-label"> diplome</label>
        <input name="diplome" type="text" class="form-control" id="diplome" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="dure" class="form-label"> dure</label>
        <input name="dure" type="text" class="form-control" id="dure" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="period" class="form-label"> period</label>
        <input name="period" type="text" class="form-control" id="period" aria-describedby="emailHelp">
      </div>
    <div class="mb-3">
      <label for="motif" class="form-label">motif</label>
      <input name="motif" type="text" class="form-control" id="motif">
    </div>
    <div class="mb-3">
        <label for="theme" class="form-label">theme</label>
        <input name="theme" type="text" class="form-control" id="theme">
      </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>


@endsection
 --}}
