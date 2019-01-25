<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background bottom-box">

        <div class="head-p">
            <p>市町村名保守

            </p>
            <form id="meter" action="/gas/meter-reading" method="POST">
                <div class="col-xs-12">
                    <label class="col-xs-1  no-padding"  style="color: black">供給設備区分


                    </label>
                    <div class="form-group">

                        <input type="radio" name="municipality" id="municipality" value="all" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>バルブ等</span>


                        <input type="radio" name="municipality" id="municipality" value="custom" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>調整器等</span>


                        <input type="radio" name="municipality" id="municipality" value="custom" onclick="$.fn.radioButtonSelectionChanged('municipality', 'municipalityId')"/> <span>ガスメータ</span>


                    </div>


                </div>

                <div class="col-xs-12 bottom-box">

                    <table class="table table-bordered">
                        <thead class="tbl-31 ">
                        <tr>
                            <th></th>
                            <th style="text-align: center">コード</th>
                            <th style="text-align: center">型式</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tbl-14-td">1</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td"> 2</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">3</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">4</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">5</td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td">6</td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td">7</td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td">8</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">9</td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td">10</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">11</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">12</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="tbl-14-td">13</td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td class="tbl-14-td">14</td>
                            <td></td>
                            <td></td>

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