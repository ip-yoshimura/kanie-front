<?php
include "header.php"
?>
<?php
include "sidebar.php"
?>
<div class="col-xs-10 col-md-10  no-padding">

    <div class="col-md-12 col-xs-12 no-padding body-background">
        <div class="head-p">
            <p>配送マスタ保守

            </p>
        </div>

        <form id="meter" action="/gas/meter-reading" method="POST">
            <div class="col-xs-12">
                <div class="col-xs-1 no-padding border-margin-exp">
                    <p>営業所コード</p>
                </div>

                <div class="col-xs-1 ">

                    <input id="officeCodeEndId" name="officeCodeEndId" class="form-control" type="text"
                           value="" onchange="$.fn.onInputValueChange('officeCodeEndId', 'officeCodeStartName')"/>

                </div>
                <div class="col-xs-3">
                    <div class="form-group">
                        <input id="officeCodeStartName" name="officeCodeStartName" placeholder=""
                               class="form-control" type="text" value=""/>
                    </div>
                </div>
                <div class="col-xs-1 border-margin-exp">
                    <p>配送順路</p>
                </div>
                <div class="col-xs-3 no-padding no-padding">
                    <div class="form-group">
                        <input id="companyIdEndName" name="companyIdEndName" placeholder=""
                               class="form-control"
                               type="text" value=""/>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end"> 配送設定</p>
                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding">
                        <p>供給区分</p>
                    </div>

                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="supplyDistinction" id="supplyDistinction" value="all"
                               onchange="$.fn.onInputValueChange('supplyDistinction', 'supplyDistinctionId')"><span> すべて</span>

                    </div>
                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="supplyDistinction" id="supplyDistinction" value="custom"
                               onchange="$.fn.onInputValueChange('supplyDistinction', 'supplyDistinctionId')"><span> 集合親</span>

                    </div>
                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="supplyDistinction" id="supplyDistinction" value="custom"
                               onchange="$.fn.onInputValueChange('supplyDistinction', 'supplyDistinctionId')"><span> 集合子</span>

                    </div>
                    <div class="col-xs-1"></div>
                    <div class="col-xs-2 border-margin-exp">
                        <p>配送親コード</p>
                    </div>
                    <div class="col-xs-2 ml-n-60">
                        <div class="form-group">
                            <input id="relativesEndName" name="relativesEndName" placeholder=""
                                   class="form-control"
                                   type="text" value=""
                                   onchange="$.fn.onInputValueChange('relativesEndName', 'relativesStartName')"/>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <input id="relativesStartName" name="relativesStartName" placeholder=""
                                   class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>

                </div>


                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>予測メータ</p>
                    </div>

                    <div class="col-xs-1 no-padding">


                        <input type="radio" name="predictiveMeter" id="predictiveMeter" value="all"
                               onchange="$.fn.onInputValueChange('predictiveMeter', 'predictiveMeterId')"><span> 自メータ</span>

                    </div>
                    <div class="col-xs-1 no-padding">


                        <input type="radio" name="predictiveMeter" id="predictiveMeter" value="custom"
                               onchange="$.fn.onInputValueChange('predictiveMeter', 'predictiveMeterId')"><span> 子メータ</span>

                    </div>

                    <div class="col-xs-2"></div>
                    <div class="col-xs-2 border-margin-exp">
                        <p>配集計メータ区分</p>
                    </div>
                    <div class="col-xs-1 ml-n-60">

                        <input type="radio" name="matchingSet" id="matchingSet" value="all"
                               onchange="$.fn.onInputValueChange('matchingSet', 'matchingSetId')"><span> 親のみ</span>
                    </div>
                    <div class="col-xs-1 no-padding">

                        <input type="radio" name="matchingSet" id="matchingSet" value="custom"
                               onchange="$.fn.onInputValueChange('matchingSet', 'matchingSetId')"><span> 子含む</span>
                    </div>
                </div>
                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding">
                        <p>配送区分</p>
                    </div>

                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="distributionDistinction" id="distributionDistinction" value="all"
                               onchange="$.fn.onInputValueChange('distributionDistinction', 'distributionDistinctionId')"><span> 予測</span>

                    </div>
                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="distributionDistinction" id="distributionDistinction" value="custom"
                               onchange="$.fn.onInputValueChange('distributionDistinction', 'distributionDistinctionId')"><span> 周期</span>

                    </div>
                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="distributionDistinction" id="distributionDistinction" value="custom"
                               onchange="$.fn.onInputValueChange('distributionDistinction', 'distributionDistinctionId')"><span> ブロック</span>
                    </div>
                    <div class="col-xs-1  no-padding">


                        <input type="radio" name="distributionDistinction" id="distributionDistinction" value="custom"
                               onchange="$.fn.onInputValueChange('distributionDistinction', 'distributionDistinctionId')"><span> 無配送</span>
                    </div>
                    <div class="col-xs-1">
                        <p>配送順路</p>
                    </div>
                    <div class="col-xs-2 ml-33">
                        <div class="form-group">
                            <input id="companyIdEndName" name="companyIdEndName" placeholder=" " class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-xs-1 border-margin-exp">
                        <p>備考</p>
                    </div>
                    <div class="col-xs-3 ml-n-40">
                        <div class="form-group">
                            <input id="companyIdEndName" name="companyIdEndName" placeholder=""
                                   class="form-control"
                                   type="text" value=""/>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xs-12 border1 no-padding">

                <p class="back-end">
                    設置状況</p>


                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding">
                        <p>
                            容器区分</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-6 no-padding"><input type="radio" name="differentiation" id="differentiation"
                                                                value="all"
                                                                onchange="$.fn.onInputValueChange('differentiation', 'differentiationId')"><span> シリンダ </span>
                        </div>
                        <div class="col-xs-6 no-padding"><input type="radio" name="differentiation" id="differentiation"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('differentiation', 'differentiationId')"><span> バルク</span>
                        </div>


                    </div>


                    <div class="col-xs-1">
                        <p>交換方式</p>
                    </div>
                    <div class="col-xs-4">
                        <div class="col-xs-3 no-padding"><input type="radio" name="exchangeMethod" id="exchangeMethod"
                                                                value="all"
                                                                onchange="$.fn.onInputValueChange('exchangeMethod', 'exchangeMethodId')"><span> 全数 </span>
                        </div>
                        <div class="col-xs-3 no-padding"><input type="radio" name="exchangeMethod" id="exchangeMethod"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('exchangeMethod', 'exchangeMethodId')"><span> 交互</span>
                        </div>
                        <div class="col-xs-3 no-padding"><input type="radio" name="exchangeMethod" id="exchangeMethod"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('exchangeMethod', 'exchangeMethodId')"><span> 片側 </span>
                        </div>
                        <div class="col-xs-3 no-padding"><input type="radio" name="exchangeMethod" id="exchangeMethod"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('exchangeMethod', 'exchangeMethodId')"><span> 適宜</span>
                        </div>


                    </div>
                    <div class="col-xs-1">
                        <p>予測方式</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="col-xs-6 no-padding"><input type="radio" name="predictiveMethod"
                                                                id="predictiveMethod" value="all"
                                                                onchange="$.fn.onInputValueChange('predictiveMethod', 'predictiveMethodId')"><span> 供給側   </span>
                        </div>
                        <div class="col-xs-6 no-padding"><input type="radio" name="predictiveMethod"
                                                                id="predictiveMethod" value="custom"
                                                                onchange="$.fn.onInputValueChange('predictiveMethod', 'predictiveMethodId')"><span> 全容量</span>
                        </div>


                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            設置容器構成</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   placeholder="z" value=""/>
                        </div>

                    </div>
                    <div class="col-xs-2 no-padding">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            次回交換容器</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                                   placeholder="z" value=""/>
                        </div>

                    </div>
                    <div class="col-xs-2 no-padding">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            中圧倍率</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                   type="number" value="0"/>
                        </div>

                    </div>


                    <div class="col-xs-1 ">
                        <p>切替区分</p>
                    </div>
                    <div class="col-xs-4 no-padding">
                        <div class="col-xs-3 no-padding"><input type="radio" name="cutDistinction" id="cutDistinction"
                                                                value="all"
                                                                onchange="$.fn.onInputValueChange('cutDistinction', 'cutDistinctionId')"><span> 全数</span>
                        </div>
                        <div class="col-xs-3 no-padding"><input type="radio" name="cutDistinction" id="cutDistinction"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('cutDistinction', 'cutDistinctionId')"><span> 交互</span>
                        </div>
                        <div class="col-xs-3 no-padding"><input type="radio" name="cutDistinction" id="cutDistinction"
                                                                value="custom"
                                                                onchange="$.fn.onInputValueChange('cutDistinction', 'cutDistinctionId')"><span> 片側</span>
                        </div>


                    </div>

                </div>
            </div>

            <div class="col-xs-12 border1 no-padding">
                <p class="back-end">
                    配送予測</p>
                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            前回配送日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="date"
                                   value=""/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            前回配送指針</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2 no-padding border-margin-exp">
                        <p>
                            配送時容器残量</p>
                    </div>


                </div>

                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            最終確認日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="date"
                                   value=""/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            最終指針</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            次回交換分</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp" >
                        <p>
                            引取容器残ガス</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            配送予測日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="date"
                                   value=""/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            予測指針</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            次回予備分</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            配送時食込量</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>


                </div>

                <div class="col-xs-12">

                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            配送指定日</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="date"
                                   value=""/>
                        </div>

                    </div>
                    <div class="col-xs-1 no-padding border-margin-exp">
                        <p>
                            予測警告</p>
                    </div>
                    <div class="col-xs-2">
                        <div class="form-group">
                            <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="number"
                                   value="0"/>
                        </div>

                    </div>
                    <div class="col-xs-2 no-padding border-margin-exp">
                        <p>
                            指定安全率・日数</p>
                    </div>
                    <div class="col-xs-3 no-padding">
                        <div class="col-xs-6 no-padding"><input type="radio" name="specifySelection"
                                                                id="specifySelection" value="all"
                                                                onchange="$.fn.onInputValueChange('specifySelection', 'specifySelectionId')"><span> システム共通</span>
                        </div>
                        <div class="col-xs-6 no-padding"><input type="radio" name="specifySelection"
                                                                id="specifySelection" value="custom"
                                                                onchange="$.fn.onInputValueChange('specifySelection', 'specifySelectionId')"><span> ユーザー指定</span>
                        </div>

                    </div>


                </div>
                <div class="col-xs-12">

                    <div class="col-xs-6 no-padding ">

                        <div class="col-xs-2 no-padding border-margin-exp">
                            <p>
                                本日分</p>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                       type="date" value=""/>
                            </div>

                        </div>
                        <div class="col-xs-2"></div>

                        <div>
                            <div class="col-xs-5 no-padding">
                                <img src="images/cap-gas.PNG">
                            </div>
                            <div class="col-xs-6 border-margin-exp">
                                <p>次回予測で指定使用量/日</p>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-6 no-padding"><input type="radio" name="specifiedSelection"
                                                                        id="specifiedSelection" value="all"
                                                                        onchange="$.fn.onInputValueChange('specifiedSelection', 'specifiedSelectionId')"><span> 使用しない</span>
                                </div>
                                <div class="col-xs-6 no-padding"><input type="radio" name="specifiedSelection"
                                                                        id="specifiedSelection" value="custom"
                                                                        onchange="$.fn.onInputValueChange('specifiedSelection', 'specifiedSelectionId')"><span> f使用する</span>
                                </div>


                            </div>
                            <div class="col-xs-6 no-padding border-margin">
                                <div class="col-xs-5 border-margin-exp">
                                    <p>消費量</p>
                                </div>
                                <div class="col-xs-7 no-padding">

                                    <div class="form-group">
                                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                               type="number" value="0"/>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="col-xs-5 no-padding border-margin-exp">
                                    <p>設置容器残量</p>
                                </div>
                                <div class="col-xs-7 no-padding">

                                    <div class="form-group">
                                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                               type="number" value="0"/>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-6">

                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-5 no-padding border-margin-exp">
                                    <p>交換容器残量</p>
                                </div>
                                <div class="col-xs-7 no-padding">

                                    <div class="form-group">
                                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                               type="number"  style="background:red; color:white;" value="0"/>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="col-xs-6 no-padding">

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>片側交換</p>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>安全率</p>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>共通</p>
                            </div>
                            <div class="col-xs-2 no-padding ">
                                <input type="number" value="0" class="form-control">
                            </div>
                            <div class="col-xs-2 border-margin-exp">
                                <p>指定</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="number" value="0" class="form-control">
                            </div>

                        </div>
                        <div class="col-xs-12 no-padding border-margin">
                            <div class="col-xs-2 no-padding">

                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>安全率</p>
                            </div>
                            <div class="col-xs-2 no-padding border-margin-exp">
                                <p>共通</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="text" class="form-control" placeholder="0B">
                            </div>
                            <div class="col-xs-2  border-margin-exp">
                                <p>指定</p>
                            </div>
                            <div class="col-xs-2 no-padding">
                                <input type="text" class="form-control" placeholder="0B">
                            </div>

                        </div>

                        <div class="col-xs-12 border-margin no-padding">
                            <div class="col-xs-4 no-padding border-margin-exp">
                                <p>交換容器残量</p>
                            </div>
                            <div class="col-xs-5">

                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="number" value="0"/>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-4 no-padding border-margin-exp">
                                <p>燃焼器具取付日</p>
                            </div>
                            <div class="col-xs-5">

                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="date" value=""/>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-4 no-padding border-margin-exp">
                                <p>取付燃焼器具パターン</p>
                            </div>
                            <div class="col-xs-2">

                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="text" value=""/>
                                </div>

                            </div>
                            <div class="col-xs-6">

                                <div class="form-group">
                                    <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control"
                                           type="tel" value=""/>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-4 no-padding ">
                                <p>配送伝票状態</p>
                            </div>
                            <div class="col-xs-8">
                                <div class="col-xs-4 no-padding"><input type="radio" name="deliveryInvoice"
                                                                        id="deliveryInvoice" value="all"
                                                                        onchange="$.fn.onInputValueChange('deliveryInvoice', 'deliveryInvoiceId')"><span> 発行済</span>
                                </div>
                                <div class="col-xs-4 no-padding"><input type="radio" name="deliveryInvoice"
                                                                        id="deliveryInvoice" value="custom"
                                                                        onchange="$.fn.onInputValueChange('deliveryInvoice', 'deliveryInvoiceId')"><span> 入力更新済</span>
                                </div>
                                <div class="col-xs-4 no-padding"><input type="radio" name="deliveryInvoice"
                                                                        id="deliveryInvoice" value="custom"
                                                                        onchange="$.fn.onInputValueChange('deliveryInvoice', 'deliveryInvoiceId')"><span> 発行しない</span>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-12 bottom-box">
                <div class="col-xs-2 no-padding">

                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                               value=""/>
                    </div>

                </div>
                <div class="col-xs-2">

                    <div class="form-group">
                        <input id="consumerCodeEndName" name="consumerCodeEndName" class="form-control" type="text"
                               value=""/>
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

</body>

</html>