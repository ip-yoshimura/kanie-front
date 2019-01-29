<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-md-10 col-xs-8 col-xs-12 no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">

        <div class="head-p ">
            <p>メータ交換入力画面
            </p>
        </div>
        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>消費者コード</p>
                    </div>
                    <div class="col-xs-1 col-xs-offset-1">
                        <div class="form-group">
                            <input id="trustStartId" name="trustStartId" placeholder="000" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="trustEndId" name="trustEndId" placeholder="999" class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-2 border-margin-exp">
                        <p class="ml-50">営業所・販売店</p>
                    </div>

                    <div class="col-xs-2 no-padding">
                        <div class="form-group">
                            <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                   value=""/>
                        </div>
                    </div>

                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="trustEndName" name="trustEndName" class="form-control" type="text"
                                   style="color: red;"
                                   value="閲覧"/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">指針情報

                </p>
                <div class="col-xs-12">
                    <label class="col-xs-2 no-padding">メータ交換日</label>

                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>

                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>
                    <label class="col-xs-2 no-padding ml-70">最新メータ交換情報 </label>
                    <label class="col-xs-1 no-padding ml-n-40">交換日 </label>

                    <div class="col-xs-2 ml-n-40">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="date" value=""/>
                        </div>
                    </div>


                </div>
                <div class="col-xs-12">
                    <div class="col-xs-2 no-padding">
                        <p>旧指針回転</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""> 0:回転なし</div>
                        <div class="col-xs-6 no-padding ml-n-30"><input type="radio" id="" name=""> 4,5,6:回転桁数
                        </div>
                    </div>
                    <div class="col-xs-1 no-padding col-xs-offset-2">
                        <p>旧指針回転</p>
                    </div>

                    <div class="col-xs-3 ml-n-10">
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""> 0:回転なしし</div>
                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""> 4,5,6:回転桁数
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>旧メータ指針</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-1 no-padding">
                        <p class="ml-20">旧指針</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>

                </div>
                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>新メータ指針</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-1 no-padding">
                        <p class="ml-20">新指針</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>

                </div>

                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-2 no-padding">
                        <p>作業担当者</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-3">

                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>作業担当者</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>

                </div>


            </div>


            <div class="col-xs-12 border1 no-padding bottom-box">

                <p class="back-end">設備情報</p>

                <div class="col-xs-12 border-margin border-">
                    <div class="col-xs-2 no-padding">
                        <p>ガスメータ有無</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>
                    </div>
                    <div class="col-xs-1">

                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>設定区分</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">
                        <select class="form-control">
                            <option>Ⅰ</option>
                            <option>Ⅱ</option>
                            <option>Ⅲ</option>
                            <option>L</option>
                            <option>M</option>
                            <option>S</option>
                            <option>自動</option>
                        </select>
                    </div>

                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>種別</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-3">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>S型調査日</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-xs-1">

                    </div>

                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>メーカ</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-3">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-1 no-padding">
                        <p>設定内容</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 標準 </span></div>
                        <div class="col-xs-9 no-padding"><input type="radio" id="" name=""><span> 機能・圧力監視等</span></div>
                    </div>


                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>型式</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-3">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-2 no-padding">
                        <p>ストーブの有無</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-6 no-padding ml-n-90"><input type="radio" id="" name=""><span> 有</span></div>
                        <div class="col-xs-6 no-padding ml-n-30"><input type="radio" id="" name=""><span> 無</span></div>
                    </div>


                </div>


                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>容量</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="number" class="form-control" placeholder="0.0">
                    </div>

                    <div class="col-xs-2 no-padding col-xs-offset-2">
                        <p style="">警報機との接続状況</p>
                    </div>
                    <div class="col-xs-4 ">
                        <div class="col-xs-12">
                            <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 接続</span></div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span class="font-exp-size2"> 併設</span>
                            </div>
                            <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> DAアダプター</span>
                            </div>
                            <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span class="font-exp-size2"> 不要</span>
                            </div>
                        </div>

                    </div>




                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>設備年月</p>
                    </div>
                    <div class="col-xs-2 ">
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-2 no-padding">
                        <p>集中監視機能の有無</p>
                    </div>
                    <div class="col-xs-3">
                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 接続</span></div>
                        <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span class=" "> 無</span>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>入口</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
                    </div>


                </div>


                <div class="col-xs-12 border-margin">
                    <div class="col-xs-2 no-padding">
                        <p>入口</p>
                    </div>

                    <div class="col-xs-3">
                        <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 左</span></div>
                        <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span class=" "> 右</span>
                        </div>
                    </div>


                </div>

                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-2 no-padding">
                        <p>製造番号</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="date" class="form-control">
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