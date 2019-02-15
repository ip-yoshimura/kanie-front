<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p">
            <p>供給設備種別保守</p>
        </div>

            <form action="/gas/meter-reading" id="meter" method="POST">
                <div class="col-xs-12 mt-2">

                    <div class="form-group">
                        <label class="col-xs-1  no-padding mt-2"><p>供給設備区分</p></label>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="supplyEquipment" id="supplyEquipment"><span class=""> 供給管</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="supplyEquipment" id="supplyEquipment"><span class=""> 調整器等</span>
                        </div>
                        <div class="col-xs-1 no-padding">
                            <input type="radio" name="supplyEquipment" id="supplyEquipment"><span class=""> ガスメータ</span>
                        </div>
		    </div>

		    <div class="col-xs-2 no-padding col-xs-offset-8">
			<label><p>(1:該当 2:非該当)</p></label>
		    </div>
                </div>

                <div class="col-xs-10 bottom-box tbl-scroll">

                    <table class="table table-bordered col-xs-10">
                        <thead class="tbl-31 ">
                        <tr>
                            <th class="col-xs-1 bg-color"></th>
                            <th class="col-xs-2 td-style">コード</th>
                            <th class="col-xs-6 td-style">種別名</th>
                            <th class="td-style">保安確保機器</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tbl-14-td  bg-color">1</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td  bg-color"> 2</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">3</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">4</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">5</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td bg-color">6</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td bg-color">7</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td bg-color">8</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">9</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td bg-color">10</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">11</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">12</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">13</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td bg-color">14</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">15</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">16</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">17</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">18</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">19</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td bg-color">20</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>

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

</body>

</html>
