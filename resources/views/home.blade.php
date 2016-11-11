@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<br>

                    <a href="{{ url('/admin/application') }}">管理員審查介面</a>
                    <a href="{{ url('/admin/accountManagement') }}">管理員帳號管理</a>
                    <a href="{{ url('/admin/capSetting') }}">管理員上限設定</a>
                    <a href="{{ url('/admin/statusSetting') }}">管理員系統狀態設定</a>
                    <a href="{{ url('/admin/applicationForm') }}">學生申請表</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
