<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

                <div class="head-p ">
                    <p>業務詳細分類保守
                    </p>
                </div>
                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <p>業務分類</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input class="form-control" id="officeCodeStartId" name="officeCodeStartId"
                                       placeholder="0" type="number" value=""/>
                            </div>
                        </div>

                        <div class="col-xs-3 ">
                            <div class="form-group">
                                <input class="form-control" id="companyIdEndId" name="companyIdEndId" placeholder=""
                                       type="text" value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="container tbl-scroll col-xs-12 bottom-box">
                        <table class="table table-bordered tbl-30-main">
                            <thead class="tbl-31">
                            <tr>
                                <th></th>
                                <th>詳細分類</th>
                                <th>詳細分類名</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="tbl-31-tr col-xs-1">1</td>
                                <td class="col-xs-2"></td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">2</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">3</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">4</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">5</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">6</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">7</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">8</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">9</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tbl-31-tr">10</td>
                                <td></td>
                                <td></td>
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
