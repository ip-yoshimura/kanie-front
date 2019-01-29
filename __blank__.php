<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 no-padding body-background">


    <div class="head-p">
        <p class="">検針伝票連続入力</p>
    </div>


    <div class="col-xs-12 no-padding">
        <div class="col-xs-1 no-padding border-margin-exp">
            <p>伝票日付</p>
        </div>
        <div class="col-xs-2">
            <input type="date" class="form-control">
        </div>
        <div class="col-xs-1 border-margin-exp">
            <p>検針担当</p>
        </div>
        <div class="col-xs-1">
            <input type="text" class="form-control">
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control">
        </div>
        <div class="col-xs-1 no-padding border-margin-exp">
            <p>保安点検入力</p>
        </div>
        <div class="col-xs-1">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 no-padding border-margin">
        <div class="col-xs-1 no-padding col-xs-offset-4 border-margin-exp">
            <p style="margin-left: 17px">前回検針</p>
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control">
        </div>
        <div class="col-xs-2 border-margin-exp no-padding">
            <p>指針</p>
        </div>
        <div class="col-xs-2" style="margin-left: -98px">
            <input type="text" class="form-control">
        </div>
        <div class="col-xs-2 border-margin-exp ml-n-10">
            <p>使用量</p>
        </div>
        <div class="col-xs-1 no-padding" style="margin-left: -120px">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-xs-12 border-margin no-padding tbl-scroll">
        <table class="table table-bordered col-xs-12 tbl-1-main">
            <thead>
            <tr class="bg-color">
                <th></th>
                <th class="col-xs-2">消費者コード</th>
                <th class="col-xs-3">消費者名</th>
                <th>回転</th>
                <th >今回指針</th>
                <th>使用量</th>
                <th>消費税</th>
                <th>ガス料金</th>
                <th>入金額</th>
                <th>入金値引</th>
                <th>微少</th>
            </tr>
            </thead>
            <tr>
                <td class="bg-color td-style">1</td>
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
                <td class="bg-color td-style">2</td>
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
                <td class="bg-color td-style">3</td>
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
                <td class="bg-color td-style">4</td>
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
                <td class="bg-color td-style">5</td>
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
                <td class="bg-color td-style">6</td>
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
                <td class="bg-color td-style">7</td>
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
                <td class="bg-color td-style">8</td>
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
                <td class="bg-color td-style">9</td>
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
                <td class="bg-color td-style">10</td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td><input type="text" class="form-control tbl-input">
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
                <td><input type="text" class="form-control tbl-input"></td>
            </tr>
            <tr>
                <td class="bg-color td-style">11</td>
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
                <td class="bg-color td-style">12</td>
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
                <td class="bg-color td-style">13</td>
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
                <td class="bg-color td-style">14</td>
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
            </tr> <tr>
                <td class="bg-color td-style">15</td>
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
            </tr> <tr>
                <td class="bg-color td-style">16</td>
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
            </tr> <tr>
                <td class="bg-color td-style">17</td>
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
            </tr> <tr>
                <td class="bg-color td-style">18</td>
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
                <td class="bg-color td-style">19</td>
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
        </table>
    </div>

    <div class="col-xs-12 no-padding border-margin ">
        <div class="col-xs-7 col-xs-offset-4">
            <table class="tale table-bordered col-xs-12">
                <tr class="bg-color">
                    <td ></td>
                    <td>使用量</td>
                    <td class="td-style">消費税</td>
                    <td class="td-style">ガス料金</td>
                    <td class="td-style">入金額</td>
                    <td class="td-style">入金値引</td>

                </tr>
                <tr>
                    <td class="bg-color td-style col-xs-2">合計</td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>
                    <td><input type="text" class="form-control tbl-input"></td>

                </tr>

            </table>
        </div>
    </div>


    <div class="col-xs-12 bottom-box" style="margin-top: 10px">
        <div class="col-xs-2">
            <input type="text" value="今回新規" disabled class="form-control td-style">
        </div>
        <div class="col-xs-2">
            <input type="text" value="自動切替なし" disabled class="form-control td-style">
        </div>
        <div class="col-xs-2">
            <input type="text" value="自動計算" disabled class="form-control td-style">
        </div>
        <div class="col-xs-2">
            <input type="text" value="伝票件数 0/0" disabled class="form-control td-style">
        </div>
    </div>


    <?php
    include "footer.php"
    ?>


</div>
</div>
</div>

</body>

</html>