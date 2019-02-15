<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p">
            <p>市町村名保守</p>

            <form action="/gas/meter-reading" id="meter" method="POST">

                <div class="col-xs-12">
                    <label class="col-xs-2" style="color: black;">都道府県コード</label>
                    <div class="form-group">
                        <div class="col-xs-1">
                            <input class="form-control" id="directStartId" name="directStartId"
                                   type="text" value="" onchange="$.fn.onInputValueChange('directStartId', 'directStartName')">
                        </div>
                        <div class="col-xs-3">
                            <input class="form-control" type="text" id="directStartName" name="directStartName">
                        </div>
                    </div>
                </div>

                <div class="col-xs-6  bottom-box">
                    <table class="table table-bordered">
                        <thead class="tbl-31 ">
                        <tr>
                            <th class="col-xs-1"></th>
                            <th class="col-xs-2" style="text-align: center">コード</th>
                            <th class="col-xs-4" style="text-align: center">市町村名</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tbl-31">1</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31"> 2</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">3</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">4</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">5</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">6</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">7</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">8</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">9</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">10</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">11</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">12</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">13</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">14</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">15</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">16</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">17</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">18</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">19</td>
                            <td><input type="text" class="form-control tbl-input"></td>
                            <td><input type="text" class="form-control tbl-input"></td>
                        </tr>
                        <tr>
                            <td class="tbl-31">20</td>
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
</div>

</body>

</html>
