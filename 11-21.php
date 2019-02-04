<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>

<div class="col-xs-12 col-md-10 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color body-background">
        <div class="head-p">
            <p>ユーザ別環境設定</p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">
                <p class="backend">個別伝票入力</p>

                <div class="col-xs-12">
                    <div class="col-xs-2">
                    </div>
                    <div class="col-xs-3">
                        自動切替
                    </div>
                    <div class="col-xs-3">
                        切替順序
                    </div>
                </div>
                <div class="col-xs-12 border-margin" style="">
                    <div class="col-xs-2">
                        <p>検針伝票</p>
                    </div>
                    <div class="col-xs-3">
			<div class="col-xs-4 no-padding">
			    <input type="radio" id="" name="IndividualDeliveryReportSwitch" value=""><span> しない</span>
			</div>
                        <div class="col-xs-4 no-padding">
			    <input type="radio" id="" name="IndividualDeliveryReportSwitch" value=""><span> する</span>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualDeliveryReportOrder" value=""><span> 消費者コード</span>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualDeliveryReportOrder" value=""><span> 検針順路</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 border-margin ">
                    <div class="col-xs-2">
                        <p>容器交換票</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualBottleChangeReportSwitch" value=""><span> しない</span>
                        </div>
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualBottleChangeReportSwitch" value=""><span> する</span>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualBottleChangeReportOrder" value=""><span> 消費者コード</span>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualBottleChangeReportOrder" value=""><span> 配送順路</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2">
                        <p>検配同時伝票</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualCheckDeliverReportSwitch" value=""><span> しない</span>
                        </div>
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualCheckDeliverReportSwitch" value=""><span> する</span>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualCheckDeliverReportOrder" value=""><span> 消費者コード</span>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualCheckDeliverReportOrder" value=""><span> 検針順路</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2">
                        <p>売上伝票</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualSalesReportSwitch" value=""><span> しない</span>
                        </div>
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualSalesReportSwitch" value=""><span> する</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 border-margin  border-margin-bottom">
                    <div class="col-xs-2">
                        <p>入金伝票</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualDepositReportSwitch" value=""><span> しない</span>
                        </div>
                        <div class="col-xs-4 no-padding">
                            <input type="radio" id="" name="IndividualDepositReportSwitch" value=""><span> する</span>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualDepositReportOrder" value=""><span> 消費者コード</span>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <input type="radio" id="" name="IndividualDepositReportOrder" value=""><span> 集金順路</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 border1 no-padding">
                    <p class="backend">連続伝票入力</p>

                    <div class="col-xs-12">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-3">
                            自動表示
                        </div>
                        <div class="col-xs-3">
                            切替順序
                        </div>
                    </div>
                    <div class="col-xs-12 border-margin">
                        <div class="col-xs-2">
                            <p>検針伝票</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-4 no-padding">
                                <input type="radio" id="" name="ContinuousDeliveryReportSwitch" value=""><span> しない</span>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="radio" id="" name="ContinuousDeliveryReportSwitch" value=""><span> する</span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-6 no-padding">
                                <input type="radio" id="" name="ContinuousDeliveryReportOrder" value=""><span> 消費者コード</span>
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="radio" id="" name="ContinuousDeliveryReportOrder" value=""><span> 検針順路</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 border-margin border-margin-bottom">
                        <div class="col-xs-2">
                            <p>入金伝票</p>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-4 no-padding">
                                <input type="radio" id="" name="ContinuousDepositReportSwitch" value=""><span> しない</span>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <input type="radio" id="" name="ContinuousDepositReportSwitch" value=""><span> する</span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="col-xs-6 no-padding">
                                <input type="radio" id="" name="ContinuousDepositReportOrder" value=""><span> 消費者コード</span>
                            </div>
                            <div class="col-xs-6 no-padding">
                                <input type="radio" id="" name="ContinuousDepositReportOrder" value=""><span> 集金順路</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
