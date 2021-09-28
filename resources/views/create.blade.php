@extends('./student/head')
<body>
    <div class="container mt-3">
        <form action="{{route('student.store')}}" method="post">
            <div class="row">
                <div class="col-xl-8 p-4 m-auto shadow">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-info">Add Student</h5>
                        </div>
                    <div class="card-body">
                    {{-- print success message --}}
                        @if(Session::has('success'))
                        <div class="alert alert-succcess">
                            {{Session::get('success')}}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group"{{$errors->has('first_name')?'has-error':''}}>

                                </div>

                            </div>

                        </div>


                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
