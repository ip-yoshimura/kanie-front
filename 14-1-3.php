<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding body-background">


    <div class="col-xs-12 no-padding">
        <div class="head-p">
            <p class=" ">保安点検調査票入力</p>
        </div>

        <div class="col-xs-12 no-padding">
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>消費者コード</p>
            </div>
            <div class="col-xs-1">
                <input class="form-control" id="directStartId" name="directStartId"
                       type="number" value="" onchange="$.fn.onInputValueChange('directStartId', 'directStartName')">
            </div>
            <div class="col-xs-3">
                <input class="form-control" type="text" id="directStartName" name="directStartName">
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>営・販</p>
            </div>
            <div class="col-xs-3 ml-n-20">
                <input class="form-control" id="salestStartId" name="salestStartId"
                       type="text" value="" onchange="$.fn.onInputValueChange('salestStartId', 'salestStartIdStartName')">
            </div>
            <div class="col-xs-1">
                <input class="form-control" type="text" id="salestStartIdStartName" name="salestStartIdStartName">
            </div>
            <div class="col-xs-1 td-style">
                <input type="button" class="form-control" value="履歴">
            </div>
            <div class="col-xs-1">
                 <input type="text td-style" style="color:red;" class="form-control" value="閲覧">
            </div>
        </div>

        <div class="col-xs-12 border-margin no-padding">
            <div class="col-xs-1 no-padding border-margin-exp ">
                <p>住所</p>
            </div>
            <div class="col-xs-8">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>センターコード</p>
            </div>
            <div class="col-xs-2 ">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 border-margin no-padding">
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>調査票番号</p>
            </div>
            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>点検種別</p>
            </div>
            <div class="col-xs-1">
                <input type="number" class="form-control">
            </div>
            <div class="col-xs-2">
                <select class="form-control">
                    <option name="" id="">供給開始時点検調査</option>
                    <option name="" id="">容器交換時点検</option>
                    <option name="" id="">-----------------</option>
                    <option name="" id="">定期設備点検・調査</option>
                    <option name="" id="">消費設備再調査</option>
                    <option name="" id="">CO一斉点検</option>
                    <option name="" id="">埋設管点検調査</option>
                    <option name="" id="">定期自主点検（高圧）</option>
                    <option name="" id="">本支管等点検（簡易）</option>
                    <option name="" id="">消費機器調査（簡易）</option>
                </select>
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>実施日</p>
            </div>
            <div class="col-xs-2">
                <input type="date" class="form-control">
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>結果</p>
            </div>
            <div class="col-xs-2 no-padding mt-3 ml-n-10">
                <div class="col-xs-2 no-padding">
                    <input type="radio" id="result" name="result"> <span> 良</span>
                </div>
                <div class="col-xs-3 no-padding">
                    <input type="radio" id="result" name="result"><span> 不良</span>
                </div>
                <div class="col-xs-3 no-padding">
                    <input type="radio" id="result" name="result"><span> 不能</span>
                </div>
                <div class="col-xs-4 no-padding">
                    <input type="radio" id="result" name="result"><span> その他</span>
                </div>
            </div>
        </div>

        <div class="col-xs-12 border-margin no-padding">
            <div class="col-xs-1 border-margin-exp">
                <p>調査員</p>
            </div>
            <div class="col-xs-1">
                <input class="form-control" id="investigatorId" name="investigatorId"
                       type="text" value="" onchange="$.fn.onInputValueChange('investigatorId', 'investigatorIdName')">
            </div>
            <div class="col-xs-3">
                <input class="form-control" type="text" id="investigatorIdName" name="investigatorIdName">
            </div>
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>保安機関</p>
            </div>
            <div class="col-xs-1">
                <input class="form-control" id="securityAgencyId" name="securityAgencyId"
                       type="text" value="" onchange="$.fn.onInputValueChange('securityAgencyId', 'securityAgencyIdName')">
            </div>
            <div class="col-xs-5">
                <input class="form-control" type="text" id="securityAgencyIdName" name="securityAgencyIdName">
            </div>
        </div>

        <div class="col-xs-12 border-margin border-margin-bottom no-padding">
            <div class="col-xs-1 no-padding border-margin-exp">
                <p>備考</p>
            </div>
            <div class="col-xs-8">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-2 col-xs-offset-1">
                <button class="form-control">保安台帳</button>
            </div>
        </div>

        <!--tab -part-->
        <div class="col-xs-12 menu-border menu-pad mar-nav no-padding" style="">
            <ul class="nav nav-tabs ul-style">
                <li class="active li-pad"><a data-toggle="tab" href="#home">供給設備</a></li>
                <li><a data-toggle="tab" href="#menu1">漏洩・その他</a></li>
                <li><a data-toggle="tab" href="#menu2">消費設備</a></li>
                <li><a data-toggle="tab" href="#menu3">給排気等</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active table-margin tab-scroll">
                    <div class="col-xs-12 border1 no-padding">
                        <div class="col-xs-12 no-padding">
                            <p class="back-end">貯蔵設備</p>
                        </div>

                        <div class="col-xs-12 table-margin">
                            <div class="col-xs-1  no-padding border-margin-exp">
                                <p>容器</p>
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-1 no-padding border-margin-exp">
                                <p>判定</p>
                            </div>
                            <div class="col-xs-1 ml-n-20">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-5 ">
                                <table class="table-bordered col-xs-12 no-padding">
                                    <tr class="bg-color">
                                        <th class="td-style">発生量</th>
                                        <th class="td-style">屋外</th>
                                        <th class="td-style">火気距離</th>
                                        <th class="td-style">転落転倒</th>
                                        <th class="td-style">腐食</th>
                                        <th class="td-style">温度上昇</th>
                                    </tr>
                                    <tr>
                                        <td class="td-style"><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding">
                        <div class="col-xs-12 no-padding">
                            <p class="back-end">供給管・ホース・その他</p>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <table class="table-bordered col-xs-12">
                                    <tr class="bg-color ">
                                        <th></th>
                                        <th class="td-style col-xs-2 w-80">規格</th>
                                        <th col-xs-2 class="td-style">キズ腐食</th>
                                        <th col-xs-1 class="td-style">腐食防止</th>
                                        <th col-xs-2 class="td-style">埋設被覆</th>
                                        <th col-xs-2 class="td-style">バルブ</th>
                                        <th col-xs-2 class="td-style">メータガス栓</th>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style w-80">供給管</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>
                                <table class="table-bordered col-xs-10 border-margin">
                                    <tr class="bg-color">
                                        <th></th>
                                        <th class="td-style">モレ</th>
                                        <th class="td-style">ワレキズ</th>
                                        <th class="td-style">規格</th>
                                        <th class="td-style">交換期限</th>
                                        <th class="td-style">判定</th>
                                    </tr>
                                    <tr>
                                        <td class="td-style w-80">高圧ホース</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="td-style w-80">低圧ホース</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="col-xs-3 font-exp-size">
                                <table class="table-bordered col-xs-12">
                                    <tr class="bg-color">
                                        <td></td>
                                        <td class="td-style">判定</td>
                                    </tr>
                                    <tr>
                                        <td class="w-120">ガス放出防止器</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td>警報遮断器</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td>耐震遮断器</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td>危険標識</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-3 no-padding">
                                <div class="col-xs-12">
				    <p>(1:良 2:不良 3:不能 4:その他)
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <div class="no-padding ">
                            <p class="back-end">調整器</p>
                        </div>

                        <div class="col-xs-9">
                            <table class="table-bordered table-margin col-xs-12">
                                <tr class="bg-color  ">
                                    <th class="td-style"></th>
                                    <th class="td-style">容量</th>
                                    <th class="td-style">判定</th>
                                    <th class="col-xs-1 td-style"></th>
                                    <th class="td-style">型式</th>
                                    <th class="td-style">自手</th>
                                    <th class="td-style">入口圧</th>
                                    <th class="td-style">閉塞圧</th>
                                    <th class="td-style">調整圧</th>
                                    <th class="td-style">判定</th>
                                    <th class="td-style">交換期限</th>
                                    <th class="td-style">判定</th>
                                </tr>
                                <tr>
                                    <td class="td-style w-80">(使用側)</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td class="td-style w-80">(予備側)</td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-xs-3 border-margin">
			    <div class="col-xs-12">
				<p>(容量:kg/h 圧力:KPa)</p>
			    </div>
			    <div class="col-xs-12">
				<p>(自手 1:自動 2:手動)</p>
			    </div>
                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <div class="col-xs-12 no-padding  ">
                            <p class="back-end">ガスメータ</p>
                        </div>

                        <div class="col-xs-8 border-margin-bottom">
                            <table class="table-bordered col-xs-12">
                                <tr class="bg-color  ">
                                    <th class="td-style">容量</th>
                                    <th class="td-style">判定</th>
                                    <th class="w-15"></th>
                                    <th class="td-style ">種別<br>型式</th>
                                    <th class="td-style">電話回線<br>入口</th>
                                    <th class="td-style">遮断機能<br>異常表示</th>
                                    <th class="td-style">検定期限</th>
                                    <th class="td-style">判定</th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td> </td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td> </td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                    <td><input type="text" class="form-control tbl-input"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-12">
                                <p>(容量：m3/h)</p>
                            </div>
                            <div class="col-xs-12">
                                <p>(電話回線 1:有 2:無) (入口 1:左 2:右)</p>
                            </div>
                            <div class="col-xs-12">
                                <p>(判定 1:良 2:不良 3:不能 4:その他)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- two -->
                <div id="menu1" class="tab-pane fade table-margin no-padding tab-scroll2">
                    <div class="col-xs-12 no-padding">
                        <div class="  col-xs-8 no-padding " style=" ">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="back-end">漏洩等検査</p>

                                <div class="col-xs-5 border-margin-bottom">
                                    <table class="table-bordered   col-xs-12">
                                        <tr class="bg-color">
                                            <th></th>
                                            <th class="td-style">初圧</th>
                                            <th class="td-style">終圧</th>
                                            <th class="td-style">時間</th>
                                            <th class="td-style">判定</th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color td-style w-80">漏洩試験</th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color td-style w-80">気密試験</th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                            <th><input type="text" class="form-control tbl-input"></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-7">
                                    <p>(初圧、終圧:KPa)</p>
                                    <p>(時間:分)</p>
				    <p>(判定 1:良 2:不良 3:不能 4:その他)</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-4">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="back-end">小型容器保管方法</p>

                                <div class="col-xs-12 p-12">
                                    <input type="text" class="form-control">
                                    <div class="col-xs-3 no-padding border-margin">
                                        <p class="">判定</p>
                                    </div>
                                    <div class="col-xs-2 border-margin-exp no-padding">
                                        <input type="text" class="form-control border-radius">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- three -->
                <div id="menu2" class="tab-pane fade table-margin tab-scroll">
                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <div class="">
                            <p class="back-end">消費設備</p>
                        </div>

                        <div class="col-xs-12 no-padding margin-top">
                            <div class="col-xs-12 text-center">
                                    <label class="col-xs-12 no-padding col-xs-offset-1 mt-2"> <p>(年月確認 空白,0:製造年月入力 1:未調査 2:不明) (1:良 2:不良 3:不能 4:その他)</p></label>
                            </div>

                            <div class="col-xs-12 table-scroll">
                                <table class=" table table-bordered col-xs-12">
                                    <div class="col-xs-12 no-padding">
                                    <div class=" td-style bg-color ml-40 left-1" style="">調査項目</div>
                                    <div class=" td-style bg-color left-2" style="">末端閉止弁</div>
                                    </div>
                                    <tr class="bg-color">
                                        <td></td>
                                        <td></td>
                                        <td>燃焼器具種別 型式</td>
                                        <td>台数確認</td>
                                        <td>消費量 製造</td>
                                        <td>モレ</td>
                                        <td>ゴム管</td>
                                        <td>ホース バンド</td>
                                        <td>金属 フレキ</td>
                                        <td>規格適合</td>
                                        <td>燃焼状況</td>
                                        <td>安全装置</td>
                                        <td>設置状況</td>
                                        <td>ホース ガス栓</td>
                                        <td>コンセントガス栓</td>
                                        <td>フレキ ガス栓</td>
                                        <td>ねじ ガス栓</td>
                                        <td>キャッププラグ</td>
                                        <td>三ツ又</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">1</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">2</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">3</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">4</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">5</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">6</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color">7</td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                </table>
                            </div>
                            <div class="col-xs-12 margin-top margin-bottom border-margin-bottom">
                                <div class="col-xs-1 no-padding border-margin-exp col-xs-offset-2">
                                    <p>消費量合計</p>
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2 border-margin-exp ml-n-20">
                                    <p>kW</p>
                                </div>
			    </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 border1 no-padding ">
                            <p class="back-end">末端ガス栓・配管</p>

                            <div class="col-xs-3">
                                <table class="table-bordered col-xs-12 table-margin">
                                    <tr class="bg-color">
                                        <td class=""></td>
                                        <td class="td-style">遊び栓</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style col-xs-6">末端ガス栓</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-6">
                                <table class="table-bordered table-margin col-xs-12">
                                    <tr class="bg-color">
                                        <td></td>
                                        <td class="td-style">規格</td>
                                        <td class="td-style">キズ腐食</td>
                                        <td class="td-style">腐食防止</td>
                                        <td class="td-style">埋設被覆</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style w-50">配管</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- four -->
            <div id="menu3" class="tab-pane fade table-margin tab-scroll">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 border1 no-padding">
                        <p class="back-end ">給排気</p>

                        <div class="col-xs-12">
                            <div class="col-xs-8 table-margin">
                                <table class="table-bordered col-xs-12">
                                    <tr class="bg-color">
                                        <td></td>
                                        <td class="td-style">型式</td>
                                        <td class="td-style">CO<br/>濃度</td>
                                        <td class="td-style w-15"></td>
                                        <td class="td-style">給気</td>
                                        <td class="td-style">材質</td>
                                        <td class="td-style">逆風止</td>
                                        <td class="td-style">有効<br/>面積</td>
                                        <td class="td-style">先端</td>
                                        <td class="td-style">交差</td>
                                        <td class="td-style">高さ</td>
                                        <td class="td-style">隙間</td>
                                        <td class="td-style">フード</td>
                                        <td class="td-style">排気</td>
                                        <td class="td-style">不燃<br/>防止<br/>装置</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style col-xs-2">給湯器</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"> </td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">風呂釜</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"> </td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">小型給湯器1</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"> </td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">小型給湯器2</td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"> </td>
                                        <td></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                        <td><input type="text" class="form-control tbl-input"></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-xs-4 table-margin">
                                <div class="col-xs-12">
                                        <p>(型式 1:CF 2:FE 3:BF 4:FF 5:RF)</p>
                                </div>

                                <div class="col-xs-12">
					<p>(1:良 2:不良 3:不能 4:その他)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">ガス漏れ警報器</p>
                <div class="col-xs-12">
                    <div class="col-xs-8">
                        <table class="table table-bordered col-xs-12">
                            <tr class="bg-color">
                                <td></td>
                                <td></td>
                                <td class="td-style col-xs-3">種別</td>
                                <td class="td-style">製造年月</td>
                                <td class="td-style">交換期限</td>
                                <td class="td-style">感度</td>
                                <td class="td-style">義務</td>
                                <td class="td-style">電話<br/>回線<br/>接続</td>
                                <td class="td-style">メータ<br/>連動</td>
                                <td class="td-style">位置</td>
                            </tr>
                            <tr>
                                <td class="bg-color">1</td>
                                <td></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="bg-color">2</td>
                                <td></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                            <tr>
                                <td class="bg-color">3</td>
                                <td></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                                <td><input type="text" class="form-control tbl-input"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xs-4">
                        <div class="col-xs-12">
			    <p>(1:良 2:不良 3:不能 4:その他)
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="back-end">部品交換</p>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>ホースバンド</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp ">
                        <p>キャップ</p>
                    </div>
                    <div class="col-xs-1 ml-n-20">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>ゴムホース箇所</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control border-radius">
                    </div>




                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>ゴムホース長さ</p>
                    </div>
                    <div class="col-xs-1">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>点検口</p>
                    </div>
                    <div class="col-xs-1 ml-n-40">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-">

                    </div>
                    <div class="col-xs-2">

                    </div>
                </div>

                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>警報器番号</p>
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control border-radius">
                    </div>


                    <div class="col-xs-5">
                        <div class="col-xs-2 no-padding">
                            <input type="radio" id="alarmUnitNumber" name="alarmUnitNumber"><span class=""> 新規</span>
                        </div>
                        <div class="col-xs-3 no-padding">
                            <input type="radio" id="alarmUnitNumber" name="alarmUnitNumber"><span class=""> 交換</span>
                        </div>

                    </div>

                </div>


            </div>


        </div>
    </div>

    </div>

    <!--tab -part-->

    <?php
    include "footer.php"
    ?>


    </form>
    <!--</div>-->


</div>

</div>

</body>

</html>
