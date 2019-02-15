<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p">
            <p>安全器具型式保守</p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 no-padding">
                <div class="form-group">
                    <label class="col-xs-1  no-padding mt-2"><p>安全器具区分</p>  </label>
                    <div class="col-xs-2 no-padding">
                        <input type="radio" name="municipality" id="municipality" value="all" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>  ガス漏れ警報器</span>
                    </div>
                    <div class="col-xs-1 no-padding ml-n-40">
                        <input type="radio" name="municipality" id="municipality" value="all" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>  CO警報器</span>
                    </div>
                    <div class="col-xs-1 no-padding ml-15">
                        <input type="radio" name="municipality" id="municipality" value="all" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>  集中監視端末</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-8 bottom-box no-padding tbl-scroll">
                <table class="table table-bordered col-xs-12">
                    <thead class="tbl-31 ">
                    <tr>
                        <th class="col-xs-2"></th>
                        <th class="td-style col-xs-2">コード</th>
                        <th class="td-style col-xs-8">型式</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tbl-14-td bg-color">1</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">2</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">3</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">4</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">5</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>

                    <tr>
                        <td class="tbl-14-td bg-color">6</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>

                    <tr>
                        <td class="tbl-14-td bg-color">7</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>

                    <tr>
                        <td class="tbl-14-td bg-color">8</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">9</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>

                    <tr>
                        <td class="tbl-14-td bg-color">10</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">11</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">12</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">13</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>

                    <tr>
                        <td class="tbl-14-td bg-color">14</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">15</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">16</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">17</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">18</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">19</td>
                        <td><input type="text" class="form-control tbl-input"></td>
                        <td><input type="text" class="form-control tbl-input"></td>

                    </tr>
                    <tr>
                        <td class="tbl-14-td bg-color">20</td>
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
