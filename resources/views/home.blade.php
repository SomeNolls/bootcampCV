@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit CV') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">

                    <form action="{{url('home')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <label for="about">About me:</label><br>
                        <input type="text" id="about" name="about" value="{{$fields[0]->text}}"><br>
                        <label for="skills">Skills:</label><br>
                        <input type="text" id="skills" name="skills"  value="{{$fields[1]->text}}"><br>
                        <label for="exp">Experience:</label><br>
                        <input type="text" id="exp" name="exp"  value="{{$fields[2]->text}}"><br>
                        <label for="edu">Education:</label><br>
                        <input type="text" id="edu" name="edu"  value="{{$fields[2]->text}}"><br>
                        <input type="submit" >
                        </form> 
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
