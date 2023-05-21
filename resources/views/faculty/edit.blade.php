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
              <form action="{{route('faculty.update', $faculty->id)}} " method="POST">
                @csrf
                @method('PUT')
            <div class="db">
              <label
                class="jc un zn gs fb"
                for="firstName"
                >Faculty name</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="nom"
                id="firstName"
                placeholder="Name"
                value="{{ $faculty->nom }}"
              />
            </div>

            <div class="db">
              <label
                class="jc un zn gs fb"
                for="family"
                >Name of wilaya</label
              >
              <select name="university_id"
              class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr">
                @foreach($universities as $university)
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                @endforeach
            </select>
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
