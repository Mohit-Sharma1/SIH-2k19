@extends('layouts.default')

@section('page_title', 'Tags')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="push">
                <button type="button" class="btn btn-rounded btn-success btn-noborder" data-toggle="modal" data-target="#filters" onclick="location.href='{{url('/')}}/tags/create'">
                    <i class="fa fa-plus mx-5"></i>
                    <span class="d-none d-sm-inline">Create</span>
                </button>
            </div>
            <div class="block p-4">
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Ttile</th>
                            <th class="d-none d-sm-table-cell" style="width: 50%;">Description</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td class="font-w600">{{$tag['title']}}</td>
                            <td class="d-none d-sm-table-cell">{{$tag['description']}}</td>
                            <td>{{$tag['created_at']}}</td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="actions">
                                    <button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/tags/{{$tag['id']}}'">
                                        <i class="si si-eye"></i>
                                    </button>
                                    <button type="button" class="btn btn-success" onclick="location.href='{{url('/')}}/tags/edit/{{$tag['id']}}'">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='{{url('/')}}/tags/delete/{{$tag['id']}}'">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection