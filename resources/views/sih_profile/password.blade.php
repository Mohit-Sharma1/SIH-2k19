@extends('layouts.default')

@section('page_title', 'Update Password')

@section('content')
    <div class="row">
        <div class="col-12">
            <form>
            <div class="block p-4 text-center">
                <center>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <label for="old-password">Old Password:</label>
                    <input type="password" class="form-control form-control-lg" id="old-password" name="old_password" placeholder="Enter your current password..." required>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <label for="new-password">New Password:</label>
                    <input type="password" class="form-control form-control-lg" id="new-password" name="new_password" placeholder="Enter your new password..." required>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" class="form-control form-control-lg" id="confirm-password" name="confirm_password" placeholder="Confirm your new password..."  required>
                </div>
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                    <button type="submit" class="btn btn-alt-primary mt-2">Update Password</button>
                </div>
                </center>
            </div>
            </form>
        </div>
    </div>
@endsection