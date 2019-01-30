<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-8 col-md-10 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding head-color body-background">
        <div class="head-p">
            <p>クライアント環境設定
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 border1 no-padding">


                    <p class="backend">
                        ∫単票（レーザ・プリンタ</p>

                <div class="col-xs-8 border-margin">
                    <div class="col-xs-3">
                        <p>A4縦置用紙</p>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-4">


                        <button type="button text-center" class="btn">設定

                        </button>
                    </div>
                </div>


                <div class="col-xs-8" style="margin-top:5px;">
                    <div class="col-xs-3">
                        <p>B4横置用紙</p>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <button type="button text-center" class="btn">設定

                        </button>
                    </div>
                </div>
                <div class="col-xs-8 border-margin-bottom" style="margin-top:5px;">
                    <div class="col-xs-3">
                        <p>B5縦置用紙</p>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-4">
                        <button type="button text-center" class="btn">設定

                        </button>
                    </div>
                </div>

            </div>
        </form>
        <div class="col-xs-12 no-padding overflow-bottom ">
            <div class="col-xs-12 border1 no-padding">

                    <p class="backend">連続紙（ドット・プリンタ）</p>

                <div class="col-xs-6" style="padding:0;">
                    <form id="meter" action="/gas/meter-reading" method="POST">


                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>検針票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>容器交換票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>検針兼容器交換票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>ハガキ請求書</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>業務用請求書</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>納品書</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>入金票（消費者</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8 border-margin-bottom" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>振替案内</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-xs-6" style="padding:0;  margin-top: 20px;">

                    <form id="meter" action="/gas/meter-reading" method="POST">

                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>メータ交換伝票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>入居票・退去票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>仕入伝票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>振替不能案内</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p></p>
                            </div>
                            <div class="col-xs-5">

                            </div>
                            <div class="col-xs-2">

                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>保安点検調査票</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>集金依頼書</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-top:5px;">
                            <div class="col-xs-5">
                                <p>B5縦置用紙</p>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <button type="button text-center" class="btn">設定

                                </button>
                            </div>
                        </div>


                    </form>
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