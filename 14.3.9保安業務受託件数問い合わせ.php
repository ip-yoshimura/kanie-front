<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>保安業務受託件数問い合わせ

            </p>
        </div>

                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <label>保安機関</label>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="agencyStart" name="agencyStart" placeholder="000"
                                       class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('agencyStart', 'agencyEnd')"/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input id="agencyEnd" name="agencyEnd" placeholder="z" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>


                    </div>

                    <div class="col-xs-12">
                        <div class="col-xs-1">
                            <label>調査日</label>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="000"
                                       class="form-control" type="date" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-1 no-padding ratio">~</div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                       type="date" value=""/>
                            </div>
                        </div>


                    </div>


            </div>


    <div class="col-xs-12 bottom-box tbl-scroll no-padding tbl-background">

        <table class="table table-bordered tbl-31-main">
                    <thead class="tbl-31">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>営業所・販売店名</th>
                        <th>供給
                            開始時</th>
                        <th>容器
                            交換時</th>
                        <th>容器
                            交換時</th>
                        <th>供給
                            設備</th>
                        <th>消費
                            設備</th>
                        <th>周知</th>
                        <th>緊急時
                            対応</th>
                        <th>緊急時
                            連絡</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tbl-31-tr "></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td class="tbl-31-tr "> 1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td class="tbl-31-tr "></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td class="tbl-31-tr ">2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td class="tbl-31-tr "></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                    <tr>
                        <td class="tbl-31-tr ">3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                    <tr>
                        <td class="tbl-31-tr "></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                    <tr>
                        <td class="tbl-31-tr ">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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