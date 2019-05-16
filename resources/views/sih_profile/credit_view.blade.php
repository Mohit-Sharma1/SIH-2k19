@extends('layouts.default')

@section('page_title', 'Credits')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="block p-4">
                <div class="push">
                    <a  href="{{url('/profile/credits/add')}}">
                    <button type="button" class="btn btn-rounded btn-success btn-noborder">
                        <i class="fa fa-plus mx-5"></i>
                        <span class="d-none d-sm-inline">Add Info</span>
                    </button>
                    </a>
                    <button type="button" class="btn btn-rounded btn-warning btn-noborder float-right"  data-toggle="modal" data-target="#credit-information">
                        <i class="fa fa-book mx-5"></i>
                        <span class="d-none d-sm-inline">Information</span>
                    </button>
                </div>
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>Ttile</th>
                            <th class="d-none d-sm-table-cell" style="width: 70%;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-w600">Education</td>
                            <td class="d-none d-sm-table-cell">Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum </td>
                        </tr>
                        <tr>
                            <td class="font-w600">1st Position in SIH 2019</td>
                            <td class="d-none d-sm-table-cell">Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum Lorium Ipsum </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- INFORMATION Pop Out Modal -->
    <div class="modal fade" id="credit-information" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Credits Information</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>
                                Our system uses uses credit based ranking to rank your startup/corporate. To achieve more credits you can add your awards, achievements, executive <i>(CEO, Founders etc)</i> details along with one document <i>(in PDF format)</i>.<br /><br />
                                Once verified you will be able to see the credit in <i>credits</i> section and your profile will better ranking.
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- INFORMATION Pop Out Modal -->
@endsection