@extends('layouts.master')
@section('content')

<div class="panel panel-primary"  style="margin-top: 100px">
    <div class="panel-heading">
        <h2 class="text-center" style="font-weight: bold">Phrase Analyser</h2>
    </div>
    <div class="panel-body">
        <h3 class="col-md-12">Phrase: "{{$title}}"</h3>
        <br>
        <hr>
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead  class="table-dark">
                    <tr>
                        <th>Symbol</th>
                        <th>Duplicate</th>
                        <th>Before</th>
                        <th>After</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($analyse as $key=>$value)
                        <tr>
                            <td>{{$key}}</td>
                            <td>{{$value['repeat']}}</td>
                            <td>{{$value['before']}}</td>
                            <td>{{$value['after']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
            <div class="well shadow" style="background-color: none;">
                <header class="w3-container" style="">
                    <h3 class="text-center header"><b><i class="fa fa-line-chart"></i>General Stats</b></h3>
                </header>
                <div class="w3-container">
                    <div class="row" style="">
                        @foreach ($analyse as $key=>$value)

                            <div class="col-md-12 col-sm-12 col-lg-12 progressbar">
                                <div class="col-md-2 col-sm-2 col-lg-2">
                                    <div class="pull-right">{{$key}} </div>
                                </div>
                                <div class="col-md-10 col-sm-10 col-lg-10">
                                    <div class="bggray">
                                        <div class="w3-container w3-center w3-padding bggray" style="width:{{$value['repeat'] * 5}}%;float:left;height:30px;color:white; background-color:white;"></div>
        
                                        <div role="progressbar" class="progress-bar progress-bar-@if($value['repeat'] == 1)warning @elseif ($value['repeat'] > 1 && $value['repeat'] < 4){{'primary'}}@else{{'success'}} @endif progress-bar-striped active" style="margin-bottom:5px; height:30px; width:{{$value['repeat'] * 5}}%;overflow:hidden;">{{$value['repeat']}}%</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
    
        </div>
        <div class="col-md-12"> <a href="{{route('home')}}" class="btn btn-success">Check Again</a></div>
    </div>
</div>

@endsection