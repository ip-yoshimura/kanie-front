<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>検針配送履歴保守

            </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12" style="margin-bottom: 20px">
                        <div class="col-xs-2 no-padding">
                            <label>消費者コード</label>
                        </div>
                        <div class="col-xs-2 ml-n-40">
                            <input type="text" name="consumeStart" id="consumeStart" class="form-control" value="" onchange="$.fn.onInputValueChange('consumeStart', 'consumeEnd')" >
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="consumeEnd" id="consumeEnd" class="form-control" value=""  >
                        </div>
                    </div>
                    <div class="col-xs-12 bottom-box tbl-scroll no-padding tbl-background">

                        <table class="table table-bordered tbl-31-main">
                            <thead class="tbl-31">
                                <tr>
                                    <th class="blue-bg"></th>
                                    <th class="blue-bg">区分</th>
                                    <th class="blue-bg">日付</th>
                                    <th class="blue-bg">順</th>
                                    <th class="blue-bg">指針</th>
                                    <th class="blue-bg">旧指針</th>
                                    <th class="blue-bg">回転</th>
                                    <th class="blue-bg">使用量</th>
                                    <th class="blue-bg">日数</th>
                                    <th class="blue-bg">m3/日</th>
                                    <th class="blue-bg">微少</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="tbl-31-tr "></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php include 'footer.php';?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
