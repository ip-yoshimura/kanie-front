<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">
    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p">
            <p>保安機関・調査員マスタ保守</p>

        </div>
                <form id="meter" action="/gas/meter-reading" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-2">
                            <p>保安機関コード</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <p>営業所・販売店

                            </p>
                        </div>

                        <div class="col-xs-1">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <input  name="officeCodeStartName" placeholder="0" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-1">
                            <p style="color: red">閲覧
                            </p>
                        </div>

                    </div>

                    <div class="col-xs-12">
                    <div class="col-xs-6">
                        <div class="col-xs-3">
                            <p>保安機関名</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <p>郵便番号</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="" class="form-control" type="date" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <p>住所1</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <p>住所2</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <p>電話番号</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <p>FAX</p>
                        </div>
                        <div class="col-xs-9">
                            <div class="form-group">
                                <input id="officeCodeStartName" name="officeCodeStartName" placeholder="000" class="form-control" type="text" value=""/>
                            </div>
                        </div>


                    </div>
                        <div class="col-xs-6 bottom-box">
                            <div class="col-xs-2">
                                <p>調査員</p>
                            </div>
                            <div >
                                <div class="col-xs-10">
                                    <table class="table table-bordered">
                                        <thead class="tbl-31">
                                        <tr>
                                            <th></th>
                                            <th>コード</th>
                                            <th style="width: 220px;">調査員名</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>10</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td>14</td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
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