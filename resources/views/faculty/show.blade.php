@extends('university.layout')
@section('content')

<form action="{{route('university.update', $university->id)}} " method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label"> {{$university->name}}'</label>
    </div>
    <div class="mb-3">
      <label for="wilaya" class="form-label">{{$university->wilaya}}</label>
    </div>
          </div>
    <button type="submit" class="btn btn-primary">update</button>
  </form>


@endsection
<main class="gv hm hv">
    @if (Session::has('error'))
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
          {{ Session::get('error') }}
      </h5>

    </div>
  </div>



@endif
@if($message = Session:: get('error'))


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
        {{$message}}
      </h5>

    </div>
  </div>
@endif

    <div class="sk bu 2xl:ud-p-11">




      <h2
        class="tn jn zn gs ab"
      >
        Account Information
      </h2>


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








            <form action="{{ route('university.store')}}" method="POST">
                @csrf
            <div class="db">
              <label
                class="jc un zn gs fb"
                for="firstName"
                >University name</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="name"
                id="firstName"
                placeholder="Name"
                value=""
              />
            </div>

            <div class="db">
              <label
                class="jc un zn gs fb"
                for="family"
                >Name of wilaya</label
              >
              <input
                class="kkk nj qh ni bj jr fr ps zn gs il cm zr wr"
                type="text"
                name="wilaya"
                id="family"
                placeholder="Wilaya"
                value=""
              />
            </div>

            <button
              class="kkkk lc pg qh un eo oj br dl"
              type="submit"
            >
              Add Now
            </button>
          </form>
        </div>

        <!-- Setting Card One -->

        <!-- Setting Card Two -->


            {{-- @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
            @endif --}}

          </form>
        </div><br><br>


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
                Customer
              </p>
            </th>
            <th class="ff sl rl">
              <p
                class="gn un zn gs"
              >
                Product
              </p>
            </th>
            <th class="min-w-[160px] sl rl">
              <p
                class="gn un zn gs"
              >
                Order Number
              </p>
            </th>
            <th class="gf sl rl">
              <p
                class="gn un zn gs"
              >
                Date
              </p>
            </th>
            <th class="hf sl rl">
              <p
                class="gn un zn gs"
              >
                Status
              </p>
            </th>
            <th class="if sl tm nm">
              <p
                class="in un zn gs"
              >
                Confirmation
              </p>
            </th>
          </tr>
        </thead>

        <tbody>

            @foreach ($university as $item)
          <tr
            class="vi bj wr"
          >

            <td class="_l rm sm">
              <h5 class="un">{{ $item->name }}</h5>

            </td>

            <td class="_l rl">
              <h5 class="un">{{ $item->wilaya }}</h5>

            </td>

            <td class="_l rl">
                <a href="{{route('university.edit', $item ->id)}}"
                     class="btn btn-success">edit</a>

            </td>

            <td class="_l rl">

                <a href="{{route('university.show', $item ->id)}}"
                 class="btn btn-primary">show</a>

            </td>
            <td class="_l rl">

                <a href="', $item ->id) }}">Edit</a>


            </td>
            <td class="_l tm nm in">

            <form action="{{route('university.destroy', $item ->id)}}" method="POST">
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


        <!-- Setting Card Two -->
      </div>
    </div>
  </main>
