@extends('../template/master-landing')
@section('title', 'Landing page')
@section('body')
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 shape-default">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <p class="lead  text-white">Upload file what you want</p>
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger" role="alert">
                        {{ $error }}
                      </div>
                    @endforeach
                @endif
                <form action="{{ url('/student/library/process') }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <select class="form-control" name="course">
                          <option value="">Pribadi</option>
                          @foreach ($course_id as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>  
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
      <section class="section bg-secondary" id="read">
        <div class="container">
          <div class="list-group">
            <h2 class="text-center">Your Files</h2>
              <table>
                <tr align="center">
                  <th>FIles</th>
                  <th>Action</th>
                </tr>
                @foreach ($self_library as $s_library)
                <tr>
                  <td><a href="{{ route('home') }}/{{ $s_library->location }}" class="btn btn-light list-group-item list-group-item-action">{{ $s_library->bname }}</a></td>
                  <td align="center"><a href="{{ url('student/delete/book') }}/{{ $s_library->id }}" class="list-group-item list-group-item-action btn btn-danger ">delete</a></td>
                </tr>
                @endforeach
              </table>
          </div>
          <br>
          <div class="list-group">
            <h2 class="text-center">Shared Teacher Files</h2>
              <table>
                @foreach ($libraries as $library) 
                <tr>
                  <td><a href="{{ route('home') }}/{{ $library->location }}" class="btn btn-light list-group-item list-group-item-action">{{ $library->bname }} - {{$library->cname}}</a></td>
                </tr>
                @endforeach
              </table>
          </div>
        </div>
      </section>
    </div>
  </main>
  @endsection