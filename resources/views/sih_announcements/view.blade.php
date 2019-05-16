@extends('layouts.default')

@section('page_title', 'Announcements')

@section('content')
    <div class="row" style="background-color: white;">
        <div class="col-12">
            <div class="block p-4">
                @hasrole('admin')
                <div class="push">
                    <a  href="{{url('/announcements/create')}}">
                    <button type="button" class="btn btn-rounded btn-success btn-noborder">
                        <i class="fa fa-plus mx-5"></i>
                        <span class="d-none d-sm-inline">Create</span>
                    </button>
                    </a>
                </div>
                @endhasrole
                <div class="block-content">
                    <table class="table table-hover table-vcenter table-striped">
                        <thead>
                            <tr>
                                <th>Ttile</th>
                                <th>Description</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($announcements as $announcement)
                            <tr class="">
                                <td class="font-w600" style="width: 33%;">
                                {{$announcement['title']}}
                                </td>
                                <td>
                                    <div class="text-muted mt-5">{{$announcement['description']}}</div>
                                </td>
                                <td class="d-xl-table-cell font-w600 font-size-sm text-muted" style="width: 20%;">{{$announcement['created_at']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection