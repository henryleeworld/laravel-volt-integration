@extends('layouts.app')
@section('content')
<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="fs-5 fw-bold mb-1">{{ trans('global.show') }} {{ trans('cruds.role.title') }}</h2>
                        <div>
                            <div class="mb-2">
                                <table class="table table-bordered table-striped" style="width:100%">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.role.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $role->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.role.fields.title') }}
                                            </th>
                                            <td>
                                                {{ $role->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.role.fields.permissions') }}
                                            </th>
                                            <td>
                                                @foreach($role->permissions()->pluck('name') as $permission)
                                                <span class="label label-info label-many">{{ $permission }}</span>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <nav class="mb-3">
                                <div class="nav nav-tabs">
                                </div>
                            </nav>
                            <div class="tab-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection