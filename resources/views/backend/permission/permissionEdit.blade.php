@extends('backend.layout')
@section('permission')
    <style>
        input[type='checkbox'] {
            width: 20px;
        }

        .w-10 {
            width: 15%;
            margin-left: 10px;
            margin-bottom: 5px;
        }
    </style>
    <p>Dashboard / Permission</p>
    <div class="row">
        @foreach($permissionOfRole as $perRole)
            <h4 class="m-0">All permission of role <span class="fw-bold">{{ucfirst($perRole->name)}}</span></h4>
            @foreach($perRole->permissions as $key=>$namePermision)
                <div class="d-flex">
                    {{++$key}}.{{ucfirst($namePermision->name) }}&nbsp;&nbsp;
                </div>
            @endforeach
        @endforeach

        <form method="POST">
            @foreach($allPermissions as $permission)
                <div class="d-flex col-lg-2 col-md-3 align-items-center justify-content-between w-10 bg-white m-0 mt-2">
                    <p class="m-0">{{ ucfirst($permission->name) }}</p>
                    <input type="checkbox" value="{{ $permission->id }}" name="permission[]"/>
                </div>
            @endforeach
            <div class="d-flex mt-4">
                <p class="m-0">Role</p>
                <select class="" name="role">
                    @foreach($roles as $role)
                        <option value="{{$role->id}}" @if($role->id == $idRole) selected @endif>{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success mt-3">Submit</button>
            @csrf
        </form>
    </div>
@endsection
