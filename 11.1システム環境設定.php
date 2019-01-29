<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10   no-padding body-background">

    <div class="col-md-12 col-xs-12 no-padding">
        <div class="head-p">
            <p>システム環境設定</p>
        </div>

        <form action="" method="POST">
            <div class="col-xs-12">


                <div class="col-xs-6 no-padding">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">締日</p>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-3"><p>会計年度開始月</p></div>
                            <div class=" col-xs-2 no-padding">

                                <input id="consumerCodeStartName" name="consumerCodeStartName" class="form-control"
                                       type="number" value=""/>

                            </div>
                            <div class="col-xs-1 border-margin-exp">
                                <span>日</span>
                            </div>
                            <div class="col-xs-5 border-margin-exp no-padding">
                                <span>（8月1日から新年度）</span>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding border-margin">
                            <div class="col-xs-2"><p>売上締日</p></div>
                            <div class="col-xs-2 no-padding">
                                <div class="form-group">
                                    <input id="consumerCodeStartName" placeholder="0" name="consumerCodeStartName"
                                           class="form-control" type="number"
                                           value=""/>
                                </div>
                            </div>
                            <div class="col-xs-1 border-margin-exp">
                                <span>日</span>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>仕入締日</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <div class="form-group">
                                    <input id="consumerCodeStartName" placeholder="0" name="consumerCodeStartName"
                                           class="form-control" type="number"
                                           value=""/>
                                </div>
                            </div>

                            <div class="col-xs-1 border-margin-exp">
                                <span>日</span>
                            </div>

                        </div>
                        <div class="col-xs-12 border-margin-bottom ">
                            <div class="col-xs-2 no-padding">
                                <p>支払い予定日</p>
                            </div>
                            <div class="col-xs-6 no-padding">
                                <div class="col-xs-12">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span>1:当月</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span>2:翌月</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span>3:翌々月</span></div>

                                </div>
<!--                                <div class="form-group">-->
<!--                                    <select class="form-control" id="form-type" name="form-type">-->
<!--                                        <option>1:当月</option>-->
<!--                                        <option>2:翌月</option>-->
<!--                                        <option>3:翌々月</option>-->
<!--                                    </select>-->
<!--                                </div>-->
                            </div>
                            <div class="col-xs-3">
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="col-xs-1 border-margin-exp">
                                <span>日</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 border1 no-padding ">
                            <p class="backend">マスタ保守</p>
                            <div class="col-xs-6">
                                <p>消費者マスタの予備コード表示</p>
                            </div>
                            <div class="col-xs-4">
                                <div class="col-xs-5 no-padding"><input type="radio" id="" name="spareCode" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('spareCode', 'spareCodeId')"><span> しない</span>
                                </div>
                                <div class="col-xs-5 no-padding"><input type="radio" id="" name="spareCode"
                                                                        value="spareCode"
                                                                        onclick="$.fn.radioButtonSelectionChanged('spareCode', 'spareCodeId')"><span> する</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">
                                検針・配送業務</p>
                            <div class="col-xs-12 no-padding">

                                <div class="col-xs-4">
                                    <p>検配同時伝票の使用</p>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="deliverySlips"
                                                                            value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('deliverySlips', 'deliverySlipsId')"><span>しない</span>
                                    </div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="deliverySlips"
                                                                            value="deliverySlips"
                                                                            onclick="$.fn.radioButtonSelectionChanged('deliverySlips', 'deliverySlipsId')"><span> する</span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <span>バス判断日数標準値</span>
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">

                                </div>

                            </div>
                            <div class="col-xs-12 no-padding">

                                <div class="col-xs-4">
                                    <p>楊逵整理番号の使用</p>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="referenceNumber"
                                                                            value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('referenceNumber', 'referenceNumberId')"><span> しない</span>
                                    </div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="referenceNumber"
                                                                            value="referenceNumber"
                                                                            onclick="$.fn.radioButtonSelectionChanged('referenceNumber', 'referenceNumberId')"><span> する</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12">

                                <div class="col-xs-5">
                                    <span>整理番号による容器交換管理 </span>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="container"
                                                                            value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"><span> しない</span>
                                    </div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name="container"
                                                                            value="container"
                                                                            onclick="$.fn.radioButtonSelectionChanged('container', 'containerId')"><span> する</span>
                                    </div>


                                </div>
                                <div class="col-xs-12 no-padding">

                                    <div class="col-xs-4 no-padding">
                                        <p>使用量の上限チェック</p>
                                    </div>
                                    <div class="col-xs-4 no-padding">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="checkupper"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('checkupper', 'checkupperId')"><span> しない</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="checkupper"
                                                                                value="checkupper"
                                                                                onclick="$.fn.radioButtonSelectionChanged('checkupper', 'checkupperId')"><span> する</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding">
                                    <div class="col-xs-4 no-padding">
                                        <p>使用量の前月比 上限</p>
                                    </div>
                                    <div class="col-xs-2 no-padding">
                                        <input type="number" class="form-control" placeholder="0">

                                    </div>
                                    <div class="col-xs-1 border-margin-exp">
                                        <span>%</span>
                                    </div>
                                    <div class="col-xs-2">
                                        <p>下限</p>
                                    </div>
                                    <div class="col-xs-2 no-padding">
                                        <input type="number" class="form-control" placeholder="0">

                                    </div>
                                    <div class="col-xs-1">
                                        <span>%</span>
                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding">

                                    <div class="col-xs-3 no-padding">
                                        <p>開栓検針</p>
                                    </div>
                                    <div class="col-xs-4 no-padding">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="openingMeter"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('openingMeter', 'openingMeterId')"><span> しない</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="openingMeter"
                                                                                value="openingMeter"
                                                                                onclick="$.fn.radioButtonSelectionChanged('openingMeter', 'openingMeterId')"><span>する</span>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-xs-12 no-padding">

                                    <div class="col-xs-4 no-padding">
                                        <p>配送親予測計算区分</p>
                                    </div>
                                    <div class="col-xs-4 no-padding">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="deliveryParent"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('deliveryParent', 'deliveryParentId')"><span>通常</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="deliveryParent"
                                                                                value="deliveryParent"
                                                                                onclick="$.fn.radioButtonSelectionChanged('deliveryParent', 'deliveryParentId')"><span>検針のみ</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xs-12 no-padding">

                                    <div class="col-xs-5 no-padding">
                                        <p>配送予測での検配間消費量の使用</p>
                                    </div>
                                    <div class="col-xs-4 ">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="consumption"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('consumption', 'consumptionId')"><span>しない</span>
                                        </div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name="consumption"
                                                                                value="all"
                                                                                onclick="$.fn.radioButtonSelectionChanged('consumption', 'consumptionId')"><span>する</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xs-12 border1 no-padding bottom-box">
                            <p class="backend">簡易ガス日割計算条件</p>
                            <div class="col-xs-2">
                                <p>定期検針</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control" placeholder="0">

                            </div>
                            <div class="col-xs-2 border-margin-exp">
                                <span>日以内</span>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>供給・再開</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control" placeholder="0">

                            </div>
                            <div class="col-xs-2 border-margin-exp">
                                <span>日以内</span>
                            </div>


                            <div class="col-xs-12   border-margin border-margin-bottom">

                                <div class="col-xs-2 no-padding">
                                    <p>転出・停止</p>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="number" class="form-control" placeholder="0">

                                </div>
                                <div class="col-xs-3 border-margin-exp">
                                    <span>日以内</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">請求業務</p>
                        <div class="col-xs-12 no-padding">

                            <div class="col-xs-4">
                                <p>ガス料金調整額</p>
                            </div>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="0">

                            </div>


                        </div>
                        <div class="col-xs-12 no-padding border-margin">

                            <div class="col-xs-6">
                                <p>請求金額0円の消費者印字</p>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <div class="col-xs-5 no-padding"><input type="radio" id="" name="consumer" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('consumer', 'consumerId')"><span> しない</span>
                                </div>
                                <div class="col-xs-5 no-padding"><input type="radio" id="" name="consumer"
                                                                        value="consumer"
                                                                        onclick="$.fn.radioButtonSelectionChanged('consumer', 'consumerId')"><span> する</span>
                                </div>


                            </div>


                        </div>
                        <div class="col-xs-12 no-padding">

                            <div class="col-xs-6">
                                <p>請求明細表示の切替順</p>
                            </div>
                            <div class="col-xs-6 no-padding">
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name="consumer_2" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('consumer_2', 'consumer_2Id')"><span> 消費者コード</span>
                                </div>
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name="consumer_2"
                                                                        value="consumer"
                                                                        onclick="$.fn.radioButtonSelectionChanged('consumer_2', 'consumer_2Id')"><span> 検針順路</span>
                                </div>


                            </div>


                        </div>

                        <div class="col-xs-12 no-padding">

                            <div class="col-xs-4">
                                <p>不能解除入金率</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1 border-margin-exp">

                                <span>%</span>
                            </div>
                            <div class="col-xs-4 no-padding  border-margin-exp">
                                (不能額に対する入金率）

                            </div>


                        </div>

                        <div class="col-xs-12 no-padding border-margin border-margin-bottom">

                            <div class="col-xs-4">
                                <p>売掛調整入金区分</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-6">
                                <select class="form-control">
                                    <option>"相殺</option>
                                    <option>小切手</option>
                                    <option>振替</option>
                                    <option>"振込</option>
                                    <option>コンビニ</option>
                                    <option>充当</option>
                                    <option>クレジット</option>
                                    <option>償却</option>
                                    <option>その他"</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding">
                        <p class="backend">消費税</p>
                        <div class="col-xs-12 ">

                            <div class="col-xs-3 no-padding ">

                            </div>
                            <div class="col-xs-4 no-padding ">
                                <span>消費税率</span>

                            </div>

                            <div class="col-xs-4 no-padding">
                                <span>端数処理</span>

                            </div>

                        </div>
                        <div class="col-xs-12 border-margin ">

                            <div class="col-xs-3 no-padding">
                                <p>ガス売上</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1 ">
                                <span>%</span>

                            </div>
                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>


                        </div>
                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-3 no-padding">
                                <p>リース売上</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1">
                                <span>%</span>

                            </div>

                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-3 no-padding">
                                <p>その他売上</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1">
                                %

                            </div>
                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-3 no-padding">
                                <p>その他売上</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1">
                                %

                            </div>
                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>

                        </div>

                        <div class="col-xs-12 border-margin">

                            <div class="col-xs-3 no-padding">
                                <p>仕入</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1">
                                %

                            </div>
                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-xs-12 border-margin border-margin-bottom">

                            <div class="col-xs-3 no-padding">
                                <p>オートガス伝票</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" class="form-control">

                            </div>
                            <div class="col-xs-1">
                                %

                            </div>
                            <div class="col-xs-4 no-padding">

                                <select class="form-control" name="" id="">
                                    <option value="">11:小数以下切捨て</option>
                                    <option value="">12:小数以下四捨五入</option>
                                    <option value="">13:小数以下切上げ</option>
                                    <option value="">21:1円桁切捨て</option>
                                    <option value="">22:1円桁四捨五入</option>
                                    <option value="">23:1円桁切上げ</option>
                                </select>

                            </div>

                        </div>

                    </div>


                    <div class="col-xs-12  no-padding  ">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">共通</p>
                            <div class="col-xs-12 no-padding">
                                <div class="col-xs-4  ">
                                    <p>元帳保管期間 販売</p>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="number" class="form-control">

                                </div>
                                <div class="col-xs-1 border-margin-exp">
                                    <span class="">年</span>


                                </div>
                                <div class="col-xs-1 no-padding">
                                    <p>仕入</p>

                                </div>
                                <div class="col-xs-2 no-padding">
                                    <input type="number" class="form-control">

                                </div>
                                <div class="col-xs-1 border-margin-exp">
                                    <span class="">年</span>
                                </div>
                            </div>

                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-3 no-padding">
                                    <p>金額への”+/-”表記</p>
                                </div>
                                <div class="col-xs-9">
                                    <div class="col-xs-3 "><input type="radio" id="" name="amount" value="all"
                                                                            onclick="$.fn.radioButtonSelectionChanged('amount', 'amountId')"><span> しない</span>
                                    </div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name="amount"
                                                                            value="amount"
                                                                            onclick="$.fn.radioButtonSelectionChanged('amount', 'amountId')"><span> する</span>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>


                    <div class="col-xs-12 bottom-box no-padding">
                        <div class="col-xs-12 border1 no-padding">
                            <p class="backend">仕入業務</p>
                            <div class="col-xs-3">
                                <p>在庫評価法</p>
                            </div>
                            <div class="col-xs-9 no-padding">
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="inventory" value="all"
                                                                        onclick="$.fn.radioButtonSelectionChanged('inventory', 'inventoryId')"><span> 先入先出法</span>
                                </div>
                                <div class="col-xs-3 no-padding"><input type="radio" id="" name="inventory"
                                                                        value="inventory"
                                                                        onclick="$.fn.radioButtonSelectionChanged('inventory', 'inventoryId')"><span> 移動平均法</span>
                                </div>
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name="inventory"
                                                                        value="inventory"
                                                                        onclick="$.fn.radioButtonSelectionChanged('inventory', 'inventoryId')"><span> 最終仕入原価法</span>
                                </div>


                            </div>
                        </div>


                    </div>


        </form>

    </div>
</div>
<?php
include "footer.php"
?>


</div>
</div>

</body>

</html>