@extends('layouts.app')
@section('content')
<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="fs-5 fw-bold mb-1">{{ trans('global.show') }} {{ trans('cruds.permission.title') }}</h2>
                        <div>
                            <div class="mb-2">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.permission.fields.id') }}
                                            </th>
                                            <td>
                                                {{ $permission->id }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('cruds.permission.fields.title') }}
                                            </th>
                                            <td>
                                                {{ $permission->name }}
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