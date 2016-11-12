@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as
                    @if(Auth::user()->userType == 3) admin
                    @elseif(Auth::user()->userType == 2) reviewer
                    @else student
                    @endif!<hr>

                    以下是大家交上來的檔案，我稍微更改了一些HTML code以符合template engine的需求，並做了一些routing和database結合的測試。有功能的網頁，會有說明。要不然基本上網頁都是靜態的（按鈕都沒反應就是啦！)
                    <br><br>

                    大家可以用學生帳號亂申請個XD<br>
                    然後可以到審查介面看簡單版的申請資料<br>

                    <p>測試用學生帳號: student@s.s<br>
                    測試用學生密碼: student</p>

                    <hr>

                    @if(Auth::user()->userType == 3)
                        <a href="{{ url('/administrator/application') }}">審查介面</a>:可以看到簡單版的申請資料<br>
                        <a href="{{ url('/administrator/accountManagement') }}">帳號管理</a>：可以觀看所有帳號和任意刪除帳號(對，刪除任意帳號）<br>
                        <a href="{{ url('/administrator/capSetting') }}">金額上限設定</a><br>
                        <a href="{{ url('/administrator/statusSetting') }}">系統狀態設定</a><br>
                    @elseif(Auth::user()->userType == 2) reviewer
                    @else
                        <a href="{{ url('/studentApplicant/applicationForm') }}">學生申請表</a><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
