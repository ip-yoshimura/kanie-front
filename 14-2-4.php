<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p">
            <p>施設区分保守</p>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12">
                    <label class="col-xs-1 no-padding" style="color: black">適用法令</label>
                    <div class="form-group col-xs-6">
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="Supply" id="Supply" value="all" onclick="$.fn.radioButtonSelectionChanged('Supply', 'SupplyId')"/> <span> 液石法</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="Supply" id="Supply" value="Supply" onclick="$.fn.radioButtonSelectionChanged('Supply', 'SupplyId')"/> <span> 高圧法</span>
                        </div>
                        <div class="col-xs-2 no-padding">
                            <input type="radio" name="Supply" id="Supply" value="Supply" onclick="$.fn.radioButtonSelectionChanged('Supply', 'SupplyId')"/> <span> ガス事業法</span>
                        </div>
                    </div>
            </div>

            <div class="col-xs-6 bottom-box tbl-scroll">
                <table class="table table-bordered">
                    <thead class="tbl-31 ">
                    <tr>
                        <th class="col-xs-1"></th>
                        <th class="col-xs-2 td-style">コード</th>
                        <th class="td-style">施設名</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">1</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">2</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">3</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">4</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">5</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">6</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">7</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">8</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">9</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">10</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">11</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">12</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">13</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">14</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">15</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">16</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">17</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">18</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">19</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    <tr>
                        <td class="col-xs-1 bg-color td-style">20</td>
                        <td class="col-xs-2"><input type="text" class="form-control tbl-input"></td>
                        <td class="col-xs-5"><input type="text" class="form-control tbl-input"></td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <?php
                        include "footer.php"
                        ?>

            </form>
        </div>
    </div>
</div>
</div>

</body>

</html>
