
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:34 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings | Taildash - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="{{asset('part/style.css')}}" rel="stylesheet"></head>
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

              <form action="{{ route('admin.updatentrp') }}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $entrp->id }}">

            <div class="db">
              <label
                class="jc un zn gs fb"
                for="firstName"
                >name</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="nomentrp"
                id="firstName"
                placeholder="Name"
                value="{{ $entrp->nomentrp }}"
              />
            </div>
            <div class="db">
                <label
                  class="jc un zn gs fb"
                  for="family"
                  >directeur</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="directeur"
                  id="family"
                  placeholder="family"
                  value="{{ $entrp->directeur }}"
                />
              </div>

             <div class="db">
                <label
                  class="jc un zn gs fb"
                  for="email"
                  >specialite</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="specialite"
                  id="email"
                  placeholder="email"
                  value="{{ $entrp->specialite }}"
                />
              </div>
               <div class="db">
                <label
                  class="jc un zn gs fb"
                  for="email"
                  >adressentrp</label
                >
                <input
                  class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                  type="text"
                  name="adressentrp"
                  id="email"
                  placeholder="password"
                  value="{{ $entrp->adressentrp }}"
                />
              </div>
              <div class="db">
                  <label
                    class="jc un zn gs fb"
                    for="lastName"
                    >Phone Number</label
                  >
                  <input
                    class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                    type="text"
                    name="numtlf"
                    id="lastName"
                    placeholder="Phone Number"
                    value="{{ $entrp->numtlf }}"
                  />
                </div>


                 




            <button
              class="kkkk lc pg qh un eo oj br dl"
              type="submit"
            >
              Update
            </button>

        </form>
        </div>

        <script defer src="{{asset('parts/bundle.js')}}"></script></body>

        <!-- Mirrored from demo.tailgrids.com/templates/taildash/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 14:15:35 GMT -->
        </html>
