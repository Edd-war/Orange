@extends('layouts.orange')

@section('content')

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10" col-md-push-1 animate-box">
                <h3>Services Management</h3>
                <div>
                    <button class="btn btn-prymary" >New</button>
                </div>
                <table class="table table-default">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>ICON</th>
                        <th>OPTIONS</th>
                    </tr>
                
                    @foreach($services as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <td>{{$item->icon}}</td>
                            <td>{{$item->icon}}</td>
                        </tr>
                    endforeach
                </table>
            </div>
        </div>
    </div>
</div>

