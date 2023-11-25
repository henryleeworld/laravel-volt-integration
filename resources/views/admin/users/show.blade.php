@extends('layouts.app')
@section('content')
<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="fs-5 fw-bold mb-1">{{ trans('global.show') }} {{ trans('cruds.user.title') }}</h2>
                        <div>
                            <div class="mb-2">
                                <table class="table table-bordered table-striped" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.user.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.user.fields.name') }}
                                            </th>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.user.fields.email') }}
                                            </th>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.user.fields.roles') }}
                                            </th>
                                            <td>
                                                @foreach($user->roles()->pluck('name') as $role)
                                                <span class="label label-info label-many">{{ $role }}</span>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a style="margin-top:20px;" class="btn btn-light" href="{{ url()->previous() }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection