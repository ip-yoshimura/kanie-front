<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding body-background">


    <div class="col-xs-12 no-padding">
        <div class="head-p">
            <p class=" ">
                保安点検調査票入力</p>
        </div>


        <div class="col-xs-12 no-padding">

            <div class="col-xs-1 no-padding">
                <p>消費者コード</p>
            </div>

            <div class="col-xs-1  ">
                <input type="text" class="form-control">
            </div>

            <div class="col-xs-3">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 no-padding">
                <p>営・販</p>
            </div>

            <div class="col-xs-3">
                <input type="text" class="form-control">
            </div>

            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 td-style">
                <input type="button" class="form-control" value="履歴">
            </div>
            <div class="col-xs-1" style="color:red;">
                <p>閲覧</p>
            </div>


        </div>

        <div class="col-xs-12 border-margin no-padding">

            <div class="col-xs-1 no-padding ">
                <p>住所</p>
            </div>

            <div class="col-xs-5  ">
                <input type="text" class="form-control">
            </div>

            <div class="col-xs-1 no-padding font-exp-size">
                <p>センターコード</p>
            </div>
            <div class="col-xs-5 ">
                <input type="text" class="form-control">
            </div>


        </div>
        <div class="col-xs-12 border-margin no-padding">

            <div class="col-xs-1 no-padding">
                <p>調査票番号</p>
            </div>

            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>

            <div class="col-xs-1 no-padding">
                <p>点検種別</p>
            </div>
            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-2">
                <select class="form-control">
                    <option name="" id="">"供給開始時点検調査</option>
                    <option name="" id="">容器交換時点検</option>
                    <option name="" id="">-----------------</option>
                    <option name="" id="">定期設備点検・調査</option>
                    <option name="" id="">消費設備再調査</option>
                    <option name="" id="">CO一斉点検</option>
                    <option name="" id="">埋設管点検調査</option>
                    <option name="" id="">定期自主点検（高圧）</option>
                    <option name="" id="">本支管等点検（簡易）</option>
                    <option name="" id="">消費機器調査（簡易）"</option>
                </select>
            </div>
            <div class="col-xs-1 no-padding">
                <p>実施日</p>
            </div>

            <div class="col-xs-2">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 no-padding">
                <p>結果</p>
            </div>

            <div class="col-xs-2 no-padding">

                <input type="radio"><span class="font-exp-size1"> 良</span>
                <input type="radio"><span class="font-exp-size1"> 不良</span>
                <input type="radio"><span class="font-exp-size1"> 不能</span>
                <input type="radio"><span class="font-exp-size1"> その他</span>

            </div>


        </div>

        <div class="col-xs-12 border-margin no-padding">

            <div class="col-xs-1">
                <p>調査員</p>
            </div>

            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-3">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-1 no-padding">
                <p>保安機関</p>
            </div>
            <div class="col-xs-1">
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-5">
                <input type="text" class="form-control">
            </div>


        </div>
        <div class="col-xs-12 border-margin border-margin-bottom no-padding">

            <div class="col-xs-1 no-padding">
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
                <li class="active li-pad"><a data-toggle="tab" href="#home">供給設備（A）</a></li>
                <li><a data-toggle="tab" href="#menu1">漏洩・その他（L）</a></li>
                <li><a data-toggle="tab" href="#menu2">消費設備（S)</a></li>
                <li><a data-toggle="tab" href="#menu3">
                        給排気等（T）</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active margin-top tab-scroll">
                    <div class="col-xs-12 border1 no-padding">
                        <div class="col-xs-12 no-padding">
                            <p class="backend">貯蔵設備</p>
                        </div>

                        <div class="col-xs-12  table-margin">
                            <div class="col-xs-1  no-padding">
                                <p>容器</p>
                            </div>
                            <div class="col-xs-1  ">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1  ">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1  ">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-1 no-padding">
                                <p>容器</p>
                            </div>
                            <div class="col-xs-1 no-padding">
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
                                        <td class="td-style">000</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>


                            <!-- kk -->

                        </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding">
                        <div class="col-xs-12 no-padding">
                            <p class="backend">供給管・ホース・その他</p>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <table class="table-bordered   col-xs-12">
                                    <tr class="bg-color ">
                                        <th></th>
                                        <th class="td-style col-xs-2">規格</th>
                                        <th col-xs-2 class="td-style">キズ腐食</th>
                                        <th col-xs-1 class="td-style">腐食防止</th>
                                        <th col-xs-2 class="td-style">
                                            埋設被覆
                                        </th>
                                        <th col-xs-2 class="td-style">バルブ

                                        </th>
                                        <th col-xs-2 class="td-style">メータガス栓</th>
                                    </tr>
                                    <tr>
                                        <td class="bg-color   td-style">供給管</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <table class="table-bordered col-xs-10 border-margin">
                                    <tr class="bg-color ">
                                        <th></th>
                                        <th class="td-style">モレ</th>
                                        <th class="td-style">ワレキズ</th>
                                        <th class="td-style">規格</th>
                                        <th class="td-style">
                                            交換期限
                                        </th>
                                        <th class="td-style">判定

                                        </th>

                                    </tr>
                                    <tr>
                                        <td class="td-style">高圧ホース</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td class="td-style">低圧ホース</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                </table>

                            </div>
                            <div class="col-xs-3 font-exp-size">
                                <table class="table table-bordered   col-xs-12 ">
                                    <tr class="bg-color">
                                        <td></td>
                                        <td>判定</td>
                                    </tr>
                                    <tr>
                                        <td>ガス放出防止器</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>警報遮断器</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>耐震遮断器</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>危険標識</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-3 no-padding">
                                <div class="col-xs-12">
                                    <div class="col-xs-5"><input type="radio"><span>良</span></div>
                                    <div class="col-xs-5"><input type="radio"><span>不良</span></div>


                                </div>
                                <div class="col-xs-12">
                                    <div class="col-xs-5"><input type="radio"><span>不能</span></div>
                                    <div class="col-xs-5"><input type="radio"><span>その他</span></div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12 border1 no-padding">
                        <div class="no-padding ">
                            <p class="backend">調整器</p>
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
                                    <td class="td-style">（使用側)</td>
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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="td-style">（呼び側)</td>
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
                                    <td></td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-xs-3 border-margin">
                            <p>容量:kg/h 圧力:KPa</p>
                            <div class="col-xs-2 no-padding">
                                <p>自手</p>
                            </div>
                            <div class="col-xs-8 no-padding ">
                                <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 自動</span>
                                </div>
                                <div class="col-xs-5 no-padding"><input type="radio" id="" name=""><span> 手動</span>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-xs-12 border1 no-padding bottom-box">
                        <div class="col-xs-12 no-padding  ">
                            <p class="backend">ガスメータ</p>
                        </div>


                        <div class="col-xs-8">
                            <table class="table-bordered col-xs-12" style="margin-top:15px;">
                                <tr class="bg-color  ">
                                    <th class="td-style">容量</th>
                                    <th class="td-style">判定</th>
                                    <th class="td-style">"種別<br>

                                        型式"
                                    </th>
                                    <th class="td-style">"電話回線<br>

                                        入口"
                                    </th>
                                    <th class="td-style">"遮断機能<br>

                                        異常表示
                                    </th>
                                    <th class="td-style">検定期限</th>
                                    <th class="td-style">判定</th>



                                </tr>
                                <tr>
                                    <td>0.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>
                                <tr>
                                    <td class="">0.00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                </tr>

                            </table>
                        </div>
                        <div class="col-xs-4">
                            <div class="col-xs-12  ">
                                <p>容量：m3/h</p>
                            </div>

                            <div class="col-xs-12  ">
                                <div class="col-xs-3 no-padding ">
                                    <p>電話開栓</p>
                                </div>
                                <div class="col-xs-7">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-3 no-padding">
                                    <p>入口</p>
                                </div>
                                <div class="col-xs-7">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 左</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 右</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-3 no-padding">
                                    <p>判定</p>
                                </div>
                                <div class="col-xs-9">
                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 良</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 不良</span>
                                    </div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>不能</span>
                                    </div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> その他</span>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <!-- two -->
                <div id="menu1" class="tab-pane fade margin-top no-padding tab-scroll2">
                    <div class="col-xs-12 no-padding">
                        <div class="  col-xs-8 no-padding " style=" ">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">漏洩検査</p>


                                <div class="col-xs-5">
                                    <table class="table-bordered   col-xs-12">
                                        <tr class="bg-color">
                                            <th></th>
                                            <th class="td-style">初圧</th>
                                            <th class="td-style">終圧</th>
                                            <th class="td-style">時間</th>
                                            <th class="td-style">判定</th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color td-style">漏洩試験</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color td-style">気密試験</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-xs-7  ">
                                    <p>初圧、終圧:KPa</p>
                                    <p>時間:分</p>
                                    <div class="col-xs-12 no-padding">
                                        <div class="col-xs-2 no-padding">
                                            <p>判定 </p>
                                        </div>
                                        <div class="col-xs-10 no-padding" style=" ">
                                            <div class="col-xs-2 no-padding"><span><input type="radio">良</span></div>
                                            <div class="col-xs-3"><span><input type="radio">不良</span></div>
                                            <div class="col-xs-3"><span><input type="radio">不能</span></div>
                                            <div class="col-xs-4"><span><input type="radio">その他</span></div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xs-3">
                            <div class="col-xs-12 border1 no-padding">
                                <p class="back-end">小型容器保管方法</p>

                                <div class="col-xs-12" style="padding:7px;">
                                    <input type="text" class="form-control ">
                                    <div class="col-xs-3 no-padding border-margin">
                                        <p class="">判定</p>

                                    </div>
                                    <div class="col-xs-9" style="margin-top:5px;">
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
                            <p class="backend">消費設備</p>
                        </div>

                        <div class="col-xs-12 no-padding margin-top">
                            <div class="col-xs-12 text-center">
                                    <label class="col-xs-1 no-padding col-xs-offset-3">年月確認 空白</label>

                                    <div class="col-xs-6  no-padding">
                                        <p> (0:製造年月入力 1:未調査 2:不明） （1:良 2:不良 3:不能 4:その他）</p>
                                    </div>


                            </div>


                            <div class="col-xs-12" style="height:300px; overflow-y: scroll;">
                                <table class=" table table-bordered col-xs-12">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-7 td-style bg-color">調査項目</div>
                                    <div class="col-xs-4 td-style bg-color  ">末端閉止弁</div>
                                    <tr class="bg-color">
                                        <td></td>
                                        <td></td>
                                        <td> 燃焼器具種別
                                            型式
                                        </td>
                                        <td>台数
                                            確認
                                        </td>
                                        <td>消費量
                                            製造
                                        </td>
                                        <td>モレ</td>
                                        <td>ゴム
                                            管
                                        </td>
                                        <td>ホース
                                            バンド
                                        </td>
                                        <td>金属
                                            フレキ
                                        </td>
                                        <td>規格
                                            適合
                                        </td>
                                        <td>燃焼
                                            状況
                                        </td>
                                        <td>安全
                                            装置
                                        </td>
                                        <td>設置
                                            状況
                                        </td>
                                        <td>ホース
                                            ガス
                                            栓
                                        </td>
                                        <td>コンセン
                                            トガス
                                            栓
                                        </td>
                                        <td>フレキ
                                            ガス
                                            栓
                                        </td>
                                        <td>ねじ
                                            ガス
                                            栓
                                        </td>
                                        <td>キャッ
                                            ププ
                                            ラグ
                                        </td>
                                        <td>三
                                            ツ
                                            又
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="bg-color">1</td>
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
                                        <td class="bg-color">2</td>
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
                                        <td class="bg-color">3</td>
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
                                        <td class="bg-color">4</td>
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
                                        <td class="bg-color">5</td>
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
                                        <td class="bg-color">6</td>
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
                                        <td class="bg-color">7</td>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>


                                </table>
                            </div>
                            <div class="col-xs-12 margin-top margin-bottom border-margin-bottom"
                            ">
                            <div class="col-xs-2">
                                <p>消費量合計</p>
                            </div>
                            <div class="col-xs-3">
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-xs-2">
                                <p>kg</p>
                            </div>
                            <div class="col-xs-5">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-12 border1 no-padding ">


                            <p class="back-end">末端ガス栓・配管</p>


                            <div class="col-xs-3">
                                <table class="table-bordered col-xs-12 table-margin">
                                    <tr class="bg-color">
                                        <td>-----</td>
                                        <td class="td-style">遊び栓</td>

                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">末端ガス栓</td>
                                        <td>-----</td>
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
                                        <td class="bg-color td-style">配管</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-3">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--        four-->
            <div id="menu3" class="tab-pane fade table-margin tab-scroll">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 border1 no-padding">

                        <p class="backend ">給排気</p>


                        <div class="col-xs-12">
                            <div class="col-xs-8 table-margin">
                                <table class="table-bordered col-xs-12">
                                    <tr class="bg-color">
                                        <td></td>
                                        <td class="td-style">型式</td>
                                        <td class="td-style">CO
                                            濃度
                                        </td>
                                        <td class="td-style"></td>
                                        <td class="td-style">給気</td>
                                        <td class="td-style">材質</td>
                                        <td class="td-style">逆風
                                            止
                                        </td>
                                        <td class="td-style">有効
                                            面積
                                        </td>
                                        <td class="td-style">先端</td>
                                        <td class="td-style">交差</td>
                                        <td class="td-style">高さ</td>
                                        <td class="td-style">隙間</td>
                                        <td class="td-style">フード</td>
                                        <td class="td-style">排気</td>
                                        <td class="td-style">不燃
                                            防止
                                            装置
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">給湯器</td>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">風呂釜</td>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">小型給湯器1</td>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-color td-style">小型給湯器2</td>
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-xs-4 table-margin">
                                <div class="col-xs-12">
                                    <div class="col-xs-3 no-padding">
                                        <p>型式</p>
                                    </div>
                                    <div class="col-xs-9">
                                        <input type="radio"><span>CF</span>
                                        <input type="radio"><span>FE</span
                                        <input type="radio"><span>BF</span
                                        <input type="radio"><span>FF</span
                                        <input type="radio"><span>RF</span
                                    </div>


                                </div>


                                <div class="col-xs-12">
                                    <div class="col-xs-3">

                                    </div>
                                    <div class="col-xs-9">
                                        <input type="radio"><span>良</span
                                        <input type="radio"><span>不良</span
                                        <input type="radio"><span>不能</span
                                        <input type="radio"><span>その他</span
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


            <div class="col-xs-12 border1 no-padding">
                <p class="backend">ガス漏れ警報器</p>
                <div class="col-xs-12">
                    <div class="col-xs-8">
                        <table class="table table-bordered col-xs-12">
                            <tr class="bg-color">
                                <td></td>
                                <td></td>
                                <td class="td-style">種別</td>
                                <td class="td-style">製造年月</td>
                                <td class="td-style">交換期限</td>
                                <td class="td-style">感度</td>
                                <td class="td-style">義務</td>
                                <td class="td-style">電話
                                    回線
                                    接続
                                </td>
                                <td class="td-style">メータ
                                    連動
                                </td>
                                <td class="td-style">位置</td>
                            </tr>
                            <tr>
                                <td class="bg-color">1</td>
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
                                <td class="bg-color">2</td>
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
                                <td class="bg-color">3</td>
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
                        </table>
                    </div>
                    <div class="col-xs-4">
                        <input type="radio"><span>良</span>
                        <input type="radio"><span>不良</span>
                        <input type="radio"><span>不能</span>
                        <input type="radio"><span>その他</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 border1 no-padding bottom-box">
                <p class="backend">部品交換</p>
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <p>ホースバンド</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-2">
                        <p>キャップ</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-2">
                        <p>ゴムホース箇所</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control border-radius">
                    </div>
                </div>


                <div class="col-xs-12 " style="margin-top:8px;">
                    <div class="col-xs-2">
                        <p>ゴムホース長さ</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-2">
                        <p>点検口</p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control border-radius">
                    </div>
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-2">

                    </div>

                </div>
                <div class="col-xs-12 border-margin border-margin-bottom">
                    <div class="col-xs-2">
                        <p>警報器番号</p>
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control border-radius">
                    </div>


                    <div class="col-xs-5">
                        <input type="radio">新規
                        <input type="radio">交換
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