<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color">

        <div class="head-p ">
            <p>保安業務委託件数問合せ
            </p>
        </div>

                <form action="/gas/meter-reading" id="meter" method="POST">
                    <div class="col-xs-12">

                        <div class="col-xs-1 no-padding">
                            <p>消費者コード</p>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStart" name="consumerCodeStart" placeholder="000"
                                       class="form-control" type="text" value="" onchange="$.fn.onInputValueChange('consumerCodeStart', 'consumeCodeEnd')"/>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <input id="consumeCodeEnd" name="consumeCodeEnd" placeholder="z" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                       type="text" value=""/>
                            </div>
                        </div>

                    </div>


            </div>


    <div class="container tbl-scroll col-xs-12 bottom-box">

        <table class="table table-bordered tbl-30-main" style="background-color: whitesmoke">
                    <thead class="tbl-31">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>保安機関名</th>
                        <th >供給開始時</th>
                        <th>容器交換時</th>
                        <th>供給設備</th>
                        <th>消費設備</th>
                        <th>周知</th>
                        <th>緊急時対応</th>
                        <th >緊急時連絡</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="tbl-31-tr"></td>
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
                        <td class="tbl-31-tr"> 1</td>
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
                        <td class="tbl-31-tr"></td>
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
                        <td class="tbl-31-tr">2</td>
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
                        <td class="tbl-31-tr"></td>
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
                        <td class="tbl-31-tr"> 3</td>
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
                        <td class="tbl-31-tr"></td>
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
                        <td class="tbl-31-tr">4</td>
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