<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>
                検針伝票入力

            </p>
        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="form-group">
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding border-margin-exp">
                            <label>消費者コード</label>
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="consumerStart" id="consumerStart" class="form-control" value="" onchange="$.fn.onInputValueChange('consumerStart', 'consumerEnd')">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="consumerEnd" id="consumerEnd" class="form-control" value="">
                        </div>
                        <div class="col-xs-1 no-padding border-margin-exp ml-10">
                            <label>検針順路</label>
                        </div>
                        <div class="col-xs-2 ml-n-10">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding border-margin-exp ml-10">
                            <label>伝票番号</label>
                        </div>
                        <div class="col-xs-2 ml-n-30">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xs-1 ml-n-10" style="width: 120px;">
                            <input type="button" class="form-control" value="保安点検">

                        </div>
                    </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-1 no-padding border-margin-exp">
                            <label>伝票日付</label>
                        </div>
                        <div class="col-xs-2">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-xs-1 no-padding border-margin-exp ml-30">
                            <label>担当者</label>
                        </div>
                        <div class="col-xs-1 ml-n-40">
                            <input type="text" name="personStart" id="personStart" class="form-control" value="" onchange="$.fn.onInputValueChange('personStart', 'personEnd')">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="personEnd" id="personEnd" class="form-control" value="" >
                        </div>
                    </div>
                    <div class="col-xs-12 border-margin-bottom border-margin">
                        <div style="border: 0.5px solid #E2E2E2">
                        </div>
                    </div>
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">検針 </p>
                            <div class="col-xs-1 border-margin-exp ml-70">
                                <label>開閉栓</label>
                            </div>
                            <div class="col-xs-2">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1 no-padding border-margin-exp">
                                <label>前回回転</label>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2 border-margin-exp">
                                <label>今回回転</label>
                            </div>
                            <div class="col-xs-1 no-padding ml-n-70">
                                <input type="text" class="form-control">
                            </div>

                                <div class="col-xs-8 col-xs-offset-1 bottom-box no-padding tbl-background border-margin" >

                                    <table class="table  table-bordered tbl-31-main">
                                        <thead class="tbl-31">
                                        <tr>
                                            <th></th>
                                            <th class="col-xs-4">前回</th>
                                            <th class="col-sx-4">今回</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="tbl-31-tr ">検針日</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">メータ指針</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">ガス使用量</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">基本料金</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">従量料金</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">ガス料金調整額</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">小計</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">ガス料金割引</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">（課税対象額）</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">（消費税）</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td class="tbl-31-tr ">ガス料金合計</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="tbl-31-tr ">入金額</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="tbl-31-tr ">入金時値引</td>
                                            <td><input type="text" class="form-control tbl-input"></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-6 no-padding">
                                        <div class="col-xs-3 border-margin-exp">
                                            <label>前回</label>
                                        </div>
                                        <div class="col-xs-3 no-padding">
                                            <input type="radio"> 通常
                                        </div>

                                        <div class="col-xs-3 no-padding">
                                            <input type="radio"> 開栓
                                        </div>

                                        <div class="col-xs-2 no-padding">
                                            <input type="radio"> 閉栓
                                        </div>
                                    </div>
                                        <div class="col-xs-6">
                                            <div class="col-xs-3 border-margin-exp">
                                                <label>今回</label>
                                            </div>
                                            <div class="col-xs-3 no-padding">
                                                <input type="radio"> 通常
                                            </div>

                                            <div class="col-xs-3 no-padding">
                                                <input type="radio"> 開栓
                                            </div>

                                            <div class="col-xs-2 no-padding">
                                                <input type="radio"> 閉栓
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 border-margin no-padding">
                                        <div class="col-xs-6 no-padding">
                                            <table class="table table-bordered price-list ">
                                                <tbody>
                                                <tr>
                                                    <td class="tbl-31-tr " width="150px">料金表No</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">個別基本料金</td>
                                                    <td><input type="text" class="form-control tbl-input"> </td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">個別契約単価</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">割引率</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">メータ交換日</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">旧メータ指針</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl-31-tr ">新メータ指針</td>
                                                    <td><input type="text" class="form-control tbl-input"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="col-xs-5">
                                                <p>微少流量警報</p>
                                            </div>
                                            <div class="col-xs-2 no-padding">
                                                <input type="radio" name="office" id="office" value="all" onclick="$.fn.radioButtonSelectionChanged('office', 'officeId')"> 無
                                            </div>
                                            <div class="col-xs-2 no-padding">
                                                <input type="radio" name="office" id="office"  value="directSales" onclick="$.fn.radioButtonSelectionChanged('office', 'officeId')"> 有
                                            </div>

                                        </div>
                                    </div>
                                </div>

                        </div>

                    </div>

                    </div>



                    <div class="col-xs-12 bottom-box">
                        <div class="col-xs-2">
                            <input type="text" value="今回新規" disabled class="form-control td-style" disabled>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" value="自動切換なし" disabled class="form-control td-style" disabled>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" value="自動計算" disabled class="form-control td-style" disabled>
                        </div>
                        <div class="col-xs-2">
                            <input type="text" value="伝票件数 0/0" disabled class="form-control td-style" disabled>
                        </div>
                    </div>

                    <?php include 'footer.php';?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
