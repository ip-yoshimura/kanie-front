<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 no-padding body-background">


    <div class="head-p">
        <p>保安業務履歴保守</p>
    </div>

    <div class="col-xs-12 border-margin-bottom">

        <div class="col-xs-1 no-padding border-margin-exp">
            <p>消費者コード</p>
        </div>

        <div class="col-xs-2">
            <input class="form-control" id="directStartId" name="directStartId"
                   type="text" value="" onchange="$.fn.onInputValueChange('directStartId', 'directStartName')">
        </div>

        <div class="col-xs-3">
            <input class="form-control" type="text" id="directStartName" name="directStartName">
        </div>
        <div class="col-xs-1 no-padding border-margin-exp">
            <p>営業所・販売店</p>
        </div>
        <div class="col-xs-3">
            <input class="form-control" id="salesOffice" name="salesOffice"
                   type="text" value="" onchange="$.fn.onInputValueChange('salesOffice', 'salesOfficeStarstName')">
        </div>
        <div class="col-xs-1" style="padding:0;margin:0;">
            <input class="form-control" type="text" id="salesOfficeStarstName" name="salesOfficeStarstName">
        </div>
    </div>
    <div class="col-xs-12 border1 no-padding">
        <div class="col-xs-12 no-padding">
            <p class="back-end">点検調査・周知・緊急時対応等</p>

        </div>

        <div class="col-xs-12 table-scroll">
            <table class="table table-bordered">
                <thead>
                <tr class="bg-color">
                    <th></th>
                    <th></th>
                    <th>業務名</th>
                    <th>実施日</th>
                    <th></th>
                    <th class="col-xs-2">実施者</th>
                    <th class="col-xs-2"></th>
                    <th class="">実施保安機関</th>
                    <th>結果</th>
                    <th class="">月数</th>
                    <th>次回期限</th>
                    <th class="">再調査期限</th>

                </tr>
                <tr>
                    <td class="bg-color td-style w-50">新規</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">1</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">2</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">3</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">4</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">5</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">6</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">7</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                <tr>
                    <td class="bg-color td-style">8</td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                </tr>
                </thead>
            </table>

        </div>

        <div class="col-xs-12">

            <div class="col-xs-2 no-padding border-margin-exp">
                <p>新規</p>
            </div>

            <div class="col-xs-2 border-margin-exp">
                <p>の備考</p>
            </div>
            <div class="col-xs-6">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-2">

            </div>
        </div>

        <div class="col-xs-12 border-margin table-scroll">
            <table class="table table-bordered col-xs-12">
                <tr class="bg-color">
                    <td class=" ">保安業務</td>
                    <td class=" ">結果</td>
                    <td class=" ">保安業務</td>
                    <td class=" ">結果</td>
                </tr>
                <tr>
                    <td class=" "> 1:供給開始時点検・調査</td>
                    <td class=" ">1:良 2:不良 3:不能 4:その他</td>
                    <td class=" "> 8:消費設備再調査</td>
                    <td class=" ">1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td class=" "> 2:容器交換時等供給設備点検</td>
                    <td class=" ">1:良 2:不良 3:不能 4:その他</td>
                    <td>9:CO一斉点検</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td>3:定期供給設備点検</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                    <td>10:埋設管点検調査</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td> 4:定期消費設備調査</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                    <td>11:定期自主点検（高圧）</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td>5:周知</td>
                    <td>1:手交 2:配布 3:郵送 4:その他</td>
                    <td>12:本支管等点検（簡易）</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td>6:緊急時対応</td>
                    <td>1:出勤対応 2:その他</td>
                    <td>13:消費機器調査（簡易）</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>
                </tr>
                <tr>
                    <td>7:緊急時連絡</td>
                    <td>1:出勤依頼、指図 2:その他</td>
                    <td>14:バルク設備点検</td>
                    <td>1:良 2:不良 3:不能 4:その他</td>







            </table>
        </div>

    </div>
    <div class="col-xs-12 border1 no-padding bottom-box">



        <p class="back-end">改善</p>

        <div class="col-xs-3 border-margin-exp">
            <p>不良・不能の点検調査</p>
        </div>
        <div class="col-xs-4 border-margin-bottom">
            <input type="text" class="form-control">
        </div>
        <div class="col-xs-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control">
        </div>

        <div class="col-xs-12 table-scroll">
            <table class="table table-bordered">
                <thead class="bg-color">
                <th class=""></th>
                <th class="w-20"></th>
                <th class="td-style">状況</th>
                <th class="td-style">更新日</th>
                <th class="w-20"></th>
                <th class="td-style">実施者</th>
                <th class="td-style w-50"></th>
                <th class="td-style">実施保安機関</th>
                <th class="td-style">備考</th>

                </thead>
                <tbody>
                <tr>
                    <th class="td-style bg-color w-50">新規</th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style w-80"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                </tr>
                <tr>
                    <th class="td-style bg-color">1</th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style w-80"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                </tr>
                <tr>
                    <th class="td-style bg-color">2</th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style w-80"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                </tr>
                <tr>
                    <th class="td-style bg-color">3</th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style w-80"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                </tr>
                <tr>
                    <th class="td-style bg-color">4</th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="w-20"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style w-80"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                    <th class="td-style"><input type="text" class="form-control tbl-input"></th>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xs-12 border-margin border-margin-bottom">
            <div class="col-xs-1 no-padding border-margin-exp col-xs-offset-1">
                <p>備考</p>
            </div>
            <div class="col-xs-8 no-padding">
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
    <!--Last Div-->
    <?php
    include "footer.php"
    ?>


    </form>

</div>
</div>
</div>

</body>

</html>
