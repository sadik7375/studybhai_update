@extends('admin.admin-panel.main')


@section('content')

    <div>
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
    </div>

    <h4>Edit Course Data</h4>
    <hr>

    <form action="{{ route('course.update', $course->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $course->title }}">

                    @error('title')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="formFile" name="image"
                           class="form-control-file @error('image') is-invalid @enderror">

                    @error('image')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <img src="{{ asset('storage/'.$course->image) }}" alt="" style="width: 200px">
                <hr>

            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description"
                              class="form-control @error('description') is-invalid @enderror">{!!  $course->description !!}</textarea>

                    @error('description')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" id="duration" name="duration"
                           class="form-control @error('duration') is-invalid @enderror"
                           value="{{ $course->duration  }}">

                    @error('duration')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price"
                           class="form-control @error('price') is-invalid @enderror" value="{{ $course->price  }}">

                    @error('price')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="discounted_price">Discounted Price</label>
                    <input type="number" id="discounted_price" name="discounted_price"
                           class="form-control @error('discounted_price') is-invalid @enderror"
                           value="{{ $course->discounted_price }}">

                    @error('discounted_price')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="timeline">Timeline</label>
                    <input type="text" id="timeline" name="timeline"
                           class="form-control @error('timeline') is-invalid @enderror" value="{{ $course->timeline }}">

                    @error('timeline')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="class_starts">Class Starts</label>
                    <input type="text" id="class_starts" name="class_starts"
                           class="form-control @error('class_starts') is-invalid @enderror"
                           value="{{ $course->class_starts }}">

                    @error('class_starts')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="admission_ends">Admission Ends</label>
                    <input type="text" id="admission_ends" name="admission_ends"
                           class="form-control @error('admission_ends') is-invalid @enderror"
                           value="{{ $course->admission_ends }}">

                    @error('admission_ends')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="foundation">Foundation</label>
                    {{--                    <input type="text" id="foundation" name="foundation"--}}
                    {{--                           class="form-control @error('foundation') is-invalid @enderror">--}}

                    {{--                    @error('foundation')--}}
                    {{--                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
                    {{--                    @enderror--}}

                    <textarea id="foundation" name="foundation"
                              class="form-control @error('foundation') is-invalid @enderror">{!! $course->foundation !!}</textarea>

                    @error('foundation')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="intermediate">Intermediate</label>
                    {{--                    <input type="text" id="intermediate" name="intermediate"--}}
                    {{--                           class="form-control @error('intermediate') is-invalid @enderror">--}}

                    {{--                    @error('intermediate')--}}
                    {{--                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
                    {{--                    @enderror--}}

                    <textarea id="intermediate" name="intermediate"
                              class="form-control @error('intermediate') is-invalid @enderror">{!! $course->intermediate !!}</textarea>

                    @error('intermediate')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="advanced">Advanced</label>
                    {{--                    <input type="text" id="advanced" name="advanced"--}}
                    {{--                           class="form-control @error('advanced') is-invalid @enderror">--}}

                    {{--                    @error('advanced')--}}
                    {{--                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
                    {{--                    @enderror--}}

                    <textarea id="advanced" name="advanced"
                              class="form-control @error('advanced') is-invalid @enderror">{!! $course->advanced !!}</textarea>

                    @error('advanced')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="availability">Availability</label>
                    <select id="availability" name="availability"
                            class="form-control @error('availability') is-invalid @enderror">
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>

                    @error('availability')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Add other fields similarly -->
            <div class="col-md-12">
                <input type="submit" value="Update Course" class="btn btn-success">
            </div>

            <br><br><br>

        </div>

        <!-- Add other form sections as needed -->

    </form>

@endsection
