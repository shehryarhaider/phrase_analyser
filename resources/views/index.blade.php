@extends('layouts.master')
@section('content')

<div class="panel panel-primary"  style="margin-top: 100px">
    <div class="panel-heading">
        <h2 class="text-center" style="font-weight: bold">Phrase Analyser</h2>
    </div>
    <div class="panel-body">
        <div class="jumbotron">
            <form action="{{route('analyse_phrase')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <textarea name="phrase" class="form-control" placeholder="Enter String for analyse" required minlength="3" maxlength="255"  rows="5">{{old('phrase') ?? null}}</textarea>
                        <span class="text-danger">{{$errors->first('phrase') ?? null}}</span>    
                    </div>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-large btn-success">Search</button>
                    </span>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection