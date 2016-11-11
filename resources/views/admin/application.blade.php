<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>管理員審查介面</h2>
    <p>如窗口所要求之樣式</p>

    <form class="form-horizontal" method="post">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>學生資料</th>
                <th>學費減免</th>
                <th>雜費減免</th>
                <th>住宿減免</th>
                <th>生活費補助</th>
                <th>應繳金額</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">學生 1
                    </button>
                </td>

                <td>
                    <select class="form-control" id="fee1" name="assignmentDeadlineMinute"
                            onChange='selectOnChange(this);'>
                        @for ($i = 10; $i <= 100; $i = $i + 10)
                            @if (50 == $i)
                                <option value="{{$i}}" selected="selected">{{$i}} %</option>";
                            @else
                                <option value="{{$i}}">{{$i}} %</option>
                            @endif
                        @endfor
                        <option value="{{$i}}">其他（請輸入欲減免金額(元）</option>";
                    </select>
                    <input type="number" class="form-control optional_input" placeholder="請輸入欲減免金額(元）">
                </td>

                <td>
                    <select class="form-control" id="fee2" name="assignmentDeadlineMinute"
                            onChange='selectOnChange(this);'>
                        @for ($i = 10; $i <= 100; $i = $i + 10)
                            @if (50 == $i)
                                <option value="{{$i}}" selected="selected">{{$i}} %</option>";
                            @else
                                <option value="{{$i}}">{{$i}} %</option>
                            @endif
                        @endfor
                            <option value="{{$i}}">其他（請輸入欲減免金額(元）</option>";
                    </select>
                    <input type="number" class="form-control optional_input" placeholder="請輸入欲減免金額(元）">
                </td>

                <td>
                    <select class="form-control" id="fee3" name="assignmentDeadlineMinute"
                            onChange='selectOnChange(this);'>
                        @for ($i = 10; $i <= 100; $i = $i + 10)
                            @if (50 == $i)
                                <option value="{{$i}}" selected="selected">{{$i}} %</option>";
                            @else
                                <option value="{{$i}}">{{$i}} %</option>
                            @endif
                        @endfor
                            <option value="{{$i}}">其他（請輸入欲減免金額(元）</option>";
                    </select>
                    <input type="number" class="form-control optional_input" placeholder="請輸入欲減免金額(元）">
                </td>

                <td>
                    <input type="number" class="form-control" placeholder="請輸入欲補助金額(元）">
                </td>

                <td>
                    1000元
                </td>

                <td>
                    <button type="submit" class="btn btn-success" value="1" name="assignmentSubmission">確認</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">學生資料</h4>
            </div>
            <div class="modal-body">
                <p>WOW!</p>
                學號<br>
                系級<br>
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
            </div>
        </div>

    </div>
</div>

<div>

</div>

<script>

    $(function () {
        $('.optional_input').hide();
    });

    function selectOnChange(sel) {
        if (sel.selectedIndex == 10) {
            $('#' + sel.id).siblings('.optional_input').show();
        }
        else {
            $('#' + sel.id).siblings('.optional_input').hide();
        }
    }

</script>

</body>
</html>

