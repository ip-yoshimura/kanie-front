<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>受付項目一覧表印刷指定
            </p>
        </div>

        <form action="/gas/meter-reading" id="meter" method="POST">

            <div class="col-xs-12 border1 no-padding">

                <p class="backend">出力指定</p>

                <div class="col-xs-12">

                    <div class="form-group">
                        <label class="col-xs-1 no-padding">出力先


                        </label>

                        <div class="col-xs-2 no-padding">
                            <input name="directSales" type="radio" value="directSales"><span> プリンタ（印刷）</span>

                        </div>

                        <div class="col-xs-2 no-padding">
                            <input name="directSales" type="radio" value="directSales"><span> 画面（印刷イメージ）</span>

                        </div>
                    </div>


                </div>
            </div>

            <?php include 'footer.php'; ?>

        </form>
    </div>
</div>
</div>
</div>

</body>

</html>