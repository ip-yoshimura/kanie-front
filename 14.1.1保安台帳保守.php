<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
        <div class="col-xs-10 col-md-10 col-xs-12 no-padding body-background">

                <div class="head-p">
                    <p>
                        保安台帳保守</p>
                </div>
                <div class="col-xs-12">


                    <div class="col-xs-1 no-padding">
                        <p>消費者コード

                        </p>
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-xs-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 no-padding font-exp-size1">
                        <p>営業所・販売店</p>
                    </div>
                    <div class="col-xs-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1" style="padding:0;margin:0;">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-xs-1 td-style" style="color: red;" >
                         <p>閲覧</p>
                    </div>
                </div>

                <!--tab -part-->

                <div class="col-xs-12 menu-border border-margin bottom-box no-padding">

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">消費者（K)</a></li>
                        <li><a data-toggle="tab" href="#menu1">供給設備1（A）</a></li>
                        <li><a data-toggle="tab" href="#menu2">供給設備2（B)</a></li>
                        <li><a data-toggle="tab" href="#menu3">消費設備1（S）</a></li>
                        <li><a data-toggle="tab" href="#menu4">消費設備2（T）</a></li>
                        <li><a data-toggle="tab" href="#menu5">安全器具（D)</a></li>
                        <li><a data-toggle="tab" href="#menu6">埋設管（M）</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active table-margin tab-scroll">
                            <div class="col-xs-12 border1 no-padding  bottom-box"  >
                            <p class="backend">消費者の状況</p>
                            <div class="col-xs-12">
                                <div class="col-xs-1 no-padding"><p>カナ氏名</p></div>
                                <div class="col-xs-5"><input type="text" class="form-control"></div>
                                <div class="col-xs-1 no-padding"><p>入居区分</p></div>
                                <div class="col-xs-4">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 入居（開栓）</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 空家（閉栓）</span></div>



                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>
                                <div class="col-xs-1 no-padding">
                                    <p>閉栓日付</p>
                                </div>
                                <div class="col-xs-3"><input type="date" class="form-control"></div>


                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>
                                <div class="col-xs-1 no-padding">
                                    <p>閉栓日付</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 液石法</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 高圧法</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> (ガス事業法）</span></div>


                                </div>


                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>集合親コード</p></div>
                                <div class="col-xs-3"><input type="date" class="form-control"></div>
                                <div class="col-xs-2"> </div>
                                <div class="col-xs-1 no-padding">
                                    <p>用途区分</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 家庭用</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span>業務用</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> その他</span></div>

                                </div>


                            </div>
                            <div class="col-xs-12 border-margin"  >
                                <div class="col-xs-1 no-padding"><p>住所1</p></div>
                                <div class="col-xs-5"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>供給区分</p>
                                </div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>"単独戸建</option>
                                        <option>単独共同</option>
                                        <option>集合戸建</option>
                                        <option>集合共同</option>
                                        <option>特定単独</option>
                                        <option>特定集団戸建</option>
                                        <option>特定集団共同</option>
                                        <option>質量販売"</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-xs-12 border-margin"  >
                                <div class="col-xs-1 no-padding"><p>住所2</p></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>
                                <div class="col-xs-1"> </div>
                                <div class="col-xs-1 no-padding">
                                    <p>親子</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 空白:該当なし</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>親</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 個</span></div>

                                </div>


                            </div>
                            <div class="col-xs-12 border-margin"  >
                                <div class="col-xs-1 no-padding"><p>目標</p></div>
                                <div class="col-xs-5"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>施設区分</p>
                                </div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control">
                                </div>

                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>目標</p></div>
                                <div class="col-xs-5"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>建築物区分1</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-5 no-padding"><input type="radio" id="" name=""><span> 鉄筋コンクリート</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>木造</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> (その他）</span></div>


                                </div>


                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>地図コード</p></div>
                                <div class="col-xs-2  "><input type="text" class="form-control"></div>
                                <div class="col-xs-1 no-padding"><p>図面番号</p></div>
                                <div class="col-xs-2  "><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding  ">
                                    <p>建築物区分1</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 200㎡以上</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 200㎡未満</span></div>


                                </div>


                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>保安機関</p></div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>世帯区分</p>
                                </div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>"一般世帯</option>
                                        <option>一人住まい世帯</option>
                                        <option>老人世帯</option>
                                        <option>外国人世帯</option>
                                        <option>一人住まい・老人世帯</option>
                                        <option>一人住まい・外国人世帯</option>
                                        <option>老人・外国人世帯</option>
                                        <option>一人住まい・老人・外国人世帯"</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-xs-12 border-margin"  >
                                <div class="col-xs-1 no-padding"><p>保安担当者</p></div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>転倒防止</p>
                                </div>

                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>

                                </div>

                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-1 no-padding"><p>保安担当者</p></div>
                                <div class="col-xs-1"><input type="text" class="form-control"></div>
                                <div class="col-xs-4"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>昇温防止</p>
                                </div>

                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>

                                </div>

                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-2 no-padding"><p>販売店からの距離</p></div>

                                <div class="col-xs-4"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>保安業務</p>
                                </div>

                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 行う</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 行わない</span></div>

                                </div>

                            </div>
                            <div class="col-xs-12 border-margin">
                                <div class="col-xs-2 no-padding"><p>大規模料理飲食店該当</p></div>

                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 該当</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>  非該当</span></div>

                                </div>

                                <div class="col-xs-1 no-padding">
                                    <p>保安確保機器</p>
                                </div>

                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>該当</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>  非該当</span></div>

                                </div>

                            </div>
                            <div class="col-xs-12 border-margin"  >
                                <div class="col-xs-2 no-padding"><p>販売店からの距離</p></div>

                                <div class="col-xs-4"><input type="text" class="form-control"></div>

                                <div class="col-xs-1 no-padding">
                                    <p>期限年月</p>
                                </div>

                                <div class="col-xs-5">
                                    <input type="date" placeholder="-----">
                                </div>

                            </div>
                            <div class="col-xs-12" style="margin-top:5px;">
                                <div class="col-xs-2 no-padding"><p>認定対象消費者区分</p></div>

                                <div class="col-xs-2">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 該当</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 非該当</span></div>


                                </div>

                                <div class="col-xs-2">

                                </div>

                                <div class="col-xs-4">


                                </div>

                            </div>
                            <div class="col-xs-12" style="margin-top:5px;">
                                <div class="col-xs-2 no-padding"><p>豪雪・地震対策区分</p></div>

                                <div class="col-xs-5">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>  該当なし</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 地震対策地域</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 豪雪対策地域</span></div>

                                </div>



                            </div>

                            <div class="col-xs-3">


                            </div>
                        </div>
                        </div>
                        <!--First Tab-->

                        <!--second Tab-->
                        <div id="menu1" class="tab-pane fade table-margin no">
                            <div class="col-xs-12 no-padding tab-scroll" style="">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">貯蔵設備</p>
                            <div class="col-xs-12">
                                <div class="col-xs-1 no-padding">
                                    <p>容器</p>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>kg</p>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>本</p>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>kg</p>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>本</p>
                                </div>
                                <div class="col-xs-1">
                                    <p>貯蔵量</p>
                                </div>

                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>

                            </div>

                            <div class="col-xs-12 border-margin">


                                <div class="col-xs-1 no-padding">
                                    <p>貯槽</p>
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>貯槽</p>
                                </div>
                                <div class="col-xs-1">
                                    <p>容量</p>
                                </div>

                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>kg</p>
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <p>合計貯蔵量</p>
                                </div>

                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <p>kg</p>
                                </div>
                            </div>
                                <div class="col-xs-12">
                                <div class="col-xs-12 border1 no-padding border-margin">
                                    <p class="back-end">バルク</p>
                               <div class="col-xs-12 table-scroll" style="">


                                <table class="table table-bordered col-xs-12">
                                    <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th></th>
                                            <th>設置区分</th>
                                            <th>容量（kg）</th>
                                            <th>形態</th>
                                            <th>基</th>
                                            <th>設置年月</th>
                                            <th>製造年月</th>
                                            <th>貯槽番号</th>
                                            <th></th>
                                            <th>（安全弁）型式</th>
                                            <th>製造年月</th>
                                            <th>番号</th>
                                            <th>交換年月</th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">1</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">2</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">3</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">4</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">5</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                            <div class="col-xs-12 border-margin-bottom">

                                <div class="col-xs-2 col-xs-offset-2 ">
                                     <input type="text" class="form-control">
                                </div>
                                <div class="col-xs-1  no-padding">
                                        <p>設置区分</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 地上</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 地下</span></div>
                                </div>

                                <div class="col-xs-1 no-padding"><p>形態</p></div>
                                <div class="col-xs-2 no-padding">

                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 縦型</span></div>
                                <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 横型</span></div>

                                </div>
                            </div>
                                </div>
                            </div>

                        </div>

                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">供給管</p>
                                <div class="col-xs-12">
                                 
                                </div>
                                 
                                <div class="col-xs-12">
                                    <div class="col-xs-1 no-padding">
                                        <p>圧力</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 高圧</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 中圧</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 低圧</span></div>

                                        </div>
                                        <div class="col-xs-1 no-padding">
                                                <p>埋設</p>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 露出管</span></div>
                                                <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>埋設管</span></div>

                                                      
                                                </div>

                                </div>
                                <div class="col-xs-12">
                                        <div class="col-xs-1 no-padding">
                                            <p>設置 </p>
                                        </div>
                                         
                                                <div class="col-xs-10">
                                                    <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> 無償貸与</span></div>
                                                    <div class="col-xs-1 no-padding"><input type="radio" id="" name=""><span> 有償施工</span></div>
                                                    <div class="col-xs-1 no-padding"><input type="radio" id="" name=""><span> :客先施工</span></div>
                                                    <div class="col-xs-1 no-padding"><input type="radio" id="" name=""><span> その他</span></div>

                                                          
                                                    </div>
    
                                    </div>

                                <div class="col-xs-12 table-scroll">
                                <table class="table table-bordered col-xs-11">
                                    <thead>
                                        <sr>
                                            <tr class="bg-color">
                                                <td></td>
                                                <td></td>
                                                <td class="td-style">圧力</td>
                                                <td></td>
                                                <td class="td-style">埋設</td>
                                                <td></td>
                                                <td class="td-style">種別</td>
                                                <td class="td-style">設置年月</td>
                                                <td class="td-style">交換期限</td>
                                                <td class="td-style">A</td>
                                                <td class="td-style">長さ</td>
                                                <td class="td-style">単位</td>
                                                <td class="td-style">設置方法</td>

                                            </tr>
                                            <tr>
                                                <td class="bg-color td-style">1</td>
                                                <td></td>
                                                <td>圧力</td>
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
                                                <td class="bg-color td-style">2</td>
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
                                                <td class="bg-color td-style">3</td>
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
                                                <td class="bg-color td-style">4</td>
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
                                        </sr>
                                    </thead>
                                </table>
                            </div>
                            </div>

                            <div class="col-xs-12 border1 no-padding">
                                <p class="backend">ホース</p>
                                <div class="col-xs-7 table-scroll">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-color">
                                                <th></th>
                                                <th></th>
                                                <th>圧力</th>
                                                <th>圧力</th>
                                                <th>交換期限</th>
                                                <th>長さ</th>
                                                <th>単位</th>
                                                <th>本</th>
                                                <th>安全機構</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th class="bg-color">1</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">2</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">3</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">4</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th class="bg-color">5</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        <tr>
                                            <th class="bg-color">6</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>







                                    </table>
                                </div>
                                <div class="col-xs-5">
                                    <div class="col-xs-12">
                                     <div class="col-xs-4">
                                         <p>圧力</p>
                                     </div>  
                                     <div class="col-xs-8">
                                         <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 高圧f</span></div>
                                         <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 低圧</span></div>

                                        </div>  
                                              
                                    </div>
                                    <div class="col-xs-12">
                                            <div class="col-xs-4">
                                                    <p>安全機構</p>
                                                </div>  
                                                <div class="col-xs-8">
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>

                                                   </div>
                                    </div>
                                    
                                </div>
                                 

                            </div>
                            <div class="col-xs-12 no-padding bottom-box">
                                <div class="col-xs-9 no-padding">
                                    <div class="col-xs-12 border1 no-padding">
                                        <p class="backend">バルブ等</p>
                                <div class="col-xs-5" style="padding:0;">

                                  <div class="col-xs-12 table-scroll">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-color">
                                                <th></th>
                                                <th></th>
                                                <th>圧力</th>
                                                <th></th>
                                                <th>型式</th>
                                                <th>個数</th>
                                                <th>製造年月</th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">1</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">2</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">3</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">4</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">5</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <th class="bg-color">6</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                </div>
                                <div class="col-xs-4" style="margin-top:30px;">
                                     
                                    <div class="col-xs-12">
                                            <div class="col-xs-3 no-padding">
                                                <p>圧力</p>
                                                </div>
                                                <div class="col-xs-9">
                                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 高圧</span></div>
                                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 中圧</span></div>

                                                    </div>
                                    </div>
                                </div>

                                </div>
                            </div>



                                <div class="col-xs-3">
                                    <div class="col-xs-12 border1 no-padding">
                                        <p class="back-end">中間コック（低圧）</p>
                                        <div class="col-xs-12 table-scroll ">
                                    <table class="table table-bordered" <thead>
                                        <tr class="bg-color">
                                            <th class=""></th>
                                            <th>A</th>
                                            <th>個数</th>
                                            <th>製造年月</th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">1</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">2</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">3</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">4</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">5</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        <tr>
                                            <th class="bg-color">5</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                        </thead>
                                    </table>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!--third Tab-->
                        <div id="menu2" class="tab-pane fade border-margin tab-scroll">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">調整器等</p>
                            <div class="col-xs-12">
                                    
                                            <div class="col-xs-1 no-padding">
                                                <p>区分</p>
                                                </div>
                                                <div class="col-xs-10">
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 警報機連動遮断装置</span></div>
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> ガス放出防止器</span></div>
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 耐震自動ガス遮断装置</span></div>
                                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 気化器</span></div>

                                                    </div>
                                     
                                 

                            </div>
                                <div class="col-xs-12 table-scroll">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-color">
                                        <th></th>
                                        <th>区分</th>
                                        <th></th>
                                        <th>種別</th>
                                        <th></th>
                                        <th>型式</th>
                                        <th>個数<br>
                                            容量</th>
                                        <th>ロット番号</th>
                                        <th>製造年月</th>
                                        <th>期限年数</th>
                                        <th>交換期限</th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th>メーカ</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                            </table>
                            </div>
                        </div>
                            <div class="col-xs-12 border1 no-padding bottom-box">
                                <p class="back-end">ガスメータ</p>
                            <div class="col-xs-12">

                                <div class="col-xs-1 no-padding font-exp-size1">
                                    <p>ガスメータ有無</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>

                                     

                                </div>
                                <div class="col-xs-1 no-padding">
                                    <p>設定区分</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2">
                                    <select class="form-control">
                                        <option value="">自動</option>
                                        <option value="">Ⅰ</option>
                                        <option value="">Ⅱ</option>
                                        <option value="">Ⅲ</option>
                                        <option value="">L</option>
                                        <option value="">M</option>
                                        <option value="">S</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin ">

                                <div class="col-xs-1 no-padding">
                                    <p>種別</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <p>S型調査日</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2">

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-1 no-padding">
                                    <p>メーカ</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1 no-padding">
                                    <p>設定内容</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 標準</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 機能</span></div>
                                    <div class="col-xs-5 no-padding"><input type="radio" id="" name=""><span> 圧力監視等</span></div>

                                         
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-1 no-padding">
                                    <p>型式</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1 no-padding font-exp-size1">
                                    <p>ストーブの有無</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>
                                     

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-1 no-padding">
                                    <p>容量</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-xs-2 no-padding col-xs-offset-2">
                                    <p>警報機との接続状況</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 接続</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 併設</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span class="font-exp-size2"> DAアダプタ</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 不要</span></div>
                                     

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-1 no-padding">
                                    <p>設置年月</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2 no-padding col-xs-offset-1">
                                    <p>集中監視機能の有無</p>
                                </div>
                                <div class="col-xs-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin no">

                                <div class="col-xs-1 no-padding">
                                    <p>検定期限</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-xs-1">

                                </div>
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-1">

                                </div>
                                <div class="col-xs-2">

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin">

                                <div class="col-xs-1 no-padding">
                                    <p>入口</p>
                                </div>
                                <div class="col-xs-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-3">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 左</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 右</span></div>

                                </div>
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-1">

                                </div>
                                <div class="col-xs-2">

                                </div>
                            </div>
                            <div class="col-xs-12 border-margin border-margin-bottom">

                                <div class="col-xs-1 no-padding">
                                    <p>製造番号</p>
                                </div>
                                <div class="col-xs-3">
                                    <input type="number" class="form-control">
                                </div>


                            </div>
                        </div>

                        </div>
                        <!--third Tab-->
                        <!--fourth Tab-->
                        <div id="menu3" class="tab-pane fade tab-scroll1 table-margin">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">消費設備配管</p>
                            <div class="col-xs-12">
                                 
                                <div class="col-xs-1 no-padding">
                                        <p>圧力</p>
                                    </div>
                                     
                                    <div class="col-xs-3">
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 高圧</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 中圧</span></div>
                                        <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 低圧</span></div>
                                         

                                    </div>
                                    <div class="col-xs-1 no-padding">
                                            <p>埋設</p>
                                        </div>
                                         
                                        <div class="col-xs-2">
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 露出管</span></div>
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 埋設管</span></div>
                                             

                                             
                                        </div>
                                <div class="col-xs-1 no-padding">
                                    <p>設置</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無償貸与</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有償施工</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 客先施工</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> その他</span></div>



                                </div>

                            </div>
                            <div class="col-xs-12">

                                         

                            </div>
                                <div class="col-xs-12 table-scroll">
                            <table class="table table-bordered">
                                <thead>
                                    <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th></th>
                                            <th>圧力</th>
                                            <th></th>
                                            <th>埋設</th>
                                            <th></th>
                                            <th>種別</th>
                                            <th>設置年月</th>
                                            <th>交換期限</th>
                                            <th>A</th>
                                            <th>長さ</th>
                                            <th>単位</th>
                                            <th>設置方法</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>

                            </table>
                            </div>
                        </div>
                        </div>
                        <!--fourth Tab-->
                        <!--fifth Tab-->
                        <div id="menu4" class="tab-pane fade table-margin tab-scroll">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">燃焼器具</p>


                            <div class="col-xs-12">
                                 
                                <div class="col-xs-1 no-padding">
                                        <p>購入先</p>
                                    </div>
                                     
                                    <div class="col-xs-3">
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 無償貸与</span></div>
                                        <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 有償施工</span></div>

                                         
                                         
                                    </div>
                                <div class="col-xs-1 no-padding font-exp-size">
                                    <p>年月確認 空白.</p>
                                </div>

                                <div class="col-xs-4">
                                    <div class="col-xs-5 no-padding"><input type="radio" id="" name=""><span> ネイ像年月入力</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 未調査f</span></div>
                                    <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 不明</span></div>



                                </div>
                                    <div class="col-xs-1 no-padding ">
                                            <p>立消〜過熱</p>
                                        </div>
                                         
                                        <div class="col-xs-2">
                                            <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                            <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 無</span></div>
                                            <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> 該当なし</span></div>


                                             
                                             
                                        </div>







                            </div>
                            <div class="col-xs-10 table-scroll">


                            <table class="table table-bordered" class="">
                                <thead>
                                    <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th></th>
                                            <th>燃焼器具種別<br>
                                                メーカー</th>
                                            <th>型式<br>
                                                製造番号</th>
                                            <th>台数
                                                購入先</th>
                                            <th>消費量<br>
                                                年月確認</th>
                                            <th>設置年月<br>
                                                製造年月</th>
                                            <th>立消</th>
                                            <th>不燃防</th>
                                            <th>過熱</th>

                                        </tr>
                                    </thead>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>


                            </table>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-4"></div>
                                <div class="col-xs-2 border-margin-bottom">
                                    <p>消費量合計</p>
                                </div>
                                <div class="col-xs-2"><input type="number" class="form-control"></div>
                                <div class="col-xs-1"> kw</div>
                                <div class="col-xs-3"> </div>


                            </div>
                        </div>

                            <div class="col-xs-12 border1 no-padding bottom-box">
                            <p class="backend">末端ガス栓</p>
                            <div class="col-xs-12">
                                <div class="col-xs-1 no-padding">
                                    <p>設置施設</p>    
                                </div>
                                <div class="col-xs-1">
                                        <input type="number" class="form-control">
                                </div>
                                <div class="col-xs-2">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> 業務施設</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> 指導施設</span></div>


                                </div>
                                <div class="col-xs-1 no-padding">
                                        <p>交換対象個数</p> 
                                </div>
                                <div class="col-xs-1 ">
                                        <input type="number" class="form-control">
                                </div>

                                <div class="col-xs-1 no-padding">
                                    <p>使用状況</p>
                                </div>
                                <div class="col-xs-2 no-padding">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 接続</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 未接続</span></div>


                                </div>
                                <div class="col-xs-1 no-padding font-exp-size1">
                                    <p>安全〜アダプタ</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                    <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 無</span></div>


                                </div>





                            </div>
                            <div class="col-xs-12 table-scroll">
                                     
                                         

                                     
                                     

                            <table class="table table-bordered">
                                <thead>
                                    <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th></th>
                                            <th>末端ガス栓種別<br>
                                                    接続管種別</th>
                                            <th>数<br>
                                                    本</th>
                                            <th>埋設</th>
                                            <th>使用<br>
                                                    器具</th>
                                            <th>設置</th>

                                            <th> </th>
                                            <th>メーカ</th>
                                           
                                            <th>型式</th>
                                            <th>製造番号</th>
                                            <th>安全<br>
                                                    検査孔<br>
                                                    アダプタ</th>
                                             
                                        </tr>
                                    </thead>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        
                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                         
                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                       
                                    </tr>

                            </table>
                            </div>
                            </div>
                        </div>
                        <!--fifth Tab-->
                        <!--six Tab-->
                        <div id="menu5" class="tab-pane fade table-margin tab-scroll">
                            <div class="col-xs-12 border1 no-padding">
                            <p class="backend">警報器</p>


                                <div class="col-xs-12">
                                <div class="col-xs-12 border1 no-padding">
                                    <p class="back-end">ガス漏れ警報器</p>
                                <div class="col-xs-12">
                                <div class="col-xs-1  no-padding">
                                   <p>設置施設区分</p>
                                </div>
                                <div class="col-xs-1">
                                 <p> <input type="number" class="form-control"</p>
                                </div>
                                <div class="col-xs-4">
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 義務施設</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 指導施設</span></div>
                                    <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 不要施設</span></div>


                                         
                                       </div>
                                       <div class="col-xs-1 no-padding">
                                            <p>必要個数</p>
                                           </div>
                                           <div class="col-xs-1">
                                                <p> <input type="number" class="form-control"</p>
                                               </div>
                                               <div class="col-xs-1 no-padding">
                                                    <p>設置個数</p>
                                                   </div>
                                                   <div class="col-xs-1">
                                                        <p> <input type="number" class="form-control"</p>
                                                       </div>
                            </div>
                            </div>
                            </div>
                             
                            
                            <div class="col-xs-12">
                                
                               
                               <div class="col-xs-1 no-padding">
                                    <p>区分 空白</p>
                                   </div>
                                   <div class="col-xs-4">
                                       <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 警報機</span></div>
                                       <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> CO警報器</span></div>
                                       <div class="col-xs-4 no-padding"><input type="radio" id="" name=""><span> 不要施設</span></div>
                                                                                                                                                                           

                               </div>
                               <div class="col-xs-1 no-padding">
                                    <p>供消 </p>
                                   </div>
                                   <div class="col-xs-4">
                                       <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 供給設備</span></div>
                                       <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 消費設備</span></div>

                                                                                                                                                                           

                                        
                                 
                               </div>
                                 
                            </div>
                            <div class="col-xs-12">
                                    <div class="col-xs-1 no-padding">
                                            <p>設置方法</p>
                                           </div>
                                           <div class="col-xs-5">
                                               <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> リース</span></div>
                                               <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>無償貸与</span></div>
                                               <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 自社販売</span></div>
                                               <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> 客先所有</span></div>
                                               <div class="col-xs-2 no-padding"><input type="radio" id="" name=""><span> その他</span></div>

                                                                                                                                                                                   

                                                
                                         
                                       </div>
                                       <div class="col-xs-1 no-padding">
                                            <p>連動単独</p>
                                           </div>
                                           <div class="col-xs-3">
                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span class="font-exp-size"> 単独</span></div>
                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 連動</span></div>
                                                                                                                                                                                   

                                                
                                         
                                       </div>
                            </div>
                                <div class="col-xs-12 table-scroll">
                            <table class="table table-bordered table-scroll " class="">
                                <thead>
                                    <thead>
                                        <tr class="bg-color">
                                            <th></th>
                                            <th>区分</th>
                                            <th>供消 
                                                 </th>
                                            <th>型式 
                                                 </th>
                                            <th> </th>
                                            <th>種別<br>
                                                メーカ</th>
                                            <th> 
                                                 </th>
                                            <th>型式<br>設置方法
                                                </th>
                                            <th>連動<br>
                                                    単独</th>
                                            <th>個数<br>
                                                    製造番号</th>
                                            <th>製造年月</th>
                                            <th>期限年数</th>

                                        </tr>
                                    </thead>
                                    <tr>
                                        <th class="bg-color">1</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">2</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                    <tr>
                                        <th class="bg-color">3</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>


                                    </tr>
                                    <tr>
                                        <th class="bg-color">4</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>


                            </table>
                            </div>
                        </div>
                            <div class="col-xs-12 border1 no-padding bottom-box">
                                <p class="backend">集中監視端末</p>
                            <div class="col-xs-12">


                                    <div class="col-xs-1 no-padding">
                                            <p>個数</p>
                                           </div>
                                           <div class="col-xs-4">
                                               <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 接続中</span></div>
                                               <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 未接続</span></div>
                                               <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 休止中</span></div>


                                       </div>
                                       <div class="col-xs-1 no-padding">
                                            <p>伝送</p>
                                           </div>
                                           <div class="col-xs-4">
                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 端末発呼</span></div>
                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 双方向</span></div>
                                                                                                                                                                                   

                                       </div>

                                </div>
                                <div class="col-xs-12 table-scroll">
                                <table class="table table-bordered" class="" style="width:80%;">
                                    <thead>
                                        <thead>
                                            <tr class="bg-color">
                                                 <th></th>
                                                 <th></th>
                                                 <th class="col-xs-3">種別</th>
                                                 <th></th>
                                                 <th class="col-xs-3">メーカ</th>
                                                 <th></th>
                                                 <th class="col-xs-2">型式</th>
                                                 <th>個数</th>
                                                 <th>接続</th>
                                                 <th>伝送</th>
                                                 <th>製造年月</th>
                                                 <th>対象施設</th>
    
                                            </tr>
                                        </thead>
                                        <tr>
                                            <th class="bg-color">1</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
    
                                        </tr>
                                        <tr>
                                            <th class="bg-color">2</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
    
                                        </tr>
                                        <tr>
                                            <th class="bg-color">3</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
    
    
                                        </tr>
                                        <tr>
                                            <th class="bg-color">4</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
    
                                        </tr>
    
    
                                </table>
                                </div>
                            </div>
                        </div>
                        <!--six Tab-->
                        <!--seven Tab-->
                        <div id="menu6" class="tab-pane fade table-margin tab-scroll">
                             <div class="col-xs-12 no-padding">
                             <div class="col-xs-1 no-padding">
                              <p>対象施設</p>
                             </div>
                             <div class="col-xs-2">
                                     <input type="text" class="form-control">
                                   </div>
                                   <div class="col-xs-4">
                                        <input type="text" class="form-control">
                                       </div>
                                       <div class="col-xs-4">
                                            <p></p>
                                           </div>
                             </div>
                             <div class="col-xs-12 border-margin no-padding">
                                    <div class="col-xs-1 no-padding">
                                     <p>建築物構造</p>
                                    </div>
                                    <div class="col-xs-2">
                                            <input type="text" class="form-control">
                                          </div>
                                          <div class="col-xs-8">
                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 鉄筋コンクリート</span></div>
                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 木造</span></div>
                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> その他）</span></div>

                                              </div>
                                              
                                    </div>
                                    <div class="col-xs-12 border-margin no-padding ">
                                            <div class="col-xs-1 no-padding font-exp-size1">
                                             <p>漏洩検知装置設置</p>
                                            </div>
                                            <div class="col-xs-2">
                                                    <input type="text" class="form-control">
                                                  </div>
                                                  <div class="col-xs-8">
                                                      <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 設置施設 </span></div>
                                                      <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 未設置施設</span></div>

                                                        
                                                      </div>
                                                      
                                            </div>

                                            <div class="col-xs-12 border-margin no-padding">
                                                    <div class="col-xs-1 no-padding font-exp-size1">
                                                     <p>漏洩検知装置種別</p>
                                                    </div>
                                                    <div class="col-xs-2">
                                                            <input type="text" class="form-control">
                                                          </div>
                                                          <div class="col-xs-8">
                                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> マイコン型</span></div>
                                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> S型</span></div>
                                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span> 漏えい検知装置</span></div>
                                                              <div class="col-xs-3 no-padding"><input type="radio" id="" name=""><span>その他</span></div>

                                                              </div>
                                                              
                                                    </div>
                                                    <div class="col-xs-12 border-margin no-padding">
                                                            <div class="col-xs-1 no-padding font-exp-size1">
                                                             <p>漏洩検知設置年月</p>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                    <input type="text" class="form-control">
                                                                  </div>
                                                                  <div class="col-xs-4">
                                                                        
                                                                      </div>
                                                                      
                                                    </div>
                                                    <div class="col-xs-12 border-margin no-padding">
                                                            <div class="col-xs-1 no-padding">
                                                             <p>前回調査日</p>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                    <input type="text" class="form-control">
                                                                  </div>
                                                                  <div class="col-xs-4">
                                                                        
                                                                      </div>
                                                                      
                                                    </div>
                                                    <div class="col-xs-12 border-margin no-padding">
                                                            <div class="col-xs-1 no-padding">
                                                             <p>今回調査日</p>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                    <input type="date" class="form-control">
                                                                  </div>
                                                                  <div class="col-xs-4">
                                                                        
                                                                      </div>
                                                                      
                                                    </div>
                                                    <div class="col-xs-12 no-padding border-margin">
                                                     <div class="col-xs-1 no-padding">
                                                      <p>共消 </p>
                                                     </div>
                                                     <div class="col-xs-3">
                                                         <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 供給設備</span></div>
                                                         <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 消費設備</span></div>

                                                     </div>
                                                     <div class="col-xs-1 no-padding">
                                                            <p>漏洩  </p>
                                                           </div>
                                                           <div class="col-xs-2">
                                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                                               <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 無備</span></div>

                                                           </div>
                                                           <div class="col-xs-1 no-padding">
                                                                <p>地盤沈下 </p>
                                                               </div>
                                                               <div class="col-xs-2">
                                                                   <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 有</span></div>
                                                                   <div class="col-xs-6 no-padding"><input type="radio" id="" name=""><span> 無し</span></div>

                                                               </div>
                                                    </div>
                                                    <table class="table table-bordered">
                                                      <tr class="bg-color">
                                                          <td></td>
                                                          <td class="td-style">共消</td>
                                                          <td></td>
                                                          <td class="col-xs-2 td-style">種別</td>
                                                          <td class="td-style">A</td>
                                                          <td class="td-style">設置年月</td>
                                                          <td class="td-style">漏洩（前回）</td>
                                                          <td class="td-style">地盤沈下（前回）</td>
                                                          <td class="td-style">漏洩（今回）</td>
                                                          <td class="td-style">地盤沈下（今回）</td>
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
                                                                    </tr>
                                                    </table>
                        </div>
                        <!--seven Tab-->
                    </div>



















                </div>





            <!--tab -part-->






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